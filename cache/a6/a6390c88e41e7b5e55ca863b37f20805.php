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

/* report-selector.twig */
class __TwigTemplate_049a2e3376ee83b653dc08197473def3 extends Template
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
        yield "<div class=\"widget-navigation-menu\">
    <ul class=\"nav nav-pills\">
        <li role=\"presentation\" class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("report.view"), "html", null, true);
        yield "\">";
        echo __("All Reports");
        yield "</a></li>
        <li role=\"presentation\" class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Reports <span class=\"caret\"></span> </a>
            <div class=\"dropdown-menu\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["availableReports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["reports"]) {
            // line 8
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["reports"]);
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 9
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["report"], "hidden", [], "any", false, false, false, 9) != 1) && (CoreExtension::getAttribute($this->env, $this->source, $context["report"], "category", [], "any", false, false, false, 9) == ($context["reportCategory"] ?? null)))) {
                    // line 10
                    yield "                            <a class=\"dropdown-item\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("report.form", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["report"], "name", [], "any", false, false, false, 10)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "description", [], "any", false, false, false, 10), "html", null, true);
                    yield "</a>
                        ";
                }
                // line 12
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reports'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "            </div>
        </li>
    </ul>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "report-selector.twig";
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
        return array (  83 => 14,  77 => 13,  71 => 12,  63 => 10,  60 => 9,  55 => 8,  51 => 7,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "report-selector.twig", "/var/www/cms/views/report-selector.twig");
    }
}
