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

/* shokeru/template/account/password.twig */
class __TwigTemplate_c23bf35e3f55cfa86c9a64db965041c9 extends Template
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
        yield "<section class=\"userData\" data-userData=\"change-password\">
            <div class=\"container\">
                <div class=\"userData__inner\">
                    <button class=\"userData__close\">
                        Закрыть
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" fill=\"none\">
                            <rect x=\"9\" y=\"28.7991\" width=\"28\" height=\"4\" transform=\"rotate(-45 9 28.7991)\" fill=\"#202222\"/>
                            <rect x=\"28.8008\" y=\"31.6274\" width=\"9\" height=\"4\" transform=\"rotate(-135 28.8008 31.6274)\" fill=\"#202222\"/>
                            <rect x=\"11.8281\" y=\"9\" width=\"9\" height=\"4\" transform=\"rotate(45 11.8281 9)\" fill=\"#202222\"/>
                        </svg>
                    </button>
                    <div class=\"userData__info\">
                        <div class=\"userData__info-icon\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"36\" height=\"30\" viewBox=\"0 0 36 30\" fill=\"none\">
                                <path d=\"M34.5658 14.0534V4.72954C34.5658 3.7404 34.1729 2.79178 33.4735 2.09236C32.7741 1.39293 31.8254 1 30.8363 1H4.72954C3.7404 1 2.79178 1.39293 2.09236 2.09236C1.39293 2.79178 1 3.7404 1 4.72954V15.9182C1 16.9073 1.39293 17.8559 2.09236 18.5553C2.79178 19.2548 3.7404 19.6477 4.72954 19.6477H17.7829\" stroke=\"#202222\" stroke-width=\"2\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                <path d=\"M34.3421 21.3575C35.2633 21.9244 35.2055 23.3025 34.2582 23.4106L29.4713 23.9533L27.325 28.2646C26.8998 29.1205 25.5852 28.701 25.367 27.6418L23.0267 16.2369C22.8421 15.3418 23.6477 14.7786 24.4253 15.2579L34.3421 21.3575V21.3575Z\" stroke=\"#202222\" stroke-width=\"2\"/>
                                <path d=\"M17.7812 10.3425L17.7999 10.322\" stroke=\"#202222\" stroke-width=\"2\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                <path d=\"M25.2422 10.3425L25.2608 10.322\" stroke=\"#202222\" stroke-width=\"2\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                <path d=\"M10.3242 10.3425L10.3429 10.322\" stroke=\"#202222\" stroke-width=\"2\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                            </svg>
                        </div>
                        <div class=\"userData__info-content\">
                            <h2 class=\"userData__info-title\">Изменить <br>пароль</h2>
                            <p class=\"userData__info-descr\">Придумайте сложный пароль, который нельзя подобрать: от 6 до 50 символов</p>
                        </div>
                    </div>
                    <form class=\"userData__form form-block\" action=\"#\">
                        <div class=\"userData__form-item\">
                            <button class=\"userData__form-show form-show-password\" type=\"button\"></button>
                            <input class=\"userData__form-input form-input\" type=\"password\" name=\"Старый-пароль\" placeholder=\"Старый пароль*\" required>
                        </div>
                        <div class=\"userData__form-item\">
                            <button class=\"userData__form-show form-show-password\" type=\"button\"></button>
                            <input class=\"userData__form-input form-input\" type=\"password\" name=\"Пароль\" placeholder=\"Пароль*\" required>
                        </div>
                        <div class=\"userData__form-item\">
                            <button class=\"userData__form-show form-show-password\" type=\"button\"></button>
                            <input class=\"userData__form-input form-input\" type=\"password\" name=\"Повторите-пароль*\" placeholder=\"Повторите пароль*\" required>
                        </div>
                        <button class=\"userData__form-btn btn\" type=\"submit\">Изменить</button>
                    </form>
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
        return "shokeru/template/account/password.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/account/password.twig", "");
    }
}
