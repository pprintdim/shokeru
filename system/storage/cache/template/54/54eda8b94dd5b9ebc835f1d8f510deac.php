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

/* shokeru/template/extension/module/slideshow.twig */
class __TwigTemplate_9c825c615230668f041b9b747800f7ba extends Template
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
        yield "<section class=\"hero\">
  <div class=\"hero__slider swiper\">
    <div class=\"swiper-wrapper\">

      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 6
            yield "        <div class=\"hero__slide swiper-slide\">
          <div class=\"container\">

            ";
            // line 9
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "images", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "              <div class=\"hero__slide-image\">

                ";
                // line 13
                yield "                <img
                  class=\"hide-mobile\"
                  src=\"";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "images", [], "any", false, false, false, 15), "desktop", [], "any", false, false, false, 15);
                yield "\"
                  alt=\"";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 16));
                yield "\"
                  loading=\"lazy\"
                >

                ";
                // line 21
                yield "                <img
                  class=\"show-mobile\"
                  src=\"";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "images", [], "any", false, false, false, 23), "mob_image", [], "any", false, false, false, 23);
                yield "\"
                  alt=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 24));
                yield "\"
                  loading=\"lazy\"
                >

              </div>
            ";
            }
            // line 30
            yield "
            ";
            // line 31
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "              <h1 class=\"hero__slide-title title\">
                ";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 33);
                yield "
              </h1>
            ";
            }
            // line 36
            yield "
            ";
            // line 37
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "              <p class=\"hero__slide-descr\">
                ";
                // line 39
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 39);
                yield "
              </p>
            ";
            }
            // line 42
            yield "
            <div class=\"hero__slide-buttons\">

              ";
            // line 45
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "                <a class=\"hero__slide-more btn\" href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 46);
                yield "\">
                  Подробнее
                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"16\" viewBox=\"0 0 17 16\" fill=\"none\">
                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                      d=\"M5.1665 12.0002L9.1665 8.00016L5.1665 4.00016L6.49984 2.66683L11.8332 8.00016L6.49984 13.3335L5.1665 12.0002Z\"
                      fill=\"#202222\"/>
                  </svg>
                </a>
              ";
            }
            // line 55
            yield "
              <a class=\"hero__slide-btn btn-5\" href=\"\">
                В КАТАЛОГ
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\">
                  <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                    d=\"M4.6665 12.0002L8.6665 8.00016L4.6665 4.00016L5.99984 2.66683L11.3332 8.00016L5.99984 13.3335L4.6665 12.0002Z\"
                    fill=\"white\"/>
                </svg>
              </a>

            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "
    </div>
  </div>

  <div class=\"hero__slider-bottom\">
    <div class=\"container\">
      <div class=\"hero__slider-content slider-content\">

        <div class=\"hero__slider-buttons slider-buttons\">
          <button class=\"hero__slider-prev slider-btn-prev\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
              <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                d=\"M17.0002 18.0002L11.0002 12.0002L17.0002 6.00024L15.0002 4.00024L7.00024 12.0002L15.0002 20.0002L17.0002 18.0002Z\"
                fill=\"white\"/>
            </svg>
          </button>

          <button class=\"hero__slider-next slider-btn-next\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
              <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                d=\"M6.99976 18.0002L12.9998 12.0002L6.99976 6.00024L8.99976 4.00024L16.9998 12.0002L8.99976 20.0002L6.99976 18.0002Z\"
                fill=\"white\"/>
            </svg>
          </button>
        </div>

        <div class=\"hero__slider-pagination slider-pagination\"></div>

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
        return "shokeru/template/extension/module/slideshow.twig";
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
        return array (  162 => 69,  143 => 55,  130 => 46,  128 => 45,  123 => 42,  117 => 39,  114 => 38,  112 => 37,  109 => 36,  103 => 33,  100 => 32,  98 => 31,  95 => 30,  86 => 24,  82 => 23,  78 => 21,  71 => 16,  67 => 15,  63 => 13,  59 => 10,  57 => 9,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/slideshow.twig", "");
    }
}
