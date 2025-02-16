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

/* menuboard-page.twig */
class __TwigTemplate_54644bc1ad9e3a5763d38006b07c1b96 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "menuboard-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "menuboard-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Menu Boards"), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["menuBoard.add"], "method", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a new Menu Board");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.add.form"), "html", null, true);
            yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Menu Board");
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
        echo __("Menu Boards");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-type=\"menuBoard\" data-grid-name=\"menuBoardView\">
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
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["menuId", ($context["title"] ?? null)], 46, $context, $this->getSourceContext());
        yield "

                            ";
        // line 48
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["name", ($context["title"] ?? null)], 49, $context, $this->getSourceContext());
        yield "

                            ";
        // line 51
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["code", ($context["title"] ?? null)], 52, $context, $this->getSourceContext());
        yield "

                            ";
        // line 54
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Owner");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items owned by the selected User.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 68
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 68, $context, $this->getSourceContext());
        yield "

                            ";
        // line 70
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["folderId"], 70, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-1 form-group\" style=\"padding: 0\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary btn-sm\" title=\"";
        // line 76
        echo __("Open / Close Folder Search options");
        yield "\"><i class=\"fas fa-bars fa-1x\"></i></button>
                    </div>
                    <div class=\"form-group col-sm-11\" style=\"padding: 0\">
                        <div id=\"breadcrumbs\" style=\"margin-top: 5px;\"></div>
                    </div>
                </div>

                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 85
        echo __("Search");
        yield "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 88
        echo __("Search in all folders");
        yield "\">";
        echo __("All Folders");
        yield "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 91
        echo __("No Folders matching the search term");
        yield "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"menuBoards\" class=\"table table-striped responsive nowrap\" data-content-type=\"menuBoard\" data-content-id-name=\"menuId\" data-state-preference-name=\"menuBoardGrid\" style=\"width: 100%;\">
                                <thead>
                                <tr>
                                    <th>";
        // line 100
        echo __("ID");
        yield "</th>
                                    <th>";
        // line 101
        echo __("Name");
        yield "</th>
                                    <th>";
        // line 102
        echo __("Description");
        yield "</th>
                                    <th>";
        // line 103
        echo __("Code");
        yield "</th>
                                    <th>";
        // line 104
        echo __("Modified Date");
        yield "</th>
                                    <th>";
        // line 105
        echo __("Owner");
        yield "</th>
                                    <th>";
        // line 106
        echo __("Permissions");
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

    // line 122
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table;
        \$(document).ready(function() {
            ";
        // line 126
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 126)) {
            // line 127
            yield "            disableFolders();
            ";
        }
        // line 129
        yield "
            table = \$(\"#menuBoards\").DataTable({
                \"language\": dataTablesLanguage,
                \"lengthMenu\": [10, 25, 50, 100, 250, 500],
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                responsive: true,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                dataType: 'json',
                \"order\": [[1, \"asc\"]],
                ajax: {
                    url: \"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.search"), "html", null, true);
        yield "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#menuBoards\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"menuId\", responsivePriority: 2},
                    {
                        \"data\": \"name\",
                        responsivePriority: 2,
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"data\": \"description\",
                        responsivePriority: 2,
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                      \"data\": \"code\", responsivePriority: 3
                    },
                    {
                      \"name\": \"modifiedDt\",
                      \"data\": function (data) {
                          return moment.unix(data.modifiedDt).format(jsDateFormat);
                      }
                    },
                    {\"data\": \"owner\", responsivePriority: 4},
                    {
                        \"data\": \"groupsWithPermissions\",
                        responsivePriority: 4,
                        \"render\": dataTableCreatePermissions
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
            dataTableAddButtons(table, \$('#menuBoards_wrapper').find('.col-md-6').eq(1));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
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
        return "menuboard-page.twig";
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
        return array (  287 => 144,  270 => 129,  266 => 127,  264 => 126,  257 => 123,  253 => 122,  233 => 106,  229 => 105,  225 => 104,  221 => 103,  217 => 102,  213 => 101,  209 => 100,  197 => 91,  189 => 88,  183 => 85,  171 => 76,  162 => 70,  156 => 68,  153 => 56,  147 => 55,  142 => 54,  136 => 52,  131 => 51,  125 => 49,  120 => 48,  114 => 46,  109 => 45,  102 => 41,  97 => 39,  94 => 38,  90 => 37,  81 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "menuboard-page.twig", "/var/www/cms/views/menuboard-page.twig");
    }
}
