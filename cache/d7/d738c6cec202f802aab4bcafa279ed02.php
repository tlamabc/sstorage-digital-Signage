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

/* dataset-form-copy.twig */
class __TwigTemplate_73e2d0aecc5f4391dbad8b54a059f079 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "dataset-form-copy.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-form-copy.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        $context["dataSetName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSet", [], "any", false, false, false, 28);
        // line 29
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Copy %dataSetName%"), array("%dataSetName%" => ($context["dataSetName"] ?? null), ));
        return; yield '';
    }

    // line 32
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 34
        echo __("Save");
        yield ", \$(\"#dataSetCopyForm\").submit()
";
        return; yield '';
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetCopyForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.copy", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\">
                ";
        // line 41
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A name for this DataSet");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        yield "                ";
        $context["dataSetName"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSet", [], "any", false, false, false, 43), "html", null, true);
            yield " 2";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["dataSet", ($context["title"] ?? null), ($context["dataSetName"] ?? null), ($context["helpText"] ?? null), "", "required"], 44, $context, $this->getSourceContext());
        yield "

                ";
        // line 46
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("An optional description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["description", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 48, $context, $this->getSourceContext());
        yield "

                ";
        // line 50
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A code which can be used to lookup this DataSet - usually for an API application");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 52, $context, $this->getSourceContext());
        yield "

                ";
        // line 54
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Copy rows?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should we copy all the row data from the original dataSet?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["copyRows", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 56, $context, $this->getSourceContext());
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
        return "dataset-form-copy.twig";
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
        return array (  162 => 56,  156 => 55,  151 => 54,  145 => 52,  139 => 51,  134 => 50,  128 => 48,  122 => 47,  117 => 46,  111 => 44,  104 => 43,  98 => 42,  93 => 41,  89 => 40,  85 => 38,  81 => 37,  74 => 34,  69 => 33,  65 => 32,  59 => 29,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-form-copy.twig", "/var/www/cms/views/dataset-form-copy.twig");
    }
}
