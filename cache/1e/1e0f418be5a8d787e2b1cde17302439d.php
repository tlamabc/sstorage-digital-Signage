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

/* user-form-edit-profile.twig */
class __TwigTemplate_8ea587b2267c6fd1d8204892f9cb5de7 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-edit-profile.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-edit-profile.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit User Profile");
        return; yield '';
    }

    // line 31
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "forms.userProfileEditFormOpen";
        return; yield '';
    }

    // line 33
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 35
        echo __("Save");
        yield ", \$(\"#userEditProfileForm\").submit()
";
        return; yield '';
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"userEditProfileForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.edit.profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\" data-setup=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "setup", [], "any", false, false, false, 41), "html", null, true);
        yield "\" data-generate=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "generate", [], "any", false, false, false, 41), "html", null, true);
        yield "\" data-show=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "show", [], "any", false, false, false, 41), "html", null, true);
        yield "\" data-currentuser=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "twoFactorTypeId", [], "any", false, false, false, 41), "html", null, true);
        yield "\">
                ";
        // line 42
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("User Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["userName", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userName", [], "any", false, false, false, 43)], 43, $context, $this->getSourceContext());
        yield "

                ";
        // line 45
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("If you are changing your password or two factor settings, then please enter your current password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_password", ["password", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 47, $context, $this->getSourceContext());
        yield "

                ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("New Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter your new password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_password", ["newPassword", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 51, $context, $this->getSourceContext());
        yield "

                ";
        // line 53
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Retype New Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please repeat the new Password.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_password", ["retypeNewPassword", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 55, $context, $this->getSourceContext());
        yield "

                ";
        // line 57
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Email");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Email Address for this user.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_email", ["email", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "email", [], "any", false, false, false, 59), ($context["helpText"] ?? null)], 59, $context, $this->getSourceContext());
        yield "

                ";
        // line 61
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Two Factor Authentication");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable an option to provide a two factor authentication code to log into the CMS for added security.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                ";
        $context["values"] = [["id" => 0, "value" => "Off"], ["id" => 1, "value" => "Email"], ["id" => 2, "value" => "Google Authenticator"]];
        // line 64
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["twoFactorTypeId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "twoFactorTypeId", [], "any", false, false, false, 64), ($context["values"] ?? null), "id", "value", ($context["helpText"] ?? null)], 64, $context, $this->getSourceContext());
        yield "

                ";
        // line 66
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["twoFactorRecoveryCodes", CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "twoFactorRecoveryCodes", [], "any", false, false, false, 66)], 66, $context, $this->getSourceContext());
        yield "
                <div id=\"qRCode\" class=\"text-center\">
                    <p>";
        // line 68
        echo __("Please scan the following image with your app:");
        yield "</p>
                    <p id=\"qr\"><img id=\"qrImage\" src=\"\"></p>
                    <div>
                        ";
        // line 71
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Access Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null)], 72, $context, $this->getSourceContext());
        yield "
                    </div>
                </div>

                <div id=\"recoveryButtons\">
                    <p>";
        // line 77
        echo __("Please use the buttons below to generate or show your two factor recovery codes.");
        yield "</p>

                    <ul class=\"nav nav-pills pull-left\" style=\"margin-left: 5px;\">
                        <li class=\"btn btn-success btn-sm recBtn\"><a class=\"btns generateCodes\" id=\"generateCodesBtn\" style=\"padding: 7px 7px;\" title=\"";
        // line 80
        echo __("Generate Recovery codes, this action will invalidate all existing recovery codes.");
        yield "\" > <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Generate");
        yield "</a></li>
                    </ul>

                    <ul class=\"nav nav-pills pull-left\" style=\"margin-left: 5px;\">
                        <li class=\"btn btn-info btn-sm recBtn\"><a class=\"btns showCodes\" id=\"showCodesBtn\" style=\"padding: 7px 7px;\" title=\"";
        // line 84
        echo __("Show existing recovery codes");
        yield "\" > <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Show");
        yield "</a></li>
                    </ul>
                </div>

                <div id=\"recoveryCodes\" style=\"float: left; width: 100%;\">
                    <p>";
        // line 89
        echo __("Here are your recovery codes, please make sure to store them in a safe place, like password manager.");
        yield "</p>
                    <p>";
        // line 90
        echo __("Recovery codes will become active only after this form is successfully saved");
        yield "</p>
                    <p id=\"codesList\" class=\"\"></p>
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
        return "user-form-edit-profile.twig";
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
        return array (  260 => 90,  256 => 89,  246 => 84,  237 => 80,  231 => 77,  222 => 72,  217 => 71,  211 => 68,  206 => 66,  200 => 64,  197 => 63,  191 => 62,  186 => 61,  180 => 59,  174 => 58,  169 => 57,  163 => 55,  157 => 54,  152 => 53,  146 => 51,  140 => 50,  135 => 49,  129 => 47,  123 => 46,  118 => 45,  112 => 43,  107 => 42,  95 => 41,  91 => 39,  87 => 38,  80 => 35,  75 => 34,  71 => 33,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-edit-profile.twig", "/var/www/cms/views/user-form-edit-profile.twig");
    }
}
