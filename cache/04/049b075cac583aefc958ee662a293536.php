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

/* developer-template-edit-page.twig */
class __TwigTemplate_6588bec1715528f480f063ae9bd2d880 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "developer-template-edit-page.twig", 25)->unwrap();
        // line 26
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "developer-template-edit-page.twig", 26)->unwrap();
        // line 30
        $context["hideNavigation"] = "1";
        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "developer-template-edit-page.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $context["templateName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "title", [], "any", false, false, false, 28);
        /* xgettext:no-php-format */        echo strtr(__("%templateName% - Module Template"), array("%templateName%" => ($context["templateName"] ?? null), ));
        yield " | ";
        return; yield '';
    }

    // line 32
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    <div id=\"developer-module-template-edit\"
         data-template-id=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "templateId", [], "any", false, false, false, 34), "html", null, true);
        yield "\">
        <div class=\"back-button\">
            <a id=\"backBtn\" class=\"btn btn-primary\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.view"), "html", null, true);
        yield "\">
                <i class=\"fa fa-angle-left\"></i>
                <span>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back"), "html", null, true);
        yield "</span>
            </a>
        </div>
        <div class=\"widget mt-3\">
            <div class=\"widget-body\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <form id=\"form-module-template\"
                              class=\"XiboForm form-horizontal\"
                              method=\"put\"
                              action=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 48)]), "html", null, true);
        yield "\">

                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"#tab-general\" role=\"tab\" data-toggle=\"tab\">
                                        <span>";
        // line 53
        echo __("General");
        yield "</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#tab-properties\" role=\"tab\" data-toggle=\"tab\">
                                        <span>";
        // line 58
        echo __("Properties");
        yield "</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#tab-twig\" role=\"tab\" data-toggle=\"tab\">
                                        <span>";
        // line 63
        echo __("Twig");
        yield "</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#tab-hbs\" role=\"tab\" data-toggle=\"tab\">
                                        <span>";
        // line 68
        echo __("HBS");
        yield "</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#tab-style\" role=\"tab\" data-toggle=\"tab\">
                                        <span>";
        // line 73
        echo __("Style");
        yield "</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#tab-head\" role=\"tab\" data-toggle=\"tab\">
                                        <span>";
        // line 78
        echo __("Head");
        yield "</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#tab-onTemplateRender\" role=\"tab\" data-toggle=\"tab\">
                                        <span>";
        // line 83
        echo __("onTemplateRender");
        yield "</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#tab-onTemplateVisible\" role=\"tab\" data-toggle=\"tab\">
                                        <span>";
        // line 88
        echo __("onTemplateVisible");
        yield "</span>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"tab-general\">
                                    ";
        // line 94
        yield CoreExtension::callMacro($macros["forms"], "macro_alert", ["Changing the ID or DataType will break any existing Widgets which use this template.", "danger"], 94, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 96
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A unique ID for the module template");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["templateId", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "templateId", [], "any", false, false, false, 98), ($context["helpText"] ?? null)], 98, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 100
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Title");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A title for the module template");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["title", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "title", [], "any", false, false, false, 102), ($context["helpText"] ?? null)], 102, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 104
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.datatypes.search")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "id"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-initial-key", "value" => "dataType"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 110
($context["template"] ?? null), "dataType", [], "any", false, false, false, 110)], ["name" => "data-hide-search", "value" => 1]];
        // line 113
        yield "                                    ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Data Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Which data type does this template need?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dataType", "single", ($context["title"] ?? null), null, null, "id", "id", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 115, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 117
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show In");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Which Editor should this template be available in?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        yield "                                    ";
        $context["options"] = [["id" => "none", "name" => __("None")], ["id" => "layout", "name" => __("Layout Editor")], ["id" => "playlist", "name" => __("Playlist Editor")], ["id" => "both", "name" => __("Both")]];
        // line 125
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["showIn", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "showIn", [], "any", false, false, false, 125), ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null)], 125, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 127
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enabled?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is this template enabled?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["enabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "isEnabled", [], "any", false, false, false, 129), ($context["helpText"] ?? null)], 129, $context, $this->getSourceContext());
        yield "
                                </div>
                                <div class=\"tab-pane\" id=\"tab-properties\">
                                    <div class=\"form-group row\">
                                        <div class=\"col-sm-12\">
                                            <small class=\"form-text text-muted\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Properties"), "html", null, true);
        yield "</small>
                                            <input type=\"hidden\" name=\"developer-template-properties\" value=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["propertiesJSON"] ?? null), "html", null, true);
        yield "\">

                                            <div class=\"developer-template-controls-tools text-right\">
                                                <button type=\"button\" class=\"scroll-to-start-btn btn btn-outline-primary mb-3 d-none\" title=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Go to start"), "html", null, true);
        yield "\">
                                                    <i class=\"fa fa-arrow-left\"></i>
                                                </button>
                                                <button type=\"button\" class=\"add-property-btn btn btn-outline-primary mb-3 px-4\" title=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add new property"), "html", null, true);
        yield "\">
                                                    <i class=\"fa fa-plus\"></i> ";
        // line 142
        echo __("Add");
        // line 143
        yield "                                                </button>
                                                <button type=\"button\" class=\"scroll-to-end-btn btn btn-outline-primary mb-3 d-none\" title=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Go to end"), "html", null, true);
        yield "\">
                                                    <i class=\"fa fa-arrow-right\"></i>
                                                </button>
                                            </div>
                                            <div class=\"developer-template-controls-container\">
                                                <div class=\"developer-template-controls\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group row code-input-group\">
                                        <div class=\"col-sm-12\">
                                            <textarea class=\"form-control\" id=\"input-properties\" name=\"properties\" style=\"display:none;\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["propertiesJSON"] ?? null), "html", null, true);
        yield "</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab-twig\">
                                    <div class=\"form-group row code-input-group xibo-code-input\">
                                        <div class=\"col-sm-12\">
                                            <small class=\"form-text text-muted\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Twig"), "html", null, true);
        yield "</small>
                                            <textarea class=\"form-control d-none code-input\" id=\"input-twig\" name=\"twig\" rows=\"30\" data-code-type=\"twig\">";
        // line 163
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "stencil", [], "any", false, false, false, 163), "twig", [], "any", false, false, false, 163);
        yield "</textarea>

                                            <div class=\"code-input-editor-container\" style=\"height: 70vh;\">
                                                <div class=\"code-input-editor\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab-hbs\">
                                    <div class=\"form-group row code-input-group xibo-code-input\">
                                        <div class=\"col-sm-12\">
                                            <small class=\"form-text text-muted\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("HBS"), "html", null, true);
        yield "</small>
                                            <textarea class=\"form-control d-none code-input\" id=\"input-hbs\" name=\"hbs\" rows=\"30\" data-code-type=\"handlebars\">";
        // line 175
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "stencil", [], "any", false, false, false, 175), "hbs", [], "any", false, false, false, 175);
        yield "</textarea>

                                            <div class=\"code-input-editor-container\" style=\"height: 70vh;\">
                                                <div class=\"code-input-editor\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab-style\">
                                    <div class=\"form-group row code-input-group xibo-code-input\">
                                        <div class=\"col-sm-12\">
                                            <small class=\"form-text text-muted\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Style"), "html", null, true);
        yield "</small>
                                            <textarea class=\"form-control d-none code-input\" id=\"input-style\" name=\"style\" rows=\"30\" data-code-type=\"css\">";
        // line 187
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "stencil", [], "any", false, false, false, 187), "style", [], "any", false, false, false, 187);
        yield "</textarea>

                                            <div class=\"code-input-editor-container\" style=\"height: 70vh;\">
                                                <div class=\"code-input-editor\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab-head\">
                                    <div class=\"form-group row code-input-group xibo-code-input\">
                                        <div class=\"col-sm-12\">
                                            <small class=\"form-text text-muted\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Head"), "html", null, true);
        yield "</small>
                                            <textarea class=\"form-control d-none code-input\" id=\"input-head\" name=\"head\" rows=\"30\" data-code-type=\"html\">";
        // line 199
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "stencil", [], "any", false, false, false, 199), "head", [], "any", false, false, false, 199);
        yield "</textarea>

                                            <div class=\"code-input-editor-container\" style=\"height: 70vh;\">
                                                <div class=\"code-input-editor\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab-onTemplateRender\">
                                    <div class=\"form-group row code-input-group xibo-code-input\">
                                        <div class=\"col-sm-12\">
                                            <small class=\"form-text text-muted\">";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("onTemplateRender"), "html", null, true);
        yield "</small>
                                            <textarea class=\"form-control d-none code-input\" id=\"input-onTemplateRender\" name=\"onTemplateRender\" rows=\"30\" data-code-type=\"javascript\">";
        // line 211
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "onTemplateRender", [], "any", false, false, false, 211);
        yield "</textarea>

                                            <div class=\"code-input-editor-container\" style=\"height: 70vh;\">
                                                <div class=\"code-input-editor\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab-onTemplateVisible\">
                                    <div class=\"form-group row code-input-group xibo-code-input\">
                                        <div class=\"col-sm-12\">
                                            <small class=\"form-text text-muted\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("onTemplateVisible"), "html", null, true);
        yield "</small>
                                            <textarea class=\"form-control d-none code-input\" id=\"input-onTemplateVisible\" name=\"onTemplateVisible\" rows=\"30\" data-code-type=\"javascript\">";
        // line 223
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "onTemplateVisible", [], "any", false, false, false, 223);
        yield "</textarea>

                                            <div class=\"code-input-editor-container\" style=\"height: 70vh;\">
                                                <div class=\"code-input-editor\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 233
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isInvalidateWidget", __("Invalidate any widgets using this template"), 1], 233, $context, $this->getSourceContext());
        yield "

                            ";
        // line 235
        yield CoreExtension::callMacro($macros["forms"], "macro_button", [__("Save"), "submit", null, null, null, "btn-success"], 235, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 245
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 246
        yield "    ";
        // line 250
        yield "
        <script type=\"text/x-handlebars-template\" id=\"developer-template-control\">
            <div class=\"developer-template-control-item\">
                <div class=\"developer-template-control-item-controls\">
                    <div title=\"";
        echo __("Move");
        // line 253
        yield "\"\" class=\"item-move\" >
                        <i class=\"fa fa-bars\"></i> 
                    </div>
                    <button type=\"button\" class=\"btn delete-btn\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
        // line 263
        yield "\">
                        <i class=\"fa fa-trash\"></i>
                    </button>
                </div>
                <div class=\"developer-template-control-form\"></div>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"developer-template-placeholder\">
            <div class=\"developer-template-placeholder\">
                <div>";
        echo __("No properties, click Add to create one!");
        // line 288
        yield "</div>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"developer-template-control-options\">
            <div class=\"developer-template-control-options control-container\">
                <div>
                    <strong class=\"float-left\">options</strong>
                    {{#if helpText}}
                        <div class=\"input-info-container pt-0 float-left\">
                            <i class=\"fa fa-question-circle input-info tooltip-always-on xibo-help-text\"
                                data-toggle=\"tooltip\" 
                                data-placement=\"top\"
                                title=\"{{helpText}}\">
                            </i>
                        </div>
                    {{/if}}
                </div>

                <div class=\"xibo-form-input\" data-control-title=\"options\" data-control-type=\"options\">
                    <input type=\"hidden\" class=\"jsonField\"  name=\"options\" value=\"{{originalValue}}\">
                </div>

                <div class=\"options-items\">
                    <button type=\"button\" class=\"add-option-btn btn btn-block btn-outline-primary btn-sm\">
                        <i class=\"fa fa-plus\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add option"), "html", null, true);
        // line 302
        yield "
                    </button>
                </div>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"developer-template-control-option-item\">
            <div class=\"option-item d-inline-flex\">
                <label for=\"control_option_title\" class=\"control-label text-muted\">title</label>
                <input type=\"text\" class=\"form-control subcontrol-input\" name=\"control_option_title\" value=\"{{title}}\">
                <label for=\"control_option_name\" class=\"control-label text-muted\">name</label>
                <input type=\"text\" class=\"form-control subcontrol-input\" name=\"control_option_name\" value=\"{{name}}\">
                <button type=\"button\" class=\"del-option-btn btn btn-outline-danger btn-sm\">
                    <i class=\"fa fa-trash\"
                        title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete option"), "html", null, true);
        // line 368
        yield "\">
                    </i>
                </button>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"developer-template-control-playerCompatibility\">
            <div class=\"developer-template-control-playerCompatibility control-container\">
                <div>
                    <strong class=\"float-left\">playerCompatibility</strong>
                    {{#if helpText}}
                        <div class=\"input-info-container pt-0 float-left\">
                            <i class=\"fa fa-question-circle input-info tooltip-always-on xibo-help-text\"
                                data-toggle=\"tooltip\" 
                                data-placement=\"top\"
                                title=\"{{helpText}}\">
                            </i>
                        </div>
                    {{/if}}
                </div>

                <div class=\"xibo-form-input\" data-control-title=\"playerCompatibility\" data-control-type=\"playerCompatibility\">
                    <input type=\"hidden\" class=\"jsonField\"  name=\"playerCompatibility\" value=\"{{originalValue}}\">
                </div>
                
                <div class=\"player-compat-items float-left\">
                    <label for=\"player_compat_windows\" class=\"control-label text-muted\">windows</label>
                    <input type=\"text\" class=\"form-control subcontrol-input\" name=\"player_compat_windows\" data-player=\"windows\" value=\"{{value.windows}}\">

                    <label for=\"player_compat_windows\" class=\"control-label text-muted\">android</label>
                    <input type=\"text\" class=\"form-control subcontrol-input\" name=\"player_compat_android\" data-player=\"android\" value=\"{{value.android}}\">

                    <label for=\"player_compat_windows\" class=\"control-label text-muted\">linux</label>
                    <input type=\"text\" class=\"form-control subcontrol-input\" name=\"player_compat_linux\" data-player=\"linux\" value=\"{{value.linux}}\">

                    <label for=\"player_compat_windows\" class=\"control-label text-muted\">webos</label>
                    <input type=\"text\" class=\"form-control subcontrol-input\" name=\"player_compat_webos\" data-player=\"webos\" value=\"{{value.webos}}\">

                    <label for=\"player_compat_windows\" class=\"control-label text-muted\">tizen</label>
                    <input type=\"text\" class=\"form-control subcontrol-input\" name=\"player_compat_tizen\" data-player=\"tizen\" value=\"{{value.tizen}}\">
                </div>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"developer-template-control-visibility\">
            <div class=\"developer-template-control-visibility control-container\">
                <div>
                    <strong class=\"float-left\">visibility</strong>
                    {{#if helpText}}
                        <div class=\"input-info-container pt-0 float-left\">
                            <i class=\"fa fa-question-circle input-info tooltip-always-on xibo-help-text\"
                                data-toggle=\"tooltip\" 
                                data-placement=\"top\"
                                title=\"{{helpText}}\">
                            </i>
                        </div>
                    {{/if}}
                </div>

                <div class=\"xibo-form-input\" data-control-title=\"visibility\" data-control-type=\"visibility\">
                    <input type=\"hidden\" class=\"jsonField\"  name=\"visibility\" value=\"{{originalValue}}\">
                </div>

                <div class=\"visibility-tests test-container float-left w-100\"></div>

                <button type=\"button\" class=\"add-test-btn btn btn-block btn-outline-primary btn-sm\">
                    <i class=\"fa fa-plus\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add test"), "html", null, true);
        // line 406
        yield "
                </button>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"developer-template-control-validation\">
            <div class=\"developer-template-control-validation control-container\">
                <div>
                    <strong class=\"float-left\">validation</strong>
                    {{#if helpText}}
                        <div class=\"input-info-container pt-0 float-left\">
                            <i class=\"fa fa-question-circle input-info tooltip-always-on xibo-help-text\"
                                data-toggle=\"tooltip\" 
                                data-placement=\"top\"
                                title=\"{{helpText}}\">
                            </i>
                        </div>
                    {{/if}}
                </div>

                <div class=\"xibo-form-input\" data-control-title=\"validation\" data-control-type=\"validation\">
                    <input type=\"hidden\" class=\"jsonField\"  name=\"validation\" value=\"{{originalValue}}\">
                </div>

                <div class=\"validation-options float-left w-100\">
                    <div class=\"form-check float-right pb-1\">
                        <input type=\"checkbox\" class=\"form-check-input\" id=\"onSave\" name=\"onSave\">
                        <label for=\"onSave\" class=\"form-check-label\"><strong>onSave</strong></label>
                    </div>
                    <div class=\"form-check float-right pb-1 pr-2\">
                        <input type=\"checkbox\" class=\"form-check-input\" id=\"onStatus\" name=\"onStatus\">
                        <label for=\"onStatus\" class=\"form-check-label\"><strong>onStatus</strong></label>
                    </div>
                </div>

                <div class=\"validation-tests test-container float-left w-100\"></div>

                <button type=\"button\" class=\"add-test-btn btn btn-block btn-outline-primary btn-sm\">
                    <i class=\"fa fa-plus\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add test"), "html", null, true);
        // line 414
        yield "
                </button>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"developer-template-control-test\">
            <div class=\"test-item\">
                <div class=\"item-header mb-2\">
                    <div class=\"test-title\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Test"), "html", null, true);
        // line 417
        yield "</div>
                    <button type=\"button\" class=\"del-test-btn btn btn-outline-danger btn-sm\">
                        <i class=\"fa fa-trash\"
                            title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete test"), "html", null, true);
        // line 439
        yield "\">
                        </i>
                    </button>
                </div>

                <div class=\"test-item-properties\">
                    <label for=\"test_type\" class=\"control-label text-muted\">type</label>
                    <select name=\"test_type\" class=\"test_type form-control\">
                        <options>
                            <option value=\"and\" {{#eq type \"and\"}}selected{{/eq}}>and</option>
                            <option value=\"or\" {{#eq type \"or\"}}selected{{/eq}}>or</option>
                        </options>
                    </select>

                    <label for=\"test_message\" class=\"control-label text-muted\">message</label>
                    <input type=\"text\" class=\"form-control subcontrol-input\" name=\"test_message\" value=\"{{message}}\">
                </div>

                <div class=\"test-conditions-container\">
                    <div class=\"test-conditions\"></div>
                    
                    <button type=\"button\" class=\"add-condition-btn btn btn-block btn-outline-primary btn-sm\">
                        <i class=\"fa fa-plus\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add condition"), "html", null, true);
        // line 448
        yield "
                    </button>
                </div>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"developer-template-control-condition\">
            <div class=\"condition-item\">
                <div class=\"item-header\">
                    <div class=\"condition-title\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Condition"), "html", null, true);
        // line 451
        yield "</div>
                    <button type=\"button\" class=\"del-condition-btn btn btn-outline-danger btn-sm\">
                        <i class=\"fa fa-trash\"
                            title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete condition"), "html", null, true);
        // line 476
        yield "\">
                        </i>
                    </button>
                </div>
                <label for=\"condition_type\" class=\"control-label text-muted\">type</label>
                <select name=\"condition_type\" class=\"condition_type form-control\">
                    <options>
                        <option value=\"ne\" {{#eq type \"ne\"}}selected{{/eq}}>ne</option>
                        <option value=\"eq\" {{#eq type \"eq\"}}selected{{/eq}}>eq</option>
                        <option value=\"neq\" {{#eq type \"neq\"}}selected{{/eq}}>neq</option>
                        <option value=\"gt\" {{#eq type \"gt\"}}selected{{/eq}}>gt</option>
                        <option value=\"lt\" {{#eq type \"lt\"}}selected{{/eq}}>lt</option>
                        <option value=\"egt\" {{#eq type \"egt\"}}selected{{/eq}}>egt</option>
                        <option value=\"elt\" {{#eq type \"elt\"}}selected{{/eq}}>elt</option>
                        <option value=\"isTopLevel\" {{#eq type \"isTopLevel\"}}selected{{/eq}}>isTopLevel</option>
                    </options>
                </select>

                <label for=\"condition_field\" class=\"control-label text-muted\">field</label>
                <input type=\"text\" class=\"form-control subcontrol-input\" name=\"condition_field\" value=\"{{field}}\">

                <label for=\"condition_value\" class=\"control-label text-muted\">value</label>
                <input type=\"text\" class=\"form-control subcontrol-input\" name=\"condition_value\" value=\"{{value}}\">
            </div>
        </script>
    ";
        yield "

    <script type=\"text/javascript\" nonce=\"";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var propertiesMap = {
            type: {
                type: 'dropdown',
                helpText: '',
            },
            id: {
                type: 'text',
                helpText: '',
            },
            title: {
                type: 'text',
                helpText: '',
            },
            helpText: {
                type: 'text',
                helpText: '',
            },
            default: {
                type: 'text',
                helpText: \"";
        // line 498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Default value"), "html", null, true);
        yield "\",
            },
            variant: {
                type: 'text',
                helpText: '',
            },
            format: {
                type: 'text',
                helpText: '',
            },
            mode: {
                type: 'text',
                helpText: '',
            },
            target: {
                type: 'text',
                helpText: '',
            },
            propertyGroupId: {
                type: 'text',
                helpText: '',
            },
            dependsOn: {
                type: 'text',
                helpText: '',
            },
            customPopOver: {
                type: 'text',
                helpText: '',
            },
            allowLibraryRefs: {
                type: 'checkbox',
                helpText: '',
            },
            allowAssetRefs: {
                type: 'checkbox',
                helpText: '',
            },
            parseTranslations: {
                type: 'checkbox',
                helpText: '',
            },
            includeInXlf: {
                type: 'checkbox',
                helpText: '',
            },
            options: {
                type: 'options',
                helpText: \"";
        // line 546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Options for the dropdown control"), "html", null, true);
        yield "\",
                visibility: function(ctrl) {
                    return ctrl.type === 'dropdown';
                },
            },
            visibility: {
                type: 'visibility',
                helpText: '',
            },
            validation: {
                type: 'validation',
                helpText: '',
            },
            playerCompatibility: {
                type: 'playerCompatibility',
                helpText: '',
            },
        };

        var controlTypes = [
            'text',
            'checkbox',
            'number',
            'textArea',
            'dropdown',
            'date',
            'code',
            'color',
            'custom',
            'divider',
            'effectSelector',
            'fontSelector',
            'header',
            'hidden',
            'message',
            'richText',
            'snippet',
            'canvasWidgetsSelector',
            'commandBuilder',
            'commandSelector',
            'connectorProperties',
            'datasetColStyle',
            'datasetColStyleSelector',
            'datasetColumnSelector',
            'datasetField',
            'datasetFilter',
            'datasetOrder',
            'datasetSelector',
            'forecastUnitsSelector',
            'languageSelector',
            'mediaSelector',
            'menuBoardCategorySelector',
            'menuBoardSelector',
            'playlistMixer',
            'tickerTagSelector',
            'tickerTagStyle',
            'worldClock',
        ];
        
        \$(document).ready(function() {
            // Create controls
            var \$controlsHiddenInput = \$('#form-module-template').find('[name=\"properties\"]');
            var \$controls = \$('#form-module-template').find('.developer-template-controls');
            var \$controlsContainer = \$('#form-module-template').find('.developer-template-controls-container');
            var controls = (\$controlsHiddenInput.val()) ? JSON.parse(\$controlsHiddenInput.val()) : [];
            var controlTemplate = Handlebars.compile(\$(\"#developer-template-control\").html())();
            var placeholderTemplate = Handlebars.compile(\$(\"#developer-template-placeholder\").html())();
            createTemplateControlsFromJSON(\$controls, controls);

            // Add new property
            \$('.developer-template-controls-tools .add-property-btn').on('click', (ev) => {
                addControl();
            });

            // Scroll
            \$('.developer-template-controls-tools .scroll-to-end-btn').on('click', (ev) => {
                scrollToEnd();
            });
            \$('.developer-template-controls-tools .scroll-to-start-btn').on('click', (ev) => {
                scrollToStart();
            });

            function scrollToStart() {
                \$controlsContainer.animate({scrollLeft: 0}, 1000);
            }

            function scrollToEnd() {
                \$controlsContainer.animate({scrollLeft: \$controlsContainer.prop('scrollWidth')}, 1000);
            }

            function addControl(control) {
                var \$control = \$(controlTemplate);

                    for (var ptm in propertiesMap) {
                        if (propertiesMap.hasOwnProperty(ptm)) {
                            var propertyFromMap = propertiesMap[ptm].type;
                            if (templates.forms[propertyFromMap]) {
                                var \$property = \$(templates.forms[propertyFromMap](
                                    {
                                        title: ptm,
                                        helpText: propertiesMap[ptm].helpText,
                                        value: (control) ? control[ptm] : null,
                                        options: controlTypes.map((ct) => {
                                            return {
                                                name: ct,
                                                title: ct,
                                            };
                                        }),
                                    }
                                )).data('control-title', ptm)
                                .data('control-type', propertyFromMap);

                                \$property.appendTo(\$control.find('.developer-template-control-form'));
                            } else {
                                var \$templateDiv = \$('#developer-template-control-' + propertyFromMap);
                                if(\$templateDiv.length > 0) {
                                    var controlType = propertiesMap[ptm].type;
                                    var subControlTemplate = Handlebars.compile(
                                        \$templateDiv.html()
                                    );
                                    var subControlValue = (control) ? control[ptm] : '';
                                    var \$subcontrol = \$(subControlTemplate(
                                        Object.assign(
                                            propertiesMap[ptm],
                                            {
                                                value: subControlValue,
                                                originalValue: (subControlValue) ? JSON.stringify(subControlValue) : '',
                                            }
                                        )
                                    ));

                                    var saveSubControl = function(\$target) {
                                        var \$subControlAux = \$target;
                                        var controlType = \$target.find('.xibo-form-input').data('controlType');
                                        var valToSave = {};

                                        // Save to hidden input
                                        if (controlType === 'playerCompatibility') {
                                            \$subControlAux.find('.subcontrol-input').each((_key, sub) => {
                                                var subValue = \$(sub).val();
                                                if(subValue) {
                                                    valToSave[\$(sub).data('player')] = \$(sub).val();
                                                }
                                            });
                                        } else if (controlType === 'options') {
                                            valToSave = [];
                                            \$subControlAux.find('.option-item').each((_key, option) => {
                                                var optionTitle = \$(option).find('[name=\"control_option_title\"]').val();
                                                var optionName = \$(option).find('[name=\"control_option_name\"]').val();
                                                if(optionTitle && optionName) {
                                                    valToSave.push({
                                                        title: optionTitle,
                                                        name: optionName,
                                                    });
                                                }
                                            });
                                        } else if(controlType === 'visibility') {
                                            valToSave = [];
                                            \$subControlAux.find('.test-item').each((_key, test) => {
                                                var testConditions = [];
                                                var testType = \$(test).find('[name=\"test_type\"]').val();
                                                var testMessage = \$(test).find('[name=\"test_message\"]').val();

                                                \$(test).find('.condition-item').each((_key, cond) => {
                                                    testConditions.push({
                                                        field: \$(cond).find('[name=\"condition_field\"]').val(),
                                                        type: \$(cond).find('[name=\"condition_type\"]').val(),
                                                        value: \$(cond).find('[name=\"condition_value\"]').val(),
                                                    });
                                                });

                                                valToSave.push({
                                                    type: testType,
                                                    message: testMessage,
                                                    conditions: testConditions,
                                                });
                                            });
                                        } else if(controlType === 'validation') {
                                            valToSave = {
                                                tests: [],
                                            };
                                            \$subControlAux.find('.validation-options input').each((_key, option) => {
                                                var \$optionInput = \$(option);
                                                valToSave[\$optionInput.attr('name')] = \$optionInput.is(':checked')
                                            });

                                            \$subControlAux.find('.test-item').each((_key, test) => {
                                                var testConditions = [];
                                                var testType = \$(test).find('[name=\"test_type\"]').val();
                                                var testMessage = \$(test).find('[name=\"test_message\"]').val();

                                                \$(test).find('.condition-item').each((_key, cond) => {
                                                    testConditions.push({
                                                        field: \$(cond).find('[name=\"condition_field\"]').val(),
                                                        type: \$(cond).find('[name=\"condition_type\"]').val(),
                                                        value: \$(cond).find('[name=\"condition_value\"]').val(),
                                                    });
                                                });

                                                valToSave.tests.push({
                                                    type: testType,
                                                    message: testMessage,
                                                    conditions: testConditions,
                                                });
                                            });
                                        }

                                        // Save values to hidden field
                                        \$subControlAux.find('[name=\"' + controlType + '\"]').val(
                                            \$.isEmptyObject(valToSave) ? '' : JSON.stringify(valToSave)
                                        );

                                        // Save all controls
                                        saveTemplateControlsToHiddenField();
                                    };

                                    // Options control
                                    if(controlType === 'options') {
                                        var controlSubOptionTemplate = Handlebars.compile(\$(\"#developer-template-control-option-item\").html());
                                        (subControlValue) && subControlValue.forEach((scv) => {
                                            var \$subControlOption = \$(controlSubOptionTemplate(scv));

                                            // Add to container
                                            \$subcontrol.find('.options-items .add-option-btn').before(\$subControlOption);
                                        });

                                        // Handle add button
                                        \$subcontrol.find('.add-option-btn').on('click', (ev) => {
                                            // Add to container
                                            \$(ev.currentTarget).parents('.options-items').find('.add-option-btn').before(\$(controlSubOptionTemplate()));
                                        });

                                        // Handle delete
                                        \$subcontrol.on('click', '.del-option-btn', (ev) => {
                                            var \$parentContainer = \$(ev.currentTarget).parents('.control-container');
                                            // Remove option
                                            \$(ev.currentTarget).parents('.option-item').remove();

                                            // Save control
                                            saveSubControl(\$parentContainer);

                                            // Save all controls
                                            saveTemplateControlsToHiddenField();
                                        });
                                    } else if(controlType === 'visibility') {
                                        var controlTestTemplate = Handlebars.compile(\$(\"#developer-template-control-test\").html());
                                        var controlConditionTemplate = Handlebars.compile(\$(\"#developer-template-control-condition\").html());

                                        (subControlValue) && subControlValue.forEach((test) => {
                                            var \$newTest = \$(controlTestTemplate(test));
                                            var \$testContainer = \$subcontrol.find('.' + controlType + '-tests');

                                            test.conditions.forEach((condition) => {
                                                var \$newCondition = \$(controlConditionTemplate(condition));

                                                \$newTest.find('.test-conditions').append(\$newCondition);
                                            });

                                            // Add to container
                                            \$testContainer.append(\$newTest);
                                        });

                                        // Handle add condition button
                                        \$subcontrol.on('click', '.add-condition-btn', (ev) => {
                                            // Add to container
                                            \$(ev.currentTarget).siblings('.test-conditions').append(\$(controlConditionTemplate()));
                                        });

                                        // Handle delete condition
                                        \$subcontrol.on('click', '.del-condition-btn', (ev) => {
                                            var \$parentContainer = \$(ev.currentTarget).parents('.control-container');
                                            // Remove condition
                                            \$(ev.currentTarget).parents('.condition-item').remove();

                                            // Save control
                                            saveSubControl(\$parentContainer);

                                            // Save all controls
                                            saveTemplateControlsToHiddenField();
                                        });

                                        // Handle add test button
                                        \$subcontrol.on('click', '.add-test-btn', (ev) => {
                                            // Add to container
                                            \$(ev.currentTarget).siblings('.test-container').append(\$(controlTestTemplate()));
                                        });

                                        // Handle delete test
                                        \$subcontrol.on('click', '.del-test-btn', (ev) => {
                                            var \$parentContainer = \$(ev.currentTarget).parents('.control-container');
                                            // Remove test
                                            \$(ev.currentTarget).parents('.test-item').remove();

                                            // Save control
                                            saveSubControl(\$parentContainer);

                                            // Save all controls
                                            saveTemplateControlsToHiddenField();
                                        });
                                    } else if (controlType === 'validation') {
                                        var controlTestTemplate = Handlebars.compile(\$(\"#developer-template-control-test\").html());
                                        var controlConditionTemplate = Handlebars.compile(\$(\"#developer-template-control-condition\").html());
                                        var \$subControlContainer = \$subcontrol;

                                        var updateCheckboxes = function() {
                                            var hasTests = \$subControlContainer.find('.validation-tests .test-item').length > 0;

                                            // Show options if we have any test
                                            \$subControlContainer.find('.validation-options').toggle(hasTests)
                                                .toggleClass('toSave', hasTests);

                                            // Handle checkbox change
                                            \$subControlContainer.find('.validation-options input').off().on('change', function() {
                                                saveSubControl(\$subControlContainer);
                                            });
                                        };

                                        (subControlValue && subControlValue.tests) && subControlValue.tests.forEach((test) => {
                                            var \$newTest = \$(controlTestTemplate(test));
                                            var \$testContainer = \$subControlContainer.find('.' + controlType + '-tests');

                                            test.conditions.forEach((condition) => {
                                                var \$newCondition = \$(controlConditionTemplate(condition));

                                                \$newTest.find('.test-conditions').append(\$newCondition);
                                            });

                                            // Add to container
                                            \$testContainer.append(\$newTest);
                                        });

                                        // Handle add condition button
                                        \$subControlContainer.on('click', '.add-condition-btn', (ev) => {
                                            // Add to container
                                            \$(ev.currentTarget).siblings('.test-conditions').append(\$(controlConditionTemplate()));
                                        });

                                        // Handle delete condition
                                        \$subControlContainer.on('click', '.del-condition-btn', (ev) => {
                                            var \$parentContainer = \$(ev.currentTarget).parents('.control-container');
                                            // Remove condition
                                            \$(ev.currentTarget).parents('.condition-item').remove();

                                            // Save control
                                            saveSubControl(\$parentContainer);

                                            // Save all controls
                                            saveTemplateControlsToHiddenField();
                                        });

                                        // Handle add test button
                                        \$subControlContainer.on('click', '.add-test-btn', (ev) => {
                                            // Add to container
                                            \$(ev.currentTarget).siblings('.test-container').append(\$(controlTestTemplate()));

                                            // Update checkboxes
                                            updateCheckboxes();
                                        });

                                        // Handle delete test
                                        \$subControlContainer.on('click', '.del-test-btn', (ev) => {
                                            var \$parentContainer = \$(ev.currentTarget).parents('.control-container');
                                            // Remove test
                                            \$(ev.currentTarget).parents('.test-item').remove();

                                            // Update checkboxes
                                            updateCheckboxes();

                                            // Save control
                                            saveSubControl(\$parentContainer);

                                            // Save all controls
                                            saveTemplateControlsToHiddenField();
                                        });

                                        // Update checkboxes on first load
                                        updateCheckboxes();
                                    }

                                    // Handle change to update values
                                    \$subcontrol.on('change', '.subcontrol-input', (ev) => {
                                        saveSubControl(\$(ev.delegateTarget));
                                    });

                                    \$subcontrol.appendTo(\$control.find('.developer-template-control-form'));
                                }
                            }
                        }
                    }

                    // Handle change to update values
                    \$control.find('.xibo-form-input')
                        .on('change', saveTemplateControlsToHiddenField);

                    // Delete
                    \$control.find('.delete-btn').on('click', (ev) => {
                        \$(ev.currentTarget).parents('.developer-template-control-item').remove();
                        saveTemplateControlsToHiddenField();
                    });

                    // Remove placeholder container
                    hidePlaceholder();

                    // Append to container
                    \$control.appendTo(\$controls);
            }

            function createTemplateControlsFromJSON(\$container, controls) {
                if (controls.length > 0) {
                    controls.forEach((ct) => {
                        addControl(ct);
                    });

                    // Sortable
                    \$controls.sortable({
                        axis: 'x',
                        handle: '.item-move',
                        items: '.developer-template-control-item',
                        containment: 'parent',
                        update: saveTemplateControlsToHiddenField,
                    });
                } else {
                    // Show placeholder
                    showPlaceholder(\$container);
                }
            }

            function saveTemplateControlsToHiddenField() {
                var controlsToSave = [];
                // Get properties from controls
                \$controls.find('.developer-template-control-item').each((_idx, control) => {
                    var newControl = {};
                    \$(control).find('.xibo-form-input').each((_idx, property) => {
                        var controlType = \$(property).data('control-type');
                        var controlTitle = \$(property).data('control-title');
                        var controlValue = \$(property).find('select, input').val(); 

                        if(controlType === 'checkbox') {
                            // If checkbox, get boolean from input
                            controlValue = \$(property).find('input').is(':checked');
                        } else if(
                            \$(property).find('select, input').hasClass('jsonField') &&
                            controlValue != ''
                        ) {
                            // If property was saved as json, parse it here
                            controlValue = JSON.parse(controlValue);
                        }

                        newControl[controlTitle] = controlValue;
                    });

                    // If control type isn't a header, divider or message
                    // and id is empty, don't add it
                    if (
                        !['header', 'divider', 'message'].includes(newControl.type) &&
                        newControl.id === ''
                    ) {
                        console.error('Properties other than header, divider or message need to have id!');
                    } else {
                        controlsToSave.push(newControl);
                    }
                });

                // If there are no properties, show placeholder
                if (\$controls.find('.developer-template-control-item').length === 0) {
                    showPlaceholder(\$controls);
                }

                // Save to hidden input
                \$controlsHiddenInput.val(JSON.stringify(controlsToSave));
            }

            function showPlaceholder(\$container) {
                \$container.append(\$(placeholderTemplate));
            }

            function hidePlaceholder() {
                \$('.developer-template-placeholder').remove();
            }
        });
    </script>

    ";
        // line 1029
        yield "    <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 1029), "html", null, true);
        yield "dist/codeEditor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\" defer></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "developer-template-edit-page.twig";
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
        return array (  1280 => 1029,  795 => 546,  744 => 498,  721 => 478,  691 => 476,  685 => 451,  673 => 448,  648 => 439,  642 => 417,  631 => 414,  590 => 406,  521 => 368,  504 => 302,  476 => 288,  463 => 263,  457 => 253,  450 => 250,  448 => 246,  444 => 245,  430 => 235,  425 => 233,  412 => 223,  408 => 222,  394 => 211,  390 => 210,  376 => 199,  372 => 198,  358 => 187,  354 => 186,  340 => 175,  336 => 174,  322 => 163,  318 => 162,  308 => 155,  294 => 144,  291 => 143,  289 => 142,  285 => 141,  279 => 138,  273 => 135,  269 => 134,  260 => 129,  254 => 128,  249 => 127,  243 => 125,  240 => 119,  234 => 118,  229 => 117,  223 => 115,  217 => 114,  211 => 113,  209 => 110,  208 => 104,  202 => 102,  196 => 101,  191 => 100,  185 => 98,  179 => 97,  174 => 96,  169 => 94,  160 => 88,  152 => 83,  144 => 78,  136 => 73,  128 => 68,  120 => 63,  112 => 58,  104 => 53,  96 => 48,  83 => 38,  78 => 36,  73 => 34,  70 => 33,  66 => 32,  56 => 28,  51 => 24,  49 => 30,  47 => 26,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "developer-template-edit-page.twig", "/var/www/cms/views/developer-template-edit-page.twig");
    }
}
