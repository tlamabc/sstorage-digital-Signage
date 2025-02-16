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

/* log-form-truncate.twig */
class __TwigTemplate_d79d635ee4df5940e68be2d8a015e5e9 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "log-form-truncate.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "log-form-truncate.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Truncate");
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
        yield ", \$(\"#truncateForm\").submit()
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
            <form id=\"truncateForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.truncate"), "html", null, true);
        yield "\">
                ";
        // line 40
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Are you sure you want to truncate?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 41, $context, $this->getSourceContext());
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
        return "log-form-truncate.twig";
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
        return array (  95 => 41,  90 => 40,  86 => 39,  82 => 37,  78 => 36,  71 => 33,  66 => 32,  62 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "log-form-truncate.twig", "/var/www/cms/views/log-form-truncate.twig");
    }
}
