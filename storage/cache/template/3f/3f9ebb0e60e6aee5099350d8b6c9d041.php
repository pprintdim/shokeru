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
class __TwigTemplate_b7bc8f9309f19022d12a044ea2e2da27 extends Template
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
          <i class=\"fa fa-save\"></i> ";
        // line 8
        yield ($context["button_save"] ?? null);
        yield "
        </button>
        <a href=\"";
        // line 10
        yield ($context["cancel"] ?? null);
        yield "\" class=\"btn btn-default\">
          <i class=\"fa fa-reply\"></i> ";
        // line 11
        yield ($context["button_cancel"] ?? null);
        yield "
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
        // line 35
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">

          <!-- IMAGE -->
          <div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\">";
        // line 39
        yield ($context["entry_image"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\">
                <img src=\"";
        // line 42
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" class=\"img-fluid\"/>
              </a>
              <input type=\"hidden\" name=\"module_different_shokers_image\" value=\"";
        // line 44
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\" />
            </div>
          </div>

          <!-- STATUS -->
          <div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\">";
        // line 50
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_different_shokers_status\" class=\"form-control\">
                <option value=\"1\" ";
        // line 53
        yield (((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                <option value=\"0\" ";
        // line 54
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
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 62
            yield "              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#lang";
            // line 63
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            yield "\" data-toggle=\"tab\">
                  <img src=\"language/";
            // line 64
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 64);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 64);
            yield ".png\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 64);
            yield "\" /> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 64);
            yield "
                </a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "          </ul>

          <div class=\"tab-content mt-3\">
            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 72
            yield "              ";
            $context["lang_id"] = CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            // line 73
            yield "              <div class=\"tab-pane\" id=\"lang";
            yield ($context["lang_id"] ?? null);
            yield "\">
                
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 control-label\">";
            // line 76
            yield ($context["entry_title"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"module_different_shokers_title[";
            // line 78
            yield ($context["lang_id"] ?? null);
            yield "]\" value=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["title"] ?? null), ($context["lang_id"] ?? null), [], "array", true, true, false, 78) &&  !(null === (($_v0 = ($context["title"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["lang_id"] ?? null)] ?? null) : null)))) ? ((($_v1 = ($context["title"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["lang_id"] ?? null)] ?? null) : null)) : (""));
            yield "\" class=\"form-control\">
                  </div>
                </div>

                <div class=\"form-group row\">
                  <label class=\"col-sm-2 control-label\">";
            // line 83
            yield ($context["entry_description"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"module_different_shokers_content[";
            // line 85
            yield ($context["lang_id"] ?? null);
            yield "]\" class=\"form-control summernote\" rows=\"5\">";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), ($context["lang_id"] ?? null), [], "array", true, true, false, 85) &&  !(null === (($_v2 = ($context["content"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["lang_id"] ?? null)] ?? null) : null)))) ? ((($_v3 = ($context["content"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["lang_id"] ?? null)] ?? null) : null)) : (""));
            yield "</textarea>
                  </div>
                </div>

                <div id=\"repeater";
            // line 89
            yield ($context["lang_id"] ?? null);
            yield "\">
                  ";
            // line 90
            $context["row"] = 0;
            // line 91
            yield "                  ";
            if ((($tmp = (($_v4 = ($context["repeater"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[($context["lang_id"] ?? null)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 92
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v5 = ($context["repeater"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["lang_id"] ?? null)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 93
                    yield "                      <div class=\"repeater-item border rounded p-3 mb-3\" id=\"row";
                    yield ($context["row"] ?? null);
                    yield "\">
                        <div class=\"form-group\">
                          <label>";
                    // line 95
                    yield ($context["entry_title"] ?? null);
                    yield "</label>
                          <input type=\"text\" name=\"module_different_shokers_repeater[";
                    // line 96
                    yield ($context["lang_id"] ?? null);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][title]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 96);
                    yield "\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                          <label>";
                    // line 99
                    yield ($context["entry_description"] ?? null);
                    yield "</label>
                          <textarea name=\"module_different_shokers_repeater[";
                    // line 100
                    yield ($context["lang_id"] ?? null);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][description]\" class=\"form-control summernote\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 100);
                    yield "</textarea>
                        </div>
                        <button type=\"button\" class=\"btn btn-danger mb-3\" onclick=\"\$('#row";
                    // line 102
                    yield ($context["row"] ?? null);
                    yield "').remove()\">
                          <i class=\"fa fa-minus-circle\"></i> ";
                    // line 103
                    yield ($context["button_remove"] ?? null);
                    yield "
                        </button>
                      </div>
                      ";
                    // line 106
                    $context["row"] = (($context["row"] ?? null) + 1);
                    // line 107
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                yield "                  ";
            }
            // line 109
            yield "                  <button type=\"button\" class=\"btn btn-primary mb-3\" onclick=\"addRow(";
            yield ($context["lang_id"] ?? null);
            yield ")\">
                    <i class=\"fa fa-plus-circle\"></i> ";
            // line 110
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
        // line 116
        yield "          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Summernote JS -->
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
<link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\"/>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>

<script>
\$(document).ready(function() {
    // Ініціалізація Summernote для існуючих textarea
    \$('.summernote').summernote({height: 160});

    let row = ";
        // line 135
        yield ($context["row"] ?? null);
        yield ";

    function addRow(lang) {
        const html = `
        <div class=\"repeater-item border rounded p-3 mb-3\" id=\"row\${row}\">
          <div class=\"form-group\">
            <label>";
        // line 141
        yield ($context["entry_title"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"module_different_shokers_repeater[\${lang}][\${row}][title]\" class=\"form-control\">
          </div>
          <div class=\"form-group\">
            <label>";
        // line 145
        yield ($context["entry_description"] ?? null);
        yield "</label>
            <textarea name=\"module_different_shokers_repeater[\${lang}][\${row}][description]\" class=\"form-control summernote\"></textarea>
          </div>
          <button type=\"button\" class=\"btn btn-danger mb-3\" onclick=\"\$('#row\${row}').remove()\">
            <i class=\"fa fa-minus-circle\"></i> ";
        // line 149
        yield ($context["button_remove"] ?? null);
        yield "
          </button>
        </div>`;

        // Додаємо блок
        \$('#repeater' + lang).append(html);

        // Ініціалізація Summernote на новому textarea
        \$(`#row\${row} .summernote`).summernote({height: 160});

        row++;
    }

    // Make addRow доступною глобально
    window.addRow = addRow;

    // show first language tab
    \$('#language a:first').tab('show');
});
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
        return array (  396 => 170,  372 => 149,  365 => 145,  358 => 141,  349 => 135,  328 => 116,  316 => 110,  311 => 109,  308 => 108,  302 => 107,  300 => 106,  294 => 103,  290 => 102,  281 => 100,  277 => 99,  267 => 96,  263 => 95,  257 => 93,  252 => 92,  249 => 91,  247 => 90,  243 => 89,  234 => 85,  229 => 83,  219 => 78,  214 => 76,  207 => 73,  204 => 72,  200 => 71,  195 => 68,  179 => 64,  175 => 63,  172 => 62,  168 => 61,  156 => 54,  150 => 53,  144 => 50,  135 => 44,  130 => 42,  124 => 39,  117 => 35,  111 => 32,  106 => 29,  100 => 26,  97 => 25,  95 => 24,  88 => 19,  77 => 17,  73 => 16,  68 => 14,  62 => 11,  58 => 10,  53 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/different_shokers.twig", "");
    }
}
