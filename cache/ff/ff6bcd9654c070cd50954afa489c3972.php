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

/* fonts-fontlib-details.twig */
class __TwigTemplate_3fc89a33815b097ef6d87f3abf0f7aba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("form-base.twig", "fonts-fontlib-details.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Details"), "html", null, true);
        yield " ";
        return; yield '';
    }

    // line 3
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <div class=\"card\">
        <div class=\"card-header\">
             ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font details provided by fontLib"), "html", null, true);
        yield "
        </div>
        <div class=\"card-body\">
            <ul>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["details"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 11
            yield "                <li><b>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "</b> : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "            </ul>
            <div id=\"exampleText\">
                <span class=\"example-text\">
                    This is an example text using the selected font style.
                </span>
            </div>
        </div>
    </div>
    <style>
        @font-face {
            font-family: ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["details"] ?? null), "Name", [], "any", false, false, false, 23), "html", null, true);
        yield ";
            src: url(";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("font.download", ["id" => ($context["fontId"] ?? null)]), "html", null, true);
        yield ");
        }

        .example-text {
            font-family: ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["details"] ?? null), "Name", [], "any", false, false, false, 28), "html", null, true);
        yield ", serif;
            font-size: 48px;
        }
    </style>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "fonts-fontlib-details.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  110 => 28,  103 => 24,  99 => 23,  87 => 13,  76 => 11,  72 => 10,  65 => 6,  61 => 4,  57 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fonts-fontlib-details.twig", "/var/www/cms/views/fonts-fontlib-details.twig");
    }
}
