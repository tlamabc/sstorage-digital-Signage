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

/* task-form-edit.twig */
class __TwigTemplate_a7343e0126af3fea74b5b6ecfb3bd889 extends Template
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
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "task-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "task-form-edit.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Edit Task");
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
        yield ", \$(\"#taskEdit\").submit()
";
        return; yield '';
    }

    // line 35
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 39
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#options\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 40
        echo __("Options");
        yield "</span></a></li>
            </ul>
            <form id=\"taskEdit\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("task.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "taskId", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 45
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this Task");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "name", [], "any", false, false, false, 47), ($context["helpText"] ?? null), "", "required"], 47, $context, $this->getSourceContext());
        yield "

                        ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Schedule");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The schedule for this task in CRON syntax");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["schedule", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "schedule", [], "any", false, false, false, 51), ($context["helpText"] ?? null), "", "required"], 51, $context, $this->getSourceContext());
        yield "

                        ";
        // line 53
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Active");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is the task active?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isActive", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "isActive", [], "any", false, false, false, 55), ($context["helpText"] ?? null)], 55, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"options\">
                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "options", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["option"] => $context["value"]) {
            // line 59
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", [$context["option"], $context["option"], $context["value"]], 59, $context, $this->getSourceContext());
            yield "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                    </div>
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
        return "task-form-edit.twig";
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
        return array (  167 => 61,  158 => 59,  154 => 58,  147 => 55,  141 => 54,  136 => 53,  130 => 51,  124 => 50,  119 => 49,  113 => 47,  107 => 46,  102 => 45,  96 => 42,  91 => 40,  87 => 39,  82 => 36,  78 => 35,  71 => 32,  66 => 31,  62 => 30,  56 => 27,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "task-form-edit.twig", "/var/www/cms/views/task-form-edit.twig");
    }
}
