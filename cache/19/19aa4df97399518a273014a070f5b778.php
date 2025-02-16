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

/* base-install.twig */
class __TwigTemplate_715cbee230590be64f64bd0c485d1e35 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'jumboTron' => [$this, 'block_jumboTron'],
            'stepContent' => [$this, 'block_stepContent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_title"], "method", false, false, false, 4), "html", null, true);
        yield "</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"token\" content=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrfToken"] ?? null), "html", null, true);
        yield "\"/>
        <meta name=\"public-path\" content=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 9), "html", null, true);
        yield "\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/favicon.ico"], "method", false, false, false, 10), "html", null, true);
        yield "\" />

        ";
        // line 13
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 13), "html", null, true);
        yield "dist/style.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
        <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["css/xibo.css"], "method", false, false, false, 14), "html", null, true);
        yield "?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["css/install.css"], "method", false, false, false, 15), "html", null, true);
        yield "\" rel=\"stylesheet\" media=\"screen\">
    </head>

    <body>
        <!-- Copyright 2006-2021 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->

        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    ";
        // line 24
        $context["themeName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["app_name"], "method", false, false, false, 24);
        // line 25
        yield "                    ";
        $context["header"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            /* xgettext:no-php-format */            echo strtr(__("%themeName% Installation"), array("%themeName%" => ($context["themeName"] ?? null), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        yield "                    <a class=\"navbar-brand\" href=\"#\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["header"] ?? null), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>

        ";
        // line 31
        yield from $this->unwrap()->yieldBlock('jumboTron', $context, $blocks);
        // line 34
        yield "
        <div class=\"container main-container\">
            ";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "error", [], "any", false, false, false, 36)) {
            // line 37
            yield "                <div class=\"alert alert-danger\">
                    ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["session"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["error"] ?? null) : null), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 41
        yield "
            ";
        // line 42
        yield from $this->unwrap()->yieldBlock('stepContent', $context, $blocks);
        // line 45
        yield "        </div>

        <div class=\"footer\">
            <div class=\"container text-center\">
                <img class=\"logo\" src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 49), "html", null, true);
        yield "\">
            </div>
        </div>

        <script src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 53), "html", null, true);
        yield "dist/vendor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 54), "html", null, true);
        yield "dist/core/install.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    </body>
</html>";
        return; yield '';
    }

    // line 31
    public function block_jumboTron($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "
        ";
        return; yield '';
    }

    // line 42
    public function block_stepContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "
            ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base-install.twig";
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
        return array (  181 => 42,  172 => 31,  158 => 54,  148 => 53,  141 => 49,  135 => 45,  133 => 42,  130 => 41,  124 => 38,  121 => 37,  119 => 36,  115 => 34,  113 => 31,  104 => 26,  98 => 25,  96 => 24,  84 => 15,  76 => 14,  65 => 13,  60 => 10,  56 => 9,  52 => 8,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base-install.twig", "/var/www/cms/views/base-install.twig");
    }
}
