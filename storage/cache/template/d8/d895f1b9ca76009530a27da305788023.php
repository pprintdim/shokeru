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

/* shokeru/template/extension/module/bestseller.twig */
class __TwigTemplate_f15289a18293f34f435c1a6273984931 extends Template
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
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            $context["min_slides"] = 5;
            // line 3
            yield "    ";
            $context["product_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield "    
    <section class=\"productSlider\">
        <div class=\"container\">
            <div class=\"productSlider__inner\">
                <div class=\"productSlider__top\">
                    <h2 class=\"productSlider__title title\">";
            // line 8
            yield ($context["heading_title"] ?? null);
            yield "</h2>
                    <div class=\"productSlider__button slider-buttons\">
                        <button class=\"productSlider-prev slider-btn-prev\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M17.0002 18.0002L11.0002 12.0002L17.0002 6.00024L15.0002 4.00024L7.00024 12.0002L15.0002 20.0002L17.0002 18.0002Z\" fill=\"#8A909B\"/>
                            </svg>
                        </button>
                        <button class=\"productSlider-next slider-btn-next\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M6.99976 18.0002L12.9998 12.0002L6.99976 6.00024L8.99976 4.00024L16.9998 12.0002L8.99976 20.0002L6.99976 18.0002Z\" fill=\"#8A909B\"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class=\"productSlider__slider\">
                    <div class=\"swiper-wrapper\">
                        ";
            // line 24
            $context["total"] = (((($context["product_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["product_count"] ?? null)));
            // line 25
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 26
                yield "                        <div class=\"productSlider__slide swiper-slide product__item\">
                            <button class=\"product__item-fav\"></button>
                            <a class=\"product__item-image\" href=\"";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 28);
                yield "\">
                                <img src=\"";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 29);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 29);
                yield "\">
                            </a>
                            <div class=\"product__item-content\">
                                <div class=\"product__item-buttons\">
                                    <button class=\"product__item-btn btn\" onclick=\"cart.add('";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 33);
                yield "');\">
                                        В корзину
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\">
                                            <path d=\"M7 5H10V7H7V10H5V7H2V5H5V2H7V5Z\" fill=\"#202222\"/>
                                        </svg>
                                    </button>
                                    <a class=\"product__item-btn btn\" href=\"";
                // line 39
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 39);
                yield "\">
                                        Подробнее
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"12\" viewBox=\"0 0 13 12\" fill=\"none\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.99988 9.00012L6.99988 6.00012L3.99988 3.00012L4.99988 2.00012L8.99988 6.00012L4.99988 10.0001L3.99988 9.00012Z\" fill=\"#202222\"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class=\"product__item-info\">
                                    <a class=\"product__item-title\" href=\"";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 47);
                yield "\">
                                        <h3>";
                // line 48
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 48);
                yield "</h3>
                                    </a>
                                    ";
                // line 50
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 51
                    yield "                                    <p class=\"product__item-price\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 51);
                    yield "</p>
                                    ";
                }
                // line 53
                yield "                                </div>
                            </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                    </div>
                </div>
                <a class=\"productSlider__btn btn-3\" href=\"";
            // line 59
            yield ($context["catalog_href"] ?? null);
            yield "\">
                    Перейти В КАТАЛОГ
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.6665 12.0002L8.6665 8.00016L4.6665 4.00016L5.99984 2.66683L11.3332 8.00016L5.99984 13.3335L4.6665 12.0002Z\" fill=\"#202222\"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/extension/module/bestseller.twig";
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
        return array (  149 => 59,  145 => 57,  136 => 53,  130 => 51,  128 => 50,  123 => 48,  119 => 47,  108 => 39,  99 => 33,  90 => 29,  86 => 28,  82 => 26,  77 => 25,  75 => 24,  56 => 8,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/bestseller.twig", "");
    }
}
