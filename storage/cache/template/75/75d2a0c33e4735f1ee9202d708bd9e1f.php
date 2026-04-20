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

/* default/template/account/account.twig */
class __TwigTemplate_45d34450e666acc17e34be64a5d1bb99 extends Template
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
<div id=\"account-account\" class=\"container\">
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
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 14
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 16
            yield "    ";
        } else {
            // line 17
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 18
            yield "    ";
        }
        // line 19
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">";
        yield ($context["content_top"] ?? null);
        yield "
      <h2>";
        // line 20
        yield ($context["text_my_account"] ?? null);
        yield "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 22
        yield ($context["edit"] ?? null);
        yield "\">";
        yield ($context["text_edit"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 23
        yield ($context["password"] ?? null);
        yield "\">";
        yield ($context["text_password"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 24
        yield ($context["address"] ?? null);
        yield "\">";
        yield ($context["text_address"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 25
        yield ($context["wishlist"] ?? null);
        yield "\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a></li>
      </ul>
      ";
        // line 27
        if ((($tmp = ($context["credit_cards"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "      <h2>";
            yield ($context["text_credit_card"] ?? null);
            yield "</h2>
      <ul class=\"list-unstyled\">
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 31
                yield "        <li><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 31);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 31);
                yield "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['credit_card'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "      </ul>
      ";
        }
        // line 35
        yield "      <h2>";
        yield ($context["text_my_orders"] ?? null);
        yield "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 37
        yield ($context["order"] ?? null);
        yield "\">";
        yield ($context["text_order"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 38
        yield ($context["download"] ?? null);
        yield "\">";
        yield ($context["text_download"] ?? null);
        yield "</a></li>
        ";
        // line 39
        if ((($tmp = ($context["reward"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "        <li><a href=\"";
            yield ($context["reward"] ?? null);
            yield "\">";
            yield ($context["text_reward"] ?? null);
            yield "</a></li>
        ";
        }
        // line 42
        yield "        <li><a href=\"";
        yield ($context["return"] ?? null);
        yield "\">";
        yield ($context["text_return"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 43
        yield ($context["transaction"] ?? null);
        yield "\">";
        yield ($context["text_transaction"] ?? null);
        yield "</a></li>
        <li><a href=\"";
        // line 44
        yield ($context["recurring"] ?? null);
        yield "\">";
        yield ($context["text_recurring"] ?? null);
        yield "</a></li>
      </ul>
      <h2>";
        // line 46
        yield ($context["text_my_affiliate"] ?? null);
        yield "</h2>
      <ul class=\"list-unstyled\">
        ";
        // line 48
        if ((($tmp =  !($context["tracking"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "        <li><a href=\"";
            yield ($context["affiliate"] ?? null);
            yield "\">";
            yield ($context["text_affiliate_add"] ?? null);
            yield "</a></li>
        ";
        } else {
            // line 51
            yield "        <li><a href=\"";
            yield ($context["affiliate"] ?? null);
            yield "\">";
            yield ($context["text_affiliate_edit"] ?? null);
            yield "</a></li>
        <li><a href=\"";
            // line 52
            yield ($context["tracking"] ?? null);
            yield "\">";
            yield ($context["text_tracking"] ?? null);
            yield "</a></li>
        ";
        }
        // line 54
        yield "      </ul>
      <h2>";
        // line 55
        yield ($context["text_my_newsletter"] ?? null);
        yield "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 57
        yield ($context["newsletter"] ?? null);
        yield "\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a></li>
      </ul>
      ";
        // line 59
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 60
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 62
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/account/account.twig";
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
        return array (  264 => 62,  259 => 60,  255 => 59,  248 => 57,  243 => 55,  240 => 54,  233 => 52,  226 => 51,  218 => 49,  216 => 48,  211 => 46,  204 => 44,  198 => 43,  191 => 42,  183 => 40,  181 => 39,  175 => 38,  169 => 37,  163 => 35,  159 => 33,  148 => 31,  144 => 30,  138 => 28,  136 => 27,  129 => 25,  123 => 24,  117 => 23,  111 => 22,  106 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  79 => 12,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/account/account.twig", "");
    }
}
