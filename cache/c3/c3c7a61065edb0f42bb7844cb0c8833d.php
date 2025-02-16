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

/* tfa.twig */
class __TwigTemplate_628a32c183413a8e282ba9eadde6c6fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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

    <!-- Import CSS bundle from dist -->
    <script src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 13), "html", null, true);
        yield "dist/style.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>

    <!-- Copyright 2006-2021 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
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
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        .login-logo {
            width: 200px;
        }

    </style>
</head>
<body>
<div class=\"container\">
        <form id=\"login-form\" class=\"form-signin text-center\" action=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tfa.auth.validate"), "html", null, true);
        yield "\" method=\"post\">
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("priorRoute"));
        foreach ($context['_seq'] as $context["_key"] => $context["priorRoute"]) {
            // line 57
            yield "                <input name=\"priorRoute\" type=\"hidden\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["priorRoute"], "html", null, true);
            yield "\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priorRoute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "            <input type=\"hidden\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrfKey"] ?? null), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrfToken"] ?? null), "html", null, true);
        yield "\" />
            <p><a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_url"], "method", false, false, false, 60), "html", null, true);
        yield "\"><img class=\"login-logo\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 60), "html", null, true);
        yield "\"></a></p>

            <p>";
        // line 62
        echo __("Please provide your Two Factor Authorisation Code");
        yield "</p>
            <input id=\"code\" class=\"form-control input-block-level\" name=\"code\" type=\"text\" placeholder=\"";
        // line 63
        echo __("Code");
        yield "\" autofocus>

            ";
        // line 65
        if ((($context["message"] ?? null) != "")) {
            // line 66
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "</div>
            ";
        }
        // line 68
        yield "
            <p><button class=\"btn btn-primary\" type=\"submit\">";
        // line 69
        echo __("Verify");
        yield "</button></p>

            <p><a href=\"#\" id=\"recovery-form-toggle\">";
        // line 71
        echo __("Use Recovery Code instead?");
        yield "</a></p>
        </form>

    <form id=\"recovery-form\" class=\"form-signin text-center d-none\" action=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tfa.auth.validate"), "html", null, true);
        yield "\" method=\"post\">
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("priorRoute"));
        foreach ($context['_seq'] as $context["_key"] => $context["priorRoute"]) {
            // line 76
            yield "            <input name=\"priorRoute\" type=\"hidden\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["priorRoute"], "html", null, true);
            yield "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priorRoute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "        <input type=\"hidden\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrfKey"] ?? null), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrfToken"] ?? null), "html", null, true);
        yield "\" />
        <p><a href=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_url"], "method", false, false, false, 79), "html", null, true);
        yield "\"><img class=\"login-logo\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 79), "html", null, true);
        yield "\"></a></p>

        <p>";
        // line 81
        echo __("Please provide your Two Factor Authorisation Recovery Code");
        yield "</p>
        <input id=\"recoveryCode\" class=\"form-control input-block-level\" name=\"recoveryCode\" type=\"text\" placeholder=\"";
        // line 82
        echo __("Recovery Code");
        yield "\" autofocus>

        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("2fa_message"));
        foreach ($context['_seq'] as $context["_key"] => $context["loginMessage"]) {
            // line 85
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loginMessage"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loginMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "
        <p><button class=\"btn btn-primary\" type=\"submit\">";
        // line 88
        echo __("Verify");
        yield "</button></p>

        <p><a href=\"#\" id=\"login-form-toggle\">";
        // line 90
        echo __("Use Two Factor Code instead?");
        yield "</a></p>
    </form>
</div>
<!-- Import JS bundle from dist -->
<script src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 94), "html", null, true);
        yield "dist/vendor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" nonce=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
    \$(function() {
        \$(\"#recovery-form-toggle\").on(\"click\", function (e) {
            e.preventDefault();

            \$(\"#login-form\").addClass(\"d-none\");
            \$(\"#recovery-form\").removeClass(\"d-none\");
        });

        \$(\"#login-form-toggle\").on(\"click\", function (e) {
            e.preventDefault();

            \$(\"#login-form\").removeClass(\"d-none\");
            \$(\"#recovery-form\").addClass(\"d-none\");
        });
    });
</script>
</body>
</html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "tfa.twig";
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
        return array (  255 => 95,  245 => 94,  238 => 90,  233 => 88,  230 => 87,  221 => 85,  217 => 84,  212 => 82,  208 => 81,  201 => 79,  194 => 78,  185 => 76,  181 => 75,  177 => 74,  171 => 71,  166 => 69,  163 => 68,  157 => 66,  155 => 65,  150 => 63,  146 => 62,  139 => 60,  132 => 59,  123 => 57,  119 => 56,  115 => 55,  64 => 13,  58 => 10,  54 => 9,  50 => 8,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tfa.twig", "/var/www/cms/views/tfa.twig");
    }
}
