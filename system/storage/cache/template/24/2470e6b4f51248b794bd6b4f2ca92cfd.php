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
class __TwigTemplate_9787ba8fd5bf2d72ab787c9e7e06a1e6 extends Template
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
        yield "            </select>
        </div>

        <div class=\"shop__filters-bottom\">
            <div class=\"container\">
                <div class=\"shop__filters-info\">
                    ";
        // line 35
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 36
            yield "                        <div class=\"shop__filters-box\" data-filter-id=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter_group_id", [], "any", false, false, false, 36);
            yield "\">
                            <div class=\"shop__filters-block\">
                                <h3 class=\"shop__filters-title\">";
            // line 38
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 38);
            yield "</h3>
                                <div class=\"shop__filters-select\">
                                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 41
                yield "                                        <label class=\"checkbox-block\">
                                            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                // line 42
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 42);
                yield "\" hidden
                                                ";
                // line 43
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "selected", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "checked";
                }
                yield ">
                                            <span>";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 44);
                yield "</span>
                                        </label>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
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
        // line 55
        yield "
                    ";
        // line 57
        yield "                    <div class=\"shop__filters-box\">
                        <div class=\"shop__filters-block\">
                            <h3 class=\"shop__filters-title\">Ціна</h3>
                            <div class=\"shop__filters-price filters-price\">
                                <input type=\"number\" name=\"price-from\" value=\"";
        // line 61
        yield ((array_key_exists("price_from", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_from"] ?? null), "")) : (""));
        yield "\" min=\"0\" placeholder=\"від\">
                                <input type=\"number\" name=\"price-to\" value=\"";
        // line 62
        yield ((array_key_exists("price_to", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_to"] ?? null), "")) : (""));
        yield "\" min=\"0\" placeholder=\"до\">
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 69
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
    const filterForm = document.querySelector(\".shop__filters\");
    if (!filterForm) return;

    function submitFilters() {
        const params = new URLSearchParams();

        filterForm.querySelectorAll('input, select').forEach(el => {
            if (!el.name) return;

            if (el.type === 'checkbox' && el.checked) {
                params.append(el.name, el.value);
            } else if (el.type === 'radio' && el.checked) {
                params.set(el.name, el.value);
            } else if (el.value.trim() !== '') {
                params.set(el.name, el.value.trim());
            }
        });

        // сортування
        const sortSelect = filterForm.querySelector('.shop__filters-sort');
        if (sortSelect && sortSelect.value) {
            const [sort, order] = sortSelect.value.split('-');
            params.set('sort', sort);
            params.set('order', order);
        }

        // Перенаправлення на поточну сторінку
        const currentUrl = window.location.origin + window.location.pathname;
        const url = currentUrl + '?' + params.toString();
        window.location.href = url;
    }

    // Кнопка застосувати
    const submitBtn = filterForm.querySelector('.shop__filters-submit');
    if (submitBtn) submitBtn.addEventListener('click', e => {
        e.preventDefault();
        submitFilters();
    });

    // Зміни сортування
    const sortSelect = filterForm.querySelector('.shop__filters-sort');
    if (sortSelect) sortSelect.addEventListener('change', submitFilters);

    // Видалення конкретного фільтра
    document.querySelectorAll(\".filters-selected-delete\").forEach(btn => {
        btn.addEventListener(\"click\", () => {
            const filterId = btn.dataset.filterId;
            const checkbox = filterForm.querySelector(`input[type=\"checkbox\"][value=\"\${filterId}\"]`);
            if (checkbox) checkbox.checked = false;
            submitFilters();
        });
    });
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
        return array (  208 => 69,  199 => 62,  195 => 61,  189 => 57,  186 => 55,  173 => 47,  164 => 44,  158 => 43,  154 => 42,  151 => 41,  147 => 40,  142 => 38,  136 => 36,  131 => 35,  123 => 28,  114 => 25,  108 => 24,  103 => 23,  99 => 22,  96 => 21,  92 => 18,  86 => 17,  80 => 16,  74 => 13,  70 => 12,  67 => 11,  64 => 10,  59 => 9,  55 => 8,  52 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/filter.twig", "");
    }
}
