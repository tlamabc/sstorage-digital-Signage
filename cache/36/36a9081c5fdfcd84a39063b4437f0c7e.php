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

/* sessions-page.twig */
class __TwigTemplate_2ee32afa18897116c479d4e9506b15f4 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "sessions-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "sessions-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sessions"), "html", null, true);
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
        echo __("Sessions");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"sessionsView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 42
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("From Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_date", ["fromDt", ($context["title"] ?? null)], 43, $context, $this->getSourceContext());
        yield "

                            ";
        // line 45
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                            ";
        $context["activeTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Active");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                            ";
        $context["guestTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Guest");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "                            ";
        $context["expiredTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Expired");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                            ";
        $context["typeOptions"] = [["id" => null, "value" => ""], ["id" => "active", "value" =>         // line 51
($context["activeTrans"] ?? null)], ["id" => "guest", "value" =>         // line 52
($context["guestTrans"] ?? null)], ["id" => "expired", "value" =>         // line 53
($context["expiredTrans"] ?? null)]];
        // line 55
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["type", "single", ($context["title"] ?? null), "", ($context["typeOptions"] ?? null), "id", "value"], 55, $context, $this->getSourceContext());
        yield "

                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"sessions\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 64
        echo __("Last Accessed");
        yield "</th>
                                <th>";
        // line 65
        echo __("Active");
        yield "</th>
                                <th>";
        // line 66
        echo __("User Name");
        yield "</th>
                                <th>";
        // line 67
        echo __("IP Address");
        yield "</th>
                                <th>";
        // line 68
        echo __("Browser");
        yield "</th>
                                <th>";
        // line 69
        echo __("Expires At");
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

    // line 83
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        \$(document).ready(function() {
            var table = \$(\"#sessions\").DataTable({
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
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("sessions.search"), "html", null, true);
        yield "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#sessions\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"lastAccessed\", \"render\": dataTableDateFromIso, responsivePriority: 2},
                    {\"data\": \"isExpired\", \"render\": dataTableTickCrossInverseColumn, responsivePriority: 2},
                    {\"data\": \"userName\", responsivePriority: 3},
                    {\"data\": \"remoteAddress\", responsivePriority: 4},
                    {\"data\": \"userAgent\", responsivePriority: 4},
                    {\"data\": \"expiresAt\", \"render\": dataTableDateFromUnix, responsivePriority: 3},
                    {
                        \"orderable\": false,
                         responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#sessions_wrapper').find('.dataTables_buttons'));

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
        return "sessions-page.twig";
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
        return array (  210 => 99,  191 => 84,  187 => 83,  169 => 69,  165 => 68,  161 => 67,  157 => 66,  153 => 65,  149 => 64,  136 => 55,  134 => 53,  133 => 52,  132 => 51,  130 => 49,  124 => 48,  118 => 47,  112 => 46,  107 => 45,  101 => 43,  96 => 42,  89 => 38,  84 => 36,  81 => 35,  77 => 34,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "sessions-page.twig", "/var/www/cms/views/sessions-page.twig");
    }
}
