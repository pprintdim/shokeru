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

/* shokeru/template/account/download.twig */
class __TwigTemplate_b79252d4bd61189284280ac4f0d9a297 extends Template
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
        // line 5
        yield ($context["column_left"] ?? null);
        yield "
            <div class=\"profile__result profile-files\" data-profile-content=\"files\">
                <div class=\"profile__result-top\">
                    <h2 class=\"profile__result-heading\">";
        // line 8
        yield ($context["text_files_heading"] ?? null);
        yield "</h2>
                </div>

                ";
        // line 11
        if ((($tmp = ($context["downloads"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "                    <div class=\"profile__files-block\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 14
                yield "                            <div class=\"profile__files-item\">
                                <h3 class=\"profile__files-title\">";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["file"], "name", [], "any", false, false, false, 15);
                yield "</h3>
                                <p class=\"profile__files-descr\">";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["file"], "description", [], "any", false, false, false, 16);
                yield "</p>
                                <a class=\"profile__files-download\" href=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["file"], "href", [], "any", false, false, false, 17);
                yield "\" download></a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "                    </div>
                ";
        } else {
            // line 22
            yield "                    <p class=\"profile__result-name\">";
            yield ($context["text_empty"] ?? null);
            yield "</p>
                ";
        }
        // line 24
        yield "
            </div>
        </div>
    </div>
</section>
";
        // line 29
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/account/download.twig";
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
        return array (  107 => 29,  100 => 24,  94 => 22,  90 => 20,  81 => 17,  77 => 16,  73 => 15,  70 => 14,  66 => 13,  63 => 12,  61 => 11,  55 => 8,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/account/download.twig", "");
    }
}
