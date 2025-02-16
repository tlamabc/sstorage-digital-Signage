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

/* task-page.twig */
class __TwigTemplate_01eb69cf920894963c20ec210eed9945 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "task-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "task-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tasks"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 30
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "TASK_CONFIG_LOCKED_CHECKB", [], "any", false, false, false, 30) == 0) || (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "TASK_CONFIG_LOCKED_CHECKB", [], "any", false, false, false, 30) == "Unchecked"))) {
            // line 31
            yield "            <button class=\"btn btn-success XiboFormButton\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("task.add.form"), "html", null, true);
            yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Task");
            yield "</button>
        ";
        }
        // line 33
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 37
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 39
        echo __("Tasks");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"tasks\" class=\"table table-striped\" data-state-preference-name=\"taskGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 53
        echo __("ID");
        yield "</th>
                                <th>";
        // line 54
        echo __("Name");
        yield "</th>
                                <th>";
        // line 55
        echo __("Active");
        yield "</th>
                                <th>";
        // line 56
        echo __("Status");
        yield "</th>
                                <th>";
        // line 57
        echo __("Next Run");
        yield "</th>
                                <th>";
        // line 58
        echo __("Run Now");
        yield "</th>
                                <th>";
        // line 59
        echo __("Last Run");
        yield "</th>
                                <th>";
        // line 60
        echo __("Last Status");
        yield "</th>
                                <th>";
        // line 61
        echo __("Last Duration");
        yield "</th>
                                <th class=\"rowMenu\"></th>
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

    // line 75
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table = \$(\"#tasks\").DataTable({
            \"language\": dataTablesLanguage,
            dom: dataTablesTemplate,
            serverSide: true,
            stateSave: true,
            responsive: true,
            stateDuration: 0,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("task.search"), "html", null, true);
        yield "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#tasks\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"taskId\" , responsivePriority: 2},
                { \"data\": \"name\" , responsivePriority: 2},
                {
                    \"data\": \"isActive\",
                    responsivePriority: 2,
                    \"render\": dataTableTickCrossColumn
                },
                {
                    \"data\": \"status\",
                    \"render\": function (data, type, row) {
                        if (type !== \"display\")
                            return data;

                        var icon = \"\";
                        var title = \"\";
                        if (data === 1) {
                            if (moment(row.lastRunStartDt, \"X\").tz) {
                                title = \"PID: \" + row.pid + \" (\" + moment(row.lastRunStartDt, \"X\").tz(timezone).format(jsDateFormat) + \")\";
                            } else {
                                title = \"PID: \" + row.pid + \" (\" + moment(row.lastRunStartDt, \"X\").format(jsDateFormat) + \")\";
                            }
                            icon = \"fa-cogs\";
                        }
                        else if (data === 3) {
                            title = \"Exit: \" + row.lastRunExitCode;
                            icon = \"fa-bug\";
                        }
                        else if (data === 5) {
                            title = \"Time out\";
                            icon = \"fa-hourglass-o\";
                        }
                        else {
                            title = \"\";
                            icon = \"fa-clock-o\";
                        }

                        return '<span class=\"fa ' + icon + '\" title=\"' + title + '\"></span>';
                    }
                },
                {
                    \"data\": \"nextRunDt\",
                    \"orderable\": false,
                    \"render\": dataTableDateFromUnix
                },
                {
                    \"data\": \"runNow\",
                    \"render\": dataTableTickCrossColumn
                },
                {
                    \"data\": \"lastRunDt\",
                    \"render\": dataTableDateFromUnix
                },
                {
                    \"data\": \"lastRunStatus\",
                    \"render\": function (data, type, row) {
                        if (type !== \"display\")
                            return data;

                        var icon = \"\";
                        if (data === 4)
                            icon = \"fa-check\";
                        else
                            icon = \"fa-times\";

                        return '<span class=\"fa ' + icon + '\" title=\"' + ((row.lastRunMessage === null) ? \"\" : row.lastRunMessage) + '\"></span>';
                    }
                },
                {
                    \"data\": \"lastRunDuration\",
                    \"render\": function (data, type, row) {
                        if (type !== \"display\")
                            return data;

                        return (data === null) ? 0 : moment().startOf(\"day\").seconds(data).format(\"H:mm:ss\");
                    }
                },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#tasks_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "task-page.twig";
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
        return array (  187 => 90,  169 => 76,  165 => 75,  147 => 61,  143 => 60,  139 => 59,  135 => 58,  131 => 57,  127 => 56,  123 => 55,  119 => 54,  115 => 53,  100 => 41,  95 => 39,  92 => 38,  88 => 37,  79 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "task-page.twig", "/var/www/cms/views/task-page.twig");
    }
}
