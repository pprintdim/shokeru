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

/* default/template/extension/module/account.twig */
class __TwigTemplate_081e666c294bbbcd65200cd8e9aa4f46 extends Template
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
        yield "<div class=\"list-group\">
  ";
        // line 2
        if ((($tmp =  !($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "  <a href=\"";
            yield ($context["login"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_login"] ?? null);
            yield "</a> <a href=\"";
            yield ($context["register"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_register"] ?? null);
            yield "</a> <a href=\"";
            yield ($context["forgotten"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_forgotten"] ?? null);
            yield "</a>
  ";
        }
        // line 5
        yield "  <a href=\"";
        yield ($context["account"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_account"] ?? null);
        yield "</a>
  ";
        // line 6
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "  <a href=\"";
            yield ($context["edit"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_edit"] ?? null);
            yield "</a> <a href=\"";
            yield ($context["password"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_password"] ?? null);
            yield "</a>
  ";
        }
        // line 9
        yield "  <a href=\"";
        yield ($context["address"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_address"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["wishlist"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["order"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_order"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["download"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_download"] ?? null);
        yield "</a><a href=\"";
        yield ($context["recurring"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_recurring"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["reward"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_reward"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["return"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_return"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["transaction"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_transaction"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["newsletter"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a>
  ";
        // line 10
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "  <a href=\"";
            yield ($context["logout"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_logout"] ?? null);
            yield "</a>
  ";
        }
        // line 13
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/extension/module/account.twig";
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
        return array (  133 => 13,  125 => 11,  123 => 10,  84 => 9,  72 => 7,  70 => 6,  63 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/extension/module/account.twig", "");
    }
}
