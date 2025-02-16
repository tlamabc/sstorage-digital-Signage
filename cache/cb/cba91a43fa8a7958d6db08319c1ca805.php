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

/* fonts-page.twig */
class __TwigTemplate_376f2a05316ef93005686ae5e664a05b extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "fonts-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "fonts-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Fonts"), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["font.add"], "method", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-success\" href=\"#\" id=\"fontUploadForm\" title=\"";
            echo __("Add a new Font");
            yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Upload Font");
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
        echo __("Font");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"fontView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 46
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["id", ($context["title"] ?? null)], 47, $context, $this->getSourceContext());
        yield "

                            ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["name", ($context["title"] ?? null)], 50, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"fonts\" class=\"table table-striped\" data-state-preference-name=\"fontGrid\">
                        <thead>
                        <tr>
                            <th>";
        // line 58
        echo __("ID");
        yield "</th>
                            <th>";
        // line 59
        echo __("name");
        yield "</th>
                            <th>";
        // line 60
        echo __("File Name");
        yield "</th>
                            <th>";
        // line 61
        echo __("Created");
        yield "</th>
                            <th>";
        // line 62
        echo __("Modified");
        yield "</th>
                            <th>";
        // line 63
        echo __("Modified By");
        yield "</th>
                            <th>";
        // line 64
        echo __("Size");
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

    // line 78
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
      var fontsTable;
      \$(document).ready(function() {
        fontsTable = \$(\"#fonts\").DataTable({
          \"language\": dataTablesLanguage,
          dom: dataTablesTemplate,
          serverSide: true,
          stateSave: true,
          responsive: true,
          stateDuration: 0,
          stateLoadCallback: dataTableStateLoadCallback,
          stateSaveCallback: dataTableStateSaveCallback,
          filter: false,
          searchDelay: 3000,
          \"order\": [[1, \"asc\"]],
          ajax: {
            url: \"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("font.search"), "html", null, true);
        yield "\",
            data: function (d) {
              \$.extend(d, \$(\"#fonts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
            }
          },
          \"columns\": [
            {\"data\": \"id\", responsivePriority: 2},
            {\"data\": \"name\", responsivePriority: 2},
            {\"data\": \"fileName\", responsivePriority: 4},
            {\"data\": \"createdAt\", responsivePriority: 3},
            {\"data\": \"modifiedAt\", responsivePriority: 3},
            {\"data\": \"modifiedBy\", responsivePriority: 3},
            {
              \"name\": \"size\",
              responsivePriority: 3,
              \"data\": null,
              \"render\": {\"_\": \"size\", \"display\": \"fileSizeFormatted\", \"sort\": \"size\"}
            },
            {
              \"orderable\": false,
              responsivePriority: 1,
              \"data\": dataTableButtonsColumn
            }
          ]
        });

        fontsTable.on('draw', dataTableDraw);
        fontsTable.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(fontsTable, \$('#resolutions_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            fontsTable.ajax.reload();
        });
      });

      \$(\"#fontUploadForm\").click(function(e) {
        e.preventDefault();

        openUploadForm({
          url: \"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("font.add"), "html", null, true);
        yield "\",
          title: \"";
        // line 135
        echo __("Add Font");
        yield "\",
          initialisedBy: \"font-upload\",
          buttons: {
            main: {
              label: \"";
        // line 139
        echo __("Done");
        yield "\",
              className: \"btn-primary btn-bb-main\",
              callback: function () {
                fontsTable.ajax.reload();
                XiboDialogClose();
              }
            }
          },
          templateOptions: {
            includeTagsInput: false,
            trans: {
              addFiles: \"";
        // line 150
        echo __("Add files");
        yield "\",
              startUpload: \"";
        // line 151
        echo __("Start upload");
        yield "\",
              cancelUpload: \"";
        // line 152
        echo __("Cancel upload");
        yield "\"
            },
            upload: {
              maxSize: ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 155), "html", null, true);
        yield ",
              maxSizeMessage: \"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 156), "html", null, true);
        yield "\",
              validExt: \"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validExt"] ?? null), "html", null, true);
        yield "\"
            },
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
        return "fonts-page.twig";
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
        return array (  290 => 157,  286 => 156,  282 => 155,  276 => 152,  272 => 151,  268 => 150,  254 => 139,  247 => 135,  243 => 134,  201 => 95,  181 => 79,  177 => 78,  159 => 64,  155 => 63,  151 => 62,  147 => 61,  143 => 60,  139 => 59,  135 => 58,  123 => 50,  118 => 49,  112 => 47,  107 => 46,  100 => 42,  95 => 40,  92 => 39,  88 => 38,  79 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "fonts-page.twig", "/var/www/cms/views/fonts-page.twig");
    }
}
