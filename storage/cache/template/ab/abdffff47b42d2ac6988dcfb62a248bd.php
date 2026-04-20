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
class __TwigTemplate_1ae1891af063c3541290384f12179c29 extends Template
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
        $context["sort_selected"] = ((($context["sort"] ?? null) . "-") . ($context["order"] ?? null));
        // line 23
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sort_options"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 24
            yield "                    <option value=\"";
            yield $context["value"];
            yield "\" ";
            if ((($context["sort_selected"] ?? null) == $context["value"])) {
                yield "selected";
            }
            yield ">";
            yield $context["text"];
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['value'], $context['text'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "            </select>
        </div>

        <div class=\"shop__filters-bottom\">
            <div class=\"container\">
                <div class=\"shop__filters-info\">
                    ";
        // line 33
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 34
            yield "                        <div class=\"shop__filters-box\" data-filter-id=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter_group_id", [], "any", false, false, false, 34);
            yield "\">
                            <div class=\"shop__filters-block\">
                                <h3 class=\"shop__filters-title\">";
            // line 36
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 36);
            yield "</h3>
                                <div class=\"shop__filters-select\">
                                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 39
                yield "                                        <label class=\"checkbox-block\">
                                            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                // line 40
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 40);
                yield "\" hidden
                                                ";
                // line 41
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "selected", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "checked";
                }
                yield ">
                                            <span>";
                // line 42
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 42);
                yield "</span>
                                        </label>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
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
        // line 53
        yield "
                    ";
        // line 55
        yield "                    <div class=\"shop__filters-box\">
                        <div class=\"shop__filters-block\">
                            <h3 class=\"shop__filters-title\">Ціна</h3>
                            <div class=\"shop__filters-price filters-price\">
                                <input type=\"number\" name=\"price-from\" value=\"";
        // line 59
        yield ((array_key_exists("price_from", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_from"] ?? null), "")) : (""));
        yield "\" min=\"0\" placeholder=\"від\">
                                <input type=\"number\" name=\"price-to\" value=\"";
        // line 60
        yield ((array_key_exists("price_to", $context)) ? (Twig\Extension\CoreExtension::default(($context["price_to"] ?? null), "")) : (""));
        yield "\" min=\"0\" placeholder=\"до\">
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 67
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
            const url = new URL(window.location.href);
            url.searchParams.set('sort', sort);
            url.searchParams.set('order', order);
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
        return array (  206 => 67,  197 => 60,  193 => 59,  187 => 55,  184 => 53,  171 => 45,  162 => 42,  156 => 41,  152 => 40,  149 => 39,  145 => 38,  140 => 36,  134 => 34,  129 => 33,  121 => 26,  106 => 24,  101 => 23,  99 => 22,  96 => 21,  92 => 18,  86 => 17,  80 => 16,  74 => 13,  70 => 12,  67 => 11,  64 => 10,  59 => 9,  55 => 8,  52 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/filter.twig", "");
    }
}
