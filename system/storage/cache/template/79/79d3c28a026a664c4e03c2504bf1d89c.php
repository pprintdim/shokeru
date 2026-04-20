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
class __TwigTemplate_1d9e1e32a4567ff9cbcae053ad6c85a7 extends Template
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
            <p class=\"refund__name\">";
        // line 12
        yield ($context["heading_form"] ?? null);
        yield "</p>
            <form class=\"refund__form\" action=\"";
        // line 13
        yield ($context["action"] ?? null);
        yield "\">
                <div class=\"refund__form-box\">
                    <div class=\"refund__form-top\">
                        <p class=\"refund__form-num\">1</p>
                        <h3 class=\"refund__form-title\">";
        // line 17
        yield ($context["column_order_id"] ?? null);
        yield "</h3>
                    </div>
                    <div class=\"refund__form-block\">
                        <div class=\"refund__form-inputs\">
                            <input type=\"text\" name=\"firstname\" placeholder=\"";
        // line 21
        yield ($context["entry_firstname"] ?? null);
        yield "\" class=\"form-input\">
                            <input type=\"text\" name=\"lastname\" placeholder=\"";
        // line 22
        yield ($context["entry_lastname"] ?? null);
        yield "\" class=\"form-input\">
                            <span></span>
                            <input type=\"text\" name=\"thirdname\" placeholder=\"";
        // line 24
        yield ($context["entry_thirdname"] ?? null);
        yield "\" class=\"form-input\">
                            <input type=\"tel\" name=\"telephone\" placeholder=\"";
        // line 25
        yield ($context["entry_telephone"] ?? null);
        yield "\" class=\"form-input\">
                            <span></span>
                            <input type=\"email\" name=\"email\" placeholder=\"";
        // line 27
        yield ($context["entry_email"] ?? null);
        yield "\" class=\"form-input\">
                            <span></span>
                            <span></span>
                            <input type=\"text\" name=\"Номер-заказа\" placeholder=\"Номер заказа\" class=\"form-input\">     
                            <input type=\"text\" name=\"date_ordered\" placeholder=\"";
        // line 31
        yield ($context["text_date_ordered"] ?? null);
        yield "\" class=\"form-input\">
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class=\"refund__form-box\">
                    <div class=\"refund__form-top\">
                        <p class=\"refund__form-num\">2</p>
                        <h3 class=\"refund__form-title\">";
        // line 40
        yield ($context["text_reason"] ?? null);
        yield "</h3>
                    </div>
                    <div class=\"refund__form-block\">
                        <div class=\"refund__form-inputs\">
                            <input type=\"text\" name=\"product\" placeholder=\"* ";
        // line 44
        yield ($context["column_product"] ?? null);
        yield ":\" required class=\"form-input fill-input\">                                    
                            <input type=\"text\" name=\"model\" placeholder=\"* ";
        // line 45
        yield ($context["column_model"] ?? null);
        yield "\" required class=\"form-input\">
                            <input type=\"text\" name=\"quantity\" placeholder=\"";
        // line 46
        yield ($context["column_quantity"] ?? null);
        yield ":\" class=\"form-input\">
                        </div>
                        <div class=\"refund__form-block--fill\">

                            <div class=\"refund__form-refund\">
                                <h4 class=\"refund__form-name\">";
        // line 51
        yield ($context["column_reason"] ?? null);
        yield "</h4>
                                <div class=\"refund__form-checkbox\">
                                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
            // line 54
            yield "                                        <label class=\"checkbox-block\">
                                            <input type=\"radio\" value=\"";
            // line 55
            yield $context["reason"];
            yield "\" name=\"reason_refund\" hidden>
                                            <span>";
            // line 56
            yield $context["reason"];
            yield "</span>
                                        </label>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reason'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                                    
                                </div>
                            </div>


                            <div class=\"refund__form-unpacked\">
                                <div class=\"refund__form-unpacked--block\">
                                    <h4 class=\"refund__form-name\">";
        // line 66
        yield ($context["text_product_unpacked"] ?? null);
        yield "</h4>
                                    <div class=\"refund__form-checkbox\">
                                        <label class=\"checkbox-block\">
                                            <input type=\"radio\" value=\"1\" name=\"unpacked\" hidden>
                                            <span>";
        // line 70
        yield ($context["text_yes"] ?? null);
        yield "</span>
                                        </label>
                                        <label class=\"checkbox-block\">
                                            <input type=\"radio\" value=\"0\" name=\"unpacked\" hidden>
                                            <span>";
        // line 74
        yield ($context["text_no"] ?? null);
        yield "</span>
                                        </label>
                                    </div>
                                </div>
                                <div class=\"refund__form-defects\">                                         
                                    <textarea class=\"form-input\" name=\"defects-message\" placeholder=\"";
        // line 79
        yield ($context["entry_fault_detail"] ?? null);
        yield "\"></textarea>        
                                    <div class=\"refund__form-buttons\">
                                        <button class=\"refund__form-btn btn-3\" type=\"button\">";
        // line 81
        yield ($context["button_remove"] ?? null);
        yield "</button>
                                        <button class=\"refund__form-btn btn-4\" type=\"button\">";
        // line 82
        yield ($context["button_add"] ?? null);
        yield "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"refund__form-box\">
                        <div class=\"refund__form-top\">
                            <p class=\"refund__form-num\">3</p>
                            <h3 class=\"refund__form-title\">";
        // line 93
        yield ($context["column_comment"] ?? null);
        yield "</h3>
                        </div>
                        <div class=\"refund__form-message\">
                            <textarea class=\"form-input\" name=\"message\" placeholder=\"";
        // line 96
        yield ($context["entry_comment"] ?? null);
        yield "\"></textarea>
                            <button class=\"refund__form-send btn-4\" type=\"submit\">";
        // line 97
        yield ($context["button_submit"] ?? null);
        yield "</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
";
        // line 104
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
        return array (  273 => 104,  263 => 97,  259 => 96,  253 => 93,  239 => 82,  235 => 81,  230 => 79,  222 => 74,  215 => 70,  208 => 66,  199 => 59,  190 => 56,  186 => 55,  183 => 54,  179 => 53,  174 => 51,  166 => 46,  162 => 45,  158 => 44,  151 => 40,  139 => 31,  132 => 27,  127 => 25,  123 => 24,  118 => 22,  114 => 21,  107 => 17,  100 => 13,  96 => 12,  92 => 11,  87 => 8,  66 => 6,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/account/return_form.twig", "");
    }
}
