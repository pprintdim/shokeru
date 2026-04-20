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

/* shokeru/template/extension/module/feedback.twig */
class __TwigTemplate_83d683bcb2a1639c432c0fb93ad7ecfe extends Template
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
        yield "<section class=\"feedback\">
    <div class=\"container\">
        <div class=\"feedback__inner\">
            ";
        // line 4
        if ((($tmp = ($context["heading_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "                <h2 class=\"feedback__title title\">";
            yield ($context["heading_title"] ?? null);
            yield "</h2>
            ";
        }
        // line 7
        yield "            <div class=\"feedback__result\"></div>
            <form class=\"feedback__form\" action=\"";
        // line 8
        yield ($context["action"] ?? null);
        yield "\">
                <input class=\"feedback__form-input\" type=\"text\" name=\"name\" placeholder=\"";
        // line 9
        yield ($context["entry_name"] ?? null);
        yield "\" required>
                <input class=\"feedback__form-input\" type=\"email\" name=\"email\" placeholder=\"";
        // line 10
        yield ($context["entry_email"] ?? null);
        yield "\">
                <input class=\"feedback__form-input\" type=\"tel\" name=\"telephone\" placeholder=\"";
        // line 11
        yield ($context["entry_telephone"] ?? null);
        yield "\" required>
                <textarea class=\"feedback__form-input\" name=\"message\" placeholder=\"";
        // line 12
        yield ($context["entry_message"] ?? null);
        yield "\" required></textarea>
                <button class=\"feedback__form-btn btn\" type=\"submit\">";
        // line 13
        yield ($context["button_submit"] ?? null);
        yield "</button>
            </form>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.feedback__form');
    const resultBlock = document.querySelector('.feedback__result');

    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        resultBlock.textContent = '';

        const formData = new FormData(form);

        fetch(form.getAttribute('action'), {
            method: 'POST',
            body: new URLSearchParams(formData)
        })
        .then(r => r.json())
        .then(data => {
            if (data.success) {
                resultBlock.style.color = 'green';
                resultBlock.textContent = data.success;
                form.reset();
            } else {
                resultBlock.style.color = 'red';
                if (data.error) {
                    // якщо помилки для конкретних полів
                    if (typeof data.error === 'object') {
                        resultBlock.innerHTML = Object.values(data.error).join('<br>');
                    } else {
                        resultBlock.textContent = data.error;
                    }
                } else {
                    resultBlock.textContent = 'Помилка відправки';
                }
            }
        })
        .catch(() => {
            resultBlock.style.color = 'red';
            resultBlock.textContent = 'Помилка сервера';
        });
    });
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shokeru/template/extension/module/feedback.twig";
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
        return array (  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  55 => 7,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shokeru/template/extension/module/feedback.twig", "");
    }
}
