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

/* dataset-column-page.twig */
class __TwigTemplate_798614bbd785100c66d88182bfa98cda extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "dataset-column-page.twig", 24)->unwrap();
        // line 25
        $context["dataSetName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSet", [], "any", false, false, false, 25);
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "dataset-column-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        /* xgettext:no-php-format */        echo strtr(__("Columns for %dataSetName%"), array("%dataSetName%" => ($context["dataSetName"] ?? null), ));
        yield " | ";
        return; yield '';
    }

    // line 29
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success XiboFormButton\" title=\"";
        // line 31
        echo __("Add Column");
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.column.add.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Column");
        yield "</button>
        <button class=\"btn btn-info XiboRedirectButton\" title=\"";
        // line 32
        echo __("View Data");
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.view.data", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
        echo __("View Data");
        yield "</button>
        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        // line 33
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 38
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        $context["widgetTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            /* xgettext:no-php-format */            echo strtr(__("Columns for %dataSetName%"), array("%dataSetName%" => ($context["dataSetName"] ?? null), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["widgetTitle"] ?? null), "html", null, true);
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"datasets\" class=\"table table-striped\" data-state-preference-name=\"dataSetColumnGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 55
        echo __("Heading");
        yield "</th>
                                <th>";
        // line 56
        echo __("DataType");
        yield "</th>
                                <th>";
        // line 57
        echo __("Column Type");
        yield "</th>
                                <th>";
        // line 58
        echo __("List Content");
        yield "</th>
                                <th>";
        // line 59
        echo __("Tooltip");
        yield "</th>
                                <th>";
        // line 60
        echo __("Order");
        yield "</th>
                                <th>";
        // line 61
        echo __("Required?");
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

    // line 75
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table = \$(\"#datasets\").DataTable({
            \"language\": dataTablesLanguage,
            dom: dataTablesTemplate,
            serverSide: true,
            stateSave: true,
            stateDuration: 0,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            filter: false,
            responsive: true,
            searchDelay: 3000,
            \"order\": [[ 0, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.column.search", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 90)]), "html", null, true);
        yield "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#datasets\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"heading\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"dataType\" },
                { \"data\": \"dataSetColumnType\" },
                { \"data\": \"listContent\" },
                { \"data\": \"tooltip\" },
                { \"data\": \"columnOrder\" },
                {
                    \"data\": \"isRequired\",
                    \"render\": dataTableTickCrossColumn,
                    \"visible\": false,
                    \"name\": \"isRequired\"
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
        dataTableAddButtons(table, \$('#datasets_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });

        function dataSetColumnFormOpen(dialog) {
            formHelpers.setupPhpDateFormatPopover(dialog)

            // remote DataSet source
            onDataTypeChanged(dialog);
            \$(dialog).find('#dataTypeId, #dataSetColumnTypeId').on('change', function() {
                onDataTypeChanged(dialog);
            });
        }

        function onDataTypeChanged(dialog)
        {
            var dataTypeId = \$(dialog).find('#dataTypeId').val();
            var dataSetColumnTypeId = \$(dialog).find('#dataSetColumnTypeId').val();
            var \$dateFormat = \$(dialog).find('.dateFormat');

            if (dataSetColumnTypeId == 3 && dataTypeId == 3) {
                \$dateFormat.removeClass('d-none')
            } else {
                \$dateFormat.addClass('d-none')
            }
        }
    </script>

    <style>
        .popover{
            max-width: 70%;
        }
    </style>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dataset-column-page.twig";
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
        return array (  192 => 90,  174 => 76,  170 => 75,  152 => 61,  148 => 60,  144 => 59,  140 => 58,  136 => 57,  132 => 56,  128 => 55,  113 => 43,  108 => 41,  105 => 40,  99 => 39,  95 => 38,  87 => 33,  79 => 32,  71 => 31,  68 => 30,  64 => 29,  55 => 27,  50 => 23,  48 => 25,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-column-page.twig", "/var/www/cms/views/dataset-column-page.twig");
    }
}
