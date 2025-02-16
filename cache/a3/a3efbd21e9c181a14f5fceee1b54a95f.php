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

/* user-form-edit.twig */
class __TwigTemplate_103d2e258825cf266a4204ef0f24c636 extends Template
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
        // line 24
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit User");
        return; yield '';
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 33
        echo __("Save");
        yield ", \$(\"#userEditForm\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "userFormOpen";
        return; yield '';
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("Details");
        yield "</span></a></li>
                ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.userHome"], "method", false, false, false, 43)) {
            // line 44
            yield "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#home-folder\" role=\"tab\" data-toggle=\"tab\"><span>";
            echo __("Home Folder");
            yield "</span></a></li>
                ";
        }
        // line 46
        yield "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#reference\" role=\"tab\" data-toggle=\"tab\"><span>";
        echo __("Reference");
        yield "</span></a></li>
                ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 47) == 1)) {
            // line 48
            yield "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#notifications\" role=\"tab\" data-toggle=\"tab\"><span>";
            echo __("Notifications");
            yield "</span></a></li>
                ";
        }
        // line 50
        yield "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#optionsTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        echo __("Options");
        yield "</span></a></li>
            </ul>
            <form id=\"userEditForm\" class=\"UserForm form-horizontal\" data-user-id=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 52), "html", null, true);
        yield "\" method=\"put\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 52)]), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 55
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Username");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Username of the user.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["userName", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userName", [], "any", false, false, false, 57), ($context["helpText"] ?? null), "", "required maxlength='50'"], 57, $context, $this->getSourceContext());
        yield "

                        ";
        // line 59
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Email");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Email Address for this user.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_email", ["email", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 61), ($context["helpText"] ?? null)], 61, $context, $this->getSourceContext());
        yield "

                        ";
        // line 63
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 63) == 1)) {
            // line 64
            yield "                            ";
            // line 65
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("New Password");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 66
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The new Password for this user.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_password", ["newPassword", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 67, $context, $this->getSourceContext());
            yield "

                            ";
            // line 69
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Retype New Password");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 70
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Repeat the new Password for this user.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 71
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_password", ["retypeNewPassword", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 71, $context, $this->getSourceContext());
            yield "

                            ";
            // line 73
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Reset Two Factor Authentication");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 74
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Once ticked the two factor authentication will be set to ‘Off’ for this User Profile with any stored secret codes cleared. The User can now set up two factor authentication from the User Profile as before.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 75
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["disableTwoFactor", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 75, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 77
        yield "
                        ";
        // line 78
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Homepage");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Homepage for this user. This is the page they will be taken to when they login.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"homePageId\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"homePageId\" class=\"form-control homepage-select\" required data-search-url=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.homepages.search"), "html", null, true);
        yield "\">
                                    <option value=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "homepage", [], "any", false, false, false, 84), "homepage", [], "any", false, false, false, 84), "html", null, true);
        yield "\" selected>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "homepage", [], "any", false, false, false, 84), "title", [], "any", false, false, false, 84), "html", null, true);
        yield "</option>
                                </select>
                                <span class=\"help-block\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</span>
                            </div>
                        </div>

                        ";
        // line 90
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 90)) {
            // line 91
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("User Type");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 92
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("What is this users type?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 93
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["userTypeId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userTypeId", [], "any", false, false, false, 93), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "userTypes", [], "any", false, false, false, 93), "userTypeId", "userType", ($context["helpText"] ?? null)], 93, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 95
        yield "
                        ";
        // line 96
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Library Quota");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The quota that should be applied. Enter 0 for no quota.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"libraryQuota\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-6\">
                                <input class=\"form-control\" name=\"libraryQuota\" type=\"number\" id=\"libraryQuota\" min=\"0\" value=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "libraryQuota", [], "any", false, false, false, 101), "html", null, true);
        yield "\" />
                                <span class=\"help-block\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"col-sm-4\">
                                <select name=\"libraryQuotaUnits\" class=\"form-control\">
                                    <option value=\"kb\">KiB</option>
                                    <option value=\"mb\">MiB</option>
                                    <option value=\"gb\">GiB</option>
                                </select>
                            </div>
                        </div>

                        ";
        // line 113
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Retired?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is this user retired?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["retired", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "retired", [], "any", false, false, false, 115), ($context["helpText"] ?? null)], 115, $context, $this->getSourceContext());
        yield "
                    </div>
                    ";
        // line 117
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.userHome"], "method", false, false, false, 117)) {
            // line 118
            yield "                        <div class=\"tab-pane\" id=\"home-folder\">
                        <p>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set a home folder to use as the default folder for new content."), "html", null, true);
            yield "</p>
                            ";
            // line 120
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["homeFolderId", CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "homeFolderId", [], "any", false, false, false, 120)], 120, $context, $this->getSourceContext());
            yield "
                            <div id=\"container-form-folder-tree\" class=\"card card-body bg-light\"></div>
                        </div>
                    ";
        }
        // line 124
        yield "                    <div class=\"tab-pane\" id=\"reference\">
                        ";
        // line 125
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("First Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The User's First Name.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["firstName", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 127), ($context["helpText"] ?? null), "", "maxlength='254'"], 127, $context, $this->getSourceContext());
        yield "

                        ";
        // line 129
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Last Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The User's Last Name.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["lastName", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 131), ($context["helpText"] ?? null), "", "maxlength='254'"], 131, $context, $this->getSourceContext());
        yield "

                        ";
        // line 133
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Phone Number");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The User's Phone Number.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["phone", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 135), ($context["helpText"] ?? null), "", "maxlength='254'"], 135, $context, $this->getSourceContext());
        yield "

                        ";
        // line 137
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 1");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A reference field for custom user data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "ref1", [], "any", false, false, false, 139), ($context["helpText"] ?? null), "", "maxlength='254'"], 139, $context, $this->getSourceContext());
        yield "

                        ";
        // line 141
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 2");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A reference field for custom user data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "ref2", [], "any", false, false, false, 143), ($context["helpText"] ?? null), "", "maxlength='254'"], 143, $context, $this->getSourceContext());
        yield "

                        ";
        // line 145
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 3");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A reference field for custom user data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 147
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "ref3", [], "any", false, false, false, 147), ($context["helpText"] ?? null), "", "maxlength='254'"], 147, $context, $this->getSourceContext());
        yield "

                        ";
        // line 149
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 4");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 150
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A reference field for custom user data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "ref4", [], "any", false, false, false, 151), ($context["helpText"] ?? null), "", "maxlength='254'"], 151, $context, $this->getSourceContext());
        yield "

                        ";
        // line 153
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 5");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 154
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A reference field for custom user data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 155
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "ref5", [], "any", false, false, false, 155), ($context["helpText"] ?? null), "", "maxlength='254'"], 155, $context, $this->getSourceContext());
        yield "
                    </div>
                    ";
        // line 157
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 157) == 1)) {
            // line 158
            yield "                        <div class=\"tab-pane\" id=\"notifications\">
                            ";
            // line 159
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive System Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 160
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive system notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 161
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isSystemNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isSystemNotification", [], "any", false, false, false, 161), ($context["helpText"] ?? null)], 161, $context, $this->getSourceContext());
            yield "

                            ";
            // line 163
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Display Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 164
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive Display notifications for Displays they have permission to see?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 165
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDisplayNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isDisplayNotification", [], "any", false, false, false, 165), ($context["helpText"] ?? null)], 165, $context, $this->getSourceContext());
            yield "

                            ";
            // line 167
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive DataSet Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 168
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive DataSet notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 169
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDataSetNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isDataSetNotification", [], "any", false, false, false, 169), ($context["helpText"] ?? null)], 169, $context, $this->getSourceContext());
            yield "

                            ";
            // line 171
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Layout Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 172
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive Layout notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 173
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isLayoutNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isLayoutNotification", [], "any", false, false, false, 173), ($context["helpText"] ?? null)], 173, $context, $this->getSourceContext());
            yield "

                            ";
            // line 175
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Library Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 176
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive Library notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 177
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isLibraryNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isLibraryNotification", [], "any", false, false, false, 177), ($context["helpText"] ?? null)], 177, $context, $this->getSourceContext());
            yield "

                            ";
            // line 179
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Report Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 180
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive Report notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 181
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isReportNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isReportNotification", [], "any", false, false, false, 181), ($context["helpText"] ?? null)], 181, $context, $this->getSourceContext());
            yield "

                            ";
            // line 183
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Schedule Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 184
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive Schedule notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 185
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isScheduleNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isScheduleNotification", [], "any", false, false, false, 185), ($context["helpText"] ?? null)], 185, $context, $this->getSourceContext());
            yield "

                            ";
            // line 187
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Custom Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 188
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive notifications emails for Notifications manually created in CMS?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 189
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isCustomNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isCustomNotification", [], "any", false, false, false, 189), ($context["helpText"] ?? null)], 189, $context, $this->getSourceContext());
            yield "
                        </div>
                    ";
        }
        // line 192
        yield "
                    <div class=\"tab-pane\" id=\"optionsTab\">
                        ";
        // line 194
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hide navigation?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 195
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should the navigation side bar be hidden for this User?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 196
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["hideNavigation", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getOptionValue", ["hideNavigation", "0"], "method", false, false, false, 196), ($context["helpText"] ?? null)], 196, $context, $this->getSourceContext());
        yield "

                        ";
        // line 198
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hide User Guide?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 199
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this User see the new user guide when they log in? This will be set to hidden if the User has dismissed the guide themselves.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 200
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["newUserWizard", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "newUserWizard", [], "any", false, false, false, 200), ($context["helpText"] ?? null)], 200, $context, $this->getSourceContext());
        yield "

                        ";
        // line 202
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Force Password Change");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 203
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this User be forced to change password next time they log in?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 204
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isPasswordChangeRequired", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isPasswordChangeRequired", [], "any", false, false, false, 204), ($context["helpText"] ?? null)], 204, $context, $this->getSourceContext());
        yield "
                    </div>
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
        return "user-form-edit.twig";
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
        return array (  688 => 204,  682 => 203,  677 => 202,  671 => 200,  665 => 199,  660 => 198,  654 => 196,  648 => 195,  643 => 194,  639 => 192,  632 => 189,  626 => 188,  621 => 187,  615 => 185,  609 => 184,  604 => 183,  598 => 181,  592 => 180,  587 => 179,  581 => 177,  575 => 176,  570 => 175,  564 => 173,  558 => 172,  553 => 171,  547 => 169,  541 => 168,  536 => 167,  530 => 165,  524 => 164,  519 => 163,  513 => 161,  507 => 160,  502 => 159,  499 => 158,  497 => 157,  491 => 155,  485 => 154,  480 => 153,  474 => 151,  468 => 150,  463 => 149,  457 => 147,  451 => 146,  446 => 145,  440 => 143,  434 => 142,  429 => 141,  423 => 139,  417 => 138,  412 => 137,  406 => 135,  400 => 134,  395 => 133,  389 => 131,  383 => 130,  378 => 129,  372 => 127,  366 => 126,  361 => 125,  358 => 124,  351 => 120,  347 => 119,  344 => 118,  342 => 117,  336 => 115,  330 => 114,  325 => 113,  311 => 102,  307 => 101,  302 => 99,  299 => 98,  293 => 97,  288 => 96,  285 => 95,  279 => 93,  273 => 92,  267 => 91,  265 => 90,  258 => 86,  251 => 84,  247 => 83,  242 => 81,  239 => 80,  233 => 79,  228 => 78,  225 => 77,  219 => 75,  213 => 74,  208 => 73,  202 => 71,  196 => 70,  191 => 69,  185 => 67,  179 => 66,  173 => 65,  171 => 64,  169 => 63,  163 => 61,  157 => 60,  152 => 59,  146 => 57,  140 => 56,  135 => 55,  127 => 52,  121 => 50,  115 => 48,  113 => 47,  108 => 46,  102 => 44,  100 => 43,  96 => 42,  91 => 39,  87 => 38,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-edit.twig", "/var/www/cms/views/user-form-edit.twig");
    }
}
