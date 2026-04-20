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

/* shokeru/template/account/edit.twig */
class __TwigTemplate_04aa648219f952d492dcca4814233254 extends Template
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
        yield "<form class=\"profile__user-result profile__form active\" data-profile-user-result=\"my-data\" method=\"post\" action=\"";
        yield ($context["action"] ?? null);
        yield "\">
    <div class=\"profile__form-inputs\">
        <div class=\"profile__form-item\">
            <label class=\"profile__form-label\" for=\"profile-first-name\">Имя</label>
            <div class=\"profile__form-input\">
                <input type=\"text\" name=\"firstname\" id=\"profile-first-name\" required value=\"";
        // line 6
        yield ($context["firstname"] ?? null);
        yield "\">
                ";
        // line 7
        if ((($tmp = ($context["error_firstname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "                    <p class=\"text-danger\">";
            yield ($context["error_firstname"] ?? null);
            yield "</p>
                ";
        }
        // line 10
        yield "            </div>
        </div>

        <div class=\"profile__form-item\">
            <label class=\"profile__form-label\" for=\"profile-last-name\">Фамилия</label>
            <div class=\"profile__form-input\">
                <input type=\"text\" name=\"lastname\" id=\"profile-last-name\" required value=\"";
        // line 16
        yield ($context["lastname"] ?? null);
        yield "\">
                ";
        // line 17
        if ((($tmp = ($context["error_lastname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                    <p class=\"text-danger\">";
            yield ($context["error_lastname"] ?? null);
            yield "</p>
                ";
        }
        // line 20
        yield "            </div>

        </div>

        <div class=\"profile__form-item\">
            <label class=\"profile__form-label\" for=\"profile-email\">E-mail</label>
            <div class=\"profile__form-input\">
                <input type=\"email\" name=\"email\" id=\"profile-email\" required value=\"";
        // line 27
        yield ($context["email"] ?? null);
        yield "\">
                <button class=\"change-email\" type=\"button\"></button>
                ";
        // line 29
        if ((($tmp = ($context["error_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                    <p class=\"text-danger\">";
            yield ($context["error_email"] ?? null);
            yield "</p>
                ";
        }
        // line 32
        yield "            </div>
        </div>

        <div class=\"profile__form-item\">
            <label class=\"profile__form-label\" for=\"profile-phone\">Телефон</label>
            <div class=\"profile__form-input\">
                <input type=\"text\" name=\"telephone\" id=\"profile-phone\" required value=\"";
        // line 38
        yield ($context["telephone"] ?? null);
        yield "\">
                <button class=\"change-phone\" type=\"button\"></button>
                ";
        // line 40
        if ((($tmp = ($context["error_telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                    <p class=\"text-danger\">";
            yield ($context["error_telephone"] ?? null);
            yield "</p>
                ";
        }
        // line 43
        yield "            </div>
        </div>

        <div class=\"profile__form-item\">
            <label class=\"profile__form-label\" for=\"profile-password\">Пароль</label>

            <div class=\"profile__form-input\">
                <input type=\"password\" name=\"password\" id=\"profile-password\" placeholder=\"Введите новый пароль\">
                <button class=\"change-password\" type=\"button\"></button>
                ";
        // line 52
        if ((($tmp = ($context["error_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                    <p class=\"text-danger\">";
            yield ($context["error_password"] ?? null);
            yield "</p>
                ";
        }
        // line 55
        yield "            </div>
        </div>
    </div>

    <div class=\"profile__form-bottom\">
        <button class=\"profile__form-password btn-5 change-password\" type=\"button\">Изменить пароль</button>
        <span></span>
        <button class=\"profile__form-submit btn\" type=\"submit\">Сохранить изменения</button>
    </div>

    ";
        // line 65
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "        <p class=\"text-success\">";
            yield ($context["success"] ?? null);
            yield "</p>
    ";
        }
        // line 68
        yield "
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/account/edit.twig";
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
        return array (  165 => 68,  159 => 66,  157 => 65,  145 => 55,  139 => 53,  137 => 52,  126 => 43,  120 => 41,  118 => 40,  113 => 38,  105 => 32,  99 => 30,  97 => 29,  92 => 27,  83 => 20,  77 => 18,  75 => 17,  71 => 16,  63 => 10,  57 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/account/edit.twig", "");
    }
}
