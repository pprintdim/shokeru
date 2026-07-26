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

/* shokeru/template/common/home.twig */
class __TwigTemplate_a5b8c749e698d0e95526a79eece83947 extends Template
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
<main class=\"main\">
  ";
        // line 3
        yield ($context["content_top"] ?? null);
        yield "
  <div class=\"videoBlock\">
            <div class=\"container\">
                <div class=\"videoBlock__inner\">
                    <div class=\"videoBlock__video\">
                        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/50o6dsdbpUU?si=xlxqdInaOR4SXCXG\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"saleTextLine\">
            <div class=\"saleTextLine__inner\">

               ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 18
            yield "                <p class=\"saleTextLine-text\">
                  ";
            // line 19
            yield ((($context["i"] % 2 != 0)) ? ("sale 40%") : ("распродажа 40%"));
            yield "
                </p>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
            </div>
        </div>

        <section class=\"feedback\">
            <div class=\"container\">
                <div class=\"feedback__inner\">
                    <h2 class=\"feedback__title title\">Контакт <span>Хотите поговорить с нами напрямую?</span></h2>
                    <form class=\"feedback__form\" action=\"#\">
                        <input class=\"feedback__form-input\" type=\"text\" placeholder=\"Ваше Имя\" required>
                        <input class=\"feedback__form-input\" type=\"text\" placeholder=\"Email\">
                        <input class=\"feedback__form-input\" type=\"text\" placeholder=\"Ваш номер телефона\" required>
                        <button class=\"feedback__form-btn btn\">Отправить</button>
                    </form>
                </div>
            </div>
        </section>
  ";
        // line 39
        yield ($context["content_bottom"] ?? null);
        yield "
";
        // line 40
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/common/home.twig";
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
        return array (  103 => 40,  99 => 39,  80 => 22,  71 => 19,  68 => 18,  64 => 17,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/common/home.twig", "");
    }
}
