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

/* schedule-form-sync-add.twig */
class __TwigTemplate_462fec48c673148ce1038b1c56f31483 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-form-sync-add.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "schedule-form-sync-add.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Add Synchronised Event");
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
        echo __("Save");
        yield ", beforeSubmitScheduleForm(\$(\"#scheduleAddSyncForm\"))
";
        return; yield '';
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 41
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item repeats\"><a class=\"nav-link\" href=\"#repeats\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("Repeats");
        yield "</span></a></li>
                <li class=\"nav-item reminders\"><a class=\"nav-link\" href=\"#reminders\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Reminder");
        yield "</span></a></li>
                <li class=\"nav-item geoSchedule\"><a class=\"nav-link\" href=\"#geoSchedule\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Geo Location");
        yield "</span></a></li>
            </ul>
            ";
        // line 46
        $context["dayPartMessage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the start time for this event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "            ";
        $context["notDayPartMessage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Start and end time will be defined by the daypart's configuration for this day of the week. Use a repeating schedule to apply this event over multiple days");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "            <form id=\"scheduleAddSyncForm\" autocomplete=\"off\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add"), "html", null, true);
        yield "\" data-full-screen-url=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.add.full.screen.schedule"), "html", null, true);
        yield "\" data-fetch-sync-displays=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.fetch.displays", ["id" => ":id"]), "html", null, true);
        yield "\" data-daypart-message=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dayPartMessage"] ?? null), "html", null, true);
        yield "\" data-not-daypart-message=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["notDayPartMessage"] ?? null), "html", null, true);
        yield "\" data-default-lat=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defaultLat"] ?? null), "html", null, true);
        yield "\" data-default-long = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defaultLong"] ?? null), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 51
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["eventTypeId", ($context["eventTypeId"] ?? null)], 51, $context, $this->getSourceContext());
        yield "

                        ";
        // line 53
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optional Name for this Event (1-50 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 55, $context, $this->getSourceContext());
        yield "

                        ";
        // line 57
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sync Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select existing Sync Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.search") . "?hasLeadDisplay=1")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "syncGroupId"], ["name" => "data-text-property", "value" => "name"]];
        // line 66
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["syncGroupId", "single", ($context["title"] ?? null), "", null, "syncGroupId", "name", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 66, $context, $this->getSourceContext());
        yield "

                        <div id=\"content-selector\" class=\"form-group col-sm-12 d-none\" style=\"max-height: 40vh; overflow-y: auto\">
                            <div class=\"XiboData card\">
                                <table id=\"contentSelectorTable\" class=\"table table-striped\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 73
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 74
        echo __("Name");
        yield "</th>
                                        <th>";
        // line 75
        echo __("Layout");
        yield "</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        ";
        // line 85
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Dayparting");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the dayparting information for this event. To set your own times select custom and to have the event run constantly select Always.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "                        <div class=\"form-group row day-part-control\">
                            <label class=\"col-sm-2 control-label\" for=\"dayPartId\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-10\">
                                <select class=\"form-control\" name=\"dayPartId\" id=\"dayPartId\">
                                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dayParts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dayPart"]) {
            // line 92
            yield "                                        <option ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "isCustom", [], "any", false, false, false, 92) == 1)) {
                yield "selected";
            }
            // line 93
            yield "                                                value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "dayPartId", [], "any", false, false, false, 93), "html", null, true);
            yield "\"
                                                data-is-always=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "isAlways", [], "any", false, false, false, 94), "html", null, true);
            yield "\"
                                                data-is-custom=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "isCustom", [], "any", false, false, false, 95), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "name", [], "any", false, false, false, 95), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayPart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                                </select>
                                <small class=\"form-text text-muted\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</small>
                            </div>
                        </div>

                        ";
        // line 102
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Start Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the start time for this event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["fromDt", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "starttime-control", "required"], 104, $context, $this->getSourceContext());
        yield "

                        ";
        // line 106
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("End Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the end time for this event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["toDt", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "endtime-control", "required"], 108, $context, $this->getSourceContext());
        yield "

                        ";
        // line 110
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Order");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select the order this event should appear in relation to others when there is more than one event scheduled");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["displayOrder", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "displayOrder-control"], 112, $context, $this->getSourceContext());
        yield "

                        ";
        // line 114
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Priority");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sets the event priority - events with the highest priority play in preference to lower priority events.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 116
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["isPriority", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "priority-control"], 116, $context, $this->getSourceContext());
        yield "

                        ";
        // line 118
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Maximum plays per hour");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Limit the number of times this event will play per hour on each display. For unlimited plays set to 0.");
            yield CoreExtension::callMacro($macros["forms"], "macro_playerCompat", ["R308", "", "", "", "R306", ""], 119, $context, $this->getSourceContext());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["maxPlaysPerHour", ($context["title"] ?? null), 0, ($context["helpText"] ?? null), "max-plays-control"], 120, $context, $this->getSourceContext());
        yield "

                        ";
        // line 122
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Run at CMS Time?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When selected, your event will run according to the timezone set on the CMS, otherwise the event will run at Display local time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 124
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["syncTimezone", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 124, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"repeats\">
                        ";
        // line 128
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Repeats");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the type of Repeat required for this Event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        yield "                        ";
        $context["noneOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("None");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        yield "                        ";
        $context["minute"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Per Minute");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        yield "                        ";
        $context["hourly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hourly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        yield "                        ";
        $context["daily"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Daily");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        yield "                        ";
        $context["weekly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Weekly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        yield "                        ";
        $context["monthly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monthly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        yield "                        ";
        $context["yearly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yearly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        yield "                        ";
        $context["options"] = [["id" => "", "name" =>         // line 138
($context["noneOption"] ?? null)], ["id" => "Minute", "name" =>         // line 139
($context["minute"] ?? null)], ["id" => "Hour", "name" =>         // line 140
($context["hourly"] ?? null)], ["id" => "Day", "name" =>         // line 141
($context["daily"] ?? null)], ["id" => "Week", "name" =>         // line 142
($context["weekly"] ?? null)], ["id" => "Month", "name" =>         // line 143
($context["monthly"] ?? null)], ["id" => "Year", "name" =>         // line 144
($context["yearly"] ?? null)]];
        // line 146
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["recurrenceType", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null)], 146, $context, $this->getSourceContext());
        yield "

                        ";
        // line 148
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use the drop-down to select which days of the week this Event should be repeated.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 149
        yield "                        ";
        $context["monday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 150
        yield "                        ";
        $context["tuesday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tuesday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        yield "                        ";
        $context["wednesday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Wednesday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 152
        yield "                        ";
        $context["thursday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Thursday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 153
        yield "                        ";
        $context["friday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Friday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 154
        yield "                        ";
        $context["saturday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Saturday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 155
        yield "                        ";
        $context["sunday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sunday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        yield "                        ";
        $context["options"] = [["id" => 1, "name" =>         // line 157
($context["monday"] ?? null)], ["id" => 2, "name" =>         // line 158
($context["tuesday"] ?? null)], ["id" => 3, "name" =>         // line 159
($context["wednesday"] ?? null)], ["id" => 4, "name" =>         // line 160
($context["thursday"] ?? null)], ["id" => 5, "name" =>         // line 161
($context["friday"] ?? null)], ["id" => 6, "name" =>         // line 162
($context["saturday"] ?? null)], ["id" => 7, "name" =>         // line 163
($context["sunday"] ?? null)]];
        // line 165
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["recurrenceRepeatsOn[]", "dropdownmulti", "", "", ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null), "repeat-weekly-control-group"], 165, $context, $this->getSourceContext());
        yield "

                        ";
        // line 167
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this Event Repeat by Day of the month (eg. Monthly on Day 21) or by a Weekday in the month (eg. Monthly on the third Thursday).");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 168
        yield "                        ";
        $context["attributes"] = [["name" => "data-trans-day", "value" => __("on the [DAY] day")], ["name" => "data-trans-weekday", "value" => __("on the [POSITION] [WEEKDAY]")]];
        // line 172
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["recurrenceMonthlyRepeatsOn", "single", "", 0, [], "id", "name", ($context["helpText"] ?? null), "repeat-monthly-control-group", "", "", "", ($context["attributes"] ?? null)], 172, $context, $this->getSourceContext());
        yield "

                        ";
        // line 174
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Every");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 175
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Include a number to determine the Repeat frequency required for this Event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 176
        yield "                        <div class=\"form-group row repeat-control-group\">
                            <label class=\"col-sm-2 control-label\" for=\"recurrenceDetail\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\">
                                    <input class=\"form-control\" name=\"recurrenceDetail\" type=\"number\" id=\"recurrenceDetail\" value=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceDetail", [], "any", false, false, false, 180), "html", null, true);
        yield "\" />
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text input-group-addon\"></span>
                                    </div>
                                </div>
                                <span class=\"form-text text-muted\">";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</span>
                            </div>
                        </div>

                        ";
        // line 189
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Until");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Provide a date and time to end the Repeat for this Event. Leave empty to Repeat indefinitely.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 191
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["recurrenceRange", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "repeat-control-group", "", ""], 191, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"reminders\">
                        ";
        // line 194
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use the form fields below to create a set of reminders for this event. New fields can be added by clicking on the + icon at the end of the row. Use the tick box to receive a notification by email alternatively reminders will be shown in the message center.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 195
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 195, $context, $this->getSourceContext());
        yield "
                        <div id=\"reminderFields\" data-reminders=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["reminders"] ?? null)), "html", null, true);
        yield "\"></div>
                    </div>

                    <div class=\"tab-pane\" id=\"geoSchedule\">
                        ";
        // line 200
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Geo Schedule?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 201
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this event be location aware? Enable this checkbox and select an area by drawing a polygon or rectangle layer on the map below.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 202
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isGeoAware", ($context["title"] ?? null), 0, ($context["helpText"] ?? null), ""], 202, $context, $this->getSourceContext());
        yield "

                        <div id=\"geoScheduleMap\" style=\"height: 500px; width: 100%\" class=\"d-none\"></div>

                        ";
        // line 206
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["geoLocation", ""], 206, $context, $this->getSourceContext());
        yield "
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
        return "schedule-form-sync-add.twig";
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
        return array (  609 => 206,  601 => 202,  595 => 201,  590 => 200,  583 => 196,  578 => 195,  573 => 194,  566 => 191,  560 => 190,  555 => 189,  548 => 185,  540 => 180,  534 => 177,  531 => 176,  525 => 175,  520 => 174,  514 => 172,  511 => 168,  506 => 167,  500 => 165,  498 => 163,  497 => 162,  496 => 161,  495 => 160,  494 => 159,  493 => 158,  492 => 157,  490 => 156,  484 => 155,  478 => 154,  472 => 153,  466 => 152,  460 => 151,  454 => 150,  448 => 149,  443 => 148,  437 => 146,  435 => 144,  434 => 143,  433 => 142,  432 => 141,  431 => 140,  430 => 139,  429 => 138,  427 => 137,  421 => 136,  415 => 135,  409 => 134,  403 => 133,  397 => 132,  391 => 131,  385 => 130,  379 => 129,  374 => 128,  366 => 124,  360 => 123,  355 => 122,  349 => 120,  342 => 119,  337 => 118,  331 => 116,  325 => 115,  320 => 114,  314 => 112,  308 => 111,  303 => 110,  297 => 108,  291 => 107,  286 => 106,  280 => 104,  274 => 103,  269 => 102,  262 => 98,  259 => 97,  249 => 95,  245 => 94,  240 => 93,  235 => 92,  231 => 91,  225 => 88,  222 => 87,  216 => 86,  211 => 85,  198 => 75,  194 => 74,  190 => 73,  179 => 66,  176 => 59,  170 => 58,  165 => 57,  159 => 55,  153 => 54,  148 => 53,  143 => 51,  124 => 48,  118 => 47,  113 => 46,  108 => 44,  104 => 43,  100 => 42,  96 => 41,  91 => 38,  87 => 37,  80 => 34,  75 => 33,  71 => 32,  63 => 30,  57 => 27,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-form-sync-add.twig", "/var/www/cms/views/schedule-form-sync-add.twig");
    }
}
