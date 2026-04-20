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

/* shokeru/template/account/return_form.twig */
class __TwigTemplate_9f749c961b54992a2a8812a2b33f29d6 extends Template
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
<section class=\"refund\">
    <div class=\"container\">
        <ul class=\"breadcrumbs\">
\t\t\t";
        // line 5
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
            // line 6
            yield "\t\t\t    <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            yield "\" ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("class=\"active\"") : (""));
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            yield "</a></li>
\t\t    ";
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
        // line 8
        yield "\t\t\t  
        </ul>    
        <div class=\"refund__inner\">
            <h1 class=\"refund__title main-title\">";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h1>
            <p class=\"refund__name\">Пожалуйста заполните форму запроса на возврат товар.</p>
            <form class=\"refund__form\" action=\"#\">
                <div class=\"refund__form-box\">
                    <div class=\"refund__form-top\">
                        <p class=\"refund__form-num\">1</p>
                        <h3 class=\"refund__form-title\">Информация о заказе</h3>
                    </div>
                    <div class=\"refund__form-block\">
                        <div class=\"refund__form-inputs\">
                            <input type=\"text\" name=\"Имя\" placeholder=\"Ваше Имя\" class=\"form-input\">
                            <input type=\"text\" name=\"Фамилия\" placeholder=\"Фамилия\" class=\"form-input\">
                            <span></span>
                            <input type=\"text\" name=\"Отчество\" placeholder=\"Отчество\" class=\"form-input\">
                            <input type=\"tel\" name=\"Телефон\" placeholder=\"Телефон\" class=\"form-input\">
                            <span></span>
                            <input type=\"email\" name=\"email\" placeholder=\"Email\" class=\"form-input\">
                            <span></span>
                            <span></span>
                            <input type=\"text\" name=\"Номер-заказа\" placeholder=\"Номер заказа\" class=\"form-input\">     
                            <input type=\"text\" name=\"Дата-заказа\" placeholder=\"Дата заказа\" class=\"form-input\">
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class=\"refund__form-box\">
                    <div class=\"refund__form-top\">
                        <p class=\"refund__form-num\">2</p>
                        <h3 class=\"refund__form-title\">Информация о товаре и причина возврата</h3>
                    </div>
                    <div class=\"refund__form-block\">
                        <div class=\"refund__form-inputs\">
                            <input type=\"text\" name=\"Наименование-товара\" placeholder=\"* Наименование товара:\" required class=\"form-input fill-input\">                                    
                            <input type=\"text\" name=\"Модель\" placeholder=\"* Модель:\" required class=\"form-input\">
                            <input type=\"text\" name=\"Количество\" placeholder=\"Количество:\" class=\"form-input\">
                        </div>
                        <div class=\"refund__form-block--fill\">

                            <div class=\"refund__form-refund\">
                                <h4 class=\"refund__form-name\">* Причина возврата:</h4>
                                <div class=\"refund__form-checkbox\">
                                    <label class=\"checkbox-block\">
                                        <input type=\"radio\" value=\"Испорчен по прибытии\" name=\"reason-refund\" hidden>
                                        <span>Испорчен по прибытии</span>
                                    </label>
                                    <label class=\"checkbox-block\">
                                        <input type=\"radio\" value=\"Неисправность\" name=\"reason-refund\" hidden>
                                        <span>Неисправность</span>
                                    </label>
                                    <label class=\"checkbox-block\">
                                        <input type=\"radio\" value=\"Ошибка заказа\" name=\"reason-refund\" hidden>
                                        <span>Ошибка заказа</span>
                                    </label>
                                    <label class=\"checkbox-block\">
                                        <input type=\"radio\" value=\"Получен неверный товар\" name=\"reason-refund\" hidden>
                                        <span>Получен неверный товар</span>
                                    </label>
                                    <label class=\"checkbox-block\">
                                        <input type=\"radio\" value=\"Другое\" name=\"reason-refund\" hidden>
                                        <span>Другое</span>
                                    </label>
                                </div>
                            </div>


                            <div class=\"refund__form-unpacked\">
                                <div class=\"refund__form-unpacked--block\">
                                    <h4 class=\"refund__form-name\">";
        // line 79
        yield ($context["text_product_unpacked"] ?? null);
        yield "</h4>
                                    <div class=\"refund__form-checkbox\">
                                        <label class=\"checkbox-block\">
                                            <input type=\"radio\" value=\"Да\" name=\"unpacked\" hidden>
                                            <span>";
        // line 83
        yield ($context["text_yes"] ?? null);
        yield "</span>
                                        </label>
                                        <label class=\"checkbox-block\">
                                            <input type=\"radio\" value=\"Нет\" name=\"unpacked\" hidden>
                                            <span>";
        // line 87
        yield ($context["next_no"] ?? null);
        yield "</span>
                                        </label>
                                    </div>
                                </div>
                                <div class=\"refund__form-defects\">                                         
                                    <textarea class=\"form-input\" name=\"defects-message\" placeholder=\"";
        // line 92
        yield ($context["entry_fault_detail"] ?? null);
        yield "\"></textarea>        
                                    <div class=\"refund__form-buttons\">
                                        <button class=\"refund__form-btn btn-3\" type=\"button\">";
        // line 94
        yield ($context["button_remove"] ?? null);
        yield "</button>
                                        <button class=\"refund__form-btn btn-4\" type=\"button\">Добавить товар</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"refund__form-box\">
                        <div class=\"refund__form-top\">
                            <p class=\"refund__form-num\">3</p>
                            <h3 class=\"refund__form-title\">Дополнительная информация</h3>
                        </div>
                        <div class=\"refund__form-message\">
                            <textarea class=\"form-input\" name=\"message\" placeholder=\"Ваш текст:\"></textarea>
                            <button class=\"refund__form-send btn-4\" type=\"submit\">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
";
        // line 117
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/account/return_form.twig";
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
        return array (  216 => 117,  190 => 94,  185 => 92,  177 => 87,  170 => 83,  163 => 79,  92 => 11,  87 => 8,  66 => 6,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/account/return_form.twig", "");
    }
}
