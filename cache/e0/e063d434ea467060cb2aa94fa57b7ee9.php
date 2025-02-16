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

/* command-page.twig */
class __TwigTemplate_596249be15a66be74e56ab536a074858 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "command-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "command-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Commands"), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["command.add"], "method", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-success XiboFormButton\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.add.form"), "html", null, true);
            yield "\"><i class=\"fa fa-terminal\" aria-hidden=\"true\"></i> ";
            echo __("Add Command");
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

    // line 38
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 40
        echo __("Commands");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 46
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["command", ($context["title"] ?? null)], 47, $context, $this->getSourceContext());
        yield "

                            ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["code", ($context["title"] ?? null), null, "useRegexForCode", "logicalOperatorCode"], 50, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"commands\" class=\"table table-striped\" data-state-preference-name=\"commandGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 58
        echo __("Name");
        yield "</th>
                                <th>";
        // line 59
        echo __("Code");
        yield "</th>
                                <th>";
        // line 60
        echo __("Available On");
        yield "</th>
                                <th>";
        // line 61
        echo __("Description");
        yield "</th>
                                <th>";
        // line 62
        echo __("Sharing");
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

    // line 76
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table = \$(\"#commands\").DataTable({ \"language\": dataTablesLanguage,
            dom: dataTablesTemplate,
            serverSide: true,
            stateSave: true,
            stateDuration: 0,
            responsive: true,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.search"), "html", null, true);
        yield "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#commands\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"command\", \"render\": dataTableSpacingPreformatted , responsivePriority: 2},
                { \"data\": \"code\" , responsivePriority: 2},
                {
                    \"data\": \"availableOn\",
                     responsivePriority: 3,
                    \"render\": function(data, type) {

                        if (type !== \"display\")
                            return data;

                        var returnData = '';

                        if (typeof data !== undefined && data != null) {
                            var arrayOfTags = data.split(',');

                            returnData += '<div class=\"permissionsDiv\">';

                            for (var i = 0; i < arrayOfTags.length; i++) {
                                var name = arrayOfTags[i];
                                if (name !== '') {
                                    returnData += '<li class=\"badge ' + ((name === 'lg') ? '' : 'capitalize') + '\">'
                                        + name.replace(\"lg\", \"webOS\").replace(\"sssp\", \"Tizen\") + '</span></li>'
                                }
                            }

                            returnData += '</div>';
                        }

                        return returnData;
                    }
                },
                { \"data\": \"description\", responsivePriority: 3 },
                {
                    \"data\": \"groupsWithPermissions\",
                     responsivePriority: 3,
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
        dataTableAddButtons(table, \$('#commands_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
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
        return "command-page.twig";
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
        return array (  190 => 90,  173 => 77,  169 => 76,  151 => 62,  147 => 61,  143 => 60,  139 => 59,  135 => 58,  123 => 50,  118 => 49,  112 => 47,  107 => 46,  100 => 42,  95 => 40,  92 => 39,  88 => 38,  79 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "command-page.twig", "/var/www/cms/views/command-page.twig");
    }
}
