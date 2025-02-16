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

/* usergroup-form-add.twig */
class __TwigTemplate_f2769e7bc2cd1c606c29dcf06e84d2f1 extends Template
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
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "usergroup-form-add.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "usergroup-form-add.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Add User Group");
        return; yield '';
    }

    // line 30
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 32
        echo __("Save");
        yield ", \$(\"#userGroupAddForm\").submit()
";
        return; yield '';
    }

    // line 35
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "userGroupFormOpen";
        return; yield '';
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general-tab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 41
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#description-tab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("Description");
        yield "</span></a></li>
                ";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 43) == 1)) {
            // line 44
            yield "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#notifications-tab\" role=\"tab\" data-toggle=\"tab\"><span>";
            echo __("Notifications");
            yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#onboarding-tab\" role=\"tab\" data-toggle=\"tab\"><span>";
            // line 45
            echo __("Onboarding Settings");
            yield "</span></a></li>
                ";
        }
        // line 47
        yield "            </ul>
            <form id=\"userGroupAddForm\" class=\"UserGroupForm form-horizontal\" method=\"post\" action=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.add"), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general-tab\">
                        ";
        // line 51
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this User Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["group", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required maxlength='50'"], 53, $context, $this->getSourceContext());
        yield "

                        ";
        // line 55
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Library Quota");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The quota that should be applied. Enter 0 for no quota.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"libraryQuota\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-6\">
                                <input class=\"form-control\" name=\"libraryQuota\" type=\"number\" id=\"libraryQuota\" />
                                <span class=\"help-block\">";
        // line 61
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
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 73) == 1)) {
            // line 74
            yield "                        <div class=\"tab-pane\" id=\"notifications-tab\">
                            ";
            // line 75
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive System Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive system notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 77
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isSystemNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 77, $context, $this->getSourceContext());
            yield "

                            ";
            // line 79
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Display Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 80
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive Display notifications for Displays they have permission to see?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 81
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDisplayNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 81, $context, $this->getSourceContext());
            yield "

                            ";
            // line 83
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive DataSet Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 84
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive DataSet notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 85
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDataSetNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 85, $context, $this->getSourceContext());
            yield "

                            ";
            // line 87
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Layout Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 88
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive Layout notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isLayoutNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 89, $context, $this->getSourceContext());
            yield "

                            ";
            // line 91
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Library Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 92
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive Library notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 93
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isLibraryNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 93, $context, $this->getSourceContext());
            yield "

                            ";
            // line 95
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Report Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 96
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive Report notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 97
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isReportNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 97, $context, $this->getSourceContext());
            yield "

                            ";
            // line 99
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Schedule Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 100
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive Schedule notification emails?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 101
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isScheduleNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 101, $context, $this->getSourceContext());
            yield "

                            ";
            // line 103
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Receive Custom Notifications?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 104
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should members of this Group receive notifications emails for Notifications manually created in CMS?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isCustomNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 105, $context, $this->getSourceContext());
            yield "
                        </div>
                    ";
        }
        // line 108
        yield "
                    <div class=\"tab-pane\" id=\"description-tab\">
                        ";
        // line 110
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("An optional description of the user group. (1 - 500 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "", 15], 112, $context, $this->getSourceContext());
        yield "
                    </div>

                    ";
        // line 115
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 115) == 1)) {
            // line 116
            yield "                        <div class=\"tab-pane\" id=\"onboarding-tab\">
                            ";
            // line 117
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Show when onboarding a new user?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should this User Group be available for selection when creating a New User via the onboarding form?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 119
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isShownForAddUser", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 119, $context, $this->getSourceContext());
            yield "

                            ";
            // line 121
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Homepage");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 122
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Homepage for users created with this group.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 123
            yield "                            ";
            $context["homepagesUrl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.homepages.search"), "html", null, true);
                yield "?userTypeId=1";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 124
            yield "                            ";
            $context["attributes"] = [["name" => "data-live-search", "value" => "true"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" =>             // line 129
($context["homepagesUrl"] ?? null)], ["name" => "data-search-term", "value" => "homepage"], ["name" => "data-id-property", "value" => "homepage"], ["name" => "data-text-property", "value" => "title"], ["name" => "data-initial-key", "value" => "homepage"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,             // line 134
($context["group"] ?? null), "defaultHomepageId", [], "any", false, false, false, 134)]];
            // line 136
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["defaultHomepageId", "single", ($context["title"] ?? null), "", null, "homepage", "title", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 136, $context, $this->getSourceContext());
            yield "
                        </div>
                    ";
        }
        // line 139
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
        return "usergroup-form-add.twig";
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
        return array (  393 => 139,  386 => 136,  384 => 134,  383 => 129,  381 => 124,  374 => 123,  368 => 122,  363 => 121,  357 => 119,  351 => 118,  346 => 117,  343 => 116,  341 => 115,  334 => 112,  328 => 111,  323 => 110,  319 => 108,  312 => 105,  306 => 104,  301 => 103,  295 => 101,  289 => 100,  284 => 99,  278 => 97,  272 => 96,  267 => 95,  261 => 93,  255 => 92,  250 => 91,  244 => 89,  238 => 88,  233 => 87,  227 => 85,  221 => 84,  216 => 83,  210 => 81,  204 => 80,  199 => 79,  193 => 77,  187 => 76,  182 => 75,  179 => 74,  177 => 73,  162 => 61,  156 => 58,  153 => 57,  147 => 56,  142 => 55,  136 => 53,  130 => 52,  125 => 51,  119 => 48,  116 => 47,  111 => 45,  106 => 44,  104 => 43,  100 => 42,  96 => 41,  91 => 38,  87 => 37,  79 => 35,  72 => 32,  67 => 31,  63 => 30,  57 => 27,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "usergroup-form-add.twig", "/var/www/cms/views/usergroup-form-add.twig");
    }
}
