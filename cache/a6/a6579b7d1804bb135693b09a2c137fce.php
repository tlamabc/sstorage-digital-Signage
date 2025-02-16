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

/* display-form-addViaCode.twig */
class __TwigTemplate_56c858aa1c526b1d221d5f76beaff7a4 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "display-form-addViaCode.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-addViaCode.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add Display via Code");
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
        yield ", \$(\"#displayAddViaCodeForm\").submit()
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
            <form id=\"displayAddViaCodeForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.addViaCode"), "html", null, true);
        yield "\">
                <div class=\"alert alert-info\">
                    ";
        // line 41
        $context["message"] = __("After submitting this form with valid code, your CMS Address and Key will be sent and stored in the temporary storage in our Authentication Service.");
        // line 42
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 42, $context, $this->getSourceContext());
        yield "
                    ";
        // line 43
        $context["message2"] = __("The Player linked to the submitted code, will make regular calls to our Authentication Service to retrive the CMS details and configure itself with them.
                     Your details are removed from the temporary storage once the Player is configured");
        // line 45
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message2"] ?? null)], 45, $context, $this->getSourceContext());
        yield "
                    ";
        // line 46
        $context["message3"] = __("Please note that your CMS needs to make a successful call to our Authentication Service for this feature to work.");
        // line 47
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message3"] ?? null)], 47, $context, $this->getSourceContext());
        yield "
                </div>

                ";
        // line 50
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please provide the code displayed on the Player screen");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["user_code", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 52, $context, $this->getSourceContext());
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
        return "display-form-addViaCode.twig";
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
        return array (  126 => 52,  120 => 51,  115 => 50,  108 => 47,  106 => 46,  101 => 45,  98 => 43,  93 => 42,  91 => 41,  86 => 39,  82 => 37,  78 => 36,  71 => 33,  66 => 32,  62 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-form-addViaCode.twig", "/var/www/cms/views/display-form-addViaCode.twig");
    }
}
