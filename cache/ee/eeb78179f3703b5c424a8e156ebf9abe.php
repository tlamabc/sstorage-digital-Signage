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

/* campaign-form-layout-delete.twig */
class __TwigTemplate_ee9f4d3c236033feb463318ba548080a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "campaign-form-layout-delete.twig", 3)->unwrap();
        // line 2
        $this->parent = $this->loadTemplate("form-base.twig", "campaign-form-layout-delete.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        $context["layout"] = CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 6);
        // line 7
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Remove %layout%"), array("%layout%" => ($context["layout"] ?? null), ));
        return; yield '';
    }

    // line 10
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        yield "    ";
        echo __("No");
        yield ", XiboDialogClose()
    ";
        // line 12
        echo __("Yes");
        yield ", \$(\"#campaignRemoveLayout\").submit()
";
        return; yield '';
    }

    // line 15
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"campaignRemoveLayout\" class=\"XiboForm form-horizontal\" method=\"delete\"
                  data-submit-call-back=\"refreshLayoutAssignmentsTable\"
                  action=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.remove.layout", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaignId", [], "any", false, false, false, 20)]), "html", null, true);
        yield "?layoutId=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 20), "html", null, true);
        yield "&displayOrder=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "displayOrder", [], "any", false, false, false, 20), "html", null, true);
        yield "\">
                ";
        // line 21
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Are you sure you want remove this layout from the campaign?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 22, $context, $this->getSourceContext());
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
        return "campaign-form-layout-delete.twig";
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
        return array (  104 => 22,  99 => 21,  91 => 20,  85 => 16,  81 => 15,  74 => 12,  69 => 11,  65 => 10,  59 => 7,  56 => 6,  52 => 5,  47 => 2,  45 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "campaign-form-layout-delete.twig", "/var/www/cms/views/campaign-form-layout-delete.twig");
    }
}
