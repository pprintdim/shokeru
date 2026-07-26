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

/* extension/module/bestseller.twig */
class __TwigTemplate_b1a8ef6d98e8163b3020a6bfbee473d2 extends Template
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
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 29
            yield "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-name-";
            // line 30
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 30);
            yield "\">";
            yield ($context["entry_name"] ?? null);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 30);
            yield ")</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name[";
            // line 32
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 32);
            yield "]\" value=\"";
            yield (($_v0 = ($context["name"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 32)] ?? null) : null);
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 32);
            yield "\" class=\"form-control\" />
                ";
            // line 33
            if ((($tmp = (($_v1 = ($context["error_name"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 33)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "                  <div class=\"text-danger\">";
                yield (($_v2 = ($context["error_name"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34)] ?? null) : null);
                yield "</div>
                ";
            }
            // line 36
            yield "              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 40
        yield ($context["entry_limit"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 42
        yield ($context["limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_limit"] ?? null);
        yield "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 46
        yield ($context["entry_width"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 48
        yield ($context["width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 49
        if ((($tmp = ($context["error_width"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "              <div class=\"text-danger\">";
            yield ($context["error_width"] ?? null);
            yield "</div>
              ";
        }
        // line 52
        yield "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 55
        yield ($context["entry_height"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 57
        yield ($context["height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 58
        if ((($tmp = ($context["error_height"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "              <div class=\"text-danger\">";
            yield ($context["error_height"] ?? null);
            yield "</div>
              ";
        }
        // line 61
        yield "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 64
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 67
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "                <option value=\"1\" selected=\"selected\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\">";
            // line 69
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                ";
        } else {
            // line 71
            yield "                <option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 72
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                ";
        }
        // line 74
        yield "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 82
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/module/bestseller.twig";
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
        return array (  256 => 82,  246 => 74,  241 => 72,  236 => 71,  231 => 69,  226 => 68,  224 => 67,  218 => 64,  213 => 61,  207 => 59,  205 => 58,  199 => 57,  194 => 55,  189 => 52,  183 => 50,  181 => 49,  175 => 48,  170 => 46,  161 => 42,  156 => 40,  153 => 39,  145 => 36,  139 => 34,  137 => 33,  127 => 32,  118 => 30,  115 => 29,  111 => 28,  107 => 27,  101 => 24,  97 => 22,  89 => 18,  87 => 17,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/bestseller.twig", "");
    }
}
