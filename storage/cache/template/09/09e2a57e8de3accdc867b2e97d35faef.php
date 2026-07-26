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

/* default/template/account/voucher.twig */
class __TwigTemplate_14ad311e88df15e9102d26014426044c extends Template
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
        yield "
<div id=\"account-voucher\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "    <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  ";
        // line 8
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "</div>
  ";
        }
        // line 11
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 14
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 16
            yield "    ";
        } else {
            // line 17
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 18
            yield "    ";
        }
        // line 19
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">";
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 20
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <p>";
        // line 21
        yield ($context["text_description"] ?? null);
        yield "</p>
      <form action=\"";
        // line 22
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 24
        yield ($context["entry_to_name"] ?? null);
        yield "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_name\" value=\"";
        // line 26
        yield ($context["to_name"] ?? null);
        yield "\" id=\"input-to-name\" class=\"form-control\" />
            ";
        // line 27
        if ((($tmp = ($context["error_to_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "            <div class=\"text-danger\">";
            yield ($context["error_to_name"] ?? null);
            yield "</div>
            ";
        }
        // line 30
        yield "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 33
        yield ($context["entry_to_email"] ?? null);
        yield "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_email\" value=\"";
        // line 35
        yield ($context["to_email"] ?? null);
        yield "\" id=\"input-to-email\" class=\"form-control\" />
            ";
        // line 36
        if ((($tmp = ($context["error_to_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "            <div class=\"text-danger\">";
            yield ($context["error_to_email"] ?? null);
            yield "</div>
            ";
        }
        // line 39
        yield "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 42
        yield ($context["entry_from_name"] ?? null);
        yield "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_name\" value=\"";
        // line 44
        yield ($context["from_name"] ?? null);
        yield "\" id=\"input-from-name\" class=\"form-control\" />
            ";
        // line 45
        if ((($tmp = ($context["error_from_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "            <div class=\"text-danger\">";
            yield ($context["error_from_name"] ?? null);
            yield "</div>
            ";
        }
        // line 48
        yield "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 51
        yield ($context["entry_from_email"] ?? null);
        yield "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_email\" value=\"";
        // line 53
        yield ($context["from_email"] ?? null);
        yield "\" id=\"input-from-email\" class=\"form-control\" />
            ";
        // line 54
        if ((($tmp = ($context["error_from_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "            <div class=\"text-danger\">";
            yield ($context["error_from_email"] ?? null);
            yield "</div>
            ";
        }
        // line 57
        yield "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\">";
        // line 60
        yield ($context["entry_theme"] ?? null);
        yield "</label>
          <div class=\"col-sm-10\">
           ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 63
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 63) == ($context["voucher_theme_id"] ?? null))) {
                // line 64
                yield "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 66
                yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 66);
                yield "\" checked=\"checked\" />
                ";
                // line 67
                yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 67);
                yield "</label>
            </div>
            ";
            } else {
                // line 70
                yield "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 72
                yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 72);
                yield "\" />
                ";
                // line 73
                yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 73);
                yield "</label>
            </div>
            ";
            }
            // line 76
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['voucher_theme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "            ";
        if ((($tmp = ($context["error_theme"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "            <div class=\"text-danger\">";
            yield ($context["error_theme"] ?? null);
            yield "</div>
            ";
        }
        // line 80
        yield "          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-message\"><span data-toggle=\"tooltip\" title=\"";
        // line 83
        yield ($context["help_message"] ?? null);
        yield "\">";
        yield ($context["entry_message"] ?? null);
        yield "</span></label>
          <div class=\"col-sm-10\">
            <textarea name=\"message\" cols=\"40\" rows=\"5\" id=\"input-message\" class=\"form-control\">";
        // line 85
        yield ($context["message"] ?? null);
        yield "</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-amount\"><span data-toggle=\"tooltip\" title=\"";
        // line 89
        yield ($context["help_amount"] ?? null);
        yield "\">";
        yield ($context["entry_amount"] ?? null);
        yield "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"amount\" value=\"";
        // line 91
        yield ($context["amount"] ?? null);
        yield "\" id=\"input-amount\" class=\"form-control\" size=\"5\" />
            ";
        // line 92
        if ((($tmp = ($context["error_amount"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "            <div class=\"text-danger\">";
            yield ($context["error_amount"] ?? null);
            yield "</div>
            ";
        }
        // line 95
        yield "          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\"> ";
        // line 98
        yield ($context["text_agree"] ?? null);
        yield "
            ";
        // line 99
        if ((($tmp = ($context["agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 102
            yield "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
        }
        // line 104
        yield "            &nbsp;
            <input type=\"submit\" value=\"";
        // line 105
        yield ($context["button_continue"] ?? null);
        yield "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      ";
        // line 109
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 110
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 112
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/account/voucher.twig";
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
        return array (  338 => 112,  333 => 110,  329 => 109,  322 => 105,  319 => 104,  315 => 102,  311 => 100,  309 => 99,  305 => 98,  300 => 95,  294 => 93,  292 => 92,  288 => 91,  281 => 89,  274 => 85,  267 => 83,  262 => 80,  256 => 78,  253 => 77,  247 => 76,  241 => 73,  237 => 72,  233 => 70,  227 => 67,  223 => 66,  219 => 64,  216 => 63,  212 => 62,  207 => 60,  202 => 57,  196 => 55,  194 => 54,  190 => 53,  185 => 51,  180 => 48,  174 => 46,  172 => 45,  168 => 44,  163 => 42,  158 => 39,  152 => 37,  150 => 36,  146 => 35,  141 => 33,  136 => 30,  130 => 28,  128 => 27,  124 => 26,  119 => 24,  114 => 22,  110 => 21,  106 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  79 => 12,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/account/voucher.twig", "");
    }
}
