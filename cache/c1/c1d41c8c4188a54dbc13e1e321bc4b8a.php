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

/* pixabay-form-settings.twig */
class __TwigTemplate_50cd5ed624822d4b7c38602b9e7146b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'connectorFormFields' => [$this, 'block_connectorFormFields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "connector-form-edit.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "pixabay-form-settings.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("connector-form-edit.twig", "pixabay-form-settings.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_connectorFormFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    <h3>Pixabay <small> - Stunning free images & royalty free stock</small></h3>
    <p>Images and Videos are available under the <a href=\"https://pixabay.com/service/license/\" target=\"_blank\">Pixabay license</a>.</p>

    ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "isProviderSetting", ["apiKey"], "method", false, false, false, 31)) {
            // line 32
            yield "        <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Your platform provider has configured this connector for you."), "html", null, true);
            yield "</p>
    ";
        } else {
            // line 34
            yield "        <p>An API key is needed to enable this connector. Sign up for a Pixabay account and then use the API key shown
        on the <a href=\"https://pixabay.com/api/docs/\" target=\"_blank\">documentation</a> page.</p>

        ";
            // line 37
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("API Key");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter your API Key from Pixabay.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["apiKey", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["apiKey"], "method", false, false, false, 39), ($context["helpText"] ?? null)], 39, $context, $this->getSourceContext());
            yield "
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pixabay-form-settings.twig";
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
        return array (  83 => 39,  77 => 38,  72 => 37,  67 => 34,  61 => 32,  59 => 31,  54 => 28,  50 => 27,  45 => 24,  43 => 25,  36 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "pixabay-form-settings.twig", "/var/www/cms/views/pixabay-form-settings.twig");
    }
}
