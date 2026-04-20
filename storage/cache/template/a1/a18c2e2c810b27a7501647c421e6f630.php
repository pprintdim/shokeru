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

/* extension/theme/default.twig */
class __TwigTemplate_5f97c345e42e33e3e188207f9448a969 extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["cancel"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "        <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        yield ($context["text_edit"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        yield ($context["text_general"] ?? null);
        yield "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-directory\"><span data-toggle=\"tooltip\" title=\"";
        // line 31
        yield ($context["help_directory"] ?? null);
        yield "\">";
        yield ($context["entry_directory"] ?? null);
        yield "</span></label>
              <div class=\"col-sm-10\">
                <select name=\"theme_default_directory\" id=\"input-directory\" class=\"form-control\">
                  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["directories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 35
            yield "                  ";
            if (($context["directory"] == ($context["theme_default_directory"] ?? null))) {
                // line 36
                yield "                  <option value=\"";
                yield $context["directory"];
                yield "\" selected=\"selected\">";
                yield $context["directory"];
                yield "</option>
                  ";
            } else {
                // line 38
                yield "                  <option value=\"";
                yield $context["directory"];
                yield "\">";
                yield $context["directory"];
                yield "</option>
                  ";
            }
            // line 40
            yield "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['directory'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 45
        yield ($context["entry_status"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <select name=\"theme_default_status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 48
        if ((($tmp = ($context["theme_default_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                  <option value=\"1\" selected=\"selected\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                  <option value=\"0\">";
            // line 50
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                  ";
        } else {
            // line 52
            yield "                  <option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 53
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                  ";
        }
        // line 55
        yield "                </select>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 60
        yield ($context["text_product"] ?? null);
        yield "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 62
        yield ($context["help_product_limit"] ?? null);
        yield "\">";
        yield ($context["entry_product_limit"] ?? null);
        yield "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"theme_default_product_limit\" value=\"";
        // line 64
        yield ($context["theme_default_product_limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product_limit"] ?? null);
        yield "\" id=\"input-catalog-limit\" class=\"form-control\" />
                ";
        // line 65
        if ((($tmp = ($context["error_product_limit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "                <div class=\"text-danger\">";
            yield ($context["error_product_limit"] ?? null);
            yield "</div>
                ";
        }
        // line 68
        yield "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 71
        yield ($context["help_product_description_length"] ?? null);
        yield "\">";
        yield ($context["entry_product_description_length"] ?? null);
        yield "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"theme_default_product_description_length\" value=\"";
        // line 73
        yield ($context["theme_default_product_description_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product_description_length"] ?? null);
        yield "\" id=\"input-description-limit\" class=\"form-control\" />
                ";
        // line 74
        if ((($tmp = ($context["error_product_description_length"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "                <div class=\"text-danger\">";
            yield ($context["error_product_description_length"] ?? null);
            yield "</div>
                ";
        }
        // line 77
        yield "              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 81
        yield ($context["text_image"] ?? null);
        yield "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 83
        yield ($context["entry_image_category"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_category_width\" value=\"";
        // line 87
        yield ($context["theme_default_image_category_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-category-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_category_height\" value=\"";
        // line 90
        yield ($context["theme_default_image_category_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 93
        if ((($tmp = ($context["error_image_category"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "                <div class=\"text-danger\">";
            yield ($context["error_image_category"] ?? null);
            yield "</div>
                ";
        }
        // line 96
        yield "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 99
        yield ($context["entry_image_thumb"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_thumb_width\" value=\"";
        // line 103
        yield ($context["theme_default_image_thumb_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-thumb-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_thumb_height\" value=\"";
        // line 106
        yield ($context["theme_default_image_thumb_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 109
        if ((($tmp = ($context["error_image_thumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 110
            yield "                <div class=\"text-danger\">";
            yield ($context["error_image_thumb"] ?? null);
            yield "</div>
                ";
        }
        // line 112
        yield "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-popup-width\">";
        // line 115
        yield ($context["entry_image_popup"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_popup_width\" value=\"";
        // line 119
        yield ($context["theme_default_image_popup_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-popup-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_popup_height\" value=\"";
        // line 122
        yield ($context["theme_default_image_popup_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 125
        if ((($tmp = ($context["error_image_popup"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "                <div class=\"text-danger\">";
            yield ($context["error_image_popup"] ?? null);
            yield "</div>
                ";
        }
        // line 128
        yield "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-product-width\">";
        // line 131
        yield ($context["entry_image_product"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_product_width\" value=\"";
        // line 135
        yield ($context["theme_default_image_product_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-product-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_product_height\" value=\"";
        // line 138
        yield ($context["theme_default_image_product_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 141
        if ((($tmp = ($context["error_image_product"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 142
            yield "                <div class=\"text-danger\">";
            yield ($context["error_image_product"] ?? null);
            yield "</div>
                ";
        }
        // line 144
        yield "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 147
        yield ($context["entry_image_additional"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_additional_width\" value=\"";
        // line 151
        yield ($context["theme_default_image_additional_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-additional-width\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_additional_height\" value=\"";
        // line 154
        yield ($context["theme_default_image_additional_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 157
        if ((($tmp = ($context["error_image_additional"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "                <div class=\"text-danger\">";
            yield ($context["error_image_additional"] ?? null);
            yield "</div>
                ";
        }
        // line 160
        yield "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 163
        yield ($context["entry_image_related"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_related_width\" value=\"";
        // line 167
        yield ($context["theme_default_image_related_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-related\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_related_height\" value=\"";
        // line 170
        yield ($context["theme_default_image_related_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 173
        if ((($tmp = ($context["error_image_related"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 174
            yield "                <div class=\"text-danger\">";
            yield ($context["error_image_related"] ?? null);
            yield "</div>
                ";
        }
        // line 176
        yield "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-compare\">";
        // line 179
        yield ($context["entry_image_compare"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_compare_width\" value=\"";
        // line 183
        yield ($context["theme_default_image_compare_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-compare\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_compare_height\" value=\"";
        // line 186
        yield ($context["theme_default_image_compare_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 189
        if ((($tmp = ($context["error_image_compare"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 190
            yield "                <div class=\"text-danger\">";
            yield ($context["error_image_compare"] ?? null);
            yield "</div>
                ";
        }
        // line 192
        yield "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-wishlist\">";
        // line 195
        yield ($context["entry_image_wishlist"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_wishlist_width\" value=\"";
        // line 199
        yield ($context["theme_default_image_wishlist_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-wishlist\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_wishlist_height\" value=\"";
        // line 202
        yield ($context["theme_default_image_wishlist_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 205
        if ((($tmp = ($context["error_image_wishlist"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 206
            yield "                <div class=\"text-danger\">";
            yield ($context["error_image_wishlist"] ?? null);
            yield "</div>
                ";
        }
        // line 208
        yield "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 211
        yield ($context["entry_image_cart"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_cart_width\" value=\"";
        // line 215
        yield ($context["theme_default_image_cart_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-cart\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_cart_height\" value=\"";
        // line 218
        yield ($context["theme_default_image_cart_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 221
        if ((($tmp = ($context["error_image_cart"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 222
            yield "                <div class=\"text-danger\">";
            yield ($context["error_image_cart"] ?? null);
            yield "</div>
                ";
        }
        // line 224
        yield "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-image-location\">";
        // line 227
        yield ($context["entry_image_location"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_location_width\" value=\"";
        // line 231
        yield ($context["theme_default_image_location_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-location\" class=\"form-control\" />
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_location_height\" value=\"";
        // line 234
        yield ($context["theme_default_image_location_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 237
        if ((($tmp = ($context["error_image_location"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 238
            yield "                <div class=\"text-danger\">";
            yield ($context["error_image_location"] ?? null);
            yield "</div>
                ";
        }
        // line 240
        yield "              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 248
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/theme/default.twig";
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
        return array (  623 => 248,  613 => 240,  607 => 238,  605 => 237,  597 => 234,  589 => 231,  582 => 227,  577 => 224,  571 => 222,  569 => 221,  561 => 218,  553 => 215,  546 => 211,  541 => 208,  535 => 206,  533 => 205,  525 => 202,  517 => 199,  510 => 195,  505 => 192,  499 => 190,  497 => 189,  489 => 186,  481 => 183,  474 => 179,  469 => 176,  463 => 174,  461 => 173,  453 => 170,  445 => 167,  438 => 163,  433 => 160,  427 => 158,  425 => 157,  417 => 154,  409 => 151,  402 => 147,  397 => 144,  391 => 142,  389 => 141,  381 => 138,  373 => 135,  366 => 131,  361 => 128,  355 => 126,  353 => 125,  345 => 122,  337 => 119,  330 => 115,  325 => 112,  319 => 110,  317 => 109,  309 => 106,  301 => 103,  294 => 99,  289 => 96,  283 => 94,  281 => 93,  273 => 90,  265 => 87,  258 => 83,  253 => 81,  247 => 77,  241 => 75,  239 => 74,  233 => 73,  226 => 71,  221 => 68,  215 => 66,  213 => 65,  207 => 64,  200 => 62,  195 => 60,  188 => 55,  183 => 53,  178 => 52,  173 => 50,  168 => 49,  166 => 48,  160 => 45,  154 => 41,  148 => 40,  140 => 38,  132 => 36,  129 => 35,  125 => 34,  117 => 31,  112 => 29,  107 => 27,  101 => 24,  97 => 22,  89 => 18,  87 => 17,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/theme/default.twig", "");
    }
}
