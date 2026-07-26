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
class __TwigTemplate_e4819c1487bfebdbb94fdb666eecbe88 extends Template
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
        // line 268
        yield "
                    ";
        // line 269
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 270
            yield "                    \t";
            $context["min_slides"] = 20;
            // line 271
            yield "\t                    ";
            $context["product_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield " 
\t                    ";
            // line 272
            $context["total"] = (((($context["product_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["product_count"] ?? null)));
            // line 273
            yield "\t                    
                    \t<div class=\"shop__results\">
                    \t\t";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 276
                yield "                        \t\t";
                $context["product"] = (($_v0 = ($context["products"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["i"] % ($context["product_count"] ?? null))] ?? null) : null);
                // line 277
                yield "
\t\t                        <div class=\"shop__item product__item\">
\t\t                            <button class=\"product__item-fav\"></button>
\t\t                            <a class=\"product__item-image\" href=\"#\">
\t\t                                <img src=\"";
                // line 281
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 281);
                yield "\" alt=\"\">
\t\t                            </a>
\t\t                            <div class=\"product__item-content\">
\t\t                                <div class=\"product__item-buttons\">
\t\t                                    <button onclick=\"card.add(";
                // line 285
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 285);
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
                // line 300
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 300);
                yield "</h3>
\t\t                                    </a>
\t\t                                    <p class=\"product__item-price\">
\t\t                                        ";
                // line 303
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 303)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 304
                    yield "\t\t                                            <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 304);
                    yield "</span>
\t\t                                        ";
                }
                // line 306
                yield "\t\t                                        ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 306)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 306)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 306)));
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
            // line 312
            yield "\t                    </div>
                    ";
        }
        // line 314
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
        // line 347
        if ((($tmp = ($context["recommended"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 348
            yield "    ";
            $context["min_slides"] = 6;
            // line 349
            yield "    ";
            $context["recommended_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["recommended"] ?? null));
            // line 350
            yield "    ";
            $context["total"] = (((($context["recommended_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["recommended_count"] ?? null)));
            // line 351
            yield "
    <section class=\"productSlider\">
        <div class=\"container\">
            <div class=\"productSlider__inner\">
                <div class=\"productSlider__top\">
                    <h2 class=\"productSlider__title title\">";
            // line 356
            yield ((($context["text_recommended"] ?? null)) ? ($context["text_recommended"]) : ("Подобрано Для Вас"));
            yield "</h2>
                    <div class=\"productSlider__button slider-buttons\">
                        <button class=\"productSlider-prev slider-btn-prev\">
                            <!-- SVG prev -->
                        </button>
                        <button class=\"productSlider-next slider-btn-next\">
                            <!-- SVG next -->
                        </button>
                    </div>
                </div>
                <div class=\"productSlider__slider\">
                    <div class=\"swiper-wrapper\">
                        ";
            // line 368
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 369
                yield "                            ";
                $context["product"] = (($_v1 = ($context["recommended"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["i"] % ($context["recommended_count"] ?? null))] ?? null) : null);
                // line 370
                yield "                            <div class=\"productSlider__slide swiper-slide product__item\">
                                <button class=\"product__item-fav\"></button>
                                <a class=\"product__item-image\" href=\"";
                // line 372
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 372);
                yield "\">
                                    <img src=\"";
                // line 373
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 373);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 373);
                yield "\">
                                </a>
                                <div class=\"product__item-content\">
                                    <div class=\"product__item-buttons\">
\t                                   <button onclick=\"card.add(";
                // line 377
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 377);
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
                // line 391
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 391);
                yield "\">
                                            <h3>";
                // line 392
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 392);
                yield "</h3>
                                        </a>
                                        <p class=\"product__item-price\">
                                            ";
                // line 395
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 395)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 396
                    yield "                                                <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 396);
                    yield "</span>
                                                ";
                    // line 397
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 397);
                    yield "
                                            ";
                } else {
                    // line 399
                    yield "                                                ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 399);
                    yield "
                                            ";
                }
                // line 401
                yield "                                        </p>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 406
            yield "                    </div>
                </div>
            </div>
        </div>
    </section>
";
        }
        // line 412
        yield "
<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const filtersContainer = document.querySelector(\".shop__filters\");
    const toggleFiltersBtn = document.querySelector(\".shop__filters-open\");
    const closeFiltersBtn = document.querySelector(\".shop__filters-close\");
    const backFiltersBtn = document.querySelector(\".shop__filters-back\");

    function openOrCloseFilters() {
        filtersContainer.classList.toggle(\"active\");
    }

    function closeFilters() {
        filtersContainer.classList.remove(\"active\");
    }

    if (toggleFiltersBtn) toggleFiltersBtn.addEventListener(\"click\", openOrCloseFilters);
    if (closeFiltersBtn) closeFiltersBtn.addEventListener(\"click\", closeFilters);
    if (backFiltersBtn) backFiltersBtn.addEventListener(\"click\", closeFilters);

    const filterTabButtons = document.querySelectorAll(\".filters-open-title[data-filter-target]\");
    const filterPanels = document.querySelectorAll(\".shop__filters-box\");
    const filterPanelTitles = document.querySelectorAll(\".shop__filters-title\");

    filterTabButtons.forEach(tabBtn => {
        tabBtn.addEventListener(\"click\", () => {
            const targetId = tabBtn.dataset.filterTarget;

            filterPanels.forEach(panel => {
                if (panel.dataset.filterId === targetId) {
                    panel.classList.add(\"active\");
                } else {
                    panel.classList.remove(\"active\");
                }
            });
        });
    });

    filterPanelTitles.forEach(title => {
        title.addEventListener(\"click\", () => {
            filterPanels.forEach(panel => panel.classList.remove(\"active\"));
        });
    });

    const resetButtons = document.querySelectorAll(\".shop__filters-resets\");
    resetButtons.forEach(button => {
        button.addEventListener(\"click\", () => {
        const filterBox = button.closest(\".shop__filters-box\");
        if (!filterBox) return;

        const inputs = filterBox.querySelectorAll('input[type=\"checkbox\"]');
        inputs.forEach(input => {
            input.checked = false;
        });
        });
    });
});

</script>
";
        // line 471
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
        return array (  379 => 471,  318 => 412,  310 => 406,  300 => 401,  294 => 399,  289 => 397,  284 => 396,  282 => 395,  276 => 392,  272 => 391,  255 => 377,  246 => 373,  242 => 372,  238 => 370,  235 => 369,  231 => 368,  216 => 356,  209 => 351,  206 => 350,  203 => 349,  200 => 348,  198 => 347,  163 => 314,  159 => 312,  146 => 306,  140 => 304,  138 => 303,  132 => 300,  114 => 285,  107 => 281,  101 => 277,  98 => 276,  94 => 275,  90 => 273,  88 => 272,  83 => 271,  80 => 270,  78 => 269,  75 => 268,  67 => 20,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/product/shop.twig", "");
    }
}
