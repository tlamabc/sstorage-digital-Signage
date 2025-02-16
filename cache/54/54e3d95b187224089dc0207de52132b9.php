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

/* displayprofile-form-edit-command-fields.twig */
class __TwigTemplate_3b75c5484882196a86ec704adecd2d94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit-command-fields.twig", 23)->unwrap();
        // line 24
        yield from $this->unwrap()->yieldBlock('formHtml', $context, $blocks);
        return; yield '';
    }

    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        yield "    <div class=\"accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["commands"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 27
            yield "        <div class=\"card\">
            <div class=\"card-header\" role=\"tab\" id=\"heading";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "commandId", [], "any", false, false, false, 28), "html", null, true);
            yield "\">
                <h4 class=\"card-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "commandId", [], "any", false, false, false, 30), "html", null, true);
            yield "\"
                       aria-expanded=\"true\" aria-controls=\"collapse";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "commandId", [], "any", false, false, false, 31), "html", null, true);
            yield "\">
                        ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "command", [], "any", false, false, false, 32), "html", null, true);
            yield " | ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "code", [], "any", false, false, false, 32), "html", null, true);
            yield "
                    </a>
                </h4>
            </div>
            <div id=\"collapse";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "commandId", [], "any", false, false, false, 36), "html", null, true);
            yield "\" class=\"collapse\"
                 role=\"tabpanel\" aria-labelledby=\"heading";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "commandId", [], "any", false, false, false, 37), "html", null, true);
            yield "\" aria-expanded=\"false\">
                <div class=\"card-body\">
                    ";
            // line 39
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Name");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 40
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["command", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "command", [], "any", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "description", [], "any", false, false, false, 40)], 40, $context, $this->getSourceContext());
            yield "

                    ";
            // line 42
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "commandString", [], "any", false, false, false, 42) != "")) {
                // line 43
                yield "                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["", "", __("This Command has a default Command String."), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "commandString", [], "any", false, false, false, 43)], 43, $context, $this->getSourceContext());
                yield "
                    ";
            }
            // line 45
            yield "
                    ";
            // line 46
            $context["fieldId"] = ("commandString_" . CoreExtension::getAttribute($this->env, $this->source, $context["field"], "commandId", [], "any", false, false, false, 46));
            // line 47
            yield "                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Command");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 48
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Command String for this Command on this display");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", [($context["fieldId"] ?? null), ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "commandStringDisplayProfile", [], "any", false, false, false, 49), ($context["helpText"] ?? null), "XiboCommand"], 49, $context, $this->getSourceContext());
            yield "

                    ";
            // line 51
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "validationString", [], "any", false, false, false, 51) != "")) {
                // line 52
                yield "                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["", "", __("This Command has a default Valildation String."), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "validationString", [], "any", false, false, false, 52)], 52, $context, $this->getSourceContext());
                yield "
                    ";
            }
            // line 54
            yield "
                    ";
            // line 55
            $context["fieldId"] = ("validationString_" . CoreExtension::getAttribute($this->env, $this->source, $context["field"], "commandId", [], "any", false, false, false, 55));
            // line 56
            yield "                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Validation");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Validation String for this Command on this display");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 58
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", [($context["fieldId"] ?? null), ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "validationStringDisplayProfile", [], "any", false, false, false, 58), ($context["helpText"] ?? null)], 58, $context, $this->getSourceContext());
            yield "

                    ";
            // line 60
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "createAlertOn", [], "any", false, false, false, 60) != "")) {
                // line 61
                yield "                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["", "", __("This Command has a default setting for creating alerts."), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "createAlertOn", [], "any", false, false, false, 61)], 61, $context, $this->getSourceContext());
                yield "
                    ";
            }
            // line 63
            yield "
                    ";
            // line 64
            $context["fieldId"] = ("createAlertOn_" . CoreExtension::getAttribute($this->env, $this->source, $context["field"], "commandId", [], "any", false, false, false, 64));
            // line 65
            yield "                    ";
            $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "never", "option" => "Never"], ["optionid" => "success", "option" => "Success"], ["optionid" => "failure", "option" => "Failure"], ["optionid" => "always", "option" => "Always"]];
            // line 72
            yield "                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Create Alert On");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On command execution, when should a Display alert be created?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 74
            yield "
                    ";
            // line 75
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", [($context["fieldId"] ?? null), "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "createAlertOnDisplayProfile", [], "any", false, false, false, 75), ($context["options"] ?? null), "optionid", "option", ($context["helpText"] ?? null)], 75, $context, $this->getSourceContext());
            yield "
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "displayprofile-form-edit-command-fields.twig";
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
        return array (  194 => 75,  191 => 74,  185 => 73,  179 => 72,  176 => 65,  174 => 64,  171 => 63,  165 => 61,  163 => 60,  157 => 58,  151 => 57,  145 => 56,  143 => 55,  140 => 54,  134 => 52,  132 => 51,  126 => 49,  120 => 48,  114 => 47,  112 => 46,  109 => 45,  103 => 43,  101 => 42,  95 => 40,  90 => 39,  85 => 37,  81 => 36,  72 => 32,  68 => 31,  64 => 30,  59 => 28,  56 => 27,  52 => 26,  49 => 25,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit-command-fields.twig", "/var/www/cms/views/displayprofile-form-edit-command-fields.twig");
    }
}
