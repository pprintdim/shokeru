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

/* shokeru/template/product/latest.twig */
class __TwigTemplate_1e7afc73ad49269486f89d8fbd6331cd extends Template
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
 <section class=\"pageContent pageContent-banner\">
    <div class=\"container\">
        <div class=\"pageContent__inner\">
            <div class=\"pageContent__content\">
                 <p class=\"pageContent__line\">//////////</p>
                 <h1 class=\"pageContent__title title\">
                 \tФинальная распродажа 
                 \t<span>-40% на весь товар “Wei-Shi”</span>
                 </h1>
            </div>
             <div class=\"pageContent__image\">
                 <img src=\"img/pageContent/1.png\" alt=\"\">
            </div>
        </div>
   </div>
</section>
   ";
        // line 20
        yield ($context["content_bottom"] ?? null);
        yield "
        <section class=\"shop\">
            <div class=\"container\">
                <div class=\"shop__inner\">

                    ";
        // line 25
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "                    \t";
            $context["min_slides"] = 20;
            // line 27
            yield "\t                    ";
            $context["product_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield " 
\t                    ";
            // line 28
            $context["total"] = (((($context["product_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["product_count"] ?? null)));
            // line 29
            yield "\t                    
                    \t<div class=\"shop__results\">
                    \t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 32
                yield "                        \t\t";
                $context["product"] = (($_v0 = ($context["products"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["i"] % ($context["product_count"] ?? null))] ?? null) : null);
                // line 33
                yield "
\t\t                        <div class=\"shop__item product__item\">
\t\t                            <button class=\"product__item-fav\"></button>
\t\t                            <a class=\"product__item-image\" href=\"#\">
\t\t                                <img src=\"";
                // line 37
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 37);
                yield "\" alt=\"\">
\t\t                            </a>
\t\t                            <div class=\"product__item-content\">
\t\t                                <div class=\"product__item-buttons\">
\t\t                                    <button onclick=\"card.add(";
                // line 41
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 41);
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
                // line 56
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 56);
                yield "</h3>
\t\t                                    </a>
\t\t                                    <p class=\"product__item-price\">
\t\t                                        ";
                // line 59
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "\t\t                                            <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 60);
                    yield "</span>
\t\t                                        ";
                }
                // line 62
                yield "\t\t                                        ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 62)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 62)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 62)));
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
            // line 68
            yield "\t                    </div>
                    ";
        }
        // line 70
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

        <section class=\"infoBlock\">
            <div class=\"container\">
                <div class=\"infoBlock__inner\">
                    <h3 class=\"infoBlock__title\">Интернет магазин <mark>shokeru.in.ua</mark><br><span>- портал, на котором размещен огромный ассортимент электрошокирующих приборов. Данный сайт является наилучшим выбором, при покупке электрошокера!</span></h3>
                    <p class=\"infoBlock__descr\">Для того чтобы избежать приобретения нелицензионного или бракованного товара, мы настоятельно рекомендуем при покупке электрошокера, руководствоваться несколькими основными условиями, которые помогут Вам отличить оригинальное изделие от подделки.</p>
                    <p class=\"infoBlock__descr\">Не стоит забывать, что каждая модель электрошокера компании «WeiShi», имеет собственный серийный номер, который вносится в единую базу данных производителя и позволяет проверить оригинальность и соответствие изделия заявленным техническим характеристикам.</p>
                    <p class=\"infoBlock__descr\">Стоимость <a href=\"#\">оригинального электрошокера</a> изготовленного компанией «WeiShi», не может сильно отличатся от средней стоимости на рынке. Корпорация тщательно контролирует отпускные цены для своих торговых представителей и не допускает разности в цене более чем 15%. Многие крупные магазины, которые реализуют подобные товары в больших объёмах, могут незначительно снизить цену на определённые модели, но такая уценка не может превышать 30% от средней рыночной стоимости. Если скидка на шокер составляет более 30%, то скорее всего Вам попалась поделка, модель с более низкого класса или бракованное изделие.</p>
                </div>
            </div>
        </section>
        

";
        // line 103
        if ((($tmp = ($context["recommended"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "    ";
            $context["min_slides"] = 6;
            // line 105
            yield "    ";
            $context["recommended_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["recommended"] ?? null));
            // line 106
            yield "    ";
            $context["total"] = (((($context["recommended_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["recommended_count"] ?? null)));
            // line 107
            yield "
    <section class=\"productSlider\">
        <div class=\"container\">
            <div class=\"productSlider__inner\">
                <div class=\"productSlider__top\">
                    <h2 class=\"productSlider__title title\">";
            // line 112
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
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 125
                yield "                            ";
                $context["product"] = (($_v1 = ($context["recommended"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["i"] % ($context["recommended_count"] ?? null))] ?? null) : null);
                // line 126
                yield "                            <div class=\"productSlider__slide swiper-slide product__item\">
                                <button class=\"product__item-fav\"></button>
                                <a class=\"product__item-image\" href=\"";
                // line 128
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 128);
                yield "\">
                                    <img src=\"";
                // line 129
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 129);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 129);
                yield "\">
                                </a>
                                <div class=\"product__item-content\">
                                    <div class=\"product__item-buttons\">
\t                                   <button onclick=\"card.add(";
                // line 133
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 133);
                yield ");\" class=\"product__item-btn btn\">
\t                                        В корзину
\t                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\">
\t                                            <path d=\"M7 5H10V7H7V10H5V7H2V5H5V2H7V5Z\" fill=\"#202222\"/>
\t                                        </svg>
\t                                    </button>
\t                                    <a class=\"product__item-btn btn\" href=\"#\">
\t                                        Подробнее
\t                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"12\" viewBox=\"0 0 13 12\" fill=\"none\">
\t                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.99988 9.00012L6.99988 6.00012L3.99988 3.00012L4.99988 2.00012L8.99988 6.00012L4.99988 10.0001L3.99988 9.00012Z\" fill=\"#202222\"/>
\t                                        </svg>
\t                                    </a>
\t       \t                        </div>
                                    <div class=\"product__item-info\">
                                        <a class=\"product__item-title\" href=\"";
                // line 147
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 147);
                yield "\">
                                            <h3>";
                // line 148
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 148);
                yield "</h3>
                                        </a>
                                        <p class=\"product__item-price\">
                                            ";
                // line 151
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 152
                    yield "                                                <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 152);
                    yield "</span>
                                                ";
                    // line 153
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 153);
                    yield "
                                            ";
                } else {
                    // line 155
                    yield "                                                ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 155);
                    yield "
                                            ";
                }
                // line 157
                yield "                                        </p>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            yield "                    </div>
                </div>
            </div>
        </div>
    </section>
";
        }
        // line 168
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/product/latest.twig";
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
        return array (  315 => 168,  307 => 162,  297 => 157,  291 => 155,  286 => 153,  281 => 152,  279 => 151,  273 => 148,  269 => 147,  252 => 133,  243 => 129,  239 => 128,  235 => 126,  232 => 125,  228 => 124,  213 => 112,  206 => 107,  203 => 106,  200 => 105,  197 => 104,  195 => 103,  160 => 70,  156 => 68,  143 => 62,  137 => 60,  135 => 59,  129 => 56,  111 => 41,  104 => 37,  98 => 33,  95 => 32,  91 => 31,  87 => 29,  85 => 28,  80 => 27,  77 => 26,  75 => 25,  67 => 20,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/product/latest.twig", "");
    }
}
