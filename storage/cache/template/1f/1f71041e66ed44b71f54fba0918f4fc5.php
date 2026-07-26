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
class __TwigTemplate_94cc96f51ab7bd616bfb49e3f8af2439 extends Template
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
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sale_line"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 16
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 17
                yield "                        <p class=\"saleTextLine-text\">";
                yield $context["line"];
                yield "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['line'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
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
        // line 38
        yield ($context["content_bottom"] ?? null);
        yield "
";
        // line 39
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
        return array (  110 => 39,  106 => 38,  86 => 20,  80 => 19,  71 => 17,  66 => 16,  62 => 15,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/common/home.twig", "");
    }
}
