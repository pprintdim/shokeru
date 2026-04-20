<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* default/template/product/search.twig */
class __TwigTemplate_38b96191df8a250154414076fb8596c0 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "
<div id=\"product-search\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "    <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 11
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 13
            yield "    ";
        } else {
            // line 14
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 15
            yield "    ";
        }
        // line 16
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">";
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 17
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <label class=\"control-label\" for=\"input-search\">";
        // line 18
        yield ($context["entry_search"] ?? null);
        yield "</label>
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 21
        yield ($context["search"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_keyword"] ?? null);
        yield "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-sm-3\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 25
        yield ($context["text_category"] ?? null);
        yield "</option>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 27
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 27) == ($context["category_id"] ?? null))) {
                // line 28
                yield "            <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 28);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 28);
                yield "</option>
            ";
            } else {
                // line 30
                yield "            <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 30);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 30);
                yield "</option>
            ";
            }
            // line 32
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 33
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 33) == ($context["category_id"] ?? null))) {
                    // line 34
                    yield "            <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 34);
                    yield "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 34);
                    yield "</option>
            ";
                } else {
                    // line 36
                    yield "            <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 36);
                    yield "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 36);
                    yield "</option>
            ";
                }
                // line 38
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 39
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 39) == ($context["category_id"] ?? null))) {
                        // line 40
                        yield "            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 40);
                        yield "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 40);
                        yield "</option>
            ";
                    } else {
                        // line 42
                        yield "            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 42);
                        yield "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 42);
                        yield "</option>
            ";
                    }
                    // line 44
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category_3'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category_2'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category_1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "          </select>
        </div>
        <div class=\"col-sm-3\">
          <label class=\"checkbox-inline\">
            ";
        // line 51
        if ((($tmp = ($context["sub_category"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 54
            yield "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 56
        yield "            ";
        yield ($context["text_sub_category"] ?? null);
        yield "</label>
        </div>
      </div>
      <p>
        <label class=\"checkbox-inline\">
          ";
        // line 61
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 64
            yield "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 66
        yield "          ";
        yield ($context["entry_description"] ?? null);
        yield "</label>
      </p>
      <input type=\"button\" value=\"";
        // line 68
        yield ($context["button_search"] ?? null);
        yield "\" id=\"button-search\" class=\"btn btn-primary\" />
      <h2>";
        // line 69
        yield ($context["text_search"] ?? null);
        yield "</h2>
      ";
        // line 70
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 74
            yield ($context["button_list"] ?? null);
            yield "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 75
            yield ($context["button_grid"] ?? null);
            yield "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\">
            <a href=\"";
            // line 80
            yield ($context["compare"] ?? null);
            yield "\" id=\"compare-total\" class=\"btn btn-link\">";
            yield ($context["text_compare"] ?? null);
            yield "</a>
          </div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 85
            yield ($context["text_sort"] ?? null);
            yield "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 88
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 88) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 89
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 89);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 89);
                    yield "</option>
              ";
                } else {
                    // line 91
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 91);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 91);
                    yield "</option>
              ";
                }
                // line 93
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 99
            yield ($context["text_limit"] ?? null);
            yield "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 102
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 102) == ($context["limit"] ?? null))) {
                    // line 103
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 103);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 103);
                    yield "</option>
              ";
                } else {
                    // line 105
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 105);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 105);
                    yield "</option>
              ";
                }
                // line 107
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['limits'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "            </select>
          </div>
        </div>
      </div>
      <div class=\"row\">
        ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 114
                yield "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 116
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 116);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 116);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 116);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 116);
                yield "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 119
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 119);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 119);
                yield "</a></h4>
                <p>";
                // line 120
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 120);
                yield "</p>
                ";
                // line 121
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 122
                    yield "                <p class=\"price\">
                  ";
                    // line 123
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 124
                        yield "                  ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 124);
                        yield "
                  ";
                    } else {
                        // line 126
                        yield "                  <span class=\"price-new\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 126);
                        yield "</span> <span class=\"price-old\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 126);
                        yield "</span>
                  ";
                    }
                    // line 128
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 129
                        yield "                  <span class=\"price-tax\">";
                        yield ($context["text_tax"] ?? null);
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 129);
                        yield "</span>
                  ";
                    }
                    // line 131
                    yield "                </p>
                ";
                }
                // line 133
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 134
                    yield "                <div class=\"rating\">
                  ";
                    // line 135
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 136
                        yield "                  ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 136) < $context["i"])) {
                            // line 137
                            yield "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        } else {
                            // line 139
                            yield "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        }
                        // line 141
                        yield "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 142
                    yield "                </div>
                ";
                }
                // line 144
                yield "              </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 146
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 146);
                yield "', '";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 146);
                yield "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                yield ($context["button_cart"] ?? null);
                yield "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 147
                yield ($context["button_wishlist"] ?? null);
                yield "\" onclick=\"wishlist.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 147);
                yield "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 148
                yield ($context["button_compare"] ?? null);
                yield "\" onclick=\"compare.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 148);
                yield "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            yield "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 156
            yield ($context["pagination"] ?? null);
            yield "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 157
            yield ($context["results"] ?? null);
            yield "</div>
      </div>
      ";
        } else {
            // line 160
            yield "      <p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
      ";
        }
        // line 162
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 163
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 212
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/product/search.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  575 => 212,  523 => 163,  518 => 162,  512 => 160,  506 => 157,  502 => 156,  498 => 154,  484 => 148,  478 => 147,  470 => 146,  466 => 144,  462 => 142,  456 => 141,  452 => 139,  448 => 137,  445 => 136,  441 => 135,  438 => 134,  435 => 133,  431 => 131,  423 => 129,  420 => 128,  412 => 126,  406 => 124,  404 => 123,  401 => 122,  399 => 121,  395 => 120,  389 => 119,  377 => 116,  373 => 114,  369 => 113,  362 => 108,  356 => 107,  348 => 105,  340 => 103,  337 => 102,  333 => 101,  328 => 99,  321 => 94,  315 => 93,  307 => 91,  299 => 89,  296 => 88,  292 => 87,  287 => 85,  277 => 80,  269 => 75,  265 => 74,  260 => 71,  258 => 70,  254 => 69,  250 => 68,  244 => 66,  240 => 64,  236 => 62,  234 => 61,  225 => 56,  221 => 54,  217 => 52,  215 => 51,  209 => 47,  203 => 46,  197 => 45,  191 => 44,  183 => 42,  175 => 40,  172 => 39,  167 => 38,  159 => 36,  151 => 34,  148 => 33,  143 => 32,  135 => 30,  127 => 28,  124 => 27,  120 => 26,  116 => 25,  107 => 21,  101 => 18,  97 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/product/search.twig", "");
    }
}
