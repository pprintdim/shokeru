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
class __TwigTemplate_d889e31836927ed3b6850fa68e98788f extends Template
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
<main class=\"main\">
    <section class=\"prod\">
            <div class=\"container\">
                <ul class=\"breadcrumbs\">
\t\t\t      ";
        // line 6
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
            // line 7
            yield "\t\t\t        <li>
\t\t\t          <a href=\"";
            // line 8
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "class=\"active\"";
            }
            yield ">
\t\t\t            ";
            // line 9
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            yield "
\t\t\t          </a>
\t\t\t        </li>
\t\t\t      ";
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
        // line 13
        yield "\t\t\t    </ul>
                <div class=\"prod__inner\">
                    <div class=\"prod__left\">
                        <div class=\"prod__thumbs\">
                            <div class=\"swiper-wrapper\">
                                ";
        // line 18
        if ((($tmp = ($context["thumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "    \t\t\t\t            <div class=\"swiper-slide\">
    \t\t\t\t              <img src=\"";
            // line 20
            yield ($context["thumb"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\">
    \t\t\t\t            </div>
    \t\t\t\t            ";
        }
        // line 23
        yield "
    \t\t\t\t            ";
        // line 24
        if ((($tmp = ($context["images"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "    \t\t\t\t              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 26
                yield "    \t\t\t\t                <div class=\"swiper-slide\">
    \t\t\t\t                \t<img src=\"";
                // line 27
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 27);
                yield "\" alt=\"";
                yield ($context["name"] ?? null);
                yield "\">
    \t\t\t\t                </div>
    \t\t\t\t              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "    \t\t\t\t            ";
        }
        // line 31
        yield "                            </div>
                        </div>
                        <div class=\"prod__slider\">
                            <button class=\"prod__slider-prev slider-btn-prev\"></button>
                            <div class=\"prod__slider-inner\">
                                <div class=\"swiper-wrapper\">
                                    ";
        // line 37
        if ((($tmp = ($context["thumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "\t\t\t\t\t\t\t         <div class=\"swiper-slide\">
\t\t\t\t\t\t\t             <img src=\"";
            // line 39
            yield ($context["thumb"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\">
\t\t\t\t\t\t\t         </div>
\t\t\t\t\t\t\t         ";
        }
        // line 42
        yield "
\t\t\t\t\t\t\t         ";
        // line 43
        if ((($tmp = ($context["images"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "\t\t\t\t\t\t\t              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 45
                yield "\t\t\t\t\t\t\t              <div class=\"swiper-slide\">
\t\t\t\t\t\t\t                 <img src=\"";
                // line 46
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 46);
                yield "\" alt=\"";
                yield ($context["name"] ?? null);
                yield "\">
\t\t\t\t\t\t\t              </div>
\t\t\t\t\t\t\t             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "\t\t\t\t\t\t\t         ";
        }
        // line 50
        yield "                                </div>
                            </div>
                            <button class=\"prod__slider-next slider-btn-next\"></button>
                        </div>
                    </div>
                    <div class=\"prod__content\">
                        <div class=\"prod__start\">
                            <div class=\"prod__top\">
                                <div class=\"prod__top-info\">
                                    <p class=\"prod__top-name\">Электрошокер</p>
                                    <h1 class=\"prod__top-title\">";
        // line 60
        yield ($context["name"] ?? null);
        yield "</h1>
                                    <p class=\"prod__top-made\">";
        // line 61
        yield ($context["text_manufacturer"] ?? null);
        yield ": <strong>";
        yield ($context["manufacturer"] ?? null);
        yield "</strong> </p>
                                </div>
                                <div class=\"prod__top-icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"118\" height=\"70\" viewBox=\"0 0 118 70\" fill=\"none\">
                                        <path d=\"M61.3496 17.2407C62.317 17.2407 63.2849 17.2597 64.2275 17.2974C64.7237 17.3162 65.0711 17.6927 64.8975 18.0503L62.9629 22.1909L53.1885 43.0073C52.9652 43.5154 51.9732 43.3836 51.9727 42.8569C51.8982 36.947 51.3021 23.5837 47.6553 24.3931C47.6303 24.4116 47.5806 24.4115 47.5312 24.4302H47.5068C47.4078 24.449 47.3334 24.4865 47.2344 24.5054C36.7406 27.3662 29.7445 32.5422 29.7441 38.4331C29.7441 47.4297 45.9934 54.7143 66.0635 54.7144C73.8782 54.7144 81.0727 53.6031 87.002 51.7397C87.002 51.7397 87.0269 51.74 87.0518 51.7212C88.0441 51.4012 89.0118 51.0622 89.9297 50.7046C93.2292 49.6318 97.3225 48.6917 90.8477 53.1899C83.3803 57.1612 72.9357 59.6079 61.375 59.6079C38.6503 59.6079 20.2422 50.1212 20.2422 38.4331C20.2425 30.9047 27.8835 24.2793 39.3945 20.5151C45.7454 18.4449 53.2623 17.2408 61.3496 17.2407ZM55.8916 9.39209C78.5914 9.39212 96.999 18.8781 96.999 30.5474C96.999 38.0758 91.7649 47.129 80.2539 50.8745C73.9029 52.9449 67.7251 53.8478 59.7119 53.1138C56.9831 52.8691 55.2957 52.2669 54.0801 51.7964C52.9145 51.3447 52.4433 50.705 52.8896 49.7642L54.3037 46.771L61.9443 30.4907C62.6141 29.0792 65.3678 29.3992 65.4424 30.9048C65.7649 37.2664 67.7252 40.0708 70.5781 39.4497C70.6029 39.4309 70.6526 39.4313 70.7021 39.4126H70.7275C70.8266 39.3938 70.9009 39.3552 71 39.3364C81.4689 36.4756 81.296 34.4621 80.7998 29.8511C79.8571 20.8921 71.2479 14.2856 51.1777 14.2856C43.3879 14.2857 36.1685 15.3772 30.2393 17.2593C30.2372 17.2593 30.2132 17.2598 30.1895 17.2778C29.222 17.579 28.2792 17.9183 27.3613 18.2759C27.3366 18.276 27.3118 18.2944 27.2871 18.2944C23.9876 19.3672 19.9439 20.2895 26.4189 15.8101C33.8863 11.8388 44.3308 9.39209 55.8916 9.39209Z\" fill=\"black\"/>
                                    </svg>
                                </div>
                            </div>
                            <div class=\"prod__about\">
                                <p class=\"prod__about-price\">
                                \t";
        // line 71
        if ((($tmp = ($context["special"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "                                \t<span>";
            yield ($context["price"] ?? null);
            yield "</span>
                                \t";
        }
        // line 74
        yield "                                \t";
        yield ((($context["special"] ?? null)) ? ($context["special"]) : (($context["price"] ?? null)));
        yield "
                                </p>
                                <p class=\"prod__about-avaliable\" data-product-avaliable=\"yes\">Есть в наличии</p>
                                <div class=\"prod__about-quantity\">
                                    <button class=\"quantity-minus\"></button>
                                    <input class=\"quantity-count\" type=\"number\" value=\"1\" min=\"1\" max=\"999\">
                                    <button class=\"quantity-plus\"></button>
                                </div>
                            </div>
                            <div class=\"prod__buttons\">
                                <button class=\"prod__add btn-4\">
                                    Добавить В корзину
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\">
                                        <path d=\"M9.33496 6.66675H13.335V9.33374H9.33496V13.3337H6.66797V9.33374H2.66797V6.66675H6.66797V2.66675H9.33496V6.66675Z\" fill=\"white\"/>
                                    </svg>
                                </button>
                                <button class=\"prod__fav\"></button>
                            </div>
                        </div>
                        <div class=\"prod__block\">
                            <div class=\"prod__item\">
                                <h3 class=\"prod__item-title\">";
        // line 95
        yield ($context["tab_description"] ?? null);
        yield "</h3>
                                <div class=\"prod__item-content\">
                                    ";
        // line 97
        yield ($context["description"] ?? null);
        yield "
                                    <div class=\"prod__item-video\">
                                        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/50o6dsdbpUU?si=xlxqdInaOR4SXCXG\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 104
            yield "\t                            <div class=\"prod__item\">

\t                                <h3 class=\"prod__item-title\">";
            // line 106
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 106);
            yield "</h3>
\t                                <div class=\"prod__item-content prod__item-info\">
\t                                \t";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "attribute", [], "any", false, false, false, 108));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 109
                yield "\t                                    \t<p>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 109);
                yield ": <strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 109);
                yield "</strong></p>
\t                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "\t                                </div>
\t                            </div>
\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "                            <div class=\"prod__item\">
                                <h3 class=\"prod__item-title\">Гарантийные обязательства</h3>
                                <div class=\"prod__item-content prod__item-info\">
                                    <p>Условия продажи электрошокера: <strong>18 лет, без лицензии</strong></p>
                                    <p>Срок эксплуатации: <strong>3 года</strong></p>
                                    <p>Гарантия: <strong>5 лет, включая ремонт:</strong></p>
                                    <p>- 1 год посебестоемости запчастей;</p>
                                    <p>- 4 года полная стоимость запчастей(+работа)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        


";
        // line 132
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "<section class=\"productSlider\">
    <div class=\"container\">
        <div class=\"productSlider__inner\">
            <div class=\"productSlider__top\">
                <h2 class=\"productSlider__title title\">Подобрано Для Вас</h2>
                <div class=\"productSlider__button slider-buttons\">
                    <button class=\"productSlider-prev slider-btn-prev\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M17.0002 18.0002L11.0002 12.0002L17.0002 6.00024L15.0002 4.00024L7.00024 12.0002L15.0002 20.0002L17.0002 18.0002Z\" fill=\"#8A909B\"/></svg>
                    </button>
                    <button class=\"productSlider-next slider-btn-next\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M6.99976 18.0002L12.9998 12.0002L6.99976 6.00024L8.99976 4.00024L16.9998 12.0002L8.99976 20.0002L6.99976 18.0002Z\" fill=\"#8A909B\"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class=\"productSlider__slider\">
                <div class=\"swiper-wrapper\">
                    ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 152
                yield "                        <div class=\"productSlider__slide swiper-slide product__item\">
                            <button class=\"product__item-fav\"></button>
                            <a class=\"product__item-image\" href=\"";
                // line 154
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 154);
                yield "\">
                                <img src=\"";
                // line 155
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 155);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 155);
                yield "\">
                            </a>
                            <div class=\"product__item-content\">
                                <div class=\"product__item-buttons\">
                                    <button class=\"product__item-btn btn\">
                                        В корзину
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\"><path d=\"M7 5H10V7H7V10H5V7H2V5H5V2H7V5Z\" fill=\"#202222\"/></svg>
                                    </button>
                                    <a class=\"product__item-btn btn\" href=\"#\">
                                        Подробнее
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"12\" viewBox=\"0 0 13 12\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.99988 9.00012L6.99988 6.00012L3.99988 3.00012L4.99988 2.00012L8.99988 6.00012L4.99988 10.0001L3.99988 9.00012Z\" fill=\"#202222\"/></svg>
                                    </a>
                                </div>
                                <div class=\"product__item-info\">
                                    <a class=\"product__item-title\" href=\"#\">
                                        <h3>";
                // line 170
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 170);
                yield "</h3>
                                    </a>
                                    <p class=\"product__item-price\">
                                        ";
                // line 173
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 173)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 174
                    yield "                                            <span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 174);
                    yield "</span>
                                        ";
                }
                // line 176
                yield "                                        ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 176)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 176)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 176)));
                yield "
                                    </p>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            yield "
                </div>
            </div>
        </div>
    </div>
</section>
";
        }
        // line 189
        yield "
<section class=\"feedback\">
            <div class=\"container\">
                <div class=\"feedback__inner\">
                    <h2 class=\"feedback__title title\">Контакт <span>Хотите поговорить с нами напрямую?</span></h2>
                    <form class=\"feedback__form\" action=\"#\">
                        <input class=\"feedback__form-input\" type=\"text\" placeholder=\"Ваше Имя\" required>
                        <input class=\"feedback__form-input\" type=\"text\" placeholder=\"Email\">
                        <input class=\"feedback__form-input\" type=\"text\" placeholder=\"Ваш номер телефона\" required>
                        <button class=\"feedback__form-btn btn\">Отправить</button>
                    </form>
                </div>
            </div>
</section>

";
        // line 204
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
        return array (  432 => 204,  415 => 189,  406 => 182,  393 => 176,  387 => 174,  385 => 173,  379 => 170,  359 => 155,  355 => 154,  351 => 152,  347 => 151,  327 => 133,  325 => 132,  305 => 114,  297 => 111,  286 => 109,  282 => 108,  277 => 106,  273 => 104,  269 => 103,  260 => 97,  255 => 95,  230 => 74,  224 => 72,  222 => 71,  207 => 61,  203 => 60,  191 => 50,  188 => 49,  177 => 46,  174 => 45,  169 => 44,  167 => 43,  164 => 42,  156 => 39,  153 => 38,  151 => 37,  143 => 31,  140 => 30,  129 => 27,  126 => 26,  121 => 25,  119 => 24,  116 => 23,  108 => 20,  105 => 19,  103 => 18,  96 => 13,  78 => 9,  70 => 8,  67 => 7,  50 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/product/product.twig", "");
    }
}
