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

/* shokeru/template/account/wishlist.twig */
class __TwigTemplate_62e43bc29d4a7569ce614b1913073006 extends Template
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
<section class=\"profile\">
    <div class=\"container\">
        <div class=\"profile__inner\">

            <div class=\"profile__result profile-products\" data-profile-content=\"tracked-products\">
                <div class=\"profile__result-top\">
                    <h2 class=\"profile__result-heading\">Отслеживаемые товары</h2>
                    <button class=\"profile__products-reset\">Очистить список товаров</button>
                </div>
                ";
        // line 11
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "                    <div class=\"profile__products-block\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 14
                yield "                            <div class=\"product__item\">
                                <button class=\"product__item-delete\" data-product-id=\"";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 15);
                yield "\"></button>
                                <button class=\"product__item-fav";
                // line 16
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "fav", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " active";
                }
                yield "\" data-product-id=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 16);
                yield "\"></button>
                                <a class=\"product__item-image\" href=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
                yield "\">
                                    <img src=\"";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                yield "\">
                                </a>
                                <div class=\"product__item-content\">
                                    <div class=\"product__item-buttons\">
                                        <button class=\"product__item-btn btn\" data-cart=\"";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 22);
                yield "\">
                                            ";
                // line 23
                yield ($context["button_cart"] ?? null);
                yield "
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\">
                                                <path d=\"M7 5H10V7H7V10H5V7H2V5H5V2H7V5Z\" fill=\"#202222\"/>
                                            </svg>
                                        </button>
                                        <a class=\"product__item-btn btn\" href=\"";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 28);
                yield "\">
                                            ";
                // line 29
                yield ($context["button_details"] ?? null);
                yield "
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"12\" viewBox=\"0 0 13 12\" fill=\"none\">
                                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.99988 9.00012L6.99988 6.00012L3.99988 3.00012L4.99988 2.00012L8.99988 6.00012L4.99988 10.0001L3.99988 9.00012Z\" fill=\"#202222\"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class=\"product__item-info\">
                                        <a class=\"product__item-title\" href=\"";
                // line 36
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 36);
                yield "\">
                                            <h3>";
                // line 37
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                yield "</h3>
                                        </a>
                                        <p class=\"product__item-price\">";
                // line 39
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 39);
                yield "</p>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "                    </div>
                ";
        } else {
            // line 46
            yield "                    <p class=\"profile__result-name\">";
            yield ($context["text_empty"] ?? null);
            yield "</p>
                ";
        }
        // line 48
        yield "            </div>
        </div>
    </div>
</section>
";
        // line 52
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
        return "shokeru/template/account/wishlist.twig";
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
        return array (  154 => 52,  148 => 48,  142 => 46,  138 => 44,  127 => 39,  122 => 37,  118 => 36,  108 => 29,  104 => 28,  96 => 23,  92 => 22,  83 => 18,  79 => 17,  71 => 16,  67 => 15,  64 => 14,  60 => 13,  57 => 12,  55 => 11,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/account/wishlist.twig", "");
    }
}
