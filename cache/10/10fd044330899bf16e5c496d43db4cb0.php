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

/* schedule-page.twig */
class __TwigTemplate_859fb477e1e6a8f7017d22360099f4a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "schedule-page.twig", 24)->unwrap();
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-page.twig", 25)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "schedule-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Schedule"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 29
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.add"], "method", false, false, false, 31)) {
            // line 32
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.sync"], "method", false, false, false, 32)) {
                // line 33
                yield "                <button class=\"btn btn-white XiboFormButton btns\" title=\"";
                echo __("Add a new Sync event");
                yield "\"
                        href=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add.sync.form"), "html", null, true);
                yield "\"><span
                            class=\"fa fa-plus\"></span> ";
                // line 35
                echo __("Add Synchronised Event");
                yield "</button>
            ";
            }
            // line 37
            yield "            <button class=\"btn btn-success XiboFormButton btns\" title=\"";
            echo __("Add a new Scheduled event");
            yield "\"
                    href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add.form"), "html", null, true);
            yield "\"><span class=\"fa fa-plus\"></span> ";
            echo __("Add Event");
            // line 39
            yield "            </button>
        ";
        }
        // line 41
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 45
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 47
        echo __("Schedule");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"scheduleGridView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"schedule-filter\">
                        <form class=\"form-inline\">
                            ";
        // line 53
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Range");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                            ";
        $context["range"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select a range");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                            ";
        $context["day"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Today");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                            ";
        $context["week"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("This Week");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                            ";
        $context["month"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("This Month");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                            ";
        $context["year"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("This Year");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "                            ";
        $context["yesterday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yesterday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                            ";
        $context["lastweek"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Last Week");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                            ";
        $context["lastmonth"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Last Month");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "                            ";
        $context["lastyear"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Last Year");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                            ";
        $context["agenda"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Agenda");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                            ";
        $context["options"] = [["name" => "custom", "range" =>         // line 65
($context["range"] ?? null)], ["name" => "day", "range" =>         // line 66
($context["day"] ?? null)], ["name" => "week", "range" =>         // line 67
($context["week"] ?? null)], ["name" => "month", "range" =>         // line 68
($context["month"] ?? null)], ["name" => "year", "range" =>         // line 69
($context["year"] ?? null)], ["name" => "lastday", "range" =>         // line 70
($context["yesterday"] ?? null)], ["name" => "lastweek", "range" =>         // line 71
($context["lastweek"] ?? null)], ["name" => "lastmonth", "range" =>         // line 72
($context["lastmonth"] ?? null)], ["name" => "lastyear", "range" =>         // line 73
($context["lastyear"] ?? null)], ["name" => "agenda", "range" =>         // line 74
($context["agenda"] ?? null)]];
        // line 76
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["range", "single", ($context["title"] ?? null), "month", ($context["options"] ?? null), "name", "range", "", "date-range-input"], 76, $context, $this->getSourceContext());
        yield "

                            ";
        // line 78
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("From Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["fromDt", ($context["title"] ?? null), "", "", "custom-date-range", "", ""], 79, $context, $this->getSourceContext());
        yield "

                            ";
        // line 81
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("To Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["toDt", ($context["title"] ?? null), "", "", "custom-date-range", "", ""], 82, $context, $this->getSourceContext());
        yield "

                            ";
        // line 84
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["name", ($context["title"] ?? null), "non-agenda-filter"], 85, $context, $this->getSourceContext());
        yield "

                            ";
        // line 87
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Event Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["eventTypeId", "single", ($context["title"] ?? null), "", Twig\Extension\CoreExtension::merge([["eventTypeId" => null, "eventTypeName" => "All"]], ($context["eventTypes"] ?? null)), "eventTypeId", "eventTypeName", "", "non-agenda-filter"], 88, $context, $this->getSourceContext());
        yield "

                            ";
        // line 90
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout / Campaign");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a Layout or Campaign for this Event to show");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        yield "
                            <div class=\"form-group mr-1 mb-1 non-agenda-filter\">
                                <label class=\"control-label mr-1\" for=\"campaignId\" title=\"\"
                                       accesskey=\"\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                                <select name=\"campaignId\" id=\"campaignIdFilter\" class=\"form-control\"
                                        data-search-url=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search"), "html", null, true);
        yield "\"
                                        data-trans-campaigns=\"";
        // line 98
        echo __("Campaigns");
        yield "\"
                                        data-trans-layouts=\"";
        // line 99
        echo __("Layouts");
        yield "\"
                                        data-allow-clear=\"true\"
                                        data-width=\"100%\"
                                        title=\"";
        // line 102
        echo __("Layout / Campaign");
        yield "\"
                                        data-placeholder=\"";
        // line 103
        echo __("Layout / Campaign");
        yield "\"
                                        data-dropdownAutoWidth
                                >
                                </select>
                            </div>

                            ";
        // line 109
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Displays");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 110
        yield "                            <div class=\"form-group mr-1 mb-1 pagedSelect\" style=\"min-width: 200px\">
                                <label class=\"control-label mr-1\" for=\"DisplayList\" title=\"\"
                                       accesskey=\"\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                                <select id=\"DisplayList\" class=\"form-control\" name=\"displaySpecificGroupIds[]\"
                                        data-width=\"100%\"
                                        data-placeholder=\"";
        // line 115
        echo __("Displays");
        yield "\"
                                        data-search-url=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        yield "\"
                                        data-search-term=\"display\"
                                        data-id-property=\"displayGroupId\"
                                        data-text-property=\"display\"
                                        data-additional-property=\"displayGroupId\"
                                        data-allow-clear=\"true\"
                                        data-initial-key=\"displayGroupIds[]\"
                                        multiple>
                                </select>
                            </div>

                            ";
        // line 127
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Groups");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        yield "                            <div class=\"form-group mr-2 mb-1 pagedSelect\" style=\"min-width: 200px\">
                                <label class=\"control-label mr-1\" for=\"DisplayGroupList\" title=\"\"
                                       accesskey=\"\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                                <select id=\"DisplayGroupList\" class=\"form-control\" name=\"displayGroupIds[]\"
                                        data-width=\"100%\"
                                        data-placeholder=\"";
        // line 133
        echo __("Display Groups");
        yield "\"
                                        data-search-url=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search"), "html", null, true);
        yield "\"
                                        data-search-term=\"displayGroup\"
                                        data-id-property=\"displayGroupId\"
                                        data-text-property=\"displayGroup\"
                                        data-allow-clear=\"true\"
                                        data-initial-key=\"displayGroupIds[]\"
                                        multiple>
                                </select>
                            </div>

                            ";
        // line 144
        $context["label"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Direct Schedule?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 145
        yield "                            ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show only events scheduled directly on selected Displays/Groups");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        yield "                            <div class=\"form-group mr-1 mb-1\">
                                <label class=\"control-label mr-1\" title=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "\" for=\"directSchedule\" accesskey=\"\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "</label>
                                <div>
                                    <div class=\"input-group\" style=\"height: 34px\">
                                        <div class=\"input-group-text h-100\">
                                            <input title=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "\" type=\"checkbox\" id=\"directSchedule\" name=\"directSchedule\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 157
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Only show schedules which appear on all filtered displays/groups?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        yield "                            ";
        $context["label"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Shared Schedule?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        yield "                            <div class=\"form-group mr-1 mb-1\">
                                <label class=\"control-label mr-1\" title=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "\" for=\"sharedSchedule\" accesskey=\"\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "</label>
                                <div>
                                    <div class=\"input-group\" style=\"height: 34px\">
                                        <div class=\"input-group-text h-100\">
                                            <input title=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "\" type=\"checkbox\" id=\"sharedSchedule\" name=\"sharedSchedule\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 170
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Geo Aware?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 171
        yield "                            ";
        $context["options"] = [["id" => null, "name" => __("Both")], ["id" => 0, "name" => __("No")], ["id" => 1, "name" => __("Yes")]];
        // line 176
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["geoAware", "single", ($context["title"] ?? null), "both", ($context["options"] ?? null), "id", "name", "", "non-agenda-filter"], 176, $context, $this->getSourceContext());
        yield "

                            ";
        // line 178
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Recurring?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 179
        yield "                            ";
        $context["options"] = [["id" => null, "name" => "Both"], ["id" => 0, "name" => __("No")], ["id" => 1, "name" => __("Yes")]];
        // line 184
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["recurring", "single", ($context["title"] ?? null), "both", ($context["options"] ?? null), "id", "name", "", "non-agenda-filter"], 184, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>

                <div class=\"card-header\">
                    <ul class=\"nav nav-tabs card-header-tabs\">
                        <li class=\"nav-item\">
                            <a class=\"schedule-nav nav-link active\" id=\"grid-tab\" href=\"#grid-view\" role=\"tab\"
                               data-toggle=\"tab\"><span>";
        // line 193
        echo __("Grid");
        yield "</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"schedule-nav nav-link\" id=\"calendar-tab\" href=\"#calendar-view\"
                               data-calendar-view=\"month\" role=\"tab\"
                               data-toggle=\"tab\"><span>";
        // line 198
        echo __("Calendar");
        yield "</span></a>
                        </li>
                    </ul>
                </div>

                <div class=\"card-body\">
                    <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"grid-view\">
                        <div class=\"XiboData pt-3\">
                            <table id=\"schedule-grid\" class=\"table table-striped w-100\"
                                   data-state-preference-name=\"scheduleGrid\">
                                <thead>
                                <tr>
                                    <th>";
        // line 211
        echo __("ID");
        yield "</th>
                                    <th></th>
                                    <th>";
        // line 213
        echo __("Event Type");
        yield "</th>
                                    <th>";
        // line 214
        echo __("Name");
        yield "</th>
                                    <th>";
        // line 215
        echo __("Start");
        yield "</th>
                                    <th>";
        // line 216
        echo __("End");
        yield "</th>
                                    <th>";
        // line 217
        echo __("Event");
        yield "</th>
                                    <th>";
        // line 218
        echo __("Campaign ID");
        yield "</th>
                                    <th>";
        // line 219
        echo __("Display Groups");
        yield "</th>
                                    <th>";
        // line 220
        echo __("SoV");
        yield "</th>
                                    <th>";
        // line 221
        echo __("Max Plays per Hour");
        yield "</th>
                                    <th>";
        // line 222
        echo __("Geo Aware?");
        yield "</th>
                                    <th>";
        // line 223
        echo __("Recurring?");
        yield "</th>
                                    <th>";
        // line 224
        echo __("Recurrence Description");
        yield "</th>
                                    <th>";
        // line 225
        echo __("Recurrence Type");
        yield "</th>
                                    <th>";
        // line 226
        echo __("Recurrence Interval");
        yield "</th>
                                    <th>";
        // line 227
        echo __("Recurrence Repeats On");
        yield "</th>
                                    <th>";
        // line 228
        echo __("Recurrence End");
        yield "</th>
                                    <th>";
        // line 229
        echo __("Priority?");
        yield "</th>
                                    <th>";
        // line 230
        echo __("Criteria?");
        yield "</th>
                                    <th>";
        // line 231
        echo __("Created On");
        yield "</th>
                                    <th>";
        // line 232
        echo __("Updated On");
        yield "</th>
                                    <th>";
        // line 233
        echo __("Modified By");
        yield "</th>
                                    <th class=\"rowMenu\"></th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"calendar-view\">
                        <div class=\"row\">
                            <div class=\"text-center text-danger col-lg-12\" id=\"calendar-error-message\">
                                <span>";
        // line 246
        echo __("Please select a Display, Display Group or Layout / Campaign to view the calendar");
        yield "</span>
                            </div>
                            <div class=\"xibo-calendar-controls-container align-content-start justify-content-end col-xl-12 pl-0 form-inline text-right\">
                                <div class=\"btn-group xibo-calendar-controls xibo-agenda-calendar-controls\">
                                    <button type=\"button\" class=\"btn btn-primary\" data-calendar-nav=\"prev\"><span
                                                class=\"fa fa-backward\"></span> ";
        // line 251
        echo __("Prev");
        yield "</button>
                                    <button type=\"button\" class=\"btn btn-white\"
                                            data-calendar-nav=\"today\">";
        // line 253
        echo __("Today");
        yield "</button>
                                    <button type=\"button\" class=\"btn btn-primary\"
                                            data-calendar-nav=\"next\">";
        // line 255
        echo __("Next");
        yield " <span
                                                class=\"fa fa-forward\"></span></button>
                                </div>
                                <div class=\"xibo-calendar-controls xibo-agenda-calendar-controls\">
                                    <div class=\"inputgroup date calendar-date-picker-input\" id=\"dateInput\">
                                        <span class=\"btn btn-outline-dark date-open-button\" role=\"button\">
                                            <i class=\"fa fa-calendar\"></i>
                                        </span>
                                        <input type=\"text\" class=\"form-control\" id=\"dateInputLink\" data-input/>
                                    </div>
                                </div>
                                <div class=\"btn-group xibo-calendar-controls\">
                                    ";
        // line 267
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.agenda"], "method", false, false, false, 267)) {
            // line 268
            yield "                                        <button type=\"button\" id=\"btn-agenda-view\" class=\"btn btn-outline-info\" data-calendar-view=\"agenda\">";
            echo __("Agenda");
            yield "</button>
                                    ";
        }
        // line 270
        yield "                                    <button type=\"button\" id=\"btn-month-view\" class=\"btn btn-outline-info\" data-calendar-view=\"month\">";
        echo __("Back");
        yield "</button>
                                </div>
                            </div>
                            <div class=\"text-center col-xl-12\">
                                <h1 class=\"page-header\"></h1>
                                <div class=\"calendar-loading\">
                                    <span id=\"calendar-progress\" class=\"fa fa-spin fa-cog\"></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-12 cal-event-agenda-filter\">
                                <!-- Time Slider -->
                                <div class=\"cal-event-time-bar\">
                                    <div class=\"btn slider-step-btn time-picker-step-btn\" data-step=\"-1\">
                                        <span class=\"fa fa-step-backward\"></span>
                                    </div>
                                    <input id=\"timePicker\" type=\"text\"
                                           data-slider-id='timePickerSlider'
                                           data-slider-min=\"0\"
                                           data-slider-max=\"1439\"
                                           data-slider-step=\"1\"
                                           data-slider-value=\"0\"
                                           data-slider-handle=\"square\"
                                    />
                                    <div class=\"btn slider-step-btn time-picker-step-btn\" data-step=\"1\">
                                        <span class=\"fa fa-step-forward\"></span>
                                    </div>
                                </div>

                                <!-- Geo location -->
                                <form class=\"form-inline cal-event-location\">
                                    <button id=\"toggleMap\" type=\"button\" class=\"btn btn-primary pull-right\"
                                            title=\"";
        // line 303
        echo __("Map");
        yield "\"><i class=\"fa fa-map\"></i></button>
                                    <button id=\"getLocation\" type=\"button\" class=\"btn btn-white pull-right\"
                                            title=\"";
        // line 305
        echo __("Get browser location!");
        yield "\"><i class=\"fa fa-map-marker\"></i>
                                    </button>
                                    <button id=\"clearLocation\" type=\"button\" class=\"btn btn-white pull-right\"
                                            title=\"";
        // line 308
        echo __("Clear coordinates!");
        yield "\"><i class=\"fa fa-times\"></i>
                                    </button>
                                    <div class=\"form-group pull-right\">
                                        <input type=\"email\" class=\"form-control\" id=\"geoLongitude\"
                                               placeholder=\"Longitude\">
                                    </div>
                                    <div class=\"form-group pull-right\">
                                        <input type=\"text\" class=\"form-control\" id=\"geoLatitude\" placeholder=\"Latitude\">
                                    </div>
                                </form>

                                <!-- Geo location map -->
                                <div class=\"cal-event-location-map\" data-default-lat=\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defaultLat"] ?? null), "html", null, true);
        yield "\"
                                     data-default-long=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defaultLong"] ?? null), "html", null, true);
        yield "\">
                                    <div id=\"geoFilterAgendaMap\" style=\"height: 400px; width: 100%\"
                                         class=\"d-none\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div id=\"CalendarContainer\" data-event-source=\"";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.calendar.data"), "html", null, true);
        yield "\"
                                 data-agenda-link=\"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.events", ["id" => ":id"]), "html", null, true);
        yield "\"
                                 data-calendar-type=\"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "CALENDAR_TYPE", [], "any", false, false, false, 330), "html", null, true);
        yield "\" class=\"col-sm-12\">
                                <div class=\"calendar-view\" id=\"Calendar\"></div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"cal-legend\">
                                    <ul>
                                        <li class=\"event-always\"><span
                                                    class=\"fa fa-retweet\"></span> ";
        // line 339
        echo __("Always showing");
        yield "</li>
                                        <li class=\"event-info\"><span
                                                    class=\"fa fa-desktop\"></span> ";
        // line 341
        echo __("Single Display");
        yield "</li>
                                        <li class=\"event-success\"><span
                                                    class=\"fa fa-desktop\"></span> ";
        // line 343
        echo __("Multi Display");
        yield "</li>
                                        <li class=\"event-important\"><span
                                                    class=\"fa fa-bullseye\"></span> ";
        // line 345
        echo __("Priority");
        yield "</li>
                                        <li class=\"event-special\"><span
                                                    class=\"fa fa-repeat\"></span> ";
        // line 347
        echo __("Recurring");
        yield "</li>
                                        <li class=\"event-inverse\"><span
                                                    class=\"fa fa-lock\"></span> ";
        // line 349
        echo __("View Only");
        yield "</li>
                                        <li class=\"event-command\"><span
                                                    class=\"fa fa-wrench\"></span> ";
        // line 351
        echo __("Command");
        yield "</li>
                                        <li class=\"event-interrupt\"><span
                                                    class=\"fa fa-hand-paper\"></span> ";
        // line 353
        echo __("Interrupt");
        yield "</li>
                                        <li class=\"event-geo-location\"><span
                                                    class=\"fa fa-map-marker\"></span> ";
        // line 355
        echo __("Geo Location");
        yield "</li>
                                        <li class=\"event-action\"><span
                                                    class=\"fa fa-paper-plane \"></span> ";
        // line 357
        echo __("Interactive Action");
        // line 358
        yield "                                        </li>
                                        <li class=\"event-sync\"><span
                                                    class=\"fa fa-refresh\"></span> ";
        // line 360
        echo __("Synchronised");
        yield "</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 373
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 374
        yield "    ";
        // line 375
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 377
        yield "        var scheduleRecurrenceDeleteUrl = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.recurrence.delete.form", ["id" => ":id"]), "html", null, true);
        yield "\";
        var layoutPreviewUrl = \"";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.preview", ["id" => ":id"]), "html", null, true);
        yield "\";
        var scheduleSearchUrl = \"";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.search"), "html", null, true);
        yield "\";

        ";
        // line 382
        yield "        var schedulePageTrans = {
            always: \"";
        // line 383
        echo __("Always");
        yield "\",
            adjustTimesofTimer: \"";
        // line 384
        echo __("Adjust the times of this timer. To add or remove a day, use the Display Profile.");
        yield "\",
            daysOfTheWeek: {
                monday: \"";
        // line 386
        echo __("Monday");
        yield "\",
                tuesday: \"";
        // line 387
        echo __("Tuesday");
        yield "\",
                wednesday: \"";
        // line 388
        echo __("Wednesday");
        yield "\",
                thursday: \"";
        // line 389
        echo __("Thursday");
        yield "\",
                friday: \"";
        // line 390
        echo __("Friday");
        yield "\",
                saturday: \"";
        // line 391
        echo __("Saturday");
        yield "\",
                sunday: \"";
        // line 392
        echo __("Sunday");
        yield "\",
            },
        };
    </script>

    ";
        // line 398
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 398), "html", null, true);
        yield "dist/leaflet.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 399), "html", null, true);
        yield "dist/pages/schedule-page.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "schedule-page.twig";
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
        return array (  882 => 399,  871 => 398,  863 => 392,  859 => 391,  855 => 390,  851 => 389,  847 => 388,  843 => 387,  839 => 386,  834 => 384,  830 => 383,  827 => 382,  822 => 379,  818 => 378,  813 => 377,  808 => 375,  806 => 374,  802 => 373,  785 => 360,  781 => 358,  779 => 357,  774 => 355,  769 => 353,  764 => 351,  759 => 349,  754 => 347,  749 => 345,  744 => 343,  739 => 341,  734 => 339,  722 => 330,  718 => 329,  714 => 328,  704 => 321,  700 => 320,  685 => 308,  679 => 305,  674 => 303,  637 => 270,  631 => 268,  629 => 267,  614 => 255,  609 => 253,  604 => 251,  596 => 246,  580 => 233,  576 => 232,  572 => 231,  568 => 230,  564 => 229,  560 => 228,  556 => 227,  552 => 226,  548 => 225,  544 => 224,  540 => 223,  536 => 222,  532 => 221,  528 => 220,  524 => 219,  520 => 218,  516 => 217,  512 => 216,  508 => 215,  504 => 214,  500 => 213,  495 => 211,  479 => 198,  471 => 193,  458 => 184,  455 => 179,  450 => 178,  444 => 176,  441 => 171,  436 => 170,  427 => 164,  418 => 160,  415 => 159,  409 => 158,  404 => 157,  395 => 151,  386 => 147,  383 => 146,  377 => 145,  372 => 144,  359 => 134,  355 => 133,  349 => 130,  345 => 128,  340 => 127,  326 => 116,  322 => 115,  316 => 112,  312 => 110,  307 => 109,  298 => 103,  294 => 102,  288 => 99,  284 => 98,  280 => 97,  275 => 95,  270 => 92,  264 => 91,  259 => 90,  253 => 88,  248 => 87,  242 => 85,  237 => 84,  231 => 82,  226 => 81,  220 => 79,  215 => 78,  209 => 76,  207 => 74,  206 => 73,  205 => 72,  204 => 71,  203 => 70,  202 => 69,  201 => 68,  200 => 67,  199 => 66,  198 => 65,  196 => 64,  190 => 63,  184 => 62,  178 => 61,  172 => 60,  166 => 59,  160 => 58,  154 => 57,  148 => 56,  142 => 55,  136 => 54,  131 => 53,  124 => 49,  119 => 47,  116 => 46,  112 => 45,  103 => 41,  99 => 39,  95 => 38,  90 => 37,  85 => 35,  81 => 34,  76 => 33,  73 => 32,  71 => 31,  68 => 30,  64 => 29,  55 => 27,  50 => 23,  48 => 25,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-page.twig", "/var/www/cms/views/schedule-page.twig");
    }
}
