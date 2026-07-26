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

/* design/banner_form.twig */
class __TwigTemplate_c3cb435c96cc80eefe38ab54d87654e0 extends Template
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
        <button type=\"submit\" form=\"form-banner\" class=\"btn btn-primary\">
          <i class=\"fa fa-save\"></i>
        </button>
        <a href=\"";
        // line 10
        yield ($context["cancel"] ?? null);
        yield "\" class=\"btn btn-default\">
          <i class=\"fa fa-reply\"></i>
        </a>
      </div>
      <h1>";
        // line 14
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            yield "          <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 24
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "      <div class=\"alert alert-danger\">
        <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 26
            yield ($context["error_warning"] ?? null);
            yield "
      </div>
    ";
        }
        // line 29
        yield "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 32
        yield ($context["text_form"] ?? null);
        yield "</h3>
      </div>

      <div class=\"panel-body\">
        <form id=\"form-banner\" action=\"";
        // line 36
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" class=\"form-horizontal\">

          <!-- NAME -->
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 40
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 42
        yield ($context["name"] ?? null);
        yield "\" class=\"form-control\">
            </div>
          </div>

          <!-- STATUS -->
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 48
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" class=\"form-control\">
                <option value=\"1\" ";
        // line 51
        yield (((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                <option value=\"0\" ";
        // line 52
        yield (((($tmp =  !($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
              </select>
            </div>
          </div>

          <!-- LANG TABS -->
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 60
            yield "              <li>
                <a href=\"#lang";
            // line 61
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            yield "\" data-toggle=\"tab\">
                  <img src=\"language/";
            // line 62
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 62);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 62);
            yield ".png\">
                  ";
            // line 63
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 63);
            yield "
                </a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "          </ul>

          <div class=\"tab-content\">
            ";
        // line 70
        $context["row"] = 0;
        // line 71
        yield "
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 73
            yield "            <div class=\"tab-pane\" id=\"lang";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            yield "\">

              <table class=\"table table-bordered table-hover\" id=\"images";
            // line 75
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            yield "\">
                <thead>
                  <tr>
                    <th>";
            // line 78
            yield ($context["entry_title"] ?? null);
            yield "</th>
                    <th>";
            // line 79
            yield ($context["entry_link"] ?? null);
            yield "</th>
                    <th class=\"text-center\">Images</th>
                    <th class=\"text-center\" style=\"width:170px;\">Actions</th>
                  </tr>
                </thead>

                <tbody>
                ";
            // line 86
            if ((($tmp = (($_v0 = ($context["banner_images"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 87
                yield "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v1 = ($context["banner_images"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 88
                    yield "                  <tr id=\"row";
                    yield ($context["row"] ?? null);
                    yield "\">

                    <td>
                      <textarea
                        name=\"banner_image[";
                    // line 92
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][title]\"
                        class=\"form-control\"
                        rows=\"4\">";
                    // line 94
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 94);
                    yield "</textarea>
                    </td>


                    <td>
                      <input type=\"text\"
                        name=\"banner_image[";
                    // line 100
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][link]\"
                        value=\"";
                    // line 101
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "link", [], "any", false, false, false, 101);
                    yield "\"
                        class=\"form-control\">
                    </td>

                    <!-- IMAGES -->
                    <td class=\"text-center\">
                      <div class=\"banner-images-wrap\">

                        <div class=\"banner-image-item\">
                          <div class=\"banner-image-label\">Desktop</div>
                          <a
                            id=\"thumb-image";
                    // line 112
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112);
                    yield "-";
                    yield ($context["row"] ?? null);
                    yield "\"
                            data-toggle=\"image\"
                            data-target=\"input-image";
                    // line 114
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
                    yield "-";
                    yield ($context["row"] ?? null);
                    yield "\"
                            data-thumb=\"thumb-image";
                    // line 115
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115);
                    yield "-";
                    yield ($context["row"] ?? null);
                    yield "\"
                            class=\"img-thumbnail\">
                            <img src=\"";
                    // line 117
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 117)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 117)) : (($context["placeholder"] ?? null)));
                    yield "\">
                          </a>

                          <input
                            type=\"hidden\"
                            id=\"input-image";
                    // line 122
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122);
                    yield "-";
                    yield ($context["row"] ?? null);
                    yield "\"
                            name=\"banner_image[";
                    // line 123
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][image]\"
                            value=\"";
                    // line 124
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 124);
                    yield "\">

                        </div>

                        <div class=\"banner-image-item\">
                          <div class=\"banner-image-label\">Mobile</div>
                          <a
                            id=\"thumb-image-mob";
                    // line 131
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131);
                    yield "-";
                    yield ($context["row"] ?? null);
                    yield "\"
                            data-toggle=\"image\"
                            data-target=\"input-image-mob";
                    // line 133
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133);
                    yield "-";
                    yield ($context["row"] ?? null);
                    yield "\"
                            data-thumb=\"thumb-image-mob";
                    // line 134
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134);
                    yield "-";
                    yield ($context["row"] ?? null);
                    yield "\"
                            class=\"img-thumbnail\">
                            <img src=\"";
                    // line 136
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "mob_thumb", [], "any", false, false, false, 136)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["image"], "mob_thumb", [], "any", false, false, false, 136)) : (($context["placeholder"] ?? null)));
                    yield "\">
                          </a>

                          <input
                            type=\"hidden\"
                            id=\"input-image-mob";
                    // line 141
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 141);
                    yield "-";
                    yield ($context["row"] ?? null);
                    yield "\"
                            name=\"banner_image[";
                    // line 142
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][mob_image]\"
                            value=\"";
                    // line 143
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "mob_image", [], "any", false, false, false, 143);
                    yield "\">

                        </div>

                      </div>
                    </td>

                    <!-- ACTIONS -->
                    <td class=\"text-center\" style=\"display:flex;justify-content:space-between;gap:10px;width:170px;\">
                      <input type=\"text\"
                        name=\"banner_image[";
                    // line 153
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][sort_order]\"
                        value=\"";
                    // line 154
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "sort_order", [], "any", false, false, false, 154);
                    yield "\"
                        class=\"form-control\">
                      <button type=\"button\"
                        class=\"btn btn-primary\"
                        title=\"Description\"
                        onclick=\"openDescription(";
                    // line 159
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159);
                    yield ", ";
                    yield ($context["row"] ?? null);
                    yield ")\">
                        <i class=\"fa fa-file-text\"></i>
                      </button>

                      <button type=\"button\"
                        class=\"btn btn-danger\"
                        title=\"Remove\"
                        onclick=\"\$('#row";
                    // line 166
                    yield ($context["row"] ?? null);
                    yield "').remove()\">
                        <i class=\"fa fa-minus-circle\"></i>
                      </button>

                      <input type=\"hidden\"
                        id=\"desc";
                    // line 171
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 171);
                    yield "_";
                    yield ($context["row"] ?? null);
                    yield "\"
                        name=\"banner_image[";
                    // line 172
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 172);
                    yield "][";
                    yield ($context["row"] ?? null);
                    yield "][description]\"
                        value=\"";
                    // line 173
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "description", [], "any", true, true, false, 173) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 173)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 173)) : (""));
                    yield "\">

                    </td>

                  </tr>
                  ";
                    // line 178
                    $context["row"] = (($context["row"] ?? null) + 1);
                    // line 179
                    yield "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                yield "                ";
            }
            // line 181
            yield "                </tbody>

                <tfoot>
                  <tr>
                    <td colspan=\"5\">
                      <button type=\"button\"
                        class=\"btn btn-primary\"
                        onclick=\"addRow(";
            // line 188
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 188);
            yield ")\">
                        <i class=\"fa fa-plus-circle\"></i> ";
            // line 189
            yield ($context["button_banner_add"] ?? null);
            yield "
                      </button>
                    </td>
                  </tr>
                </tfoot>

              </table>

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        yield "          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<style>
.banner-images-wrap {
  display: flex;
  gap: 10px;
  justify-content: center;
}

.banner-image-item {
  width: 90px;
}

.banner-image-label {
  font-size: 11px;
  color: #777;
  margin-bottom: 4px;
}

.banner-image-item img {
  max-width: 100%;
}
</style>
<script>
let row = ";
        // line 228
        yield ($context["row"] ?? null);
        yield ";

/* =========================
   DESCRIPTION POPUP
========================= */
function openDescription(lang, rowId) {

  \$('#desc-modal').remove();

  const input = \$('#desc' + lang + '_' + rowId);
  const value = input.val() || '';

  \$('body').append(`
    <div id=\"desc-modal\" style=\"
      position:fixed; inset:0;
      background:rgba(0,0,0,.5);
      display:flex; align-items:center; justify-content:center;
      z-index:9999\">
      <div style=\"background:#fff; padding:20px; width:520px; max-width:95%;\">
        <h4>Description</h4>
        <textarea id=\"desc-text\" class=\"form-control\" style=\"height:170px;\">\${value}</textarea>
        <div class=\"text-right\" style=\"margin-top:10px;\">
          <button type=\"button\" class=\"btn btn-default\" onclick=\"\$('#desc-modal').remove()\">Cancel</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"desc-save\">Save</button>
        </div>
      </div>
    </div>
  `);

  \$('#desc-save').on('click', function () {
    input.val(\$('#desc-text').val());
    \$('#desc-modal').remove();
  });
}

/* =========================
   ADD ROW
========================= */
function addRow(lang) {

  const html = `
    <tr id=\"row\${row}\">

      <td>
        <textarea
          name=\"banner_image[\${lang}][\${row}][title]\"
          class=\"form-control\"
          rows=\"4\"></textarea>
      </td>

      <td>
        <input type=\"text\" name=\"banner_image[\${lang}][\${row}][link]\" class=\"form-control\">
      </td>

      <td class=\"text-center\">
        <div class=\"banner-images-wrap\">

          <div class=\"banner-image-item\">
            <div class=\"banner-image-label\">Desktop</div>
            <a
              id=\"thumb-image\${lang}-\${row}\"
              data-toggle=\"image\"
              data-target=\"input-image\${lang}-\${row}\"
              data-thumb=\"thumb-image\${lang}-\${row}\"
              class=\"img-thumbnail\">
              <img src=\"";
        // line 293
        yield ($context["placeholder"] ?? null);
        yield "\">
            </a>

            <input
              type=\"hidden\"
              id=\"input-image\${lang}-\${row}\"
              name=\"banner_image[\${lang}][\${row}][image]\">

          </div>

          <div class=\"banner-image-item\">
            <div class=\"banner-image-label\">Mobile</div>
            <a
              id=\"thumb-image-mob\${lang}-\${row}\"
              data-toggle=\"image\"
              data-target=\"input-image-mob\${lang}-\${row}\"
              data-thumb=\"thumb-image-mob\${lang}-\${row}\"
              class=\"img-thumbnail\">
              <img src=\"";
        // line 311
        yield ($context["placeholder"] ?? null);
        yield "\">
            </a>

            <input
              type=\"hidden\"
              id=\"input-image-mob\${lang}-\${row}\"
              name=\"banner_image[\${lang}][\${row}][mob_image]\">

          </div>

        </div>
      </td>

      <td class=\"text-center\" style=\"display:flex;justify-content:space-between;gap:10px;width:170px;\">
        <input type=\"text\" name=\"banner_image[\${lang}][\${row}][sort_order]\" class=\"form-control\">
        <button type=\"button\" class=\"btn btn-primary\"
          onclick=\"openDescription(\${lang}, \${row})\">
          <i class=\"fa fa-file-text\"></i>
        </button>

        <button type=\"button\" class=\"btn btn-danger\"
          onclick=\"\$('#row\${row}').remove()\">
          <i class=\"fa fa-minus-circle\"></i>
        </button>

        <input type=\"hidden\"
          id=\"desc\${lang}_\${row}\"
          name=\"banner_image[\${lang}][\${row}][description]\">
      </td>

    </tr>
  `;

  \$('#images' + lang + ' tbody').append(html);
  row++;
}

/* INIT */
\$('#language a:first').tab('show');
</script>

";
        // line 352
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
        return "design/banner_form.twig";
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
        return array (  636 => 352,  592 => 311,  571 => 293,  503 => 228,  472 => 199,  456 => 189,  452 => 188,  443 => 181,  440 => 180,  434 => 179,  432 => 178,  424 => 173,  418 => 172,  412 => 171,  404 => 166,  392 => 159,  384 => 154,  378 => 153,  365 => 143,  359 => 142,  353 => 141,  345 => 136,  338 => 134,  332 => 133,  325 => 131,  315 => 124,  309 => 123,  303 => 122,  295 => 117,  288 => 115,  282 => 114,  275 => 112,  261 => 101,  255 => 100,  246 => 94,  239 => 92,  231 => 88,  226 => 87,  224 => 86,  214 => 79,  210 => 78,  204 => 75,  198 => 73,  194 => 72,  191 => 71,  189 => 70,  184 => 67,  174 => 63,  168 => 62,  164 => 61,  161 => 60,  157 => 59,  145 => 52,  139 => 51,  133 => 48,  124 => 42,  119 => 40,  112 => 36,  105 => 32,  100 => 29,  94 => 26,  91 => 25,  89 => 24,  82 => 19,  71 => 17,  67 => 16,  62 => 14,  55 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "design/banner_form.twig", "");
    }
}
