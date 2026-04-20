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
class __TwigTemplate_951d101a5a674e029e8cfe271d2f8403 extends Template
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
        yield "<form method=\"get\" action=\"";
        yield ($context["filter_action"] ?? null);
        yield "\" class=\"shop__filters-form\">
    <div class=\"shop__filters-info\">
        ";
        // line 3
        if ((($tmp = ($context["filter_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 5
                yield "                <div class=\"shop__filters-box\" data-filter-id=\"";
                yield Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 5)), [" " => "-"]);
                yield "\">
                    <div class=\"shop__filters-block\">
                        <h3 class=\"shop__filters-title\">";
                // line 7
                yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 7);
                yield "</h3>
                        <div class=\"container\">
                            <div class=\"shop__filters-select\">
                                ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter", [], "any", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                    // line 11
                    yield "                                    <label class=\"checkbox-block\">
                                        <input type=\"checkbox\"
                                               name=\"filter[]\"
                                               value=\"";
                    // line 14
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 14);
                    yield "\"
                                               hidden
                                               ";
                    // line 16
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 16), ($context["filter_category"] ?? null))) {
                        yield "checked";
                    }
                    yield ">
                                        <span>";
                    // line 17
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 17);
                    yield "</span>
                                    </label>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                yield "                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"shop__filters-end\">
                                <button class=\"shop__filters-send btn-4\" type=\"submit\">Подтвердить</button>
                                <button class=\"shop__filters-resets btn-3\" type=\"button\">Сбросить фильтр</button>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "        ";
        } else {
            // line 32
            yield "            <div class=\"shop__filters-box\">
                <div class=\"shop__filters-block\">
                    <p>Фильтры недоступны для всех товаров</p>
                </div>
            </div>
        ";
        }
        // line 38
        yield "    </div>

    <div class=\"filters-open-mobile\">
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 42
            yield "            <button class=\"filters-open-title\" type=\"button\" data-filter-target=\"";
            yield Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 42)), [" " => "-"]);
            yield "\">
                ";
            // line 43
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 43);
            yield "
            </button>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "    </div>

    ";
        // line 49
        yield "    <div class=\"shop__filters-box\">
        <div class=\"shop__filters-block\">
            <h3 class=\"shop__filters-title\">Цена</h3>
            <div class=\"shop__filters-price filters-price\">
                <input type=\"number\" name=\"price-from\" value=\"";
        // line 53
        yield ((array_key_exists("price_from", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_from"] ?? null), 100)) : (100));
        yield "\" min=\"0\" placeholder=\"от ";
        yield ((array_key_exists("price_from", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_from"] ?? null), 100)) : (100));
        yield "\">
                <input type=\"number\" name=\"price-to\" value=\"";
        // line 54
        yield ((array_key_exists("price_to", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_to"] ?? null), 2000)) : (2000));
        yield "\" min=\"0\" placeholder=\"до ";
        yield ((array_key_exists("price_to", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_to"] ?? null), 2000)) : (2000));
        yield "\">
            </div>
        </div>
    </div>
</form>
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
        return array (  162 => 54,  156 => 53,  150 => 49,  146 => 46,  137 => 43,  132 => 42,  128 => 41,  123 => 38,  115 => 32,  112 => 31,  96 => 20,  87 => 17,  81 => 16,  76 => 14,  71 => 11,  67 => 10,  61 => 7,  55 => 5,  50 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/filter.twig", "");
    }
}
