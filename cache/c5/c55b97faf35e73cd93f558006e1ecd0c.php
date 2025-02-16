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

/* displayprofile-form-edit-soc.twig */
class __TwigTemplate_a12a041f37ea10373c89d4af69bd0cb6 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit-soc.twig", 23)->unwrap();
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
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#timers\" role=\"tab\" data-toggle=\"tab\">";
        // line 30
        echo __("On/Off Timers");
        yield "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#pictureOptions\" role=\"tab\" data-toggle=\"tab\">";
        // line 31
        echo __("Picture Settings");
        yield "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#lockOptions\" role=\"tab\" data-toggle=\"tab\">";
        // line 32
        echo __("Lock Settings");
        yield "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced\" role=\"tab\" data-toggle=\"tab\">";
        // line 33
        echo __("Advanced");
        yield "</a></li>
            ";
        // line 34
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["commands"] ?? null)) > 0)) {
            // line 35
            yield "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#commands\" role=\"tab\" data-toggle=\"tab\">";
            echo __("Commands");
            yield "</a></li>
            ";
        }
        // line 37
        yield "        </ul>
        <form id=\"displayProfileForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayProfile.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "displayProfileId", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\">
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"general\">
                    ";
        // line 41
        yield from         $this->loadTemplate("displayprofile-form-edit-common-fields.twig", "displayprofile-form-edit-soc.twig", 41)->unwrap()->yield($context);
        // line 42
        yield "
                    ";
        // line 43
        $context["title"] = __("Licence Code");
        // line 44
        yield "                    ";
        $context["helpText"] = __("Provide the Licence Code (formerly Licence email address) to license Players using this Display Profile.");
        // line 45
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_email", ["emailAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["emailAddress"], "method", false, false, false, 45), ($context["helpText"] ?? null)], 45, $context, $this->getSourceContext());
        yield "

                    ";
        // line 47
        $context["title"] = __("Collect interval");
        // line 48
        yield "                    ";
        $context["helpText"] = __("How often should the Player check for new content.");
        // line 49
        yield "                    ";
        $context["options"] = [["id" => 60, "value" => __("1 minute")], ["id" => 300, "value" => __("5 minutes")], ["id" => 600, "value" => __("10 minutes")], ["id" => 1800, "value" => __("30 minutes")], ["id" => 3600, "value" => __("1 hour")], ["id" => 5400, "value" => __("1 hour 30 minutes")], ["id" => 7200, "value" => __("2 hours")], ["id" => 9000, "value" => __("2 hours 30 minutes")], ["id" => 10800, "value" => __("3 hours")], ["id" => 12600, "value" => __("3 hours 30 minutes")], ["id" => 14400, "value" => __("4 hours")], ["id" => 18000, "value" => __("5 hours")], ["id" => 21600, "value" => __("6 hours")], ["id" => 25200, "value" => __("7 hours")], ["id" => 28800, "value" => __("8 hours")], ["id" => 32400, "value" => __("9 hours")], ["id" => 36000, "value" => __("10 hours")], ["id" => 39600, "value" => __("11 hours")], ["id" => 43200, "value" => __("12 hours")], ["id" => 86400, "value" => __("24 hours")]];
        // line 71
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["collectInterval", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["collectInterval"], "method", false, false, false, 71), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 71, $context, $this->getSourceContext());
        yield "

                    ";
        // line 73
        $context["title"] = __("XMR WebSocket Address");
        // line 74
        yield "                    ";
        $context["helpText"] = __("Override the CMS WebSocket address for XMR.");
        // line 75
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["xmrWebSocketAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["xmrWebSocketAddress"], "method", false, false, false, 75), ($context["helpText"] ?? null)], 75, $context, $this->getSourceContext());
        yield "

                    ";
        // line 77
        $context["title"] = __("XMR Public Address");
        // line 78
        yield "                    ";
        $context["helpText"] = __("Override the CMS public address for XMR.");
        // line 79
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["xmrNetworkAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["xmrNetworkAddress"], "method", false, false, false, 79), ($context["helpText"] ?? null)], 79, $context, $this->getSourceContext());
        yield "

                    ";
        // line 81
        $context["title"] = __("Enable stats reporting?");
        // line 82
        yield "                    ";
        $context["helpText"] = __("Should the application send proof of play stats to the CMS.");
        // line 83
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["statsEnabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["statsEnabled"], "method", false, false, false, 83), ($context["helpText"] ?? null)], 83, $context, $this->getSourceContext());
        yield "

                    ";
        // line 85
        $context["title"] = __("Aggregation level");
        // line 86
        yield "                    ";
        $context["helpText"] = __("Set the level of collection for Proof of Play Statistics to be applied to selected Layouts / Media and Widget items.");
        // line 87
        yield "                    ";
        $context["options"] = [["id" => "Individual", "value" => __("Individual")], ["id" => "Hourly", "value" => __("Hourly")], ["id" => "Daily", "value" => __("Daily")]];
        // line 92
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["aggregationLevel", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["aggregationLevel"], "method", false, false, false, 92), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null), "aggregation-level"], 92, $context, $this->getSourceContext());
        yield "

                    ";
        // line 94
        $context["title"] = __("Player Version");
        // line 95
        yield "                    ";
        $context["helpText"] = __("Set the Player Version to install, making sure that the selected version is suitable for your device");
        // line 96
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 96) == "lg")) {
            // line 97
            yield "                        ";
            $context["attributes"] = [["name" => "data-width", "value" => "300px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.search")], ["name" => "data-search-term", "value" => "playerShowVersion"], ["name" => "data-id-property", "value" => "versionId"], ["name" => "data-text-property", "value" => "playerShowVersion"], ["name" => "data-filter-options", "value" => "{\"playerType\":\"lg\"}"]];
            // line 108
            yield "                    ";
        }
        // line 109
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 109) == "sssp")) {
            // line 110
            yield "                        ";
            $context["attributes"] = [["name" => "data-width", "value" => "300px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.search")], ["name" => "data-search-term", "value" => "playerShowVersion"], ["name" => "data-id-property", "value" => "versionId"], ["name" => "data-text-property", "value" => "playerShowVersion"], ["name" => "data-filter-options", "value" => "{\"playerType\":\"sssp\"}"]];
            // line 121
            yield "                    ";
        }
        // line 122
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["versionMediaId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["versionMediaId"], "method", false, false, false, 122), Twig\Extension\CoreExtension::merge([["versionId" => null, "playerShowVersion" => ""]], ($context["versions"] ?? null)), "versionId", "playerShowVersion", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 122, $context, $this->getSourceContext());
        yield "

                    ";
        // line 124
        $context["title"] = __("Orientation");
        // line 125
        yield "                    ";
        $context["helpText"] = __("Set the orientation of the device (portrait mode will only work if supported by the hardware) Application Restart Required.");
        // line 126
        yield "                    ";
        $context["options"] = [["id" => 0, "value" => __("Landscape")], ["id" => 1, "value" => __("Portrait")], ["id" => 8, "value" => __("Reverse Landscape")], ["id" => 9, "value" => __("Reverse Portrait")]];
        // line 132
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["orientation"], "method", false, false, false, 132), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 132, $context, $this->getSourceContext());
        yield "

                    ";
        // line 134
        $context["title"] = __("Download Window Start Time");
        // line 135
        yield "                    ";
        $context["helpText"] = __("The start of the time window to connect to the CMS and download updates.");
        // line 136
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["downloadStartWindow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["downloadStartWindow"], "method", false, false, false, 136), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 136, $context, $this->getSourceContext());
        yield "

                    ";
        // line 138
        $context["title"] = __("Download Window End Time");
        // line 139
        yield "                    ";
        $context["helpText"] = __("The end of the time window to connect to the CMS and download updates.");
        // line 140
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["downloadEndWindow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["downloadEndWindow"], "method", false, false, false, 140), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 140, $context, $this->getSourceContext());
        yield "

                    ";
        // line 142
        $context["title"] = __("Update Window Start Time");
        // line 143
        yield "                    ";
        $context["helpText"] = __("The start of the time window to install application updates.");
        // line 144
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["updateStartWindow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["updateStartWindow"], "method", false, false, false, 144), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 144, $context, $this->getSourceContext());
        yield "

                    ";
        // line 146
        $context["title"] = __("Update Window End Time");
        // line 147
        yield "                    ";
        $context["helpText"] = __("The end of the time window to install application updates.");
        // line 148
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["updateEndWindow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["updateEndWindow"], "method", false, false, false, 148), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 148, $context, $this->getSourceContext());
        yield "

                    ";
        // line 150
        $context["title"] = __("Force HTTPS?");
        // line 151
        yield "                    ";
        $context["helpText"] = __("Should Displays be forced to use HTTPS connection to the CMS?");
        // line 152
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["forceHttps", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["forceHttps"], "method", false, false, false, 152), ($context["helpText"] ?? null)], 152, $context, $this->getSourceContext());
        yield "

                    ";
        // line 154
        $context["title"] = __("Operating Hours");
        // line 155
        yield "                    ";
        $context["helpText"] = __("Select a day part that should act as operating hours for this display - email alerts will not be sent outside of operating hours");
        // line 156
        yield "                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "300px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.search")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "dayPartId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-filter-options", "value" => "{\"isAlways\":\"0\", \"isCustom\":\"0\"}"]];
        // line 167
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dayPartId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["dayPartId"], "method", false, false, false, 167), Twig\Extension\CoreExtension::merge([["dayPartId" => null, "name" => ""]], ($context["dayParts"] ?? null)), "dayPartId", "name", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 167, $context, $this->getSourceContext());
        yield "

                </div>

                <div class=\"tab-pane\" id=\"advanced\">

                    ";
        // line 173
        $context["title"] = __("Log Level");
        // line 174
        yield "                    ";
        $context["helpText"] = __("The resting logging level that should be recorded by the Player.");
        // line 175
        yield "                    ";
        $context["options"] = [["id" => "emergency", "value" => __("Emergency")], ["id" => "alert", "value" => __("Alert")], ["id" => "critical", "value" => __("Critical")], ["id" => "error", "value" => __("Error")], ["id" => "off", "value" => __("Off")]];
        // line 182
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["logLevel", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["logLevel"], "method", false, false, false, 182), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 182, $context, $this->getSourceContext());
        yield "

                    ";
        // line 184
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Elevate Logging until");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 185
        yield "                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Elevate log level for the specified time. Should only be used if there is a problem with the display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 186
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "isElevatedLogging", [], "method", false, false, false, 186)) {
            // line 187
            yield "                        ";
            $context["elevatedLogs"] = CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getUnmatchedProperty", ["elevateLogsUntilIso"], "method", false, false, false, 187);
            // line 188
            yield "                    ";
        } else {
            // line 189
            yield "                        ";
            $context["elevatedLogs"] = "";
            // line 190
            yield "                    ";
        }
        // line 191
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["elevateLogsUntil", ($context["title"] ?? null), ($context["elevatedLogs"] ?? null), ($context["helpText"] ?? null)], 191, $context, $this->getSourceContext());
        yield "

                    ";
        // line 193
        $context["title"] = __("Action Bar Mode");
        // line 194
        yield "                    ";
        $context["helpText"] = __("How should the action bar behave?");
        // line 195
        yield "                    ";
        $context["options"] = [["id" => 0, "value" => __("Hide")], ["id" => 1, "value" => __("Timed")]];
        // line 199
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["actionBarMode", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["actionBarMode"], "method", false, false, false, 199), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 199, $context, $this->getSourceContext());
        yield "

                    ";
        // line 201
        $context["title"] = __("Action Bar Display Duration");
        // line 202
        yield "                    ";
        $context["helpText"] = __("How long should the Action Bar be shown for, in seconds?");
        // line 203
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["actionBarDisplayDuration", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["actionBarDisplayDuration"], "method", false, false, false, 203), ($context["helpText"] ?? null)], 203, $context, $this->getSourceContext());
        yield "

                    ";
        // line 205
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED", 0], "method", false, false, false, 205) == 1)) {
            // line 206
            yield "                        ";
            $context["title"] = __("Notify current layout");
            // line 207
            yield "                        ";
            $context["helpText"] = __("When enabled the Player will send the current layout to the CMS each time it changes. Warning: This is bandwidth intensive and should be disabled unless on a LAN.");
            // line 208
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["sendCurrentLayoutAsStatusUpdate", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["sendCurrentLayoutAsStatusUpdate"], "method", false, false, false, 208), ($context["helpText"] ?? null)], 208, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 210
        yield "
                    ";
        // line 211
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", 0], "method", false, false, false, 211) == 1)) {
            // line 212
            yield "                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 213
                yield "                            ";
                echo __("Screen shot interval");
                // line 214
                yield "                            ";
                yield CoreExtension::callMacro($macros["forms"], "macro_playerCompat", ["", "", "R204+", "R208+", ""], 214, $context, $this->getSourceContext());
                yield "
                        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 216
            yield "                        ";
            $context["helpText"] = __("The duration between status screen shots in minutes. 0 to disable. Warning: This is bandwidth intensive.");
            // line 217
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_number", ["screenShotRequestInterval", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotRequestInterval"], "method", false, false, false, 217), ($context["helpText"] ?? null)], 217, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 219
        yield "
                    ";
        // line 220
        $context["title"] = __("Screen Shot Size");
        // line 221
        yield "                    ";
        $context["helpText"] = __("The size of the screenshot to return when requested.");
        // line 222
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 222) == "lg")) {
            // line 223
            yield "                    ";
            $context["options"] = [["id" => 1, "value" => __("Thumbnail")], ["id" => 2, "value" => __("HD")], ["id" => 3, "value" => __("FHD")]];
            // line 228
            yield "                    ";
        } else {
            // line 229
            yield "                        ";
            $context["options"] = [["id" => 1, "value" => __("Thumbnail")], ["id" => 2, "value" => __("Standard")]];
            // line 233
            yield "                    ";
        }
        // line 234
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["screenShotSize", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotSize"], "method", false, false, false, 234), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 234, $context, $this->getSourceContext());
        yield "

                    ";
        // line 236
        $context["title"] = __("Send progress while downloading");
        // line 237
        yield "                    ";
        $context["helpText"] = __("How often, in minutes, should the Display send its download progress while it is downloading new content?");
        // line 238
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["mediaInventoryTimer", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["mediaInventoryTimer"], "method", false, false, false, 238), ($context["helpText"] ?? null)], 238, $context, $this->getSourceContext());
        yield "

                    ";
        // line 240
        $context["title"] = __("Embedded Web Server Port");
        // line 241
        yield "                    ";
        $context["helpText"] = __("The port number to use for the embedded web server on the Player. Only change this if there is a port conflict reported on the status screen.");
        // line 242
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["serverPort", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["serverPort"], "method", false, false, false, 242), ($context["helpText"] ?? null)], 242, $context, $this->getSourceContext());
        yield "

                    ";
        // line 244
        $context["title"] = __("Embedded Web Server allow WAN?");
        // line 245
        yield "                    ";
        $context["helpText"] = __("Should we allow access to the Player Embedded Web Server from WAN? You may need to adjust the device firewall to allow external traffic");
        // line 246
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["embeddedServerAllowWan", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["embeddedServerAllowWan"], "method", false, false, false, 246), ($context["helpText"] ?? null)], 246, $context, $this->getSourceContext());
        yield "
                </div>

                <div class=\"tab-pane\" id=\"timers\">

                    ";
        // line 251
        $context["settingsDesc1"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 252
            yield "                        ";
            echo __("Use the form fields to create On/Off timings for the monitor for specific days of the week as required.");
            // line 253
            yield "                    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 254
        yield "                    ";
        $context["settingsDesc2"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 255
            yield "                        ";
            echo __("Please note:");
            // line 256
            yield "                    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 257
        yield "                    ";
        $context["settingsDesc3"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 258
            yield "                        ";
            echo __("When the monitor is 'Off' it will not be able to receive content updates. With the next timed 'On' the monitor will connect to the CMS and get content/schedule updates.");
            // line 259
            yield "                    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 260
        yield "                    <div class=\"alert alert-info\">
                        <p>";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["settingsDesc1"] ?? null), "html", null, true);
        yield "<strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["settingsDesc2"] ?? null), "html", null, true);
        yield "</strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["settingsDesc3"] ?? null), "html", null, true);
        yield "</p>
                    </div>

                    ";
        // line 265
        yield "                    ";
        $context["monday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 266
        yield "                    ";
        $context["tuesday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tuesday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 267
        yield "                    ";
        $context["wednesday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Wednesday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 268
        yield "                    ";
        $context["thursday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Thursday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 269
        yield "                    ";
        $context["friday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Friday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 270
        yield "                    ";
        $context["saturday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Saturday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 271
        yield "                    ";
        $context["sunday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sunday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 272
        yield "
                    ";
        // line 273
        $context["options"] = [["id" => "monday", "name" =>         // line 274
($context["monday"] ?? null)], ["id" => "tuesday", "name" =>         // line 275
($context["tuesday"] ?? null)], ["id" => "wednesday", "name" =>         // line 276
($context["wednesday"] ?? null)], ["id" => "thursday", "name" =>         // line 277
($context["thursday"] ?? null)], ["id" => "friday", "name" =>         // line 278
($context["friday"] ?? null)], ["id" => "saturday", "name" =>         // line 279
($context["saturday"] ?? null)], ["id" => "sunday", "name" =>         // line 280
($context["sunday"] ?? null)]];
        // line 282
        yield "
                    <div id=\"timers-container\" class=\"container-fluid display-settings-container\" data-values=\"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["timers"], "method", false, false, false, 283), "html", null, true);
        yield "\" data-options=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["options"] ?? null)), "html", null, true);
        yield "\"></div>

                </div>

                <div class=\"tab-pane\" id=\"pictureOptions\">

                    ";
        // line 289
        $context["settingsDesc"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 290
            yield "                        ";
            echo __("Control picture settings using the fields below. Use the sliders to set the required range for each setting.");
            // line 291
            yield "                    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 292
        yield "                    <div class=\"alert alert-info\">
                        <p>";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["settingsDesc"] ?? null), "html", null, true);
        yield "</p>
                    </div>

                    ";
        // line 297
        yield "                    ";
        $context["backlight"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Backlight");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 298
        yield "                    ";
        $context["contrast"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Contrast");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 299
        yield "                    ";
        $context["brightness"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Brightness");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 300
        yield "                    ";
        $context["sharpness"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sharpness");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 301
        yield "                    ";
        $context["hSharpness"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Horizontal Sharpness");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 302
        yield "                    ";
        $context["vSharpness"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Vertical Sharpness");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 303
        yield "                    ";
        $context["color"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Color");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 304
        yield "                    ";
        $context["tint"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tint");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 305
        yield "                    ";
        $context["colorTemperature"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Color Temperature");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 306
        yield "                    ";
        $context["dynamicContrast"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Dynamic Contrast");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 307
        yield "                    ";
        $context["superResolution"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Super Resolution");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 308
        yield "                    ";
        $context["colorGamut"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Color Gamut");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 309
        yield "                    ";
        $context["dynamicColor"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Dynamic Color");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 310
        yield "                    ";
        $context["noiseReduction"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Noise Reduction");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 311
        yield "                    ";
        $context["mpegNoiseReduction"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("MPEG Noise Reduction");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 312
        yield "                    ";
        $context["blackLevel"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Black Level");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 313
        yield "                    ";
        $context["gamma"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Gamma");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 314
        yield "
                    ";
        // line 316
        yield "                    ";
        $context["red"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Red");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 317
        yield "                    ";
        $context["green"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Green");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 318
        yield "                    ";
        $context["warm"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Warm");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 319
        yield "                    ";
        $context["cool"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Cool");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 320
        yield "
                    ";
        // line 321
        $context["options"] = ["backlight" => ["name" =>         // line 322
($context["backlight"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 100, "step" => 1, "ticks" => [0, 100], "ticks_labels" => [0, 100]]], "contrast" => ["name" =>         // line 323
($context["contrast"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 100, "step" => 1, "ticks" => [0, 100], "ticks_labels" => [0, 100]]], "brightness" => ["name" =>         // line 324
($context["brightness"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 100, "step" => 1, "ticks" => [0, 100], "ticks_labels" => [0, 100]]], "sharpness" => ["name" =>         // line 325
($context["sharpness"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 50, "step" => 1, "ticks" => [0, 50], "ticks_labels" => [0, 50]]], "hSharpness" => ["name" =>         // line 326
($context["hSharpness"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 50, "step" => 1, "ticks" => [0, 50], "ticks_labels" => [0, 50]]], "vSharpness" => ["name" =>         // line 327
($context["vSharpness"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 50, "step" => 1, "ticks" => [0, 50], "ticks_labels" => [0, 50]]], "color" => ["name" =>         // line 328
($context["color"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 100, "step" => 1, "ticks" => [0, 100], "ticks_labels" => [0, 100]]], "tint" => ["name" =>         // line 329
($context["tint"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 100, "step" => 1, "ticks" => [0, 100], "ticks_labels" => [($context["red"] ?? null), ($context["green"] ?? null)]]], "colorTemperature" => ["name" =>         // line 330
($context["colorTemperature"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 100, "step" => 1, "ticks" => [0, 100], "ticks_labels" => [($context["warm"] ?? null), ($context["cool"] ?? null)]]], "dynamicContrast" => ["name" =>         // line 331
($context["dynamicContrast"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 3, "step" => 1, "ticks" => [0, 1, 2, 3], "ticks_labels" => ["off", "low", "medium", "high"], "tooltip" => "hide"]], "superResolution" => ["name" =>         // line 332
($context["superResolution"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 3, "step" => 1, "ticks" => [0, 1, 2, 3], "ticks_labels" => ["off", "low", "medium", "high"], "tooltip" => "hide"]], "colorGamut" => ["name" =>         // line 333
($context["colorGamut"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 1, "step" => 1, "ticks" => [0, 1], "ticks_labels" => ["normal", "extended"], "tooltip" => "hide"]], "dynamicColor" => ["name" =>         // line 334
($context["dynamicColor"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 3, "step" => 1, "ticks" => [0, 1, 2, 3], "ticks_labels" => ["off", "low", "medium", "high"], "tooltip" => "hide"]], "noiseReduction" => ["name" =>         // line 335
($context["noiseReduction"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 4, "step" => 1, "ticks" => [0, 1, 2, 3, 4], "ticks_labels" => ["auto", "off", "low", "medium", "high"], "tooltip" => "hide"]], "mpegNoiseReduction" => ["name" =>         // line 336
($context["mpegNoiseReduction"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 4, "step" => 1, "ticks" => [0, 1, 2, 3, 4], "ticks_labels" => ["auto", "off", "low", "medium", "high"], "tooltip" => "hide"]], "blackLevel" => ["name" =>         // line 337
($context["blackLevel"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 1, "step" => 1, "ticks" => [0, 1], "ticks_labels" => ["low", "high"], "tooltip" => "hide"]], "gamma" => ["name" =>         // line 338
($context["gamma"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 3, "step" => 1, "ticks" => [0, 1, 2, 3], "ticks_labels" => ["low", "medium", "high", "high2"], "tooltip" => "hide"]]];
        // line 340
        yield "
                    <div id=\"picture-options-container\" class=\"container-fluid display-settings-container\" data-values=\"";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["pictureOptions"], "method", false, false, false, 341), "html", null, true);
        yield "\" data-options=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["options"] ?? null)), "html", null, true);
        yield "\"></div>

                </div>

                <div class=\"tab-pane\" id=\"lockOptions\">

                    <div id=\"lock-options-container\" class=\"container-fluid display-settings-container\" data-value=\"";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["lockOptions"], "method", false, false, false, 347), "html", null, true);
        yield "\">
                        ";
        // line 349
        yield "                        ";
        $context["usblockTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("usblock");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 350
        yield "                        ";
        $context["usblockHelp"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set access to any device that uses the monitors USB port. Set to ‘False’ the monitor will not accept input or read from USB ports.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 351
        yield "                        ";
        $context["osdlockTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("osdlock");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 352
        yield "                        ";
        $context["osdlockHelp"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set access to the monitor settings via the remote control. Set To ‘False’ the remote control will not change the volume, brightness etc of the monitor.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 353
        yield "                        ";
        $context["falseText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("False");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 354
        yield "                        ";
        $context["trueText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("True");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 355
        yield "                        ";
        $context["options"] = [["val" => "empty", "text" => ""], ["val" => "false", "text" =>         // line 357
($context["falseText"] ?? null)], ["val" => "true", "text" =>         // line 358
($context["trueText"] ?? null)]];
        // line 360
        yield "
                        ";
        // line 361
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["lockOptions"] ?? null), "usblock", [], "any", true, true, false, 361) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["lockOptions"] ?? null), "usblock", [], "any", false, false, false, 361))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 361) == "lg"))) {
            // line 362
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["lockOptions"] ?? null), "usblock", [], "any", false, false, false, 362) == true)) {
                // line 363
                yield "                                ";
                $context["usblockValue"] = "true";
                // line 364
                yield "                            ";
            } else {
                // line 365
                yield "                                ";
                $context["usblockValue"] = "false";
                // line 366
                yield "                            ";
            }
            // line 367
            yield "                        ";
        } else {
            // line 368
            yield "                            ";
            $context["usblockValue"] = "empty";
            // line 369
            yield "                        ";
        }
        // line 370
        yield "
                        ";
        // line 371
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["lockOptions"] ?? null), "osdlock", [], "any", true, true, false, 371) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["lockOptions"] ?? null), "osdlock", [], "any", false, false, false, 371)))) {
            // line 372
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["lockOptions"] ?? null), "osdlock", [], "any", false, false, false, 372) == true)) {
                // line 373
                yield "                                ";
                $context["osdlockValue"] = "true";
                // line 374
                yield "                            ";
            } else {
                // line 375
                yield "                                ";
                $context["osdlockValue"] = "false";
                // line 376
                yield "                            ";
            }
            // line 377
            yield "                        ";
        } else {
            // line 378
            yield "                            ";
            $context["osdlockValue"] = "empty";
            // line 379
            yield "                        ";
        }
        // line 380
        yield "
                        ";
        // line 381
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 381) == "lg")) {
            // line 382
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["usblock", "single", ($context["usblockTitle"] ?? null), ($context["usblockValue"] ?? null), ($context["options"] ?? null), "val", "text", ($context["usblockHelp"] ?? null)], 382, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 384
        yield "
                        ";
        // line 385
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["osdlock", "single", ($context["osdlockTitle"] ?? null), ($context["osdlockValue"] ?? null), ($context["options"] ?? null), "val", "text", ($context["osdlockHelp"] ?? null)], 385, $context, $this->getSourceContext());
        yield "

                        ";
        // line 388
        yield "                        ";
        $context["localKeylockTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Keylock (local)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 389
        yield "                        ";
        $context["localKeylockHelp"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set the allowed key input for the monitor.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 390
        yield "                        ";
        $context["remoteKeylockTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Keylock (remote)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 391
        yield "                        ";
        $context["remoteKeylockHelp"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set the allowed key input for the monitor.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 392
        yield "                        ";
        $context["allowallText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Allow All");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 393
        yield "                        ";
        $context["blockallText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Block All");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 394
        yield "                        ";
        $context["poweronlyText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Power Only");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 395
        yield "                        ";
        $context["options"] = [["val" => "", "text" => ""], ["val" => "allowall", "text" =>         // line 397
($context["allowallText"] ?? null)], ["val" => "blockall", "text" =>         // line 398
($context["blockallText"] ?? null)]];
        // line 400
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 400) == "lg")) {
            // line 401
            yield "                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [["val" => "poweronly", "text" => ($context["poweronlyText"] ?? null)]], ($context["options"] ?? null));
            // line 402
            yield "                        ";
        }
        // line 403
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["keylockLocal", "single", ($context["localKeylockTitle"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lockOptions"] ?? null), "keylock", [], "any", false, false, false, 403), "local", [], "any", false, false, false, 403), ($context["options"] ?? null), "val", "text", ($context["localKeylockHelp"] ?? null)], 403, $context, $this->getSourceContext());
        yield "
                        ";
        // line 404
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["keylockRemote", "single", ($context["remoteKeylockTitle"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lockOptions"] ?? null), "keylock", [], "any", false, false, false, 404), "remote", [], "any", false, false, false, 404), ($context["options"] ?? null), "val", "text", ($context["remoteKeylockHelp"] ?? null)], 404, $context, $this->getSourceContext());
        yield "
                    </div>

                </div>

                ";
        // line 409
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["commands"] ?? null)) > 0)) {
            // line 410
            yield "                    <div class=\"tab-pane\" id=\"commands\">
                        ";
            // line 411
            yield from             $this->loadTemplate("displayprofile-form-edit-command-fields.twig", "displayprofile-form-edit-soc.twig", 411)->unwrap()->yield($context);
            // line 412
            yield "                    </div>
                ";
        }
        // line 414
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
        return "displayprofile-form-edit-soc.twig";
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
        return array (  959 => 414,  955 => 412,  953 => 411,  950 => 410,  948 => 409,  940 => 404,  935 => 403,  932 => 402,  929 => 401,  926 => 400,  924 => 398,  923 => 397,  921 => 395,  915 => 394,  909 => 393,  903 => 392,  897 => 391,  891 => 390,  885 => 389,  879 => 388,  874 => 385,  871 => 384,  865 => 382,  863 => 381,  860 => 380,  857 => 379,  854 => 378,  851 => 377,  848 => 376,  845 => 375,  842 => 374,  839 => 373,  836 => 372,  834 => 371,  831 => 370,  828 => 369,  825 => 368,  822 => 367,  819 => 366,  816 => 365,  813 => 364,  810 => 363,  807 => 362,  805 => 361,  802 => 360,  800 => 358,  799 => 357,  797 => 355,  791 => 354,  785 => 353,  779 => 352,  773 => 351,  767 => 350,  761 => 349,  757 => 347,  746 => 341,  743 => 340,  741 => 338,  740 => 337,  739 => 336,  738 => 335,  737 => 334,  736 => 333,  735 => 332,  734 => 331,  733 => 330,  732 => 329,  731 => 328,  730 => 327,  729 => 326,  728 => 325,  727 => 324,  726 => 323,  725 => 322,  724 => 321,  721 => 320,  715 => 319,  709 => 318,  703 => 317,  697 => 316,  694 => 314,  688 => 313,  682 => 312,  676 => 311,  670 => 310,  664 => 309,  658 => 308,  652 => 307,  646 => 306,  640 => 305,  634 => 304,  628 => 303,  622 => 302,  616 => 301,  610 => 300,  604 => 299,  598 => 298,  592 => 297,  586 => 293,  583 => 292,  579 => 291,  576 => 290,  574 => 289,  563 => 283,  560 => 282,  558 => 280,  557 => 279,  556 => 278,  555 => 277,  554 => 276,  553 => 275,  552 => 274,  551 => 273,  548 => 272,  542 => 271,  536 => 270,  530 => 269,  524 => 268,  518 => 267,  512 => 266,  506 => 265,  496 => 261,  493 => 260,  489 => 259,  486 => 258,  483 => 257,  479 => 256,  476 => 255,  473 => 254,  469 => 253,  466 => 252,  464 => 251,  455 => 246,  452 => 245,  450 => 244,  444 => 242,  441 => 241,  439 => 240,  433 => 238,  430 => 237,  428 => 236,  422 => 234,  419 => 233,  416 => 229,  413 => 228,  410 => 223,  407 => 222,  404 => 221,  402 => 220,  399 => 219,  393 => 217,  390 => 216,  383 => 214,  380 => 213,  377 => 212,  375 => 211,  372 => 210,  366 => 208,  363 => 207,  360 => 206,  358 => 205,  352 => 203,  349 => 202,  347 => 201,  341 => 199,  338 => 195,  335 => 194,  333 => 193,  327 => 191,  324 => 190,  321 => 189,  318 => 188,  315 => 187,  312 => 186,  306 => 185,  301 => 184,  295 => 182,  292 => 175,  289 => 174,  287 => 173,  277 => 167,  274 => 156,  271 => 155,  269 => 154,  263 => 152,  260 => 151,  258 => 150,  252 => 148,  249 => 147,  247 => 146,  241 => 144,  238 => 143,  236 => 142,  230 => 140,  227 => 139,  225 => 138,  219 => 136,  216 => 135,  214 => 134,  208 => 132,  205 => 126,  202 => 125,  200 => 124,  194 => 122,  191 => 121,  188 => 110,  185 => 109,  182 => 108,  179 => 97,  176 => 96,  173 => 95,  171 => 94,  165 => 92,  162 => 87,  159 => 86,  157 => 85,  151 => 83,  148 => 82,  146 => 81,  140 => 79,  137 => 78,  135 => 77,  129 => 75,  126 => 74,  124 => 73,  118 => 71,  115 => 49,  112 => 48,  110 => 47,  104 => 45,  101 => 44,  99 => 43,  96 => 42,  94 => 41,  88 => 38,  85 => 37,  79 => 35,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  57 => 29,  52 => 26,  44 => 25,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit-soc.twig", "/var/www/cms/views/displayprofile-form-edit-soc.twig");
    }
}
