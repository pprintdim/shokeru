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

/* extension/extension/shipping.twig */
class __TwigTemplate_ce0331b60602d36aa2c46410c233054a extends Template
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
        yield ($context["promotion"] ?? null);
        yield "
<fieldset>
  <legend>";
        // line 3
        yield ($context["heading_title"] ?? null);
        yield "</legend>
  ";
        // line 4
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 9
        yield "  ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 14
        yield "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 18
        yield ($context["column_name"] ?? null);
        yield "</td>
          <td class=\"text-left\">";
        // line 19
        yield ($context["column_status"] ?? null);
        yield "</td>
          <td class=\"text-right\">";
        // line 20
        yield ($context["column_sort_order"] ?? null);
        yield "</td>
          <td class=\"text-right\">";
        // line 21
        yield ($context["column_action"] ?? null);
        yield "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 25
        if ((($tmp = ($context["extensions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 27
                yield "        <tr>
          <td class=\"text-left\">";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 28);
                yield "</td>
          <td class=\"text-left\">";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 29);
                yield "</td>
          <td class=\"text-right\">";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "sort_order", [], "any", false, false, false, 30);
                yield "</td>
          <td class=\"text-right\">";
                // line 31
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 32
                    yield "            <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 32);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
            ";
                } else {
                    // line 34
                    yield "            <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
            ";
                }
                // line 36
                yield "            ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 37
                    yield "            <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 37);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_install"] ?? null);
                    yield "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
            ";
                } else {
                    // line 39
                    yield "            <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 39);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_uninstall"] ?? null);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
            ";
                }
                // line 40
                yield "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "        ";
        } else {
            // line 44
            yield "        <tr>
          <td class=\"text-center\" colspan=\"4\">";
            // line 45
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
        ";
        }
        // line 48
        yield "      </tbody>
    </table>
  </div>
</fieldset>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/extension/shipping.twig";
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
        return array (  172 => 48,  166 => 45,  163 => 44,  160 => 43,  152 => 40,  144 => 39,  136 => 37,  133 => 36,  129 => 34,  121 => 32,  119 => 31,  115 => 30,  111 => 29,  107 => 28,  104 => 27,  99 => 26,  97 => 25,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  72 => 14,  64 => 10,  61 => 9,  53 => 5,  51 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/extension/shipping.twig", "");
    }
}
