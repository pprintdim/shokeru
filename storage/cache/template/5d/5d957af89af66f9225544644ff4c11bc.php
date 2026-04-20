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
class __TwigTemplate_6e92c8ebd9176528dfdac82b60094c38 extends Template
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
                                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 17
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 18
                yield "                                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "selected", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 19
                    yield "                                                <div class=\"filters-selected-item\">
                                                    <p class=\"filters-selected-title\">";
                    // line 20
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 20);
                    yield "</p>
                                                    <button class=\"filters-selected-delete\" type=\"button\" data-filter-id=\"";
                    // line 21
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 21);
                    yield "\"></button>
                                                </div>
                                            ";
                }
                // line 24
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "                                </div>

                                <select class=\"shop__filters-sort\" onchange=\"if(this.value) window.location.href=this.value;\">
                                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sorts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 30
            yield "                                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "href", [], "any", false, false, false, 30);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 30) == ($context["sort_selected"] ?? null))) {
                yield "selected";
            }
            yield ">
                                            ";
            // line 31
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "text", [], "any", false, false, false, 31);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sort'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sorts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 50
            yield "                                                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "href", [], "any", false, false, false, 50);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 50) == ($context["sort_selected"] ?? null))) {
                yield "selected";
            }
            yield ">
                                                    ";
            // line 51
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sort"], "text", [], "any", false, false, false, 51);
            yield "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sort'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "                                        </select>
                                    </div>

                                    
                                    ";
        // line 58
        yield ($context["filter"] ?? null);
        yield "
                                    
                                </div>
                            </div>
                        </form>
                    </div>

                    ";
        // line 65
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "                    \t";
            $context["min_slides"] = 20;
            // line 67
            yield "\t                    ";
            $context["product_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield " 
\t                    ";
            // line 68
            $context["total"] = (((($context["product_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["product_count"] ?? null)));
            // line 69
            yield "\t                    
                    \t<div class=\"shop__results\">
                    \t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 72
                yield "                        \t\t";
                $context["product"] = (($_v0 = ($context["products"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["i"] % ($context["product_count"] ?? null))] ?? null) : null);
                // line 73
                yield "
\t\t                        <div class=\"shop__item product__item\">
\t\t                            <button class=\"product__item-fav\"></button>
\t\t                            <a class=\"product__item-image\" href=\"#\">
\t\t                                <img src=\"";
                // line 77
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 77);
                yield "\" alt=\"\">
\t\t                            </a>
\t\t                            <div class=\"product__item-content\">
\t\t                                <div class=\"product__item-buttons\">
\t\t                                    <button onclick=\"card.add(";
                // line 81
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 81);
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
                // line 96
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 96);
                yield "</h3>
\t\t                                    </a>
\t\t                                    <p class=\"product__item-price\">
\t\t                                        ";
                // line 99
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 100
                    yield "\t\t                                            <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 100);
                    yield "</span>
\t\t                                        ";
                }
                // line 102
                yield "\t\t                                        ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 102)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 102)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 102)));
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
            // line 108
            yield "\t                    </div>
                    ";
        }
        // line 110
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
        // line 130
        yield ($context["content_bottom"] ?? null);
        yield "

        

    ";
        // line 134
        if ((($tmp = ($context["recommended"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "        ";
            $context["min_slides"] = 6;
            // line 136
            yield "        ";
            $context["recommended_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["recommended"] ?? null));
            // line 137
            yield "        ";
            $context["total"] = (((($context["recommended_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["recommended_count"] ?? null)));
            // line 138
            yield "
        <section class=\"productSlider\">
            <div class=\"container\">
                <div class=\"productSlider__inner\">
                    <div class=\"productSlider__top\">
                        <h2 class=\"productSlider__title title\">";
            // line 143
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
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 156
                yield "                                ";
                $context["product"] = (($_v1 = ($context["recommended"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["i"] % ($context["recommended_count"] ?? null))] ?? null) : null);
                // line 157
                yield "                                <div class=\"productSlider__slide swiper-slide product__item\">
                                    <button class=\"product__item-fav\"></button>
                                    <a class=\"product__item-image\" href=\"";
                // line 159
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 159);
                yield "\">
                                        <img src=\"";
                // line 160
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 160);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 160);
                yield "\">
                                    </a>
                                    <div class=\"product__item-content\">
                                        <div class=\"product__item-buttons\">
    \t                                   <button onclick=\"card.add(";
                // line 164
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 164);
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
                // line 178
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 178);
                yield "\">
                                                <h3>";
                // line 179
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 179);
                yield "</h3>
                                            </a>
                                            <p class=\"product__item-price\">
                                                ";
                // line 182
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 183
                    yield "                                                    <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 183);
                    yield "</span>
                                                    ";
                    // line 184
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 184);
                    yield "
                                                ";
                } else {
                    // line 186
                    yield "                                                    ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 186);
                    yield "
                                                ";
                }
                // line 188
                yield "                                            </p>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            yield "                        </div>
                    </div>
                </div>
            </div>
        </section>
    ";
        }
        // line 199
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

            document.querySelectorAll(\".filters-selected-delete\").forEach(btn => {
                btn.addEventListener(\"click\", () => {
                    const filterId = btn.dataset.filterId;
                    const checkbox = document.querySelector('input[type=\"checkbox\"][value=\"'+filterId+'\"]');
                    if (checkbox) {
                        checkbox.checked = false;
                        btn.closest(\"form\").submit(); // оновлюємо фільтри
                    }
                });
            });


        });


    </script>
";
        // line 268
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
        return array (  493 => 268,  422 => 199,  414 => 193,  404 => 188,  398 => 186,  393 => 184,  388 => 183,  386 => 182,  380 => 179,  376 => 178,  359 => 164,  350 => 160,  346 => 159,  342 => 157,  339 => 156,  335 => 155,  320 => 143,  313 => 138,  310 => 137,  307 => 136,  304 => 135,  302 => 134,  295 => 130,  273 => 110,  269 => 108,  256 => 102,  250 => 100,  248 => 99,  242 => 96,  224 => 81,  217 => 77,  211 => 73,  208 => 72,  204 => 71,  200 => 69,  198 => 68,  193 => 67,  190 => 66,  188 => 65,  178 => 58,  172 => 54,  163 => 51,  154 => 50,  150 => 49,  133 => 34,  124 => 31,  115 => 30,  111 => 29,  106 => 26,  100 => 25,  94 => 24,  88 => 21,  84 => 20,  81 => 19,  78 => 18,  73 => 17,  69 => 16,  63 => 13,  58 => 11,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/product/shop.twig", "");
    }
}
