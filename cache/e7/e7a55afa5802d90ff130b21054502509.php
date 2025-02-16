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

/* module-page.twig */
class __TwigTemplate_d4e0849f676cdc580f56279365282e5e extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "module-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "module-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Modules"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        // line 30
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 34
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 36
        echo __("Modules");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 42
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["name", ($context["title"] ?? null)], 43, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"modules\" class=\"table table-striped\" data-state-preference-name=\"moduleGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 51
        echo __("Name");
        yield "</th>
                                <th>";
        // line 52
        echo __("Description");
        yield "</th>
                                <th>";
        // line 53
        echo __("Library Media");
        yield "</th>
                                <th>";
        // line 54
        echo __("Default Duration");
        yield "</th>
                                <th>";
        // line 55
        echo __("Preview Enabled");
        yield "</th>
                                <th title=\"";
        // line 56
        echo __("Can this module be assigned to a Layout?");
        yield "\">";
        echo __("Assignable");
        yield "</th>
                                <th>";
        // line 57
        echo __("Enabled");
        yield "</th>
                                <th>";
        // line 58
        echo __("Errors");
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
";
        return; yield '';
    }

    // line 72
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table = \$('#modules').DataTable({
            language: dataTablesLanguage,
            dom: dataTablesTemplate,
            serverSide: false,
            stateSave: true,
            stateDuration: 0,
            responsive: true,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            filter: false,
            searchDelay: 3000,
            order: [[ 0, 'asc']],
            ajax: {
              url: '";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.search"), "html", null, true);
        yield "',
              data: function (d) {
                \$.extend(d, \$('#modules').closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
              }
            },
            columns: [
                { \"data\": \"name\" , responsivePriority: 2},
                { \"data\": \"description\" },
                { \"data\": \"regionSpecific\", \"render\": dataTableTickCrossInverseColumn },
                { \"data\": \"defaultDuration\" },
                { \"data\": \"previewEnabled\", \"render\": dataTableTickCrossColumn },
                { \"data\": \"assignable\", \"render\": dataTableTickCrossColumn },
                { \"data\": \"enabled\", \"render\": dataTableTickCrossColumn },
                { \"data\": \"errors\", \"render\": dataTableTickCrossColumn },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#modules_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });

        function moduleEditFormOpen(dialog) {
            var moduleSettings = \$(dialog).data('extra')['settings'];
            var \$targetContainer = \$(dialog).find('.form-module-configure-fields')

            forms.createFields(moduleSettings, \$targetContainer);
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
        return "module-page.twig";
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
        return array (  183 => 87,  165 => 73,  161 => 72,  143 => 58,  139 => 57,  133 => 56,  129 => 55,  125 => 54,  121 => 53,  117 => 52,  113 => 51,  101 => 43,  96 => 42,  89 => 38,  84 => 36,  81 => 35,  77 => 34,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "module-page.twig", "/var/www/cms/views/module-page.twig");
    }
}
