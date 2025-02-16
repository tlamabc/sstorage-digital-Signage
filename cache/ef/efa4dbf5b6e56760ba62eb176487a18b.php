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

/* dataset-data-connector-page.twig */
class __TwigTemplate_fe164dabfc0c63c30a6823be9e67569f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "dataset-data-connector-page.twig", 24)->unwrap();
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "dataset-data-connector-page.twig", 25)->unwrap();
        // line 29
        $context["hideNavigation"] = "1";
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "dataset-data-connector-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $context["dataSetName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSet", [], "any", false, false, false, 27);
        /* xgettext:no-php-format */        echo strtr(__("%dataSetName% - Data Connector"), array("%dataSetName%" => ($context["dataSetName"] ?? null), ));
        yield " | ";
        return; yield '';
    }

    // line 31
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "    <div id=\"data-connector-builder\"
         data-data-set-id=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 33), "html", null, true);
        yield "\">
        <div class=\"back-button\">
            <a id=\"backBtn\" class=\"btn btn-primary\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataset.view"), "html", null, true);
        yield "\">
                <i class=\"fa fa-angle-left\"></i>
                <span>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back"), "html", null, true);
        yield "</span>
            </a>
        </div>

        <div class=\"widget mt-3\">
            <div class=\"widget-body\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"data-set-title\">
                            <h1>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dataSetName"] ?? null), "html", null, true);
        yield "</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 ";
        // line 51
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataConnectorSource", [], "any", false, false, false, 51) != "user_defined")) {
            yield "hidden";
        }
        yield "\">
                        <form id=\"dataconnector-builder-form\" class=\"XiboForm form-horizontal\"
                             method=\"put\"
                             action=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.dataConnector.update", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 54)]), "html", null, true);
        yield "\"
                             data-submit-call-back=\"onSubmitCallback\"
                        >
                            <div class=\"form-group row code-input-group xibo-code-input\">
                                <div class=\"col-sm-12\">
                                    <small class=\"form-text text-muted\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data Connector JavaScript"), "html", null, true);
        yield "</small>
                                    <textarea class=\"form-control d-none code-input\" id=\"input_script\" name=\"dataConnectorScript\" rows=\"30\" data-code-type=\"javascript\">";
        // line 60
        if (($context["script"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["script"] ?? null), "html", null, true);
        } else {
            yield "window.onInit = function() {

}";
        }
        // line 62
        yield "</textarea>

                                    <div class=\"code-input-editor-container\" style=\"height: 70vh;\">
                                        <div class=\"code-input-editor\"></div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 70
        yield CoreExtension::callMacro($macros["forms"], "macro_button", [__("Save"), "submit", null, null, null, ("btn-success " . (((CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataConnectorSource", [], "any", false, false, false, 70) != "user_defined")) ? ("disabled") : ("")))], 70, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"#tab-testParams\" role=\"tab\" data-toggle=\"tab\">
                                            <span>";
        // line 79
        echo __("Test Params");
        yield "</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link active\" href=\"#tab-logs\" role=\"tab\" data-toggle=\"tab\">
                                            <span>";
        // line 84
        echo __("Logs");
        yield "</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"#tab-dataSet\" role=\"tab\" data-toggle=\"tab\">
                                            <span>";
        // line 89
        echo __("DataSet Data");
        yield "</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"#tab-otherData\" role=\"tab\" data-toggle=\"tab\">
                                            <span>";
        // line 94
        echo __("Other Data");
        yield "</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"#tab-scheduleCriteria\" role=\"tab\" data-toggle=\"tab\">
                                            <span>";
        // line 99
        echo __("Schedule Criteria");
        yield "</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane\" id=\"tab-testParams\">
                                        ";
        // line 105
        yield CoreExtension::callMacro($macros["inline"], "macro_message", [__("You can test passing parameters that would otherwise be set when this Data Connector is scheduled."), "alert alert-info"], 105, $context, $this->getSourceContext());
        yield "

                                        ";
        // line 107
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["dataSetRealtimeTestParams", __("Test Parameters")], 107, $context, $this->getSourceContext());
        yield "
                                    </div>
                                    <div class=\"tab-pane active\" id=\"tab-logs\">
                                        <pre id=\"dataconnector-logs\"></pre>
                                    </div>
                                    <div class=\"tab-pane\" id=\"tab-dataSet\">
                                        <div class=\"table-container\">
                                            <table id=\"dataconnector-main-data\" class=\"table\">
                                                <thead>
                                                ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "getColumn", [], "method", false, false, false, 116));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 117
            yield "                                                    <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "heading", [], "any", false, false, false, 117), "html", null, true);
            yield "</th>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "                                                <th>Unmapped</th>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane\" id=\"tab-otherData\">
                                        <pre id=\"dataconnector-other-data\"></pre>
                                    </div>
                                    <div class=\"tab-pane\" id=\"tab-scheduleCriteria\">
                                        <div class=\"table-container\">
                                            <table id=\"dataconnector-schedule-criteria\" class=\"table\">
                                                <thead>
                                                    <th>";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Metric"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Value"), "html", null, true);
        yield "</th>
                                                    <th>TTL</th>
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
                </div>
            </div>
        </div>
        <div class=\"row\" style=\"display: none;\" id=\"dataconnector-script\"></div>
    </div>
";
        return; yield '';
    }

    // line 155
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        \$(function() {
          const \$script = \$('#dataconnector-script');
          const \$scriptParams = \$('#dataSetRealtimeTestParams');
          const \$mainData = \$('#dataconnector-main-data');
          const \$otherData = \$('#dataconnector-other-data');
          const \$scheduleCriteria = \$('#dataconnector-schedule-criteria');
          const \$logs = \$('#dataconnector-logs');
          let otherData = {};
          let criteria = {};

          // Set up a channel which will broadcast data
          const channel = new BroadcastChannel('xiboDC');

          // Set our script params from local storage if we have them
          \$scriptParams.val(localStorage.getItem('dataSetRealtimeTestParams'));

          // Output the iframe containing the window
          \$script.html('<iframe src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.dataConnector.test", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 174)]), "html", null, true);
        yield "\" />');

          // Window message to receive data and logs.
          window.receiveData = function(type, data) {
            if (type === 'loaded') {
              console.debug('Script loaded');
              \$script.find('iframe')[0].contentWindow.xiboDC.initialise(";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 180), "html", null, true);
        yield ", \$scriptParams.val());
            } else if (type === 'log') {
              \$logs.prepend('[' + moment().format('YY-MM-DD HH:mm:ss') + '] ' + data + '\\n');
            } else if (type === 'set') {
              // Update the table
              // if the dataKey matches my connector's DataSetId, then render out a table
              if (data.dataKey == '";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 186), "html", null, true);
        yield "') {
                // Data is always set as a string
                const events = JSON.parse(data.data);

                if (Array.isArray(events)) {
                  const \$tableBody = \$mainData.find('tbody');
                  \$tableBody.find('tr').remove();
                  \$.each(events, function (rowIndex, row) {
                    // Make a new row
                    let html = '<tr>';
                      ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "getColumn", [], "method", false, false, false, 196));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 197
            yield "                    html += '<td data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "heading", [], "any", false, false, false, 197), "html", null, true);
            yield "\"></td>';
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        yield "                    html += '<td data-id=\"unmatched\"></td></tr>';
                    const \$newRow = \$(html);
                    \$tableBody.append(\$newRow);

                    // Do we have a column for this item
                    \$.each(row, function (colIndex, col) {
                      if (\$newRow.find('td[data-id=' + colIndex).length > 0) {
                        \$newRow.find('td[data-id=' + colIndex).append(row[colIndex]);
                      } else {
                        \$newRow.find('td[data-id=unmatched').append(colIndex + ': ' + row[colIndex] + '<br/>');
                      }
                    });
                  });
                } else {
                  // Treat it as other data.
                  otherData[data.dataKey] = data.data;
                  \$otherData.html(JSON.stringify(otherData, null, 4));
                }
              } else {
                // Grab the existing \"other data\" and see if there is a matching key.
                otherData[data.dataKey] = data.data;
                \$otherData.html(JSON.stringify(otherData, null, 4));
              }

              // Broadcast to interested parties.
              // Use the original data.data (which is a string)
              channel.postMessage({type: 'xiboDC_data', dataKey: data.dataKey, data: data.data});
            } else if (type === 'notify') {
              // Log
              \$logs.prepend('[' + moment().format('YY-MM-DD HH:mm:ss') + '] Notify for ' + data + '\\n');

              channel.postMessage({type: \"xiboDC_notify\", dataKey: data});
            } else if (type === 'criteria') {
              // Schedule criteria, update in the table.
              criteria[data.dataKey] = data.data;
              const \$tableBody = \$scheduleCriteria.find('tbody');
              \$.each(criteria, function (key, value) {
                \$tableBody.append('<tr><td>' + key + '</td><td>' + value.value + '</td><td>' + value.ttl + '</td></tr>');
              });
            }
          }

          window.makeRequest = function (path, {type, headers, data, done, error} = {}) {
            \$.ajax('";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.dataConnector.request", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 242)]), "html", null, true);
        yield "', {
              data: {
                url: path,
                method: type,
                headers: headers,
                body: data
              },
              success: function(data, textStatus, jqXHR) {
                if (typeof(done) == 'function') {
                  done(jqXHR.status, data);
                }
              },
              error: function(jqXHR, textStatus, errorThrown) {
                if (typeof(done) == 'function') {
                  error(jqXHR.status, jqXHR.responseText);
                }
              }
            });
          }

          // Refresh the iframe.
          window.onSubmitCallback = function(xhr, form) {
            \$script.find('iframe')[0].contentWindow.location.reload();
          }

          \$scriptParams.on('change', function() {
            \$script.find('iframe')[0].contentWindow.xiboDC.initialise(";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 268), "html", null, true);
        yield ", \$scriptParams.val());
            localStorage.setItem('dataSetRealtimeTestParams', \$scriptParams.val());
          });
        });
    </script>

    ";
        // line 275
        yield "    <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 275), "html", null, true);
        yield "dist/codeEditor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\" defer></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dataset-data-connector-page.twig";
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
        return array (  422 => 275,  413 => 268,  384 => 242,  339 => 199,  330 => 197,  326 => 196,  313 => 186,  304 => 180,  295 => 174,  273 => 156,  269 => 155,  245 => 135,  241 => 134,  224 => 119,  215 => 117,  211 => 116,  199 => 107,  194 => 105,  185 => 99,  177 => 94,  169 => 89,  161 => 84,  153 => 79,  141 => 70,  131 => 62,  123 => 60,  119 => 59,  111 => 54,  103 => 51,  95 => 46,  83 => 37,  78 => 35,  73 => 33,  70 => 32,  66 => 31,  56 => 27,  51 => 23,  49 => 29,  47 => 25,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-data-connector-page.twig", "/var/www/cms/views/dataset-data-connector-page.twig");
    }
}
