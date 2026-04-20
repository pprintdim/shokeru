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

/* shokeru/template/account/account.twig */
class __TwigTemplate_2c883ccbabd598982fa7727f23050e75 extends Template
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

    <section class=\"profile\">
        <div class=\"container\">
            <div class=\"profile__inner\">
                ";
        // line 6
        yield ($context["column_left"] ?? null);
        yield "
                <div class=\"profile__content\">
                    <div class=\"profile__result profile-user active\" data-profile-content=\"user-data\">
                        <div class=\"profile__user-top\">
                            <div class=\"profile__user-info\">
                                    <div class=\"profile__user-info--icon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 48 48\" fill=\"none\">
                                            <path d=\"M38 44H10C7.8 44 6 42.2 6 40V12C6 9.8 7.8 8 10 8H38C40.2 8 42 9.8 42 12V40C42 42.2 40.2 44 38 44Z\" stroke=\"white\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                            <path d=\"M32 4V8\" stroke=\"white\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                            <path d=\"M16 4V8\" stroke=\"white\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                            <path d=\"M24 28C27.3137 28 30 25.3137 30 22C30 18.6863 27.3137 16 24 16C20.6863 16 18 18.6863 18 22C18 25.3137 20.6863 28 24 28Z\" stroke=\"white\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                            <path d=\"M34 37C31.2 35 27.8 34 24 34C20.2 34 16.8 35.2 14 37\" stroke=\"white\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                        </svg>
                                    </div>
                                    <p class=\"profile__user-info--name\">Ваша роль: <br><strong>";
        // line 20
        yield ($context["role"] ?? null);
        yield "</strong></p>
                                </div>
                                <div class=\"profile__user-info\">
                                    <div class=\"profile__user-info--icon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 48 48\" fill=\"none\">
                                            <path d=\"M38 10L10 38\" stroke=\"white\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                            <path d=\"M13 18C15.7614 18 18 15.7614 18 13C18 10.2386 15.7614 8 13 8C10.2386 8 8 10.2386 8 13C8 15.7614 10.2386 18 13 18Z\" stroke=\"white\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                            <path d=\"M35 40C37.7614 40 40 37.7614 40 35C40 32.2386 37.7614 30 35 30C32.2386 30 30 32.2386 30 35C30 37.7614 32.2386 40 35 40Z\" stroke=\"white\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                        </svg>
                                    </div>
                                    <p class=\"profile__user-info--name\">Накопительная скидка: <strong>4%</strong></p>
                                </div>
                            </div>
                            <div class=\"profile__user-content\">
                                <div class=\"profile__user-select\">
                                    <button class=\"profile__user-btn active\" data-profile-user-btn=\"my-data\">Мои данные</button>
                                    <button class=\"profile__user-btn\" data-profile-user-btn=\"delivery-adress\">Адреса доставки</button>
                                </div>
                                <form class=\"profile__user-result profile__form active\" data-profile-user-result=\"my-data\">
                                    <div class=\"profile__form-inputs\">
                                        <div class=\"profile__form-item\">
                                            <label class=\"profile__form-label\" for=\"profile-first-name\">Имя</label>
                                            <div class=\"profile__form-input\">
                                                <input type=\"text\" name=\"first_name\" id=\"profile-first-name\" required value=\"Екатерина\">
                                            </div>
                                        </div>
                                        <div class=\"profile__form-item\">
                                            <label class=\"profile__form-label\" for=\"profile-last-name\">Фамилия</label>
                                            <div class=\"profile__form-input\">
                                                <input type=\"text\" name=\"last_name\" id=\"profile-last-name\" required value=\"Сухова\">
                                            </div>
                                        </div>
                                        <div class=\"profile__form-item\">
                                            <label class=\"profile__form-label\" for=\"profile-patronymic\">Отчество</label>
                                            <div class=\"profile__form-input\">
                                                <input type=\"text\" name=\"patronymic\" id=\"profile-patronymic\" required value=\"Владимировна\">
                                            </div>
                                        </div>
                                        <div class=\"profile__form-item\">
                                            <label class=\"profile__form-label\" for=\"profile-email\">E-mail</label>
                                            <div class=\"profile__form-input\">
                                                <button class=\"change-email\" type=\"button\"></button>
                                                <input type=\"email\" name=\"email\" id=\"profile-email\" required value=\"sukhova766@gmail.com\" readonly>
                                            </div>
                                        </div>
                                        <div class=\"profile__form-item\">
                                            <label class=\"profile__form-label\" for=\"profile-phone\">Телефон</label>
                                            <div class=\"profile__form-input\">
                                                <button class=\"change-phone\" type=\"button\"></button>
                                                <input type=\"text\" name=\"phone\" id=\"profile-phone\" required value=\"+38 099 444 22 33\" readonly>
                                            </div>
                                        </div>
                                        <div class=\"profile__form-item\">
                                            <label class=\"profile__form-label\" for=\"profile-password\">Пароль</label>
                                            <div class=\"profile__form-input\">
                                                <button class=\"change-password\" type=\"button\"></button>
                                                <input type=\"text\" name=\"password\" id=\"profile-password\" required value=\"Password 12345\" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"profile__form-bottom\">
                                        <button class=\"profile__form-password btn-5 change-password\" type=\"button\">Изменить пароль</button>
                                        <span></span>
                                        <button class=\"profile__form-submit btn\" type=\"submit\">Сохранить изменения</button>
                                    </div>
                                </form>
                                <form class=\"profile__user-result profile__form\" data-profile-user-result=\"delivery-adress\">
                                    <div class=\"profile__form-inputs\">
                                        <div class=\"profile__form-item\">
                                            <label class=\"profile__form-label\" for=\"profile-address\">Адрес</label>
                                            <div class=\"profile__form-input\">
                                                <input type=\"text\" name=\"address\" id=\"profile-address\" required value=\"Аресса 1234\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"profile__form-bottom\">
                                        <button class=\"profile__form-submit btn\" type=\"submit\">Сохранить изменения</button>
                                    </div>
                                </form>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
</section>
";
        // line 105
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/account/account.twig";
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
        return array (  155 => 105,  67 => 20,  50 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/account/account.twig", "");
    }
}
