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

/* user-form-membership.twig */
class __TwigTemplate_19760c85f7dd5ba127a652ebb84f10e5 extends Template
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
        // line 25
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $context["randomId"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 26
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-membership.twig", 26)->unwrap();
        // line 27
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "user-form-membership.twig", 27)->unwrap();
        // line 25
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-membership.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    ";
        $context["userName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userName", [], "any", false, false, false, 30);
        // line 31
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Manage Membership for %userName%"), array("%userName%" => ($context["userName"] ?? null), ));
        return; yield '';
    }

    // line 34
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 36
        echo __("Save");
        yield ", forms.membersFormSubmit(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["randomId"] ?? null), "html", null, true);
        yield "\")
";
        return; yield '';
    }

    // line 39
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "forms.membersFormOpen";
        return; yield '';
    }

    // line 41
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield json_encode(($context["extra"] ?? null));
        return; yield '';
    }

    // line 43
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["randomId"] ?? null), "html", null, true);
        yield "\" class=\"div-horizontal controlDiv\"
                 data-user-groups=\"true\"
                 data-user-groups-get-url=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search"), "html", null, true);
        yield "\"
                 data-user-groups-param=\"userGroupId\"
                 data-user-groups-param-unassign=\"unassignUserGroupId\"
                 data-user-groups-url=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.assign.userGroup", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\"
            >
                ";
        // line 53
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Check or un-check the options against each display group to control whether they are a member or not.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 54, $context, $this->getSourceContext());
        yield "
                <div class=\"XiboGrid\" id=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
                    <div class=\"XiboFilter card mb-3 bg-light\">
                        <div class=\"FilterDiv card-body\" id=\"Filter\">
                            <form class=\"form-inline\" id=\"userGroupMembersFilter\">
                                ";
        // line 59
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                                ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["group", ($context["title"] ?? null)], 60, $context, $this->getSourceContext());
        yield "
                                ";
        // line 61
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["userIdMember", CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 61)], 61, $context, $this->getSourceContext());
        yield "
                            </form>
                        </div>
                    </div>
                    <table id=\"userGroupMembersTable\" class=\"table table-bordered membersTable\" style=\"width: 100%\">
                        <thead>
                        <tr>
                            <th>";
        // line 68
        echo __("ID");
        yield "</th>
                            <th>";
        // line 69
        echo __("User Groups");
        yield "</th>
                            <th>";
        // line 70
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
        return "user-form-membership.twig";
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
        return array (  174 => 70,  170 => 69,  166 => 68,  156 => 61,  151 => 60,  146 => 59,  139 => 55,  134 => 54,  129 => 53,  124 => 51,  118 => 48,  113 => 46,  109 => 44,  105 => 43,  97 => 41,  89 => 39,  80 => 36,  75 => 35,  71 => 34,  65 => 31,  62 => 30,  58 => 29,  53 => 25,  51 => 27,  49 => 26,  47 => 23,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-membership.twig", "/var/www/cms/views/user-form-membership.twig");
    }
}
