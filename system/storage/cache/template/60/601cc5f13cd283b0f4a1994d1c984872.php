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

/* shokeru/template/common/cart.twig */
class __TwigTemplate_7bbba117d4f4d1e6f77da845f0b2c5ac extends Template
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
        yield "<section id=\"cart\" class=\"busket\">
    <div class=\"busket__inner\">
        <div class=\"busket__top\">
            <h2 class=\"busket__title\">";
        // line 4
        yield ($context["text_items"] ?? null);
        yield "</h2>
            <button class=\"busket__close\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" fill=\"none\">
                    <rect x=\"9\" y=\"28.7988\" width=\"28\" height=\"4\" transform=\"rotate(-45 9 28.7988)\" fill=\"#202222\"/>
                    <rect x=\"28.7988\" y=\"31.627\" width=\"9\" height=\"4\" transform=\"rotate(-135 28.7988 31.627)\" fill=\"#202222\"/>
                    <rect x=\"11.8281\" y=\"9\" width=\"9\" height=\"4\" transform=\"rotate(45 11.8281 9)\" fill=\"#202222\"/>
                </svg>
            </button>
        </div>
        ";
        // line 13
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "
            <div class=\"busket__block\">

                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                yield "                    <div class=\"busket__item\">
                        <a class=\"busket__item-image\" href=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
                yield "\">
                            <img src=\"";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20);
                yield "\" alt=\"\">
                        </a>
                        <div class=\"busket__item-content\">
                            <a class=\"busket__item-title\" href=\"";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                yield "\">
                                <h3>";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                yield "</h3>
                            </a>

                            <p class=\"busket__item-price\">
                                ";
                // line 28
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 29
                    yield "                                    <span class=\"price-old\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 29);
                    yield "</span> 
                                ";
                }
                // line 31
                yield "                                ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 31)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 31)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31)));
                yield "
                            </p>
                            <button onclick=\"cart.remove(";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 33);
                yield ");\" class=\"busket__item-delete\"></button>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "
            </div>


            <div class=\"busket__bottom\">
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 43
                yield "                    <div class=\"busket__bottom-item\">
                        <p class=\"busket__bottom-descr\">";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 44);
                yield "</p>
                        <p class=\"busket__bottom-descr\">";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 45);
                yield "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "            </div>
        ";
        } else {
            // line 50
            yield "            <div class=\"busket__block\">
                <p style=\"padding-left: 20px;display: block;\">";
            // line 51
            yield ($context["text_empty"] ?? null);
            yield "</p>
            </div>
        ";
        }
        // line 54
        yield "        <div class=\"busket__buttons\">
            <a class=\"busket__btn btn-3\" href=\"";
        // line 55
        yield ($context["cart"] ?? null);
        yield "\">";
        yield ($context["text_cart"] ?? null);
        yield "</a>
            <a class=\"busket__btn btn-4\" href=\"";
        // line 56
        yield (((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["checkout"] ?? null)) : (($context["home"] ?? null)));
        yield "\">";
        yield (((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["text_checkout"] ?? null)) : (($context["text_home"] ?? null)));
        yield "</a>
        </div>
    </div>
</section>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/common/cart.twig";
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
        return array (  167 => 56,  161 => 55,  158 => 54,  152 => 51,  149 => 50,  145 => 48,  136 => 45,  132 => 44,  129 => 43,  125 => 42,  118 => 37,  108 => 33,  102 => 31,  96 => 29,  94 => 28,  87 => 24,  83 => 23,  77 => 20,  73 => 19,  70 => 18,  66 => 17,  61 => 14,  59 => 13,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/common/cart.twig", "");
    }
}
