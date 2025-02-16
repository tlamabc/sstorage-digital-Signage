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

/* layout-form-assign-to-campaign.twig */
class __TwigTemplate_0c350df2625ea801fcece6827c3302e1 extends Template
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
        // line 24
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-assign-to-campaign.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-assign-to-campaign.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 28);
        // line 29
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Assign %name% to a Campaign"), array("%name%" => ($context["name"] ?? null), ));
        return; yield '';
    }

    // line 32
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 34
        echo __("Assign");
        yield ", assignLayoutToCampaignFormSubmit()
";
        return; yield '';
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutAssignCampaignForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.assign.layout", ["id" => ":id"]), "html", null, true);
        yield "\" data-layout-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 40), "html", null, true);
        yield "\">
                ";
        // line 41
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Campaign");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield "                ";
        $context["attributes"] = [["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search") . "?type=list")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "campaignId"], ["name" => "data-text-property", "value" => "campaign"]];
        // line 48
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select the Campaign you would like to assign this Layout to. It will be assigned to the end of the Campaign.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["campaignId", "single", ($context["title"] ?? null), null, ($context["campaigns"] ?? null), "campaignId", "campaign", ($context["helpText"] ?? null), "pagedSelect", "", "b", "", ($context["attributes"] ?? null)], 49, $context, $this->getSourceContext());
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
        return "layout-form-assign-to-campaign.twig";
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
        return array (  109 => 49,  103 => 48,  100 => 42,  95 => 41,  89 => 40,  85 => 38,  81 => 37,  74 => 34,  69 => 33,  65 => 32,  59 => 29,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-assign-to-campaign.twig", "/var/www/cms/views/layout-form-assign-to-campaign.twig");
    }
}
