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
class __TwigTemplate_434106e9680fc42ec1507530eacb76ed extends Template
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 276
                yield "                        \t\t";
                $context["product"] = (($_v0 = ($context["products"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["i"] % ($context["product_count"] ?? null))] ?? null) : null);
                // line 277
                yield "\t\t                        ";
                yield from $this->load("shokeru/template/product/product_card.twig", 277)->unwrap()->yield(CoreExtension::merge($context, ["product" => ($context["product"] ?? null)]));
                // line 278
                yield "

\t                    \t";
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
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            yield "\t                    </div>
                    ";
        }
        // line 283
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
        // line 316
        if ((($tmp = ($context["recommended"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 317
            yield "    ";
            $context["min_slides"] = 6;
            // line 318
            yield "    ";
            $context["recommended_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["recommended"] ?? null));
            // line 319
            yield "    ";
            $context["total"] = (((($context["recommended_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["recommended_count"] ?? null)));
            // line 320
            yield "
    <section class=\"productSlider\">
        <div class=\"container\">
            <div class=\"productSlider__inner\">
                <div class=\"productSlider__top\">
                    <h2 class=\"productSlider__title title\">";
            // line 325
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
            // line 337
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 338
                yield "                            ";
                $context["product"] = (($_v1 = ($context["recommended"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["i"] % ($context["recommended_count"] ?? null))] ?? null) : null);
                // line 339
                yield "                            ";
                yield from $this->load("shokeru/template/product/product_card.twig", 339)->unwrap()->yield(CoreExtension::merge($context, ["product" => ($context["product"] ?? null)]));
                // line 340
                yield "

                        ";
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
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            yield "                    </div>
                </div>
            </div>
        </div>
    </section>
";
        }
        // line 349
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
        // line 408
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
        return array (  313 => 408,  252 => 349,  244 => 343,  228 => 340,  225 => 339,  222 => 338,  205 => 337,  190 => 325,  183 => 320,  180 => 319,  177 => 318,  174 => 317,  172 => 316,  137 => 283,  133 => 281,  117 => 278,  114 => 277,  111 => 276,  94 => 275,  90 => 273,  88 => 272,  83 => 271,  80 => 270,  78 => 269,  75 => 268,  67 => 20,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/product/shop.twig", "");
    }
}
