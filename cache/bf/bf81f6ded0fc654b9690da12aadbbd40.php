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

/* alphavantage-form-settings.twig */
class __TwigTemplate_809fbf5413d32e5c7597a4413fa68ecb extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "alphavantage-form-settings.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("connector-form-edit.twig", "alphavantage-form-settings.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_connectorFormFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    <h3>Alpha Vantage</h3>
    <p>Alpha Vantage provides enterprise-grade financial market data through a set of powerful and developer-friendly data APIs and spreadsheets.</p>

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
            yield "        <p>An API key is needed to enable this connector. Register <a href=\"https://www.alphavantage.co/support/#api-key\">here</a> for free to get yours.</p>

        ";
            // line 36
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("API Key");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 37
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter your API Key from Alpha Advantage");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["apiKey", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["apiKey"], "method", false, false, false, 38), ($context["helpText"] ?? null)], 38, $context, $this->getSourceContext());
            yield "

        ";
            // line 40
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Paid plan?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 41
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Is the above key on a paid plan? You may want to use a paid plan for real time FX rates.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isPaidPlan", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["isPaidPlan"], "method", false, false, false, 42), ($context["helpText"] ?? null)], 42, $context, $this->getSourceContext());
            yield "

        ";
            // line 44
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Cache Period");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This module uses 3rd party data. Please enter the number of seconds you would like to cache results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["cachePeriod", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["cachePeriod", 3600], "method", false, false, false, 46), ($context["helpText"] ?? null)], 46, $context, $this->getSourceContext());
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
        return "alphavantage-form-settings.twig";
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
        return array (  116 => 46,  110 => 45,  105 => 44,  99 => 42,  93 => 41,  88 => 40,  82 => 38,  76 => 37,  71 => 36,  67 => 34,  61 => 32,  59 => 31,  54 => 28,  50 => 27,  45 => 24,  43 => 25,  36 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "alphavantage-form-settings.twig", "/var/www/cms/views/alphavantage-form-settings.twig");
    }
}
