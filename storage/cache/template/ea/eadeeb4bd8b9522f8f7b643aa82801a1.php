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
class __TwigTemplate_95d83312df4a7004b49d318c1071ebb8 extends Template
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
        // line 26
        yield ($context["email"] ?? null);
        yield "\">
                ";
        // line 27
        if ((($tmp = ($context["error_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                    <p class=\"text-danger\">";
            yield ($context["error_email"] ?? null);
            yield "</p>
                ";
        }
        // line 30
        yield "            </div>
        </div>

        <div class=\"profile__form-item\">
            <label class=\"profile__form-label\" for=\"profile-phone\">Телефон</label>
            <div class=\"profile__form-input\">
                <input type=\"text\" name=\"telephone\" id=\"profile-phone\" required value=\"";
        // line 36
        yield ($context["telephone"] ?? null);
        yield "\">
                ";
        // line 37
        if ((($tmp = ($context["error_telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "                    <p class=\"text-danger\">";
            yield ($context["error_telephone"] ?? null);
            yield "</p>
                ";
        }
        // line 40
        yield "            </div>
        </div>

        <div class=\"profile__form-item\">
            <label class=\"profile__form-label\" for=\"profile-password\">Пароль</label>
            <div class=\"profile__form-input\">
                <input type=\"password\" name=\"password\" id=\"profile-password\" placeholder=\"Введите новый пароль\">
                ";
        // line 47
        if ((($tmp = ($context["error_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                    <p class=\"text-danger\">";
            yield ($context["error_password"] ?? null);
            yield "</p>
                ";
        }
        // line 50
        yield "            </div>
        </div>
    </div>

    <div class=\"profile__form-bottom\">
        <button class=\"profile__form-submit btn\" type=\"submit\">Сохранить изменения</button>
        ";
        // line 56
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "            <p class=\"text-success\">";
            yield ($context["success"] ?? null);
            yield "</p>
        ";
        }
        // line 59
        yield "    </div>
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
        return array (  156 => 59,  150 => 57,  148 => 56,  140 => 50,  134 => 48,  132 => 47,  123 => 40,  117 => 38,  115 => 37,  111 => 36,  103 => 30,  97 => 28,  95 => 27,  91 => 26,  83 => 20,  77 => 18,  75 => 17,  71 => 16,  63 => 10,  57 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/account/edit.twig", "");
    }
}
