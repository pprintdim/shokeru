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
class __TwigTemplate_43b8a558435250fb1acbb5200a3f00c8 extends Template
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sorts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 27
            yield "                                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "href", [], "any", false, false, false, 27);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 27) == ($context["sort_selected"] ?? null))) {
                yield "selected";
            }
            yield ">
                                            ";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "text", [], "any", false, false, false, 28);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sort'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
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

                                        <select class=\"shop__filters-sort\" onchange=\"if(this.value) window.location.href=this.value;\">
                                            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sorts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 47
            yield "                                                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "href", [], "any", false, false, false, 47);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 47) == ($context["sort_selected"] ?? null))) {
                yield "selected";
            }
            yield ">
                                                    ";
            // line 48
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "text", [], "any", false, false, false, 48);
            yield "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sort'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                                        </select>
                                    </div>

                                    
                                    ";
        // line 55
        yield ($context["filter"] ?? null);
        yield "
                                    
                                </div>
                            </div>
                        </form>
                    </div>

                    ";
        // line 62
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "                    \t";
            $context["min_slides"] = 20;
            // line 64
            yield "\t                    ";
            $context["product_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield " 
\t                    ";
            // line 65
            $context["total"] = (((($context["product_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["product_count"] ?? null)));
            // line 66
            yield "\t                    
                    \t<div class=\"shop__results\">
                    \t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 69
                yield "                        \t\t";
                $context["product"] = (($_v0 = ($context["products"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["i"] % ($context["product_count"] ?? null))] ?? null) : null);
                // line 70
                yield "
\t\t                        <div class=\"shop__item product__item\">
\t\t                            <button class=\"product__item-fav\"></button>
\t\t                            <a class=\"product__item-image\" href=\"#\">
\t\t                                <img src=\"";
                // line 74
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 74);
                yield "\" alt=\"\">
\t\t                            </a>
\t\t                            <div class=\"product__item-content\">
\t\t                                <div class=\"product__item-buttons\">
\t\t                                    <button onclick=\"card.add(";
                // line 78
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 78);
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
                // line 93
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 93);
                yield "</h3>
\t\t                                    </a>
\t\t                                    <p class=\"product__item-price\">
\t\t                                        ";
                // line 96
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 97
                    yield "\t\t                                            <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 97);
                    yield "</span>
\t\t                                        ";
                }
                // line 99
                yield "\t\t                                        ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 99)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 99)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 99)));
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
            // line 105
            yield "\t                    </div>
                    ";
        }
        // line 107
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
        // line 127
        yield ($context["content_bottom"] ?? null);
        yield "

        

    ";
        // line 131
        if ((($tmp = ($context["recommended"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "        ";
            $context["min_slides"] = 6;
            // line 133
            yield "        ";
            $context["recommended_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["recommended"] ?? null));
            // line 134
            yield "        ";
            $context["total"] = (((($context["recommended_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["recommended_count"] ?? null)));
            // line 135
            yield "
        <section class=\"productSlider\">
            <div class=\"container\">
                <div class=\"productSlider__inner\">
                    <div class=\"productSlider__top\">
                        <h2 class=\"productSlider__title title\">";
            // line 140
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
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 153
                yield "                                ";
                $context["product"] = (($_v1 = ($context["recommended"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["i"] % ($context["recommended_count"] ?? null))] ?? null) : null);
                // line 154
                yield "                                <div class=\"productSlider__slide swiper-slide product__item\">
                                    <button class=\"product__item-fav\"></button>
                                    <a class=\"product__item-image\" href=\"";
                // line 156
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 156);
                yield "\">
                                        <img src=\"";
                // line 157
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 157);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 157);
                yield "\">
                                    </a>
                                    <div class=\"product__item-content\">
                                        <div class=\"product__item-buttons\">
    \t                                   <button onclick=\"card.add(";
                // line 161
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 161);
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
                // line 175
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 175);
                yield "\">
                                                <h3>";
                // line 176
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 176);
                yield "</h3>
                                            </a>
                                            <p class=\"product__item-price\">
                                                ";
                // line 179
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 180
                    yield "                                                    <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 180);
                    yield "</span>
                                                    ";
                    // line 181
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 181);
                    yield "
                                                ";
                } else {
                    // line 183
                    yield "                                                    ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 183);
                    yield "
                                                ";
                }
                // line 185
                yield "                                            </p>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            yield "                        </div>
                    </div>
                </div>
            </div>
        </section>
    ";
        }
        // line 196
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
        // line 253
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
        return array (  449 => 253,  390 => 196,  382 => 190,  372 => 185,  366 => 183,  361 => 181,  356 => 180,  354 => 179,  348 => 176,  344 => 175,  327 => 161,  318 => 157,  314 => 156,  310 => 154,  307 => 153,  303 => 152,  288 => 140,  281 => 135,  278 => 134,  275 => 133,  272 => 132,  270 => 131,  263 => 127,  241 => 107,  237 => 105,  224 => 99,  218 => 97,  216 => 96,  210 => 93,  192 => 78,  185 => 74,  179 => 70,  176 => 69,  172 => 68,  168 => 66,  166 => 65,  161 => 64,  158 => 63,  156 => 62,  146 => 55,  140 => 51,  131 => 48,  122 => 47,  118 => 46,  101 => 31,  92 => 28,  83 => 27,  79 => 26,  63 => 13,  58 => 11,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/product/shop.twig", "");
    }
}
