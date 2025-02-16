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

/* dataset-dataentry-page.twig */
class __TwigTemplate_21a879792bbe17434bffe39392e96f59 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "dataset-dataentry-page.twig", 24)->unwrap();
        // line 25
        $context["dataSetName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSet", [], "any", false, false, false, 25);
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "dataset-dataentry-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        /* xgettext:no-php-format */        echo strtr(__("Data Entry for %dataSetName%"), array("%dataSetName%" => ($context["dataSetName"] ?? null), ));
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
        echo __("Add a row to the end of this DataSet");
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.data.add.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Row");
        yield "</button>
        <button class=\"btn btn-primary toggleMultiSelectMode\" id=\"toggleMultiSelectMode\" title=\"";
        // line 32
        echo __("Click to toggle between Data Edit and Multi Select modes");
        yield "\"><i class=\"fa fa-object-group\" aria-hidden=\"true\"></i> <span class=\"button-text\">";
        echo __("Multi Select Mode");
        yield "</span></button>
        <button class=\"btn btn-danger d-none deleteSelectedRows\" id=\"deleteSelectedRows\" title=\"";
        // line 33
        echo __("Click to delete selected rows");
        yield "\" disabled=\"disabled\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> <span class=\"button-text\">";
        echo __("Delete Rows");
        yield "</span></button>
        <button class=\"btn btn-info XiboRedirectButton\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.column.view", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 34)]), "html", null, true);
        yield "\"><i class=\"fa fa-columns\" aria-hidden=\"true\"></i> ";
        echo __("View Columns");
        yield "</button>
        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        // line 35
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 40
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "    ";
        $context["widgetTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            /* xgettext:no-php-format */            echo strtr(__("Data Entry for %dataSetName%"), array("%dataSetName%" => ($context["dataSetName"] ?? null), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["widgetTitle"] ?? null), "html", null, true);
        yield " | <strong class=\"dataset-edit-title-mode widget-sub-title\">";
        echo __("Edit Mode");
        yield "</strong><span title=\"";
        echo __("Click on any row to edit");
        yield "\" class=\"badge badge-pill badge-secondary px-1 mx-1\">?</span></div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "getColumn", [], "method", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 50
            yield "                                ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "dataSetColumnTypeId", [], "any", false, false, false, 50) == 1) && ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "dataTypeId", [], "any", false, false, false, 50) == 1) || (CoreExtension::getAttribute($this->env, $this->source, $context["col"], "dataTypeId", [], "any", false, false, false, 50) == 2))) && (CoreExtension::getAttribute($this->env, $this->source, $context["col"], "showFilter", [], "any", false, false, false, 50) == 1))) {
                // line 51
                yield "                                    ";
                yield CoreExtension::callMacro($macros["inline"], "macro_input", [CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 51), CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 51)], 51, $context, $this->getSourceContext());
                yield "
                                ";
            }
            // line 53
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"datasets\" class=\"table table-striped\" data-image-url=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
        yield "?preview=1&width=150&height=150\">
                        <thead>
                        <tr>
                            <th>";
        // line 61
        echo __("ID");
        yield "</th>
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "getColumn", [], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 63
            yield "                                <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 63), "html", null, true);
            yield "</th>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                            <th></th>
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

    // line 79
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">

        var imageUrl = \$(\"#datasets\").data(\"imageUrl\");
        var cols = [];
        var editMode = true;
        var editModeTitleTrans = \"";
        // line 85
        echo __("Edit Mode");
        yield "\";
        var multiSelectTitleTrans = \"";
        // line 86
        echo __("Multi Select Mode");
        yield "\";
        var editModeHelpTrans = \"";
        // line 87
        echo __("Click on any row to edit");
        yield "\";
        var multiSelectHelpTrans = \"";
        // line 88
        echo __("Select one or more rows to delete");
        yield "\";
        const entityMap = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '\"': '&quot;',
            \"'\": '&#39;',
            '/': '&#x2F;',
            '`': '&#x60;',
            '=': '&#x3D;'
        };

        function sanitizeHtml(string) {
            return String(string).replace(/[&<>\"'`=\\/]/g, function (s) {
                return entityMap[s];
            });
        }

        function validateHTMLData(str) {
            let doc = new DOMParser().parseFromString(str, \"text/html\");

            // If valid html, sanitize and format as a code
            if (Array.from(doc.body.childNodes).some(node => node.nodeType === 1)) {
                return `<code>\${sanitizeHtml(str)}</code>`;
            }

            return str;
        }

        cols.push({ \"name\": \"id\", \"data\": \"id\" });
        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "getColumn", [], "method", false, false, false, 118));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 119
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "dataTypeId", [], "any", false, false, false, 119) == 3)) {
                // line 120
                yield "                cols.push({ \"data\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 120), "html", null, true);
                yield "\", \"orderable\": ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "showSort", [], "any", false, false, false, 120) == 1)) {
                    yield "true";
                } else {
                    yield "false";
                }
                yield ", \"render\": dataTableDateFromIso });
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 121
$context["col"], "dataTypeId", [], "any", false, false, false, 121) == 5)) {
                // line 122
                yield "                cols.push({ \"data\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 122), "html", null, true);
                yield "\", \"orderable\": ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "showSort", [], "any", false, false, false, 122) == 1)) {
                    yield "true";
                } else {
                    yield "false";
                }
                yield ", \"render\": function(data, type, row) {
                        if (type != \"display\")
                            return data;

                        if (data == null)
                            return \"\";

                        return '<img src=\"' + imageUrl.replace(\":id\", data) + '\"/>';
                    }
                });
            ";
            } else {
                // line 133
                yield "                cols.push({
                    \"data\": \"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 134), "html", null, true);
                yield "\",
                    \"orderable\": ";
                // line 135
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "showSort", [], "any", false, false, false, 135) == 1)) {
                    yield "true";
                } else {
                    yield "false";
                }
                yield ",
                    \"render\": function(data) {
                        return validateHTMLData(data);
                    }
                });
            ";
            }
            // line 141
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "
        cols.push({
            \"orderable\": false,
            \"data\": function(data, type, row, meta) {
                if (type != \"display\")
                    return \"\";

                var url = \"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.data.delete.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 149), "rowId" => ":rowId"]), "html", null, true);
        yield "\".replace(\":rowId\", data.id);

                return \"<a href=\\\"\" + url + \"\\\" class=\\\"XiboFormButton\\\"><span class=\\\"fa fa-times\\\"></span></a>\";
            }
        });

        var table = \$(\"#datasets\").DataTable({ \"language\": dataTablesLanguage,
            dom: dataTablesTemplate,
            serverSide: true, stateSave: true, stateDuration: 0,
            filter: false,
            responsive: true,
            searchDelay: 3000,
            \"order\": [[ 0, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.data.search", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 163)]), "html", null, true);
        yield "\",
                \"data\": function(dataToSend) {
                    var data = {};
                    data.draw = dataToSend.draw;
                    data.length = dataToSend.length;
                    data.start = dataToSend.start;
                    data.order = dataToSend.order;
                    data.columns = [];
                    \$.each(dataToSend.columns, function (index, e) {
                        var col = {};
                        col.data = e.data;
                        if (e.orderable) {
                            data.columns.push(col);
                        } else {
                            data.columns.push({});
                        }
                    });

                    \$.extend(data, \$(\"#datasets\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    return data;
                },
                complete: function (response) {

                    if (response.responseJSON.data.exception != '' && response.responseJSON.data.exception != undefined) {
                        var error = response.responseJSON.data.exception;
                        \$(\"#datasets tbody\").html(error)
                    }
                }
            },
            \"columns\": cols
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#datasets_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });

        var dataSetEditFormOpen = _.debounce(function() {
            var data = table.row(\$(this)).data();

            // Load the edit form.
            var editUrl = \"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.data.edit.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 207), "rowId" => ":rowId"]), "html", null, true);
        yield "\".replace(\":rowId\", data.id);
            XiboFormRender(editUrl);
        }, 500, true);

        // default is Edit mode, hence this should be our onclick event and deleteRows button should be hidden.
        \$(\"#datasets tbody\").on('click', 'tr', dataSetEditFormOpen);

        // Toggle between Edit and Multi Select modes
        // we also switch between two different onclick events depending on the mode and show/hide deleteRows button.
        \$('#toggleMultiSelectMode').on(\"click\", function(e) {
            e.preventDefault();

            if (editMode) {
                // switch to multi select mode
                editMode = false;
                \$(this).find('.button-text').text(editModeTitleTrans);
                \$(this).find('i').removeClass('fa-object-group').addClass('fa-edit');
                \$('.dataset-edit-title-mode').text(multiSelectTitleTrans);
                \$('.widget-title .badge').attr('title', multiSelectHelpTrans);
                \$(\"#datasets tbody\").off('click', 'tr');
                \$('#datasets tbody tr.selected').removeClass('selected');
                \$(\".deleteSelectedRows\").removeClass('d-none');
                \$('#datasets tbody').on('click', 'tr', function(ev) {

                    // See if element has class already
                    var hasClass = \$(ev.currentTarget).hasClass('selected')

                    // Add class to the clicked one ( or remove it if there was already there )
                    \$(ev.currentTarget).toggleClass('selected', !hasClass);

                    // Change Delete button state according to the number of selected rows
                    if (\$('#datasets tbody tr.selected').length > 0) {
                        \$(\".deleteSelectedRows\").removeAttr('disabled');
                    } else {
                        \$(\".deleteSelectedRows\").attr('disabled', 'disabled');
                    }
                     
                });
            } else {
                // switch to edit mode
                editMode = true;
                \$(this).find('.button-text').text(multiSelectTitleTrans);
                \$(this).find('i').removeClass('fa-edit').addClass('fa-object-group');
                \$('.dataset-edit-title-mode').text(editModeTitleTrans);
                \$('.widget-title .badge').attr('title', editModeHelpTrans);
                \$(\".deleteSelectedRows\").addClass('d-none');
                \$(\"#datasets tbody\").off('click', 'tr');
                \$('#datasets tbody tr.selected').removeClass('selected');
                \$(\".deleteSelectedRows\").attr('disabled', 'disabled');
                \$(\"#datasets tbody\").on('click', 'tr', dataSetEditFormOpen);
            }
        });

        // get selected rows and their ids then pass it to dataSet data delete ajax call and reload the grid when done.
        \$('#deleteSelectedRows').on(\"click\", function(e) {
            e.preventDefault();

            var rows = [];
            var rowIds = [];
            var processedRows = 0;

            \$('#datasets tbody tr.selected').each(function(idx, ele) {
                rows.push(table.row(ele).data());
            });

            for (var i = 0; i < rows.length; i++) {
                rowIds.push(rows[i].id);
            }

            rowIds.forEach(function(id) {
                \$.ajax({
                    url: \"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.data.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 278), "rowId" => ":rowId"]), "html", null, true);
        yield "\".replace(\":rowId\", id),
                    type: \"DELETE\",
                    success: function (data) {
                        processedRows++;
                        if (processedRows === rowIds.length) {
                            table.ajax.reload();
                        }
                    }
                });
            });
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
        return "dataset-dataentry-page.twig";
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
        return array (  471 => 278,  397 => 207,  350 => 163,  333 => 149,  324 => 142,  318 => 141,  305 => 135,  301 => 134,  298 => 133,  277 => 122,  275 => 121,  264 => 120,  261 => 119,  257 => 118,  224 => 88,  220 => 87,  216 => 86,  212 => 85,  203 => 80,  199 => 79,  182 => 65,  173 => 63,  169 => 62,  165 => 61,  159 => 58,  153 => 54,  147 => 53,  141 => 51,  138 => 50,  134 => 49,  127 => 45,  118 => 43,  115 => 42,  109 => 41,  105 => 40,  97 => 35,  91 => 34,  85 => 33,  79 => 32,  71 => 31,  68 => 30,  64 => 29,  55 => 27,  50 => 23,  48 => 25,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-dataentry-page.twig", "/var/www/cms/views/dataset-dataentry-page.twig");
    }
}
