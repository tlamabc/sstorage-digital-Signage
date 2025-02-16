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

/* user-form-add.twig */
class __TwigTemplate_f906c53d3b3e0fbf7d60083f340534f0 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-add.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add User");
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
        yield ", \$(\"#userAddForm\").submit()
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
            <form id=\"userAddForm\" class=\"UserForm form-horizontal\" method=\"post\" action=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.add"), "html", null, true);
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
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["userName", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required maxlength='50'"], 57, $context, $this->getSourceContext());
        yield "

                        ";
        // line 59
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Password for this user.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_password", ["password", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 61, $context, $this->getSourceContext());
        yield "

                        ";
        // line 63
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Email");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Email Address for this user.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_email", ["email", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 65, $context, $this->getSourceContext());
        yield "

                        ";
        // line 67
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("User Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("What is this users type?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["userTypeId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "defaultUserType", [], "any", false, false, false, 69), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "userTypes", [], "any", false, false, false, 69), "userTypeId", "userType", ($context["helpText"] ?? null)], 69, $context, $this->getSourceContext());
        yield "

                        ";
        // line 71
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Library Quota");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The quota that should be applied. Enter 0 for no quota.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"libraryQuota\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-6\">
                                <input class=\"form-control\" name=\"libraryQuota\" type=\"number\" id=\"libraryQuota\" min=\"0\" />
                                <span class=\"help-block\">";
        // line 77
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
        // line 88
        $context["attributes"] = [["name" => "data-live-search", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search")], ["name" => "data-search-term", "value" => "group"], ["name" => "data-id-property", "value" => "groupId"], ["name" => "data-text-property", "value" => "group"], ["name" => "data-initial-key", "value" => "userGroupId"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 97
($context["options"] ?? null), "defaultGroupId", [], "any", false, false, false, 97)], ["name" => "data-selected-text-format", "value" => "count > 4"]];
        // line 100
        yield "
                        ";
        // line 101
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Initial User Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select a User Group for this User so that they get access to the parts of the application they need.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["groupId", "single", ($context["title"] ?? null), null, [], "groupId", "group", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 103, $context, $this->getSourceContext());
        yield "

                        ";
        // line 105
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("User Groups are an easy way to configure a set of features and sharing which can be applied to multiple users. After adding a User they can be assigned to multiple Groups or have individual sharing assigned to them directly."), "card p-3 mb-3 bg-light"], 105, $context, $this->getSourceContext());
        yield "

                        ";
        // line 107
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Homepage");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Homepage for this user. This is the page they will be taken to when they login.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"homePageId\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"homePageId\" class=\"form-control homepage-select\" required data-search-url=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.homepages.search"), "html", null, true);
        yield "\">
                                </select>
                                <span class=\"help-block\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>
                    ";
        // line 118
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.userHome"], "method", false, false, false, 118)) {
            // line 119
            yield "                        <div class=\"tab-pane\" id=\"home-folder\">
                            <p>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set a home folder to use as the default folder for new content."), "html", null, true);
            yield "</p>
                            ";
            // line 121
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["homeFolderId", 1], 121, $context, $this->getSourceContext());
            yield "
                            <div id=\"container-form-folder-tree\" class=\"card card-body bg-light\"></div>
                        </div>
                    ";
        }
        // line 125
        yield "                    <div class=\"tab-pane\" id=\"reference\">
                        ";
        // line 126
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("First Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The User's First Name.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["firstName", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 128, $context, $this->getSourceContext());
        yield "

                        ";
        // line 130
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Last Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The User's Last Name.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["lastName", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 132, $context, $this->getSourceContext());
        yield "

                        ";
        // line 134
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Phone Number");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The User's Phone Number.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["phone", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 136, $context, $this->getSourceContext());
        yield "

                        ";
        // line 138
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 1");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A reference field for custom user data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 140, $context, $this->getSourceContext());
        yield "

                        ";
        // line 142
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 2");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A reference field for custom user data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 144, $context, $this->getSourceContext());
        yield "

                        ";
        // line 146
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 3");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 147
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A reference field for custom user data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 148
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 148, $context, $this->getSourceContext());
        yield "

                        ";
        // line 150
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 4");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A reference field for custom user data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 152
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 152, $context, $this->getSourceContext());
        yield "

                        ";
        // line 154
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 5");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 155
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A reference field for custom user data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 156, $context, $this->getSourceContext());
        yield "
                    </div>
                    ";
        // line 158
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 158) == 1)) {
            // line 159
            yield "                    <div class=\"tab-pane\" id=\"notifications\">
                        ";
            // line 160
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive System Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 161
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive system notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 162
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isSystemNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 162, $context, $this->getSourceContext());
            yield "

                        ";
            // line 164
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Display Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 165
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive Display notifications for Displays they have permission to see?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 166
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDisplayNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 166, $context, $this->getSourceContext());
            yield "

                        ";
            // line 168
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive DataSet Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 169
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive DataSet notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 170
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDataSetNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 170, $context, $this->getSourceContext());
            yield "

                        ";
            // line 172
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Layout Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 173
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive Layout notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 174
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isLayoutNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 174, $context, $this->getSourceContext());
            yield "

                        ";
            // line 176
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Library Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 177
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive Library notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 178
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isLibraryNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 178, $context, $this->getSourceContext());
            yield "

                        ";
            // line 180
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Report Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 181
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive Report notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 182
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isReportNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 182, $context, $this->getSourceContext());
            yield "

                        ";
            // line 184
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Schedule Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 185
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive Schedule notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 186
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isScheduleNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 186, $context, $this->getSourceContext());
            yield "

                        ";
            // line 188
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Custom Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 189
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User receive notifications emails for Notifications manually created in CMS?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 190
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isCustomNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 190, $context, $this->getSourceContext());
            yield "
                    </div>
                    ";
        }
        // line 193
        yield "                    <div class=\"tab-pane\" id=\"optionsTab\">
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
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["hideNavigation", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 196, $context, $this->getSourceContext());
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
            echo __("Should this User see the new user guide when they log in?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 200
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["newUserWizard", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 200, $context, $this->getSourceContext());
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
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isPasswordChangeRequired", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 204, $context, $this->getSourceContext());
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
        return "user-form-add.twig";
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
        return array (  639 => 204,  633 => 203,  628 => 202,  622 => 200,  616 => 199,  611 => 198,  605 => 196,  599 => 195,  594 => 194,  591 => 193,  584 => 190,  578 => 189,  573 => 188,  567 => 186,  561 => 185,  556 => 184,  550 => 182,  544 => 181,  539 => 180,  533 => 178,  527 => 177,  522 => 176,  516 => 174,  510 => 173,  505 => 172,  499 => 170,  493 => 169,  488 => 168,  482 => 166,  476 => 165,  471 => 164,  465 => 162,  459 => 161,  454 => 160,  451 => 159,  449 => 158,  443 => 156,  437 => 155,  432 => 154,  426 => 152,  420 => 151,  415 => 150,  409 => 148,  403 => 147,  398 => 146,  392 => 144,  386 => 143,  381 => 142,  375 => 140,  369 => 139,  364 => 138,  358 => 136,  352 => 135,  347 => 134,  341 => 132,  335 => 131,  330 => 130,  324 => 128,  318 => 127,  313 => 126,  310 => 125,  303 => 121,  299 => 120,  296 => 119,  294 => 118,  287 => 114,  282 => 112,  277 => 110,  274 => 109,  268 => 108,  263 => 107,  258 => 105,  252 => 103,  246 => 102,  241 => 101,  238 => 100,  236 => 97,  235 => 88,  221 => 77,  215 => 74,  212 => 73,  206 => 72,  201 => 71,  195 => 69,  189 => 68,  184 => 67,  178 => 65,  172 => 64,  167 => 63,  161 => 61,  155 => 60,  150 => 59,  144 => 57,  138 => 56,  133 => 55,  127 => 52,  121 => 50,  115 => 48,  113 => 47,  108 => 46,  102 => 44,  100 => 43,  96 => 42,  91 => 39,  87 => 38,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-add.twig", "/var/www/cms/views/user-form-add.twig");
    }
}
