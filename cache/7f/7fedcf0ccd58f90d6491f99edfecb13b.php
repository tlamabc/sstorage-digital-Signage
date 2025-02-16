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

/* usergroup-form-edit.twig */
class __TwigTemplate_159edb92df90b040bdd30a95fcbef8f8 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "usergroup-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "usergroup-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit User Group");
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
        yield ", \$(\"#userGroupEditForm\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "userGroupFormOpen";
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
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general-tab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#description-tab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Description");
        yield "</span></a></li>
                ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 44) == 1)) {
            // line 45
            yield "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#notifications-tab\" role=\"tab\" data-toggle=\"tab\"><span>";
            echo __("Notifications");
            yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#onboarding-tab\" role=\"tab\" data-toggle=\"tab\"><span>";
            // line 46
            echo __("Onboarding Settings");
            yield "</span></a></li>
                ";
        }
        // line 48
        yield "            </ul>
            <form id=\"userGroupEditForm\" class=\"UserGroupForm form-horizontal\" method=\"put\" action=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "groupId", [], "any", false, false, false, 49)]), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general-tab\">

                        ";
        // line 53
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this User Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["group", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "group", [], "any", false, false, false, 55), ($context["helpText"] ?? null), "", "required maxlength='50'"], 55, $context, $this->getSourceContext());
        yield "

                        ";
        // line 57
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Library Quota");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The quota that should be applied. Enter 0 for no quota.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"libraryQuota\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-6\">
                                <input class=\"form-control\" name=\"libraryQuota\" type=\"number\" id=\"libraryQuota\" value=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "libraryQuota", [], "any", false, false, false, 62), "html", null, true);
        yield "\" />
                                <span class=\"help-block\">";
        // line 63
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
                    </div>

                    ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 75) == 1)) {
            // line 76
            yield "                        <div class=\"tab-pane\" id=\"notifications-tab\">
                            ";
            // line 77
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive System Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 78
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive system notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 79
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isSystemNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "isSystemNotification", [], "any", false, false, false, 79), ($context["helpText"] ?? null)], 79, $context, $this->getSourceContext());
            yield "

                            ";
            // line 81
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Display Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 82
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive Display notifications for Displays they have permission to see?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 83
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDisplayNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "isDisplayNotification", [], "any", false, false, false, 83), ($context["helpText"] ?? null)], 83, $context, $this->getSourceContext());
            yield "

                            ";
            // line 85
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive DataSet Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 86
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive DataSet emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 87
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDataSetNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "isDataSetNotification", [], "any", false, false, false, 87), ($context["helpText"] ?? null)], 87, $context, $this->getSourceContext());
            yield "

                            ";
            // line 89
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Layout Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 90
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive Layout emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 91
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isLayoutNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "isLayoutNotification", [], "any", false, false, false, 91), ($context["helpText"] ?? null)], 91, $context, $this->getSourceContext());
            yield "

                            ";
            // line 93
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Library Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 94
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive Library notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 95
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isLibraryNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "isLibraryNotification", [], "any", false, false, false, 95), ($context["helpText"] ?? null)], 95, $context, $this->getSourceContext());
            yield "

                            ";
            // line 97
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Report Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 98
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive Report emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 99
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isReportNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "isReportNotification", [], "any", false, false, false, 99), ($context["helpText"] ?? null)], 99, $context, $this->getSourceContext());
            yield "

                            ";
            // line 101
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Schedule Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 102
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive Schedule emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 103
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isScheduleNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "isScheduleNotification", [], "any", false, false, false, 103), ($context["helpText"] ?? null)], 103, $context, $this->getSourceContext());
            yield "

                            ";
            // line 105
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Custom Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive notifications emails for Notifications manually created in CMS?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 107
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isCustomNotification", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "isCustomNotification", [], "any", false, false, false, 107), ($context["helpText"] ?? null)], 107, $context, $this->getSourceContext());
            yield "
                        </div>
                    ";
        }
        // line 110
        yield "
                    <div class=\"tab-pane\" id=\"description-tab\">
                        ";
        // line 112
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("An optional description of the user group. (1 - 500 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "description", [], "any", false, false, false, 114), ($context["helpText"] ?? null), "", "", 15], 114, $context, $this->getSourceContext());
        yield "
                    </div>

                    ";
        // line 117
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 117) == 1)) {
            // line 118
            yield "                    <div class=\"tab-pane\" id=\"onboarding-tab\">
                        ";
            // line 119
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Show when onboarding a new user?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 120
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User Group be available for selection when creating a New User via the onboarding form?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 121
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isShownForAddUser", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "isShownForAddUser", [], "any", false, false, false, 121), ($context["helpText"] ?? null)], 121, $context, $this->getSourceContext());
            yield "

                        ";
            // line 123
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Homepage");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 124
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Homepage for users created with this group.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 125
            yield "                        ";
            $context["homepagesUrl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.homepages.search"), "html", null, true);
                yield "?userTypeId=1";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            yield "                        ";
            $context["attributes"] = [["name" => "data-live-search", "value" => "true"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" =>             // line 131
($context["homepagesUrl"] ?? null)], ["name" => "data-search-term", "value" => "homepage"], ["name" => "data-id-property", "value" => "homepage"], ["name" => "data-text-property", "value" => "title"], ["name" => "data-initial-key", "value" => "homepage"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,             // line 136
($context["group"] ?? null), "defaultHomepageId", [], "any", false, false, false, 136)]];
            // line 138
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["defaultHomepageId", "single", ($context["title"] ?? null), "", null, "homepage", "title", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 138, $context, $this->getSourceContext());
            yield "
                    </div>
                    ";
        }
        // line 141
        yield "                </div>
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
        return "usergroup-form-edit.twig";
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
        return array (  397 => 141,  390 => 138,  388 => 136,  387 => 131,  385 => 126,  378 => 125,  372 => 124,  367 => 123,  361 => 121,  355 => 120,  350 => 119,  347 => 118,  345 => 117,  338 => 114,  332 => 113,  327 => 112,  323 => 110,  316 => 107,  310 => 106,  305 => 105,  299 => 103,  293 => 102,  288 => 101,  282 => 99,  276 => 98,  271 => 97,  265 => 95,  259 => 94,  254 => 93,  248 => 91,  242 => 90,  237 => 89,  231 => 87,  225 => 86,  220 => 85,  214 => 83,  208 => 82,  203 => 81,  197 => 79,  191 => 78,  186 => 77,  183 => 76,  181 => 75,  166 => 63,  162 => 62,  157 => 60,  154 => 59,  148 => 58,  143 => 57,  137 => 55,  131 => 54,  126 => 53,  119 => 49,  116 => 48,  111 => 46,  106 => 45,  104 => 44,  100 => 43,  96 => 42,  91 => 39,  87 => 38,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "usergroup-form-edit.twig", "/var/www/cms/views/usergroup-form-edit.twig");
    }
}
