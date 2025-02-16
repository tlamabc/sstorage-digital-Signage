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

/* displaygroup-page.twig */
class __TwigTemplate_529f4b3427679bc09a6ffef8b11e3fa7 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "displaygroup-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "displaygroup-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Display Groups"), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displaygroup.add"], "method", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a new Display Group");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.add.form"), "html", null, true);
            yield "\"> <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> ";
            echo __("Add Display Group");
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
        echo __("Display Groups");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"displayGroupGridView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 45
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["displayGroupId", ($context["title"] ?? null)], 46, $context, $this->getSourceContext());
        yield "

                            ";
        // line 48
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["displayGroup", ($context["title"] ?? null)], 49, $context, $this->getSourceContext());
        yield "

                            ";
        // line 51
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search")], ["name" => "data-search-term", "value" => "display"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayId"], ["name" => "data-text-property", "value" => "display"], ["name" => "data-initial-key", "value" => "displayId"]];
        // line 64
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Return Display Groups that directly contain the selected Display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayId", "single", ($context["title"] ?? null), "", null, "displayId", "display", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 65, $context, $this->getSourceContext());
        yield "

                            ";
        // line 67
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Nested Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Return Display Groups that contain the selected Display somewhere in the nested Display Group relationship tree.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["nestedDisplayId", "single", ($context["title"] ?? null), "", null, "displayId", "display", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 69, $context, $this->getSourceContext());
        yield "

                            ";
        // line 71
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Dynamic Criteria");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["dynamicCriteria", ($context["title"] ?? null)], 72, $context, $this->getSourceContext());
        yield "

                            ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 74)) {
            // line 75
            yield "                                ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            yield "                                ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 77
            yield "                                ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 78
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 79
            yield "                                ";
            yield CoreExtension::callMacro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 79, $context, $this->getSourceContext());
            yield "
                            ";
        }
        // line 81
        yield "
                            ";
        // line 82
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["folderId"], 82, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 88
        echo __("Search");
        yield "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 91
        echo __("Search in all folders");
        yield "\">";
        echo __("All Folders");
        yield "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 94
        echo __("No Folders matching the search term");
        yield "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 99
        echo __("Open / Close Folder Search options");
        yield "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>

                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"displaygroups\" class=\"table table-striped\" data-content-type=\"displayGroup\" data-content-id-name=\"displayGroupId\" data-state-preference-name=\"displayGroupGrid\" style=\"width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 108
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 109
        echo __("Name");
        yield "</th>
                                        <th>";
        // line 110
        echo __("Description");
        yield "</th>
                                        <th>";
        // line 111
        echo __("Is Dynamic?");
        yield "</th>
                                        <th>";
        // line 112
        echo __("Criteria");
        yield "</th>
                                        ";
        // line 113
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 113)) {
            // line 114
            yield "                                            <th>";
            echo __("Criteria Tags");
            yield "</th>
                                            <th>";
            // line 115
            echo __("Tags");
            yield "</th>
                                        ";
        }
        // line 117
        yield "                                        <th>";
        echo __("Sharing");
        yield "</th>
                                        <th>";
        // line 118
        echo __("Reference 1");
        yield "</th>
                                        <th>";
        // line 119
        echo __("Reference 2");
        yield "</th>
                                        <th>";
        // line 120
        echo __("Reference 3");
        yield "</th>
                                        <th>";
        // line 121
        echo __("Reference 4");
        yield "</th>
                                        <th>";
        // line 122
        echo __("Reference 5");
        yield "</th>
                                        <th>";
        // line 123
        echo __("Created Date");
        yield "</th>
                                        <th>";
        // line 124
        echo __("Modified Date");
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

    // line 140
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
      var displayGroupTable;
      var displayTable;
      var criteria;
      var criteriaTag;
      var useRegexForName;
      var exactTags;
      var logicalOperator;
      var logicalOperatorName;

      \$(document).ready(function() {
        ";
        // line 152
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 152)) {
            // line 153
            yield "        disableFolders();
        ";
        }
        // line 155
        yield "
        displayGroupTable = \$(\"#displaygroups\").DataTable({
            \"language\": dataTablesLanguage,
            dom: dataTablesTemplate,
            serverSide: true,
            stateSave: true,
            stateDuration: 0,
            responsive: true,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            \"filter\": false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search"), "html", null, true);
        yield "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#displaygroups\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"displayGroupId\", responsivePriority: 2},
                { \"data\": \"displayGroup\", \"render\": dataTableSpacingPreformatted, responsivePriority: 2 },
                { \"data\": \"description\", responsivePriority: 3 },
                { \"data\": \"isDynamic\", \"render\": dataTableTickCrossColumn, responsivePriority: 3 },
                { \"data\": \"dynamicCriteria\", responsivePriority: 4 },
                ";
        // line 180
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 180)) {
            // line 181
            yield "                { \"data\": \"dynamicCriteriaTags\", responsivePriority: 4},
                {
                    \"name\": \"tags\",
                    \"sortable\": false,
                    responsivePriority: 3,
                    \"data\": dataTableCreateTags
                },
                ";
        }
        // line 189
        yield "                {
                    \"data\": \"groupsWithPermissions\",
                    visible: false,
                    responsivePriority: 10,
                    \"render\": dataTableCreatePermissions
                },
                { \"data\": \"ref1\", \"visible\": false, responsivePriority: 5},
                { \"data\": \"ref2\", \"visible\": false, responsivePriority: 5},
                { \"data\": \"ref3\", \"visible\": false, responsivePriority: 5},
                { \"data\": \"ref4\", \"visible\": false, responsivePriority: 5},
                { \"data\": \"ref5\", \"visible\": false, responsivePriority: 5},
                { \"data\": \"createdDt\", \"visible\": false, responsivePriority: 5 },
                { \"data\": \"modifiedDt\", \"visible\": false, responsivePriority: 5 },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        \$(\"#refreshGrid\").click(function () {
            displayGroupTable.ajax.reload();
        });

        displayGroupTable.on('draw', dataTableDraw);
        displayGroupTable.on('draw', { form: \$(\"#displaygroups\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
        displayGroupTable.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(displayGroupTable, \$('#displaygroups_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            displayGroupTable.ajax.reload();
        });
      });

        function setDeleteMultiSelectFormOpen(dialog) {
            \$(dialog).find('.save-button').prop('disabled', false);
            var template = Handlebars.compile(\$('#template-display-group-multi-delete-checkbox').html());
            var \$input = \$(template());
            \$input.find('input').on('change', function() {
                \$(dialog).find('.save-button').prop('disabled', !\$(this).is(':checked'));
            });
            \$(dialog).find('.modal-body').append(\$input);
        }

        function displayGroupAddFormNext() {
            // Get form
            var \$form = \$(\"#displayGroupAddForm\");

            // Set apply and apply reset data
            \$form.data(\"apply\", true);
            \$form.data(\"applyCallback\", 'applyResetCallback');

            // Submit form
            \$form.submit();
        }

        function applyResetCallback(form) {
            // Reset form fields
            \$(form).find('#displayGroup').val(\"\");
        }

        function displayGroupFormOpen(dialog) {
            displayTable = null;

            \$(dialog).find(\"input[name=dynamicCriteria]\").on(\"keyup\", _.debounce(function() {
                displayGroupQueryDynamicMembers(dialog);
            }, 500));

            \$(dialog).find(\"input[name=dynamicCriteriaTags], input[name=exactTags], select[name=logicalOperator], select[name=logicalOperatorName]\").change(function() {
                displayGroupQueryDynamicMembers(dialog);
            });

            var \$form = \$('#displayGroupAddForm');

            // First time in there
            displayGroupQueryDynamicMembers(dialog);
        }

        function displayGroupQueryDynamicMembers(dialog) {

            if (\$(dialog).find(\"input[name=isDynamic]\")[0].checked) {

                criteria = \$(dialog).find(\"input[name=dynamicCriteria]\").val();
                criteriaTag = \$(dialog).find(\"input[name=dynamicCriteriaTags]\").val();
                useRegexForName = \$(dialog).find(\"input[name=useRegexForName]\").val();
                exactTags = \$(dialog).find(\"input[name=exactTags]\").is(':checked');
                logicalOperator = \$(dialog).find(\"select[name=logicalOperator]\").val();
                logicalOperatorName = \$(dialog).find(\"select[name=logicalOperatorName]\").val();

                if (criteria === \"\" && criteriaTag === \"\") {
                    if (displayTable != null) {
                        displayTable.destroy();
                        displayTable = null;
                        \$(\"#displayGroupDisplays tbody\").empty();
                    }

                    return;
                }

                if (displayTable != null) {
                    displayTable.ajax.reload();
                } else {
                    displayTable = \$(\"#displayGroupDisplays\").DataTable({
                        \"language\": dataTablesLanguage,
                        serverSide: true,
                        stateSave: true, stateDuration: 0,
                        filter: false,
                        searchDelay: 3000,
                        \"order\": [[1, \"asc\"]],
                        ajax: {
                            \"url\": \"";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        yield "\",
                            \"data\": function (d) {
                                \$.extend(
                                  d,
                                  {
                                    display: criteria,
                                    tags: criteriaTag,
                                    useRegexForName: useRegexForName,
                                    exactTags: exactTags,
                                    logicalOperator: logicalOperator,
                                    logicalOperatorName: logicalOperatorName
                                  }
                                );
                            }
                        },
                        \"columns\": [
                            {\"data\": \"displayId\"},
                            {\"data\": \"display\"},
                            {\"data\": dataTableCreateTags},
                            {
                                \"data\": \"mediaInventoryStatus\",
                                \"render\": function (data, type, row) {
                                    if (type != \"display\")
                                        return data;

                                    var icon = \"\";
                                    if (data == 1)
                                        icon = \"fa-check\";
                                    else if (data == 0)
                                        icon = \"fa-times\";
                                    else
                                        icon = \"fa-cloud-download\";

                                    return \"<span class='fa \" + icon + \"'></span>\";
                                }
                            },
                            {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn}
                        ]
                    });

                    displayTable.on('processing.dt', dataTableProcessing);
                    displayTable.on('draw', { form: \$(\".displayGroupForm\") }, dataTableCreateTagEvents);
                }
            }
        }
    </script>
";
        return; yield '';
    }

    // line 348
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 349
        yield "    ";
        yield from $this->yieldParentBlock("javaScriptTemplates", $context, $blocks);
        yield "

    ";
        // line 358
        yield "
    <script type=\"text/x-handlebars-template\" id=\"template-display-group-multi-delete-checkbox\">
        <div class=\"form-group row\">
            <div class=\"offset-sm-2 col-sm-10 mt-4\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox-confirmDelete\" name=\"confirmDelete\">
                    <label class=\"form-check-label\" for=\"checkbox-confirmDelete\">
                        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete?"), "html", null, true);
        // line 361
        yield "
                    </label>
                </div>
                <small class=\"form-text text-muted\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Check to confirm deletion of the selected records."), "html", null, true);
        // line 365
        yield "</small>
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
        return "displaygroup-page.twig";
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
        return array (  597 => 365,  591 => 361,  581 => 358,  575 => 349,  571 => 348,  519 => 300,  406 => 189,  396 => 181,  394 => 180,  380 => 169,  364 => 155,  360 => 153,  358 => 152,  343 => 141,  339 => 140,  319 => 124,  315 => 123,  311 => 122,  307 => 121,  303 => 120,  299 => 119,  295 => 118,  290 => 117,  285 => 115,  280 => 114,  278 => 113,  274 => 112,  270 => 111,  266 => 110,  262 => 109,  258 => 108,  246 => 99,  238 => 94,  230 => 91,  224 => 88,  215 => 82,  212 => 81,  206 => 79,  200 => 78,  194 => 77,  188 => 76,  182 => 75,  180 => 74,  174 => 72,  169 => 71,  163 => 69,  157 => 68,  152 => 67,  146 => 65,  140 => 64,  137 => 52,  132 => 51,  126 => 49,  121 => 48,  115 => 46,  110 => 45,  103 => 41,  98 => 39,  95 => 38,  91 => 37,  82 => 33,  72 => 31,  70 => 30,  67 => 29,  63 => 28,  54 => 26,  49 => 23,  47 => 24,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displaygroup-page.twig", "/var/www/cms/views/displaygroup-page.twig");
    }
}
