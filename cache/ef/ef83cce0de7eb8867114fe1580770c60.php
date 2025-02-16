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

/* displayprofile-form-edit-linux.twig */
class __TwigTemplate_4d9552428b85ba56bc6255b17a60aa64 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit-linux.twig", 23)->unwrap();
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
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#network\" role=\"tab\" data-toggle=\"tab\">";
        // line 30
        echo __("Network");
        yield "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#location\" role=\"tab\" data-toggle=\"tab\">";
        // line 31
        echo __("Location");
        yield "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#troubleshooting\" role=\"tab\" data-toggle=\"tab\">";
        // line 32
        echo __("Troubleshooting");
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
        yield from         $this->loadTemplate("displayprofile-form-edit-common-fields.twig", "displayprofile-form-edit-linux.twig", 41)->unwrap()->yield($context);
        // line 42
        yield "
                    ";
        // line 43
        $context["title"] = __("Collect interval");
        // line 44
        yield "                    ";
        $context["helpText"] = __("How often should the Player check for new content.");
        // line 45
        yield "                    ";
        $context["options"] = [["id" => 60, "value" => __("1 minute")], ["id" => 300, "value" => __("5 minutes")], ["id" => 600, "value" => __("10 minutes")], ["id" => 1800, "value" => __("30 minutes")], ["id" => 3600, "value" => __("1 hour")], ["id" => 5400, "value" => __("1 hour 30 minutes")], ["id" => 7200, "value" => __("2 hours")], ["id" => 9000, "value" => __("2 hours 30 minutes")], ["id" => 10800, "value" => __("3 hours")], ["id" => 12600, "value" => __("3 hours 30 minutes")], ["id" => 14400, "value" => __("4 hours")], ["id" => 18000, "value" => __("5 hours")], ["id" => 21600, "value" => __("6 hours")], ["id" => 25200, "value" => __("7 hours")], ["id" => 28800, "value" => __("8 hours")], ["id" => 32400, "value" => __("9 hours")], ["id" => 36000, "value" => __("10 hours")], ["id" => 39600, "value" => __("11 hours")], ["id" => 43200, "value" => __("12 hours")], ["id" => 86400, "value" => __("24 hours")]];
        // line 67
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["collectInterval", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["collectInterval"], "method", false, false, false, 67), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 67, $context, $this->getSourceContext());
        yield "

                    ";
        // line 69
        $context["title"] = __("XMR WebSocket Address");
        // line 70
        yield "                    ";
        $context["helpText"] = __("Please enter the WebSocket address for XMR.");
        // line 71
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["xmrWebSocketAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["xmrWebSocketAddress"], "method", false, false, false, 71), ($context["helpText"] ?? null)], 71, $context, $this->getSourceContext());
        yield "

                    ";
        // line 73
        $context["title"] = __("XMR Public Address");
        // line 74
        yield "                    ";
        $context["helpText"] = __("Please enter the public address for XMR.");
        // line 75
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["xmrNetworkAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["xmrNetworkAddress"], "method", false, false, false, 75), ($context["helpText"] ?? null)], 75, $context, $this->getSourceContext());
        yield "

                    ";
        // line 77
        $context["title"] = __("Enable stats reporting?");
        // line 78
        yield "                    ";
        $context["helpText"] = __("Should the application send proof of play stats to the CMS.");
        // line 79
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["statsEnabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["statsEnabled"], "method", false, false, false, 79), ($context["helpText"] ?? null)], 79, $context, $this->getSourceContext());
        yield "

                    ";
        // line 81
        $context["title"] = __("Aggregation level");
        // line 82
        yield "                    ";
        $context["helpText"] = __("Set the level of collection for Proof of Play Statistics to be applied to selected Layouts / Media and Widget items.");
        // line 83
        yield "                    ";
        $context["options"] = [["id" => "Individual", "value" => __("Individual")], ["id" => "Hourly", "value" => __("Hourly")], ["id" => "Daily", "value" => __("Daily")]];
        // line 88
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["aggregationLevel", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["aggregationLevel"], "method", false, false, false, 88), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null), "aggregation-level"], 88, $context, $this->getSourceContext());
        yield "
                </div>

                <div class=\"tab-pane\" id=\"network\">

                    ";
        // line 93
        $context["title"] = __("Download Window Start Time");
        // line 94
        yield "                    ";
        $context["helpText"] = __("The start of the time window to connect to the CMS and download updates.");
        // line 95
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["downloadStartWindow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["downloadStartWindow"], "method", false, false, false, 95), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 95, $context, $this->getSourceContext());
        yield "

                    ";
        // line 97
        $context["title"] = __("Download Window End Time");
        // line 98
        yield "                    ";
        $context["helpText"] = __("The end of the time window to connect to the CMS and download updates.");
        // line 99
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["downloadEndWindow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["downloadEndWindow"], "method", false, false, false, 99), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 99, $context, $this->getSourceContext());
        yield "

                    ";
        // line 101
        $context["title"] = __("Force HTTPS?");
        // line 102
        yield "                    ";
        $context["helpText"] = __("Should Displays be forced to use HTTPS connection to the CMS?");
        // line 103
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["forceHttps", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["forceHttps"], "method", false, false, false, 103), ($context["helpText"] ?? null)], 103, $context, $this->getSourceContext());
        yield "

                    ";
        // line 105
        $context["title"] = __("Operating Hours");
        // line 106
        yield "                    ";
        $context["helpText"] = __("Select a day part that should act as operating hours for this display - email alerts will not be sent outside of operating hours");
        // line 107
        yield "                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "300px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.search")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "dayPartId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-filter-options", "value" => "{\"isAlways\":\"0\", \"isCustom\":\"0\"}"]];
        // line 118
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dayPartId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["dayPartId"], "method", false, false, false, 118), Twig\Extension\CoreExtension::merge([["dayPartId" => null, "name" => ""]], ($context["dayParts"] ?? null)), "dayPartId", "name", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 118, $context, $this->getSourceContext());
        yield "

                </div>

                <div class=\"tab-pane\" id=\"location\">

                    ";
        // line 124
        $context["title"] = __("Width");
        // line 125
        yield "                    ";
        $context["helpText"] = __("The Width of the Display Window. 0 means full width.");
        // line 126
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["sizeX", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["sizeX"], "method", false, false, false, 126), ($context["helpText"] ?? null)], 126, $context, $this->getSourceContext());
        yield "

                    ";
        // line 128
        $context["title"] = __("Height");
        // line 129
        yield "                    ";
        $context["helpText"] = __("The Height of the Display Window. 0 means full height.");
        // line 130
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["sizeY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["sizeY"], "method", false, false, false, 130), ($context["helpText"] ?? null)], 130, $context, $this->getSourceContext());
        yield "

                    ";
        // line 132
        $context["title"] = __("Left Coordinate");
        // line 133
        yield "                    ";
        $context["helpText"] = __("The left pixel position the display window should be sized from.");
        // line 134
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["offsetX", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["offsetX"], "method", false, false, false, 134), ($context["helpText"] ?? null)], 134, $context, $this->getSourceContext());
        yield "

                    ";
        // line 136
        $context["title"] = __("Top Coordinate");
        // line 137
        yield "                    ";
        $context["helpText"] = __("The top pixel position the display window should be sized from.");
        // line 138
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["offsetY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["offsetY"], "method", false, false, false, 138), ($context["helpText"] ?? null)], 138, $context, $this->getSourceContext());
        yield "

                </div>

                <div class=\"tab-pane\" id=\"troubleshooting\">

                    ";
        // line 144
        $context["title"] = __("Log Level");
        // line 145
        yield "                    ";
        $context["helpText"] = __("The resting logging level that should be recorded by the Player.");
        // line 146
        yield "                    ";
        $context["options"] = [["id" => "emergency", "value" => __("Emergency")], ["id" => "alert", "value" => __("Alert")], ["id" => "critical", "value" => __("Critical")], ["id" => "error", "value" => __("Error")], ["id" => "off", "value" => __("Off")]];
        // line 153
        yield "
                    ";
        // line 154
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["logLevel", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["logLevel"], "method", false, false, false, 154), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 154, $context, $this->getSourceContext());
        yield "

                    ";
        // line 156
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Elevate Logging until");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 157
        yield "                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Elevate log level for the specified time. Should only be used if there is a problem with the display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "isElevatedLogging", [], "method", false, false, false, 158)) {
            // line 159
            yield "                        ";
            $context["elevatedLogs"] = CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getUnmatchedProperty", ["elevateLogsUntilIso"], "method", false, false, false, 159);
            // line 160
            yield "                    ";
        } else {
            // line 161
            yield "                        ";
            $context["elevatedLogs"] = "";
            // line 162
            yield "                    ";
        }
        // line 163
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["elevateLogsUntil", ($context["title"] ?? null), ($context["elevatedLogs"] ?? null), ($context["helpText"] ?? null)], 163, $context, $this->getSourceContext());
        yield "

                </div>

                <div class=\"tab-pane\" id=\"advanced\">

                    ";
        // line 169
        $context["title"] = __("Enable Shell Commands");
        // line 170
        yield "                    ";
        $context["helpText"] = __("Enable the Shell Command module.");
        // line 171
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["enableShellCommands", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["enableShellCommands"], "method", false, false, false, 171), ($context["helpText"] ?? null)], 171, $context, $this->getSourceContext());
        yield "

                    ";
        // line 173
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED", 0], "method", false, false, false, 173) == 1)) {
            // line 174
            yield "                        ";
            $context["title"] = __("Notify current layout");
            // line 175
            yield "                        ";
            $context["helpText"] = __("When enabled the Player will send the current layout to the CMS each time it changes. Warning: This is bandwidth intensive and should be disabled unless on a LAN.");
            // line 176
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["sendCurrentLayoutAsStatusUpdate", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["sendCurrentLayoutAsStatusUpdate"], "method", false, false, false, 176), ($context["helpText"] ?? null)], 176, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 178
        yield "
                    ";
        // line 179
        $context["title"] = __("Expire Modified Layouts?");
        // line 180
        yield "                    ";
        $context["helpText"] = __("Expire Modified Layouts immediately on change. This means a layout can be cut during playback if it receives an update from the CMS");
        // line 181
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["expireModifiedLayouts", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["expireModifiedLayouts"], "method", false, false, false, 181), ($context["helpText"] ?? null)], 181, $context, $this->getSourceContext());
        yield "

                    ";
        // line 183
        $context["title"] = __("Maximum concurrent downloads");
        // line 184
        yield "                    ";
        $context["helpText"] = __("The maximum number of concurrent downloads the Player will attempt.");
        // line 185
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["maxConcurrentDownloads", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["maxConcurrentDownloads"], "method", false, false, false, 185), ($context["helpText"] ?? null)], 185, $context, $this->getSourceContext());
        yield "

                    ";
        // line 187
        $context["title"] = __("Shell Command Allow List");
        // line 188
        yield "                    ";
        $context["helpText"] = __("Which shell commands should the Player execute?");
        // line 189
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["shellCommandAllowList", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["shellCommandAllowList"], "method", false, false, false, 189), ($context["helpText"] ?? null)], 189, $context, $this->getSourceContext());
        yield "

                    ";
        // line 191
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", 0], "method", false, false, false, 191) == 1)) {
            // line 192
            yield "                        ";
            $context["title"] = __("Screen shot interval");
            // line 193
            yield "                        ";
            $context["helpText"] = __("The duration between status screen shots in minutes. 0 to disable. Warning: This is bandwidth intensive.");
            // line 194
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_number", ["screenShotRequestInterval", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotRequestInterval"], "method", false, false, false, 194), ($context["helpText"] ?? null)], 194, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 196
        yield "
                    ";
        // line 197
        $context["title"] = __("Screen Shot Size");
        // line 198
        yield "                    ";
        $context["helpText"] = __("The size of the largest dimension. Empty or 0 means the screen size.");
        // line 199
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["screenShotSize", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotSize"], "method", false, false, false, 199), ($context["helpText"] ?? null)], 199, $context, $this->getSourceContext());
        yield "

                    ";
        // line 201
        $context["title"] = __("Limit the number of log files uploaded concurrently");
        // line 202
        yield "                    ";
        $context["helpText"] = __("The number of log files to upload concurrently. The lower the number the longer it will take, but the better for memory usage.");
        // line 203
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["maxLogFileUploads", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["maxLogFileUploads"], "method", false, false, false, 203), ($context["helpText"] ?? null)], 203, $context, $this->getSourceContext());
        yield "

                    ";
        // line 205
        $context["title"] = __("Embedded Web Server Port");
        // line 206
        yield "                    ";
        $context["helpText"] = __("The port number to use for the embedded web server on the Player. Only change this if there is a port conflict reported on the status screen.");
        // line 207
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["embeddedServerPort", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["embeddedServerPort"], "method", false, false, false, 207), ($context["helpText"] ?? null)], 207, $context, $this->getSourceContext());
        yield "

                    ";
        // line 209
        $context["title"] = __("Embedded Web Server allow WAN?");
        // line 210
        yield "                    ";
        $context["helpText"] = __("Should we allow access to the Player Embedded Web Server from WAN? You may need to adjust the device firewall to allow external traffic");
        // line 211
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["embeddedServerAllowWan", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["embeddedServerAllowWan"], "method", false, false, false, 211), ($context["helpText"] ?? null)], 211, $context, $this->getSourceContext());
        yield "

                    ";
        // line 213
        $context["title"] = __("Prevent Sleep?");
        // line 214
        yield "                    ";
        $context["helpText"] = __("Stop the player PC power management from Sleeping the PC");
        // line 215
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["preventSleep", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["preventSleep"], "method", false, false, false, 215), ($context["helpText"] ?? null)], 215, $context, $this->getSourceContext());
        yield "

                </div>

                ";
        // line 219
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["commands"] ?? null)) > 0)) {
            // line 220
            yield "                <div class=\"tab-pane\" id=\"commands\">
                    ";
            // line 221
            yield from             $this->loadTemplate("displayprofile-form-edit-command-fields.twig", "displayprofile-form-edit-linux.twig", 221)->unwrap()->yield($context);
            // line 222
            yield "                </div>
                ";
        }
        // line 224
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
        return "displayprofile-form-edit-linux.twig";
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
        return array (  460 => 224,  456 => 222,  454 => 221,  451 => 220,  449 => 219,  441 => 215,  438 => 214,  436 => 213,  430 => 211,  427 => 210,  425 => 209,  419 => 207,  416 => 206,  414 => 205,  408 => 203,  405 => 202,  403 => 201,  397 => 199,  394 => 198,  392 => 197,  389 => 196,  383 => 194,  380 => 193,  377 => 192,  375 => 191,  369 => 189,  366 => 188,  364 => 187,  358 => 185,  355 => 184,  353 => 183,  347 => 181,  344 => 180,  342 => 179,  339 => 178,  333 => 176,  330 => 175,  327 => 174,  325 => 173,  319 => 171,  316 => 170,  314 => 169,  304 => 163,  301 => 162,  298 => 161,  295 => 160,  292 => 159,  289 => 158,  283 => 157,  278 => 156,  273 => 154,  270 => 153,  267 => 146,  264 => 145,  262 => 144,  252 => 138,  249 => 137,  247 => 136,  241 => 134,  238 => 133,  236 => 132,  230 => 130,  227 => 129,  225 => 128,  219 => 126,  216 => 125,  214 => 124,  204 => 118,  201 => 107,  198 => 106,  196 => 105,  190 => 103,  187 => 102,  185 => 101,  179 => 99,  176 => 98,  174 => 97,  168 => 95,  165 => 94,  163 => 93,  154 => 88,  151 => 83,  148 => 82,  146 => 81,  140 => 79,  137 => 78,  135 => 77,  129 => 75,  126 => 74,  124 => 73,  118 => 71,  115 => 70,  113 => 69,  107 => 67,  104 => 45,  101 => 44,  99 => 43,  96 => 42,  94 => 41,  88 => 38,  85 => 37,  79 => 35,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  57 => 29,  52 => 26,  44 => 25,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit-linux.twig", "/var/www/cms/views/displayprofile-form-edit-linux.twig");
    }
}
