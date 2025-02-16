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

/* displayprofile-form-edit-common-fields.twig */
class __TwigTemplate_f77b9ef5a5788d75e77073bdd3ac1894 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit-common-fields.twig", 23)->unwrap();
        // line 24
        yield "
";
        // line 25
        yield from $this->unwrap()->yieldBlock('formHtml', $context, $blocks);
        return; yield '';
    }

    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name of the Profile - (1 - 50 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "name", [], "any", false, false, false, 28), ($context["helpText"] ?? null)], 28, $context, $this->getSourceContext());
        yield "

";
        // line 30
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Default Profile?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is this the default profile for all Displays of this type? Only 1 profile can be the default.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDefault", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "isDefault", [], "any", false, false, false, 32), ($context["helpText"] ?? null)], 32, $context, $this->getSourceContext());
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "displayprofile-form-edit-common-fields.twig";
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
        return array (  77 => 32,  72 => 31,  67 => 30,  62 => 28,  57 => 27,  52 => 26,  44 => 25,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit-common-fields.twig", "/var/www/cms/views/displayprofile-form-edit-common-fields.twig");
    }
}
