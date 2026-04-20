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

/* default/template/extension/module/category.twig */
class __TwigTemplate_00cfe82ab62ecabe40bd1e12feffdfa3 extends Template
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
        yield "<div class=\"list-group\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            yield "  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 3) == ($context["category_id"] ?? null))) {
                yield " 
  <a href=\"";
                // line 4
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 4);
                yield "\" class=\"list-group-item active\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 4);
                yield "</a> 
  ";
                // line 5
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 6
                    yield "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 7
                        yield "  ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 7) == ($context["child_id"] ?? null))) {
                            // line 8
                            yield "  <a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 8);
                            yield "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 8);
                            yield "</a> 
  ";
                        } else {
                            // line 9
                            yield " 
  <a href=\"";
                            // line 10
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 10);
                            yield "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 10);
                            yield "</a>
  ";
                        }
                        // line 12
                        yield "  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    yield "  ";
                }
                // line 14
                yield "  ";
            } else {
                yield " <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 14);
                yield "\" class=\"list-group-item\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                yield "</a>
  ";
            }
            // line 16
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/extension/module/category.twig";
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
        return array (  113 => 17,  107 => 16,  97 => 14,  94 => 13,  88 => 12,  81 => 10,  78 => 9,  70 => 8,  67 => 7,  62 => 6,  60 => 5,  54 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/extension/module/category.twig", "");
    }
}
