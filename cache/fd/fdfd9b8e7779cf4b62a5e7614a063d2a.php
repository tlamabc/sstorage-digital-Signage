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

/* displayprofile-form-edit-chromeos.twig */
class __TwigTemplate_c711631b17c80bcc8010b78fb02df597 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit-chromeos.twig", 23)->unwrap();
        // line 24
        yield "
";
        // line 25
        yield from $this->unwrap()->yieldBlock('formHtml', $context, $blocks);
        return; yield '';
    }

    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "<div class=\"row\">
    <div class=\"col-md-12\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\">";
        // line 29
        echo __("General");
        yield "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced\" role=\"tab\" data-toggle=\"tab\">";
        // line 30
        echo __("Advanced");
        yield "</a></li>
            ";
        // line 31
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["commands"] ?? null)) > 0)) {
            // line 32
            yield "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#commands\" role=\"tab\" data-toggle=\"tab\">";
            echo __("Commands");
            yield "</a></li>
            ";
        }
        // line 34
        yield "        </ul>
        <form id=\"displayProfileForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayProfile.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "displayProfileId", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\">
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"general\">
                    ";
        // line 38
        yield from         $this->loadTemplate("displayprofile-form-edit-common-fields.twig", "displayprofile-form-edit-chromeos.twig", 38)->unwrap()->yield($context);
        // line 39
        yield "
                    ";
        // line 40
        $context["title"] = __("Licence Code");
        // line 41
        yield "                    ";
        $context["helpText"] = __("Provide the Licence Code to license Players using this Display Profile.");
        // line 42
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_email", ["licenceCode", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["licenceCode"], "method", false, false, false, 42), ($context["helpText"] ?? null)], 42, $context, $this->getSourceContext());
        yield "

                    ";
        // line 44
        $context["title"] = __("Collect interval");
        // line 45
        yield "                    ";
        $context["helpText"] = __("How often should the Player check for new content.");
        // line 46
        yield "                    ";
        $context["options"] = [["id" => 60, "value" => __("1 minute")], ["id" => 300, "value" => __("5 minutes")], ["id" => 600, "value" => __("10 minutes")], ["id" => 1800, "value" => __("30 minutes")], ["id" => 3600, "value" => __("1 hour")], ["id" => 5400, "value" => __("1 hour 30 minutes")], ["id" => 7200, "value" => __("2 hours")], ["id" => 9000, "value" => __("2 hours 30 minutes")], ["id" => 10800, "value" => __("3 hours")], ["id" => 12600, "value" => __("3 hours 30 minutes")], ["id" => 14400, "value" => __("4 hours")], ["id" => 18000, "value" => __("5 hours")], ["id" => 21600, "value" => __("6 hours")], ["id" => 25200, "value" => __("7 hours")], ["id" => 28800, "value" => __("8 hours")], ["id" => 32400, "value" => __("9 hours")], ["id" => 36000, "value" => __("10 hours")], ["id" => 39600, "value" => __("11 hours")], ["id" => 43200, "value" => __("12 hours")], ["id" => 86400, "value" => __("24 hours")]];
        // line 68
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["collectInterval", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["collectInterval"], "method", false, false, false, 68), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 68, $context, $this->getSourceContext());
        yield "

                    ";
        // line 70
        $context["title"] = __("XMR WebSocket Address");
        // line 71
        yield "                    ";
        $context["helpText"] = __("Override the CMS WebSocket address for XMR.");
        // line 72
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["xmrWebSocketAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["xmrWebSocketAddress"], "method", false, false, false, 72), ($context["helpText"] ?? null)], 72, $context, $this->getSourceContext());
        yield "

                    ";
        // line 74
        $context["title"] = __("XMR Public Address");
        // line 75
        yield "                    ";
        $context["helpText"] = __("Override the CMS public address for XMR.");
        // line 76
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["xmrNetworkAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["xmrNetworkAddress"], "method", false, false, false, 76), ($context["helpText"] ?? null)], 76, $context, $this->getSourceContext());
        yield "

                    ";
        // line 78
        $context["title"] = __("Enable stats reporting?");
        // line 79
        yield "                    ";
        $context["helpText"] = __("Should the application send proof of play stats to the CMS.");
        // line 80
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["statsEnabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["statsEnabled"], "method", false, false, false, 80), ($context["helpText"] ?? null)], 80, $context, $this->getSourceContext());
        yield "

                    ";
        // line 82
        $context["title"] = __("Aggregation level");
        // line 83
        yield "                    ";
        $context["helpText"] = __("Set the level of collection for Proof of Play Statistics to be applied to selected Layouts / Media and Widget items.");
        // line 84
        yield "                    ";
        $context["options"] = [["id" => "Individual", "value" => __("Individual")], ["id" => "Hourly", "value" => __("Hourly")], ["id" => "Daily", "value" => __("Daily")]];
        // line 89
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["aggregationLevel", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["aggregationLevel"], "method", false, false, false, 89), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null), "aggregation-level"], 89, $context, $this->getSourceContext());
        yield "

                    ";
        // line 91
        $context["title"] = __("Player Version");
        // line 92
        yield "                    ";
        $context["helpText"] = __("Set the Player Version to install, making sure that the selected version is suitable for your device");
        // line 93
        yield "                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "300px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.search")], ["name" => "data-search-term", "value" => "playerShowVersion"], ["name" => "data-id-property", "value" => "versionId"], ["name" => "data-text-property", "value" => "playerShowVersion"], ["name" => "data-filter-options", "value" => "{\"playerType\":\"chromeOS\"}"]];
        // line 104
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["playerVersionId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["playerVersionId"], "method", false, false, false, 104), Twig\Extension\CoreExtension::merge([["versionId" => null, "playerShowVersion" => ""]], ($context["versions"] ?? null)), "versionId", "playerShowVersion", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 104, $context, $this->getSourceContext());
        yield "

                    ";
        // line 106
        $context["title"] = __("Operating Hours");
        // line 107
        yield "                    ";
        $context["helpText"] = __("Select a day part that should act as operating hours for this display - email alerts will not be sent outside of operating hours");
        // line 108
        yield "                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "300px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.search")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "dayPartId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-filter-options", "value" => "{\"isAlways\":\"0\", \"isCustom\":\"0\"}"]];
        // line 119
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dayPartId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["dayPartId"], "method", false, false, false, 119), Twig\Extension\CoreExtension::merge([["dayPartId" => null, "name" => ""]], ($context["dayParts"] ?? null)), "dayPartId", "name", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 119, $context, $this->getSourceContext());
        yield "

                </div>

                <div class=\"tab-pane\" id=\"advanced\">

                    ";
        // line 125
        $context["title"] = __("Log Level");
        // line 126
        yield "                    ";
        $context["helpText"] = __("The resting logging level that should be recorded by the Player.");
        // line 127
        yield "                    ";
        $context["options"] = [["id" => "emergency", "value" => __("Emergency")], ["id" => "alert", "value" => __("Alert")], ["id" => "critical", "value" => __("Critical")], ["id" => "error", "value" => __("Error")], ["id" => "off", "value" => __("Off")]];
        // line 134
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["logLevel", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["logLevel"], "method", false, false, false, 134), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 134, $context, $this->getSourceContext());
        yield "

                    ";
        // line 136
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Elevate Logging until");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        yield "                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Elevate log level for the specified time. Should only be used if there is a problem with the display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "isElevatedLogging", [], "method", false, false, false, 138)) {
            // line 139
            yield "                        ";
            $context["elevatedLogs"] = CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getUnmatchedProperty", ["elevateLogsUntilIso"], "method", false, false, false, 139);
            // line 140
            yield "                    ";
        } else {
            // line 141
            yield "                        ";
            $context["elevatedLogs"] = "";
            // line 142
            yield "                    ";
        }
        // line 143
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["elevateLogsUntil", ($context["title"] ?? null), ($context["elevatedLogs"] ?? null), ($context["helpText"] ?? null)], 143, $context, $this->getSourceContext());
        yield "

                    ";
        // line 145
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", 0], "method", false, false, false, 145) == 1)) {
            // line 146
            yield "                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 147
                yield "                            ";
                echo __("Screen shot interval");
                // line 148
                yield "                            ";
                yield CoreExtension::callMacro($macros["forms"], "macro_playerCompat", ["", "", "R204+", "R208+", ""], 148, $context, $this->getSourceContext());
                yield "
                        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 150
            yield "                        ";
            $context["helpText"] = __("The duration between status screen shots in minutes. 0 to disable. Warning: This is bandwidth intensive.");
            // line 151
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_number", ["screenShotRequestInterval", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotRequestInterval"], "method", false, false, false, 151), ($context["helpText"] ?? null)], 151, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 153
        yield "
                    ";
        // line 154
        $context["title"] = __("Screen Shot Size");
        // line 155
        yield "                    ";
        $context["helpText"] = __("The size of the screenshot to return when requested.");
        // line 156
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 156) == "lg")) {
            // line 157
            yield "                    ";
            $context["options"] = [["id" => 1, "value" => __("Thumbnail")], ["id" => 2, "value" => __("HD")], ["id" => 3, "value" => __("FHD")]];
            // line 162
            yield "                    ";
        } else {
            // line 163
            yield "                        ";
            $context["options"] = [["id" => 1, "value" => __("Thumbnail")], ["id" => 2, "value" => __("Standard")]];
            // line 167
            yield "                    ";
        }
        // line 168
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["screenShotSize", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotSize"], "method", false, false, false, 168), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 168, $context, $this->getSourceContext());
        yield "
                </div>

                ";
        // line 171
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["commands"] ?? null)) > 0)) {
            // line 172
            yield "                    <div class=\"tab-pane\" id=\"commands\">
                        ";
            // line 173
            yield from             $this->loadTemplate("displayprofile-form-edit-command-fields.twig", "displayprofile-form-edit-chromeos.twig", 173)->unwrap()->yield($context);
            // line 174
            yield "                    </div>
                ";
        }
        // line 176
        yield "            </div>
        </form>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "displayprofile-form-edit-chromeos.twig";
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
        return array (  302 => 176,  298 => 174,  296 => 173,  293 => 172,  291 => 171,  284 => 168,  281 => 167,  278 => 163,  275 => 162,  272 => 157,  269 => 156,  266 => 155,  264 => 154,  261 => 153,  255 => 151,  252 => 150,  245 => 148,  242 => 147,  239 => 146,  237 => 145,  231 => 143,  228 => 142,  225 => 141,  222 => 140,  219 => 139,  216 => 138,  210 => 137,  205 => 136,  199 => 134,  196 => 127,  193 => 126,  191 => 125,  181 => 119,  178 => 108,  175 => 107,  173 => 106,  167 => 104,  164 => 93,  161 => 92,  159 => 91,  153 => 89,  150 => 84,  147 => 83,  145 => 82,  139 => 80,  136 => 79,  134 => 78,  128 => 76,  125 => 75,  123 => 74,  117 => 72,  114 => 71,  112 => 70,  106 => 68,  103 => 46,  100 => 45,  98 => 44,  92 => 42,  89 => 41,  87 => 40,  84 => 39,  82 => 38,  76 => 35,  73 => 34,  67 => 32,  65 => 31,  61 => 30,  57 => 29,  52 => 26,  44 => 25,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit-chromeos.twig", "/var/www/cms/views/displayprofile-form-edit-chromeos.twig");
    }
}
