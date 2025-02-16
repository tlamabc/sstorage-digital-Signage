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

/* applications-page.twig */
class __TwigTemplate_5cd228d756b24e4b2181f7653c7c85c0 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "applications-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "applications-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Applications"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success XiboFormButton\" title=\"";
        // line 30
        echo __("Add an Application");
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.add.form"), "html", null, true);
        yield "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Application");
        yield "</button>
        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        // line 31
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 36
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 38
        echo __("Applications");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 44
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["name", ($context["title"] ?? null)], 45, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"applications\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 53
        echo __("Name");
        yield "</th>
                                <th>";
        // line 54
        echo __("Owner");
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
    <div class=\"widget mt-2\">
        <div class=\"widget-title\">";
        // line 67
        echo __("Connectors");
        yield "</div>
        <div class=\"widget-body\">
            <div id=\"connectors\" class=\"card-deck\">
                ";
        // line 70
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["app_name"], "method", false, false, false, 70) == "Xibo")) {
            // line 71
            yield "                <div class=\"card p3 mt-2\" style=\"min-width: 250px; max-width: 250px;\">
                    <img class=\"card-img-top\" style=\"max-height: 250px\" src=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 72), "html", null, true);
            yield "theme/default/img/connectors/canva_logo.png\" alt=\"Canva\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Canva</h5>
                        <p class=\"card-text\">
                            Publish your designs from Canva to Xibo at the push of a button.
                            <br/>
                            <br/>
                            This connector is configured in Canva using the \"Publish menu\".
                        </p>
                    </div>
                    <div class=\"card-footer\">
                        <a class=\"btn btn-primary\" href=\"https://canva.com\" target=\"_blank\">Visit Canva</a>
                    </div>
                </div>
                ";
        }
        // line 87
        yield "            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 92
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">

        ";
        // line 96
        yield "            var copyToClipboardTrans = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copy to Clipboard"), "js", null, true);
        yield "\";
            var couldNotCopyTrans = \"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Could not copy"), "js", null, true);
        yield "\";
            var copiedTrans = \"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copied!"), "js", null, true);
        yield "\";
        ";
        // line 100
        yield "
        var table;
        \$(document).ready(function() {
            table = \$('#applications').DataTable({
                language: dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                responsive: true,
                stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                \"order\": [[ 0, \"asc\"]],
                ajax: {
                  url: \"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.search"), "html", null, true);
        yield "\",
                  data: function (d) {
                    \$.extend(d, \$('#applications').closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                  }
                },
                \"columns\": [
                    { \"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                    { \"data\": \"owner\" },
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#applications_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });

          // Connectors
          loadConnectors();
        });

        function loadConnectors() {
          var connectorTemplate = Handlebars.compile(\$('#template-connector-cards').html());
          var \$connectorContainer = \$('#connectors');
          \$connectorContainer.find('.connector').remove();
          \$.ajax({
            type: 'GET',
            url: '";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("connector.search"), "html", null, true);
        yield "?isVisible=1&showUninstalled=1',
            cache: false,
            dataType:\"json\",
            success: function(xhr, textStatus, error) {
              \$.each(xhr.data, function(index, element) {
                if (element.isHidden) {
                  return;
                }
                element.configureUrl = '";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("connector.edit.form", ["id" => ":id"]), "html", null, true);
        yield "'.replace(':id', element.connectorId);
                element.proxyUrl = '";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("connector.edit.form.proxy", ["id" => ":id", "method" => ":method"]), "html", null, true);
        yield "'.replace(':id', element.connectorId);
                element.thumbnail = element.thumbnail || 'theme/default/img/thumbs/placeholder.png';
                if (!element.thumbnail.startsWith('http')) {
                  element.thumbnail = '";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 162), "html", null, true);
        yield "' + element.thumbnail;
                }
                element.enabledIcon = (element.isEnabled) ? 'fa-check' : 'fa-times';
                element.classNameLast = element.className.substr(element.className.lastIndexOf('\\\\') + 1);
                \$connectorContainer.append(connectorTemplate(element));
              });

              // Raise an event to say we've been successful.
              \$connectorContainer.trigger('connectors.loaded');

              // Bind to any configure buttons.
              XiboInitialise('#connectors');
            }
          });
        }

        function connectorFormSubmit() {
          XiboFormSubmit(\$('#connectorEditForm'), null, function() {
            loadConnectors();
          });
        }

        function copyFromSecretInput(dialog) {
            // Initialize the tooltip.
            \$('#copy-button').tooltip();

            \$('#copy-button').bind('click', function() {

              var input = \$('#clientSecret');

              // Select the input to copy
              input.focus();
              input.select();

              // Try to copy to clipboard and give feedback
              try {
                var success = document.execCommand('copy');
                if (success) {
                  \$('#copy-button').trigger('copied', [copiedTrans]);
                } else {
                  \$('#copy-button').trigger('copied', [couldNotCopyTrans]);
                }
              } catch (err) {
                \$('#copy-button').trigger('copied', [couldNotCopyTrans]);
              }

              // Unselect the input
              input.blur();
            });

            // Handler for updating the tooltip message.
            \$('#copy-button').bind('copied', function(event, message) {
                const \$self = \$(this);
                \$(this).tooltip('hide')
                    .attr('data-original-title', message)
                    .tooltip('show');

                setTimeout(function() {
                    \$self.tooltip('hide').attr('data-original-title', copyToClipboardTrans);
                }, 1000);
            });

            // Auth Code change
            onAuthCodeChanged(dialog);
            \$(dialog).find('#authCode').on('change', function() {
                onAuthCodeChanged(dialog);
            });
        }

        function onAuthCodeChanged(dialog) {
            var authCode = \$(dialog).find(\"#authCode\").is(\":checked\");
            var \$authCodeTab = \$(dialog).find(\".tabForAuthCode\");

            if (authCode) {
                \$authCodeTab.removeClass(\"d-none\");
            } else {
                \$authCodeTab.addClass(\"d-none\");
            }
        }
    </script>

    ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["connectorJavaScript"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 244
            yield "        ";
            yield from             $this->loadTemplate(($context["js"] . ".twig"), "applications-page.twig", 244)->unwrap()->yield($context);
            // line 245
            yield "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 248
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 249
        yield "    ";
        yield from $this->yieldParentBlock("javaScriptTemplates", $context, $blocks);
        yield "

    ";
        // line 266
        yield "
    <script type=\"text/x-handlebars-template\" id=\"template-connector-cards\">
        <div class=\"connector card p3 mt-2\" style=\"min-width: 250px; max-width: 250px;\"
            data-proxy-url=\"{{proxyUrl}}\"
            data-connector-class-name=\"{{className}}\"
            data-connector-class-name-last=\"{{classNameLast}}\"
            data-connector-id=\"{{ connectorId }}\">
            {{#if thumbnail}}<img class=\"card-img-top\" style=\"max-height: 250px\" src=\"{{ thumbnail }}\" alt=\"{{ title }}\">{{/if}}
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ title }}</h5>
                <p class=\"card-text\">
                {{ description }}
                <br/>
                <br/>
                {{#if isInstalled }}
                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enabled"), "html", null, true);
        // line 269
        yield ": <span class=\"fa {{ enabledIcon }}\"></span>
                {{/if}}
                {{#unless isInstalled }}
                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Installed"), "html", null, true);
        // line 275
        yield ": <span class=\"fa fa-times\"></span>
                {{/unless}}
                </p>
            </div>
            <div class=\"card-footer\">
                <button class=\"btn btn-primary XiboFormButton\" href=\"{{ configureUrl }}\">
                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure"), "html", null, true);
        // line 280
        yield "
                </button>
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
        return "applications-page.twig";
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
        return array (  442 => 280,  433 => 275,  427 => 269,  409 => 266,  403 => 249,  399 => 248,  382 => 245,  379 => 244,  362 => 243,  278 => 162,  272 => 159,  268 => 158,  257 => 150,  220 => 116,  202 => 100,  198 => 98,  194 => 97,  189 => 96,  183 => 93,  179 => 92,  171 => 87,  153 => 72,  150 => 71,  148 => 70,  142 => 67,  126 => 54,  122 => 53,  110 => 45,  105 => 44,  98 => 40,  93 => 38,  90 => 37,  86 => 36,  78 => 31,  70 => 30,  67 => 29,  63 => 28,  54 => 26,  49 => 23,  47 => 24,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "applications-page.twig", "/var/www/cms/views/applications-page.twig");
    }
}
