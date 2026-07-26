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

/* extension/module/one_video.twig */
class __TwigTemplate_17357ec96fcee81a54858e6caae48730 extends Template
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
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-frame\">";
        // line 38
        yield ($context["entry_frame"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"name\" rows=\"8\" placeholder=\"";
        // line 40
        yield ($context["entry_frame"] ?? null);
        yield "\" id=\"input-frame\" class=\"form-control\">";
        yield ($context["frame"] ?? null);
        yield "</textarea>
              ";
        // line 41
        if ((($tmp = ($context["error_frame"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                <div class=\"text-danger\">";
            yield ($context["error_frame"] ?? null);
            yield "</div>
              ";
        }
        // line 44
        yield "            </div>
          </div>
   
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 48
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 51
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "                <option value=\"1\" selected=\"selected\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\">";
            // line 53
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                ";
        } else {
            // line 55
            yield "                <option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 56
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                ";
        }
        // line 58
        yield "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 66
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/module/one_video.twig";
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
        return array (  199 => 66,  189 => 58,  184 => 56,  179 => 55,  174 => 53,  169 => 52,  167 => 51,  161 => 48,  155 => 44,  149 => 42,  147 => 41,  141 => 40,  136 => 38,  131 => 35,  125 => 33,  123 => 32,  117 => 31,  112 => 29,  107 => 27,  101 => 24,  97 => 22,  89 => 18,  87 => 17,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/one_video.twig", "");
    }
}
