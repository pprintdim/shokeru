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

/* default/template/account/return_form.twig */
class __TwigTemplate_2b3a7fb73fd4121bc48dd6629abf2f81 extends Template
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
<div id=\"account-return\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "    <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\"> ";
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
        yield "  <div class=\"row\"> ";
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
        yield "\"> ";
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
        <fieldset>
          <legend>";
        // line 24
        yield ($context["text_order"] ?? null);
        yield "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 26
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 28
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 29
        if ((($tmp = ($context["error_firstname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "              <div class=\"text-danger\">";
            yield ($context["error_firstname"] ?? null);
            yield "</div>
              ";
        }
        // line 31
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 34
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 36
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 37
        if ((($tmp = ($context["error_lastname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "              <div class=\"text-danger\">";
            yield ($context["error_lastname"] ?? null);
            yield "</div>
              ";
        }
        // line 39
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 42
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 44
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 45
        if ((($tmp = ($context["error_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "              <div class=\"text-danger\">";
            yield ($context["error_email"] ?? null);
            yield "</div>
              ";
        }
        // line 47
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 50
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 52
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 53
        if ((($tmp = ($context["error_telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "              <div class=\"text-danger\">";
            yield ($context["error_telephone"] ?? null);
            yield "</div>
              ";
        }
        // line 55
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-id\">";
        // line 58
        yield ($context["entry_order_id"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 60
        yield ($context["order_id"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_order_id"] ?? null);
        yield "\" id=\"input-order-id\" class=\"form-control\" />
              ";
        // line 61
        if ((($tmp = ($context["error_order_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "              <div class=\"text-danger\">";
            yield ($context["error_order_id"] ?? null);
            yield "</div>
              ";
        }
        // line 63
        yield " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-ordered\">";
        // line 66
        yield ($context["entry_date_ordered"] ?? null);
        yield "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 69
        yield ($context["date_ordered"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_ordered"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 77
        yield ($context["text_product"] ?? null);
        yield "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 79
        yield ($context["entry_product"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 81
        yield ($context["product"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 82
        yield ($context["product_id"] ?? null);
        yield "\" />
              ";
        // line 83
        if ((($tmp = ($context["error_product"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "              <div class=\"text-danger\">";
            yield ($context["error_product"] ?? null);
            yield "</div>
              ";
        }
        // line 85
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 88
        yield ($context["entry_model"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 90
        yield ($context["model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" class=\"form-control\" />
              ";
        // line 91
        if ((($tmp = ($context["error_model"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "              <div class=\"text-danger\">";
            yield ($context["error_model"] ?? null);
            yield "</div>
              ";
        }
        // line 93
        yield " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 96
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 98
        yield ($context["quantity"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_quantity"] ?? null);
        yield "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 102
        yield ($context["entry_reason"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\"> ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 104
            yield "              ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 104) == ($context["return_reason_id"] ?? null))) {
                // line 105
                yield "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 107
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 107);
                yield "\" checked=\"checked\" />
                  ";
                // line 108
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 108);
                yield "</label>
              </div>
              ";
            } else {
                // line 111
                yield "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 113
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 113);
                yield "\" />
                  ";
                // line 114
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 114);
                yield "</label>
              </div>
              ";
            }
            // line 117
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_reason'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "              ";
        if ((($tmp = ($context["error_reason"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "              <div class=\"text-danger\">";
            yield ($context["error_reason"] ?? null);
            yield "</div>
              ";
        }
        // line 120
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 123
        yield ($context["entry_opened"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 125
        if ((($tmp = ($context["opened"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "                <input type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 128
            yield "                <input type=\"radio\" name=\"opened\" value=\"1\" />
                ";
        }
        // line 130
        yield "                ";
        yield ($context["text_yes"] ?? null);
        yield "</label>
              <label class=\"radio-inline\"> ";
        // line 131
        if ((($tmp =  !($context["opened"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "                <input type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\" />
                ";
        } else {
            // line 134
            yield "                <input type=\"radio\" name=\"opened\" value=\"0\" />
                ";
        }
        // line 136
        yield "                ";
        yield ($context["text_no"] ?? null);
        yield "</label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 140
        yield ($context["entry_fault_detail"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 142
        yield ($context["entry_fault_detail"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\">";
        yield ($context["comment"] ?? null);
        yield "</textarea>
            </div>
          </div>
          ";
        // line 145
        yield ($context["captcha"] ?? null);
        yield "
        </fieldset>
        ";
        // line 147
        if ((($tmp = ($context["text_agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 148
            yield "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 149
            yield ($context["back"] ?? null);
            yield "\" class=\"btn btn-danger\">";
            yield ($context["button_back"] ?? null);
            yield "</a></div>
          <div class=\"pull-right\">";
            // line 150
            yield ($context["text_agree"] ?? null);
            yield "
            ";
            // line 151
            if ((($tmp = ($context["agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 152
                yield "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 154
                yield "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 156
            yield "            <input type=\"submit\" value=\"";
            yield ($context["button_submit"] ?? null);
            yield "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        } else {
            // line 160
            yield "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 161
            yield ($context["back"] ?? null);
            yield "\" class=\"btn btn-default\">";
            yield ($context["button_back"] ?? null);
            yield "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
            // line 163
            yield ($context["button_submit"] ?? null);
            yield "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 167
        yield "      </form>
      ";
        // line 168
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 169
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 173
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickTime: false
});
//--></script> 
";
        // line 177
        yield ($context["footer"] ?? null);
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/account/return_form.twig";
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
        return array (  520 => 177,  513 => 173,  506 => 169,  502 => 168,  499 => 167,  492 => 163,  485 => 161,  482 => 160,  474 => 156,  470 => 154,  466 => 152,  464 => 151,  460 => 150,  454 => 149,  451 => 148,  449 => 147,  444 => 145,  436 => 142,  431 => 140,  423 => 136,  419 => 134,  415 => 132,  413 => 131,  408 => 130,  404 => 128,  400 => 126,  398 => 125,  393 => 123,  388 => 120,  382 => 119,  379 => 118,  373 => 117,  367 => 114,  363 => 113,  359 => 111,  353 => 108,  349 => 107,  345 => 105,  342 => 104,  338 => 103,  334 => 102,  325 => 98,  320 => 96,  315 => 93,  309 => 92,  307 => 91,  301 => 90,  296 => 88,  291 => 85,  285 => 84,  283 => 83,  279 => 82,  273 => 81,  268 => 79,  263 => 77,  250 => 69,  244 => 66,  239 => 63,  233 => 62,  231 => 61,  225 => 60,  220 => 58,  215 => 55,  209 => 54,  207 => 53,  201 => 52,  196 => 50,  191 => 47,  185 => 46,  183 => 45,  177 => 44,  172 => 42,  167 => 39,  161 => 38,  159 => 37,  153 => 36,  148 => 34,  143 => 31,  137 => 30,  135 => 29,  129 => 28,  124 => 26,  119 => 24,  114 => 22,  110 => 21,  106 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  79 => 12,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/account/return_form.twig", "");
    }
}
