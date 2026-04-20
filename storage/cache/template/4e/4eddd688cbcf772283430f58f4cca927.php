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

/* extension/module/partner_program.twig */
class __TwigTemplate_07c5d8a9feacca0eec2cbeaa46068a81 extends Template
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
              <input type=\"hidden\" name=\"module_partner_program_image\" value=\"";
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
              <select name=\"module_partner_program_status\" class=\"form-control\">
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
            // line 76
            yield ($context["entry_title"] ?? null);
            yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"module_partner_program_title[";
            // line 78
            yield ($context["lang_id"] ?? null);
            yield "]\" value=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["title"] ?? null), ($context["lang_id"] ?? null), [], "array", true, true, false, 78) &&  !(null === (($_v0 = ($context["title"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["lang_id"] ?? null)] ?? null) : null)))) ? ((($_v1 = ($context["title"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["lang_id"] ?? null)] ?? null) : null)) : (""));
            yield "\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
            // line 82
            yield ($context["entry_description"] ?? null);
            yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"module_partner_program_content[";
            // line 84
            yield ($context["lang_id"] ?? null);
            yield "]\" class=\"form-control summernote\" rows=\"5\">";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), ($context["lang_id"] ?? null), [], "array", true, true, false, 84) &&  !(null === (($_v2 = ($context["content"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["lang_id"] ?? null)] ?? null) : null)))) ? ((($_v3 = ($context["content"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["lang_id"] ?? null)] ?? null) : null)) : (""));
            yield "</textarea>
                </div>
              </div>

              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th style=\"width:35%\">";
            // line 91
            yield ((($context["entry_button_name"] ?? null)) ? ($context["entry_button_name"]) : ("Button Name"));
            yield "</th>
                    <th>";
            // line 92
            yield ((($context["entry_button_link"] ?? null)) ? ($context["entry_button_link"]) : ("Button Link"));
            yield "</th>
                  </tr>
                </thead>
                <tbody>
                  ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable([0, 1]);
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 97
                yield "                  <tr>
                    <td>
                      <input type=\"text\" placeholder=\"Button name\" name=\"module_partner_program_buttons[name][";
                // line 99
                yield ($context["lang_id"] ?? null);
                yield "][";
                yield $context["i"];
                yield "]\" 
                             value=\"";
                // line 100
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["buttons"] ?? null), "name", [], "any", false, true, false, 100), ($context["lang_id"] ?? null), [], "array", false, true, false, 100), $context["i"], [], "array", true, true, false, 100) &&  !(null === (($_v4 = (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["buttons"] ?? null), "name", [], "any", false, false, false, 100)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[$context["i"]] ?? null) : null)))) ? ((($_v6 = (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["buttons"] ?? null), "name", [], "any", false, false, false, 100)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[$context["i"]] ?? null) : null)) : (""));
                yield "\" class=\"form-control\" />
                    </td>
                    <td>
                      <input type=\"url\" placeholder=\"https://examples.com\" name=\"module_partner_program_buttons[link][";
                // line 103
                yield ($context["lang_id"] ?? null);
                yield "][";
                yield $context["i"];
                yield "]\" 
                             value=\"";
                // line 104
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["buttons"] ?? null), "link", [], "any", false, true, false, 104), ($context["lang_id"] ?? null), [], "array", false, true, false, 104), $context["i"], [], "array", true, true, false, 104) &&  !(null === (($_v8 = (($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["buttons"] ?? null), "link", [], "any", false, false, false, 104)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[$context["i"]] ?? null) : null)))) ? ((($_v10 = (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["buttons"] ?? null), "link", [], "any", false, false, false, 104)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[$context["i"]] ?? null) : null)) : (""));
                yield "\" class=\"form-control\" />
                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "                </tbody>
              </table>

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
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
</script>

";
        // line 133
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/module/partner_program.twig";
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
        return array (  318 => 133,  296 => 113,  286 => 108,  276 => 104,  270 => 103,  264 => 100,  258 => 99,  254 => 97,  250 => 96,  243 => 92,  239 => 91,  227 => 84,  222 => 82,  213 => 78,  208 => 76,  202 => 74,  199 => 73,  195 => 72,  190 => 69,  174 => 65,  170 => 64,  167 => 63,  163 => 62,  151 => 55,  145 => 54,  139 => 51,  130 => 45,  125 => 43,  119 => 40,  112 => 36,  105 => 32,  100 => 29,  94 => 26,  91 => 25,  89 => 24,  82 => 19,  71 => 17,  67 => 16,  62 => 14,  55 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/partner_program.twig", "");
    }
}
