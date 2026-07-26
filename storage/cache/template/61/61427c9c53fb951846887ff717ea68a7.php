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

/* shokeru/template/common/cart.twig */
class __TwigTemplate_6b6d4c1529f7ce326d10811b0c2ccc9b extends Template
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
        yield "<section id=\"cart\" class=\"busket\">
            <div class=\"busket__inner\">
                <div class=\"busket__top\">
                    <h2 class=\"busket__title\">";
        // line 4
        yield ($context["text_items"] ?? null);
        yield "</h2>
                    <button class=\"busket__close\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" fill=\"none\">
                            <rect x=\"9\" y=\"28.7988\" width=\"28\" height=\"4\" transform=\"rotate(-45 9 28.7988)\" fill=\"#202222\"/>
                            <rect x=\"28.7988\" y=\"31.627\" width=\"9\" height=\"4\" transform=\"rotate(-135 28.7988 31.627)\" fill=\"#202222\"/>
                            <rect x=\"11.8281\" y=\"9\" width=\"9\" height=\"4\" transform=\"rotate(45 11.8281 9)\" fill=\"#202222\"/>
                        </svg>
                    </button>
                </div>
                <div class=\"busket__block\">


                    <div class=\"busket__item\">
                        <a class=\"busket__item-image\" href=\"#\">
                            <img src=\"img/cart/1.png\" alt=\"\">
                        </a>
                        <div class=\"busket__item-content\">
                            <a class=\"busket__item-title\" href=\"#\">
                                <h3>Шокер 1102 Scorpion (950W)</h3>
                            </a>
                            <p class=\"busket__item-price\"><span class=\"price-old\">520 грн</span> 450 грн</p>
                            <button class=\"busket__item-delete\"></button>
                        </div>
                    </div>

                </div>
                <div class=\"busket__bottom\">
                    <div class=\"busket__bottom-item\">
                        <p class=\"busket__bottom-descr\">Итого</p>
                        <p class=\"busket__bottom-descr\">34450 грн</p>
                    </div>
                    <div class=\"busket__bottom-item\">
                        <p class=\"busket__bottom-descr\">Скидка 5%</p>
                        <p class=\"busket__bottom-descr\">175 грн</p>
                    </div>
                    <div class=\"busket__bottom-item\">
                        <p class=\"busket__bottom-name\">К оплате</p>
                        <p class=\"busket__bottom-name\">3325 грн</p>
                    </div>
                </div>
                <div class=\"busket__buttons\">
                    <a class=\"busket__btn btn-3\" href=\"";
        // line 45
        yield ($context["cart"] ?? null);
        yield "\">";
        yield ($context["text_cart"] ?? null);
        yield "</a>
                    <a class=\"busket__btn btn-4\" href=\"";
        // line 46
        yield ($context["checkout"] ?? null);
        yield "\">";
        yield ($context["text_checkout"] ?? null);
        yield "</a>
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
        return "shokeru/template/common/cart.twig";
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
        return array (  97 => 46,  91 => 45,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/common/cart.twig", "");
    }
}
