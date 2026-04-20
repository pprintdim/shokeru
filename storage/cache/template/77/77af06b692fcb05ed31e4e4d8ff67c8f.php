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
class __TwigTemplate_7dea90a25dac1e2ecef17c351c93858e extends Template
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
        yield ((($context["text_other"] ?? null)) ? ($context["text_other"]) : ("Інше"));
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-turbosms-token\">";
        // line 383
        yield ((($context["entry_turbo_sms_token"] ?? null)) ? ($context["entry_turbo_sms_token"]) : ("TurboSms Token"));
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_turbosms_token\" value=\"";
        // line 385
        yield ($context["config_turbo_sms_token"] ?? null);
        yield "\" placeholder=\"";
        yield ((($context["entry_turbo_sms_token"] ?? null)) ? ($context["entry_turbo_sms_token"]) : ("TurboSms Token"));
        yield "\" id=\"input-turbosms-token\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-turbosms-name\">";
        // line 389
        yield ((($context["entry_turbo_sms_name"] ?? null)) ? ($context["entry_turbo_sms_name"]) : ("TurboSms Saller Name"));
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_turbosms_name\" value=\"";
        // line 391
        yield ($context["config_turbo_sms_name"] ?? null);
        yield "\" placeholder=\"";
        yield ((($context["entry_turbo_sms_name"] ?? null)) ? ($context["entry_turbo_sms_name"]) : ("TurboSms Saller Name"));
        yield "\" id=\"input-turbosms-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-sale-line\">";
        // line 395
        yield ((($context["entry_sale_line"] ?? null)) ? ($context["entry_sale_line"]) : ("Sale line"));
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_sale_line\" rows=\"6\" placeholder=\"";
        // line 397
        yield ((($context["entry_sale_line"] ?? null)) ? ($context["entry_sale_line"]) : ("Sale line"));
        yield "\" id=\"input-sale-line\" class=\"form-control\">";
        yield ($context["config_sale_line"] ?? null);
        yield "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 402
        yield ($context["text_product"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 404
        yield ($context["help_product_count"] ?? null);
        yield "\">";
        yield ($context["entry_product_count"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 406
        if ((($tmp = ($context["config_product_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 407
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 408
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 410
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 411
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 412
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 413
        if ((($tmp =  !($context["config_product_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 414
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 415
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 417
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 418
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 419
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 423
        yield ($context["help_limit_admin"] ?? null);
        yield "\">";
        yield ($context["entry_limit_admin"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 425
        yield ($context["config_limit_admin"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_limit_admin"] ?? null);
        yield "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 426
        if ((($tmp = ($context["error_limit_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 427
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_limit_admin"] ?? null);
            yield "</div>
                    ";
        }
        // line 428
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 432
        yield ($context["text_review"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 434
        yield ($context["help_review"] ?? null);
        yield "\">";
        yield ($context["entry_review"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 436
        if ((($tmp = ($context["config_review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 437
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 438
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 440
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 441
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 442
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 443
        if ((($tmp =  !($context["config_review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 444
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 445
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 447
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 448
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 449
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 453
        yield ($context["help_review_guest"] ?? null);
        yield "\">";
        yield ($context["entry_review_guest"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 455
        if ((($tmp = ($context["config_review_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 456
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 457
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 459
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 460
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 461
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 462
        if ((($tmp =  !($context["config_review_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 463
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 464
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 466
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 467
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 468
        yield " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 473
        yield ($context["text_voucher"] ?? null);
        yield "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 475
        yield ($context["help_voucher_min"] ?? null);
        yield "\">";
        yield ($context["entry_voucher_min"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 477
        yield ($context["config_voucher_min"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_voucher_min"] ?? null);
        yield "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 478
        if ((($tmp = ($context["error_voucher_min"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 479
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_voucher_min"] ?? null);
            yield "</div>
                    ";
        }
        // line 480
        yield " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 483
        yield ($context["help_voucher_max"] ?? null);
        yield "\">";
        yield ($context["entry_voucher_max"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 485
        yield ($context["config_voucher_max"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_voucher_max"] ?? null);
        yield "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 486
        if ((($tmp = ($context["error_voucher_max"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 487
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_voucher_max"] ?? null);
            yield "</div>
                    ";
        }
        // line 488
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 492
        yield ($context["text_tax"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 494
        yield ($context["entry_tax"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 496
        if ((($tmp = ($context["config_tax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 497
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 498
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 500
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 501
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 502
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 503
        if ((($tmp =  !($context["config_tax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 504
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 505
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 507
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 508
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 509
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 513
        yield ($context["help_tax_default"] ?? null);
        yield "\">";
        yield ($context["entry_tax_default"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 516
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 517
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            yield "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 518
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 519
            yield "                      
                      <option value=\"shipping\">";
            // line 520
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 522
        yield "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            yield "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 523
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 524
            yield "                      
                      <option value=\"payment\">";
            // line 525
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 526
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 531
        yield ($context["help_tax_customer"] ?? null);
        yield "\">";
        yield ($context["entry_tax_customer"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 534
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 535
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            yield "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 536
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 537
            yield "                      
                      <option value=\"shipping\">";
            // line 538
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 540
        yield "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            yield "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 541
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 542
            yield "                      
                      <option value=\"payment\">";
            // line 543
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 544
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 550
        yield ($context["text_account"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 552
        yield ($context["help_customer_online"] ?? null);
        yield "\">";
        yield ($context["entry_customer_online"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 554
        if ((($tmp = ($context["config_customer_online"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 555
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 556
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 558
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 559
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 560
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 561
        if ((($tmp =  !($context["config_customer_online"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 562
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 563
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 565
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 566
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 567
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 571
        yield ($context["help_customer_activity"] ?? null);
        yield "\">";
        yield ($context["entry_customer_activity"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 573
        if ((($tmp = ($context["config_customer_activity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 574
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 575
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 577
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 578
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 579
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 580
        if ((($tmp =  !($context["config_customer_activity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 581
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 582
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 584
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 585
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 586
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 590
        yield ($context["entry_customer_search"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 592
        if ((($tmp = ($context["config_customer_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 593
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 594
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 596
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 597
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 598
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 599
        if ((($tmp =  !($context["config_customer_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 600
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 601
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 603
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 604
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 605
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 609
        yield ($context["help_customer_group"] ?? null);
        yield "\">";
        yield ($context["entry_customer_group"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      ";
        // line 612
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 613
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 613) == ($context["config_customer_group_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 614
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 614);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 614);
                yield "</option>                      
                      ";
            } else {
                // line 615
                yield "                      
                      <option value=\"";
                // line 616
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 616);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 616);
                yield "</option>                      
                      ";
            }
            // line 618
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
        // line 623
        yield ($context["help_customer_group_display"] ?? null);
        yield "\">";
        yield ($context["entry_customer_group_display"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 624
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 625
            yield "                    <div class=\"checkbox\">
                      <label> ";
            // line 626
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 626), ($context["config_customer_group_display"] ?? null))) {
                // line 627
                yield "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 627);
                yield "\" checked=\"checked\" />
                        ";
                // line 628
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 628);
                yield "
                        ";
            } else {
                // line 630
                yield "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 630);
                yield "\" />
                        ";
                // line 631
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 631);
                yield "
                        ";
            }
            // line 632
            yield " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 635
        yield "                    ";
        if ((($tmp = ($context["error_customer_group_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 636
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_customer_group_display"] ?? null);
            yield "</div>
                    ";
        }
        // line 637
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 640
        yield ($context["help_customer_price"] ?? null);
        yield "\">";
        yield ($context["entry_customer_price"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 642
        if ((($tmp = ($context["config_customer_price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 643
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 644
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 646
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 647
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 648
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 649
        if ((($tmp =  !($context["config_customer_price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 650
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 651
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 653
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 654
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 655
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 659
        yield ($context["help_login_attempts"] ?? null);
        yield "\">";
        yield ($context["entry_login_attempts"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 661
        yield ($context["config_login_attempts"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_login_attempts"] ?? null);
        yield "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 662
        if ((($tmp = ($context["error_login_attempts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 663
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_login_attempts"] ?? null);
            yield "</div>
                    ";
        }
        // line 664
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 667
        yield ($context["help_account"] ?? null);
        yield "\">";
        yield ($context["entry_account"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 670
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 671
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 672
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 672) == ($context["config_account_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 673
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 673);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 673);
                yield "</option>                      
                      ";
            } else {
                // line 674
                yield "                      
                      <option value=\"";
                // line 675
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 675);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 675);
                yield "</option>                      
                      ";
            }
            // line 677
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
        // line 683
        yield ($context["text_checkout"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 685
        yield ($context["help_invoice_prefix"] ?? null);
        yield "\">";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 687
        yield ($context["config_invoice_prefix"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 691
        yield ($context["help_cart_weight"] ?? null);
        yield "\">";
        yield ($context["entry_cart_weight"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 693
        if ((($tmp = ($context["config_cart_weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 694
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 695
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 697
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 698
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 699
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 700
        if ((($tmp =  !($context["config_cart_weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 701
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 702
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 704
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 705
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 706
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 710
        yield ($context["help_checkout_guest"] ?? null);
        yield "\">";
        yield ($context["entry_checkout_guest"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 712
        if ((($tmp = ($context["config_checkout_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 713
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 714
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 716
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 717
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 718
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 719
        if ((($tmp =  !($context["config_checkout_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 720
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 721
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 723
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 724
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 725
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 729
        yield ($context["help_checkout"] ?? null);
        yield "\">";
        yield ($context["entry_checkout"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 732
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 733
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 734
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 734) == ($context["config_checkout_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 735
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 735);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 735);
                yield "</option>                      
                      ";
            } else {
                // line 736
                yield "                      
                      <option value=\"";
                // line 737
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 737);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 737);
                yield "</option>                      
                      ";
            }
            // line 739
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
        // line 744
        yield ($context["help_order_status"] ?? null);
        yield "\">";
        yield ($context["entry_order_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      ";
        // line 747
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 748
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 748) == ($context["config_order_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 749
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 749);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 749);
                yield "</option>                      
                      ";
            } else {
                // line 750
                yield "                      
                      <option value=\"";
                // line 751
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 751);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 751);
                yield "</option>                      
                      ";
            }
            // line 753
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
        // line 758
        yield ($context["help_processing_status"] ?? null);
        yield "\">";
        yield ($context["entry_processing_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 760
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 761
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 762
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 762), ($context["config_processing_status"] ?? null))) {
                // line 763
                yield "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 763);
                yield "\" checked=\"checked\" />
                          ";
                // line 764
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 764);
                yield "
                          ";
            } else {
                // line 766
                yield "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 766);
                yield "\" />
                          ";
                // line 767
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 767);
                yield "
                          ";
            }
            // line 768
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 770
        yield " </div>
                    ";
        // line 771
        if ((($tmp = ($context["error_processing_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 772
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_processing_status"] ?? null);
            yield "</div>
                    ";
        }
        // line 773
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 776
        yield ($context["help_complete_status"] ?? null);
        yield "\">";
        yield ($context["entry_complete_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 778
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 779
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 780
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 780), ($context["config_complete_status"] ?? null))) {
                // line 781
                yield "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 781);
                yield "\" checked=\"checked\" />
                          ";
                // line 782
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 782);
                yield "
                          ";
            } else {
                // line 784
                yield "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 784);
                yield "\" />
                          ";
                // line 785
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 785);
                yield "
                          ";
            }
            // line 786
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 788
        yield " </div>
                    ";
        // line 789
        if ((($tmp = ($context["error_complete_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 790
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_complete_status"] ?? null);
            yield "</div>
                    ";
        }
        // line 791
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 794
        yield ($context["help_fraud_status"] ?? null);
        yield "\">";
        yield ($context["entry_fraud_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">                      
                      ";
        // line 797
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 798
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 798) == ($context["config_fraud_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 799
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 799);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 799);
                yield "</option>                      
                      ";
            } else {
                // line 800
                yield "                      
                      <option value=\"";
                // line 801
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 801);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 801);
                yield "</option>                      
                      ";
            }
            // line 803
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
        // line 808
        yield ($context["help_api"] ?? null);
        yield "\">";
        yield ($context["entry_api"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 811
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 812
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 813
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 813) == ($context["config_api_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 814
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 814);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 814);
                yield "</option>                      
                      ";
            } else {
                // line 815
                yield "                      
                      <option value=\"";
                // line 816
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 816);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 816);
                yield "</option>                      
                      ";
            }
            // line 818
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
        // line 824
        yield ($context["text_stock"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 826
        yield ($context["help_stock_display"] ?? null);
        yield "\">";
        yield ($context["entry_stock_display"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 828
        if ((($tmp = ($context["config_stock_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 829
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 830
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 832
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 833
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 834
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 835
        if ((($tmp =  !($context["config_stock_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 836
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 837
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 839
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 840
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 841
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 845
        yield ($context["help_stock_warning"] ?? null);
        yield "\">";
        yield ($context["entry_stock_warning"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 847
        if ((($tmp = ($context["config_stock_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 848
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 849
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 851
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 852
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 853
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 854
        if ((($tmp =  !($context["config_stock_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 855
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 856
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 858
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 859
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 860
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 864
        yield ($context["help_stock_checkout"] ?? null);
        yield "\">";
        yield ($context["entry_stock_checkout"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 866
        if ((($tmp = ($context["config_stock_checkout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 867
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 868
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 870
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 871
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 872
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 873
        if ((($tmp =  !($context["config_stock_checkout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 874
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 875
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 877
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 878
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 879
        yield " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 884
        yield ($context["text_affiliate"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 886
        yield ($context["entry_affiliate_group"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">                      
                      ";
        // line 889
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 890
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 890) == ($context["config_affiliate_group_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 891
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 891);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 891);
                yield "</option>                      
                      ";
            } else {
                // line 892
                yield "                      
                      <option value=\"";
                // line 893
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 893);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 893);
                yield "</option>                      
                      ";
            }
            // line 895
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
        // line 900
        yield ($context["help_affiliate_approval"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_approval"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 902
        if ((($tmp = ($context["config_affiliate_approval"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 903
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 904
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 906
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 907
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 908
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 909
        if ((($tmp =  !($context["config_affiliate_approval"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 910
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 911
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 913
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 914
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 915
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 919
        yield ($context["help_affiliate_auto"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_auto"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 921
        if ((($tmp = ($context["config_affiliate_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 922
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 923
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 925
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 926
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 927
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 928
        if ((($tmp =  !($context["config_affiliate_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 929
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 930
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 932
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 933
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 934
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 938
        yield ($context["help_affiliate_commission"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 940
        yield ($context["config_affiliate_commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 944
        yield ($context["help_affiliate"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 947
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 948
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 949
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 949) == ($context["config_affiliate_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 950
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 950);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 950);
                yield "</option>                      
                      ";
            } else {
                // line 951
                yield "                      
                      <option value=\"";
                // line 952
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 952);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 952);
                yield "</option>                      
                      ";
            }
            // line 954
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
        // line 960
        yield ($context["text_return"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 962
        yield ($context["help_return"] ?? null);
        yield "\">";
        yield ($context["entry_return"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 965
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 966
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 967
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 967) == ($context["config_return_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 968
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 968);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 968);
                yield "</option>                      
                      ";
            } else {
                // line 969
                yield "                      
                      <option value=\"";
                // line 970
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 970);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 970);
                yield "</option>                      
                      ";
            }
            // line 972
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
        // line 977
        yield ($context["help_return_status"] ?? null);
        yield "\">";
        yield ($context["entry_return_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      ";
        // line 980
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 981
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 981) == ($context["config_return_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 982
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 982);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 982);
                yield "</option>                      
                      ";
            } else {
                // line 983
                yield "                      
                      <option value=\"";
                // line 984
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 984);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 984);
                yield "</option>                      
                      ";
            }
            // line 986
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
        // line 992
        yield ($context["text_captcha"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 994
        yield ($context["help_captcha"] ?? null);
        yield "\">";
        yield ($context["entry_captcha"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 997
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 998
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 999
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 999) == ($context["config_captcha"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 1000
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1000);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1000);
                yield "</option>                      
                      ";
            } else {
                // line 1001
                yield "                      
                      <option value=\"";
                // line 1002
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1002);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1002);
                yield "</option>                      
                      ";
            }
            // line 1004
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
        // line 1009
        yield ($context["entry_captcha_page"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1011
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1012
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 1013
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1013), ($context["config_captcha_page"] ?? null))) {
                // line 1014
                yield "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1014);
                yield "\" checked=\"checked\" />
                          ";
                // line 1015
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1015);
                yield "
                          ";
            } else {
                // line 1017
                yield "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1017);
                yield "\" />
                          ";
                // line 1018
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1018);
                yield "
                          ";
            }
            // line 1019
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha_page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1021
        yield " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1028
        yield ($context["entry_logo"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\">
                    <img src=\"";
        // line 1031
        yield ($context["logo"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" />
                  </a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1033
        yield ($context["config_logo"] ?? null);
        yield "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1037
        yield ($context["help_icon"] ?? null);
        yield "\">";
        yield ($context["entry_icon"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1038
        yield ($context["icon"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1039
        yield ($context["config_icon"] ?? null);
        yield "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1045
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1047
        yield ($context["help_mail_engine"] ?? null);
        yield "\">";
        yield ($context["entry_mail_engine"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      ";
        // line 1050
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            yield "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1051
            yield ($context["text_mail"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 1052
            yield "                      
                      <option value=\"mail\">";
            // line 1053
            yield ($context["text_mail"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 1055
        yield "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            yield "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1056
            yield ($context["text_smtp"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 1057
            yield "                      
                      <option value=\"smtp\">";
            // line 1058
            yield ($context["text_smtp"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 1059
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1064
        yield ($context["help_mail_parameter"] ?? null);
        yield "\">";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1066
        yield ($context["config_mail_parameter"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1070
        yield ($context["help_mail_smtp_hostname"] ?? null);
        yield "\">";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1072
        yield ($context["config_mail_smtp_hostname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1076
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1078
        yield ($context["config_mail_smtp_username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1082
        yield ($context["help_mail_smtp_password"] ?? null);
        yield "\">";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1084
        yield ($context["config_mail_smtp_password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1088
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1090
        yield ($context["config_mail_smtp_port"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1094
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1096
        yield ($context["config_mail_smtp_timeout"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1101
        yield ($context["text_mail_alert"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1103
        yield ($context["help_mail_alert"] ?? null);
        yield "\">";
        yield ($context["entry_mail_alert"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1106
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 1107
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1107), ($context["config_mail_alert"] ?? null))) {
                // line 1108
                yield "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1108);
                yield "\" checked=\"checked\" />
                          ";
                // line 1109
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1109);
                yield "
                          ";
            } else {
                // line 1111
                yield "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1111);
                yield "\" />
                          ";
                // line 1112
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1112);
                yield "
                          ";
            }
            // line 1113
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mail_alert'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1115
        yield " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1119
        yield ($context["help_mail_alert_email"] ?? null);
        yield "\">";
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1121
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
        // line 1128
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1130
        yield ($context["help_maintenance"] ?? null);
        yield "\">";
        yield ($context["entry_maintenance"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1132
        if ((($tmp = ($context["config_maintenance"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1133
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1134
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1136
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1137
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1138
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1139
        if ((($tmp =  !($context["config_maintenance"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1140
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1141
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1143
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1144
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1145
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1149
        yield ($context["help_seo_url"] ?? null);
        yield "\">";
        yield ($context["entry_seo_url"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1151
        if ((($tmp = ($context["config_seo_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1152
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1153
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1155
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1156
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1157
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1158
        if ((($tmp =  !($context["config_seo_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1159
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1160
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1162
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1163
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1164
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1168
        yield ($context["help_robots"] ?? null);
        yield "\">";
        yield ($context["entry_robots"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1170
        yield ($context["entry_robots"] ?? null);
        yield "\" id=\"input-robots\" class=\"form-control\">";
        yield ($context["config_robots"] ?? null);
        yield "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1174
        yield ($context["help_compression"] ?? null);
        yield "\">";
        yield ($context["entry_compression"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1176
        yield ($context["config_compression"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_compression"] ?? null);
        yield "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1181
        yield ($context["text_security"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1183
        yield ($context["help_secure"] ?? null);
        yield "\">";
        yield ($context["entry_secure"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1185
        if ((($tmp = ($context["config_secure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1186
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1187
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1189
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1190
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1191
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1192
        if ((($tmp =  !($context["config_secure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1193
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1194
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1196
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1197
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1198
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1202
        yield ($context["help_password"] ?? null);
        yield "\">";
        yield ($context["entry_password"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1204
        if ((($tmp = ($context["config_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1205
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1206
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1208
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1209
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1210
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1211
        if ((($tmp =  !($context["config_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1212
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1213
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1215
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1216
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1217
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1221
        yield ($context["help_shared"] ?? null);
        yield "\">";
        yield ($context["entry_shared"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1223
        if ((($tmp = ($context["config_shared"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1224
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1225
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1227
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1228
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1229
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1230
        if ((($tmp =  !($context["config_shared"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1231
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1232
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1234
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1235
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1236
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1240
        yield ($context["help_encryption"] ?? null);
        yield "\">";
        yield ($context["entry_encryption"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1242
        yield ($context["entry_encryption"] ?? null);
        yield "\" id=\"input-encryption\" class=\"form-control\">";
        yield ($context["config_encryption"] ?? null);
        yield "</textarea>
                    ";
        // line 1243
        if ((($tmp = ($context["error_encryption"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1244
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_encryption"] ?? null);
            yield "</div>
                    ";
        }
        // line 1245
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1249
        yield ($context["text_upload"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1251
        yield ($context["help_file_max_size"] ?? null);
        yield "\">";
        yield ($context["entry_file_max_size"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1253
        yield ($context["config_file_max_size"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_file_max_size"] ?? null);
        yield "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1257
        yield ($context["help_file_ext_allowed"] ?? null);
        yield "\">";
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1259
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        yield ($context["config_file_ext_allowed"] ?? null);
        yield "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1263
        yield ($context["help_file_mime_allowed"] ?? null);
        yield "\">";
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1265
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        yield ($context["config_file_mime_allowed"] ?? null);
        yield "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1270
        yield ($context["text_error"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1272
        yield ($context["entry_error_display"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1274
        if ((($tmp = ($context["config_error_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1275
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1276
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1278
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1279
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1280
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1281
        if ((($tmp =  !($context["config_error_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1282
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1283
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1285
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1286
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1287
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1291
        yield ($context["entry_error_log"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1293
        if ((($tmp = ($context["config_error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1294
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1295
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1297
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1298
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1299
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1300
        if ((($tmp =  !($context["config_error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1301
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1302
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1304
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1305
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1306
        yield "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1310
        yield ($context["entry_error_filename"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1312
        yield ($context["config_error_filename"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_error_filename"] ?? null);
        yield "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1313
        if ((($tmp = ($context["error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1314
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_log"] ?? null);
            yield "</div>
                    ";
        }
        // line 1315
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
        // line 1325
        yield ($context["placeholder"] ?? null);
        yield "';
    var entry_title = '";
        // line 1326
        yield ($context["entry_title"] ?? null);
        yield "';

    function addIcon() {
        var table = \$('#tab-repeater tbody'); // твоя таблиця
        var index = table.find('tr').length;

        // генеруємо колонки для всіх мов
        var titleColumns = '';
        ";
        // line 1334
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1335
            yield "        titleColumns += `
            <td class=\"text-left\">
                <input type=\"text\" name=\"config_icons_repeater[\${index}][title][";
            // line 1337
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1337);
            yield "]\" value=\"\" placeholder=\"\${entry_title}\" class=\"form-control\" />
            </td>`;
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1340
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
        // line 1366
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
        // line 1388
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
        // line 1397
        yield ($context["text_select"] ?? null);
        yield "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1403
        yield ($context["config_zone_id"] ?? null);
        yield "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1410
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
        // line 1431
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
        return array (  3932 => 1431,  3908 => 1410,  3898 => 1403,  3889 => 1397,  3877 => 1388,  3852 => 1366,  3824 => 1340,  3815 => 1337,  3811 => 1335,  3807 => 1334,  3796 => 1326,  3792 => 1325,  3780 => 1315,  3774 => 1314,  3772 => 1313,  3766 => 1312,  3761 => 1310,  3755 => 1306,  3750 => 1305,  3747 => 1304,  3742 => 1302,  3739 => 1301,  3737 => 1300,  3734 => 1299,  3729 => 1298,  3726 => 1297,  3721 => 1295,  3718 => 1294,  3716 => 1293,  3711 => 1291,  3705 => 1287,  3700 => 1286,  3697 => 1285,  3692 => 1283,  3689 => 1282,  3687 => 1281,  3684 => 1280,  3679 => 1279,  3676 => 1278,  3671 => 1276,  3668 => 1275,  3666 => 1274,  3661 => 1272,  3656 => 1270,  3646 => 1265,  3639 => 1263,  3630 => 1259,  3623 => 1257,  3614 => 1253,  3607 => 1251,  3602 => 1249,  3596 => 1245,  3590 => 1244,  3588 => 1243,  3582 => 1242,  3575 => 1240,  3569 => 1236,  3564 => 1235,  3561 => 1234,  3556 => 1232,  3553 => 1231,  3551 => 1230,  3548 => 1229,  3543 => 1228,  3540 => 1227,  3535 => 1225,  3532 => 1224,  3530 => 1223,  3523 => 1221,  3517 => 1217,  3512 => 1216,  3509 => 1215,  3504 => 1213,  3501 => 1212,  3499 => 1211,  3496 => 1210,  3491 => 1209,  3488 => 1208,  3483 => 1206,  3480 => 1205,  3478 => 1204,  3471 => 1202,  3465 => 1198,  3460 => 1197,  3457 => 1196,  3452 => 1194,  3449 => 1193,  3447 => 1192,  3444 => 1191,  3439 => 1190,  3436 => 1189,  3431 => 1187,  3428 => 1186,  3426 => 1185,  3419 => 1183,  3414 => 1181,  3404 => 1176,  3397 => 1174,  3388 => 1170,  3381 => 1168,  3375 => 1164,  3370 => 1163,  3367 => 1162,  3362 => 1160,  3359 => 1159,  3357 => 1158,  3354 => 1157,  3349 => 1156,  3346 => 1155,  3341 => 1153,  3338 => 1152,  3336 => 1151,  3329 => 1149,  3323 => 1145,  3318 => 1144,  3315 => 1143,  3310 => 1141,  3307 => 1140,  3305 => 1139,  3302 => 1138,  3297 => 1137,  3294 => 1136,  3289 => 1134,  3286 => 1133,  3284 => 1132,  3277 => 1130,  3272 => 1128,  3260 => 1121,  3253 => 1119,  3247 => 1115,  3239 => 1113,  3234 => 1112,  3229 => 1111,  3224 => 1109,  3219 => 1108,  3217 => 1107,  3214 => 1106,  3210 => 1105,  3203 => 1103,  3198 => 1101,  3188 => 1096,  3183 => 1094,  3174 => 1090,  3169 => 1088,  3160 => 1084,  3153 => 1082,  3144 => 1078,  3139 => 1076,  3130 => 1072,  3123 => 1070,  3114 => 1066,  3107 => 1064,  3100 => 1059,  3095 => 1058,  3092 => 1057,  3087 => 1056,  3082 => 1055,  3077 => 1053,  3074 => 1052,  3069 => 1051,  3065 => 1050,  3057 => 1047,  3052 => 1045,  3043 => 1039,  3037 => 1038,  3031 => 1037,  3024 => 1033,  3017 => 1031,  3011 => 1028,  3002 => 1021,  2994 => 1019,  2989 => 1018,  2984 => 1017,  2979 => 1015,  2974 => 1014,  2972 => 1013,  2969 => 1012,  2965 => 1011,  2960 => 1009,  2948 => 1004,  2941 => 1002,  2938 => 1001,  2931 => 1000,  2926 => 999,  2922 => 998,  2918 => 997,  2910 => 994,  2905 => 992,  2892 => 986,  2885 => 984,  2882 => 983,  2875 => 982,  2870 => 981,  2866 => 980,  2858 => 977,  2846 => 972,  2839 => 970,  2836 => 969,  2829 => 968,  2824 => 967,  2820 => 966,  2816 => 965,  2808 => 962,  2803 => 960,  2790 => 954,  2783 => 952,  2780 => 951,  2773 => 950,  2768 => 949,  2764 => 948,  2760 => 947,  2752 => 944,  2743 => 940,  2736 => 938,  2730 => 934,  2725 => 933,  2722 => 932,  2717 => 930,  2714 => 929,  2712 => 928,  2709 => 927,  2704 => 926,  2701 => 925,  2696 => 923,  2693 => 922,  2691 => 921,  2684 => 919,  2678 => 915,  2673 => 914,  2670 => 913,  2665 => 911,  2662 => 910,  2660 => 909,  2657 => 908,  2652 => 907,  2649 => 906,  2644 => 904,  2641 => 903,  2639 => 902,  2632 => 900,  2620 => 895,  2613 => 893,  2610 => 892,  2603 => 891,  2598 => 890,  2594 => 889,  2588 => 886,  2583 => 884,  2576 => 879,  2571 => 878,  2568 => 877,  2563 => 875,  2560 => 874,  2558 => 873,  2555 => 872,  2550 => 871,  2547 => 870,  2542 => 868,  2539 => 867,  2537 => 866,  2530 => 864,  2524 => 860,  2519 => 859,  2516 => 858,  2511 => 856,  2508 => 855,  2506 => 854,  2503 => 853,  2498 => 852,  2495 => 851,  2490 => 849,  2487 => 848,  2485 => 847,  2478 => 845,  2472 => 841,  2467 => 840,  2464 => 839,  2459 => 837,  2456 => 836,  2454 => 835,  2451 => 834,  2446 => 833,  2443 => 832,  2438 => 830,  2435 => 829,  2433 => 828,  2426 => 826,  2421 => 824,  2408 => 818,  2401 => 816,  2398 => 815,  2391 => 814,  2386 => 813,  2382 => 812,  2378 => 811,  2370 => 808,  2358 => 803,  2351 => 801,  2348 => 800,  2341 => 799,  2336 => 798,  2332 => 797,  2324 => 794,  2319 => 791,  2313 => 790,  2311 => 789,  2308 => 788,  2300 => 786,  2295 => 785,  2290 => 784,  2285 => 782,  2280 => 781,  2278 => 780,  2275 => 779,  2271 => 778,  2264 => 776,  2259 => 773,  2253 => 772,  2251 => 771,  2248 => 770,  2240 => 768,  2235 => 767,  2230 => 766,  2225 => 764,  2220 => 763,  2218 => 762,  2215 => 761,  2211 => 760,  2204 => 758,  2192 => 753,  2185 => 751,  2182 => 750,  2175 => 749,  2170 => 748,  2166 => 747,  2158 => 744,  2146 => 739,  2139 => 737,  2136 => 736,  2129 => 735,  2124 => 734,  2120 => 733,  2116 => 732,  2108 => 729,  2102 => 725,  2097 => 724,  2094 => 723,  2089 => 721,  2086 => 720,  2084 => 719,  2081 => 718,  2076 => 717,  2073 => 716,  2068 => 714,  2065 => 713,  2063 => 712,  2056 => 710,  2050 => 706,  2045 => 705,  2042 => 704,  2037 => 702,  2034 => 701,  2032 => 700,  2029 => 699,  2024 => 698,  2021 => 697,  2016 => 695,  2013 => 694,  2011 => 693,  2004 => 691,  1995 => 687,  1988 => 685,  1983 => 683,  1970 => 677,  1963 => 675,  1960 => 674,  1953 => 673,  1948 => 672,  1944 => 671,  1940 => 670,  1932 => 667,  1927 => 664,  1921 => 663,  1919 => 662,  1913 => 661,  1906 => 659,  1900 => 655,  1895 => 654,  1892 => 653,  1887 => 651,  1884 => 650,  1882 => 649,  1879 => 648,  1874 => 647,  1871 => 646,  1866 => 644,  1863 => 643,  1861 => 642,  1854 => 640,  1849 => 637,  1843 => 636,  1840 => 635,  1832 => 632,  1827 => 631,  1822 => 630,  1817 => 628,  1812 => 627,  1810 => 626,  1807 => 625,  1803 => 624,  1797 => 623,  1785 => 618,  1778 => 616,  1775 => 615,  1768 => 614,  1763 => 613,  1759 => 612,  1751 => 609,  1745 => 605,  1740 => 604,  1737 => 603,  1732 => 601,  1729 => 600,  1727 => 599,  1724 => 598,  1719 => 597,  1716 => 596,  1711 => 594,  1708 => 593,  1706 => 592,  1701 => 590,  1695 => 586,  1690 => 585,  1687 => 584,  1682 => 582,  1679 => 581,  1677 => 580,  1674 => 579,  1669 => 578,  1666 => 577,  1661 => 575,  1658 => 574,  1656 => 573,  1649 => 571,  1643 => 567,  1638 => 566,  1635 => 565,  1630 => 563,  1627 => 562,  1625 => 561,  1622 => 560,  1617 => 559,  1614 => 558,  1609 => 556,  1606 => 555,  1604 => 554,  1597 => 552,  1592 => 550,  1584 => 544,  1579 => 543,  1576 => 542,  1571 => 541,  1566 => 540,  1561 => 538,  1558 => 537,  1553 => 536,  1549 => 535,  1545 => 534,  1537 => 531,  1530 => 526,  1525 => 525,  1522 => 524,  1517 => 523,  1512 => 522,  1507 => 520,  1504 => 519,  1499 => 518,  1495 => 517,  1491 => 516,  1483 => 513,  1477 => 509,  1472 => 508,  1469 => 507,  1464 => 505,  1461 => 504,  1459 => 503,  1456 => 502,  1451 => 501,  1448 => 500,  1443 => 498,  1440 => 497,  1438 => 496,  1433 => 494,  1428 => 492,  1422 => 488,  1416 => 487,  1414 => 486,  1408 => 485,  1401 => 483,  1396 => 480,  1390 => 479,  1388 => 478,  1382 => 477,  1375 => 475,  1370 => 473,  1363 => 468,  1358 => 467,  1355 => 466,  1350 => 464,  1347 => 463,  1345 => 462,  1342 => 461,  1337 => 460,  1334 => 459,  1329 => 457,  1326 => 456,  1324 => 455,  1317 => 453,  1311 => 449,  1306 => 448,  1303 => 447,  1298 => 445,  1295 => 444,  1293 => 443,  1290 => 442,  1285 => 441,  1282 => 440,  1277 => 438,  1274 => 437,  1272 => 436,  1265 => 434,  1260 => 432,  1254 => 428,  1248 => 427,  1246 => 426,  1240 => 425,  1233 => 423,  1227 => 419,  1222 => 418,  1219 => 417,  1214 => 415,  1211 => 414,  1209 => 413,  1206 => 412,  1201 => 411,  1198 => 410,  1193 => 408,  1190 => 407,  1188 => 406,  1181 => 404,  1176 => 402,  1166 => 397,  1161 => 395,  1152 => 391,  1147 => 389,  1138 => 385,  1133 => 383,  1128 => 381,  1114 => 374,  1107 => 372,  1104 => 371,  1097 => 370,  1092 => 369,  1088 => 368,  1082 => 365,  1070 => 360,  1063 => 358,  1060 => 357,  1053 => 356,  1048 => 355,  1044 => 354,  1038 => 351,  1032 => 347,  1027 => 346,  1024 => 345,  1019 => 343,  1016 => 342,  1014 => 341,  1011 => 340,  1006 => 339,  1003 => 338,  998 => 336,  995 => 335,  993 => 334,  986 => 332,  980 => 328,  974 => 327,  966 => 325,  958 => 323,  955 => 322,  950 => 321,  944 => 319,  938 => 317,  936 => 316,  930 => 313,  918 => 308,  911 => 306,  908 => 305,  901 => 304,  896 => 303,  892 => 302,  884 => 299,  872 => 294,  865 => 292,  862 => 291,  855 => 290,  850 => 289,  846 => 288,  840 => 285,  828 => 280,  821 => 278,  818 => 277,  811 => 276,  806 => 275,  802 => 274,  796 => 271,  790 => 267,  784 => 266,  776 => 264,  768 => 262,  765 => 261,  761 => 260,  755 => 257,  745 => 250,  733 => 245,  726 => 243,  723 => 242,  716 => 241,  711 => 240,  707 => 239,  701 => 236,  696 => 233,  691 => 231,  683 => 229,  678 => 228,  673 => 227,  668 => 225,  663 => 224,  661 => 223,  658 => 222,  654 => 221,  648 => 220,  645 => 219,  643 => 218,  640 => 217,  624 => 213,  619 => 211,  615 => 209,  610 => 208,  602 => 199,  597 => 197,  589 => 191,  583 => 190,  581 => 189,  575 => 188,  570 => 186,  565 => 183,  559 => 182,  557 => 181,  551 => 180,  546 => 178,  543 => 177,  529 => 173,  520 => 171,  517 => 170,  512 => 169,  498 => 165,  489 => 163,  486 => 162,  481 => 161,  467 => 157,  458 => 153,  454 => 152,  450 => 150,  445 => 149,  426 => 144,  418 => 141,  414 => 140,  411 => 139,  407 => 138,  402 => 135,  396 => 134,  394 => 133,  388 => 132,  383 => 130,  378 => 127,  372 => 126,  370 => 125,  364 => 124,  359 => 122,  341 => 111,  334 => 109,  331 => 108,  324 => 107,  319 => 106,  315 => 105,  309 => 102,  295 => 95,  288 => 93,  285 => 92,  278 => 91,  273 => 90,  269 => 89,  263 => 86,  253 => 81,  248 => 79,  244 => 77,  234 => 73,  230 => 72,  226 => 71,  221 => 69,  213 => 66,  209 => 65,  206 => 64,  202 => 63,  199 => 62,  191 => 59,  186 => 54,  182 => 53,  178 => 52,  174 => 51,  165 => 47,  161 => 46,  158 => 45,  154 => 44,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  117 => 31,  111 => 28,  107 => 26,  99 => 22,  96 => 21,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "setting/setting.twig", "");
    }
}
