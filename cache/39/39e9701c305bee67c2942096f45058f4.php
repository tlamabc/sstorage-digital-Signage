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

/* library-form-delete.twig */
class __TwigTemplate_c9ddcb0032929f624aacf7f26728b064 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "library-form-delete.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "library-form-delete.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Delete Media");
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
        yield ", \$(\"#libraryDeleteForm\").submit()
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
            <form id=\"libraryDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\">
                ";
        // line 40
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Are you sure you want to delete this file?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 41, $context, $this->getSourceContext());
        yield "

                ";
        // line 43
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Deleting a file cannot be reversed.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 44, $context, $this->getSourceContext());
        yield "

                ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "isUsed", [], "method", false, false, false, 46)) {
            // line 47
            yield "
                    ";
            // line 48
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Force delete from any existing layouts, assignments, etc");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This library item has been used somewhere in the system. You will only be allowed to delete it if you check this.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 50
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["forceDelete", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 50, $context, $this->getSourceContext());
            yield "

                    ";
            // line 52
            $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please note that removing a media item from the Library will also delete it from the Published version of this Layout and you won't be able to undo that action by discarding your changes. Displays will also be immediately effected.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 53
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null), "alert alert-info"], 53, $context, $this->getSourceContext());
            yield "

                ";
        }
        // line 56
        yield "
                ";
        // line 57
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Add to Purge list?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When set, each Display that has this Media in its local storage, will be notified to remove it.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["purge", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 59, $context, $this->getSourceContext());
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
        return "library-form-delete.twig";
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
        return array (  160 => 59,  154 => 58,  149 => 57,  146 => 56,  139 => 53,  134 => 52,  128 => 50,  122 => 49,  117 => 48,  114 => 47,  112 => 46,  106 => 44,  101 => 43,  95 => 41,  90 => 40,  86 => 39,  82 => 37,  78 => 36,  71 => 33,  66 => 32,  62 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-form-delete.twig", "/var/www/cms/views/library-form-delete.twig");
    }
}
