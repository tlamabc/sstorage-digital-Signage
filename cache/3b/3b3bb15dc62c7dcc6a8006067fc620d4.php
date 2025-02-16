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

/* twitter-form-settings.twig */
class __TwigTemplate_7756e3ab336d02d0c01883f90e8f5649 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "twitter-form-settings.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("connector-form-edit.twig", "twitter-form-settings.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_connectorFormFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    <h3>Twitter</h3>
    <p>Recent changes to Twitter mean that this API will only work for users with existing API keys and will
    cease to function completely in an unspecified time.</p>
    <p>We <strong>do not</strong> recommend this connector.</p>

    ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "isProviderSetting", ["apiKey"], "method", false, false, false, 33)) {
            // line 34
            yield "        <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Your platform provider has configured this connector for you."), "html", null, true);
            yield "</p>
    ";
        } else {
            // line 36
            yield "        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("API Key");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 37
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter your API Key from Twitter.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["apiKey", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["apiKey"], "method", false, false, false, 38), ($context["helpText"] ?? null)], 38, $context, $this->getSourceContext());
            yield "

        ";
            // line 40
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("API Secret");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 41
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter your API Secret from Twitter.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["apiSecret", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["apiSecret"], "method", false, false, false, 42), ($context["helpText"] ?? null)], 42, $context, $this->getSourceContext());
            yield "

        ";
            // line 44
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Needs user authorisation?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should these API keys be used to obtain user authorisation? If unchecked the key owners account will be used.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["delegated", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["delegated"], "method", false, false, false, 46), ($context["helpText"] ?? null)], 46, $context, $this->getSourceContext());
            yield "

        ";
            // line 48
            yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("If you change the user authentication option please save and reopen this to complete authorisation.")], 48, $context, $this->getSourceContext());
            yield "

        ";
            // line 50
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Cache Period");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter the number of seconds you would like to cache twitter search results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["cachePeriod", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["cachePeriod", 3600], "method", false, false, false, 52), ($context["helpText"] ?? null)], 52, $context, $this->getSourceContext());
            yield "

        ";
            // line 54
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Cache Period for Images");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 55
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter the number of hours you would like to cache twitter images.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["cachePeriodImages", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["cachePeriodImages", 24], "method", false, false, false, 56), ($context["helpText"] ?? null)], 56, $context, $this->getSourceContext());
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
        return "twitter-form-settings.twig";
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
        return array (  154 => 56,  148 => 55,  143 => 54,  137 => 52,  131 => 51,  126 => 50,  121 => 48,  115 => 46,  109 => 45,  104 => 44,  98 => 42,  92 => 41,  87 => 40,  81 => 38,  75 => 37,  69 => 36,  63 => 34,  61 => 33,  54 => 28,  50 => 27,  45 => 24,  43 => 25,  36 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "twitter-form-settings.twig", "/var/www/cms/views/twitter-form-settings.twig");
    }
}
