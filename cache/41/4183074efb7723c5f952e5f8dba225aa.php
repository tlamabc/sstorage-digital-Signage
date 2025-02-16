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

/* module-form-settings.twig */
class __TwigTemplate_dcb1d138baca94f0c38c04ab34a57b2a extends Template
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
            'extra' => [$this, 'block_extra'],
            'callBack' => [$this, 'block_callBack'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "module-form-settings.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "module-form-settings.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit Module");
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
        yield ", \$(\"#moduleEditForm\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield json_encode(($context["module"] ?? null));
        return; yield '';
    }

    // line 38
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "moduleEditFormOpen";
        return; yield '';
    }

    // line 40
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"moduleEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.settings", ["id" => ($context["moduleId"] ?? null)]), "html", null, true);
        yield "\">

                ";
        // line 45
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Preview Enabled?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When Preview is Enabled users will be able to see a preview in the layout editor.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["previewEnabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "previewEnabled", [], "any", false, false, false, 47), ($context["helpText"] ?? null), "", "", (CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "allowPreview", [], "any", false, false, false, 47) == 0)], 47, $context, $this->getSourceContext());
        yield "

                ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enabled?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When Enabled users will be able to add media using this module.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["enabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "enabled", [], "any", false, false, false, 51), ($context["helpText"] ?? null)], 51, $context, $this->getSourceContext());
        yield "

                ";
        // line 53
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Default Duration");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The default duration for Widgets of this Module when the user has elected to not set a specific duration.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["defaultDuration", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "defaultDuration", [], "any", false, false, false, 55), ($context["helpText"] ?? null)], 55, $context, $this->getSourceContext());
        yield "

                <div class=\"form-module-configure-fields\"></div>
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
        return "module-form-settings.twig";
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
        return array (  154 => 55,  148 => 54,  143 => 53,  137 => 51,  131 => 50,  126 => 49,  120 => 47,  114 => 46,  109 => 45,  104 => 43,  100 => 41,  96 => 40,  88 => 38,  80 => 36,  73 => 33,  68 => 32,  64 => 31,  58 => 28,  54 => 27,  49 => 24,  47 => 25,  40 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "module-form-settings.twig", "/var/www/cms/views/module-form-settings.twig");
    }
}
