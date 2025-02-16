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

/* install-step1.twig */
class __TwigTemplate_665871ee2fff6e09712e43b2d3956f76 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "install-step1.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base-install.twig", "install-step1.twig", 1);
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
            /* xgettext:no-php-format */            echo strtr(__("Welcome to the %themeName% Installation"), array("%themeName%" => ($context["themeName"] ?? null), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        yield "            <h1>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["header"] ?? null), "html", null, true);
        yield "</h1>
            <p>";
        // line 10
        /* xgettext:no-php-format */        echo strtr(__("Thank you for choosing %themeName%. This installation wizard will take you through
                setting up %themeName% one step at a time. There are 6 steps in total, the first one is below."), array("%themeName%" => ($context["themeName"] ?? null), "%themeName%" =>         // line 11
($context["themeName"] ?? null), ));
        // line 12
        yield "            </p>
            <p><a class=\"btn btn-primary btn-lg\" role=\"button\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["cms_install_url"], "method", false, false, false, 13), "html", null, true);
        yield "\" target=\"_blank\">";
        echo __("Installation guide");
        yield " &raquo;</a></p>
        </div>
    </div>
";
        return; yield '';
    }

    // line 18
    public function block_stepContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 21
        $context["themeName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["app_name"], "method", false, false, false, 21);
        // line 22
        yield "            <p>";
        /* xgettext:no-php-format */        echo strtr(__("First we need to check if your server meets %themeName%'s requirements."), array("%themeName%" => ($context["themeName"] ?? null), ));
        yield "</p>
            <table id=\"sessions\" class=\"table table-striped\">
                <thead>
                <tr>
                    <th>";
        // line 26
        echo __("Item");
        yield "</th>
                    <th>";
        // line 27
        echo __("Status");
        yield "</th>
                    <th>";
        // line 28
        echo __("Advice");
        yield "</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Settings File System Permissions"), "html", null, true);
        yield "</td>
                        <td>
                            ";
        // line 35
        if (($context["isSettingsPathWriteable"] ?? null)) {
            // line 36
            yield "                                <span class=\"fa fa-check\"></span>
                            ";
        } else {
            // line 38
            yield "                                <span class=\"fa fa-times\"></span>
                            ";
        }
        // line 40
        yield "                        </td>
                        <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Write permissions are required for web/settings.php"), "html", null, true);
        yield "</td>
                    </tr>
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "checkEnvironment", [], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["check"]) {
            // line 44
            yield "                    <tr>
                        <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["check"], "item", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["check"], "status", [], "any", false, false, false, 47) == 0)) {
                // line 48
                yield "                                <span class=\"fa fa-times\"></span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 49
$context["check"], "status", [], "any", false, false, false, 49) == 1)) {
                // line 50
                yield "                                <span class=\"fa fa-check\"></span>
                            ";
            } else {
                // line 52
                yield "                                <span class=\"fa fa-exclamation\"></span>
                            ";
            }
            // line 54
            yield "                        </td>
                        <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["check"], "advice", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['check'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "                </tbody>
            </table>
            ";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "environmentFault", [], "method", false, false, false, 60)) {
            // line 61
            yield "                <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 1]), "html", null, true);
            yield "\" class=\"form-inline\">
                    ";
            // line 62
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Retest");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_button", [($context["title"] ?? null), "submit"], 63, $context, $this->getSourceContext());
            yield "
                </form>
            ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 65
($context["config"] ?? null), "environmentWarning", [], "method", false, false, false, 65)) {
            // line 66
            yield "                <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 2]), "html", null, true);
            yield "\" class=\"form-inline\">
                    ";
            // line 67
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Retest");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 68
            yield "                    ";
            $context["link"] = $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 1]);
            // line 69
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_button", [($context["title"] ?? null), "link", ($context["link"] ?? null)], 69, $context, $this->getSourceContext());
            yield "

                    ";
            // line 71
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Next");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 72
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_button", [($context["title"] ?? null), "submit", ($context["link"] ?? null)], 72, $context, $this->getSourceContext());
            yield "
                </form>
            ";
        } else {
            // line 75
            yield "                <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 2]), "html", null, true);
            yield "\" class=\"form-inline\">
                    ";
            // line 76
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Next");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 77
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_button", [($context["title"] ?? null), "submit"], 77, $context, $this->getSourceContext());
            yield "
                </form>
            ";
        }
        // line 80
        yield "        </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install-step1.twig";
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
        return array (  258 => 80,  251 => 77,  246 => 76,  241 => 75,  234 => 72,  229 => 71,  223 => 69,  220 => 68,  215 => 67,  210 => 66,  208 => 65,  202 => 63,  197 => 62,  192 => 61,  190 => 60,  186 => 58,  177 => 55,  174 => 54,  170 => 52,  166 => 50,  164 => 49,  161 => 48,  159 => 47,  154 => 45,  151 => 44,  147 => 43,  142 => 41,  139 => 40,  135 => 38,  131 => 36,  129 => 35,  124 => 33,  116 => 28,  112 => 27,  108 => 26,  100 => 22,  98 => 21,  94 => 19,  90 => 18,  79 => 13,  76 => 12,  74 => 11,  72 => 10,  67 => 9,  61 => 8,  59 => 7,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install-step1.twig", "/var/www/cms/views/install-step1.twig");
    }
}
