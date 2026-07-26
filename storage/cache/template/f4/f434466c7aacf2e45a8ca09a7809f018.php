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
class __TwigTemplate_723790e0644fe8f1f6333be8433d07e8 extends Template
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
              <select name=\"status\" class=\"form-control\">
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
            yield "            <div class=\"tab-pane\" id=\"lang";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            yield "\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
            // line 75
            yield ($context["entry_title"] ?? null);
            yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"module_partner_program_title[";
            // line 77
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
            yield "]\" value=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77), [], "array", true, true, false, 77) &&  !(null === (($_v0 = ($context["title"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null)))) ? ((($_v1 = ($context["title"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null)) : (""));
            yield "\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
            // line 81
            yield ($context["entry_description"] ?? null);
            yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"module_partner_program_content[";
            // line 83
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
            yield "]\" class=\"form-control summernote\" rows=\"5\">";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83), [], "array", true, true, false, 83) &&  !(null === (($_v2 = ($context["content"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83)] ?? null) : null)))) ? ((($_v3 = ($context["content"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83)] ?? null) : null)) : (""));
            yield "</textarea>
                </div>
              </div>
              <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th style=\"width:35%\">Button Name</th>
                        <th>Button Link</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type=\"text\" name=\"module_partner_program_buttons[name][";
            // line 96
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96);
            yield "][0]\" 
                                value=\"";
            // line 97
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["buttons"] ?? null), ($context["name"] ?? null), [], "array", false, true, false, 97), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97), [], "array", false, true, false, 97), 0, [], "array", true, true, false, 97) &&  !(null === (($_v4 = (($_v5 = (($_v6 = ($context["buttons"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[($context["name"] ?? null)] ?? null) : null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97)] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[0] ?? null) : null)))) ? ((($_v7 = (($_v8 = (($_v9 = ($context["buttons"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[($context["name"] ?? null)] ?? null) : null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97)] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[0] ?? null) : null)) : (""));
            yield "\" class=\"form-control\" />
                        </td>
                        <td>
                            <input type=\"url\" name=\"module_partner_program_buttons[link][";
            // line 100
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100);
            yield "][0]\" 
                                value=\"";
            // line 101
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["buttons"] ?? null), ($context["link"] ?? null), [], "array", false, true, false, 101), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101), [], "array", false, true, false, 101), 0, [], "array", true, true, false, 101) &&  !(null === (($_v10 = (($_v11 = (($_v12 = ($context["buttons"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[($context["link"] ?? null)] ?? null) : null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101)] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[0] ?? null) : null)))) ? ((($_v13 = (($_v14 = (($_v15 = ($context["buttons"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[($context["link"] ?? null)] ?? null) : null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101)] ?? null) : null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[0] ?? null) : null)) : (""));
            yield "\" class=\"form-control\" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type=\"text\" name=\"module_partner_program_buttons[name][";
            // line 106
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
            yield "][1]\" 
                                value=\"";
            // line 107
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["buttons"] ?? null), ($context["name"] ?? null), [], "array", false, true, false, 107), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107), [], "array", false, true, false, 107), 1, [], "array", true, true, false, 107) &&  !(null === (($_v16 = (($_v17 = (($_v18 = ($context["buttons"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[($context["name"] ?? null)] ?? null) : null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107)] ?? null) : null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[1] ?? null) : null)))) ? ((($_v19 = (($_v20 = (($_v21 = ($context["buttons"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[($context["name"] ?? null)] ?? null) : null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107)] ?? null) : null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[1] ?? null) : null)) : (""));
            yield "\" class=\"form-control\" />
                        </td>
                        <td>
                            <input type=\"url\" name=\"module_partner_program_buttons[link][";
            // line 110
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
            yield "][1]\" 
                                value=\"";
            // line 111
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["buttons"] ?? null), ($context["link"] ?? null), [], "array", false, true, false, 111), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111), [], "array", false, true, false, 111), 1, [], "array", true, true, false, 111) &&  !(null === (($_v22 = (($_v23 = (($_v24 = ($context["buttons"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[($context["link"] ?? null)] ?? null) : null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111)] ?? null) : null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[1] ?? null) : null)))) ? ((($_v25 = (($_v26 = (($_v27 = ($context["buttons"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[($context["link"] ?? null)] ?? null) : null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111)] ?? null) : null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[1] ?? null) : null)) : (""));
            yield "\" class=\"form-control\" />
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
<link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
<link href=\"view/javascript/jquery/jquery-ui/jquery-ui.min.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>


<script>
// Summernote init (existing)
\$('.summernote').summernote({height: 160});

// show first language tab
\$('#language a:first').tab('show');


</script>

";
        // line 144
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
        return array (  319 => 144,  292 => 119,  278 => 111,  274 => 110,  268 => 107,  264 => 106,  256 => 101,  252 => 100,  246 => 97,  242 => 96,  224 => 83,  219 => 81,  210 => 77,  205 => 75,  199 => 73,  195 => 72,  190 => 69,  174 => 65,  170 => 64,  167 => 63,  163 => 62,  151 => 55,  145 => 54,  139 => 51,  130 => 45,  125 => 43,  119 => 40,  112 => 36,  105 => 32,  100 => 29,  94 => 26,  91 => 25,  89 => 24,  82 => 19,  71 => 17,  67 => 16,  62 => 14,  55 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/partner_program.twig", "");
    }
}
