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

/* usergroup-page.twig */
class __TwigTemplate_71f154d08a39ccf7bf158d8fb8dd6cc9 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "usergroup-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "usergroup-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User Groups"), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a new User Group");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.add.form"), "html", null, true);
            yield "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
            echo __("Add User Group");
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
        echo __("User Groups");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"userGroupView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">

                            ";
        // line 47
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["userGroup", ($context["title"] ?? null)], 48, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"userGroups\" class=\"table table-striped\" data-state-preference-name=\"userGroupGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 56
        echo __("User Group");
        yield "</th>
                                <th>";
        // line 57
        echo __("Description");
        yield "</th>
                                <th>";
        // line 58
        echo __("Library Quota");
        yield "</th>
                                <th>";
        // line 59
        echo __("Receive System Notifications?");
        yield "</th>
                                <th>";
        // line 60
        echo __("Receive Display Notifications?");
        yield "</th>
                                <th>";
        // line 61
        echo __("Receive Custom Notifications?");
        yield "</th>
                                <th>";
        // line 62
        echo __("Receive DataSet Notifications?");
        yield "</th>
                                <th>";
        // line 63
        echo __("Receive Layout Notifications?");
        yield "</th>
                                <th>";
        // line 64
        echo __("Receive Library Notifications?");
        yield "</th>
                                <th>";
        // line 65
        echo __("Receive Report Notifications?");
        yield "</th>
                                <th>";
        // line 66
        echo __("Receive Schedule Notifications?");
        yield "</th>
                                <th>";
        // line 67
        echo __("Is shown for Add User?");
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

    // line 81
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        \$(document).ready(function() {
            var table = \$(\"#userGroups\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                responsive: true,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                searchDelay: 3000,
                filter: false,
                order: [[0, 'asc']],
                ajax: {
                    url: \"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search"), "html", null, true);
        yield "\",
                    data: function (d) {
                        \$.extend(d, \$('#userGroups').closest('.XiboGrid').find('.FilterDiv form').serializeObject());
                    }
                },
                \"columns\": [
                    {data: 'group', render: dataTableSpacingPreformatted, responsivePriority: 2 },
                    {data: 'description', visible: false },
                    {
                        name: 'libraryQuota',
                        data: null,
                        render: {'_': 'libraryQuota', 'display': 'libraryQuotaFormatted', 'sort': 'libraryQuota'}
                    },
                    {
                        data: 'isSystemNotification',
                        render: dataTableTickCrossColumn
                    },
                    {
                        data: 'isDisplayNotification',
                        render: dataTableTickCrossColumn
                    },
                    {
                        data: 'isDataSetNotification',
                        render: dataTableTickCrossColumn,
                        visible: false
                    },
                    {
                        data: 'isLayoutNotification',
                        render: dataTableTickCrossColumn,
                        visible: false
                    },
                    {
                        data: 'isLibraryNotification',
                        render: dataTableTickCrossColumn,
                        visible: false
                    },
                    {
                        data: 'isReportNotification',
                        render: dataTableTickCrossColumn,
                        visible: false
                    },
                    {
                        data: 'isScheduleNotification',
                        render: dataTableTickCrossColumn,
                        visible: false
                    },
                    {
                        data: 'isCustomNotification',
                        render: dataTableTickCrossColumn,
                        visible: false
                    },
                    {
                        data: \"isShownForAddUser\",
                        render: dataTableTickCrossColumn
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
            dataTableAddButtons(table, \$('#userGroups_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });

        function handleLibraryQuotaField(libraryQuotaField, libraryQuotaUnitsField) {
            var libraryQuota = libraryQuotaField.val();

            if (libraryQuotaUnitsField.val() === 'mb') {
                libraryQuota = libraryQuota * 1024;
            } else if (libraryQuotaUnitsField.val() === 'gb') {
                libraryQuota = libraryQuota * 1024 * 1024;
            }

            // Set the field
            libraryQuotaField.prop('value', libraryQuota);
        }

        function userGroupFormOpen() {
            // Validate form
            var \$userGroupForm = \$('.UserGroupForm');
            forms.validateForm(
                \$userGroupForm, // form
                \$userGroupForm.parents('.modal-body'), // container
                {
                    submitHandler: function (form) {
                        // Grab and alter the value in the library quota field
                        handleLibraryQuotaField(
                            \$(form).find('input[name=libraryQuota]'),
                            \$(form).find('select[name=libraryQuotaUnits]')
                        );

                        XiboFormSubmit(form);
                    },
                },
            );
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
        return "usergroup-page.twig";
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
        return array (  212 => 97,  193 => 82,  189 => 81,  171 => 67,  167 => 66,  163 => 65,  159 => 64,  155 => 63,  151 => 62,  147 => 61,  143 => 60,  139 => 59,  135 => 58,  131 => 57,  127 => 56,  115 => 48,  110 => 47,  102 => 42,  97 => 40,  94 => 39,  90 => 38,  81 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "usergroup-page.twig", "/var/www/cms/views/usergroup-page.twig");
    }
}
