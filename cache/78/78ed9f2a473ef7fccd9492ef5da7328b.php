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

/* syncgroup-form-members.twig */
class __TwigTemplate_58101add400cd9163ef751387d272645 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "syncgroup-form-members.twig", 27)->unwrap();
        // line 28
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "syncgroup-form-members.twig", 28)->unwrap();
        // line 26
        $this->parent = $this->loadTemplate("form-base.twig", "syncgroup-form-members.twig", 26);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        $context["syncGroupName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["syncGroup"] ?? null), "name", [], "any", false, false, false, 31);
        // line 32
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Manage Membership for %syncGroupName%"), array("%syncGroupName%" => ($context["syncGroupName"] ?? null), ));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.members", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["syncGroup"] ?? null), "syncGroupId", [], "any", false, false, false, 52)]), "html", null, true);
        yield "\"
                    ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["syncGroup"] ?? null), "leadDisplayId", [], "any", false, false, false, 53) == null)) {
            // line 54
            yield "                        data-next-form-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.form.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["syncGroup"] ?? null), "syncGroupId", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\"
                    ";
        }
        // line 56
        yield "            >
                ";
        // line 57
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Check or un-check the options against each display to control whether they are a member or not.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 58, $context, $this->getSourceContext());
        yield "
                <div class=\"XiboGrid\" id=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
                    <div class=\"XiboFilter card mb-3 bg-light\">
                        <div class=\"FilterDiv card-body\" id=\"Filter\">
                            <form class=\"form-inline\" id=\"displayForm\">
                                ";
        // line 63
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                                ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["display", ($context["title"] ?? null)], 64, $context, $this->getSourceContext());
        yield "

                                ";
        // line 66
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Authorised");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                                ";
        $context["values"] = [["id" =>  -1, "value" => ""], ["id" => 1, "value" => "Yes"], ["id" => 0, "value" => "No"]];
        // line 68
        yield "                                ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["authorised", "single", ($context["title"] ?? null),  -1, ($context["values"] ?? null), "id", "value"], 68, $context, $this->getSourceContext());
        yield "

                                ";
        // line 70
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["syncGroupIdMembers", CoreExtension::getAttribute($this->env, $this->source, ($context["syncGroup"] ?? null), "syncGroupId", [], "any", false, false, false, 70)], 70, $context, $this->getSourceContext());
        yield "
                            </form>
                        </div>
                    </div>
                    <table id=\"displaysMembersTable\" class=\"table table-bordered membersTable\">
                        <thead>
                        <tr>
                            <th>";
        // line 77
        echo __("ID");
        yield "</th>
                            <th>";
        // line 78
        echo __("Display");
        yield "</th>
                            <th>";
        // line 79
        echo __("Status");
        yield "</th>
                            <th>";
        // line 80
        echo __("Logged In");
        yield "</th>
                            <th>";
        // line 81
        echo __("Version");
        yield "</th>
                            <th>";
        // line 82
        echo __("Member");
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
        return "syncgroup-form-members.twig";
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
        return array (  211 => 82,  207 => 81,  203 => 80,  199 => 79,  195 => 78,  191 => 77,  181 => 70,  175 => 68,  172 => 67,  167 => 66,  161 => 64,  156 => 63,  149 => 59,  144 => 58,  139 => 57,  136 => 56,  130 => 54,  128 => 53,  124 => 52,  118 => 49,  113 => 47,  109 => 45,  105 => 44,  97 => 42,  89 => 40,  80 => 37,  75 => 36,  71 => 35,  65 => 32,  62 => 31,  58 => 30,  53 => 26,  51 => 28,  49 => 27,  47 => 24,  40 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "syncgroup-form-members.twig", "/var/www/cms/views/syncgroup-form-members.twig");
    }
}
