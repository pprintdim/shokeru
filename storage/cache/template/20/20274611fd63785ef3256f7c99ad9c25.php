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

/* customer/customer_form.twig */
class __TwigTemplate_1037876d3ae365e898171903efea16dc extends Template
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
        <button type=\"submit\" form=\"form-customer\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\"> ";
        // line 16
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        yield ($context["text_form"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-affiliate\" data-toggle=\"tab\">";
        // line 29
        yield ($context["tab_affiliate"] ?? null);
        yield "</a></li>
            ";
        // line 30
        if ((($tmp = ($context["customer_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "            <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            yield ($context["tab_history"] ?? null);
            yield "</a></li>
            <li><a href=\"#tab-transaction\" data-toggle=\"tab\">";
            // line 32
            yield ($context["tab_transaction"] ?? null);
            yield "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
            // line 33
            yield ($context["tab_reward"] ?? null);
            yield "</a></li>
            <li><a href=\"#tab-ip\" data-toggle=\"tab\">";
            // line 34
            yield ($context["tab_ip"] ?? null);
            yield "</a></li>
            ";
        }
        // line 36
        yield "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"address\">
                    <li class=\"active\"><a href=\"#tab-customer\" data-toggle=\"tab\">";
        // line 42
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
                    ";
        // line 43
        $context["address_row"] = 1;
        // line 44
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 45
            yield "                    <li><a href=\"#tab-address";
            yield ($context["address_row"] ?? null);
            yield "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('#address a:first').tab('show'); \$('#address a[href=\\'#tab-address";
            yield ($context["address_row"] ?? null);
            yield "\\']').parent().remove(); \$('#tab-address";
            yield ($context["address_row"] ?? null);
            yield "').remove();\"></i> ";
            yield ($context["tab_address"] ?? null);
            yield " ";
            yield ($context["address_row"] ?? null);
            yield "</a></li>
                    ";
            // line 46
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 47
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                    <li id=\"address-add\"><a onclick=\"addAddress();\"><i class=\"fa fa-plus-circle\"></i> ";
        yield ($context["button_address_add"] ?? null);
        yield "</a></li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-customer\">
                      <fieldset>
                        <legend>";
        // line 55
        yield ($context["text_account"] ?? null);
        yield "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 57
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                              ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 61
            yield "                              ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 61) == ($context["customer_group_id"] ?? null))) {
                // line 62
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 62);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 62);
                yield "</option>
                              ";
            } else {
                // line 64
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 64);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 64);
                yield "</option>
                              ";
            }
            // line 66
            yield "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 71
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 73
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\" />
                            ";
        // line 74
        if ((($tmp = ($context["error_firstname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "                            <div class=\"text-danger\">";
            yield ($context["error_firstname"] ?? null);
            yield "</div>
                            ";
        }
        // line 76
        yield "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 79
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 81
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\" />
                            ";
        // line 82
        if ((($tmp = ($context["error_lastname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "                            <div class=\"text-danger\">";
            yield ($context["error_lastname"] ?? null);
            yield "</div>
                            ";
        }
        // line 84
        yield "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 87
        yield ($context["entry_email"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 89
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
                            ";
        // line 90
        if ((($tmp = ($context["error_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "                            <div class=\"text-danger\">";
            yield ($context["error_email"] ?? null);
            yield "</div>
                            ";
        }
        // line 92
        yield "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 95
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"telephone\" value=\"";
        // line 97
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\" />
                            ";
        // line 98
        if ((($tmp = ($context["error_telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "                            <div class=\"text-danger\">";
            yield ($context["error_telephone"] ?? null);
            yield "</div>
                            ";
        }
        // line 100
        yield "</div>
                        </div>
                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 103
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 103) == "account")) {
                // line 104
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 104) == "select")) {
                    // line 105
                    yield "                        <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 105);
                    yield "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 106
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 106);
                    yield "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"custom_field[";
                    // line 108
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                    yield "]\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                    yield "\" class=\"form-control\">
                              <option value=\"\">";
                    // line 109
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                              ";
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 110));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 111
                        yield "                              ";
                        if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 111) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111)] ?? null) : null)))) {
                            // line 112
                            yield "                              <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112);
                            yield "\" selected=\"selected\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 112);
                            yield "</option>
                              ";
                        } else {
                            // line 114
                            yield "                              <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 114);
                            yield "</option>
                              ";
                        }
                        // line 116
                        yield "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 117
                    yield "                            </select>
                            ";
                    // line 118
                    if ((($tmp = (($_v2 = ($context["error_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 119
                        yield "                            <div class=\"text-danger\">";
                        yield (($_v3 = ($context["error_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119)] ?? null) : null);
                        yield "</div>
                            ";
                    }
                    // line 120
                    yield "</div>
                        </div>
                        ";
                }
                // line 123
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 123) == "radio")) {
                    // line 124
                    yield "                        <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 124);
                    yield "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 125
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 125);
                    yield "</label>
                          <div class=\"col-sm-10\">
                            <div> ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 127));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 128
                        yield "                              <div class=\"radio\"> ";
                        if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 128) == (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null)))) {
                            // line 129
                            yield "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 130
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 130);
                            yield "\" checked=\"checked\" />
                                  ";
                            // line 131
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 131);
                            yield "</label>
                                ";
                        } else {
                            // line 133
                            yield "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 134
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 134);
                            yield "\" />
                                  ";
                            // line 135
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 135);
                            yield "</label>
                                ";
                        }
                        // line 136
                        yield "</div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    yield " </div>
                            ";
                    // line 138
                    if ((($tmp = (($_v6 = ($context["error_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 139
                        yield "                            <div class=\"text-danger\">";
                        yield (($_v7 = ($context["error_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null);
                        yield "</div>
                            ";
                    }
                    // line 140
                    yield "</div>
                        </div>
                        ";
                }
                // line 143
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 143) == "checkbox")) {
                    // line 144
                    yield "                        <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 144);
                    yield "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 145
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 145);
                    yield "</label>
                          <div class=\"col-sm-10\">
                            <div> ";
                    // line 147
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 147));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 148
                        yield "                              <div class=\"checkbox\">";
                        if (((($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 148), (($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null)))) {
                            // line 149
                            yield "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 150
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 150);
                            yield "\" checked=\"checked\" />
                                  ";
                            // line 151
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 151);
                            yield "</label>
                                ";
                        } else {
                            // line 153
                            yield "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 154
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 154);
                            yield "\" />
                                  ";
                            // line 155
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 155);
                            yield "</label>
                                ";
                        }
                        // line 156
                        yield "</div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    yield "</div>
                            ";
                    // line 158
                    if ((($tmp = (($_v10 = ($context["error_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 159
                        yield "                            <div class=\"text-danger\">";
                        yield (($_v11 = ($context["error_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159)] ?? null) : null);
                        yield "</div>
                            ";
                    }
                    // line 160
                    yield "</div>
                        </div>
                        ";
                }
                // line 163
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 163) == "text")) {
                    // line 164
                    yield "                        <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 164);
                    yield "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 165
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 165);
                    yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 167
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 167)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 167);
                    yield "\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                    yield "\" class=\"form-control\" />
                            ";
                    // line 168
                    if ((($tmp = (($_v14 = ($context["error_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 169
                        yield "                            <div class=\"text-danger\">";
                        yield (($_v15 = ($context["error_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169)] ?? null) : null);
                        yield "</div>
                            ";
                    }
                    // line 170
                    yield "</div>
                        </div>
                        ";
                }
                // line 173
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 173) == "textarea")) {
                    // line 174
                    yield "                        <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 174);
                    yield "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 175
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 175);
                    yield "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"custom_field[";
                    // line 177
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 177);
                    yield "\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    yield "\" class=\"form-control\">";
                    yield (((($tmp = (($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 177)));
                    yield "</textarea>
                            ";
                    // line 178
                    if ((($tmp = (($_v18 = ($context["error_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 179
                        yield "                            <div class=\"text-danger\">";
                        yield (($_v19 = ($context["error_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179)] ?? null) : null);
                        yield "</div>
                            ";
                    }
                    // line 180
                    yield "</div>
                        </div>
                        ";
                }
                // line 183
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 183) == "file")) {
                    // line 184
                    yield "                        <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 184);
                    yield "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 185
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 185);
                    yield "</label>
                          <div class=\"col-sm-10\">
                            <button type=\"button\" id=\"button-custom-field";
                    // line 187
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    yield "\" data-loading-text=\"";
                    yield ($context["text_loading"] ?? null);
                    yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                            <input type=\"hidden\" name=\"custom_field[";
                    // line 188
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v20 = (($_v21 = ($context["account_custom_field"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["code"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v22 = (($_v23 = ($context["account_custom_field"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["code"] ?? null) : null)) : (""));
                    yield "\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                    yield "\" />
                            <span>";
                    // line 189
                    yield (($_v24 = (($_v25 = ($context["account_custom_field"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189)] ?? null) : null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["name"] ?? null) : null);
                    yield "</span>
                            ";
                    // line 190
                    if ((($tmp = (($_v26 = ($context["error_custom_field"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 191
                        yield "                            <div class=\"text-danger\">";
                        yield (($_v27 = ($context["error_custom_field"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191)] ?? null) : null);
                        yield "</div>
                            ";
                    }
                    // line 192
                    yield "</div>
                        </div>
                        ";
                }
                // line 195
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 195) == "date")) {
                    // line 196
                    yield "                        <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 196);
                    yield "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 197
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 197);
                    yield "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 200
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v28 = ($context["account_custom_field"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v29 = ($context["account_custom_field"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 200)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 200);
                    yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                    yield "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 204
                    if ((($tmp = (($_v30 = ($context["error_custom_field"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 205
                        yield "                            <div class=\"text-danger\">";
                        yield (($_v31 = ($context["error_custom_field"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205)] ?? null) : null);
                        yield "</div>
                            ";
                    }
                    // line 206
                    yield "</div>
                        </div>
                        ";
                }
                // line 209
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 209) == "time")) {
                    // line 210
                    yield "                        <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 210);
                    yield "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 211
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 211);
                    yield "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 214
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v32 = ($context["account_custom_field"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v33 = ($context["account_custom_field"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 214)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 214);
                    yield "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                    yield "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 218
                    if ((($tmp = (($_v34 = ($context["error_custom_field"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 219
                        yield "                            <div class=\"text-danger\">";
                        yield (($_v35 = ($context["error_custom_field"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219)] ?? null) : null);
                        yield "</div>
                            ";
                    }
                    // line 220
                    yield "</div>
                        </div>
                        ";
                }
                // line 223
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 223) == "datetime")) {
                    // line 224
                    yield "                        <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 224);
                    yield "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 225
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 225);
                    yield "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 228
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v36 = ($context["account_custom_field"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v37 = ($context["account_custom_field"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 228)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 228);
                    yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                    yield "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 232
                    if ((($tmp = (($_v38 = ($context["error_custom_field"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 233
                        yield "                            <div class=\"text-danger\">";
                        yield (($_v39 = ($context["error_custom_field"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233)] ?? null) : null);
                        yield "</div>
                            ";
                    }
                    // line 234
                    yield "</div>
                        </div>
                        ";
                }
                // line 237
                yield "                        ";
            }
            // line 238
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        yield "                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 241
        yield ($context["text_password"] ?? null);
        yield "</legend>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 243
        yield ($context["entry_password"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 245
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" autocomplete=\"off\" />
                            ";
        // line 246
        if ((($tmp = ($context["error_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 247
            yield "                            <div class=\"text-danger\">";
            yield ($context["error_password"] ?? null);
            yield "</div>
                            ";
        }
        // line 248
        yield "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 251
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 253
        yield ($context["confirm"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_confirm"] ?? null);
        yield "\" autocomplete=\"off\" id=\"input-confirm\" class=\"form-control\" />
                            ";
        // line 254
        if ((($tmp = ($context["error_confirm"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 255
            yield "                            <div class=\"text-danger\">";
            yield ($context["error_confirm"] ?? null);
            yield "</div>
                            ";
        }
        // line 256
        yield "</div>
                        </div>
                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 260
        yield ($context["text_other"] ?? null);
        yield "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-newsletter\">";
        // line 262
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"newsletter\" id=\"input-newsletter\" class=\"form-control\">
                              ";
        // line 265
        if ((($tmp = ($context["newsletter"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 266
            yield "                              <option value=\"1\" selected=\"selected\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                              <option value=\"0\">";
            // line 267
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                              ";
        } else {
            // line 269
            yield "                              <option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 270
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                              ";
        }
        // line 272
        yield "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 276
        yield ($context["entry_status"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                              ";
        // line 279
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 280
            yield "                              <option value=\"1\" selected=\"selected\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                              <option value=\"0\">";
            // line 281
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                              ";
        } else {
            // line 283
            yield "                              <option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 284
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                              ";
        }
        // line 286
        yield "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-safe\"><span data-toggle=\"tooltip\" title=\"";
        // line 290
        yield ($context["help_safe"] ?? null);
        yield "\">";
        yield ($context["entry_safe"] ?? null);
        yield "</span></label>
                          <div class=\"col-sm-10\">
                            <select name=\"safe\" id=\"input-safe\" class=\"form-control\">
                              ";
        // line 293
        if ((($tmp = ($context["safe"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 294
            yield "                              <option value=\"1\" selected=\"selected\">";
            yield ($context["text_yes"] ?? null);
            yield "</option>
                              <option value=\"0\">";
            // line 295
            yield ($context["text_no"] ?? null);
            yield "</option>
                              ";
        } else {
            // line 297
            yield "                              <option value=\"1\">";
            yield ($context["text_yes"] ?? null);
            yield "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 298
            yield ($context["text_no"] ?? null);
            yield "</option>
                              ";
        }
        // line 300
        yield "                            </select>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    ";
        // line 305
        $context["address_row"] = 1;
        // line 306
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 307
            yield "                    <div class=\"tab-pane\" id=\"tab-address";
            yield ($context["address_row"] ?? null);
            yield "\">
                      <input type=\"hidden\" name=\"address[";
            // line 308
            yield ($context["address_row"] ?? null);
            yield "][address_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 308);
            yield "\" />
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname";
            // line 310
            yield ($context["address_row"] ?? null);
            yield "\">";
            yield ($context["entry_firstname"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 312
            yield ($context["address_row"] ?? null);
            yield "][firstname]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 312);
            yield "\" placeholder=\"";
            yield ($context["entry_firstname"] ?? null);
            yield "\" id=\"input-firstname";
            yield ($context["address_row"] ?? null);
            yield "\" class=\"form-control\" />
                          ";
            // line 313
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v40 = ($context["error_address"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40[($context["address_row"] ?? null)] ?? null) : null), "firstname", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 314
                yield "                          <div class=\"text-danger\">";
                yield CoreExtension::getAttribute($this->env, $this->source, (($_v41 = ($context["error_address"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[($context["address_row"] ?? null)] ?? null) : null), "firstname", [], "any", false, false, false, 314);
                yield "</div>
                          ";
            }
            // line 315
            yield "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname";
            // line 318
            yield ($context["address_row"] ?? null);
            yield "\">";
            yield ($context["entry_lastname"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 320
            yield ($context["address_row"] ?? null);
            yield "][lastname]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 320);
            yield "\" placeholder=\"";
            yield ($context["entry_lastname"] ?? null);
            yield "\" id=\"input-lastname";
            yield ($context["address_row"] ?? null);
            yield "\" class=\"form-control\" />
                          ";
            // line 321
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v42 = ($context["error_address"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[($context["address_row"] ?? null)] ?? null) : null), "lastname", [], "any", false, false, false, 321)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 322
                yield "                          <div class=\"text-danger\">";
                yield CoreExtension::getAttribute($this->env, $this->source, (($_v43 = ($context["error_address"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43[($context["address_row"] ?? null)] ?? null) : null), "lastname", [], "any", false, false, false, 322);
                yield "</div>
                          ";
            }
            // line 323
            yield "</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-company";
            // line 326
            yield ($context["address_row"] ?? null);
            yield "\">";
            yield ($context["entry_company"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 328
            yield ($context["address_row"] ?? null);
            yield "][company]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 328);
            yield "\" placeholder=\"";
            yield ($context["entry_company"] ?? null);
            yield "\" id=\"input-company";
            yield ($context["address_row"] ?? null);
            yield "\" class=\"form-control\" />
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-1";
            // line 332
            yield ($context["address_row"] ?? null);
            yield "\">";
            yield ($context["entry_address_1"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 334
            yield ($context["address_row"] ?? null);
            yield "][address_1]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 334);
            yield "\" placeholder=\"";
            yield ($context["entry_address_1"] ?? null);
            yield "\" id=\"input-address-1";
            yield ($context["address_row"] ?? null);
            yield "\" class=\"form-control\" />
                          ";
            // line 335
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v44 = ($context["error_address"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[($context["address_row"] ?? null)] ?? null) : null), "address_1", [], "any", false, false, false, 335)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 336
                yield "                          <div class=\"text-danger\">";
                yield CoreExtension::getAttribute($this->env, $this->source, (($_v45 = ($context["error_address"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45[($context["address_row"] ?? null)] ?? null) : null), "address_1", [], "any", false, false, false, 336);
                yield "</div>
                          ";
            }
            // line 337
            yield "</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-2";
            // line 340
            yield ($context["address_row"] ?? null);
            yield "\">";
            yield ($context["entry_address_2"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 342
            yield ($context["address_row"] ?? null);
            yield "][address_2]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_2", [], "any", false, false, false, 342);
            yield "\" placeholder=\"";
            yield ($context["entry_address_2"] ?? null);
            yield "\" id=\"input-address-2";
            yield ($context["address_row"] ?? null);
            yield "\" class=\"form-control\" />
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-city";
            // line 346
            yield ($context["address_row"] ?? null);
            yield "\">";
            yield ($context["entry_city"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 348
            yield ($context["address_row"] ?? null);
            yield "][city]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 348);
            yield "\" placeholder=\"";
            yield ($context["entry_city"] ?? null);
            yield "\" id=\"input-city";
            yield ($context["address_row"] ?? null);
            yield "\" class=\"form-control\" />
                          ";
            // line 349
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v46 = ($context["error_address"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46[($context["address_row"] ?? null)] ?? null) : null), "city", [], "any", false, false, false, 349)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 350
                yield "                          <div class=\"text-danger\">";
                yield CoreExtension::getAttribute($this->env, $this->source, (($_v47 = ($context["error_address"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[($context["address_row"] ?? null)] ?? null) : null), "city", [], "any", false, false, false, 350);
                yield "</div>
                          ";
            }
            // line 351
            yield "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-postcode";
            // line 354
            yield ($context["address_row"] ?? null);
            yield "\">";
            yield ($context["entry_postcode"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 356
            yield ($context["address_row"] ?? null);
            yield "][postcode]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 356);
            yield "\" placeholder=\"";
            yield ($context["entry_postcode"] ?? null);
            yield "\" id=\"input-postcode";
            yield ($context["address_row"] ?? null);
            yield "\" class=\"form-control\" />
                          ";
            // line 357
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v48 = ($context["error_address"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48[($context["address_row"] ?? null)] ?? null) : null), "postcode", [], "any", false, false, false, 357)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 358
                yield "                          <div class=\"text-danger\">";
                yield CoreExtension::getAttribute($this->env, $this->source, (($_v49 = ($context["error_address"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[($context["address_row"] ?? null)] ?? null) : null), "postcode", [], "any", false, false, false, 358);
                yield "</div>
                          ";
            }
            // line 359
            yield "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-country";
            // line 362
            yield ($context["address_row"] ?? null);
            yield "\">";
            yield ($context["entry_country"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 364
            yield ($context["address_row"] ?? null);
            yield "][country_id]\" id=\"input-country";
            yield ($context["address_row"] ?? null);
            yield "\" onchange=\"country(this, '";
            yield ($context["address_row"] ?? null);
            yield "', '";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone_id", [], "any", false, false, false, 364);
            yield "');\" class=\"form-control\">
                            <option value=\"\">";
            // line 365
            yield ($context["text_select"] ?? null);
            yield "</option>
                            ";
            // line 366
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 367
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 367) == CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country_id", [], "any", false, false, false, 367))) {
                    // line 368
                    yield "                            <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 368);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 368);
                    yield "</option>
                            ";
                } else {
                    // line 370
                    yield "                            <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 370);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 370);
                    yield "</option>
                            ";
                }
                // line 372
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            yield "                          </select>
                          ";
            // line 374
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v50 = ($context["error_address"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50[($context["address_row"] ?? null)] ?? null) : null), "country", [], "any", false, false, false, 374)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 375
                yield "                          <div class=\"text-danger\">";
                yield CoreExtension::getAttribute($this->env, $this->source, (($_v51 = ($context["error_address"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[($context["address_row"] ?? null)] ?? null) : null), "country", [], "any", false, false, false, 375);
                yield "</div>
                          ";
            }
            // line 376
            yield "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-zone";
            // line 379
            yield ($context["address_row"] ?? null);
            yield "\">";
            yield ($context["entry_zone"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 381
            yield ($context["address_row"] ?? null);
            yield "][zone_id]\" id=\"input-zone";
            yield ($context["address_row"] ?? null);
            yield "\" class=\"form-control\">
                          </select>
                          ";
            // line 383
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v52 = ($context["error_address"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52[($context["address_row"] ?? null)] ?? null) : null), "zone", [], "any", false, false, false, 383)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 384
                yield "                          <div class=\"text-danger\">";
                yield CoreExtension::getAttribute($this->env, $this->source, (($_v53 = ($context["error_address"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53[($context["address_row"] ?? null)] ?? null) : null), "zone", [], "any", false, false, false, 384);
                yield "</div>
                          ";
            }
            // line 385
            yield "</div>
                      </div>
                      ";
            // line 387
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 388
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 388) == "address")) {
                    // line 389
                    yield "                      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 389) == "select")) {
                        // line 390
                        yield "                      <div class=\"form-group custom-field custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 390);
                        yield "\" data-sort=\"";
                        yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 390) + 1);
                        yield "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 391
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 391);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 391);
                        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
                        // line 393
                        yield ($context["address_row"] ?? null);
                        yield "][custom_field][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393);
                        yield "]\" id=\"input-address";
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393);
                        yield "\" class=\"form-control\">
                            <option value=\"\">";
                        // line 394
                        yield ($context["text_select"] ?? null);
                        yield "</option>
                            ";
                        // line 395
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 395));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 396
                            yield "                            ";
                            if (((($_v54 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 396)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 396)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 396) == (($_v55 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 396)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 396)] ?? null) : null)))) {
                                // line 397
                                yield "                            <option value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 397);
                                yield "\" selected=\"selected\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 397);
                                yield "</option>
                            ";
                            } else {
                                // line 399
                                yield "                            <option value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 399);
                                yield "\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 399);
                                yield "</option>
                            ";
                            }
                            // line 401
                            yield "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 402
                        yield "                          </select>
                          ";
                        // line 403
                        if ((($tmp = (($_v56 = (($_v57 = (($_v58 = ($context["error_address"] ?? null)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58[($context["address_row"] ?? null)] ?? null) : null)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57["custom_field"] ?? null) : null)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 404
                            yield "                          <div class=\"text-danger\">";
                            yield (($_v59 = CoreExtension::getAttribute($this->env, $this->source, (($_v60 = ($context["error_address"] ?? null)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 404)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 404)] ?? null) : null);
                            yield "</div>
                          ";
                        }
                        // line 405
                        yield "</div>
                      </div>
                      ";
                    }
                    // line 408
                    yield "                      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 408) == "radio")) {
                        // line 409
                        yield "                      <div class=\"form-group custom-field custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 409);
                        yield "\" data-sort=\"";
                        yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 409) + 1);
                        yield "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 410
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 410);
                        yield "</label>
                        <div class=\"col-sm-10\">
                          <div> ";
                        // line 412
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 412));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 413
                            yield "                            <div class=\"radio\"> ";
                            if (((($_v61 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 413)) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 413) == (($_v62 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 413)) && is_array($_v62) || $_v62 instanceof ArrayAccess ? ($_v62[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413)] ?? null) : null)))) {
                                // line 414
                                yield "                              <label>
                                <input type=\"radio\" name=\"address[";
                                // line 415
                                yield ($context["address_row"] ?? null);
                                yield "][custom_field][";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                                yield "]\" value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 415);
                                yield "\" checked=\"checked\" />
                                ";
                                // line 416
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 416);
                                yield "</label>
                              ";
                            } else {
                                // line 418
                                yield "                              <label>
                                <input type=\"radio\" name=\"address[";
                                // line 419
                                yield ($context["address_row"] ?? null);
                                yield "][custom_field][";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 419);
                                yield "]\" value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 419);
                                yield "\" />
                                ";
                                // line 420
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 420);
                                yield "</label>
                              ";
                            }
                            // line 421
                            yield "</div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 422
                        yield " </div>
                          ";
                        // line 423
                        if ((($tmp = (($_v63 = CoreExtension::getAttribute($this->env, $this->source, (($_v64 = ($context["error_address"] ?? null)) && is_array($_v64) || $_v64 instanceof ArrayAccess ? ($_v64[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 423)) && is_array($_v63) || $_v63 instanceof ArrayAccess ? ($_v63[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 423)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 424
                            yield "                          <div class=\"text-danger\">";
                            yield (($_v65 = CoreExtension::getAttribute($this->env, $this->source, (($_v66 = ($context["error_address"] ?? null)) && is_array($_v66) || $_v66 instanceof ArrayAccess ? ($_v66[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 424)) && is_array($_v65) || $_v65 instanceof ArrayAccess ? ($_v65[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 424)] ?? null) : null);
                            yield "</div>
                          ";
                        }
                        // line 425
                        yield "</div>
                      </div>
                      ";
                    }
                    // line 428
                    yield "                      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 428) == "checkbox")) {
                        // line 429
                        yield "                      <div class=\"form-group custom-field custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                        yield "\" data-sort=\"";
                        yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 429) + 1);
                        yield "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 430
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 430);
                        yield "</label>
                        <div class=\"col-sm-10\">
                          <div> ";
                        // line 432
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 432));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 433
                            yield "                            <div class=\"checkbox\"> ";
                            if (((($_v67 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 433)) && is_array($_v67) || $_v67 instanceof ArrayAccess ? ($_v67[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 433)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 433), (($_v68 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 433)) && is_array($_v68) || $_v68 instanceof ArrayAccess ? ($_v68[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 433)] ?? null) : null)))) {
                                // line 434
                                yield "                              <label>
                                <input type=\"checkbox\" name=\"address[";
                                // line 435
                                yield ($context["address_row"] ?? null);
                                yield "][custom_field][";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 435);
                                yield "][]\" value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 435);
                                yield "\" checked=\"checked\" />
                                ";
                                // line 436
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 436);
                                yield "</label>
                              ";
                            } else {
                                // line 438
                                yield "                              <label>
                                <input type=\"checkbox\" name=\"address[";
                                // line 439
                                yield ($context["address_row"] ?? null);
                                yield "][custom_field][";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 439);
                                yield "][]\" value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 439);
                                yield "\" />
                                ";
                                // line 440
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 440);
                                yield "</label>
                              ";
                            }
                            // line 441
                            yield "</div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 442
                        yield " </div>
                          ";
                        // line 443
                        if ((($tmp = (($_v69 = (($_v70 = (($_v71 = ($context["error_address"] ?? null)) && is_array($_v71) || $_v71 instanceof ArrayAccess ? ($_v71[($context["address_row"] ?? null)] ?? null) : null)) && is_array($_v70) || $_v70 instanceof ArrayAccess ? ($_v70["custom_field"] ?? null) : null)) && is_array($_v69) || $_v69 instanceof ArrayAccess ? ($_v69[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 443)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 444
                            yield "                          <div class=\"text-danger\">";
                            yield (($_v72 = CoreExtension::getAttribute($this->env, $this->source, (($_v73 = ($context["error_address"] ?? null)) && is_array($_v73) || $_v73 instanceof ArrayAccess ? ($_v73[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 444)) && is_array($_v72) || $_v72 instanceof ArrayAccess ? ($_v72[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 444)] ?? null) : null);
                            yield "</div>
                          ";
                        }
                        // line 445
                        yield "</div>
                      </div>
                      ";
                    }
                    // line 448
                    yield "                      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 448) == "text")) {
                        // line 449
                        yield "                      <div class=\"form-group custom-field custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 449);
                        yield "\" data-sort=\"";
                        yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 449) + 1);
                        yield "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 450
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 450);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 450);
                        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
                        // line 452
                        yield ($context["address_row"] ?? null);
                        yield "][custom_field][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 452);
                        yield "]\" value=\"";
                        yield (((($tmp = (($_v74 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 452)) && is_array($_v74) || $_v74 instanceof ArrayAccess ? ($_v74[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 452)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v75 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 452)) && is_array($_v75) || $_v75 instanceof ArrayAccess ? ($_v75[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 452)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 452)));
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 452);
                        yield "\" id=\"input-address";
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 452);
                        yield "\" class=\"form-control\" />
                          ";
                        // line 453
                        if ((($tmp = (($_v76 = (($_v77 = (($_v78 = ($context["error_address"] ?? null)) && is_array($_v78) || $_v78 instanceof ArrayAccess ? ($_v78[($context["address_row"] ?? null)] ?? null) : null)) && is_array($_v77) || $_v77 instanceof ArrayAccess ? ($_v77["custom_field"] ?? null) : null)) && is_array($_v76) || $_v76 instanceof ArrayAccess ? ($_v76[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 453)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 454
                            yield "                          <div class=\"text-danger\">";
                            yield (($_v79 = CoreExtension::getAttribute($this->env, $this->source, (($_v80 = ($context["error_address"] ?? null)) && is_array($_v80) || $_v80 instanceof ArrayAccess ? ($_v80[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 454)) && is_array($_v79) || $_v79 instanceof ArrayAccess ? ($_v79[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 454)] ?? null) : null);
                            yield "</div>
                          ";
                        }
                        // line 455
                        yield "</div>
                      </div>
                      ";
                    }
                    // line 458
                    yield "                      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 458) == "textarea")) {
                        // line 459
                        yield "                      <div class=\"form-group custom-field custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 459);
                        yield "\" data-sort=\"";
                        yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 459) + 1);
                        yield "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 460
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 460);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 460);
                        yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"address[";
                        // line 462
                        yield ($context["address_row"] ?? null);
                        yield "][custom_field][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 462);
                        yield "]\" rows=\"5\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 462);
                        yield "\" id=\"input-address";
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 462);
                        yield "\" class=\"form-control\">";
                        yield (((($tmp = (($_v81 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 462)) && is_array($_v81) || $_v81 instanceof ArrayAccess ? ($_v81[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 462)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v82 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 462)) && is_array($_v82) || $_v82 instanceof ArrayAccess ? ($_v82[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 462)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 462)));
                        yield "</textarea>
                          ";
                        // line 463
                        if ((($tmp = (($_v83 = (($_v84 = (($_v85 = ($context["error_address"] ?? null)) && is_array($_v85) || $_v85 instanceof ArrayAccess ? ($_v85[($context["address_row"] ?? null)] ?? null) : null)) && is_array($_v84) || $_v84 instanceof ArrayAccess ? ($_v84["custom_field"] ?? null) : null)) && is_array($_v83) || $_v83 instanceof ArrayAccess ? ($_v83[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 463)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 464
                            yield "                          <div class=\"text-danger\">";
                            yield (($_v86 = CoreExtension::getAttribute($this->env, $this->source, (($_v87 = ($context["error_address"] ?? null)) && is_array($_v87) || $_v87 instanceof ArrayAccess ? ($_v87[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 464)) && is_array($_v86) || $_v86 instanceof ArrayAccess ? ($_v86[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 464)] ?? null) : null);
                            yield "</div>
                          ";
                        }
                        // line 465
                        yield "</div>
                      </div>
                      ";
                    }
                    // line 468
                    yield "                      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 468) == "file")) {
                        // line 469
                        yield "                      <div class=\"form-group custom-field custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 469);
                        yield "\" data-sort=\"";
                        yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 469) + 1);
                        yield "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 470
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 470);
                        yield "</label>
                        <div class=\"col-sm-10\">
                          <button type=\"button\" id=\"button-address";
                        // line 472
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 472);
                        yield "\" data-loading-text=\"";
                        yield ($context["text_loading"] ?? null);
                        yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                        yield ($context["button_upload"] ?? null);
                        yield "</button>
                          <input type=\"hidden\" name=\"address[";
                        // line 473
                        yield ($context["address_row"] ?? null);
                        yield "][custom_field][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 473);
                        yield "]\" value=\"";
                        yield (((($tmp = (($_v88 = (($_v89 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 473)) && is_array($_v89) || $_v89 instanceof ArrayAccess ? ($_v89[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 473)] ?? null) : null)) && is_array($_v88) || $_v88 instanceof ArrayAccess ? ($_v88["code"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v90 = (($_v91 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 473)) && is_array($_v91) || $_v91 instanceof ArrayAccess ? ($_v91[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 473)] ?? null) : null)) && is_array($_v90) || $_v90 instanceof ArrayAccess ? ($_v90["code"] ?? null) : null)) : (""));
                        yield "\" />
                          <span>";
                        // line 474
                        yield (($_v92 = (($_v93 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 474)) && is_array($_v93) || $_v93 instanceof ArrayAccess ? ($_v93[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 474)] ?? null) : null)) && is_array($_v92) || $_v92 instanceof ArrayAccess ? ($_v92["name"] ?? null) : null);
                        yield "</span>
                          ";
                        // line 475
                        if ((($tmp = (($_v94 = (($_v95 = (($_v96 = ($context["error_address"] ?? null)) && is_array($_v96) || $_v96 instanceof ArrayAccess ? ($_v96[($context["address_row"] ?? null)] ?? null) : null)) && is_array($_v95) || $_v95 instanceof ArrayAccess ? ($_v95["custom_field"] ?? null) : null)) && is_array($_v94) || $_v94 instanceof ArrayAccess ? ($_v94[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 475)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 476
                            yield "                          <div class=\"text-danger\">";
                            yield (($_v97 = CoreExtension::getAttribute($this->env, $this->source, (($_v98 = ($context["error_address"] ?? null)) && is_array($_v98) || $_v98 instanceof ArrayAccess ? ($_v98[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 476)) && is_array($_v97) || $_v97 instanceof ArrayAccess ? ($_v97[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 476)] ?? null) : null);
                            yield "</div>
                          ";
                        }
                        // line 477
                        yield "</div>
                      </div>
                      ";
                    }
                    // line 480
                    yield "                      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 480) == "date")) {
                        // line 481
                        yield "                      <div class=\"form-group custom-field custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 481);
                        yield "\" data-sort=\"";
                        yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 481) + 1);
                        yield "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 482
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 482);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 482);
                        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"address[";
                        // line 485
                        yield ($context["address_row"] ?? null);
                        yield "][custom_field][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 485);
                        yield "]\" value=\"";
                        yield (((($tmp = (($_v99 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 485)) && is_array($_v99) || $_v99 instanceof ArrayAccess ? ($_v99[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 485)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v100 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 485)) && is_array($_v100) || $_v100 instanceof ArrayAccess ? ($_v100[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 485)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 485)));
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 485);
                        yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-address";
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 485);
                        yield "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          ";
                        // line 489
                        if ((($tmp = (($_v101 = (($_v102 = (($_v103 = ($context["error_address"] ?? null)) && is_array($_v103) || $_v103 instanceof ArrayAccess ? ($_v103[($context["address_row"] ?? null)] ?? null) : null)) && is_array($_v102) || $_v102 instanceof ArrayAccess ? ($_v102["custom_field"] ?? null) : null)) && is_array($_v101) || $_v101 instanceof ArrayAccess ? ($_v101[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 489)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 490
                            yield "                          <div class=\"text-danger\">";
                            yield (($_v104 = CoreExtension::getAttribute($this->env, $this->source, (($_v105 = ($context["error_address"] ?? null)) && is_array($_v105) || $_v105 instanceof ArrayAccess ? ($_v105[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 490)) && is_array($_v104) || $_v104 instanceof ArrayAccess ? ($_v104[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 490)] ?? null) : null);
                            yield "</div>
                          ";
                        }
                        // line 491
                        yield "</div>
                      </div>
                      ";
                    }
                    // line 494
                    yield "                      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 494) == "time")) {
                        // line 495
                        yield "                      <div class=\"form-group custom-field custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 495);
                        yield "\" data-sort=\"";
                        yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 495) + 1);
                        yield "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 496
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 496);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 496);
                        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"address[";
                        // line 499
                        yield ($context["address_row"] ?? null);
                        yield "][custom_field][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 499);
                        yield "]\" value=\"";
                        yield (((($tmp = (($_v106 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 499)) && is_array($_v106) || $_v106 instanceof ArrayAccess ? ($_v106[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 499)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v107 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 499)) && is_array($_v107) || $_v107 instanceof ArrayAccess ? ($_v107[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 499)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 499)));
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 499);
                        yield "\" data-date-format=\"HH:mm\" id=\"input-address";
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 499);
                        yield "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          ";
                        // line 503
                        if ((($tmp = (($_v108 = (($_v109 = (($_v110 = ($context["error_address"] ?? null)) && is_array($_v110) || $_v110 instanceof ArrayAccess ? ($_v110[($context["address_row"] ?? null)] ?? null) : null)) && is_array($_v109) || $_v109 instanceof ArrayAccess ? ($_v109["custom_field"] ?? null) : null)) && is_array($_v108) || $_v108 instanceof ArrayAccess ? ($_v108[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 503)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 504
                            yield "                          <div class=\"text-danger\">";
                            yield (($_v111 = CoreExtension::getAttribute($this->env, $this->source, (($_v112 = ($context["error_address"] ?? null)) && is_array($_v112) || $_v112 instanceof ArrayAccess ? ($_v112[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 504)) && is_array($_v111) || $_v111 instanceof ArrayAccess ? ($_v111[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 504)] ?? null) : null);
                            yield "</div>
                          ";
                        }
                        // line 505
                        yield "</div>
                      </div>
                      ";
                    }
                    // line 508
                    yield "                      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 508) == "datetime")) {
                        // line 509
                        yield "                      <div class=\"form-group custom-field custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 509);
                        yield "\" data-sort=\"";
                        yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 509) + 1);
                        yield "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 510
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 510);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 510);
                        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"address[";
                        // line 513
                        yield ($context["address_row"] ?? null);
                        yield "][custom_field][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513);
                        yield "]\" value=\"";
                        yield (((($tmp = (($_v113 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 513)) && is_array($_v113) || $_v113 instanceof ArrayAccess ? ($_v113[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v114 = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 513)) && is_array($_v114) || $_v114 instanceof ArrayAccess ? ($_v114[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 513)));
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 513);
                        yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address";
                        yield ($context["address_row"] ?? null);
                        yield "-custom-field";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513);
                        yield "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span> </div>
                          ";
                        // line 517
                        if ((($tmp = (($_v115 = (($_v116 = (($_v117 = ($context["error_address"] ?? null)) && is_array($_v117) || $_v117 instanceof ArrayAccess ? ($_v117[($context["address_row"] ?? null)] ?? null) : null)) && is_array($_v116) || $_v116 instanceof ArrayAccess ? ($_v116["custom_field"] ?? null) : null)) && is_array($_v115) || $_v115 instanceof ArrayAccess ? ($_v115[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 517)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 518
                            yield "                          <div class=\"text-danger\">";
                            yield (($_v118 = CoreExtension::getAttribute($this->env, $this->source, (($_v119 = ($context["error_address"] ?? null)) && is_array($_v119) || $_v119 instanceof ArrayAccess ? ($_v119[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 518)) && is_array($_v118) || $_v118 instanceof ArrayAccess ? ($_v118[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 518)] ?? null) : null);
                            yield "</div>
                          ";
                        }
                        // line 519
                        yield "</div>
                      </div>
                      ";
                    }
                    // line 522
                    yield "                      ";
                }
                // line 523
                yield "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 524
            yield "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
            // line 525
            yield ($context["entry_default"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <label class=\"radio\">";
            // line 527
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 527) == ($context["address_id"] ?? null)) ||  !($context["addresses"] ?? null))) {
                // line 528
                yield "                            <input type=\"radio\" name=\"address[";
                yield ($context["address_row"] ?? null);
                yield "][default]\" value=\"";
                yield ($context["address_row"] ?? null);
                yield "\" checked=\"checked\" />
                            ";
            } else {
                // line 530
                yield "                            <input type=\"radio\" name=\"address[";
                yield ($context["address_row"] ?? null);
                yield "][default]\" value=\"";
                yield ($context["address_row"] ?? null);
                yield "\" />
                            ";
            }
            // line 531
            yield "</label>
                        </div>
                      </div>
                    </div>
                    ";
            // line 535
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 536
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 537
        yield "                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-affiliate\">
              <fieldset>
                <legend>";
        // line 543
        yield ($context["text_affiliate"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-company\">";
        // line 545
        yield ($context["entry_company"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"company\" value=\"";
        // line 547
        yield ($context["company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-company\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-website\">";
        // line 551
        yield ($context["entry_website"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"";
        // line 553
        yield ($context["website"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_website"] ?? null);
        yield "\" id=\"input-website\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tracking\"><span data-toggle=\"tooltip\" title=\"";
        // line 557
        yield ($context["help_tracking"] ?? null);
        yield "\">";
        yield ($context["entry_tracking"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tracking\" value=\"";
        // line 559
        yield ($context["tracking"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_tracking"] ?? null);
        yield "\" id=\"input-tracking\" class=\"form-control\" />
                    ";
        // line 560
        if ((($tmp = ($context["error_tracking"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 561
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_tracking"] ?? null);
            yield "</div>
                    ";
        }
        // line 563
        yield "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 566
        yield ($context["help_commission"] ?? null);
        yield "\">";
        yield ($context["entry_commission"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"commission\" value=\"";
        // line 568
        yield ($context["commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_commission"] ?? null);
        yield "\" id=\"input-commission\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 571
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 572
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 572) == "affiliate")) {
                // line 573
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 573) == "select")) {
                    // line 574
                    yield "                <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 574);
                    yield "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 575
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 575);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 575);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[affiliate][";
                    // line 577
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577);
                    yield "]\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577);
                    yield "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 578
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                      ";
                    // line 579
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 579));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 580
                        yield "                      ";
                        if (((($_v120 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v120) || $_v120 instanceof ArrayAccess ? ($_v120[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 580) == (($_v121 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v121) || $_v121 instanceof ArrayAccess ? ($_v121[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580)] ?? null) : null)))) {
                            // line 581
                            yield "                      <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 581);
                            yield "\" selected=\"selected\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 581);
                            yield "</option>
                      ";
                        } else {
                            // line 583
                            yield "                      <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 583);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 583);
                            yield "</option>
                      ";
                        }
                        // line 585
                        yield "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 586
                    yield "                    </select>
                    ";
                    // line 587
                    if ((($tmp = (($_v122 = ($context["error_custom_field"] ?? null)) && is_array($_v122) || $_v122 instanceof ArrayAccess ? ($_v122[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 587)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 588
                        yield "                    <div class=\"text-danger\">";
                        yield (($_v123 = ($context["error_custom_field"] ?? null)) && is_array($_v123) || $_v123 instanceof ArrayAccess ? ($_v123[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 588)] ?? null) : null);
                        yield "</div>
                    ";
                    }
                    // line 589
                    yield "</div>
                </div>
                ";
                }
                // line 592
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 592) == "radio")) {
                    // line 593
                    yield "                <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 593);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 593);
                    yield "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 594
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 594);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 596
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 596));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 597
                        yield "                      <div class=\"radio\">";
                        if (((($_v124 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v124) || $_v124 instanceof ArrayAccess ? ($_v124[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 597) == (($_v125 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v125) || $_v125 instanceof ArrayAccess ? ($_v125[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597)] ?? null) : null)))) {
                            // line 598
                            yield "                        <label>
                          <input type=\"radio\" name=\"custom_field[affiliate][";
                            // line 599
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 599);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 599);
                            yield "\" checked=\"checked\" />
                          ";
                            // line 600
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 600);
                            yield "</label>
                        ";
                        } else {
                            // line 602
                            yield "                        <label>
                          <input type=\"radio\" name=\"custom_field[affiliate][";
                            // line 603
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 603);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 603);
                            yield "\" />
                          ";
                            // line 604
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 604);
                            yield "</label>
                        ";
                        }
                        // line 605
                        yield "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 606
                    yield " </div>
                    ";
                    // line 607
                    if ((($tmp = (($_v126 = ($context["error_custom_field"] ?? null)) && is_array($_v126) || $_v126 instanceof ArrayAccess ? ($_v126[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 607)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 608
                        yield "                    <div class=\"text-danger\">";
                        yield (($_v127 = ($context["error_custom_field"] ?? null)) && is_array($_v127) || $_v127 instanceof ArrayAccess ? ($_v127[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 608)] ?? null) : null);
                        yield "</div>
                    ";
                    }
                    // line 609
                    yield "</div>
                </div>
                ";
                }
                // line 612
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 612) == "checkbox")) {
                    // line 613
                    yield "                <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 613);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 613);
                    yield "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 614
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 614);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 616
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 616));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 617
                        yield "                      <div class=\"checkbox\">";
                        if (((($_v128 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v128) || $_v128 instanceof ArrayAccess ? ($_v128[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 617), (($_v129 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v129) || $_v129 instanceof ArrayAccess ? ($_v129[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617)] ?? null) : null)))) {
                            // line 618
                            yield "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[affiliate][";
                            // line 619
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 619);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 619);
                            yield "\" checked=\"checked\" />
                          ";
                            // line 620
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 620);
                            yield "</label>
                        ";
                        } else {
                            // line 622
                            yield "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[affiliate][";
                            // line 623
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 623);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 623);
                            yield "\" />
                          ";
                            // line 624
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 624);
                            yield "</label>
                        ";
                        }
                        // line 625
                        yield "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 626
                    yield " </div>
                    ";
                    // line 627
                    if ((($tmp = (($_v130 = ($context["error_custom_field"] ?? null)) && is_array($_v130) || $_v130 instanceof ArrayAccess ? ($_v130[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 628
                        yield "                    <div class=\"text-danger\">";
                        yield (($_v131 = ($context["error_custom_field"] ?? null)) && is_array($_v131) || $_v131 instanceof ArrayAccess ? ($_v131[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 628)] ?? null) : null);
                        yield "</div>
                    ";
                    }
                    // line 629
                    yield "</div>
                </div>
                ";
                }
                // line 632
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 632) == "text")) {
                    // line 633
                    yield "                <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 633);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 633);
                    yield "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 634
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 634);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 634);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[affiliate][";
                    // line 636
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 636);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v132 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v132) || $_v132 instanceof ArrayAccess ? ($_v132[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 636)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v133 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v133) || $_v133 instanceof ArrayAccess ? ($_v133[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 636)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 636)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 636);
                    yield "\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 636);
                    yield "\" class=\"form-control\" />
                    ";
                    // line 637
                    if ((($tmp = (($_v134 = ($context["error_custom_field"] ?? null)) && is_array($_v134) || $_v134 instanceof ArrayAccess ? ($_v134[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 637)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 638
                        yield "                    <div class=\"text-danger\">";
                        yield (($_v135 = ($context["error_custom_field"] ?? null)) && is_array($_v135) || $_v135 instanceof ArrayAccess ? ($_v135[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 638)] ?? null) : null);
                        yield "</div>
                    ";
                    }
                    // line 639
                    yield "</div>
                </div>
                ";
                }
                // line 642
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 642) == "textarea")) {
                    // line 643
                    yield "                <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 643);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 643);
                    yield "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 644
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 644);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 644);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[affiliate][";
                    // line 646
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 646);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 646);
                    yield "\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 646);
                    yield "\" class=\"form-control\">";
                    yield (((($tmp = (($_v136 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v136) || $_v136 instanceof ArrayAccess ? ($_v136[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 646)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v137 = ($context["account_custom_field"] ?? null)) && is_array($_v137) || $_v137 instanceof ArrayAccess ? ($_v137[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 646)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 646)));
                    yield "</textarea>
                    ";
                    // line 647
                    if ((($tmp = (($_v138 = ($context["error_custom_field"] ?? null)) && is_array($_v138) || $_v138 instanceof ArrayAccess ? ($_v138[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 647)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 648
                        yield "                    <div class=\"text-danger\">";
                        yield (($_v139 = ($context["error_custom_field"] ?? null)) && is_array($_v139) || $_v139 instanceof ArrayAccess ? ($_v139[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 648)] ?? null) : null);
                        yield "</div>
                    ";
                    }
                    // line 649
                    yield "</div>
                </div>
                ";
                }
                // line 652
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 652) == "file")) {
                    // line 653
                    yield "                <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 653);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 653);
                    yield "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 654
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 654);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                    // line 656
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 656);
                    yield "\" data-loading-text=\"";
                    yield ($context["text_loading"] ?? null);
                    yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                    <input type=\"hidden\" name=\"custom_field[affiliate][";
                    // line 657
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 657);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v140 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v140) || $_v140 instanceof ArrayAccess ? ($_v140[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 657)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v141 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v141) || $_v141 instanceof ArrayAccess ? ($_v141[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 657)] ?? null) : null)) : (""));
                    yield "\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 657);
                    yield "\" />
                    ";
                    // line 658
                    if ((($tmp = (($_v142 = ($context["error_custom_field"] ?? null)) && is_array($_v142) || $_v142 instanceof ArrayAccess ? ($_v142[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 658)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 659
                        yield "                    <div class=\"text-danger\">";
                        yield (($_v143 = ($context["error_custom_field"] ?? null)) && is_array($_v143) || $_v143 instanceof ArrayAccess ? ($_v143[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 659)] ?? null) : null);
                        yield "</div>
                    ";
                    }
                    // line 660
                    yield "</div>
                </div>
                ";
                }
                // line 663
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 663) == "date")) {
                    // line 664
                    yield "                <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 664);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 664);
                    yield "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 665
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 665);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 665);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[affiliate][";
                    // line 668
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 668);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v144 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v144) || $_v144 instanceof ArrayAccess ? ($_v144[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 668)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v145 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v145) || $_v145 instanceof ArrayAccess ? ($_v145[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 668)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 668)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 668);
                    yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 668);
                    yield "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 672
                    if ((($tmp = (($_v146 = ($context["error_custom_field"] ?? null)) && is_array($_v146) || $_v146 instanceof ArrayAccess ? ($_v146[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 672)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 673
                        yield "                    <div class=\"text-danger\">";
                        yield (($_v147 = ($context["error_custom_field"] ?? null)) && is_array($_v147) || $_v147 instanceof ArrayAccess ? ($_v147[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 673)] ?? null) : null);
                        yield "</div>
                    ";
                    }
                    // line 674
                    yield "</div>
                </div>
                ";
                }
                // line 677
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 677) == "time")) {
                    // line 678
                    yield "                <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 678);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 678);
                    yield "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 679
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 679);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 679);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[affiliate][";
                    // line 682
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 682);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v148 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v148) || $_v148 instanceof ArrayAccess ? ($_v148[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 682)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v149 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v149) || $_v149 instanceof ArrayAccess ? ($_v149[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 682)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 682)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 682);
                    yield "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 682);
                    yield "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 686
                    if ((($tmp = (($_v150 = ($context["error_custom_field"] ?? null)) && is_array($_v150) || $_v150 instanceof ArrayAccess ? ($_v150[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 686)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 687
                        yield "                    <div class=\"text-danger\">";
                        yield (($_v151 = ($context["error_custom_field"] ?? null)) && is_array($_v151) || $_v151 instanceof ArrayAccess ? ($_v151[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 687)] ?? null) : null);
                        yield "</div>
                    ";
                    }
                    // line 688
                    yield "</div>
                </div>
                ";
                }
                // line 691
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 691) == "datetime")) {
                    // line 692
                    yield "                <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 692);
                    yield "\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 692);
                    yield "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 693
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 693);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 693);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[affiliate][";
                    // line 696
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 696);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v152 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v152) || $_v152 instanceof ArrayAccess ? ($_v152[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 696)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v153 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v153) || $_v153 instanceof ArrayAccess ? ($_v153[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 696)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 696)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 696);
                    yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 696);
                    yield "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 700
                    if ((($tmp = (($_v154 = ($context["error_custom_field"] ?? null)) && is_array($_v154) || $_v154 instanceof ArrayAccess ? ($_v154[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 700)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 701
                        yield "                    <div class=\"text-danger\">";
                        yield (($_v155 = ($context["error_custom_field"] ?? null)) && is_array($_v155) || $_v155 instanceof ArrayAccess ? ($_v155[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 701)] ?? null) : null);
                        yield "</div>
                    ";
                    }
                    // line 702
                    yield "</div>
                </div>
                ";
                }
                // line 705
                yield "                ";
            }
            // line 706
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 707
        yield "              </fieldset>
              <fieldset>
                <legend>";
        // line 709
        yield ($context["text_payment"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax\">";
        // line 711
        yield ($context["entry_tax"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tax\" value=\"";
        // line 713
        yield ($context["tax"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_tax"] ?? null);
        yield "\" id=\"input-tax\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 717
        yield ($context["entry_payment"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"radio\">
                      <label>";
        // line 720
        if ((($context["payment"] ?? null) == "cheque")) {
            // line 721
            yield "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" checked=\"checked\" />
                        ";
        } else {
            // line 723
            yield "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" />
                        ";
        }
        // line 725
        yield "                        ";
        yield ($context["text_cheque"] ?? null);
        yield "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 728
        if ((($context["payment"] ?? null) == "paypal")) {
            // line 729
            yield "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" checked=\"checked\" />
                        ";
        } else {
            // line 731
            yield "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" />
                        ";
        }
        // line 733
        yield "                        ";
        yield ($context["text_paypal"] ?? null);
        yield "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 736
        if ((($context["payment"] ?? null) == "bank")) {
            // line 737
            yield "                        <input type=\"radio\" name=\"payment\" value=\"bank\" checked=\"checked\" />
                        ";
        } else {
            // line 739
            yield "                        <input type=\"radio\" name=\"payment\" value=\"bank\" />
                        ";
        }
        // line 741
        yield "                        ";
        yield ($context["text_bank"] ?? null);
        yield "</label>
                    </div>
                  </div>
                </div>
                <div id=\"payment-cheque\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-cheque\">";
        // line 747
        yield ($context["entry_cheque"] ?? null);
        yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"cheque\" value=\"";
        // line 749
        yield ($context["cheque"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_cheque"] ?? null);
        yield "\" id=\"input-cheque\" class=\"form-control\" />
                      ";
        // line 750
        if ((($tmp = ($context["error_cheque"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 751
            yield "                      <div class=\"text-danger\">";
            yield ($context["error_cheque"] ?? null);
            yield "</div>
                      ";
        }
        // line 752
        yield "</div>
                  </div>
                </div>
                <div id=\"payment-paypal\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-paypal\">";
        // line 757
        yield ($context["entry_paypal"] ?? null);
        yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"paypal\" value=\"";
        // line 759
        yield ($context["paypal"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_paypal"] ?? null);
        yield "\" id=\"input-paypal\" class=\"form-control\" />
                      ";
        // line 760
        if ((($tmp = ($context["error_paypal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 761
            yield "                      <div class=\"text-danger\">";
            yield ($context["error_paypal"] ?? null);
            yield "</div>
                      ";
        }
        // line 762
        yield "</div>
                  </div>
                </div>
                <div id=\"payment-bank\" class=\"payment\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-name\">";
        // line 767
        yield ($context["entry_bank_name"] ?? null);
        yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_name\" value=\"";
        // line 769
        yield ($context["bank_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_bank_name"] ?? null);
        yield "\" id=\"input-bank-name\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-branch-number\">";
        // line 773
        yield ($context["entry_bank_branch_number"] ?? null);
        yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 775
        yield ($context["bank_branch_number"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_bank_branch_number"] ?? null);
        yield "\" id=\"input-bank-branch-number\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-swift-code\">";
        // line 779
        yield ($context["entry_bank_swift_code"] ?? null);
        yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 781
        yield ($context["bank_swift_code"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_bank_swift_code"] ?? null);
        yield "\" id=\"input-bank-swift-code\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-name\">";
        // line 785
        yield ($context["entry_bank_account_name"] ?? null);
        yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 787
        yield ($context["bank_account_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_bank_account_name"] ?? null);
        yield "\" id=\"input-bank-account-name\" class=\"form-control\" />
                      ";
        // line 788
        if ((($tmp = ($context["error_bank_account_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 789
            yield "                      <div class=\"text-danger\">";
            yield ($context["error_bank_account_name"] ?? null);
            yield "</div>
                      ";
        }
        // line 790
        yield "</div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-number\">";
        // line 793
        yield ($context["entry_bank_account_number"] ?? null);
        yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 795
        yield ($context["bank_account_number"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_bank_account_number"] ?? null);
        yield "\" id=\"input-bank-account-number\" class=\"form-control\" />
                      ";
        // line 796
        if ((($tmp = ($context["error_bank_account_number"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 797
            yield "                      <div class=\"text-danger\">";
            yield ($context["error_bank_account_number"] ?? null);
            yield "</div>
                      ";
        }
        // line 798
        yield "</div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\">";
        // line 802
        yield ($context["entry_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"affiliate\" id=\"input-affiliate\" class=\"form-control\">
                      ";
        // line 805
        if ((($tmp = ($context["affiliate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 806
            yield "                      <option value=\"1\" selected=\"selected\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                      <option value=\"0\">";
            // line 807
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                      ";
        } else {
            // line 809
            yield "                      <option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 810
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                      ";
        }
        // line 812
        yield "                     </select>
                  </div>
                </div>
              </fieldset>           
            </div>         
            ";
        // line 817
        if ((($tmp = ($context["customer_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 818
            yield "            <div class=\"tab-pane\" id=\"tab-history\">
              <fieldset>
                <legend>";
            // line 820
            yield ($context["text_history"] ?? null);
            yield "</legend>
                <div id=\"history\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 825
            yield ($context["text_history_add"] ?? null);
            yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
            // line 827
            yield ($context["entry_comment"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
            // line 829
            yield ($context["entry_comment"] ?? null);
            yield "\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button id=\"button-history\" data-loading-text=\"";
            // line 834
            yield ($context["text_loading"] ?? null);
            yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            yield ($context["button_history_add"] ?? null);
            yield "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-transaction\">
              <fieldset>
                <legend>";
            // line 839
            yield ($context["text_transaction"] ?? null);
            yield "</legend>
                <div id=\"transaction\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 844
            yield ($context["text_transaction_add"] ?? null);
            yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-transaction-description\">";
            // line 846
            yield ($context["entry_description"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 848
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-transaction-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
            // line 852
            yield ($context["entry_amount"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
            // line 854
            yield ($context["entry_amount"] ?? null);
            yield "\" id=\"input-amount\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-transaction\" data-loading-text=\"";
            // line 859
            yield ($context["text_loading"] ?? null);
            yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            yield ($context["button_transaction_add"] ?? null);
            yield "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <fieldset>
                <legend>";
            // line 864
            yield ($context["text_reward"] ?? null);
            yield "</legend>
                <div id=\"reward\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 869
            yield ($context["text_reward_add"] ?? null);
            yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-reward-description\">";
            // line 871
            yield ($context["entry_description"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 873
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-reward-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
            // line 877
            yield ($context["help_points"] ?? null);
            yield "\">";
            yield ($context["entry_points"] ?? null);
            yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
            // line 879
            yield ($context["entry_points"] ?? null);
            yield "\" id=\"input-points\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-reward\" data-loading-text=\"";
            // line 884
            yield ($context["text_loading"] ?? null);
            yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            yield ($context["button_reward_add"] ?? null);
            yield "</button>
              </div>
            </div>
            ";
        }
        // line 888
        yield "            <div class=\"tab-pane\" id=\"tab-ip\">
              <fieldset>
                <legend>";
        // line 890
        yield ($context["text_ip"] ?? null);
        yield "</legend>
                <div id=\"ip\"></div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type=\"text/javascript\"><!--
  \$('input[name=\"affiliate\"]').on('change', function() {
    if (\$(this).val() == '1') { 
      \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', false);
    } else {
      \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', true);
    }
  }); 

  \$('input[name=\\'affiliate\\']:checked').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('select[name=\\'customer_group_id\\']').on('change', function() {
    \$.ajax({
      url: 'index.php?route=customer/customer/customfield&user_token=";
        // line 914
        yield ($context["user_token"] ?? null);
        yield "&customer_group_id=' + this.value,
      dataType: 'json',
      success: function(json) {
        \$('.custom-field').hide();
        \$('.custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          \$('.custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            \$('.custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('select[name=\\'customer_group_id\\']').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  var address_row = ";
        // line 939
        yield ($context["address_row"] ?? null);
        yield ";

  function addAddress() {
    html  = '<div class=\"tab-pane\" id=\"tab-address' + address_row + '\">';
    html += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-firstname' + address_row + '\">";
        // line 946
        yield ($context["entry_firstname"] ?? null);
        yield "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 947
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-lastname' + address_row + '\">";
        // line 951
        yield ($context["entry_lastname"] ?? null);
        yield "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 952
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-company' + address_row + '\">";
        // line 956
        yield ($context["entry_company"] ?? null);
        yield "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 957
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-company' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-1' + address_row + '\">";
        // line 961
        yield ($context["entry_address_1"] ?? null);
        yield "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 962
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-address-1' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-2' + address_row + '\">";
        // line 966
        yield ($context["entry_address_2"] ?? null);
        yield "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 967
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-address-2' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-city' + address_row + '\">";
        // line 971
        yield ($context["entry_city"] ?? null);
        yield "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 972
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-city' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-postcode' + address_row + '\">";
        // line 976
        yield ($context["entry_postcode"] ?? null);
        yield "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 977
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-postcode' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-country' + address_row + '\">";
        // line 981
        yield ($context["entry_country"] ?? null);
        yield "</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][country_id]\" id=\"input-country' + address_row + '\" onchange=\"country(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\">';
      html += '         <option value=\"\">";
        // line 983
        yield ($context["text_select"] ?? null);
        yield "</option>';
      ";
        // line 984
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 985
            yield "      html += '         <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 985);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 985), "js");
            yield "</option>';
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 987
        yield "      html += '      </select></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-zone' + address_row + '\">";
        // line 991
        yield ($context["entry_zone"] ?? null);
        yield "</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][zone_id]\" id=\"input-zone' + address_row + '\" class=\"form-control\"><option value=\"\">";
        // line 992
        yield ($context["text_none"] ?? null);
        yield "</option></select></div>';
    html += '  </div>';

    // Custom Fields
    ";
        // line 996
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 997
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 997) == "address")) {
                // line 998
                yield "    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 998) == "select")) {
                    // line 999
                    yield "
    html += '  <div class=\"form-group custom-field custom-field";
                    // line 1000
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1000);
                    yield "\" data-sort=\"";
                    yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1000) + 1);
                    yield "\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1001
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1001);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1001), "js");
                    yield "</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <select name=\"address[' + address_row + '][custom_field][";
                    // line 1003
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1003);
                    yield "]\" id=\"input-address' + address_row + '-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1003);
                    yield "\" class=\"form-control\">';
    html += '  \t\t\t<option value=\"\">";
                    // line 1004
                    yield ($context["text_select"] ?? null);
                    yield "</option>';

    ";
                    // line 1006
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1006));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1007
                        yield "    html += '  \t\t\t<option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1007);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1007), "js");
                        yield "</option>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1009
                    yield "
    html += '  \t\t  </select>';
    html += '  \t\t</div>';
    html += '  \t  </div>';
    ";
                }
                // line 1014
                yield "
    ";
                // line 1015
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1015) == "radio")) {
                    // line 1016
                    yield "    html += '  \t  <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1016);
                    yield "\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\">";
                    // line 1017
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1017), "js");
                    yield "</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <div>';

    ";
                    // line 1021
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1021));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1022
                        yield "    html += '  \t\t\t<div class=\"radio\"><label><input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1022);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1022);
                        yield "\" /> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1022), "js");
                        yield "</label></div>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1024
                    yield "
    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1029
                yield "
    ";
                // line 1030
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1030) == "checkbox")) {
                    // line 1031
                    yield "    html += '\t  <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1031);
                    yield "\" data-sort=\"";
                    yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1031) + 1);
                    yield "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 1032
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1032), "js");
                    yield "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div>';

    ";
                    // line 1036
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1036));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1037
                        yield "    html += '\t\t\t<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"address[";
                        yield ($context["address_row"] ?? null);
                        yield "][custom_field][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1037);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1037);
                        yield "\" /> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1037), "js");
                        yield "</label></div>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1039
                    yield "
    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1044
                yield "
    ";
                // line 1045
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1045) == "text")) {
                    // line 1046
                    yield "    html += '\t  <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1046);
                    yield "\" data-sort=\"";
                    yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1046) + 1);
                    yield "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1047
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1047);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1047), "js");
                    yield "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1049
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1049);
                    yield "]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1049), "js");
                    yield "\" placeholder=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1049), "js");
                    yield "\" id=\"input-address' + address_row + '-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1049);
                    yield "\" class=\"form-control\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1053
                yield "
    ";
                // line 1054
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1054) == "textarea")) {
                    // line 1055
                    yield "    html += '\t  <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1055);
                    yield "\" data-sort=\"";
                    yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1055) + 1);
                    yield "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1056
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1056);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1056), "js");
                    yield "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 1058
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1058);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1058), "js");
                    yield "\" id=\"input-address' + address_row + '-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1058);
                    yield "\" class=\"form-control\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1058), "js");
                    yield "</textarea>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1062
                yield "
    ";
                // line 1063
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1063) == "file")) {
                    // line 1064
                    yield "    html += '\t  <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1064);
                    yield "\" data-sort=\"";
                    yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1064) + 1);
                    yield "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 1065
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1065), "js");
                    yield "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <button type=\"button\" id=\"button-address' + address_row + '-custom-field";
                    // line 1067
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1067);
                    yield "\" data-loading-text=\"";
                    yield ($context["text_loading"] ?? null);
                    yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>';
    html += '\t\t  <input type=\"hidden\" name=\"address[' + address_row + '][";
                    // line 1068
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1068);
                    yield "]\" value=\"\" id=\"input-address' + address_row + '-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1068);
                    yield "\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1072
                yield "
    ";
                // line 1073
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1073) == "date")) {
                    // line 1074
                    yield "    html += '\t  <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1074);
                    yield "\" data-sort=\"";
                    yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1074) + 1);
                    yield "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1075
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1075);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1075), "js");
                    yield "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group date\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1077
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1077);
                    yield "]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1077), "js");
                    yield "\" placeholder=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1077), "js");
                    yield " data-date-format=\"YYYY-MM-DD\" id=\"input-address' + address_row + '-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1077);
                    yield "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1081
                yield "
    ";
                // line 1082
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1082) == "time")) {
                    // line 1083
                    yield "    html += '\t  <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1083);
                    yield "\" data-sort=\"";
                    yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1083) + 1);
                    yield "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1084
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1084);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1084), "js");
                    yield "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group time\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1086
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1086);
                    yield "]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1086), "js");
                    yield "\" placeholder=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1086), "js");
                    yield "\" data-date-format=\"HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1086);
                    yield "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1090
                yield "
    ";
                // line 1091
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1091) == "datetime")) {
                    // line 1092
                    yield "    html += '\t  <div class=\"form-group custom-field custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1092);
                    yield "\" data-sort=\"";
                    yield (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1092) + 1);
                    yield "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1093
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1093);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1093), "js");
                    yield "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group datetime\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1095
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1095);
                    yield "]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1095), "js");
                    yield "\" placeholder=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1095), "js");
                    yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1095);
                    yield "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1099
                yield "
    ";
            }
            // line 1101
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1102
        yield "
    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\">";
        // line 1104
        yield ($context["entry_default"] ?? null);
        yield "</label>';
    html += '    <div class=\"col-sm-10\"><label class=\"radio\"><input type=\"radio\" name=\"address[' + address_row + '][default]\" value=\"1\" /></label></div>';
    html += '  </div>';

    html += '</div>';

    \$('#tab-general .tab-content').append(html);

    \$('select[name=\\'customer_group_id\\']').trigger('change');

    \$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

    \$('#address-add').before('<li><a href=\"#tab-address' + address_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'#address a:first\\').tab(\\'show\\'); \$(\\'a[href=\\\\\\'#tab-address' + address_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-address' + address_row + '\\').remove();\"></i> ";
        // line 1116
        yield ($context["tab_address"] ?? null);
        yield " ' + address_row + '</a></li>');

    \$('#address a[href=\\'#tab-address' + address_row + '\\']').tab('show');

    \$('.date').datetimepicker({
\t\tlanguage: '";
        // line 1121
        yield ($context["datepicker"] ?? null);
        yield "',
\t\tpickTime: false
    });

\t\$('.datetime').datetimepicker({
\t\tlanguage: '";
        // line 1126
        yield ($context["datepicker"] ?? null);
        yield "',
\t\tpickDate: true,
\t\tpickTime: true
    });

    \$('.time').datetimepicker({
\t\tlanguage: '";
        // line 1132
        yield ($context["datepicker"] ?? null);
        yield "',
\t\tpickDate: false
    });

    \$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:last').after(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:first').before(this);
\t\t}
    });

    address_row++;
  }
  //--></script> 
  <script type=\"text/javascript\"><!--
  function country(element, index, zone_id) {
    \$.ajax({
      url: 'index.php?route=localisation/country/country&user_token=";
        // line 1156
        yield ($context["user_token"] ?? null);
        yield "&country_id=' + element.value,
      dataType: 'json',
      beforeSend: function() {
        \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', true);
      },
      complete: function() {
        \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', false);
      },
      success: function(json) {
        if (json['postcode_required'] == '1') {
          \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().addClass('required');
        } else {
          \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().removeClass('required');
        }

        html = '<option value=\"\">";
        // line 1171
        yield ($context["text_select"] ?? null);
        yield "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == zone_id) {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\">";
        // line 1184
        yield ($context["text_none"] ?? null);
        yield "</option>';
        }

        \$('select[name=\\'address[' + index + '][zone_id]\\']').html(html);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  }

  \$('select[name\$=\\'[country_id]\\']').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#history').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 1204
        yield ($context["user_token"] ?? null);
        yield "&customer_id=";
        yield ($context["customer_id"] ?? null);
        yield "');

  \$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addhistory&user_token=";
        // line 1210
        yield ($context["user_token"] ?? null);
        yield "&customer_id=";
        yield ($context["customer_id"] ?? null);
        yield "',
      type: 'post',
      dataType: 'json',
      data: 'comment=' + encodeURIComponent(\$('#tab-history textarea[name=\\'comment\\']').val()),
      beforeSend: function() {
        \$('#button-history').button('loading');
      },
      complete: function() {
        \$('#button-history').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 1230
        yield ($context["user_token"] ?? null);
        yield "&customer_id=";
        yield ($context["customer_id"] ?? null);
        yield "');

          \$('#tab-history textarea[name=\\'comment\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#transaction').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
  });

  \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1248
        yield ($context["user_token"] ?? null);
        yield "&customer_id=";
        yield ($context["customer_id"] ?? null);
        yield "');

  \$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addtransaction&user_token=";
        // line 1254
        yield ($context["user_token"] ?? null);
        yield "&customer_id=";
        yield ($context["customer_id"] ?? null);
        yield "',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-transaction input[name=\\'description\\']').val()) + '&amount=' + encodeURIComponent(\$('#tab-transaction input[name=\\'amount\\']').val()),
      beforeSend: function() {
        \$('#button-transaction').button('loading');
      },
      complete: function() {
        \$('#button-transaction').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-transaction').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-transaction').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1274
        yield ($context["user_token"] ?? null);
        yield "&customer_id=";
        yield ($context["customer_id"] ?? null);
        yield "');

          \$('#tab-transaction input[name=\\'amount\\']').val('');
          \$('#tab-transaction input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#reward').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
  });

  \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1293
        yield ($context["user_token"] ?? null);
        yield "&customer_id=";
        yield ($context["customer_id"] ?? null);
        yield "');

  \$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addreward&user_token=";
        // line 1299
        yield ($context["user_token"] ?? null);
        yield "&customer_id=";
        yield ($context["customer_id"] ?? null);
        yield "',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-reward input[name=\\'description\\']').val()) + '&points=' + encodeURIComponent(\$('#tab-reward input[name=\\'points\\']').val()),
      beforeSend: function() {
        \$('#button-reward').button('loading');
      },
      complete: function() {
        \$('#button-reward').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-reward').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-reward').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1319
        yield ($context["user_token"] ?? null);
        yield "&customer_id=";
        yield ($context["customer_id"] ?? null);
        yield "');

          \$('#tab-reward input[name=\\'points\\']').val('');
          \$('#tab-reward input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#ip').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
  });

  \$('#ip').load('index.php?route=customer/customer/ip&user_token=";
        // line 1337
        yield ($context["user_token"] ?? null);
        yield "&customer_id=";
        yield ($context["customer_id"] ?? null);
        yield "');

  \$('#content').delegate('button[id^=\\'button-custom-field\\'], button[id^=\\'button-address\\']', 'click', function() {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload/upload&user_token=";
        // line 1357
        yield ($context["user_token"] ?? null);
        yield "',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$(node).button('loading');
          },
          complete: function() {
            \$(node).button('reset');
          },
          success: function(json) {
            \$(node).parent().find('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input[type=\\'hidden\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);
            }

            if (json['code']) {
              \$(node).parent().find('input[type=\\'hidden\\']').val(json['code']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

  \$('.date').datetimepicker({
    language: '";
        // line 1394
        yield ($context["datepicker"] ?? null);
        yield "',
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 1399
        yield ($context["datepicker"] ?? null);
        yield "',
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: '";
        // line 1405
        yield ($context["datepicker"] ?? null);
        yield "',
    pickDate: false
  });

  // Sort the custom fields
  ";
        // line 1410
        $context["address_row"] = 1;
        // line 1411
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 1412
            yield "  \$('#tab-address";
            yield ($context["address_row"] ?? null);
            yield " .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address";
            // line 1413
            yield ($context["address_row"] ?? null);
            yield " .form-group').length) {
      \$('#tab-address";
            // line 1414
            yield ($context["address_row"] ?? null);
            yield " .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-address";
            // line 1417
            yield ($context["address_row"] ?? null);
            yield " .form-group').length) {
      \$('#tab-address";
            // line 1418
            yield ($context["address_row"] ?? null);
            yield " .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-address";
            // line 1421
            yield ($context["address_row"] ?? null);
            yield " .form-group').length) {
      \$('#tab-address";
            // line 1422
            yield ($context["address_row"] ?? null);
            yield " .form-group:first').before(this);
    }
  });
  ";
            // line 1425
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 1426
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1427
        yield "
  \$('#tab-customer .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:first').before(this);
    }
  });

  \$('#tab-affiliate .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group:first').before(this);
    }
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'payment\\']').on('change', function() {
    \$('.payment').hide();

    \$('#payment-' + this.value).show();
  });

  \$('input[name=\\'payment\\']:checked').trigger('change');
  //--></script> 
</div>
";
        // line 1466
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
        return "customer/customer_form.twig";
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
        return array (  3869 => 1466,  3828 => 1427,  3822 => 1426,  3820 => 1425,  3814 => 1422,  3810 => 1421,  3804 => 1418,  3800 => 1417,  3794 => 1414,  3790 => 1413,  3785 => 1412,  3780 => 1411,  3778 => 1410,  3770 => 1405,  3761 => 1399,  3753 => 1394,  3713 => 1357,  3688 => 1337,  3665 => 1319,  3640 => 1299,  3629 => 1293,  3605 => 1274,  3580 => 1254,  3569 => 1248,  3546 => 1230,  3521 => 1210,  3510 => 1204,  3487 => 1184,  3471 => 1171,  3453 => 1156,  3426 => 1132,  3417 => 1126,  3409 => 1121,  3401 => 1116,  3386 => 1104,  3382 => 1102,  3376 => 1101,  3372 => 1099,  3359 => 1095,  3352 => 1093,  3345 => 1092,  3343 => 1091,  3340 => 1090,  3327 => 1086,  3320 => 1084,  3313 => 1083,  3311 => 1082,  3308 => 1081,  3295 => 1077,  3288 => 1075,  3281 => 1074,  3279 => 1073,  3276 => 1072,  3267 => 1068,  3259 => 1067,  3254 => 1065,  3247 => 1064,  3245 => 1063,  3242 => 1062,  3229 => 1058,  3222 => 1056,  3215 => 1055,  3213 => 1054,  3210 => 1053,  3197 => 1049,  3190 => 1047,  3183 => 1046,  3181 => 1045,  3178 => 1044,  3171 => 1039,  3156 => 1037,  3152 => 1036,  3145 => 1032,  3138 => 1031,  3136 => 1030,  3133 => 1029,  3126 => 1024,  3113 => 1022,  3109 => 1021,  3102 => 1017,  3097 => 1016,  3095 => 1015,  3092 => 1014,  3085 => 1009,  3074 => 1007,  3070 => 1006,  3065 => 1004,  3059 => 1003,  3052 => 1001,  3046 => 1000,  3043 => 999,  3040 => 998,  3037 => 997,  3033 => 996,  3026 => 992,  3022 => 991,  3016 => 987,  3005 => 985,  3001 => 984,  2997 => 983,  2992 => 981,  2985 => 977,  2981 => 976,  2974 => 972,  2970 => 971,  2963 => 967,  2959 => 966,  2952 => 962,  2948 => 961,  2941 => 957,  2937 => 956,  2930 => 952,  2926 => 951,  2919 => 947,  2915 => 946,  2905 => 939,  2877 => 914,  2850 => 890,  2846 => 888,  2837 => 884,  2829 => 879,  2822 => 877,  2815 => 873,  2810 => 871,  2805 => 869,  2797 => 864,  2787 => 859,  2779 => 854,  2774 => 852,  2767 => 848,  2762 => 846,  2757 => 844,  2749 => 839,  2739 => 834,  2731 => 829,  2726 => 827,  2721 => 825,  2713 => 820,  2709 => 818,  2707 => 817,  2700 => 812,  2695 => 810,  2690 => 809,  2685 => 807,  2680 => 806,  2678 => 805,  2672 => 802,  2666 => 798,  2660 => 797,  2658 => 796,  2652 => 795,  2647 => 793,  2642 => 790,  2636 => 789,  2634 => 788,  2628 => 787,  2623 => 785,  2614 => 781,  2609 => 779,  2600 => 775,  2595 => 773,  2586 => 769,  2581 => 767,  2574 => 762,  2568 => 761,  2566 => 760,  2560 => 759,  2555 => 757,  2548 => 752,  2542 => 751,  2540 => 750,  2534 => 749,  2529 => 747,  2519 => 741,  2515 => 739,  2511 => 737,  2509 => 736,  2502 => 733,  2498 => 731,  2494 => 729,  2492 => 728,  2485 => 725,  2481 => 723,  2477 => 721,  2475 => 720,  2469 => 717,  2460 => 713,  2455 => 711,  2450 => 709,  2446 => 707,  2440 => 706,  2437 => 705,  2432 => 702,  2426 => 701,  2424 => 700,  2411 => 696,  2403 => 693,  2396 => 692,  2393 => 691,  2388 => 688,  2382 => 687,  2380 => 686,  2367 => 682,  2359 => 679,  2352 => 678,  2349 => 677,  2344 => 674,  2338 => 673,  2336 => 672,  2323 => 668,  2315 => 665,  2308 => 664,  2305 => 663,  2300 => 660,  2294 => 659,  2292 => 658,  2284 => 657,  2276 => 656,  2271 => 654,  2264 => 653,  2261 => 652,  2256 => 649,  2250 => 648,  2248 => 647,  2238 => 646,  2231 => 644,  2224 => 643,  2221 => 642,  2216 => 639,  2210 => 638,  2208 => 637,  2198 => 636,  2191 => 634,  2184 => 633,  2181 => 632,  2176 => 629,  2170 => 628,  2168 => 627,  2165 => 626,  2158 => 625,  2153 => 624,  2147 => 623,  2144 => 622,  2139 => 620,  2133 => 619,  2130 => 618,  2127 => 617,  2123 => 616,  2118 => 614,  2111 => 613,  2108 => 612,  2103 => 609,  2097 => 608,  2095 => 607,  2092 => 606,  2085 => 605,  2080 => 604,  2074 => 603,  2071 => 602,  2066 => 600,  2060 => 599,  2057 => 598,  2054 => 597,  2050 => 596,  2045 => 594,  2038 => 593,  2035 => 592,  2030 => 589,  2024 => 588,  2022 => 587,  2019 => 586,  2013 => 585,  2005 => 583,  1997 => 581,  1994 => 580,  1990 => 579,  1986 => 578,  1980 => 577,  1973 => 575,  1966 => 574,  1963 => 573,  1960 => 572,  1956 => 571,  1948 => 568,  1941 => 566,  1936 => 563,  1930 => 561,  1928 => 560,  1922 => 559,  1915 => 557,  1906 => 553,  1901 => 551,  1892 => 547,  1887 => 545,  1882 => 543,  1874 => 537,  1868 => 536,  1866 => 535,  1860 => 531,  1852 => 530,  1844 => 528,  1842 => 527,  1837 => 525,  1834 => 524,  1828 => 523,  1825 => 522,  1820 => 519,  1814 => 518,  1812 => 517,  1795 => 513,  1785 => 510,  1778 => 509,  1775 => 508,  1770 => 505,  1764 => 504,  1762 => 503,  1745 => 499,  1735 => 496,  1728 => 495,  1725 => 494,  1720 => 491,  1714 => 490,  1712 => 489,  1695 => 485,  1685 => 482,  1678 => 481,  1675 => 480,  1670 => 477,  1664 => 476,  1662 => 475,  1658 => 474,  1650 => 473,  1640 => 472,  1635 => 470,  1628 => 469,  1625 => 468,  1620 => 465,  1614 => 464,  1612 => 463,  1598 => 462,  1589 => 460,  1582 => 459,  1579 => 458,  1574 => 455,  1568 => 454,  1566 => 453,  1552 => 452,  1543 => 450,  1536 => 449,  1533 => 448,  1528 => 445,  1522 => 444,  1520 => 443,  1517 => 442,  1510 => 441,  1505 => 440,  1497 => 439,  1494 => 438,  1489 => 436,  1481 => 435,  1478 => 434,  1475 => 433,  1471 => 432,  1466 => 430,  1459 => 429,  1456 => 428,  1451 => 425,  1445 => 424,  1443 => 423,  1440 => 422,  1433 => 421,  1428 => 420,  1420 => 419,  1417 => 418,  1412 => 416,  1404 => 415,  1401 => 414,  1398 => 413,  1394 => 412,  1389 => 410,  1382 => 409,  1379 => 408,  1374 => 405,  1368 => 404,  1366 => 403,  1363 => 402,  1357 => 401,  1349 => 399,  1341 => 397,  1338 => 396,  1334 => 395,  1330 => 394,  1320 => 393,  1311 => 391,  1304 => 390,  1301 => 389,  1298 => 388,  1294 => 387,  1290 => 385,  1284 => 384,  1282 => 383,  1275 => 381,  1268 => 379,  1263 => 376,  1257 => 375,  1255 => 374,  1252 => 373,  1246 => 372,  1238 => 370,  1230 => 368,  1227 => 367,  1223 => 366,  1219 => 365,  1209 => 364,  1202 => 362,  1197 => 359,  1191 => 358,  1189 => 357,  1179 => 356,  1172 => 354,  1167 => 351,  1161 => 350,  1159 => 349,  1149 => 348,  1142 => 346,  1129 => 342,  1122 => 340,  1117 => 337,  1111 => 336,  1109 => 335,  1099 => 334,  1092 => 332,  1079 => 328,  1072 => 326,  1067 => 323,  1061 => 322,  1059 => 321,  1049 => 320,  1042 => 318,  1037 => 315,  1031 => 314,  1029 => 313,  1019 => 312,  1012 => 310,  1005 => 308,  1000 => 307,  995 => 306,  993 => 305,  986 => 300,  981 => 298,  976 => 297,  971 => 295,  966 => 294,  964 => 293,  956 => 290,  950 => 286,  945 => 284,  940 => 283,  935 => 281,  930 => 280,  928 => 279,  922 => 276,  916 => 272,  911 => 270,  906 => 269,  901 => 267,  896 => 266,  894 => 265,  888 => 262,  883 => 260,  877 => 256,  871 => 255,  869 => 254,  863 => 253,  858 => 251,  853 => 248,  847 => 247,  845 => 246,  839 => 245,  834 => 243,  829 => 241,  825 => 239,  819 => 238,  816 => 237,  811 => 234,  805 => 233,  803 => 232,  790 => 228,  782 => 225,  775 => 224,  772 => 223,  767 => 220,  761 => 219,  759 => 218,  746 => 214,  738 => 211,  731 => 210,  728 => 209,  723 => 206,  717 => 205,  715 => 204,  702 => 200,  694 => 197,  687 => 196,  684 => 195,  679 => 192,  673 => 191,  671 => 190,  667 => 189,  659 => 188,  651 => 187,  646 => 185,  639 => 184,  636 => 183,  631 => 180,  625 => 179,  623 => 178,  613 => 177,  606 => 175,  599 => 174,  596 => 173,  591 => 170,  585 => 169,  583 => 168,  573 => 167,  566 => 165,  559 => 164,  556 => 163,  551 => 160,  545 => 159,  543 => 158,  540 => 157,  533 => 156,  528 => 155,  522 => 154,  519 => 153,  514 => 151,  508 => 150,  505 => 149,  502 => 148,  498 => 147,  493 => 145,  486 => 144,  483 => 143,  478 => 140,  472 => 139,  470 => 138,  467 => 137,  460 => 136,  455 => 135,  449 => 134,  446 => 133,  441 => 131,  435 => 130,  432 => 129,  429 => 128,  425 => 127,  420 => 125,  413 => 124,  410 => 123,  405 => 120,  399 => 119,  397 => 118,  394 => 117,  388 => 116,  380 => 114,  372 => 112,  369 => 111,  365 => 110,  361 => 109,  355 => 108,  348 => 106,  341 => 105,  338 => 104,  335 => 103,  331 => 102,  327 => 100,  321 => 99,  319 => 98,  313 => 97,  308 => 95,  303 => 92,  297 => 91,  295 => 90,  289 => 89,  284 => 87,  279 => 84,  273 => 83,  271 => 82,  265 => 81,  260 => 79,  255 => 76,  249 => 75,  247 => 74,  241 => 73,  236 => 71,  230 => 67,  224 => 66,  216 => 64,  208 => 62,  205 => 61,  201 => 60,  195 => 57,  190 => 55,  179 => 48,  173 => 47,  171 => 46,  158 => 45,  153 => 44,  151 => 43,  147 => 42,  139 => 36,  134 => 34,  130 => 33,  126 => 32,  121 => 31,  119 => 30,  115 => 29,  111 => 28,  106 => 26,  100 => 23,  96 => 21,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "customer/customer_form.twig", "");
    }
}
