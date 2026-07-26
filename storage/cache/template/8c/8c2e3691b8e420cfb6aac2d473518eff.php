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

/* catalog/manufacturer_form.twig */
class __TwigTemplate_38727c3f64efa0b5b81085880784d81a extends Template
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
        <button type=\"submit\" form=\"form-manufacturer\" data-toggle=\"tooltip\" title=\"";
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
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-manufacturer\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 29
        yield ($context["tab_seo"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
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
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_name"] ?? null);
            yield "</div>
                  ";
        }
        // line 39
        yield "</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 42
        yield ($context["entry_store"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 45
            yield "                    <div class=\"checkbox\">
                      <label>";
            // line 46
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 46), ($context["manufacturer_store"] ?? null))) {
                // line 47
                yield "                        <input type=\"checkbox\" name=\"manufacturer_store[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 47);
                yield "\" checked=\"checked\" />
                        ";
                // line 48
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 48);
                yield "
                        ";
            } else {
                // line 50
                yield "                        <input type=\"checkbox\" name=\"manufacturer_store[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 50);
                yield "\" />
                        ";
                // line 51
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 51);
                yield "
                        ";
            }
            // line 52
            yield "</label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 58
        yield ($context["entry_image"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 59
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" /></a>
                  <input type=\"hidden\" name=\"image\" value=\"";
        // line 60
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 64
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 66
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 71
        yield ($context["text_keyword"] ?? null);
        yield "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 76
        yield ($context["entry_store"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 77
        yield ($context["entry_keyword"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 82
            yield "                  <tr>
                    <td class=\"text-left\">";
            // line 83
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 83);
            yield "</td>
                    <td class=\"text-left\">";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 85
                yield "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 85);
                yield "/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 85);
                yield ".png\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 85);
                yield "\" /></span>
                        <input type=\"text\" name=\"manufacturer_seo_url[";
                // line 86
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 86);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
                yield "]\" value=\"";
                if ((($tmp = (($_v0 = (($_v1 = ($context["manufacturer_seo_url"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 86)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v2 = (($_v3 = ($context["manufacturer_seo_url"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 86)] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null);
                }
                yield "\" placeholder=\"";
                yield ($context["entry_keyword"] ?? null);
                yield "\" class=\"form-control\" />
                      </div>
                      ";
                // line 88
                if ((($tmp = (($_v4 = (($_v5 = ($context["error_keyword"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 88)] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 89
                    yield "                      <div class=\"text-danger\">";
                    yield (($_v6 = (($_v7 = ($context["error_keyword"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 89)] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null);
                    yield "</div>
                      ";
                }
                // line 90
                yield " 
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 104
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/manufacturer_form.twig";
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
        return array (  318 => 104,  306 => 94,  298 => 91,  291 => 90,  285 => 89,  283 => 88,  270 => 86,  261 => 85,  257 => 84,  253 => 83,  250 => 82,  246 => 81,  239 => 77,  235 => 76,  227 => 71,  217 => 66,  212 => 64,  205 => 60,  199 => 59,  195 => 58,  189 => 54,  181 => 52,  176 => 51,  171 => 50,  166 => 48,  161 => 47,  159 => 46,  156 => 45,  152 => 44,  147 => 42,  142 => 39,  136 => 38,  134 => 37,  128 => 36,  123 => 34,  115 => 29,  111 => 28,  106 => 26,  100 => 23,  96 => 21,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "catalog/manufacturer_form.twig", "");
    }
}
