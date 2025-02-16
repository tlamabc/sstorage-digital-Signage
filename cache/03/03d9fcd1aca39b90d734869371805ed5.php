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

/* notification-form-add.twig */
class __TwigTemplate_c8f7a030379f3146b55034c4e9c55cd2 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "notification-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "notification-form-add.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add Notification");
        return; yield '';
    }

    // line 31
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "attachmentFormSetup";
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
        yield ", \$(\"#notificationForm\").submit()
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
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#message-body\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Message");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#audience\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Audience");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#attachment\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Attachment");
        yield "</span></a></li>
            </ul>
            <form id=\"notificationForm\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("notification.add"), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 50
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Subject");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A subject line for the notification - used as a title.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["subject", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 52, $context, $this->getSourceContext());
        yield "

                        ";
        // line 54
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Release Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The date when this notification will be published");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["releaseDt", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "starttime-control", "required"], 56, $context, $this->getSourceContext());
        yield "

                        ";
        // line 58
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Interrupt?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should the notification interrupt nagivation in the Web Portal? Including Login.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkBox", ["isInterrupt", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 60, $context, $this->getSourceContext());
        yield "

                    </div>
                    <div class=\"tab-pane\" id=\"message-body\">
                        ";
        // line 64
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Add the body of your message in the box below. If you are going to target this message to a Display/DisplayGroup be aware that the formatting you apply here will be removed.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["title"] ?? null)], 65, $context, $this->getSourceContext());
        yield "

                        ";
        // line 67
        yield CoreExtension::callMacro($macros["forms"], "macro_textarea", ["body", "", "", "", "", "required", 10], 67, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"audience\">
                        ";
        // line 70
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Users");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select one or more users / groups who will receive this notification.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"]];
        // line 75
        yield "                        ";
        $context["transUserGroups"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Groups");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                        ";
        $context["transUsers"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Users");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        yield "                        ";
        $context["optionGroups"] = [["id" => "group", "label" =>         // line 78
($context["transUserGroups"] ?? null)], ["id" => "user", "label" =>         // line 79
($context["transUsers"] ?? null)]];
        // line 81
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["userGroupIds[]", "dropdownmulti", ($context["title"] ?? null), "", ["group" => ($context["userGroups"] ?? null), "user" => ($context["users"] ?? null)], "groupId", "group", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null), ($context["optionGroups"] ?? null)], 81, $context, $this->getSourceContext());
        yield "

                        ";
        // line 83
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Non users");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Additional emails separated by a comma.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["nonusers", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "", "", false, "", "", "", "", 0], 85, $context, $this->getSourceContext());
        yield "

                        ";
        // line 87
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Displays");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select one or more displays / groups for this notification to be shown on - Layouts will need the notification widget.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"]];
        // line 92
        yield "                        ";
        $context["transGroups"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Groups");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        yield "                        ";
        $context["transDisplays"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        yield "                        ";
        $context["optionGroups"] = [["id" => "group", "label" =>         // line 95
($context["transGroups"] ?? null)], ["id" => "display", "label" =>         // line 96
($context["transDisplays"] ?? null)]];
        // line 98
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["displayGroupIds[]", "dropdownmulti", ($context["title"] ?? null), "", ["group" => ($context["displayGroups"] ?? null), "display" => ($context["displays"] ?? null)], "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null), ($context["optionGroups"] ?? null)], 98, $context, $this->getSourceContext());
        yield "

                    </div>

                    <div class=\"tab-pane\" id=\"attachment\">
                        <div class=\"row attachment-fields attachment-add-button text-center\">
                            <div class=\"col-12\">
                                <button id=\"attachmentAddButton\" class=\"btn btn-white\" type=\"\">
                                    <i class=\"fa fa-plus\"></i>
                                    ";
        // line 107
        echo __("Add an attachment?");
        // line 108
        yield "                                </button>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div id=\"notificationAddFormAttachmentUpload\" style=\"display: none;\"></div>
                        </div>
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
        return "notification-form-add.twig";
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
        return array (  289 => 108,  287 => 107,  274 => 98,  272 => 96,  271 => 95,  269 => 94,  263 => 93,  257 => 92,  254 => 89,  248 => 88,  243 => 87,  237 => 85,  231 => 84,  226 => 83,  220 => 81,  218 => 79,  217 => 78,  215 => 77,  209 => 76,  203 => 75,  200 => 72,  194 => 71,  189 => 70,  183 => 67,  177 => 65,  172 => 64,  164 => 60,  158 => 59,  153 => 58,  147 => 56,  141 => 55,  136 => 54,  130 => 52,  124 => 51,  119 => 50,  113 => 47,  108 => 45,  104 => 44,  100 => 43,  96 => 42,  91 => 39,  87 => 38,  80 => 35,  75 => 34,  71 => 33,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "notification-form-add.twig", "/var/www/cms/views/notification-form-add.twig");
    }
}
