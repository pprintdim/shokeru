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

/* shokeru/template/extension/module/html_repeater.twig */
class __TwigTemplate_db7d07d3832f22c77660e20e6c082da6 extends Template
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
        yield "<section class=\"safemode\">
  <div class=\"container\">
    <div class=\"safemode__inner\">

      ";
        // line 6
        yield "      <div class=\"safemode__image-slider swiper\">
        <div class=\"swiper-wrapper\">

          ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 11
                yield "              <div class=\"safemode__image swiper-slide\">

                ";
                // line 14
                yield "                <img
                  class=\"hide-mobile\"
                  src=\"image/";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 16);
                yield "\"
                  alt=\"";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 17));
                yield "\"
                  loading=\"lazy\"
                >

                ";
                // line 22
                yield "                <img
                  class=\"show-mobile\"
                  src=\"image/";
                // line 24
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "mob_image", [], "any", false, false, false, 24)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "mob_image", [], "any", false, false, false, 24)) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 24)));
                yield "\"
                  alt=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 25));
                yield "\"
                  loading=\"lazy\"
                >

              </div>
            ";
            }
            // line 31
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "
        </div>
      </div>

      ";
        // line 37
        yield "      <div class=\"safemode__content\">

        <div class=\"safemode__slider swiper\">
          <div class=\"swiper-wrapper\">

            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            yield "              <div class=\"safemode__slide swiper-slide\">

                ";
            // line 45
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "                  <h2 class=\"safemode__title title\">
                    ";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 47);
                yield "
                  </h2>
                ";
            }
            // line 50
            yield "
                ";
            // line 51
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 51)) : (""));
            yield "
                <a class=\"safemode__more btn\" href=\"#\">
                    Подробнее
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"16\" viewBox=\"0 0 17 16\" fill=\"none\">
                         <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.1665 12.0002L9.1665 8.00016L5.1665 4.00016L6.49984 2.66683L11.8332 8.00016L6.49984 13.3335L5.1665 12.0002Z\" fill=\"#202222\"/>
                    </svg>
                </a>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "
          </div>
        </div>

        ";
        // line 65
        yield "        <div class=\"safemode__slider-content slider-content\">
          <div class=\"safemode__slider-buttons slider-buttons\">

            <button class=\"safemode__slider-prev slider-btn-prev\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                  d=\"M17.0002 18.0002L11.0002 12.0002L17.0002 6.00024L15.0002 4.00024L7.00024 12.0002L15.0002 20.0002L17.0002 18.0002Z\"
                  fill=\"white\"/>
              </svg>
            </button>

            <button class=\"safemode__slider-next slider-btn-next\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                  d=\"M6.99976 18.0002L12.9998 12.0002L6.99976 6.00024L8.99976 4.00024L16.9998 12.0002L8.99976 20.0002L6.99976 18.0002Z\"
                  fill=\"white\"/>
              </svg>
            </button>

          </div>

          <div class=\"safemode__slider-pagination slider-pagination\"></div>
        </div>

      </div>
    </div>
  </div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/extension/module/html_repeater.twig";
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
        return array (  158 => 65,  152 => 60,  137 => 51,  134 => 50,  128 => 47,  125 => 46,  123 => 45,  119 => 43,  115 => 42,  108 => 37,  102 => 32,  96 => 31,  87 => 25,  83 => 24,  79 => 22,  72 => 17,  68 => 16,  64 => 14,  60 => 11,  57 => 10,  53 => 9,  48 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/html_repeater.twig", "");
    }
}
