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

/* dataset-page.twig */
class __TwigTemplate_b2d83150e33af020bf67b7d8e1d45473 extends Template
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
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "dataset-page.twig", 24)->unwrap();
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "dataset-page.twig", 25)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "dataset-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("DataSets"), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["dataset.add"], "method", false, false, false, 31)) {
            // line 32
            yield "            <button class=\"btn btn-success XiboFormButton btns\" title=\"";
            echo __("Add a new DataSet");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.add.form"), "html", null, true);
            yield "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add DataSet");
            yield "</button>
        ";
        }
        // line 34
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
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
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 40
        echo __("DataSets");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"dataSetView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\" onsubmit=\"return false\">
                            ";
        // line 46
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["dataSet", ($context["title"] ?? null)], 47, $context, $this->getSourceContext());
        yield "

                            ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items which match the provided code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["code", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 51, $context, $this->getSourceContext());
        yield "

                            ";
        // line 53
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Owner");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items owned by the selected User.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 67
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 67, $context, $this->getSourceContext());
        yield "

                            ";
        // line 69
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["folderId"], 69, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>

                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 76
        echo __("Search");
        yield "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 79
        echo __("Search in all folders");
        yield "\">";
        echo __("All Folders");
        yield "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 82
        echo __("No Folders matching the search term");
        yield "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 87
        echo __("Open / Close Folder Search options");
        yield "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"datasets\" class=\"table table-striped\" data-state-preference-name=\"dataSetGrid\" style=\"width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 95
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 96
        echo __("Name");
        yield "</th>
                                        <th>";
        // line 97
        echo __("Description");
        yield "</th>
                                        <th>";
        // line 98
        echo __("Code");
        yield "</th>
                                        <th>";
        // line 99
        echo __("Remote?");
        yield "</th>
                                        <th>";
        // line 100
        echo __("Real time?");
        yield "</th>
                                        <th>";
        // line 101
        echo __("Owner");
        yield "</th>
                                        <th>";
        // line 102
        echo __("Sharing");
        yield "</th>
                                        <th>";
        // line 103
        echo __("Last Sync");
        yield "</th>
                                        <th>";
        // line 104
        echo __("Data Last Modified");
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
        </div>
    </div>
";
        return; yield '';
    }

    // line 120
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table;
        \$(document).ready(function() {
            ";
        // line 124
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 124)) {
            // line 125
            yield "            disableFolders();
            ";
        }
        // line 127
        yield "
            table = \$(\"#datasets\").DataTable({
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
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.search"), "html", null, true);
        yield "\",
                    \"data\": function(d) {
                        \$.extend(d, \$(\"#datasets\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    { \"data\": \"dataSetId\", responsivePriority: 2 },
                    { \"data\": \"dataSet\", \"render\": dataTableSpacingPreformatted, responsivePriority: 2 },
                    { \"data\": \"description\", responsivePriority: 4 },
                    { \"data\": \"code\", responsivePriority: 3 },
                    {
                        \"data\": \"isRemote\",
                        responsivePriority: 3,
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        data: 'isRealTime',
                        responsivePriority: 3,
                        render: dataTableTickCrossColumn,
                    },
                    { \"data\": \"owner\", responsivePriority: 3 },
                    {
                        \"data\": \"groupsWithPermissions\",
                        responsivePriority: 3,
                        \"render\": dataTableCreatePermissions
                    },
                    {
                        \"data\": \"lastSync\",
                        responsivePriority: 4,
                        \"render\": dataTableDateFromUnix
                    },
                    {
                        \"data\": \"lastDataEdit\",
                        responsivePriority: 4,
                        \"render\": dataTableDateFromUnix
                    },
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', function(e, settings) {
                dataTableDraw(e, settings);

                // Upload form
                \$(\".dataSetImportForm\").click(function(e) {
                    e.preventDefault();

                    var template = Handlebars.compile(\$(\"#template-dataset-upload\").html());
                    var data = table.row(\$(this).closest(\"tr\")).data();
                    var columns = [];
                    var i = 1;

                    \$.each(data.columns, function (index, element) {
                        if (element.dataSetColumnTypeId === 1) {
                            element.index = i;
                            columns.push(element);
                            i++;
                        }
                    });

                    // Handle bars and open a dialog
                    bootbox.dialog({
                        message: template({
                            trans: {
                                addFiles: \"";
        // line 209
        echo __("Add CSV Files");
        yield "\",
                                startUpload: \"";
        // line 210
        echo __("Start upload");
        yield "\",
                                cancelUpload: \"";
        // line 211
        echo __("Cancel upload");
        yield "\",
                                processing: \"";
        // line 212
        echo __("Processing...");
        yield "\"
                            },
                            upload: {
                                maxSize: ";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 215), "html", null, true);
        yield ",
                                maxSizeMessage: \"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 216), "html", null, true);
        yield "\",
                                validExt: \"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "validExt", [], "any", false, false, false, 217), "html", null, true);
        yield "\",
                                utf8Message: \"";
        // line 218
        echo __("If the CSV file contains non-ASCII characters please ensure the file is UTF-8 encoded");
        yield "\"
                            },
                            columns: columns
                        }),
                        title: \"";
        // line 222
        echo __("CSV Import");
        yield "\",
                        size: 'large',
                        buttons: {
                            main: {
                                label: \"";
        // line 226
        echo __("Done");
        yield "\",
                                className: \"btn-primary btn-bb-main\",
                                callback: function() {
                                    table.ajax.reload();
                                    XiboDialogClose();
                                }
                            }
                        }
                    }).on('shown.bs.modal', function() {
                        // Configure the upload form
                        var url = \"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.import", ["id" => ":id"]), "html", null, true);
        yield "\".replace(\":id\", data.dataSetId);
                        var form = \$(this).find(\"form\");
                        var refreshSessionInterval;

                        // Initialize the jQuery File Upload widget:
                        form.fileupload({
                            url: url,
                            disableImageResize: true
                        });

                        // Upload server status check for browsers with CORS support:
                        if (\$.support.cors) {
                            \$.ajax({
                                url: url,
                                type: 'HEAD'
                            }).fail(function () {
                                \$('<span class=\"alert alert-error\"/>')
                                    .text('Upload server currently unavailable - ' + new Date())
                                    .appendTo(form);
                            });
                        }

                        // Enable iframe cross-domain access via redirect option:
                        form.fileupload(
                            'option',
                            'redirect',
                            window.location.href.replace(
                                /\\/[^\\/]*\$/,
                                '/cors/result.html?%s'
                            )
                        );

                        form.bind('fileuploadsubmit', function (e, data) {
                            var inputs = data.context.find(':input');
                            if (inputs.filter('[required][value=\"\"]').first().focus().length) {
                                return false;
                            }
                            data.formData = inputs.serializeArray().concat(form.serializeArray());

                            inputs.filter(\"input\").prop(\"disabled\", true);
                        }).bind('fileuploadstart', function (e, data) {

                            // Show progress data
                            form.find('.fileupload-progress .progress-extended').show();
                            form.find('.fileupload-progress .progress-end').hide();

                            if (form.fileupload(\"active\") <= 0)
                                refreshSessionInterval = setInterval(\"XiboPing('\" + pingUrl + \"?refreshSession=true')\", 1000 * 60 * 3);

                            return true;
                        }).bind('fileuploaddone', function (e, data) {
                            if (refreshSessionInterval != null && form.fileupload(\"active\") <= 0)
                                clearInterval(refreshSessionInterval);
                        }).bind('fileuploadprogressall', function (e, data) {
                            // Hide progress data and show processing
                            if(data.total > 0 && data.loaded == data.total) {
                                form.find('.fileupload-progress .progress-extended').hide();
                                form.find('.fileupload-progress .progress-end').show();
                            }
                        }).bind('fileuploadadded fileuploadcompleted fileuploadfinished', function (e, data) {
                            // Get uploaded and downloaded files and toggle Done button
                            var filesToUploadCount = form.find('tr.template-upload').length;
                            var \$button = form.parents('.modal:first').find('button.btn-bb-main');

                            if(filesToUploadCount == 0) {
                                \$button.removeAttr('disabled');
                            } else {
                                \$button.attr('disabled', 'disabled');
                            }
                        });
                    });
                });
            });
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#datasets_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });


        function dataSetFormOpen(dialog) {
            // Bind the remote dataset test button
            \$(dialog).find(\"#dataSetRemoteTestButton\").on('click', function() {
                var \$form = \$(dialog).find(\"form\");
                XiboRemoteRequest(\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.test.remote"), "html", null, true);
        yield "\", \$form.serializeObject(), function(response) {
                    if (!response.success || !\$.trim(response.data.entries)) {
                        response.data = response.message;
                    }
                    \$(\"#datasetRemoteTestRequestResult\").html('<pre style=\"height: 300px; overflow: scroll\">' + JSON.stringify(response.data, null, 3) + '</pre>');
                });
            });

            // Set up some dependencies between the isRemote checkbox and the tabs related to remote datasets
            onRemoteFieldChanged(dialog);

            // show data source dropdown if real time is checked
            onIsRealTimeFieldChanged(dialog);

            \$(dialog).find(\"#isRemote\").on('change', function() {
                onRemoteFieldChanged(dialog);
            });

            \$(dialog).find(\"#isRealTime\").on('change', function() {
                onIsRealTimeFieldChanged(dialog);
            });

            // Auth field
            onAuthenticationFieldChanged(dialog);

            \$(dialog).find(\"#authentication\").on('change', function() {
                onAuthenticationFieldChanged(dialog);
            });

            // remote DataSet source
            onSourceFieldChanged(dialog);
            \$(dialog).find('#sourceId').on('change', function() {
                onSourceFieldChanged(dialog);
            });

            // Validate form manually because
            // uri field depends on isRemote being checked
            if (forms != undefined) {
                const \$form = \$(dialog).find('form');
                forms.validateForm(
                    \$form, // form
                    \$form.parent(), // container
                    {
                        submitHandler: XiboFormSubmit,
                        rules: {
                            uri: {
                                required: function(element) {
                                    return \$form.find('#isRemote').is(':checked')
                                },
                            },
                        },
                    },
                );
            }
        }

        function onIsRealTimeFieldChanged(dialog) {
            var isRealTime = \$(dialog).find(\"#isRealTime\").is(\":checked\");
            var dataSourceField = \$(dialog).find(\"#dataSourceField\");
            var dataConnectorSource = \$(dialog).find(\"#dataConnectorSource\");

            if (isRealTime) {
                // show and enable data connector source
                dataSourceField.removeClass(\"d-none\");
                dataConnectorSource.prop('disabled', false)
            } else {
                // hide and disable data connector source
                dataSourceField.addClass(\"d-none\");
                dataConnectorSource.prop('disabled', true)
            }
        }

        function onRemoteFieldChanged(dialog) {
            var isRemote = \$(dialog).find(\"#isRemote\").is(\":checked\");
            var \$remoteTabs = \$(dialog).find(\".tabForRemoteDataSet\");

            if (isRemote) {
                \$remoteTabs.removeClass(\"d-none\");
            } else {
                \$remoteTabs.addClass(\"d-none\");
            }
        }

        function onAuthenticationFieldChanged(dialog) {
            var authentication = \$(dialog).find(\"#authentication\").val();
            var \$authFieldUserName = \$(dialog).find(\".auth-field-username\");
            var \$authFieldPassword = \$(dialog).find(\".auth-field-password\");

            if (authentication === \"none\") {
                \$authFieldUserName.addClass(\"d-none\");
                \$authFieldPassword.addClass(\"d-none\");
            } else if (authentication === \"bearer\") {
                \$authFieldUserName.addClass(\"d-none\");
                \$authFieldPassword.removeClass(\"d-none\");
            } else {
                \$authFieldUserName.removeClass(\"d-none\");
                \$authFieldPassword.removeClass(\"d-none\");
            }
        }

        function onSourceFieldChanged(dialog) {
            var sourceId = \$(dialog).find('#sourceId').val();
            var \$jsonSource =  \$(dialog).find(\".json-source-field\");
            var \$csvSource = \$(dialog).find(\".csv-source-field\");

            if (sourceId == 1) {
                \$jsonSource.removeClass('d-none');
                \$csvSource.addClass('d-none');
            } else {
                \$jsonSource.addClass('d-none');
                \$csvSource.removeClass('d-none');
            }
        }

        function deleteMultiSelectFormOpen(dialog) {
            ";
        // line 437
        $context["message"] = "Delete any associated data?";
        // line 438
        yield "
            var \$input = \$('<input type=checkbox id=\"deleteData\" name=\"deleteData\"> ";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(($context["message"] ?? null)));
        yield " </input>');
            \$input.on('change', function() {
                dialog.data().commitData = {deleteData: \$(this).val()};
            });
            \$(dialog).find('.modal-body').append(\$input);
        }
    </script>
";
        return; yield '';
    }

    // line 448
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 449
        yield "    ";
        yield from $this->yieldParentBlock("javaScriptTemplates", $context, $blocks);
        yield "

    ";
        // line 494
        yield "

    <script type=\"text/x-handlebars-template\" id=\"template-dataset-upload\">
        <form class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/)csv/i\">
            <div class=\"row fileupload-buttonbar\">
                <div class=\"card p-3 mb-3 bg-light\">
                    {{ upload.maxSizeMessage }} <br>
                    {{ upload.utf8Message }}
                </div>
                <div class=\"col-md-7\">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"fa fa-plus\"></i>
                        <span>{{ trans.addFiles }}</span>
                        <input type=\"file\" name=\"files\">
                    </span>
                    <button type=\"submit\" class=\"btn btn-primary start\">
                        <i class=\"fa fa-upload\"></i>
                        <span>{{ trans.startUpload }}</span>
                    </button>
                    <button type=\"reset\" class=\"btn btn-warning cancel\">
                        <i class=\"fa fa-ban\"></i>
                        <span>{{ trans.cancelUpload }}</span>
                    </button>
                    <!-- The loading indicator is shown during file processing -->
                    <span class=\"fileupload-loading\"></span>
                </div>
                <!-- The global progress information -->
                <div class=\"col-md-4 fileupload-progress fade\">
                    <!-- The global progress bar -->
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                            <div class=\"sr-only\"></div>
                        </div>
                    </div>
                    <!-- The extended global progress information -->
                    <div class=\"progress-extended\">&nbsp;</div>
                    <!-- Processing info container -->
                    <div class=\"progress-end\" style=\"display:none;\">{{ trans.processing }}</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
        ";
        yield "
                    ";
        // line 495
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Overwrite existing data?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 496
        yield "                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Erase all content in this DataSet and overwrite it with the new content in this import.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 497
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["overwrite", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 497, $context, $this->getSourceContext());
        yield "

                    ";
        // line 499
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Ignore first row?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 500
        yield "                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Ignore the first row? Useful if the CSV has headings.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 501
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["ignorefirstrow", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 501, $context, $this->getSourceContext());
        yield "

                    ";
        // line 503
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("In the fields below please enter the column number in the CSV file that corresponds to the Column Heading listed. This should be done before Adding the file.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 504
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 504, $context, $this->getSourceContext());
        yield "

        ";
        // line 583
        yield "
                    {{#each columns}}
                    <div class=\"form-group row\">
                        <label class=\"col-sm-2 control-label\" for=\"csvImport_{{dataSetColumnId}}\">{{heading}}</label>
                        <div class=\"col-sm-10\">
                            <input class=\"form-control\" name=\"csvImport_{{dataSetColumnId}}\" type=\"number\" id=\"csvImport_{{dataSetColumnId}}\" value=\"{{ index }}\" />
                        </div>
                    </div>
                    {{/each}}
                </div>
            </div>

            <!-- The table listing the files available for upload/download -->
            <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
        </form>
    </script>

    <!-- The template to display files available for upload -->
    <script id=\"template-dataset-upload\" type=\"text/x-tmpl\">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class=\"template-upload\">
                <td>
                    <span class=\"fileupload-preview\"></span>
                </td>
                <td class=\"title\">
                    {% if (file.error) { %}
                        <div><span class=\"label label-danger\">{%=file.error%}</span></div>
                    {% } %}
                    {% if (!file.error) { %}
                    <label for=\"name[]\"><input name=\"name[]\" type=\"text\" id=\"name\" value=\"\" /></label>
                    {% } %}
                </td>
                <td>
                    <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                    {% if (!o.files.error) { %}
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                    </div>
                    {% } %}
                </td>
                <td class=\"btn-group\">
                    {% if (!o.files.error && !i && !o.options.autoUpload) { %}
                        <button class=\"btn btn-primary start\">
                            <i class=\"fa fa-upload\"></i>
                        </button>
                    {% } %}
                    {% if (!i) { %}
                        <button class=\"btn btn-warning cancel\">
                            <i class=\"fa fa-ban\"></i>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>
    <!-- The template to display files available for download -->
    <script id=\"template-dataset-download\" type=\"text/x-tmpl\">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class=\"template-download\">
               <td>
                    <p class=\"name\" id=\"{%=file.storedas%}\" status=\"{% if (file.error) { %}error{% } %}\">
                        {%=file.name%}
                    </p>
                    {% if (file.error) { %}
                        <div><span class=\"label label-danger\">{%=file.error%}</span></div>
                    {% } %}
                </td>
                <td>
                    <span class=\"size\">{%=o.formatFileSize(file.size)%}</span>
                </td>
            </tr>
        {% } %}
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
        return "dataset-page.twig";
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
        return array (  747 => 583,  741 => 504,  736 => 503,  730 => 501,  724 => 500,  719 => 499,  713 => 497,  707 => 496,  702 => 495,  655 => 494,  649 => 449,  645 => 448,  632 => 439,  629 => 438,  627 => 437,  509 => 322,  420 => 236,  407 => 226,  400 => 222,  393 => 218,  389 => 217,  385 => 216,  381 => 215,  375 => 212,  371 => 211,  367 => 210,  363 => 209,  292 => 141,  276 => 127,  272 => 125,  270 => 124,  263 => 121,  259 => 120,  239 => 104,  235 => 103,  231 => 102,  227 => 101,  223 => 100,  219 => 99,  215 => 98,  211 => 97,  207 => 96,  203 => 95,  192 => 87,  184 => 82,  176 => 79,  170 => 76,  160 => 69,  154 => 67,  151 => 55,  145 => 54,  140 => 53,  134 => 51,  128 => 50,  123 => 49,  117 => 47,  112 => 46,  105 => 42,  100 => 40,  97 => 39,  93 => 38,  84 => 34,  74 => 32,  72 => 31,  69 => 30,  65 => 29,  56 => 27,  51 => 23,  49 => 25,  47 => 24,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-page.twig", "/var/www/cms/views/dataset-page.twig");
    }
}
