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

/* command-form-edit.twig */
class __TwigTemplate_8ce4a423bb36f73a1222544c9b7ee5c9 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "command-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "command-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit Command");
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
        yield ", \$(\"#commandEditForm\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 40
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#description\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 41
        echo __("Description");
        yield "</span></a></li>
            </ul>
            <form id=\"commandEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "commandId", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 46
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this Command");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["command", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "command", [], "any", false, false, false, 48), ($context["helpText"] ?? null), "", "required"], 48, $context, $this->getSourceContext());
        yield "

                        ";
        // line 50
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A reference code for this command which is used to identify the command internally.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "
                        ";
        // line 53
        yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["code", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "code", [], "any", false, false, false, 53), ($context["helpText"] ?? null), "", "required"], 53, $context, $this->getSourceContext());
        yield "

                        ";
        // line 55
        $context["fieldId"] = "commandString";
        // line 56
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Command");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Command String for this Command. An override for this can be provided in Display Settings.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", [($context["fieldId"] ?? null), ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "commandString", [], "any", false, false, false, 58), ($context["helpText"] ?? null), "XiboCommand"], 58, $context, $this->getSourceContext());
        yield "

                        ";
        // line 60
        $context["fieldId"] = "validationString";
        // line 61
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Validation");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Validation String for this Command. An override for this can be provided in Display Settings.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", [($context["fieldId"] ?? null), ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "validationString", [], "any", false, false, false, 63), ($context["helpText"] ?? null)], 63, $context, $this->getSourceContext());
        yield "

                        ";
        // line 65
        $context["options"] = [["optionid" => "android", "option" => "Android"], ["optionid" => "chromeOS", "option" => "ChromeOS"], ["optionid" => "linux", "option" => "Linux"], ["optionid" => "sssp", "option" => "Tizen"], ["optionid" => "lg", "option" => "webOS"], ["optionid" => "windows", "option" => "Windows"]];
        // line 73
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Available on");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Leave empty if this command should be available on all types of Display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        yield "
                        ";
        // line 76
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["availableOn[]", "dropdownmulti", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "getAvailableOn", [], "method", false, false, false, 76), ($context["options"] ?? null), "optionid", "option", ($context["helpText"] ?? null), "selectPicker"], 76, $context, $this->getSourceContext());
        yield "

                        ";
        // line 78
        $context["options"] = [["optionid" => "never", "option" => "Never"], ["optionid" => "success", "option" => "Success"], ["optionid" => "failure", "option" => "Failure"], ["optionid" => "always", "option" => "Always"]];
        // line 84
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Create Alert On");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("On command execution, when should a Display alert be created?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        yield "
                        ";
        // line 87
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["createAlertOn", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "createAlertOn", [], "any", false, false, false, 87), ($context["options"] ?? null), "optionid", "option", ($context["helpText"] ?? null)], 87, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"description\">
                        ";
        // line 91
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("This should be a textual description of what the command is trying to achieve. It should not be the command string.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "description", [], "any", false, false, false, 93), ($context["helpText"] ?? null), "", "", 10], 93, $context, $this->getSourceContext());
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
        return "command-form-edit.twig";
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
        return array (  235 => 93,  229 => 92,  224 => 91,  217 => 87,  214 => 86,  208 => 85,  202 => 84,  200 => 78,  195 => 76,  192 => 75,  186 => 74,  180 => 73,  178 => 65,  172 => 63,  166 => 62,  160 => 61,  158 => 60,  152 => 58,  146 => 57,  140 => 56,  138 => 55,  133 => 53,  130 => 52,  124 => 51,  119 => 50,  113 => 48,  107 => 47,  102 => 46,  96 => 43,  91 => 41,  87 => 40,  82 => 37,  78 => 36,  71 => 33,  66 => 32,  62 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "command-form-edit.twig", "/var/www/cms/views/command-form-edit.twig");
    }
}
