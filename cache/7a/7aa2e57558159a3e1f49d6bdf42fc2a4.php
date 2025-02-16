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

/* layout-form-retire.twig */
class __TwigTemplate_4e0a7d484878878fa8da955545b998e6 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-retire.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-retire.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        $context["layout"] = CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 28);
        // line 29
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Retire %layout%"), array("%layout%" => ($context["layout"] ?? null), ));
        return; yield '';
    }

    // line 32
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        echo __("Delete");
        yield ", XiboSwapDialog(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.delete.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 33)]), "html", null, true);
        yield "\")
    ";
        // line 34
        echo __("No");
        yield ", XiboDialogClose()
    ";
        // line 35
        echo __("Yes");
        yield ", \$(\"#layoutRetireForm\").submit()
";
        return; yield '';
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutRetireForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.retire", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\">
                ";
        // line 42
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Are you sure you want to retire this item?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["title"] ?? null)], 43, $context, $this->getSourceContext());
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
        return "layout-form-retire.twig";
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
        return array (  104 => 43,  99 => 42,  95 => 41,  91 => 39,  87 => 38,  80 => 35,  76 => 34,  69 => 33,  65 => 32,  59 => 29,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-retire.twig", "/var/www/cms/views/layout-form-retire.twig");
    }
}
