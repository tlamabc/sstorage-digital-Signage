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

/* menuboard-form-edit.twig */
class __TwigTemplate_9ad8c4fcc494250a42e53c3aa074f7a0 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "menuboard-form-edit.twig", 25)->unwrap();
        // line 26
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "menuboard-form-edit.twig", 26)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "menuboard-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        echo __("Edit Menu Board");
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
        yield ", \$(\"#menuBoardEditForm\").submit()
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
            <form id=\"menuBoardEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoard"] ?? null), "menuId", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\">
                ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 41)) {
            // line 42
            yield "                    <div class=\"form-group row\">
                        <label class=\"col-sm-2 control-label\">";
            // line 43
            echo __("Current Folder");
            yield "</label>
                        <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                            <span id=\"originalFormFolder\"></span>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"col-sm-2 control-label\">";
            // line 49
            echo __("Move to Selected Folder:");
            yield "</label>
                        <div class=\"col-sm-10\">
                            <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 51
            echo __("Select Folder");
            yield "</button>
                            <span id=\"selectedFormFolder\"></span>
                        </div>
                    </div>
                    ";
            // line 55
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId", CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoard"] ?? null), "folderId", [], "any", false, false, false, 55)], 55, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 57
        yield "
                ";
        // line 58
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this Menu Board");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoard"] ?? null), "name", [], "any", false, false, false, 60), ($context["helpText"] ?? null)], 60, $context, $this->getSourceContext());
        yield "

                ";
        // line 62
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Code identifier for this Menu Board");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoard"] ?? null), "code", [], "any", false, false, false, 64), ($context["helpText"] ?? null)], 64, $context, $this->getSourceContext());
        yield "

                ";
        // line 66
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("An optional description of the Menu Board. (1 - 250 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoard"] ?? null), "description", [], "any", false, false, false, 68), ($context["helpText"] ?? null)], 68, $context, $this->getSourceContext());
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
        return "menuboard-form-edit.twig";
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
        return array (  171 => 68,  165 => 67,  160 => 66,  154 => 64,  148 => 63,  143 => 62,  137 => 60,  131 => 59,  126 => 58,  123 => 57,  118 => 55,  111 => 51,  106 => 49,  97 => 43,  94 => 42,  92 => 41,  88 => 40,  84 => 38,  80 => 37,  73 => 34,  68 => 33,  64 => 32,  58 => 29,  54 => 28,  49 => 24,  47 => 26,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "menuboard-form-edit.twig", "/var/www/cms/views/menuboard-form-edit.twig");
    }
}
