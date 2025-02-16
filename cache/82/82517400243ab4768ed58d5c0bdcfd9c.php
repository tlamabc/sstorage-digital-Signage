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

/* command-form-add.twig */
class __TwigTemplate_586fe78b352f6e3fd274d3e14deb83ea extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "command-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "command-form-add.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add Command");
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
        yield ", \$(\"#commandAddForm\").submit()
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
            <form id=\"commandAddForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.add"), "html", null, true);
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
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["command", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 48, $context, $this->getSourceContext());
        yield "

                        ";
        // line 50
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A reference code for this command which is used to identify the command internally.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 52, $context, $this->getSourceContext());
        yield "

                        ";
        // line 54
        $context["fieldId"] = "commandString";
        // line 55
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Command");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Command String for this Command. An override for this can be provided in Display Settings.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", [($context["fieldId"] ?? null), ($context["title"] ?? null), "", ($context["helpText"] ?? null), "XiboCommand"], 57, $context, $this->getSourceContext());
        yield "

                        ";
        // line 59
        $context["fieldId"] = "validationString";
        // line 60
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Validation");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Validation String for this Command. An override for this can be provided in Display Settings.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", [($context["fieldId"] ?? null), ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 62, $context, $this->getSourceContext());
        yield "

                        ";
        // line 64
        $context["options"] = [["optionid" => "android", "option" => "Android"], ["optionid" => "chromeOS", "option" => "ChromeOS"], ["optionid" => "linux", "option" => "Linux"], ["optionid" => "sssp", "option" => "Tizen"], ["optionid" => "lg", "option" => "webOS"], ["optionid" => "windows", "option" => "Windows"]];
        // line 72
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Available on");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Leave empty if this command should be available on all types of Display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        yield "
                        ";
        // line 75
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["availableOn[]", "dropdownmulti", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option", ($context["helpText"] ?? null), "selectPicker"], 75, $context, $this->getSourceContext());
        yield "

                        ";
        // line 77
        $context["options"] = [["optionid" => "never", "option" => "Never"], ["optionid" => "success", "option" => "Success"], ["optionid" => "failure", "option" => "Failure"], ["optionid" => "always", "option" => "Always"]];
        // line 83
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Create Alert On");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("On command execution, when should a Display alert be created?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        yield "
                        ";
        // line 86
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["createAlertOn", "single", ($context["title"] ?? null), "never", ($context["options"] ?? null), "optionid", "option", ($context["helpText"] ?? null)], 86, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"description\">
                        ";
        // line 90
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("This should be a textual description of what the command is trying to achieve. It should not be the command string.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "", 10], 92, $context, $this->getSourceContext());
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
        return "command-form-add.twig";
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
        return array (  233 => 92,  227 => 91,  222 => 90,  215 => 86,  212 => 85,  206 => 84,  200 => 83,  198 => 77,  193 => 75,  190 => 74,  184 => 73,  178 => 72,  176 => 64,  170 => 62,  164 => 61,  158 => 60,  156 => 59,  150 => 57,  144 => 56,  138 => 55,  136 => 54,  130 => 52,  124 => 51,  119 => 50,  113 => 48,  107 => 47,  102 => 46,  96 => 43,  91 => 41,  87 => 40,  82 => 37,  78 => 36,  71 => 33,  66 => 32,  62 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "command-form-add.twig", "/var/www/cms/views/command-form-add.twig");
    }
}
