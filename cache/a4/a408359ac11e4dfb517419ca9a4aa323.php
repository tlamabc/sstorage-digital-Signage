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

/* usergroup-form-members.twig */
class __TwigTemplate_022fe56ba16cc39906d9f589a47870eb extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "usergroup-form-members.twig", 27)->unwrap();
        // line 28
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "usergroup-form-members.twig", 28)->unwrap();
        // line 26
        $this->parent = $this->loadTemplate("form-base.twig", "usergroup-form-members.twig", 26);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        $context["userGroupName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "group", [], "any", false, false, false, 31);
        // line 32
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Manage Membership for %userGroupName%"), array("%userGroupName%" => ($context["userGroupName"] ?? null), ));
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
                 data-user=\"true\"
                 data-user-get-url=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search"), "html", null, true);
        yield "\"
                 data-user-param=\"userId\"
                 data-user-param-unassign=\"unassignUserId\"
                 data-user-url=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.members.assign", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "groupId", [], "any", false, false, false, 52)]), "html", null, true);
        yield "\"
            >
                ";
        // line 54
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Check or un-check the options against each display group to control whether they are a member or not.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 55, $context, $this->getSourceContext());
        yield "
                <div class=\"XiboGrid\" id=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
                    <div class=\"XiboFilter card mb-3 bg-light\">
                        <div class=\"FilterDiv card-body\" id=\"Filter\">
                            <form class=\"form-inline\" id=\"userMembersFilter\">
                                ";
        // line 60
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                                ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["userName", ($context["title"] ?? null)], 61, $context, $this->getSourceContext());
        yield "
                                ";
        // line 62
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["userGroupIdMembers", CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "groupId", [], "any", false, false, false, 62)], 62, $context, $this->getSourceContext());
        yield "
                            </form>
                        </div>
                    </div>
                    <table id=\"userMembersTable\" class=\"table table-bordered membersTable\" style=\"width: 100%\">
                        <thead>
                        <tr>
                            <th>";
        // line 69
        echo __("ID");
        yield "</th>
                            <th>";
        // line 70
        echo __("User");
        yield "</th>
                            <th>";
        // line 71
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
        return "usergroup-form-members.twig";
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
        return array (  174 => 71,  170 => 70,  166 => 69,  156 => 62,  151 => 61,  146 => 60,  139 => 56,  134 => 55,  129 => 54,  124 => 52,  118 => 49,  113 => 47,  109 => 45,  105 => 44,  97 => 42,  89 => 40,  80 => 37,  75 => 36,  71 => 35,  65 => 32,  62 => 31,  58 => 30,  53 => 26,  51 => 28,  49 => 27,  47 => 24,  40 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "usergroup-form-members.twig", "/var/www/cms/views/usergroup-form-members.twig");
    }
}
