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

/* customer/customer_ip.twig */
class __TwigTemplate_bcc19d34990d11a9ebef40c253ea3392 extends Template
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
        yield "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 5
        yield ($context["column_ip"] ?? null);
        yield "</td>
        <td class=\"text-right\">";
        // line 6
        yield ($context["column_total"] ?? null);
        yield "</td>
        <td class=\"text-left\">";
        // line 7
        yield ($context["column_date_added"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if ((($tmp = ($context["ips"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["ips"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ip"]) {
                // line 13
                yield "      <tr>
        <td class=\"text-left\"><a href=\"https://whatismyipaddress.com/ip/";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["ip"], "ip", [], "any", false, false, false, 14);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["ip"], "ip", [], "any", false, false, false, 14);
                yield "</a></td>
        <td class=\"text-right\"><a href=\"";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["ip"], "filter_ip", [], "any", false, false, false, 15);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["ip"], "total", [], "any", false, false, false, 15);
                yield "</a></td>
        <td class=\"text-left\">";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["ip"], "date_added", [], "any", false, false, false, 16);
                yield "</td>      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ip'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "      ";
        } else {
            // line 19
            yield "      <tr>
        <td class=\"text-center\" colspan=\"3\">";
            // line 20
            yield ($context["text_no_results"] ?? null);
            yield "</td>
      </tr>
      ";
        }
        // line 23
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 27
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 28
        yield ($context["results"] ?? null);
        yield "</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "customer/customer_ip.twig";
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
        return array (  115 => 28,  111 => 27,  105 => 23,  99 => 20,  96 => 19,  93 => 18,  85 => 16,  79 => 15,  73 => 14,  70 => 13,  65 => 12,  63 => 11,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "customer/customer_ip.twig", "");
    }
}
