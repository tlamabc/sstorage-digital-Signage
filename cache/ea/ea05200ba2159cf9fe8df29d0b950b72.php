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

/* template-form-add.twig */
class __TwigTemplate_f370a84aa6c0fd70fa48c440e4044b6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
            'callBack' => [$this, 'block_callBack'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "template-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "template-form-add.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add Template");
        return; yield '';
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 33
        echo __("Save");
        yield ", \$(\"#templateAddForm\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "templateFormOpen";
        return; yield '';
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#description\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Description");
        yield "</span></a></li>
            </ul>
            <form id=\"templateAddForm\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.add"), "html", null, true);
        yield "\" data-redirect=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.designer", ["id" => ":id"]), "html", null, true);
        yield "?isTemplateEditor=1\" data-gettag=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">

                        ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 49)) {
            // line 50
            yield "                            <div class=\"form-group row\">
                                <label class=\"col-sm-2 control-label\">";
            // line 51
            echo __("Folder");
            yield "</label>
                                <div class=\"col-sm-10\">
                                    <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 53
            echo __("Select Folder");
            yield "</button>
                                    <span id=\"selectedFormFolder\"></span>
                                </div>
                            </div>
                            ";
            // line 57
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId"], 57, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 59
        yield "
                        ";
        // line 60
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name of the Template - (1 - 50 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 62, $context, $this->getSourceContext());
        yield "

                        ";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 64)) {
            // line 65
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 66
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags for this Template - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "tags-with-value"], 67, $context, $this->getSourceContext());
            yield "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 71
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 72
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 72, $context, $this->getSourceContext());
            yield "

                            <div id=\"tagValueContainer\">
                                ";
            // line 75
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 77
            yield "                                ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 77, $context, $this->getSourceContext());
            yield "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 81
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            yield "</p>
                            </div>
                        ";
        }
        // line 84
        yield "
                        ";
        // line 85
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Resolution");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Choose the resolution this Template should be designed for.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["resolutionId", "single", ($context["title"] ?? null), "", ($context["resolutions"] ?? null), "resolutionId", "resolution", ($context["helpText"] ?? null), "resolution-group"], 87, $context, $this->getSourceContext());
        yield "

                        ";
        // line 89
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("You can also add a template from an existing Layout from the Layout Editor."), "alert alert-info"], 89, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"description\">
                        ";
        // line 92
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("An optional description of the Template. (1 - 250 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 94, $context, $this->getSourceContext());
        yield "
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template-form-add.twig";
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
        return array (  254 => 94,  248 => 93,  243 => 92,  237 => 89,  231 => 87,  225 => 86,  220 => 85,  217 => 84,  211 => 81,  203 => 77,  197 => 76,  192 => 75,  185 => 72,  180 => 71,  172 => 67,  166 => 66,  160 => 65,  158 => 64,  152 => 62,  146 => 61,  141 => 60,  138 => 59,  133 => 57,  126 => 53,  121 => 51,  118 => 50,  116 => 49,  105 => 45,  100 => 43,  96 => 42,  91 => 39,  87 => 38,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "template-form-add.twig", "/var/www/cms/views/template-form-add.twig");
    }
}
