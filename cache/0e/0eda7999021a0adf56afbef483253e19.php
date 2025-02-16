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

/* daypart-page.twig */
class __TwigTemplate_7c63b72871ed5edcda9048428bf83ea1 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "daypart-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "daypart-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dayparting"), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["daypart.add"], "method", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-success XiboFormButton\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.add.form"), "html", null, true);
            yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Daypart");
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
        echo __("Dayparting");
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
        // line 45
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["name", ($context["title"] ?? null)], 46, $context, $this->getSourceContext());
        yield "

                            ";
        // line 48
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Retired");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                            ";
        $context["option1"] = __("Yes");
        // line 50
        yield "                            ";
        $context["option2"] = __("No");
        // line 51
        yield "                            ";
        $context["values"] = [["id" => 1, "value" => ($context["option1"] ?? null)], ["id" => 0, "value" => ($context["option2"] ?? null)]];
        // line 52
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["isRetired", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value"], 52, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"dayparts\" class=\"table table-striped\" data-state-preference-name=\"daypartGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 60
        echo __("Name");
        yield "</th>
                                <th>";
        // line 61
        echo __("Description");
        yield "</th>
                                <th>";
        // line 62
        echo __("Start Time");
        yield "</th>
                                <th>";
        // line 63
        echo __("End Time");
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

    // line 77
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">

        var table = \$(\"#dayparts\").DataTable({
            \"language\": dataTablesLanguage,
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
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.search"), "html", null, true);
        yield "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#dayparts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted , responsivePriority: 2},
                { \"data\": \"description\" },
                { \"data\": \"startTime\" },
                { \"data\": \"endTime\" },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#dayparts_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });

        function dayPartFormOpen(dialog) {
            // Render a set of exceptions
            \$exceptions = \$(dialog).find(\"#dayPartExceptions\");

            // Days of the week translations
            var daysOfTheWeek = [
                { day: \"Mon\", title: \"";
        // line 125
        echo __("Monday");
        yield "\" },
                { day: \"Tue\", title: \"";
        // line 126
        echo __("Tuesday");
        yield "\" },
                { day: \"Wed\", title: \"";
        // line 127
        echo __("Wednesday");
        yield "\" },
                { day: \"Thu\", title: \"";
        // line 128
        echo __("Thursday");
        yield "\" },
                { day: \"Fri\", title: \"";
        // line 129
        echo __("Friday");
        yield "\" },
                { day: \"Sat\", title: \"";
        // line 130
        echo __("Saturday");
        yield "\" },
                { day: \"Sun\", title: \"";
        // line 131
        echo __("Sunday");
        yield "\" }
            ];

            // Compile the handlebars template
            var exceptionsTemplate = Handlebars.compile(\$(\"#dayPartExceptionsTemplate\").html());

            if (dialog.data().extra.exceptions.length == 0) {
                // Contexts for template
                var context = {
                    daysOfWeek: daysOfTheWeek,
                    buttonGlyph: \"fa-plus\",
                    exceptionDay: \"\",
                    exceptionStart: \"\",
                    exceptionEnd: \"\",
                    fieldId: 0
                };

                // Append
                \$exceptions.append(exceptionsTemplate(context));
                
                XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
            } else {
                // For each of the existing exceptions, create form components
                var i = 0;
                \$.each(dialog.data().extra.exceptions, function (index, field) {
                    i++;
                    // call the template
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\"),
                        exceptionDay: field.day,
                        exceptionStart: field.start,
                        exceptionEnd: field.end,
                        fieldId: i
                    };

                    \$exceptions.append(exceptionsTemplate(context));
                    
                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                });
            }

            // Nabble the resulting buttons
            \$exceptions.on(\"click\", \"button\", function (e) {
                e.preventDefault();

                // find the gylph
                if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: \"fa-minus\",
                        exceptionDay: \"\",
                        exceptionStart: \"\",
                        exceptionEnd: \"\",
                        fieldId: \$exceptions.find('.form-group').length + 1
                    };

                    \$exceptions.append(exceptionsTemplate(context));

                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                } else {
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            });

            // check if we already have this day in exceptions array, if so remove the row with a message.
            \$exceptions.on(\"change\", \"select\", function() {
                var selectedDays = [];
                \$('select').not('#' + \$(this).attr('id')).each(function(i) {
                    selectedDays.push(\$(this).val());
                });

                if (selectedDays.includes(this.value)) {
                    toastr.error(translations.dayPartExceptionErrorMessage);
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            })
        }

        // Equals helper for the templates below
        Handlebars.registerHelper('eq', function(v1, v2, opts) {
            if (v1 === v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });
    </script>
    ";
        // line 233
        yield "
    <script type=\"text/x-handlebars-template\" id=\"dayPartExceptionsTemplate\">
        <div class=\"form-group row\">
            <div class=\"col-3\">
                <select class=\"form-control\" name=\"exceptionDays[]\" id=\"exceptionDays_{{fieldId}}\">
                    <option value=\"\"></option>
                    {{#each daysOfWeek}}
                    <option value=\"{{ day }}\" {{#eq day ../exceptionDay}}selected{{/eq}}>{{ title }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-3\">
    ";
        yield "
                ";
        // line 234
        yield CoreExtension::callMacro($macros["inline"], "macro_time", ["exceptionStartTimes[]", "", "{{ exceptionStart }}"], 234, $context, $this->getSourceContext());
        yield "
    ";
        // line 238
        yield "
            </div>
            <div class=\"col-3\">
    ";
        yield "
                ";
        // line 239
        yield CoreExtension::callMacro($macros["inline"], "macro_time", ["exceptionEndTimes[]", "", "{{ exceptionEnd }}"], 239, $context, $this->getSourceContext());
        yield "
    ";
        // line 247
        yield "
            </div>
            <div class=\"col-1\">
                <button class=\"btn btn-white\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
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
        return "daypart-page.twig";
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
        return array (  380 => 247,  376 => 239,  369 => 238,  365 => 234,  349 => 233,  256 => 131,  252 => 130,  248 => 129,  244 => 128,  240 => 127,  236 => 126,  232 => 125,  197 => 93,  178 => 78,  174 => 77,  156 => 63,  152 => 62,  148 => 61,  144 => 60,  132 => 52,  129 => 51,  126 => 50,  123 => 49,  118 => 48,  112 => 46,  107 => 45,  100 => 41,  95 => 39,  92 => 38,  88 => 37,  79 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "daypart-page.twig", "/var/www/cms/views/daypart-page.twig");
    }
}
