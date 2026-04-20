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

/* shokeru/template/extension/module/special_banner.twig */
class __TwigTemplate_f665de3422b6e097f746c903f20fbfce extends Template
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
        yield " <section class=\"pageContent pageContent-banner\">
    <div class=\"container\">
        <div class=\"pageContent__inner\">
            <div class=\"pageContent__content\">
                 <p class=\"pageContent__line\">//////////</p>
                 <h1 class=\"pageContent__title title\">
                 \t";
        // line 7
        yield ($context["title"] ?? null);
        yield "
                 \t<span>";
        // line 8
        yield ($context["description"] ?? null);
        yield "</span>
                 </h1>
            </div>
             <div class=\"pageContent__image\">
                 <img src=\"";
        // line 12
        yield ($context["image"] ?? null);
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
        return "shokeru/template/extension/module/special_banner.twig";
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
        return array (  61 => 12,  54 => 8,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/special_banner.twig", "");
    }
}
