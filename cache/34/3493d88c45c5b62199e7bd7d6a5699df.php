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

/* schedule-form-add.twig */
class __TwigTemplate_0758113c6dcc787c7862bdf31cba9bfb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'callBack' => [$this, 'block_callBack'],
            'formButtons' => [$this, 'block_formButtons'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-form-add.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "schedule-form-add.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Schedule Event");
        return; yield '';
    }

    // line 30
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "setupScheduleForm";
        return; yield '';
    }

    // line 32
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 34
        if ( !($context["isScheduleNow"] ?? null)) {
            // line 35
            yield "        ";
            echo __("Next");
            yield ", XiboDialogApply(\"#scheduleAddForm\")
    ";
        }
        // line 37
        yield "    ";
        echo __("Save");
        yield ", beforeSubmitScheduleForm(\$(\"#scheduleAddForm\"))
";
        return; yield '';
    }

    // line 40
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item repeats\"><a class=\"nav-link\" href=\"#repeats\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Repeats");
        yield "</span></a></li>
                <li class=\"nav-item reminders\"><a class=\"nav-link\" href=\"#reminders\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("Reminder");
        yield "</span></a></li>
                <li class=\"nav-item geoSchedule\"><a class=\"nav-link\" href=\"#geoSchedule\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 47
        echo __("Geo Location");
        yield "</span></a></li>
                <li class=\"nav-item criteria\"><a class=\"nav-link\" href=\"#tab-criteria\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 48
        echo __("Criteria");
        yield "</span></a></li>
            </ul>
            ";
        // line 50
        $context["dayPartMessage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the start time for this event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "            ";
        $context["notDayPartMessage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Start and end time will be defined by the daypart's configuration for this day of the week. Use a repeating schedule to apply this event over multiple days");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "            <form id=\"scheduleAddForm\" autocomplete=\"off\" class=\"form-horizontal\" method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add"), "html", null, true);
        yield "\"
                  data-daypart-message=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dayPartMessage"] ?? null), "html", null, true);
        yield "\"
                  data-not-daypart-message=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["notDayPartMessage"] ?? null), "html", null, true);
        yield "\"
                  data-default-lat=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defaultLat"] ?? null), "html", null, true);
        yield "\"
                  data-default-long = \"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defaultLong"] ?? null), "html", null, true);
        yield "\"
                  data-library-get-url=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        yield "?fullScreenScheduleCheck=true&types[]=image&types[]=video\"
                  data-playlist-get-url=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search"), "html", null, true);
        yield "?fullScreenScheduleCheck=true\"
                  data-set-displays-from-grid-filters=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["setDisplaysFromFilter"] ?? null), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 62
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optional Name for this Event (1-50 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 64, $context, $this->getSourceContext());
        yield "
                        
                        ";
        // line 66
        if (($context["isScheduleNow"] ?? null)) {
            // line 67
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["eventTypeId", ($context["eventTypeId"] ?? null)], 67, $context, $this->getSourceContext());
            yield "
                        ";
        } else {
            // line 69
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Event Type");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 70
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select the type of event to schedule");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 71
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["eventTypeId", "single", ($context["title"] ?? null), "", ($context["eventTypes"] ?? null), "eventTypeId", "eventTypeName", ($context["helpText"] ?? null)], 71, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 73
        yield "

                        ";
        // line 75
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select one or more displays / groups for this event to be shown on.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        yield "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-trans-groups", "value" => __("Groups")], ["name" => "data-trans-display", "value" => __("Display")], ["name" => "data-initial-key", "value" => "displayGroupIds[]"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"]];
        // line 85
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["displayGroupIds[]", "dropdownmulti", ($context["title"] ?? null), ($context["displayGroupIds"] ?? null), ($context["displayGroups"] ?? null), "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "", "", "", "", ($context["attributes"] ?? null)], 85, $context, $this->getSourceContext());
        yield "

                        ";
        // line 87
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Dayparting");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the dayparting information for this event. To set your own times select custom and to have the event run constantly select Always.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        yield "                        <div class=\"form-group row day-part-control\">
                            <label class=\"col-sm-2 control-label\" for=\"dayPartId\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-10\">
                                <select class=\"form-control\" name=\"dayPartId\" id=\"dayPartId\">
                                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dayParts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dayPart"]) {
            // line 94
            yield "                                        <option ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "isCustom", [], "any", false, false, false, 94) == 1)) {
                yield "selected";
            }
            // line 95
            yield "                                                value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "dayPartId", [], "any", false, false, false, 95), "html", null, true);
            yield "\"
                                                data-is-always=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "isAlways", [], "any", false, false, false, 96), "html", null, true);
            yield "\"
                                                data-is-custom=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "isCustom", [], "any", false, false, false, 97), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "name", [], "any", false, false, false, 97), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayPart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "                                </select>
                                <small class=\"form-text text-muted\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</small>
                            </div>
                        </div>

                        ";
        // line 104
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use Relative time?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Switch between relative time inputs and Date pickers for start and end time.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["relativeTime", ($context["title"] ?? null), ($context["relativeTime"] ?? null), ($context["helpText"] ?? null), "relative-time-checkbox"], 106, $context, $this->getSourceContext());
        yield "

                        ";
        // line 108
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hours");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hours this event should be scheduled for");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 110
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["hours", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "duration-part relative-time-control"], 110, $context, $this->getSourceContext());
        yield "

                        ";
        // line 112
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Minutes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Minutes this event should be scheduled for");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["minutes", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "duration-part relative-time-control"], 114, $context, $this->getSourceContext());
        yield "

                        ";
        // line 116
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Seconds");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Seconds this event should be scheduled for");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["seconds", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "schedule-now-seconds-field duration-part relative-time-control"], 118, $context, $this->getSourceContext());
        yield "

                        ";
        // line 120
        $context["messageNoSyncTimezone"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Your event will be scheduled from [fromDt] to [toDt] in each of your selected Displays respective timezones");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        yield "                        ";
        $context["messageSyncTimezone"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Your event will be scheduled from [fromDt] to [toDt] in the CMS timezone, please check this covers each of your Displays in their respective timezones.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        yield "                        <div class=\"alert alert-info scheduleNowMessage d-none relative-time-control\" data-template-sync=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["messageSyncTimezone"] ?? null), "html", null, true);
        yield "\" data-template-no-sync=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["messageNoSyncTimezone"] ?? null), "html", null, true);
        yield "\"></div>

                        ";
        // line 124
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Start Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the start time for this event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["fromDt", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "starttime-control", "required"], 126, $context, $this->getSourceContext());
        yield "

                        ";
        // line 128
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("End Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the end time for this event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["toDt", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "endtime-control", "required"], 130, $context, $this->getSourceContext());
        yield "

                        ";
        // line 133
        yield "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search") . "?type=list")], ["name" => "data-search-is-layout-specific", "value" =>  -1], ["name" => "data-trans-layout", "value" => __("Layout")], ["name" => "data-trans-layout-help-text", "value" => __("Please select a Layout for this Event to show")], ["name" => "data-trans-campaign", "value" => __("Campaign")], ["name" => "data-trans-campaign-help-text", "value" => __("Please select a Campaign for this Event to show")]];
        // line 141
        yield "
                        ";
        // line 142
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a Layout for this Event to show");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["campaignId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaignId", [], "any", false, false, false, 144), [($context["campaign"] ?? null)], "campaignId", "campaign", ($context["helpText"] ?? null), "layout-control", "", "", "", ($context["attributes"] ?? null), "", "", "", ($context["readonlySelect"] ?? null)], 144, $context, $this->getSourceContext());
        yield "

                        ";
        // line 146
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Media");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 147
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select a Media file from the Library to use. The selected file will be shown full screen for this event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 148
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_inputFullScreenSchedule", ["media", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "media-control full-screen-control", ($context["mediaId"] ?? null), "", "", ($context["readonlySelect"] ?? null)], 148, $context, $this->getSourceContext());
        yield "

                        ";
        // line 150
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Playlist");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select a Playlist to use. The selected playlist will be shown full screen for this event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 152
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_inputFullScreenSchedule", ["playlist", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "playlist-control full-screen-control", ($context["playlistId"] ?? null), "", "", ($context["readonlySelect"] ?? null)], 152, $context, $this->getSourceContext());
        yield "
                        ";
        // line 153
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["fullScreenCampaignId"], 153, $context, $this->getSourceContext());
        yield "

                        <div style=\"";
        // line 155
        if ( !(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["campaign.view"], "method", false, false, false, 155) || CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 155))) {
            yield "display: none;";
        }
        yield "\">
                            <div class=\"form-group row preview-button-container\">
                                <div class=\"offset-md-2 col-md-10\">
                                    <a id=\"previewButton\" class=\"btn btn-success\" target=\"_blank\" data-url=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.preview", ["id" => ":id"]), "html", null, true);
        yield "\">";
        echo __("Preview");
        yield " <span class=\"fa fa-tablet\"></span></a>
                                    <small class=\"form-text text-muted\">";
        // line 159
        echo __("Preview your selection in a new tab");
        yield "</small>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group row interrupt-control\" style=\"display: flex;\">
                            <label class=\"col-sm-2 control-label\" for=\"shareOfVoice\" accesskey=\"\">";
        // line 165
        echo __("Share of Voice");
        yield "</label>
                            <div class=\"col-sm-5\">
                                <input class=\"form-control\" name=\"shareOfVoice\" type=\"number\" id=\"shareOfVoice\" value=\"0\" min=\"0\" max=\"3600\" step=\"1\">
                                <small class=\"form-text text-muted\">";
        // line 168
        echo __("The amount of time this Layout should be shown, in seconds per hour.");
        yield "</small>
                            </div>

                            <div class=\"col-sm-5\">
                                <input class=\"form-control\" name=\"shareOfVoicePercentage\" type=\"number\" id=\"shareOfVoicePercentage\" value=\"\">
                                <small class=\"form-text text-muted\">";
        // line 173
        echo __("As a percentage");
        yield "</small>
                            </div>
                        </div>

                        ";
        // line 177
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Action Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 178
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select action Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 179
        yield "                        ";
        $context["navLayout"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Navigate to Layout");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 180
        yield "                        ";
        $context["command"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Command");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 181
        yield "                        ";
        $context["options"] = [["typeid" => "navLayout", "type" =>         // line 182
($context["navLayout"] ?? null)], ["typeid" => "command", "type" =>         // line 183
($context["command"] ?? null)]];
        // line 185
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["actionType", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null), "action-control"], 185, $context, $this->getSourceContext());
        yield "

                        ";
        // line 187
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Trigger Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Web hook trigger code for this Action");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 189
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["actionTriggerCode", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "action-control"], 189, $context, $this->getSourceContext());
        yield "

                        ";
        // line 191
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 192
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select the Code identifier for the Layout that Player should navigate to when this Action is triggered.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 193
        yield "
                        ";
        // line 194
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.code.search")], ["name" => "data-search-term", "value" => "code"], ["name" => "data-id-property", "value" => "code"], ["name" => "data-text-property", "value" => "code"]];
        // line 201
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["actionLayoutCode", "single", ($context["title"] ?? null), "", null, "code", "code", ($context["helpText"] ?? null), "pagedSelect action-control layout-code-control", "", "", "", ($context["attributes"] ?? null)], 201, $context, $this->getSourceContext());
        yield "

                        ";
        // line 203
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Command");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 204
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a command for this Event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 205
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.search")], ["name" => "data-search-term", "value" => "command"], ["name" => "data-id-property", "value" => "commandId"], ["name" => "data-text-property", "value" => "command"]];
        // line 212
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["commandId", "single", ($context["title"] ?? null), "", null, "commandId", "command", ($context["helpText"] ?? null), "pagedSelect command-control", "", "", "", ($context["attributes"] ?? null)], 212, $context, $this->getSourceContext());
        yield "

                        ";
        // line 214
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("DataSet");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 215
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select the real time DataSet related to this Data Connector event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 216
        yield "
                        ";
        // line 217
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.search") . "?isRealTime=1")], ["name" => "data-search-term", "value" => "dataSet"], ["name" => "data-id-property", "value" => "dataSetId"], ["name" => "data-text-property", "value" => "dataSet"]];
        // line 224
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dataSetId", "single", ($context["title"] ?? null), "", null, "dataSetId", "dataSet", ($context["helpText"] ?? null), "pagedSelect data-connector-control", "", "", "", ($context["attributes"] ?? null)], 224, $context, $this->getSourceContext());
        yield "

                        ";
        // line 226
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Data Connector Parameters");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 227
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally provide any parameters to be used by the Data Connector.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 228
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["dataSetParams", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "data-connector-control"], 228, $context, $this->getSourceContext());
        yield "

                        ";
        // line 230
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Order");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 231
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select the order this event should appear in relation to others when there is more than one event scheduled");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 232
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["displayOrder", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "displayOrder-control", "", "", "", "0"], 232, $context, $this->getSourceContext());
        yield "

                        ";
        // line 234
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Priority");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 235
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sets the event priority - events with the highest priority play in preference to lower priority events.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 236
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["isPriority", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "priority-control", "", "", "", "0"], 236, $context, $this->getSourceContext());
        yield "

                        ";
        // line 238
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Maximum plays per hour");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 239
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Limit the number of times this event will play per hour on each display. For unlimited plays set to 0.");
            yield CoreExtension::callMacro($macros["forms"], "macro_playerCompat", ["R308", "", "", "", "R306", ""], 239, $context, $this->getSourceContext());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 240
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["maxPlaysPerHour", ($context["title"] ?? null), 0, ($context["helpText"] ?? null), "max-plays-control", "", "", "", "0"], 240, $context, $this->getSourceContext());
        yield "

                        ";
        // line 242
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Run at CMS Time?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 243
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When selected, your event will run according to the timezone set on the CMS, otherwise the event will run at Display local time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 244
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["syncTimezone", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 244, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"repeats\">
                        ";
        // line 248
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Repeats");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 249
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the type of Repeat required for this Event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 250
        yield "                        ";
        $context["noneOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("None");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 251
        yield "                        ";
        $context["minute"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Per Minute");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 252
        yield "                        ";
        $context["hourly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hourly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 253
        yield "                        ";
        $context["daily"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Daily");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 254
        yield "                        ";
        $context["weekly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Weekly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 255
        yield "                        ";
        $context["monthly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monthly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 256
        yield "                        ";
        $context["yearly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yearly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 257
        yield "                        ";
        $context["options"] = [["id" => "", "name" =>         // line 258
($context["noneOption"] ?? null)], ["id" => "Minute", "name" =>         // line 259
($context["minute"] ?? null)], ["id" => "Hour", "name" =>         // line 260
($context["hourly"] ?? null)], ["id" => "Day", "name" =>         // line 261
($context["daily"] ?? null)], ["id" => "Week", "name" =>         // line 262
($context["weekly"] ?? null)], ["id" => "Month", "name" =>         // line 263
($context["monthly"] ?? null)], ["id" => "Year", "name" =>         // line 264
($context["yearly"] ?? null)]];
        // line 266
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["recurrenceType", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null)], 266, $context, $this->getSourceContext());
        yield "

                        ";
        // line 268
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use the drop-down to select which days of the week this Event should be repeated.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 269
        yield "                        ";
        $context["monday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 270
        yield "                        ";
        $context["tuesday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tuesday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 271
        yield "                        ";
        $context["wednesday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Wednesday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 272
        yield "                        ";
        $context["thursday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Thursday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 273
        yield "                        ";
        $context["friday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Friday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 274
        yield "                        ";
        $context["saturday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Saturday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 275
        yield "                        ";
        $context["sunday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sunday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 276
        yield "                        ";
        $context["options"] = [["id" => 1, "name" =>         // line 277
($context["monday"] ?? null)], ["id" => 2, "name" =>         // line 278
($context["tuesday"] ?? null)], ["id" => 3, "name" =>         // line 279
($context["wednesday"] ?? null)], ["id" => 4, "name" =>         // line 280
($context["thursday"] ?? null)], ["id" => 5, "name" =>         // line 281
($context["friday"] ?? null)], ["id" => 6, "name" =>         // line 282
($context["saturday"] ?? null)], ["id" => 7, "name" =>         // line 283
($context["sunday"] ?? null)]];
        // line 285
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["recurrenceRepeatsOn[]", "dropdownmulti", "", "", ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null), "repeat-weekly-control-group"], 285, $context, $this->getSourceContext());
        yield "

                        ";
        // line 287
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this Event Repeat by Day of the month (eg. Monthly on Day 21) or by a Weekday in the month (eg. Monthly on the third Thursday).");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 288
        yield "                        ";
        $context["attributes"] = [["name" => "data-trans-day", "value" => __("on the [DAY] day")], ["name" => "data-trans-weekday", "value" => __("on the [POSITION] [WEEKDAY]")]];
        // line 292
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["recurrenceMonthlyRepeatsOn", "single", "", 0, [], "id", "name", ($context["helpText"] ?? null), "repeat-monthly-control-group", "", "", "", ($context["attributes"] ?? null)], 292, $context, $this->getSourceContext());
        yield "

                        ";
        // line 294
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Every");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 295
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Include a number to determine the Repeat frequency required for this Event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 296
        yield "                        <div class=\"form-group row repeat-control-group\">
                            <label class=\"col-sm-2 control-label\" for=\"recurrenceDetail\">";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\">
                                    <input class=\"form-control\" name=\"recurrenceDetail\" min=\"0\" type=\"number\" id=\"recurrenceDetail\" value=\"";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceDetail", [], "any", false, false, false, 300), "html", null, true);
        yield "\" />
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text input-group-addon\"></span>
                                    </div>
                                </div>
                                <span class=\"form-text text-muted\">";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</span>
                            </div>
                        </div>

                        ";
        // line 309
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Until");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 310
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Provide a date and time to end the Repeat for this Event. Leave empty to Repeat indefinitely.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 311
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["recurrenceRange", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "repeat-control-group", "", ""], 311, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"reminders\">
                        ";
        // line 315
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use the form fields below to create a set of reminders for this event. New fields can be added by clicking on the + icon at the end of the row. Use the tick box to receive a notification by email alternatively reminders will be shown in the message center.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 316
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 316, $context, $this->getSourceContext());
        yield "
                        <div id=\"reminderFields\" data-reminders=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["reminders"] ?? null)), "html", null, true);
        yield "\"></div>
                    </div>

                    <div class=\"tab-pane\" id=\"geoSchedule\">
                        ";
        // line 321
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Geo Schedule?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 322
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this event be location aware? Enable this checkbox and select an area by drawing a polygon or rectangle layer on the map below.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 323
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isGeoAware", ($context["title"] ?? null), 0, ($context["helpText"] ?? null), ""], 323, $context, $this->getSourceContext());
        yield "

                        <div id=\"geoScheduleMap\" style=\"height: 500px; width: 100%\" class=\"d-none\"></div>

                        ";
        // line 327
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["geoLocation", ""], 327, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"tab-criteria\">
                        ";
        // line 331
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set criteria to determine when this event is active. All conditions must be true for an event to be included in the schedule loop. Events without criteria are always active.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 332
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 332, $context, $this->getSourceContext());
        yield "

                        <div class=\"form-criteria-field-headings\">
                            <div class=\"form-group schedule-criteria-row\">
                                <div class=\"col-form-label schedule-criteria-cell schedule-criteria-type\">";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "html", null, true);
        yield "</div>
                                <div class=\"col-form-label schedule-criteria-cell schedule-criteria-metric\">";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Metric"), "html", null, true);
        yield "</div>
                                <div class=\"col-form-label schedule-criteria-cell schedule-criteria-condition\">";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Condition"), "html", null, true);
        yield "</div>
                                <div class=\"col-form-label schedule-criteria-cell schedule-criteria-value\">";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Value"), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div id=\"scheduleCriteriaFields\" data-criteria=\"\" data-schedule-criteria=\"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["scheduleCriteria"] ?? null)), "html_attr");
        yield "\" data-criteria-default-condition=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["criteriaDefaultCondition"] ?? null)), "html_attr");
        yield "\"></div>
                    </div>
                </div>
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
        return "schedule-form-add.twig";
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
        return array (  1001 => 343,  994 => 339,  990 => 338,  986 => 337,  982 => 336,  974 => 332,  969 => 331,  962 => 327,  954 => 323,  948 => 322,  943 => 321,  936 => 317,  931 => 316,  926 => 315,  918 => 311,  912 => 310,  907 => 309,  900 => 305,  892 => 300,  886 => 297,  883 => 296,  877 => 295,  872 => 294,  866 => 292,  863 => 288,  858 => 287,  852 => 285,  850 => 283,  849 => 282,  848 => 281,  847 => 280,  846 => 279,  845 => 278,  844 => 277,  842 => 276,  836 => 275,  830 => 274,  824 => 273,  818 => 272,  812 => 271,  806 => 270,  800 => 269,  795 => 268,  789 => 266,  787 => 264,  786 => 263,  785 => 262,  784 => 261,  783 => 260,  782 => 259,  781 => 258,  779 => 257,  773 => 256,  767 => 255,  761 => 254,  755 => 253,  749 => 252,  743 => 251,  737 => 250,  731 => 249,  726 => 248,  718 => 244,  712 => 243,  707 => 242,  701 => 240,  694 => 239,  689 => 238,  683 => 236,  677 => 235,  672 => 234,  666 => 232,  660 => 231,  655 => 230,  649 => 228,  643 => 227,  638 => 226,  632 => 224,  630 => 217,  627 => 216,  621 => 215,  616 => 214,  610 => 212,  607 => 205,  601 => 204,  596 => 203,  590 => 201,  588 => 194,  585 => 193,  579 => 192,  574 => 191,  568 => 189,  562 => 188,  557 => 187,  551 => 185,  549 => 183,  548 => 182,  546 => 181,  540 => 180,  534 => 179,  528 => 178,  523 => 177,  516 => 173,  508 => 168,  502 => 165,  493 => 159,  487 => 158,  479 => 155,  474 => 153,  469 => 152,  463 => 151,  458 => 150,  452 => 148,  446 => 147,  441 => 146,  435 => 144,  429 => 143,  424 => 142,  421 => 141,  418 => 133,  412 => 130,  406 => 129,  401 => 128,  395 => 126,  389 => 125,  384 => 124,  376 => 122,  370 => 121,  365 => 120,  359 => 118,  353 => 117,  348 => 116,  342 => 114,  336 => 113,  331 => 112,  325 => 110,  319 => 109,  314 => 108,  308 => 106,  302 => 105,  297 => 104,  290 => 100,  287 => 99,  277 => 97,  273 => 96,  268 => 95,  263 => 94,  259 => 93,  253 => 90,  250 => 89,  244 => 88,  239 => 87,  233 => 85,  230 => 77,  224 => 76,  219 => 75,  215 => 73,  209 => 71,  203 => 70,  197 => 69,  191 => 67,  189 => 66,  183 => 64,  177 => 63,  172 => 62,  166 => 59,  162 => 58,  158 => 57,  154 => 56,  150 => 55,  146 => 54,  142 => 53,  137 => 52,  131 => 51,  126 => 50,  121 => 48,  117 => 47,  113 => 46,  109 => 45,  105 => 44,  100 => 41,  96 => 40,  88 => 37,  82 => 35,  80 => 34,  75 => 33,  71 => 32,  63 => 30,  57 => 27,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-form-add.twig", "/var/www/cms/views/schedule-form-add.twig");
    }
}
