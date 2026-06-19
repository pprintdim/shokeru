<?php
require __DIR__.'/../src/CsvHelper.php';
require __DIR__.'/../src/ProductParser.php';
$cfg = require __DIR__.'/../config.php';
$UA = $cfg['user_agent'];
function fetch($url,$UA){
  $ch=curl_init($url);
  curl_setopt_array($ch,[CURLOPT_RETURNTRANSFER=>1,CURLOPT_FOLLOWLOCATION=>1,CURLOPT_TIMEOUT=>30,CURLOPT_ENCODING=>'',CURLOPT_USERAGENT=>$UA]);
  $b=curl_exec($ch);$c=curl_getinfo($ch,CURLINFO_HTTP_CODE);curl_close($ch);return [$b?:'',$c];
}
$rows=CsvHelper::read(__DIR__.'/../data/products.csv');
$sku=0;$vid=0;$i=0;$total=count($rows);
foreach($rows as &$r){
  $i++; if(!isset($r['video']))$r['video']='';
  [$html,$code]=fetch($r['product_url'],$UA);
  if($code===200 && $html){
    if(preg_match('#name=["\']?product_id["\']?\s+value=["\']?(\d+)#',$html,$m)){ $r['sku']=$m[1]; if($m[1]!=='')$sku++; }
    if(preg_match('#(?:youtube\.com/embed/|youtu\.be/|youtube-nocookie\.com/embed/)([A-Za-z0-9_-]{6,})#',$html,$v)){
      $r['video']='https://www.youtube.com/embed/'.$v[1]; $vid++;
    }
  }
  if($i%40===0) fwrite(STDERR,"[$i/$total] sku=$sku video=$vid\n");
  usleep(330000);
}
unset($r);
CsvHelper::write(__DIR__.'/../data/products.csv',$rows,ProductParser::COLUMNS);
echo "ГОТОВО: оброблено=$i | SKU=$sku | відео=$vid\n";
