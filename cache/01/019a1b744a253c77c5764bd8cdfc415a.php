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

/* developer-template-page.twig */
class __TwigTemplate_a84f5dbbff3c1ba51d3714feb46a5ce4 extends Template
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
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "developer-template-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "developer-template-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Module Templates"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success XiboFormButton\" title=\"";
        // line 30
        echo __("Add a new template");
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.form.add"), "html", null, true);
        yield "\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 31
        echo __("Add Module Template");
        // line 32
        yield "        </button>
        <button class=\"btn btn-success\" href=\"#\" id=\"module-template-xml-import\" title=\"";
        // line 33
        echo __("Add a new template by importing XML file");
        yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Import XML");
        yield "</button>
        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        // line 34
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
        echo __("Module Templates");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"moduleTemplatesView\">
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
            echo __("Title");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["templateId", ($context["title"] ?? null)], 50, $context, $this->getSourceContext());
        yield "

                            ";
        // line 52
        $context["attributes"] = [["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-width", "value" => "200px"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.datatypes.search")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "id"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-initial-key", "value" => "dataType"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-hide-search", "value" => 1]];
        // line 64
        yield "                            ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Data Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Which data type does this template need?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["dataType", "single", ($context["title"] ?? null), null, null, "id", "id", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 66, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"templates\" class=\"table table-striped\" data-state-preference-name=\"moduleTemplateGrid\">
                        <thead>
                        <tr>
                            <th>";
        // line 74
        echo __("ID");
        yield "</th>
                            <th>";
        // line 75
        echo __("Template ID");
        yield "</th>
                            <th>";
        // line 76
        echo __("Data Type");
        yield "</th>
                            <th>";
        // line 77
        echo __("Title");
        yield "</th>
                            <th>";
        // line 78
        echo __("Type");
        yield "</th>
                            <th>";
        // line 79
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
";
        return; yield '';
    }

    // line 93
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        yield "    ";
        // line 95
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\" defer>
        ";
        // line 97
        yield "        var developerTemplatesSearchURL = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.search"), "html", null, true);
        yield "\";
        var developerTemplatesImportURL = \"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.import"), "html", null, true);
        yield "\";
        var moduleTemplateSearchURL = \"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.template.search", ["dataType" => ":dataType"]), "html", null, true);
        yield "\";

        ";
        // line 102
        yield "        var developerTemplatePageTrans = {
            importXML: \"";
        // line 103
        echo __("Import XML");
        yield "\",
            done: \"";
        // line 104
        echo __("Done");
        yield "\",
            templateOptions: {
              addFiles: \"";
        // line 106
        echo __("Add files");
        yield "\",
              startUpload: \"";
        // line 107
        echo __("Start upload");
        yield "\",
              cancelUpload: \"";
        // line 108
        echo __("Cancel upload");
        yield "\",
            },
            unknownError: \"";
        // line 110
        echo __("Unknown error");
        yield "\",
        };
    </script>

    ";
        // line 115
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 115), "html", null, true);
        yield "dist/pages/developer-template-page.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
";
        return; yield '';
    }

    // line 118
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        yield "    ";
        yield from $this->yieldParentBlock("javaScriptTemplates", $context, $blocks);
        yield "

    ";
        // line 192
        yield "

    <script type=\"text/x-handlebars-template\" id=\"template-module-xml-upload\">
        <form class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"row fileupload-buttonbar\">
                <div class=\"col-md-7\">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"fa fa-plus\"></i>
                        <span>{{ trans.addFiles }}</span>
                        <input type=\"file\" name=\"files\">
                    </span>
                    <button type=\"submit\" class=\"btn btn-primary start\">
                        <i class=\"fa fa-upload\"></i>
                        <span>{{ trans.startUpload }}</span>
                    </button>
                    <button type=\"reset\" class=\"btn btn-warning cancel\">
                        <i class=\"fa fa-ban\"></i>
                        <span>{{ trans.cancelUpload }}</span>
                    </button>
                    <!-- The loading indicator is shown during file processing -->
                    <span class=\"fileupload-loading\"></span>
                </div>
                <!-- The global progress information -->
                <div class=\"col-md-4 fileupload-progress fade\">
                    <!-- The global progress bar -->
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                            <div class=\"sr-only\"></div>
                        </div>
                    </div>
                    <!-- The extended global progress information -->
                    <div class=\"progress-extended\">&nbsp;</div>
                    <!-- Processing info container -->
                    <div class=\"progress-end\" style=\"display:none;\">{{ trans.processing }}</div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
        </form>
    </script>

<script id=\"template-module-xml-upload-files\" type=\"text/x-tmpl\">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class=\"template-upload\">
        <td>
            <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                        <div class=\"sr-only\"></div>
                    </div>
                </div>
            </div>
        </td>
        <td>
            <div class=\"btn-group\">
                {% if (!i && !o.options.autoUpload) { %}
                    <button class=\"btn btn-primary start\" disabled>
                        <i class=\"fa fa-upload\"></i>
                    </button>
                {% } %}
                {% if (!i) { %}
                    <button class=\"btn btn-warning cancel\">
                        <i class=\"fa fa-ban\"></i>
                    </button>
                {% } %}
            </div>
        </td>
    </tr>
{% } %}
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
        return "developer-template-page.twig";
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
        return array (  281 => 192,  275 => 119,  271 => 118,  257 => 115,  250 => 110,  245 => 108,  241 => 107,  237 => 106,  232 => 104,  228 => 103,  225 => 102,  220 => 99,  216 => 98,  211 => 97,  206 => 95,  204 => 94,  200 => 93,  182 => 79,  178 => 78,  174 => 77,  170 => 76,  166 => 75,  162 => 74,  150 => 66,  144 => 65,  138 => 64,  136 => 52,  130 => 50,  125 => 49,  119 => 47,  114 => 46,  107 => 42,  102 => 40,  99 => 39,  95 => 38,  87 => 34,  81 => 33,  78 => 32,  76 => 31,  70 => 30,  67 => 29,  63 => 28,  54 => 26,  49 => 23,  47 => 24,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "developer-template-page.twig", "/var/www/cms/views/developer-template-page.twig");
    }
}
