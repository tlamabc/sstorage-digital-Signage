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

/* library-form-tidy.twig */
class __TwigTemplate_47793c45c4952018cb7e84b6d2b39a79 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "library-form-tidy.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "library-form-tidy.twig", 24);
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
        echo __("Save");
        yield ", \$(\"#libraryTidyForm\").submit()
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
            <form id=\"libraryTidyForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.tidy"), "html", null, true);
        yield "\">
                ";
        // line 40
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tidying your Library will delete any media that is not currently in use.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 41, $context, $this->getSourceContext());
        yield "              

                ";
        // line 43
        if ((($context["countExcludingGeneric"] ?? null) > 0)) {
            // line 44
            yield "                    ";
            $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                /* xgettext:no-php-format */                echo strtr(__("There is %sumExcludingGeneric% of data stored in %countExcludingGeneric% files . Are you sure you want to proceed?"), array("%sumExcludingGeneric%" => ($context["sumExcludingGeneric"] ?? null), "%countExcludingGeneric%" => ($context["countExcludingGeneric"] ?? null), ));
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 45, $context, $this->getSourceContext());
            yield "
                ";
        } else {
            // line 47
            yield "                    ";
            $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("You do not have any library files that are not in use.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 48
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 48, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 50
        yield "
                ";
        // line 51
        if ((($context["countGeneric"] ?? null) > 0)) {
            // line 52
            yield "                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Delete Generic Files?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 53
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                /* xgettext:no-php-format */                echo strtr(__("There is %sumGeneric% of data stored in %countGeneric% generic files. To delete these check here"), array("%sumGeneric%" => ($context["sumGeneric"] ?? null), "%countGeneric%" => ($context["countGeneric"] ?? null), ));
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 54
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["tidyGenericFiles", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 54, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 56
        yield "            </form>
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
        return "library-form-tidy.twig";
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
        return array (  150 => 56,  144 => 54,  138 => 53,  132 => 52,  130 => 51,  127 => 50,  121 => 48,  115 => 47,  109 => 45,  103 => 44,  101 => 43,  95 => 41,  90 => 40,  86 => 39,  82 => 37,  78 => 36,  71 => 33,  66 => 32,  62 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-form-tidy.twig", "/var/www/cms/views/library-form-tidy.twig");
    }
}
