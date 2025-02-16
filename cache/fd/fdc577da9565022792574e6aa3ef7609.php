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

/* library-page.twig */
class __TwigTemplate_b782bd7a3546a005d8e628988cc9ecf5 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "library-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "library-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Library"), "html", null, true);
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
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["library.add", "library.modify"]], "method", false, false, false, 30) > 0) || (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [], "any", false, false, false, 30) == 1))) {
            // line 31
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.add"], "method", false, false, false, 31)) {
                // line 32
                yield "                <button class=\"btn btn-success\" href=\"#\" id=\"libraryUploadForm\" title=\"";
                echo __("Add a new media item to the library");
                yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo __("Add Media");
                yield "</button>
                <button class=\"btn btn-success XiboFormButton\" title=\"";
                // line 33
                echo __("Add a new media item to the library via external URL");
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.uploadUrl.form"), "html", null, true);
                yield "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo __("Add media (URL)");
                yield "</button>
            ";
            }
            // line 35
            yield "            ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [], "any", false, false, false, 35) == 1) && CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.modify"], "method", false, false, false, 35))) {
                // line 36
                yield "                <button class=\"btn btn-danger XiboFormButton\" title=\"";
                echo __("Run through the library and remove unused and unnecessary files");
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.tidy.form"), "html", null, true);
                yield "\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
                echo __("Tidy Library");
                yield "</button>
            ";
            }
            // line 38
            yield "        ";
        }
        // line 39
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 44
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 46
        echo __("Library");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"libraryView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 52
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["mediaId", ($context["title"] ?? null)], 53, $context, $this->getSourceContext());
        yield "

                            ";
        // line 55
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["media", ($context["title"] ?? null)], 56, $context, $this->getSourceContext());
        yield "

                            ";
        // line 58
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 58)) {
            // line 59
            yield "                                ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            yield "                                ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 61
            yield "                                ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            yield "                                ";
            yield CoreExtension::callMacro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 63, $context, $this->getSourceContext());
            yield "
                            ";
        }
        // line 65
        yield "
                            ";
        // line 66
        $context["attributes"] = [["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""]];
        // line 71
        yield "
                            ";
        // line 72
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Owner");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items owned by the selected User.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        yield "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 86
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["ownerId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 86, $context, $this->getSourceContext());
        yield "

                            ";
        // line 88
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Owner User Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items owned by users in the selected User Group.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        yield "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search")], ["name" => "data-search-term", "value" => "group"], ["name" => "data-id-property", "value" => "groupId"], ["name" => "data-text-property", "value" => "group"], ["name" => "data-initial-key", "value" => "userGroupId"]];
        // line 101
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["ownerUserGroupId", "single", ($context["title"] ?? null), "", null, "groupId", "group", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 101, $context, $this->getSourceContext());
        yield "

                            ";
        // line 103
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["type", "single", ($context["title"] ?? null), "", Twig\Extension\CoreExtension::merge([["type" => null, "name" => ""]], ($context["modules"] ?? null)), "type", "name"], 104, $context, $this->getSourceContext());
        yield "

                            ";
        // line 106
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Retired");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        yield "                            ";
        $context["values"] = [["id" => 1, "value" => "Yes"], ["id" => 0, "value" => "No"]];
        // line 108
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["retired", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value"], 108, $context, $this->getSourceContext());
        yield "

                            ";
        // line 110
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["folderId"], 110, $context, $this->getSourceContext());
        yield "

                            ";
        // line 112
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["layoutId", ($context["title"] ?? null), ($context["layoutId"] ?? null)], 113, $context, $this->getSourceContext());
        yield "

                            ";
        // line 115
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Orientation");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 116
        yield "                            ";
        $context["option1"] = __("All");
        // line 117
        yield "                            ";
        $context["option2"] = __("Landscape");
        // line 118
        yield "                            ";
        $context["option3"] = __("Portrait");
        // line 119
        yield "                            ";
        $context["values"] = [["id" => "", "value" => ($context["option1"] ?? null)], ["id" => "landscape", "value" => ($context["option2"] ?? null)], ["id" => "portrait", "value" => ($context["option3"] ?? null)]];
        // line 120
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), "", ($context["values"] ?? null), "id", "value"], 120, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 126
        echo __("Search");
        yield "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 129
        echo __("Search in all folders");
        yield "\">";
        echo __("All Folders");
        yield "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 132
        echo __("No Folders matching the search term");
        yield "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 137
        echo __("Open / Close Folder Search options");
        yield "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"libraryItems\" class=\"table table-striped responsive nowrap\" data-content-type=\"media\" data-content-id-name=\"mediaId\" data-state-preference-name=\"libraryGrid\" style=\"width: 100%;\">
                                <thead>
                                <tr>
                                    <th>";
        // line 145
        echo __("ID");
        yield "</th>
                                    <th>";
        // line 146
        echo __("Name");
        yield "</th>
                                    <th>";
        // line 147
        echo __("Type");
        yield "</th>
                                    ";
        // line 148
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 148)) {
            yield "<th>";
            echo __("Tag");
            yield "</th>";
        }
        // line 149
        yield "                                    <th>";
        echo __("Thumbnail");
        yield "</th>
                                    <th>";
        // line 150
        echo __("Duration");
        yield "</th>
                                    <th>";
        // line 151
        echo __("Duration (seconds)");
        yield "</th>
                                    <th>";
        // line 152
        echo __("Size");
        yield "</th>
                                    <th>";
        // line 153
        echo __("Size (bytes)");
        yield "</th>
                                    <th>";
        // line 154
        echo __("Resolution");
        yield "</th>
                                    <th>";
        // line 155
        echo __("Owner");
        yield "</th>
                                    <th>";
        // line 156
        echo __("Sharing");
        yield "</th>
                                    <th>";
        // line 157
        echo __("Revised");
        yield "</th>
                                    <th>";
        // line 158
        echo __("Released");
        yield "</th>
                                    <th>";
        // line 159
        echo __("File Name");
        yield "</th>
                                    <th>";
        // line 160
        echo __("Stats?");
        yield "</th>
                                    <th>";
        // line 161
        echo __("Created");
        yield "</th>
                                    <th>";
        // line 162
        echo __("Modified");
        yield "</th>
                                    <th>";
        // line 163
        echo __("Expires");
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

    // line 179
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table;
        \$(document).ready(function() {

            ";
        // line 184
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 184)) {
            // line 185
            yield "            disableFolders();
            ";
        }
        // line 187
        yield "
            table = \$(\"#libraryItems\").DataTable({
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
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        yield "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"mediaId\", responsivePriority: 2},
                    {\"data\": \"name\", \"render\": dataTableSpacingPreformatted, responsivePriority: 3 },
                    {\"data\": \"mediaType\", responsivePriority: 2},
                    ";
        // line 210
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 210)) {
            yield "{
                        \"sortable\": false,
                        responsivePriority: 2,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },";
        }
        // line 216
        yield "                    {
                        responsivePriority: 5,
                        data: 'thumbnail',
                        render: function(data, type, row) {
                            if (type !== 'display') {
                                return row.mediaId;
                            }
                            if (data) {
                                return '<a class=\"img-replace\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data + '\">' +
                                    '<img class=\"img-fluid\" src=\"' + data.replace('download', 'thumbnail') + '\" alt=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thumbnail"), "html", null, true);
        yield "\" />' +
                                    '</a>';
                            }
                            return '';
                        },
                        sortable: false
                    },
                    {
                        \"name\": \"duration\",
                        responsivePriority: 3,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.duration;

                            return dataTableTimeFromSeconds(data.duration, type);
                        }
                    },
                    {\"data\": \"duration\", \"visible\": false, responsivePriority: 10},
                    {
                        \"name\": \"fileSize\",
                        responsivePriority: 3,
                        \"data\": null,
                        \"render\": {\"_\": \"fileSize\", \"display\": \"fileSizeFormatted\", \"sort\": \"fileSize\"}
                    },
                    {\"data\": \"fileSize\", \"visible\": false, responsivePriority: 10},
                    {
                        name: 'width',
                        data: function(data, type, row, meta) {
                            if (type !== 'display' || data.width === 0 || data.height === 0) {
                                return '';
                            }

                            return data.width + 'x' + data.height;
                        },
                        visible: false,
                        responsivePriority: 10
                    },
                    {\"data\": \"owner\", responsivePriority: 5},
                    {
                        \"data\": \"groupsWithPermissions\",
                        responsivePriority: 5,
                        \"render\": dataTableCreatePermissions
                    },
                    {\"data\": \"revised\", \"render\": dataTableTickCrossColumn, \"visible\": false, responsivePriority: 6},
                    {
                        \"name\": \"released\",
                        responsivePriority: 6,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.released;

                            var icon = \"\";
                            if (data.released == 1)
                                icon = \"fa-check\";
                            else if (data.released == 0)
                                icon = \"fa-cogs\";
                            else if (data.released == 2)
                                icon = \"fa-times\";


                            return '<span class=\"fa ' + icon + '\" title=\"' + (data.releasedDescription) + '\"></span>';
                        },
                        \"visible\": false
                    },
                    {\"data\": \"fileName\", responsivePriority: 500},
                    {
                        \"name\": \"enableStat\",
                        responsivePriority: 6,
                        \"data\": function (data) {

                            var icon = \"\";
                            if (data.enableStat == 'On')
                                icon = \"fa-check\";
                            else if (data.enableStat == 'Off')
                                icon = \"fa-times\";
                            else
                                icon = \"fa-level-down\";

                            return '<span class=\"fa ' + icon + '\" title=\"' + (data.enableStatDescription) + '\"></span>';
                        }
                    },
                    {
                        \"data\": \"createdDt\",
                        responsivePriority: 6,
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"data\": \"modifiedDt\",
                        responsivePriority: 6,
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"name\": \"expires\",
                        responsivePriority: 6,
                        \"data\": function (data, type) {
                            if (data.expires != null && data.expires != 0) {
                                var now = moment();
                                var expiresIn = moment.unix(data.expires);
                                var differenceMinutes = expiresIn.diff(now, 'minutes');
                                var momentDifference = moment(now).to(expiresIn);

                                if (differenceMinutes < -10 ) {
                                    return data.mediaExpiryFailed;
                                } else {
                                    return data.mediaExpiresIn.replace('%s', momentDifference);
                                }
                            } else {
                                return data.mediaNoExpiryDate;
                            }

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
            table.on('draw', { form: \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#libraryItems_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });

        \$(\"#libraryUploadForm\").click(function(e) {
            e.preventDefault();
            var currentWorkingFolderId = \$('#folderId').val();

            openUploadForm({
                url: \"";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        yield "\",
                title: \"";
        // line 363
        echo __("Add Media");
        yield "\",
                initialisedBy: \"library-upload\",
                buttons: {
                    main: {
                        label: \"";
        // line 367
        echo __("Done");
        yield "\",
                        className: \"btn-primary btn-bb-main\",
                        callback: function () {
                            table.ajax.reload();
                            XiboDialogClose();
                        }
                    }
                },
                templateOptions: {
                    trans: {
                        addFiles: \"";
        // line 377
        echo __("Add files");
        yield "\",
                        startUpload: \"";
        // line 378
        echo __("Start upload");
        yield "\",
                        cancelUpload: \"";
        // line 379
        echo __("Cancel upload");
        yield "\",
                        selectFolder: \"";
        // line 380
        echo __("Select Folder");
        yield "\",
                        selectFolderTitle: \"";
        // line 381
        echo __("Change Current Folder location");
        yield "\",
                        selectedFolder: \"";
        // line 382
        echo __("Current Folder");
        yield ":\",
                        selectedFolderTitle: \"";
        // line 383
        echo __("Upload files to this Folder");
        yield "\",
                    },
                    upload: {
                        maxSize: ";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 386), "html", null, true);
        yield ",
                        maxSizeMessage: \"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 387), "html", null, true);
        yield "\",
                        validExt: \"";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validExt"] ?? null), "html", null, true);
        yield "\"
                    },
                    updateInAllChecked: ";
        // line 390
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 390) == 1)) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                    deleteOldRevisionsChecked: ";
        // line 391
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", [], "any", false, false, false, 391) == 1)) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                    currentWorkingFolderId: currentWorkingFolderId,
                    folderSelector: true
                }
            });
        });

        /**
         * Media Edit form
         */
        function mediaEditFormOpen(dialog) {
            // Create a new button
            var footer = dialog.find(\".modal-footer\");
            var mediaId = dialog.find(\"#mediaEditForm\").data().mediaId;
            var validExtensions = dialog.find(\"#mediaEditForm\").data().validExtensions;
            var folderId = dialog.find(\"#mediaEditForm\").data().folderId;

            // Append
            var replaceButton = \$('<button class=\"btn btn-warning\">";
        // line 409
        echo __("Replace");
        yield "</button>');
            replaceButton.click(function(e) {
                e.preventDefault();

                // Open the upload dialog with our options.
                openUploadForm({
                    url: \"";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        yield "\",
                    title: \"";
        // line 416
        echo __("Upload media");
        yield "\",
                    buttons: {
                        main: {
                            label: \"";
        // line 419
        echo __("Done");
        yield "\",
                            className: \"btn-primary btn-bb-main\",
                            callback: function () {
                                table.ajax.reload();
                                XiboDialogClose();
                            }
                        }
                    },
                    templateOptions: {
                        multi: false,
                        oldMediaId: mediaId,
                        oldFolderId: folderId,
                        updateInAllChecked: ";
        // line 431
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 431) == 1)) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                        deleteOldRevisionsChecked: ";
        // line 432
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", [], "any", false, false, false, 432) == 1)) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                        trans: {
                            addFiles: \"";
        // line 434
        echo __("Add Replacement");
        yield "\",
                            startUpload: \"";
        // line 435
        echo __("Start Replace");
        yield "\",
                            cancelUpload: \"";
        // line 436
        echo __("Cancel Replace");
        yield "\",
                            updateInLayouts: {
                                title: \"";
        // line 438
        echo __("Update this media in all layouts it is assigned to?");
        yield "\",
                                helpText: \"";
        // line 439
        echo __("Note: It will only be updated in layouts you have permission to edit.");
        yield "\"
                            },
                            deleteOldRevisions: {
                                title: \"";
        // line 442
        echo __("Delete the old version?");
        yield "\",
                                helpText: \"";
        // line 443
        echo __("Completely remove the old version of this media item if a new file is being uploaded.");
        yield "\"
                            }
                        },
                        upload: {
                            maxSize: ";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 447), "html", null, true);
        yield ",
                            maxSizeMessage: \"";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 448), "html", null, true);
        yield "\",
                            validExt: validExtensions,
                            validExtensionsMessage: \"";
        // line 450
        yield "Valid extensions are %s";
        yield "\".replace(\"%s\", validExtensions).replace(/\\|/g, \", \")
                        }
                    },
                    uploadDoneEvent: function () {
                        XiboDialogClose();
                        table.ajax.reload();
                    }
                });
            });

            footer.find(\".btn-primary\").before(replaceButton);
        }

        ///
        /// Library Usage Form
        ///
        function usageFormOpen(dialog) {
            // Displays tab
            var usageTable = \$(\"#usageReportTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true, stateDuration: 0,
                filter: false,
                searchDelay: 3000,
                responsive: true,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.usage", ["id" => ":id"]), "html", null, true);
        yield "\".replace(\":id\", \$(\"#usageReportTable\").data().mediaId),
                    \"data\": function(dataDisplay) {
                        \$.extend(dataDisplay, \$(dialog).find(\"#usageReportForm\").serializeObject());
                        return dataDisplay;
                    }
                },
                \"columns\": [
                    { \"data\": \"displayId\"},
                    { \"data\": \"display\" },
                    { \"data\": \"description\" }
                ]
            });

            usageTable.on('draw', dataTableDraw);
            usageTable.on('processing.dt', dataTableProcessing);

            // Layouts tab
            var usageTableLayouts = \$(\"#usageReportLayoutsTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true, stateDuration: 0,
                filter: false,
                searchDelay: 3000,
                responsive: true,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.usage.layouts", ["id" => ":id"]), "html", null, true);
        yield "\".replace(\":id\", \$(\"#usageReportLayoutsTable\").data().mediaId)
                },
                \"columns\": [
                    { \"data\": \"layoutId\"},
                    { \"data\": \"layout\" },
                    { \"data\": \"description\" },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            usageTableLayouts.on('draw', dataTableDraw);
            usageTableLayouts.on('processing.dt', dataTableProcessing);
        }

        function setDefaultMultiSelectFormOpen(dialog) {
            ";
        // line 521
        $context["message"] = "Force delete from any existing layouts, assignments, etc";
        // line 522
        yield "            ";
        $context["message2"] = "Notify each Display that has this Media in its local storage to remove it immediately?";
        // line 523
        yield "
            var \$input = \$(
                '<div class=\"form-group\">' +
                 '<input type=checkbox id=\"forceDelete\" name=\"forceDelete\"> ";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(($context["message"] ?? null)));
        yield " </input>' +
                '</div>'
            );

            var \$input2 = \$(
                '<div class=\"form-group\">' +
                '<input type=checkbox id=\"purge\" name=\"purge\"> ";
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(($context["message2"] ?? null)));
        yield " </input>' +
                '</div>'
            );

            \$(dialog).find('.modal-body').append(\$input, \$input2);

            \$('#forceDelete, #purge').on('change', function() {
                dialog.data().commitData = {
                    forceDelete: \$('#forceDelete').val(),
                    purge: \$('#purge').val()
                };
            });
        }

        function setEnableStatMultiSelectFormOpen(dialog) {

            var \$select = \$('<select id=\"enableStat\" name=\"enableStat\" class=\"form-control\">' +
                '<option value=\"Off\">";
        // line 549
        echo __("Off");
        yield "</option>' +
                '<option value=\"On\">";
        // line 550
        echo __("On");
        yield "</option>' +
                '<option value=\"Inherit\">";
        // line 551
        echo __("Inherit");
        yield "</option>' +
                '</select>');

            \$select.on('change', function() {
                dialog.data().commitData = {enableStat: \$(this).val()};
            }).trigger('change');

            \$(dialog).find('.modal-body').append(\$select);
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
        return "library-page.twig";
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
        return array (  959 => 551,  955 => 550,  951 => 549,  931 => 532,  922 => 526,  917 => 523,  914 => 522,  912 => 521,  891 => 503,  862 => 477,  832 => 450,  827 => 448,  823 => 447,  816 => 443,  812 => 442,  806 => 439,  802 => 438,  797 => 436,  793 => 435,  789 => 434,  780 => 432,  772 => 431,  757 => 419,  751 => 416,  747 => 415,  738 => 409,  713 => 391,  705 => 390,  700 => 388,  696 => 387,  692 => 386,  686 => 383,  682 => 382,  678 => 381,  674 => 380,  670 => 379,  666 => 378,  662 => 377,  649 => 367,  642 => 363,  638 => 362,  498 => 225,  487 => 216,  478 => 210,  466 => 201,  450 => 187,  446 => 185,  444 => 184,  436 => 180,  432 => 179,  412 => 163,  408 => 162,  404 => 161,  400 => 160,  396 => 159,  392 => 158,  388 => 157,  384 => 156,  380 => 155,  376 => 154,  372 => 153,  368 => 152,  364 => 151,  360 => 150,  355 => 149,  349 => 148,  345 => 147,  341 => 146,  337 => 145,  326 => 137,  318 => 132,  310 => 129,  304 => 126,  294 => 120,  291 => 119,  288 => 118,  285 => 117,  282 => 116,  277 => 115,  271 => 113,  266 => 112,  261 => 110,  255 => 108,  252 => 107,  247 => 106,  241 => 104,  236 => 103,  230 => 101,  227 => 90,  221 => 89,  216 => 88,  210 => 86,  207 => 74,  201 => 73,  196 => 72,  193 => 71,  191 => 66,  188 => 65,  182 => 63,  176 => 62,  170 => 61,  164 => 60,  158 => 59,  156 => 58,  150 => 56,  145 => 55,  139 => 53,  134 => 52,  127 => 48,  122 => 46,  119 => 45,  115 => 44,  106 => 39,  103 => 38,  93 => 36,  90 => 35,  81 => 33,  74 => 32,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-page.twig", "/var/www/cms/views/library-page.twig");
    }
}
