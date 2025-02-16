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

/* menuboard-product-page.twig */
class __TwigTemplate_55b1a4c25f3adfe2582b12ba4a12080e extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "menuboard-product-page.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("authed.twig", "menuboard-product-page.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Products for "), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardCategory"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("in Menu Board "), "html", null, true);
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
            echo __("Add a new Menu Board Product");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.product.add.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardCategory"] ?? null), "menuCategoryId", [], "any", false, false, false, 9)]), "html", null, true);
            yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Product");
            yield "</button>
            <button class=\"btn btn-info XiboRedirectButton\" href=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.category.view", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardCategory"] ?? null), "menuId", [], "any", false, false, false, 10)]), "html", null, true);
            yield "\"><i class=\"fa fa-columns\" aria-hidden=\"true\"></i> ";
            echo __("View Categories");
            yield "</button>
        ";
        }
        // line 12
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 16
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 18
        echo __("Products for");
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardCategory"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        yield " ";
        echo __("in Menu Board");
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoard"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        yield " </div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-type=\"menuBoardProducts\" data-grid-name=\"menuBoardProductView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 24
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 25
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["menuProductId", ($context["title"] ?? null)], 25, $context, $this->getSourceContext());
        yield "

                            <div class=\"form-group mr-1 mb-1\">
                                <label class=\"control-label mr-1\" title=\"\" for=\"name\" accesskey=\"\">";
        // line 28
        echo __("Name");
        yield "</label>
                                <div class=\"input-group\">
                                    <input class=\"form-control\" name=\"name\" type=\"text\" id=\"name\" value=\"\">
                                    <div class=\"input-group-append input-group-addon\">
                                        <div class=\"input-group-text\">
                                            <input title=\"";
        // line 33
        echo __("Use Regex?");
        yield "\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 39
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["code", ($context["title"] ?? null)], 40, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card\">
                    <div class=\"card-header mb-3\">
                        <ul class=\"nav nav-tabs card-header-tabs\" id=\"menuCategories\">
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 48
            yield "                                <li class=\"nav-item\">
                                    <a class=\"nav-link ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "menuCategoryId", [], "any", false, false, false, 49) == CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardCategory"] ?? null), "menuCategoryId", [], "any", false, false, false, 49))) {
                yield " active ";
            }
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.product.view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "menuCategoryId", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 49), "html", null, true);
            yield "</a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "                        </ul>
                    </div>
                    <table id=\"menuBoardProducts\" class=\"table table-striped responsive nowrap\" data-content-type=\"menuBoardProduct\" data-content-id-name=\"menuProductId\" data-state-preference-name=\"menuBoardProductsGrid\" style=\"width: 100%;\">
                        <thead>
                        <tr>
                            <th>";
        // line 57
        echo __("ID");
        yield "</th>
                            <th>";
        // line 58
        echo __("Name");
        yield "</th>
                            <th>";
        // line 59
        echo __("Description");
        yield "</th>
                            <th>";
        // line 60
        echo __("Price");
        yield "</th>
                            <th>";
        // line 61
        echo __("Media");
        yield "</th>
                            <th>";
        // line 62
        echo __("Display Order");
        yield "</th>
                            <th>";
        // line 63
        echo __("Availability");
        yield "</th>
                            <th>";
        // line 64
        echo __("Allergy Information");
        yield "</th>
                            <th>";
        // line 65
        echo __("Calories");
        yield "</th>
                            <th>";
        // line 66
        echo __("Code");
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

    // line 80
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var table;
        \$(document).ready(function() {
            table = \$(\"#menuBoardProducts\").DataTable({
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
                order: [[5, 'asc']],
                ajax: {
                    url: \"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.product.search", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardCategory"] ?? null), "menuCategoryId", [], "any", false, false, false, 98)]), "html", null, true);
        yield "\",
                    data: function (d) {
                        \$.extend(d, \$(\"#menuBoardProducts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                columns: [
                    {data: 'menuProductId', responsivePriority: 2},
                    {
                        data: 'name',
                        responsivePriority: 2,
                        render: dataTableSpacingPreformatted,
                    },
                    {
                        data: 'description',
                        responsivePriority: 3,
                    },
                    {
                      data: 'price',
                      responsivePriority: 2,
                      render: function (data, type) {
                        if (type !== 'display' || data === null || data === '') {
                          return data;
                        }
                        return new Intl.NumberFormat(undefined, {minimumFractionDigits: 2}).format(data);
                      },
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
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thumbnail"), "html", null, true);
        yield "\" />' +
                              '</a>';
                          } else {
                            return '';
                          }
                        },
                    },
                    {
                        data: 'displayOrder',
                        responsivePriority: 2,
                    },
                    {
                      data: 'availability',
                      responsivePriority: 2,
                      render: function (data, type, row) {
                        if (type !== 'display') {
                          return data;
                        }

                        let icon = '';
                        if (data === 1) {
                          icon = 'fa-check';
                        } else if (data === 0) {
                          icon = 'fa-times';
                        }

                        return '<span class=\"fa ' + icon + '\"></span>';
                      },
                    },
                    {
                        data: 'allergyInfo',
                        responsivePriority: 3,
                    },
                    {
                        data: 'calories',
                        responsivePriority: 2,
                    },
                    {
                        data: 'code',
                        responsivePriority: 2,
                    },
                    {
                        orderable: false,
                        responsivePriority: 1,
                        data: dataTableButtonsColumn,
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#menuBoardProducts_wrapper').find('.col-md-6').eq(1));

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
        return "menuboard-product-page.twig";
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
        return array (  319 => 134,  280 => 98,  259 => 81,  255 => 80,  237 => 66,  233 => 65,  229 => 64,  225 => 63,  221 => 62,  217 => 61,  213 => 60,  209 => 59,  205 => 58,  201 => 57,  194 => 52,  179 => 49,  176 => 48,  172 => 47,  161 => 40,  156 => 39,  147 => 33,  139 => 28,  132 => 25,  127 => 24,  120 => 20,  109 => 18,  106 => 17,  102 => 16,  93 => 12,  86 => 10,  77 => 9,  75 => 8,  72 => 7,  68 => 6,  53 => 4,  48 => 1,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menuboard-product-page.twig", "/var/www/cms/views/menuboard-product-page.twig");
    }
}
