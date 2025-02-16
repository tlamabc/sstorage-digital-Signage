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

/* playlist-page.twig */
class __TwigTemplate_069d6af6bf2f911e4c938c7c31963a42 extends Template
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
        // line 21
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "playlist-page.twig", 22)->unwrap();
        // line 21
        $this->parent = $this->loadTemplate("authed.twig", "playlist-page.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlists"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 26
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playlist.add"], "method", false, false, false, 28)) {
            // line 29
            yield "            <button class=\"btn btn-success XiboFormButton btns\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.add.form"), "html", null, true);
            yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Playlist");
            yield "</button>
        ";
        }
        // line 31
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
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
        echo __("Playlists");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"playlistView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general-filter\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("General");
        yield "</span></a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced-filter\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Advanced");
        yield "</span></a></li>
                        </ul>
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general-filter\">

                                    ";
        // line 50
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["name", ($context["title"] ?? null)], 51, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 53)) {
            // line 54
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 55
            yield "                                        ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            yield "                                        ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            yield "                                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 58
            yield "                                        ";
            yield CoreExtension::callMacro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 58, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 60
        yield "
                                    ";
        // line 61
        $context["attributes"] = [["name" => "data-live-search", "value" => "true"], ["name" => "data-selected-text-format", "value" => "count > 4"]];
        // line 65
        yield "
                                    ";
        // line 66
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Owner");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items owned by the selected User.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 80
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 80, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 82
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Owner User Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items owned by users in the selected User Group.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search")], ["name" => "data-search-term", "value" => "group"], ["name" => "data-id-property", "value" => "groupId"], ["name" => "data-text-property", "value" => "group"], ["name" => "data-initial-key", "value" => "userGroupId"]];
        // line 95
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["ownerUserGroupId", "single", ($context["title"] ?? null), "", null, "groupId", "group", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 95, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 97
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["folderId"], 97, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 99
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["layoutId", ($context["title"] ?? null), ($context["layoutId"] ?? null)], 100, $context, $this->getSourceContext());
        yield "
                                </div>
                                <div class=\"tab-pane\" id=\"advanced-filter\">

                                    ";
        // line 104
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        yield "                                    ";
        $context["values"] = [["id" => 1, "value" => "All"], ["id" => 2, "value" => "Only Used"], ["id" => 3, "value" => "Only Unused"]];
        // line 106
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["playlistStatusId", "single", ($context["title"] ?? null), 1, ($context["values"] ?? null), "id", "value"], 106, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.view"], "method", false, false, false, 108)) {
            // line 109
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Media");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 110
            yield "                                        ";
            yield CoreExtension::callMacro($macros["inline"], "macro_input", ["mediaLike", ($context["title"] ?? null)], 110, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 112
        yield "                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 120
        echo __("Search");
        yield "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 123
        echo __("Search in all folders");
        yield "\">";
        echo __("All Folders");
        yield "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 126
        echo __("No Folders matching the search term");
        yield "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 131
        echo __("Open / Close Folder Search options");
        yield "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"playlists\" class=\"table table-striped\" data-content-type=\"playlist\"
                                   data-content-id-name=\"playlistId\" data-state-preference-name=\"playlistGrid\" style=\"width: 100%;\">
                                <thead>
                                <tr>
                                    <th>";
        // line 140
        echo __("ID");
        yield "</th>
                                    <th>";
        // line 141
        echo __("Name");
        yield "</th>
                                    <th>";
        // line 142
        echo __("Duration");
        yield "</th>
                                    ";
        // line 143
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 143)) {
            yield "<th>";
            echo __("Tags");
            yield "</th>";
        }
        // line 144
        yield "                                    <th>";
        echo __("Dynamic?");
        yield "</th>
                                    <th>";
        // line 145
        echo __("Owner");
        yield "</th>
                                    <th>";
        // line 146
        echo __("Sharing");
        yield "</th>
                                    <th>";
        // line 147
        echo __("Created");
        yield "</th>
                                    <th>";
        // line 148
        echo __("Modified");
        yield "</th>
                                    <th>";
        // line 149
        echo __("Stats?");
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

    <div id=\"dummyLayout\" style=\"display:none\"></div>

    <div id=\"editor-container\"></div>

    <div class=\"loading-overlay\">
        <i class=\"fa fa-spinner fa-spin loading-icon\"></i>
    </div>

";
        return; yield '';
    }

    // line 174
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        yield "    ";
        // line 176
        yield "    ";
        yield from         $this->loadTemplate("editorTranslations.twig", "playlist-page.twig", 176)->unwrap()->yield($context);
        // line 177
        yield "    ";
        yield from         $this->loadTemplate("editorVars.twig", "playlist-page.twig", 177)->unwrap()->yield($context);
        // line 178
        yield "
    <script src=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 179), "html", null, true);
        yield "dist/playlistEditor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 180), "html", null, true);
        yield "dist/codeEditor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 181), "html", null, true);
        yield "dist/vendor/ckeditor/build/ckeditor.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 182), "html", null, true);
        yield "dist/editorCommon.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\" nonce=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">

        ";
        // line 186
        yield "        ";
        yield "                ";
        // line 189
        yield "
        var table;
        \$(document).ready(function () {

            ";
        // line 193
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 193)) {
            // line 194
            yield "            disableFolders();
            ";
        }
        // line 196
        yield "            
            // Create ourselves a little hidden layout for preview sizing, etc
            \$(\"#dummyLayout\").html('<div id=\"layout\" data-background-color=\"#000000\" style=\"background-color: #000000\" designer_scale=\"1\"><div id=\"region_-1\" zindex=\"1\" tip_scale=\"1\" designer_scale=\"1\" width=\"800\" height=\"450\"></div></div>');

            // Configure the DataTable
            table = \$(\"#playlists\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                \"lengthMenu\": [10, 25, 50, 100, 250, 500],
                serverSide: true,
                stateSave: true,
                responsive: true,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    url: \"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search"), "html", null, true);
        yield "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#playlists\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"playlistId\", responsivePriority: 2},
                    {
                        \"data\": \"name\",
                        responsivePriority: 3,
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"data\": \"duration\",
                        responsivePriority: 3,
                        \"render\": function (data, type, row) {
                            if (type !== \"display\" && type !== \"export\")
                                return data;

                            if (row.requiresDurationUpdate === 1) {
                                return '<span class=\"fa fa-clock-o\" title=\"";
        // line 234
        yield "Changes have been made and we are recalculating this Playlists duration";
        yield "\"></span>';
                            } else if (row.requiresDurationUpdate !== 0) {
                                return moment().startOf(\"day\").seconds(data).format(\"H:mm:ss\") + ' <span class=\"fa fa-clock-o\" title=\"";
        // line 236
        yield "This duration will be updated at ";
        yield "' + moment(row.requiresDurationUpdate, \"X\").format(jsDateFormat) + '\"></span>';
                            }

                            return dataTableTimeFromSeconds(data, type, row);
                        }
                    },
                    ";
        // line 242
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 242)) {
            yield "{
                        \"sortable\": false,
                        \"visible\": false,
                        responsivePriority: 4,
                        \"data\": dataTableCreateTags
                    },";
        }
        // line 248
        yield "                    {\"data\": \"isDynamic\", \"render\": dataTableTickCrossColumn, responsivePriority: 4},
                    {\"data\": \"owner\", responsivePriority: 4},
                    {
                        \"data\": \"groupsWithPermissions\",
                        responsivePriority: 5,
                        \"render\": dataTableCreatePermissions
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
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', {form: \$(\"#playlists\").closest(\".XiboGrid\").find(\".FilterDiv form\")}, dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#playlists_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });

        // Playlist Add Form
        // contains a grid on the populate tab
        // hook up the grid
        var mediaTable;
        var nameFilter;
        var tagFilter;
        var exactTags;
        var logicalOperator;
        var logicalOperatorName;
        var filterFolderId;

        function playlistEditorFormOpen(formData) {

            // Clear container
            \$('#editor-container').empty();

            // Append form
            \$('#editor-container').append(formData.message);
        }

        function playlistFormOpen(dialog) {
            mediaTable = null;

            \$(dialog).find(\"input[name=filterMediaName]\").on(\"keyup\", _.debounce(function () {
                playlistFormPopulateMediaTable(dialog);
            }, 500));

            \$(dialog).find(\"input[name=filterMediaTag], input[name=exactTags], select[name=logicalOperator], select[name=logicalOperatorName], select[name=filterFolderId]\").on(\"change\", function () {
                playlistFormPopulateMediaTable(dialog);
            });

            // First time in there
            playlistFormPopulateMediaTable(dialog);

            // Run function to set the form submit behaviour
            playlistAddFormOpen();
        }

        ///
        /// Playlist Usage Form
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
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.usage", ["id" => ":id"]), "html", null, true);
        yield "\".replace(\":id\", \$(\"#usageReportTable\").data().playlistId),
                    \"data\": function (dataDisplay) {
                        \$.extend(dataDisplay, \$(dialog).find(\"#usageReportForm\").serializeObject());
                        return dataDisplay;
                    }
                },
                \"columns\": [
                    {\"data\": \"displayId\"},
                    {\"data\": \"display\"},
                    {\"data\": \"description\"}
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
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.usage.layouts", ["id" => ":id"]), "html", null, true);
        yield "\".replace(\":id\", \$(\"#usageReportLayoutsTable\").data().playlistId)
                },
                \"columns\": [
                    {\"data\": \"layoutId\"},
                    {\"data\": \"layout\"},
                    {\"data\": \"description\"},
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            usageTableLayouts.on('draw', dataTableDraw);
            usageTableLayouts.on('processing.dt', dataTableProcessing);
        }

        function playlistFormPopulateMediaTable(dialog) {
            nameFilter = \$(dialog).find(\"input[name=filterMediaName]\").val();
            tagFilter = \$(dialog).find(\"input[name=filterMediaTag]\").val();
            exactTags = \$(dialog).find(\"input[name=exactTags]\").is(':checked')
            logicalOperator = \$(dialog).find(\"select[name=logicalOperator]\").val();
            logicalOperatorName = \$(dialog).find(\"select[name=logicalOperatorName]\").val();
            filterFolderId = \$(dialog).find(\"select[name=filterFolderId]\").val() ?? \"\";

            if (nameFilter === \"\" && tagFilter === \"\" && filterFolderId === \"\") {
                if (mediaTable != null) {
                    mediaTable.destroy();
                    mediaTable = null;
                    \$(\"#playlistLibraryMedia tbody\").empty();
                }

                return;
            }

            if (mediaTable != null) {
                mediaTable.ajax.reload();
            } else {
                mediaTable = \$(\"#playlistLibraryMedia\").DataTable({
                    \"language\": dataTablesLanguage,
                    serverSide: true,
                    stateSave: true,
                    stateDuration: 0,
                    filter: false,
                    responsive: true,
                    searchDelay: 3000,
                    \"order\": [[1, \"asc\"]],
                    ajax: {
                        \"url\": \"";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        yield "\",
                        \"data\": function (d) {
                            \$.extend(
                              d,
                              {
                                media: nameFilter,
                                tags: tagFilter,
                                folderId: filterFolderId,
                                assignable: 1,
                                exactTags: exactTags,
                                logicalOperator: logicalOperator,
                                logicalOperatorName: logicalOperatorName
                              }
                            );
                        }
                    },
                    \"columns\": [
                        {\"data\": \"mediaId\"},
                        {\"data\": \"name\"},
                        {\"data\": \"mediaType\"},
                        ";
        // line 447
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 447)) {
            yield "{\"data\": dataTableCreateTags},";
        }
        // line 448
        yield "                        {
                            \"name\": \"duration\",
                            \"data\": function (data, type) {
                                if (type !== \"display\")
                                    return data.duration;

                                return moment().startOf(\"day\").seconds(data.duration).format(\"H:mm:ss\");
                            }
                        }
                    ]
                });

                mediaTable.on('processing.dt', dataTableProcessing);
                mediaTable.on('draw', {form: \$(\".playlistForm\")}, dataTableCreateTagEvents);
            }
        }

        function setEnableStatMultiSelectFormOpen(dialog) {

            var \$select = \$('<select id=\"enableStat\" name=\"enableStat\" class=\"form-control\">' +
                '<option value=\"Off\">";
        // line 468
        echo __("Off");
        yield "</option>' +
                '<option value=\"On\">";
        // line 469
        echo __("On");
        yield "</option>' +
                '<option value=\"Inherit\">";
        // line 470
        echo __("Inherit");
        yield "</option>' +
                '</select>');

            \$select.on('change', function () {
                dialog.data().commitData = {enableStat: \$(this).val()};
            }).trigger('change');

            \$(dialog).find('.modal-body').append(\$select);
        }

        function playlistAddFormOpen() {
            \$(\"#playlistAddForm\").off(\"submit\").submit(function (e) {
                e.preventDefault();
                var form = \$(this);

                \$.ajax({
                    type: \$(this).attr(\"method\"),
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),
                    cache: false,
                    dataType: \"json\",
                    success: function (xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success && xhr.data.isDynamic == 0) {

                            // Open the editor
                            openPlaylistEditorForm(xhr.id);
                        }
                    }
                });
            });
        }

        function openPlaylistEditorForm(playlistId) {
            var requestPath = playlistEditorUrl;

            // replace id if necessary/exists
            requestPath = requestPath.replace(':id', playlistId);

            \$.ajax({
                url: requestPath,
                type: 'GET'
            }).done(function (res) {

                if (!res.success) {
                    // Login Form needed?
                    if (res.login) {
                        window.location.reload();
                    } else {
                        // Just an error we dont know about
                        if (res.message == undefined) {
                            console.error(res);
                        } else {
                            console.error(res.message);
                        }
                    }
                } else {
                    // Clear container
                    \$('#editor-container').empty();

                    // Append form
                    \$('#editor-container').append(res.html);
                }
            }).fail(function (jqXHR, textStatus, errorThrown) {
                // Output error to console
                console.error(jqXHR, textStatus, errorThrown);
            });
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
        return "playlist-page.twig";
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
        return array (  754 => 470,  750 => 469,  746 => 468,  724 => 448,  720 => 447,  697 => 427,  646 => 379,  617 => 353,  510 => 248,  501 => 242,  492 => 236,  487 => 234,  464 => 214,  444 => 196,  440 => 194,  438 => 193,  432 => 189,  429 => 186,  424 => 183,  414 => 182,  404 => 181,  394 => 180,  384 => 179,  381 => 178,  378 => 177,  375 => 176,  373 => 175,  369 => 174,  340 => 149,  336 => 148,  332 => 147,  328 => 146,  324 => 145,  319 => 144,  313 => 143,  309 => 142,  305 => 141,  301 => 140,  289 => 131,  281 => 126,  273 => 123,  267 => 120,  257 => 112,  251 => 110,  245 => 109,  243 => 108,  237 => 106,  234 => 105,  229 => 104,  221 => 100,  216 => 99,  211 => 97,  205 => 95,  202 => 84,  196 => 83,  191 => 82,  185 => 80,  182 => 68,  176 => 67,  171 => 66,  168 => 65,  166 => 61,  163 => 60,  157 => 58,  151 => 57,  145 => 56,  139 => 55,  133 => 54,  131 => 53,  125 => 51,  120 => 50,  111 => 44,  107 => 43,  100 => 39,  95 => 37,  92 => 36,  88 => 35,  79 => 31,  71 => 29,  69 => 28,  66 => 27,  62 => 26,  53 => 24,  48 => 21,  46 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-page.twig", "/var/www/cms/views/playlist-page.twig");
    }
}
