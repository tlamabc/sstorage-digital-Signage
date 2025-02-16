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

/* report-schedule-page.twig */
class __TwigTemplate_4a5c22a797a770d5915a60b959bb1a86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "report-schedule-page.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "report-schedule-page.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success XiboRedirectButton\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("report.view"), "html", null, true);
        yield "\"><i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> ";
        echo __("Back to dashboard");
        yield "</button>
        <button class=\"btn btn-info XiboRedirectButton\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("savedreport.view"), "html", null, true);
        yield "\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
        echo __("Saved Reports");
        yield "</button>
        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        // line 31
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 35
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">
            <span>";
        // line 38
        echo __("Report Schedule");
        yield "</span>
            <span class=\"fa fa-info-circle widget-title-info px-1\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-content=\"";
        // line 39
        echo __("The report will be available 6AM every day.");
        yield "\"></span>
        </div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"reportscheduleView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 46
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["reportScheduleId", ($context["title"] ?? null)], 47, $context, $this->getSourceContext());
        yield "

                            ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["name", ($context["title"] ?? null)], 50, $context, $this->getSourceContext());
        yield "

                            ";
        // line 52
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Owner");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items owned by the selected User.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 66
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 66, $context, $this->getSourceContext());
        yield "

                            ";
        // line 68
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items belong to a report.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        yield "                            ";
        $context["attributes"] = [["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""]];
        // line 75
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["reportName", "single", ($context["title"] ?? null), null, Twig\Extension\CoreExtension::merge([["name" => null, "description" => ""]], ($context["availableReports"] ?? null)), "name", "description", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null)], 75, $context, $this->getSourceContext());
        yield "

                            ";
        // line 77
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Only my schedules?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_checkbox", ["onlyMySchedules", ($context["title"] ?? null), 1], 78, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"reportschedules\" class=\"table table-striped\" data-state-preference-name=\"reportscheduleGrid\">
                        <thead>
                        <tr>
                            <th>";
        // line 86
        echo __("Name");
        yield "</th>
                            <th>";
        // line 87
        echo __("Report Name");
        yield "</th>
                            <th>";
        // line 88
        echo __("Schedule");
        yield "</th>
                            <th>";
        // line 89
        echo __("Owner");
        yield "</th>
                            <th>";
        // line 90
        echo __("Last Run");
        yield "</th>
                            <th>";
        // line 91
        echo __("Next Run");
        yield "</th>
                            <th>";
        // line 92
        echo __("Previous Run");
        yield "</th>
                            <th>";
        // line 93
        echo __("Active");
        yield "</th>
                            <th>";
        // line 94
        echo __("Start time");
        yield "</th>
                            <th>";
        // line 95
        echo __("End time");
        yield "</th>
                            <th>";
        // line 96
        echo __("Failed Message");
        yield "</th>
                            <th>";
        // line 97
        echo __("Created");
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
    </div>
";
        return; yield '';
    }

    // line 111
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">

        \$(function () {
            \$('[data-toggle=\"popover\"]').popover();
        });

        var table;
        \$(document).ready(function() {

            var url_string = window.location.href;
            var url = new URL(url_string);
            var reportScheduleId = url.searchParams.get(\"reportScheduleId\");
            var reportName = url.searchParams.get(\"reportName\");

            if (reportScheduleId !== undefined && reportScheduleId != null) {
                \$('#reportScheduleId').val(reportScheduleId);
            }

            if (reportName !== undefined && reportName != null) {
                // Grid will be reloaded again
                \$('#reportName').val(reportName).trigger('change');
            }

            table = \$(\"#reportschedules\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                \"order\": [[ 1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.search"), "html", null, true);
        yield "\",
                    \"data\": function(d) {
                        \$.extend(d, \$(\"#reportschedules\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    { \"data\": \"name\"},
                    { \"data\": \"reportName\"},
                    { \"data\": \"schedule\"},
                    { \"data\": \"owner\"},
                    {
                        \"data\": \"lastRunDt\",
                        \"render\": dataTableDateFromUnix
                    },
                    {
                        \"orderable\": false,
                        \"data\": \"nextRunDt\",
                        \"render\": dataTableDateFromUnix
                    },
                    {
                        \"data\": \"previousRunDt\",
                        \"render\": dataTableDateFromUnix,
                        \"visible\": false
                    },
                    {
                        \"data\": \"isActive\",
                        \"render\": function (data, type, row) {
                            if (type !== \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-check\";
                            else
                                icon = \"fa-times\";

                            return '<span class=\"fa ' + icon + '\" title=\"' + (row.isActiveDescription) + '\"></span>';
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"fromDt\",
                        \"render\": dataTableDateFromUnix,
                        \"visible\": false
                    },
                    {
                        \"data\": \"toDt\",
                        \"render\": dataTableDateFromUnix,
                        \"visible\": false
                    },
                    {
                        \"data\": \"message\",
                        \"render\": function (data, type, row) {
                            if (type !== \"display\")
                                return data;

                            var icon = \"\";
                            if (data !== null)
                                icon = \"fa-exclamation-triangle\";
                            else
                                icon = \"\";

                            return '<span class=\"fa ' + icon + '\" title=\"' + (row.message) + '\"></span>';
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"createdDt\",
                        \"render\": dataTableDateFromUnix
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#reportschedules_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        })

    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "report-schedule-page.twig";
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
        return array (  288 => 147,  249 => 112,  245 => 111,  227 => 97,  223 => 96,  219 => 95,  215 => 94,  211 => 93,  207 => 92,  203 => 91,  199 => 90,  195 => 89,  191 => 88,  187 => 87,  183 => 86,  171 => 78,  166 => 77,  160 => 75,  157 => 70,  151 => 69,  146 => 68,  140 => 66,  137 => 54,  131 => 53,  126 => 52,  120 => 50,  115 => 49,  109 => 47,  104 => 46,  97 => 42,  91 => 39,  87 => 38,  83 => 36,  79 => 35,  71 => 31,  65 => 30,  59 => 29,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "report-schedule-page.twig", "/var/www/cms/views/report-schedule-page.twig");
    }
}
