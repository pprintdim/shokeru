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
class __TwigTemplate_4c543ee8022a9a8e0bd0bf4d0a218e7a extends Template
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

                    ";
        // line 253
        yield "
                    ";
        // line 254
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 255
            yield "                    \t";
            $context["min_slides"] = 20;
            // line 256
            yield "\t                    ";
            $context["product_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield " 
\t                    ";
            // line 257
            $context["total"] = (((($context["product_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["product_count"] ?? null)));
            // line 258
            yield "\t                    
                    \t<div class=\"shop__results\">
                    \t\t";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 261
                yield "                        \t\t";
                $context["product"] = (($_v0 = ($context["products"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["i"] % ($context["product_count"] ?? null))] ?? null) : null);
                // line 262
                yield "
\t\t                        <div class=\"shop__item product__item\">
\t\t                            <button class=\"product__item-fav\"></button>
\t\t                            <a class=\"product__item-image\" href=\"#\">
\t\t                                <img src=\"";
                // line 266
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 266);
                yield "\" alt=\"\">
\t\t                            </a>
\t\t                            <div class=\"product__item-content\">
\t\t                                <div class=\"product__item-buttons\">
\t\t                                    <button onclick=\"card.add(";
                // line 270
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 270);
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
                // line 285
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 285);
                yield "</h3>
\t\t                                    </a>
\t\t                                    <p class=\"product__item-price\">
\t\t                                        ";
                // line 288
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 288)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 289
                    yield "\t\t                                            <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 289);
                    yield "</span>
\t\t                                        ";
                }
                // line 291
                yield "\t\t                                        ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 291)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 291)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 291)));
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
            // line 297
            yield "\t                    </div>
                    ";
        }
        // line 299
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
        // line 319
        yield ($context["content_bottom"] ?? null);
        yield "

        

";
        // line 323
        if ((($tmp = ($context["recommended"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 324
            yield "    ";
            $context["min_slides"] = 6;
            // line 325
            yield "    ";
            $context["recommended_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["recommended"] ?? null));
            // line 326
            yield "    ";
            $context["total"] = (((($context["recommended_count"] ?? null) < ($context["min_slides"] ?? null))) ? (($context["min_slides"] ?? null)) : (($context["recommended_count"] ?? null)));
            // line 327
            yield "
    <section class=\"productSlider\">
        <div class=\"container\">
            <div class=\"productSlider__inner\">
                <div class=\"productSlider__top\">
                    <h2 class=\"productSlider__title title\">";
            // line 332
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
            // line 344
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["total"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 345
                yield "                            ";
                $context["product"] = (($_v1 = ($context["recommended"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["i"] % ($context["recommended_count"] ?? null))] ?? null) : null);
                // line 346
                yield "                            <div class=\"productSlider__slide swiper-slide product__item\">
                                <button class=\"product__item-fav\"></button>
                                <a class=\"product__item-image\" href=\"";
                // line 348
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 348);
                yield "\">
                                    <img src=\"";
                // line 349
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 349);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 349);
                yield "\">
                                </a>
                                <div class=\"product__item-content\">
                                    <div class=\"product__item-buttons\">
\t                                   <button onclick=\"card.add(";
                // line 353
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 353);
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
                // line 367
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 367);
                yield "\">
                                            <h3>";
                // line 368
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 368);
                yield "</h3>
                                        </a>
                                        <p class=\"product__item-price\">
                                            ";
                // line 371
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 371)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 372
                    yield "                                                <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 372);
                    yield "</span>
                                                ";
                    // line 373
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 373);
                    yield "
                                            ";
                } else {
                    // line 375
                    yield "                                                ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 375);
                    yield "
                                            ";
                }
                // line 377
                yield "                                        </p>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 382
            yield "                    </div>
                </div>
            </div>
        </div>
    </section>
";
        }
        // line 388
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
        // line 447
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
        return array (  355 => 447,  294 => 388,  286 => 382,  276 => 377,  270 => 375,  265 => 373,  260 => 372,  258 => 371,  252 => 368,  248 => 367,  231 => 353,  222 => 349,  218 => 348,  214 => 346,  211 => 345,  207 => 344,  192 => 332,  185 => 327,  182 => 326,  179 => 325,  176 => 324,  174 => 323,  167 => 319,  145 => 299,  141 => 297,  128 => 291,  122 => 289,  120 => 288,  114 => 285,  96 => 270,  89 => 266,  83 => 262,  80 => 261,  76 => 260,  72 => 258,  70 => 257,  65 => 256,  62 => 255,  60 => 254,  57 => 253,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/product/shop.twig", "");
    }
}
