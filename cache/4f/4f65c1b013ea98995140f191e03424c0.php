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

/* folder-form-move.twig */
class __TwigTemplate_b540097bfc5d73517e40b2a1bf3314a5 extends Template
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
            'formFieldActions' => [$this, 'block_formFieldActions'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "folder-form-move.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "folder-form-move.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, ($context["folder"] ?? null), "text", [], "any", false, false, false, 28);
        // line 29
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Move Folder -  %name%"), array("%name%" => ($context["name"] ?? null), ));
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
        yield ", forms.folderMoveSubmit()
";
        return; yield '';
    }

    // line 38
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    [{
    \"field\": \"merge\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".merge-message\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"merge\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".merge-message\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"merge\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".merge-message\": { \"display\": \"\" }
    }
    },{
    \"field\": \"merge\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".merge-message\": { \"display\": \"\" }
    }
    }]
";
        return; yield '';
    }

    // line 74
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"moveFolderForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.move", ["folderId" => CoreExtension::getAttribute($this->env, $this->source, ($context["folder"] ?? null), "id", [], "any", false, false, false, 77)]), "html", null, true);
        yield "\">
                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\">";
        // line 79
        echo __("Current Folder");
        yield "</label>
                    <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                        <span id=\"originalFormFolder\"></span>
                    </div>
                </div>

                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\">";
        // line 86
        echo __("Move to Selected Folder:");
        yield "</label>
                    <div class=\"col-sm-10\">
                        <div class=\"card p-3 mb-3 bg-light\" id=\"container-folder-form-tree\"></div>
                    </div>
                </div>

                ";
        // line 92
        if (($context["deletable"] ?? null)) {
            // line 93
            yield "                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Merge?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 94
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should we merge content of the original folder into the selected folder?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 95
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["merge", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 95, $context, $this->getSourceContext());
            yield "

                    ";
            // line 97
            $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("With merge selected, all Objects (Media, Layouts etc) and any sub-folders currently in the original folder will be moved to the selected folder. Original folder will be deleted");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 98
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null), "merge-message", "alert alert-info"], 98, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 100
        yield "
                ";
        // line 101
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId", CoreExtension::getAttribute($this->env, $this->source, ($context["folder"] ?? null), "id", [], "any", false, false, false, 101)], 101, $context, $this->getSourceContext());
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
        return "folder-form-move.twig";
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
        return array (  189 => 101,  186 => 100,  180 => 98,  175 => 97,  169 => 95,  163 => 94,  157 => 93,  155 => 92,  146 => 86,  136 => 79,  131 => 77,  127 => 75,  123 => 74,  82 => 38,  75 => 34,  70 => 33,  66 => 32,  60 => 29,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "folder-form-move.twig", "/var/www/cms/views/folder-form-move.twig");
    }
}
