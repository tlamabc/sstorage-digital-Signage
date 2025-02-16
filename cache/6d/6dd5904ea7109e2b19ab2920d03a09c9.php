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

/* connector-form-edit.twig */
class __TwigTemplate_0cb04d47d703948e0fdb27c5023d652b extends Template
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
            'connectorFormFields' => [$this, 'block_connectorFormFields'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "connector-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "connector-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Configure Connector");
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
        yield ", connectorFormSubmit()
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
            <form id=\"connectorEditForm\" class=\"form-horizontal\" method=\"put\" action=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("connector.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["connector"] ?? null), "connectorId", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\">

                ";
        // line 41
        yield from $this->unwrap()->yieldBlock('connectorFormFields', $context, $blocks);
        // line 44
        yield "
                ";
        // line 45
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enabled?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When enabled, this Connector will start providing the services it lists in its description.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isEnabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["connector"] ?? null), "isEnabled", [], "any", false, false, false, 47), ($context["helpText"] ?? null)], 47, $context, $this->getSourceContext());
        yield "

                ";
        // line 49
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["connector"] ?? null), "isSystem", [], "any", false, false, false, 49)) {
            // line 50
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["connector"] ?? null), "isInstalled", [], "any", false, false, false, 50)) {
                // line 51
                yield "                        ";
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Uninstall?");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 52
                yield "                        ";
                $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Tick to uninstall this Connector. All settings will be removed.");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 53
                yield "                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["shouldUninstall", ($context["title"] ?? null), false, ($context["helpText"] ?? null)], 53, $context, $this->getSourceContext());
                yield "
                    ";
            } else {
                // line 55
                yield "                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("This connector will be installed when you save."), "", "alert alert-info"], 55, $context, $this->getSourceContext());
                yield "
                    ";
            }
            // line 57
            yield "                ";
        }
        // line 58
        yield "            </form>
        </div>
    </div>
";
        return; yield '';
    }

    // line 41
    public function block_connectorFormFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "
                ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "connector-form-edit.twig";
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
        return array (  154 => 41,  146 => 58,  143 => 57,  137 => 55,  131 => 53,  125 => 52,  119 => 51,  116 => 50,  114 => 49,  108 => 47,  102 => 46,  97 => 45,  94 => 44,  92 => 41,  87 => 39,  83 => 37,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "connector-form-edit.twig", "/var/www/cms/views/connector-form-edit.twig");
    }
}
