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

/* displayprofile-form-edit-android.twig */
class __TwigTemplate_6d208c5421e10596e004e9e7275aea00 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit-android.twig", 23)->unwrap();
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
        $context["title"] = __("Password Protect Settings");
        // line 48
        yield "                    ";
        $context["helpText"] = __("Provide a Password which will be required to access settings");
        // line 49
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["settingsPassword", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["settingsPassword"], "method", false, false, false, 49), ($context["helpText"] ?? null)], 49, $context, $this->getSourceContext());
        yield "

                    ";
        // line 51
        $context["title"] = __("Collect interval");
        // line 52
        yield "                    ";
        $context["helpText"] = __("How often should the Player check for new content.");
        // line 53
        yield "                    ";
        $context["options"] = [["id" => 60, "value" => __("1 minute")], ["id" => 300, "value" => __("5 minutes")], ["id" => 600, "value" => __("10 minutes")], ["id" => 1800, "value" => __("30 minutes")], ["id" => 3600, "value" => __("1 hour")], ["id" => 5400, "value" => __("1 hour 30 minutes")], ["id" => 7200, "value" => __("2 hours")], ["id" => 9000, "value" => __("2 hours 30 minutes")], ["id" => 10800, "value" => __("3 hours")], ["id" => 12600, "value" => __("3 hours 30 minutes")], ["id" => 14400, "value" => __("4 hours")], ["id" => 18000, "value" => __("5 hours")], ["id" => 21600, "value" => __("6 hours")], ["id" => 25200, "value" => __("7 hours")], ["id" => 28800, "value" => __("8 hours")], ["id" => 32400, "value" => __("9 hours")], ["id" => 36000, "value" => __("10 hours")], ["id" => 39600, "value" => __("11 hours")], ["id" => 43200, "value" => __("12 hours")], ["id" => 86400, "value" => __("24 hours")]];
        // line 75
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["collectInterval", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["collectInterval"], "method", false, false, false, 75), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 75, $context, $this->getSourceContext());
        yield "

                    ";
        // line 77
        $context["title"] = __("XMR WebSocket Address");
        // line 78
        yield "                    ";
        $context["helpText"] = __("Override the CMS WebSocket address for XMR.");
        // line 79
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["xmrWebSocketAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["xmrWebSocketAddress"], "method", false, false, false, 79), ($context["helpText"] ?? null)], 79, $context, $this->getSourceContext());
        yield "

                    ";
        // line 81
        $context["title"] = __("XMR Public Address");
        // line 82
        yield "                    ";
        $context["helpText"] = __("Override the CMS public address for XMR.");
        // line 83
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["xmrNetworkAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["xmrNetworkAddress"], "method", false, false, false, 83), ($context["helpText"] ?? null)], 83, $context, $this->getSourceContext());
        yield "

                    ";
        // line 85
        $context["title"] = __("Enable stats reporting?");
        // line 86
        yield "                    ";
        $context["helpText"] = __("Should the application send proof of play stats to the CMS.");
        // line 87
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["statsEnabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["statsEnabled"], "method", false, false, false, 87), ($context["helpText"] ?? null)], 87, $context, $this->getSourceContext());
        yield "

                    ";
        // line 89
        $context["title"] = __("Aggregation level");
        // line 90
        yield "                    ";
        $context["helpText"] = __("Set the level of collection for Proof of Play Statistics to be applied to selected Layouts / Media and Widget items.");
        // line 91
        yield "                    ";
        $context["options"] = [["id" => "Individual", "value" => __("Individual")], ["id" => "Hourly", "value" => __("Hourly")], ["id" => "Daily", "value" => __("Daily")]];
        // line 96
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["aggregationLevel", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["aggregationLevel"], "method", false, false, false, 96), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null), "aggregation-level"], 96, $context, $this->getSourceContext());
        yield "

                    ";
        // line 98
        $context["title"] = __("Record geolocation on each Proof of Play?");
        // line 99
        yield "                    ";
        $context["helpText"] = __("If the geolocation of the Display is known, enable to record that location against each proof of play record.");
        // line 100
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isRecordGeoLocationOnProofOfPlay", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["isRecordGeoLocationOnProofOfPlay"], "method", false, false, false, 100), ($context["helpText"] ?? null)], 100, $context, $this->getSourceContext());
        yield "

                    ";
        // line 102
        $context["title"] = __("Player Version");
        // line 103
        yield "                    ";
        $context["helpText"] = __("Set the Player Version to install, making sure that the selected version is suitable for your device");
        // line 104
        yield "                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "300px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.search")], ["name" => "data-search-term", "value" => "playerShowVersion"], ["name" => "data-id-property", "value" => "versionId"], ["name" => "data-text-property", "value" => "playerShowVersion"], ["name" => "data-filter-options", "value" => "{\"playerType\":\"android\"}"]];
        // line 115
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["versionMediaId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["versionMediaId"], "method", false, false, false, 115), Twig\Extension\CoreExtension::merge([["versionId" => null, "playerShowVersion" => ""]], ($context["versions"] ?? null)), "versionId", "playerShowVersion", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 115, $context, $this->getSourceContext());
        yield "
                </div>

                <div class=\"tab-pane\" id=\"network\">

                    ";
        // line 120
        $context["title"] = __("Download Window Start Time");
        // line 121
        yield "                    ";
        $context["helpText"] = __("The start of the time window to connect to the CMS and download updates.");
        // line 122
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["downloadStartWindow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["downloadStartWindow"], "method", false, false, false, 122), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 122, $context, $this->getSourceContext());
        yield "

                    ";
        // line 124
        $context["title"] = __("Download Window End Time");
        // line 125
        yield "                    ";
        $context["helpText"] = __("The end of the time window to connect to the CMS and download updates.");
        // line 126
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["downloadEndWindow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["downloadEndWindow"], "method", false, false, false, 126), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 126, $context, $this->getSourceContext());
        yield "

                    ";
        // line 128
        $context["title"] = __("Update Window Start Time");
        // line 129
        yield "                    ";
        $context["helpText"] = __("The start of the time window to install application updates.");
        // line 130
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["updateStartWindow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["updateStartWindow"], "method", false, false, false, 130), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 130, $context, $this->getSourceContext());
        yield "

                    ";
        // line 132
        $context["title"] = __("Update Window End Time");
        // line 133
        yield "                    ";
        $context["helpText"] = __("The end of the time window to install application updates.");
        // line 134
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["updateEndWindow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["updateEndWindow"], "method", false, false, false, 134), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 134, $context, $this->getSourceContext());
        yield "

                    ";
        // line 136
        $context["title"] = __("Force HTTPS?");
        // line 137
        yield "                    ";
        $context["helpText"] = __("Should Displays be forced to use HTTPS connection to the CMS?");
        // line 138
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["forceHttps", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["forceHttps"], "method", false, false, false, 138), ($context["helpText"] ?? null)], 138, $context, $this->getSourceContext());
        yield "

                    ";
        // line 140
        $context["title"] = __("Operating Hours");
        // line 141
        yield "                    ";
        $context["helpText"] = __("Select a day part that should act as operating hours for this display -  email alerts will not be sent outside of operating hours");
        // line 142
        yield "                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "300px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.search")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "dayPartId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-filter-options", "value" => "{\"isAlways\":\"0\", \"isCustom\":\"0\"}"]];
        // line 153
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dayPartId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["dayPartId"], "method", false, false, false, 153), Twig\Extension\CoreExtension::merge([["dayPartId" => null, "name" => ""]], ($context["dayParts"] ?? null)), "dayPartId", "name", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 153, $context, $this->getSourceContext());
        yield "

                    ";
        // line 155
        $context["title"] = __("Restart Wifi on connection failure?");
        // line 156
        yield "                    ";
        $context["helpText"] = __("If an attempted connection to the CMS fails 10 times in a row, restart the Wifi adaptor.");
        // line 157
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["restartWifiOnConnectionFailure", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["restartWifiOnConnectionFailure"], "method", false, false, false, 157), ($context["helpText"] ?? null)], 157, $context, $this->getSourceContext());
        yield "
                </div>

                <div class=\"tab-pane\" id=\"location\">

                    ";
        // line 162
        $context["title"] = __("Orientation");
        // line 163
        yield "                    ";
        $context["helpText"] = __("Set the orientation of the device (portrait mode will only work if supported by the hardware) Application Restart Required.");
        // line 164
        yield "                    ";
        $context["options"] = [["id" =>  -1, "value" => __("Device Default")], ["id" => 0, "value" => __("Landscape")], ["id" => 1, "value" => __("Portrait")], ["id" => 8, "value" => __("Reverse Landscape")], ["id" => 9, "value" => __("Reverse Portrait")]];
        // line 171
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["orientation"], "method", false, false, false, 171), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 171, $context, $this->getSourceContext());
        yield "

                    ";
        // line 173
        $context["title"] = __("Screen Dimensions");
        // line 174
        yield "                    ";
        $context["helpText"] = __("Set dimensions to be used for the Player window ensuring that they do not exceed the actual screen size. Enter the following values representing the pixel sizings for; Top,Left,Width,Height. This requires a Player Restart to action.");
        // line 175
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["screenDimensions", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenDimensions"], "method", false, false, false, 175), ($context["helpText"] ?? null)], 175, $context, $this->getSourceContext());
        yield "

                </div>

                <div class=\"tab-pane\" id=\"troubleshooting\">

                    ";
        // line 181
        $context["title"] = __("Blacklist Videos?");
        // line 182
        yield "                    ";
        $context["helpText"] = __("Should Videos we fail to play be blacklisted and no longer attempted?");
        // line 183
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["blacklistVideo", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["blacklistVideo"], "method", false, false, false, 183), ($context["helpText"] ?? null)], 183, $context, $this->getSourceContext());
        yield "

                    ";
        // line 185
        $context["title"] = __("Store HTML resources on the Internal Storage?");
        // line 186
        yield "                    ";
        $context["helpText"] = __("Store all HTML resources on the Internal Storage? Should be selected if the device cannot display text, ticker, dataset media.");
        // line 187
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["storeHtmlOnInternal", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["storeHtmlOnInternal"], "method", false, false, false, 187), ($context["helpText"] ?? null)], 187, $context, $this->getSourceContext());
        yield "

                    ";
        // line 189
        $context["title"] = __("Use a SurfaceView for Video Rendering?");
        // line 190
        yield "                    ";
        $context["helpText"] = __("If the device is having trouble playing video, it may be useful to switch to a Surface View for Video Rendering.");
        // line 191
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["useSurfaceVideoView", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["useSurfaceVideoView"], "method", false, false, false, 191), ($context["helpText"] ?? null)], 191, $context, $this->getSourceContext());
        yield "

                    ";
        // line 193
        $context["title"] = __("Log Level");
        // line 194
        yield "                    ";
        $context["helpText"] = __("The resting logging level that should be recorded by the Player.");
        // line 195
        yield "                    ";
        $context["options"] = [["id" => "emergency", "value" => __("Emergency")], ["id" => "alert", "value" => __("Alert")], ["id" => "critical", "value" => __("Critical")], ["id" => "error", "value" => __("Error")], ["id" => "off", "value" => __("Off")]];
        // line 202
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["logLevel", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["logLevel"], "method", false, false, false, 202), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 202, $context, $this->getSourceContext());
        yield "

                    ";
        // line 204
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Elevate Logging until");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 205
        yield "                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Elevate log level for the specified time. Should only be used if there is a problem with the display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 206
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "isElevatedLogging", [], "method", false, false, false, 206)) {
            // line 207
            yield "                        ";
            $context["elevatedLogs"] = CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getUnmatchedProperty", ["elevateLogsUntilIso"], "method", false, false, false, 207);
            // line 208
            yield "                    ";
        } else {
            // line 209
            yield "                        ";
            $context["elevatedLogs"] = "";
            // line 210
            yield "                    ";
        }
        // line 211
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["elevateLogsUntil", ($context["title"] ?? null), ($context["elevatedLogs"] ?? null), ($context["helpText"] ?? null)], 211, $context, $this->getSourceContext());
        yield "

                </div>

                <div class=\"tab-pane\" id=\"advanced\">

                    ";
        // line 217
        $context["title"] = __("Start during device start up?");
        // line 218
        yield "                    ";
        $context["helpText"] = __("When the device starts and Android finishes loading, should the Player start up and come to the foreground?");
        // line 219
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["startOnBoot", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["startOnBoot"], "method", false, false, false, 219), ($context["helpText"] ?? null)], 219, $context, $this->getSourceContext());
        yield "

                    ";
        // line 221
        $context["title"] = __("Action Bar Mode");
        // line 222
        yield "                    ";
        $context["helpText"] = __("How should the action bar behave?");
        // line 223
        yield "                    ";
        $context["options"] = [["id" => 0, "value" => __("Hide")], ["id" => 1, "value" => __("Timed")], ["id" => 2, "value" => __("Run Intent")]];
        // line 228
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["actionBarMode", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["actionBarMode"], "method", false, false, false, 228), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 228, $context, $this->getSourceContext());
        yield "

                    ";
        // line 230
        $context["title"] = __("Action Bar Display Duration");
        // line 231
        yield "                    ";
        $context["helpText"] = __("How long should the Action Bar be shown for, in seconds?");
        // line 232
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["actionBarDisplayDuration", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["actionBarDisplayDuration"], "method", false, false, false, 232), ($context["helpText"] ?? null)], 232, $context, $this->getSourceContext());
        yield "

                    ";
        // line 234
        $context["title"] = __("Action Bar Intent");
        // line 235
        yield "                    ";
        $context["helpText"] = __("When set to Run Intent, which intent should be run. Format is: Action|ExtraKey,ExtraMsg");
        // line 236
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["actionBarIntent", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["actionBarIntent"], "method", false, false, false, 236), ($context["helpText"] ?? null)], 236, $context, $this->getSourceContext());
        yield "

                    ";
        // line 238
        $context["title"] = __("Automatic Restart");
        // line 239
        yield "                    ";
        $context["helpText"] = __("Automatically Restart the application if we detect it is not visible.");
        // line 240
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["autoRestart", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["autoRestart"], "method", false, false, false, 240), ($context["helpText"] ?? null)], 240, $context, $this->getSourceContext());
        yield "

                    ";
        // line 242
        $context["title"] = __("Start delay for device start up");
        // line 243
        yield "                    ";
        $context["helpText"] = __("The number of seconds to wait before starting the application after the device has started. Minimum 10.");
        // line 244
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["startOnBootDelay", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["startOnBootDelay"], "method", false, false, false, 244), ($context["helpText"] ?? null)], 244, $context, $this->getSourceContext());
        yield "

                    ";
        // line 246
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED", 0], "method", false, false, false, 246) == 1)) {
            // line 247
            yield "                        ";
            $context["title"] = __("Notify current layout");
            // line 248
            yield "                        ";
            $context["helpText"] = __("When enabled the Player will send the current layout to the CMS each time it changes. Warning: This is bandwidth intensive and should be disabled unless on a LAN.");
            // line 249
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["sendCurrentLayoutAsStatusUpdate", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["sendCurrentLayoutAsStatusUpdate"], "method", false, false, false, 249), ($context["helpText"] ?? null)], 249, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 251
        yield "
                    ";
        // line 252
        $context["title"] = __("Expire Modified Layouts?");
        // line 253
        yield "                    ";
        $context["helpText"] = __("Expire Modified Layouts immediately on change. This means a layout can be cut during playback if it receives an update from the CMS");
        // line 254
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["expireModifiedLayouts", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["expireModifiedLayouts"], "method", false, false, false, 254), ($context["helpText"] ?? null)], 254, $context, $this->getSourceContext());
        yield "

                    ";
        // line 256
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", 0], "method", false, false, false, 256) == 1)) {
            // line 257
            yield "                        ";
            $context["title"] = __("Screen shot interval");
            // line 258
            yield "                        ";
            $context["helpText"] = __("The duration between status screen shots in minutes. 0 to disable. Warning: This is bandwidth intensive.");
            // line 259
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_number", ["screenShotRequestInterval", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotRequestInterval"], "method", false, false, false, 259), ($context["helpText"] ?? null)], 259, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 261
        yield "
                    ";
        // line 262
        $context["title"] = __("Action for Screen Shot Intent");
        // line 263
        yield "                    ";
        $context["helpText"] = __("The Intent Action to use for requesting a screen shot. Leave empty to natively create an image from the player screen content.");
        // line 264
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["screenShotIntent", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotIntent"], "method", false, false, false, 264), ($context["helpText"] ?? null)], 264, $context, $this->getSourceContext());
        yield "

                    ";
        // line 266
        $context["title"] = __("Screen Shot Size");
        // line 267
        yield "                    ";
        $context["helpText"] = __("The size of the largest dimension. Empty or 0 means the screen size.");
        // line 268
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["screenShotSize", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotSize"], "method", false, false, false, 268), ($context["helpText"] ?? null)], 268, $context, $this->getSourceContext());
        yield "

                    ";
        // line 270
        $context["title"] = __("WebView Plugin State");
        // line 271
        yield "                    ";
        $context["helpText"] = __("What plugin state should be used when starting a web view.");
        // line 272
        yield "                    ";
        $context["options"] = [["id" => "OFF", "value" => __("Off")], ["id" => "DEMAND", "value" => __("On Demand")], ["id" => "ON", "value" => __("On")]];
        // line 277
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["webViewPluginState", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["webViewPluginState"], "method", false, false, false, 277), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 277, $context, $this->getSourceContext());
        yield "

                    ";
        // line 279
        $context["title"] = __("Hardware Accelerate Web Content");
        // line 280
        yield "                    ";
        $context["helpText"] = __("Mode for hardware acceleration of web based content.");
        // line 281
        yield "                    ";
        $context["options"] = [["id" => "0", "value" => __("Off")], ["id" => "2", "value" => __("Off when transparent")], ["id" => "1", "value" => __("On")]];
        // line 286
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["hardwareAccelerateWebViewMode", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["hardwareAccelerateWebViewMode"], "method", false, false, false, 286), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 286, $context, $this->getSourceContext());
        yield "

                    ";
        // line 288
        $context["title"] = __("Use CMS time?");
        // line 289
        yield "                    ";
        $context["helpText"] = __("Set the device time using the CMS. Only available on rooted devices or system signed players.");
        // line 290
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["timeSyncFromCms", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["timeSyncFromCms"], "method", false, false, false, 290), ($context["helpText"] ?? null)], 290, $context, $this->getSourceContext());
        yield "

                    ";
        // line 292
        $context["title"] = __("Enable caching of Web Resources?");
        // line 293
        yield "                    ";
        $context["helpText"] = __("The standard browser cache will be used - we recommend this is switched off unless specifically required. Effects Web Page and Embedded.");
        // line 294
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["webCacheEnabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["webCacheEnabled"], "method", false, false, false, 294), ($context["helpText"] ?? null)], 294, $context, $this->getSourceContext());
        yield "

                    ";
        // line 296
        $context["title"] = __("Embedded Web Server Port");
        // line 297
        yield "                    ";
        $context["helpText"] = __("The port number to use for the embedded web server on the Player. Only change this if there is a port conflict reported on the status screen.");
        // line 298
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["serverPort", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["serverPort"], "method", false, false, false, 298), ($context["helpText"] ?? null)], 298, $context, $this->getSourceContext());
        yield "

                    ";
        // line 300
        $context["title"] = __("Embedded Web Server allow WAN?");
        // line 301
        yield "                    ";
        $context["helpText"] = __("Should we allow access to the Player Embedded Web Server from WAN? You may need to adjust the device firewall to allow external traffic");
        // line 302
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["embeddedServerAllowWan", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["embeddedServerAllowWan"], "method", false, false, false, 302), ($context["helpText"] ?? null)], 302, $context, $this->getSourceContext());
        yield "

                    ";
        // line 304
        $context["title"] = __("Load Link Libraries for APK Update");
        // line 305
        yield "                    ";
        $context["helpText"] = __("Should the update command include dynamic link libraries? Only change this if your updates are failing.");
        // line 306
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["installWithLoadedLinkLibraries", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["installWithLoadedLinkLibraries"], "method", false, false, false, 306), ($context["helpText"] ?? null)], 306, $context, $this->getSourceContext());
        yield "

                    ";
        // line 308
        $context["title"] = __("Use Multiple Video Decoders");
        // line 309
        yield "                    ";
        $context["helpText"] = __("Should the Player try to use Multiple Video Decoders when preparing and showing Video content.");
        // line 310
        yield "                    ";
        $context["options"] = [["id" => "default", "value" => __("Device Default")], ["id" => "on", "value" => __("On")], ["id" => "off", "value" => __("Off")]];
        // line 315
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["isUseMultipleVideoDecoders", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["isUseMultipleVideoDecoders"], "method", false, false, false, 315), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 315, $context, $this->getSourceContext());
        yield "

                    ";
        // line 317
        $context["title"] = __("Maximum Region Count");
        // line 318
        yield "                    ";
        $context["helpText"] = __("This setting is a memory limit protection setting which will stop rendering regions beyond the limit set. Leave at 0 for no limit.");
        // line 319
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["maxRegionCount", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["maxRegionCount"], "method", false, false, false, 319), ($context["helpText"] ?? null)], 319, $context, $this->getSourceContext());
        yield "

                    ";
        // line 321
        $context["title"] = __("Video Engine");
        // line 322
        yield "                    ";
        $context["helpText"] = __("Select which video engine should be used to playback video. ExoPlayer is usually better, but if you experience issues you can revert back to Android Media Player. HLS always uses ExoPlayer. Available from v3 R300.");
        // line 323
        yield "                    ";
        $context["options"] = [["id" => "default", "value" => __("Device Default")], ["id" => "exoplayer", "value" => __("ExoPlayer")], ["id" => "mediaplayer", "value" => __("Android Media Player")]];
        // line 328
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["videoEngine", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["videoEngine"], "method", false, false, false, 328), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 328, $context, $this->getSourceContext());
        yield "

                    ";
        // line 330
        $context["title"] = __("Enable touch capabilities on the device?");
        // line 331
        yield "                    ";
        $context["helpText"] = __("If this device will be used as a touch screen check this option. Checking this option will cause a message to appear on the player which needs to be manually dismissed once. If this option is disabled, touching the screen will show the action bar according to the Action Bar Mode option. Available from v3 R300.");
        // line 332
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isTouchEnabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["isTouchEnabled"], "method", false, false, false, 332), ($context["helpText"] ?? null)], 332, $context, $this->getSourceContext());
        yield "
                </div>

                ";
        // line 335
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["commands"] ?? null)) > 0)) {
            // line 336
            yield "                <div class=\"tab-pane\" id=\"commands\">
                    ";
            // line 337
            yield from             $this->loadTemplate("displayprofile-form-edit-command-fields.twig", "displayprofile-form-edit-android.twig", 337)->unwrap()->yield($context);
            // line 338
            yield "                </div>
                ";
        }
        // line 340
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
        return "displayprofile-form-edit-android.twig";
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
        return array (  686 => 340,  682 => 338,  680 => 337,  677 => 336,  675 => 335,  668 => 332,  665 => 331,  663 => 330,  657 => 328,  654 => 323,  651 => 322,  649 => 321,  643 => 319,  640 => 318,  638 => 317,  632 => 315,  629 => 310,  626 => 309,  624 => 308,  618 => 306,  615 => 305,  613 => 304,  607 => 302,  604 => 301,  602 => 300,  596 => 298,  593 => 297,  591 => 296,  585 => 294,  582 => 293,  580 => 292,  574 => 290,  571 => 289,  569 => 288,  563 => 286,  560 => 281,  557 => 280,  555 => 279,  549 => 277,  546 => 272,  543 => 271,  541 => 270,  535 => 268,  532 => 267,  530 => 266,  524 => 264,  521 => 263,  519 => 262,  516 => 261,  510 => 259,  507 => 258,  504 => 257,  502 => 256,  496 => 254,  493 => 253,  491 => 252,  488 => 251,  482 => 249,  479 => 248,  476 => 247,  474 => 246,  468 => 244,  465 => 243,  463 => 242,  457 => 240,  454 => 239,  452 => 238,  446 => 236,  443 => 235,  441 => 234,  435 => 232,  432 => 231,  430 => 230,  424 => 228,  421 => 223,  418 => 222,  416 => 221,  410 => 219,  407 => 218,  405 => 217,  395 => 211,  392 => 210,  389 => 209,  386 => 208,  383 => 207,  380 => 206,  374 => 205,  369 => 204,  363 => 202,  360 => 195,  357 => 194,  355 => 193,  349 => 191,  346 => 190,  344 => 189,  338 => 187,  335 => 186,  333 => 185,  327 => 183,  324 => 182,  322 => 181,  312 => 175,  309 => 174,  307 => 173,  301 => 171,  298 => 164,  295 => 163,  293 => 162,  284 => 157,  281 => 156,  279 => 155,  273 => 153,  270 => 142,  267 => 141,  265 => 140,  259 => 138,  256 => 137,  254 => 136,  248 => 134,  245 => 133,  243 => 132,  237 => 130,  234 => 129,  232 => 128,  226 => 126,  223 => 125,  221 => 124,  215 => 122,  212 => 121,  210 => 120,  201 => 115,  198 => 104,  195 => 103,  193 => 102,  187 => 100,  184 => 99,  182 => 98,  176 => 96,  173 => 91,  170 => 90,  168 => 89,  162 => 87,  159 => 86,  157 => 85,  151 => 83,  148 => 82,  146 => 81,  140 => 79,  137 => 78,  135 => 77,  129 => 75,  126 => 53,  123 => 52,  121 => 51,  115 => 49,  112 => 48,  110 => 47,  104 => 45,  101 => 44,  99 => 43,  94 => 41,  88 => 38,  85 => 37,  79 => 35,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  57 => 29,  52 => 26,  44 => 25,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit-android.twig", "/var/www/cms/views/displayprofile-form-edit-android.twig");
    }
}
