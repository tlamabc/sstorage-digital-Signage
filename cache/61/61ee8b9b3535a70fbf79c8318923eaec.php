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

/* developer-template-form-add.twig */
class __TwigTemplate_4d4e9912c13ea15f4f8b69fab3bcede8 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "developer-template-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "developer-template-form-add.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add Module Template");
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
        yield ", \$(\"#form-module-template\").submit();
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "moduleTemplateAddFormOpen";
        return; yield '';
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"form-module-template\"
                  class=\"XiboForm form-horizontal\"
                  method=\"post\"
                  action=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.add"), "html", null, true);
        yield "\">

                ";
        // line 46
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A unique ID for the module template");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["templateId", ($context["title"] ?? null), "custom_", ($context["helpText"] ?? null)], 48, $context, $this->getSourceContext());
        yield "

                ";
        // line 50
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Title");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A title for the module template");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["title", ($context["title"] ?? null), "Custom Template", ($context["helpText"] ?? null)], 52, $context, $this->getSourceContext());
        yield "

                ";
        // line 54
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.datatypes.search")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "id"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-hide-search", "value" => 1]];
        // line 61
        yield "                ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Data Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Which data type does this template need?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dataType", "single", ($context["title"] ?? null), null, null, "id", "id", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 63, $context, $this->getSourceContext());
        yield "

                ";
        // line 65
        $context["attributes"] = [["name" => "data-search-term", "value" => "title"], ["name" => "data-id-property", "value" => "templateId"], ["name" => "data-text-property", "value" => "title"], ["name" => "data-hide-search", "value" => 1], ["name" => "data-filter-options", "value" => "{\"type\":\"static\"}"]];
        // line 72
        yield "                ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Template");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally select existing template to use as a base for this Template");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["copyTemplateId", "single", ($context["title"] ?? null), null, null, "templateId", "title", ($context["helpText"] ?? null), "d-none", "", "", "", ($context["attributes"] ?? null)], 74, $context, $this->getSourceContext());
        yield "

                ";
        // line 76
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show In");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Which Editor should this template be available in?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        yield "                ";
        $context["options"] = [["id" => "none", "name" => __("None")], ["id" => "layout", "name" => __("Layout Editor")], ["id" => "playlist", "name" => __("Playlist Editor")], ["id" => "both", "name" => __("Both")]];
        // line 84
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["showIn", "single", ($context["title"] ?? null), "layout", ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null)], 84, $context, $this->getSourceContext());
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
        return "developer-template-form-add.twig";
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
        return array (  191 => 84,  188 => 78,  182 => 77,  177 => 76,  171 => 74,  165 => 73,  159 => 72,  157 => 65,  151 => 63,  145 => 62,  139 => 61,  137 => 54,  131 => 52,  125 => 51,  120 => 50,  114 => 48,  108 => 47,  103 => 46,  98 => 44,  91 => 39,  87 => 38,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "developer-template-form-add.twig", "/var/www/cms/views/developer-template-form-add.twig");
    }
}
