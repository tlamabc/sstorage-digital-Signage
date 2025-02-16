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

/* log-page.twig */
class __TwigTemplate_f62a427d80c6dd842ab31304a90d3407 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "log-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "log-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Logs"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-warning XiboFormButton\" title=\"";
        // line 30
        echo __("Truncate the Log");
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.truncate.form"), "html", null, true);
        yield "\" data-auto-submit=\"true\" data-commit-url=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.truncate"), "html", null, true);
        yield "\" data-commit-method=\"DELETE\"><i class=\"fa fa-scissors\" aria-hidden=\"true\"></i> ";
        echo __("Truncate");
        yield "</button>
        <button class=\"btn btn-primary\" id=\"refreshLog\" title=\"";
        // line 31
        echo __("Refresh the Log");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i> ";
        echo __("Refresh");
        yield "</button>
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
        echo __("Logs");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"logView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\">";
        // line 43
        echo __("General");
        yield "</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced\" role=\"tab\" data-toggle=\"tab\">";
        // line 44
        echo __("Advanced");
        yield "</a></li>
                        </ul>
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general\">
                                    ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Level");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["level", ($context["title"] ?? null)], 50, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 52
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Interval");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "                                    ";
        $context["secondsTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Seconds");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                                    ";
        $context["minutesTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Minutes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                                    ";
        $context["hoursTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hours");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                                    ";
        $context["intervalTypeOptions"] = [["id" => 1, "value" =>         // line 57
($context["secondsTrans"] ?? null)], ["id" => 60, "value" =>         // line 58
($context["minutesTrans"] ?? null)], ["id" => 3600, "value" =>         // line 59
($context["hoursTrans"] ?? null)]];
        // line 61
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["intervalType", "single", ($context["title"] ?? null), 1, ($context["intervalTypeOptions"] ?? null), "id", "value"], 61, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 63
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Duration back");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["seconds", ($context["title"] ?? null), 120], 64, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 66
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Run");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["runNo", ($context["title"] ?? null)], 67, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 69
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("User");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        yield "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 82
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 82, $context, $this->getSourceContext());
        yield "
                                </div>
                                <div class=\"tab-pane\" id=\"advanced\">
                                    ";
        // line 85
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("From Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_date", ["fromDt", ($context["title"] ?? null)], 86, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 88
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Channel");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["channel", ($context["title"] ?? null)], 89, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 91
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Page");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["page", ($context["title"] ?? null)], 92, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 94
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Function");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        yield "                                    ";
        $context["getTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("GET");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        yield "                                    ";
        $context["postTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("POST");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "                                    ";
        $context["putTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("PUT");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        yield "                                    ";
        $context["deleteTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("DELETE");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        yield "                                    ";
        $context["headTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("HEAD");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        yield "                                    ";
        $context["patchTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("PATCH");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        yield "                                    ";
        $context["functionOptions"] = [["id" => "", "value" => ""], ["id" => "GET", "value" =>         // line 103
($context["getTrans"] ?? null)], ["id" => "POST", "value" =>         // line 104
($context["postTrans"] ?? null)], ["id" => "PUT", "value" =>         // line 105
($context["putTrans"] ?? null)], ["id" => "DELETE", "value" =>         // line 106
($context["deleteTrans"] ?? null)], ["id" => "HEAD", "value" =>         // line 107
($context["headTrans"] ?? null)], ["id" => "PATCH", "value" =>         // line 108
($context["patchTrans"] ?? null)]];
        // line 110
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["function", "single", ($context["title"] ?? null), "", ($context["functionOptions"] ?? null), "id", "value"], 110, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 112
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        yield "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search")], ["name" => "data-search-term", "value" => "display"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayId"], ["name" => "data-text-property", "value" => "display"]];
        // line 124
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayId", "single", ($context["title"] ?? null), "", null, "displayId", "display", "", "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 124, $context, $this->getSourceContext());
        yield "

                                    <div class=\"form-group mr-1 mb-1\">
                                        <label class=\"control-label mr-1\" title=\"\" for=\"display\" accesskey=\"\">";
        // line 127
        echo __("Display Name");
        yield "</label>
                                        <div>
                                            <div class=\"input-group\">
                                                <input class=\"form-control\" name=\"display\" type=\"text\" id=\"display\" value=\"\">
                                                <div class=\"input-group-append input-group-addon\">
                                                    <div class=\"input-group-text\">
                                                        <input title=\"";
        // line 133
        echo __("Use Regex?");
        yield "\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    ";
        // line 140
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        yield "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"]];
        // line 151
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayGroupId", "single", ($context["title"] ?? null), "", null, "displayGroupId", "displayGroup", "", "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 151, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 153
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Message");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 154
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["message", ($context["title"] ?? null)], 154, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 156
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Exclude logs common to each request?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 157
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_checkbox", ["excludeLog", ($context["title"] ?? null), 1], 157, $context, $this->getSourceContext());
        yield "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"logs\" class=\"table table-striped\" data-state-preference-name=\"logGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 167
        echo __("ID");
        yield "</th>
                                <th>";
        // line 168
        echo __("Run");
        yield "</th>
                                <th>";
        // line 169
        echo __("Date");
        yield "</th>
                                <th>";
        // line 170
        echo __("Channel");
        yield "</th>
                                <th>";
        // line 171
        echo __("Function");
        yield "</th>
                                <th>";
        // line 172
        echo __("Level");
        yield "</th>
                                <th>";
        // line 173
        echo __("Display");
        yield "</th>
                                <th>";
        // line 174
        echo __("Page");
        yield "</th>
                                <th style=\"width: 50%\">";
        // line 175
        echo __("Message");
        yield "</th>
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

    // line 188
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        \$(document).ready(function() {
            var table = \$(\"#logs\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                \"order\": [[0, \"desc\"]],
                ajax: {
                    url: \"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.search"), "html", null, true);
        yield "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#logs\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"logId\"},
                    {\"data\": \"runNo\"},
                    {\"data\": \"logDate\", \"render\": dataTableDateFromIso},
                    {\"data\": \"channel\"},
                    {\"data\": \"function\"},
                    {\"data\": \"type\"},
                    {\"data\": \"display\"},
                    {\"data\": \"page\"},
                    {\"data\": \"message\"}
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#logs_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshLog\").click(function() {
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
        return "log-page.twig";
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
        return array (  441 => 203,  423 => 189,  419 => 188,  402 => 175,  398 => 174,  394 => 173,  390 => 172,  386 => 171,  382 => 170,  378 => 169,  374 => 168,  370 => 167,  356 => 157,  351 => 156,  345 => 154,  340 => 153,  334 => 151,  331 => 141,  326 => 140,  316 => 133,  307 => 127,  300 => 124,  297 => 113,  292 => 112,  286 => 110,  284 => 108,  283 => 107,  282 => 106,  281 => 105,  280 => 104,  279 => 103,  277 => 101,  271 => 100,  265 => 99,  259 => 98,  253 => 97,  247 => 96,  241 => 95,  236 => 94,  230 => 92,  225 => 91,  219 => 89,  214 => 88,  208 => 86,  203 => 85,  196 => 82,  193 => 70,  188 => 69,  182 => 67,  177 => 66,  171 => 64,  166 => 63,  160 => 61,  158 => 59,  157 => 58,  156 => 57,  154 => 56,  148 => 55,  142 => 54,  136 => 53,  131 => 52,  125 => 50,  120 => 49,  112 => 44,  108 => 43,  101 => 39,  96 => 37,  93 => 36,  89 => 35,  79 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "log-page.twig", "/var/www/cms/views/log-page.twig");
    }
}
