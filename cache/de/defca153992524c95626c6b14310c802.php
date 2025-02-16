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

/* layout-form-clear.twig */
class __TwigTemplate_6e0b813080335eb0f8eb52a14807ec83 extends Template
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
        // line 2
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-clear.twig", 3)->unwrap();
        // line 2
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-clear.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        echo __("Clear Canvas");
        return; yield '';
    }

    // line 9
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        echo __("No");
        yield ", XiboDialogClose()
    ";
        // line 11
        echo __("Yes");
        yield ", \$(\"#layoutClearForm\").submit()
";
        return; yield '';
    }

    // line 14
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutClearForm\" class=\"XiboForm form-horizontal\" method=\"clear\" action=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.clear", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\">
                ";
        // line 18
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Are you sure you want to start again with a blank canvas? All elements and widgets will be removed from your draft layout.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 19, $context, $this->getSourceContext());
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
        return "layout-form-clear.twig";
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
        return array (  95 => 19,  90 => 18,  86 => 17,  82 => 15,  78 => 14,  71 => 11,  66 => 10,  62 => 9,  56 => 6,  52 => 5,  47 => 2,  45 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-clear.twig", "/var/www/cms/views/layout-form-clear.twig");
    }
}
