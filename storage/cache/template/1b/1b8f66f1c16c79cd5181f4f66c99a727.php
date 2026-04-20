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

/* extension/extension/theme.twig */
class __TwigTemplate_2865a17aefade865cbf16cc8cc631525 extends Template
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
        yield ($context["column_action"] ?? null);
        yield "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 24
        if ((($tmp = ($context["extensions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 26
                yield "        <tr>
          <td class=\"text-left\" colspan=\"2\"><b>";
                // line 27
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 27);
                yield "</b></td>
          <td class=\"text-right\">";
                // line 28
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 29
                    yield "            <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 29);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_install"] ?? null);
                    yield "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
            ";
                } else {
                    // line 31
                    yield "            <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 31);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_uninstall"] ?? null);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
            ";
                }
                // line 32
                yield "</td>
        </tr>
        ";
                // line 34
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 35
                    yield "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "store", [], "any", false, false, false, 35));
                    foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                        // line 36
                        yield "        <tr>
          <td class=\"text-left\">&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;";
                        // line 37
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 37);
                        yield "</td>
          <td class=\"text-left\">";
                        // line 38
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "status", [], "any", false, false, false, 38);
                        yield "</td>
          <td class=\"text-right\"><a href=\"";
                        // line 39
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "edit", [], "any", false, false, false, 39);
                        yield "\" data-toggle=\"tooltip\" title=\"";
                        yield ($context["button_edit"] ?? null);
                        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
        </tr>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    yield "        ";
                }
                // line 43
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "        ";
        } else {
            // line 45
            yield "        <tr>
          <td class=\"text-center\" colspan=\"3\">";
            // line 46
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
        ";
        }
        // line 49
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
        return "extension/extension/theme.twig";
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
        return array (  179 => 49,  173 => 46,  170 => 45,  167 => 44,  161 => 43,  158 => 42,  147 => 39,  143 => 38,  139 => 37,  136 => 36,  131 => 35,  129 => 34,  125 => 32,  117 => 31,  109 => 29,  107 => 28,  103 => 27,  100 => 26,  95 => 25,  93 => 24,  86 => 20,  82 => 19,  78 => 18,  72 => 14,  64 => 10,  61 => 9,  53 => 5,  51 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/extension/theme.twig", "");
    }
}
