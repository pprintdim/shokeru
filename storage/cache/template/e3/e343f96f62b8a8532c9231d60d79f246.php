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
class __TwigTemplate_35703f8994fa250c36c24352e334ff9d extends Template
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
        if ((($tmp = ($context["filter_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 4
                yield "            <div class=\"shop__filters-box\" data-filter-id=\"";
                yield Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 4)), [" " => "-"]);
                yield "\">
                <div class=\"shop__filters-block\">
                    <h3 class=\"shop__filters-title\">";
                // line 6
                yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 6);
                yield "</h3>
                    <div class=\"container\">
                        <div class=\"shop__filters-select\">
                            ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter", [], "any", false, false, false, 9));
                foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                    // line 10
                    yield "                                <label class=\"checkbox-block\">
                                    <input type=\"checkbox\"
                                           name=\"filter-";
                    // line 12
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter_group_id", [], "any", false, false, false, 12);
                    yield "\"
                                           value=\"";
                    // line 13
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 13);
                    yield "\"
                                           hidden
                                           ";
                    // line 15
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 15), ($context["filter_category"] ?? null))) {
                        yield "checked";
                    }
                    yield ">
                                    <span>";
                    // line 16
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 16);
                    yield "</span>
                                </label>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                yield "                        </div>
                    </div>
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
            // line 30
            yield "    ";
        } else {
            // line 31
            yield "        <div class=\"shop__filters-box\">
            <div class=\"shop__filters-block\">
                <p>Фильтры недоступны для всех товаров</p>
            </div>
        </div>
    ";
        }
        // line 37
        yield "</div>

<div class=\"filters-open-mobile\">
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 41
            yield "        <button class=\"filters-open-title\" type=\"button\" data-filter-target=\"";
            yield Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 41)), [" " => "-"]);
            yield "\">
            ";
            // line 42
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 42);
            yield "
        </button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "</div>

";
        // line 48
        yield "<div class=\"shop__filters-box\">
    <div class=\"shop__filters-block\">
        <h3 class=\"shop__filters-title\">Цена</h3>
        <div class=\"shop__filters-price filters-price\">
            <input type=\"number\" name=\"price-from\" value=\"";
        // line 52
        yield ((array_key_exists("price_from", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_from"] ?? null), 100)) : (100));
        yield "\" min=\"0\" placeholder=\"от ";
        yield ((array_key_exists("price_from", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_from"] ?? null), 100)) : (100));
        yield "\">
            <input type=\"number\" name=\"price-to\" value=\"";
        // line 53
        yield ((array_key_exists("price_to", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_to"] ?? null), 2000)) : (2000));
        yield "\" min=\"0\" placeholder=\"до ";
        yield ((array_key_exists("price_to", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_to"] ?? null), 2000)) : (2000));
        yield "\">
        </div>
    </div>
</div>
";
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
        return array (  162 => 53,  156 => 52,  150 => 48,  146 => 45,  137 => 42,  132 => 41,  128 => 40,  123 => 37,  115 => 31,  112 => 30,  96 => 19,  87 => 16,  81 => 15,  76 => 13,  72 => 12,  68 => 10,  64 => 9,  58 => 6,  52 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/filter.twig", "");
    }
}
