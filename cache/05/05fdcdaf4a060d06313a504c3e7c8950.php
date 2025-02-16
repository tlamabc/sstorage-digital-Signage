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

/* report-schedule-buttons.twig */
class __TwigTemplate_b94dde8c71dc8358e74eb05290238ca5 extends Template
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
        yield "<div class=\"widget-action-menu pull-right\">
    <button class=\"btn btn-success XiboFormButton\" title=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reportAddBtnTitle"] ?? null), "html", null, true);
        yield "\" id=\"reportAddBtn\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.add.form"), "html", null, true);
        yield "?reportName=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reportName"] ?? null), "html", null, true);
        yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Schedule");
        yield "</button>
    <button class=\"btn btn-info XiboRedirectButton\" href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("savedreport.view"), "html", null, true);
        yield "?reportName=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reportName"] ?? null), "html", null, true);
        yield "\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
        echo __("Saved Reports");
        yield "</button>
    <button class=\"btn btn-primary XiboRedirectButton\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.view"), "html", null, true);
        yield "?reportName=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reportName"] ?? null), "html", null, true);
        yield "\"><i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> ";
        echo __("Report Schedules");
        yield "</button>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "report-schedule-buttons.twig";
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
        return array (  59 => 4,  51 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "report-schedule-buttons.twig", "/var/www/cms/views/report-schedule-buttons.twig");
    }
}
