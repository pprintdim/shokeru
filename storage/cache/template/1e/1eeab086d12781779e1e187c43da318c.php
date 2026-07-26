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

/* extension/module/different_shokers.twig */
class __TwigTemplate_63ed4afe0a2fdb007960be4c5ccdfa6d extends Template
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
        <button type=\"submit\" form=\"form-partner-program\" class=\"btn btn-primary\">
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
        <form id=\"form-partner-program\" action=\"";
        // line 36
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">

          <!-- IMAGE -->
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 40
        yield ($context["entry_image"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\">
                <img src=\"";
        // line 43
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" />
              </a>
              <input type=\"hidden\" name=\"module_different_shokers_image\" value=\"";
        // line 45
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\" />
            </div>
          </div>

          <!-- STATUS -->
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 51
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_different_shokers_status\" class=\"form-control\">
                <option value=\"1\" ";
        // line 54
        yield (((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                <option value=\"0\" ";
        // line 55
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
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 63
            yield "              <li>
                <a href=\"#lang";
            // line 64
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
            yield "\" data-toggle=\"tab\">
                  <img src=\"language/";
            // line 65
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 65);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 65);
            yield ".png\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 65);
            yield "\" /> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 65);
            yield "
                </a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "          </ul>

          <div class=\"tab-content\">
            ";
        // line 72
        $context["row"] = 0;
        // line 73
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 74
            yield "            
            ";
            // line 75
            $context["lang_id"] = CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            // line 76
            yield "            <div class=\"tab-pane\" id=\"lang";
            yield ($context["lang_id"] ?? null);
            yield "\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
            // line 78
            yield ($context["entry_title"] ?? null);
            yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"module_different_shokers_title[";
            // line 80
            yield ($context["lang_id"] ?? null);
            yield "]\" value=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["title"] ?? null), ($context["lang_id"] ?? null), [], "array", true, true, false, 80) &&  !(null === (($_v0 = ($context["title"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["lang_id"] ?? null)] ?? null) : null)))) ? ((($_v1 = ($context["title"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["lang_id"] ?? null)] ?? null) : null)) : (""));
            yield "\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
            // line 84
            yield ($context["entry_description"] ?? null);
            yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"module_different_shokers_content[";
            // line 86
            yield ($context["lang_id"] ?? null);
            yield "]\" class=\"form-control summernote\" rows=\"5\">";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), ($context["lang_id"] ?? null), [], "array", true, true, false, 86) &&  !(null === (($_v2 = ($context["content"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["lang_id"] ?? null)] ?? null) : null)))) ? ((($_v3 = ($context["content"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["lang_id"] ?? null)] ?? null) : null)) : (""));
            yield "</textarea>
                </div>
              </div>

              <table class=\"table table-bordered table-hover\" id=\"repeater";
            // line 90
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
            yield "\">
                <thead>
                  <tr>
                    <th style=\"width:35%\">";
            // line 93
            yield ($context["entry_title"] ?? null);
            yield "</th>
                    <th>";
            // line 94
            yield ($context["entry_description"] ?? null);
            yield "</th>
                    <th style=\"width:120px;\">";
            // line 95
            yield ($context["column_action"] ?? null);
            yield "</th>
                  </tr>
                </thead>
                <tbody>
                    
                ";
            // line 100
            if ((($tmp = (($_v4 = ($context["repeater"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 101
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v5 = ($context["repeater"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 102
                    yield "                    <tr id=\"row";
                    yield ($context["row"] ?? null);
                    yield "\">
                      <td style=\"width:35%\">
                        <input type=\"text\" name=\"module_different_shokers_repeater[";
                    // line 104
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][title]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 104);
                    yield "\" class=\"form-control\">
                      </td>
                      <td>
                        <textarea name=\"module_different_shokers_repeater[";
                    // line 107
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][description]\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 107);
                    yield "</textarea>
                      </td>
                      <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$('#row";
                    // line 110
                    yield ($context["row"] ?? null);
                    yield "').remove()\"> <i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
                    // line 113
                    $context["row"] = (($context["row"] ?? null) + 1);
                    // line 114
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                yield "                ";
            }
            // line 116
            yield "                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=\"3\">
                      <button type=\"button\" class=\"btn btn-primary\" onclick=\"addRow(";
            // line 120
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120);
            yield ")\">
                        <i class=\"fa fa-plus-circle\"></i> ";
            // line 121
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
        // line 130
        yield "          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
<link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>

<script>
\$('.summernote').summernote({height: 160});

let row = ";
        // line 146
        yield ($context["row"] ?? null);
        yield ";

function addRow(lang) {
    const html = `
      <tr id=\"row\${row}\">
        <td style=\"width:35%\"><input type=\"text\" name=\"repeater[\${lang}][\${row}][title]\" class=\"form-control\"></td>
        <td><textarea name=\"repeater[\${lang}][\${row}][description]\" class=\"form-control\"></textarea></td>
        <td class=\"text-center\">
          <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$('#row\${row}').remove()\">
            <i class=\"fa fa-minus-circle\"></i>
          </button>
        </td>
      </tr>
    `;
    \$('#repeater' + lang + ' tbody').append(html);
    row++;
}

// show first language tab
\$('#language a:first').tab('show');
</script>

";
        // line 168
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/module/different_shokers.twig";
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
        return array (  381 => 168,  356 => 146,  338 => 130,  323 => 121,  319 => 120,  313 => 116,  310 => 115,  304 => 114,  302 => 113,  296 => 110,  286 => 107,  276 => 104,  270 => 102,  265 => 101,  263 => 100,  255 => 95,  251 => 94,  247 => 93,  241 => 90,  232 => 86,  227 => 84,  218 => 80,  213 => 78,  207 => 76,  205 => 75,  202 => 74,  197 => 73,  195 => 72,  190 => 69,  174 => 65,  170 => 64,  167 => 63,  163 => 62,  151 => 55,  145 => 54,  139 => 51,  130 => 45,  125 => 43,  119 => 40,  112 => 36,  105 => 32,  100 => 29,  94 => 26,  91 => 25,  89 => 24,  82 => 19,  71 => 17,  67 => 16,  62 => 14,  55 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/different_shokers.twig", "");
    }
}
