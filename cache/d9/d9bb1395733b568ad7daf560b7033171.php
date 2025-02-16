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

/* user-form-onboarding.twig */
class __TwigTemplate_1d25646edfb0815d51758d9a3873530f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-onboarding.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-onboarding.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add New User");
        return; yield '';
    }

    // line 31
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "onboardingFormOpen";
        return; yield '';
    }

    // line 33
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"stepwizard\" data-active=\"onboarding-step-1\">
                <div class=\"stepwizard-row setup-panel\">
                    <div class=\"stepwizard-step col-xs-3\">
                        <a href=\"#onboarding-step-1\" type=\"button\" class=\"btn btn-success btn-circle\">1</a>
                        <p><small>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create"), "html", null, true);
        yield "</small></p>
                    </div>
                    <div class=\"stepwizard-step col-xs-3\">
                        <a href=\"#onboarding-step-2\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">2</a>
                        <p><small>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Credentials"), "html", null, true);
        yield "</small></p>
                    </div>
                    ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 46)) {
            // line 47
            yield "                    <div class=\"stepwizard-step col-xs-3\">
                        <a href=\"#onboarding-step-3\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">3</a>
                        <p><small>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sharing"), "html", null, true);
            yield "</small></p>
                    </div>
                    ";
        }
        // line 52
        yield "                </div>
            </div>
            <form id=\"userOnboardingForm\" class=\"stepwizard-form form-horizontal\" role=\"form\" method=\"post\" action=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.add"), "html", null, true);
        yield "\">
                <div class=\"panel panel-default setup-content\" id=\"onboarding-step-1\" data-next=\"onboarding-step-2\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create"), "html", null, true);
        yield "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <p>
                            ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the role which most closely matches what you want this User to do, or select manual."), "html", null, true);
        yield "
                            &nbsp;<span class=\"fa fa-info-circle\"
                                        title=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("What does this mean?"), "html", null, true);
        yield "\"
                                        data-toggle=\"popover\"
                                        data-placement=\"right\"
                                        data-html=\"true\"
                                        data-content=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The User account you are using has full access to the CMS and all of its features and configuration. If you are not adding an administrator type User, then it is likely you'll want to restrict and simplify what this new User can do. <br><br>You may even want to create a simplified User for your own usage to administer the system in a way tailored to your needs."), "html", null, true);
        yield "\"
                            ></span>
                        </p>
                        <div class=\"card card-body bg-light\">
                            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 72
            yield "                                <div class=\"radio\">
                                    <label>
                                        <input type=\"radio\"
                                               data-default-homepage-id=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "defaultHomepageId", [], "any", false, false, false, 75), "html", null, true);
            yield "\"
                                               name=\"groupId\"
                                               value=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupId", [], "any", false, false, false, 77), "html", null, true);
            yield "\">
                                        ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "group", [], "any", false, false, false, 78), "html", null, true);
            yield "<br>
                                        ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "description", [], "any", false, false, false, 79), "html", null, true);
            yield "
                                    </label>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" name=\"groupId\" value=\"manual\">
                                    ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Manually create a user"), "html", null, true);
        yield "<br>
                                    ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Selecting this option will direct you to the Add User form where you can manually
                                    create user."), "html", null, true);
        // line 88
        yield "
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"panel panel-default setup-content\" style=\"display:none;\" id=\"onboarding-step-2\" ";
        // line 95
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 95)) {
            yield "data-next=\"onboarding-step-3\"";
        } else {
            yield "data-next=\"finished\"";
        }
        yield ">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Credentials"), "html", null, true);
        yield "</h3>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 100
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["userTypeId", "3"], 100, $context, $this->getSourceContext());
        yield "
                        ";
        // line 101
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["libraryQuota", "0"], 101, $context, $this->getSourceContext());
        yield "
                        ";
        // line 102
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["homePageId", ""], 102, $context, $this->getSourceContext());
        yield "

                        ";
        // line 104
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("User Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Login Name of the user.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["userName", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required maxlength='50'"], 106, $context, $this->getSourceContext());
        yield "

                        ";
        // line 108
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Password for this user.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 110
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_password", ["password", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 110, $context, $this->getSourceContext());
        yield "

                        ";
        // line 112
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Email");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Email Address for this user.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_email", ["email", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 114, $context, $this->getSourceContext());
        yield "
                    </div>
                </div>

                <div class=\"panel panel-default setup-content\" style=\"display:none;\" id=\"onboarding-step-3\" data-next=\"finished\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Content"), "html", null, true);
        yield "</h3>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 123
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["homeFolderId", 1], 123, $context, $this->getSourceContext());
        yield "

                        ";
        // line 125
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 125)) {
            // line 126
            yield "                            <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select any folders the new user should have shared with them for viewing and editing."), "html", null, true);
            yield "</p>
                            <div class=\"folder-tree-buttons\">
                                <button type=\"button\" id=\"selectAllBtn\" class=\"btn btn-sm btn-outline-primary\">";
            // line 128
            echo __("Select All");
            yield "</button>
                                <button type=\"button\" id=\"selectNoneBtn\" class=\"btn btn-sm btn-outline-secondary\">";
            // line 129
            echo __("Clear Selection");
            yield "</button>
                            </div>
                            <div id=\"container-form-folder-tree\" class=\"card card-body bg-light\"></div>
                        ";
        }
        // line 133
        yield "                    </div>
                </div>
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
        return "user-form-onboarding.twig";
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
        return array (  308 => 133,  301 => 129,  297 => 128,  291 => 126,  289 => 125,  284 => 123,  278 => 120,  268 => 114,  262 => 113,  257 => 112,  251 => 110,  245 => 109,  240 => 108,  234 => 106,  228 => 105,  223 => 104,  218 => 102,  214 => 101,  210 => 100,  204 => 97,  195 => 95,  186 => 88,  183 => 87,  179 => 86,  174 => 83,  164 => 79,  160 => 78,  156 => 77,  151 => 75,  146 => 72,  142 => 71,  135 => 67,  128 => 63,  123 => 61,  116 => 57,  110 => 54,  106 => 52,  100 => 49,  96 => 47,  94 => 46,  89 => 44,  82 => 40,  74 => 34,  70 => 33,  62 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-onboarding.twig", "/var/www/cms/views/user-form-onboarding.twig");
    }
}
