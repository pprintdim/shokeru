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

/* extension/module/amazon_login.twig */
class __TwigTemplate_ee0df43754368e3ef931564b5604ad8e extends Template
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
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-check-circle\"></i></button>
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
  <div class=\"container-fluid\"> ";
        // line 16
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "    <div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
    </div>
    ";
        }
        // line 20
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 22
        yield ($context["heading_title"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 25
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-button-type\">";
        // line 27
        yield ($context["entry_button_type"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_amazon_login_button_type\" id=\"input-button-type\" class=\"form-control\">

\t\t\t\t";
        // line 31
        if ((($context["module_amazon_login_button_type"] ?? null) == "Login")) {
            // line 32
            yield "
                <option value=\"LwA\" >";
            // line 33
            yield ($context["text_lwa_button"] ?? null);
            yield "</option>
                <option value=\"Login\" selected=\"selected\">";
            // line 34
            yield ($context["text_login_button"] ?? null);
            yield "</option>
                <option value=\"A\">";
            // line 35
            yield ($context["text_a_button"] ?? null);
            yield "</option>

\t\t\t\t";
        } elseif ((        // line 37
($context["module_amazon_login_button_type"] ?? null) == "A")) {
            // line 38
            yield "
                <option value=\"LwA\" >";
            // line 39
            yield ($context["text_lwa_button"] ?? null);
            yield "</option>
                <option value=\"Login\" >";
            // line 40
            yield ($context["text_login_button"] ?? null);
            yield "</option>
                <option value=\"A\" selected=\"selected\">";
            // line 41
            yield ($context["text_a_button"] ?? null);
            yield "</option>

\t\t\t\t";
        } else {
            // line 44
            yield "
                <option value=\"LwA\" selected=\"selected\">";
            // line 45
            yield ($context["text_lwa_button"] ?? null);
            yield "</option>
                <option value=\"Login\" >";
            // line 46
            yield ($context["text_login_button"] ?? null);
            yield "</option>
                <option value=\"A\">";
            // line 47
            yield ($context["text_a_button"] ?? null);
            yield "</option>

\t\t\t\t";
        }
        // line 50
        yield "
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-button-colour\">";
        // line 55
        yield ($context["entry_button_colour"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_amazon_login_button_colour\" id=\"input-button-colour\" class=\"form-control\">

\t\t\t\t";
        // line 59
        if ((($context["module_amazon_login_button_colour"] ?? null) == "DarkGray")) {
            // line 60
            yield "
                <option value=\"Gold\" >";
            // line 61
            yield ($context["text_gold_button"] ?? null);
            yield "</option>
                <option value=\"DarkGray\" selected=\"selected\">";
            // line 62
            yield ($context["text_darkgray_button"] ?? null);
            yield "</option>
                <option value=\"LightGray\">";
            // line 63
            yield ($context["text_lightgray_button"] ?? null);
            yield "</option>

\t\t\t\t";
        } elseif ((        // line 65
($context["module_amazon_login_button_colour"] ?? null) == "LightGray")) {
            // line 66
            yield "
                <option value=\"Gold\" >";
            // line 67
            yield ($context["text_gold_button"] ?? null);
            yield "</option>
                <option value=\"DarkGray\">";
            // line 68
            yield ($context["text_darkgray_button"] ?? null);
            yield "</option>
                <option value=\"LightGray\" selected=\"selected\">";
            // line 69
            yield ($context["text_lightgray_button"] ?? null);
            yield "</option>

\t\t\t\t";
        } else {
            // line 72
            yield "
                <option value=\"Gold\" selected=\"selected\">";
            // line 73
            yield ($context["text_gold_button"] ?? null);
            yield "</option>
                <option value=\"DarkGray\">";
            // line 74
            yield ($context["text_darkgray_button"] ?? null);
            yield "</option>
                <option value=\"LightGray\">";
            // line 75
            yield ($context["text_lightgray_button"] ?? null);
            yield "</option>

\t\t\t\t";
        }
        // line 78
        yield "
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-button-size\">";
        // line 83
        yield ($context["entry_button_size"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_amazon_login_button_size\" id=\"input-button-size\" class=\"form-control\">

\t\t\t\t";
        // line 87
        if ((($context["module_amazon_login_button_size"] ?? null) == "small")) {
            // line 88
            yield "\t\t\t\t\t
                <option value=\"small\" selected=\"selected\">";
            // line 89
            yield ($context["text_small_button"] ?? null);
            yield "</option>
                <option value=\"medium\">";
            // line 90
            yield ($context["text_medium_button"] ?? null);
            yield "</option>
                <option value=\"large\" selected=\"selected\">";
            // line 91
            yield ($context["text_large_button"] ?? null);
            yield "</option>
                <option value=\"x-large\">";
            // line 92
            yield ($context["text_x_large_button"] ?? null);
            yield "</option>

\t\t\t\t";
        } elseif ((        // line 94
($context["module_amazon_login_button_size"] ?? null) == "large")) {
            // line 95
            yield "
                <option value=\"small\" >";
            // line 96
            yield ($context["text_small_button"] ?? null);
            yield "</option>
                <option value=\"medium\">";
            // line 97
            yield ($context["text_medium_button"] ?? null);
            yield "</option>
                <option value=\"large\" selected=\"selected\">";
            // line 98
            yield ($context["text_large_button"] ?? null);
            yield "</option>
                <option value=\"x-large\">";
            // line 99
            yield ($context["text_x_large_button"] ?? null);
            yield "</option>

\t\t\t\t";
        } elseif ((        // line 101
($context["module_amazon_login_button_size"] ?? null) == "x-large")) {
            // line 102
            yield "
                <option value=\"small\">";
            // line 103
            yield ($context["text_small_button"] ?? null);
            yield "</option>
                <option value=\"medium\">";
            // line 104
            yield ($context["text_medium_button"] ?? null);
            yield "</option>
                <option value=\"large\">";
            // line 105
            yield ($context["text_large_button"] ?? null);
            yield "</option>
                <option value=\"x-large\" selected=\"selected\">";
            // line 106
            yield ($context["text_x_large_button"] ?? null);
            yield "</option>

\t\t\t\t";
        } else {
            // line 109
            yield "
                <option value=\"small\">";
            // line 110
            yield ($context["text_small_button"] ?? null);
            yield "</option>
                <option value=\"medium\" selected=\"selected\">";
            // line 111
            yield ($context["text_medium_button"] ?? null);
            yield "</option>
                <option value=\"large\">";
            // line 112
            yield ($context["text_large_button"] ?? null);
            yield "</option>
                <option value=\"x-large\">";
            // line 113
            yield ($context["text_x_large_button"] ?? null);
            yield "</option>

\t\t\t\t";
        }
        // line 116
        yield "
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 121
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_amazon_login_status\" id=\"input-status\" class=\"form-control\">

\t\t\t\t";
        // line 125
        if ((($tmp = ($context["module_amazon_login_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "
                <option value=\"1\" selected=\"selected\">";
            // line 127
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\">";
            // line 128
            yield ($context["text_disabled"] ?? null);
            yield "</option>

\t\t\t\t";
        } else {
            // line 131
            yield "
                <option value=\"1\">";
            // line 132
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 133
            yield ($context["text_disabled"] ?? null);
            yield "</option>

\t\t\t\t";
        }
        // line 136
        yield "
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 145
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
        return "extension/module/amazon_login.twig";
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
        return array (  394 => 145,  383 => 136,  377 => 133,  373 => 132,  370 => 131,  364 => 128,  360 => 127,  357 => 126,  355 => 125,  348 => 121,  341 => 116,  335 => 113,  331 => 112,  327 => 111,  323 => 110,  320 => 109,  314 => 106,  310 => 105,  306 => 104,  302 => 103,  299 => 102,  297 => 101,  292 => 99,  288 => 98,  284 => 97,  280 => 96,  277 => 95,  275 => 94,  270 => 92,  266 => 91,  262 => 90,  258 => 89,  255 => 88,  253 => 87,  246 => 83,  239 => 78,  233 => 75,  229 => 74,  225 => 73,  222 => 72,  216 => 69,  212 => 68,  208 => 67,  205 => 66,  203 => 65,  198 => 63,  194 => 62,  190 => 61,  187 => 60,  185 => 59,  178 => 55,  171 => 50,  165 => 47,  161 => 46,  157 => 45,  154 => 44,  148 => 41,  144 => 40,  140 => 39,  137 => 38,  135 => 37,  130 => 35,  126 => 34,  122 => 33,  119 => 32,  117 => 31,  110 => 27,  105 => 25,  99 => 22,  95 => 20,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/amazon_login.twig", "");
    }
}
