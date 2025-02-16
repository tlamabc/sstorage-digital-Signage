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

/* display-form-moveCms.twig */
class __TwigTemplate_9c17469afc050957fc7db8c7daee0859 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "display-form-moveCms.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-moveCms.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Transfer to another CMS");
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
        yield ", \$(\"#displayMoveCmsForm\").submit()
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
            <form id=\"displayMoveCmsForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.moveCms", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\">

                ";
        // line 40
        $context["message"] = __("Please note: Once the CMS Address and Key are authenticated in this form the Display will attempt to register with the CMS Instance details entered. Once transferred the Display will stop communicating with this CMS Instance.");
        // line 41
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null), "alert alert-info"], 41, $context, $this->getSourceContext());
        yield "

                ";
        // line 43
        $context["title"] = __("New CMS Address");
        // line 44
        yield "                ";
        $context["helpText"] = __("Full URL to the new CMS, including https://");
        // line 45
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["newCmsAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "newCmsAddress", [], "any", false, false, false, 45), ($context["helpText"] ?? null)], 45, $context, $this->getSourceContext());
        yield "

                ";
        // line 47
        $context["title"] = __("New CMS Key");
        // line 48
        yield "                ";
        $context["helpText"] = __("CMS Secret Key associated with the provided new CMS Address");
        // line 49
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["newCmsKey", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "newCmsKey", [], "any", false, false, false, 49), ($context["helpText"] ?? null)], 49, $context, $this->getSourceContext());
        yield "

                ";
        // line 51
        $context["title"] = __("Two Factor Code");
        // line 52
        yield "                ";
        $context["helpText"] = __("Please enter your Two Factor authentication code");
        // line 53
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["twoFactorCode", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 53, $context, $this->getSourceContext());
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
        return "display-form-moveCms.twig";
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
        return array (  126 => 53,  123 => 52,  121 => 51,  115 => 49,  112 => 48,  110 => 47,  104 => 45,  101 => 44,  99 => 43,  93 => 41,  91 => 40,  86 => 38,  82 => 36,  78 => 35,  71 => 32,  66 => 31,  62 => 30,  56 => 27,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-form-moveCms.twig", "/var/www/cms/views/display-form-moveCms.twig");
    }
}
