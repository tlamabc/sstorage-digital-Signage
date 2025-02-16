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

/* menuboard-category-page.twig */
class __TwigTemplate_c2d8e932e7d59397e249f6029368dd74 extends Template
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
        // line 1
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "menuboard-category-page.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("authed.twig", "menuboard-category-page.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Categories for "), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoard"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 6
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["menuBoard.modify"], "method", false, false, false, 8)) {
            // line 9
            yield "            <button class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a new Menu Board Category");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.category.add.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoard"] ?? null), "menuId", [], "any", false, false, false, 9)]), "html", null, true);
            yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Category");
            yield "</button>
        ";
        }
        // line 11
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 15
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 17
        echo __("Menu Board Categories for");
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoard"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-type=\"menuBoardCategories\" data-grid-name=\"menuBoardCategoryView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 23
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["menuCategoryId", ($context["title"] ?? null)], 24, $context, $this->getSourceContext());
        yield "

                            <div class=\"form-group mr-1 mb-1\">
                                <label class=\"control-label mr-1\" title=\"\" for=\"name\" accesskey=\"\">";
        // line 27
        echo __("Name");
        yield "</label>
                                <div class=\"input-group\">
                                    <input class=\"form-control\" name=\"name\" type=\"text\" id=\"name\" value=\"\">
                                    <div class=\"input-group-append input-group-addon\">
                                        <div class=\"input-group-text\">
                                            <input title=\"";
        // line 32
        echo __("Use Regex?");
        yield "\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 38
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["code", ($context["title"] ?? null)], 39, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"menuBoardCategories\" class=\"table table-striped responsive nowrap\" data-content-type=\"menuBoardCategory\" data-content-id-name=\"menuCategoryId\" data-state-preference-name=\"menuBoardCategoriesGrid\" style=\"width: 100%;\">
                        <thead>
                        <tr>
                            <th>";
        // line 47
        echo __("ID");
        yield "</th>
                            <th>";
        // line 48
        echo __("Name");
        yield "</th>
                            <th>";
        // line 49
        echo __("Media");
        yield "</th>
                            <th>";
        // line 50
        echo __("Code");
        yield "</th>
                            <th>";
        // line 51
        echo __("Description");
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

    // line 65
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table;
        \$(document).ready(function() {
            table = \$(\"#menuBoardCategories\").DataTable({
                \"language\": dataTablesLanguage,
                \"lengthMenu\": [10, 25, 50, 100, 250, 500],
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                responsive: true,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                dataType: 'json',
                \"order\": [[1, \"asc\"]],
                ajax: {
                    url: \"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.category.search", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoard"] ?? null), "menuId", [], "any", false, false, false, 83)]), "html", null, true);
        yield "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#menuBoardCategories\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"menuCategoryId\", responsivePriority: 2},
                    {
                        \"data\": \"name\",
                        responsivePriority: 2,
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        responsivePriority: 3,
                        data: 'mediaId',
                        render: function (data, type, row) {
                          if (type !== 'display' || data === null || data === '') {
                            return data;
                          }

                          if (row.thumbnail && row.thumbnail !== '') {
                            return '<a class=\"img-replace\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + row.thumbnail + '\">' +
                              '<img class=\"img-fluid\" src=\"' + row.thumbnail.replace('download', 'thumbnail') + '\" alt=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thumbnail"), "html", null, true);
        yield "\" />' +
                              '</a>';
                          } else {
                            return '';
                          }
                        }
                    },
                    {
                        \"data\": \"code\", responsivePriority: 3
                    },
                    {
                      data: 'description',
                      responsivePriority: 3,
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
            dataTableAddButtons(table, \$('#menuBoardCategories_wrapper').find('.col-md-6').eq(1));

            \$(\"#refreshGrid\").click(function () {
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
        return "menuboard-category-page.twig";
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
        return array (  243 => 105,  218 => 83,  197 => 66,  193 => 65,  175 => 51,  171 => 50,  167 => 49,  163 => 48,  159 => 47,  147 => 39,  142 => 38,  133 => 32,  125 => 27,  118 => 24,  113 => 23,  106 => 19,  99 => 17,  96 => 16,  92 => 15,  83 => 11,  73 => 9,  71 => 8,  68 => 7,  64 => 6,  53 => 4,  48 => 1,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menuboard-category-page.twig", "/var/www/cms/views/menuboard-category-page.twig");
    }
}
