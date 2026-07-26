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

/* extension/module/html_repeater.twig */
class __TwigTemplate_a96c45ee2b5d4ab66b5820351b14bc7b extends Template
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
        <button type=\"submit\" form=\"form-module\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        yield ($context["cancel"] ?? null);
        yield "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 15
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "</div>
    ";
        }
        // line 18
        yield "    ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "      <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "</div>
    ";
        }
        // line 21
        yield "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        yield ($context["text_edit"] ?? null);
        yield "</h3>
      </div>

      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" id=\"form-module\" class=\"form-horizontal\">

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 31
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 33
        yield ($context["name"] ?? null);
        yield "\" class=\"form-control\">
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 38
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" class=\"form-control\">
                <option value=\"1\" ";
        // line 41
        yield (((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">Enabled</option>
                <option value=\"0\" ";
        // line 42
        yield (((($tmp =  !($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">Disabled</option>
              </select>
            </div>
          </div>

          <hr>

          <div class=\"pull-right\" style=\"margin-bottom:10px;\">
            <button type=\"button\" class=\"btn btn-primary\" id=\"btn-add-item\">
              <i class=\"fa fa-plus-circle\"></i> ";
        // line 51
        yield ($context["button_add"] ?? null);
        yield "
            </button>
          </div>

          <table class=\"table table-bordered table-hover\" id=\"repeater-table\">
            <thead>
              <tr>
                <th style=\"width:35px;\"></th>
                <th>Text (Multilanguage)</th>
                <th class=\"text-center\" style=\"width:230px;\">Images</th>
                <th style=\"width:210px;\">Meta</th>
              </tr>
            </thead>

            <tbody id=\"repeater-body\">
              ";
        // line 66
        $context["idx"] = 0;
        // line 67
        yield "              ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
        foreach ($context['_seq'] as $context["item_id"] => $context["item"]) {
            // line 68
            yield "              <tr class=\"repeater-row\" data-item-id=\"";
            yield $context["item_id"];
            yield "\">
                <td class=\"text-center drag-handle\" style=\"cursor:move;\">
                  <i class=\"fa fa-bars\"></i>
                  <input type=\"hidden\" name=\"item[";
            // line 71
            yield $context["item_id"];
            yield "][meta][item_id]\" value=\"";
            yield $context["item_id"];
            yield "\">
                </td>

                <td>
                  <ul class=\"nav nav-tabs\">
                    ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 77
                yield "                      <li class=\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield "\">
                        <a href=\"#tab-";
                // line 78
                yield $context["item_id"];
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
                yield "\" data-toggle=\"tab\">
                          <img src=\"language/";
                // line 79
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 79);
                yield "/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 79);
                yield ".png\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 79);
                yield "\"> ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 79);
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
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "                  </ul>

                  <div class=\"tab-content\" style=\"margin-top:10px;\">
                    ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 87
                yield "                      <div class=\"tab-pane ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield "\" id=\"tab-";
                yield $context["item_id"];
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
                yield "\">

                        <div style=\"margin-bottom:8px;\">
                          <input type=\"text\"
                            name=\"item[";
                // line 91
                yield $context["item_id"];
                yield "][lang][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
                yield "][title]\"
                            value=\"";
                // line 92
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lang", [], "any", false, true, false, 92), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92), [], "array", false, true, false, 92), "title", [], "any", true, true, false, 92) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lang", [], "any", false, false, false, 92)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92)] ?? null) : null), "title", [], "any", false, false, false, 92)))) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lang", [], "any", false, false, false, 92)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92)] ?? null) : null), "title", [], "any", false, false, false, 92)) : (""));
                yield "\"
                            class=\"form-control\"
                            placeholder=\"Title\">
                        </div>

                        <textarea
                          class=\"form-control summernote\"
                          name=\"item[";
                // line 99
                yield $context["item_id"];
                yield "][lang][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
                yield "][content]\">";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lang", [], "any", false, true, false, 99), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99), [], "array", false, true, false, 99), "content", [], "any", true, true, false, 99) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lang", [], "any", false, false, false, 99)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99)] ?? null) : null), "content", [], "any", false, false, false, 99)))) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lang", [], "any", false, false, false, 99)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99)] ?? null) : null), "content", [], "any", false, false, false, 99)) : (""));
                yield "</textarea>

                      </div>
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
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "                  </div>
                </td>

                <td class=\"text-center\">
                  <div class=\"banner-images-wrap\">

                    <div class=\"banner-image-item\">
                      <div class=\"banner-image-label\">Desktop</div>

                      <a href=\"\"
                         id=\"thumb-image";
            // line 113
            yield $context["item_id"];
            yield "\"
                         data-toggle=\"image\"
                         data-target=\"input-image";
            // line 115
            yield $context["item_id"];
            yield "\"
                         data-thumb=\"thumb-image";
            // line 116
            yield $context["item_id"];
            yield "\"
                         class=\"img-thumbnail\">
                        <img src=\"";
            // line 118
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 118), "thumb", [], "any", false, false, false, 118)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 118), "thumb", [], "any", false, false, false, 118)) : (($context["placeholder"] ?? null)));
            yield "\" alt=\"\">
                      </a>

                      <input type=\"hidden\"
                        id=\"input-image";
            // line 122
            yield $context["item_id"];
            yield "\"
                        name=\"item[";
            // line 123
            yield $context["item_id"];
            yield "][meta][image]\"
                        value=\"";
            // line 124
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 124), "image", [], "any", false, false, false, 124);
            yield "\">
                    </div>

                    <div class=\"banner-image-item\">
                      <div class=\"banner-image-label\">Mobile</div>

                      <a href=\"\"
                         id=\"thumb-mob";
            // line 131
            yield $context["item_id"];
            yield "\"
                         data-toggle=\"image\"
                         data-target=\"input-mob";
            // line 133
            yield $context["item_id"];
            yield "\"
                         data-thumb=\"thumb-mob";
            // line 134
            yield $context["item_id"];
            yield "\"
                         class=\"img-thumbnail\">
                        <img src=\"";
            // line 136
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 136), "mob_thumb", [], "any", false, false, false, 136)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 136), "mob_thumb", [], "any", false, false, false, 136)) : (($context["placeholder"] ?? null)));
            yield "\" alt=\"\">
                      </a>

                      <input type=\"hidden\"
                        id=\"input-mob";
            // line 140
            yield $context["item_id"];
            yield "\"
                        name=\"item[";
            // line 141
            yield $context["item_id"];
            yield "][meta][mob_image]\"
                        value=\"";
            // line 142
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 142), "mob_image", [], "any", false, false, false, 142);
            yield "\">
                    </div>

                  </div>
                </td>

                <td>
                  <div style=\"margin-bottom:8px;\">
                    <label style=\"font-weight:600;margin-bottom:4px;display:block;\">Sort order</label>
                    <input type=\"text\" name=\"item[";
            // line 151
            yield $context["item_id"];
            yield "][meta][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 151), "sort_order", [], "any", false, false, false, 151);
            yield "\" class=\"form-control sort-order\">
                  </div>

                  <div style=\"margin-bottom:10px;\">
                    <label style=\"font-weight:600;margin-bottom:4px;display:block;\">Status</label>
                    <select name=\"item[";
            // line 156
            yield $context["item_id"];
            yield "][meta][status]\" class=\"form-control\">
                      <option value=\"1\" ";
            // line 157
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 157), "status", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
            yield ">Enabled</option>
                      <option value=\"0\" ";
            // line 158
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 158), "status", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
            yield ">Disabled</option>
                    </select>
                  </div>

                  <button type=\"button\" class=\"btn btn-danger btn-remove-item\" style=\"width:100%;\">
                    <i class=\"fa fa-minus-circle\"></i> ";
            // line 163
            yield ($context["button_remove"] ?? null);
            yield "
                  </button>
                </td>
              </tr>
              ";
            // line 167
            $context["idx"] = (($context["idx"] ?? null) + 1);
            // line 168
            yield "              ";
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
        unset($context['_seq'], $context['item_id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "            </tbody>
          </table>

        </form>
      </div>
    </div>
  </div>
</div>

<style>
.banner-images-wrap{display:flex;gap:10px;justify-content:center}
.banner-image-item{width:100px}
.banner-image-label{font-size:11px;color:#777;margin-bottom:4px}
.banner-image-item img{max-width:100%}
</style>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
<link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
<link href=\"view/javascript/jquery/jquery-ui/jquery-ui.min.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-ui/jquery-ui.min.js\"></script>

<script>
// Summernote init (existing)
\$('.summernote').summernote({height: 160});

// sortable (drag&drop)
\$('#repeater-body').sortable({
  handle: '.drag-handle',
  helper: function(e, ui) {
    ui.children().each(function () {
      \$(this).width(\$(this).width());
    });
    return ui;
  },

  update: function () {
    updateSortOrder();
  }
});
function updateSortOrder() {
  \$('#repeater-body .repeater-row').each(function(index){
    \$(this)
      .find('input.sort-order')
      .val(index);
  });
}


function nextItemId() {
  // find max existing item_id in DOM and +1
  let max = 0;
  \$('#repeater-body .repeater-row').each(function(){
    const id = parseInt(\$(this).attr('data-item-id'), 10) || 0;
    if (id > max) max = id;
  });
  return max + 1;
}

function buildRowHtml(itemId, languages, placeholder) {

  let tabs = '';
  let panes = '';

  for (let i=0; i<languages.length; i++) {
    const lang = languages[i];
    const active = i === 0 ? 'active' : '';
    tabs += `
      <li class=\"\${active}\">
        <a href=\"#tab-\${itemId}-\${lang.language_id}\" data-toggle=\"tab\">
          <img src=\"language/\${lang.code}/\${lang.code}.png\" title=\"\${lang.name}\"> \${lang.name}
        </a>
      </li>
    `;

    panes += `
      <div class=\"tab-pane \${active}\" id=\"tab-\${itemId}-\${lang.language_id}\">
        <div style=\"margin-bottom:8px;\">
          <input type=\"text\"
            name=\"item[\${itemId}][lang][\${lang.language_id}][title]\"
            value=\"\"
            class=\"form-control\"
            placeholder=\"Title\">
        </div>
        <textarea class=\"form-control summernote\"
          name=\"item[\${itemId}][lang][\${lang.language_id}][content]\"></textarea>
      </div>
    `;
  }

  return `
    <tr class=\"repeater-row\" data-item-id=\"\${itemId}\">
      <td class=\"text-center drag-handle\" style=\"cursor:move;\">
        <i class=\"fa fa-bars\"></i>
        <input type=\"hidden\" name=\"item[\${itemId}][meta][item_id]\" value=\"\${itemId}\">
      </td>

      <td>
        <ul class=\"nav nav-tabs\">\${tabs}</ul>
        <div class=\"tab-content\" style=\"margin-top:10px;\">\${panes}</div>
      </td>

      <td class=\"text-center\">
        <div class=\"banner-images-wrap\">

          <div class=\"banner-image-item\">
            <div class=\"banner-image-label\">Desktop</div>
            <a href=\"\"
              id=\"thumb-image\${itemId}\"
              data-toggle=\"image\"
              data-target=\"input-image\${itemId}\"
              data-thumb=\"thumb-image\${itemId}\"
              class=\"img-thumbnail\">
              <img src=\"\${placeholder}\" alt=\"\">
            </a>
            <input type=\"hidden\"
              id=\"input-image\${itemId}\"
              name=\"item[\${itemId}][meta][image]\"
              value=\"\">
          </div>

          <div class=\"banner-image-item\">
            <div class=\"banner-image-label\">Mobile</div>
            <a href=\"\"
              id=\"thumb-mob\${itemId}\"
              data-toggle=\"image\"
              data-target=\"input-mob\${itemId}\"
              data-thumb=\"thumb-mob\${itemId}\"
              class=\"img-thumbnail\">
              <img src=\"\${placeholder}\" alt=\"\">
            </a>
            <input type=\"hidden\"
              id=\"input-mob\${itemId}\"
              name=\"item[\${itemId}][meta][mob_image]\"
              value=\"\">
          </div>

        </div>
      </td>

      <td>
        <div style=\"margin-bottom:8px;\">
          <label style=\"font-weight:600;margin-bottom:4px;display:block;\">Sort order</label>
          <input type=\"text\" name=\"item[\${itemId}][meta][sort_order]\" value=\"0\" class=\"form-control sort-order\">
        </div>

        <div style=\"margin-bottom:10px;\">
          <label style=\"font-weight:600;margin-bottom:4px;display:block;\">Status</label>
          <select name=\"item[\${itemId}][meta][status]\" class=\"form-control\">
            <option value=\"1\" selected>Enabled</option>
            <option value=\"0\">Disabled</option>
          </select>
        </div>

        <button type=\"button\" class=\"btn btn-danger btn-remove-item\" style=\"width:100%;\">
          <i class=\"fa fa-minus-circle\"></i> ";
        // line 324
        yield ($context["button_remove"] ?? null);
        yield "
        </button>
      </td>
    </tr>
  `;
}

// languages data for JS
const languages = [
  ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 334
            yield "  { language_id: ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 334);
            yield ", code: \"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 334);
            yield "\", name: \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 334), "js");
            yield "\" }";
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 334)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (",") : (""));
            yield "
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
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        yield "];

\$('#btn-add-item').on('click', function(){
  const itemId = nextItemId();
  const html = buildRowHtml(itemId, languages, \"";
        // line 340
        yield ($context["placeholder"] ?? null);
        yield "\");
  \$('#repeater-body').append(html);

  // init summernote only for newly added in this row
  \$('#repeater-body tr[data-item-id=\"'+itemId+'\"] .summernote').summernote({height:160});

  // show first lang tab
  \$('#repeater-body tr[data-item-id=\"'+itemId+'\"] .nav-tabs a:first').tab('show');
});

\$(document).on('click', '.btn-remove-item', function(){
  \$(this).closest('tr').remove();
});

// show first language tab in each item row
\$('#repeater-body .repeater-row').each(function(){
  \$(this).find('.nav-tabs a:first').tab('show');
});
</script>

";
        // line 360
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
        return "extension/module/html_repeater.twig";
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
        return array (  694 => 360,  671 => 340,  665 => 336,  642 => 334,  625 => 333,  613 => 324,  456 => 169,  442 => 168,  440 => 167,  433 => 163,  425 => 158,  421 => 157,  417 => 156,  407 => 151,  395 => 142,  391 => 141,  387 => 140,  380 => 136,  375 => 134,  371 => 133,  366 => 131,  356 => 124,  352 => 123,  348 => 122,  341 => 118,  336 => 116,  332 => 115,  327 => 113,  315 => 103,  293 => 99,  283 => 92,  277 => 91,  265 => 87,  248 => 86,  243 => 83,  219 => 79,  213 => 78,  208 => 77,  191 => 76,  181 => 71,  174 => 68,  156 => 67,  154 => 66,  136 => 51,  124 => 42,  120 => 41,  114 => 38,  106 => 33,  101 => 31,  95 => 28,  88 => 24,  83 => 21,  77 => 19,  74 => 18,  68 => 16,  66 => 15,  58 => 10,  53 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/html_repeater.twig", "");
    }
}
