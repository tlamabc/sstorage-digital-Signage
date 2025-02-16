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

/* layout-form-publish.twig */
class __TwigTemplate_d2d7567480331b72729c8940295ed0c1 extends Template
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
            'formFieldActions' => [$this, 'block_formFieldActions'],
            'callBack' => [$this, 'block_callBack'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-publish.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-publish.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        $context["layout"] = CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 28);
        // line 29
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Publish %layout%"), array("%layout%" => ($context["layout"] ?? null), ));
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
        echo __("Publish");
        yield ", \$(\"#layoutPublishForm\").submit()
";
        return; yield '';
    }

    // line 37
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    [{
    \"field\": \"publishNow\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"\" }
    }
    }]
";
        return; yield '';
    }

    // line 73
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "layoutPublishFormOpen";
        return; yield '';
    }

    // line 75
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutPublishForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.publish", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 78)]), "html", null, true);
        yield "\">
\t\t\t\t";
        // line 79
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("Are you sure you want to publish this Layout? If it is already in use the update will automatically get pushed.")], 79, $context, $this->getSourceContext());
        yield "

                ";
        // line 81
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Publish Now?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When selected, layout will be published immediately, if it should be published at a specific time, uncheck this checkbox and pick a date in the field below");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["publishNow", ($context["title"] ?? null), 1, ($context["helpText"] ?? null)], 83, $context, $this->getSourceContext());
        yield "

                ";
        // line 85
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Publish Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the date and time to publish the layout");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["publishDate", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "publishedDate", [], "any", false, false, false, 87), ($context["helpText"] ?? null), "publish-date-control", ""], 87, $context, $this->getSourceContext());
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
        return "layout-form-publish.twig";
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
        return array (  177 => 87,  171 => 86,  166 => 85,  160 => 83,  154 => 82,  149 => 81,  144 => 79,  140 => 78,  136 => 76,  132 => 75,  124 => 73,  83 => 37,  76 => 34,  71 => 33,  67 => 32,  61 => 29,  58 => 28,  54 => 27,  49 => 24,  47 => 25,  40 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-publish.twig", "/var/www/cms/views/layout-form-publish.twig");
    }
}
