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

/* dataset-form-selectfolder.twig */
class __TwigTemplate_5d637597ba59c2da90eb67acccb9227d extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "dataset-form-selectfolder.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-form-selectfolder.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSet", [], "any", false, false, false, 27);
        // line 28
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Data set %name%"), array("%name%" => ($context["name"] ?? null), ));
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
        yield ", \$(\"#dataSetSelectFolderForm\").submit()
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
            <form id=\"dataSetSelectFolderForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.selectfolder", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\">
                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\">";
        // line 41
        echo __("Current Folder");
        yield "</label>
                    <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                        <span id=\"originalFormFolder\"></span>
                    </div>
                </div>

                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\">";
        // line 48
        echo __("Move to Selected Folder:");
        yield "</label>
                    <div class=\"col-sm-10\">
                        <div class=\"card p-3 mb-3 bg-light\" id=\"container-folder-form-tree\"></div>
                    </div>
                </div>

                ";
        // line 54
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId", CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "folderId", [], "any", false, false, false, 54)], 54, $context, $this->getSourceContext());
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
        return "dataset-form-selectfolder.twig";
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
        return array (  113 => 54,  104 => 48,  94 => 41,  89 => 39,  85 => 37,  81 => 36,  74 => 33,  69 => 32,  65 => 31,  59 => 28,  56 => 27,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-form-selectfolder.twig", "/var/www/cms/views/dataset-form-selectfolder.twig");
    }
}
