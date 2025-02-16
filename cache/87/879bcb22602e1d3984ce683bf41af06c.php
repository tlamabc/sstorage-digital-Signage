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

/* non-authed.twig */
class __TwigTemplate_16504e97b35ed4ed7f29ab53b10673b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'contentClass' => [$this, 'block_contentClass'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 26
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_title"], "method", false, false, false, 26), "html", null, true);
        yield "</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"public-path\" content=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 30), "html", null, true);
        yield "\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/favicon.ico"], "method", false, false, false, 31), "html", null, true);
        yield "\" />

        <script src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 33), "html", null, true);
        yield "dist/style.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>

        <!-- Copyright 2006-2023 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
        <style type=\"text/css\">
            body {
                padding-top: 40px !important;
                padding-bottom: 40px !important;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .login-logo {
                width: 200px;
            }

        </style>
        ";
        // line 65
        yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
        // line 66
        yield "    </head>
    <body>
        <div class=\"container\">
            <div class=\"";
        // line 69
        yield from $this->unwrap()->yieldBlock('contentClass', $context, $blocks);
        yield "\">
                ";
        // line 70
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 71
        yield "
                ";
        // line 72
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 73
        yield "            </div>

            <p class=\"text-center\">";
        // line 75
        /* xgettext:no-php-format */        echo strtr(__("Version %version%"), array("%version%" => ($context["version"] ?? null), ));
        yield "</p>
        </div> <!-- /container -->
        <script src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 77), "html", null, true);
        yield "dist/vendor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    </body>
</html>
";
        return; yield '';
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 65
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 69
    public function block_contentClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "form-signin text-center";
        return; yield '';
    }

    // line 70
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<p><a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_url"], "method", false, false, false, 70), "html", null, true);
        yield "\"><img class=\"login-logo\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 70), "html", null, true);
        yield "\" alt=\"Logo\"></a></p>";
        return; yield '';
    }

    // line 72
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "non-authed.twig";
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
        return array (  182 => 72,  170 => 70,  162 => 69,  155 => 65,  148 => 26,  133 => 77,  128 => 75,  124 => 73,  122 => 72,  119 => 71,  117 => 70,  113 => 69,  108 => 66,  106 => 65,  65 => 33,  60 => 31,  56 => 30,  48 => 26,  43 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "non-authed.twig", "/var/www/cms/views/non-authed.twig");
    }
}
