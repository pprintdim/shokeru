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

/* shokeru/template/information/information.twig */
class __TwigTemplate_1433463fe2a74a2fb90022af1a2944ca extends Template
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
";
        // line 2
        yield ($context["content_top"] ?? null);
        yield "
\t<section class=\"infoPage infoPage-";
        // line 3
        yield ($context["slug"] ?? null);
        yield "\">
        <div class=\"container\">
            <div class=\"infoPage__inner\">
                <h1 class=\"infoPage__title main-title\">";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                 <p class=\"infoPage__name\">";
        // line 7
        yield ($context["meta_description"] ?? null);
        yield "</p>
                  ";
        // line 8
        yield ($context["description"] ?? null);
        yield "
            </div>
        </div>
    </section>
";
        // line 12
        yield ($context["content_bottom"] ?? null);
        yield "
";
        // line 13
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/information/information.twig";
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
        return array (  75 => 13,  71 => 12,  64 => 8,  60 => 7,  56 => 6,  50 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/information/information.twig", "");
    }
}
