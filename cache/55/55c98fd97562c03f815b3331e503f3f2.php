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

/* saved-report-page.twig */
class __TwigTemplate_bf316682c96b0c72b09379c3008dfb16 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "saved-report-page.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "saved-report-page.twig", 24);
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
        <button class=\"btn btn-primary XiboRedirectButton\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.view"), "html", null, true);
        yield "\"><i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> ";
        echo __("Report Schedules");
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
        echo __("Saved reports");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"savedreportView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">

                            ";
        // line 44
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["saveAs", ($context["title"] ?? null)], 45, $context, $this->getSourceContext());
        yield "

                            ";
        // line 47
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Owner");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items owned by the selected User.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 61
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 61, $context, $this->getSourceContext());
        yield "

                            ";
        // line 63
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items belong to a report.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "                            ";
        $context["attributes"] = [["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""]];
        // line 70
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["reportName", "single", ($context["title"] ?? null), null, Twig\Extension\CoreExtension::merge([["name" => null, "description" => ""]], ($context["availableReports"] ?? null)), "name", "description", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null)], 70, $context, $this->getSourceContext());
        yield "

                            ";
        // line 72
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Only my reports?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_checkbox", ["onlyMyReport", ($context["title"] ?? null), 1], 73, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"savedreports\" class=\"table table-striped\" data-state-preference-name=\"savedreportGrid\">
                        <thead>
                        <tr>
                            <th>";
        // line 81
        echo __("Report Schedule");
        yield "</th>
                            <th>";
        // line 82
        echo __("Saved as");
        yield "</th>
                            <th>";
        // line 83
        echo __("Report Type");
        yield "</th>
                            <th>";
        // line 84
        echo __("Generated on");
        yield "</th>
                            <th>";
        // line 85
        echo __("Owner");
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

    // line 99
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table;
        \$(document).ready(function() {

            var url_string = window.location.href;
            var url = new URL(url_string);
            var reportName = url.searchParams.get(\"reportName\");

            if (reportName !== undefined && reportName != null) {
                \$('#reportName').val(reportName).trigger('change');
            }

            table = \$(\"#savedreports\").DataTable({
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
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("savedreport.search"), "html", null, true);
        yield "\",
                    \"data\": function(d) {
                        \$.extend(d, \$(\"#savedreports\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    { \"data\": \"reportScheduleName\"},
                    { \"data\": \"saveAs\"},
                    { \"data\": \"reportName\", \"visible\": false},
                    {
                        \"data\": \"generatedOn\",
                        \"render\": dataTableDateFromUnix
                    },
                    { \"data\": \"owner\"},
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });
            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#savedreports_wrapper').find('.dataTables_buttons'));

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
        return "saved-report-page.twig";
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
        return array (  233 => 124,  205 => 100,  201 => 99,  183 => 85,  179 => 84,  175 => 83,  171 => 82,  167 => 81,  155 => 73,  150 => 72,  144 => 70,  141 => 65,  135 => 64,  130 => 63,  124 => 61,  121 => 49,  115 => 48,  110 => 47,  104 => 45,  99 => 44,  91 => 39,  86 => 37,  83 => 36,  79 => 35,  71 => 31,  65 => 30,  59 => 29,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "saved-report-page.twig", "/var/www/cms/views/saved-report-page.twig");
    }
}
