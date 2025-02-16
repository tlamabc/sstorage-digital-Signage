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

/* dataset-rss-page.twig */
class __TwigTemplate_6933acb49c31235a19cc9290050cfb2d extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "dataset-rss-page.twig", 24)->unwrap();
        // line 25
        $context["dataSetName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSet", [], "any", false, false, false, 25);
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "dataset-rss-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        /* xgettext:no-php-format */        echo strtr(__("RSS Feeds for %dataSetName%"), array("%dataSetName%" => ($context["dataSetName"] ?? null), ));
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
        echo __("Add RSS");
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.rss.add.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add RSS");
        yield "</button>
        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        // line 32
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 36
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        $context["widgetTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            /* xgettext:no-php-format */            echo strtr(__("RSS Feeds for %dataSetName%"), array("%dataSetName%" => ($context["dataSetName"] ?? null), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["widgetTitle"] ?? null), "html", null, true);
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
                    <table id=\"datasets\" class=\"table table-striped\" data-state-preference-name=\"dataSetRssGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 53
        echo __("ID");
        yield "</th>
                                <th>";
        // line 54
        echo __("Title");
        yield "</th>
                                <th>";
        // line 55
        echo __("Author");
        yield "</th>
                                <th>";
        // line 56
        echo __("URL");
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

    // line 70
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table = \$(\"#datasets\").DataTable({
            \"language\": dataTablesLanguage,
            dom: dataTablesTemplate,
            serverSide: true,
            stateSave: true,
            stateDuration: 0,
            responsive: true,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 0, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.rss.search", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 85)]), "html", null, true);
        yield "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#datasets\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"id\" },
                { \"data\": \"title\" },
                { \"data\": \"author\" },
                {
                    \"orderable\": false,
                    \"data\": function (data, type, row, meta) {
                        if (type !== \"display\")
                            return \"\";

                        var url = window.location.origin + \"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.rss.feed", ["psk" => ":psk"]), "html", null, true);
        yield "\".replace(':psk', data.psk);

                        return \"<a href=\\\"\" + url + \"\\\" target=\\\"_blank\\\">\" + url + \"</a>\";
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
        dataTableAddButtons(table, \$('#datasets_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });

        /**
         * Configure the Query Building on DataSetRss Add/Edit forms.
         * @param dialog
         */
        function configureQueryBuilder(dialog) {
            // Order Clause
            var orderClauseFields = \$(\"#orderClause\");

            if (orderClauseFields.length === 0)
                return;

            var orderClauseTemplate = Handlebars.compile(\$(\"#dataSetViewOrderClauseTemplate\").html());
            var ascTitle = \"";
        // line 133
        echo __("Ascending");
        yield "\";
            var descTitle = \"";
        // line 134
        echo __("Descending");
        yield "\";

            if (dialog.data().extra.orderClauses.length === 0) {
                // Add a template row
                var context = {columns: dialog.data().extra.columns, title: \"1\", orderClause: \"\", orderClauseAsc: \"\", orderClauseDesc: \"\", buttonGlyph: \"fa-plus\", ascTitle: ascTitle, descTitle: descTitle};
                orderClauseFields.append(orderClauseTemplate(context));
            } else {
                // For each of the existing codes, create form components
                var i = 0;
                \$.each(dialog.data().extra.orderClauses, function (index, field) {
                    i++;

                    var direction = (field.orderClauseDirection === \"ASC\");

                    var context = {columns: dialog.data().extra.columns, title: i, orderClause: field.orderClause, orderClauseAsc: direction, orderClauseDesc: !direction, buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\"), ascTitle: ascTitle, descTitle: descTitle};

                    orderClauseFields.append(orderClauseTemplate(context));
                });
            }

            // Nabble the resulting buttons
            orderClauseFields.on(\"click\", \"button\", function (e) {
                e.preventDefault();

                // find the gylph
                if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                    var context = {columns: dialog.data().extra.columns, title: orderClauseFields.find('.form-group').length + 1, orderClause: \"\", orderClauseAsc: \"\", orderClauseDesc: \"\", buttonGlyph: \"fa-minus\", ascTitle: ascTitle, descTitle: descTitle};
                    orderClauseFields.append(orderClauseTemplate(context));
                } else {
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            });

            //
            // Filter Clause
            //
            var filterClauseFields = \$(\"#filterClause\");
            var filterClauseTemplate = Handlebars.compile(\$(\"#dataSetViewFilterClauseTemplate\").html());
            var filterOptions = [
                {
                    id: \"starts-with\",
                    value: \"";
        // line 176
        echo __("starts with");
        yield "\"
                },{
                    id: \"ends-with\",
                    value: \"";
        // line 179
        echo __("ends with");
        yield "\"
                },{
                    id: \"contains\",
                    value: \"";
        // line 182
        echo __("contains");
        yield "\"
                },{
                    id: \"equals\",
                    value: \"";
        // line 185
        echo __("equals");
        yield "\"
                },{
                    id: \"not-starts-with\",
                    value: \"";
        // line 188
        echo __("does not start with");
        yield "\"
                },{
                    id: \"not-ends-with\",
                    value: \"";
        // line 191
        echo __("does not end with");
        yield "\"
                },{
                    id: \"not-contains\",
                    value: \"";
        // line 194
        echo __("does not contain");
        yield "\"
                },{
                    id: \"not-equals\",
                    value: \"";
        // line 197
        echo __("does not equal");
        yield "\"
                },{
                    id: \"greater-than\",
                    value: \"";
        // line 200
        echo __("greater than");
        yield "\"
                },{
                    id: \"less-than\",
                    value: \"";
        // line 203
        echo __("less than");
        yield "\"
                },{
                    id: \"is-empty\",
                    value: \"";
        // line 206
        echo __("is empty");
        yield "\"
                },{
                    id: \"is-not-empty\",
                    value: \"";
        // line 209
        echo __("is not empty");
        yield "\"
                }
            ];
            var filterOperatorOptions = [
                {
                    id: \"OR\",
                    value: \"";
        // line 215
        echo __("Or");
        yield "\"
                },{
                    id: \"AND\",
                    value: \"";
        // line 218
        echo __("And");
        yield "\"
                }
            ];

            if (dialog.data().extra.filterClauses.length == 0) {
                // Add a template row
                context = {
                    columns: dialog.data().extra.columns,
                    filterOptions: filterOptions,
                    filterOperatorOptions: filterOperatorOptions,
                    title: \"1\",
                    filterClause: \"\",
                    filterClauseOperator: \"AND\",
                    filterClauseCriteria: \"\",
                    filterClauseValue: \"\",
                    buttonGlyph: \"fa-plus\"
                };
                filterClauseFields.append(filterClauseTemplate(context));
            } else {
                // For each of the existing codes, create form components
                var j = 0;
                \$.each(dialog.data().extra.filterClauses, function (index, field) {
                    j++;

                    var context = {
                        columns: dialog.data().extra.columns,
                        filterOptions: filterOptions,
                        filterOperatorOptions: filterOperatorOptions,
                        title: j,
                        filterClause: field.filterClause,
                        filterClauseOperator: field.filterClauseOperator,
                        filterClauseCriteria: field.filterClauseCriteria,
                        filterClauseValue: field.filterClauseValue,
                        buttonGlyph: ((j == 1) ? \"fa-plus\" : \"fa-minus\")
                    };

                    filterClauseFields.append(filterClauseTemplate(context));
                });
            }

            // Nabble the resulting buttons
            filterClauseFields.on(\"click\", \"button\", function (e) {
                e.preventDefault();

                // find the gylph
                if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                    var context = {
                        columns: dialog.data().extra.columns,
                        filterOptions: filterOptions,
                        filterOperatorOptions: filterOperatorOptions,
                        title: filterClauseFields.find('.form-group').length + 1,
                        filterClause: \"\",
                        filterClauseOperator: \"AND\",
                        filterClauseCriteria: \"\",
                        filterClauseValue: \"\",
                        buttonGlyph: \"fa-minus\"
                    };
                    filterClauseFields.append(filterClauseTemplate(context));
                } else {
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            });
        }

        // Equals helper for the templates below
        Handlebars.registerHelper('eq', function(v1, v2, opts) {
            if (v1 === v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });
    </script>

    ";
        // line 359
        yield "
        <script type=\"text/x-handlebars-template\" id=\"dataSetViewOrderClauseTemplate\">
            <div class=\"form-group row\">
                <label class=\"col-sm-1 control-label\" for=\"orderClause[]\">{{ title }}</label>
                <div class=\"col-sm-7\">
                    <select class=\"form-control\" name=\"orderClause[]\">
                        <option value=\"\"></option>
                        {{#each columns}}
                        <option value=\"{{ heading }}\" {{#eq heading ../orderClause}}selected{{/eq}}>{{ heading }}</option>
                        {{/each}}
                    </select>
                </div>
                <div class=\"col-sm-3\">
                    <label for=\"orderClauseDirection[]\">
                        <select class=\"form-control\" name=\"orderClauseDirection[]\">
                            <option value=\"ASC\" {{#if orderClauseAsc}}selected{{/if}}>{{ ascTitle }}</option>
                            <option value=\"DESC\" {{#if orderClauseDesc}}selected{{/if}}>{{ descTitle }}</option>
                        </select>
                    </label>
                </div>
                <div class=\"col-sm-1\">
                    <button class=\"btn btn-white\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
                </div>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"dataSetViewFilterClauseTemplate\">
            <div class=\"form-group row\">
                <label class=\"col-sm-1 control-label\" for=\"filterClause[]\">{{ title }}</label>
                <div class=\"col-sm-2\">
                    <label for=\"filterClauseOperator[]\" {{#eq title \"1\"}}class=\"d-none\"{{/eq}}>
                    <select class=\"form-control\" name=\"filterClauseOperator[]\">
                        {{#each filterOperatorOptions}}
                        <option value=\"{{ id }}\" {{#eq id ../filterClauseOperator}}selected{{/eq}}>{{ value }}</option>
                        {{/each}}
                    </select>
                    </label>
                </div>
                <div class=\"col-sm-3\">
                    <select class=\"form-control\" name=\"filterClause[]\">
                        <option value=\"\"></option>
                        {{#each columns}}
                        <option value=\"{{ heading }}\" {{#eq heading ../filterClause}}selected{{/eq}}>{{ heading }}</option>
                        {{/each}}
                    </select>
                </div>
                <div class=\"col-sm-3\">
                    <label for=\"filterClauseCriteria[]\">
                        <select class=\"form-control\" name=\"filterClauseCriteria[]\">
                            {{#each filterOptions}}
                            <option value=\"{{ id }}\" {{#eq id ../filterClauseCriteria}}selected{{/eq}}>{{ value }}</option>
                            {{/each}}
                        </select>
                    </label>
                </div>
                <div class=\"col-sm-2\">
                    <label for=\"filterClauseValue[]\">
                        <input class=\"form-control\" name=\"filterClauseValue[]\" type=\"text\" value=\"{{ filterClauseValue }}\" />
                    </label>
                </div>
                <div class=\"col-sm-1\">
                    <button class=\"btn btn-white\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
                </div>
            </div>
        </script>

    ";
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dataset-rss-page.twig";
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
        return array (  434 => 359,  356 => 218,  350 => 215,  341 => 209,  335 => 206,  329 => 203,  323 => 200,  317 => 197,  311 => 194,  305 => 191,  299 => 188,  293 => 185,  287 => 182,  281 => 179,  275 => 176,  230 => 134,  226 => 133,  190 => 100,  172 => 85,  154 => 71,  150 => 70,  132 => 56,  128 => 55,  124 => 54,  120 => 53,  105 => 41,  100 => 39,  97 => 38,  91 => 37,  87 => 36,  79 => 32,  71 => 31,  68 => 30,  64 => 29,  55 => 27,  50 => 23,  48 => 25,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-rss-page.twig", "/var/www/cms/views/dataset-rss-page.twig");
    }
}
