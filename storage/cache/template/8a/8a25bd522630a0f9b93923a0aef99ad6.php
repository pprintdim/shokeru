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

/* shokeru/template/extension/module/partner_program.twig */
class __TwigTemplate_9f97609cf5d730af4e7e512c2541631e extends Template
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
        yield "<section class=\"partner\">
    <div class=\"container\">
                <div class=\"partner__inner\">
                    <div class=\"partner__content\">
                        <h2 class=\"partner__title title\">";
        // line 5
        yield ($context["title"] ?? null);
        yield "</h2>
                        <p class=\"partner__descr\">";
        // line 6
        yield ($context["content"] ?? null);
        yield "</p>
                        <div class=\"partner__buttons\">
                            <a class=\"partner__btn btn\" href=\"";
        // line 8
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["buttons"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "href", [], "any", false, false, false, 8);
        yield "\">";
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["buttons"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null), "name", [], "any", false, false, false, 8);
        yield "</a>
                            <a class=\"partner__btn btn-5\" href=\"";
        // line 9
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["buttons"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[1] ?? null) : null), "href", [], "any", false, false, false, 9);
        yield "\">";
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["buttons"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[1] ?? null) : null), "name", [], "any", false, false, false, 9);
        yield "</a>
                        </div>
                    </div>
                    <div class=\"partner__image\">
                        <img src=\"";
        // line 13
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "full", [], "any", false, false, false, 13);
        yield "\" alt=\"";
        yield ($context["title"] ?? null);
        yield "\">
                    </div>
                </div>
    </div>
</section>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/extension/module/partner_program.twig";
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
        return array (  72 => 13,  63 => 9,  57 => 8,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/partner_program.twig", "");
    }
}
