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

/* maintenance-form-tidy.twig */
class __TwigTemplate_64f4d014ff9d6fa10d9004a07d65202a extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "maintenance-form-tidy.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "maintenance-form-tidy.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Tidy Library");
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
        echo __("Yes");
        yield ", \$(\"#tidyLibraryForm\").submit()
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
            <form id=\"tidyLibraryForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("maintenance.tidy"), "html", null, true);
        yield "\">
                ";
        // line 40
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tidying the Library will delete any temporary files. Are you sure you want to proceed?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 41, $context, $this->getSourceContext());
        yield "

                ";
        // line 43
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Remove old revisions");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Cleaning up old revisions of media will result in any unused media revisions being permanently deleted.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["tidyOldRevisions", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 45, $context, $this->getSourceContext());
        yield "

                ";
        // line 47
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Remove all media not currently in use?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Selecting this option will remove any media that is not currently being used in Layouts or linked to Displays. This process cannot be reversed.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["cleanUnusedFiles", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 49, $context, $this->getSourceContext());
        yield "

                ";
        // line 51
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Delete Generic Files?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Selecting this option will remove any generic files that is are not currently linked to Displays. This process cannot be reversed.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["tidyGenericFiles", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 53, $context, $this->getSourceContext());
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
        return "maintenance-form-tidy.twig";
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
        return array (  146 => 53,  140 => 52,  135 => 51,  129 => 49,  123 => 48,  118 => 47,  112 => 45,  106 => 44,  101 => 43,  95 => 41,  90 => 40,  86 => 39,  82 => 37,  78 => 36,  71 => 33,  66 => 32,  62 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "maintenance-form-tidy.twig", "/var/www/cms/views/maintenance-form-tidy.twig");
    }
}
