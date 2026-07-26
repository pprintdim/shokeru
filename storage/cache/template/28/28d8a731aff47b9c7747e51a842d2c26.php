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

/* shokeru/template/extension/module/different_shokers.twig */
class __TwigTemplate_619c1046f28869a470c76c6f6f82cb98 extends Template
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
        yield "<section class=\"weworks\">
            <div class=\"container\">
                <div class=\"weworks__inner\">
                    <div class=\"weworks__start\">
                        <div class=\"weworks__start-content\">
                            <h1 class=\"weworks__start-title\">";
        // line 6
        yield ($context["title"] ?? null);
        yield "</h1>
                            ";
        // line 7
        yield ($context["content"] ?? null);
        yield "
                        </div>
                        <span class=\"weworks__start-line\"></span>
                        <div class=\"weworks__start-image\">
                            <img src=\"";
        // line 11
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "full", [], "any", false, false, false, 11);
        yield "\" alt=\"";
        yield ($context["title"] ?? null);
        yield "\">
                        </div>
                    </div>
                    ";
        // line 14
        if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "                        <div class=\"weworks__top\">
                            <div class=\"weworks__content\">
                                <span class=\"weworks__line\"></span>
                            </div>
                            <span class=\"weworks-vertical-line\"></span>
                            
                            <div class=\"weworks__block\">
                                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                yield "                                <div class=\"weworks__item\">
                                    <h3 class=\"weworks__item-title\">";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 24);
                yield "</h3>
                                    <p class=\"weworks__item-descr\">";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 25);
                yield "</p>
                                </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "                            </div>
                        </div>
                    ";
        }
        // line 31
        yield "                </div>
            </div>
        </section>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/extension/module/different_shokers.twig";
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
        return array (  104 => 31,  99 => 28,  90 => 25,  86 => 24,  83 => 23,  79 => 22,  70 => 15,  68 => 14,  60 => 11,  53 => 7,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/different_shokers.twig", "");
    }
}
