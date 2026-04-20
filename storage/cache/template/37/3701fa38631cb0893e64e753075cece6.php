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

/* shokeru/template/common/home.twig */
class __TwigTemplate_9738ef838093d34a1e77fe3ae6af015d extends Template
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
";
        // line 2
        yield ($context["content_top"] ?? null);
        yield "

";
        // line 4
        if ((($tmp = ($context["line"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "<div class=\"saleTextLine\">
    <div class=\"saleTextLine__inner\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 8
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["sale_line"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    yield "   
                <p class=\"saleTextLine-text\">";
                    // line 9
                    yield $context["line"];
                    yield "</p>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['line'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            yield "    </div>
</div>
";
        }
        // line 15
        yield "
        
  ";
        // line 17
        yield ($context["content_bottom"] ?? null);
        yield "
";
        // line 18
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/common/home.twig";
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
        return array (  95 => 18,  91 => 17,  87 => 15,  82 => 12,  76 => 11,  68 => 9,  61 => 8,  57 => 7,  53 => 5,  51 => 4,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/common/home.twig", "");
    }
}
