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

/* shokeru/template/common/header.twig */
class __TwigTemplate_31a1b26d68efeb8ce8ca164d2b45217e extends Template
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
        yield "<!DOCTYPE html>

<html dir=\"";
        // line 3
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">

<head>

<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

<title>";
        // line 11
        yield ($context["title"] ?? null);
        yield "</title>
<base href=\"";
        // line 12
        yield ($context["base"] ?? null);
        yield "\" />
";
        // line 13
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "<meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\" />
";
        }
        // line 16
        if ((($tmp = ($context["keywords"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "<meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\" />
";
        }
        // line 19
        yield "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\">
<link rel=\"stylesheet\" href=\"catalog/view/css/style.css\">

";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 26
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 26);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 26);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 26);
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 29
            yield "<script src=\"";
            yield $context["script"];
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 33
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 33);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 33);
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 36
            yield $context["analytic"];
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "</head>
<body class=\"body\"> 
    <header class=\"header\">
        <div class=\"container\">
            <div class=\"header__inner\">
                <a class=\"header__logo\" href=\"";
        // line 43
        yield ($context["home"] ?? null);
        yield "\">
                    <img src=\"";
        // line 44
        yield ($context["logo"] ?? null);
        yield "\" alt=\"";
        yield ($context["name"] ?? null);
        yield "\">
                </a>
                <div class=\"header__content\">
                    <div class=\"header__top\">
                        <nav class=\"header__top-menu\">
                            <ul>
                                <li>
                                    <a href=\"";
        // line 51
        yield ($context["popular"] ?? null);
        yield "\">";
        yield ((($context["text_catalog"] ?? null)) ? ($context["text_catalog"]) : ("Каталог"));
        yield "</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 54
        yield ($context["latest"] ?? null);
        yield "\">";
        yield ((($context["text_latest"] ?? null)) ? ($context["text_latest"]) : ("Новинки"));
        yield "</a>
                                </li>
                                <li>
                                    <a class=\"header__menu-sales\" href=\"";
        // line 57
        yield ($context["special"] ?? null);
        yield "\">";
        yield ((($context["text_special"] ?? null)) ? ($context["text_special"]) : ("Sales"));
        yield "</a>
                                </li>
                            </ul>
                        </nav>

                        <div class=\"header__box\">
                            ";
        // line 63
        yield ($context["language"] ?? null);
        yield "
                            <span class=\"header__box-line\"></span>
                            <div class=\"header__user\">
                                <button class=\"header__favourite\"><span>";
        // line 66
        yield ($context["wishlist_total"] ?? null);
        yield "</span></button>
                                <button class=\"header__cart cart-open\"><span>";
        // line 67
        yield ($context["cart_total"] ?? null);
        yield "</span></button>
                            </div>
                            <span class=\"header__box-line\"></span>
                            <button class=\"header__login\">";
        // line 70
        yield ($context["text_login"] ?? null);
        yield "</button>
                            <button class=\"header__search-open\"></button>
                            <button class=\"header__open menu-open\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" fill=\"none\">
                                    <path d=\"M20 30H34V26H20V30ZM6 10V14H20V10H6ZM6 22H34V18H6V22Z\" fill=\"#C5FF24\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    ";
        // line 79
        yield ($context["search"] ?? null);
        yield "
                </div>
            </div>
            <div class=\"header__menu\">
                <div class=\"container\">
                    <div class=\"header__menu-inner\">
                        <div class=\"header__menu-top\">
                            <a class=\"header__menu-logo\" href=\"index.html\">
                                <img src=\"";
        // line 87
        yield ($context["logo"] ?? null);
        yield "\" alt=\"";
        yield ($context["name"] ?? null);
        yield "\">
                            </a>
                            <button class=\"header__login\">";
        // line 89
        yield ($context["text_login"] ?? null);
        yield "</button>
                            <button class=\"header__menu-close menu-close\">";
        // line 90
        yield ((($context["text_close"] ?? null)) ? ($context["text_close"]) : ("Закрыть"));
        yield "</button>
                        </div>
                        <div class=\"header__menu-content\">
                            <div class=\"header__menu-image\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"694\" height=\"355\" viewBox=\"0 0 694 355\" fill=\"none\">
                                    <path d=\"M433.42 0L166.648 177.064L116.251 75.2606C99.1154 40.6541 124.65 0 163.288 0H433.42ZM526.488 177.064H693.136L664.578 119.275C628.627 46.3659 554.039 0 472.73 0H433.42L346.736 177.064H526.488ZM166.648 177.064H0L28.5587 234.853C64.845 307.762 139.098 354.128 220.742 354.128H260.052L346.736 177.064H166.648ZM526.488 177.064L260.052 354.128H530.184C568.822 354.128 594.021 313.474 576.885 278.867L526.488 177.064Z\" fill=\"#202222\"/>
                                </svg>
                            </div>
                            <nav class=\"header__menu-list\">
                                <ul>
                                    <li>
                                        <a class=\"active\" href=\"#\">";
        // line 101
        yield ((($context["text_home"] ?? null)) ? ($context["text_home"]) : ("Головна"));
        yield "</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 104
        yield ($context["about"] ?? null);
        yield "\">";
        yield ((($context["text_about"] ?? null)) ? ($context["text_about"]) : ("Про нас"));
        yield "</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 107
        yield ($context["shop"] ?? null);
        yield "\">";
        yield ((($context["text_shop"] ?? null)) ? ($context["text_shop"]) : ("Магазин"));
        yield "</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">";
        // line 110
        yield ((($context["text_customers_info"] ?? null)) ? ($context["text_customers_info"]) : ("Информация покупателям"));
        yield "</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 113
        yield ($context["contact"] ?? null);
        yield "\">";
        yield ((($context["text_contact"] ?? null)) ? ($context["text_contact"]) : ("Контакты"));
        yield "</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class=\"header__menu-bottom\">
                                <div class=\"header__menu-block\">
                                    <div class=\"header__menu-icon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                            <path d=\"M22.0001 16.92V19.92C22.0012 20.1985 21.9441 20.4741 21.8326 20.7293C21.721 20.9845 21.5574 21.2136 21.3521 21.4018C21.1469 21.5901 20.9046 21.7335 20.6408 21.8227C20.377 21.9119 20.0974 21.945 19.8201 21.92C16.7429 21.5856 13.7871 20.5341 11.1901 18.85C8.77388 17.3146 6.72539 15.2661 5.19006 12.85C3.50003 10.2412 2.4483 7.27097 2.12006 4.17997C2.09507 3.90344 2.12793 3.62474 2.21656 3.3616C2.30518 3.09846 2.44763 2.85666 2.63482 2.6516C2.82202 2.44653 3.04986 2.28268 3.30385 2.1705C3.55783 2.05831 3.8324 2.00024 4.11006 1.99997H7.11006C7.59536 1.9952 8.06585 2.16705 8.43382 2.48351C8.80179 2.79996 9.04213 3.23942 9.11005 3.71997C9.23668 4.68004 9.47151 5.6227 9.81006 6.52997C9.9446 6.8879 9.97372 7.27689 9.89396 7.65086C9.81421 8.02482 9.62892 8.36809 9.36005 8.63998L8.09006 9.90997C9.51361 12.4135 11.5865 14.4864 14.0901 15.91L15.3601 14.64C15.6319 14.3711 15.9752 14.1858 16.3492 14.1061C16.7231 14.0263 17.1121 14.0554 17.4701 14.19C18.3773 14.5285 19.32 14.7634 20.2801 14.89C20.7658 14.9585 21.2095 15.2032 21.5266 15.5775C21.8437 15.9518 22.0122 16.4296 22.0001 16.92Z\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                        </svg>
                                    </div>
                                    <div class=\"header__menu-tel\">
                                        ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["phones"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 126
            yield "                                          <a class=\"header__menu-link\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["phone"], "href", [], "any", false, false, false, 126);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["phone"], "label", [], "any", false, false, false, 126);
            yield "</a>
                                          ";
            // line 127
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 128
                yield "                                            <span> / </span>
                                          ";
            }
            // line 130
            yield "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "                                    </div>
                                </div>
                                <div class=\"header__menu-block\">
                                    <div class=\"header__menu-icon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                            <path d=\"M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                            <path d=\"M22 6L12 13L2 6\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                        </svg>
                                    </div>
                                    <a class=\"header__menu-link\" href=\"mailto:";
        // line 140
        yield ($context["email"] ?? null);
        yield "\">";
        yield ($context["email"] ?? null);
        yield "</a>
                                </div>
                                <div class=\"header__menu-social\">
                                    <a href=\"#\" target=\"_blank\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\">
                                            <path d=\"M18.2327 0H6.76727C3.03574 0 0 3.03574 0 6.76727V18.2329C0 21.9643 3.03574 25 6.76727 25H18.2329C21.9643 25 25 21.9643 25 18.2329V6.76727C25 3.03574 21.9643 0 18.2327 0ZM12.5 19.3357C8.7307 19.3357 5.66425 16.2693 5.66425 12.5C5.66425 8.7307 8.7307 5.66425 12.5 5.66425C16.2693 5.66425 19.3357 8.7307 19.3357 12.5C19.3357 16.2693 16.2693 19.3357 12.5 19.3357ZM19.4992 7.27634C18.3853 7.27634 17.4793 6.37035 17.4793 5.25646C17.4793 4.14257 18.3853 3.23639 19.4992 3.23639C20.6131 3.23639 21.5193 4.14257 21.5193 5.25646C21.5193 6.37035 20.6131 7.27634 19.4992 7.27634Z\" fill=\"#D2D2D2\"/>
                                            <path d=\"M12.5 7C9.46743 7 7 9.46724 7 12.5C7 15.5326 9.46743 18 12.5 18C15.5328 18 18 15.5326 18 12.5C18 9.46724 15.5328 7 12.5 7Z\" fill=\"#D2D2D2\"/>
                                        </svg>
                                    </a>
                                    <a href=\"#\" target=\"_blank\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\">
                                            <path d=\"M21.3379 0H3.66211C1.64299 0 0 1.64299 0 3.66211V21.3379C0 23.357 1.64299 25 3.66211 25H11.0352V16.1621H8.10547V11.7676H11.0352V8.78906C11.0352 6.36578 13.0064 4.39453 15.4297 4.39453H19.873V8.78906H15.4297V11.7676H19.873L19.1406 16.1621H15.4297V25H21.3379C23.357 25 25 23.357 25 21.3379V3.66211C25 1.64299 23.357 0 21.3379 0Z\" fill=\"#D2D2D2\"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>




";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/common/header.twig";
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
        return array (  365 => 140,  354 => 131,  340 => 130,  336 => 128,  334 => 127,  327 => 126,  310 => 125,  293 => 113,  287 => 110,  279 => 107,  271 => 104,  265 => 101,  251 => 90,  247 => 89,  240 => 87,  229 => 79,  217 => 70,  211 => 67,  207 => 66,  201 => 63,  190 => 57,  182 => 54,  174 => 51,  162 => 44,  158 => 43,  151 => 38,  143 => 36,  139 => 35,  128 => 33,  124 => 32,  121 => 31,  112 => 29,  108 => 28,  95 => 26,  91 => 25,  83 => 19,  77 => 17,  75 => 16,  69 => 14,  67 => 13,  63 => 12,  59 => 11,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/common/header.twig", "");
    }
}
