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

/* default/template/account/login.twig */
class __TwigTemplate_768bb6862efd585c342c843c241d603e extends Template
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
<div id=\"account-login\" class=\"container\">
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
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 26
        yield ($context["text_new_customer"] ?? null);
        yield "</h2>
            <p><strong>";
        // line 27
        yield ($context["text_register"] ?? null);
        yield "</strong></p>
            <p>";
        // line 28
        yield ($context["text_register_account"] ?? null);
        yield "</p>
            <a href=\"";
        // line 29
        yield ($context["register"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</a></div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 33
        yield ($context["text_returning_customer"] ?? null);
        yield "</h2>
            <p><strong>";
        // line 34
        yield ($context["text_i_am_returning_customer"] ?? null);
        yield "</strong></p>
            <form action=\"";
        // line 35
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 37
        yield ($context["entry_email"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 38
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 41
        yield ($context["entry_password"] ?? null);
        yield "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 42
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 43
        yield ($context["forgotten"] ?? null);
        yield "\">";
        yield ($context["text_forgotten"] ?? null);
        yield "</a></div>
              <input type=\"submit\" value=\"";
        // line 44
        yield ($context["button_login"] ?? null);
        yield "\" class=\"btn btn-primary\" />
              ";
        // line 45
        if ((($tmp = ($context["redirect"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "              <input type=\"hidden\" name=\"redirect\" value=\"";
            yield ($context["redirect"] ?? null);
            yield "\" />
              ";
        }
        // line 48
        yield "            </form>
          </div>
        </div>
      </div>
      ";
        // line 52
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 53
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 55
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/account/login.twig";
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
        return array (  207 => 55,  202 => 53,  198 => 52,  192 => 48,  186 => 46,  184 => 45,  180 => 44,  174 => 43,  168 => 42,  164 => 41,  156 => 38,  152 => 37,  147 => 35,  143 => 34,  139 => 33,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  108 => 22,  105 => 21,  102 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  88 => 15,  83 => 14,  77 => 12,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/account/login.twig", "");
    }
}
