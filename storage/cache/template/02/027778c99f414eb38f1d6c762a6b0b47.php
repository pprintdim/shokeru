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

/* shokeru/template/extension/module/filter.twig */
class __TwigTemplate_0c9cc143b54eea139f82061812ad220e extends Template
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
        yield "<div class=\"shop__filters-info\">
                                        <div class=\"shop__filters-box\">
                                            <div class=\"shop__filters-block\">
                                                <h3 class=\"shop__filters-title\">Класс Wei Shi</h3>
                                                <div class=\"shop__filters-select\">
                                                    <label class=\"checkbox-block\">
                                                        <input type=\"checkbox\" name=\"wei-shi-class\" value=\"standard\" hidden>
                                                        <span>Standart (167)</span>
                                                    </label>
                                                    <label class=\"checkbox-block\">
                                                        <input type=\"checkbox\" name=\"wei-shi-class\" value=\"platinum\" hidden>
                                                        <span>Platinum (100)</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=\"filters-open-mobile\">
                                            <button class=\"filters-open-title\" type=\"button\" data-filter-target=\"voltage\">Напряжение (тыс.вольт.)</button>
                                            <button class=\"filters-open-title\" type=\"button\" data-filter-target=\"dimensions\">Габариты</button>
                                            <button class=\"filters-open-title\" type=\"button\" data-filter-target=\"country\">Страна производитель</button>
                                            <button class=\"filters-open-title\" type=\"button\" data-filter-target=\"impact-time\">Поражение до</button>
                                            <button class=\"filters-open-title\" type=\"button\" data-filter-target=\"temperature\">Поражение до °C</button>
                                        </div>

                                        <div class=\"shop__filters-box\" data-filter-id=\"voltage\">
                                            <div class=\"shop__filters-block\">
                                                <h3 class=\"shop__filters-title\">Напряжение (тыс.вольт.)</h3>
                                                <div class=\"container\">
                                                    <div class=\"shop__filters-select\">
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"voltage-kv\" value=\"less-than-50\" hidden>
                                                            <span>50 (k.volts)</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"voltage-kv\" value=\"50-99\" hidden>
                                                            <span>50 - 99 (k.volts)</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"voltage-kv\" value=\"100-150\" hidden>
                                                            <span>100 - 150 (k.volts)</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"voltage-kv\" value=\"greater-than-150\" hidden>
                                                            <span>150 (k.volts)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class=\"container\">
                                                    <div class=\"shop__filters-end\">
                                                        <button class=\"shop__filters-send btn-4\" type=\"submit\">подтвердить</button>
                                                        <button class=\"shop__filters-resets\" type=\"button\">Сбросить фильтр</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"shop__filters-box\" data-filter-id=\"dimensions\">
                                            <div class=\"shop__filters-block\">
                                                <h3 class=\"shop__filters-title\">Габариты</h3>
                                                <div class=\"container\">
                                                    <div class=\"shop__filters-select\">
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"dimensions-cm\" value=\"less-than-12\" hidden>
                                                            <span>12 см</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"dimensions-cm\" value=\"12-20\" hidden>
                                                            <span>12 - 20 см</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"dimensions-cm\" value=\"greater-than-20\" hidden>
                                                            <span>20 см</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class=\"container\">
                                                    <div class=\"shop__filters-end\">
                                                        <button class=\"shop__filters-send btn-4\" type=\"submit\">подтвердить</button>
                                                        <button class=\"shop__filters-resets\" type=\"button\">Сбросить фильтр</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"shop__filters-box\" data-filter-id=\"country\">
                                            <div class=\"shop__filters-block\">
                                                <h3 class=\"shop__filters-title\">Страна производитель</h3>
                                                <div class=\"container\">
                                                    <div class=\"shop__filters-select\">
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"country-of-origin\" value=\"china\" hidden>
                                                            <span>Китай</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"country-of-origin\" value=\"usa\" hidden>
                                                            <span>США</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"country-of-origin\" value=\"south-korea\" hidden>
                                                            <span>Южная Корея</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"country-of-origin\" value=\"taiwan\" hidden>
                                                            <span>Тайвань</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"country-of-origin\" value=\"malaysia\" hidden>
                                                            <span>Малайзия</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"country-of-origin\" value=\"germany\" hidden>
                                                            <span>Германия</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class=\"container\">
                                                    <div class=\"shop__filters-end\">
                                                        <button class=\"shop__filters-send btn-4\" type=\"submit\">подтвердить</button>
                                                        <button class=\"shop__filters-resets\" type=\"button\">Сбросить фильтр</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"shop__filters-box\" data-filter-id=\"impact-time\">
                                            <div class=\"shop__filters-block\">
                                                <h3 class=\"shop__filters-title\">Время поражения (до)</h3>
                                                <div class=\"container\">
                                                    <div class=\"shop__filters-select\">
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"time-to-impact-min\" value=\"5\" hidden>
                                                            <span>5 мин</span>
                                                        </label>
                                                        <label class=\"checkbox-block\"> 
                                                            <input type=\"checkbox\" name=\"time-to-impact-min\" value=\"10\" hidden>
                                                            <span>10 мин</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"time-to-impact-min\" value=\"20\" hidden>
                                                            <span>20 мин</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"time-to-impact-min\" value=\"30\" hidden>
                                                            <span>30 мин</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class=\"container\">
                                                    <div class=\"shop__filters-end\">
                                                        <button class=\"shop__filters-send btn-4\" type=\"submit\">подтвердить</button>
                                                        <button class=\"shop__filters-resets\" type=\"button\">Сбросить фильтр</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"shop__filters-box\" data-filter-id=\"temperature\">
                                            <div class=\"shop__filters-block\">
                                                <h3 class=\"shop__filters-title\">Температура (до)</h3>
                                                <div class=\"container\">
                                                    <div class=\"shop__filters-select\">
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"temperature-celsius\" value=\"-10\" hidden>
                                                            <span>-10 С</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"temperature-celsius\" value=\"-15\" hidden>
                                                            <span>-15 С</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"temperature-celsius\" value=\"-20\" hidden>
                                                            <span>-20 С</span>
                                                        </label>
                                                        <label class=\"checkbox-block\">
                                                            <input type=\"checkbox\" name=\"temperature-celsius\" value=\"-30\" hidden>
                                                            <span>-30 С</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class=\"container\">
                                                    <div class=\"shop__filters-end\">
                                                        <button class=\"shop__filters-send btn-4\" type=\"submit\">подтвердить</button>
                                                        <button class=\"shop__filters-resets\" type=\"button\">Сбросить фильтр</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"shop__filters-box\">
                                            <div class=\"shop__filters-block\">
                                                <h3 class=\"shop__filters-title\">Цена Wei Shi</h3>
                                                <div class=\"shop__filters-price filters-price\">
                                                    <input type=\"number\" name=\"price-from\" value=\"100\" min=\"100\" max=\"1999\" placeholder=\"от 100 грн\">
                                                    <input type=\"number\" name=\"price-to\" value=\"2000\" min=\"101\" max=\"2000\" placeholder=\"до 2000 грн\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/extension/module/filter.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/filter.twig", "");
    }
}
