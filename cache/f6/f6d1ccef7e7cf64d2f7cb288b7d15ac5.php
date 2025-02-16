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

/* install-error.twig */
class __TwigTemplate_f3dac5122dff5612bb60edda7e39dac1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'jumboTron' => [$this, 'block_jumboTron'],
            'stepContent' => [$this, 'block_stepContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-install.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "install-error.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base-install.twig", "install-error.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_jumboTron($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    <div class=\"jumbotron\">
        <div class=\"container\">
            ";
        // line 7
        $context["themeName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["app_name"], "method", false, false, false, 7);
        // line 8
        yield "            ";
        $context["header"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            /* xgettext:no-php-format */            echo strtr(__("%themeName% Error"), array("%themeName%" => ($context["themeName"] ?? null), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        yield "            <h1>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["header"] ?? null), "html", null, true);
        yield "</h1>
            <p>";
        // line 10
        echo __("We are really sorry, but there has been an error. It has been logged in install_log.txt and printed below.");
        yield "</p>
        </div>
    </div>
";
        return; yield '';
    }

    // line 15
    public function block_stepContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <p class=\"alert alert-danger\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
        yield "</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card p-3 mb-3 bg-light\">
                <code>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["trace"] ?? null), "html", null, true);
        yield "</code>
            </div>
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
        return "install-error.twig";
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
        return array (  98 => 24,  89 => 18,  85 => 16,  81 => 15,  72 => 10,  67 => 9,  61 => 8,  59 => 7,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install-error.twig", "/var/www/cms/views/install-error.twig");
    }
}
