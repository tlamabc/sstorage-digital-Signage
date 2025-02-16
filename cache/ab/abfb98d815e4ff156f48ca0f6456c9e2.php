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

/* authed-notification-drawer.twig */
class __TwigTemplate_66931c900c66d99d3cd8485bd8b72ada extends Template
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
    <a id=\"navbarNotificationMenuLink\" href=\"#\" class=\"nav-link notification-drawer-icon\" data-toggle=\"dropdown\">
        <i class=\"fa fa-bell\"></i> ";
        // line 3
        if ((($context["notificationCount"] ?? null) > 0)) {
            yield "<span class=\"badge red\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["notificationCount"] ?? null), "html", null, true);
            yield "</span>";
        }
        // line 4
        yield "    </a>
    <div class=\"dropdown-menu dropdown-menu-right notification-drawer\">
        <h6 class=\"dropdown-header\">";
        // line 6
        echo __("Notifications");
        yield "</h6>
        ";
        // line 7
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["notifications"] ?? null)) > 0)) {
            // line 8
            yield "            <div class=\"dropdown-divider\"></div>
        ";
        }
        // line 10
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["notifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 11
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "notificationId", [], "any", false, false, false, 11)) {
                // line 12
                yield "                <a class=\"XiboFormButton notification dropdown-item\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("notification.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "notificationId", [], "any", false, false, false, 12)]), "html", null, true);
                yield "\"><span class=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "read", [], "any", false, false, false, 12)) {
                    yield "notification-unread";
                } else {
                    yield "notification-read";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "subject", [], "any", false, false, false, 12), "html", null, true);
                yield " - <span class=\"notification-date\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "releaseDt", [], "any", false, false, false, 12), "html", null, true);
                yield "</span></span></a>
            ";
            } else {
                // line 14
                yield "                <a href=\"#\" class=\"notification dropdown-item\"><span class=\"fa fa-exclamation-circle\"></span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "subject", [], "any", false, false, false, 14), "html", null, true);
                yield " - <span class=\"notification-date\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "releaseDt", [], "any", false, false, false, 14), "html", null, true);
                yield "</span></a>
            ";
            }
            // line 16
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
        ";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["notification.centre"], "method", false, false, false, 18)) {
            // line 19
            yield "            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("notification.view"), "html", null, true);
            yield "\">";
            echo __("Notification Centre");
            yield "</a>
        ";
        }
        // line 22
        yield "    </div>
</li>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "authed-notification-drawer.twig";
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
        return array (  115 => 22,  108 => 20,  105 => 19,  103 => 18,  100 => 17,  94 => 16,  86 => 14,  70 => 12,  67 => 11,  62 => 10,  58 => 8,  56 => 7,  52 => 6,  48 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "authed-notification-drawer.twig", "/var/www/cms/views/authed-notification-drawer.twig");
    }
}
