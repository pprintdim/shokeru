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

/* shokeru/template/common/cart.twig */
class __TwigTemplate_7f2276c7275b8b38c4b6406b9fb2f497 extends Template
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
        yield "<div class=\"busket__block\">
  ";
        // line 2
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 4
                yield "      <div class=\"busket__item\">
        <a class=\"busket__item-image\" href=\"";
                // line 5
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 5);
                yield "\">
          <img src=\"";
                // line 6
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 6);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
                yield "\">
        </a>

        <div class=\"busket__item-content\">
          <a class=\"busket__item-title\" href=\"";
                // line 10
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 10);
                yield "\">
            <h3>";
                // line 11
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
                yield "</h3>
          </a>

          <p class=\"busket__item-price\">
            ";
                // line 15
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 16
                    yield "              <span class=\"price-old\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 16);
                    yield "</span>
              ";
                    // line 17
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 17);
                    yield "
            ";
                } else {
                    // line 19
                    yield "              ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19);
                    yield "
            ";
                }
                // line 21
                yield "            × ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 21);
                yield "
          </p>

          <button class=\"busket__item-delete\" onclick=\"cart.remove('";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 24);
                yield "');\"></button>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "  ";
        } else {
            // line 29
            yield "    <p class=\"text-center\">";
            yield ($context["text_empty"] ?? null);
            yield "</p>
  ";
        }
        // line 31
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/common/cart.twig";
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
        return array (  123 => 31,  117 => 29,  114 => 28,  104 => 24,  97 => 21,  91 => 19,  86 => 17,  81 => 16,  79 => 15,  72 => 11,  68 => 10,  59 => 6,  55 => 5,  52 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/common/cart.twig", "");
    }
}
