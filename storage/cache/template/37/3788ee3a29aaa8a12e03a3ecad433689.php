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
class __TwigTemplate_10fdc624b4a6b263f1aa3cdf1f5dcb72 extends Template
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
        yield "<div class=\"shop__content\">
    <form class=\"shop__filters\" action=\"";
        // line 2
        yield ($context["action"] ?? null);
        yield "\" method=\"get\">
        <div class=\"shop__filters-top\">
            <button class=\"shop__filters-open\" type=\"button\">Фільтр</button>

            ";
        // line 7
        yield "            <div class=\"shop__filters-selected filters-selected\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 9
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 10
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "selected", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 11
                    yield "                            <div class=\"filters-selected-item\">
                                <p class=\"filters-selected-title\">";
                    // line 12
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 12);
                    yield "</p>
                                <button class=\"filters-selected-delete\" type=\"button\" data-filter-id=\"";
                    // line 13
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 13);
                    yield "\"></button>
                            </div>
                        ";
                }
                // line 16
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "            </div>

            ";
        // line 21
        yield "            <select class=\"shop__filters-sort\" name=\"sort_order\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sort_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 23
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 23);
            yield "\"
                        ";
            // line 24
            if ((($context["sort_selected"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 24))) {
                yield "selected";
            }
            yield ">
                        ";
            // line 25
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "text", [], "any", false, false, false, 25);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
            </select>
        </div>

        <div class=\"shop__filters-bottom\">
            <div class=\"container\">
                <div class=\"shop__filters-info\">
                    ";
        // line 36
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 37
            yield "                        <div class=\"shop__filters-box\" data-filter-id=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter_group_id", [], "any", false, false, false, 37);
            yield "\">
                            <div class=\"shop__filters-block\">
                                <h3 class=\"shop__filters-title\">";
            // line 39
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 39);
            yield "</h3>
                                <div class=\"shop__filters-select\">
                                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 42
                yield "                                        <label class=\"checkbox-block\">
                                            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                // line 43
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 43);
                yield "\" hidden
                                                ";
                // line 44
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "selected", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "checked";
                }
                yield ">
                                            <span>";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 45);
                yield "</span>
                                        </label>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                                </div>
                                <div class=\"shop__filters-end\">
                                    <button class=\"shop__filters-send btn-4\" type=\"submit\">Підтвердити</button>
                                    <button class=\"shop__filters-resets btn-3\" type=\"button\">Скинути фільтр</button>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "
                    ";
        // line 58
        yield "                    ";
        // line 67
        yield "                </div>

                ";
        // line 70
        yield "                <div class=\"shop__filters-buttons\">
                    <button class=\"shop__filters-reset btn-3\" type=\"reset\">Скинути</button>
                    <button class=\"shop__filters-submit btn-4\" type=\"submit\">Застосувати</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const toggleBtn  = document.querySelector(\".shop__filters-open\");
    const filtersContainer = document.querySelector(\".shop__filters\");
    if (toggleBtn) toggleBtn.addEventListener(\"click\", () => filtersContainer.classList.toggle(\"active\"));

    // Скидання чекбоксів
    document.querySelectorAll(\".shop__filters-resets\").forEach(btn => {
        btn.addEventListener(\"click\", () => {
            const box = btn.closest(\".shop__filters-box\");
            if (!box) return;
            box.querySelectorAll('input[type=\"checkbox\"]').forEach(input => input.checked = false);
        });
    });

    // Видалення конкретного фільтра
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

    // Сортування
    const sortSelect = document.querySelector('.shop__filters-sort');
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            const [sort, order] = this.value.split('-');
            const formAction = document.querySelector('.shop__filters').getAttribute('action');
            const url = new URL(formAction, window.location.origin); // базовий URL
            url.searchParams.set('sort', sort);
            url.searchParams.set('order', order);

            // зберігаємо інші параметри форми
            new FormData(document.querySelector('.shop__filters')).forEach((value, key) => {
                if (key !== 'sort') url.searchParams.set(key, value);
            });

            window.location.href = url.toString();
        });
    }



});
</script>
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
        return array (  196 => 70,  192 => 67,  190 => 58,  187 => 56,  174 => 48,  165 => 45,  159 => 44,  155 => 43,  152 => 42,  148 => 41,  143 => 39,  137 => 37,  132 => 36,  123 => 28,  114 => 25,  108 => 24,  103 => 23,  99 => 22,  96 => 21,  92 => 18,  86 => 17,  80 => 16,  74 => 13,  70 => 12,  67 => 11,  64 => 10,  59 => 9,  55 => 8,  52 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/filter.twig", "");
    }
}
