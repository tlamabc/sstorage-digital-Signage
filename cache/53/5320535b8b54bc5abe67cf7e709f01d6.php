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

/* tag-page.twig */
class __TwigTemplate_26be459c665f7fa913b1ba9ae52b5c94 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "tag-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "tag-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tags"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success XiboFormButton btns\" title=\"";
        // line 30
        echo __("Add a new Tag");
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.add.form"), "html", null, true);
        yield "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>  ";
        echo __("Add Tag");
        yield "</button>
        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        // line 31
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
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
        echo __("Tags");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"tagView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 43
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["tagId", ($context["title"] ?? null)], 44, $context, $this->getSourceContext());
        yield "

                            ";
        // line 46
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["tag", ($context["title"] ?? null)], 47, $context, $this->getSourceContext());
        yield "

                            ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show System tags?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_checkbox", ["isSystem", ($context["title"] ?? null), 0], 50, $context, $this->getSourceContext());
        yield "

                            ";
        // line 52
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show only tags with values?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_checkbox", ["haveOptions", ($context["title"] ?? null), 0], 53, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"tags\" class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 61
        echo __("ID");
        yield "</th>
                            <th>";
        // line 62
        echo __("Name");
        yield "</th>
                            <th>";
        // line 63
        echo __("isRequired");
        yield "</th>
                            <th>";
        // line 64
        echo __("Values");
        yield "</th>
                            <th></th>
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

    // line 78
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table = \$(\"#tags\").DataTable({
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
            \"order\": [[ 1, \"desc\"]],
            ajax: {
                \"url\": \"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
        yield "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#tags\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"tagId\", responsivePriority: 2 },
                { \"data\": \"tag\", responsivePriority: 2 },
                {
                    \"data\": \"isRequired\",
                    responsivePriority: 3,
                    \"render\": function (data, type, row) {
                        if (type != \"display\") {
                            return data;
                        }

                        var icon = \"\";
                        if (data == 1)
                            icon = \"fa-check\";
                        else if (data == 0)
                            icon = \"fa-times\";

                        return \"<span class='fa \" + icon  + \"'></span>\";
                    }
                },
                {
                    \"data\": \"options\",
                    responsivePriority: 3,
                    \"render\": function (data, type, row) {

                        if (type != \"display\") {
                            return data;
                        }

                        return JSON.parse(data);
                    }
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
        dataTableAddButtons(table, \$('#tags_wrapper').find('.dataTables_buttons'), false);

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });

        ///
        /// Tag Usage Form
        ///
        function usageFormOpen(dialog) {
          const \$tagUsageTable = \$(\"#tagUsageTable\");
          var usageTable = \$tagUsageTable.DataTable({
            \"language\": dataTablesLanguage,
            dom: dataTablesTemplate,
            serverSide: true,
            stateSave: true, stateDuration: 0,
            filter: false,
            searchDelay: 3000,
            responsive: true,
            \"order\": [[1, \"asc\"]],
            ajax: {
              \"url\": \"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.usage", ["id" => ":id"]), "html", null, true);
        yield "\".replace(\":id\", \$tagUsageTable.data().tagId),
              \"data\": function(data) {
                return data;
              }
            },
            \"columns\": [
              { \"data\": \"entityId\"},
              { \"data\": \"type\"},
              { \"data\": \"name\" },
              { \"data\": \"value\" }
            ]
          });

          usageTable.on('draw', dataTableDraw);
          usageTable.on('processing.dt', dataTableProcessing);
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
        return "tag-page.twig";
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
        return array (  277 => 161,  206 => 93,  188 => 79,  184 => 78,  166 => 64,  162 => 63,  158 => 62,  154 => 61,  142 => 53,  137 => 52,  131 => 50,  126 => 49,  120 => 47,  115 => 46,  109 => 44,  104 => 43,  97 => 39,  92 => 37,  89 => 36,  85 => 35,  77 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "tag-page.twig", "/var/www/cms/views/tag-page.twig");
    }
}
