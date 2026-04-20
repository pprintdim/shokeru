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
class __TwigTemplate_f0b724b52b87eeffa6cfc50e53f364cd extends Template
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


    <section class=\"shop\">
            <div class=\"container\">
                <div class=\"shop__inner\">

                    <div class=\"shop__content\">
                        <form method=\"GET\" class=\"shop__filters\" action=\"";
        // line 11
        yield ($context["filter_action"] ?? null);
        yield "\">
                            <div class=\"shop__filters-top\">
                                <button class=\"shop__filters-open\" type=\"button\">";
        // line 13
        yield ((($context["text_filter"] ?? null)) ? ($context["text_filter"]) : ("Фильтр"));
        yield "</button>
                                <div class=\"shop__filters-selected filters-selected\">
                                    <div class=\"filters-selected-item\">
                                        <p class=\"filters-selected-title\">Standart</p>
                                        <button class=\"filters-selected-delete\"></button>
                                    </div>
                                    <div class=\"filters-selected-item\">
                                        <p class=\"filters-selected-title\">< 50 (k.volts)</p>
                                        <button class=\"filters-selected-delete\"></button>
                                    </div>
                                </div>
                                <select class=\"shop__filters-sort\" onchange=\"if(this.value) window.location.href=this.value;\">
                                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sorts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 26
            yield "                                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "href", [], "any", false, false, false, 26);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 26) == ($context["sort_selected"] ?? null))) {
                yield "selected";
            }
            yield ">
                                            ";
            // line 27
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "text", [], "any", false, false, false, 27);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sort'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "                                </select>
                            </div>
                            <div class=\"shop__filters-bottom\">
                                <div class=\"shop__filters-start\">
                                    <div class=\"container\">
                                        <button class=\"shop__filters-start--reset\" type=\"reset\">Сбросить фильтр</button>
                                        <p class=\"shop__filters-start--number\">Фильтр (2)</p>
                                    </div>
                                </div>
                                <div class=\"container\">
                                    <div class=\"shop__filters-menu\">
                                        <button class=\"shop__filters-close\" type=\"button\"></button>

                                        <select class=\"shop__filters-sort\" name=\"sort\" onchange=\"if(this.value) window.location.href=this.value;\">
                                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sorts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 45
            yield "                                                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "href", [], "any", false, false, false, 45);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 45) == ($context["sort_selected"] ?? null))) {
                yield "selected";
            }
            yield ">
                                                    ";
            // line 46
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "text", [], "any", false, false, false, 46);
            yield "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sort'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                                        </select>
                                    </div>

                                    
                                    ";
        // line 53
        yield ($context["filter"] ?? null);
        yield "
                                    <div class=\"shop__filters-buttons\">
                                        <button class=\"shop__filters-back btn-3\" type=\"reset\">назад</button>
                                        <button class=\"shop__filters-reset btn-3\" type=\"reset\">сбросить</button>
                                        <button class=\"shop__filters-submit btn-4\" type=\"submit\">Применить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    ";
        // line 64
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "                    \t";
            $context["min_slides"] = 20;
            // line 66
            yield "\t                    ";
            $context["product_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield " 
\t                    ";
            // line 67
            $context["total"] = (((($context["product_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["product_count"] ?? null)));
            // line 68
            yield "\t                    
                    \t<div class=\"shop__results\">
                    \t\t";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 71
                yield "                        \t\t";
                $context["product"] = (($_v0 = ($context["products"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["i"] % ($context["product_count"] ?? null))] ?? null) : null);
                // line 72
                yield "
\t\t                        <div class=\"shop__item product__item\">
\t\t                            <button class=\"product__item-fav\"></button>
\t\t                            <a class=\"product__item-image\" href=\"#\">
\t\t                                <img src=\"";
                // line 76
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 76);
                yield "\" alt=\"\">
\t\t                            </a>
\t\t                            <div class=\"product__item-content\">
\t\t                                <div class=\"product__item-buttons\">
\t\t                                    <button onclick=\"card.add(";
                // line 80
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 80);
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
                // line 95
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 95);
                yield "</h3>
\t\t                                    </a>
\t\t                                    <p class=\"product__item-price\">
\t\t                                        ";
                // line 98
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 99
                    yield "\t\t                                            <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 99);
                    yield "</span>
\t\t                                        ";
                }
                // line 101
                yield "\t\t                                        ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 101)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 101)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 101)));
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
            // line 107
            yield "\t                    </div>
                    ";
        }
        // line 109
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
        // line 129
        yield ($context["content_bottom"] ?? null);
        yield "

        

    ";
        // line 133
        if ((($tmp = ($context["recommended"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "        ";
            $context["min_slides"] = 6;
            // line 135
            yield "        ";
            $context["recommended_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["recommended"] ?? null));
            // line 136
            yield "        ";
            $context["total"] = (((($context["recommended_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["recommended_count"] ?? null)));
            // line 137
            yield "
        <section class=\"productSlider\">
            <div class=\"container\">
                <div class=\"productSlider__inner\">
                    <div class=\"productSlider__top\">
                        <h2 class=\"productSlider__title title\">";
            // line 142
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
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 155
                yield "                                ";
                $context["product"] = (($_v1 = ($context["recommended"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["i"] % ($context["recommended_count"] ?? null))] ?? null) : null);
                // line 156
                yield "                                <div class=\"productSlider__slide swiper-slide product__item\">
                                    <button class=\"product__item-fav\"></button>
                                    <a class=\"product__item-image\" href=\"";
                // line 158
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 158);
                yield "\">
                                        <img src=\"";
                // line 159
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 159);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 159);
                yield "\">
                                    </a>
                                    <div class=\"product__item-content\">
                                        <div class=\"product__item-buttons\">
    \t                                   <button onclick=\"card.add(";
                // line 163
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 163);
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
                // line 177
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 177);
                yield "\">
                                                <h3>";
                // line 178
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 178);
                yield "</h3>
                                            </a>
                                            <p class=\"product__item-price\">
                                                ";
                // line 181
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 182
                    yield "                                                    <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 182);
                    yield "</span>
                                                    ";
                    // line 183
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 183);
                    yield "
                                                ";
                } else {
                    // line 185
                    yield "                                                    ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 185);
                    yield "
                                                ";
                }
                // line 187
                yield "                                            </p>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            yield "                        </div>
                    </div>
                </div>
            </div>
        </section>
    ";
        }
        // line 198
        yield "
    <script>

        document.addEventListener(\"DOMContentLoaded\", function () {

            // ======================
            // Основні елементи
            // ======================
            const filtersContainer = document.querySelector(\".shop__filters\");
            const toggleBtn  = document.querySelector(\".shop__filters-open\");
            const closeBtn   = document.querySelector(\".shop__filters-close\");
            const backBtn    = document.querySelector(\".shop__filters-back\");

            // ======================
            // Відкриття / закриття фільтрів
            // ======================
            const toggleFilters = () => filtersContainer.classList.toggle(\"active\");
            const closeFilters  = () => filtersContainer.classList.remove(\"active\");

            if (toggleBtn) toggleBtn.addEventListener(\"click\", toggleFilters);
            if (closeBtn) closeBtn.addEventListener(\"click\", closeFilters);
            if (backBtn)  backBtn.addEventListener(\"click\", closeFilters);

            // ======================
            // Відкриття панелей конкретних фільтрів
            // ======================
            const tabButtons = document.querySelectorAll(\".filters-open-title[data-filter-target]\");
            const panels     = document.querySelectorAll(\".shop__filters-box\");
            const panelTitles= document.querySelectorAll(\".shop__filters-title\");

            tabButtons.forEach(btn => {
                btn.addEventListener(\"click\", () => {
                    const target = btn.dataset.filterTarget;
                    panels.forEach(panel => panel.classList.toggle(\"active\", panel.dataset.filterId === target));
                });
            });

            panelTitles.forEach(title => {
                title.addEventListener(\"click\", () => panels.forEach(panel => panel.classList.remove(\"active\")));
            });

            // ======================
            // Скидання чекбоксів у конкретній панелі
            // ======================
            const resetButtons = document.querySelectorAll(\".shop__filters-resets\");
            resetButtons.forEach(btn => {
                btn.addEventListener(\"click\", () => {
                    const box = btn.closest(\".shop__filters-box\");
                    if (!box) return;
                    box.querySelectorAll('input[type=\"checkbox\"]').forEach(input => input.checked = false);
                });
            });

        });


    </script>
";
        // line 255
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
        return array (  451 => 255,  392 => 198,  384 => 192,  374 => 187,  368 => 185,  363 => 183,  358 => 182,  356 => 181,  350 => 178,  346 => 177,  329 => 163,  320 => 159,  316 => 158,  312 => 156,  309 => 155,  305 => 154,  290 => 142,  283 => 137,  280 => 136,  277 => 135,  274 => 134,  272 => 133,  265 => 129,  243 => 109,  239 => 107,  226 => 101,  220 => 99,  218 => 98,  212 => 95,  194 => 80,  187 => 76,  181 => 72,  178 => 71,  174 => 70,  170 => 68,  168 => 67,  163 => 66,  160 => 65,  158 => 64,  144 => 53,  138 => 49,  129 => 46,  120 => 45,  116 => 44,  100 => 30,  91 => 27,  82 => 26,  78 => 25,  63 => 13,  58 => 11,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/product/shop.twig", "");
    }
}
