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

/* shokeru/template/extension/module/account.twig */
class __TwigTemplate_d3b168e53236828b178fbb3cdbd428cb extends Template
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
        yield "<div class=\"profile__left\">
    <div class=\"profile__left-top\">
        <div class=\"profile__left-image\">
                                <img src=\"img/profile.png\" alt=\"\">
                            </div>
                            <div class=\"profile__left-about\">
                                <h1 class=\"profile__left-title\">Мой профиль</h1>
                                <p class=\"profile__left-email\">Ekaterinamail@gmail.com</p>
                            </div>
                        </div>
                        <div class=\"profile__left-select\">
                            <a href=\"";
        // line 12
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["account"] ?? null), "href", [], "any", false, false, false, 12);
        yield "\" class=\"profile__left-btn";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["account"] ?? null), "active", [], "any", false, false, false, 12);
        yield "\" data-profile-btn=\"user-data\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\">
                                    <path d=\"M12 3H13.5C13.8978 3 14.2794 3.15804 14.5607 3.43934C14.842 3.72064 15 4.10218 15 4.5V15C15 15.3978 14.842 15.7794 14.5607 16.0607C14.2794 16.342 13.8978 16.5 13.5 16.5H4.5C4.10218 16.5 3.72064 16.342 3.43934 16.0607C3.15804 15.7794 3 15.3978 3 15V4.5C3 4.10218 3.15804 3.72064 3.43934 3.43934C3.72064 3.15804 4.10218 3 4.5 3H6\" stroke=\"#202222\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                    <path d=\"M11.25 1.5H6.75C6.55109 1.5 6.36032 1.57902 6.21967 1.71967C6.07902 1.86032 6 2.05109 6 2.25V3.75C6 3.94891 6.07902 4.13968 6.21967 4.28033C6.36032 4.42098 6.55109 4.5 6.75 4.5H11.25C11.4489 4.5 11.6397 4.42098 11.7803 4.28033C11.921 4.13968 12 3.94891 12 3.75V2.25C12 2.05109 11.921 1.86032 11.7803 1.71967C11.6397 1.57902 11.4489 1.5 11.25 1.5V1.5Z\" stroke=\"#202222\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                    <path d=\"M9 8.25H12\" stroke=\"#202222\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                    <path d=\"M9 12H12\" stroke=\"#202222\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                    <path d=\"M6 8.25H6.0075\" stroke=\"#202222\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                    <path d=\"M6 12H6.0075\" stroke=\"#202222\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                </svg>
                                ";
        // line 21
        yield ((($context["text_account"] ?? null)) ? ($context["text_account"]) : (""));
        yield "
                            </a>
                            <a href=\"";
        // line 23
        yield ($context["order"] ?? null);
        yield "\" class=\"profile__left-btn\" data-profile-btn=\"my-orders\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\">
                                    <path d=\"M14.25 2.25H3.75C2.92157 2.25 2.25 2.92157 2.25 3.75V14.25C2.25 15.0784 2.92157 15.75 3.75 15.75H14.25C15.0784 15.75 15.75 15.0784 15.75 14.25V3.75C15.75 2.92157 15.0784 2.25 14.25 2.25Z\" stroke=\"#202222\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                    <path d=\"M8.25 2.25V8.25L10.5 6L12.75 8.25V2.25\" stroke=\"#202222\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                </svg>
                                ";
        // line 28
        yield ((($context["text_order"] ?? null)) ? ($context["text_order"]) : ("Мои заказы"));
        yield "
                            </a>
                            <a href=\"";
        // line 30
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["wishlist"] ?? null), "href", [], "any", false, false, false, 30);
        yield "\" class=\"profile__left-btn";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["wishlist"] ?? null), "active", [], "any", false, false, false, 30);
        yield "\" data-profile-btn=\"tracked-products\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\">
                                    <path d=\"M3 16.5H13.5C13.8978 16.5 14.2794 16.342 14.5607 16.0607C14.842 15.7794 15 15.3978 15 15V5.625L10.875 1.5H4.5C4.10218 1.5 3.72064 1.65804 3.43934 1.93934C3.15804 2.22064 3 2.60218 3 3V5.25\" stroke=\"#202222\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                    <path d=\"M10.5 1.5V6H15\" stroke=\"#202222\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                    <path d=\"M3.75 12.75C4.04547 12.75 4.33806 12.6918 4.61104 12.5787C4.88402 12.4657 5.13206 12.2999 5.34099 12.091C5.54992 11.8821 5.71566 11.634 5.82873 11.361C5.9418 11.0881 6 10.7955 6 10.5C6 10.2045 5.9418 9.91194 5.82873 9.63896C5.71566 9.36598 5.54992 9.11794 5.34099 8.90901C5.13206 8.70008 4.88402 8.53434 4.61104 8.42127C4.33806 8.3082 4.04547 8.25 3.75 8.25C3.15326 8.25 2.58097 8.48705 2.15901 8.90901C1.73705 9.33097 1.5 9.90326 1.5 10.5C1.5 11.0967 1.73705 11.669 2.15901 12.091C2.58097 12.5129 3.15326 12.75 3.75 12.75V12.75Z\" stroke=\"#202222\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                    <path d=\"M6.75 13.5L5.625 12.375\" stroke=\"#202222\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                </svg>
                                ";
        // line 37
        yield ((($context["text_widhlist"] ?? null)) ? ($context["text_widhlist"]) : ("Отслеживаемы товары"));
        yield "<span>3</span>
                            </a>
                            <a href=\"";
        // line 39
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["download"] ?? null), "href", [], "any", false, false, false, 39);
        yield "\" class=\"profile__left-btn";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["download"] ?? null), "active", [], "any", false, false, false, 39);
        yield "\" data-profile-btn=\"files\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\">
                                    <path d=\"M15.75 11.25V14.25C15.75 14.6478 15.592 15.0294 15.3107 15.3107C15.0294 15.592 14.6478 15.75 14.25 15.75H3.75C3.35218 15.75 2.97064 15.592 2.68934 15.3107C2.40804 15.0294 2.25 14.6478 2.25 14.25V11.25\" stroke=\"#202222\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                    <path d=\"M5.25 7.5L9 11.25L12.75 7.5\" stroke=\"#202222\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                    <path d=\"M9 11.25V2.25\" stroke=\"#202222\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                </svg>
                                ";
        // line 45
        yield ((($context["text_download"] ?? null)) ? ($context["text_download"]) : ("Отслеживаемы товары"));
        yield "<
                            </button>
                            <a href=\"";
        // line 47
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["logout"] ?? null), "href", [], "any", false, false, false, 47);
        yield "\" class=\"profile__left-btn";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["logout"] ?? null), "active", [], "any", false, false, false, 47);
        yield "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\">
                                    <path d=\"M6.75 15.75H3.75C3.35218 15.75 2.97064 15.592 2.68934 15.3107C2.40804 15.0294 2.25 14.6478 2.25 14.25V3.75C2.25 3.35218 2.40804 2.97064 2.68934 2.68934C2.97064 2.40804 3.35218 2.25 3.75 2.25H6.75\" stroke=\"#202222\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                    <path d=\"M12 12.75L15.75 9L12 5.25\" stroke=\"#202222\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                    <path d=\"M15.75 9H6.75\" stroke=\"#202222\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                </svg>
                                ";
        // line 53
        yield ($context["text_logout"] ?? null);
        yield "
                            </a>
                        </div>
                    </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/extension/module/account.twig";
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
        return array (  131 => 53,  120 => 47,  115 => 45,  104 => 39,  99 => 37,  87 => 30,  82 => 28,  74 => 23,  69 => 21,  55 => 12,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/account.twig", "");
    }
}
