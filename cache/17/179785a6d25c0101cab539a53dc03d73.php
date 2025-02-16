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

/* playlist-form-usage.twig */
class __TwigTemplate_56f1905809cc44bb07b01a8658766736 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "playlist-form-usage.twig", 27)->unwrap();
        // line 28
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "playlist-form-usage.twig", 28)->unwrap();
        // line 26
        $this->parent = $this->loadTemplate("form-base.twig", "playlist-form-usage.twig", 26);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        $context["playlistName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "name", [], "any", false, false, false, 31);
        // line 32
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Usage Report for %playlistName%"), array("%playlistName%" => ($context["playlistName"] ?? null), ));
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
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#displays\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Displays");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#layouts\" role=\"tab\" data-toggle=\"tab\"><span>";
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
        echo __("If the playlist is used in scheduled events it is shown below. To restrict to a specific time enter a date in the filter below.");
        // line 54
        yield "                            </p>
                        </div>
                    </div>
                    <div class=\"XiboGrid\" id=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"usageReport\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"XiboFilter\">
                                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                                        <form class=\"form-inline\" id=\"usageReportForm\">
                                            ";
        // line 63
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("From Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["playlistEventFromDate", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", ""], 64, $context, $this->getSourceContext());
        yield "

                                            ";
        // line 66
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("To Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["playlistEventToDate", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", ""], 67, $context, $this->getSourceContext());
        yield "
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <table id=\"usageReportTable\" class=\"table table-bordered membersTable\" style=\"width:100%\" data-playlist-id=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "playlistId", [], "any", false, false, false, 75), "html", null, true);
        yield "\">
                                    <thead>
                                        <tr>
                                            <th>";
        // line 78
        echo __("ID");
        yield "</th>
                                            <th>";
        // line 79
        echo __("Display");
        yield "</th>
                                            <th>";
        // line 80
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
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"usageReportLayouts\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <table id=\"usageReportLayoutsTable\" class=\"table table-bordered\" style=\"width:100%\" data-playlist-id=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "playlistId", [], "any", false, false, false, 94), "html", null, true);
        yield "\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 97
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 98
        echo __("Layout");
        yield "</th>
                                        <th>";
        // line 99
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
        return "playlist-form-usage.twig";
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
        return array (  205 => 99,  201 => 98,  197 => 97,  191 => 94,  185 => 91,  171 => 80,  167 => 79,  163 => 78,  157 => 75,  145 => 67,  140 => 66,  134 => 64,  129 => 63,  120 => 57,  115 => 54,  113 => 53,  103 => 46,  99 => 45,  94 => 42,  90 => 41,  82 => 39,  74 => 36,  70 => 35,  64 => 32,  61 => 31,  57 => 30,  52 => 26,  50 => 28,  48 => 27,  46 => 24,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-form-usage.twig", "/var/www/cms/views/playlist-form-usage.twig");
    }
}
