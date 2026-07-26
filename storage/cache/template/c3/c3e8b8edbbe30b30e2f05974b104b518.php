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
class __TwigTemplate_f59a695a7a3a9be27dc4eca3d02e35e5 extends Template
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
                                    <p class=\"profile__user-info--name\">Накопительная скидка: <strong>";
        // line 30
        yield ($context["discount"] ?? null);
        yield "%</strong></p>
                                </div>
                            </div>
                            <div class=\"profile__user-content\">
                                <div class=\"profile__user-select\">
                                    <button class=\"profile__user-btn active\" data-profile-user-btn=\"my-data\">Мои данные</button>
                                    <button class=\"profile__user-btn\" data-profile-user-btn=\"delivery-adress\">Адреса доставки</button>
                                </div>
                                ";
        // line 38
        yield ($context["edit"] ?? null);
        yield "

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

<section class=\"userData\" data-userData=\"change-email\">
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
                                <path d=\"M22.25 5.27148H5.25C4.12283 5.27148 3.04183 5.72149 2.2448 6.5225C1.44777 7.32352 1 8.40993 1 9.54273V24.4921C1 25.6249 1.44777 26.7113 2.2448 27.5123C3.04183 28.3134 4.12283 28.7634 5.25 28.7634H26.5C27.6272 28.7634 28.7082 28.3134 29.5052 27.5123C30.3022 26.7113 30.75 25.6249 30.75 24.4921V13.814\" stroke=\"#202222\" stroke-width=\"2\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                <path d=\"M5.25 11.6777L15.875 18.0846L26.5 11.6777\" stroke=\"#202222\" stroke-width=\"2\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                <path d=\"M30.75 1V9.5425\" stroke=\"#202222\" stroke-width=\"2\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                <path d=\"M26.5 5.27148H35\" stroke=\"#202222\" stroke-width=\"2\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                            </svg>
                        </div>
                        <div class=\"userData__info-content\">
                            <h2 class=\"userData__info-title\">Изменить <br>e-mail</h2>
                            <p class=\"userData__info-descr\">Уведомление для подтверждения нового Email будет отправлено Вам на новую почту</p>
                        </div>
                    </div>
                    <form class=\"userData__form form-block\" action=\"#\">
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
        </section>

        <section class=\"userData\" data-userData=\"change-password\">
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
        </section>

        <section class=\"userData\" data-userData=\"change-number\">
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
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" fill=\"none\">
                                <path d=\"M21.7147 6.6665H14.2861C13.2757 6.6665 12.3068 7.06786 11.5923 7.78229C10.8779 8.49671 10.4766 9.46568 10.4766 10.476V29.5236C10.4766 30.534 10.8779 31.503 11.5923 32.2174C12.3068 32.9318 13.2757 33.3332 14.2861 33.3332H25.7147C26.725 33.3332 27.694 32.9318 28.4084 32.2174C29.1228 31.503 29.5242 30.534 29.5242 29.5236V15.476M16.1908 29.5236H23.8099\" stroke=\"#202222\" stroke-width=\"2\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                <path d=\"M29.75 3V11.5425\" stroke=\"#202222\" stroke-width=\"2\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                <path d=\"M25.5 7.27148H34\" stroke=\"#202222\" stroke-width=\"2\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                            </svg>
                        </div>
                        <div class=\"userData__info-content\">
                            <h2 class=\"userData__info-title\">Изменить номер <br>телефона</h2>
                            <p class=\"userData__info-descr\">Код подтверждения будет отправлен на номер •(•••) ••• •• 23</p>
                        </div>
                    </div>
                    <form class=\"userData__form form-block\" action=\"#\">
                        <div class=\"userData__form-item\">
                            <input class=\"userData__form-input form-input\" type=\"tel\" name=\"Новый-номер\" placeholder=\"Новый номер\" required>
                        </div>
                        <div class=\"userData__form-item userData__form-code\">
                            <input class=\"userData__form-input form-input\" type=\"text\" name=\"Код\" placeholder=\"Код с СМС*\" required>
                        </div>
                        <button class=\"userData__form-btn btn\" type=\"submit\">Изменить</button>
                    </form>
                </div>
            </div>
        </section>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const changeEmailButton = document.querySelector('.change-email');
    const changePhoneButton = document.querySelector('.change-phone');
    const changePasswordButton = document.querySelectorAll('.change-password');
    const changeNumberSection = document.querySelector('section[data-userData=\"change-number\"]');
    const changePasswordSection = document.querySelector('section[data-userData=\"change-password\"]');
    const changeEmailSection = document.querySelector('section[data-userData=\"change-email\"]');
    if (changeEmailButton) {
        changeEmailButton.addEventListener('click', () => {
            if (changeEmailSection) {
                changeEmailSection.classList.add('active');
            }
        });
    }
    if (changePhoneButton) {
        changePhoneButton.addEventListener('click', () => {
            if (changeNumberSection) {
                changeNumberSection.classList.add('active');
            }
        });
    }
    if (changePasswordButton) {
        changePasswordButton.forEach(element => {
            element.addEventListener('click', () => {
                if (changePasswordSection) {
                    changePasswordSection.classList.add('active');
                }
            });
        });
    }
});
</script>
";
        // line 214
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
        return array (  270 => 214,  91 => 38,  80 => 30,  67 => 20,  50 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/account/account.twig", "");
    }
}
