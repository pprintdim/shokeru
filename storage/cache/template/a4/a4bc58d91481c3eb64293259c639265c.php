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

/* default/template/account/address_list.twig */
class __TwigTemplate_dc9e1a1fece5e4521a199b0342b51ae4 extends Template
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
<div id=\"account-address\" class=\"container\">
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
  ";
        // line 8
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "</div>
  ";
        }
        // line 11
        yield "  ";
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "  <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "</div>
  ";
        }
        // line 14
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 17
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 19
            yield "    ";
        } else {
            // line 20
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 21
            yield "    ";
        }
        // line 22
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">";
        yield ($context["content_top"] ?? null);
        yield "
      <h2>";
        // line 23
        yield ($context["text_address_book"] ?? null);
        yield "</h2>
      ";
        // line 24
        if ((($tmp = ($context["addresses"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 28
                yield "           <form  action=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 28);
                yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-address-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "address_id", [], "any", false, false, false, 28);
                yield "\">
          <tr>
            <td class=\"text-left\">";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "address", [], "any", false, false, false, 30);
                yield "</td>
            <td class=\"text-right\"><a href=\"";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "update", [], "any", false, false, false, 31);
                yield "\" class=\"btn btn-info\">";
                yield ($context["button_edit"] ?? null);
                yield "</a> &nbsp; 
            <a href = \"";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 32);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_delete"] ?? null);
                yield "\" class=\"btn btn-danger\" onclick=\"return confirm('";
                yield ($context["text_confirm"] ?? null);
                yield "')\">";
                yield ($context["button_delete"] ?? null);
                yield "</a></td>
          </tr>
          </form>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['result'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "        </table>
      </div>
      ";
        } else {
            // line 39
            yield "      <p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
      ";
        }
        // line 41
        yield "      
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 43
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-default\">";
        yield ($context["button_back"] ?? null);
        yield "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 44
        yield ($context["add"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_new_address"] ?? null);
        yield "</a></div>
      </div>
      ";
        // line 46
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 47
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 49
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/account/address_list.twig";
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
        return array (  200 => 49,  195 => 47,  191 => 46,  184 => 44,  178 => 43,  174 => 41,  168 => 39,  163 => 36,  147 => 32,  141 => 31,  137 => 30,  129 => 28,  125 => 27,  121 => 25,  119 => 24,  115 => 23,  108 => 22,  105 => 21,  102 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  88 => 15,  83 => 14,  77 => 12,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/account/address_list.twig", "");
    }
}
