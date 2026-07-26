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
class __TwigTemplate_b45f55dca55568b6596e33969b61e3bd extends Template
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
        yield "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "        <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 19
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        yield "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        yield ($context["text_edit"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 30
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">

          <!-- Назва модуля -->
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 34
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 36
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 37
        if ((($tmp = ($context["error_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "                <div class=\"text-danger\">";
            yield ($context["error_name"] ?? null);
            yield "</div>
              ";
        }
        // line 40
        yield "            </div>
          </div>

          <!-- Iframe -->
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-frame\">";
        // line 45
        yield ($context["entry_frame"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"frame\" rows=\"8\" placeholder=\"";
        // line 47
        yield ($context["entry_frame"] ?? null);
        yield "\" id=\"input-frame\" class=\"form-control\">";
        yield ($context["frame"] ?? null);
        yield "</textarea>
              ";
        // line 48
        if ((($tmp = ($context["error_frame"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                <div class=\"text-danger\">";
            yield ($context["error_frame"] ?? null);
            yield "</div>
              ";
        }
        // line 51
        yield "            </div>
          </div>

          <!-- Статус -->
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 56
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                <option value=\"1\" ";
        // line 59
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                <option value=\"0\" ";
        // line 60
        if ((($tmp =  !($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
              </select>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 70
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
        return array (  200 => 70,  183 => 60,  175 => 59,  169 => 56,  162 => 51,  156 => 49,  154 => 48,  148 => 47,  143 => 45,  136 => 40,  130 => 38,  128 => 37,  122 => 36,  117 => 34,  110 => 30,  104 => 27,  99 => 24,  91 => 20,  89 => 19,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/one_video.twig", "");
    }
}
