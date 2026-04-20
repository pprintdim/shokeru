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

/* shokeru/template/extension/module/filter.twig */
class __TwigTemplate_0e8bb2f71e3bbaa964baeb1e2085d3c7 extends Template
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
        yield "<div class=\"shop__filters-info\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 3
            yield "        <div class=\"shop__filters-box\" data-filter-id=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter_group_id", [], "any", false, false, false, 3);
            yield "\">
                <div class=\"shop__filters-block\">
                    <h3 class=\"shop__filters-title\">";
            // line 5
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 5);
            yield "</h3>
                    <div class=\"shop__filters-select\">
                        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 8
                yield "                        <label class=\"checkbox-block\">
                            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                // line 9
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 9);
                yield "\" hidden
                                ";
                // line 10
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "selected", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "checked";
                }
                yield ">
                            <span>";
                // line 11
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 11);
                yield "</span>
                        </label>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "                    </div>
                    <div class=\"container\">
                        <div class=\"shop__filters-end\">
                            <button class=\"shop__filters-send btn-4\" type=\"submit\">подтвердить</button>
                            <button class=\"shop__filters-resets\" type=\"button\">Сбросить фильтр</button>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
            ";
        // line 26
        yield "            <div class=\"shop__filters-box\">
                <div class=\"shop__filters-block\">
                    <h3 class=\"shop__filters-title\">Цена</h3>
                    <div class=\"shop__filters-price filters-price\">
                        <input type=\"number\" name=\"price-from\" value=\"";
        // line 30
        yield ((array_key_exists("price_from", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_from"] ?? null), "")) : (""));
        yield "\" min=\"0\" placeholder=\"от\">
                        <input type=\"number\" name=\"price-to\" value=\"";
        // line 31
        yield ((array_key_exists("price_to", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_to"] ?? null), "")) : (""));
        yield "\" min=\"0\" placeholder=\"до\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"shop__filters-buttons\">
            <button class=\"shop__filters-back btn-3\" type=\"reset\">назад</button>
            <button class=\"shop__filters-reset btn-3\" type=\"reset\">сбросить</button>
            <button class=\"shop__filters-submit btn-4\" type=\"submit\">Применить</button>
        </div>
    </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/extension/module/filter.twig";
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
        return array (  114 => 31,  110 => 30,  104 => 26,  101 => 24,  86 => 14,  77 => 11,  71 => 10,  67 => 9,  64 => 8,  60 => 7,  55 => 5,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/filter.twig", "");
    }
}
