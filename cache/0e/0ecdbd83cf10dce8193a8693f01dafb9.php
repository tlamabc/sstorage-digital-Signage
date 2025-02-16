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

/* playersoftware-page.twig */
class __TwigTemplate_5ea2ac4341818f13acd679d8cc160c6c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "playersoftware-page.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "playersoftware-page.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playersoftware.add"], "method", false, false, false, 29)) {
            // line 30
            yield "            <button class=\"btn btn-success\" href=\"#\" id=\"playerSoftwareUploadForm\" title=\"";
            echo __("Upload a new Player Software file");
            yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Version");
            yield "</button>
        ";
        }
        // line 32
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
        echo __("Player Software");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"playerSoftwareView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 45
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["playerType", "single", ($context["title"] ?? null), "", Twig\Extension\CoreExtension::merge([["type" => null, "typeShow" => null]], ($context["types"] ?? null)), "type", "typeShow"], 46, $context, $this->getSourceContext());
        yield "

                            ";
        // line 48
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Version");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["playerVersion", "single", ($context["title"] ?? null), "", Twig\Extension\CoreExtension::merge([["version" => null, "version" => null]], ($context["versions"] ?? null)), "version", "version"], 49, $context, $this->getSourceContext());
        yield "

                            ";
        // line 51
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["playerCode", ($context["title"] ?? null)], 52, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"playerSoftwareItems\" class=\"table table-striped\" data-state-preference-name=\"playerSoftwareGrid\">
                        <thead>
                        <tr>
                            <th>";
        // line 60
        echo __("Version ID");
        yield "</th>
                            <th>";
        // line 61
        echo __("Player Version Name");
        yield "</th>
                            <th>";
        // line 62
        echo __("Type");
        yield "</th>
                            <th>";
        // line 63
        echo __("Version");
        yield "</th>
                            <th>";
        // line 64
        echo __("Code");
        yield "</th>
                            <th>";
        // line 65
        echo __("File Name");
        yield "</th>
                            <th>";
        // line 66
        echo __("Size");
        yield "</th>
                            <th>";
        // line 67
        echo __("Created At");
        yield "</th>
                            <th>";
        // line 68
        echo __("Modified At");
        yield "</th>
                            <th>";
        // line 69
        echo __("Modified By");
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
        var table;
        \$(document).ready(function() {
            table = \$(\"#playerSoftwareItems\").DataTable({
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
                \"order\": [[2, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.search"), "html", null, true);
        yield "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#playerSoftwareItems\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"versionId\", responsivePriority: 2},
                    {\"data\": \"playerShowVersion\", responsivePriority: 2},
                    {\"data\": \"type\", responsivePriority: 2},
                    {\"data\": \"version\", responsivePriority: 2},
                    {\"data\": \"code\", responsivePriority: 2},
                    {\"data\": \"fileName\", responsivePriority: 4},
                    {
                        \"name\": \"size\",
                        responsivePriority: 3,
                        \"data\": null,
                        \"render\": {\"_\": \"size\", \"display\": \"fileSizeFormatted\", \"sort\": \"size\"}
                    },
                    {\"data\": \"createdAt\", responsivePriority: 6, visible: false},
                    {\"data\": \"modifiedAt\", responsivePriority: 6, visible: false},
                    {\"data\": \"modifiedBy\", responsivePriority: 6, visible: false},
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ],

                createdRow: function (row, data, index) {
                    if (data.version === \"\" || data.version === null || data.code === 0) {
                        \$(row).addClass('table-danger');
                        \$(row).attr('Title', \"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please set Player Software Version"), "html", null, true);
        yield "\");
                    }
                },
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#playerSoftwareItems_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });

        \$(\"#playerSoftwareUploadForm\").click(function(e) {
            e.preventDefault();

            openUploadForm({
                url: \"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.add"), "html", null, true);
        yield "\",
                title: \"";
        // line 150
        echo __("Upload Version");
        yield "\",
                videoImageCovers: false,
                buttons: {
                    main: {
                        label: \"";
        // line 154
        echo __("Done");
        yield "\",
                        className: \"btn-primary btn-bb-main\",
                        callback: function () {
                            table.ajax.reload();
                            XiboDialogClose();
                        }
                    }
                },
                templateOptions: {
                    includeTagsInput: false,
                    multi: false,
                    trans: {
                        addFiles: \"";
        // line 166
        echo __("Add files");
        yield "\",
                        startUpload: \"";
        // line 167
        echo __("Start upload");
        yield "\",
                        cancelUpload: \"";
        // line 168
        echo __("Cancel upload");
        yield "\",
                        processing: \"";
        // line 169
        echo __("Processing...");
        yield "\"
                    },
                    upload: {
                        maxSize: ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 172), "html", null, true);
        yield ",
                        maxSizeMessage: \"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 173), "html", null, true);
        yield "\",
                        validExt: \"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validExt"] ?? null), "html", null, true);
        yield "\"
                    },
                    updateInAllChecked: false,
                    deleteOldRevisionsChecked: false,
                    folderSelector: false
                }
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
        return "playersoftware-page.twig";
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
        return array (  321 => 174,  317 => 173,  313 => 172,  307 => 169,  303 => 168,  299 => 167,  295 => 166,  280 => 154,  273 => 150,  269 => 149,  248 => 131,  214 => 100,  194 => 84,  190 => 83,  172 => 69,  168 => 68,  164 => 67,  160 => 66,  156 => 65,  152 => 64,  148 => 63,  144 => 62,  140 => 61,  136 => 60,  124 => 52,  119 => 51,  113 => 49,  108 => 48,  102 => 46,  97 => 45,  90 => 41,  85 => 39,  82 => 38,  78 => 37,  69 => 32,  61 => 30,  59 => 29,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "playersoftware-page.twig", "/var/www/cms/views/playersoftware-page.twig");
    }
}
