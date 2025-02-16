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

/* displayprofile-form-edit-windows.twig */
class __TwigTemplate_16081fa9312cc6b6fd701cb2cdaf59ff extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit-windows.twig", 23)->unwrap();
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "displayprofile-form-edit-common-fields.twig");
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
        $context["helpText"] = __("Override the CMS WebSocket address for XMR.");
        // line 71
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["xmrWebSocketAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["xmrWebSocketAddress"], "method", false, false, false, 71), ($context["helpText"] ?? null)], 71, $context, $this->getSourceContext());
        yield "

                    ";
        // line 73
        $context["title"] = __("XMR Public Address");
        // line 74
        yield "                    ";
        $context["helpText"] = __("Override the CMS public address for XMR.");
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

                    ";
        // line 90
        $context["title"] = __("Record geolocation on each Proof of Play?");
        // line 91
        yield "                    ";
        $context["helpText"] = __("If the geolocation of the Display is known, enable to record that location against each proof of play record.");
        // line 92
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isRecordGeoLocationOnProofOfPlay", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["isRecordGeoLocationOnProofOfPlay"], "method", false, false, false, 92), ($context["helpText"] ?? null)], 92, $context, $this->getSourceContext());
        yield "

                    ";
        // line 94
        $context["title"] = __("Enable PowerPoint?");
        // line 95
        yield "                    ";
        $context["helpText"] = __("Should Microsoft PowerPoint be Enabled? The Player will need PowerPoint installed to Display PowerPoint files.");
        // line 96
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["powerpointEnabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["powerpointEnabled"], "method", false, false, false, 96), ($context["helpText"] ?? null)], 96, $context, $this->getSourceContext());
        yield "

                </div>

                <div class=\"tab-pane\" id=\"network\">

                    ";
        // line 102
        $context["title"] = __("Download Window Start Time");
        // line 103
        yield "                    ";
        $context["helpText"] = __("The start of the time window to connect to the CMS and download updates.");
        // line 104
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["downloadStartWindow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["downloadStartWindow"], "method", false, false, false, 104), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 104, $context, $this->getSourceContext());
        yield "

                    ";
        // line 106
        $context["title"] = __("Download Window End Time");
        // line 107
        yield "                    ";
        $context["helpText"] = __("The end of the time window to connect to the CMS and download updates.");
        // line 108
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["downloadEndWindow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["downloadEndWindow"], "method", false, false, false, 108), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 108, $context, $this->getSourceContext());
        yield "

                    ";
        // line 110
        $context["title"] = __("Force HTTPS?");
        // line 111
        yield "                    ";
        $context["helpText"] = __("Should Displays be forced to use HTTPS connection to the CMS?");
        // line 112
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["forceHttps", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["forceHttps"], "method", false, false, false, 112), ($context["helpText"] ?? null)], 112, $context, $this->getSourceContext());
        yield "

                    ";
        // line 114
        $context["title"] = __("Operating Hours");
        // line 115
        yield "                    ";
        $context["helpText"] = __("Select a day part that should act as operating hours for this display - email alerts will not be sent outside of operating hours");
        // line 116
        yield "                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "300px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.search")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "dayPartId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-filter-options", "value" => "{\"isAlways\":\"0\", \"isCustom\":\"0\"}"]];
        // line 127
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dayPartId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["dayPartId"], "method", false, false, false, 127), Twig\Extension\CoreExtension::merge([["dayPartId" => null, "name" => ""]], ($context["dayParts"] ?? null)), "dayPartId", "name", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 127, $context, $this->getSourceContext());
        yield "

                    ";
        // line 129
        $context["title"] = __("Authentication Whitelist");
        // line 130
        yield "                    ";
        $context["helpText"] = __("A comma separated list of domains which should be allowed to perform NTML/Negotiate authentication.");
        // line 131
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["authServerWhitelist", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["authServerWhitelist"], "method", false, false, false, 131), ($context["helpText"] ?? null)], 131, $context, $this->getSourceContext());
        yield "

                    ";
        // line 133
        $context["title"] = __("Edge Browser Whitelist");
        // line 134
        yield "                    ";
        $context["helpText"] = __("A comma separated list of website urls which should be rendered by the Edge Browser instead of Chromium.");
        // line 135
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["edgeBrowserWhitelist", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["edgeBrowserWhitelist"], "method", false, false, false, 135), ($context["helpText"] ?? null)], 135, $context, $this->getSourceContext());
        yield "
                </div>

                <div class=\"tab-pane\" id=\"location\">

                    ";
        // line 140
        $context["title"] = __("Width");
        // line 141
        yield "                    ";
        $context["helpText"] = __("The Width of the Display Window. 0 means full width.");
        // line 142
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["sizeX", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["sizeX"], "method", false, false, false, 142), ($context["helpText"] ?? null)], 142, $context, $this->getSourceContext());
        yield "

                    ";
        // line 144
        $context["title"] = __("Height");
        // line 145
        yield "                    ";
        $context["helpText"] = __("The Height of the Display Window. 0 means full height.");
        // line 146
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["sizeY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["sizeY"], "method", false, false, false, 146), ($context["helpText"] ?? null)], 146, $context, $this->getSourceContext());
        yield "

                    ";
        // line 148
        $context["title"] = __("Left Coordinate");
        // line 149
        yield "                    ";
        $context["helpText"] = __("The left pixel position the display window should be sized from.");
        // line 150
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["offsetX", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["offsetX"], "method", false, false, false, 150), ($context["helpText"] ?? null)], 150, $context, $this->getSourceContext());
        yield "

                    ";
        // line 152
        $context["title"] = __("Top Coordinate");
        // line 153
        yield "                    ";
        $context["helpText"] = __("The top pixel position the display window should be sized from.");
        // line 154
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["offsetY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["offsetY"], "method", false, false, false, 154), ($context["helpText"] ?? null)], 154, $context, $this->getSourceContext());
        yield "

                </div>

                <div class=\"tab-pane\" id=\"troubleshooting\">

                    ";
        // line 160
        $context["title"] = __("CTRL Key required to access Player Information Screen?");
        // line 161
        yield "                    ";
        $context["helpText"] = __("Should the Player information screen require the CTRL key?");
        // line 162
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["clientInfomationCtrlKey", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["clientInfomationCtrlKey"], "method", false, false, false, 162), ($context["helpText"] ?? null)], 162, $context, $this->getSourceContext());
        yield "

                    ";
        // line 164
        $context["title"] = __("Key for Player Information Screen");
        // line 165
        yield "                    ";
        $context["helpText"] = __("Which key should activate the Player information screen? A single character.");
        // line 166
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["clientInformationKeyCode", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["clientInformationKeyCode"], "method", false, false, false, 166), ($context["helpText"] ?? null)], 166, $context, $this->getSourceContext());
        yield "

                    ";
        // line 168
        $context["title"] = __("Log Level");
        // line 169
        yield "                    ";
        $context["helpText"] = __("The resting logging level that should be recorded by the Player.");
        // line 170
        yield "                    ";
        $context["options"] = [["id" => "emergency", "value" => __("Emergency")], ["id" => "alert", "value" => __("Alert")], ["id" => "critical", "value" => __("Critical")], ["id" => "error", "value" => __("Error")], ["id" => "off", "value" => __("Off")]];
        // line 177
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["logLevel", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["logLevel"], "method", false, false, false, 177), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 177, $context, $this->getSourceContext());
        yield "

                    ";
        // line 179
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Elevate Logging until");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 180
        yield "                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Elevate log level for the specified time. Should only be used if there is a problem with the display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 181
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "isElevatedLogging", [], "method", false, false, false, 181)) {
            // line 182
            yield "                        ";
            $context["elevatedLogs"] = CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getUnmatchedProperty", ["elevateLogsUntilIso"], "method", false, false, false, 182);
            // line 183
            yield "                    ";
        } else {
            // line 184
            yield "                        ";
            $context["elevatedLogs"] = "";
            // line 185
            yield "                    ";
        }
        // line 186
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["elevateLogsUntil", ($context["title"] ?? null), ($context["elevatedLogs"] ?? null), ($context["helpText"] ?? null)], 186, $context, $this->getSourceContext());
        yield "

                    ";
        // line 188
        $context["title"] = __("Log file path name.");
        // line 189
        yield "                    ";
        $context["helpText"] = __("Create a log file on disk in this location. Please enter a fully qualified path.");
        // line 190
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["logToDiskLocation", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["logToDiskLocation"], "method", false, false, false, 190), ($context["helpText"] ?? null)], 190, $context, $this->getSourceContext());
        yield "

                </div>

                <div class=\"tab-pane\" id=\"advanced\">

                    ";
        // line 196
        $context["title"] = __("Show the icon in the task bar?");
        // line 197
        yield "                    ";
        $context["helpText"] = __("Should the application icon be shown in the task bar?");
        // line 198
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["showInTaskbar", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["showInTaskbar"], "method", false, false, false, 198), ($context["helpText"] ?? null)], 198, $context, $this->getSourceContext());
        yield "

                    ";
        // line 200
        $context["title"] = __("Cursor Start Position");
        // line 201
        yield "                    ";
        $context["helpText"] = __("The position of the cursor when the Player starts up.");
        // line 202
        yield "                    ";
        $context["options"] = [["id" => "Unchanged", "value" => __("Unchanged")], ["id" => "Top Left", "value" => __("Top Left")], ["id" => "Top Right", "value" => __("Top Right")], ["id" => "Bottom Left", "value" => __("Bottom Left")], ["id" => "Bottom Right", "value" => __("Bottom Right")]];
        // line 209
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["cursorStartPosition", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["cursorStartPosition"], "method", false, false, false, 209), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 209, $context, $this->getSourceContext());
        yield "

                    ";
        // line 211
        $context["title"] = __("Enable Double Buffering");
        // line 212
        yield "                    ";
        $context["helpText"] = __("Double buffering helps smooth the playback but should be disabled if graphics errors occur");
        // line 213
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["doubleBuffering", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["doubleBuffering"], "method", false, false, false, 213), ($context["helpText"] ?? null)], 213, $context, $this->getSourceContext());
        yield "

                    ";
        // line 215
        $context["title"] = __("Duration for Empty Layouts");
        // line 216
        yield "                    ";
        $context["helpText"] = __("If an empty layout is detected how long (in seconds) should it remain on screen? Must be greater than 1.");
        // line 217
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["emptyLayoutDuration", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["emptyLayoutDuration"], "method", false, false, false, 217), ($context["helpText"] ?? null)], 217, $context, $this->getSourceContext());
        yield "

                    ";
        // line 219
        $context["title"] = __("Enable Mouse");
        // line 220
        yield "                    ";
        $context["helpText"] = __("Enable the mouse.");
        // line 221
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["enableMouse", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["enableMouse"], "method", false, false, false, 221), ($context["helpText"] ?? null)], 221, $context, $this->getSourceContext());
        yield "

                    ";
        // line 223
        $context["title"] = __("Enable Shell Commands");
        // line 224
        yield "                    ";
        $context["helpText"] = __("Enable the Shell Command module.");
        // line 225
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["enableShellCommands", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["enableShellCommands"], "method", false, false, false, 225), ($context["helpText"] ?? null)], 225, $context, $this->getSourceContext());
        yield "

                    ";
        // line 227
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED", 0], "method", false, false, false, 227) == 1)) {
            // line 228
            yield "                        ";
            $context["title"] = __("Notify current layout");
            // line 229
            yield "                        ";
            $context["helpText"] = __("When enabled the Player will send the current layout to the CMS each time it changes. Warning: This is bandwidth intensive and should be disabled unless on a LAN.");
            // line 230
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["sendCurrentLayoutAsStatusUpdate", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["sendCurrentLayoutAsStatusUpdate"], "method", false, false, false, 230), ($context["helpText"] ?? null)], 230, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 232
        yield "
                    ";
        // line 233
        $context["title"] = __("Expire Modified Layouts?");
        // line 234
        yield "                    ";
        $context["helpText"] = __("Expire Modified Layouts immediately on change. This means a layout can be cut during playback if it receives an update from the CMS");
        // line 235
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["expireModifiedLayouts", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["expireModifiedLayouts"], "method", false, false, false, 235), ($context["helpText"] ?? null)], 235, $context, $this->getSourceContext());
        yield "

                    ";
        // line 237
        $context["title"] = __("Maximum concurrent downloads");
        // line 238
        yield "                    ";
        $context["helpText"] = __("The maximum number of concurrent downloads the Player will attempt.");
        // line 239
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["maxConcurrentDownloads", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["maxConcurrentDownloads"], "method", false, false, false, 239), ($context["helpText"] ?? null)], 239, $context, $this->getSourceContext());
        yield "

                    ";
        // line 241
        $context["title"] = __("Shell Command Allow List");
        // line 242
        yield "                    ";
        $context["helpText"] = __("Which shell commands should the Player execute?");
        // line 243
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["shellCommandAllowList", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["shellCommandAllowList"], "method", false, false, false, 243), ($context["helpText"] ?? null)], 243, $context, $this->getSourceContext());
        yield "

                    ";
        // line 245
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", 0], "method", false, false, false, 245) == 1)) {
            // line 246
            yield "                        ";
            $context["title"] = __("Screen shot interval");
            // line 247
            yield "                        ";
            $context["helpText"] = __("The duration between status screen shots in minutes. 0 to disable. Warning: This is bandwidth intensive.");
            // line 248
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_number", ["screenShotRequestInterval", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotRequestInterval"], "method", false, false, false, 248), ($context["helpText"] ?? null)], 248, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 250
        yield "
                    ";
        // line 251
        $context["title"] = __("Screen Shot Size");
        // line 252
        yield "                    ";
        $context["helpText"] = __("The size of the largest dimension. Empty or 0 means the screen size.");
        // line 253
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["screenShotSize", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotSize"], "method", false, false, false, 253), ($context["helpText"] ?? null)], 253, $context, $this->getSourceContext());
        yield "

                    ";
        // line 255
        $context["title"] = __("Limit the number of log files uploaded concurrently");
        // line 256
        yield "                    ";
        $context["helpText"] = __("The number of log files to upload concurrently. The lower the number the longer it will take, but the better for memory usage.");
        // line 257
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["maxLogFileUploads", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["maxLogFileUploads"], "method", false, false, false, 257), ($context["helpText"] ?? null)], 257, $context, $this->getSourceContext());
        yield "

                    ";
        // line 259
        $context["title"] = __("Embedded Web Server Port");
        // line 260
        yield "                    ";
        $context["helpText"] = __("The port number to use for the embedded web server on the Player. Only change this if there is a port conflict reported on the status screen.");
        // line 261
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["embeddedServerPort", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["embeddedServerPort"], "method", false, false, false, 261), ($context["helpText"] ?? null)], 261, $context, $this->getSourceContext());
        yield "

                    ";
        // line 263
        $context["title"] = __("Embedded Web Server allow WAN?");
        // line 264
        yield "                    ";
        $context["helpText"] = __("Should we allow access to the Player Embedded Web Server from WAN? You may need to adjust the device firewall to allow external traffic");
        // line 265
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["embeddedServerAllowWan", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["embeddedServerAllowWan"], "method", false, false, false, 265), ($context["helpText"] ?? null)], 265, $context, $this->getSourceContext());
        yield "

                    ";
        // line 267
        $context["title"] = __("Prevent Sleep?");
        // line 268
        yield "                    ";
        $context["helpText"] = __("Stop the player PC power management from Sleeping the PC");
        // line 269
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["preventSleep", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["preventSleep"], "method", false, false, false, 269), ($context["helpText"] ?? null)], 269, $context, $this->getSourceContext());
        yield "

                </div>

                ";
        // line 273
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["commands"] ?? null)) > 0)) {
            // line 274
            yield "                <div class=\"tab-pane\" id=\"commands\">
                    ";
            // line 275
            yield from             $this->loadTemplate("displayprofile-form-edit-command-fields.twig", "displayprofile-form-edit-windows.twig", 275)->unwrap()->yield($context);
            // line 276
            yield "                </div>
                ";
        }
        // line 278
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
        return "displayprofile-form-edit-windows.twig";
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
        return array (  593 => 278,  589 => 276,  587 => 275,  584 => 274,  582 => 273,  574 => 269,  571 => 268,  569 => 267,  563 => 265,  560 => 264,  558 => 263,  552 => 261,  549 => 260,  547 => 259,  541 => 257,  538 => 256,  536 => 255,  530 => 253,  527 => 252,  525 => 251,  522 => 250,  516 => 248,  513 => 247,  510 => 246,  508 => 245,  502 => 243,  499 => 242,  497 => 241,  491 => 239,  488 => 238,  486 => 237,  480 => 235,  477 => 234,  475 => 233,  472 => 232,  466 => 230,  463 => 229,  460 => 228,  458 => 227,  452 => 225,  449 => 224,  447 => 223,  441 => 221,  438 => 220,  436 => 219,  430 => 217,  427 => 216,  425 => 215,  419 => 213,  416 => 212,  414 => 211,  408 => 209,  405 => 202,  402 => 201,  400 => 200,  394 => 198,  391 => 197,  389 => 196,  379 => 190,  376 => 189,  374 => 188,  368 => 186,  365 => 185,  362 => 184,  359 => 183,  356 => 182,  353 => 181,  347 => 180,  342 => 179,  336 => 177,  333 => 170,  330 => 169,  328 => 168,  322 => 166,  319 => 165,  317 => 164,  311 => 162,  308 => 161,  306 => 160,  296 => 154,  293 => 153,  291 => 152,  285 => 150,  282 => 149,  280 => 148,  274 => 146,  271 => 145,  269 => 144,  263 => 142,  260 => 141,  258 => 140,  249 => 135,  246 => 134,  244 => 133,  238 => 131,  235 => 130,  233 => 129,  227 => 127,  224 => 116,  221 => 115,  219 => 114,  213 => 112,  210 => 111,  208 => 110,  202 => 108,  199 => 107,  197 => 106,  191 => 104,  188 => 103,  186 => 102,  176 => 96,  173 => 95,  171 => 94,  165 => 92,  162 => 91,  160 => 90,  154 => 88,  151 => 83,  148 => 82,  146 => 81,  140 => 79,  137 => 78,  135 => 77,  129 => 75,  126 => 74,  124 => 73,  118 => 71,  115 => 70,  113 => 69,  107 => 67,  104 => 45,  101 => 44,  99 => 43,  94 => 41,  88 => 38,  85 => 37,  79 => 35,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  57 => 29,  52 => 26,  44 => 25,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit-windows.twig", "/var/www/cms/views/displayprofile-form-edit-windows.twig");
    }
}
