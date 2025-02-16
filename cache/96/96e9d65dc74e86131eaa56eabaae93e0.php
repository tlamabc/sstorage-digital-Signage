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

/* display-form-set-bandwidth.twig */
class __TwigTemplate_d6674bdb0d234fa5dfffe0d19cbdd24c extends Template
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
        // line 26
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $context["randomId"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 27
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "display-form-set-bandwidth.twig", 27)->unwrap();
        // line 26
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-set-bandwidth.twig", 26);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    ";
        echo __("Bandwidth Limit");
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
        echo __("Save");
        yield ", \$(\"#displayFormSetBandwidthLimit\").submit()
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
            <form id=\"displayFormSetBandwidthLimit\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.setBandwidthLimitMultiple", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\">
                ";
        // line 42
        $context["setBandwidthMultipleMessage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 43
            yield "                    ";
            echo __("Change Bandwidth Limit to all the selected displays.");
            yield "<br>
                ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["setBandwidthMultipleMessage"] ?? null)], 45, $context, $this->getSourceContext());
        yield "
                
                ";
        // line 47
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["ids", ($context["ids"] ?? null)], 47, $context, $this->getSourceContext());
        yield "

                ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Bandwidth limit");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The bandwidth limit that should be applied. Enter 0 for no limit.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\" for=\"bandwidthLimit\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                    <div class=\"col-sm-6\">
                        <input class=\"form-control\" name=\"bandwidthLimit\" type=\"number\" id=\"bandwidthLimit\" min=\"0\" value=\"\"/>
                        <span class=\"help-block\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"col-sm-4\">
                        <select name=\"bandwidthLimitUnits\" class=\"form-control\">
                            <option value=\"kb\">KiB</option>
                            <option value=\"mb\">MiB</option>
                            <option value=\"gb\">GiB</option>
                        </select>
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
        return "display-form-set-bandwidth.twig";
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
        return array (  132 => 55,  126 => 52,  123 => 51,  117 => 50,  112 => 49,  107 => 47,  101 => 45,  94 => 43,  92 => 42,  88 => 41,  84 => 39,  80 => 38,  73 => 35,  68 => 34,  64 => 33,  58 => 30,  54 => 29,  49 => 26,  47 => 27,  45 => 24,  38 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-form-set-bandwidth.twig", "/var/www/cms/views/display-form-set-bandwidth.twig");
    }
}
