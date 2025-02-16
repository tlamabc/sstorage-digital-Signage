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

/* authed-user-menu.twig */
class __TwigTemplate_5b1c7463414d2e9d71b59d8bb00a8908 extends Template
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
        yield "<li class=\"dropdown nav-item item\">
    <a href=\"#\" class=\"nav-link\" data-toggle=\"dropdown\" id=\"navbarUserMenu\">
        <img class=\"nav-avatar\" src=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/avatar.jpg"], "method", false, false, false, 3), "html", null, true);
        yield "\" />
    </a>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarUserMenu\">
        <h6 class=\"dropdown-header\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userName", [], "any", false, false, false, 6), "html", null, true);
        yield "<br/>
            <div id=\"XiboClock\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["clock"] ?? null), "html", null, true);
        yield "</div>
        </h6>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item XiboFormButton\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.preferences.form"), "html", null, true);
        yield "\" title=\"";
        echo __("Preferences");
        yield "\">";
        echo __("Preferences");
        yield "</a>

        ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["user.profile"], "method", false, false, false, 12)) {
            // line 13
            yield "            <a class=\"dropdown-item XiboFormButton\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.edit.profile.form"), "html", null, true);
            yield "\" title=\"";
            echo __("Edit Profile");
            yield "\">";
            echo __("Edit Profile");
            yield "</a>
        ";
        }
        // line 15
        yield "
        <a class=\"dropdown-item XiboFormButton\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.applications"), "html", null, true);
        yield "\" title=\"";
        echo __("View my authenticated applications");
        yield "\">";
        echo __("My Applications");
        yield "</a>

        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" id=\"reshowWelcomeMenuItem\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("welcome.view"), "html", null, true);
        yield "\">";
        echo __("Reshow welcome");
        yield "</a>

        <a class=\"dropdown-item XiboFormButton\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("about"), "html", null, true);
        yield "\" title=\"";
        echo __("About the CMS");
        yield "\">";
        echo __("About");
        yield "</a>

        ";
        // line 23
        if ( !($context["hideLogout"] ?? null)) {
            // line 24
            yield "            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" title=\"";
            // line 25
            echo __("Logout");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["logoutUrl"] ?? null), "html", null, true);
            yield "\">";
            echo __("Logout");
            yield "</a>
        ";
        }
        // line 27
        yield "    </div>
</li>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "authed-user-menu.twig";
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
        return array (  122 => 27,  113 => 25,  110 => 24,  108 => 23,  99 => 21,  92 => 19,  82 => 16,  79 => 15,  69 => 13,  67 => 12,  58 => 10,  52 => 7,  48 => 6,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "authed-user-menu.twig", "/var/www/cms/views/authed-user-menu.twig");
    }
}
