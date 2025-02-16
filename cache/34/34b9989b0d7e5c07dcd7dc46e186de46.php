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

/* schedule-recurrence-form-delete.twig */
class __TwigTemplate_c5d3b3a067f8ef2e82b43bf40b3e8c53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'callBack' => [$this, 'block_callBack'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-recurrence-form-delete.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "schedule-recurrence-form-delete.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Delete Recurring Event.");
        return; yield '';
    }

    // line 31
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "setupScheduleForm";
        return; yield '';
    }

    // line 33
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 35
        echo __("Yes");
        yield ", \$(\"#scheduleRecurrenceDeleteForm\").submit()
";
        return; yield '';
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"scheduleRecurrenceDeleteForm\" class=\"form-horizontal\" method=\"delete\" action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.recurrence.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "eventId", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\">
                ";
        // line 42
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Are you sure you want to delete this recurring event? Clicking Yes will delete this event from <b>all</b> displays.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 43, $context, $this->getSourceContext());
        yield "

                ";
        // line 45
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["eventStart", ($context["eventStart"] ?? null)], 45, $context, $this->getSourceContext());
        yield "
                ";
        // line 46
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["eventEnd", ($context["eventEnd"] ?? null)], 46, $context, $this->getSourceContext());
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
        return "schedule-recurrence-form-delete.twig";
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
        return array (  114 => 46,  110 => 45,  104 => 43,  99 => 42,  95 => 41,  91 => 39,  87 => 38,  80 => 35,  75 => 34,  71 => 33,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-recurrence-form-delete.twig", "/var/www/cms/views/schedule-recurrence-form-delete.twig");
    }
}
