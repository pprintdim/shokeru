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

/* default/template/product/special.twig */
class __TwigTemplate_75ae79a71e748cde8649556121e07718 extends Template
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
      <h2>";
        // line 17
        yield ($context["heading_title"] ?? null);
        yield "</h2>
      ";
        // line 18
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 22
            yield ($context["button_list"] ?? null);
            yield "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 23
            yield ($context["button_grid"] ?? null);
            yield "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"><a href=\"";
            // line 27
            yield ($context["compare"] ?? null);
            yield "\" id=\"compare-total\" class=\"btn btn-link\">";
            yield ($context["text_compare"] ?? null);
            yield "</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 31
            yield ($context["text_sort"] ?? null);
            yield "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 34
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 34) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 35
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 35);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 35);
                    yield "</option>
              ";
                } else {
                    // line 37
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 37);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 37);
                    yield "</option>
              ";
                }
                // line 39
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "            
            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 45
            yield ($context["text_limit"] ?? null);
            yield "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 48
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 48) == ($context["limit"] ?? null))) {
                    // line 49
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 49);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 49);
                    yield "</option>
              ";
                } else {
                    // line 51
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 51);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 51);
                    yield "</option>
              ";
                }
                // line 53
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['limits'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "            
            </select>
          </div>
        </div>
      </div>
      <div class=\"row\"> ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 59
                yield "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 61
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 61);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 61);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 61);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 61);
                yield "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 64
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 64);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64);
                yield "</a></h4>
                <p>";
                // line 65
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 65);
                yield "</p>
                ";
                // line 66
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "                <p class=\"price\"> ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 68
                        yield "                  ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 68);
                        yield "
                  ";
                    } else {
                        // line 69
                        yield " <span class=\"price-new\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 69);
                        yield "</span> <span class=\"price-old\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 69);
                        yield "</span> ";
                    }
                    // line 70
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " <span class=\"price-tax\">";
                        yield ($context["text_tax"] ?? null);
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 70);
                        yield "</span> ";
                    }
                    yield " </p>
                ";
                }
                // line 72
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 73
                    yield "                <div class=\"rating\">
                  ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 75
                        yield "                  ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 75) < $context["i"])) {
                            yield " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            yield " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 76
                        yield "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    yield "                </div>
                ";
                }
                // line 78
                yield " </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 80
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 80);
                yield "', '";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 80);
                yield "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                yield ($context["button_cart"] ?? null);
                yield "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 81
                yield ($context["button_wishlist"] ?? null);
                yield "\" onclick=\"wishlist.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 81);
                yield "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 82
                yield ($context["button_compare"] ?? null);
                yield "\" onclick=\"compare.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 82);
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
            // line 87
            yield " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 89
            yield ($context["pagination"] ?? null);
            yield "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 90
            yield ($context["results"] ?? null);
            yield "</div>
      </div>
      ";
        } else {
            // line 93
            yield "      <p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 95
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      </div>
      ";
        }
        // line 98
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 99
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 101
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
        return "default/template/product/special.twig";
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
        return array (  366 => 101,  361 => 99,  356 => 98,  348 => 95,  342 => 93,  336 => 90,  332 => 89,  328 => 87,  314 => 82,  308 => 81,  300 => 80,  296 => 78,  292 => 77,  286 => 76,  279 => 75,  275 => 74,  272 => 73,  269 => 72,  257 => 70,  250 => 69,  244 => 68,  241 => 67,  239 => 66,  235 => 65,  229 => 64,  217 => 61,  213 => 59,  209 => 58,  197 => 53,  189 => 51,  181 => 49,  178 => 48,  174 => 47,  169 => 45,  156 => 39,  148 => 37,  140 => 35,  137 => 34,  133 => 33,  128 => 31,  119 => 27,  112 => 23,  108 => 22,  103 => 19,  101 => 18,  97 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/product/special.twig", "");
    }
}
