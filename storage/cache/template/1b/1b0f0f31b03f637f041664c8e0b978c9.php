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

/* default/template/account/order_list.twig */
class __TwigTemplate_1ab840ba85d72e89e099aaffd8e17f64 extends Template
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
        yield "
<div id=\"account-order\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "    <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 11
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 13
            yield "    ";
        } else {
            // line 14
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 15
            yield "    ";
        }
        // line 16
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">";
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 17
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      ";
        // line 18
        if ((($tmp = ($context["orders"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-right\">";
            // line 23
            yield ($context["column_order_id"] ?? null);
            yield "</td>
              <td class=\"text-left\">";
            // line 24
            yield ($context["column_customer"] ?? null);
            yield "</td>
              <td class=\"text-right\">";
            // line 25
            yield ($context["column_product"] ?? null);
            yield "</td>
              <td class=\"text-left\">";
            // line 26
            yield ($context["column_status"] ?? null);
            yield "</td>
              <td class=\"text-right\">";
            // line 27
            yield ($context["column_total"] ?? null);
            yield "</td>
              <td class=\"text-left\">";
            // line 28
            yield ($context["column_date_added"] ?? null);
            yield "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
           ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 34
                yield "            <tr>
              <td class=\"text-right\">#";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 35);
                yield "</td>
              <td class=\"text-left\">";
                // line 36
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 36);
                yield "</td>
              <td class=\"text-right\">";
                // line 37
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 37);
                yield "</td>
              <td class=\"text-left\">";
                // line 38
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 38);
                yield "</td>
              <td class=\"text-right\">";
                // line 39
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 39);
                yield "</td>
              <td class=\"text-left\">";
                // line 40
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 40);
                yield "</td>
              <td class=\"text-right\"><a href=\"";
                // line 41
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 41);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_view"] ?? null);
                yield "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "          </tbody>
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 48
            yield ($context["pagination"] ?? null);
            yield "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 49
            yield ($context["results"] ?? null);
            yield "</div>
      </div>
      ";
        } else {
            // line 52
            yield "      <p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
      ";
        }
        // line 54
        yield "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 55
        yield ($context["continue"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</a></div>
      </div>
      ";
        // line 57
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 58
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 60
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
        return "default/template/account/order_list.twig";
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
        return array (  220 => 60,  215 => 58,  211 => 57,  204 => 55,  201 => 54,  195 => 52,  189 => 49,  185 => 48,  179 => 44,  168 => 41,  164 => 40,  160 => 39,  156 => 38,  152 => 37,  148 => 36,  144 => 35,  141 => 34,  137 => 33,  129 => 28,  125 => 27,  121 => 26,  117 => 25,  113 => 24,  109 => 23,  103 => 19,  101 => 18,  97 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/account/order_list.twig", "");
    }
}
