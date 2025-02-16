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

/* about-page.twig */
class __TwigTemplate_ad9656c7d13fc5a53c92663b6cc7c257 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'header' => [$this, 'block_header'],
            'contentClass' => [$this, 'block_contentClass'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "non-authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("non-authed.twig", "about-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("About"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 27
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<style type=\"text/css\">
    .about-container {
        padding: 19px 29px 29px;
        margin: 10px auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        box-shadow: 0 1px 2px rgba(0,0,0,.05);
    }
    .login-logo {
        width: 200px;
    }
</style>
";
        return; yield '';
    }

    // line 47
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 48
    public function block_contentClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 50
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        yield "    <p><a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_url"], "method", false, false, false, 51), "html", null, true);
        yield "\"><img class=\"login-logo\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 51), "html", null, true);
        yield "\" alt=\"Logo\"></a></p>
    <a class=\"btn btn-info\" href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        yield "\">";
        echo __("Home");
        yield "</a>
    <div class=\"about-container\">
        ";
        // line 54
        yield from         $this->loadTemplate("licence.twig", "about-page.twig", 54)->unwrap()->yield($context);
        // line 55
        yield "    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "about-page.twig";
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
        return array (  119 => 55,  117 => 54,  110 => 52,  103 => 51,  99 => 50,  92 => 48,  85 => 47,  60 => 27,  51 => 25,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "about-page.twig", "/var/www/cms/views/about-page.twig");
    }
}
