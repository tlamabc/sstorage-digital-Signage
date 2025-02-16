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

/* tag-usage-form.twig */
class __TwigTemplate_ce4592ebcf40d1b644acb2c6e8374447 extends Template
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
            'callBack' => [$this, 'block_callBack'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $context["randomId"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 27
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "tag-usage-form.twig", 27)->unwrap();
        // line 28
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "tag-usage-form.twig", 28)->unwrap();
        // line 26
        $this->parent = $this->loadTemplate("form-base.twig", "tag-usage-form.twig", 26);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        $context["tagName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["tag"] ?? null), "tag", [], "any", false, false, false, 31);
        // line 32
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Usage Report for %tagName%"), array("%tagName%" => ($context["tagName"] ?? null), ));
        return; yield '';
    }

    // line 35
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "    ";
        echo __("Close");
        yield ", XiboDialogClose()
";
        return; yield '';
    }

    // line 39
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "usageFormOpen";
        return; yield '';
    }

    // line 41
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"XiboGrid\" id=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"tagUsageGrid\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"tagUsageTable\" class=\"table table-bordered\" style=\"width:100%\"
                           data-tag-id=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tag"] ?? null), "tagId", [], "any", false, false, false, 54), "html", null, true);
        yield "\">
                        <thead>
                        <tr>
                            <th>";
        // line 57
        echo __("ID");
        yield "</th>
                            <th>";
        // line 58
        echo __("Type");
        yield "</th>
                            <th>";
        // line 59
        echo __("Name");
        yield "</th>
                            <th>";
        // line 60
        echo __("Tag Value");
        yield "</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
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
        return "tag-usage-form.twig";
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
        return array (  129 => 60,  125 => 59,  121 => 58,  117 => 57,  111 => 54,  98 => 44,  94 => 42,  90 => 41,  82 => 39,  74 => 36,  70 => 35,  64 => 32,  61 => 31,  57 => 30,  52 => 26,  50 => 28,  48 => 27,  46 => 24,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "tag-usage-form.twig", "/var/www/cms/views/tag-usage-form.twig");
    }
}
