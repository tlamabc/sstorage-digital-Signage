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

/* folders-page.twig */
class __TwigTemplate_0ff908699a4d19a5e93395c9504c5e29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "folders-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "folders-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Folders"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 30
        echo __("Folders");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 34
        echo __("Search");
        yield "\">
                    <div class=\"folder-search-no-results d-none\">
                        <p>";
        // line 36
        echo __("No Folders matching the search term");
        yield "</p>
                    </div>
                    <div id=\"container-folder-tree\"></div>
                </div>
                <div class=\"col-md-9\">
                    <div id=\"container-folder-info\"></div>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 48
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        \$(function () {
            var foldersInputPanelTemplate = Handlebars.compile(\$('#folders-info-panel').html());
            var \$folderInfo = \$('#container-folder-info');

            initJsTreeAjax(
                '#container-folder-tree',
                'folders-admin',
                false,
                600,
                function(tree) {
                    \$('#container-folder-tree').jstree('open_all');
                },
                function(data) {
                    if (data.action !== 'select_node') {
                        return;
                    }
                    \$.ajax({
                        method: 'GET',
                        url: '";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search"), "html", null, true);
        yield "/' + data.node.id,
                        success: function(response) {
                            if (response) {
                                \$folderInfo.html(foldersInputPanelTemplate(response));
                            } else {
                                toastr.error(response.message || '";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unknown error"), "html", null, true);
        yield "');
                            }
                        },
                        error: function() {
                            toastr.error(response.message || '";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unknown error"), "html", null, true);
        yield "');
                        },
                    })
                });
        });
    </script>
";
        return; yield '';
    }

    // line 85
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        yield "    ";
        yield from $this->yieldParentBlock("javaScriptTemplates", $context, $blocks);
        yield "

    ";
        // line 92
        yield "
    <script type=\"text/x-handlebars-template\" id=\"folders-info-panel\">
        <div class=\"card p-3 mb-0\" data-folder-id=\"{{ id }}\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Folder info"), "html", null, true);
        // line 95
        yield "</h5>
                <p>{{text}}</p>
                <ul>
                    <li>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Number of times used as a home folder:"), "html", null, true);
        // line 98
        yield " {{homeFolderCount}}</li>
                </ul>
                <div class=\"folder-info-sharing\">
                    <h5>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Shared with:"), "html", null, true);
        // line 104
        yield "</h5>
                    {{#if sharing}}
                        {{#each sharing}}
                        <li class=\"badge {{#if isGroup}}badge-info{{else}}badge-success{{/if}}\"><span>{{name}}</span></li>
                        {{/each}}
                    {{else}}
                        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Not shared"), "html", null, true);
        // line 108
        yield "
                    {{/if}}
                </div>
                <div class=\"folder-info-usage mt-5\">
                    <h5>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Contents:"), "html", null, true);
        // line 113
        yield "</h5>
                    {{#if usage}}
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Section"), "html", null, true);
        // line 114
        yield "</th>
                                <th>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Number of items"), "html", null, true);
        // line 115
        yield "</th>
                                <th>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Size"), "html", null, true);
        // line 129
        yield "</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{#each usage}}
                                <tr>
                                    <td>{{type}}</td>
                                    <td>{{count}}</td>
                                    <td>{{size}}</td>
                                </tr>
                            {{/each}}
                        </tbody>
                    </table>
                    {{else}}
                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Empty folder"), "html", null, true);
        // line 135
        yield "
                    {{/if}}
                </div>
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
        return "folders-page.twig";
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
        return array (  229 => 135,  212 => 129,  208 => 115,  204 => 114,  196 => 113,  189 => 108,  180 => 104,  174 => 98,  168 => 95,  161 => 92,  155 => 86,  151 => 85,  139 => 77,  132 => 73,  124 => 68,  101 => 49,  97 => 48,  81 => 36,  76 => 34,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "folders-page.twig", "/var/www/cms/views/folders-page.twig");
    }
}
