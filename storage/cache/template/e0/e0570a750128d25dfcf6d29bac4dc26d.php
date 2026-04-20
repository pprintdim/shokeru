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

/* extension/module/special_banner.twig */
class __TwigTemplate_43df2eaaee06ac1a7fa38cba3694955b extends Template
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
            yield "      <div class=\"alert alert-danger\">
        ";
            // line 27
            yield ($context["error_warning"] ?? null);
            yield "
      </div>
    ";
        }
        // line 30
        yield "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 33
        yield ($context["text_edit"] ?? null);
        yield "</h3>
      </div>

      <div class=\"panel-body\">
        <form action=\"";
        // line 37
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">

          ";
        // line 40
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            yield "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">
                ";
            // line 43
            yield ($context["entry_name"] ?? null);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 43);
            yield ")
              </label>

              <div class=\"col-sm-10\">
                <input type=\"text\"
                       name=\"name[";
            // line 48
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            yield "]\"
                       value=\"";
            // line 49
            yield (($_v0 = ($context["name"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49)] ?? null) : null);
            yield "\"
                       class=\"form-control\" />

                ";
            // line 52
            if ((($tmp = (($_v1 = ($context["error_name"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "                  <div class=\"text-danger\">
                    ";
                // line 54
                yield (($_v2 = ($context["error_name"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null);
                yield "
                  </div>
                ";
            }
            // line 57
            yield "              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "
          <hr>

          ";
        // line 64
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 65
            yield "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">
                ";
            // line 67
            yield ($context["entry_title"] ?? null);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 67);
            yield ")
              </label>

              <div class=\"col-sm-10\">
                <input type=\"text\"
                       name=\"title[";
            // line 72
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            yield "]\"
                       value=\"";
            // line 73
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73), [], "array", true, true, false, 73) &&  !(null === (($_v3 = ($context["title"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73)] ?? null) : null)))) ? ((($_v4 = ($context["title"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73)] ?? null) : null)) : (""));
            yield "\"
                       class=\"form-control\" />
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "
          <hr>

          ";
        // line 82
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 83
            yield "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">
                ";
            // line 85
            yield ($context["entry_description"] ?? null);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 85);
            yield ")
              </label>

              <div class=\"col-sm-10\">
                <textarea name=\"description[";
            // line 89
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
            yield "\"
                          rows=\"3\"
                          class=\"form-control\">";
            // line 91
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91), [], "array", true, true, false, 91) &&  !(null === (($_v5 = ($context["description"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91)] ?? null) : null)))) ? ((($_v6 = ($context["description"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91)] ?? null) : null)) : (""));
            yield "</textarea>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "
          <hr>

          ";
        // line 99
        yield "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 100
        yield ($context["entry_image"] ?? null);
        yield "</label>

            <div class=\"col-sm-10\">
              <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\">
                <img src=\"";
        // line 104
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" />
              </a>
              <input type=\"hidden\" name=\"image\" value=\"";
        // line 106
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\" />
            </div>
          </div>

          <hr>

          ";
        // line 113
        yield "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 114
        yield ($context["entry_status"] ?? null);
        yield "</label>

            <div class=\"col-sm-10\">
              <select name=\"status\" class=\"form-control\">
                <option value=\"1\" ";
        // line 118
        yield (((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                <option value=\"0\" ";
        // line 119
        yield (((($tmp =  !($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
              </select>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 129
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
        return "extension/module/special_banner.twig";
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
        return array (  305 => 129,  290 => 119,  284 => 118,  277 => 114,  274 => 113,  265 => 106,  258 => 104,  251 => 100,  248 => 99,  243 => 95,  233 => 91,  228 => 89,  219 => 85,  215 => 83,  210 => 82,  205 => 78,  194 => 73,  190 => 72,  180 => 67,  176 => 65,  171 => 64,  166 => 60,  158 => 57,  152 => 54,  149 => 53,  147 => 52,  141 => 49,  137 => 48,  127 => 43,  123 => 41,  118 => 40,  113 => 37,  106 => 33,  101 => 30,  95 => 27,  92 => 26,  90 => 25,  83 => 20,  72 => 18,  68 => 17,  62 => 14,  54 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/special_banner.twig", "");
    }
}
