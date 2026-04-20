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

/* extension/module/benefits.twig */
class __TwigTemplate_26c28bd2765878995fe312c37411d93e extends Template
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
        <button type=\"submit\" form=\"form-module\" class=\"btn btn-primary\">
          <i class=\"fa fa-save\"></i>
        </button>
        <a href=\"";
        // line 9
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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            yield "          <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 25
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "      <div class=\"alert alert-danger\">";
            yield ($context["error_warning"] ?? null);
            yield "</div>
    ";
        }
        // line 28
        yield "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 31
        yield ($context["text_edit"] ?? null);
        yield "</h3>
      </div>

      <div class=\"panel-body\">
        <form action=\"";
        // line 35
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" id=\"form-module\" class=\"form-horizontal\">

          <!-- NAME -->
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 39
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 41
        yield ($context["name"] ?? null);
        yield "\" class=\"form-control\"/>
            </div>
          </div>

          <!-- BENEFITS -->
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 47
        yield ($context["text_benefits"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">

              <table id=\"benefits\" class=\"table table-bordered table-striped\">
                <thead>
                  <tr>
                    <td>";
        // line 53
        yield ($context["entry_title"] ?? null);
        yield "</td>
                    <td>";
        // line 54
        yield ($context["entry_description"] ?? null);
        yield "</td>
                    <td style=\"width: 80px;\"></td>
                  </tr>
                </thead>

                <tbody>
                  ";
        // line 60
        $context["benefit_row"] = 0;
        // line 61
        yield "
                  ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["benefits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["benefit"]) {
            // line 63
            yield "                  <tr id=\"benefit-row";
            yield ($context["benefit_row"] ?? null);
            yield "\">

                    <!-- TITLE -->
                    <td>
                      ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 68
                yield "                      <div class=\"input-group\" style=\"margin-bottom:5px;\">
                        <span class=\"input-group-addon\">
                          <img src=\"language/";
                // line 70
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 70);
                yield "/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 70);
                yield ".png\"/>
                        </span>

                        <input type=\"text\"
                               name=\"benefits[";
                // line 74
                yield ($context["benefit_row"] ?? null);
                yield "][title][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
                yield "]\"
                               value=\"";
                // line 75
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["benefit"], "title", [], "any", false, true, false, 75), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75), [], "array", true, true, false, 75) &&  !(null === (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["benefit"], "title", [], "any", false, false, false, 75)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null)))) ? ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["benefit"], "title", [], "any", false, false, false, 75)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null)) : (""));
                yield "\"
                               placeholder=\"";
                // line 76
                yield ($context["entry_title"] ?? null);
                yield "\"
                               class=\"form-control\"/>
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "                    </td>

                    <!-- DESCRIPTION -->
                    <td>
                      ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 85
                yield "                      <div class=\"input-group\" style=\"margin-bottom:5px;\">
                        <span class=\"input-group-addon\">
                          <img src=\"language/";
                // line 87
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 87);
                yield "/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 87);
                yield ".png\"/>
                        </span>

                        <textarea
                               name=\"benefits[";
                // line 91
                yield ($context["benefit_row"] ?? null);
                yield "][description][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
                yield "]\"
                               placeholder=\"";
                // line 92
                yield ($context["entry_description"] ?? null);
                yield "\"
                               class=\"form-control\">";
                // line 93
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["benefit"], "description", [], "any", false, true, false, 93), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93), [], "array", true, true, false, 93) &&  !(null === (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["benefit"], "description", [], "any", false, false, false, 93)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null)))) ? ((($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["benefit"], "description", [], "any", false, false, false, 93)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null)) : (""));
                yield "</textarea>
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            yield "                    </td>

                    <!-- REMOVE -->
                    <td>
                      <button type=\"button\" onclick=\"\$('#benefit-row";
            // line 100
            yield ($context["benefit_row"] ?? null);
            yield "').remove();\" class=\"btn btn-danger\">
                        <i class=\"fa fa-minus-circle\"></i>
                      </button>
                    </td>

                  </tr>
                  ";
            // line 106
            $context["benefit_row"] = (($context["benefit_row"] ?? null) + 1);
            // line 107
            yield "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['benefit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "                </tbody>

                <tfoot>
                  <tr>
                    <td colspan=\"2\"></td>
                    <td>
                      <button type=\"button\" onclick=\"addBenefit();\" class=\"btn btn-primary\">
                        <i class=\"fa fa-plus-circle\"></i> ";
        // line 115
        yield ($context["button_add"] ?? null);
        yield "
                      </button>
                    </td>
                  </tr>
                </tfoot>
              </table>

            </div>
          </div>

          <!-- STATUS -->
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 127
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" class=\"form-control\">
                <option value=\"1\" ";
        // line 130
        yield (((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">Enabled</option>
                <option value=\"0\" ";
        // line 131
        yield (((($tmp =  !($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">Disabled</option>
              </select>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<script>
let benefit_row = ";
        // line 143
        yield (((array_key_exists("benefit_row", $context) &&  !(null === $context["benefit_row"]))) ? ($context["benefit_row"]) : (0));
        yield ";
let entry_title = '";
        // line 144
        yield ($context["entry_title"] ?? null);
        yield "';
let entry_description = '";
        // line 145
        yield ($context["entry_description"] ?? null);
        yield "';

function addBenefit() {
    let html = '';

    html += '<tr id=\"benefit-row' + benefit_row + '\">';

    // TITLE
    html += '<td>';
    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 155
            yield "    html += '<div class=\"input-group\" style=\"margin-bottom:5px;\">';
    html += '<span class=\"input-group-addon\"><img src=\"language/";
            // line 156
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 156);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 156);
            yield ".png\"/></span>';
    html += '<input type=\"text\" name=\"benefits[' + benefit_row + '][title][";
            // line 157
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 157);
            yield "]\" class=\"form-control\" placeholder=\"'+entry_title+'\"/>';
    html += '</div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        yield "    html += '</td>';

    // DESCRIPTION
    html += '<td>';
    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 165
            yield "    html += '<div class=\"input-group\" style=\"margin-bottom:5px;\">';
    html += '<span class=\"input-group-addon\"><img src=\"language/";
            // line 166
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 166);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 166);
            yield ".png\"/></span>';
    html += '<textarea name=\"benefits[' + benefit_row + '][description][";
            // line 167
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 167);
            yield "]\" class=\"form-control\" placeholder=\"'+entry_description+'\"></textarea>';
    html += '</div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield "    html += '</td>';

    // REMOVE
    html += '<td><button type=\"button\" onclick=\"\$(\\'#benefit-row' + benefit_row + '\\').remove();\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';

    html += '</tr>';

    \$('#benefits tbody').append(html);
    benefit_row++;
}
</script>

";
        // line 182
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/module/benefits.twig";
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
        return array (  405 => 182,  391 => 170,  382 => 167,  376 => 166,  373 => 165,  369 => 164,  363 => 160,  354 => 157,  348 => 156,  345 => 155,  341 => 154,  329 => 145,  325 => 144,  321 => 143,  306 => 131,  302 => 130,  296 => 127,  281 => 115,  272 => 108,  266 => 107,  264 => 106,  255 => 100,  249 => 96,  240 => 93,  236 => 92,  230 => 91,  221 => 87,  217 => 85,  213 => 84,  207 => 80,  197 => 76,  193 => 75,  187 => 74,  178 => 70,  174 => 68,  170 => 67,  162 => 63,  158 => 62,  155 => 61,  153 => 60,  144 => 54,  140 => 53,  131 => 47,  122 => 41,  117 => 39,  110 => 35,  103 => 31,  98 => 28,  92 => 26,  90 => 25,  83 => 20,  72 => 18,  68 => 17,  62 => 14,  54 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/benefits.twig", "");
    }
}
