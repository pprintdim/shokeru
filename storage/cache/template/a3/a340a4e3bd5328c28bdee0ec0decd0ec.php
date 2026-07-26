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

/* default/template/product/category.twig */
class __TwigTemplate_a8882208c972890ce5f62a78a8250d0e extends Template
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
<div id=\"product-category\" class=\"container\">
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
      <h2>";
        // line 17
        yield ($context["heading_title"] ?? null);
        yield "</h2>
      ";
        // line 18
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 19
            yield "      <div class=\"row\"> ";
            if ((($tmp = ($context["thumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "        <div class=\"col-sm-2\"><img src=\"";
                yield ($context["thumb"] ?? null);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 22
            yield "        ";
            if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "        <div class=\"col-sm-10\">";
                yield ($context["description"] ?? null);
                yield "</div>
        ";
            }
            // line 24
            yield "</div>
      <hr>
      ";
        }
        // line 27
        yield "      ";
        if ((($tmp = ($context["categories"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "      <h3>";
            yield ($context["text_refine"] ?? null);
            yield "</h3>
      ";
            // line 29
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) <= 5)) {
                // line 30
                yield "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul>
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 34
                    yield "            <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                    yield "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "          </ul>
        </div>
      </div>
      ";
            } else {
                // line 40
                yield "      <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch(($context["categories"] ?? null), Twig\Extension\CoreExtension::round((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 41
                    yield "        <div class=\"col-sm-3\">
          <ul>
            ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 44
                        yield "            <li><a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 44);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 44);
                        yield "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    yield "          </ul>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                yield "</div>
      <br/>
      ";
            }
            // line 51
            yield "      ";
        }
        // line 52
        yield "      ";
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 56
            yield ($context["button_list"] ?? null);
            yield "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 57
            yield ($context["button_grid"] ?? null);
            yield "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"><a href=\"";
            // line 61
            yield ($context["compare"] ?? null);
            yield "\" id=\"compare-total\" class=\"btn btn-link\">";
            yield ($context["text_compare"] ?? null);
            yield "</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 65
            yield ($context["text_sort"] ?? null);
            yield "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 68
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 68) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 69
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 69);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 69);
                    yield "</option>
              ";
                } else {
                    // line 71
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 71);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 71);
                    yield "</option>
              ";
                }
                // line 73
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 79
            yield ($context["text_limit"] ?? null);
            yield "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 82
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 82) == ($context["limit"] ?? null))) {
                    // line 83
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 83);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 83);
                    yield "</option>
              ";
                } else {
                    // line 85
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 85);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 85);
                    yield "</option>
              ";
                }
                // line 87
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['limits'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "            </select>
          </div>
        </div>
      </div>
      <div class=\"row\"> ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 93
                yield "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 95
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 95);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 95);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
                yield "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 98
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 98);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 98);
                yield "</a></h4>
                <p>";
                // line 99
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 99);
                yield "</p>
                ";
                // line 100
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 101
                    yield "                <p class=\"price\"> ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 102
                        yield "                  ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102);
                        yield "
                  ";
                    } else {
                        // line 103
                        yield " <span class=\"price-new\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 103);
                        yield "</span> <span class=\"price-old\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 103);
                        yield "</span> ";
                    }
                    // line 104
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " <span class=\"price-tax\">";
                        yield ($context["text_tax"] ?? null);
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 104);
                        yield "</span> ";
                    }
                    yield " </p>
                ";
                }
                // line 106
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 107
                    yield "                <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 108
                        yield "                  ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 108) < $context["i"])) {
                            yield " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            yield " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 109
                        yield "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield " </div>
                ";
                }
                // line 110
                yield " </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 112
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 112);
                yield "', '";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 112);
                yield "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                yield ($context["button_cart"] ?? null);
                yield "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 113
                yield ($context["button_wishlist"] ?? null);
                yield "\" onclick=\"wishlist.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 113);
                yield "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 114
                yield ($context["button_compare"] ?? null);
                yield "\" onclick=\"compare.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 114);
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
            // line 119
            yield " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 121
            yield ($context["pagination"] ?? null);
            yield "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 122
            yield ($context["results"] ?? null);
            yield "</div>
      </div>
      ";
        }
        // line 125
        yield "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 126
            yield "      <p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 128
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      </div>
      ";
        }
        // line 131
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 132
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 134
        yield ($context["footer"] ?? null);
        yield " 
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/product/category.twig";
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
        return array (  472 => 134,  467 => 132,  462 => 131,  454 => 128,  448 => 126,  445 => 125,  439 => 122,  435 => 121,  431 => 119,  417 => 114,  411 => 113,  403 => 112,  399 => 110,  390 => 109,  383 => 108,  378 => 107,  375 => 106,  363 => 104,  356 => 103,  350 => 102,  347 => 101,  345 => 100,  341 => 99,  335 => 98,  323 => 95,  319 => 93,  315 => 92,  309 => 88,  303 => 87,  295 => 85,  287 => 83,  284 => 82,  280 => 81,  275 => 79,  268 => 74,  262 => 73,  254 => 71,  246 => 69,  243 => 68,  239 => 67,  234 => 65,  225 => 61,  218 => 57,  214 => 56,  209 => 53,  206 => 52,  203 => 51,  198 => 48,  190 => 46,  179 => 44,  175 => 43,  171 => 41,  166 => 40,  160 => 36,  149 => 34,  145 => 33,  140 => 30,  138 => 29,  133 => 28,  130 => 27,  125 => 24,  119 => 23,  116 => 22,  106 => 20,  103 => 19,  101 => 18,  97 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
