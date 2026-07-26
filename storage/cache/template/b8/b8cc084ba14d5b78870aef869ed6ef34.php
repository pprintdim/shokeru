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

/* shokeru/template/product/product.twig */
class __TwigTemplate_3348ca2fb236c2438b88cfe3c584ccb6 extends Template
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

<section class=\"prod\">
  <div class=\"container\">

    ";
        // line 7
        yield "    <ul class=\"breadcrumbs\">
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            yield "        <li>
          <a href=\"";
            // line 10
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "class=\"active\"";
            }
            yield ">
            ";
            // line 11
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "
          </a>
        </li>
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
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "    </ul>

    <div class=\"prod__inner\">

      ";
        // line 20
        yield "      <div class=\"prod__left\">

        <div class=\"prod__slider\">
          <div class=\"swiper-wrapper\">

            ";
        // line 25
        if ((($tmp = ($context["thumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "            <div class=\"swiper-slide\">
              <img src=\"";
            // line 27
            yield ($context["thumb"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\">
            </div>
            ";
        }
        // line 30
        yield "
            ";
        // line 31
        if ((($tmp = ($context["images"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 33
                yield "              <div class=\"swiper-slide\">
                <img src=\"";
                // line 34
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 34);
                yield "\" alt=\"";
                yield ($context["name"] ?? null);
                yield "\">
              </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "            ";
        }
        // line 38
        yield "
          </div>
        </div>

      </div>


      ";
        // line 46
        yield "      <div class=\"prod__right\">

        <h1 class=\"prod__top-title\">";
        // line 48
        yield ($context["name"] ?? null);
        yield "</h1>

        ";
        // line 50
        if ((($tmp = ($context["manufacturer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "        <p class=\"prod__top-made\">
          ";
            // line 52
            yield ($context["text_manufacturer"] ?? null);
            yield ":
          <strong>";
            // line 53
            yield ($context["manufacturer"] ?? null);
            yield "</strong>
        </p>
        ";
        }
        // line 56
        yield "
        ";
        // line 58
        yield "        ";
        if ((($tmp = ($context["price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "        <p class=\"prod__about-price\">
          ";
            // line 60
            if ((($tmp = ($context["special"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 61
                yield "            <span>";
                yield ($context["price"] ?? null);
                yield "</span>";
                yield ($context["special"] ?? null);
                yield "
          ";
            } else {
                // line 63
                yield "            ";
                yield ($context["price"] ?? null);
                yield "
          ";
            }
            // line 65
            yield "        </p>
        ";
        }
        // line 67
        yield "
        ";
        // line 69
        yield "        <p class=\"prod__about-avaliable\"
           data-product-avaliable=\"";
        // line 70
        yield (((($context["quantity"] ?? null) > 0)) ? ("yes") : ("no"));
        yield "\">
          ";
        // line 71
        yield ($context["stock"] ?? null);
        yield "
        </p>


        ";
        // line 76
        yield "        <div class=\"prod__count\">
          <input class=\"quantity-count\"
                 type=\"number\"
                 name=\"quantity\"
                 value=\"";
        // line 80
        yield ($context["minimum"] ?? null);
        yield "\"
                 min=\"";
        // line 81
        yield ($context["minimum"] ?? null);
        yield "\">
        </div>

        ";
        // line 85
        yield "        <button type=\"button\"
                id=\"button-cart\"
                data-product-id=\"";
        // line 87
        yield ($context["product_id"] ?? null);
        yield "\"
                class=\"prod__add btn-4\">
          ";
        // line 89
        yield ($context["button_cart"] ?? null);
        yield "
        </button>

      </div>
    </div>


    ";
        // line 97
        yield "    ";
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "    <div class=\"prod__box\">
      ";
            // line 99
            yield ($context["description"] ?? null);
            yield "
    </div>
    ";
        }
        // line 102
        yield "

    ";
        // line 105
        yield "    ";
        if ((($tmp = ($context["attribute_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 107
                yield "      <div class=\"prod__item\">
        <h3 class=\"prod__item-title\">";
                // line 108
                yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 108);
                yield "</h3>

        <div class=\"prod__item-content prod__item-info\">
          ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "attribute", [], "any", false, false, false, 111));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 112
                    yield "            <p>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 112);
                    yield ": <strong>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 112);
                    yield "</strong></p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                yield "        </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "    ";
        }
        // line 118
        yield "

    ";
        // line 121
        yield "    ";
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 122
            yield "    <div class=\"productSlider\">
      <div class=\"swiper-wrapper\">

        ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 126
                yield "        <div class=\"productSlider__slide swiper-slide product__item\">

          <a class=\"product__item-image\" href=\"";
                // line 128
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 128);
                yield "\">
            <img src=\"";
                // line 129
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 129);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 129);
                yield "\">
          </a>

          <div class=\"product__item-info\">
            <a class=\"product__item-title\" href=\"";
                // line 133
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 133);
                yield "\">
              <h3>";
                // line 134
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                yield "</h3>
            </a>

            <p class=\"product__item-price\">
              ";
                // line 138
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 139
                    yield "                <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 139);
                    yield "</span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 139);
                    yield "
              ";
                } else {
                    // line 141
                    yield "                ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 141);
                    yield "
              ";
                }
                // line 143
                yield "            </p>
          </div>

        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            yield "
      </div>
    </div>
    ";
        }
        // line 152
        yield "
  </div>
</section>

";
        // line 156
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
        return "shokeru/template/product/product.twig";
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
        return array (  407 => 156,  401 => 152,  395 => 148,  385 => 143,  379 => 141,  371 => 139,  369 => 138,  362 => 134,  358 => 133,  349 => 129,  345 => 128,  341 => 126,  337 => 125,  332 => 122,  329 => 121,  325 => 118,  322 => 117,  314 => 114,  303 => 112,  299 => 111,  293 => 108,  290 => 107,  285 => 106,  282 => 105,  278 => 102,  272 => 99,  269 => 98,  266 => 97,  256 => 89,  251 => 87,  247 => 85,  241 => 81,  237 => 80,  231 => 76,  224 => 71,  220 => 70,  217 => 69,  214 => 67,  210 => 65,  204 => 63,  196 => 61,  194 => 60,  191 => 59,  188 => 58,  185 => 56,  179 => 53,  175 => 52,  172 => 51,  170 => 50,  165 => 48,  161 => 46,  152 => 38,  149 => 37,  138 => 34,  135 => 33,  130 => 32,  128 => 31,  125 => 30,  117 => 27,  114 => 26,  112 => 25,  105 => 20,  99 => 15,  81 => 11,  73 => 10,  70 => 9,  53 => 8,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/product/product.twig", "");
    }
}
