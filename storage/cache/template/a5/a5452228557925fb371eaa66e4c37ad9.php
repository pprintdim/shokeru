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

/* extension/module/benefits.twig */
class __TwigTemplate_d74c46fe6f453db42e8f4ed814794959 extends Template
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
        <button type=\"submit\" form=\"form-benefits\" class=\"btn btn-primary\">
          <i class=\"fa fa-save\"></i>
        </button>
        <a href=\"";
        // line 10
        yield ($context["cancel"] ?? null);
        yield "\" class=\"btn btn-default\">
          <i class=\"fa fa-reply\"></i>
        </a>
      </div>
      <h1>";
        // line 14
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            yield "          <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 24
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "      <div class=\"alert alert-danger\">
        <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 26
            yield ($context["error_warning"] ?? null);
            yield "
      </div>
    ";
        }
        // line 29
        yield "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 32
        yield ($context["text_form"] ?? null);
        yield "</h3>
      </div>

      <div class=\"panel-body\">
        <form id=\"form-benefits\" action=\"";
        // line 36
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" class=\"form-horizontal\">

          <!-- MODULE STATUS -->
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 40
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" class=\"form-control\">
                <option value=\"1\" ";
        // line 43
        yield (((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                <option value=\"0\" ";
        // line 44
        yield (((($tmp =  !($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
              </select>
            </div>
          </div>

          <!-- MODULE MULTI-LANG TITLE -->
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 52
            yield "              <li>
                <a href=\"#lang";
            // line 53
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            yield "\" data-toggle=\"tab\">
                  <img src=\"language/";
            // line 54
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 54);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 54);
            yield ".png\"> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 54);
            yield "
                </a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "          </ul>

          <div class=\"tab-content\">
            ";
        // line 61
        $context["row"] = 0;
        // line 62
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 63
            yield "            <div class=\"tab-pane\" id=\"lang";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            yield "\">
              
              <!-- MODULE HEADER -->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
            // line 67
            yield ($context["entry_title"] ?? null);
            yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"benefits_content[";
            // line 69
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            yield "][title]\"
                         value=\"";
            // line 70
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["benefits_content"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70), [], "array", false, true, false, 70), "title", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["benefits_content"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70)] ?? null) : null), "title", [], "any", false, false, false, 70)))) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["benefits_content"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70)] ?? null) : null), "title", [], "any", false, false, false, 70)) : (""));
            yield "\" class=\"form-control\">
                </div>
              </div>

              <!-- REPEATER -->
              <table class=\"table table-bordered table-hover\" id=\"benefits";
            // line 75
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            yield "\">
                <thead>
                  <tr>
                    <th>";
            // line 78
            yield ($context["entry_title"] ?? null);
            yield "</th>
                    <th>";
            // line 79
            yield ($context["entry_description"] ?? null);
            yield "</th>
                    <th style=\"width:120px;\">";
            // line 80
            yield ($context["column_action"] ?? null);
            yield "</th>
                  </tr>
                </thead>
                <tbody>
                  ";
            // line 84
            if ((($tmp = (($_v2 = ($context["benefits"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 85
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v3 = ($context["benefits"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["benefit"]) {
                    // line 86
                    yield "                    <tr id=\"row";
                    yield ($context["row"] ?? null);
                    yield "\">
                      <td><input type=\"text\" name=\"benefits[";
                    // line 87
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][title]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["benefit"], "title", [], "any", false, false, false, 87);
                    yield "\" class=\"form-control\"></td>
                      <td><textarea name=\"benefits[";
                    // line 88
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][description]\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["benefit"], "description", [], "any", false, false, false, 88);
                    yield "</textarea></td>
                      <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$('#row";
                    // line 90
                    yield ($context["row"] ?? null);
                    yield "').remove()\">
                          <i class=\"fa fa-minus-circle\"></i>
                        </button>
                      </td>
                    </tr>
                    ";
                    // line 95
                    $context["row"] = (($context["row"] ?? null) + 1);
                    // line 96
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['benefit'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                yield "                  ";
            }
            // line 98
            yield "                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=\"3\">
                      <button type=\"button\" class=\"btn btn-primary\" onclick=\"addRow(";
            // line 102
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102);
            yield ")\">
                        <i class=\"fa fa-plus-circle\"></i> ";
            // line 103
            yield ($context["button_add"] ?? null);
            yield "
                      </button>
                    </td>
                  </tr>
                </tfoot>
              </table>

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "          </div>

          <!-- GENERAL DESCRIPTION (ONE TEXTAREA) -->
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 116
        yield ($context["entry_description"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"benefits_description[content]\" class=\"form-control\">";
        // line 118
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["benefits_description"] ?? null), "content", [], "any", true, true, false, 118) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["benefits_description"] ?? null), "content", [], "any", false, false, false, 118)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["benefits_description"] ?? null), "content", [], "any", false, false, false, 118)) : (""));
        yield "</textarea>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<script>
let row = ";
        // line 129
        yield ($context["row"] ?? null);
        yield ";

function addRow(lang) {
  const html = `
    <tr id=\"row\${row}\">
      <td><input type=\"text\" name=\"benefits[\${lang}][\${row}][title]\" class=\"form-control\"></td>
      <td><textarea name=\"benefits[\${lang}][\${row}][description]\" class=\"form-control\"></textarea></td>
      <td class=\"text-center\">
        <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$('#row\${row}').remove()\">
          <i class=\"fa fa-minus-circle\"></i>
        </button>
      </td>
    </tr>`;
  \$('#benefits' + lang + ' tbody').append(html);
  row++;
}

// show first language tab
\$('#language a:first').tab('show');
</script>

";
        // line 150
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/module/benefits.twig";
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
        return array (  348 => 150,  324 => 129,  310 => 118,  305 => 116,  299 => 112,  284 => 103,  280 => 102,  274 => 98,  271 => 97,  265 => 96,  263 => 95,  255 => 90,  246 => 88,  238 => 87,  233 => 86,  228 => 85,  226 => 84,  219 => 80,  215 => 79,  211 => 78,  205 => 75,  197 => 70,  193 => 69,  188 => 67,  180 => 63,  175 => 62,  173 => 61,  168 => 58,  154 => 54,  150 => 53,  147 => 52,  143 => 51,  131 => 44,  125 => 43,  119 => 40,  112 => 36,  105 => 32,  100 => 29,  94 => 26,  91 => 25,  89 => 24,  82 => 19,  71 => 17,  67 => 16,  62 => 14,  55 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/benefits.twig", "");
    }
}
