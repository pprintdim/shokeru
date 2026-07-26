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

/* setting/setting.twig */
class __TwigTemplate_b9dd963bd61fba4c26d4cf358f8c3363 extends Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
        yield "    ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        yield ($context["text_edit"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        yield ($context["tab_store"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        yield ($context["tab_local"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        yield ($context["tab_option"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        yield ($context["tab_image"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        yield ($context["tab_mail"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        yield ($context["tab_server"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">

              ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 45
            yield "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-meta-title-";
            // line 46
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            yield "\">
                    ";
            // line 47
            yield ($context["entry_meta_title"] ?? null);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 47);
            yield ")
                  </label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\"
                           name=\"config_meta_title[";
            // line 51
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            yield "]\"
                           value=\"";
            // line 52
            yield (($_v0 = ($context["config_meta_title"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52)] ?? null) : null);
            yield "\"
                           placeholder=\"";
            // line 53
            yield ($context["entry_meta_title"] ?? null);
            yield "\"
                           id=\"input-meta-title-";
            // line 54
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            yield "\"
                           class=\"form-control\" />
                    ";
            // line 59
            yield "                  </div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "
              ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 64
            yield "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-meta-description-";
            // line 65
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            yield "\">
                    ";
            // line 66
            yield ($context["entry_meta_description"] ?? null);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 66);
            yield ")
                  </label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_meta_description[";
            // line 69
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            yield "]\"
                              rows=\"5\"
                              placeholder=\"";
            // line 71
            yield ($context["entry_meta_description"] ?? null);
            yield "\"
                              id=\"input-meta-description-";
            // line 72
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            yield "\"
                              class=\"form-control\">";
            // line 73
            yield (($_v1 = ($context["config_meta_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73)] ?? null) : null);
            yield "</textarea>
                  </div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 79
        yield ($context["entry_meta_keyword"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 81
        yield ($context["entry_meta_keyword"] ?? null);
        yield "\" id=\"input-meta-keyword\" class=\"form-control\">";
        yield ($context["config_meta_keyword"] ?? null);
        yield "</textarea>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 86
        yield ($context["entry_theme"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">                    
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 90
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 90) == ($context["config_theme"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 91
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 91);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 91);
                yield "</option>                    
                    ";
            } else {
                // line 92
                yield "                    
                    <option value=\"";
                // line 93
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 93);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 93);
                yield "</option>                    
                    ";
            }
            // line 95
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 102
        yield ($context["entry_layout"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">                    
                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 106
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 106) == ($context["config_layout_id"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 107
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 107);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 107);
                yield "</option>                    
                    ";
            } else {
                // line 108
                yield "                    
                    <option value=\"";
                // line 109
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 109);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 109);
                yield "</option>                    
                    ";
            }
            // line 111
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>

              
                
              
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 122
        yield ($context["entry_name"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 124
        yield ($context["config_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 125
        if ((($tmp = ($context["error_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_name"] ?? null);
            yield "</div>
                  ";
        }
        // line 127
        yield " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 130
        yield ($context["entry_owner"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 132
        yield ($context["config_owner"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_owner"] ?? null);
        yield "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 133
        if ((($tmp = ($context["error_owner"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_owner"] ?? null);
            yield "</div>
                  ";
        }
        // line 135
        yield " </div>
              </div>

              ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 139
            yield "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-address-";
            // line 140
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140);
            yield "\">
                    ";
            // line 141
            yield ($context["entry_address"] ?? null);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 141);
            yield ")
                  </label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_address[";
            // line 144
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144);
            yield "]\" placeholder=\"";
            yield ($context["entry_address"] ?? null);
            yield "\" rows=\"5\"  id=\"input-address-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144);
            yield "\" data-lang=\"";
            yield ($context["summernote"] ?? null);
            yield "\" class=\"form-control\">";
            yield (($_v2 = ($context["config_address"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144)] ?? null) : null);
            yield "</textarea>
                  </div>
                </div>

              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "              ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 150
            yield "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-open\">
                    <span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 152
            yield ($context["help_open"] ?? null);
            yield "\">
                    ";
            // line 153
            yield ($context["entry_open"] ?? null);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 153);
            yield ")
                  </span>
                  </label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_open[";
            // line 157
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 157);
            yield "]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_open"] ?? null);
            yield "\" id=\"input-open\" class=\"form-control\">";
            yield (($_v3 = ($context["config_open"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 157)] ?? null) : null);
            yield "</textarea>
                  </div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "              ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 162
            yield "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 163
            yield ($context["help_comment"] ?? null);
            yield "\">";
            yield ($context["entry_comment"] ?? null);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 163);
            yield ")</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_comment[";
            // line 165
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165);
            yield "]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_comment"] ?? null);
            yield "\" id=\"input-comment\" class=\"form-control\">";
            yield (($_v4 = ($context["config_comment"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165)] ?? null) : null);
            yield "</textarea>
                  </div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "              ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 170
            yield "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 171
            yield ($context["help_geocode"] ?? null);
            yield "\">";
            yield ($context["entry_geocode"] ?? null);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 171);
            yield ")</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_geocode[";
            // line 173
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 173);
            yield "]\" value=\"";
            yield (($_v5 = ($context["config_geocode"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 173)] ?? null) : null);
            yield "\" placeholder=\"";
            yield ($context["entry_geocode"] ?? null);
            yield "\" id=\"input-geocode\" class=\"form-control\" />
                  </div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 178
        yield ($context["entry_email"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 180
        yield ($context["config_email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 181
        if ((($tmp = ($context["error_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 182
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_email"] ?? null);
            yield "</div>
                  ";
        }
        // line 183
        yield " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 186
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 188
        yield ($context["config_telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 189
        if ((($tmp = ($context["error_telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 190
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_telephone"] ?? null);
            yield "</div>
                  ";
        }
        // line 191
        yield " </div>
              </div>
              


              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 197
        yield ($context["entry_fax"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 199
        yield ($context["config_fax"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_fax"] ?? null);
        yield "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              ";
        // line 208
        yield "              ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["social_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 209
            yield "                <div class=\"form-group\">
                  
                  <label class=\"col-sm-2 control-label\">";
            // line 211
            yield CoreExtension::getAttribute($this->env, $this->source, $context["social"], "placeholder", [], "any", false, false, false, 211);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_";
            // line 213
            yield CoreExtension::getAttribute($this->env, $this->source, $context["social"], "name", [], "any", false, false, false, 213);
            yield "\" id=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["social"], "name", [], "any", false, false, false, 213);
            yield "\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["social"], "value", [], "any", false, false, false, 213);
            yield "\" placeholder=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["social"], "placeholder", [], "any", false, false, false, 213);
            yield "\" class=\"form-control\" />
                  </div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['social'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        yield "              
              ";
        // line 218
        if ((($tmp = ($context["locations"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 219
            yield "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 220
            yield ($context["help_location"] ?? null);
            yield "\">";
            yield ($context["entry_location"] ?? null);
            yield "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 222
                yield "                  <div class=\"checkbox\">
                    <label> ";
                // line 223
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 223), ($context["config_location"] ?? null))) {
                    // line 224
                    yield "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 224);
                    yield "\" checked=\"checked\" />
                      ";
                    // line 225
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 225);
                    yield "
                      ";
                } else {
                    // line 227
                    yield "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 227);
                    yield "\" />
                      ";
                    // line 228
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 228);
                    yield "
                      ";
                }
                // line 229
                yield " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            yield " </div>
              </div>
              ";
        }
        // line 233
        yield " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 236
        yield ($context["entry_country"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">                    
                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 240
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 240) == ($context["config_country_id"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 241
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 241);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 241);
                yield "</option>                    
                    ";
            } else {
                // line 242
                yield "                    
                    <option value=\"";
                // line 243
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 243);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 243);
                yield "</option>                    
                    ";
            }
            // line 245
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 250
        yield ($context["entry_zone"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 257
        yield ($context["entry_timezone"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 261
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 261) == ($context["config_timezone"] ?? null))) {
                // line 262
                yield "                        <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 262);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 262);
                yield "</option>
                      ";
            } else {
                // line 264
                yield "                        <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 264);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 264);
                yield "</option>
                      ";
            }
            // line 266
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['timezone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        yield "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 271
        yield ($context["entry_language"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">                    
                    ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 275
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 275) == ($context["config_language"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 276
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 276);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 276);
                yield "</option>                    
                    ";
            } else {
                // line 277
                yield "                    
                    <option value=\"";
                // line 278
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 278);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 278);
                yield "</option>                    
                    ";
            }
            // line 280
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 285
        yield ($context["entry_admin_language"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">                    
                    ";
        // line 288
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 289
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 289) == ($context["config_admin_language"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 290
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 290);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 290);
                yield "</option>                    
                    ";
            } else {
                // line 291
                yield "                    
                    <option value=\"";
                // line 292
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 292);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 292);
                yield "</option>                    
                    ";
            }
            // line 294
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 299
        yield ($context["help_currency"] ?? null);
        yield "\">";
        yield ($context["entry_currency"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">                    
                    ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 303
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 303) == ($context["config_currency"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 304
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 304);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 304);
                yield "</option>                    
                    ";
            } else {
                // line 305
                yield "                    
                    <option value=\"";
                // line 306
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 306);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 306);
                yield "</option>                    
                    ";
            }
            // line 308
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency-engine\">";
        // line 313
        yield ($context["entry_currency_engine"] ?? null);
        yield "</label>              
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 316
        if ((($tmp =  !($context["config_currency_engine"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 317
            yield "                    <option value=\"\" selected>";
            yield ($context["text_none"] ?? null);
            yield "</option>
                    ";
        } else {
            // line 319
            yield "                    <option value=\"\">";
            yield ($context["text_none"] ?? null);
            yield "</option>
                    ";
        }
        // line 321
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 322
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 322) == ($context["config_currency_engine"] ?? null))) {
                // line 323
                yield "                    <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 323);
                yield "\" selected>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 323);
                yield "</option>
                    ";
            } else {
                // line 325
                yield "                    <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 325);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 325);
                yield "</option>
                    ";
            }
            // line 327
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency_engine'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        yield "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 332
        yield ($context["help_currency_auto"] ?? null);
        yield "\">";
        yield ($context["entry_currency_auto"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 334
        if ((($tmp = ($context["config_currency_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 335
            yield "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 336
            yield ($context["text_yes"] ?? null);
            yield "
                    ";
        } else {
            // line 338
            yield "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 339
            yield ($context["text_yes"] ?? null);
            yield "
                    ";
        }
        // line 340
        yield " </label>
                  <label class=\"radio-inline\"> ";
        // line 341
        if ((($tmp =  !($context["config_currency_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 342
            yield "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 343
            yield ($context["text_no"] ?? null);
            yield "
                    ";
        } else {
            // line 345
            yield "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 346
            yield ($context["text_no"] ?? null);
            yield "
                    ";
        }
        // line 347
        yield " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 351
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">                    
                    ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 355
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 355) == ($context["config_length_class_id"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 356
                yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 356);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 356);
                yield "</option>                    
                    ";
            } else {
                // line 357
                yield "                    
                    <option value=\"";
                // line 358
                yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 358);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 358);
                yield "</option>                    
                    ";
            }
            // line 360
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['length_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 365
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">                    
                    ";
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 369
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 369) == ($context["config_weight_class_id"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 370
                yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 370);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 370);
                yield "</option>                    
                    ";
            } else {
                // line 371
                yield "                    
                    <option value=\"";
                // line 372
                yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 372);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 372);
                yield "</option>                    
                    ";
            }
            // line 374
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['weight_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 381
        yield ($context["text_product"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 383
        yield ($context["help_product_count"] ?? null);
        yield "\">";
        yield ($context["entry_product_count"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 385
        if ((($tmp = ($context["config_product_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 386
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 387
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 389
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 390
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 391
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 392
        if ((($tmp =  !($context["config_product_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 393
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 394
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 396
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 397
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 398
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 402
        yield ($context["help_limit_admin"] ?? null);
        yield "\">";
        yield ($context["entry_limit_admin"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 404
        yield ($context["config_limit_admin"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_limit_admin"] ?? null);
        yield "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 405
        if ((($tmp = ($context["error_limit_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 406
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_limit_admin"] ?? null);
            yield "</div>
                    ";
        }
        // line 407
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 411
        yield ($context["text_review"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 413
        yield ($context["help_review"] ?? null);
        yield "\">";
        yield ($context["entry_review"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 415
        if ((($tmp = ($context["config_review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 416
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 417
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 419
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 420
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 421
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 422
        if ((($tmp =  !($context["config_review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 423
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 424
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 426
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 427
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 428
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 432
        yield ($context["help_review_guest"] ?? null);
        yield "\">";
        yield ($context["entry_review_guest"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 434
        if ((($tmp = ($context["config_review_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 435
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 436
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 438
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 439
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 440
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 441
        if ((($tmp =  !($context["config_review_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 442
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 443
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 445
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 446
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 447
        yield " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 452
        yield ($context["text_voucher"] ?? null);
        yield "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 454
        yield ($context["help_voucher_min"] ?? null);
        yield "\">";
        yield ($context["entry_voucher_min"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 456
        yield ($context["config_voucher_min"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_voucher_min"] ?? null);
        yield "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 457
        if ((($tmp = ($context["error_voucher_min"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 458
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_voucher_min"] ?? null);
            yield "</div>
                    ";
        }
        // line 459
        yield " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 462
        yield ($context["help_voucher_max"] ?? null);
        yield "\">";
        yield ($context["entry_voucher_max"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 464
        yield ($context["config_voucher_max"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_voucher_max"] ?? null);
        yield "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 465
        if ((($tmp = ($context["error_voucher_max"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 466
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_voucher_max"] ?? null);
            yield "</div>
                    ";
        }
        // line 467
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 471
        yield ($context["text_tax"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 473
        yield ($context["entry_tax"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 475
        if ((($tmp = ($context["config_tax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 476
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 477
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 479
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 480
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 481
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 482
        if ((($tmp =  !($context["config_tax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 483
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 484
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 486
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 487
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 488
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 492
        yield ($context["help_tax_default"] ?? null);
        yield "\">";
        yield ($context["entry_tax_default"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 495
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 496
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            yield "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 497
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 498
            yield "                      
                      <option value=\"shipping\">";
            // line 499
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 501
        yield "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            yield "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 502
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 503
            yield "                      
                      <option value=\"payment\">";
            // line 504
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 505
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 510
        yield ($context["help_tax_customer"] ?? null);
        yield "\">";
        yield ($context["entry_tax_customer"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 513
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 514
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            yield "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 515
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 516
            yield "                      
                      <option value=\"shipping\">";
            // line 517
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 519
        yield "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            yield "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 520
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 521
            yield "                      
                      <option value=\"payment\">";
            // line 522
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 523
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 529
        yield ($context["text_account"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 531
        yield ($context["help_customer_online"] ?? null);
        yield "\">";
        yield ($context["entry_customer_online"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 533
        if ((($tmp = ($context["config_customer_online"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 534
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 535
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 537
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 538
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 539
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 540
        if ((($tmp =  !($context["config_customer_online"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 541
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 542
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 544
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 545
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 546
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 550
        yield ($context["help_customer_activity"] ?? null);
        yield "\">";
        yield ($context["entry_customer_activity"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 552
        if ((($tmp = ($context["config_customer_activity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 553
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 554
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 556
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 557
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 558
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 559
        if ((($tmp =  !($context["config_customer_activity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 560
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 561
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 563
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 564
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 565
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 569
        yield ($context["entry_customer_search"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 571
        if ((($tmp = ($context["config_customer_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 572
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 573
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 575
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 576
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 577
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 578
        if ((($tmp =  !($context["config_customer_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 579
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 580
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 582
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 583
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 584
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 588
        yield ($context["help_customer_group"] ?? null);
        yield "\">";
        yield ($context["entry_customer_group"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      ";
        // line 591
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 592
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 592) == ($context["config_customer_group_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 593
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 593);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 593);
                yield "</option>                      
                      ";
            } else {
                // line 594
                yield "                      
                      <option value=\"";
                // line 595
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 595);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 595);
                yield "</option>                      
                      ";
            }
            // line 597
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 602
        yield ($context["help_customer_group_display"] ?? null);
        yield "\">";
        yield ($context["entry_customer_group_display"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 603
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 604
            yield "                    <div class=\"checkbox\">
                      <label> ";
            // line 605
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 605), ($context["config_customer_group_display"] ?? null))) {
                // line 606
                yield "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 606);
                yield "\" checked=\"checked\" />
                        ";
                // line 607
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 607);
                yield "
                        ";
            } else {
                // line 609
                yield "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 609);
                yield "\" />
                        ";
                // line 610
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 610);
                yield "
                        ";
            }
            // line 611
            yield " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 614
        yield "                    ";
        if ((($tmp = ($context["error_customer_group_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 615
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_customer_group_display"] ?? null);
            yield "</div>
                    ";
        }
        // line 616
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 619
        yield ($context["help_customer_price"] ?? null);
        yield "\">";
        yield ($context["entry_customer_price"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 621
        if ((($tmp = ($context["config_customer_price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 622
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 623
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 625
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 626
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 627
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 628
        if ((($tmp =  !($context["config_customer_price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 629
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 630
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 632
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 633
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 634
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 638
        yield ($context["help_login_attempts"] ?? null);
        yield "\">";
        yield ($context["entry_login_attempts"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 640
        yield ($context["config_login_attempts"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_login_attempts"] ?? null);
        yield "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 641
        if ((($tmp = ($context["error_login_attempts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 642
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_login_attempts"] ?? null);
            yield "</div>
                    ";
        }
        // line 643
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 646
        yield ($context["help_account"] ?? null);
        yield "\">";
        yield ($context["entry_account"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 649
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 650
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 651
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 651) == ($context["config_account_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 652
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 652);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 652);
                yield "</option>                      
                      ";
            } else {
                // line 653
                yield "                      
                      <option value=\"";
                // line 654
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 654);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 654);
                yield "</option>                      
                      ";
            }
            // line 656
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 662
        yield ($context["text_checkout"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 664
        yield ($context["help_invoice_prefix"] ?? null);
        yield "\">";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 666
        yield ($context["config_invoice_prefix"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 670
        yield ($context["help_cart_weight"] ?? null);
        yield "\">";
        yield ($context["entry_cart_weight"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 672
        if ((($tmp = ($context["config_cart_weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 673
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 674
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 676
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 677
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 678
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 679
        if ((($tmp =  !($context["config_cart_weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 680
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 681
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 683
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 684
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 685
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 689
        yield ($context["help_checkout_guest"] ?? null);
        yield "\">";
        yield ($context["entry_checkout_guest"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 691
        if ((($tmp = ($context["config_checkout_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 692
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 693
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 695
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 696
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 697
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 698
        if ((($tmp =  !($context["config_checkout_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 699
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 700
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 702
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 703
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 704
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 708
        yield ($context["help_checkout"] ?? null);
        yield "\">";
        yield ($context["entry_checkout"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 711
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 712
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 713
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 713) == ($context["config_checkout_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 714
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 714);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 714);
                yield "</option>                      
                      ";
            } else {
                // line 715
                yield "                      
                      <option value=\"";
                // line 716
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 716);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 716);
                yield "</option>                      
                      ";
            }
            // line 718
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 723
        yield ($context["help_order_status"] ?? null);
        yield "\">";
        yield ($context["entry_order_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      ";
        // line 726
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 727
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 727) == ($context["config_order_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 728
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 728);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 728);
                yield "</option>                      
                      ";
            } else {
                // line 729
                yield "                      
                      <option value=\"";
                // line 730
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 730);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 730);
                yield "</option>                      
                      ";
            }
            // line 732
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 737
        yield ($context["help_processing_status"] ?? null);
        yield "\">";
        yield ($context["entry_processing_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 739
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 740
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 741
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 741), ($context["config_processing_status"] ?? null))) {
                // line 742
                yield "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 742);
                yield "\" checked=\"checked\" />
                          ";
                // line 743
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 743);
                yield "
                          ";
            } else {
                // line 745
                yield "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 745);
                yield "\" />
                          ";
                // line 746
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 746);
                yield "
                          ";
            }
            // line 747
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 749
        yield " </div>
                    ";
        // line 750
        if ((($tmp = ($context["error_processing_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 751
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_processing_status"] ?? null);
            yield "</div>
                    ";
        }
        // line 752
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 755
        yield ($context["help_complete_status"] ?? null);
        yield "\">";
        yield ($context["entry_complete_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 757
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 758
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 759
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 759), ($context["config_complete_status"] ?? null))) {
                // line 760
                yield "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 760);
                yield "\" checked=\"checked\" />
                          ";
                // line 761
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 761);
                yield "
                          ";
            } else {
                // line 763
                yield "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 763);
                yield "\" />
                          ";
                // line 764
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 764);
                yield "
                          ";
            }
            // line 765
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 767
        yield " </div>
                    ";
        // line 768
        if ((($tmp = ($context["error_complete_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 769
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_complete_status"] ?? null);
            yield "</div>
                    ";
        }
        // line 770
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 773
        yield ($context["help_fraud_status"] ?? null);
        yield "\">";
        yield ($context["entry_fraud_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">                      
                      ";
        // line 776
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 777
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 777) == ($context["config_fraud_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 778
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 778);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 778);
                yield "</option>                      
                      ";
            } else {
                // line 779
                yield "                      
                      <option value=\"";
                // line 780
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 780);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 780);
                yield "</option>                      
                      ";
            }
            // line 782
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 787
        yield ($context["help_api"] ?? null);
        yield "\">";
        yield ($context["entry_api"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 790
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 791
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 792
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 792) == ($context["config_api_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 793
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 793);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 793);
                yield "</option>                      
                      ";
            } else {
                // line 794
                yield "                      
                      <option value=\"";
                // line 795
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 795);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 795);
                yield "</option>                      
                      ";
            }
            // line 797
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['api'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 803
        yield ($context["text_stock"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 805
        yield ($context["help_stock_display"] ?? null);
        yield "\">";
        yield ($context["entry_stock_display"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 807
        if ((($tmp = ($context["config_stock_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 808
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 809
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 811
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 812
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 813
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 814
        if ((($tmp =  !($context["config_stock_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 815
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 816
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 818
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 819
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 820
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 824
        yield ($context["help_stock_warning"] ?? null);
        yield "\">";
        yield ($context["entry_stock_warning"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 826
        if ((($tmp = ($context["config_stock_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 827
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 828
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 830
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 831
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 832
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 833
        if ((($tmp =  !($context["config_stock_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 834
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 835
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 837
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 838
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 839
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 843
        yield ($context["help_stock_checkout"] ?? null);
        yield "\">";
        yield ($context["entry_stock_checkout"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 845
        if ((($tmp = ($context["config_stock_checkout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 846
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 847
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 849
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 850
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 851
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 852
        if ((($tmp =  !($context["config_stock_checkout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 853
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 854
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 856
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 857
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 858
        yield " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 863
        yield ($context["text_affiliate"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 865
        yield ($context["entry_affiliate_group"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">                      
                      ";
        // line 868
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 869
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 869) == ($context["config_affiliate_group_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 870
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 870);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 870);
                yield "</option>                      
                      ";
            } else {
                // line 871
                yield "                      
                      <option value=\"";
                // line 872
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 872);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 872);
                yield "</option>                      
                      ";
            }
            // line 874
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 879
        yield ($context["help_affiliate_approval"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_approval"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 881
        if ((($tmp = ($context["config_affiliate_approval"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 882
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 883
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 885
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 886
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 887
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 888
        if ((($tmp =  !($context["config_affiliate_approval"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 889
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 890
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 892
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 893
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 894
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 898
        yield ($context["help_affiliate_auto"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_auto"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 900
        if ((($tmp = ($context["config_affiliate_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 901
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 902
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 904
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 905
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 906
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 907
        if ((($tmp =  !($context["config_affiliate_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 908
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 909
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 911
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 912
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 913
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 917
        yield ($context["help_affiliate_commission"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 919
        yield ($context["config_affiliate_commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 923
        yield ($context["help_affiliate"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 926
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 927
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 928
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 928) == ($context["config_affiliate_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 929
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 929);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 929);
                yield "</option>                      
                      ";
            } else {
                // line 930
                yield "                      
                      <option value=\"";
                // line 931
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 931);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 931);
                yield "</option>                      
                      ";
            }
            // line 933
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 939
        yield ($context["text_return"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 941
        yield ($context["help_return"] ?? null);
        yield "\">";
        yield ($context["entry_return"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 944
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 945
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 946
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 946) == ($context["config_return_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 947
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 947);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 947);
                yield "</option>                      
                      ";
            } else {
                // line 948
                yield "                      
                      <option value=\"";
                // line 949
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 949);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 949);
                yield "</option>                      
                      ";
            }
            // line 951
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 956
        yield ($context["help_return_status"] ?? null);
        yield "\">";
        yield ($context["entry_return_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      ";
        // line 959
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 960
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 960) == ($context["config_return_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 961
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 961);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 961);
                yield "</option>                      
                      ";
            } else {
                // line 962
                yield "                      
                      <option value=\"";
                // line 963
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 963);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 963);
                yield "</option>                      
                      ";
            }
            // line 965
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 971
        yield ($context["text_captcha"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 973
        yield ($context["help_captcha"] ?? null);
        yield "\">";
        yield ($context["entry_captcha"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 976
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 977
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 978
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 978) == ($context["config_captcha"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 979
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 979);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 979);
                yield "</option>                      
                      ";
            } else {
                // line 980
                yield "                      
                      <option value=\"";
                // line 981
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 981);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 981);
                yield "</option>                      
                      ";
            }
            // line 983
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 988
        yield ($context["entry_captcha_page"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 990
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 991
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 992
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 992), ($context["config_captcha_page"] ?? null))) {
                // line 993
                yield "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 993);
                yield "\" checked=\"checked\" />
                          ";
                // line 994
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 994);
                yield "
                          ";
            } else {
                // line 996
                yield "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 996);
                yield "\" />
                          ";
                // line 997
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 997);
                yield "
                          ";
            }
            // line 998
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha_page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1000
        yield " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1007
        yield ($context["entry_logo"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\">
                    <img src=\"";
        // line 1010
        yield ($context["logo"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" />
                  </a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1012
        yield ($context["config_logo"] ?? null);
        yield "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1016
        yield ($context["help_icon"] ?? null);
        yield "\">";
        yield ($context["entry_icon"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1017
        yield ($context["icon"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1018
        yield ($context["config_icon"] ?? null);
        yield "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1024
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1026
        yield ($context["help_mail_engine"] ?? null);
        yield "\">";
        yield ($context["entry_mail_engine"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      ";
        // line 1029
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            yield "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1030
            yield ($context["text_mail"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 1031
            yield "                      
                      <option value=\"mail\">";
            // line 1032
            yield ($context["text_mail"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 1034
        yield "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            yield "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1035
            yield ($context["text_smtp"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 1036
            yield "                      
                      <option value=\"smtp\">";
            // line 1037
            yield ($context["text_smtp"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 1038
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1043
        yield ($context["help_mail_parameter"] ?? null);
        yield "\">";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1045
        yield ($context["config_mail_parameter"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1049
        yield ($context["help_mail_smtp_hostname"] ?? null);
        yield "\">";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1051
        yield ($context["config_mail_smtp_hostname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1055
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1057
        yield ($context["config_mail_smtp_username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1061
        yield ($context["help_mail_smtp_password"] ?? null);
        yield "\">";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1063
        yield ($context["config_mail_smtp_password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1067
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1069
        yield ($context["config_mail_smtp_port"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1073
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1075
        yield ($context["config_mail_smtp_timeout"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1080
        yield ($context["text_mail_alert"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1082
        yield ($context["help_mail_alert"] ?? null);
        yield "\">";
        yield ($context["entry_mail_alert"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1084
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1085
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 1086
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1086), ($context["config_mail_alert"] ?? null))) {
                // line 1087
                yield "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1087);
                yield "\" checked=\"checked\" />
                          ";
                // line 1088
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1088);
                yield "
                          ";
            } else {
                // line 1090
                yield "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1090);
                yield "\" />
                          ";
                // line 1091
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1091);
                yield "
                          ";
            }
            // line 1092
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mail_alert'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1094
        yield " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1098
        yield ($context["help_mail_alert_email"] ?? null);
        yield "\">";
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1100
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "\" id=\"input-alert-email\" class=\"form-control\">";
        yield ($context["config_mail_alert_email"] ?? null);
        yield "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1107
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1109
        yield ($context["help_maintenance"] ?? null);
        yield "\">";
        yield ($context["entry_maintenance"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1111
        if ((($tmp = ($context["config_maintenance"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1112
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1113
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1115
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1116
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1117
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1118
        if ((($tmp =  !($context["config_maintenance"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1119
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1120
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1122
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1123
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1124
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1128
        yield ($context["help_seo_url"] ?? null);
        yield "\">";
        yield ($context["entry_seo_url"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1130
        if ((($tmp = ($context["config_seo_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1131
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1132
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1134
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1135
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1136
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1137
        if ((($tmp =  !($context["config_seo_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1138
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1139
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1141
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1142
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1143
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1147
        yield ($context["help_robots"] ?? null);
        yield "\">";
        yield ($context["entry_robots"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1149
        yield ($context["entry_robots"] ?? null);
        yield "\" id=\"input-robots\" class=\"form-control\">";
        yield ($context["config_robots"] ?? null);
        yield "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1153
        yield ($context["help_compression"] ?? null);
        yield "\">";
        yield ($context["entry_compression"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1155
        yield ($context["config_compression"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_compression"] ?? null);
        yield "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1160
        yield ($context["text_security"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1162
        yield ($context["help_secure"] ?? null);
        yield "\">";
        yield ($context["entry_secure"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1164
        if ((($tmp = ($context["config_secure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1165
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1166
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1168
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1169
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1170
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1171
        if ((($tmp =  !($context["config_secure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1172
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1173
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1175
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1176
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1177
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1181
        yield ($context["help_password"] ?? null);
        yield "\">";
        yield ($context["entry_password"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1183
        if ((($tmp = ($context["config_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1184
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1185
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1187
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1188
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1189
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1190
        if ((($tmp =  !($context["config_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1191
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1192
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1194
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1195
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1196
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1200
        yield ($context["help_shared"] ?? null);
        yield "\">";
        yield ($context["entry_shared"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1202
        if ((($tmp = ($context["config_shared"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1203
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1204
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1206
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1207
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1208
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1209
        if ((($tmp =  !($context["config_shared"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1210
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1211
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1213
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1214
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1215
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1219
        yield ($context["help_encryption"] ?? null);
        yield "\">";
        yield ($context["entry_encryption"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1221
        yield ($context["entry_encryption"] ?? null);
        yield "\" id=\"input-encryption\" class=\"form-control\">";
        yield ($context["config_encryption"] ?? null);
        yield "</textarea>
                    ";
        // line 1222
        if ((($tmp = ($context["error_encryption"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1223
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_encryption"] ?? null);
            yield "</div>
                    ";
        }
        // line 1224
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1228
        yield ($context["text_upload"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1230
        yield ($context["help_file_max_size"] ?? null);
        yield "\">";
        yield ($context["entry_file_max_size"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1232
        yield ($context["config_file_max_size"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_file_max_size"] ?? null);
        yield "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1236
        yield ($context["help_file_ext_allowed"] ?? null);
        yield "\">";
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1238
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        yield ($context["config_file_ext_allowed"] ?? null);
        yield "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1242
        yield ($context["help_file_mime_allowed"] ?? null);
        yield "\">";
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1244
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        yield ($context["config_file_mime_allowed"] ?? null);
        yield "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1249
        yield ($context["text_error"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1251
        yield ($context["entry_error_display"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1253
        if ((($tmp = ($context["config_error_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1254
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1255
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1257
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1258
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1259
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1260
        if ((($tmp =  !($context["config_error_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1261
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1262
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1264
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1265
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1266
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1270
        yield ($context["entry_error_log"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1272
        if ((($tmp = ($context["config_error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1273
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1274
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1276
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1277
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1278
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1279
        if ((($tmp =  !($context["config_error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1280
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1281
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1283
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1284
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1285
        yield "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1289
        yield ($context["entry_error_filename"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1291
        yield ($context["config_error_filename"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_error_filename"] ?? null);
        yield "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1292
        if ((($tmp = ($context["error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1293
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_log"] ?? null);
            yield "</div>
                    ";
        }
        // line 1294
        yield " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    var placeholder = '";
        // line 1304
        yield ($context["placeholder"] ?? null);
        yield "';
    var entry_title = '";
        // line 1305
        yield ($context["entry_title"] ?? null);
        yield "';

    function addIcon() {
        var table = \$('#tab-repeater tbody'); // твоя таблиця
        var index = table.find('tr').length;

        // генеруємо колонки для всіх мов
        var titleColumns = '';
        ";
        // line 1313
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1314
            yield "        titleColumns += `
            <td class=\"text-left\">
                <input type=\"text\" name=\"config_icons_repeater[\${index}][title][";
            // line 1316
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1316);
            yield "]\" value=\"\" placeholder=\"\${entry_title}\" class=\"form-control\" />
            </td>`;
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1319
        yield "
        var newRow = `
            <tr id=\"icon-row\${index}\">
                <td class=\"text-center\">
                    <a href=\"\" id=\"thumb-icon\${index}\" data-toggle=\"image\" class=\"img-thumbnail\">
                        <img src=\"\${placeholder}\" alt=\"\" title=\"\" data-placeholder=\"\${placeholder}\" />
                    </a>
                    <input type=\"hidden\" name=\"config_icons_repeater[\${index}][icon]\" value=\"\" id=\"input-icon\${index}\" />
                </td>
                \${titleColumns}
                <td class=\"text-left\">
                    <button type=\"button\" onclick=\"\$('#icon-row\${index}').remove();\" class=\"btn btn-danger\">
                        <i class=\"fa fa-minus-circle\"></i>
                    </button>
                </td>
            </tr>`;

        table.append(newRow);
    }
  </script>



  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1345
        yield ($context["user_token"] ?? null);
        yield "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1367
        yield ($context["user_token"] ?? null);
        yield "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1376
        yield ($context["text_select"] ?? null);
        yield "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1382
        yield ($context["config_zone_id"] ?? null);
        yield "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1389
        yield ($context["text_none"] ?? null);
        yield "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>

<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
<link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
<script type=\"text/javascript\"><!--
";
        // line 1410
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
        return "setting/setting.twig";
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
        return array (  3884 => 1410,  3860 => 1389,  3850 => 1382,  3841 => 1376,  3829 => 1367,  3804 => 1345,  3776 => 1319,  3767 => 1316,  3763 => 1314,  3759 => 1313,  3748 => 1305,  3744 => 1304,  3732 => 1294,  3726 => 1293,  3724 => 1292,  3718 => 1291,  3713 => 1289,  3707 => 1285,  3702 => 1284,  3699 => 1283,  3694 => 1281,  3691 => 1280,  3689 => 1279,  3686 => 1278,  3681 => 1277,  3678 => 1276,  3673 => 1274,  3670 => 1273,  3668 => 1272,  3663 => 1270,  3657 => 1266,  3652 => 1265,  3649 => 1264,  3644 => 1262,  3641 => 1261,  3639 => 1260,  3636 => 1259,  3631 => 1258,  3628 => 1257,  3623 => 1255,  3620 => 1254,  3618 => 1253,  3613 => 1251,  3608 => 1249,  3598 => 1244,  3591 => 1242,  3582 => 1238,  3575 => 1236,  3566 => 1232,  3559 => 1230,  3554 => 1228,  3548 => 1224,  3542 => 1223,  3540 => 1222,  3534 => 1221,  3527 => 1219,  3521 => 1215,  3516 => 1214,  3513 => 1213,  3508 => 1211,  3505 => 1210,  3503 => 1209,  3500 => 1208,  3495 => 1207,  3492 => 1206,  3487 => 1204,  3484 => 1203,  3482 => 1202,  3475 => 1200,  3469 => 1196,  3464 => 1195,  3461 => 1194,  3456 => 1192,  3453 => 1191,  3451 => 1190,  3448 => 1189,  3443 => 1188,  3440 => 1187,  3435 => 1185,  3432 => 1184,  3430 => 1183,  3423 => 1181,  3417 => 1177,  3412 => 1176,  3409 => 1175,  3404 => 1173,  3401 => 1172,  3399 => 1171,  3396 => 1170,  3391 => 1169,  3388 => 1168,  3383 => 1166,  3380 => 1165,  3378 => 1164,  3371 => 1162,  3366 => 1160,  3356 => 1155,  3349 => 1153,  3340 => 1149,  3333 => 1147,  3327 => 1143,  3322 => 1142,  3319 => 1141,  3314 => 1139,  3311 => 1138,  3309 => 1137,  3306 => 1136,  3301 => 1135,  3298 => 1134,  3293 => 1132,  3290 => 1131,  3288 => 1130,  3281 => 1128,  3275 => 1124,  3270 => 1123,  3267 => 1122,  3262 => 1120,  3259 => 1119,  3257 => 1118,  3254 => 1117,  3249 => 1116,  3246 => 1115,  3241 => 1113,  3238 => 1112,  3236 => 1111,  3229 => 1109,  3224 => 1107,  3212 => 1100,  3205 => 1098,  3199 => 1094,  3191 => 1092,  3186 => 1091,  3181 => 1090,  3176 => 1088,  3171 => 1087,  3169 => 1086,  3166 => 1085,  3162 => 1084,  3155 => 1082,  3150 => 1080,  3140 => 1075,  3135 => 1073,  3126 => 1069,  3121 => 1067,  3112 => 1063,  3105 => 1061,  3096 => 1057,  3091 => 1055,  3082 => 1051,  3075 => 1049,  3066 => 1045,  3059 => 1043,  3052 => 1038,  3047 => 1037,  3044 => 1036,  3039 => 1035,  3034 => 1034,  3029 => 1032,  3026 => 1031,  3021 => 1030,  3017 => 1029,  3009 => 1026,  3004 => 1024,  2995 => 1018,  2989 => 1017,  2983 => 1016,  2976 => 1012,  2969 => 1010,  2963 => 1007,  2954 => 1000,  2946 => 998,  2941 => 997,  2936 => 996,  2931 => 994,  2926 => 993,  2924 => 992,  2921 => 991,  2917 => 990,  2912 => 988,  2900 => 983,  2893 => 981,  2890 => 980,  2883 => 979,  2878 => 978,  2874 => 977,  2870 => 976,  2862 => 973,  2857 => 971,  2844 => 965,  2837 => 963,  2834 => 962,  2827 => 961,  2822 => 960,  2818 => 959,  2810 => 956,  2798 => 951,  2791 => 949,  2788 => 948,  2781 => 947,  2776 => 946,  2772 => 945,  2768 => 944,  2760 => 941,  2755 => 939,  2742 => 933,  2735 => 931,  2732 => 930,  2725 => 929,  2720 => 928,  2716 => 927,  2712 => 926,  2704 => 923,  2695 => 919,  2688 => 917,  2682 => 913,  2677 => 912,  2674 => 911,  2669 => 909,  2666 => 908,  2664 => 907,  2661 => 906,  2656 => 905,  2653 => 904,  2648 => 902,  2645 => 901,  2643 => 900,  2636 => 898,  2630 => 894,  2625 => 893,  2622 => 892,  2617 => 890,  2614 => 889,  2612 => 888,  2609 => 887,  2604 => 886,  2601 => 885,  2596 => 883,  2593 => 882,  2591 => 881,  2584 => 879,  2572 => 874,  2565 => 872,  2562 => 871,  2555 => 870,  2550 => 869,  2546 => 868,  2540 => 865,  2535 => 863,  2528 => 858,  2523 => 857,  2520 => 856,  2515 => 854,  2512 => 853,  2510 => 852,  2507 => 851,  2502 => 850,  2499 => 849,  2494 => 847,  2491 => 846,  2489 => 845,  2482 => 843,  2476 => 839,  2471 => 838,  2468 => 837,  2463 => 835,  2460 => 834,  2458 => 833,  2455 => 832,  2450 => 831,  2447 => 830,  2442 => 828,  2439 => 827,  2437 => 826,  2430 => 824,  2424 => 820,  2419 => 819,  2416 => 818,  2411 => 816,  2408 => 815,  2406 => 814,  2403 => 813,  2398 => 812,  2395 => 811,  2390 => 809,  2387 => 808,  2385 => 807,  2378 => 805,  2373 => 803,  2360 => 797,  2353 => 795,  2350 => 794,  2343 => 793,  2338 => 792,  2334 => 791,  2330 => 790,  2322 => 787,  2310 => 782,  2303 => 780,  2300 => 779,  2293 => 778,  2288 => 777,  2284 => 776,  2276 => 773,  2271 => 770,  2265 => 769,  2263 => 768,  2260 => 767,  2252 => 765,  2247 => 764,  2242 => 763,  2237 => 761,  2232 => 760,  2230 => 759,  2227 => 758,  2223 => 757,  2216 => 755,  2211 => 752,  2205 => 751,  2203 => 750,  2200 => 749,  2192 => 747,  2187 => 746,  2182 => 745,  2177 => 743,  2172 => 742,  2170 => 741,  2167 => 740,  2163 => 739,  2156 => 737,  2144 => 732,  2137 => 730,  2134 => 729,  2127 => 728,  2122 => 727,  2118 => 726,  2110 => 723,  2098 => 718,  2091 => 716,  2088 => 715,  2081 => 714,  2076 => 713,  2072 => 712,  2068 => 711,  2060 => 708,  2054 => 704,  2049 => 703,  2046 => 702,  2041 => 700,  2038 => 699,  2036 => 698,  2033 => 697,  2028 => 696,  2025 => 695,  2020 => 693,  2017 => 692,  2015 => 691,  2008 => 689,  2002 => 685,  1997 => 684,  1994 => 683,  1989 => 681,  1986 => 680,  1984 => 679,  1981 => 678,  1976 => 677,  1973 => 676,  1968 => 674,  1965 => 673,  1963 => 672,  1956 => 670,  1947 => 666,  1940 => 664,  1935 => 662,  1922 => 656,  1915 => 654,  1912 => 653,  1905 => 652,  1900 => 651,  1896 => 650,  1892 => 649,  1884 => 646,  1879 => 643,  1873 => 642,  1871 => 641,  1865 => 640,  1858 => 638,  1852 => 634,  1847 => 633,  1844 => 632,  1839 => 630,  1836 => 629,  1834 => 628,  1831 => 627,  1826 => 626,  1823 => 625,  1818 => 623,  1815 => 622,  1813 => 621,  1806 => 619,  1801 => 616,  1795 => 615,  1792 => 614,  1784 => 611,  1779 => 610,  1774 => 609,  1769 => 607,  1764 => 606,  1762 => 605,  1759 => 604,  1755 => 603,  1749 => 602,  1737 => 597,  1730 => 595,  1727 => 594,  1720 => 593,  1715 => 592,  1711 => 591,  1703 => 588,  1697 => 584,  1692 => 583,  1689 => 582,  1684 => 580,  1681 => 579,  1679 => 578,  1676 => 577,  1671 => 576,  1668 => 575,  1663 => 573,  1660 => 572,  1658 => 571,  1653 => 569,  1647 => 565,  1642 => 564,  1639 => 563,  1634 => 561,  1631 => 560,  1629 => 559,  1626 => 558,  1621 => 557,  1618 => 556,  1613 => 554,  1610 => 553,  1608 => 552,  1601 => 550,  1595 => 546,  1590 => 545,  1587 => 544,  1582 => 542,  1579 => 541,  1577 => 540,  1574 => 539,  1569 => 538,  1566 => 537,  1561 => 535,  1558 => 534,  1556 => 533,  1549 => 531,  1544 => 529,  1536 => 523,  1531 => 522,  1528 => 521,  1523 => 520,  1518 => 519,  1513 => 517,  1510 => 516,  1505 => 515,  1501 => 514,  1497 => 513,  1489 => 510,  1482 => 505,  1477 => 504,  1474 => 503,  1469 => 502,  1464 => 501,  1459 => 499,  1456 => 498,  1451 => 497,  1447 => 496,  1443 => 495,  1435 => 492,  1429 => 488,  1424 => 487,  1421 => 486,  1416 => 484,  1413 => 483,  1411 => 482,  1408 => 481,  1403 => 480,  1400 => 479,  1395 => 477,  1392 => 476,  1390 => 475,  1385 => 473,  1380 => 471,  1374 => 467,  1368 => 466,  1366 => 465,  1360 => 464,  1353 => 462,  1348 => 459,  1342 => 458,  1340 => 457,  1334 => 456,  1327 => 454,  1322 => 452,  1315 => 447,  1310 => 446,  1307 => 445,  1302 => 443,  1299 => 442,  1297 => 441,  1294 => 440,  1289 => 439,  1286 => 438,  1281 => 436,  1278 => 435,  1276 => 434,  1269 => 432,  1263 => 428,  1258 => 427,  1255 => 426,  1250 => 424,  1247 => 423,  1245 => 422,  1242 => 421,  1237 => 420,  1234 => 419,  1229 => 417,  1226 => 416,  1224 => 415,  1217 => 413,  1212 => 411,  1206 => 407,  1200 => 406,  1198 => 405,  1192 => 404,  1185 => 402,  1179 => 398,  1174 => 397,  1171 => 396,  1166 => 394,  1163 => 393,  1161 => 392,  1158 => 391,  1153 => 390,  1150 => 389,  1145 => 387,  1142 => 386,  1140 => 385,  1133 => 383,  1128 => 381,  1114 => 374,  1107 => 372,  1104 => 371,  1097 => 370,  1092 => 369,  1088 => 368,  1082 => 365,  1070 => 360,  1063 => 358,  1060 => 357,  1053 => 356,  1048 => 355,  1044 => 354,  1038 => 351,  1032 => 347,  1027 => 346,  1024 => 345,  1019 => 343,  1016 => 342,  1014 => 341,  1011 => 340,  1006 => 339,  1003 => 338,  998 => 336,  995 => 335,  993 => 334,  986 => 332,  980 => 328,  974 => 327,  966 => 325,  958 => 323,  955 => 322,  950 => 321,  944 => 319,  938 => 317,  936 => 316,  930 => 313,  918 => 308,  911 => 306,  908 => 305,  901 => 304,  896 => 303,  892 => 302,  884 => 299,  872 => 294,  865 => 292,  862 => 291,  855 => 290,  850 => 289,  846 => 288,  840 => 285,  828 => 280,  821 => 278,  818 => 277,  811 => 276,  806 => 275,  802 => 274,  796 => 271,  790 => 267,  784 => 266,  776 => 264,  768 => 262,  765 => 261,  761 => 260,  755 => 257,  745 => 250,  733 => 245,  726 => 243,  723 => 242,  716 => 241,  711 => 240,  707 => 239,  701 => 236,  696 => 233,  691 => 231,  683 => 229,  678 => 228,  673 => 227,  668 => 225,  663 => 224,  661 => 223,  658 => 222,  654 => 221,  648 => 220,  645 => 219,  643 => 218,  640 => 217,  624 => 213,  619 => 211,  615 => 209,  610 => 208,  602 => 199,  597 => 197,  589 => 191,  583 => 190,  581 => 189,  575 => 188,  570 => 186,  565 => 183,  559 => 182,  557 => 181,  551 => 180,  546 => 178,  543 => 177,  529 => 173,  520 => 171,  517 => 170,  512 => 169,  498 => 165,  489 => 163,  486 => 162,  481 => 161,  467 => 157,  458 => 153,  454 => 152,  450 => 150,  445 => 149,  426 => 144,  418 => 141,  414 => 140,  411 => 139,  407 => 138,  402 => 135,  396 => 134,  394 => 133,  388 => 132,  383 => 130,  378 => 127,  372 => 126,  370 => 125,  364 => 124,  359 => 122,  341 => 111,  334 => 109,  331 => 108,  324 => 107,  319 => 106,  315 => 105,  309 => 102,  295 => 95,  288 => 93,  285 => 92,  278 => 91,  273 => 90,  269 => 89,  263 => 86,  253 => 81,  248 => 79,  244 => 77,  234 => 73,  230 => 72,  226 => 71,  221 => 69,  213 => 66,  209 => 65,  206 => 64,  202 => 63,  199 => 62,  191 => 59,  186 => 54,  182 => 53,  178 => 52,  174 => 51,  165 => 47,  161 => 46,  158 => 45,  154 => 44,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  117 => 31,  111 => 28,  107 => 26,  99 => 22,  96 => 21,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "setting/setting.twig", "");
    }
}
