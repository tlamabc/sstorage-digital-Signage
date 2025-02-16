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

/* module-form-transition.twig */
class __TwigTemplate_d6fc869b0f354ebbd3be11fe1dfe97ff extends Template
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
            'formFieldActions' => [$this, 'block_formFieldActions'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "module-form-transition.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "module-form-transition.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "name", [], "any", false, false, false, 28);
        // line 29
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Edit %type% Transition for %name%"), array("%type%" => ($context["type"] ?? null), "%name%" => ($context["name"] ?? null), ));
        return; yield '';
    }

    // line 32
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 34
        echo __("Save");
        yield ", \$(\"#moduleTransitionEditForm\").submit()
";
        return; yield '';
    }

    // line 37
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    [{
    \"field\": \"transitionType\",
    \"trigger\": \"init\",
    \"value\": 0,
    \"operation\": \"equals\",
    \"actions\": {
    \".transition-group\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"transitionType\",
    \"trigger\": \"init\",
    \"value\": 0,
    \"operation\": \"not\",
    \"actions\": {
    \".transition-group\": { \"display\": \"\" }
    }
    },{
    \"field\": \"transitionType\",
    \"trigger\": \"change\",
    \"value\": 0,
    \"operation\": \"equals\",
    \"actions\": {
    \".transition-group\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"transitionType\",
    \"trigger\": \"change\",
    \"value\": 0,
    \"operation\": \"not\",
    \"actions\": {
    \".transition-group\": { \"display\": \"\" }
    }
    }]
";
        return; yield '';
    }

    // line 73
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"moduleTransitionEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.transition.edit", ["type" => ($context["type"] ?? null), "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "widgetId", [], "any", false, false, false, 76)]), "html", null, true);
        yield "\">
                ";
        // line 77
        if ((($context["type"] ?? null) == "in")) {
            // line 78
            yield "                    ";
            $context["transitionsWithEmpty"] = Twig\Extension\CoreExtension::merge([["code" => "", "transition" => ""]], CoreExtension::getAttribute($this->env, $this->source, ($context["transitions"] ?? null), "in", [], "any", false, false, false, 78));
            // line 79
            yield "                    ";
            $context["trans"] = CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "getOptionValue", ["transIn", null], "method", false, false, false, 79);
            // line 80
            yield "                    ";
            $context["transDuration"] = CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "getOptionValue", ["transInDuration", null], "method", false, false, false, 80);
            // line 81
            yield "                    ";
            $context["transDirection"] = CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "getOptionValue", ["transInDirection", null], "method", false, false, false, 81);
            // line 82
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("What transition should be applied when this item starts?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 83
            yield "                ";
        } elseif ((($context["type"] ?? null) == "out")) {
            // line 84
            yield "                    ";
            $context["transitionsWithEmpty"] = Twig\Extension\CoreExtension::merge([["transitionId" => null, "transition" => ""]], CoreExtension::getAttribute($this->env, $this->source, ($context["transitions"] ?? null), "out", [], "any", false, false, false, 84));
            // line 85
            yield "                    ";
            $context["trans"] = CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "getOptionValue", ["transOut", null], "method", false, false, false, 85);
            // line 86
            yield "                    ";
            $context["transDuration"] = CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "getOptionValue", ["transOutDuration", null], "method", false, false, false, 86);
            // line 87
            yield "                    ";
            $context["transDirection"] = CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "getOptionValue", ["transOutDirection", null], "method", false, false, false, 87);
            // line 88
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("What transition should be applied when this item finishes?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            yield "                ";
        } else {
            // line 90
            yield "                    ";
            $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Unknown Transition Type Requested");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 91
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 91, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 93
        yield "
                ";
        // line 94
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Transition");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["transitionType", "single", ($context["title"] ?? null), ($context["trans"] ?? null), ($context["transitionsWithEmpty"] ?? null), "code", "transition", ($context["helpText"] ?? null)], 95, $context, $this->getSourceContext());
        yield "

                ";
        // line 97
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Duration");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The duration for this transition, in milliseconds.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["transitionDuration", ($context["title"] ?? null), ($context["transDuration"] ?? null), ($context["helpText"] ?? null)], 99, $context, $this->getSourceContext());
        yield "

                ";
        // line 101
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Direction");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The direction for this transition. Only appropriate for transitions that move, such as Fly.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["transitionDirection", "single", ($context["title"] ?? null), ($context["transDirection"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["transitions"] ?? null), "compassPoints", [], "any", false, false, false, 103), "id", "name", ($context["helpText"] ?? null), "transition-group transition-direction"], 103, $context, $this->getSourceContext());
        yield "
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
        return "module-form-transition.twig";
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
        return array (  233 => 103,  227 => 102,  222 => 101,  216 => 99,  210 => 98,  205 => 97,  199 => 95,  194 => 94,  191 => 93,  185 => 91,  179 => 90,  176 => 89,  170 => 88,  167 => 87,  164 => 86,  161 => 85,  158 => 84,  155 => 83,  149 => 82,  146 => 81,  143 => 80,  140 => 79,  137 => 78,  135 => 77,  131 => 76,  127 => 74,  123 => 73,  82 => 37,  75 => 34,  70 => 33,  66 => 32,  60 => 29,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "module-form-transition.twig", "/var/www/cms/views/module-form-transition.twig");
    }
}
