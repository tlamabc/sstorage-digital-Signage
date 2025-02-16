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

/* login.twig */
class __TwigTemplate_e0c1c3ee29b9d165e328117fa26b85c2 extends Template
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
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 12), "html", null, true);
        yield "dist/style.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>

    <!-- Copyright 2006-2023 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
    <style type=\"text/css\">
        html {
            font-size: 14px;
        }

        body {
            padding-top: 40px !important;
            padding-bottom: 40px !important;
            background-color: #f5f5f5;
            font-size: 1rem;
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
            font-size: 1.15rem;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        .login-logo {
            width: 200px;
        }

    </style>
    <!-- Import user made CSS from theme -->
    <link href=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["css/override.css"], "method", false, false, false, 57), "html", null, true);
        yield "?";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "\" rel=\"stylesheet\" media=\"screen\">
</head>
<body>
    <div class=\"container\">
        ";
        // line 61
        if (($context["authCASEnabled"] ?? null)) {
            // line 62
            yield "        <form id=\"cas-login-form\" class=\"form-signin text-center\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("cas.login"), "html", null, true);
            yield "\" method=\"post\">
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("priorRoute"));
            foreach ($context['_seq'] as $context["_key"] => $context["priorRoute"]) {
                // line 64
                yield "                <input name=\"priorRoute\" type=\"hidden\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["priorRoute"], "html", null, true);
                yield "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priorRoute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "            <p><img alt=\"Logo\" class=\"login-logo\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 66), "html", null, true);
            yield "\"></p>

            <p>";
            // line 68
            echo __("Connect with the Central Authentication Server");
            yield "</p>

            ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("cas_login_message"));
            foreach ($context['_seq'] as $context["_key"] => $context["loginMessage"]) {
                // line 71
                yield "                <div class=\"alert alert-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loginMessage"], "html", null, true);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loginMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "
            <p><button class=\"btn btn-primary\" type=\"submit\" name=\"logincas\">";
            // line 74
            echo __("CAS Login");
            yield "</button></p>
        </form>
        ";
        } else {
            // line 77
            yield "        <form id=\"login-form\" class=\"form-signin text-center\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("login"), "html", null, true);
            yield "\" method=\"post\">
            ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("priorRoute"));
            foreach ($context['_seq'] as $context["_key"] => $context["priorRoute"]) {
                // line 79
                yield "                <input name=\"priorRoute\" type=\"hidden\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["priorRoute"], "html", null, true);
                yield "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priorRoute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            yield "            <input type=\"hidden\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrfKey"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrfToken"] ?? null), "html", null, true);
            yield "\" />
            <p><a href=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_url"], "method", false, false, false, 82), "html", null, true);
            yield "\"><img class=\"login-logo\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 82), "html", null, true);
            yield "\"></a></p>

            <p>";
            // line 84
            echo __("Please provide your credentials");
            yield "</p>

            <input id=\"username\" class=\"form-control input-block-level\" name=\"username\" type=\"text\" placeholder=\"";
            // line 86
            echo __("User");
            yield "\" autofocus autocomplete=\"username\">
            <input id=\"password\" class=\"form-control input-block-level\" name=\"password\" type=\"password\" placeholder=\"";
            // line 87
            echo __("Password");
            yield "\" autocomplete=\"current-password\">

            ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("login_message"));
            foreach ($context['_seq'] as $context["_key"] => $context["loginMessage"]) {
                // line 90
                yield "                <div class=\"alert alert-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loginMessage"], "html", null, true);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loginMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "
            <p><button class=\"btn btn-primary\" type=\"submit\">";
            // line 93
            echo __("Login");
            yield "</button></p>

            ";
            // line 95
            if (($context["passwordReminderEnabled"] ?? null)) {
                yield "<p><a href=\"#\" id=\"reminder-form-toggle\">";
                echo __("Forgotten your password?");
                yield "</a></p>";
            }
            // line 96
            yield "        </form>
        ";
        }
        // line 98
        yield "
        ";
        // line 99
        if (($context["passwordReminderEnabled"] ?? null)) {
            // line 100
            yield "        <form id=\"reminder-form\" class=\"form-signin text-center d-none\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("login.forgotten"), "html", null, true);
            yield "\" method=\"post\">
            <input type=\"hidden\" name=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrfKey"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrfToken"] ?? null), "html", null, true);
            yield "\" />
            <p><a href=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_url"], "method", false, false, false, 102), "html", null, true);
            yield "\"><img class=\"login-logo\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 102), "html", null, true);
            yield "\"></a></p>

            <p>";
            // line 104
            echo __("Please provide your user name");
            yield "</p>
            <input id=\"username\" class=\"form-control input-block-level\" name=\"username\" type=\"text\" placeholder=\"";
            // line 105
            echo __("User");
            yield "\">

            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("login_message"));
            foreach ($context['_seq'] as $context["_key"] => $context["loginMessage"]) {
                // line 108
                yield "                <div class=\"alert alert-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loginMessage"], "html", null, true);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loginMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "
            <p><button class=\"btn btn-primary\" type=\"submit\">";
            // line 111
            echo __("Send Reset");
            yield "</button></p>

            <p><a href=\"#\" id=\"login-form-toggle\">";
            // line 113
            echo __("Login instead?");
            yield "</a></p>
        </form>
        ";
        }
        // line 116
        yield "
        <p class=\"text-center\">";
        // line 117
        /* xgettext:no-php-format */        echo strtr(__("Version %version%"), array("%version%" => ($context["version"] ?? null), ));
        // line 118
        yield "            | <a id=\"source-link\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["cms_source_url"], "method", false, false, false, 118), "html", null, true);
        yield "\">";
        echo __("Source");
        yield "</a>
            | <a id=\"about-link\" class=\"XiboFormButton\" href=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("about"), "html", null, true);
        yield "\" title=\"";
        echo __("About");
        yield "\">";
        echo __("About");
        yield "</a>
        </p>
    </div> <!-- /container -->
    <!-- Import JS bundle from dist -->
    <script src=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 123), "html", null, true);
        yield "dist/vendor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\" nonce=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        \$(function() {
            \$(\"#reminder-form-toggle\").on(\"click\", function (e) {
                e.preventDefault();

                \$(\"#login-form\").addClass(\"d-none\");
                \$(\"#reminder-form\").removeClass(\"d-none\");
            });

            \$(\"#login-form-toggle\").on(\"click\", function (e) {
                e.preventDefault();

                \$(\"#login-form\").removeClass(\"d-none\");
                \$(\"#reminder-form\").addClass(\"d-none\");
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
        return "login.twig";
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
        return array (  348 => 124,  338 => 123,  327 => 119,  320 => 118,  318 => 117,  315 => 116,  309 => 113,  304 => 111,  301 => 110,  292 => 108,  288 => 107,  283 => 105,  279 => 104,  272 => 102,  266 => 101,  261 => 100,  259 => 99,  256 => 98,  252 => 96,  246 => 95,  241 => 93,  238 => 92,  229 => 90,  225 => 89,  220 => 87,  216 => 86,  211 => 84,  204 => 82,  197 => 81,  188 => 79,  184 => 78,  179 => 77,  173 => 74,  170 => 73,  161 => 71,  157 => 70,  152 => 68,  146 => 66,  137 => 64,  133 => 63,  128 => 62,  126 => 61,  117 => 57,  63 => 12,  58 => 10,  54 => 9,  50 => 8,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.twig", "/var/www/cms/views/login.twig");
    }
}
