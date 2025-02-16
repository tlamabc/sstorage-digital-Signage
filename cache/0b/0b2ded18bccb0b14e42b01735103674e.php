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

/* daypart-form-edit.twig */
class __TwigTemplate_c2c26f545ea8e1527f01954f616ce90b extends Template
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
            'extra' => [$this, 'block_extra'],
            'callBack' => [$this, 'block_callBack'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "daypart-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "daypart-form-edit.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Edit Daypart");
        return; yield '';
    }

    // line 30
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 32
        echo __("Save");
        yield ", \$(\"#dayPartEditForm\").submit()
";
        return; yield '';
    }

    // line 35
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield json_encode(($context["extra"] ?? null));
        return; yield '';
    }

    // line 37
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "dayPartFormOpen";
        return; yield '';
    }

    // line 39
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#description\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Description");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#exceptions\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Exceptions");
        yield "</span></a></li>
            </ul>
            <form id=\"dayPartEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dayPart"] ?? null), "dayPartId", [], "any", false, false, false, 47)]), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 50
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this Daypart");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dayPart"] ?? null), "name", [], "any", false, false, false, 52), ($context["helpText"] ?? null), "", "required"], 52, $context, $this->getSourceContext());
        yield "

                        ";
        // line 54
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Retired");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Retire? It will no longer be visible when scheduling");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isRetired", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dayPart"] ?? null), "isRetired", [], "any", false, false, false, 56), ($context["helpText"] ?? null)], 56, $context, $this->getSourceContext());
        yield "

                        ";
        // line 58
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Start Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enter the start time for this daypart");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["startTime", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dayPart"] ?? null), "startTime", [], "any", false, false, false, 60), ($context["helpText"] ?? null)], 60, $context, $this->getSourceContext());
        yield "

                        ";
        // line 62
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("End Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enter the end time for this daypart. If the end time is before the start time, then the daypart will cross midnight.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["endTime", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dayPart"] ?? null), "endTime", [], "any", false, false, false, 64), ($context["helpText"] ?? null)], 64, $context, $this->getSourceContext());
        yield "

                        ";
        // line 66
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("If this daypart is already in use, the events will be adjusted to use the new times provided. If used on a recurring event and that event has already recurred. The event will be split in two and the future event time adjusted.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["title"] ?? null)], 67, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"description\">
                        ";
        // line 70
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A Description of Daypart");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dayPart"] ?? null), "description", [], "any", false, false, false, 72), ($context["helpText"] ?? null)], 72, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"exceptions\">
                        ";
        // line 75
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("If there are any exceptions enter them below by selecting the Day from the list and entering a start/end time.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["title"] ?? null)], 76, $context, $this->getSourceContext());
        yield "
                        <div id=\"dayPartExceptions\">

                        </div>
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
        return "daypart-form-edit.twig";
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
        return array (  227 => 76,  222 => 75,  215 => 72,  209 => 71,  204 => 70,  197 => 67,  192 => 66,  186 => 64,  180 => 63,  175 => 62,  169 => 60,  163 => 59,  158 => 58,  152 => 56,  146 => 55,  141 => 54,  135 => 52,  129 => 51,  124 => 50,  118 => 47,  113 => 45,  109 => 44,  105 => 43,  100 => 40,  96 => 39,  88 => 37,  80 => 35,  73 => 32,  68 => 31,  64 => 30,  58 => 27,  54 => 26,  49 => 23,  47 => 24,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "daypart-form-edit.twig", "/var/www/cms/views/daypart-form-edit.twig");
    }
}
