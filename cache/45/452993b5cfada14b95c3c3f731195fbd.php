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

/* syncgroup-page.twig */
class __TwigTemplate_c6fa332de7e7e3d9a5ad4e57a125f9ab extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "syncgroup-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "syncgroup-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sync Groups"), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["display.syncAdd"], "method", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a new Sync Group");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.form.add"), "html", null, true);
            yield "\"> <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> ";
            echo __("Add Sync Group");
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
        echo __("Sync Groups");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"syncGroupGridView\">
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
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["syncGroupId", ($context["title"] ?? null)], 46, $context, $this->getSourceContext());
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
            echo __("Lead Display ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["leadDisplayId", ($context["title"] ?? null)], 52, $context, $this->getSourceContext());
        yield "

                            ";
        // line 54
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["folderId"], 54, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 60
        echo __("Search");
        yield "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 63
        echo __("Search in all folders");
        yield "\">";
        echo __("All Folders");
        yield "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 66
        echo __("No Folders matching the search term");
        yield "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 71
        echo __("Open / Close Folder Search options");
        yield "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"syncgroups\" class=\"table table-striped\" data-content-type=\"syncGroup\" data-content-id-name=\"syncGroupId\" data-state-preference-name=\"syncGroupGrid\" style=\"width: 100%;\">
                                <thead>
                                <tr>
                                    <th>";
        // line 79
        echo __("ID");
        yield "</th>
                                    <th>";
        // line 80
        echo __("Name");
        yield "</th>
                                    <th>";
        // line 81
        echo __("Created Date");
        yield "</th>
                                    <th>";
        // line 82
        echo __("Modified Date");
        yield "</th>
                                    <th>";
        // line 83
        echo __("Owner");
        yield "</th>
                                    <th>";
        // line 84
        echo __("Modified By");
        yield "</th>
                                    <th>";
        // line 85
        echo __("Publisher Port");
        yield "</th>
                                    <th>";
        // line 86
        echo __("Switch Delay");
        yield "</th>
                                    <th>";
        // line 87
        echo __("Video Pause Delay");
        yield "</th>
                                    <th>";
        // line 88
        echo __("Lead Display");
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

    // line 104
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
      let syncGroupTable;

      \$(document).ready(function() {
        syncGroupTable = \$(\"#syncgroups\").DataTable({
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
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.search"), "html", null, true);
        yield "\",
            \"data\": function(d) {
              \$.extend(d, \$(\"#syncgroups\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
            }
          },
          \"columns\": [
            { \"data\": \"syncGroupId\", responsivePriority: 2 },
            { \"data\": \"name\", responsivePriority: 1 },
            { \"data\": \"createdDt\", responsivePriority: 2 },
            { \"data\": \"modifiedDt\", responsivePriority: 2 },
            { \"data\": \"owner\", responsivePriority: 3 },
            { \"data\": \"modifiedByName\", responsivePriority: 4 },
            { \"data\": \"syncPublisherPort\", responsivePriority: 3 },
            { \"data\": \"syncSwitchDelay\", responsivePriority: 3 },
            { \"data\": \"syncVideoPauseDelay\", responsivePriority: 3 },
            { \"data\": \"leadDisplay\", responsivePriority: 3 },
            {
              \"orderable\": false,
              responsivePriority: 1,
              \"data\": dataTableButtonsColumn
            }
          ]
        });

        syncGroupTable.on('draw', dataTableDraw);
        syncGroupTable.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(syncGroupTable, \$('#syncgroups_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            syncGroupTable.ajax.reload();
        });
      });
    </script>
";
        return; yield '';
    }

    // line 157
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        yield "    ";
        yield from $this->yieldParentBlock("javaScriptTemplates", $context, $blocks);
        yield "

    ";
        // line 167
        yield "
    <script type=\"text/x-handlebars-template\" id=\"template-display-group-multi-delete-checkbox\">
        <div class=\"form-group row\">
            <div class=\"offset-sm-2 col-sm-10 mt-4\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox-confirmDelete\" name=\"confirmDelete\">
                    <label class=\"form-check-label\" for=\"checkbox-confirmDelete\">
                        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete?"), "html", null, true);
        // line 170
        yield "
                    </label>
                </div>
                <small class=\"form-text text-muted\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Check to confirm deletion of the selected records."), "html", null, true);
        // line 174
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
        return "syncgroup-page.twig";
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
        return array (  331 => 174,  325 => 170,  315 => 167,  309 => 158,  305 => 157,  266 => 122,  245 => 105,  241 => 104,  221 => 88,  217 => 87,  213 => 86,  209 => 85,  205 => 84,  201 => 83,  197 => 82,  193 => 81,  189 => 80,  185 => 79,  174 => 71,  166 => 66,  158 => 63,  152 => 60,  143 => 54,  137 => 52,  132 => 51,  126 => 49,  121 => 48,  115 => 46,  110 => 45,  103 => 41,  98 => 39,  95 => 38,  91 => 37,  82 => 33,  72 => 31,  70 => 30,  67 => 29,  63 => 28,  54 => 26,  49 => 23,  47 => 24,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "syncgroup-page.twig", "/var/www/cms/views/syncgroup-page.twig");
    }
}
