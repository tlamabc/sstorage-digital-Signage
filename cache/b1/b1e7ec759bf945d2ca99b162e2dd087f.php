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

/* reportschedule-form-toggleactive.twig */
class __TwigTemplate_f254cbb2f485281411796cc3ada0afb8 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "reportschedule-form-toggleactive.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "reportschedule-form-toggleactive.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["reportSchedule"] ?? null), "isActive", [], "any", false, false, false, 28) == 1)) {
            // line 29
            yield "        ";
            echo __("Pause Report Schedule");
            // line 30
            yield "    ";
        } else {
            // line 31
            yield "        ";
            echo __("Resume Report Schedule");
            // line 32
            yield "    ";
        }
        return; yield '';
    }

    // line 35
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 37
        echo __("Yes");
        yield ", \$(\"#reportScheduleToggleActiveForm\").submit()
";
        return; yield '';
    }

    // line 40
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"reportScheduleToggleActiveForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.toggleactive", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["reportSchedule"] ?? null), "reportScheduleId", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\">
                ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["reportSchedule"] ?? null), "isActive", [], "any", false, false, false, 44) == 1)) {
            // line 45
            yield "                    ";
            $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Are you sure you want to pause this report schedule?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            yield "                ";
        } else {
            // line 47
            yield "                    ";
            $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Are you sure you want to resume this report schedule?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 48
            yield "                ";
        }
        // line 49
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 49, $context, $this->getSourceContext());
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
        return "reportschedule-form-toggleactive.twig";
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
        return array (  122 => 49,  119 => 48,  113 => 47,  110 => 46,  104 => 45,  102 => 44,  98 => 43,  94 => 41,  90 => 40,  83 => 37,  78 => 36,  74 => 35,  68 => 32,  65 => 31,  62 => 30,  59 => 29,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "reportschedule-form-toggleactive.twig", "/var/www/cms/views/reportschedule-form-toggleactive.twig");
    }
}
