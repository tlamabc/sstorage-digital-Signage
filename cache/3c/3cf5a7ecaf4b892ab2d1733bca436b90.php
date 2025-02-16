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

/* install-step6.twig */
class __TwigTemplate_c0a4d610c60f20b6d31d6564b051bd8a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "install-step6.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base-install.twig", "install-step6.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stepContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 7
        $context["themeName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["app_name"], "method", false, false, false, 7);
        // line 8
        yield "
            <form action=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 7]), "html", null, true);
        yield "\" class=\"form-horizontal\" method=\"post\">

                ";
        // line 11
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            /* xgettext:no-php-format */            echo strtr(__("%themeName% needs an administrator user account to be the first user account that has access to the CMS. Please enter your chosen details below."), array("%themeName%" => ($context["themeName"] ?? null), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 12, $context, $this->getSourceContext());
        yield "

                ";
        // line 14
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Library Location");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            /* xgettext:no-php-format */            echo strtr(__("%themeName% needs somewhere to store the things you upload to be shown. Ideally, this should be somewhere outside the root of your web server - that is such that is not accessible by a web browser. Please input the full path to this folder. If the folder does not already exist, we will attempt to create it for you."), array("%themeName%" => ($context["themeName"] ?? null), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["library_location", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 16, $context, $this->getSourceContext());
        yield "

                ";
        // line 18
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Server Key");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            /* xgettext:no-php-format */            echo strtr(__("%themeName% needs you to choose a \"key\". This will be required each time you set-up a new client. It should be complicated, and hard to remember. It is visible in the CMS interface, so it need not be written down separately."), array("%themeName%" => ($context["themeName"] ?? null), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["server_key", ($context["title"] ?? null), ($context["serverKey"] ?? null), ($context["helpText"] ?? null)], 20, $context, $this->getSourceContext());
        yield "

                ";
        // line 22
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Statistics");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            /* xgettext:no-php-format */            echo strtr(__("We'd love to know you're running %theme_name%. If you're happy for us to collect anonymous statistics (version number, number of displays) then please leave the box ticked. Please un tick the box if your server does not have direct access to the internet."), array("%theme_name%" => ($context["theme_name"] ?? null), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["stats", ($context["title"] ?? null), 1, ($context["helpText"] ?? null)], 24, $context, $this->getSourceContext());
        yield "

                ";
        // line 26
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Next");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_button", [($context["title"] ?? null), "submit"], 27, $context, $this->getSourceContext());
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
        return "install-step6.twig";
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
        return array (  135 => 27,  130 => 26,  124 => 24,  118 => 23,  113 => 22,  107 => 20,  101 => 19,  96 => 18,  90 => 16,  84 => 15,  79 => 14,  73 => 12,  68 => 11,  63 => 9,  60 => 8,  58 => 7,  54 => 5,  50 => 4,  45 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install-step6.twig", "/var/www/cms/views/install-step6.twig");
    }
}
