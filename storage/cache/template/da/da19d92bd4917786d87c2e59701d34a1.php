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

/* design/translation_list.twig */
class __TwigTemplate_b67317febee160e292f02ed5ffb0c3ab extends Template
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
        yield ($context["add"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" onclick=\"confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "') ? \$('#form-translation').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
  <div class=\"container-fluid\">";
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
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 28
        yield ($context["text_list"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        yield ($context["delete"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-translation\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 37
        if ((($context["sort"] ?? null) == "store")) {
            yield "<a href=\"";
            yield ($context["sort_store"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_store"] ?? null);
            yield "</a> ";
        } else {
            yield "<a href=\"";
            yield ($context["sort_store"] ?? null);
            yield "\">";
            yield ($context["column_store"] ?? null);
            yield "</a>";
        }
        yield "</td>
                  <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "language")) {
            yield "<a href=\"";
            yield ($context["sort_language"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_language"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_language"] ?? null);
            yield "\">";
            yield ($context["column_language"] ?? null);
            yield "</a>";
        }
        yield "</td>
                  <td class=\"text-left\">";
        // line 39
        if ((($context["sort"] ?? null) == "route")) {
            yield "<a href=\"";
            yield ($context["sort_route"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_route"] ?? null);
            yield "</a> ";
        } else {
            yield "<a href=\"";
            yield ($context["sort_route"] ?? null);
            yield "\">";
            yield ($context["column_route"] ?? null);
            yield "</a>";
        }
        yield "</td>
                  <td class=\"text-left\">";
        // line 40
        if ((($context["sort"] ?? null) == "key")) {
            yield "<a href=\"";
            yield ($context["sort_key"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_key"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_key"] ?? null);
            yield "\">";
            yield ($context["column_key"] ?? null);
            yield "</a>";
        }
        yield "</td>
                  <td class=\"text-left\">";
        // line 41
        if ((($context["sort"] ?? null) == "value")) {
            yield "<a href=\"";
            yield ($context["sort_value"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_value"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_value"] ?? null);
            yield "\">";
            yield ($context["column_value"] ?? null);
            yield "</a>";
        }
        yield "</td>
                  <td class=\"text-right\">";
        // line 42
        yield ($context["column_action"] ?? null);
        yield "</td>
                </tr>
              </thead>
              <tbody>
              ";
        // line 46
        if ((($tmp = ($context["translations"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["translations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                // line 48
                yield "              <tr>
                <td class=\"text-center\">";
                // line 49
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "translation_id", [], "any", false, false, false, 49), ($context["selected"] ?? null))) {
                    // line 50
                    yield "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "translation_id", [], "any", false, false, false, 50);
                    yield "\" checked=\"checked\" />
                  ";
                } else {
                    // line 52
                    yield "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "translation_id", [], "any", false, false, false, 52);
                    yield "\" />
                  ";
                }
                // line 53
                yield "</td>
                <td class=\"text-left\">";
                // line 54
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "store", [], "any", false, false, false, 54);
                yield "</td>
                <td class=\"text-left\">";
                // line 55
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "language", [], "any", false, false, false, 55);
                yield "</td>
                <td class=\"text-left\">";
                // line 56
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "route", [], "any", false, false, false, 56);
                yield "</td>
                <td class=\"text-left\">";
                // line 57
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "key", [], "any", false, false, false, 57);
                yield "</td>
                <td class=\"text-left\">";
                // line 58
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "value", [], "any", false, false, false, 58);
                yield "</td>
                <td class=\"text-right\"><a href=\"";
                // line 59
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "edit", [], "any", false, false, false, 59);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "              ";
        } else {
            // line 63
            yield "              <tr>
                <td class=\"text-center\" colspan=\"7\">";
            // line 64
            yield ($context["text_no_results"] ?? null);
            yield "</td>
              </tr>
              ";
        }
        // line 67
        yield "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 72
        yield ($context["pagination"] ?? null);
        yield "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 73
        yield ($context["results"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 79
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
        return "design/translation_list.twig";
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
        return array (  315 => 79,  306 => 73,  302 => 72,  295 => 67,  289 => 64,  286 => 63,  283 => 62,  272 => 59,  268 => 58,  264 => 57,  260 => 56,  256 => 55,  252 => 54,  249 => 53,  243 => 52,  237 => 50,  235 => 49,  232 => 48,  227 => 47,  225 => 46,  218 => 42,  200 => 41,  182 => 40,  164 => 39,  146 => 38,  128 => 37,  119 => 31,  113 => 28,  109 => 26,  101 => 22,  98 => 21,  90 => 17,  88 => 16,  83 => 13,  72 => 11,  68 => 10,  63 => 8,  56 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "design/translation_list.twig", "");
    }
}
