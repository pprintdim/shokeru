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

/* design/layout_form.twig */
class __TwigTemplate_763b52d8b0a18aa51889e80411267776 extends Template
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
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
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
        yield ($context["text_form"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        yield ($context["text_route"] ?? null);
        yield "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 31
        yield ($context["entry_name"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 33
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 34
        if ((($tmp = ($context["error_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "                <div class=\"text-danger\">";
            yield ($context["error_name"] ?? null);
            yield "</div>
                ";
        }
        // line 37
        yield "              </div>
            </div>
            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 42
        yield ($context["entry_store"] ?? null);
        yield "</td>
                  <td class=\"text-left\">";
        // line 43
        yield ($context["entry_route"] ?? null);
        yield "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 48
        $context["route_row"] = 0;
        // line 49
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 50
            yield "                <tr id=\"route-row";
            yield ($context["route_row"] ?? null);
            yield "\">
                  <td class=\"text-left\"><select name=\"layout_route[";
            // line 51
            yield ($context["route_row"] ?? null);
            yield "][store_id]\" class=\"form-control\">
                      <option value=\"0\">";
            // line 52
            yield ($context["text_default"] ?? null);
            yield "</option>
                      ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 54
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 54) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_route"], "store_id", [], "any", false, false, false, 54))) {
                    // line 55
                    yield "                      <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 55);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 55);
                    yield "</option>
                      ";
                } else {
                    // line 57
                    yield "                      <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 57);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 57);
                    yield "</option>
                      ";
                }
                // line 59
                yield "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                    </select></td>
                  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 61
            yield ($context["route_row"] ?? null);
            yield "][route]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_route"], "route", [], "any", false, false, false, 61);
            yield "\" placeholder=\"";
            yield ($context["entry_route"] ?? null);
            yield "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 62
            yield ($context["route_row"] ?? null);
            yield "').remove();\" data-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
            // line 64
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
            // line 65
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout_route'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 70
        yield ($context["button_route_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 76
        yield ($context["text_module"] ?? null);
        yield "</legend>
            ";
        // line 77
        $context["module_row"] = 0;
        // line 78
        yield "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 83
        yield ($context["text_column_left"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 88
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 88) == "column_left")) {
                // line 89
                yield "                    <tr id=\"module-row";
                yield ($context["module_row"] ?? null);
                yield "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 91
                yield ($context["module_row"] ?? null);
                yield "][code]\" class=\"form-control input-sm\">
                            ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 93
                    yield "                            <optgroup label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 93);
                    yield "\">
                            ";
                    // line 94
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 95
                        yield "                            ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 95) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 95))) {
                            // line 96
                            yield "                            <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 96);
                            yield "\" selected=\"selected\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 96);
                            yield "</option>
                            ";
                        } else {
                            // line 98
                            yield "                            <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 98);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 98);
                            yield "</option>
                            ";
                        }
                        // line 100
                        yield "                            ";
                    } else {
                        // line 101
                        yield "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 101));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 102
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 102) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 102))) {
                                // line 103
                                yield "                            <option value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 103);
                                yield "\" selected=\"selected\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 103);
                                yield "</option>
                            ";
                            } else {
                                // line 105
                                yield "                            <option value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 105);
                                yield "\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 105);
                                yield "</option>
                            ";
                            }
                            // line 107
                            yield "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 108
                        yield "                            ";
                    }
                    // line 109
                    yield "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                yield "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 112
                yield ($context["module_row"] ?? null);
                yield "][position]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 112);
                yield "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 113
                yield ($context["module_row"] ?? null);
                yield "][sort_order]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 113);
                yield "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 114
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 114);
                yield "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 115
                yield ($context["module_row"] ?? null);
                yield "').remove();\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 119
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 120
                yield "                    ";
            }
            // line 121
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout_module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 129
            yield "                            <optgroup label=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 129);
            yield "\">
                            ";
            // line 130
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 131
                yield "                            <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 131);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 131);
                yield "</option>
                            ";
            } else {
                // line 133
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 133));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 134
                    yield "                            <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 134);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 134);
                    yield "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                yield "                            ";
            }
            // line 137
            yield "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 141
        yield ($context["button_module_add"] ?? null);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 152
        yield ($context["text_content_top"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 157
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 157) == "content_top")) {
                // line 158
                yield "                    <tr id=\"module-row";
                yield ($context["module_row"] ?? null);
                yield "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 160
                yield ($context["module_row"] ?? null);
                yield "][code]\" class=\"form-control input-sm\">
                            ";
                // line 161
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 162
                    yield "                            <optgroup label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 162);
                    yield "\">
                            ";
                    // line 163
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 164
                        yield "                            ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 164) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 164))) {
                            // line 165
                            yield "                            <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 165);
                            yield "\" selected=\"selected\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 165);
                            yield "</option>
                            ";
                        } else {
                            // line 167
                            yield "                            <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 167);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 167);
                            yield "</option>
                            ";
                        }
                        // line 169
                        yield "                            ";
                    } else {
                        // line 170
                        yield "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 170));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 171
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 171) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 171))) {
                                // line 172
                                yield "                            <option value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 172);
                                yield "\" selected=\"selected\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 172);
                                yield "</option>
                            ";
                            } else {
                                // line 174
                                yield "                            <option value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 174);
                                yield "\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 174);
                                yield "</option>
                            ";
                            }
                            // line 176
                            yield "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 177
                        yield "                            ";
                    }
                    // line 178
                    yield "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                yield "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 181
                yield ($context["module_row"] ?? null);
                yield "][position]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 181);
                yield "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 182
                yield ($context["module_row"] ?? null);
                yield "][sort_order]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 182);
                yield "\" />
                          <div class=\"input-group-btn\"> <a href=\"";
                // line 183
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 183);
                yield "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 184
                yield ($context["module_row"] ?? null);
                yield "').remove();\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 188
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 189
                yield "                    ";
            }
            // line 190
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout_module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 198
            yield "                            <optgroup label=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 198);
            yield "\">
                            ";
            // line 199
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 199)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 200
                yield "                            <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 200);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 200);
                yield "</option>
                            ";
            } else {
                // line 202
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 202));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 203
                    yield "                            <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 203);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 203);
                    yield "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                yield "                            ";
            }
            // line 206
            yield "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        yield "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 210
        yield ($context["button_module_add"] ?? null);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 219
        yield ($context["text_content_bottom"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 224
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 224) == "content_bottom")) {
                // line 225
                yield "                    <tr id=\"module-row";
                yield ($context["module_row"] ?? null);
                yield "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 227
                yield ($context["module_row"] ?? null);
                yield "][code]\" class=\"form-control input-sm\">
                            ";
                // line 228
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 229
                    yield "                            <optgroup label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 229);
                    yield "\">
                            ";
                    // line 230
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 231
                        yield "                            ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 231) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 231))) {
                            // line 232
                            yield "                            <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 232);
                            yield "\" selected=\"selected\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 232);
                            yield "</option>
                            ";
                        } else {
                            // line 234
                            yield "                            <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 234);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 234);
                            yield "</option>
                            ";
                        }
                        // line 236
                        yield "                            ";
                    } else {
                        // line 237
                        yield "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 237));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 238
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 238) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 238))) {
                                // line 239
                                yield "                            <option value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 239);
                                yield "\" selected=\"selected\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 239);
                                yield "</option>
                            ";
                            } else {
                                // line 241
                                yield "                            <option value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 241);
                                yield "\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 241);
                                yield "</option>
                            ";
                            }
                            // line 243
                            yield "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 244
                        yield "                            ";
                    }
                    // line 245
                    yield "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 247
                yield "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 248
                yield ($context["module_row"] ?? null);
                yield "][position]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 248);
                yield "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 249
                yield ($context["module_row"] ?? null);
                yield "][sort_order]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 249);
                yield "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 250
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 250);
                yield "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 251
                yield ($context["module_row"] ?? null);
                yield "').remove();\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 255
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 256
                yield "                    ";
            }
            // line 257
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout_module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 265
            yield "                            <optgroup label=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 265);
            yield "\">
                            ";
            // line 266
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 267
                yield "                            <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 267);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 267);
                yield "</option>
                            ";
            } else {
                // line 269
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 269));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 270
                    yield "                            <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 270);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 270);
                    yield "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 272
                yield "                            ";
            }
            // line 273
            yield "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        yield "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 277
        yield ($context["button_module_add"] ?? null);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 288
        yield ($context["text_column_right"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 293
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 293) == "column_right")) {
                // line 294
                yield "                    <tr id=\"module-row";
                yield ($context["module_row"] ?? null);
                yield "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 296
                yield ($context["module_row"] ?? null);
                yield "][code]\" class=\"form-control input-sm\">
                            ";
                // line 297
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 298
                    yield "                            <optgroup label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 298);
                    yield "\">
                            ";
                    // line 299
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 299)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 300
                        yield "                            ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 300) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 300))) {
                            // line 301
                            yield "                            <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 301);
                            yield "\" selected=\"selected\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 301);
                            yield "</option>
                            ";
                        } else {
                            // line 303
                            yield "                            <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 303);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 303);
                            yield "</option>
                            ";
                        }
                        // line 305
                        yield "                            ";
                    } else {
                        // line 306
                        yield "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 306));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 307
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 307) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 307))) {
                                // line 308
                                yield "                            <option value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 308);
                                yield "\" selected=\"selected\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 308);
                                yield "</option>
                            ";
                            } else {
                                // line 310
                                yield "                            <option value=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 310);
                                yield "\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 310);
                                yield "</option>
                            ";
                            }
                            // line 312
                            yield "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 313
                        yield "                            ";
                    }
                    // line 314
                    yield "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 316
                yield "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 317
                yield ($context["module_row"] ?? null);
                yield "][position]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 317);
                yield "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 318
                yield ($context["module_row"] ?? null);
                yield "][sort_order]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 318);
                yield "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 319
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 319);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 320
                yield ($context["module_row"] ?? null);
                yield "').remove();\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 324
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 325
                yield "                    ";
            }
            // line 326
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout_module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 334
            yield "                            <optgroup label=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 334);
            yield "\">
                            ";
            // line 335
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 335)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 336
                yield "                            <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 336);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 336);
                yield "</option>
                            ";
            } else {
                // line 338
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 338));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 339
                    yield "                            <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 339);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 339);
                    yield "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 341
                yield "                            ";
            }
            // line 342
            yield "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        yield "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 346
        yield ($context["button_module_add"] ?? null);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var route_row = ";
        // line 360
        yield ($context["route_row"] ?? null);
        yield ";

function addRoute() {
\thtml  = '<tr id=\"route-row' + route_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
\thtml += '  <option value=\"0\">";
        // line 365
        yield ($context["text_default"] ?? null);
        yield "</option>';
\t";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 367
            yield "\thtml += '<option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 367);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 367), "js");
            yield "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 369
        yield "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 370
        yield ($context["entry_route"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 371
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#route tbody').append(html);
\t
\troute_row++;
}

var module_row = ";
        // line 379
        yield ($context["module_row"] ?? null);
        yield ";

function addModule(type) {
\thtml  = '<tr id=\"module-row' + module_row + '\">';
    html += '  <td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';
\t";
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 385
            yield "\thtml += '    <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 385), "js");
            yield "\">';
\t";
            // line 386
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 386)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 387
                yield "\thtml += '      <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 387);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 387), "js");
                yield "</option>';
\t";
            } else {
                // line 389
                yield "\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 389));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 390
                    yield "\thtml += '      <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 390);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 390), "js");
                    yield "</option>';
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 392
                yield "\t";
            }
            // line 393
            yield "\thtml += '    </optgroup>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
        yield "\thtml += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
\thtml += '  <div class=\"input-group-btn\"><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 398
        yield ($context["button_edit"] ?? null);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div></div></td>';
\thtml += '</tr>';
\t
\t\$('#module-' + type + ' tbody').append(html);
\t
\t\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());
\t
\t\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');
\t\t
\t\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
\t\t\$(element).val(i);
\t});
\t
\tmodule_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\\'code\\']', 'change', function() {
\tvar part = this.value.split('.');
\t
\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 418
        yield ($context["user_token"] ?? null);
        yield "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 420
        yield ($context["user_token"] ?? null);
        yield "&module_id=' + part[1]);
\t}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');
//--></script> 
</div>
";
        // line 427
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "design/layout_form.twig";
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
        return array (  1238 => 427,  1228 => 420,  1223 => 418,  1198 => 398,  1193 => 395,  1186 => 393,  1183 => 392,  1172 => 390,  1167 => 389,  1159 => 387,  1157 => 386,  1152 => 385,  1148 => 384,  1140 => 379,  1129 => 371,  1125 => 370,  1122 => 369,  1111 => 367,  1107 => 366,  1103 => 365,  1095 => 360,  1078 => 346,  1074 => 344,  1067 => 342,  1064 => 341,  1053 => 339,  1048 => 338,  1040 => 336,  1038 => 335,  1033 => 334,  1029 => 333,  1021 => 327,  1015 => 326,  1012 => 325,  1010 => 324,  1001 => 320,  995 => 319,  989 => 318,  983 => 317,  980 => 316,  973 => 314,  970 => 313,  964 => 312,  956 => 310,  948 => 308,  945 => 307,  940 => 306,  937 => 305,  929 => 303,  921 => 301,  918 => 300,  916 => 299,  911 => 298,  907 => 297,  903 => 296,  897 => 294,  894 => 293,  890 => 292,  883 => 288,  869 => 277,  865 => 275,  858 => 273,  855 => 272,  844 => 270,  839 => 269,  831 => 267,  829 => 266,  824 => 265,  820 => 264,  812 => 258,  806 => 257,  803 => 256,  801 => 255,  792 => 251,  786 => 250,  780 => 249,  774 => 248,  771 => 247,  764 => 245,  761 => 244,  755 => 243,  747 => 241,  739 => 239,  736 => 238,  731 => 237,  728 => 236,  720 => 234,  712 => 232,  709 => 231,  707 => 230,  702 => 229,  698 => 228,  694 => 227,  688 => 225,  685 => 224,  681 => 223,  674 => 219,  662 => 210,  658 => 208,  651 => 206,  648 => 205,  637 => 203,  632 => 202,  624 => 200,  622 => 199,  617 => 198,  613 => 197,  605 => 191,  599 => 190,  596 => 189,  594 => 188,  585 => 184,  579 => 183,  573 => 182,  567 => 181,  564 => 180,  557 => 178,  554 => 177,  548 => 176,  540 => 174,  532 => 172,  529 => 171,  524 => 170,  521 => 169,  513 => 167,  505 => 165,  502 => 164,  500 => 163,  495 => 162,  491 => 161,  487 => 160,  481 => 158,  478 => 157,  474 => 156,  467 => 152,  453 => 141,  449 => 139,  442 => 137,  439 => 136,  428 => 134,  423 => 133,  415 => 131,  413 => 130,  408 => 129,  404 => 128,  396 => 122,  390 => 121,  387 => 120,  385 => 119,  376 => 115,  370 => 114,  364 => 113,  358 => 112,  355 => 111,  348 => 109,  345 => 108,  339 => 107,  331 => 105,  323 => 103,  320 => 102,  315 => 101,  312 => 100,  304 => 98,  296 => 96,  293 => 95,  291 => 94,  286 => 93,  282 => 92,  278 => 91,  272 => 89,  269 => 88,  265 => 87,  258 => 83,  251 => 78,  249 => 77,  245 => 76,  236 => 70,  230 => 66,  224 => 65,  222 => 64,  215 => 62,  207 => 61,  204 => 60,  198 => 59,  190 => 57,  182 => 55,  179 => 54,  175 => 53,  171 => 52,  167 => 51,  162 => 50,  157 => 49,  155 => 48,  147 => 43,  143 => 42,  136 => 37,  130 => 35,  128 => 34,  122 => 33,  117 => 31,  112 => 29,  107 => 27,  101 => 24,  97 => 22,  89 => 18,  87 => 17,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "design/layout_form.twig", "");
    }
}
