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

/* shokeru/template/extension/module/benefits.twig */
class __TwigTemplate_07cff343048721158e2ca6177354bc57 extends Template
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
        yield "<section class=\"advantages\">
            <div class=\"container\">
                <div class=\"advantages__inner\">
                    <div class=\"advantages__top\">
                        <h2 class=\"advantages__title title\">";
        // line 5
        yield ($context["title"] ?? null);
        yield "</h2>
                        <p class=\"advantages__descr\">";
        // line 6
        yield ($context["description"] ?? null);
        yield "</p>
                    </div>
                    <div class=\"advantages__block\">
                        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            yield "                            <div class=\"advantages__item";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" advantages__item-fill") : (""));
            yield "\">
                                <p class=\"advantages__item-number\">";
            // line 11
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "order", [], "any", false, false, false, 11);
            yield "</p>
                                <h3 class=\"advantages__item-title\">";
            // line 12
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 12);
            yield "</h3>
                                <p class=\"advantages__item-descr\">";
            // line 13
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "descr", [], "any", false, false, false, 13);
            yield "</p>
                            </div>
                        ";
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "                    </div>
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
        return "shokeru/template/extension/module/benefits.twig";
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
        return array (  105 => 16,  88 => 13,  84 => 12,  80 => 11,  75 => 10,  58 => 9,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/benefits.twig", "");
    }
}
