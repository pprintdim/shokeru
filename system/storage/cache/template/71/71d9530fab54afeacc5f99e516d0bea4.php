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

/* shokeru/template/product/search.twig */
class __TwigTemplate_f4b2aeff37578521a10bf03316eeb3d3 extends Template
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
<main class=\"main\">
\t";
        // line 3
        yield ($context["content_top"] ?? null);
        yield "
    ";
        // line 4
        yield ($context["content_bottom"] ?? null);
        yield "

    <section class=\"pageInfo pageInfo-border\">
        <div class=\"container\">
            <ul class=\"breadcrumbs\">
\t\t      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            yield "\t\t\t        <li>
\t\t\t          <a href=\"";
            // line 11
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "class=\"active\"";
            }
            yield ">
\t\t\t            ";
            // line 12
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "
\t\t\t          </a>
\t\t\t        </li>
\t\t      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "\t\t\t</ul>
            <div class=\"pageInfo__inner\">
                <h1 class=\"pageInfo__title main-title\">";
        // line 18
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                <p class=\"pageInfo__descr\">";
        // line 19
        yield ($context["text_results"] ?? null);
        yield "</p>
            </div>
        </div>
    </section>

    <section class=\"shop\">
        <div class=\"container\">
            <div class=\"shop__inner\">
                ";
        // line 27
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                    <div class=\"shop__results\">
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 30
                yield "                            <div class=\"shop__item product__item\">
                                <button class=\"product__item-fav\"></button>
                                <a class=\"product__item-image\" href=\"";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 32);
                yield "\">
                                    <img src=\"";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 33);
                yield "\" alt=\"\">
                                </a>
                                <div class=\"product__item-content\">
                                    <div class=\"product__item-buttons\">
                                        <button onclick=\"card.add(";
                // line 37
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 37);
                yield ");\" class=\"product__item-btn btn\">
                                            ";
                // line 38
                yield ($context["button_cart"] ?? null);
                yield "
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\">
                                                <path d=\"M7 5H10V7H7V10H5V7H2V5H5V2H7V5Z\" fill=\"#202222\"/>
                                            </svg>
                                        </button>
                                        <a class=\"product__item-btn btn\" href=\"#\">
                                            ";
                // line 44
                yield ($context["button_view"] ?? null);
                yield "
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"12\" viewBox=\"0 0 13 12\" fill=\"none\">
                                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.99988 9.00012L6.99988 6.00012L3.99988 3.00012L4.99988 2.00012L8.99988 6.00012L4.99988 10.0001L3.99988 9.00012Z\" fill=\"#202222\"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class=\"product__item-info\">
                                        <a class=\"product__item-title\" href=\"#\">
                                            <h3>";
                // line 52
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                yield "</h3>
                                        </a>
                                        <p class=\"product__item-price\">
                                            ";
                // line 55
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 56
                    yield "                                                <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56);
                    yield "</span>
                                            ";
                }
                // line 58
                yield "                                            ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 58)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 58)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 58)));
                yield "
                                        </p>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "                        
                    </div>
                ";
        } else {
            // line 67
            yield "                    <p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
                ";
        }
        // line 69
        yield "                        
                <div class=\"shop__bottom\">
                    <a href=\"";
        // line 71
        yield ($context["shop"] ?? null);
        yield "\" class=\"shop__more btn-4\">
                        ";
        // line 72
        yield ($context["button_catalog"] ?? null);
        yield "
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\">
                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.66602 12.0002L8.66602 8.00016L4.66602 4.00016L5.99935 2.66683L11.3327 8.00016L5.99935 13.3335L4.66602 12.0002Z\" fill=\"white\"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
        

";
        // line 83
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/product/search.twig";
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
        return array (  232 => 83,  218 => 72,  214 => 71,  210 => 69,  204 => 67,  199 => 64,  186 => 58,  180 => 56,  178 => 55,  172 => 52,  161 => 44,  152 => 38,  148 => 37,  141 => 33,  137 => 32,  133 => 30,  129 => 29,  126 => 28,  124 => 27,  113 => 19,  109 => 18,  105 => 16,  87 => 12,  79 => 11,  76 => 10,  59 => 9,  51 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/product/search.twig", "");
    }
}
