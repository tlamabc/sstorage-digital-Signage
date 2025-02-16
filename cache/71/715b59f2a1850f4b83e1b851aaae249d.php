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

/* openweathermap-form-settings.twig */
class __TwigTemplate_75a84870cbe9349bc0f7f9d851318432 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "openweathermap-form-settings.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("connector-form-edit.twig", "openweathermap-form-settings.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_connectorFormFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    <h3>Open Weather Map</h3>
    <p>Weather forecasts, nowcasts and history in a fast and elegant way</p>
    <p>Weather data provided by <a href=\"https://openweathermap.org/\" target=\"_blank\">OpenWeather</a> is provided under
        <a href=\"http://creativecommons.org/licenses/by-sa/4.0/\" target=\"_blank\">CC-BY-SA 4.0</a>
        and <a href=\"http://opendatacommons.org/licenses/odbl/\" target=\"_blank\">ODbl</a>.</p>

    ";
        // line 34
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "isProviderSetting", ["owmApiKey"], "method", false, false, false, 34)) {
            // line 35
            yield "        <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Your platform provider has configured this connector for you."), "html", null, true);
            yield "</p>
    ";
        } else {
            // line 37
            yield "        ";
            $context["title"] = ('' === $tmp = "            OpenWeather Map has added a new 'One Call API 3.0' option to their suite of products. New users must enter
            credit card details to use a free number of API calls (which resets each day) or opt for a paid subscription.
            Older API keys are not compatible with the new API.
        ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_alert", [($context["title"] ?? null), "info"], 42, $context, $this->getSourceContext());
            yield "

        ";
            // line 44
            $context["title"] = ('' === $tmp = "            OpenWeather retired One Call API version 2.5 in June 2024. For continued weather data access, please migrate
            or subscribe to One Call API version 3.0, which is now the only supported version for free tier users.
        ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 48
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_alert", [($context["title"] ?? null), "info"], 48, $context, $this->getSourceContext());
            yield "
        
        ";
            // line 50
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Open Weather Map API Key");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter your API Key from Open Weather Map.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["owmApiKey", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["owmApiKey"], "method", false, false, false, 52), ($context["helpText"] ?? null)], 52, $context, $this->getSourceContext());
            yield "

        ";
            // line 54
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Paid plan?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 55
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Is the above key on an Open Weather Map paid plan? Do NOT tick this if you have subscribed to One Call API 3.0.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["owmIsPaidPlan", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["owmIsPaidPlan"], "method", false, false, false, 56), ($context["helpText"] ?? null)], 56, $context, $this->getSourceContext());
            yield "

        ";
            // line 58
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Cache Period");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This module uses 3rd party data. Please enter the number of seconds you would like to cache results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["cachePeriod", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["cachePeriod", 3600], "method", false, false, false, 60), ($context["helpText"] ?? null)], 60, $context, $this->getSourceContext());
            yield "

        ";
            // line 62
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Schedule Criteria Cache Period");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("If a player has weather based schedule criteria, how many hours should this connector cache that weather data for?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 64
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["xmdsCachePeriod", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["xmdsCachePeriod", 4], "method", false, false, false, 64), ($context["helpText"] ?? null)], 64, $context, $this->getSourceContext());
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
        return "openweathermap-form-settings.twig";
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
        return array (  154 => 64,  148 => 63,  143 => 62,  137 => 60,  131 => 59,  126 => 58,  120 => 56,  114 => 55,  109 => 54,  103 => 52,  97 => 51,  92 => 50,  86 => 48,  82 => 44,  76 => 42,  70 => 37,  64 => 35,  62 => 34,  54 => 28,  50 => 27,  45 => 24,  43 => 25,  36 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "openweathermap-form-settings.twig", "/var/www/cms/views/openweathermap-form-settings.twig");
    }
}
