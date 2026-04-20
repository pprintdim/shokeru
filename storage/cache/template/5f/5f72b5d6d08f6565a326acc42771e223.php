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
class __TwigTemplate_ebdadf87d14df7b3697ea9b6c52ba096 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 73
            yield "            ";
            $context["lang_id"] = CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            // line 74
            yield "            <div class=\"tab-pane\" id=\"lang";
            yield ($context["lang_id"] ?? null);
            yield "\">
              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
            // line 77
            yield ($context["entry_title"] ?? null);
            yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"module_different_shokers_title[";
            // line 79
            yield ($context["lang_id"] ?? null);
            yield "]\" value=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["title"] ?? null), ($context["lang_id"] ?? null), [], "array", true, true, false, 79) &&  !(null === (($_v0 = ($context["title"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["lang_id"] ?? null)] ?? null) : null)))) ? ((($_v1 = ($context["title"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["lang_id"] ?? null)] ?? null) : null)) : (""));
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

              <!-- REPEATER -->
              <div id=\"repeater";
            // line 91
            yield ($context["lang_id"] ?? null);
            yield "\" class=\"repeater\">
                ";
            // line 92
            $context["row"] = 0;
            // line 93
            yield "                ";
            if ((($tmp = (($_v4 = ($context["repeater"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[($context["lang_id"] ?? null)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 94
                yield "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v5 = ($context["repeater"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["lang_id"] ?? null)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 95
                    yield "                  <div class=\"repeater-item panel panel-default\" id=\"row";
                    yield ($context["row"] ?? null);
                    yield "\">
                    <div class=\"panel-body\">
                      <div class=\"form-group\">
                        <label>";
                    // line 98
                    yield ($context["entry_title"] ?? null);
                    yield "</label>
                        <input type=\"text\" name=\"module_different_shokers_repeater[";
                    // line 99
                    yield ($context["lang_id"] ?? null);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][title]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 99);
                    yield "\" class=\"form-control\">
                      </div>
                      <div class=\"form-group\">
                        <label>";
                    // line 102
                    yield ($context["entry_description"] ?? null);
                    yield "</label>
                        <textarea name=\"module_different_shokers_repeater[";
                    // line 103
                    yield ($context["lang_id"] ?? null);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][description]\" class=\"form-control summernote\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 103);
                    yield "</textarea>
                      </div>
                      <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$('#row";
                    // line 105
                    yield ($context["row"] ?? null);
                    yield "').remove();\">
                        <i class=\"fa fa-minus-circle\"></i> ";
                    // line 106
                    yield ($context["button_remove"] ?? null);
                    yield "
                      </button>
                    </div>
                  </div>
                  ";
                    // line 110
                    $context["row"] = (($context["row"] ?? null) + 1);
                    // line 111
                    yield "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                yield "                ";
            }
            // line 113
            yield "                <button type=\"button\" class=\"btn btn-primary\" onclick=\"addRow(";
            yield ($context["lang_id"] ?? null);
            yield ")\">
                  <i class=\"fa fa-plus-circle\"></i> ";
            // line 114
            yield ($context["button_add"] ?? null);
            yield "
                </button>
              </div>

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
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

// show first language tab
\$('#language a:first').tab('show');

let row = ";
        // line 139
        yield ($context["row"] ?? null);
        yield ";

function addRow(lang) {
    const newRow = `
    <div class=\"repeater-item panel panel-default\" id=\"row\${row}\">
      <div class=\"panel-body\">
        <div class=\"form-group\">
          <label>";
        // line 146
        yield ($context["entry_title"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"module_different_shokers_repeater[\${lang}][\${row}][title]\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
          <label>";
        // line 150
        yield ($context["entry_description"] ?? null);
        yield "</label>
          <textarea name=\"module_different_shokers_repeater[\${lang}][\${row}][description]\" class=\"form-control summernote\"></textarea>
        </div>
        <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$('#row\${row}').remove();\">
          <i class=\"fa fa-minus-circle\"></i> ";
        // line 154
        yield ($context["button_remove"] ?? null);
        yield "
        </button>
      </div>
    </div>
    `;
    \$('#repeater' + lang + ' button.btn-primary').before(newRow);

    // Ініціалізація Summernote на новому textarea
    \$(`#row\${row} .summernote`).summernote({height: 160});
    
    row++;
}
// show first language tab
\$('#language a:first').tab('show');
</script>

";
        // line 170
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
        return array (  390 => 170,  371 => 154,  364 => 150,  357 => 146,  347 => 139,  326 => 120,  314 => 114,  309 => 113,  306 => 112,  300 => 111,  298 => 110,  291 => 106,  287 => 105,  278 => 103,  274 => 102,  264 => 99,  260 => 98,  253 => 95,  248 => 94,  245 => 93,  243 => 92,  239 => 91,  229 => 86,  224 => 84,  214 => 79,  209 => 77,  202 => 74,  199 => 73,  195 => 72,  190 => 69,  174 => 65,  170 => 64,  167 => 63,  163 => 62,  151 => 55,  145 => 54,  139 => 51,  130 => 45,  125 => 43,  119 => 40,  112 => 36,  105 => 32,  100 => 29,  94 => 26,  91 => 25,  89 => 24,  82 => 19,  71 => 17,  67 => 16,  62 => 14,  55 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/different_shokers.twig", "");
    }
}
