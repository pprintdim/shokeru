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

/* marketplace/event.twig */
class __TwigTemplate_dfa48e5c834a0db58d886a0a37a113d4 extends Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" onclick=\"confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "') ? \$('#form-event').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        yield "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        yield ($context["text_event"] ?? null);
        yield "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        yield ($context["text_list"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        yield ($context["delete"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-event\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "code")) {
            yield "<a href=\"";
            yield ($context["sort_code"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_code"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_code"] ?? null);
            yield "\">";
            yield ($context["column_code"] ?? null);
            yield "</a>";
        }
        yield "</td>
                  <td class=\"text-left\">";
        // line 39
        if ((($context["sort"] ?? null) == "status")) {
            yield "<a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>";
        }
        yield "</td>
                  <td class=\"text-right\">";
        // line 40
        if ((($context["sort"] ?? null) == "sort_order")) {
            yield "<a href=\"";
            yield ($context["sort_sort_order"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_sort_order"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_sort_order"] ?? null);
            yield "\">";
            yield ($context["column_sort_order"] ?? null);
            yield "</a>";
        }
        yield "</td>
                  <td class=\"text-right\">";
        // line 41
        yield ($context["column_action"] ?? null);
        yield "</td>
                </tr>
              </thead>
              <tbody>
              
              ";
        // line 46
        if ((($tmp = ($context["events"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 48
                yield "              <tr>
                <td class=\"text-center\">";
                // line 49
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 49), ($context["selected"] ?? null))) {
                    // line 50
                    yield "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 50);
                    yield "\" checked=\"checked\" />
                  ";
                } else {
                    // line 52
                    yield "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 52);
                    yield "\" />
                  ";
                }
                // line 53
                yield "</td>
                <td class=\"text-left\">";
                // line 54
                yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "code", [], "any", false, false, false, 54);
                yield "</td>
                <td class=\"text-left\">";
                // line 55
                yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 55);
                yield "</td>
                <td class=\"text-right\">";
                // line 56
                yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "sort_order", [], "any", false, false, false, 56);
                yield "</td>
                <td class=\"text-right\"><button type=\"button\" data-toggle=\"modal\" data-target=\"#modal-event";
                // line 57
                yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 57);
                yield "\" class=\"btn btn-info\"><i class=\"fa fa-info-circle\"></i></button>
                  ";
                // line 58
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["event"], "enabled", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "enable", [], "any", false, false, false, 58);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_enable"] ?? null);
                    yield "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>";
                } else {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "disable", [], "any", false, false, false, 58);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_disable"] ?? null);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>";
                }
                // line 59
                yield "                  <div id=\"modal-event";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 59);
                yield "\" class=\"modal text-left\">
                    <div class=\"modal-dialog\">
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                          <h4 class=\"modal-title\">";
                // line 64
                yield ($context["text_info"] ?? null);
                yield "</h4>
                        </div>
                        <div class=\"modal-body\">
                          <p><strong>";
                // line 67
                yield ($context["text_trigger"] ?? null);
                yield "</strong></p>
                          <p>";
                // line 68
                yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "trigger", [], "any", false, false, false, 68);
                yield "</p>
                          <p><strong>";
                // line 69
                yield ($context["text_action"] ?? null);
                yield "</strong></p>
                          <p>";
                // line 70
                yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "action", [], "any", false, false, false, 70);
                yield "</p>
                        </div>
                      </div>
                    </div>
                  </div></td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "              ";
        } else {
            // line 78
            yield "              <tr>
                <td class=\"text-center\" colspan=\"5\">";
            // line 79
            yield ($context["text_no_results"] ?? null);
            yield "</td>
              </tr>
              ";
        }
        // line 82
        yield "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 87
        yield ($context["pagination"] ?? null);
        yield "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 88
        yield ($context["results"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 94
        yield ($context["footer"] ?? null);
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/event.twig";
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
        return array (  317 => 94,  308 => 88,  304 => 87,  297 => 82,  291 => 79,  288 => 78,  285 => 77,  272 => 70,  268 => 69,  264 => 68,  260 => 67,  254 => 64,  245 => 59,  231 => 58,  227 => 57,  223 => 56,  219 => 55,  215 => 54,  212 => 53,  206 => 52,  200 => 50,  198 => 49,  195 => 48,  190 => 47,  188 => 46,  180 => 41,  162 => 40,  144 => 39,  126 => 38,  117 => 32,  111 => 29,  104 => 26,  96 => 22,  93 => 21,  85 => 17,  83 => 16,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/event.twig", "");
    }
}
