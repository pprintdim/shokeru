<?php
require __DIR__.'/../src/CsvHelper.php';
$cfg=require '/Applications/MAMP/htdocs/shokeru/app_config.php';
$UA='Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)';
function fetch($u,$UA){$c=curl_init($u);curl_setopt_array($c,[CURLOPT_RETURNTRANSFER=>1,CURLOPT_FOLLOWLOCATION=>1,CURLOPT_TIMEOUT=>30,CURLOPT_ENCODING=>'',CURLOPT_USERAGENT=>$UA]);$b=curl_exec($c);curl_close($c);return $b?:'';}

$rows=CsvHelper::read(__DIR__.'/../data/products.csv');
$charGroup=[];   // char => [group => count]
$groupOrder=[];  // group => min index
$i=0;$tot=count($rows);
foreach($rows as $r){
  $i++;
  $html=fetch($r['product_url'],$UA);
  if(!$html){usleep(300000);continue;}
  $d=new DOMDocument();@$d->loadHTML('<?xml encoding="utf-8">'.$html);$x=new DOMXPath($d);
  $spec=$x->query('//*[@id="specific"]')->item(0);
  if(!$spec){usleep(300000);continue;}
  $curGroup='Характеристики';$ord=0;
  foreach($x->query('.//strong | .//div[span[2]]',$spec) as $n){
    if($n->nodeName==='strong'){
      $curGroup=trim(preg_replace('/\s+/',' ',$n->textContent));
      if($curGroup!=='' && !isset($groupOrder[$curGroup])) $groupOrder[$curGroup]=$ord++;
    } else {
      $sp=$n->getElementsByTagName('span');
      if($sp->length>=2){
        $k=rtrim(trim($sp->item(0)->textContent),': ');
        if($k==='')continue;
        $charGroup[$k][$curGroup]=($charGroup[$k][$curGroup]??0)+1;
      }
    }
  }
  if($i%40===0) fwrite(STDERR,"[$i/$tot] групп=".count($groupOrder)." характеристик=".count($charGroup)."\n");
  usleep(300000);
}
// мажоритарна група для кожної характеристики
$map=[];
foreach($charGroup as $k=>$gs){ arsort($gs); $map[$k]=array_key_first($gs); }
file_put_contents(__DIR__.'/../data/attr_groups.json', json_encode(['map'=>$map,'order'=>$groupOrder], JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
echo "ГОТОВО: характеристик=".count($map)." груп=".count($groupOrder)."\n";
foreach($groupOrder as $g=>$o) echo "  $o. $g\n";
