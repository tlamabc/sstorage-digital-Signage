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

/* schedule-form-edit.twig */
class __TwigTemplate_8e872ddc24095d4022079d2577dccd80 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "schedule-form-edit.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Edit Event");
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
        echo __("Delete");
        yield ", XiboSwapDialog(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.delete.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "eventId", [], "any", false, false, false, 34)]), "html", null, true);
        yield "\")
    ";
        // line 35
        echo __("Save");
        yield ", beforeSubmitScheduleForm(\$(\"#scheduleEditForm\"))
";
        return; yield '';
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item repeats\"><a class=\"nav-link\" href=\"#repeats\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Repeats");
        yield "</span></a></li>
                <li class=\"nav-item reminders\"><a class=\"nav-link\" href=\"#reminders\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Reminder");
        yield "</span></a></li>
                <li class=\"nav-item geoSchedule\"><a class=\"nav-link\" href=\"#geoSchedule\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Geo Location");
        yield "</span></a></li>
                <li class=\"nav-item criteria\"><a class=\"nav-link\" href=\"#tab-criteria\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("Criteria");
        yield "</span></a></li>
            </ul>
            ";
        // line 48
        $context["dayPartMessage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the start time for this event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "            <form id=\"scheduleEditForm\" autocomplete=\"off\" class=\"form-horizontal\" method=\"put\" data-event-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "eventId", [], "any", false, false, false, 49), "html", null, true);
        yield "\" data-event-start=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["eventStart"] ?? null), "html", null, true);
        yield "\" data-event-end=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["eventEnd"] ?? null), "html", null, true);
        yield "\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "eventId", [], "any", false, false, false, 49)]), "html", null, true);
        yield "\"
                  data-daypart-message=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dayPartMessage"] ?? null), "html", null, true);
        yield "\"
                  data-not-daypart-message=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["notDayPartMessage"] ?? null), "html", null, true);
        yield "\"
                  data-add-url=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add"), "html", null, true);
        yield "\"
                  data-duplicated-message=\"";
        // line 53
        echo __("Duplicate form loaded, make adjustments and press save.");
        yield "\"
                  data-default-lat=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defaultLat"] ?? null), "html", null, true);
        yield "\"
                  data-default-long=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defaultLong"] ?? null), "html", null, true);
        yield "\"
                  data-library-get-url=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        yield "?fullScreenScheduleCheck=true&types[]=image&types[]=video\"
                  data-playlist-get-url=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search"), "html", null, true);
        yield "?fullScreenScheduleCheck=true\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 60
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optional Name for this Event (1-50 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 62), ($context["helpText"] ?? null)], 62, $context, $this->getSourceContext());
        yield "

                        ";
        // line 64
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Event Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the type of event to schedule");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["eventTypeId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "eventTypeId", [], "any", false, false, false, 66), ($context["eventTypes"] ?? null), "eventTypeId", "eventTypeName", ($context["helpText"] ?? null)], 66, $context, $this->getSourceContext());
        yield "

                        ";
        // line 68
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select one or more displays / groups for this event to be shown on.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        yield "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-trans-groups", "value" => __("Groups")], ["name" => "data-trans-display", "value" => __("Display")]];
        // line 75
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["displayGroupIds[]", "dropdownmulti", ($context["title"] ?? null), ($context["displayGroupIds"] ?? null), ($context["displayGroups"] ?? null), "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "", "", "", "", ($context["attributes"] ?? null)], 75, $context, $this->getSourceContext());
        yield "

                        ";
        // line 77
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Dayparting");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the dayparting information for this event. To set your own times select custom and to have the event run constantly select Always.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        yield "                        <div class=\"form-group row day-part-control\">
                            <label class=\"col-sm-2 control-label\" for=\"dayPartId\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-10\">
                                <select class=\"form-control\" name=\"dayPartId\" id=\"dayPartId\">
                                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dayParts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dayPart"]) {
            // line 84
            yield "                                        <option ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "dayPartId", [], "any", false, false, false, 84) == CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "dayPartId", [], "any", false, false, false, 84))) {
                yield "selected";
            }
            // line 85
            yield "                                                value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "dayPartId", [], "any", false, false, false, 85), "html", null, true);
            yield "\"
                                                data-is-always=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "isAlways", [], "any", false, false, false, 86), "html", null, true);
            yield "\"
                                                data-is-custom=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "isCustom", [], "any", false, false, false, 87), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "name", [], "any", false, false, false, 87), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayPart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "                                </select>
                                <small class=\"form-text text-muted\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</small>
                            </div>
                        </div>

                        ";
        // line 94
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use Relative time?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Switch between relative time inputs and Date pickers for start and end time.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["relativeTime", ($context["title"] ?? null), ($context["relativeTime"] ?? null), ($context["helpText"] ?? null), "relative-time-checkbox"], 96, $context, $this->getSourceContext());
        yield "

                        ";
        // line 98
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hours");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hours this event should be scheduled for");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["hours", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "duration-part relative-time-control"], 100, $context, $this->getSourceContext());
        yield "

                        ";
        // line 102
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Minutes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Minutes this event should be scheduled for");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["minutes", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "duration-part relative-time-control"], 104, $context, $this->getSourceContext());
        yield "

                        ";
        // line 106
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Seconds");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Seconds this event should be scheduled for");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["seconds", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "schedule-now-seconds-field duration-part relative-time-control"], 108, $context, $this->getSourceContext());
        yield "

                        ";
        // line 110
        $context["messageNoSyncTimezone"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Your event will be scheduled from [fromDt] to [toDt] in each of your selected Displays respective timezones");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        yield "                        ";
        $context["messageSyncTimezone"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Your event will be scheduled from [fromDt] to [toDt] in the CMS timezone, please check this covers each of your Displays in their respective timezones.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        yield "                        <div class=\"alert alert-info scheduleNowMessage d-none relative-time-control\" data-template-sync=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["messageSyncTimezone"] ?? null), "html", null, true);
        yield "\" data-template-no-sync=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["messageNoSyncTimezone"] ?? null), "html", null, true);
        yield "\"></div>

                        ";
        // line 114
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Start Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the start time for this event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 116
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["fromDt", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "fromDt", [], "any", false, false, false, 116), ($context["helpText"] ?? null), "starttime-control", "required", ""], 116, $context, $this->getSourceContext());
        yield "

                        ";
        // line 118
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("End Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the end time for this event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["toDt", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "toDt", [], "any", false, false, false, 120), ($context["helpText"] ?? null), "endtime-control", "required", ""], 120, $context, $this->getSourceContext());
        yield "

                        ";
        // line 123
        yield "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search") . "?type=list")], ["name" => "data-search-is-layout-specific", "value" =>  -1], ["name" => "data-trans-layout", "value" => __("Layout")], ["name" => "data-trans-layout-help-text", "value" => __("Please select a Layout for this Event to show")], ["name" => "data-trans-campaign", "value" => __("Campaign")], ["name" => "data-trans-campaign-help-text", "value" => __("Please select a Campaign for this Event to show")]];
        // line 131
        yield "
                        ";
        // line 132
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a Layout for this Event to show");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["campaignId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "campaignId", [], "any", false, false, false, 134), [($context["campaign"] ?? null)], "campaignId", "campaign", ($context["helpText"] ?? null), "layout-control", "", "", "", ($context["attributes"] ?? null)], 134, $context, $this->getSourceContext());
        yield "

                        ";
        // line 136
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Media");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select a Media file from the Library to use. The selected file will be shown full screen for this event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_inputFullScreenSchedule", ["media", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "media-control full-screen-control", CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "getUnmatchedProperty", ["mediaId"], "method", false, false, false, 138)], 138, $context, $this->getSourceContext());
        yield "

                        ";
        // line 140
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Playlist");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select a Playlist to use. The selected playlist will be shown full screen for this event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_inputFullScreenSchedule", ["playlist", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "playlist-control full-screen-control", CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "getUnmatchedProperty", ["playlistId"], "method", false, false, false, 142)], 142, $context, $this->getSourceContext());
        yield "

                        ";
        // line 144
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["fullScreenCampaignId", CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "getUnmatchedProperty", ["fullScreenCampaignId"], "method", false, false, false, 144)], 144, $context, $this->getSourceContext());
        yield "

                        <div style=\"";
        // line 146
        if ( !(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["campaign.view"], "method", false, false, false, 146) || CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 146))) {
            yield "display: none;";
        }
        yield "\">
                            <div class=\"form-group row preview-button-container\">
                                <div class=\"offset-md-2 col-md-10\">
                                    <a id=\"previewButton\" class=\"btn btn-success\" target=\"_blank\" data-url=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.preview", ["id" => ":id"]), "html", null, true);
        yield "\">";
        echo __("Preview");
        yield " <span class=\"fa fa-tablet\"></span></a>
                                    <small class=\"form-text text-muted\">";
        // line 150
        echo __("Preview your selection in a new tab");
        yield "</small>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group row interrupt-control\">
                            <label class=\"col-sm-2 control-label\" for=\"shareOfVoice\" accesskey=\"\">";
        // line 156
        echo __("Share of Voice");
        yield "</label>
                            <div class=\"col-sm-5\">
                                <input class=\"form-control\" name=\"shareOfVoice\" type=\"number\" id=\"shareOfVoice\" value=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "shareOfVoice", [], "any", false, false, false, 158), "html", null, true);
        yield "\" min=\"0\" max=\"3600\" step=\"1\">
                                <small class=\"form-text text-muted\">";
        // line 159
        echo __("The amount of time this Layout should be shown, in seconds per hour.");
        yield "</small>
                            </div>

                            <div class=\"col-sm-5\">
                                <input class=\"form-control\" name=\"shareOfVoicePercentage\" type=\"number\" id=\"shareOfVoicePercentage\" value=\"\">
                                <small class=\"form-text text-muted\">";
        // line 164
        echo __("As a percentage");
        yield "</small>
                            </div>
                        </div>

                        ";
        // line 168
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Action Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 169
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select action Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 170
        yield "                        ";
        $context["navLayout"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Navigate to Layout");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 171
        yield "                        ";
        $context["command"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Command");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 172
        yield "                        ";
        $context["options"] = [["typeid" => "navLayout", "type" =>         // line 173
($context["navLayout"] ?? null)], ["typeid" => "command", "type" =>         // line 174
($context["command"] ?? null)]];
        // line 176
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["actionType", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "actionType", [], "any", false, false, false, 176), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null), "action-control"], 176, $context, $this->getSourceContext());
        yield "

                        ";
        // line 178
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Trigger Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 179
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Web hook trigger code for this Action");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 180
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["actionTriggerCode", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "actionTriggerCode", [], "any", false, false, false, 180), ($context["helpText"] ?? null), "action-control"], 180, $context, $this->getSourceContext());
        yield "

                        ";
        // line 182
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 183
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select the Code identifier for the Layout that Player should navigate to when this Action is triggered.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 184
        yield "
                        ";
        // line 185
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.code.search")], ["name" => "data-search-term", "value" => "code"], ["name" => "data-id-property", "value" => "code"], ["name" => "data-text-property", "value" => "code"], ["name" => "data-initial-key", "value" => "code"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 192
($context["event"] ?? null), "actionLayoutCode", [], "any", false, false, false, 192)]];
        // line 194
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["actionLayoutCode", "single", ($context["title"] ?? null), "", null, "code", "code", ($context["helpText"] ?? null), "pagedSelect action-control layout-code-control", "", "", "", ($context["attributes"] ?? null)], 194, $context, $this->getSourceContext());
        yield "

                        ";
        // line 196
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Command");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 197
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a command for this Event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 198
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.search")], ["name" => "data-search-term", "value" => "command"], ["name" => "data-id-property", "value" => "commandId"], ["name" => "data-text-property", "value" => "command"], ["name" => "data-initial-key", "value" => "commandId"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 205
($context["event"] ?? null), "commandId", [], "any", false, false, false, 205)]];
        // line 207
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["commandId", "single", ($context["title"] ?? null), "", null, "commandId", "command", ($context["helpText"] ?? null), "pagedSelect command-control", "", "", "", ($context["attributes"] ?? null)], 207, $context, $this->getSourceContext());
        yield "

                        ";
        // line 209
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("DataSet");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 210
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select the real time DataSet related to this Data Connector event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 211
        yield "
                        ";
        // line 212
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.search") . "?isRealTime=1")], ["name" => "data-search-term", "value" => "dataSet"], ["name" => "data-id-property", "value" => "dataSetId"], ["name" => "data-text-property", "value" => "dataSet"], ["name" => "data-initial-key", "value" => "dataSetId"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 219
($context["event"] ?? null), "dataSetId", [], "any", false, false, false, 219)]];
        // line 221
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dataSetId", "single", ($context["title"] ?? null), "", CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "dataSetId", [], "any", false, false, false, 221), "dataSetId", "dataSet", ($context["helpText"] ?? null), "pagedSelect data-connector-control", "", "", "", ($context["attributes"] ?? null)], 221, $context, $this->getSourceContext());
        yield "

                        ";
        // line 223
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Data Connector Parameters");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 224
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally provide any parameters to be used by the Data Connector.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 225
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["dataSetParams", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "dataSetParams", [], "any", false, false, false, 225), ($context["helpText"] ?? null), "data-connector-control"], 225, $context, $this->getSourceContext());
        yield "

                        ";
        // line 227
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Order");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 228
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select the order this event should appear in relation to others when there is more than one event scheduled");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 229
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["displayOrder", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "displayOrder", [], "any", false, false, false, 229), ($context["helpText"] ?? null), "displayOrder-control", "", "", "", "0"], 229, $context, $this->getSourceContext());
        yield "

                        ";
        // line 231
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Priority");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 232
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sets the event priority - events with the highest priority play in preference to lower priority events.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 233
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["isPriority", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "isPriority", [], "any", false, false, false, 233), ($context["helpText"] ?? null), "priority-control", "", "", "", "0"], 233, $context, $this->getSourceContext());
        yield "

                        ";
        // line 235
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Maximum plays per hour");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 236
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Limit the number of times this event will play per hour on each display. For unlimited plays set to 0.");
            yield CoreExtension::callMacro($macros["forms"], "macro_playerCompat", ["R308", "", "", "", "R306", ""], 236, $context, $this->getSourceContext());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 237
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["maxPlaysPerHour", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "maxPlaysPerHour", [], "any", false, false, false, 237), ($context["helpText"] ?? null), "max-plays-control", "", "", "", "0"], 237, $context, $this->getSourceContext());
        yield "

                        ";
        // line 239
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Run at CMS Time?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 240
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When selected, your event will run according to the timezone set on the CMS, otherwise the event will run at Display local time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 241
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["syncTimezone", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "syncTimezone", [], "any", false, false, false, 241), ($context["helpText"] ?? null)], 241, $context, $this->getSourceContext());
        yield "

                        ";
        // line 243
        if (($context["recurringEvent"] ?? null)) {
            // line 244
            yield "                            <div class=\"card p-3 mb-3 bg-light text-primary text-center form-error\">
                                <p>This is an instance of a scheduled recurring event:
                                    <span class=\"fa fa-info-circle\"
                                          data-toggle=\"popover\"
                                          data-trigger=\"hover\"
                                          data-placement=\"bottom\"
                                          data-content=\"";
            // line 250
            echo __("Editing the Start and or End date/time will create a new Recurring Event across the Schedule. Any previously deleted instances of this event will be recreated with edits made here.");
            yield "\"></span></p>
                                <p>
                                    Starting from <span class=\"text-warning\"><b id=\"instanceStartDate\">-</b></span> to <span class=\"text-warning\"><b id=\"instanceEndDate\">-</b></span>
                                </p>
                                <div id=\"recurringInfo\"></div>
                            </div>
                        ";
        }
        // line 257
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"repeats\">
                        ";
        // line 261
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Repeats");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 262
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the type of Repeat required for this Event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 263
        yield "                        ";
        $context["noneOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("None");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 264
        yield "                        ";
        $context["minute"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Per Minute");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 265
        yield "                        ";
        $context["hourly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hourly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 266
        yield "                        ";
        $context["daily"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Daily");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 267
        yield "                        ";
        $context["weekly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Weekly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 268
        yield "                        ";
        $context["monthly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monthly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 269
        yield "                        ";
        $context["yearly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yearly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 270
        yield "                        ";
        $context["options"] = [["id" => "", "name" =>         // line 271
($context["noneOption"] ?? null)], ["id" => "Minute", "name" =>         // line 272
($context["minute"] ?? null)], ["id" => "Hour", "name" =>         // line 273
($context["hourly"] ?? null)], ["id" => "Day", "name" =>         // line 274
($context["daily"] ?? null)], ["id" => "Week", "name" =>         // line 275
($context["weekly"] ?? null)], ["id" => "Month", "name" =>         // line 276
($context["monthly"] ?? null)], ["id" => "Year", "name" =>         // line 277
($context["yearly"] ?? null)]];
        // line 279
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["recurrenceType", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceType", [], "any", false, false, false, 279), ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null)], 279, $context, $this->getSourceContext());
        yield "

                        ";
        // line 281
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use the drop-down to select which days of the week this Event should be repeated");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 282
        yield "                        ";
        $context["monday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 283
        yield "                        ";
        $context["tuesday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tuesday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 284
        yield "                        ";
        $context["wednesday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Wednesday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 285
        yield "                        ";
        $context["thursday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Thursday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 286
        yield "                        ";
        $context["friday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Friday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 287
        yield "                        ";
        $context["saturday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Saturday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 288
        yield "                        ";
        $context["sunday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sunday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 289
        yield "                        ";
        $context["options"] = [["id" => 1, "name" =>         // line 290
($context["monday"] ?? null)], ["id" => 2, "name" =>         // line 291
($context["tuesday"] ?? null)], ["id" => 3, "name" =>         // line 292
($context["wednesday"] ?? null)], ["id" => 4, "name" =>         // line 293
($context["thursday"] ?? null)], ["id" => 5, "name" =>         // line 294
($context["friday"] ?? null)], ["id" => 6, "name" =>         // line 295
($context["saturday"] ?? null)], ["id" => 7, "name" =>         // line 296
($context["sunday"] ?? null)]];
        // line 298
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["recurrenceRepeatsOn[]", "dropdownmulti", "", CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceRepeatsOn", [], "any", false, false, false, 298), ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null), "repeat-weekly-control-group"], 298, $context, $this->getSourceContext());
        yield "

                        ";
        // line 300
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this Event Repeat by Day of the month (eg. Monthly on Day 21) or by a Weekday in the month (eg. Monthly on the third Thursday)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 301
        yield "                        ";
        $context["attributes"] = [["name" => "data-value", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 302
($context["event"] ?? null), "recurrenceMonthlyRepeatsOn", [], "any", false, false, false, 302)], ["name" => "data-trans-day", "value" => __("on the [DAY] day")], ["name" => "data-trans-weekday", "value" => __("on the [POSITION] [WEEKDAY]")]];
        // line 306
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["recurrenceMonthlyRepeatsOn", "single", "", CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceMonthlyRepeatsOn", [], "any", false, false, false, 306), [["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceMonthlyRepeatsOn", [], "any", false, false, false, 306), "name" => ""]], "id", "name", ($context["helpText"] ?? null), "repeat-monthly-control-group", "", "", "", ($context["attributes"] ?? null)], 306, $context, $this->getSourceContext());
        yield "

                        ";
        // line 308
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Every");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 309
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Include a number to determine the Repeat frequency required for this Event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 310
        yield "                        <div class=\"form-group row repeat-control-group\">
                            <label class=\"col-sm-2 control-label\" for=\"recurrenceDetail\">";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\">
                                    <input class=\"form-control\" name=\"recurrenceDetail\" min=\"0\" type=\"number\" id=\"recurrenceDetail\" value=\"";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceDetail", [], "any", false, false, false, 314), "html", null, true);
        yield "\" />
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text input-group-addon\"></span>
                                    </div>
                                </div>
                                <span class=\"form-text text-muted\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</span>
                            </div>
                        </div>

                        ";
        // line 323
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Until");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 324
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Provide a date and time to end the Repeat for this Event. Leave empty to Repeat indefinitely.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 325
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["recurrenceRange", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceRange", [], "any", false, false, false, 325), ($context["helpText"] ?? null), "repeat-control-group", "", ""], 325, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"reminders\">
                        ";
        // line 329
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use the form fields below to create a set of reminders for this event. New fields can be added by clicking on the + icon at the end of the row. Use the tick box to receive a notification by email alternatively reminders will be shown in the message center.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 330
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 330, $context, $this->getSourceContext());
        yield "
                        <div id=\"reminderFields\" data-reminders=\"";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["reminders"] ?? null)), "html", null, true);
        yield "\"></div>
                    </div>

                    <div class=\"tab-pane\" id=\"geoSchedule\">
                        ";
        // line 335
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Geo Schedule?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 336
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this event be location aware? Enable this checkbox and select an area by drawing a polygon or rectangle layer on the map below.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 337
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isGeoAware", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "isGeoAware", [], "any", false, false, false, 337), ($context["helpText"] ?? null), ""], 337, $context, $this->getSourceContext());
        yield "

                        <div id=\"geoScheduleMap\" style=\"height: 500px; width: 100%\" class=\"d-none\"></div>

                        ";
        // line 341
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["geoLocation", CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "geoLocation", [], "any", false, false, false, 341)], 341, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"tab-criteria\">
                        ";
        // line 345
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set criteria to determine when this event is active. All conditions must be true for an event to be included in the schedule loop. Events without criteria are always active.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 346
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 346, $context, $this->getSourceContext());
        yield "

                        <div class=\"form-criteria-field-headings\">
                            <div class=\"form-group schedule-criteria-row\">
                                <div class=\"col-form-label schedule-criteria-cell schedule-criteria-type\">";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "html", null, true);
        yield "</div>
                                <div class=\"col-form-label schedule-criteria-cell schedule-criteria-metric\">";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Metric"), "html", null, true);
        yield "</div>
                                <div class=\"col-form-label schedule-criteria-cell schedule-criteria-condition\">";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Condition"), "html", null, true);
        yield "</div>
                                <div class=\"col-form-label schedule-criteria-cell schedule-criteria-value\">";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Value"), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div id=\"scheduleCriteriaFields\" data-criteria=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "criteria", [], "any", false, false, false, 357)), "html", null, true);
        yield "\" data-schedule-criteria=\"";
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
        return "schedule-form-edit.twig";
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
        return array (  1021 => 357,  1014 => 353,  1010 => 352,  1006 => 351,  1002 => 350,  994 => 346,  989 => 345,  982 => 341,  974 => 337,  968 => 336,  963 => 335,  956 => 331,  951 => 330,  946 => 329,  938 => 325,  932 => 324,  927 => 323,  920 => 319,  912 => 314,  906 => 311,  903 => 310,  897 => 309,  892 => 308,  886 => 306,  884 => 302,  882 => 301,  877 => 300,  871 => 298,  869 => 296,  868 => 295,  867 => 294,  866 => 293,  865 => 292,  864 => 291,  863 => 290,  861 => 289,  855 => 288,  849 => 287,  843 => 286,  837 => 285,  831 => 284,  825 => 283,  819 => 282,  814 => 281,  808 => 279,  806 => 277,  805 => 276,  804 => 275,  803 => 274,  802 => 273,  801 => 272,  800 => 271,  798 => 270,  792 => 269,  786 => 268,  780 => 267,  774 => 266,  768 => 265,  762 => 264,  756 => 263,  750 => 262,  745 => 261,  739 => 257,  729 => 250,  721 => 244,  719 => 243,  713 => 241,  707 => 240,  702 => 239,  696 => 237,  689 => 236,  684 => 235,  678 => 233,  672 => 232,  667 => 231,  661 => 229,  655 => 228,  650 => 227,  644 => 225,  638 => 224,  633 => 223,  627 => 221,  625 => 219,  624 => 212,  621 => 211,  615 => 210,  610 => 209,  604 => 207,  602 => 205,  600 => 198,  594 => 197,  589 => 196,  583 => 194,  581 => 192,  580 => 185,  577 => 184,  571 => 183,  566 => 182,  560 => 180,  554 => 179,  549 => 178,  543 => 176,  541 => 174,  540 => 173,  538 => 172,  532 => 171,  526 => 170,  520 => 169,  515 => 168,  508 => 164,  500 => 159,  496 => 158,  491 => 156,  482 => 150,  476 => 149,  468 => 146,  463 => 144,  457 => 142,  451 => 141,  446 => 140,  440 => 138,  434 => 137,  429 => 136,  423 => 134,  417 => 133,  412 => 132,  409 => 131,  406 => 123,  400 => 120,  394 => 119,  389 => 118,  383 => 116,  377 => 115,  372 => 114,  364 => 112,  358 => 111,  353 => 110,  347 => 108,  341 => 107,  336 => 106,  330 => 104,  324 => 103,  319 => 102,  313 => 100,  307 => 99,  302 => 98,  296 => 96,  290 => 95,  285 => 94,  278 => 90,  275 => 89,  265 => 87,  261 => 86,  256 => 85,  251 => 84,  247 => 83,  241 => 80,  238 => 79,  232 => 78,  227 => 77,  221 => 75,  218 => 70,  212 => 69,  207 => 68,  201 => 66,  195 => 65,  190 => 64,  184 => 62,  178 => 61,  173 => 60,  167 => 57,  163 => 56,  159 => 55,  155 => 54,  151 => 53,  147 => 52,  143 => 51,  139 => 50,  128 => 49,  123 => 48,  118 => 46,  114 => 45,  110 => 44,  106 => 43,  102 => 42,  97 => 39,  93 => 38,  86 => 35,  80 => 34,  75 => 33,  71 => 32,  63 => 30,  57 => 27,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-form-edit.twig", "/var/www/cms/views/schedule-form-edit.twig");
    }
}
