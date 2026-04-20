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

/* localisation/currency_form.twig */
class __TwigTemplate_782fc07548370c3fb2c5d14044830e21 extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-currency\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["cancel"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "        <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        yield "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        yield ($context["text_iso"] ?? null);
        yield "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        yield ($context["text_form"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 30
        yield ($context["entry_title"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"title\" value=\"";
        // line 32
        yield ($context["title"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_title"] ?? null);
        yield "\" id=\"input-title\" class=\"form-control\" />
              ";
        // line 33
        if ((($tmp = ($context["error_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "              <div class=\"text-danger\">";
            yield ($context["error_title"] ?? null);
            yield "</div>
              ";
        }
        // line 36
        yield "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-code\"><span data-toggle=\"tooltip\" title=\"";
        // line 39
        yield ($context["help_code"] ?? null);
        yield "\">";
        yield ($context["entry_code"] ?? null);
        yield "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"code\" value=\"";
        // line 41
        yield ($context["code"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_code"] ?? null);
        yield "\" id=\"input-code\" class=\"form-control\" />
              ";
        // line 42
        if ((($tmp = ($context["error_code"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "              <div class=\"text-danger\">";
            yield ($context["error_code"] ?? null);
            yield "</div>
              ";
        }
        // line 45
        yield "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-symbol-left\">";
        // line 48
        yield ($context["entry_symbol_left"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_left\" value=\"";
        // line 50
        yield ($context["symbol_left"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_symbol_left"] ?? null);
        yield "\" id=\"input-symbol-left\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-symbol-right\">";
        // line 54
        yield ($context["entry_symbol_right"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_right\" value=\"";
        // line 56
        yield ($context["symbol_right"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_symbol_right"] ?? null);
        yield "\" id=\"input-symbol-right\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-decimal-place\">";
        // line 60
        yield ($context["entry_decimal_place"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"decimal_place\" value=\"";
        // line 62
        yield ($context["decimal_place"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_decimal_place"] ?? null);
        yield "\" id=\"input-decimal-place\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-value\"><span data-toggle=\"tooltip\" title=\"";
        // line 66
        yield ($context["help_value"] ?? null);
        yield "\">";
        yield ($context["entry_value"] ?? null);
        yield "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"";
        // line 68
        yield ($context["value"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_value"] ?? null);
        yield "\" id=\"input-value\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 72
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 75
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "                <option value=\"1\" selected=\"selected\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\">";
            // line 77
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                ";
        } else {
            // line 79
            yield "                <option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 80
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                ";
        }
        // line 82
        yield "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 90
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "localisation/currency_form.twig";
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
        return array (  261 => 90,  251 => 82,  246 => 80,  241 => 79,  236 => 77,  231 => 76,  229 => 75,  223 => 72,  214 => 68,  207 => 66,  198 => 62,  193 => 60,  184 => 56,  179 => 54,  170 => 50,  165 => 48,  160 => 45,  154 => 43,  152 => 42,  146 => 41,  139 => 39,  134 => 36,  128 => 34,  126 => 33,  120 => 32,  115 => 30,  110 => 28,  104 => 25,  97 => 22,  89 => 18,  87 => 17,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "localisation/currency_form.twig", "");
    }
}
