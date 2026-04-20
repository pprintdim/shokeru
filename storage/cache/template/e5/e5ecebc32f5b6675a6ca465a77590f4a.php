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

/* marketplace/modification.twig */
class __TwigTemplate_bb5c7148980c78b5a37ef26ecf1e9830 extends Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        yield ($context["refresh"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_refresh"] ?? null);
        yield "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a> <a href=\"";
        yield ($context["clear"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_clear"] ?? null);
        yield "\" class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" onclick=\"confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "') ? \$('#form-modification').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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
        yield "    ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        yield "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        yield ($context["text_refresh"] ?? null);
        yield "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        yield ($context["text_list"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 34
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
          <li><a href=\"#tab-log\" data-toggle=\"tab\">";
        // line 35
        yield ($context["tab_log"] ?? null);
        yield "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <form action=\"";
        // line 39
        yield ($context["delete"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 45
        if ((($context["sort"] ?? null) == "name")) {
            // line 46
            yield "                        <a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a>
                        ";
        } else {
            // line 48
            yield "                        <a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a>
                        ";
        }
        // line 49
        yield "</td>
                      <td class=\"text-left\">";
        // line 50
        if ((($context["sort"] ?? null) == "author")) {
            // line 51
            yield "                        <a href=\"";
            yield ($context["sort_author"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_author"] ?? null);
            yield "</a>
                        ";
        } else {
            // line 53
            yield "                        <a href=\"";
            yield ($context["sort_author"] ?? null);
            yield "\">";
            yield ($context["column_author"] ?? null);
            yield "</a>
                        ";
        }
        // line 54
        yield "</td>
                      <td class=\"text-left\">";
        // line 55
        if ((($context["sort"] ?? null) == "version")) {
            // line 56
            yield "                        <a href=\"";
            yield ($context["sort_version"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_version"] ?? null);
            yield "</a>
                        ";
        } else {
            // line 58
            yield "                        <a href=\"";
            yield ($context["sort_version"] ?? null);
            yield "\">";
            yield ($context["column_version"] ?? null);
            yield "</a>
                        ";
        }
        // line 59
        yield "</td>
                      <td class=\"text-left\">";
        // line 60
        if ((($context["sort"] ?? null) == "status")) {
            // line 61
            yield "                        <a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>
                        ";
        } else {
            // line 63
            yield "                        <a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>
                        ";
        }
        // line 64
        yield "</td>
                      <td class=\"text-left\">";
        // line 65
        if ((($context["sort"] ?? null) == "date_added")) {
            // line 66
            yield "                        <a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a>
                        ";
        } else {
            // line 68
            yield "                        <a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a>
                        ";
        }
        // line 69
        yield "</td>
                      <td class=\"text-right\">";
        // line 70
        yield ($context["column_action"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 74
        if ((($tmp = ($context["modifications"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["modifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
                // line 76
                yield "                    <tr>
                      <td class=\"text-center\">";
                // line 77
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 77), ($context["selected"] ?? null))) {
                    // line 78
                    yield "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 78);
                    yield "\" checked=\"checked\" />
                        ";
                } else {
                    // line 80
                    yield "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 80);
                    yield "\" />
                        ";
                }
                // line 81
                yield "</td>
                      <td class=\"text-left\">";
                // line 82
                yield CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "name", [], "any", false, false, false, 82);
                yield "</td>
                      <td class=\"text-left\">";
                // line 83
                yield CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "author", [], "any", false, false, false, 83);
                yield "</td>
                      <td class=\"text-left\">";
                // line 84
                yield CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "version", [], "any", false, false, false, 84);
                yield "</td>
                      <td class=\"text-left\">";
                // line 85
                yield CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "status", [], "any", false, false, false, 85);
                yield "</td>
                      <td class=\"text-left\">";
                // line 86
                yield CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "date_added", [], "any", false, false, false, 86);
                yield "</td>
                      <td class=\"text-right\">";
                // line 87
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 88
                    yield "                        <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 88);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_link"] ?? null);
                    yield "\" class=\"btn btn-info\" target=\"_blank\"><i class=\"fa fa-link\"></i></a>
                        ";
                } else {
                    // line 90
                    yield "                        <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-link\"></i></button>
                        ";
                }
                // line 92
                yield "                        ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "enabled", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 93
                    yield "                        <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "enable", [], "any", false, false, false, 93);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_enable"] ?? null);
                    yield "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                        ";
                } else {
                    // line 95
                    yield "                        <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["modification"], "disable", [], "any", false, false, false, 95);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_disable"] ?? null);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                        ";
                }
                // line 96
                yield "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['modification'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "                    ";
        } else {
            // line 100
            yield "                    <tr>
                      <td class=\"text-center\" colspan=\"7\">";
            // line 101
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                    </tr>
                    ";
        }
        // line 104
        yield "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 109
        yield ($context["pagination"] ?? null);
        yield "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 110
        yield ($context["results"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-log\">
            <p>
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
        // line 115
        yield ($context["log"] ?? null);
        yield "</textarea>
            </p>
            <div class=\"text-center\"><a href=\"";
        // line 117
        yield ($context["clear_log"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
        yield ($context["button_clear"] ?? null);
        yield "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 124
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/modification.twig";
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
        return array (  406 => 124,  394 => 117,  389 => 115,  381 => 110,  377 => 109,  370 => 104,  364 => 101,  361 => 100,  358 => 99,  350 => 96,  342 => 95,  334 => 93,  331 => 92,  327 => 90,  319 => 88,  317 => 87,  313 => 86,  309 => 85,  305 => 84,  301 => 83,  297 => 82,  294 => 81,  288 => 80,  282 => 78,  280 => 77,  277 => 76,  272 => 75,  270 => 74,  263 => 70,  260 => 69,  252 => 68,  242 => 66,  240 => 65,  237 => 64,  229 => 63,  219 => 61,  217 => 60,  214 => 59,  206 => 58,  196 => 56,  194 => 55,  191 => 54,  183 => 53,  173 => 51,  171 => 50,  168 => 49,  160 => 48,  150 => 46,  148 => 45,  139 => 39,  132 => 35,  128 => 34,  121 => 30,  114 => 27,  106 => 23,  103 => 22,  95 => 18,  93 => 17,  87 => 13,  76 => 11,  72 => 10,  67 => 8,  60 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/modification.twig", "");
    }
}
