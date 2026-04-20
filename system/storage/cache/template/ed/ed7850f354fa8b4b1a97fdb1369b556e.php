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

/* shokeru/template/information/contact.twig */
class __TwigTemplate_6dde5c194b87ad0d3543b986497255f4 extends Template
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
<section class=\"contacts\">
            <div class=\"container\">
                <div class=\"contacts__inner\">
                    <h2 class=\"contacts__title main-title\">";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h2>
                    <div class=\"contacts__block\">
                        <div class=\"contacts__item\">
                            <div class=\"contacts__item-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\">
                                    <path d=\"M32 4.66666C37.8348 4.66666 43.4308 6.98422 47.5566 11.11C51.6824 15.2358 54 20.8319 54 26.6667C54 35.1961 48.4683 43.3753 42.5479 49.6247C39.6286 52.7061 36.7024 55.2266 34.5039 56.9772C33.4849 57.7886 32.6251 58.4311 32 58.8854C31.3749 58.4311 30.5151 57.7886 29.4961 56.9772C27.2976 55.2266 24.3714 52.7061 21.4521 49.6247C15.5317 43.3753 10 35.1961 10 26.6667L10.0068 26.1208C10.1466 20.4838 12.4464 15.107 16.4434 11.11C20.5692 6.98422 26.1652 4.66666 32 4.66666Z\" stroke=\"#202222\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                    <path d=\"M32 20.6667C35.3137 20.6667 38 23.3529 38 26.6667C38 29.9804 35.3137 32.6667 32 32.6667C28.6863 32.6667 26 29.9804 26 26.6667C26 23.3529 28.6863 20.6667 32 20.6667Z\" stroke=\"#202222\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                </svg>
                            </div>
                            <p class=\"contacts__item-descr\">";
        // line 14
        yield ($context["address"] ?? null);
        yield "</p>
                        </div>
                        <div class=\"contacts__item\">
                            <div class=\"contacts__item-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\">
                                    <path d=\"M18.9805 7.33307C19.7893 7.32511 20.5742 7.61131 21.1875 8.13873C21.7242 8.60032 22.098 9.21928 22.2588 9.90338L22.3145 10.2003C22.6724 12.9034 23.3338 15.5576 24.2871 18.1124L24.2891 18.1172C24.5132 18.7137 24.5616 19.3622 24.4287 19.9854C24.2958 20.6086 23.9871 21.1808 23.5391 21.6339L20.1602 25.0128C19.5237 25.6494 19.391 26.6325 19.8359 27.4151C23.81 34.4042 29.5969 40.191 36.5859 44.1651C37.3685 44.6101 38.3516 44.4773 38.9883 43.8409L42.3672 40.462C42.8203 40.0139 43.3925 39.7053 44.0156 39.5723C44.6388 39.4394 45.2873 39.4878 45.8838 39.712L45.8887 39.7139C48.4462 40.6682 51.1034 41.3299 53.8096 41.6876C54.6161 41.8033 55.352 42.2113 55.8789 42.8331C56.4075 43.4569 56.6882 44.253 56.668 45.0704V53.128C56.6699 53.592 56.5745 54.0514 56.3887 54.4766C56.2027 54.9019 55.9299 55.2839 55.5879 55.5977C55.2459 55.9115 54.842 56.1502 54.4023 56.2989C53.9644 56.447 53.5005 56.5018 53.04 56.461C45.1564 55.5995 37.5839 52.9041 30.9297 48.5889L30.9141 48.5782L30.3359 48.2061C24.3916 44.3131 19.3431 39.1961 15.5293 33.1944L15.5195 33.1797L15.1182 32.5489C11.0203 26.0144 8.46338 18.6292 7.64551 10.9532C7.60612 10.4967 7.66134 10.0369 7.80762 9.6026C7.95533 9.16413 8.19197 8.76073 8.50391 8.41901C8.81589 8.07724 9.19585 7.80423 9.61914 7.61725C10.0424 7.43029 10.5002 7.33352 10.9629 7.33307H18.9805Z\" stroke=\"black\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                </svg>
                            </div>
                            <a class=\"contacts__item-descr\" href=\"";
        // line 22
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["phones"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "href", [], "any", false, false, false, 22);
        yield "\">";
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["phones"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null), "label", [], "any", false, false, false, 22);
        yield "</a>
                        </div>
                        <div class=\"contacts__item\">
                            <div class=\"contacts__item-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\">
                                    <path d=\"M10.666 12.6667H53.333C55.1617 12.6667 56.6658 14.171 56.666 15.9997V47.9997C56.666 49.8284 55.1618 51.3336 53.333 51.3336H10.666C8.8374 51.3335 7.33301 49.8283 7.33301 47.9997V15.9997C7.33318 14.2281 8.74522 12.7604 10.4961 12.6706L10.666 12.6667Z\" stroke=\"black\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                    <mask id=\"path-2-inside-1_21_3053\" fill=\"white\">
                                        <path d=\"M58.6663 16L31.9997 34.6667L5.33301 16\"/>
                                    </mask>
                                    <path d=\"M60.9602 19.2769C62.77 18.0101 63.2101 15.5159 61.9433 13.7062C60.6764 11.8964 58.1823 11.4562 56.3725 12.7231L60.9602 19.2769ZM31.9997 34.6667L29.7058 37.9436C31.0831 38.9077 32.9162 38.9077 34.2935 37.9436L31.9997 34.6667ZM7.62686 12.7231C5.81706 11.4562 3.32294 11.8964 2.05608 13.7062C0.789222 15.5159 1.22936 18.0101 3.03916 19.2769L7.62686 12.7231ZM58.6663 16L56.3725 12.7231L29.7058 31.3897L31.9997 34.6667L34.2935 37.9436L60.9602 19.2769L58.6663 16ZM31.9997 34.6667L34.2935 31.3897L7.62686 12.7231L5.33301 16L3.03916 19.2769L29.7058 37.9436L31.9997 34.6667Z\" fill=\"black\" mask=\"url(#path-2-inside-1_21_3053)\"/>
                                </svg>
                            </div>
                            <a class=\"contacts__item-descr\" href=\"mailto:";
        // line 34
        yield ($context["email"] ?? null);
        yield "\">";
        yield ($context["email"] ?? null);
        yield "</a>
                        </div>
                        <div class=\"contacts__item\">
                            <div class=\"contacts__item-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\">
                                    <path d=\"M32 7.33331C45.6229 7.33349 56.666 18.3774 56.666 32.0003C56.6658 45.6231 45.6228 56.6661 32 56.6663C18.3771 56.6663 7.33319 45.6232 7.33301 32.0003C7.33301 18.3773 18.377 7.33331 32 7.33331Z\" stroke=\"black\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                    <path d=\"M32 16V32L42.6667 37.3333\" stroke=\"black\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                </svg>
                            </div>
                            <p class=\"contacts__item-descr\">";
        // line 43
        yield ($context["open"] ?? null);
        yield "</p>
                        </div>
                        <div class=\"contacts__social\">
                            <a class=\"contacts__social-link\" href=\"";
        // line 46
        yield ($context["instagram"] ?? null);
        yield "\" target=\"_blank\">
                                <div class=\"contacts__social-icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\">
                                        <path d=\"M18.666 7.33331H45.333C51.5921 7.33332 56.6658 12.4072 56.666 18.6663V45.3333C56.666 51.5925 51.5922 56.6663 45.333 56.6663H18.666C12.4069 56.6661 7.33301 51.5924 7.33301 45.3333V18.6663C7.33318 12.4074 12.407 7.33349 18.666 7.33331Z\" stroke=\"black\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                        <path d=\"M42.6662 30.32C42.9953 32.5393 42.6162 34.8059 41.5829 36.7974C40.5496 38.7888 38.9146 40.4038 36.9106 41.4125C34.9065 42.4212 32.6354 42.7723 30.4203 42.4158C28.2052 42.0594 26.1589 41.0136 24.5724 39.4271C22.986 37.8406 21.9402 35.7943 21.5837 33.5792C21.2273 31.3642 21.5784 29.0931 22.5871 27.089C23.5958 25.085 25.2107 23.45 27.2022 22.4167C29.1936 21.3833 31.4602 21.0042 33.6795 21.3333C35.9433 21.669 38.0391 22.7239 39.6574 24.3422C41.2756 25.9604 42.3305 28.0562 42.6662 30.32Z\" stroke=\"black\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                        <path d=\"M46.667 17.3333H46.6937\" stroke=\"black\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                    </svg>
                                </div>
                                <p class=\"contacts__social-descr\">Instagram</p>
                            </a>
                            <a class=\"contacts__social-link\" href=\"";
        // line 56
        yield ($context["facebook"] ?? null);
        yield "\" target=\"_blank\">
                                <div class=\"contacts__social-icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\">
                                        <path d=\"M48.0003 5.33331H40.0003C36.4641 5.33331 33.0727 6.73807 30.5722 9.23856C28.0718 11.739 26.667 15.1304 26.667 18.6666V26.6666H18.667V37.3333H26.667V58.6666H37.3337V37.3333H45.3337L48.0003 26.6666H37.3337V18.6666C37.3337 17.9594 37.6146 17.2811 38.1147 16.781C38.6148 16.2809 39.2931 16 40.0003 16H48.0003V5.33331Z\" stroke=\"black\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                    </svg>
                                </div>
                                <p class=\"contacts__social-descr\">facebook</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
";
        // line 69
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/information/contact.twig";
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
        return array (  138 => 69,  122 => 56,  109 => 46,  103 => 43,  89 => 34,  72 => 22,  61 => 14,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/information/contact.twig", "");
    }
}
