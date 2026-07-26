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

/* extension/module/html.twig */
class __TwigTemplate_41883a88214d9ce900ef833b65ee263d extends Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
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
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        yield ($context["text_edit"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if ((($tmp = ($context["error_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "              <div class=\"text-danger\">";
            yield ($context["error_name"] ?? null);
            yield "</div>
              ";
        }
        // line 35
        yield "            </div>
          </div>
          <div class=\"tab-pane\">
            <ul class=\"nav nav-tabs\" id=\"language\">
              ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 40
            yield "              <li><a href=\"#language";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40);
            yield "\" data-toggle=\"tab\"><img src=\"language/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 40);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 40);
            yield ".png\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 40);
            yield "\" /> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 40);
            yield "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            </ul>
            <div class=\"tab-content\">
              ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 45
            yield "              <div class=\"tab-pane\" id=\"language";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            yield "\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 47
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            yield "\">";
            yield ($context["entry_title"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"module_description[";
            // line 49
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            yield "][title]\" placeholder=\"";
            yield ($context["entry_title"] ?? null);
            yield "\" id=\"input-heading";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            yield "\" value=\"";
            yield (((($tmp = (($_v0 = ($context["module_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["module_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49)] ?? null) : null), "title", [], "any", false, false, false, 49)) : (""));
            yield "\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 53
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            yield "\">";
            yield ($context["entry_description"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"module_description[";
            // line 55
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            yield "][description]\" placeholder=\"";
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-description";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            yield "\" data-toggle=\"summernote\" data-lang=\"";
            yield ($context["summernote"] ?? null);
            yield "\" class=\"form-control\">";
            yield (((($tmp = (($_v2 = ($context["module_description"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["module_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null), "description", [], "any", false, false, false, 55)) : (""));
            yield "</textarea>
                  </div>
                </div>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 63
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 66
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "                <option value=\"1\" selected=\"selected\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\">";
            // line 68
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                ";
        } else {
            // line 70
            yield "                <option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 71
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                ";
        }
        // line 73
        yield "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
    
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script></div>
";
        // line 93
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/module/html.twig";
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
        return array (  273 => 93,  251 => 73,  246 => 71,  241 => 70,  236 => 68,  231 => 67,  229 => 66,  223 => 63,  218 => 60,  199 => 55,  192 => 53,  179 => 49,  172 => 47,  166 => 45,  162 => 44,  158 => 42,  141 => 40,  137 => 39,  131 => 35,  125 => 33,  123 => 32,  117 => 31,  112 => 29,  107 => 27,  101 => 24,  97 => 22,  89 => 18,  87 => 17,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/html.twig", "");
    }
}
