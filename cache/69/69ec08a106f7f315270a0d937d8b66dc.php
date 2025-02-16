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

/* displaygroup-form-members.twig */
class __TwigTemplate_f061d852de4ae0e359aa605df269e4eb extends Template
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
            'extra' => [$this, 'block_extra'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displaygroup-form-members.twig", 27)->unwrap();
        // line 28
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "displaygroup-form-members.twig", 28)->unwrap();
        // line 26
        $this->parent = $this->loadTemplate("form-base.twig", "displaygroup-form-members.twig", 26);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        $context["displayGroupName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroup", [], "any", false, false, false, 31);
        // line 32
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Manage Membership for %displayGroupName%"), array("%displayGroupName%" => ($context["displayGroupName"] ?? null), ));
        return; yield '';
    }

    // line 35
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 37
        echo __("Save");
        yield ", forms.membersFormSubmit(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["randomId"] ?? null), "html", null, true);
        yield "\")
";
        return; yield '';
    }

    // line 40
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "forms.membersFormOpen";
        return; yield '';
    }

    // line 42
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield json_encode(($context["extra"] ?? null));
        return; yield '';
    }

    // line 44
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["randomId"] ?? null), "html", null, true);
        yield "\" class=\"div-horizontal controlDiv\"
                 data-display=\"true\"
                 data-display-get-url=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        yield "\"
                 data-display-param=\"displayId\"
                 data-display-param-unassign=\"unassignDisplayId\"
                 data-display-url=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.assign.display", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroupId", [], "any", false, false, false, 52)]), "html", null, true);
        yield "\"
                 data-display-groups=\"true\"
                 data-display-groups-get-url=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search"), "html", null, true);
        yield "\"
                 data-display-groups-param=\"displayGroupId\"
                 data-display-groups-param-unassign=\"unassignDisplayGroupId\"
                 data-display-groups-url=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.assign.displayGroup", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroupId", [], "any", false, false, false, 57)]), "html", null, true);
        yield "\"
            >
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#displayTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 60
        echo __("Displays");
        yield "</span></a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#displayGroupTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 61
        echo __("Display Groups");
        yield "</span></a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#treeTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 62
        echo __("Relationship Tree");
        yield "</span></a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"displayTab\">
                        ";
        // line 66
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Check or un-check the options against each display to control whether they are a member or not.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 67, $context, $this->getSourceContext());
        yield "
                        <div class=\"XiboGrid\" id=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
                            <div class=\"XiboFilter card mb-3 bg-light\">
                                <div class=\"FilterDiv card-body\" id=\"Filter\">
                                    <form class=\"form-inline\" id=\"displayForm\">
                                        ";
        // line 72
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "                                        ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["display", ($context["title"] ?? null)], 73, $context, $this->getSourceContext());
        yield "
                                        
                                        ";
        // line 75
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Authorised");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                                        ";
        $context["values"] = [["id" =>  -1, "value" => ""], ["id" => 1, "value" => "Yes"], ["id" => 0, "value" => "No"]];
        // line 77
        yield "                                        ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["authorised", "single", ($context["title"] ?? null),  -1, ($context["values"] ?? null), "id", "value"], 77, $context, $this->getSourceContext());
        yield "

                                        ";
        // line 79
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["displayGroupIdMembers", CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroupId", [], "any", false, false, false, 79)], 79, $context, $this->getSourceContext());
        yield "
                                    </form>
                                </div>
                            </div>
                            <table id=\"displaysMembersTable\" class=\"table table-bordered membersTable\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 86
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 87
        echo __("Display");
        yield "</th>
                                        <th>";
        // line 88
        echo __("Status");
        yield "</th>
                                        <th>";
        // line 89
        echo __("Logged In");
        yield "</th>
                                        <th>";
        // line 90
        echo __("Version");
        yield "</th>
                                        <th>";
        // line 91
        echo __("Member");
        yield "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"displayGroupTab\">
                        ";
        // line 100
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Check or un-check the options against each display group to control whether they are a member or not.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 101, $context, $this->getSourceContext());
        yield "
                        <div class=\"XiboGrid\" id=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
                            <div class=\"XiboFilter card mb-3 bg-light\">
                                <div class=\"FilterDiv card-body\" id=\"Filter\">
                                    <form class=\"form-inline\" id=\"displayGroupForm\">
                                        ";
        // line 106
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        yield "                                        ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["displayGroup", ($context["title"] ?? null)], 107, $context, $this->getSourceContext());
        yield "

                                        ";
        // line 109
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["displayGroupIdMembers", CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroupId", [], "any", false, false, false, 109)], 109, $context, $this->getSourceContext());
        yield "
                                        ";
        // line 110
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["isDynamic", 0], 110, $context, $this->getSourceContext());
        yield "
                                    </form>
                                </div>
                            </div>
                            <table id=\"displaysGroupsMembersTable\" class=\"table table-bordered membersTable\" style=\"width: 100%\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 117
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 118
        echo __("Display Group");
        yield "</th>
                                        <th>";
        // line 119
        echo __("Member");
        yield "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"treeTab\">
                        ";
        // line 128
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Below is the family tree for this Display Group.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 129, $context, $this->getSourceContext());
        yield "

                        ";
        // line 131
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Display Group being edited is in bold. The list is ordered so that items above the current Display Group are its ancestors and items below are its descendants.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 132, $context, $this->getSourceContext());
        yield "
                        <ul>
                            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tree"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 135
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["group"], "displayGroup", [], "any", false, false, false, 135) == CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroup", [], "any", false, false, false, 135))) {
                // line 136
                yield "                                    <li><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "displayGroup", [], "any", false, false, false, 136), "html", null, true);
                yield "</strong></li>
                                ";
            } else {
                // line 138
                yield "                                    <li><a class=\"XiboFormButton\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.members.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["group"], "displayGroupId", [], "any", false, false, false, 138)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "displayGroup", [], "any", false, false, false, 138), "html", null, true);
                yield "</a></li>
                                ";
            }
            // line 140
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "                        </ul>
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
        return "displaygroup-form-members.twig";
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
        return array (  351 => 141,  345 => 140,  337 => 138,  331 => 136,  328 => 135,  324 => 134,  318 => 132,  313 => 131,  307 => 129,  302 => 128,  290 => 119,  286 => 118,  282 => 117,  272 => 110,  268 => 109,  262 => 107,  257 => 106,  250 => 102,  245 => 101,  240 => 100,  228 => 91,  224 => 90,  220 => 89,  216 => 88,  212 => 87,  208 => 86,  198 => 79,  192 => 77,  189 => 76,  184 => 75,  178 => 73,  173 => 72,  166 => 68,  161 => 67,  156 => 66,  149 => 62,  145 => 61,  141 => 60,  135 => 57,  129 => 54,  124 => 52,  118 => 49,  113 => 47,  109 => 45,  105 => 44,  97 => 42,  89 => 40,  80 => 37,  75 => 36,  71 => 35,  65 => 32,  62 => 31,  58 => 30,  53 => 26,  51 => 28,  49 => 27,  47 => 24,  40 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "displaygroup-form-members.twig", "/var/www/cms/views/displaygroup-form-members.twig");
    }
}
