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
class __TwigTemplate_dd27a3d3d4486c5a1251c850080236dd extends Template
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
                ";
        // line 394
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 395
            yield "                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-sale-line-";
            // line 396
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 396);
            yield "\">
                      ";
            // line 397
            yield ((($context["entry_sale_line"] ?? null)) ? ($context["entry_sale_line"]) : ("Sale line"));
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 397);
            yield ")
                    </label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"config_sale_line[";
            // line 400
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 400);
            yield "]\" rows=\"6\" placeholder=\"";
            yield ((($context["entry_sale_line"] ?? null)) ? ($context["entry_sale_line"]) : ("Sale line"));
            yield "\" id=\"input-sale-line-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 400);
            yield "\" class=\"form-control\">
                        ";
            // line 401
            yield (($_v6 = ($context["config_sale_line"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 401)] ?? null) : null);
            yield "
                      </textarea>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 406
        yield "
                
              </fieldset>
              <fieldset>
                <legend>";
        // line 410
        yield ($context["text_product"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 412
        yield ($context["help_product_count"] ?? null);
        yield "\">";
        yield ($context["entry_product_count"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 414
        if ((($tmp = ($context["config_product_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 415
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 416
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 418
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 419
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 420
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 421
        if ((($tmp =  !($context["config_product_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 422
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 423
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 425
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 426
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 427
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 431
        yield ($context["help_limit_admin"] ?? null);
        yield "\">";
        yield ($context["entry_limit_admin"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 433
        yield ($context["config_limit_admin"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_limit_admin"] ?? null);
        yield "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 434
        if ((($tmp = ($context["error_limit_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 435
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_limit_admin"] ?? null);
            yield "</div>
                    ";
        }
        // line 436
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 440
        yield ($context["text_review"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 442
        yield ($context["help_review"] ?? null);
        yield "\">";
        yield ($context["entry_review"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 444
        if ((($tmp = ($context["config_review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 445
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 446
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 448
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 449
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 450
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 451
        if ((($tmp =  !($context["config_review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 452
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 453
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 455
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 456
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 457
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 461
        yield ($context["help_review_guest"] ?? null);
        yield "\">";
        yield ($context["entry_review_guest"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 463
        if ((($tmp = ($context["config_review_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 464
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 465
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 467
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 468
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 469
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 470
        if ((($tmp =  !($context["config_review_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 471
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 472
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 474
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 475
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 476
        yield " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 481
        yield ($context["text_voucher"] ?? null);
        yield "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 483
        yield ($context["help_voucher_min"] ?? null);
        yield "\">";
        yield ($context["entry_voucher_min"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 485
        yield ($context["config_voucher_min"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_voucher_min"] ?? null);
        yield "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 486
        if ((($tmp = ($context["error_voucher_min"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 487
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_voucher_min"] ?? null);
            yield "</div>
                    ";
        }
        // line 488
        yield " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 491
        yield ($context["help_voucher_max"] ?? null);
        yield "\">";
        yield ($context["entry_voucher_max"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 493
        yield ($context["config_voucher_max"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_voucher_max"] ?? null);
        yield "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 494
        if ((($tmp = ($context["error_voucher_max"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 495
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_voucher_max"] ?? null);
            yield "</div>
                    ";
        }
        // line 496
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 500
        yield ($context["text_tax"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 502
        yield ($context["entry_tax"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 504
        if ((($tmp = ($context["config_tax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 505
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 506
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 508
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 509
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 510
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 511
        if ((($tmp =  !($context["config_tax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 512
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 513
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 515
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 516
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 517
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 521
        yield ($context["help_tax_default"] ?? null);
        yield "\">";
        yield ($context["entry_tax_default"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 524
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 525
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            yield "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 526
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 527
            yield "                      
                      <option value=\"shipping\">";
            // line 528
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 530
        yield "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            yield "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 531
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 532
            yield "                      
                      <option value=\"payment\">";
            // line 533
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 534
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 539
        yield ($context["help_tax_customer"] ?? null);
        yield "\">";
        yield ($context["entry_tax_customer"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 542
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 543
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            yield "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 544
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 545
            yield "                      
                      <option value=\"shipping\">";
            // line 546
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 548
        yield "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            yield "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 549
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 550
            yield "                      
                      <option value=\"payment\">";
            // line 551
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 552
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 558
        yield ($context["text_account"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 560
        yield ($context["help_customer_online"] ?? null);
        yield "\">";
        yield ($context["entry_customer_online"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 562
        if ((($tmp = ($context["config_customer_online"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 563
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 564
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 566
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 567
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 568
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 569
        if ((($tmp =  !($context["config_customer_online"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 570
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 571
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 573
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 574
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 575
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 579
        yield ($context["help_customer_activity"] ?? null);
        yield "\">";
        yield ($context["entry_customer_activity"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 581
        if ((($tmp = ($context["config_customer_activity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 582
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 583
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 585
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 586
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 587
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 588
        if ((($tmp =  !($context["config_customer_activity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 589
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 590
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 592
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 593
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 594
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 598
        yield ($context["entry_customer_search"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 600
        if ((($tmp = ($context["config_customer_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 601
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 602
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 604
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 605
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 606
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 607
        if ((($tmp =  !($context["config_customer_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 608
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 609
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 611
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 612
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 613
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 617
        yield ($context["help_customer_group"] ?? null);
        yield "\">";
        yield ($context["entry_customer_group"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      ";
        // line 620
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 621
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 621) == ($context["config_customer_group_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 622
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 622);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 622);
                yield "</option>                      
                      ";
            } else {
                // line 623
                yield "                      
                      <option value=\"";
                // line 624
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 624);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 624);
                yield "</option>                      
                      ";
            }
            // line 626
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
        // line 631
        yield ($context["help_customer_group_display"] ?? null);
        yield "\">";
        yield ($context["entry_customer_group_display"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 632
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 633
            yield "                    <div class=\"checkbox\">
                      <label> ";
            // line 634
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 634), ($context["config_customer_group_display"] ?? null))) {
                // line 635
                yield "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 635);
                yield "\" checked=\"checked\" />
                        ";
                // line 636
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 636);
                yield "
                        ";
            } else {
                // line 638
                yield "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 638);
                yield "\" />
                        ";
                // line 639
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 639);
                yield "
                        ";
            }
            // line 640
            yield " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 643
        yield "                    ";
        if ((($tmp = ($context["error_customer_group_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 644
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_customer_group_display"] ?? null);
            yield "</div>
                    ";
        }
        // line 645
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 648
        yield ($context["help_customer_price"] ?? null);
        yield "\">";
        yield ($context["entry_customer_price"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 650
        if ((($tmp = ($context["config_customer_price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 651
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 652
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 654
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 655
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 656
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 657
        if ((($tmp =  !($context["config_customer_price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 658
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 659
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 661
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 662
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 663
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 667
        yield ($context["help_login_attempts"] ?? null);
        yield "\">";
        yield ($context["entry_login_attempts"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 669
        yield ($context["config_login_attempts"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_login_attempts"] ?? null);
        yield "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 670
        if ((($tmp = ($context["error_login_attempts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 671
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_login_attempts"] ?? null);
            yield "</div>
                    ";
        }
        // line 672
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 675
        yield ($context["help_account"] ?? null);
        yield "\">";
        yield ($context["entry_account"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 678
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 679
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 680
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 680) == ($context["config_account_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 681
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 681);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 681);
                yield "</option>                      
                      ";
            } else {
                // line 682
                yield "                      
                      <option value=\"";
                // line 683
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 683);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 683);
                yield "</option>                      
                      ";
            }
            // line 685
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
        // line 691
        yield ($context["text_checkout"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 693
        yield ($context["help_invoice_prefix"] ?? null);
        yield "\">";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 695
        yield ($context["config_invoice_prefix"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 699
        yield ($context["help_cart_weight"] ?? null);
        yield "\">";
        yield ($context["entry_cart_weight"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 701
        if ((($tmp = ($context["config_cart_weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 702
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 703
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 705
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 706
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 707
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 708
        if ((($tmp =  !($context["config_cart_weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 709
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 710
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 712
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 713
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 714
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 718
        yield ($context["help_checkout_guest"] ?? null);
        yield "\">";
        yield ($context["entry_checkout_guest"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 720
        if ((($tmp = ($context["config_checkout_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 721
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 722
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 724
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 725
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 726
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 727
        if ((($tmp =  !($context["config_checkout_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 728
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 729
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 731
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 732
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 733
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 737
        yield ($context["help_checkout"] ?? null);
        yield "\">";
        yield ($context["entry_checkout"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 740
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 741
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 742
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 742) == ($context["config_checkout_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 743
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 743);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 743);
                yield "</option>                      
                      ";
            } else {
                // line 744
                yield "                      
                      <option value=\"";
                // line 745
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 745);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 745);
                yield "</option>                      
                      ";
            }
            // line 747
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
        // line 752
        yield ($context["help_order_status"] ?? null);
        yield "\">";
        yield ($context["entry_order_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      ";
        // line 755
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 756
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 756) == ($context["config_order_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 757
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 757);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 757);
                yield "</option>                      
                      ";
            } else {
                // line 758
                yield "                      
                      <option value=\"";
                // line 759
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 759);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 759);
                yield "</option>                      
                      ";
            }
            // line 761
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
        // line 766
        yield ($context["help_processing_status"] ?? null);
        yield "\">";
        yield ($context["entry_processing_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 768
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 769
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 770
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 770), ($context["config_processing_status"] ?? null))) {
                // line 771
                yield "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 771);
                yield "\" checked=\"checked\" />
                          ";
                // line 772
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 772);
                yield "
                          ";
            } else {
                // line 774
                yield "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 774);
                yield "\" />
                          ";
                // line 775
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 775);
                yield "
                          ";
            }
            // line 776
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 778
        yield " </div>
                    ";
        // line 779
        if ((($tmp = ($context["error_processing_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 780
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_processing_status"] ?? null);
            yield "</div>
                    ";
        }
        // line 781
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 784
        yield ($context["help_complete_status"] ?? null);
        yield "\">";
        yield ($context["entry_complete_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 786
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 787
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 788
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 788), ($context["config_complete_status"] ?? null))) {
                // line 789
                yield "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 789);
                yield "\" checked=\"checked\" />
                          ";
                // line 790
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 790);
                yield "
                          ";
            } else {
                // line 792
                yield "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 792);
                yield "\" />
                          ";
                // line 793
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 793);
                yield "
                          ";
            }
            // line 794
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 796
        yield " </div>
                    ";
        // line 797
        if ((($tmp = ($context["error_complete_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 798
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_complete_status"] ?? null);
            yield "</div>
                    ";
        }
        // line 799
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 802
        yield ($context["help_fraud_status"] ?? null);
        yield "\">";
        yield ($context["entry_fraud_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">                      
                      ";
        // line 805
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 806
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 806) == ($context["config_fraud_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 807
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 807);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 807);
                yield "</option>                      
                      ";
            } else {
                // line 808
                yield "                      
                      <option value=\"";
                // line 809
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 809);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 809);
                yield "</option>                      
                      ";
            }
            // line 811
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
        // line 816
        yield ($context["help_api"] ?? null);
        yield "\">";
        yield ($context["entry_api"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 819
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 820
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 821
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 821) == ($context["config_api_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 822
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 822);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 822);
                yield "</option>                      
                      ";
            } else {
                // line 823
                yield "                      
                      <option value=\"";
                // line 824
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 824);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 824);
                yield "</option>                      
                      ";
            }
            // line 826
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
        // line 832
        yield ($context["text_stock"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 834
        yield ($context["help_stock_display"] ?? null);
        yield "\">";
        yield ($context["entry_stock_display"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 836
        if ((($tmp = ($context["config_stock_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 837
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 838
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 840
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 841
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 842
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 843
        if ((($tmp =  !($context["config_stock_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 844
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 845
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 847
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 848
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 849
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 853
        yield ($context["help_stock_warning"] ?? null);
        yield "\">";
        yield ($context["entry_stock_warning"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 855
        if ((($tmp = ($context["config_stock_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 856
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 857
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 859
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 860
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 861
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 862
        if ((($tmp =  !($context["config_stock_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 863
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 864
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 866
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 867
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 868
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 872
        yield ($context["help_stock_checkout"] ?? null);
        yield "\">";
        yield ($context["entry_stock_checkout"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 874
        if ((($tmp = ($context["config_stock_checkout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 875
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 876
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 878
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 879
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 880
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 881
        if ((($tmp =  !($context["config_stock_checkout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 882
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 883
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 885
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 886
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 887
        yield " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 892
        yield ($context["text_affiliate"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 894
        yield ($context["entry_affiliate_group"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">                      
                      ";
        // line 897
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 898
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 898) == ($context["config_affiliate_group_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 899
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 899);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 899);
                yield "</option>                      
                      ";
            } else {
                // line 900
                yield "                      
                      <option value=\"";
                // line 901
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 901);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 901);
                yield "</option>                      
                      ";
            }
            // line 903
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
        // line 908
        yield ($context["help_affiliate_approval"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_approval"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 910
        if ((($tmp = ($context["config_affiliate_approval"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 911
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 912
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 914
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 915
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 916
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 917
        if ((($tmp =  !($context["config_affiliate_approval"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 918
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 919
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 921
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 922
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 923
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 927
        yield ($context["help_affiliate_auto"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_auto"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 929
        if ((($tmp = ($context["config_affiliate_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 930
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 931
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 933
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 934
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 935
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 936
        if ((($tmp =  !($context["config_affiliate_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 937
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 938
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 940
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 941
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 942
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 946
        yield ($context["help_affiliate_commission"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 948
        yield ($context["config_affiliate_commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 952
        yield ($context["help_affiliate"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 955
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 956
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 957
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 957) == ($context["config_affiliate_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 958
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 958);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 958);
                yield "</option>                      
                      ";
            } else {
                // line 959
                yield "                      
                      <option value=\"";
                // line 960
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 960);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 960);
                yield "</option>                      
                      ";
            }
            // line 962
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
        // line 968
        yield ($context["text_return"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 970
        yield ($context["help_return"] ?? null);
        yield "\">";
        yield ($context["entry_return"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 973
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 974
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 975
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 975) == ($context["config_return_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 976
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 976);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 976);
                yield "</option>                      
                      ";
            } else {
                // line 977
                yield "                      
                      <option value=\"";
                // line 978
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 978);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 978);
                yield "</option>                      
                      ";
            }
            // line 980
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
        // line 985
        yield ($context["help_return_status"] ?? null);
        yield "\">";
        yield ($context["entry_return_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      ";
        // line 988
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 989
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 989) == ($context["config_return_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 990
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 990);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 990);
                yield "</option>                      
                      ";
            } else {
                // line 991
                yield "                      
                      <option value=\"";
                // line 992
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 992);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 992);
                yield "</option>                      
                      ";
            }
            // line 994
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
        // line 1000
        yield ($context["text_captcha"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1002
        yield ($context["help_captcha"] ?? null);
        yield "\">";
        yield ($context["entry_captcha"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1005
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 1006
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1007
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1007) == ($context["config_captcha"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 1008
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1008);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1008);
                yield "</option>                      
                      ";
            } else {
                // line 1009
                yield "                      
                      <option value=\"";
                // line 1010
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1010);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1010);
                yield "</option>                      
                      ";
            }
            // line 1012
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
        // line 1017
        yield ($context["entry_captcha_page"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1019
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1020
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 1021
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1021), ($context["config_captcha_page"] ?? null))) {
                // line 1022
                yield "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1022);
                yield "\" checked=\"checked\" />
                          ";
                // line 1023
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1023);
                yield "
                          ";
            } else {
                // line 1025
                yield "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1025);
                yield "\" />
                          ";
                // line 1026
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1026);
                yield "
                          ";
            }
            // line 1027
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha_page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1029
        yield " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1036
        yield ($context["entry_logo"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\">
                    <img src=\"";
        // line 1039
        yield ($context["logo"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" />
                  </a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1041
        yield ($context["config_logo"] ?? null);
        yield "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1045
        yield ($context["help_icon"] ?? null);
        yield "\">";
        yield ($context["entry_icon"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1046
        yield ($context["icon"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1047
        yield ($context["config_icon"] ?? null);
        yield "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1053
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1055
        yield ($context["help_mail_engine"] ?? null);
        yield "\">";
        yield ($context["entry_mail_engine"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      ";
        // line 1058
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            yield "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1059
            yield ($context["text_mail"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 1060
            yield "                      
                      <option value=\"mail\">";
            // line 1061
            yield ($context["text_mail"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 1063
        yield "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            yield "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1064
            yield ($context["text_smtp"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 1065
            yield "                      
                      <option value=\"smtp\">";
            // line 1066
            yield ($context["text_smtp"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 1067
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1072
        yield ($context["help_mail_parameter"] ?? null);
        yield "\">";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1074
        yield ($context["config_mail_parameter"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1078
        yield ($context["help_mail_smtp_hostname"] ?? null);
        yield "\">";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1080
        yield ($context["config_mail_smtp_hostname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1084
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1086
        yield ($context["config_mail_smtp_username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1090
        yield ($context["help_mail_smtp_password"] ?? null);
        yield "\">";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1092
        yield ($context["config_mail_smtp_password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1096
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1098
        yield ($context["config_mail_smtp_port"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1102
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1104
        yield ($context["config_mail_smtp_timeout"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1109
        yield ($context["text_mail_alert"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1111
        yield ($context["help_mail_alert"] ?? null);
        yield "\">";
        yield ($context["entry_mail_alert"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1114
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 1115
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1115), ($context["config_mail_alert"] ?? null))) {
                // line 1116
                yield "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1116);
                yield "\" checked=\"checked\" />
                          ";
                // line 1117
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1117);
                yield "
                          ";
            } else {
                // line 1119
                yield "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1119);
                yield "\" />
                          ";
                // line 1120
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1120);
                yield "
                          ";
            }
            // line 1121
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mail_alert'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1123
        yield " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1127
        yield ($context["help_mail_alert_email"] ?? null);
        yield "\">";
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1129
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
        // line 1136
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1138
        yield ($context["help_maintenance"] ?? null);
        yield "\">";
        yield ($context["entry_maintenance"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1140
        if ((($tmp = ($context["config_maintenance"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1141
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1142
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1144
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1145
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1146
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1147
        if ((($tmp =  !($context["config_maintenance"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1148
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1149
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1151
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1152
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1153
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1157
        yield ($context["help_seo_url"] ?? null);
        yield "\">";
        yield ($context["entry_seo_url"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1159
        if ((($tmp = ($context["config_seo_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1160
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1161
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1163
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1164
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1165
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1166
        if ((($tmp =  !($context["config_seo_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1167
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1168
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1170
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1171
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1172
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1176
        yield ($context["help_robots"] ?? null);
        yield "\">";
        yield ($context["entry_robots"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1178
        yield ($context["entry_robots"] ?? null);
        yield "\" id=\"input-robots\" class=\"form-control\">";
        yield ($context["config_robots"] ?? null);
        yield "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1182
        yield ($context["help_compression"] ?? null);
        yield "\">";
        yield ($context["entry_compression"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1184
        yield ($context["config_compression"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_compression"] ?? null);
        yield "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1189
        yield ($context["text_security"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1191
        yield ($context["help_secure"] ?? null);
        yield "\">";
        yield ($context["entry_secure"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1193
        if ((($tmp = ($context["config_secure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1194
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1195
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1197
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1198
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1199
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1200
        if ((($tmp =  !($context["config_secure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1201
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1202
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1204
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1205
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1206
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1210
        yield ($context["help_password"] ?? null);
        yield "\">";
        yield ($context["entry_password"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1212
        if ((($tmp = ($context["config_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1213
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1214
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1216
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1217
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1218
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1219
        if ((($tmp =  !($context["config_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1220
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1221
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1223
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1224
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1225
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1229
        yield ($context["help_shared"] ?? null);
        yield "\">";
        yield ($context["entry_shared"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1231
        if ((($tmp = ($context["config_shared"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1232
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1233
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1235
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1236
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1237
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1238
        if ((($tmp =  !($context["config_shared"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1239
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1240
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1242
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1243
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1244
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1248
        yield ($context["help_encryption"] ?? null);
        yield "\">";
        yield ($context["entry_encryption"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1250
        yield ($context["entry_encryption"] ?? null);
        yield "\" id=\"input-encryption\" class=\"form-control\">";
        yield ($context["config_encryption"] ?? null);
        yield "</textarea>
                    ";
        // line 1251
        if ((($tmp = ($context["error_encryption"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1252
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_encryption"] ?? null);
            yield "</div>
                    ";
        }
        // line 1253
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1257
        yield ($context["text_upload"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1259
        yield ($context["help_file_max_size"] ?? null);
        yield "\">";
        yield ($context["entry_file_max_size"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1261
        yield ($context["config_file_max_size"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_file_max_size"] ?? null);
        yield "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1265
        yield ($context["help_file_ext_allowed"] ?? null);
        yield "\">";
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1267
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        yield ($context["config_file_ext_allowed"] ?? null);
        yield "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1271
        yield ($context["help_file_mime_allowed"] ?? null);
        yield "\">";
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1273
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        yield ($context["config_file_mime_allowed"] ?? null);
        yield "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1278
        yield ($context["text_error"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1280
        yield ($context["entry_error_display"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1282
        if ((($tmp = ($context["config_error_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1283
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1284
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1286
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1287
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1288
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1289
        if ((($tmp =  !($context["config_error_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1290
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1291
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1293
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1294
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1295
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1299
        yield ($context["entry_error_log"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1301
        if ((($tmp = ($context["config_error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1302
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1303
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1305
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1306
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1307
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1308
        if ((($tmp =  !($context["config_error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1309
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1310
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1312
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1313
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1314
        yield "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1318
        yield ($context["entry_error_filename"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1320
        yield ($context["config_error_filename"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_error_filename"] ?? null);
        yield "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1321
        if ((($tmp = ($context["error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1322
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_log"] ?? null);
            yield "</div>
                    ";
        }
        // line 1323
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
        // line 1333
        yield ($context["placeholder"] ?? null);
        yield "';
    var entry_title = '";
        // line 1334
        yield ($context["entry_title"] ?? null);
        yield "';

    function addIcon() {
        var table = \$('#tab-repeater tbody'); // твоя таблиця
        var index = table.find('tr').length;

        // генеруємо колонки для всіх мов
        var titleColumns = '';
        ";
        // line 1342
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1343
            yield "        titleColumns += `
            <td class=\"text-left\">
                <input type=\"text\" name=\"config_icons_repeater[\${index}][title][";
            // line 1345
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1345);
            yield "]\" value=\"\" placeholder=\"\${entry_title}\" class=\"form-control\" />
            </td>`;
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1348
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
        // line 1374
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
        // line 1396
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
        // line 1405
        yield ($context["text_select"] ?? null);
        yield "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1411
        yield ($context["config_zone_id"] ?? null);
        yield "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1418
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
        // line 1439
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
        return array (  3960 => 1439,  3936 => 1418,  3926 => 1411,  3917 => 1405,  3905 => 1396,  3880 => 1374,  3852 => 1348,  3843 => 1345,  3839 => 1343,  3835 => 1342,  3824 => 1334,  3820 => 1333,  3808 => 1323,  3802 => 1322,  3800 => 1321,  3794 => 1320,  3789 => 1318,  3783 => 1314,  3778 => 1313,  3775 => 1312,  3770 => 1310,  3767 => 1309,  3765 => 1308,  3762 => 1307,  3757 => 1306,  3754 => 1305,  3749 => 1303,  3746 => 1302,  3744 => 1301,  3739 => 1299,  3733 => 1295,  3728 => 1294,  3725 => 1293,  3720 => 1291,  3717 => 1290,  3715 => 1289,  3712 => 1288,  3707 => 1287,  3704 => 1286,  3699 => 1284,  3696 => 1283,  3694 => 1282,  3689 => 1280,  3684 => 1278,  3674 => 1273,  3667 => 1271,  3658 => 1267,  3651 => 1265,  3642 => 1261,  3635 => 1259,  3630 => 1257,  3624 => 1253,  3618 => 1252,  3616 => 1251,  3610 => 1250,  3603 => 1248,  3597 => 1244,  3592 => 1243,  3589 => 1242,  3584 => 1240,  3581 => 1239,  3579 => 1238,  3576 => 1237,  3571 => 1236,  3568 => 1235,  3563 => 1233,  3560 => 1232,  3558 => 1231,  3551 => 1229,  3545 => 1225,  3540 => 1224,  3537 => 1223,  3532 => 1221,  3529 => 1220,  3527 => 1219,  3524 => 1218,  3519 => 1217,  3516 => 1216,  3511 => 1214,  3508 => 1213,  3506 => 1212,  3499 => 1210,  3493 => 1206,  3488 => 1205,  3485 => 1204,  3480 => 1202,  3477 => 1201,  3475 => 1200,  3472 => 1199,  3467 => 1198,  3464 => 1197,  3459 => 1195,  3456 => 1194,  3454 => 1193,  3447 => 1191,  3442 => 1189,  3432 => 1184,  3425 => 1182,  3416 => 1178,  3409 => 1176,  3403 => 1172,  3398 => 1171,  3395 => 1170,  3390 => 1168,  3387 => 1167,  3385 => 1166,  3382 => 1165,  3377 => 1164,  3374 => 1163,  3369 => 1161,  3366 => 1160,  3364 => 1159,  3357 => 1157,  3351 => 1153,  3346 => 1152,  3343 => 1151,  3338 => 1149,  3335 => 1148,  3333 => 1147,  3330 => 1146,  3325 => 1145,  3322 => 1144,  3317 => 1142,  3314 => 1141,  3312 => 1140,  3305 => 1138,  3300 => 1136,  3288 => 1129,  3281 => 1127,  3275 => 1123,  3267 => 1121,  3262 => 1120,  3257 => 1119,  3252 => 1117,  3247 => 1116,  3245 => 1115,  3242 => 1114,  3238 => 1113,  3231 => 1111,  3226 => 1109,  3216 => 1104,  3211 => 1102,  3202 => 1098,  3197 => 1096,  3188 => 1092,  3181 => 1090,  3172 => 1086,  3167 => 1084,  3158 => 1080,  3151 => 1078,  3142 => 1074,  3135 => 1072,  3128 => 1067,  3123 => 1066,  3120 => 1065,  3115 => 1064,  3110 => 1063,  3105 => 1061,  3102 => 1060,  3097 => 1059,  3093 => 1058,  3085 => 1055,  3080 => 1053,  3071 => 1047,  3065 => 1046,  3059 => 1045,  3052 => 1041,  3045 => 1039,  3039 => 1036,  3030 => 1029,  3022 => 1027,  3017 => 1026,  3012 => 1025,  3007 => 1023,  3002 => 1022,  3000 => 1021,  2997 => 1020,  2993 => 1019,  2988 => 1017,  2976 => 1012,  2969 => 1010,  2966 => 1009,  2959 => 1008,  2954 => 1007,  2950 => 1006,  2946 => 1005,  2938 => 1002,  2933 => 1000,  2920 => 994,  2913 => 992,  2910 => 991,  2903 => 990,  2898 => 989,  2894 => 988,  2886 => 985,  2874 => 980,  2867 => 978,  2864 => 977,  2857 => 976,  2852 => 975,  2848 => 974,  2844 => 973,  2836 => 970,  2831 => 968,  2818 => 962,  2811 => 960,  2808 => 959,  2801 => 958,  2796 => 957,  2792 => 956,  2788 => 955,  2780 => 952,  2771 => 948,  2764 => 946,  2758 => 942,  2753 => 941,  2750 => 940,  2745 => 938,  2742 => 937,  2740 => 936,  2737 => 935,  2732 => 934,  2729 => 933,  2724 => 931,  2721 => 930,  2719 => 929,  2712 => 927,  2706 => 923,  2701 => 922,  2698 => 921,  2693 => 919,  2690 => 918,  2688 => 917,  2685 => 916,  2680 => 915,  2677 => 914,  2672 => 912,  2669 => 911,  2667 => 910,  2660 => 908,  2648 => 903,  2641 => 901,  2638 => 900,  2631 => 899,  2626 => 898,  2622 => 897,  2616 => 894,  2611 => 892,  2604 => 887,  2599 => 886,  2596 => 885,  2591 => 883,  2588 => 882,  2586 => 881,  2583 => 880,  2578 => 879,  2575 => 878,  2570 => 876,  2567 => 875,  2565 => 874,  2558 => 872,  2552 => 868,  2547 => 867,  2544 => 866,  2539 => 864,  2536 => 863,  2534 => 862,  2531 => 861,  2526 => 860,  2523 => 859,  2518 => 857,  2515 => 856,  2513 => 855,  2506 => 853,  2500 => 849,  2495 => 848,  2492 => 847,  2487 => 845,  2484 => 844,  2482 => 843,  2479 => 842,  2474 => 841,  2471 => 840,  2466 => 838,  2463 => 837,  2461 => 836,  2454 => 834,  2449 => 832,  2436 => 826,  2429 => 824,  2426 => 823,  2419 => 822,  2414 => 821,  2410 => 820,  2406 => 819,  2398 => 816,  2386 => 811,  2379 => 809,  2376 => 808,  2369 => 807,  2364 => 806,  2360 => 805,  2352 => 802,  2347 => 799,  2341 => 798,  2339 => 797,  2336 => 796,  2328 => 794,  2323 => 793,  2318 => 792,  2313 => 790,  2308 => 789,  2306 => 788,  2303 => 787,  2299 => 786,  2292 => 784,  2287 => 781,  2281 => 780,  2279 => 779,  2276 => 778,  2268 => 776,  2263 => 775,  2258 => 774,  2253 => 772,  2248 => 771,  2246 => 770,  2243 => 769,  2239 => 768,  2232 => 766,  2220 => 761,  2213 => 759,  2210 => 758,  2203 => 757,  2198 => 756,  2194 => 755,  2186 => 752,  2174 => 747,  2167 => 745,  2164 => 744,  2157 => 743,  2152 => 742,  2148 => 741,  2144 => 740,  2136 => 737,  2130 => 733,  2125 => 732,  2122 => 731,  2117 => 729,  2114 => 728,  2112 => 727,  2109 => 726,  2104 => 725,  2101 => 724,  2096 => 722,  2093 => 721,  2091 => 720,  2084 => 718,  2078 => 714,  2073 => 713,  2070 => 712,  2065 => 710,  2062 => 709,  2060 => 708,  2057 => 707,  2052 => 706,  2049 => 705,  2044 => 703,  2041 => 702,  2039 => 701,  2032 => 699,  2023 => 695,  2016 => 693,  2011 => 691,  1998 => 685,  1991 => 683,  1988 => 682,  1981 => 681,  1976 => 680,  1972 => 679,  1968 => 678,  1960 => 675,  1955 => 672,  1949 => 671,  1947 => 670,  1941 => 669,  1934 => 667,  1928 => 663,  1923 => 662,  1920 => 661,  1915 => 659,  1912 => 658,  1910 => 657,  1907 => 656,  1902 => 655,  1899 => 654,  1894 => 652,  1891 => 651,  1889 => 650,  1882 => 648,  1877 => 645,  1871 => 644,  1868 => 643,  1860 => 640,  1855 => 639,  1850 => 638,  1845 => 636,  1840 => 635,  1838 => 634,  1835 => 633,  1831 => 632,  1825 => 631,  1813 => 626,  1806 => 624,  1803 => 623,  1796 => 622,  1791 => 621,  1787 => 620,  1779 => 617,  1773 => 613,  1768 => 612,  1765 => 611,  1760 => 609,  1757 => 608,  1755 => 607,  1752 => 606,  1747 => 605,  1744 => 604,  1739 => 602,  1736 => 601,  1734 => 600,  1729 => 598,  1723 => 594,  1718 => 593,  1715 => 592,  1710 => 590,  1707 => 589,  1705 => 588,  1702 => 587,  1697 => 586,  1694 => 585,  1689 => 583,  1686 => 582,  1684 => 581,  1677 => 579,  1671 => 575,  1666 => 574,  1663 => 573,  1658 => 571,  1655 => 570,  1653 => 569,  1650 => 568,  1645 => 567,  1642 => 566,  1637 => 564,  1634 => 563,  1632 => 562,  1625 => 560,  1620 => 558,  1612 => 552,  1607 => 551,  1604 => 550,  1599 => 549,  1594 => 548,  1589 => 546,  1586 => 545,  1581 => 544,  1577 => 543,  1573 => 542,  1565 => 539,  1558 => 534,  1553 => 533,  1550 => 532,  1545 => 531,  1540 => 530,  1535 => 528,  1532 => 527,  1527 => 526,  1523 => 525,  1519 => 524,  1511 => 521,  1505 => 517,  1500 => 516,  1497 => 515,  1492 => 513,  1489 => 512,  1487 => 511,  1484 => 510,  1479 => 509,  1476 => 508,  1471 => 506,  1468 => 505,  1466 => 504,  1461 => 502,  1456 => 500,  1450 => 496,  1444 => 495,  1442 => 494,  1436 => 493,  1429 => 491,  1424 => 488,  1418 => 487,  1416 => 486,  1410 => 485,  1403 => 483,  1398 => 481,  1391 => 476,  1386 => 475,  1383 => 474,  1378 => 472,  1375 => 471,  1373 => 470,  1370 => 469,  1365 => 468,  1362 => 467,  1357 => 465,  1354 => 464,  1352 => 463,  1345 => 461,  1339 => 457,  1334 => 456,  1331 => 455,  1326 => 453,  1323 => 452,  1321 => 451,  1318 => 450,  1313 => 449,  1310 => 448,  1305 => 446,  1302 => 445,  1300 => 444,  1293 => 442,  1288 => 440,  1282 => 436,  1276 => 435,  1274 => 434,  1268 => 433,  1261 => 431,  1255 => 427,  1250 => 426,  1247 => 425,  1242 => 423,  1239 => 422,  1237 => 421,  1234 => 420,  1229 => 419,  1226 => 418,  1221 => 416,  1218 => 415,  1216 => 414,  1209 => 412,  1204 => 410,  1198 => 406,  1187 => 401,  1179 => 400,  1171 => 397,  1167 => 396,  1164 => 395,  1160 => 394,  1152 => 391,  1147 => 389,  1138 => 385,  1133 => 383,  1128 => 381,  1114 => 374,  1107 => 372,  1104 => 371,  1097 => 370,  1092 => 369,  1088 => 368,  1082 => 365,  1070 => 360,  1063 => 358,  1060 => 357,  1053 => 356,  1048 => 355,  1044 => 354,  1038 => 351,  1032 => 347,  1027 => 346,  1024 => 345,  1019 => 343,  1016 => 342,  1014 => 341,  1011 => 340,  1006 => 339,  1003 => 338,  998 => 336,  995 => 335,  993 => 334,  986 => 332,  980 => 328,  974 => 327,  966 => 325,  958 => 323,  955 => 322,  950 => 321,  944 => 319,  938 => 317,  936 => 316,  930 => 313,  918 => 308,  911 => 306,  908 => 305,  901 => 304,  896 => 303,  892 => 302,  884 => 299,  872 => 294,  865 => 292,  862 => 291,  855 => 290,  850 => 289,  846 => 288,  840 => 285,  828 => 280,  821 => 278,  818 => 277,  811 => 276,  806 => 275,  802 => 274,  796 => 271,  790 => 267,  784 => 266,  776 => 264,  768 => 262,  765 => 261,  761 => 260,  755 => 257,  745 => 250,  733 => 245,  726 => 243,  723 => 242,  716 => 241,  711 => 240,  707 => 239,  701 => 236,  696 => 233,  691 => 231,  683 => 229,  678 => 228,  673 => 227,  668 => 225,  663 => 224,  661 => 223,  658 => 222,  654 => 221,  648 => 220,  645 => 219,  643 => 218,  640 => 217,  624 => 213,  619 => 211,  615 => 209,  610 => 208,  602 => 199,  597 => 197,  589 => 191,  583 => 190,  581 => 189,  575 => 188,  570 => 186,  565 => 183,  559 => 182,  557 => 181,  551 => 180,  546 => 178,  543 => 177,  529 => 173,  520 => 171,  517 => 170,  512 => 169,  498 => 165,  489 => 163,  486 => 162,  481 => 161,  467 => 157,  458 => 153,  454 => 152,  450 => 150,  445 => 149,  426 => 144,  418 => 141,  414 => 140,  411 => 139,  407 => 138,  402 => 135,  396 => 134,  394 => 133,  388 => 132,  383 => 130,  378 => 127,  372 => 126,  370 => 125,  364 => 124,  359 => 122,  341 => 111,  334 => 109,  331 => 108,  324 => 107,  319 => 106,  315 => 105,  309 => 102,  295 => 95,  288 => 93,  285 => 92,  278 => 91,  273 => 90,  269 => 89,  263 => 86,  253 => 81,  248 => 79,  244 => 77,  234 => 73,  230 => 72,  226 => 71,  221 => 69,  213 => 66,  209 => 65,  206 => 64,  202 => 63,  199 => 62,  191 => 59,  186 => 54,  182 => 53,  178 => 52,  174 => 51,  165 => 47,  161 => 46,  158 => 45,  154 => 44,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  117 => 31,  111 => 28,  107 => 26,  99 => 22,  96 => 21,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "setting/setting.twig", "");
    }
}
