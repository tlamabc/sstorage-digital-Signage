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

/* template-page.twig */
class __TwigTemplate_9cb40b36157c7544f06f18e739cda9fe extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "template-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "template-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Templates"), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["template.add"], "method", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-success XiboFormButton btns\" title=\"";
            echo __("Add a new Template and jump to the layout editor.");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.add.form"), "html", null, true);
            yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Template");
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
        echo __("Templates");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"templateView\">
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
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["template", ($context["title"] ?? null)], 46, $context, $this->getSourceContext());
        yield "

                            ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 48)) {
            // line 49
            yield "                                ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 50
            yield "                                ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            yield "                                ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 53
            yield "                                ";
            yield CoreExtension::callMacro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 53, $context, $this->getSourceContext());
            yield "
                            ";
        }
        // line 55
        yield "
                            ";
        // line 56
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["folderId"], 56, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 62
        echo __("Search");
        yield "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 65
        echo __("Search in all folders");
        yield "\">";
        echo __("All Folders");
        yield "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 68
        echo __("No Folders matching the search term");
        yield "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 73
        echo __("Open / Close Folder Search options");
        yield "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"templates\" class=\"table table-striped\" data-content-type=\"layout\" data-content-id-name=\"layoutId\" data-state-preference-name=\"templateGrid\" style=\"width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 81
        echo __("Name");
        yield "</th>
                                        <th>";
        // line 82
        echo __("Status");
        yield "</th>
                                        <th>";
        // line 83
        echo __("Owner");
        yield "</th>
                                        <th>";
        // line 84
        echo __("Description");
        yield "</th>
                                        ";
        // line 85
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 85)) {
            yield "<th>";
            echo __("Tags");
            yield "</th>";
        }
        // line 86
        yield "                                        <th>";
        echo __("Orientation");
        yield "</th>
                                        <th>";
        // line 87
        echo __("Thumbnail");
        yield "</th>
                                        <th>";
        // line 88
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
        </div>
    </div>
";
        return; yield '';
    }

    // line 104
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 106
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 106)) {
            // line 107
            yield "            disableFolders();
        ";
        }
        // line 109
        yield "        var table = \$(\"#templates\").DataTable({
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
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.search"), "html", null, true);
        yield "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#templates\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"layout\", responsivePriority: 2},
                {
                    \"name\": \"publishedStatus\",
                    responsivePriority: 2,
                    \"data\": function (data, type) {
                        if (data.publishedDate != null) {
                            var now = moment();
                            var published = moment(data.publishedDate);
                            var differenceMinutes = published.diff(now, 'minutes');
                            var momentDifference = moment(now).to(published);

                            if (differenceMinutes < -5) {
                                return data.publishedStatus.concat(\" - \", translations.publishedStatusFailed);
                            } else {
                                return data.publishedStatus.concat(\" - \", translations.publishedStatusFuture + \" \" + momentDifference);
                            }
                        } else {
                            return data.publishedStatus;
                        }

                    }
                },
                { \"data\": \"owner\", responsivePriority: 3},
                {
                    \"name\": \"description\",
                    \"data\": null,
                    responsivePriority: 3,
                    \"render\": {\"_\": \"description\", \"display\": \"descriptionWithMarkup\", \"sort\": \"description\"}
                },
                ";
        // line 157
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 157)) {
            yield "{
                    \"sortable\": false,
                    \"visible\": false,
                    \"data\": dataTableCreateTags,
                    responsivePriority: 3
                },";
        }
        // line 163
        yield "                { data: 'orientation', responsivePriority: 10, visible: false},
                {
                    responsivePriority: 3,
                    data: 'thumbnail',
                    render: function (data, type, row) {
                        if (type !== 'display') {
                            return row.layoutId;
                        }
                        if (data) {
                            return '<a class=\"img-replace\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data + '\">' +
                                '<img class=\"img-fluid\" src=\"' + data + '\" alt=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thumbnail"), "html", null, true);
        yield "\" />' +
                                '</a>';
                        } else {
                          var addUrl = '";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.thumbnail.add", ["id" => ":id"]), "html", null, true);
        yield "'.replace(':id', row.layoutId);
                          return '<a class=\"img-replace generate-layout-thumbnail\" href=\"' + addUrl + '\">' +
                              '<img class=\"img-fluid\" src=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/thumbs/placeholder.png"], "method", false, false, false, 178), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add Thumbnail"), "html", null, true);
        yield "\" />' +
                              '</a>';
                        }
                        return '';
                    },
                    sortable: false
                },
                {
                    \"data\": \"groupsWithPermissions\",
                    responsivePriority: 4,
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
        table.on('draw', { form: \$(\"#templates\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
        table.on('draw', function(e, settings) {
          \$('#' + e.target.id + ' .generate-layout-thumbnail').on('click', function(e) {
            e.preventDefault();
            var \$anchor = \$(this);
            \$.ajax({
              url: \$anchor.attr('href'),
              method: 'POST',
              success: function() {
                \$anchor.find('img').attr('src', \$anchor.attr('href'));
                \$anchor.removeClass('generate-layout-thumbnail').attr('data-toggle', 'lightbox');
              }
            });
          });
        });
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#templates_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });

        function templateFormOpen() {
            if (\$('#folder-tree-form-modal').length === 0) {
                // compile tree folder modal and append it to Form
                var folderTreeModal = templates['folder-tree'];
                var treeConfig = {\"container\": \"container-folder-form-tree\", \"modal\": \"folder-tree-form-modal\"};
                \$(\"body\").append(folderTreeModal(treeConfig));

                \$(\"#folder-tree-form-modal\").on('hidden.bs.modal', function () {
                    // Fix for 2nd/overlay modal
                    \$('.modal:visible').length && \$(document.body).addClass('modal-open');
                    
                    \$(this).data('bs.modal', null);
                });
            }

            // select current working folder if one is selected in the grid
            if (\$('#container-folder-tree').jstree(\"get_selected\", true)[0] !== undefined) {
                \$('#templateAddForm' + ' #folderId').val(\$('#container-folder-tree').jstree(\"get_selected\", true)[0].id);
            }

            initJsTreeAjax(\$('#folder-tree-form-modal').find('#container-folder-form-tree'), 'templateAddForm', true, 600);

            \$(\"#templateAddForm\").submit(function(e) {
                e.preventDefault();
                var form = \$(this);

                var url = \$(this).data().redirect;

                \$.ajax({
                    type: \$(this).attr(\"method\"),
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),
                    cache: false,
                    dataType:\"json\",
                    success: function(xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success) {
                            // Reload the designer
                            XiboRedirect(url.replace(\":id\", xhr.id));
                        }
                    }
                });
            });
        }

        function layoutPublishFormOpen() {
          // Nothing to do here, but we use the same form on the layout designer and have a callback registered there
        }

        function layoutEditFormSaved() {
          // Nothing to do here.
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
        return "template-page.twig";
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
        return array (  348 => 178,  343 => 176,  337 => 173,  325 => 163,  316 => 157,  278 => 122,  263 => 109,  259 => 107,  257 => 106,  252 => 105,  248 => 104,  228 => 88,  224 => 87,  219 => 86,  213 => 85,  209 => 84,  205 => 83,  201 => 82,  197 => 81,  186 => 73,  178 => 68,  170 => 65,  164 => 62,  155 => 56,  152 => 55,  146 => 53,  140 => 52,  134 => 51,  128 => 50,  122 => 49,  120 => 48,  114 => 46,  109 => 45,  102 => 41,  97 => 39,  94 => 38,  90 => 37,  81 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "template-page.twig", "/var/www/cms/views/template-page.twig");
    }
}
