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
class __TwigTemplate_86db14d2d45fc055032332e4984bab1f extends Template
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

          <!-- NAME -->
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 40
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 42
        yield ($context["name"] ?? null);
        yield "\" class=\"form-control\">
            </div>
          </div>

          <!-- STATUS -->
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 48
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" class=\"form-control\">
                <option value=\"1\" ";
        // line 51
        yield (((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                <option value=\"0\" ";
        // line 52
        yield (((($tmp =  !($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
              </select>
            </div>
          </div>

          <!-- LANGUAGE TABS -->
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 60
            yield "              <li>
                <a href=\"#lang";
            // line 61
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            yield "\" data-toggle=\"tab\">
                  <img src=\"language/";
            // line 62
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 62);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 62);
            yield ".png\">
                  ";
            // line 63
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 63);
            yield "
                </a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "          </ul>

          <div class=\"tab-content\">
            ";
        // line 70
        $context["row"] = 0;
        // line 71
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 72
            yield "            <div class=\"tab-pane\" id=\"lang";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            yield "\">

              <table class=\"table table-bordered table-hover\" id=\"benefits";
            // line 74
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
            yield "\">
                <thead>
                  <tr>
                    <th>";
            // line 77
            yield ($context["entry_title"] ?? null);
            yield "</th>
                    <th>";
            // line 78
            yield ($context["entry_description"] ?? null);
            yield "</th>
                    <th style=\"width:120px;\">";
            // line 79
            yield ($context["column_action"] ?? null);
            yield "</th>
                  </tr>
                </thead>
                <tbody>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
            // line 84
            yield ($context["entry_title"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"benefits_content[";
            // line 86
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
            yield "][title]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["benefits_content"] ?? null), "title", [], "any", false, false, false, 86);
            yield "\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
            // line 90
            yield ($context["entry_description"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                            <textarea placeholder=\"";
            // line 92
            yield ($context["entry_description"] ?? null);
            yield "\" name=\"benefits_content[";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
            yield "][dscription]\" class=\"form-control\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["benefits_content"] ?? null), "description", [], "any", false, false, false, 92);
            yield "</textarea>
                        </div>
                    </div>
                ";
            // line 95
            if ((($tmp = (($_v0 = ($context["benefits"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v1 = ($context["benefits"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["benefit"]) {
                    // line 97
                    yield "                    <tr id=\"row";
                    yield ($context["row"] ?? null);
                    yield "\">
                      <td>
                        <input type=\"text\"
                               name=\"benefits[";
                    // line 100
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][title]\"
                               value=\"";
                    // line 101
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["benefit"], "title", [], "any", false, false, false, 101);
                    yield "\"
                               class=\"form-control\">
                      </td>
                      <td>
                        <textarea name=\"benefits[";
                    // line 105
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 105);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][description]\"
                                  class=\"form-control\">";
                    // line 106
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["benefit"], "description", [], "any", false, false, false, 106);
                    yield "</textarea>
                      </td>
                      <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-danger\"
                          onclick=\"\$('#row";
                    // line 110
                    yield ($context["row"] ?? null);
                    yield "').remove()\">
                          <i class=\"fa fa-minus-circle\"></i>
                        </button>
                      </td>
                    </tr>
                    ";
                    // line 115
                    $context["row"] = (($context["row"] ?? null) + 1);
                    // line 116
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['benefit'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                yield "                  ";
            }
            // line 118
            yield "                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=\"3\">
                      <button type=\"button\" class=\"btn btn-primary\" onclick=\"addRow(";
            // line 122
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122);
            yield ")\">
                        <i class=\"fa fa-plus-circle\"></i> ";
            // line 123
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
        // line 132
        yield "          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<script>
let row = ";
        // line 141
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
      </tr>
    `;
    \$('#benefits' + lang + ' tbody').append(html);
    row++;
}

// show first language tab
\$('#language a:first').tab('show');
</script>

";
        // line 163
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
        return array (  373 => 163,  348 => 141,  337 => 132,  322 => 123,  318 => 122,  312 => 118,  309 => 117,  303 => 116,  301 => 115,  293 => 110,  286 => 106,  280 => 105,  273 => 101,  267 => 100,  260 => 97,  255 => 96,  253 => 95,  243 => 92,  238 => 90,  229 => 86,  224 => 84,  216 => 79,  212 => 78,  208 => 77,  202 => 74,  196 => 72,  191 => 71,  189 => 70,  184 => 67,  174 => 63,  168 => 62,  164 => 61,  161 => 60,  157 => 59,  145 => 52,  139 => 51,  133 => 48,  124 => 42,  119 => 40,  112 => 36,  105 => 32,  100 => 29,  94 => 26,  91 => 25,  89 => 24,  82 => 19,  71 => 17,  67 => 16,  62 => 14,  55 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/benefits.twig", "");
    }
}
