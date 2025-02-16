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

/* xibo-audience-connector-form-settings.twig */
class __TwigTemplate_fc5ed7c91f80f883cb1a745c12c0da91 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'callBack' => [$this, 'block_callBack'],
            'connectorFormFields' => [$this, 'block_connectorFormFields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "connector-form-edit.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "xibo-audience-connector-form-settings.twig", 24)->unwrap();
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "xibo-audience-connector-form-settings.twig", 25)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("connector-form-edit.twig", "xibo-audience-connector-form-settings.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "audienceFormOpen";
        return; yield '';
    }

    // line 28
    public function block_connectorFormFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "
    ";
        // line 30
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "isProviderSetting", ["apiKey"], "method", false, false, false, 30)) {
            // line 31
            yield "        <h4>";
            echo __("Settings");
            yield "</h4>
        <p>";
            // line 32
            echo __("Your API key allows for secure communication between the CMS and the Xibo audience service. It is used to analyse your proof of play data for Ad Campaigns and retrieve reports. It is never possible to retrieve credentials.");
            yield "</p>

        ";
            // line 34
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("API Key");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 35
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter your API Key from Xibo.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 36
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["apiKey", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["apiKey"], "method", false, false, false, 36), ($context["helpText"] ?? null)], 36, $context, $this->getSourceContext());
            yield "
    ";
        }
        // line 38
        yield "
    <p>";
        // line 39
        echo __("Once enabled additional reporting will be shown for your Ad Campaigns in the 'All Reports' section. To vary your cost/impressions per play by date, time of day, day of week or geo location, add a DMA (designated market area) below.");
        yield "</p>

    ";
        // line 41
        $context["options"] = CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getOptionsFromAxe", [], "method", false, false, false, 41);
        // line 42
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "error", [], "any", false, false, false, 42)) {
            // line 43
            yield "        <p class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "message", [], "any", false, false, false, 43), "html", null, true);
            yield "</p>
    ";
        } else {
            // line 45
            yield "        ";
            $context["numberOfAuthedDisplays"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "displays", [], "any", false, false, false, 45);
            // line 46
            yield "        <p class=\"alert alert-info\">";
            /* xgettext:no-php-format */            echo strtr(__("Your API key is authorised for %numberOfAuthedDisplays% displays."), array("%numberOfAuthedDisplays%" => ($context["numberOfAuthedDisplays"] ?? null), ));
            yield "</p>
    ";
        }
        // line 48
        yield "
    ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["apiKey"], "method", false, false, false, 49)) {
            // line 50
            yield "        <div class=\"form-group row\">
            <div class=\"XiboGrid container\" id=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
            yield "\" data-grid-name=\"connector-audience-dma\">
                <div class=\"XiboData card pt-3\">
                    <table id=\"audience-dma\" class=\"table table-striped\" style=\"width:100%\"
                           data-connector-id=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["connector"] ?? null), "connectorId", [], "any", false, false, false, 54), "html", null, true);
            yield "\"
                           data-proxy-url=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("connector.edit.form.proxy", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["connector"] ?? null), "connectorId", [], "any", false, false, false, 55), "method" => ":method"]), "html", null, true);
            yield "\"
                           data-impression-sources=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "impressionSource", [], "any", false, false, false, 56)), "html", null, true);
            yield "\"
                           data-state-preference-name=\"connector-audience-dma\">
                        <thead>
                        <tr>
                            <th>";
            // line 60
            echo __("Name");
            yield "</th>
                            <th>";
            // line 61
            echo __("Cost per Play");
            yield "</th>
                            <th>";
            // line 62
            echo __("Impressions per Play");
            yield "</th>
                            <th>";
            // line 63
            echo __("Impression Source");
            yield "</th>
                            <th>";
            // line 64
            echo __("Start Date");
            yield "</th>
                            <th>";
            // line 65
            echo __("End Date");
            yield "</th>
                            <th>";
            // line 66
            echo __("Days of week");
            yield "</th>
                            <th>";
            // line 67
            echo __("Start Time");
            yield "</th>
                            <th>";
            // line 68
            echo __("End Time");
            yield "</th>
                            <th>";
            // line 69
            echo __("Is Geo?");
            yield "</th>
                            <th>";
            // line 70
            echo __("Priority");
            yield "</th>
                            <th>";
            // line 71
            echo __("Displays");
            yield "</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
        }
        // line 83
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "xibo-audience-connector-form-settings.twig";
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
        return array (  213 => 83,  198 => 71,  194 => 70,  190 => 69,  186 => 68,  182 => 67,  178 => 66,  174 => 65,  170 => 64,  166 => 63,  162 => 62,  158 => 61,  154 => 60,  147 => 56,  143 => 55,  139 => 54,  133 => 51,  130 => 50,  128 => 49,  125 => 48,  119 => 46,  116 => 45,  110 => 43,  107 => 42,  105 => 41,  100 => 39,  97 => 38,  91 => 36,  85 => 35,  80 => 34,  75 => 32,  70 => 31,  68 => 30,  65 => 29,  61 => 28,  53 => 27,  48 => 23,  46 => 25,  44 => 24,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "xibo-audience-connector-form-settings.twig", "/var/www/cms/views/xibo-audience-connector-form-settings.twig");
    }
}
