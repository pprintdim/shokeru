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
class __TwigTemplate_3ac6384df1921ef9d4573fb5c82862a5 extends Template
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
                    <textare name=\"config_turbosms_name\" rows=\"6\" placeholder=\"";
        // line 391
        yield ((($context["entry_turbo_sms_name"] ?? null)) ? ($context["entry_turbo_sms_name"]) : ("TurboSms Saller Name"));
        yield "\" id=\"input-turbosms-name\" class=\"form-control\">";
        yield ($context["config_turbo_sms_name"] ?? null);
        yield "</textare>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 396
        yield ($context["text_product"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 398
        yield ($context["help_product_count"] ?? null);
        yield "\">";
        yield ($context["entry_product_count"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 400
        if ((($tmp = ($context["config_product_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 401
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 402
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 404
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 405
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 406
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 407
        if ((($tmp =  !($context["config_product_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 408
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 409
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 411
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 412
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 413
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 417
        yield ($context["help_limit_admin"] ?? null);
        yield "\">";
        yield ($context["entry_limit_admin"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 419
        yield ($context["config_limit_admin"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_limit_admin"] ?? null);
        yield "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 420
        if ((($tmp = ($context["error_limit_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 421
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_limit_admin"] ?? null);
            yield "</div>
                    ";
        }
        // line 422
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 426
        yield ($context["text_review"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 428
        yield ($context["help_review"] ?? null);
        yield "\">";
        yield ($context["entry_review"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 430
        if ((($tmp = ($context["config_review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 431
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 432
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 434
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 435
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 436
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 437
        if ((($tmp =  !($context["config_review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 438
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 439
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 441
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 442
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 443
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 447
        yield ($context["help_review_guest"] ?? null);
        yield "\">";
        yield ($context["entry_review_guest"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 449
        if ((($tmp = ($context["config_review_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 450
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 451
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 453
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 454
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 455
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 456
        if ((($tmp =  !($context["config_review_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 457
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 458
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 460
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 461
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 462
        yield " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 467
        yield ($context["text_voucher"] ?? null);
        yield "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 469
        yield ($context["help_voucher_min"] ?? null);
        yield "\">";
        yield ($context["entry_voucher_min"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 471
        yield ($context["config_voucher_min"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_voucher_min"] ?? null);
        yield "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 472
        if ((($tmp = ($context["error_voucher_min"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 473
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_voucher_min"] ?? null);
            yield "</div>
                    ";
        }
        // line 474
        yield " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 477
        yield ($context["help_voucher_max"] ?? null);
        yield "\">";
        yield ($context["entry_voucher_max"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 479
        yield ($context["config_voucher_max"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_voucher_max"] ?? null);
        yield "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 480
        if ((($tmp = ($context["error_voucher_max"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 481
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_voucher_max"] ?? null);
            yield "</div>
                    ";
        }
        // line 482
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 486
        yield ($context["text_tax"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 488
        yield ($context["entry_tax"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 490
        if ((($tmp = ($context["config_tax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 491
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 492
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 494
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 495
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 496
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 497
        if ((($tmp =  !($context["config_tax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 498
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 499
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 501
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 502
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 503
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 507
        yield ($context["help_tax_default"] ?? null);
        yield "\">";
        yield ($context["entry_tax_default"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 510
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 511
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            yield "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 512
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 513
            yield "                      
                      <option value=\"shipping\">";
            // line 514
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 516
        yield "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            yield "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 517
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 518
            yield "                      
                      <option value=\"payment\">";
            // line 519
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 520
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 525
        yield ($context["help_tax_customer"] ?? null);
        yield "\">";
        yield ($context["entry_tax_customer"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 528
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 529
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            yield "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 530
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 531
            yield "                      
                      <option value=\"shipping\">";
            // line 532
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 534
        yield "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            yield "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 535
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 536
            yield "                      
                      <option value=\"payment\">";
            // line 537
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 538
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 544
        yield ($context["text_account"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 546
        yield ($context["help_customer_online"] ?? null);
        yield "\">";
        yield ($context["entry_customer_online"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 548
        if ((($tmp = ($context["config_customer_online"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 549
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 550
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 552
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 553
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 554
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 555
        if ((($tmp =  !($context["config_customer_online"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 556
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 557
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 559
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 560
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 561
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 565
        yield ($context["help_customer_activity"] ?? null);
        yield "\">";
        yield ($context["entry_customer_activity"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 567
        if ((($tmp = ($context["config_customer_activity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 568
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 569
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 571
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 572
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 573
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 574
        if ((($tmp =  !($context["config_customer_activity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 575
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 576
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 578
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 579
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 580
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 584
        yield ($context["entry_customer_search"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 586
        if ((($tmp = ($context["config_customer_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 587
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 588
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 590
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 591
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 592
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 593
        if ((($tmp =  !($context["config_customer_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 594
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 595
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 597
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 598
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 599
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 603
        yield ($context["help_customer_group"] ?? null);
        yield "\">";
        yield ($context["entry_customer_group"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      ";
        // line 606
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 607
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 607) == ($context["config_customer_group_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 608
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 608);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 608);
                yield "</option>                      
                      ";
            } else {
                // line 609
                yield "                      
                      <option value=\"";
                // line 610
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 610);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 610);
                yield "</option>                      
                      ";
            }
            // line 612
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
        // line 617
        yield ($context["help_customer_group_display"] ?? null);
        yield "\">";
        yield ($context["entry_customer_group_display"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 618
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 619
            yield "                    <div class=\"checkbox\">
                      <label> ";
            // line 620
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 620), ($context["config_customer_group_display"] ?? null))) {
                // line 621
                yield "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 621);
                yield "\" checked=\"checked\" />
                        ";
                // line 622
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 622);
                yield "
                        ";
            } else {
                // line 624
                yield "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 624);
                yield "\" />
                        ";
                // line 625
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 625);
                yield "
                        ";
            }
            // line 626
            yield " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 629
        yield "                    ";
        if ((($tmp = ($context["error_customer_group_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 630
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_customer_group_display"] ?? null);
            yield "</div>
                    ";
        }
        // line 631
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 634
        yield ($context["help_customer_price"] ?? null);
        yield "\">";
        yield ($context["entry_customer_price"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 636
        if ((($tmp = ($context["config_customer_price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 637
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 638
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 640
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 641
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 642
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 643
        if ((($tmp =  !($context["config_customer_price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 644
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 645
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 647
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 648
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 649
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 653
        yield ($context["help_login_attempts"] ?? null);
        yield "\">";
        yield ($context["entry_login_attempts"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 655
        yield ($context["config_login_attempts"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_login_attempts"] ?? null);
        yield "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 656
        if ((($tmp = ($context["error_login_attempts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 657
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_login_attempts"] ?? null);
            yield "</div>
                    ";
        }
        // line 658
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 661
        yield ($context["help_account"] ?? null);
        yield "\">";
        yield ($context["entry_account"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 664
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 665
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 666
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 666) == ($context["config_account_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 667
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 667);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 667);
                yield "</option>                      
                      ";
            } else {
                // line 668
                yield "                      
                      <option value=\"";
                // line 669
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 669);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 669);
                yield "</option>                      
                      ";
            }
            // line 671
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
        // line 677
        yield ($context["text_checkout"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 679
        yield ($context["help_invoice_prefix"] ?? null);
        yield "\">";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 681
        yield ($context["config_invoice_prefix"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 685
        yield ($context["help_cart_weight"] ?? null);
        yield "\">";
        yield ($context["entry_cart_weight"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 687
        if ((($tmp = ($context["config_cart_weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 688
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 689
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 691
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 692
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 693
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 694
        if ((($tmp =  !($context["config_cart_weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 695
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 696
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 698
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 699
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 700
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 704
        yield ($context["help_checkout_guest"] ?? null);
        yield "\">";
        yield ($context["entry_checkout_guest"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 706
        if ((($tmp = ($context["config_checkout_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 707
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 708
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 710
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 711
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 712
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 713
        if ((($tmp =  !($context["config_checkout_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 714
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 715
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 717
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 718
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 719
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 723
        yield ($context["help_checkout"] ?? null);
        yield "\">";
        yield ($context["entry_checkout"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 726
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 727
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 728
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 728) == ($context["config_checkout_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 729
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 729);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 729);
                yield "</option>                      
                      ";
            } else {
                // line 730
                yield "                      
                      <option value=\"";
                // line 731
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 731);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 731);
                yield "</option>                      
                      ";
            }
            // line 733
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
        // line 738
        yield ($context["help_order_status"] ?? null);
        yield "\">";
        yield ($context["entry_order_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      ";
        // line 741
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 742
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 742) == ($context["config_order_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 743
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 743);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 743);
                yield "</option>                      
                      ";
            } else {
                // line 744
                yield "                      
                      <option value=\"";
                // line 745
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 745);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 745);
                yield "</option>                      
                      ";
            }
            // line 747
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
        // line 752
        yield ($context["help_processing_status"] ?? null);
        yield "\">";
        yield ($context["entry_processing_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 754
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 755
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 756
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 756), ($context["config_processing_status"] ?? null))) {
                // line 757
                yield "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 757);
                yield "\" checked=\"checked\" />
                          ";
                // line 758
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 758);
                yield "
                          ";
            } else {
                // line 760
                yield "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 760);
                yield "\" />
                          ";
                // line 761
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 761);
                yield "
                          ";
            }
            // line 762
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 764
        yield " </div>
                    ";
        // line 765
        if ((($tmp = ($context["error_processing_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 766
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_processing_status"] ?? null);
            yield "</div>
                    ";
        }
        // line 767
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 770
        yield ($context["help_complete_status"] ?? null);
        yield "\">";
        yield ($context["entry_complete_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 772
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 773
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 774
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 774), ($context["config_complete_status"] ?? null))) {
                // line 775
                yield "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 775);
                yield "\" checked=\"checked\" />
                          ";
                // line 776
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 776);
                yield "
                          ";
            } else {
                // line 778
                yield "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 778);
                yield "\" />
                          ";
                // line 779
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 779);
                yield "
                          ";
            }
            // line 780
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 782
        yield " </div>
                    ";
        // line 783
        if ((($tmp = ($context["error_complete_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 784
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_complete_status"] ?? null);
            yield "</div>
                    ";
        }
        // line 785
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 788
        yield ($context["help_fraud_status"] ?? null);
        yield "\">";
        yield ($context["entry_fraud_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">                      
                      ";
        // line 791
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 792
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 792) == ($context["config_fraud_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 793
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 793);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 793);
                yield "</option>                      
                      ";
            } else {
                // line 794
                yield "                      
                      <option value=\"";
                // line 795
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 795);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 795);
                yield "</option>                      
                      ";
            }
            // line 797
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
        // line 802
        yield ($context["help_api"] ?? null);
        yield "\">";
        yield ($context["entry_api"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 805
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 806
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 807
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 807) == ($context["config_api_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 808
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 808);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 808);
                yield "</option>                      
                      ";
            } else {
                // line 809
                yield "                      
                      <option value=\"";
                // line 810
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 810);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 810);
                yield "</option>                      
                      ";
            }
            // line 812
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
        // line 818
        yield ($context["text_stock"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 820
        yield ($context["help_stock_display"] ?? null);
        yield "\">";
        yield ($context["entry_stock_display"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 822
        if ((($tmp = ($context["config_stock_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 823
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 824
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 826
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 827
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 828
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 829
        if ((($tmp =  !($context["config_stock_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 830
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 831
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 833
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 834
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 835
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 839
        yield ($context["help_stock_warning"] ?? null);
        yield "\">";
        yield ($context["entry_stock_warning"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 841
        if ((($tmp = ($context["config_stock_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 842
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 843
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 845
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 846
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 847
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 848
        if ((($tmp =  !($context["config_stock_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 849
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 850
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 852
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 853
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 854
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 858
        yield ($context["help_stock_checkout"] ?? null);
        yield "\">";
        yield ($context["entry_stock_checkout"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 860
        if ((($tmp = ($context["config_stock_checkout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 861
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 862
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 864
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 865
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 866
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 867
        if ((($tmp =  !($context["config_stock_checkout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 868
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 869
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 871
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 872
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 873
        yield " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 878
        yield ($context["text_affiliate"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 880
        yield ($context["entry_affiliate_group"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">                      
                      ";
        // line 883
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 884
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 884) == ($context["config_affiliate_group_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 885
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 885);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 885);
                yield "</option>                      
                      ";
            } else {
                // line 886
                yield "                      
                      <option value=\"";
                // line 887
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 887);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 887);
                yield "</option>                      
                      ";
            }
            // line 889
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
        // line 894
        yield ($context["help_affiliate_approval"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_approval"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 896
        if ((($tmp = ($context["config_affiliate_approval"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 897
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 898
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 900
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 901
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 902
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 903
        if ((($tmp =  !($context["config_affiliate_approval"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 904
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 905
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 907
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 908
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 909
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 913
        yield ($context["help_affiliate_auto"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_auto"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 915
        if ((($tmp = ($context["config_affiliate_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 916
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 917
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 919
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 920
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 921
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 922
        if ((($tmp =  !($context["config_affiliate_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 923
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 924
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 926
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 927
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 928
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 932
        yield ($context["help_affiliate_commission"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 934
        yield ($context["config_affiliate_commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 938
        yield ($context["help_affiliate"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 941
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 942
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 943
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 943) == ($context["config_affiliate_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 944
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 944);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 944);
                yield "</option>                      
                      ";
            } else {
                // line 945
                yield "                      
                      <option value=\"";
                // line 946
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 946);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 946);
                yield "</option>                      
                      ";
            }
            // line 948
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
        // line 954
        yield ($context["text_return"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 956
        yield ($context["help_return"] ?? null);
        yield "\">";
        yield ($context["entry_return"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 959
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 960
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 961
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 961) == ($context["config_return_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 962
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 962);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 962);
                yield "</option>                      
                      ";
            } else {
                // line 963
                yield "                      
                      <option value=\"";
                // line 964
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 964);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 964);
                yield "</option>                      
                      ";
            }
            // line 966
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
        // line 971
        yield ($context["help_return_status"] ?? null);
        yield "\">";
        yield ($context["entry_return_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      ";
        // line 974
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 975
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 975) == ($context["config_return_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 976
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 976);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 976);
                yield "</option>                      
                      ";
            } else {
                // line 977
                yield "                      
                      <option value=\"";
                // line 978
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 978);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 978);
                yield "</option>                      
                      ";
            }
            // line 980
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
        // line 986
        yield ($context["text_captcha"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 988
        yield ($context["help_captcha"] ?? null);
        yield "\">";
        yield ($context["entry_captcha"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 991
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 992
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 993
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 993) == ($context["config_captcha"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 994
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 994);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 994);
                yield "</option>                      
                      ";
            } else {
                // line 995
                yield "                      
                      <option value=\"";
                // line 996
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 996);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 996);
                yield "</option>                      
                      ";
            }
            // line 998
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
        // line 1003
        yield ($context["entry_captcha_page"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1005
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1006
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 1007
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1007), ($context["config_captcha_page"] ?? null))) {
                // line 1008
                yield "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1008);
                yield "\" checked=\"checked\" />
                          ";
                // line 1009
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1009);
                yield "
                          ";
            } else {
                // line 1011
                yield "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1011);
                yield "\" />
                          ";
                // line 1012
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1012);
                yield "
                          ";
            }
            // line 1013
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha_page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1015
        yield " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1022
        yield ($context["entry_logo"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\">
                    <img src=\"";
        // line 1025
        yield ($context["logo"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" />
                  </a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1027
        yield ($context["config_logo"] ?? null);
        yield "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1031
        yield ($context["help_icon"] ?? null);
        yield "\">";
        yield ($context["entry_icon"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1032
        yield ($context["icon"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1033
        yield ($context["config_icon"] ?? null);
        yield "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1039
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1041
        yield ($context["help_mail_engine"] ?? null);
        yield "\">";
        yield ($context["entry_mail_engine"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      ";
        // line 1044
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            yield "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1045
            yield ($context["text_mail"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 1046
            yield "                      
                      <option value=\"mail\">";
            // line 1047
            yield ($context["text_mail"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 1049
        yield "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            yield "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1050
            yield ($context["text_smtp"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 1051
            yield "                      
                      <option value=\"smtp\">";
            // line 1052
            yield ($context["text_smtp"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 1053
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1058
        yield ($context["help_mail_parameter"] ?? null);
        yield "\">";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1060
        yield ($context["config_mail_parameter"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1064
        yield ($context["help_mail_smtp_hostname"] ?? null);
        yield "\">";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1066
        yield ($context["config_mail_smtp_hostname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1070
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1072
        yield ($context["config_mail_smtp_username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1076
        yield ($context["help_mail_smtp_password"] ?? null);
        yield "\">";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1078
        yield ($context["config_mail_smtp_password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1082
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1084
        yield ($context["config_mail_smtp_port"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1088
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1090
        yield ($context["config_mail_smtp_timeout"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1095
        yield ($context["text_mail_alert"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1097
        yield ($context["help_mail_alert"] ?? null);
        yield "\">";
        yield ($context["entry_mail_alert"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1099
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1100
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 1101
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1101), ($context["config_mail_alert"] ?? null))) {
                // line 1102
                yield "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1102);
                yield "\" checked=\"checked\" />
                          ";
                // line 1103
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1103);
                yield "
                          ";
            } else {
                // line 1105
                yield "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1105);
                yield "\" />
                          ";
                // line 1106
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1106);
                yield "
                          ";
            }
            // line 1107
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mail_alert'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1109
        yield " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1113
        yield ($context["help_mail_alert_email"] ?? null);
        yield "\">";
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1115
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
        // line 1122
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1124
        yield ($context["help_maintenance"] ?? null);
        yield "\">";
        yield ($context["entry_maintenance"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1126
        if ((($tmp = ($context["config_maintenance"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1127
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1128
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1130
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1131
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1132
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1133
        if ((($tmp =  !($context["config_maintenance"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1134
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1135
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1137
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1138
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1139
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1143
        yield ($context["help_seo_url"] ?? null);
        yield "\">";
        yield ($context["entry_seo_url"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1145
        if ((($tmp = ($context["config_seo_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1146
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1147
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1149
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1150
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1151
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1152
        if ((($tmp =  !($context["config_seo_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1153
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1154
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1156
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1157
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1158
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1162
        yield ($context["help_robots"] ?? null);
        yield "\">";
        yield ($context["entry_robots"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1164
        yield ($context["entry_robots"] ?? null);
        yield "\" id=\"input-robots\" class=\"form-control\">";
        yield ($context["config_robots"] ?? null);
        yield "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1168
        yield ($context["help_compression"] ?? null);
        yield "\">";
        yield ($context["entry_compression"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1170
        yield ($context["config_compression"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_compression"] ?? null);
        yield "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1175
        yield ($context["text_security"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1177
        yield ($context["help_secure"] ?? null);
        yield "\">";
        yield ($context["entry_secure"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1179
        if ((($tmp = ($context["config_secure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1180
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1181
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1183
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1184
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1185
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1186
        if ((($tmp =  !($context["config_secure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1187
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1188
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1190
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1191
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1192
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1196
        yield ($context["help_password"] ?? null);
        yield "\">";
        yield ($context["entry_password"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1198
        if ((($tmp = ($context["config_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1199
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1200
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1202
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1203
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1204
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1205
        if ((($tmp =  !($context["config_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1206
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1207
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1209
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1210
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1211
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1215
        yield ($context["help_shared"] ?? null);
        yield "\">";
        yield ($context["entry_shared"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1217
        if ((($tmp = ($context["config_shared"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1218
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1219
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1221
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1222
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1223
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1224
        if ((($tmp =  !($context["config_shared"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1225
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1226
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1228
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1229
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1230
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1234
        yield ($context["help_encryption"] ?? null);
        yield "\">";
        yield ($context["entry_encryption"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1236
        yield ($context["entry_encryption"] ?? null);
        yield "\" id=\"input-encryption\" class=\"form-control\">";
        yield ($context["config_encryption"] ?? null);
        yield "</textarea>
                    ";
        // line 1237
        if ((($tmp = ($context["error_encryption"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1238
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_encryption"] ?? null);
            yield "</div>
                    ";
        }
        // line 1239
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1243
        yield ($context["text_upload"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1245
        yield ($context["help_file_max_size"] ?? null);
        yield "\">";
        yield ($context["entry_file_max_size"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1247
        yield ($context["config_file_max_size"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_file_max_size"] ?? null);
        yield "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1251
        yield ($context["help_file_ext_allowed"] ?? null);
        yield "\">";
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1253
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        yield ($context["config_file_ext_allowed"] ?? null);
        yield "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1257
        yield ($context["help_file_mime_allowed"] ?? null);
        yield "\">";
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1259
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        yield ($context["config_file_mime_allowed"] ?? null);
        yield "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1264
        yield ($context["text_error"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1266
        yield ($context["entry_error_display"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1268
        if ((($tmp = ($context["config_error_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1269
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1270
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1272
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1273
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1274
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1275
        if ((($tmp =  !($context["config_error_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1276
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1277
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1279
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1280
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1281
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1285
        yield ($context["entry_error_log"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1287
        if ((($tmp = ($context["config_error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1288
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1289
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1291
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1292
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1293
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1294
        if ((($tmp =  !($context["config_error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1295
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1296
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1298
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1299
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1300
        yield "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1304
        yield ($context["entry_error_filename"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1306
        yield ($context["config_error_filename"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_error_filename"] ?? null);
        yield "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1307
        if ((($tmp = ($context["error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1308
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_log"] ?? null);
            yield "</div>
                    ";
        }
        // line 1309
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
        // line 1319
        yield ($context["placeholder"] ?? null);
        yield "';
    var entry_title = '";
        // line 1320
        yield ($context["entry_title"] ?? null);
        yield "';

    function addIcon() {
        var table = \$('#tab-repeater tbody'); // твоя таблиця
        var index = table.find('tr').length;

        // генеруємо колонки для всіх мов
        var titleColumns = '';
        ";
        // line 1328
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1329
            yield "        titleColumns += `
            <td class=\"text-left\">
                <input type=\"text\" name=\"config_icons_repeater[\${index}][title][";
            // line 1331
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1331);
            yield "]\" value=\"\" placeholder=\"\${entry_title}\" class=\"form-control\" />
            </td>`;
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1334
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
        // line 1360
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
        // line 1382
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
        // line 1391
        yield ($context["text_select"] ?? null);
        yield "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1397
        yield ($context["config_zone_id"] ?? null);
        yield "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1404
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
        // line 1425
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
        return array (  3918 => 1425,  3894 => 1404,  3884 => 1397,  3875 => 1391,  3863 => 1382,  3838 => 1360,  3810 => 1334,  3801 => 1331,  3797 => 1329,  3793 => 1328,  3782 => 1320,  3778 => 1319,  3766 => 1309,  3760 => 1308,  3758 => 1307,  3752 => 1306,  3747 => 1304,  3741 => 1300,  3736 => 1299,  3733 => 1298,  3728 => 1296,  3725 => 1295,  3723 => 1294,  3720 => 1293,  3715 => 1292,  3712 => 1291,  3707 => 1289,  3704 => 1288,  3702 => 1287,  3697 => 1285,  3691 => 1281,  3686 => 1280,  3683 => 1279,  3678 => 1277,  3675 => 1276,  3673 => 1275,  3670 => 1274,  3665 => 1273,  3662 => 1272,  3657 => 1270,  3654 => 1269,  3652 => 1268,  3647 => 1266,  3642 => 1264,  3632 => 1259,  3625 => 1257,  3616 => 1253,  3609 => 1251,  3600 => 1247,  3593 => 1245,  3588 => 1243,  3582 => 1239,  3576 => 1238,  3574 => 1237,  3568 => 1236,  3561 => 1234,  3555 => 1230,  3550 => 1229,  3547 => 1228,  3542 => 1226,  3539 => 1225,  3537 => 1224,  3534 => 1223,  3529 => 1222,  3526 => 1221,  3521 => 1219,  3518 => 1218,  3516 => 1217,  3509 => 1215,  3503 => 1211,  3498 => 1210,  3495 => 1209,  3490 => 1207,  3487 => 1206,  3485 => 1205,  3482 => 1204,  3477 => 1203,  3474 => 1202,  3469 => 1200,  3466 => 1199,  3464 => 1198,  3457 => 1196,  3451 => 1192,  3446 => 1191,  3443 => 1190,  3438 => 1188,  3435 => 1187,  3433 => 1186,  3430 => 1185,  3425 => 1184,  3422 => 1183,  3417 => 1181,  3414 => 1180,  3412 => 1179,  3405 => 1177,  3400 => 1175,  3390 => 1170,  3383 => 1168,  3374 => 1164,  3367 => 1162,  3361 => 1158,  3356 => 1157,  3353 => 1156,  3348 => 1154,  3345 => 1153,  3343 => 1152,  3340 => 1151,  3335 => 1150,  3332 => 1149,  3327 => 1147,  3324 => 1146,  3322 => 1145,  3315 => 1143,  3309 => 1139,  3304 => 1138,  3301 => 1137,  3296 => 1135,  3293 => 1134,  3291 => 1133,  3288 => 1132,  3283 => 1131,  3280 => 1130,  3275 => 1128,  3272 => 1127,  3270 => 1126,  3263 => 1124,  3258 => 1122,  3246 => 1115,  3239 => 1113,  3233 => 1109,  3225 => 1107,  3220 => 1106,  3215 => 1105,  3210 => 1103,  3205 => 1102,  3203 => 1101,  3200 => 1100,  3196 => 1099,  3189 => 1097,  3184 => 1095,  3174 => 1090,  3169 => 1088,  3160 => 1084,  3155 => 1082,  3146 => 1078,  3139 => 1076,  3130 => 1072,  3125 => 1070,  3116 => 1066,  3109 => 1064,  3100 => 1060,  3093 => 1058,  3086 => 1053,  3081 => 1052,  3078 => 1051,  3073 => 1050,  3068 => 1049,  3063 => 1047,  3060 => 1046,  3055 => 1045,  3051 => 1044,  3043 => 1041,  3038 => 1039,  3029 => 1033,  3023 => 1032,  3017 => 1031,  3010 => 1027,  3003 => 1025,  2997 => 1022,  2988 => 1015,  2980 => 1013,  2975 => 1012,  2970 => 1011,  2965 => 1009,  2960 => 1008,  2958 => 1007,  2955 => 1006,  2951 => 1005,  2946 => 1003,  2934 => 998,  2927 => 996,  2924 => 995,  2917 => 994,  2912 => 993,  2908 => 992,  2904 => 991,  2896 => 988,  2891 => 986,  2878 => 980,  2871 => 978,  2868 => 977,  2861 => 976,  2856 => 975,  2852 => 974,  2844 => 971,  2832 => 966,  2825 => 964,  2822 => 963,  2815 => 962,  2810 => 961,  2806 => 960,  2802 => 959,  2794 => 956,  2789 => 954,  2776 => 948,  2769 => 946,  2766 => 945,  2759 => 944,  2754 => 943,  2750 => 942,  2746 => 941,  2738 => 938,  2729 => 934,  2722 => 932,  2716 => 928,  2711 => 927,  2708 => 926,  2703 => 924,  2700 => 923,  2698 => 922,  2695 => 921,  2690 => 920,  2687 => 919,  2682 => 917,  2679 => 916,  2677 => 915,  2670 => 913,  2664 => 909,  2659 => 908,  2656 => 907,  2651 => 905,  2648 => 904,  2646 => 903,  2643 => 902,  2638 => 901,  2635 => 900,  2630 => 898,  2627 => 897,  2625 => 896,  2618 => 894,  2606 => 889,  2599 => 887,  2596 => 886,  2589 => 885,  2584 => 884,  2580 => 883,  2574 => 880,  2569 => 878,  2562 => 873,  2557 => 872,  2554 => 871,  2549 => 869,  2546 => 868,  2544 => 867,  2541 => 866,  2536 => 865,  2533 => 864,  2528 => 862,  2525 => 861,  2523 => 860,  2516 => 858,  2510 => 854,  2505 => 853,  2502 => 852,  2497 => 850,  2494 => 849,  2492 => 848,  2489 => 847,  2484 => 846,  2481 => 845,  2476 => 843,  2473 => 842,  2471 => 841,  2464 => 839,  2458 => 835,  2453 => 834,  2450 => 833,  2445 => 831,  2442 => 830,  2440 => 829,  2437 => 828,  2432 => 827,  2429 => 826,  2424 => 824,  2421 => 823,  2419 => 822,  2412 => 820,  2407 => 818,  2394 => 812,  2387 => 810,  2384 => 809,  2377 => 808,  2372 => 807,  2368 => 806,  2364 => 805,  2356 => 802,  2344 => 797,  2337 => 795,  2334 => 794,  2327 => 793,  2322 => 792,  2318 => 791,  2310 => 788,  2305 => 785,  2299 => 784,  2297 => 783,  2294 => 782,  2286 => 780,  2281 => 779,  2276 => 778,  2271 => 776,  2266 => 775,  2264 => 774,  2261 => 773,  2257 => 772,  2250 => 770,  2245 => 767,  2239 => 766,  2237 => 765,  2234 => 764,  2226 => 762,  2221 => 761,  2216 => 760,  2211 => 758,  2206 => 757,  2204 => 756,  2201 => 755,  2197 => 754,  2190 => 752,  2178 => 747,  2171 => 745,  2168 => 744,  2161 => 743,  2156 => 742,  2152 => 741,  2144 => 738,  2132 => 733,  2125 => 731,  2122 => 730,  2115 => 729,  2110 => 728,  2106 => 727,  2102 => 726,  2094 => 723,  2088 => 719,  2083 => 718,  2080 => 717,  2075 => 715,  2072 => 714,  2070 => 713,  2067 => 712,  2062 => 711,  2059 => 710,  2054 => 708,  2051 => 707,  2049 => 706,  2042 => 704,  2036 => 700,  2031 => 699,  2028 => 698,  2023 => 696,  2020 => 695,  2018 => 694,  2015 => 693,  2010 => 692,  2007 => 691,  2002 => 689,  1999 => 688,  1997 => 687,  1990 => 685,  1981 => 681,  1974 => 679,  1969 => 677,  1956 => 671,  1949 => 669,  1946 => 668,  1939 => 667,  1934 => 666,  1930 => 665,  1926 => 664,  1918 => 661,  1913 => 658,  1907 => 657,  1905 => 656,  1899 => 655,  1892 => 653,  1886 => 649,  1881 => 648,  1878 => 647,  1873 => 645,  1870 => 644,  1868 => 643,  1865 => 642,  1860 => 641,  1857 => 640,  1852 => 638,  1849 => 637,  1847 => 636,  1840 => 634,  1835 => 631,  1829 => 630,  1826 => 629,  1818 => 626,  1813 => 625,  1808 => 624,  1803 => 622,  1798 => 621,  1796 => 620,  1793 => 619,  1789 => 618,  1783 => 617,  1771 => 612,  1764 => 610,  1761 => 609,  1754 => 608,  1749 => 607,  1745 => 606,  1737 => 603,  1731 => 599,  1726 => 598,  1723 => 597,  1718 => 595,  1715 => 594,  1713 => 593,  1710 => 592,  1705 => 591,  1702 => 590,  1697 => 588,  1694 => 587,  1692 => 586,  1687 => 584,  1681 => 580,  1676 => 579,  1673 => 578,  1668 => 576,  1665 => 575,  1663 => 574,  1660 => 573,  1655 => 572,  1652 => 571,  1647 => 569,  1644 => 568,  1642 => 567,  1635 => 565,  1629 => 561,  1624 => 560,  1621 => 559,  1616 => 557,  1613 => 556,  1611 => 555,  1608 => 554,  1603 => 553,  1600 => 552,  1595 => 550,  1592 => 549,  1590 => 548,  1583 => 546,  1578 => 544,  1570 => 538,  1565 => 537,  1562 => 536,  1557 => 535,  1552 => 534,  1547 => 532,  1544 => 531,  1539 => 530,  1535 => 529,  1531 => 528,  1523 => 525,  1516 => 520,  1511 => 519,  1508 => 518,  1503 => 517,  1498 => 516,  1493 => 514,  1490 => 513,  1485 => 512,  1481 => 511,  1477 => 510,  1469 => 507,  1463 => 503,  1458 => 502,  1455 => 501,  1450 => 499,  1447 => 498,  1445 => 497,  1442 => 496,  1437 => 495,  1434 => 494,  1429 => 492,  1426 => 491,  1424 => 490,  1419 => 488,  1414 => 486,  1408 => 482,  1402 => 481,  1400 => 480,  1394 => 479,  1387 => 477,  1382 => 474,  1376 => 473,  1374 => 472,  1368 => 471,  1361 => 469,  1356 => 467,  1349 => 462,  1344 => 461,  1341 => 460,  1336 => 458,  1333 => 457,  1331 => 456,  1328 => 455,  1323 => 454,  1320 => 453,  1315 => 451,  1312 => 450,  1310 => 449,  1303 => 447,  1297 => 443,  1292 => 442,  1289 => 441,  1284 => 439,  1281 => 438,  1279 => 437,  1276 => 436,  1271 => 435,  1268 => 434,  1263 => 432,  1260 => 431,  1258 => 430,  1251 => 428,  1246 => 426,  1240 => 422,  1234 => 421,  1232 => 420,  1226 => 419,  1219 => 417,  1213 => 413,  1208 => 412,  1205 => 411,  1200 => 409,  1197 => 408,  1195 => 407,  1192 => 406,  1187 => 405,  1184 => 404,  1179 => 402,  1176 => 401,  1174 => 400,  1167 => 398,  1162 => 396,  1152 => 391,  1147 => 389,  1138 => 385,  1133 => 383,  1128 => 381,  1114 => 374,  1107 => 372,  1104 => 371,  1097 => 370,  1092 => 369,  1088 => 368,  1082 => 365,  1070 => 360,  1063 => 358,  1060 => 357,  1053 => 356,  1048 => 355,  1044 => 354,  1038 => 351,  1032 => 347,  1027 => 346,  1024 => 345,  1019 => 343,  1016 => 342,  1014 => 341,  1011 => 340,  1006 => 339,  1003 => 338,  998 => 336,  995 => 335,  993 => 334,  986 => 332,  980 => 328,  974 => 327,  966 => 325,  958 => 323,  955 => 322,  950 => 321,  944 => 319,  938 => 317,  936 => 316,  930 => 313,  918 => 308,  911 => 306,  908 => 305,  901 => 304,  896 => 303,  892 => 302,  884 => 299,  872 => 294,  865 => 292,  862 => 291,  855 => 290,  850 => 289,  846 => 288,  840 => 285,  828 => 280,  821 => 278,  818 => 277,  811 => 276,  806 => 275,  802 => 274,  796 => 271,  790 => 267,  784 => 266,  776 => 264,  768 => 262,  765 => 261,  761 => 260,  755 => 257,  745 => 250,  733 => 245,  726 => 243,  723 => 242,  716 => 241,  711 => 240,  707 => 239,  701 => 236,  696 => 233,  691 => 231,  683 => 229,  678 => 228,  673 => 227,  668 => 225,  663 => 224,  661 => 223,  658 => 222,  654 => 221,  648 => 220,  645 => 219,  643 => 218,  640 => 217,  624 => 213,  619 => 211,  615 => 209,  610 => 208,  602 => 199,  597 => 197,  589 => 191,  583 => 190,  581 => 189,  575 => 188,  570 => 186,  565 => 183,  559 => 182,  557 => 181,  551 => 180,  546 => 178,  543 => 177,  529 => 173,  520 => 171,  517 => 170,  512 => 169,  498 => 165,  489 => 163,  486 => 162,  481 => 161,  467 => 157,  458 => 153,  454 => 152,  450 => 150,  445 => 149,  426 => 144,  418 => 141,  414 => 140,  411 => 139,  407 => 138,  402 => 135,  396 => 134,  394 => 133,  388 => 132,  383 => 130,  378 => 127,  372 => 126,  370 => 125,  364 => 124,  359 => 122,  341 => 111,  334 => 109,  331 => 108,  324 => 107,  319 => 106,  315 => 105,  309 => 102,  295 => 95,  288 => 93,  285 => 92,  278 => 91,  273 => 90,  269 => 89,  263 => 86,  253 => 81,  248 => 79,  244 => 77,  234 => 73,  230 => 72,  226 => 71,  221 => 69,  213 => 66,  209 => 65,  206 => 64,  202 => 63,  199 => 62,  191 => 59,  186 => 54,  182 => 53,  178 => 52,  174 => 51,  165 => 47,  161 => 46,  158 => 45,  154 => 44,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  117 => 31,  111 => 28,  107 => 26,  99 => 22,  96 => 21,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "setting/setting.twig", "");
    }
}
