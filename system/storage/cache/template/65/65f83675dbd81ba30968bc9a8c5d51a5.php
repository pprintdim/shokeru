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

/* shokeru/template/product/search.twig */
class __TwigTemplate_115d2a8ddb2b1cfe557f3beebdf76fde extends Template
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
    

    <section class=\"pageInfo pageInfo-border\">
        <div class=\"container\">
            <ul class=\"breadcrumbs\">
\t\t      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            yield "\t\t\t        <li>
\t\t\t          <a href=\"";
            // line 11
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "class=\"active\"";
            }
            yield ">
\t\t\t            ";
            // line 12
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "
\t\t\t          </a>
\t\t\t        </li>
\t\t      ";
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
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "\t\t\t</ul>
            <div class=\"pageInfo__inner\">
                <h1 class=\"pageInfo__title main-title\">";
        // line 18
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                <p class=\"pageInfo__descr\">";
        // line 19
        yield ($context["text_results"] ?? null);
        yield "</p>
            </div>
        </div>
    </section>

    <section class=\"shop\">
        <div class=\"container\">
            <div class=\"shop__inner\">
                ";
        // line 27
        yield ($context["filter"] ?? null);
        yield "
                ";
        // line 28
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "                    <div class=\"shop__results\">
                        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 31
                yield "                            <div class=\"shop__item product__item\">
                                <button class=\"product__item-fav\"></button>
                                <a class=\"product__item-image\" href=\"";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 33);
                yield "\">
                                    <img src=\"";
                // line 34
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 34);
                yield "\" alt=\"\">
                                </a>
                                <div class=\"product__item-content\">
                                    <div class=\"product__item-buttons\">
                                        <button onclick=\"card.add(";
                // line 38
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 38);
                yield ");\" class=\"product__item-btn btn\">
                                            ";
                // line 39
                yield ($context["button_cart"] ?? null);
                yield "
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\">
                                                <path d=\"M7 5H10V7H7V10H5V7H2V5H5V2H7V5Z\" fill=\"#202222\"/>
                                            </svg>
                                        </button>
                                        <a class=\"product__item-btn btn\" href=\"#\">
                                            ";
                // line 45
                yield ($context["button_view"] ?? null);
                yield "
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"12\" viewBox=\"0 0 13 12\" fill=\"none\">
                                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.99988 9.00012L6.99988 6.00012L3.99988 3.00012L4.99988 2.00012L8.99988 6.00012L4.99988 10.0001L3.99988 9.00012Z\" fill=\"#202222\"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class=\"product__item-info\">
                                        <a class=\"product__item-title\" href=\"#\">
                                            <h3>";
                // line 53
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
                yield "</h3>
                                        </a>
                                        <p class=\"product__item-price\">
                                            ";
                // line 56
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 57
                    yield "                                                <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57);
                    yield "</span>
                                            ";
                }
                // line 59
                yield "                                            ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 59)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 59)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 59)));
                yield "
                                        </p>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "                        
                    </div>
                ";
        } else {
            // line 68
            yield "                    <p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
                ";
        }
        // line 70
        yield "                        
                <div class=\"shop__bottom\">
                    <a href=\"";
        // line 72
        yield ($context["shop"] ?? null);
        yield "\" class=\"shop__more btn-4\">
                        ";
        // line 73
        yield ($context["button_catalog"] ?? null);
        yield "
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\">
                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.66602 12.0002L8.66602 8.00016L4.66602 4.00016L5.99935 2.66683L11.3327 8.00016L5.99935 13.3335L4.66602 12.0002Z\" fill=\"white\"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
        
    ";
        // line 83
        yield ($context["content_bottom"] ?? null);
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
        // line 142
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/product/search.twig";
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
        return array (  294 => 142,  232 => 83,  219 => 73,  215 => 72,  211 => 70,  205 => 68,  200 => 65,  187 => 59,  181 => 57,  179 => 56,  173 => 53,  162 => 45,  153 => 39,  149 => 38,  142 => 34,  138 => 33,  134 => 31,  130 => 30,  127 => 29,  125 => 28,  121 => 27,  110 => 19,  106 => 18,  102 => 16,  84 => 12,  76 => 11,  73 => 10,  56 => 9,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/product/search.twig", "");
    }
}
