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

/* user-page.twig */
class __TwigTemplate_ee28a865a6852b78edccdc82ddc0a646 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "user-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "user-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Users"), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 30) || (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isGroupAdmin", [], "method", false, false, false, 30) && CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["users.add"], "method", false, false, false, 30)))) {
            // line 31
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["isAlwaysUseManualAddUserForm", 0], "method", false, false, false, 31)) {
                // line 32
                yield "                ";
                $context["addUserFormUrl"] = $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.add.form");
                // line 33
                yield "            ";
            } else {
                // line 34
                yield "                ";
                $context["addUserFormUrl"] = $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.onboarding.form");
                // line 35
                yield "            ";
            }
            // line 36
            yield "            <button id=\"user-add-button\" class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a new User");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["addUserFormUrl"] ?? null), "html", null, true);
            yield "\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> ";
            echo __("Add User");
            yield "</button>
        ";
        }
        // line 38
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 42
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 44
        echo __("Users");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"usersView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">

                            ";
        // line 51
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Username");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["userName", ($context["title"] ?? null)], 52, $context, $this->getSourceContext());
        yield "

                            ";
        // line 54
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("User Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["userTypeId", "single", ($context["title"] ?? null), "", Twig\Extension\CoreExtension::merge([["userTypeId" => null, "userType" => ""]], ($context["userTypes"] ?? null)), "userTypeId", "userType"], 55, $context, $this->getSourceContext());
        yield "

                            ";
        // line 57
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Retired");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                            ";
        $context["values"] = [["id" => 1, "value" => "Yes"], ["id" => 0, "value" => "No"]];
        // line 59
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["retired", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value"], 59, $context, $this->getSourceContext());
        yield "

                            ";
        // line 61
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("First Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["firstName", ($context["title"] ?? null)], 62, $context, $this->getSourceContext());
        yield "

                            ";
        // line 64
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Last Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["lastName", ($context["title"] ?? null)], 65, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"users\" class=\"table table-striped\" data-state-preference-name=\"userGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 73
        echo __("Username");
        yield "</th>
                                <th>";
        // line 74
        echo __("Homepage");
        yield "</th>
                                <th>";
        // line 75
        echo __("Home folder");
        yield "</th>
                                <th>";
        // line 76
        echo __("Email");
        yield "</th>
                                <th>";
        // line 77
        echo __("Library Quota");
        yield "</th>
                                <th>";
        // line 78
        echo __("Last Login");
        yield "</th>
                                <th>";
        // line 79
        echo __("Logged In?");
        yield "</th>
                                <th>";
        // line 80
        echo __("Retired?");
        yield "</th>
                                <th>";
        // line 81
        echo __("Two Factor");
        yield "</th>
                                <th>";
        // line 82
        echo __("First Name");
        yield "</th>
                                <th>";
        // line 83
        echo __("Last Name");
        yield "</th>
                                <th>";
        // line 84
        echo __("Phone");
        yield "</th>
                                <th>";
        // line 85
        echo __("Ref 1");
        yield "</th>
                                <th>";
        // line 86
        echo __("Ref 2");
        yield "</th>
                                <th>";
        // line 87
        echo __("Ref 3");
        yield "</th>
                                <th>";
        // line 88
        echo __("Ref 4");
        yield "</th>
                                <th>";
        // line 89
        echo __("Ref 5");
        yield "</th>
                                <th class=\"rowMenu\">";
        // line 90
        echo __("Row Menu");
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

    // line 103
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">

        \$(document).ready(function() {
            var table = \$(\"#users\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                responsive: true,
                stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                searchDelay: 3000,
                \"order\": [[0, \"asc\"]],
                \"filter\": false,
                ajax: {
                    url: \"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search"), "html", null, true);
        yield "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#users\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"userName\", responsivePriority: 2},
                    {
                        \"data\": \"homePage\",
                        \"sortable\": false,
                        responsivePriority: 3
                    },
                    {
                        data: 'homeFolder',
                        responsivePriority: 4
                    },
                    {\"data\": \"email\", responsivePriority: 3},
                    {
                        \"name\": \"libraryQuota\",
                         responsivePriority: 3,
                        \"data\": null,
                        \"render\": {\"_\": \"libraryQuota\", \"display\": \"libraryQuotaFormatted\", \"sort\": \"libraryQuota\"}
                    },
                    {\"data\": \"lastAccessed\", \"visible\": false, responsivePriority: 4},
                    {
                        \"data\": \"loggedIn\",
                        responsivePriority: 3,
                        \"render\": dataTableTickCrossColumn,
                        \"visible\": false,
                        \"sortable\": false
                    },
                    {
                        \"data\": \"retired\",
                         responsivePriority: 3,
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        \"data\": \"twoFactorTypeId\",
                         responsivePriority: 5,
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-envelope\";
                            else if (data == 2)
                                icon = \"fa-google\";
                            else
                                icon = \"fa-times\";

                            return '<span class=\"fa ' + icon + '\" title=\"' + (row.twoFactorDescription) + '\"></span>';
                        }
                    },
                    {\"data\": \"firstName\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"lastName\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"phone\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"ref1\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"ref2\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"ref3\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"ref4\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"ref5\", \"visible\": false, responsivePriority: 5},
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing)
            dataTableAddButtons(table, \$('#users_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });

        function userFormOpen(dialog) {
            // Make a select2 from the home page select
            var \$userForm = \$(dialog).find(\"form.UserForm\");
            var \$groupId = \$(dialog).find(\"select[name=groupId]\");
            var \$userTypeId = \$(dialog).find(\"select[name=userTypeId]\");
            var \$select = \$(dialog).find(\".homepage-select\");
            \$select.select2({
                minimumResultsForSearch: Infinity,
                ajax: {
                    url: \$select.data(\"searchUrl\"),
                    dataType: \"json\",
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            userId: \$userForm.data().userId,
                            groupId: \$groupId.val(),
                            userTypeId: \$userTypeId.val(),
                        };
                    },
                    processResults: function (data) {
                        var results = [];
                        \$.each(data.data, function(index, el) {
                            results.push({
                                \"id\": el.homepage,
                                \"text\": el.title,
                                \"content\": el.description
                            });
                        });
                        return {
                            results: results
                        };
                    }
                },
                templateResult: function(state) {
                    if (!state.content)
                        return state.text;

                    return \$(\"<span>\" + state.content + \"</span>\");
                }
            });

            initFolderPanel(dialog, true);

            // Validate form
            var \$userForm = \$('.UserForm');
            forms.validateForm(
                \$userForm, // form
                \$userForm.parents('.modal-body'), // container
                {
                    submitHandler: function (form) {
                        // Grab and alter the value in the library quota field
                        var libraryQuotaField = \$(form).find('input[name=libraryQuota]');
                        var libraryQuotaUnitsField = \$(form).find('select[name=libraryQuotaUnits]');
                        var libraryQuota = libraryQuotaField.val();

                        if (libraryQuotaUnitsField.val() === 'mb') {
                            libraryQuota = libraryQuota * 1024;
                        } else if (libraryQuotaUnitsField.val() === 'gb') {
                            libraryQuota = libraryQuota * 1024 * 1024;
                        }

                        // Set the field
                        libraryQuotaField.prop('value', libraryQuota);

                        XiboFormSubmit(form);
                    },
                },
            );
        }

        /**
         * Callback when the onboarding form is opened.
         */
        function onboardingFormOpen(dialog) {
            \$(dialog).find('[data-toggle=\"popover\"]').popover();

            // Init the folder panel
            ";
        // line 279
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 279)) {
            // line 280
            yield "            initFolderPanel(dialog, false, true);
            ";
        }
        // line 282
        yield "
            var navListItems = \$(dialog).find('div.setup-panel div a'),
                allWells = \$(dialog).find('.setup-content'),
                stepWizard = \$(dialog).find('.stepwizard');

            navListItems.click(function (e) {
                e.preventDefault();
                var \$target = \$(\$(this).attr('href')),
                    \$item = \$(this);

                if (!\$item.attr('disabled')) {
                    // Set all step links to inactive
                    navListItems
                        .removeClass('btn-success')
                        .addClass('btn-default');

                    // Activate this specific one
                    \$item.addClass('btn-success');

                    // Hide all the panels and show this specific one
                    allWells.hide();
                    \$target.show();
                    \$target.find('input:eq(0)').focus();

                    // Set the active panel on the links
                    stepWizard.data(\"active\", \$target.prop(\"id\"))

                    // Is the next action to finish?
                    if (\$target.data(\"next\") === \"finished\") {
                        \$(dialog).find(\"#onboarding-steper-next-button\").html(\"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
        yield "\");
                    } else {
                        \$(dialog).find(\"#onboarding-steper-next-button\").html(\"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next"), "html", null, true);
        yield "\")
                    }
                }
            });

            // Add some buttons.
            \$(dialog).find(\".modal-footer\")
                .append(\$('<a class=\"btn btn-default\">').html(\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\")
                    .click(function(e) {
                        e.preventDefault();
                        XiboDialogClose();
                    }))
                .append(\$('<a id=\"onboarding-steper-next-button\" class=\"btn\">').html(\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next"), "html", null, true);
        yield "\")
                    .addClass(\"btn-primary\")
                    .click(function(e) {
                        e.preventDefault();
                        var steps = \$(dialog).find(\".stepwizard\"),
                            curStep = \$(dialog).find(\"#\" + steps.data(\"active\")),
                            curInputs = curStep.find(\"input[type='text'],input[type='url']\"),
                            isValid = true;

                        // What is the next step?
                        if (curStep.data(\"next\") === \"finished\") {
                            // Keep the form open
                            var \$form = \$(dialog).find(\"#userOnboardingForm\");
                            \$form.data(\"apply\", true);
                            // Submit the form thereby creating the user
                            XiboFormSubmit(\$form, e, function(xhr) {
                                // Callback
                                if (xhr.success && xhr.id) {
                                    ";
        // line 343
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 343)) {
            // line 344
            yield "                                    // Submit the folder ownerships
                                    var selected = \$(dialog).find(\"#container-form-folder-tree\").jstree(\"get_selected\");

                                    // jsTree selects the root folder if all child folders are selected, we need to
                                    // remove that.
                                    var rootIndex = selected.indexOf('1');
                                    if (rootIndex > -1) {
                                        selected.splice(rootIndex, 1);
                                    }

                                    // View/edit for our group
                                    var groupIds = {};
                                    groupIds[xhr.data.groupId] = {
                                        \"view\": 1,
                                        \"edit\": 1
                                    };
                                    \$.ajax(permissionsUrl.replace(\":entity\", \"Folder\"), {
                                        \"method\": \"POST\",
                                        \"data\": {
                                            \"ids\": selected.join(\",\"),
                                            \"groupIds\": groupIds
                                        },
                                        \"error\": function() {
                                            toastr.error(\"Problem saving folder sharing, please check the User created.\");
                                        }
                                    });
                                    ";
        }
        // line 371
        yield "
                                    XiboDialogClose();
                                }
                            });
                        } else if (curStep.data(\"next\") === \"onboarding-step-2\" && \$(\"input[name='groupId']:checked\").val() === \"manual\") {
                            // Load the user add form.
                            XiboDialogClose();
                            XiboFormRender(\"";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.add.form"), "html", null, true);
        yield "\");
                        } else {
                            var nextStepWizard = steps.find(\"a[href='#\" + curStep.data(\"next\") + \"']\");

                            \$(dialog).find(\".form-group\").removeClass(\"has-error\");
                            for (var i = 0; i < curInputs.length; i++) {
                                if (!curInputs[i].validity.valid) {
                                    isValid = false;
                                    \$(curInputs[i]).closest(\".form-group\").addClass(\"has-error\");
                                }
                            }

                            // Set the defaults.
                            if (curStep.data(\"next\") === \"onboarding-step-2\") {
                                var \$userGroupSelected = \$(\"input[name='groupId']:checked\");
                                \$(dialog).find(\"input[name=homePageId]\").val(\$userGroupSelected.data(\"defaultHomepageId\"));
                            }

                            if (isValid) {
                                nextStepWizard.removeAttr('disabled').trigger('click');
                            }
                        }
                    }));
        }

        function userHomeFolderFormOpen(dialog) {
            initFolderPanel(dialog, true);
        }

        function userHomeFolderMultiselectFormOpen(dialog) {
            var \$input = \$('<div id=\"container-form-folder-tree\" class=\"card card-body bg-light\"></div>');
            var \$helpText = \$('<span class=\"help-block\">";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set a home folder to use as the default folder for new content."), "html", null, true);
        yield "</span>');

            \$(dialog).find('.modal-body').append(\$input);
            \$(dialog).find('.modal-body').append(\$helpText);

            initFolderPanel(dialog, true);
        }

        function initFolderPanel(dialog, isHomeOnSelect = false, isHomeContext = false) {
            var plugins = [];

            if (!isHomeOnSelect) {
                plugins.push('checkbox');
            }

            initJsTreeAjax(
                '#container-form-folder-tree',
                'user-add_edit-form',
                true,
                600,
                function(tree, \$container) {
                    if (!isHomeOnSelect) {
                        tree.disable_checkbox(1);
                        tree.disable_node(1);
                    }
                    \$container.jstree('open_all');
                },
                function(data) {
                    if (isHomeOnSelect && data.action === 'select_node') {
                        \$(dialog).find('input[name=homeFolderId]').val(data.node.id);

                        // In case we're in a multi-select.
                        dialog.data().commitData = {homeFolderId: data.node.id};
                    }
                },
                function(\$node, items) {
                    if (isHomeContext) {
                        items['home'] = {
                            separator_before: false,
                            separator_after: false,
                            label: translations.folderTreeSetAsHome,
                            action: function () {
                                \$(dialog).find('input[name=homeFolderId]').val(\$node.id);
                            }
                        }
                    }
                    return items;
                },
                plugins,
                \$(dialog).find('input[name=homeFolderId]').val()
            );

            \$('.folder-tree-buttons').on('click', 'button', function(ev) {
                const jsTree = \$(dialog).find('#container-form-folder-tree').jstree(true);
                if (\$(ev.target).attr('id') === 'selectAllBtn') {
                    jsTree.select_all();
                } else if (\$(ev.target).attr('id') === 'selectNoneBtn') {
                    jsTree.deselect_all();
                }
            });
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
        return "user-page.twig";
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
        return array (  615 => 409,  581 => 378,  572 => 371,  543 => 344,  541 => 343,  520 => 325,  512 => 320,  502 => 313,  497 => 311,  466 => 282,  462 => 280,  460 => 279,  298 => 120,  278 => 104,  274 => 103,  257 => 90,  253 => 89,  249 => 88,  245 => 87,  241 => 86,  237 => 85,  233 => 84,  229 => 83,  225 => 82,  221 => 81,  217 => 80,  213 => 79,  209 => 78,  205 => 77,  201 => 76,  197 => 75,  193 => 74,  189 => 73,  177 => 65,  172 => 64,  166 => 62,  161 => 61,  155 => 59,  152 => 58,  147 => 57,  141 => 55,  136 => 54,  130 => 52,  125 => 51,  117 => 46,  112 => 44,  109 => 43,  105 => 42,  96 => 38,  86 => 36,  83 => 35,  80 => 34,  77 => 33,  74 => 32,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-page.twig", "/var/www/cms/views/user-page.twig");
    }
}
