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

/* module-form-expiry.twig */
class __TwigTemplate_39d3a144f676d7ebadf88a39d744aa64 extends Template
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
        // line 21
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "module-form-expiry.twig", 22)->unwrap();
        // line 21
        $this->parent = $this->loadTemplate("form-base.twig", "module-form-expiry.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "name", [], "any", false, false, false, 25);
        // line 26
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Expiry for %name%"), array("%name%" => ($context["name"] ?? null), ));
        return; yield '';
    }

    // line 29
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 31
        echo __("Save");
        yield ", \$(\"#widgetExpiryForm\").submit()
";
        return; yield '';
    }

    // line 34
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        yield "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"widgetExpiryForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.expiry", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "widgetId", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\">
                ";
        // line 39
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Start Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the start time for this widget");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["fromDt", ($context["title"] ?? null), ($context["fromDt"] ?? null), ($context["helpText"] ?? null), "starttime-control"], 41, $context, $this->getSourceContext());
        yield "

                ";
        // line 43
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("End Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the end time for this widget");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["toDt", ($context["title"] ?? null), ($context["toDt"] ?? null), ($context["helpText"] ?? null), "endtime-control"], 45, $context, $this->getSourceContext());
        yield "

                ";
        // line 47
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Delete on Expiry?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When the End Time for this Widget passes should the Widget be removed from the Playlist?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["deleteOnExpiry", ($context["title"] ?? null), ($context["deleteOnExpiry"] ?? null), ($context["helpText"] ?? null)], 49, $context, $this->getSourceContext());
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
        return "module-form-expiry.twig";
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
        return array (  139 => 49,  133 => 48,  128 => 47,  122 => 45,  116 => 44,  111 => 43,  105 => 41,  99 => 40,  94 => 39,  90 => 38,  85 => 35,  81 => 34,  74 => 31,  69 => 30,  65 => 29,  59 => 26,  56 => 25,  52 => 24,  47 => 21,  45 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "module-form-expiry.twig", "/var/www/cms/views/module-form-expiry.twig");
    }
}
