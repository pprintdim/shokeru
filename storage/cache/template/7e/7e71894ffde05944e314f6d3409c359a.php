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
class __TwigTemplate_c38f01b5fe5f3a621fe11191c5d03474 extends Template
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
        yield "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 41
        yield ($context["entry_name"] ?? null);
        yield "</label>

            <div class=\"col-sm-10\">
              <input type=\"text\"
                     name=\"name\"
                     value=\"";
        // line 46
        yield ($context["name"] ?? null);
        yield "\"
                     class=\"form-control\" />

              ";
        // line 49
        if ((($tmp = ($context["error_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                <div class=\"text-danger\">
                  ";
            // line 51
            yield ($context["error_name"] ?? null);
            yield "
                </div>
              ";
        }
        // line 54
        yield "            </div>
          </div>


          <hr>

          ";
        // line 61
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 62
            yield "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">
                ";
            // line 64
            yield ($context["entry_title"] ?? null);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 64);
            yield ")
              </label>

              <div class=\"col-sm-10\">
                <input type=\"text\"
                       name=\"title[";
            // line 69
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            yield "]\"
                       value=\"";
            // line 70
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70), [], "array", true, true, false, 70) &&  !(null === (($_v0 = ($context["title"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70)] ?? null) : null)))) ? ((($_v1 = ($context["title"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70)] ?? null) : null)) : (""));
            yield "\"
                       class=\"form-control\" />
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "
          <hr>

          ";
        // line 79
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 80
            yield "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">
                ";
            // line 82
            yield ($context["entry_description"] ?? null);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 82);
            yield ")
              </label>

              <div class=\"col-sm-10\">
                <textarea name=\"description[";
            // line 86
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
            yield "\"
                          rows=\"3\"
                          class=\"form-control\">";
            // line 88
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88), [], "array", true, true, false, 88) &&  !(null === (($_v2 = ($context["description"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88)] ?? null) : null)))) ? ((($_v3 = ($context["description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88)] ?? null) : null)) : (""));
            yield "</textarea>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "
          <hr>

          ";
        // line 96
        yield "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 97
        yield ($context["entry_image"] ?? null);
        yield "</label>

            <div class=\"col-sm-10\">
              <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\">
                <img src=\"";
        // line 101
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" />
              </a>
              <input type=\"hidden\" name=\"image\" value=\"";
        // line 103
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\" />
            </div>
          </div>

          <hr>

          ";
        // line 110
        yield "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 111
        yield ($context["entry_status"] ?? null);
        yield "</label>

            <div class=\"col-sm-10\">
              <select name=\"status\" class=\"form-control\">
                <option value=\"1\" ";
        // line 115
        yield (((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                <option value=\"0\" ";
        // line 116
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
        // line 126
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
        return array (  288 => 126,  273 => 116,  267 => 115,  260 => 111,  257 => 110,  248 => 103,  241 => 101,  234 => 97,  231 => 96,  226 => 92,  216 => 88,  211 => 86,  202 => 82,  198 => 80,  193 => 79,  188 => 75,  177 => 70,  173 => 69,  163 => 64,  159 => 62,  154 => 61,  146 => 54,  140 => 51,  137 => 50,  135 => 49,  129 => 46,  121 => 41,  118 => 40,  113 => 37,  106 => 33,  101 => 30,  95 => 27,  92 => 26,  90 => 25,  83 => 20,  72 => 18,  68 => 17,  62 => 14,  54 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/special_banner.twig", "");
    }
}
