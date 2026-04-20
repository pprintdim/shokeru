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

/* catalog/filter_form.twig */
class __TwigTemplate_734054a6517aaf1dfb6eea1b513d9e76 extends Template
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
        <button type=\"submit\" form=\"form-filter\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\"> ";
        // line 16
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        yield ($context["text_form"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-filter\" class=\"form-horizontal\">
          <fieldset id=\"option-value\">
            <legend>";
        // line 28
        yield ($context["text_group"] ?? null);
        yield "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\">";
        // line 30
        yield ($context["entry_group"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\"> ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 32
            yield "                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 32);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 32);
            yield ".png\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 32);
            yield "\" /></span>
                  <input type=\"text\" name=\"filter_group_description[";
            // line 33
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 33);
            yield "][name]\" value=\"";
            yield (((($tmp = (($_v0 = ($context["filter_group_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 33)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["filter_group_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 33)] ?? null) : null), "name", [], "any", false, false, false, 33)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_group"] ?? null);
            yield "\" class=\"form-control\" />
                </div>
                ";
            // line 35
            if ((($tmp = (($_v2 = ($context["error_group"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 35)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "                <div class=\"text-danger\">";
                yield (($_v3 = ($context["error_group"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36)] ?? null) : null);
                yield "</div>
                ";
            }
            // line 38
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield " </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 41
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 43
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\" />
              </div>
            </div>
          </fieldset>
          <fieldset id=\"option-value\">
            <legend>";
        // line 48
        yield ($context["text_value"] ?? null);
        yield "</legend>
            <table id=\"filter\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left required\">";
        // line 52
        yield ($context["entry_name"] ?? null);
        yield "</td>
                  <td class=\"text-right\">";
        // line 53
        yield ($context["entry_sort_order"] ?? null);
        yield "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
              
              ";
        // line 59
        $context["filter_row"] = 0;
        // line 60
        yield "              ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 61
            yield "              <tr id=\"filter-row";
            yield ($context["filter_row"] ?? null);
            yield "\">
                <td class=\"text-left\" style=\"width: 70%;\"><input type=\"hidden\" name=\"filter[";
            // line 62
            yield ($context["filter_row"] ?? null);
            yield "][filter_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 62);
            yield "\" />
                  ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 64
                yield "                  <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 64);
                yield "/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 64);
                yield ".png\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 64);
                yield "\" /></span>
                    <input type=\"text\" name=\"filter[";
                // line 65
                yield ($context["filter_row"] ?? null);
                yield "][filter_description][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
                yield "][name]\" value=\"";
                yield (((($tmp = (($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_description", [], "any", false, false, false, 65)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_description", [], "any", false, false, false, 65)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65)] ?? null) : null), "name", [], "any", false, false, false, 65)) : (""));
                yield "\" placeholder=\"";
                yield ($context["entry_name"] ?? null);
                yield "\" class=\"form-control\" />
                  </div>
                  ";
                // line 67
                if ((($tmp = (($_v6 = (($_v7 = ($context["error_filter"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[($context["filter_row"] ?? null)] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 68
                    yield "                  <div class=\"text-danger\">";
                    yield (($_v8 = (($_v9 = ($context["error_filter"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[($context["filter_row"] ?? null)] ?? null) : null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68)] ?? null) : null);
                    yield "</div>
                  ";
                }
                // line 70
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "</td>
                <td class=\"text-right\"><input type=\"text\" name=\"filter[";
            // line 71
            yield ($context["filter_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "sort_order", [], "any", false, false, false, 71);
            yield "\" placeholder=\"";
            yield ($context["entry_sort_order"] ?? null);
            yield "\" id=\"input-sort-order\" class=\"form-control\" /></td>
                <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#filter-row";
            // line 72
            yield ($context["filter_row"] ?? null);
            yield "').remove();\" data-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
              ";
            // line 74
            $context["filter_row"] = (($context["filter_row"] ?? null) + 1);
            // line 75
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"addFilterRow();\" data-toggle=\"tooltip\" title=\"";
        // line 81
        yield ($context["button_filter_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var filter_row = ";
        // line 91
        yield ($context["filter_row"] ?? null);
        yield ";

function addFilterRow() {
\thtml  = '<tr id=\"filter-row' + filter_row + '\">';
    html += '  <td class=\"text-left\" style=\"width: 70%;\"><input type=\"hidden\" name=\"filter[' + filter_row + '][filter_id]\" value=\"\" />';
\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 97
            yield "\thtml += '  <div class=\"input-group\">';
\thtml += '    <span class=\"input-group-addon\"><img src=\"language/";
            // line 98
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 98);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 98);
            yield ".png\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 98);
            yield "\" /></span><input type=\"text\" name=\"filter[' + filter_row + '][filter_description][";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98);
            yield "][name]\" value=\"\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" class=\"form-control\" />';
    html += '  </div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"filter[' + filter_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 102
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#filter-row' + filter_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 103
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#filter tbody').append(html);

\tfilter_row++;
}
//--></script></div>
";
        // line 111
        yield ($context["footer"] ?? null);
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/filter_form.twig";
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
        return array (  346 => 111,  335 => 103,  331 => 102,  328 => 101,  311 => 98,  308 => 97,  304 => 96,  296 => 91,  283 => 81,  276 => 76,  270 => 75,  268 => 74,  261 => 72,  253 => 71,  245 => 70,  239 => 68,  237 => 67,  226 => 65,  217 => 64,  213 => 63,  207 => 62,  202 => 61,  197 => 60,  195 => 59,  186 => 53,  182 => 52,  175 => 48,  165 => 43,  160 => 41,  150 => 38,  144 => 36,  142 => 35,  133 => 33,  124 => 32,  120 => 31,  116 => 30,  111 => 28,  106 => 26,  100 => 23,  96 => 21,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "catalog/filter_form.twig", "");
    }
}
