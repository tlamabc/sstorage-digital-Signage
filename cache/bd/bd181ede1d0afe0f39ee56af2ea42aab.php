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

/* library-form-usage.twig */
class __TwigTemplate_f9fe708731ec6a499cf3e4681cf19850 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "library-form-usage.twig", 27)->unwrap();
        // line 28
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "library-form-usage.twig", 28)->unwrap();
        // line 26
        $this->parent = $this->loadTemplate("form-base.twig", "library-form-usage.twig", 26);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        $context["mediaName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "name", [], "any", false, false, false, 31);
        // line 32
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Usage Report for %mediaName%"), array("%mediaName%" => ($context["mediaName"] ?? null), ));
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
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\"href=\"#displays\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Displays");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\"href=\"#layouts\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("Layouts");
        yield "</span></a></li>
            </ul>
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"displays\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"alert alert-info\">
                                ";
        // line 53
        /* xgettext:no-php-format */        echo strtr(__("This media is directly assigned to %countDisplays% displays, the ones you have permission to see are shown below."), array("%countDisplays%" => ($context["countDisplays"] ?? null), ));
        // line 54
        yield "                                ";
        echo __("Direct assignment is where Layouts/Media are assigned to a Display/DisplayGroup without being in a Schedule.");
        // line 55
        yield "                                <br>
                                <br>
                                ";
        // line 57
        echo __("If the media is used in scheduled events it is also shown below. To restrict to a specific time enter a date in the filter below.");
        // line 58
        yield "                            </p>
                        </div>
                    </div>
                    <div class=\"XiboGrid\" id=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"usageReport\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"XiboFilter\">
                                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                                        <form class=\"form-inline\" id=\"usageReportForm\">
                                            ";
        // line 67
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("From Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["mediaEventFromDate", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", ""], 68, $context, $this->getSourceContext());
        yield "

                                            ";
        // line 70
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("To Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        yield "                                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["mediaEventToDate", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", ""], 71, $context, $this->getSourceContext());
        yield "
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <table id=\"usageReportTable\" class=\"table table-bordered membersTable\" style=\"width:100%\" data-media-id=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 79), "html", null, true);
        yield "\">
                                    <thead>
                                        <tr>
                                            <th>";
        // line 82
        echo __("ID");
        yield "</th>
                                            <th>";
        // line 83
        echo __("Display");
        yield "</th>
                                            <th>";
        // line 84
        echo __("Description");
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
                <div class=\"tab-pane\" id=\"layouts\">
                    <div class=\"XiboGrid\" id=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"usageReportLayouts\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <table id=\"usageReportLayoutsTable\" class=\"table table-bordered\" style=\"width:100%\" data-media-id=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 98), "html", null, true);
        yield "\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 101
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 102
        echo __("Layout");
        yield "</th>
                                        <th>";
        // line 103
        echo __("Description");
        yield "</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
        return "library-form-usage.twig";
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
        return array (  214 => 103,  210 => 102,  206 => 101,  200 => 98,  194 => 95,  180 => 84,  176 => 83,  172 => 82,  166 => 79,  154 => 71,  149 => 70,  143 => 68,  138 => 67,  129 => 61,  124 => 58,  122 => 57,  118 => 55,  115 => 54,  113 => 53,  103 => 46,  99 => 45,  94 => 42,  90 => 41,  82 => 39,  74 => 36,  70 => 35,  64 => 32,  61 => 31,  57 => 30,  52 => 26,  50 => 28,  48 => 27,  46 => 24,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-form-usage.twig", "/var/www/cms/views/library-form-usage.twig");
    }
}
