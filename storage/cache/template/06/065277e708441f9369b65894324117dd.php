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

/* shokeru/template/common/user_popup.twig */
class __TwigTemplate_908ac9321b98bab2370bac5b44d24ac3 extends Template
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
        yield "<section class=\"userPopup\">
    <div class=\"userPopup__image\">
        <img src=\"catalog/view/theme/shokeru/images/userPopup.png\" alt=\"\">
    </div>
    <div class=\"container\">
        <div class=\"userPopup__inner\">
            <div class=\"userPopup__top\">
            <a class=\"userPopup__logo\" href=\"";
        // line 8
        yield ($context["name"] ?? null);
        yield "\">
                <img src=\"";
        // line 9
        yield ($context["logo"] ?? null);
        yield "\" alt=\"\">
            </a>
            <button class=\"userPopup__close\">";
        // line 11
        yield ($context["text_close"] ?? null);
        yield "</button>
        </div>
        <div class=\"userPopup__bottom\">
            <div class=\"userPopup__left\">
                <div class=\"header__menu-bottom\">
                    <div class=\"header__menu-block\">
                        <div class=\"header__menu-icon\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                <path d=\"M22.0001 16.92V19.92C22.0012 20.1985 21.9441 20.4741 21.8326 20.7293C21.721 20.9845 21.5574 21.2136 21.3521 21.4018C21.1469 21.5901 20.9046 21.7335 20.6408 21.8227C20.377 21.9119 20.0974 21.945 19.8201 21.92C16.7429 21.5856 13.7871 20.5341 11.1901 18.85C8.77388 17.3146 6.72539 15.2661 5.19006 12.85C3.50003 10.2412 2.4483 7.27097 2.12006 4.17997C2.09507 3.90344 2.12793 3.62474 2.21656 3.3616C2.30518 3.09846 2.44763 2.85666 2.63482 2.6516C2.82202 2.44653 3.04986 2.28268 3.30385 2.1705C3.55783 2.05831 3.8324 2.00024 4.11006 1.99997H7.11006C7.59536 1.9952 8.06585 2.16705 8.43382 2.48351C8.80179 2.79996 9.04213 3.23942 9.11005 3.71997C9.23668 4.68004 9.47151 5.6227 9.81006 6.52997C9.9446 6.8879 9.97372 7.27689 9.89396 7.65086C9.81421 8.02482 9.62892 8.36809 9.36005 8.63998L8.09006 9.90997C9.51361 12.4135 11.5865 14.4864 14.0901 15.91L15.3601 14.64C15.6319 14.3711 15.9752 14.1858 16.3492 14.1061C16.7231 14.0263 17.1121 14.0554 17.4701 14.19C18.3773 14.5285 19.32 14.7634 20.2801 14.89C20.7658 14.9585 21.2095 15.2032 21.5266 15.5775C21.8437 15.9518 22.0122 16.4296 22.0001 16.92Z\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                            </svg>
                        </div>
                        <div class=\"header__menu-tel\">
                            ";
        // line 23
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
            // line 24
            yield "                                   <a class=\"header__menu-link\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["phone"], "href", [], "any", false, false, false, 24);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["phone"], "label", [], "any", false, false, false, 24);
            yield "</a>
                                    ";
            // line 25
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "                                    <span> / </span>
                                  ";
            }
            // line 28
            yield "                                ";
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
        // line 29
        yield "                        </div>
                    </div>
                    <div class=\"header__menu-block\">
                        <div class=\"header__menu-icon\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                <path d=\"M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                <path d=\"M22 6L12 13L2 6\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                            </svg>
                        </div>
                        <a class=\"header__menu-link\" href=\"mailto:admin@trikobakh.com\">";
        // line 38
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
            <div class=\"userPopup__content\">
                <div class=\"userPopup__select userPopup__select-login\">
                    <button class=\"userPopup__btn active\" data-userPopup-select=\"login\">";
        // line 57
        yield ($context["button_login"] ?? null);
        yield "</button>
                    <button class=\"userPopup__btn\" data-userPopup-select=\"register\">";
        // line 58
        yield ($context["button_register"] ?? null);
        yield "</button>
                </div>
                <div class=\"userPopup__result active\" data-userPopup-result=\"login\">
                    <form id=\"popup-login-form\" class=\"userPopup__form\">
                        <div class=\"userPopup__form-block\">
                            <div class=\"userPopup__form-item\">
                                <input type=\"email\" name=\"email\" class=\"userPopup__form-input\" placeholder=\"Email*\" required>
                            </div>
                            <div class=\"userPopup__form-item\">
                                <button type=\"button\" class=\"userPopup__form-show form-show-password\"></button>
                                <input type=\"password\" name=\"password\" class=\"userPopup__form-input\" placeholder=\"";
        // line 68
        yield ($context["text_password"] ?? null);
        yield "*\" required>
                            </div>
                        </div>

                        <button type=\"button\" class=\"userPopup__form-forgot\">";
        // line 72
        yield ($context["text_forgot"] ?? null);
        yield "</button>

                        <label class=\"userPopup__form-checkbox checkbox-block\">
                            <input type=\"checkbox\" name=\"agree\" class=\"visually-hidden\" required>
                            <span>";
        // line 76
        yield ($context["text_agree"] ?? null);
        yield "</span>
                        </label>

                        <button type=\"submit\" class=\"userPopup__form-btn btn\">";
        // line 79
        yield ($context["text_login"] ?? null);
        yield "</button>

                        <div class=\"userPopup__form-more\"><span></span> или <span></span></div>

                        <div class=\"userPopup__form-buttons\">
                            <button type=\"button\" class=\"userPopup__form-log btn-2\">";
        // line 84
        yield ($context["button_google"] ?? null);
        yield "</button>
                            <button type=\"button\" class=\"userPopup__form-log btn-2\">";
        // line 85
        yield ($context["button_facebook"] ?? null);
        yield "</button>
                        </div>
                    </form>

                    <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const form = document.getElementById('popup-login-form');

                        form.addEventListener('submit', e => {
                            e.preventDefault();

                            const email = form.email.value.trim();
                            const password = form.password.value;
                            const agree = form.agree.checked;

                            if (!agree) {
                                alert('";
        // line 101
        yield ($context["error_agree"] ?? null);
        yield "');
                                return;
                            }

                            fetch('index.php?route=common/user_popup/login', {
                                method: 'POST',
                                body: new URLSearchParams({ email, password, agree: agree ? 1 : 0 }),
                                credentials: 'same-origin'
                            })
                            .then(res => res.json())
                            .then(json => {
                                if (json.success) {
                                    window.location.href = json.redirect; // редірект після успіху
                                } else if (json.error) {
                                    if (typeof json.error === 'object') {
                                        alert(Object.values(json.error).join(\"\\n\"));
                                    } else {
                                        alert(json.error);
                                    }
                                }
                            })

                            .catch(() => alert('Сталася помилка, спробуйте ще раз'));
                        });
                    });
                    </script>


                </div>
                <div class=\"userPopup__result\" data-userPopup-result=\"register\">
                    <form id=\"popup-register-form\" class=\"userPopup__form\">
                        <div class=\"userPopup__form-box\">
                                        <div class=\"userPopup__form-item\">
                                            <input class=\"userPopup__form-input\" type=\"text\" name=\"firstname\" placeholder=\"";
        // line 134
        yield ($context["text_firstname"] ?? null);
        yield "\" required>
                                        </div>
                                        <div class=\"userPopup__form-item\">
                                            <input class=\"userPopup__form-input\" type=\"text\" name=\"lastname\" placeholder=\"";
        // line 137
        yield ($context["text_lastname"] ?? null);
        yield "\" required>
                                        </div>
                                        <div class=\"userPopup__form-item\">
                                            <input class=\"userPopup__form-input\" type=\"tel\" name=\"telephone\" placeholder=\"";
        // line 140
        yield ($context["text_telephone"] ?? null);
        yield "\" required>
                                        </div>
                                        <div class=\"userPopup__form-item\">
                                            <input class=\"userPopup__form-input\" type=\"email\" name=\"email\" placeholder=\"Email\" required>
                                        </div>
                        </div>
                        <p class=\"userPopup__form-name\">";
        // line 146
        yield ($context["text_create_password"] ?? null);
        yield "</p>
                        <div class=\"userPopup__form-block\">
                            <div class=\"userPopup__form-item\">
                                <button class=\"userPopup__form-show form-show-password\" type=\"button\"></button>
                                <input class=\"userPopup__form-input\" type=\"password\" name=\"password\" placeholder=\"Пароль*\" required>
                            </div>
                            <div class=\"userPopup__form-item\">
                                            <button class=\"userPopup__form-show form-show-password\" type=\"button\"></button>
                                            <input class=\"userPopup__form-input\" name=\"accept\" type=\"password\" name=\"Повторите-пароль\" placeholder=\"Повторите пароль*\" required>
                                        </div>
                                    </div>
                                    <label class=\"userPopup__form-checkbox checkbox-block\">
                                        <input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"visually-hidden\" checked required>
                                        <span>";
        // line 159
        yield ($context["text_agree"] ?? null);
        yield "</span>
                                    </label>
                                    <button class=\"userPopup__form-btn btn\">";
        // line 161
        yield ($context["button_register"] ?? null);
        yield "</button>
                                    <div class=\"userPopup__form-more\"> <span></span> или <span></span></div>
                                    <div class=\"userPopup__form-buttons\">
                                        <button class=\"userPopup__form-log btn-2\" type=\"button\">";
        // line 164
        yield ($context["button_google"] ?? null);
        yield "</button>
                                        <button class=\"userPopup__form-log btn-2\" type=\"button\">";
        // line 165
        yield ($context["button_facebook"] ?? null);
        yield "</button>
                                    </div>
                                </form>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const form = document.getElementById('popup-register-form');

                                        form.addEventListener('submit', function(e) {
                                            e.preventDefault();

                                            // Очищаємо попередні помилки
                                            const prevErrors = form.querySelectorAll('.error');
                                            prevErrors.forEach(err => err.remove());

                                            // Збираємо дані форми
                                            const formData = new FormData(form);

                                            // Відправка на контролер OpenCart
                                            fetch('index.php?route=common/user_popup/register', {
                                                method: 'POST',
                                                body: formData
                                            })
                                            .then(response => response.json())
                                            .then(json => {
                                                if (json.error) {
                                                    for (let key in json.error) {
                                                        const input = form.querySelector(`[name=\"\${key}\"]`);
                                                        if (input) {
                                                            const errorDiv = document.createElement('div');
                                                            errorDiv.className = 'error';
                                                            errorDiv.textContent = json.error[key];
                                                            input.insertAdjacentElement('afterend', errorDiv);
                                                        }
                                                    }
                                                }

                                                if (json.success) {
                                                    alert(json.success);
                                                    form.reset();
                                                }
                                            })
                                            .catch(err => {
                                                console.error('Ошибка:', err);
                                            });
                                        });
                                    });

                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

<section class=\"userData\" data-userData=\"password-recovery\">
    <div class=\"container\">
        <div class=\"userData__inner\">
            <button class=\"userData__close\">
                ";
        // line 225
        yield ($context["text_close"] ?? null);
        yield "
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" fill=\"none\">
                    <rect x=\"9\" y=\"28.7991\" width=\"28\" height=\"4\" transform=\"rotate(-45 9 28.7991)\" fill=\"#202222\"/>                        
                    <rect x=\"28.8008\" y=\"31.6274\" width=\"9\" height=\"4\" transform=\"rotate(-135 28.8008 31.6274)\" fill=\"#202222\"/>
                    <rect x=\"11.8281\" y=\"9\" width=\"9\" height=\"4\" transform=\"rotate(45 11.8281 9)\" fill=\"#202222\"/>
                </svg>
            </button>
                    <div class=\"userData__info\">
                        <div class=\"userData__info-icon\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"33\" height=\"36\" viewBox=\"0 0 33 36\" fill=\"none\">
                                <path d=\"M6.1 14.6V6.1C6.1 4.7474 6.63732 3.45019 7.59376 2.49376C8.55019 1.53732 9.8474 1 11.2 1H21.4C22.7526 1 24.0498 1.53732 25.0062 2.49376C25.9627 3.45019 26.5 4.7474 26.5 6.1V7.8M4.4 14.6H28.2C30.0778 14.6 31.6 16.1222 31.6 18V31.6C31.6 33.4778 30.0778 35 28.2 35H4.4C2.52223 35 1 33.4778 1 31.6V18C1 16.1222 2.52223 14.6 4.4 14.6Z\" stroke=\"#202222\" stroke-width=\"2\" stroke-linecap=\"square\" stroke-linejoin=\"round\"/>
                                <circle cx=\"16.3013\" cy=\"24.9656\" r=\"1.49268\" fill=\"#202222\"/>
                                <circle cx=\"11.3247\" cy=\"24.9656\" r=\"1.49268\" fill=\"#202222\"/>
                                <circle cx=\"21.2739\" cy=\"24.9656\" r=\"1.49268\" fill=\"#202222\"/>
                            </svg>
                        </div>
                        <div class=\"userData__info-content\">
                            <h2 class=\"userData__info-title\">Восстановление пароля</h2>
                            <p class=\"userData__info-descr\">Уведомление об изменении пароля будет отправлено Вам на почту</p>
                        </div>
                    </div>
                    <form id=\"popup-forgotten-form\" class=\"userData__form form-block\">
                        <div class=\"userData__form-item\">
                            <button class=\"userData__form-show form-show-password\" type=\"button\"></button>
                            <input class=\"userData__form-input form-input\" type=\"password\" name=\"password\" placeholder=\"";
        // line 249
        yield ($context["text_password"] ?? null);
        yield "*\" required>
                        </div>
                        <div class=\"userData__form-item\">
                    <button class=\"userData__form-show form-show-password\" type=\"button\"></button>
                    <input class=\"userData__form-input form-input\" type=\"password\" name=\"accept\" placeholder=\"";
        // line 253
        yield ($context["text_repeat_password"] ?? null);
        yield "*\" required>
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
        return "shokeru/template/common/user_popup.twig";
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
        return array (  405 => 253,  398 => 249,  371 => 225,  308 => 165,  304 => 164,  298 => 161,  293 => 159,  277 => 146,  268 => 140,  262 => 137,  256 => 134,  220 => 101,  201 => 85,  197 => 84,  189 => 79,  183 => 76,  176 => 72,  169 => 68,  156 => 58,  152 => 57,  130 => 38,  119 => 29,  105 => 28,  101 => 26,  99 => 25,  92 => 24,  75 => 23,  60 => 11,  55 => 9,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/common/user_popup.twig", "");
    }
}
