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

/* national-weather-service-form-settings.twig */
class __TwigTemplate_400e1a11794d01aebe2ea5f7a6781197 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "national-weather-service-form-settings.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("connector-form-edit.twig", "national-weather-service-form-settings.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_connectorFormFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    <h3>National Weather Service</h3>
    <p>Access real-time weather alerts provided by the National Weather Service (NWS).</p>
    <p>The data includes weather warnings, watches, and advisories delivered in Atom feed format.</p>
    <p>Weather alert data is sourced directly from the <a href=\"https://www.weather.gov/\" target=\"_blank\">National Weather Service</a>.</p>

    ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "isProviderSetting", ["atomFeedUri"], "method", false, false, false, 33)) {
            // line 34
            yield "        <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Your platform provider has configured this connector for you."), "html", null, true);
            yield "</p>
    ";
        } else {
            // line 36
            yield "        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("NWS Atom Feed URL");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 37
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This is the default URL for the NWS Atom Feed. You can update
        it if the URL changes in the future.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["atomFeedUri", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["atomFeedUri", "https://api.weather.gov/alerts/active.atom"], "method", false, false, false, 39),             // line 40
($context["helpText"] ?? null)], 39, $context, $this->getSourceContext());
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
        return "national-weather-service-form-settings.twig";
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
        return array (  84 => 40,  82 => 39,  75 => 37,  69 => 36,  63 => 34,  61 => 33,  54 => 28,  50 => 27,  45 => 24,  43 => 25,  36 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "national-weather-service-form-settings.twig", "/var/www/cms/views/national-weather-service-form-settings.twig");
    }
}
