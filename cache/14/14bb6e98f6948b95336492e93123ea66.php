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

/* auditlog-page.twig */
class __TwigTemplate_bf9f5ba4b62e6de2ee6ce87179c1e853 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "auditlog-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "auditlog-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Audit Log"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success XiboFormButton\" title=\"";
        // line 30
        echo __("Export raw data to CSV");
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("auditLog.export.form"), "html", null, true);
        yield "\"><i class=\"fa fa-cloud-upload\" aria-hidden=\"true\"></i> ";
        echo __("Export");
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
        <div class=\"widget-title\">";
        // line 37
        echo __("Audit Log");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"auditView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">

                            ";
        // line 44
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("From Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_date", ["fromDt", ($context["title"] ?? null)], 45, $context, $this->getSourceContext());
        yield "

                            ";
        // line 47
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("To Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_date", ["toDt", ($context["title"] ?? null)], 48, $context, $this->getSourceContext());
        yield "

                            ";
        // line 50
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("User");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["user", ($context["title"] ?? null)], 51, $context, $this->getSourceContext());
        yield "

                            ";
        // line 53
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Entity");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["entity", ($context["title"] ?? null)], 54, $context, $this->getSourceContext());
        yield "

                            ";
        // line 56
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Entity ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["entityId", ($context["title"] ?? null)], 57, $context, $this->getSourceContext());
        yield "

                            ";
        // line 59
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("IP Address");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["ipAddress", ($context["title"] ?? null)], 60, $context, $this->getSourceContext());
        yield "

                            ";
        // line 62
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Message");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["message", ($context["title"] ?? null)], 63, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"logs\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 71
        echo __("ID");
        yield "</th>
                                <th>";
        // line 72
        echo __("Date");
        yield "</th>
                                <th>";
        // line 73
        echo __("User");
        yield "</th>
                                <th>";
        // line 74
        echo __("Entity");
        yield "</th>
                                <th>";
        // line 75
        echo __("Entity ID");
        yield "</th>
                                <th>";
        // line 76
        echo __("IP Address");
        yield "</th>
                                <th>";
        // line 77
        echo __("Message");
        yield "</th>
                                <th>";
        // line 78
        echo __("Object");
        yield "</th>
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

    // line 91
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        yield "    ";
        // line 112
        yield "
    <script type=\"text/x-handlebars-template\" id=\"table-array-viewer\">
        <a class=\"arrayViewerToggle\" href=\"#\"><span class=\"fa fa-search\"></span></a>
        <table class=\"arrayViewer table table-bordered\" data-state-preference-name=\"auditlogGrid\">
            <thead>
                <tr>
                    <th>{{ col1 }}</th>
                    <th>{{ col2 }}</th>
                </tr>
            </thead>
            <tbody>
                {{#each items}}
                <tr>
                    <td>{{ @key }}</td>
                    <td>{{ this }}</td>
                </tr>
                {{/each}}
            </tbody>
        </table>
    </script>
    ";
        yield "
    <script type=\"text/javascript\" nonce=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">

        \$(document).ready(function() {
            var arrayViewer = Handlebars.compile(\$(\"#table-array-viewer\").html());

            var table = \$(\"#logs\").DataTable({
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
                \"order\": [[0, \"desc\"]],
                ajax: {
                    url: \"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("auditLog.search"), "html", null, true);
        yield "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#logs\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"logId\", responsivePriority: 2},
                    {\"data\": \"logDate\", \"render\": dataTableDateFromUnix, responsivePriority: 2},
                    {\"data\": \"userName\", responsivePriority: 2},
                    {\"data\": \"entity\", responsivePriority: 2},
                    {
                        \"name\": \"entityId\",
                        responsivePriority: 2,
                        \"data\" : function (data) {
                            if (data.entityId === 0) {
                                return ''
                            }

                            return data.entityId;
                        }
                    },
                    {\"data\": \"ipAddress\", responsivePriority: 2},
                    {\"data\": \"message\", responsivePriority: 1},
                    {
                        \"data\": function (data, type, row, meta) {
                            if (type != \"display\")
                                return \"\";

                            return arrayViewer({\"col1\": \"";
        // line 159
        echo __("Property");
        yield "\", \"col2\": \"";
        echo __("Value");
        yield "\", \"items\": data.objectAfter});
                        },
                        \"sortable\": false,
                         responsivePriority: 1
                    }
                ]
            });

            table.on('draw', function (e, settings) {
                dataTableDraw(e, settings);

                \$(\".arrayViewerToggle\").click(function () {
                    \$(this).parent().find(\".arrayViewer\").toggle();
                });
            });
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#logs_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });

        function auditLogExportFormSubmit() {
            \$(\"#auditLogExportForm\").submit();
            XiboDialogClose();
        }

    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "auditlog-page.twig";
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
        return array (  315 => 159,  284 => 131,  263 => 113,  239 => 112,  237 => 92,  233 => 91,  216 => 78,  212 => 77,  208 => 76,  204 => 75,  200 => 74,  196 => 73,  192 => 72,  188 => 71,  176 => 63,  171 => 62,  165 => 60,  160 => 59,  154 => 57,  149 => 56,  143 => 54,  138 => 53,  132 => 51,  127 => 50,  121 => 48,  116 => 47,  110 => 45,  105 => 44,  97 => 39,  92 => 37,  89 => 36,  85 => 35,  77 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "auditlog-page.twig", "/var/www/cms/views/auditlog-page.twig");
    }
}
