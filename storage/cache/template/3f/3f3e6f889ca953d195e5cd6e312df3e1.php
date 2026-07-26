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

/* shokeru/template/product/shop.twig */
class __TwigTemplate_550104361296d113980e3ba251941ab5 extends Template
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

\t";
        // line 3
        yield ($context["content_top"] ?? null);
        yield "
    <section class=\"shop\">
            <div class=\"container\">
                <div class=\"shop__inner\">

                    ";
        // line 8
        yield ($context["filter"] ?? null);
        yield "

                    ";
        // line 10
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "                    \t";
            $context["min_slides"] = 20;
            // line 12
            yield "\t                    ";
            $context["product_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield " 
\t                    ";
            // line 13
            $context["total"] = (((($context["product_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["product_count"] ?? null)));
            // line 14
            yield "\t                    
                    \t<div class=\"shop__results\">
                    \t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 17
                yield "                        \t\t";
                $context["product"] = (($_v0 = ($context["products"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["i"] % ($context["product_count"] ?? null))] ?? null) : null);
                // line 18
                yield "
\t\t                        <div class=\"shop__item product__item\">
\t\t                            <button class=\"product__item-fav\"></button>
\t\t                            <a class=\"product__item-image\" href=\"#\">
\t\t                                <img src=\"";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 22);
                yield "\" alt=\"\">
\t\t                            </a>
\t\t                            <div class=\"product__item-content\">
\t\t                                <div class=\"product__item-buttons\">
\t\t                                    <button onclick=\"card.add(";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 26);
                yield ");\" class=\"product__item-btn btn\">
\t\t                                        В корзину
\t\t                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\">
\t\t                                            <path d=\"M7 5H10V7H7V10H5V7H2V5H5V2H7V5Z\" fill=\"#202222\"/>
\t\t                                        </svg>
\t\t                                    </button>
\t\t                                    <a class=\"product__item-btn btn\" href=\"#\">
\t\t                                        Подробнее
\t\t                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"12\" viewBox=\"0 0 13 12\" fill=\"none\">
\t\t                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.99988 9.00012L6.99988 6.00012L3.99988 3.00012L4.99988 2.00012L8.99988 6.00012L4.99988 10.0001L3.99988 9.00012Z\" fill=\"#202222\"/>
\t\t                                        </svg>
\t\t                                    </a>
\t\t                                </div>
\t\t                                <div class=\"product__item-info\">
\t\t                                    <a class=\"product__item-title\" href=\"#\">
\t\t                                        <h3>";
                // line 41
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 41);
                yield "</h3>
\t\t                                    </a>
\t\t                                    <p class=\"product__item-price\">
\t\t                                        ";
                // line 44
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 45
                    yield "\t\t                                            <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 45);
                    yield "</span>
\t\t                                        ";
                }
                // line 47
                yield "\t\t                                        ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 47)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 47)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 47)));
                yield "
\t\t                                    </p>
\t\t                                </div>
\t\t                            </div>
\t\t                        </div>
\t                    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "\t                    </div>
                    ";
        }
        // line 55
        yield "                    
                    <div class=\"shop__bottom\">
                        <button class=\"shop__more btn-4\">
                        \tпоказать больше товара
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\">
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.99935 4.66602L7.99935 8.66602L11.9993 4.66602L13.3327 5.99935L7.99935 11.3327L2.66602 5.99935L3.99935 4.66602Z\" fill=\"white\"/>
                            </svg>
                        </button>
                        <div class=\"shop__pages\">
                            <p class=\"shop__pages-title\">Стараница</p>
                            <div class=\"shop__pages-content\">
                                <a class=\"active\" href=\"#\">1</a>
                                <a href=\"#\">2</a>
                                <a class=\"shop__pages-next\" href=\"#\"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    ";
        // line 75
        yield ($context["content_bottom"] ?? null);
        yield "

        

    ";
        // line 79
        if ((($tmp = ($context["recommended"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "        ";
            $context["min_slides"] = 6;
            // line 81
            yield "        ";
            $context["recommended_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["recommended"] ?? null));
            // line 82
            yield "        ";
            $context["total"] = (((($context["recommended_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["recommended_count"] ?? null)));
            // line 83
            yield "
        <section class=\"productSlider\">
            <div class=\"container\">
                <div class=\"productSlider__inner\">
                    <div class=\"productSlider__top\">
                        <h2 class=\"productSlider__title title\">";
            // line 88
            yield ((($context["text_recommended"] ?? null)) ? ($context["text_recommended"]) : ("Подобрано Для Вас"));
            yield "</h2>
                        <div class=\"productSlider__button slider-buttons\">
                            <button class=\"productSlider-prev slider-btn-prev\">
    \t                       <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M17.0002 18.0002L11.0002 12.0002L17.0002 6.00024L15.0002 4.00024L7.00024 12.0002L15.0002 20.0002L17.0002 18.0002Z\" fill=\"#8A909B\"/></svg>
    \t                    </button>
    \t                    <button class=\"productSlider-next slider-btn-next\">
    \t                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M6.99976 18.0002L12.9998 12.0002L6.99976 6.00024L8.99976 4.00024L16.9998 12.0002L8.99976 20.0002L6.99976 18.0002Z\" fill=\"#8A909B\"/></svg>
    \t                    </button>
                        </div>
                    </div>
                    <div class=\"productSlider__slider\">
                        <div class=\"swiper-wrapper\">
                            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 101
                yield "                                ";
                $context["product"] = (($_v1 = ($context["recommended"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["i"] % ($context["recommended_count"] ?? null))] ?? null) : null);
                // line 102
                yield "                                <div class=\"productSlider__slide swiper-slide product__item\">
                                    <button class=\"product__item-fav\"></button>
                                    <a class=\"product__item-image\" href=\"";
                // line 104
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 104);
                yield "\">
                                        <img src=\"";
                // line 105
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 105);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 105);
                yield "\">
                                    </a>
                                    <div class=\"product__item-content\">
                                        <div class=\"product__item-buttons\">
    \t                                   <button onclick=\"card.add(";
                // line 109
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 109);
                yield ");\" class=\"product__item-btn btn\">
    \t                                        В корзину
    \t                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\">
    \t                                            <path d=\"M7 5H10V7H7V10H5V7H2V5H5V2H7V5Z\" fill=\"#202222\"/>
    \t                                        </svg>
    \t                                    </button>
    \t                                    <a class=\"product__item-btn btn\" href=\"#\">
    \t                                        Подробнее
    \t                                    </a>
    \t       \t                        </div>
                                        <div class=\"product__item-info\">
                                            <a class=\"product__item-title\" href=\"";
                // line 120
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 120);
                yield "\">
                                                <h3>";
                // line 121
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 121);
                yield "</h3>
                                            </a>
                                            <p class=\"product__item-price\">
                                                ";
                // line 124
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 125
                    yield "                                                    <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 125);
                    yield "</span>
                                                    ";
                    // line 126
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 126);
                    yield "
                                                ";
                } else {
                    // line 128
                    yield "                                                    ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 128);
                    yield "
                                                ";
                }
                // line 130
                yield "                                            </p>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            yield "                        </div>
                    </div>
                </div>
            </div>
        </section>
    ";
        }
        // line 141
        yield "

";
        // line 143
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/product/shop.twig";
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
        return array (  295 => 143,  291 => 141,  283 => 135,  273 => 130,  267 => 128,  262 => 126,  257 => 125,  255 => 124,  249 => 121,  245 => 120,  231 => 109,  222 => 105,  218 => 104,  214 => 102,  211 => 101,  207 => 100,  192 => 88,  185 => 83,  182 => 82,  179 => 81,  176 => 80,  174 => 79,  167 => 75,  145 => 55,  141 => 53,  128 => 47,  122 => 45,  120 => 44,  114 => 41,  96 => 26,  89 => 22,  83 => 18,  80 => 17,  76 => 16,  72 => 14,  70 => 13,  65 => 12,  62 => 11,  60 => 10,  55 => 8,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/product/shop.twig", "");
    }
}
