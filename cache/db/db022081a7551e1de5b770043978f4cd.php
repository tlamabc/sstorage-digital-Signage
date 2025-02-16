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

/* displayprofile-page.twig */
class __TwigTemplate_a513ad7cd98582f62033527aba36e9fd extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "displayprofile-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "displayprofile-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Display Setting Profiles"), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displayprofile.add"], "method", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-info XiboFormButton\" title=\"";
            echo __("Add a new Display Settings Profile");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayProfile.add.form"), "html", null, true);
            yield "\"> <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
            echo __("Add Profile");
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
        echo __("Display Setting Profiles");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 41
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
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["displayProfile", ($context["title"] ?? null)], 47, $context, $this->getSourceContext());
        yield "

                            ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["type", "single", ($context["title"] ?? null), "", Twig\Extension\CoreExtension::merge([["typeId" => null, "type" => ""]], ($context["types"] ?? null)), "typeId", "type"], 50, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"displayProfiles\" class=\"table table-striped\" data-state-preference-name=\"displayProfileGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 58
        echo __("Name");
        yield "</th>
                                <th>";
        // line 59
        echo __("Type");
        yield "</th>
                                <th>";
        // line 60
        echo __("Default");
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

    // line 74
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table = \$(\"#displayProfiles\").DataTable({ \"language\": dataTablesLanguage,
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
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayProfile.search"), "html", null, true);
        yield "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#displayProfiles\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted , responsivePriority: 2},
                { \"data\": \"type\" },
                { \"data\": \"isDefault\", \"render\": dataTableTickCrossColumn },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#displayProfiles_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });

        // Custom submit for display profile form
        function displayProfileEditFormSubmit() {
            var \$form = \$(\"#displayProfileForm\");

            // Remove temp fields and enable checkbox after submit
            \$form.submit(function(event) {
                event.preventDefault();

                // Re-enable checkboxes
                \$form.find('input[type=\"checkbox\"]').each(function () {
                    // Enable checkbox
                    \$(this).attr('disabled', false);
                });

                // Remove temp input fields
                \$form.find('input.temp-input').each(function () {
                    \$(this).remove();
                });
            });

            // Replace all checkboxes with hidden input fields
            \$form.find('input[type=\"checkbox\"]').each(function () {
                // Get checkbox values
                var value = \$(this).is(':checked') ? 'on' : 'off';
                var id = \$(this).attr('id');

                // Create hidden input
                \$('<input type=\"hidden\" class=\"temp-input\">')
                    .attr('id', id)
                    .attr('name', id)
                    .val(value)
                    .appendTo(\$(this).parent());

                // Disable checkbox so it won't be submitted
                \$(this).attr('disabled', true);
            });

            // Submit form
            \$form.submit();
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
        return "displayprofile-page.twig";
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
        return array (  185 => 88,  168 => 75,  164 => 74,  146 => 60,  142 => 59,  138 => 58,  126 => 50,  121 => 49,  115 => 47,  110 => 46,  102 => 41,  97 => 39,  94 => 38,  90 => 37,  81 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-page.twig", "/var/www/cms/views/displayprofile-page.twig");
    }
}
