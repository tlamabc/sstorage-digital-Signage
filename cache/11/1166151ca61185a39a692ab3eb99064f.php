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

/* layout-page.twig */
class __TwigTemplate_69312d7bd78f8e419b6766751383b201 extends Template
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
        // line 1
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "layout-page.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("authed.twig", "layout-page.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layouts"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 6
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.add"], "method", false, false, false, 8)) {
            // line 9
            yield "            <button class=\"btn btn-success layout-add-button\"
                    title=\"";
            // line 10
            echo __("Add a new Layout and jump to the layout editor.");
            yield "\"
                    href=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.add"), "html", null, true);
            yield "\">
                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            // line 12
            echo __("Add Layout");
            // line 13
            yield "            </button>
            <button class=\"btn btn-info\" id=\"layoutUploadForm\" title=\"";
            // line 14
            echo __("Import a Layout from a ZIP file.");
            yield "\" href=\"#\"> <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> ";
            echo __("Import");
            yield "</button>
        ";
        }
        // line 16
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 20
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 22
        echo __("Layouts");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-type=\"layout\" data-grid-name=\"layoutView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general-filter\" role=\"tab\" data-toggle=\"tab\" aria-selected=\"true\"><span>";
        // line 28
        echo __("General");
        yield "</span></a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced-filter\" role=\"tab\" data-toggle=\"tab\" aria-selected=\"false\"><span>";
        // line 29
        echo __("Advanced");
        yield "</span></a></li>
                        </ul>
                        <form class=\"form-inline d-block\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general-filter\" role=\"tabpanel\">
                                    ";
        // line 34
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["campaignId", ($context["title"] ?? null)], 35, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 37
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["layout", ($context["title"] ?? null)], 38, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 40)) {
            // line 41
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            yield "                                        ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 43
            yield "                                        ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 44
            yield "                                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            yield "                                        ";
            yield CoreExtension::callMacro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 45, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 47
        yield "
                                    ";
        // line 48
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["codeLike", ($context["title"] ?? null)], 49, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displaygroup.view"], "method", false, false, false, 51)) {
            // line 52
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Display Group");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 53
            yield "                                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Show Layouts active on the selected Display / Display Group");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 54
            yield "                                        ";
            $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-filter-options", "value" => "{\"isDisplaySpecific\":-1}"], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"], ["name" => "data-initial-key", "value" => "displayGroupId"]];
            // line 66
            yield "                                        ";
            yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["activeDisplayGroupId", "single", ($context["title"] ?? null), "", null, "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 66, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 68
        yield "
                                    ";
        // line 69
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Owner");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items owned by the selected User.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        yield "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 83
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 83, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 85
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Owner User Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items owned by users in the selected User Group.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search")], ["name" => "data-search-term", "value" => "group"], ["name" => "data-id-property", "value" => "groupId"], ["name" => "data-text-property", "value" => "group"], ["name" => "data-initial-key", "value" => "userGroupId"]];
        // line 98
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["ownerUserGroupId", "single", ($context["title"] ?? null), "", null, "groupId", "group", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 98, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 100
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Orientation");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        yield "                                    ";
        $context["option1"] = __("All");
        // line 102
        yield "                                    ";
        $context["option2"] = __("Landscape");
        // line 103
        yield "                                    ";
        $context["option3"] = __("Portrait");
        // line 104
        yield "                                    ";
        $context["values"] = [["id" => "", "value" => ($context["option1"] ?? null)], ["id" => "landscape", "value" => ($context["option2"] ?? null)], ["id" => "portrait", "value" => ($context["option3"] ?? null)]];
        // line 105
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), "", ($context["values"] ?? null), "id", "value"], 105, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 107
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["folderId"], 107, $context, $this->getSourceContext());
        yield "
                                </div>
                                <div class=\"tab-pane\" id=\"advanced-filter\" role=\"tabpanel\">

                                    ";
        // line 111
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Retired");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        yield "                                    ";
        $context["option1"] = __("Yes");
        // line 113
        yield "                                    ";
        $context["option2"] = __("No");
        // line 114
        yield "                                    ";
        $context["values"] = [["id" => 1, "value" => ($context["option1"] ?? null)], ["id" => 0, "value" => ($context["option2"] ?? null)]];
        // line 115
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["retired", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value"], 115, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 117
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        yield "                                    ";
        $context["option1"] = __("All");
        // line 119
        yield "                                    ";
        $context["option2"] = __("Only Used");
        // line 120
        yield "                                    ";
        $context["option3"] = __("Only Unused");
        // line 121
        yield "                                    ";
        $context["values"] = [["id" => 1, "value" => ($context["option1"] ?? null)], ["id" => 2, "value" => ($context["option2"] ?? null)], ["id" => 3, "value" => ($context["option3"] ?? null)]];
        // line 122
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["layoutStatusId", "single", ($context["title"] ?? null), 1, ($context["values"] ?? null), "id", "value"], 122, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 124
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        yield "                                    ";
        $context["option1"] = __("All");
        // line 126
        yield "                                    ";
        $context["option2"] = __("1st line");
        // line 127
        yield "                                    ";
        $context["option3"] = __("Widget List");
        // line 128
        yield "                                    ";
        $context["values"] = [["id" => 1, "value" => ($context["option1"] ?? null)], ["id" => 2, "value" => ($context["option2"] ?? null)], ["id" => 3, "value" => ($context["option3"] ?? null)]];
        // line 129
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["showDescriptionId", "single", ($context["title"] ?? null), 2, ($context["values"] ?? null), "id", "value"], 129, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 131
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.view"], "method", false, false, false, 131)) {
            // line 132
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Media");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 133
            yield "                                        ";
            yield CoreExtension::callMacro($macros["inline"], "macro_input", ["mediaLike", ($context["title"] ?? null)], 133, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 135
        yield "
                                    ";
        // line 136
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["layoutId", ($context["title"] ?? null)], 137, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 139
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Modified Since");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_date", ["modifiedSinceDt", ($context["title"] ?? null)], 140, $context, $this->getSourceContext());
        yield "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 149
        echo __("Search");
        yield "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 152
        echo __("Search in all folders");
        yield "\">";
        echo __("All Folders");
        yield "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 155
        echo __("No Folders matching the search term");
        yield "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>

                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 161
        echo __("Open / Close Folder Search options");
        yield "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>

                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"layouts\" class=\"table table-striped responsive nowrap\" data-content-type=\"layout\" data-content-id-name=\"layoutId\" data-state-preference-name=\"layoutGrid\" style=\"width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 170
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 171
        echo __("Name");
        yield "</th>
                                        <th>";
        // line 172
        echo __("Status");
        yield "</th>
                                        <th>";
        // line 173
        echo __("Description");
        yield "</th>
                                        <th>";
        // line 174
        echo __("Duration");
        yield "</th>
                                        ";
        // line 175
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 175)) {
            yield "<th>";
            echo __("Tags");
            yield "</th>";
        }
        // line 176
        yield "                                        <th>";
        echo __("Orientation");
        yield "</th>
                                        <th>";
        // line 177
        echo __("Thumbnail");
        yield "</th>
                                        <th>";
        // line 178
        echo __("Owner");
        yield "</th>
                                        <th>";
        // line 179
        echo __("Sharing");
        yield "</th>
                                        <th>";
        // line 180
        echo __("Valid?");
        yield "</th>
                                        <th>";
        // line 181
        echo __("Stats?");
        yield "</th>
                                        <th>";
        // line 182
        echo __("Created");
        yield "</th>
                                        <th>";
        // line 183
        echo __("Modified");
        yield "</th>
                                        <th>";
        // line 184
        echo __("Layout ID");
        yield "</th>
                                        <th>";
        // line 185
        echo __("Code");
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

    // line 201
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 202
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table;
        \$(document).ready(function() {
            ";
        // line 205
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 205)) {
            // line 206
            yield "            disableFolders();
            ";
        }
        // line 208
        yield "
            table = \$(\"#layouts\").DataTable({
                language: dataTablesLanguage,
                lengthMenu: [10, 25, 50, 100, 250, 500],
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                responsive: true,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                dataType: 'json',
                order: [[1, \"asc\"]],
                ajax: {
                    url: \"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        yield "\",
                    data: function (d) {
                        \$.extend(d, \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                columns: [
                    {\"data\": \"campaignId\", responsivePriority: 1},
                    {
                        \"data\": \"layout\",
                        responsivePriority: 2,
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"name\": \"publishedStatus\",
                        responsivePriority: 2,
                        \"data\": function (data, type) {
                            if (data.publishedDate != null) {
                                var now = moment();
                                var published = moment(data.publishedDate);
                                var differenceMinutes = published.diff(now, 'minutes');
                                var momentDifference = moment(now).to(published);

                                if (differenceMinutes < -5) {
                                    return data.publishedStatus.concat(\" - \", translations.publishedStatusFailed);
                                } else {
                                    return data.publishedStatus.concat(\" - \", translations.publishedStatusFuture + \" \" + momentDifference);
                                }
                            } else {
                                return data.publishedStatus;
                            }

                        }
                    },
                    {
                        \"name\": \"description\",
                        \"data\": null,
                        responsivePriority: 10,
                        \"render\": {\"_\": \"description\", \"display\": \"descriptionFormatted\", \"sort\": \"description\"}
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
                    ";
        // line 273
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 273)) {
            yield "{
                        \"sortable\": false,
                        \"visible\": false,
                        responsivePriority: 3,
                        \"data\": dataTableCreateTags
                    },";
        }
        // line 279
        yield "                    { data: 'orientation', responsivePriority: 10, visible: false},
                    {
                        responsivePriority: 5,
                        data: 'thumbnail',
                        render: function(data, type, row) {
                          if (type !== 'display') {
                            return row.layoutId;
                          }
                          if (data) {
                            return '<a class=\"img-replace\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data + '\">' +
                                '<img class=\"img-fluid\" src=\"' + data + '\" alt=\"";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thumbnail"), "html", null, true);
        yield "\" />' +
                                '</a>';
                          } else {
                            var addUrl = '";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.thumbnail.add", ["id" => ":id"]), "html", null, true);
        yield "'.replace(':id', row.layoutId);
                            return '<a class=\"img-replace generate-layout-thumbnail\" data-type=\"image\" href=\"' + addUrl + '\">' +
                                '<img class=\"img-fluid\" src=\"";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/thumbs/placeholder.png"], "method", false, false, false, 294), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add Thumbnail"), "html", null, true);
        yield "\" />' +
                                '</a>';
                          }
                          return '';
                        },
                        sortable: false
                    },
                    {\"data\": \"owner\", responsivePriority: 4},
                    {
                        \"data\": \"groupsWithPermissions\",
                        responsivePriority: 4,
                        \"render\": dataTableCreatePermissions
                    },
                    {
                        \"name\": \"status\",
                        responsivePriority: 3,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.status;

                            var icon = \"\";
                            if (data.status == 1)
                                icon = \"fa-check\";
                            else if (data.status == 2)
                                icon = \"fa-exclamation\";
                            else if (data.status == 3)
                                icon = \"fa-cogs\";
                            else
                                icon = \"fa-times\";

                            return '<span class=\"fa ' + icon + '\" title=\"' + (data.statusDescription) + ((data.statusMessage == null) ? \"\" : \" - \" + (data.statusMessage)) + '\"></span>';
                        }
                    },
                    {
                        \"name\": \"enableStat\",
                        responsivePriority: 4,
                        \"data\": function (data) {

                            var icon = \"\";
                            if (data.enableStat == 1)
                                icon = \"fa-check\";
                            else
                                icon = \"fa-times\";

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
                        data: \"modifiedDt\",
                        responsivePriority: 6,
                        render: dataTableDateFromIso,
                        visible: true
                    },
                    {
                      data: \"layoutId\",
                      visible: false,
                      responsivePriority: 4
                    },
                    {\"data\": \"code\", \"visible\":false, responsivePriority: 4},
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
            table.on('draw', function(e, settings) {
              \$('#' + e.target.id + ' .generate-layout-thumbnail').on('click', function(e) {
                e.preventDefault();
                var \$anchor = \$(this);
                \$.ajax({
                  url: \$anchor.attr('href'),
                  method: 'POST',
                  success: function() {
                    \$anchor.find('img').attr('src', \$anchor.attr('href'));
                    \$anchor.removeClass('generate-layout-thumbnail').attr('data-toggle', 'lightbox');
                  }
                });
              });
            });
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#layouts_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function() {
                table.ajax.reload();
            });

            // Bind to the layout add button
            \$('button.layout-add-button').on('click', function() {
              let currentWorkingFolderId =
                \$(\"#layouts\")
                  .closest(\".XiboGrid\")
                  .find(\".FilterDiv form\")
                  .find('#folderId').val()
                // Submit the URL provided as a POST request.
                \$.ajax({
                    type: 'POST',
                    url: \$(this).attr('href'),
                    cache: false,
                    data : {folderId : currentWorkingFolderId},
                    dataType: 'json',
                    success: function(response, textStatus, error) {
                        if (response.success && response.id) {
                            XiboRedirect('";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.designer", ["id" => ":id"]), "html", null, true);
        yield "'.replace(':id', response.id));
                        } else {
                            if (response.login) {
                                LoginBox(response.message);
                            } else {
                                SystemMessage(response.message ?? '";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unknown Error"), "html", null, true);
        yield "', false);
                            }
                        }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        SystemMessage(xhr.responseText, false);
                    },
                });
            });
        });

        \$(\"#layoutUploadForm\").click(function(e) {
            e.preventDefault();
            var currentWorkingFolderId = \$('#folderId').val();

            // Open the upload dialog with our options.
            openUploadForm({
                url: \"";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.import"), "html", null, true);
        yield "\",
                title: \"";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload Layout"), "html", null, true);
        yield "\",
                videoImageCovers: false,
                buttons: {
                    main: {
                        label: \"";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Done"), "html", null, true);
        yield "\",
                        className: \"btn-primary btn-bb-main\",
                        callback: function () {
                            table.ajax.reload();
                            XiboDialogClose();
                        }
                    }
                },
                templateOptions: {
                    layoutImport: true,
                    updateInAllChecked: ";
        // line 443
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 443) == 1)) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                    deleteOldRevisionsChecked: ";
        // line 444
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", [], "any", false, false, false, 444) == 1)) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                    trans: {
                        addFiles: \"";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add Layout Export ZIP Files"), "html", null, true);
        yield "\",
                        startUpload: \"";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Start Import"), "html", null, true);
        yield "\",
                        cancelUpload: \"";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel Import"), "html", null, true);
        yield "\",
                        replaceExistingMediaMessage: \"";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Replace Existing Media?"), "html", null, true);
        yield "\",
                        importTagsMessage: \"";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import Tags?"), "html", null, true);
        yield "\",
                        useExistingDataSetsMessage: \"";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use existing DataSets matched by name?"), "html", null, true);
        yield "\",
                        dataSetDataMessage: \"";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import DataSet Data?"), "html", null, true);
        yield "\",
                        fallbackMessage: \"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import Widget Fallback Data?"), "html", null, true);
        yield "\",
                        selectFolder: \"";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select Folder"), "html", null, true);
        yield "\",
                        selectFolderTitle: \"";
        // line 455
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change Current Folder location"), "html", null, true);
        yield "\",
                        selectedFolder: \"";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current Folder"), "html", null, true);
        yield ":\",
                        selectedFolderTitle: \"";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload files to this Folder"), "html", null, true);
        yield "\"
                    },
                    upload: {
                        maxSize: ";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 460), "html", null, true);
        yield ",
                        maxSizeMessage: \"";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 461), "html", null, true);
        yield "\",
                        validExt: \"zip\"
                    },
                    currentWorkingFolderId: currentWorkingFolderId,
                    folderSelector: true
                },
                formOpenedEvent: function () {
                    // Configure the active behaviour of the checkboxes
                    \$(\"#useExistingDataSets\").on(\"click\", function () {
                        \$(\"#importDataSetData\").prop(\"disabled\", (\$(this).is(\":checked\")));
                    });
                },
                uploadDoneEvent: function (data) {
                    XiboDialogClose();
                    table.ajax.reload();
                }
            });
        });

        function layoutExportFormSubmit() {
            var \$form = \$(\"#layoutExportForm\");
            window.location = \$form.attr(\"action\") + \"?\" + \$form.serialize();

            setTimeout(function() {
                XiboDialogClose();
            }, 1000);
        }

        function assignLayoutToCampaignFormSubmit() {
            var form = \$(\"#layoutAssignCampaignForm\");

            var url = form.prop(\"action\").replace(\":id\", form.find(\"#campaignId\").val());

            \$.ajax({
                type: form.attr(\"method\"),
                url: url,
                data: {layoutId: form.data().layoutId},
                cache: false,
                dataType:\"json\",
                success: XiboSubmitResponse
            });
        }

        function setEnableStatMultiSelectFormOpen(dialog) {
            var \$input = \$('<input type=checkbox id=\"enableStat\" name=\"enableStat\"> ";
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enable Stats Collection?"), "html", null, true);
        yield " </input>');
            var \$helpText = \$('<span class=\"help-block\">";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Check to enable the collection of Proof of Play statistics for the selected items."), "html", null, true);
        yield "</span>');

            \$input.on('change', function() {
                dialog.data().commitData = {enableStat: \$(this).val()};
            });

            \$(dialog).find('.modal-body').append(\$input);
            \$(dialog).find('.modal-body').append(\$helpText);
        }

        function layoutPublishFormOpen() {
          // Nothing to do here, but we use the same form on the layout designer and have a callback registered there
        }

        function layoutEditFormSaved() {
          // Nothing to do here.
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
        return "layout-page.twig";
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
        return array (  938 => 506,  934 => 505,  887 => 461,  883 => 460,  877 => 457,  873 => 456,  869 => 455,  865 => 454,  861 => 453,  857 => 452,  853 => 451,  849 => 450,  845 => 449,  841 => 448,  837 => 447,  833 => 446,  824 => 444,  816 => 443,  803 => 433,  796 => 429,  792 => 428,  772 => 411,  764 => 406,  647 => 294,  642 => 292,  636 => 289,  624 => 279,  615 => 273,  563 => 224,  545 => 208,  541 => 206,  539 => 205,  532 => 202,  528 => 201,  508 => 185,  504 => 184,  500 => 183,  496 => 182,  492 => 181,  488 => 180,  484 => 179,  480 => 178,  476 => 177,  471 => 176,  465 => 175,  461 => 174,  457 => 173,  453 => 172,  449 => 171,  445 => 170,  433 => 161,  424 => 155,  416 => 152,  410 => 149,  397 => 140,  392 => 139,  386 => 137,  381 => 136,  378 => 135,  372 => 133,  366 => 132,  364 => 131,  358 => 129,  355 => 128,  352 => 127,  349 => 126,  346 => 125,  341 => 124,  335 => 122,  332 => 121,  329 => 120,  326 => 119,  323 => 118,  318 => 117,  312 => 115,  309 => 114,  306 => 113,  303 => 112,  298 => 111,  291 => 107,  285 => 105,  282 => 104,  279 => 103,  276 => 102,  273 => 101,  268 => 100,  262 => 98,  259 => 87,  253 => 86,  248 => 85,  242 => 83,  239 => 71,  233 => 70,  228 => 69,  225 => 68,  219 => 66,  216 => 54,  210 => 53,  204 => 52,  202 => 51,  196 => 49,  191 => 48,  188 => 47,  182 => 45,  176 => 44,  170 => 43,  164 => 42,  158 => 41,  156 => 40,  150 => 38,  145 => 37,  139 => 35,  134 => 34,  126 => 29,  122 => 28,  115 => 24,  110 => 22,  107 => 21,  103 => 20,  94 => 16,  87 => 14,  84 => 13,  82 => 12,  78 => 11,  74 => 10,  71 => 9,  69 => 8,  66 => 7,  62 => 6,  53 => 4,  48 => 1,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-page.twig", "/var/www/cms/views/layout-page.twig");
    }
}
