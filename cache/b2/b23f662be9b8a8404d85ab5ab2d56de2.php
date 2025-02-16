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

/* usergroup-form-copy.twig */
class __TwigTemplate_7e5f8f661e6b0db400bd65f66e3be407 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "usergroup-form-copy.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "usergroup-form-copy.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Copy User Group");
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
        yield ", \$(\"#userGroupCopyForm\").submit()
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
            <form id=\"userGroupCopyForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.copy", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "groupId", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\">
                ";
        // line 40
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this User Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["group", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required maxlength='50'"], 42, $context, $this->getSourceContext());
        yield "

                ";
        // line 44
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Copy Members?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Assign the members to the new group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["copyMembers", ($context["title"] ?? null), "0", ($context["helpText"] ?? null)], 46, $context, $this->getSourceContext());
        yield "

                ";
        // line 48
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Copy existing Feature sets?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Assign the feature sets to the new group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["copyFeatures", ($context["title"] ?? null), "1", ($context["helpText"] ?? null)], 50, $context, $this->getSourceContext());
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
        return "usergroup-form-copy.twig";
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
        return array (  135 => 50,  129 => 49,  124 => 48,  118 => 46,  112 => 45,  107 => 44,  101 => 42,  95 => 41,  90 => 40,  86 => 39,  82 => 37,  78 => 36,  71 => 33,  66 => 32,  62 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "usergroup-form-copy.twig", "/var/www/cms/views/usergroup-form-copy.twig");
    }
}
