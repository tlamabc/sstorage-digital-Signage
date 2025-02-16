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

/* layout-form-delete.twig */
class __TwigTemplate_87fc466b1a79dfc6eedf144636236c1e extends Template
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
        // line 2
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-delete.twig", 3)->unwrap();
        // line 2
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-delete.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        $context["layout"] = CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 6);
        // line 7
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Delete %layout%"), array("%layout%" => ($context["layout"] ?? null), ));
        return; yield '';
    }

    // line 10
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        yield "    ";
        echo __("Retire");
        yield ", XiboSwapDialog(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.retire.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 11)]), "html", null, true);
        yield "\")
    ";
        // line 12
        echo __("No");
        yield ", XiboDialogClose()
    ";
        // line 13
        echo __("Yes");
        yield ", \$(\"#layoutDeleteForm\").submit()
";
        return; yield '';
    }

    // line 16
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 19)]), "html", null, true);
        yield "\">
                ";
        // line 20
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Are you sure you want to delete this item?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 21, $context, $this->getSourceContext());
        yield "
                
                ";
        // line 23
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("All media will be unassigned and any widgets such as text/rss will be lost, unless they are on playlists. The item will be removed from all Schedules.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 24, $context, $this->getSourceContext());
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
        return "layout-form-delete.twig";
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
        return array (  115 => 24,  110 => 23,  104 => 21,  99 => 20,  95 => 19,  91 => 17,  87 => 16,  80 => 13,  76 => 12,  69 => 11,  65 => 10,  59 => 7,  56 => 6,  52 => 5,  47 => 2,  45 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-delete.twig", "/var/www/cms/views/layout-form-delete.twig");
    }
}
