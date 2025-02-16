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

/* settings-page.twig */
class __TwigTemplate_6d70d082f4413ed8034450388ab7bb25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "settings-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "settings-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Settings"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [], "any", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-danger XiboFormButton btns\" title=\"";
            echo __("Run through the library and remove unused and unnecessary files");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("maintenance.libraryTidy.form"), "html", null, true);
            yield "\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
            echo __("Tidy Library");
            yield "</button>
        ";
        }
        // line 33
        yield "    </div>
";
        return; yield '';
    }

    // line 36
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 38
        echo __("Settings");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tab_config\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Configuration");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_defaults\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Defaults");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_displays\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Displays");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("General");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_maint\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 47
        echo __("Maintenance");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_network\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 48
        echo __("Network");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_permissions\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 49
        echo __("Sharing");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_regional\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 50
        echo __("Regional");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_troubleshooting\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 51
        echo __("Troubleshooting");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_users\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 52
        echo __("Users");
        yield "</span></a></li>
                    </ul>
                    <form id=\"SettingsForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("settings.update"), "html", null, true);
        yield "\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab_config\">
                                <h3 class=\"section-heading\">";
        // line 57
        echo __("Configuration");
        yield "</h3>

                                ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LIBRARY_LOCATION"], "method", false, false, false, 59)) {
            // line 60
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Library Location");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 61
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The fully qualified path to the CMS library location.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            yield "
                                    ";
            // line 63
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_LOCATION"], "method", false, false, false, 63)) {
                // line 64
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["LIBRARY_LOCATION", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_LOCATION"], "method", false, false, false, 64), ($context["helpText"] ?? null), "required"], 64, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 66
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["LIBRARY_LOCATION", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_LOCATION"], "method", false, false, false, 66), ($context["helpText"] ?? null)], 66, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 68
            yield "                                ";
        }
        // line 69
        yield "
                                ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SERVER_KEY"], "method", false, false, false, 70)) {
            // line 71
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("CMS Secret Key");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 72
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This key must be entered into each Player to authenticate the Player with the CMS.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            yield "
                                    ";
            // line 74
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SERVER_KEY"], "method", false, false, false, 74)) {
                // line 75
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["SERVER_KEY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SERVER_KEY"], "method", false, false, false, 75), ($context["helpText"] ?? null), "required"], 75, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 77
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["SERVER_KEY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SERVER_KEY"], "method", false, false, false, 77), ($context["helpText"] ?? null)], 77, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 79
            yield "                                    <div class=\"form-group row\">
                                        <label class=\"col-sm-2 control-label\"></label>
                                        <div class=\"col-sm-10\">
                                            <p><i>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getPhoneticKey", [], "method", false, false, false, 82), "html", null, true);
            yield "</i></p>
                                        </div>
                                    </div>
                                ";
        }
        // line 86
        yield "
                                ";
        // line 87
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["GLOBAL_THEME_NAME"], "method", false, false, false, 87)) {
            // line 88
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("CMS Theme");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Theme to apply to all pages by default");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 90
            yield "
                                    ";
            // line 91
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["GLOBAL_THEME_NAME"], "method", false, false, false, 91)) {
                // line 92
                yield "                                        ";
                if (($context["hideThemes"] ?? null)) {
                    // line 93
                    yield "                                            ";
                    // line 94
                    yield "                                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_input", ["GLOBAL_THEME_NAME", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["GLOBAL_THEME_NAME"], "method", false, false, false, 94), ($context["helpText"] ?? null)], 94, $context, $this->getSourceContext());
                    yield "
                                        ";
                } else {
                    // line 96
                    yield "                                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["GLOBAL_THEME_NAME", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["GLOBAL_THEME_NAME"], "method", false, false, false, 96), ($context["themes"] ?? null), "id", "value", ($context["helpText"] ?? null)], 96, $context, $this->getSourceContext());
                    yield "
                                        ";
                }
                // line 98
                yield "                                    ";
            } else {
                // line 99
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["GLOBAL_THEME_NAME", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["GLOBAL_THEME_NAME"], "method", false, false, false, 99), ($context["helpText"] ?? null)], 99, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 101
            yield "                                ";
        }
        // line 102
        yield "
                                ";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["NAVIGATION_MENU_POSITION"], "method", false, false, false, 103)) {
            // line 104
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Navigation Menu");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select where the Navigation Menu should be positioned by default. Users can set an alternate view in their Preferences under their User Profile.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            yield "
                                    ";
            // line 107
            $context["horizontalOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Horizontal along the top");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 108
            yield "                                    ";
            $context["verticalOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Vertically on the left");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 109
            yield "                                    ";
            $context["options"] = [["id" => "horizontal", "value" =>             // line 110
($context["horizontalOption"] ?? null)], ["id" => "vertical", "value" =>             // line 111
($context["verticalOption"] ?? null)]];
            // line 113
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["NAVIGATION_MENU_POSITION"], "method", false, false, false, 113)) {
                // line 114
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["NAVIGATION_MENU_POSITION", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["NAVIGATION_MENU_POSITION", "vertical"], "method", false, false, false, 114), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 114, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 116
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["NAVIGATION_MENU_POSITION", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["NAVIGATION_MENU_POSITION", "vertical"], "method", false, false, false, 116), ($context["helpText"] ?? null)], 116, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 118
            yield "                                ";
        }
        // line 119
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_defaults\">
                                <h3 class=\"section-heading\">";
        // line 121
        echo __("Defaults");
        yield "</h3>

                                ";
        // line 123
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 123)) {
            // line 124
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default update media in all layouts");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 125
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default the checkbox for updating media on all layouts when editing in the library");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            yield "
                                    ";
            // line 127
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 127), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 127)], 127, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 129
        yield "
                                ";
        // line 130
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LAYOUT_COPY_MEDIA_CHECKB"], "method", false, false, false, 130)) {
            // line 131
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default copy media when copying a layout?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default the checkbox for making duplicates of media when copying layouts");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 133
            yield "
                                    ";
            // line 134
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["LAYOUT_COPY_MEDIA_CHECKB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LAYOUT_COPY_MEDIA_CHECKB"], "method", false, false, false, 134), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 134)], 134, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 136
        yield "
                                ";
        // line 137
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LIBRARY_MEDIA_DELETEOLDVER_CHECKB"], "method", false, false, false, 137)) {
            // line 138
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default for \"Delete old version of Media\" checkbox. Shown when Editing Library Media.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 139
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default the checkbox for Deleting Old Version of media when a new file is being uploaded to the library.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 140
            yield "
                                    ";
            // line 141
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["LIBRARY_MEDIA_DELETEOLDVER_CHECKB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_MEDIA_DELETEOLDVER_CHECKB"], "method", false, false, false, 141), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 141)], 141, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 143
        yield "
                                ";
        // line 144
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method", false, false, false, 144)) {
            // line 145
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should Layouts be automatically Published?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 146
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When enabled draft Layouts will be automatically published 30 minutes after the last edit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 147
            yield "
                                    ";
            // line 148
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method", false, false, false, 148), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method", false, false, false, 148)], 148, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 150
        yield "
                                ";
        // line 151
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_TRANSITION_IN"], "method", false, false, false, 151)) {
            // line 152
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Transition In");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 153
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Transition In that should be applied to widgets");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 154
            yield "
                                    ";
            // line 155
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_TRANSITION_IN"], "method", false, false, false, 155)) {
                // line 156
                yield "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.search")], ["name" => "data-search-term", "value" => "transition"], ["name" => "data-id-property", "value" => "code"], ["name" => "data-text-property", "value" => "transition"], ["name" => "data-filter-options", "value" => "{\"availableAsIn\":\"1\"}"]];
                // line 164
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DEFAULT_TRANSITION_IN", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_IN"], "method", false, false, false, 164), [($context["defaultTransitionIn"] ?? null)], "code", "transition", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 164, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 166
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_TRANSITION_IN", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_IN"], "method", false, false, false, 166), ""], 166, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 168
            yield "                                ";
        }
        // line 169
        yield "
                                ";
        // line 170
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_TRANSITION_OUT"], "method", false, false, false, 170)) {
            // line 171
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Transition Out");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 172
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Transition Out that should be applied to widgets");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 173
            yield "
                                    ";
            // line 174
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_TRANSITION_OUT"], "method", false, false, false, 174)) {
                // line 175
                yield "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.search")], ["name" => "data-search-term", "value" => "transition"], ["name" => "data-id-property", "value" => "code"], ["name" => "data-text-property", "value" => "transition"], ["name" => "data-filter-options", "value" => "{\"availableAsOut\":\"1\"}"]];
                // line 183
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DEFAULT_TRANSITION_OUT", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_OUT"], "method", false, false, false, 183), [($context["defaultTransitionOut"] ?? null)], "code", "transition", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 183, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 185
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_TRANSITION_OUT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_OUT"], "method", false, false, false, 185), ""], 185, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 187
            yield "                                ";
        }
        // line 188
        yield "
                                ";
        // line 189
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_TRANSITION_DURATION"], "method", false, false, false, 189)) {
            // line 190
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Transition duration");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 191
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default duration for in and out transitions");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 192
            yield "
                                    ";
            // line 193
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_TRANSITION_DURATION"], "method", false, false, false, 193)) {
                // line 194
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DEFAULT_TRANSITION_DURATION", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_DURATION", 0], "method", false, false, false, 194), ($context["helpText"] ?? null)], 194, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 196
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_TRANSITION_DURATION", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_DURATION", 0], "method", false, false, false, 196), ($context["helpText"] ?? null)], 196, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 198
            yield "                                ";
        }
        // line 199
        yield "
                                ";
        // line 200
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 200)) {
            // line 201
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default value for \"Automatically apply Transitions?.\" checkbox on Layout add form");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 202
            yield "
                                    ";
            // line 203
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DEFAULT_TRANSITION_AUTO_APPLY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 203), "", "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 203)], 203, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 205
        yield "
                                ";
        // line 206
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_RESIZE_THRESHOLD"], "method", false, false, false, 206)) {
            // line 207
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Resize Threshold");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 208
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The maximum dimensions to be considered when an image is resized, based on the longest side");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 209
            yield "
                                    ";
            // line 210
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_RESIZE_THRESHOLD"], "method", false, false, false, 210)) {
                // line 211
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DEFAULT_RESIZE_THRESHOLD", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_RESIZE_THRESHOLD", 0], "method", false, false, false, 211), ($context["helpText"] ?? null)], 211, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 213
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_RESIZE_THRESHOLD", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_RESIZE_THRESHOLD", 0], "method", false, false, false, 213), ($context["helpText"] ?? null)], 213, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 215
            yield "                                ";
        }
        // line 216
        yield "
                                ";
        // line 217
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_RESIZE_LIMIT"], "method", false, false, false, 217)) {
            // line 218
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Resize Limit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 219
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Images that exceed the resize limit, based on the longest side, will not be processed");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 220
            yield "
                                    ";
            // line 221
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_RESIZE_LIMIT"], "method", false, false, false, 221)) {
                // line 222
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DEFAULT_RESIZE_LIMIT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_RESIZE_LIMIT", 0], "method", false, false, false, 222), ($context["helpText"] ?? null)], 222, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 224
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_RESIZE_LIMIT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_RESIZE_LIMIT", 0], "method", false, false, false, 224), ($context["helpText"] ?? null)], 224, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 226
            yield "                                ";
        }
        // line 227
        yield "
                                ";
        // line 228
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DATASET_HARD_ROW_LIMIT"], "method", false, false, false, 228)) {
            // line 229
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("DataSet maximum number of Rows");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 230
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The maximum number of rows per DataSet, once the limit is met the limit policy defined per DataSet will dictate further action.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 231
            yield "
                                    ";
            // line 232
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DATASET_HARD_ROW_LIMIT"], "method", false, false, false, 232)) {
                // line 233
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DATASET_HARD_ROW_LIMIT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DATASET_HARD_ROW_LIMIT", 0], "method", false, false, false, 233), ($context["helpText"] ?? null)], 233, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 235
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DATASET_HARD_ROW_LIMIT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DATASET_HARD_ROW_LIMIT", 0], "method", false, false, false, 235), ($context["helpText"] ?? null)], 235, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 237
            yield "                                ";
        }
        // line 238
        yield "
                                ";
        // line 239
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_PURGE_LIST_TTL"], "method", false, false, false, 239)) {
            // line 240
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default ttl, in days, for records in purge_list table");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 241
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Entries in purge_list table with expiry date older than specified ttl will be removed.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 242
            yield "
                                    ";
            // line 243
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_PURGE_LIST_TTL"], "method", false, false, false, 243)) {
                // line 244
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DEFAULT_PURGE_LIST_TTL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_PURGE_LIST_TTL", 7], "method", false, false, false, 244), ($context["helpText"] ?? null)], 244, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 246
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_PURGE_LIST_TTL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_PURGE_LIST_TTL", 7], "method", false, false, false, 246), ($context["helpText"] ?? null)], 246, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 248
            yield "                                ";
        }
        // line 249
        yield "
                                ";
        // line 250
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER"], "method", false, false, false, 250)) {
            // line 251
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The default value for max number of items on a new dynamic Playlist");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 252
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This value can be adjusted on a per dynamic Playlist basis, it cannot exceed value set in the Limit below");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 253
            yield "
                                    ";
            // line 254
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER"], "method", false, false, false, 254)) {
                // line 255
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", 30], "method", false, false, false, 255), ($context["helpText"] ?? null), "", "", "", CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", 100], "method", false, false, false, 255)], 255, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 257
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", 30], "method", false, false, false, 257), ($context["helpText"] ?? null)], 257, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 259
            yield "                                ";
        }
        // line 260
        yield "
                                ";
        // line 261
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT"], "method", false, false, false, 261)) {
            // line 262
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The default upper limit of items that can be assigned to a dynamic Playlist");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 263
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When matching Media by Tags and name to a dynamic Playlist, this is the maximum number of allowed items that can be assigned to a dynamic Playlist");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 264
            yield "
                                    ";
            // line 265
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT"], "method", false, false, false, 265)) {
                // line 266
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", 100], "method", false, false, false, 266), ($context["helpText"] ?? null)], 266, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 268
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", 100], "method", false, false, false, 268), ($context["helpText"] ?? null)], 268, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 270
            yield "                                ";
        }
        // line 271
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_displays\">
                                <h3 class=\"section-heading\">";
        // line 273
        echo __("Displays");
        yield "</h3>

                                ";
        // line 275
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LAYOUT"], "method", false, false, false, 275)) {
            // line 276
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Layout");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 277
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The default layout to assign for new displays and displays which have their current default deleted.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 278
            yield "
                                    ";
            // line 279
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LAYOUT"], "method", false, false, false, 279)) {
                // line 280
                yield "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search")], ["name" => "data-search-term", "value" => "layout"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "layoutId"], ["name" => "data-text-property", "value" => "layout"], ["name" => "data-filter-options", "value" => "{\"retired\":\"0\"}"]];
                // line 289
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DEFAULT_LAYOUT", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["defaultLayout"] ?? null), "layoutId", [], "any", false, false, false, 289), [($context["defaultLayout"] ?? null)], "layoutId", "layout", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 289, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 291
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_LAYOUT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LAYOUT"], "method", false, false, false, 291), ($context["helpText"] ?? null)], 291, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 293
            yield "                                ";
        }
        // line 294
        yield "
                                ";
        // line 295
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["XMR_ADDRESS"], "method", false, false, false, 295)) {
            // line 296
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("XMR Private Address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 297
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please enter the private address for XMR.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 298
            yield "
                                    ";
            // line 299
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["XMR_ADDRESS"], "method", false, false, false, 299)) {
                // line 300
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["XMR_ADDRESS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_ADDRESS", "http:://localhost:8081"], "method", false, false, false, 300), ($context["helpText"] ?? null), "required"], 300, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 302
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["XMR_ADDRESS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_ADDRESS", "http:://localhost:8081"], "method", false, false, false, 302), ($context["helpText"] ?? null)], 302, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 304
            yield "                                ";
        }
        // line 305
        yield "
                                ";
        // line 306
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["XMR_WS_ADDRESS"], "method", false, false, false, 306)) {
            // line 307
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("XMR WebSocket Address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 308
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please enter the WebSocket address for XMR. Leaving this empty will mean the Player app connects to /xmr");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 309
            yield "
                                    ";
            // line 310
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["XMR_WS_ADDRESS"], "method", false, false, false, 310)) {
                // line 311
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["XMR_WS_ADDRESS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_WS_ADDRESS"], "method", false, false, false, 311), ($context["helpText"] ?? null)], 311, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 313
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["XMR_WS_ADDRESS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_WS_ADDRESS"], "method", false, false, false, 313), ($context["helpText"] ?? null)], 313, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 315
            yield "                                ";
        }
        // line 316
        yield "
                                ";
        // line 317
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["XMR_PUB_ADDRESS"], "method", false, false, false, 317)) {
            // line 318
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("XMR Public Address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 319
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please enter the public address for XMR.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 320
            yield "
                                    ";
            // line 321
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["XMR_PUB_ADDRESS"], "method", false, false, false, 321)) {
                // line 322
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["XMR_PUB_ADDRESS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_PUB_ADDRESS"], "method", false, false, false, 322), ($context["helpText"] ?? null)], 322, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 324
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["XMR_PUB_ADDRESS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_PUB_ADDRESS"], "method", false, false, false, 324), ($context["helpText"] ?? null)], 324, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 326
            yield "                                ";
        }
        // line 327
        yield "
                                ";
        // line 328
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LAT"], "method", false, false, false, 328)) {
            // line 329
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Latitude");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 330
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Latitude to apply for any Geo aware Previews");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 331
            yield "
                                    ";
            // line 332
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LAT"], "method", false, false, false, 332)) {
                // line 333
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["DEFAULT_LAT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LAT", "51.504"], "method", false, false, false, 333), ($context["helpText"] ?? null), "required"], 333, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 335
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_LAT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LAT", "51.504"], "method", false, false, false, 335), ($context["helpText"] ?? null)], 335, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 337
            yield "                                ";
        }
        // line 338
        yield "
                                ";
        // line 339
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LONG"], "method", false, false, false, 339)) {
            // line 340
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Longitude");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 341
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The longitude to apply for any Geo aware Previews");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 342
            yield "
                                    ";
            // line 343
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LONG"], "method", false, false, false, 343)) {
                // line 344
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["DEFAULT_LONG", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LONG", "-0.104"], "method", false, false, false, 344), ($context["helpText"] ?? null), "required"], 344, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 346
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_LONG", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LONG", "-0.104"], "method", false, false, false, 346), ($context["helpText"] ?? null)], 346, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 348
            yield "                                ";
        }
        // line 349
        yield "
                                ";
        // line 350
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 350)) {
            // line 351
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Add a link to the Display name using this format mask?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 352
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Turn the display name in display management into a link using the IP address last collected. The %s is replaced with the IP address. Leave blank to disable.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 353
            yield "
                                    ";
            // line 354
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 354)) {
                // line 355
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["SHOW_DISPLAY_AS_VNCLINK", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 355), ($context["helpText"] ?? null)], 355, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 357
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["SHOW_DISPLAY_AS_VNCLINK", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 357), ($context["helpText"] ?? null)], 357, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 359
            yield "                                ";
        }
        // line 360
        yield "
                                ";
        // line 361
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SHOW_DISPLAY_AS_VNC_TGT"], "method", false, false, false, 361)) {
            // line 362
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The target attribute for the above link");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 363
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("If the display name is shown as a link in display management, what target should the link have? Set _top to open the link in the same window or _blank to open in a new window.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 364
            yield "
                                    ";
            // line 365
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SHOW_DISPLAY_AS_VNC_TGT"], "method", false, false, false, 365)) {
                // line 366
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["SHOW_DISPLAY_AS_VNC_TGT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SHOW_DISPLAY_AS_VNC_TGT", "_top"], "method", false, false, false, 366), ($context["helpText"] ?? null)], 366, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 368
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["SHOW_DISPLAY_AS_VNC_TGT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SHOW_DISPLAY_AS_VNC_TGT", "_top"], "method", false, false, false, 368), ($context["helpText"] ?? null)], 368, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 370
            yield "                                ";
        }
        // line 371
        yield "
                                ";
        // line 372
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAX_LICENSED_DISPLAYS"], "method", false, false, false, 372)) {
            // line 373
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Number of display slots");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 374
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The maximum number of licensed Players for this server installation. 0 = unlimited");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 375
            yield "
                                    ";
            // line 376
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAX_LICENSED_DISPLAYS"], "method", false, false, false, 376)) {
                // line 377
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["MAX_LICENSED_DISPLAYS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAX_LICENSED_DISPLAYS", 0], "method", false, false, false, 377), ($context["helpText"] ?? null)], 377, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 379
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MAX_LICENSED_DISPLAYS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAX_LICENSED_DISPLAYS", 0], "method", false, false, false, 379), ($context["helpText"] ?? null)], 379, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 381
            yield "                                ";
        }
        // line 382
        yield "
                                ";
        // line 383
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 383)) {
            // line 384
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Aggregation level");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 385
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set the Default setting to use for the level of collection for Proof of Play Statistics to be applied to Layouts / Media and Widget items.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 386
            yield "
                                    ";
            // line 387
            $context["individualOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Individual");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 388
            yield "                                    ";
            $context["hourlyOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Hourly");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 389
            yield "                                    ";
            $context["dailyOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Daily");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 390
            yield "                                    ";
            $context["options"] = [["id" => "Individual", "value" =>             // line 391
($context["individualOption"] ?? null)], ["id" => "Hourly", "value" =>             // line 392
($context["hourlyOption"] ?? null)], ["id" => "Daily", "value" =>             // line 393
($context["dailyOption"] ?? null)]];
            // line 395
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 395)) {
                // line 396
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 396), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 396, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 398
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 398), ($context["helpText"] ?? null)], 398, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 400
            yield "                                ";
        }
        // line 401
        yield "
                                ";
        // line 402
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_STATS_DEFAULT"], "method", false, false, false, 402)) {
            // line 403
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Stats Collection?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 404
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set the Default Settings for Proof of Play statistics to apply to all Displays. This can be toggled off by using Display Profiles.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 405
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DISPLAY_PROFILE_STATS_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_STATS_DEFAULT"], "method", false, false, false, 405), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_STATS_DEFAULT"], "method", false, false, false, 405)], 405, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 407
        yield "
                                ";
        // line 408
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 408)) {
            // line 409
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Layout Stats Collection?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 410
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Layout Items.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 411
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["LAYOUT_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 411), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 411)], 411, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 413
        yield "
                                ";
        // line 414
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 414)) {
            // line 415
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Media Stats Collection?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 416
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Media Items.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 417
            yield "
                                    ";
            // line 418
            $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 419
            yield "                                    ";
            $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 420
            yield "                                    ";
            $context["inheritOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Inherit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 421
            yield "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 422
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 423
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>             // line 424
($context["inheritOption"] ?? null)]];
            // line 426
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 426)) {
                // line 427
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["MEDIA_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 427), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 427, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 429
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MEDIA_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 429), ($context["helpText"] ?? null)], 429, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 431
            yield "                                ";
        }
        // line 432
        yield "
                                ";
        // line 433
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 433)) {
            // line 434
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Playlist Stats Collection?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 435
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Playlists.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 436
            yield "
                                    ";
            // line 437
            $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 438
            yield "                                    ";
            $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 439
            yield "                                    ";
            $context["inheritOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Inherit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 440
            yield "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 441
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 442
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>             // line 443
($context["inheritOption"] ?? null)]];
            // line 445
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 445)) {
                // line 446
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["PLAYLIST_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 446), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 446, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 448
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PLAYLIST_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 448), ($context["helpText"] ?? null)], 448, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 450
            yield "                                ";
        }
        // line 451
        yield "
                                ";
        // line 452
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 452)) {
            // line 453
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Widget Stats Collection?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 454
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select the Default setting to use for the collection for Proof of Play statistics for all Widgets.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 455
            yield "
                                    ";
            // line 456
            $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 457
            yield "                                    ";
            $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 458
            yield "                                    ";
            $context["inheritOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Inherit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 459
            yield "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 460
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 461
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>             // line 462
($context["inheritOption"] ?? null)]];
            // line 464
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 464)) {
                // line 465
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["WIDGET_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 465), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 465, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 467
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["WIDGET_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 467), ($context["helpText"] ?? null)], 467, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 469
            yield "                                ";
        }
        // line 470
        yield "
                                ";
        // line 471
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method", false, false, false, 471)) {
            // line 472
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable the option to report the current layout status?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 473
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method", false, false, false, 473), "", "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method", false, false, false, 473)], 473, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 475
        yield "
                                ";
        // line 476
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method", false, false, false, 476)) {
            // line 477
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Lock the Display Name to the device name provided by the Player?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 478
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DISPLAY_LOCK_NAME_TO_DEVICENAME", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method", false, false, false, 478), "", "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method", false, false, false, 478)], 478, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 480
        yield "
                                ";
        // line 481
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method", false, false, false, 481)) {
            // line 482
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable the option to set the screenshot interval?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 483
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method", false, false, false, 483), "", "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method", false, false, false, 483)], 483, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 485
        yield "
                                ";
        // line 486
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT"], "method", false, false, false, 486)) {
            // line 487
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Display Screenshot Default Size");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 488
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The default size in pixels for the Display Screenshots");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 489
            yield "
                                    ";
            // line 490
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT"], "method", false, false, false, 490)) {
                // line 491
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", 200], "method", false, false, false, 491), ($context["helpText"] ?? null)], 491, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 493
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", 200], "method", false, false, false, 493), ($context["helpText"] ?? null)], 493, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 495
            yield "                                ";
        }
        // line 496
        yield "
                                ";
        // line 497
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_SCREENSHOT_TTL"], "method", false, false, false, 497)) {
            // line 498
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Display screenshot Time to keep (days)");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 499
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Display screenshots older than the TTL will be automatically removed. Set to 0 to never remove old screenshots.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 500
            yield "
                                    ";
            // line 501
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_SCREENSHOT_TTL"], "method", false, false, false, 501)) {
                // line 502
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DISPLAY_SCREENSHOT_TTL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_SCREENSHOT_TTL", 0], "method", false, false, false, 502), ($context["helpText"] ?? null)], 502, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 504
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DISPLAY_SCREENSHOT_TTL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_SCREENSHOT_TTL", 0], "method", false, false, false, 504), ($context["helpText"] ?? null)], 504, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 506
            yield "                                ";
        }
        // line 507
        yield "
                                ";
        // line 508
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_AUTO_AUTH"], "method", false, false, false, 508)) {
            // line 509
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Automatically authorise new Displays?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 510
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("If checked all new Displays registering with the CMS using the correct CMS key will automatically be set to authorised and display the Default Layout.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 511
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DISPLAY_AUTO_AUTH", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_AUTO_AUTH", 0], "method", false, false, false, 511), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_AUTO_AUTH"], "method", false, false, false, 511)], 511, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 513
        yield "
                                ";
        // line 514
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_DEFAULT_FOLDER"], "method", false, false, false, 514)) {
            // line 515
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Folder for new Displays");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 516
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set default folder for new Displays, by default the Root folder will be used");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 517
            yield "
                                    ";
            // line 518
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_DEFAULT_FOLDER"], "method", false, false, false, 518)) {
                // line 519
                yield "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search")], ["name" => "data-filter-options", "value" => "{\"gridView\":1}"], ["name" => "data-search-term", "value" => "folderName"], ["name" => "data-id-property", "value" => "folderId"], ["name" => "data-text-property", "value" => "text"], ["name" => "data-initial-key", "value" => "folderId"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,                 // line 527
($context["theme"] ?? null), "getSetting", ["DISPLAY_DEFAULT_FOLDER", 1], "method", false, false, false, 527)]];
                // line 529
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DISPLAY_DEFAULT_FOLDER", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_DEFAULT_FOLDER", 1], "method", false, false, false, 529), null, "", "", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 529, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 531
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DISPLAY_DEFAULT_FOLDER", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_DEFAULT_FOLDER"], "method", false, false, false, 531), ($context["helpText"] ?? null)], 531, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 533
            yield "                                ";
        }
        // line 534
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_general\">
                                <h3 class=\"section-heading\">";
        // line 536
        echo __("General");
        yield "</h3>

                                ";
        // line 538
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["HELP_BASE"], "method", false, false, false, 538)) {
            // line 539
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Location of the Manual");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 540
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The address of the user manual, which will be used as a prefix for all help links.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 541
            yield "
                                    ";
            // line 542
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["HELP_BASE"], "method", false, false, false, 542)) {
                // line 543
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["HELP_BASE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["HELP_BASE", "https://xibosignage.com/manual/"], "method", false, false, false, 543), ($context["helpText"] ?? null), "required"], 543, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 545
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["HELP_BASE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["HELP_BASE", "https://xibosignage.com/manual/"], "method", false, false, false, 545), ($context["helpText"] ?? null)], 545, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 547
            yield "                                ";
        }
        // line 548
        yield "
                                ";
        // line 549
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["QUICK_CHART_URL"], "method", false, false, false, 549)) {
            // line 550
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Quick Chart URL");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 551
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter the URL to a Quick Chart service. This is used to draw charts in emailed reports and for showing a QR code during two factor authentication.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 552
            yield "
                                    ";
            // line 553
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["QUICK_CHART_URL"], "method", false, false, false, 553)) {
                // line 554
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["QUICK_CHART_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["QUICK_CHART_URL", "https://quickchart.io"], "method", false, false, false, 554), ($context["helpText"] ?? null), "required"], 554, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 556
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["QUICK_CHART_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["QUICK_CHART_URL", "https://quickchart.io"], "method", false, false, false, 556), ($context["helpText"] ?? null)], 556, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 558
            yield "                                ";
        }
        // line 559
        yield "
                                ";
        // line 560
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PHONE_HOME"], "method", false, false, false, 560)) {
            // line 561
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Allow usage tracking?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 562
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should the CMS send anonymous statistics to help improve the software?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 563
            yield "
                                    ";
            // line 564
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["PHONE_HOME", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME"], "method", false, false, false, 564), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PHONE_HOME"], "method", false, false, false, 564)], 564, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 566
        yield "
                                ";
        // line 567
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PHONE_HOME_KEY"], "method", false, false, false, 567)) {
            // line 568
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Phone home key");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 569
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Key used to distinguish each CMS instance. This is generated randomly based on the time you first installed the CMS, and is completely untraceable.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 570
            yield "
                                    ";
            // line 571
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PHONE_HOME_KEY"], "method", false, false, false, 571)) {
                // line 572
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["PHONE_HOME_KEY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_KEY"], "method", false, false, false, 572), ($context["helpText"] ?? null)], 572, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 574
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PHONE_HOME_KEY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_KEY"], "method", false, false, false, 574), ($context["helpText"] ?? null)], 574, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 576
            yield "                                ";
        }
        // line 577
        yield "
                                ";
        // line 578
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PHONE_HOME_DATE"], "method", false, false, false, 578)) {
            // line 579
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Phone home time");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 580
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The last time we PHONED_HOME in seconds since the epoch");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 581
            yield "
                                    ";
            // line 582
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PHONE_HOME_DATE"], "method", false, false, false, 582)) {
                // line 583
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["PHONE_HOME_DATE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_DATE"], "method", false, false, false, 583), ($context["helpText"] ?? null)], 583, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 585
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PHONE_HOME_DATE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_DATE"], "method", false, false, false, 585), ($context["helpText"] ?? null)], 585, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 587
            yield "                                ";
        }
        // line 588
        yield "
                                ";
        // line 589
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PHONE_HOME_URL"], "method", false, false, false, 589)) {
            // line 590
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Phone home URL");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 591
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The URL to connect to to PHONE_HOME (if enabled)");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 592
            yield "
                                    ";
            // line 593
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PHONE_HOME_URL"], "method", false, false, false, 593)) {
                // line 594
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["PHONE_HOME_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_URL", "https://xibo.org.uk/api/stats/track"], "method", false, false, false, 594), ($context["helpText"] ?? null)], 594, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 596
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PHONE_HOME_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_URL", "https://xibo.org.uk/api/stats/track"], "method", false, false, false, 596), ($context["helpText"] ?? null)], 596, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 598
            yield "                                ";
        }
        // line 599
        yield "
                                ";
        // line 600
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SCHEDULE_LOOKAHEAD"], "method", false, false, false, 600)) {
            // line 601
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Send Schedule in advance?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 602
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should the CMS send future schedule information to Players?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 603
            yield "
                                    ";
            // line 604
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["SCHEDULE_LOOKAHEAD", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SCHEDULE_LOOKAHEAD", 1], "method", false, false, false, 604), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SCHEDULE_LOOKAHEAD"], "method", false, false, false, 604)], 604, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 606
        yield "
                                ";
        // line 607
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["REQUIRED_FILES_LOOKAHEAD"], "method", false, false, false, 607)) {
            // line 608
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Send files in advance?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 609
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("How many seconds in to the future should the calls to RequiredFiles look?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 610
            yield "
                                    ";
            // line 611
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["REQUIRED_FILES_LOOKAHEAD"], "method", false, false, false, 611)) {
                // line 612
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["REQUIRED_FILES_LOOKAHEAD", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REQUIRED_FILES_LOOKAHEAD", "172800"], "method", false, false, false, 612), ($context["helpText"] ?? null)], 612, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 614
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["REQUIRED_FILES_LOOKAHEAD", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REQUIRED_FILES_LOOKAHEAD", "172800"], "method", false, false, false, 614), ($context["helpText"] ?? null)], 614, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 616
            yield "                                ";
        }
        // line 617
        yield "
                                ";
        // line 618
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SETTING_IMPORT_ENABLED"], "method", false, false, false, 618)) {
            // line 619
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Allow Import?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 620
            yield "
                                    ";
            // line 621
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["SETTING_IMPORT_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SETTING_IMPORT_ENABLED", 0], "method", false, false, false, 621), "", "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SETTING_IMPORT_ENABLED"], "method", false, false, false, 621)], 621, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 623
        yield "
                                ";
        // line 624
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SETTING_LIBRARY_TIDY_ENABLED"], "method", false, false, false, 624)) {
            // line 625
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Library Tidy?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 626
            yield "
                                    ";
            // line 627
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["SETTING_LIBRARY_TIDY_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SETTING_LIBRARY_TIDY_ENABLED", 1], "method", false, false, false, 627), "", "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SETTING_LIBRARY_TIDY_ENABLED"], "method", false, false, false, 627)], 627, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 629
        yield "
                                ";
        // line 630
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 630)) {
            // line 631
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Status Dashboard Widget");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 632
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("HTML to embed in an iframe on the Status Dashboard");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 633
            yield "
                                    ";
            // line 634
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 634)) {
                // line 635
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["EMBEDDED_STATUS_WIDGET", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 635), ($context["helpText"] ?? null)], 635, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 637
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["EMBEDDED_STATUS_WIDGET", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 637), ($context["helpText"] ?? null)], 637, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 639
            yield "                                ";
        }
        // line 640
        yield "
                                ";
        // line 641
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULTS_IMPORTED"], "method", false, false, false, 641)) {
            // line 642
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Defaults Imported?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 643
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Has the default layout been imported?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 644
            yield "
                                    ";
            // line 645
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DEFAULTS_IMPORTED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULTS_IMPORTED", 0], "method", false, false, false, 645), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULTS_IMPORTED"], "method", false, false, false, 645)], 645, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 647
        yield "
                                ";
        // line 648
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DASHBOARD_LATEST_NEWS_ENABLED"], "method", false, false, false, 648)) {
            // line 649
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Latest News?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 650
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should the Dashboard show latest news? The address is provided by the theme.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 651
            yield "
                                    ";
            // line 652
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DASHBOARD_LATEST_NEWS_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DASHBOARD_LATEST_NEWS_ENABLED", 1], "method", false, false, false, 652), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DASHBOARD_LATEST_NEWS_ENABLED"], "method", false, false, false, 652)], 652, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 654
        yield "
                                ";
        // line 655
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["INSTANCE_SUSPENDED"], "method", false, false, false, 655)) {
            // line 656
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Instance Suspended");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 657
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Is this instance suspended?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 658
            yield "
                                    ";
            // line 659
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["INSTANCE_SUSPENDED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["INSTANCE_SUSPENDED", 0], "method", false, false, false, 659), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["INSTANCE_SUSPENDED"], "method", false, false, false, 659)], 659, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 661
        yield "
                                ";
        // line 662
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LATEST_NEWS_URL"], "method", false, false, false, 662)) {
            // line 663
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Latest News URL");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 664
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("RSS/Atom Feed to be displayed on the Status Dashboard");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 665
            yield "
                                    ";
            // line 666
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LATEST_NEWS_URL"], "method", false, false, false, 666)) {
                // line 667
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["LATEST_NEWS_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LATEST_NEWS_URL"], "method", false, false, false, 667), ($context["helpText"] ?? null)], 667, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 669
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["LATEST_NEWS_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LATEST_NEWS_URL"], "method", false, false, false, 669), ($context["helpText"] ?? null)], 669, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 671
            yield "                                ";
        }
        // line 672
        yield "
                                ";
        // line 673
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["REPORTS_EXPORT_SHOW_LOGO"], "method", false, false, false, 673)) {
            // line 674
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Show the Logo on report exports?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 675
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When exporting a saved report to PDF, should the logo be shown on the PDF?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 676
            yield "
                                    ";
            // line 677
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["REPORTS_EXPORT_SHOW_LOGO", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REPORTS_EXPORT_SHOW_LOGO", 0], "method", false, false, false, 677), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["REPORTS_EXPORT_SHOW_LOGO"], "method", false, false, false, 677)], 677, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 679
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_maint\">
                                <h3 class=\"section-heading\">";
        // line 681
        echo __("Maintenance");
        yield "</h3>

                                ";
        // line 683
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_ENABLED"], "method", false, false, false, 683)) {
            // line 684
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Maintenance?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 685
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Allow the maintenance script to run if it is called?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 686
            yield "
                                    ";
            // line 687
            $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 688
            yield "                                    ";
            $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 689
            yield "                                    ";
            $context["protectedOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Protected");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 690
            yield "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 691
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 692
($context["onOption"] ?? null)], ["id" => "Protected", "value" =>             // line 693
($context["protectedOption"] ?? null)]];
            // line 695
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_ENABLED"], "method", false, false, false, 695)) {
                // line 696
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["MAINTENANCE_ENABLED", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ENABLED", "Off"], "method", false, false, false, 696), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 696, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 698
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MAINTENANCE_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ENABLED", "Off"], "method", false, false, false, 698), ($context["helpText"] ?? null)], 698, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 700
            yield "                                ";
        }
        // line 701
        yield "
                                ";
        // line 702
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_EMAIL_ALERTS"], "method", false, false, false, 702)) {
            // line 703
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Email Alerts?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 704
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Global switch for email alerts to be sent");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 705
            yield "
                                    ";
            // line 706
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["MAINTENANCE_EMAIL_ALERTS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_EMAIL_ALERTS", 1], "method", false, false, false, 706), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_EMAIL_ALERTS"], "method", false, false, false, 706)], 706, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 708
        yield "
                                ";
        // line 709
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_LOG_MAXAGE"], "method", false, false, false, 709)) {
            // line 710
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Max Log Age");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 711
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Maximum age for log entries in days. Set to 0 to keep logs indefinitely.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 712
            yield "
                                    ";
            // line 713
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_LOG_MAXAGE"], "method", false, false, false, 713)) {
                // line 714
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["MAINTENANCE_LOG_MAXAGE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_LOG_MAXAGE", 30], "method", false, false, false, 714), ($context["helpText"] ?? null)], 714, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 716
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MAINTENANCE_LOG_MAXAGE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_LOG_MAXAGE", 30], "method", false, false, false, 716), ($context["helpText"] ?? null)], 716, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 718
            yield "                                ";
        }
        // line 719
        yield "
                                ";
        // line 720
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_STAT_MAXAGE"], "method", false, false, false, 720)) {
            // line 721
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Max Statistics Age");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 722
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Maximum age for statistics entries in days. Entries older than this will not be processed and existing entries will be removed. Set to 0 to keep statistics indefinitely.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 723
            yield "
                                    ";
            // line 724
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_STAT_MAXAGE"], "method", false, false, false, 724)) {
                // line 725
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["MAINTENANCE_STAT_MAXAGE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_STAT_MAXAGE", 30], "method", false, false, false, 725), ($context["helpText"] ?? null)], 725, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 727
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MAINTENANCE_STAT_MAXAGE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_STAT_MAXAGE", 30], "method", false, false, false, 727), ($context["helpText"] ?? null)], 727, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 729
            yield "                                ";
        }
        // line 730
        yield "
                                ";
        // line 731
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_ALERT_TOUT"], "method", false, false, false, 731)) {
            // line 732
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Max Display Timeout");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 733
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("How long in minutes after the last time a Player connects should we send an alert? Can be overridden on a per Player basis.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 734
            yield "
                                    ";
            // line 735
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_ALERT_TOUT"], "method", false, false, false, 735)) {
                // line 736
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["MAINTENANCE_ALERT_TOUT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ALERT_TOUT", 12], "method", false, false, false, 736), ($context["helpText"] ?? null)], 736, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 738
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MAINTENANCE_ALERT_TOUT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ALERT_TOUT", 12], "method", false, false, false, 738), ($context["helpText"] ?? null)], 738, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 740
            yield "                                ";
        }
        // line 741
        yield "
                                ";
        // line 742
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_ALWAYS_ALERT"], "method", false, false, false, 742)) {
            // line 743
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Send repeat Display Timeouts");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 744
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should the CMS send an email if a display is in an error state every time maintenance runs?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 745
            yield "
                                    ";
            // line 746
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["MAINTENANCE_ALWAYS_ALERT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ALWAYS_ALERT", 0], "method", false, false, false, 746), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_ALWAYS_ALERT"], "method", false, false, false, 746)], 746, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 748
        yield "
                            </div>
                            <div class=\"tab-pane\" id=\"tab_network\">
                                <h3 class=\"section-heading\">";
        // line 751
        echo __("Network");
        yield "</h3>

                                ";
        // line 753
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["mail_to"], "method", false, false, false, 753)) {
            // line 754
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Admin email address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 755
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This is the overall CMS adminstrator who will receive copies of all email notifications generated by the CMS.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 756
            yield "
                                    ";
            // line 757
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["mail_to"], "method", false, false, false, 757)) {
                // line 758
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["mail_to", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_to"], "method", false, false, false, 758), ($context["helpText"] ?? null)], 758, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 760
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["mail_to", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_to"], "method", false, false, false, 760), ($context["helpText"] ?? null)], 760, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 762
            yield "                                ";
        }
        // line 763
        yield "
                                ";
        // line 764
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["mail_from"], "method", false, false, false, 764)) {
            // line 765
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Sending email address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 766
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Mail will be sent from this address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 767
            yield "
                                    ";
            // line 768
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["mail_from"], "method", false, false, false, 768)) {
                // line 769
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["mail_from", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_from"], "method", false, false, false, 769), ($context["helpText"] ?? null)], 769, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 771
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["mail_from", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_from"], "method", false, false, false, 771), ($context["helpText"] ?? null)], 771, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 773
            yield "                                ";
        }
        // line 774
        yield "
                                ";
        // line 775
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["mail_from_name"], "method", false, false, false, 775)) {
            // line 776
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Sending email name");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 777
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Mail will be sent under this name");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 778
            yield "
                                    ";
            // line 779
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["mail_from_name"], "method", false, false, false, 779)) {
                // line 780
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["mail_from_name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_from_name"], "method", false, false, false, 780), ($context["helpText"] ?? null)], 780, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 782
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["mail_from_name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_from_name"], "method", false, false, false, 782), ($context["helpText"] ?? null)], 782, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 784
            yield "                                ";
        }
        // line 785
        yield "
                                ";
        // line 786
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SENDFILE_MODE"], "method", false, false, false, 786)) {
            // line 787
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("File download mode");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 788
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should the CMS use Apache X-Sendfile, Nginx X-Accel, or PHP (Off) to return the files from the library?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 789
            yield "
                                    ";
            // line 790
            $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 791
            yield "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 792
($context["offOption"] ?? null)], ["id" => "Apache", "value" => "Apache"], ["id" => "Nginx", "value" => "Nginx"]];
            // line 796
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SENDFILE_MODE"], "method", false, false, false, 796)) {
                // line 797
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["SENDFILE_MODE", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SENDFILE_MODE", "Off"], "method", false, false, false, 797), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 797, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 799
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["SENDFILE_MODE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SENDFILE_MODE", "Off"], "method", false, false, false, 799), ($context["helpText"] ?? null)], 799, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 801
            yield "                                ";
        }
        // line 802
        yield "
                                ";
        // line 803
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PROXY_HOST"], "method", false, false, false, 803)) {
            // line 804
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Proxy URL");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 805
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Proxy URL");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 806
            yield "
                                    ";
            // line 807
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PROXY_HOST"], "method", false, false, false, 807)) {
                // line 808
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["PROXY_HOST", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_HOST"], "method", false, false, false, 808), ($context["helpText"] ?? null)], 808, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 810
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PROXY_HOST", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_HOST"], "method", false, false, false, 810), ($context["helpText"] ?? null)], 810, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 812
            yield "                                ";
        }
        // line 813
        yield "
                                ";
        // line 814
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PROXY_PORT"], "method", false, false, false, 814)) {
            // line 815
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Proxy Port");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 816
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Proxy Port");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 817
            yield "
                                    ";
            // line 818
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PROXY_PORT"], "method", false, false, false, 818)) {
                // line 819
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["PROXY_PORT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_PORT", 0], "method", false, false, false, 819), ($context["helpText"] ?? null)], 819, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 821
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PROXY_PORT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_PORT", 0], "method", false, false, false, 821), ($context["helpText"] ?? null)], 821, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 823
            yield "                                ";
        }
        // line 824
        yield "
                                ";
        // line 825
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PROXY_AUTH"], "method", false, false, false, 825)) {
            // line 826
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Proxy Credentials");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 827
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Authentication information for this proxy. username:password");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 828
            yield "
                                    ";
            // line 829
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PROXY_AUTH"], "method", false, false, false, 829)) {
                // line 830
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["PROXY_AUTH", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_AUTH"], "method", false, false, false, 830), ($context["helpText"] ?? null)], 830, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 832
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PROXY_AUTH", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_AUTH"], "method", false, false, false, 832), ($context["helpText"] ?? null)], 832, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 834
            yield "                                ";
        }
        // line 835
        yield "
                                ";
        // line 836
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PROXY_EXCEPTIONS"], "method", false, false, false, 836)) {
            // line 837
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Proxy Exceptions");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 838
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Hosts and Keywords that should not be loaded via the Proxy Specified. These should be comma separated.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 839
            yield "
                                    ";
            // line 840
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PROXY_EXCEPTIONS"], "method", false, false, false, 840)) {
                // line 841
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["PROXY_EXCEPTIONS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_EXCEPTIONS"], "method", false, false, false, 841), ($context["helpText"] ?? null)], 841, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 843
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PROXY_EXCEPTIONS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_EXCEPTIONS"], "method", false, false, false, 843), ($context["helpText"] ?? null)], 843, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 845
            yield "                                ";
        }
        // line 846
        yield "
                                ";
        // line 847
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["CDN_URL"], "method", false, false, false, 847)) {
            // line 848
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("CDN Address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 849
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Content Delivery Network Address for serving file requests to Players");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 850
            yield "
                                    ";
            // line 851
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["CDN_URL"], "method", false, false, false, 851)) {
                // line 852
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["CDN_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["CDN_URL"], "method", false, false, false, 852), ($context["helpText"] ?? null)], 852, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 854
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["CDN_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["CDN_URL"], "method", false, false, false, 854), ($context["helpText"] ?? null)], 854, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 856
            yield "                                ";
        }
        // line 857
        yield "
                                ";
        // line 858
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 858)) {
            // line 859
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Monthly bandwidth Limit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 860
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("XMDS Transfer Limit in KB/month");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 861
            yield "
                                    ";
            // line 862
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 862)) {
                // line 863
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 863), ($context["helpText"] ?? null)], 863, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 865
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 865), ($context["helpText"] ?? null)], 865, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 867
            yield "                                ";
        }
        // line 868
        yield "
                                ";
        // line 869
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 869)) {
            // line 870
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Library Size Limit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 871
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Limit for the Library Size in KB");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 872
            yield "
                                    ";
            // line 873
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 873)) {
                // line 874
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["LIBRARY_SIZE_LIMIT_KB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 874), ($context["helpText"] ?? null)], 874, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 876
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["LIBRARY_SIZE_LIMIT_KB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 876), ($context["helpText"] ?? null)], 876, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 878
            yield "                                ";
        }
        // line 879
        yield "
                                ";
        // line 880
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["FORCE_HTTPS"], "method", false, false, false, 880)) {
            // line 881
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Force HTTPS?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 882
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Force the portal into HTTPS?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 883
            yield "
                                    ";
            // line 884
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["FORCE_HTTPS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["FORCE_HTTPS", 0], "method", false, false, false, 884), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["FORCE_HTTPS"], "method", false, false, false, 884)], 884, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 886
        yield "
                                ";
        // line 887
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["ISSUE_STS"], "method", false, false, false, 887)) {
            // line 888
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable STS?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 889
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Add STS to the response headers? Make sure you fully understand STS before turning it on as it will prevent access via HTTP after the first successful HTTPS connection.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 890
            yield "
                                    ";
            // line 891
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["ISSUE_STS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["ISSUE_STS", 0], "method", false, false, false, 891), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["ISSUE_STS"], "method", false, false, false, 891)], 891, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 893
        yield "
                                ";
        // line 894
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["STS_TTL"], "method", false, false, false, 894)) {
            // line 895
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("STS Time out");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 896
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Time to Live (maxage) of the STS header expressed in seconds.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 897
            yield "
                                    ";
            // line 898
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["STS_TTL"], "method", false, false, false, 898)) {
                // line 899
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["STS_TTL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["STS_TTL", "600"], "method", false, false, false, 899), ($context["helpText"] ?? null), "", "", "", 999999999], 899, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 901
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["STS_TTL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["STS_TTL", "600"], "method", false, false, false, 901), ($context["helpText"] ?? null)], 901, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 903
            yield "                                ";
        }
        // line 904
        yield "
                                ";
        // line 905
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 905)) {
            // line 906
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Whitelist Load Balancers");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 907
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("If the CMS is behind a load balancer, what are the load balancer IP addresses, comma delimited.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 908
            yield "
                                    ";
            // line 909
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 909)) {
                // line 910
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["WHITELIST_LOAD_BALANCERS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 910), ($context["helpText"] ?? null)], 910, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 912
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["WHITELIST_LOAD_BALANCERS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 912), ($context["helpText"] ?? null)], 912, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 914
            yield "                                ";
        }
        // line 915
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_permissions\">
                                <h3 class=\"section-heading\">";
        // line 917
        echo __("Sharing");
        yield "</h3>

                                ";
        // line 919
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["REGION_OPTIONS_COLOURING"], "method", false, false, false, 919)) {
            // line 920
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Widget colouring in Playlist editor");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 921
            yield "
                                    ";
            // line 922
            $context["privateOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Media Colouring");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 923
            yield "                                    ";
            $context["groupOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Sharing Colouring");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 924
            yield "                                    ";
            $context["options"] = [["id" => "Media Colouring", "value" =>             // line 925
($context["privateOption"] ?? null)], ["id" => "Sharing Colouring", "value" =>             // line 926
($context["groupOption"] ?? null)]];
            // line 928
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["REGION_OPTIONS_COLOURING"], "method", false, false, false, 928)) {
                // line 929
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["REGION_OPTIONS_COLOURING", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REGION_OPTIONS_COLOURING", "Media Colouring"], "method", false, false, false, 929), ($context["options"] ?? null), "id", "value"], 929, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 931
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["REGION_OPTIONS_COLOURING", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REGION_OPTIONS_COLOURING", "Media Colouring"], "method", false, false, false, 931), ($context["helpText"] ?? null)], 931, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 933
            yield "                                ";
        }
        // line 934
        yield "
                                ";
        // line 935
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SCHEDULE_WITH_VIEW_PERMISSION"], "method", false, false, false, 935)) {
            // line 936
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Schedule with view sharing?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 937
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should users with View sharing on displays be allowed to schedule to them?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 938
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["SCHEDULE_WITH_VIEW_PERMISSION", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SCHEDULE_WITH_VIEW_PERMISSION", 0], "method", false, false, false, 938), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SCHEDULE_WITH_VIEW_PERMISSION"], "method", false, false, false, 938)], 938, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 940
        yield "
                                ";
        // line 941
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SCHEDULE_SHOW_LAYOUT_NAME"], "method", false, false, false, 941)) {
            // line 942
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Show event Layout regardless of User permission?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 943
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("If checked then the Schedule will show the Layout for existing events even if the logged in User does not have permission to see that Layout.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 944
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["SCHEDULE_SHOW_LAYOUT_NAME", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SCHEDULE_SHOW_LAYOUT_NAME", 0], "method", false, false, false, 944), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SCHEDULE_SHOW_LAYOUT_NAME"], "method", false, false, false, 944)], 944, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 946
        yield "
                                ";
        // line 947
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["TASK_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 947)) {
            // line 948
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Lock Task Config");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 949
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Is the task config locked? Useful for Service providers.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 950
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["TASK_CONFIG_LOCKED_CHECKB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["TASK_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 950), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["TASK_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 950)], 950, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 952
        yield "
                                ";
        // line 953
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["TRANSITION_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 953)) {
            // line 954
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Is the Transition config locked?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 955
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Allow modifications to the transition configuration?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 956
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["TRANSITION_CONFIG_LOCKED_CHECKB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["TRANSITION_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 956), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["TRANSITION_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 956)], 956, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 958
        yield "
                                ";
        // line 959
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["FOLDERS_ALLOW_SAVE_IN_ROOT"], "method", false, false, false, 959)) {
            // line 960
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Allow saving in the root folder?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 961
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Users can use the top level folder to store content. Disable to force the use of folders.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 962
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["FOLDERS_ALLOW_SAVE_IN_ROOT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["FOLDERS_ALLOW_SAVE_IN_ROOT"], "method", false, false, false, 962), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["FOLDERS_ALLOW_SAVE_IN_ROOT"], "method", false, false, false, 962)], 962, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 964
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_regional\">
                                <h3 class=\"section-heading\">";
        // line 966
        echo __("Regional");
        yield "</h3>

                                ";
        // line 968
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LANGUAGE"], "method", false, false, false, 968)) {
            // line 969
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Language");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 970
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The default language to use");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 971
            yield "
                                    ";
            // line 972
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LANGUAGE"], "method", false, false, false, 972)) {
                // line 973
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DEFAULT_LANGUAGE", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LANGUAGE", "en_GB"], "method", false, false, false, 973), ($context["languages"] ?? null), "id", "value", ($context["helpText"] ?? null)], 973, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 975
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_LANGUAGE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LANGUAGE", "en_GB"], "method", false, false, false, 975), ($context["helpText"] ?? null)], 975, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 977
            yield "                                ";
        }
        // line 978
        yield "
                                ";
        // line 979
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["defaultTimezone"], "method", false, false, false, 979)) {
            // line 980
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Timezone");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 981
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set the default timezone for the application");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 982
            yield "
                                    ";
            // line 983
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["defaultTimezone"], "method", false, false, false, 983)) {
                // line 984
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["defaultTimezone", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["defaultTimezone", "Europe/London"], "method", false, false, false, 984), ($context["timeZones"] ?? null), "id", "value", ($context["helpText"] ?? null)], 984, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 986
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["defaultTimezone", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["defaultTimezone", "Europe/London"], "method", false, false, false, 986), ($context["helpText"] ?? null)], 986, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 988
            yield "                                ";
        }
        // line 989
        yield "
                                ";
        // line 990
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DATE_FORMAT"], "method", false, false, false, 990)) {
            // line 991
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Date Format");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 992
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Date Format to use when displaying dates in the CMS.");
                // line 993
                yield "                                        <span id=\"date-format-table\"
                                              class=\"fa fa-info-circle\"
                                              data-toggle=\"popover\"
                                              data-trigger=\"hover\"
                                              data-placement=\"right\">
                                        </span>
                                    ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1000
            yield "
                                    ";
            // line 1001
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DATE_FORMAT"], "method", false, false, false, 1001)) {
                // line 1002
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["DATE_FORMAT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DATE_FORMAT", "Y-m-d"], "method", false, false, false, 1002), ($context["helpText"] ?? null), "required"], 1002, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1004
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DATE_FORMAT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DATE_FORMAT", "Y-m-d"], "method", false, false, false, 1004), ($context["helpText"] ?? null)], 1004, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1006
            yield "                                ";
        }
        // line 1007
        yield "
                                ";
        // line 1008
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DETECT_LANGUAGE"], "method", false, false, false, 1008)) {
            // line 1009
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Detect language?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1010
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Detect the browser language?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1011
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DETECT_LANGUAGE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DETECT_LANGUAGE"], "method", false, false, false, 1011), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DETECT_LANGUAGE"], "method", false, false, false, 1011)], 1011, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 1013
        yield "
                                ";
        // line 1014
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["CALENDAR_TYPE"], "method", false, false, false, 1014)) {
            // line 1015
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Calendar Type");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1016
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Which Calendar Type should the CMS use?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1017
            yield "
                                    ";
            // line 1018
            $context["gregorianOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Gregorian");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1019
            yield "                                    ";
            $context["jalaliOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Jalali");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1020
            yield "                                    ";
            $context["options"] = [["id" => "Gregorian", "value" =>             // line 1021
($context["gregorianOption"] ?? null)], ["id" => "Jalali", "value" =>             // line 1022
($context["jalaliOption"] ?? null)]];
            // line 1024
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["CALENDAR_TYPE"], "method", false, false, false, 1024)) {
                // line 1025
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["CALENDAR_TYPE", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["CALENDAR_TYPE", "Gregorian"], "method", false, false, false, 1025), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1025, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1027
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["CALENDAR_TYPE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["CALENDAR_TYPE", "Gregorian"], "method", false, false, false, 1027), ($context["helpText"] ?? null)], 1027, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1029
            yield "                                ";
        }
        // line 1030
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_troubleshooting\">
                                <h3 class=\"section-heading\">";
        // line 1032
        echo __("Troubleshooting");
        yield "</h3>

                                ";
        // line 1034
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["RESTING_LOG_LEVEL"], "method", false, false, false, 1034)) {
            // line 1035
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Resting Log Level");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1036
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set the level of the resting log level. The CMS will revert to this log level after an elevated period ends. In production systems \"error\" is recommended.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1037
            yield "
                                    ";
            // line 1038
            $context["emergencyOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Emergency");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1039
            yield "                                    ";
            $context["alertOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Alert");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1040
            yield "                                    ";
            $context["criticalOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Critical");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1041
            yield "                                    ";
            $context["errorOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Error");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1042
            yield "                                    ";
            $context["options"] = [["id" => "emergency", "value" =>             // line 1043
($context["emergencyOption"] ?? null)], ["id" => "alert", "value" =>             // line 1044
($context["alertOption"] ?? null)], ["id" => "critical", "value" =>             // line 1045
($context["criticalOption"] ?? null)], ["id" => "error", "value" =>             // line 1046
($context["errorOption"] ?? null)]];
            // line 1048
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["RESTING_LOG_LEVEL"], "method", false, false, false, 1048)) {
                // line 1049
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["RESTING_LOG_LEVEL", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["RESTING_LOG_LEVEL", "error"], "method", false, false, false, 1049), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1049, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1051
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["RESTING_LOG_LEVEL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["RESTING_LOG_LEVEL", "error"], "method", false, false, false, 1051), ($context["helpText"] ?? null)], 1051, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1053
            yield "                                ";
        }
        // line 1054
        yield "
                                ";
        // line 1055
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["audit"], "method", false, false, false, 1055)) {
            // line 1056
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Log Level");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1057
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set the level of logging the CMS should record. In production systems \"error\" is recommended.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1058
            yield "
                                    ";
            // line 1059
            $context["emergencyOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Emergency");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1060
            yield "                                    ";
            $context["alertOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Alert");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1061
            yield "                                    ";
            $context["criticalOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Critical");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1062
            yield "                                    ";
            $context["errorOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Error");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1063
            yield "                                    ";
            $context["warningOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Warning");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1064
            yield "                                    ";
            $context["noticeOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Notice");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1065
            yield "                                    ";
            $context["infoOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Information");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1066
            yield "                                    ";
            $context["debugOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Debug");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1067
            yield "                                    ";
            $context["options"] = [["id" => "emergency", "value" =>             // line 1068
($context["emergencyOption"] ?? null)], ["id" => "alert", "value" =>             // line 1069
($context["alertOption"] ?? null)], ["id" => "critical", "value" =>             // line 1070
($context["criticalOption"] ?? null)], ["id" => "error", "value" =>             // line 1071
($context["errorOption"] ?? null)], ["id" => "warning", "value" =>             // line 1072
($context["warningOption"] ?? null)], ["id" => "notice", "value" =>             // line 1073
($context["noticeOption"] ?? null)], ["id" => "info", "value" =>             // line 1074
($context["infoOption"] ?? null)], ["id" => "debug", "value" =>             // line 1075
($context["debugOption"] ?? null)]];
            // line 1077
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["audit"], "method", false, false, false, 1077)) {
                // line 1078
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["audit", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["audit", "error"], "method", false, false, false, 1078), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1078, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1080
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["audit", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["audit", "error"], "method", false, false, false, 1080), ($context["helpText"] ?? null)], 1080, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1082
            yield "                                ";
        }
        // line 1083
        yield "
                                ";
        // line 1084
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["ELEVATE_LOG_UNTIL"], "method", false, false, false, 1084)) {
            // line 1085
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Elevate Log Until");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1086
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Elevate the log level until this date.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1087
            yield "
                                    ";
            // line 1088
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["ELEVATE_LOG_UNTIL"], "method", false, false, false, 1088)) {
                // line 1089
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["ELEVATE_LOG_UNTIL", ($context["title"] ?? null), ($context["elevateLogUntil"] ?? null), ($context["helpText"] ?? null)], 1089, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1091
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["ELEVATE_LOG_UNTIL", ($context["title"] ?? null), ($context["elevateLogUntil"] ?? null), ($context["helpText"] ?? null)], 1091, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1093
            yield "                                ";
        }
        // line 1094
        yield "
                                ";
        // line 1095
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SERVER_MODE"], "method", false, false, false, 1095)) {
            // line 1096
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Server Mode");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1097
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This should only be set if you want to display the maximum allowed error messaging through the user interface. <br /> Useful for capturing critical php errors and environment issues.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1098
            yield "
                                    ";
            // line 1099
            $context["productionOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Production");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1100
            yield "                                    ";
            $context["testOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Test");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1101
            yield "                                    ";
            $context["options"] = [["id" => "Production", "value" =>             // line 1102
($context["productionOption"] ?? null)], ["id" => "Test", "value" =>             // line 1103
($context["testOption"] ?? null)]];
            // line 1105
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SERVER_MODE"], "method", false, false, false, 1105)) {
                // line 1106
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["SERVER_MODE", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SERVER_MODE", "Production"], "method", false, false, false, 1106), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1106, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1108
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["SERVER_MODE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SERVER_MODE", "Production"], "method", false, false, false, 1108), ($context["helpText"] ?? null)], 1108, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1110
            yield "                                ";
        }
        // line 1111
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_users\">
                                <h3 class=\"section-heading\">";
        // line 1113
        echo __("Users");
        yield "</h3>

                                ";
        // line 1115
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SYSTEM_USER"], "method", false, false, false, 1115)) {
            // line 1116
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("System User");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1117
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The system User for this CMS");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1118
            yield "
                                    ";
            // line 1119
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SYSTEM_USER"], "method", false, false, false, 1119)) {
                // line 1120
                yield "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-filter-options", "value" => "{\"userTypeId\":\"1\"}"]];
                // line 1129
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["SYSTEM_USER", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["systemUser"] ?? null), "userId", [], "any", false, false, false, 1129), [($context["systemUser"] ?? null)], "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 1129, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1131
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["SYSTEM_USER", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SYSTEM_USER"], "method", false, false, false, 1131), ($context["helpText"] ?? null)], 1131, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1133
            yield "                                ";
        }
        // line 1134
        yield "
                                ";
        // line 1135
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_USERGROUP"], "method", false, false, false, 1135)) {
            // line 1136
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default User Group");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1137
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The default User Group for new Users");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1138
            yield "
                                    ";
            // line 1139
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_USERGROUP"], "method", false, false, false, 1139)) {
                // line 1140
                yield "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search")], ["name" => "data-search-term", "value" => "group"], ["name" => "data-id-property", "value" => "groupId"], ["name" => "data-text-property", "value" => "group"]];
                // line 1147
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DEFAULT_USERGROUP", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["defaultUserGroup"] ?? null), "groupId", [], "any", false, false, false, 1147), [($context["defaultUserGroup"] ?? null)], "groupId", "group", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 1147, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1149
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_USERGROUP", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_USERGROUP"], "method", false, false, false, 1149), ($context["helpText"] ?? null)], 1149, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1151
            yield "                                ";
        }
        // line 1152
        yield "
                                ";
        // line 1153
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["defaultUsertype"], "method", false, false, false, 1153)) {
            // line 1154
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default User Type");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1155
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Sets the default user type selected when creating a user. We recommend that this is set to User");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1156
            yield "
                                    ";
            // line 1157
            $context["option1"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("User");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1158
            yield "                                    ";
            $context["option2"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Group Admin");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1159
            yield "                                    ";
            $context["option3"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Super Admin");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1160
            yield "                                    ";
            $context["options"] = [["id" => "User", "value" =>             // line 1161
($context["option1"] ?? null)], ["id" => "Group Admin", "value" =>             // line 1162
($context["option2"] ?? null)], ["id" => "Super Admin", "value" =>             // line 1163
($context["option3"] ?? null)]];
            // line 1165
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["defaultUsertype"], "method", false, false, false, 1165)) {
                // line 1166
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["defaultUsertype", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["defaultUsertype", "User"], "method", false, false, false, 1166), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1166, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1168
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["defaultUsertype", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["defaultUsertype", "User"], "method", false, false, false, 1168), ($context["helpText"] ?? null)], 1168, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1170
            yield "                                ";
        }
        // line 1171
        yield "
                                ";
        // line 1172
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["USER_PASSWORD_POLICY"], "method", false, false, false, 1172)) {
            // line 1173
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Password Policy Regular Expression");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1174
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Regular Expression for password complexity, leave blank for no policy.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1175
            yield "
                                    ";
            // line 1176
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["USER_PASSWORD_POLICY"], "method", false, false, false, 1176)) {
                // line 1177
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["USER_PASSWORD_POLICY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["USER_PASSWORD_POLICY"], "method", false, false, false, 1177), ($context["helpText"] ?? null)], 1177, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1179
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["USER_PASSWORD_POLICY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["USER_PASSWORD_POLICY"], "method", false, false, false, 1179), ($context["helpText"] ?? null)], 1179, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1181
            yield "                                ";
        }
        // line 1182
        yield "
                                ";
        // line 1183
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["USER_PASSWORD_ERROR"], "method", false, false, false, 1183)) {
            // line 1184
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Description of Password Policy");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1185
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A text description of this password policy will be shown to users if they enter a password that does not meet the policy requirements set above.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1186
            yield "
                                    ";
            // line 1187
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["USER_PASSWORD_ERROR"], "method", false, false, false, 1187)) {
                // line 1188
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["USER_PASSWORD_ERROR", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["USER_PASSWORD_ERROR"], "method", false, false, false, 1188), ($context["helpText"] ?? null)], 1188, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1190
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["USER_PASSWORD_ERROR", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["USER_PASSWORD_ERROR"], "method", false, false, false, 1190), ($context["helpText"] ?? null)], 1190, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1192
            yield "                                ";
        }
        // line 1193
        yield "
                                ";
        // line 1194
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PASSWORD_REMINDER_ENABLED"], "method", false, false, false, 1194)) {
            // line 1195
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Password Reminder");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1196
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable password reminder on CMS login page? Valid sending email address is required");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1197
            yield "
                                    ";
            // line 1198
            $context["option1"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1199
            yield "                                    ";
            $context["option2"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On except Admin");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1200
            yield "                                    ";
            $context["option3"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1201
            yield "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 1202
($context["option1"] ?? null)], ["id" => "On except Admin", "value" =>             // line 1203
($context["option2"] ?? null)], ["id" => "On", "value" =>             // line 1204
($context["option3"] ?? null)]];
            // line 1206
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PASSWORD_REMINDER_ENABLED"], "method", false, false, false, 1206)) {
                // line 1207
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["PASSWORD_REMINDER_ENABLED", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PASSWORD_REMINDER_ENABLED", "Off"], "method", false, false, false, 1207), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1207, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1209
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PASSWORD_REMINDER_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PASSWORD_REMINDER_ENABLED", "Off"], "method", false, false, false, 1209), ($context["helpText"] ?? null)], 1209, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1211
            yield "                                ";
        }
        // line 1212
        yield "
                                ";
        // line 1213
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["TWOFACTOR_ISSUER"], "method", false, false, false, 1213)) {
            // line 1214
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Two Factor Issuer");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1215
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Name that should appear as Issuer when two factor authorisation is enabled");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1216
            yield "
                                    ";
            // line 1217
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["TWOFACTOR_ISSUER"], "method", false, false, false, 1217)) {
                // line 1218
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["TWOFACTOR_ISSUER", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["TWOFACTOR_ISSUER"], "method", false, false, false, 1218), ($context["helpText"] ?? null)], 1218, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1220
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["TWOFACTOR_ISSUER", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["TWOFACTOR_ISSUER"], "method", false, false, false, 1220), ($context["helpText"] ?? null)], 1220, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1222
            yield "                                ";
        }
        // line 1223
        yield "                            </div>
                        </div>
                        <button class=\"btn btn-save btn-block btn-success\" href=\"#\"><span>";
        // line 1225
        echo __("Save");
        yield "</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 1233
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1234
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        \$(function () {
            var phpDateFormatTable = templates['php-date-format-table'];
            \$('#date-format-table').popover({
                content: phpDateFormatTable,
                html: true,
                placement: \"right\",
                sanitize: false,
                trigger: \"manual\",
                container: \"form\"
            }).on(\"mouseenter\", function() {
                \$(this).popover(\"show\");
                \$(\".popover\").on(\"mouseleave\", function() {
                    \$(this).popover('hide');
                });
            }).on(\"mouseleave\", function() {
                setTimeout(function() {
                    if (!\$(\".popover:hover\").length) {
                        \$(this).popover(\"hide\");
                    }
                }, 300);
            });
        })
    </script>

    <style>
        .popover{
            max-width: 25%;
        }
    </style>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "settings-page.twig";
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
        return array (  3861 => 1234,  3857 => 1233,  3845 => 1225,  3841 => 1223,  3838 => 1222,  3832 => 1220,  3826 => 1218,  3824 => 1217,  3821 => 1216,  3815 => 1215,  3809 => 1214,  3807 => 1213,  3804 => 1212,  3801 => 1211,  3795 => 1209,  3789 => 1207,  3786 => 1206,  3784 => 1204,  3783 => 1203,  3782 => 1202,  3780 => 1201,  3774 => 1200,  3768 => 1199,  3763 => 1198,  3760 => 1197,  3754 => 1196,  3748 => 1195,  3746 => 1194,  3743 => 1193,  3740 => 1192,  3734 => 1190,  3728 => 1188,  3726 => 1187,  3723 => 1186,  3717 => 1185,  3711 => 1184,  3709 => 1183,  3706 => 1182,  3703 => 1181,  3697 => 1179,  3691 => 1177,  3689 => 1176,  3686 => 1175,  3680 => 1174,  3674 => 1173,  3672 => 1172,  3669 => 1171,  3666 => 1170,  3660 => 1168,  3654 => 1166,  3651 => 1165,  3649 => 1163,  3648 => 1162,  3647 => 1161,  3645 => 1160,  3639 => 1159,  3633 => 1158,  3628 => 1157,  3625 => 1156,  3619 => 1155,  3613 => 1154,  3611 => 1153,  3608 => 1152,  3605 => 1151,  3599 => 1149,  3593 => 1147,  3590 => 1140,  3588 => 1139,  3585 => 1138,  3579 => 1137,  3573 => 1136,  3571 => 1135,  3568 => 1134,  3565 => 1133,  3559 => 1131,  3553 => 1129,  3550 => 1120,  3548 => 1119,  3545 => 1118,  3539 => 1117,  3533 => 1116,  3531 => 1115,  3526 => 1113,  3522 => 1111,  3519 => 1110,  3513 => 1108,  3507 => 1106,  3504 => 1105,  3502 => 1103,  3501 => 1102,  3499 => 1101,  3493 => 1100,  3488 => 1099,  3485 => 1098,  3479 => 1097,  3473 => 1096,  3471 => 1095,  3468 => 1094,  3465 => 1093,  3459 => 1091,  3453 => 1089,  3451 => 1088,  3448 => 1087,  3442 => 1086,  3436 => 1085,  3434 => 1084,  3431 => 1083,  3428 => 1082,  3422 => 1080,  3416 => 1078,  3413 => 1077,  3411 => 1075,  3410 => 1074,  3409 => 1073,  3408 => 1072,  3407 => 1071,  3406 => 1070,  3405 => 1069,  3404 => 1068,  3402 => 1067,  3396 => 1066,  3390 => 1065,  3384 => 1064,  3378 => 1063,  3372 => 1062,  3366 => 1061,  3360 => 1060,  3355 => 1059,  3352 => 1058,  3346 => 1057,  3340 => 1056,  3338 => 1055,  3335 => 1054,  3332 => 1053,  3326 => 1051,  3320 => 1049,  3317 => 1048,  3315 => 1046,  3314 => 1045,  3313 => 1044,  3312 => 1043,  3310 => 1042,  3304 => 1041,  3298 => 1040,  3292 => 1039,  3287 => 1038,  3284 => 1037,  3278 => 1036,  3272 => 1035,  3270 => 1034,  3265 => 1032,  3261 => 1030,  3258 => 1029,  3252 => 1027,  3246 => 1025,  3243 => 1024,  3241 => 1022,  3240 => 1021,  3238 => 1020,  3232 => 1019,  3227 => 1018,  3224 => 1017,  3218 => 1016,  3212 => 1015,  3210 => 1014,  3207 => 1013,  3201 => 1011,  3195 => 1010,  3189 => 1009,  3187 => 1008,  3184 => 1007,  3181 => 1006,  3175 => 1004,  3169 => 1002,  3167 => 1001,  3164 => 1000,  3154 => 993,  3150 => 992,  3144 => 991,  3142 => 990,  3139 => 989,  3136 => 988,  3130 => 986,  3124 => 984,  3122 => 983,  3119 => 982,  3113 => 981,  3107 => 980,  3105 => 979,  3102 => 978,  3099 => 977,  3093 => 975,  3087 => 973,  3085 => 972,  3082 => 971,  3076 => 970,  3070 => 969,  3068 => 968,  3063 => 966,  3059 => 964,  3053 => 962,  3047 => 961,  3041 => 960,  3039 => 959,  3036 => 958,  3030 => 956,  3024 => 955,  3018 => 954,  3016 => 953,  3013 => 952,  3007 => 950,  3001 => 949,  2995 => 948,  2993 => 947,  2990 => 946,  2984 => 944,  2978 => 943,  2972 => 942,  2970 => 941,  2967 => 940,  2961 => 938,  2955 => 937,  2949 => 936,  2947 => 935,  2944 => 934,  2941 => 933,  2935 => 931,  2929 => 929,  2926 => 928,  2924 => 926,  2923 => 925,  2921 => 924,  2915 => 923,  2910 => 922,  2907 => 921,  2901 => 920,  2899 => 919,  2894 => 917,  2890 => 915,  2887 => 914,  2881 => 912,  2875 => 910,  2873 => 909,  2870 => 908,  2864 => 907,  2858 => 906,  2856 => 905,  2853 => 904,  2850 => 903,  2844 => 901,  2838 => 899,  2836 => 898,  2833 => 897,  2827 => 896,  2821 => 895,  2819 => 894,  2816 => 893,  2811 => 891,  2808 => 890,  2802 => 889,  2796 => 888,  2794 => 887,  2791 => 886,  2786 => 884,  2783 => 883,  2777 => 882,  2771 => 881,  2769 => 880,  2766 => 879,  2763 => 878,  2757 => 876,  2751 => 874,  2749 => 873,  2746 => 872,  2740 => 871,  2734 => 870,  2732 => 869,  2729 => 868,  2726 => 867,  2720 => 865,  2714 => 863,  2712 => 862,  2709 => 861,  2703 => 860,  2697 => 859,  2695 => 858,  2692 => 857,  2689 => 856,  2683 => 854,  2677 => 852,  2675 => 851,  2672 => 850,  2666 => 849,  2660 => 848,  2658 => 847,  2655 => 846,  2652 => 845,  2646 => 843,  2640 => 841,  2638 => 840,  2635 => 839,  2629 => 838,  2623 => 837,  2621 => 836,  2618 => 835,  2615 => 834,  2609 => 832,  2603 => 830,  2601 => 829,  2598 => 828,  2592 => 827,  2586 => 826,  2584 => 825,  2581 => 824,  2578 => 823,  2572 => 821,  2566 => 819,  2564 => 818,  2561 => 817,  2555 => 816,  2549 => 815,  2547 => 814,  2544 => 813,  2541 => 812,  2535 => 810,  2529 => 808,  2527 => 807,  2524 => 806,  2518 => 805,  2512 => 804,  2510 => 803,  2507 => 802,  2504 => 801,  2498 => 799,  2492 => 797,  2489 => 796,  2487 => 792,  2485 => 791,  2480 => 790,  2477 => 789,  2471 => 788,  2465 => 787,  2463 => 786,  2460 => 785,  2457 => 784,  2451 => 782,  2445 => 780,  2443 => 779,  2440 => 778,  2434 => 777,  2428 => 776,  2426 => 775,  2423 => 774,  2420 => 773,  2414 => 771,  2408 => 769,  2406 => 768,  2403 => 767,  2397 => 766,  2391 => 765,  2389 => 764,  2386 => 763,  2383 => 762,  2377 => 760,  2371 => 758,  2369 => 757,  2366 => 756,  2360 => 755,  2354 => 754,  2352 => 753,  2347 => 751,  2342 => 748,  2337 => 746,  2334 => 745,  2328 => 744,  2322 => 743,  2320 => 742,  2317 => 741,  2314 => 740,  2308 => 738,  2302 => 736,  2300 => 735,  2297 => 734,  2291 => 733,  2285 => 732,  2283 => 731,  2280 => 730,  2277 => 729,  2271 => 727,  2265 => 725,  2263 => 724,  2260 => 723,  2254 => 722,  2248 => 721,  2246 => 720,  2243 => 719,  2240 => 718,  2234 => 716,  2228 => 714,  2226 => 713,  2223 => 712,  2217 => 711,  2211 => 710,  2209 => 709,  2206 => 708,  2201 => 706,  2198 => 705,  2192 => 704,  2186 => 703,  2184 => 702,  2181 => 701,  2178 => 700,  2172 => 698,  2166 => 696,  2163 => 695,  2161 => 693,  2160 => 692,  2159 => 691,  2157 => 690,  2151 => 689,  2145 => 688,  2140 => 687,  2137 => 686,  2131 => 685,  2125 => 684,  2123 => 683,  2118 => 681,  2114 => 679,  2109 => 677,  2106 => 676,  2100 => 675,  2094 => 674,  2092 => 673,  2089 => 672,  2086 => 671,  2080 => 669,  2074 => 667,  2072 => 666,  2069 => 665,  2063 => 664,  2057 => 663,  2055 => 662,  2052 => 661,  2047 => 659,  2044 => 658,  2038 => 657,  2032 => 656,  2030 => 655,  2027 => 654,  2022 => 652,  2019 => 651,  2013 => 650,  2007 => 649,  2005 => 648,  2002 => 647,  1997 => 645,  1994 => 644,  1988 => 643,  1982 => 642,  1980 => 641,  1977 => 640,  1974 => 639,  1968 => 637,  1962 => 635,  1960 => 634,  1957 => 633,  1951 => 632,  1945 => 631,  1943 => 630,  1940 => 629,  1935 => 627,  1932 => 626,  1926 => 625,  1924 => 624,  1921 => 623,  1916 => 621,  1913 => 620,  1907 => 619,  1905 => 618,  1902 => 617,  1899 => 616,  1893 => 614,  1887 => 612,  1885 => 611,  1882 => 610,  1876 => 609,  1870 => 608,  1868 => 607,  1865 => 606,  1860 => 604,  1857 => 603,  1851 => 602,  1845 => 601,  1843 => 600,  1840 => 599,  1837 => 598,  1831 => 596,  1825 => 594,  1823 => 593,  1820 => 592,  1814 => 591,  1808 => 590,  1806 => 589,  1803 => 588,  1800 => 587,  1794 => 585,  1788 => 583,  1786 => 582,  1783 => 581,  1777 => 580,  1771 => 579,  1769 => 578,  1766 => 577,  1763 => 576,  1757 => 574,  1751 => 572,  1749 => 571,  1746 => 570,  1740 => 569,  1734 => 568,  1732 => 567,  1729 => 566,  1724 => 564,  1721 => 563,  1715 => 562,  1709 => 561,  1707 => 560,  1704 => 559,  1701 => 558,  1695 => 556,  1689 => 554,  1687 => 553,  1684 => 552,  1678 => 551,  1672 => 550,  1670 => 549,  1667 => 548,  1664 => 547,  1658 => 545,  1652 => 543,  1650 => 542,  1647 => 541,  1641 => 540,  1635 => 539,  1633 => 538,  1628 => 536,  1624 => 534,  1621 => 533,  1615 => 531,  1609 => 529,  1607 => 527,  1605 => 519,  1603 => 518,  1600 => 517,  1594 => 516,  1588 => 515,  1586 => 514,  1583 => 513,  1577 => 511,  1571 => 510,  1565 => 509,  1563 => 508,  1560 => 507,  1557 => 506,  1551 => 504,  1545 => 502,  1543 => 501,  1540 => 500,  1534 => 499,  1528 => 498,  1526 => 497,  1523 => 496,  1520 => 495,  1514 => 493,  1508 => 491,  1506 => 490,  1503 => 489,  1497 => 488,  1491 => 487,  1489 => 486,  1486 => 485,  1480 => 483,  1474 => 482,  1472 => 481,  1469 => 480,  1463 => 478,  1457 => 477,  1455 => 476,  1452 => 475,  1446 => 473,  1440 => 472,  1438 => 471,  1435 => 470,  1432 => 469,  1426 => 467,  1420 => 465,  1417 => 464,  1415 => 462,  1414 => 461,  1413 => 460,  1411 => 459,  1405 => 458,  1399 => 457,  1394 => 456,  1391 => 455,  1385 => 454,  1379 => 453,  1377 => 452,  1374 => 451,  1371 => 450,  1365 => 448,  1359 => 446,  1356 => 445,  1354 => 443,  1353 => 442,  1352 => 441,  1350 => 440,  1344 => 439,  1338 => 438,  1333 => 437,  1330 => 436,  1324 => 435,  1318 => 434,  1316 => 433,  1313 => 432,  1310 => 431,  1304 => 429,  1298 => 427,  1295 => 426,  1293 => 424,  1292 => 423,  1291 => 422,  1289 => 421,  1283 => 420,  1277 => 419,  1272 => 418,  1269 => 417,  1263 => 416,  1257 => 415,  1255 => 414,  1252 => 413,  1246 => 411,  1240 => 410,  1234 => 409,  1232 => 408,  1229 => 407,  1223 => 405,  1217 => 404,  1211 => 403,  1209 => 402,  1206 => 401,  1203 => 400,  1197 => 398,  1191 => 396,  1188 => 395,  1186 => 393,  1185 => 392,  1184 => 391,  1182 => 390,  1176 => 389,  1170 => 388,  1165 => 387,  1162 => 386,  1156 => 385,  1150 => 384,  1148 => 383,  1145 => 382,  1142 => 381,  1136 => 379,  1130 => 377,  1128 => 376,  1125 => 375,  1119 => 374,  1113 => 373,  1111 => 372,  1108 => 371,  1105 => 370,  1099 => 368,  1093 => 366,  1091 => 365,  1088 => 364,  1082 => 363,  1076 => 362,  1074 => 361,  1071 => 360,  1068 => 359,  1062 => 357,  1056 => 355,  1054 => 354,  1051 => 353,  1045 => 352,  1039 => 351,  1037 => 350,  1034 => 349,  1031 => 348,  1025 => 346,  1019 => 344,  1017 => 343,  1014 => 342,  1008 => 341,  1002 => 340,  1000 => 339,  997 => 338,  994 => 337,  988 => 335,  982 => 333,  980 => 332,  977 => 331,  971 => 330,  965 => 329,  963 => 328,  960 => 327,  957 => 326,  951 => 324,  945 => 322,  943 => 321,  940 => 320,  934 => 319,  928 => 318,  926 => 317,  923 => 316,  920 => 315,  914 => 313,  908 => 311,  906 => 310,  903 => 309,  897 => 308,  891 => 307,  889 => 306,  886 => 305,  883 => 304,  877 => 302,  871 => 300,  869 => 299,  866 => 298,  860 => 297,  854 => 296,  852 => 295,  849 => 294,  846 => 293,  840 => 291,  834 => 289,  831 => 280,  829 => 279,  826 => 278,  820 => 277,  814 => 276,  812 => 275,  807 => 273,  803 => 271,  800 => 270,  794 => 268,  788 => 266,  786 => 265,  783 => 264,  777 => 263,  771 => 262,  769 => 261,  766 => 260,  763 => 259,  757 => 257,  751 => 255,  749 => 254,  746 => 253,  740 => 252,  734 => 251,  732 => 250,  729 => 249,  726 => 248,  720 => 246,  714 => 244,  712 => 243,  709 => 242,  703 => 241,  697 => 240,  695 => 239,  692 => 238,  689 => 237,  683 => 235,  677 => 233,  675 => 232,  672 => 231,  666 => 230,  660 => 229,  658 => 228,  655 => 227,  652 => 226,  646 => 224,  640 => 222,  638 => 221,  635 => 220,  629 => 219,  623 => 218,  621 => 217,  618 => 216,  615 => 215,  609 => 213,  603 => 211,  601 => 210,  598 => 209,  592 => 208,  586 => 207,  584 => 206,  581 => 205,  576 => 203,  573 => 202,  567 => 201,  565 => 200,  562 => 199,  559 => 198,  553 => 196,  547 => 194,  545 => 193,  542 => 192,  536 => 191,  530 => 190,  528 => 189,  525 => 188,  522 => 187,  516 => 185,  510 => 183,  507 => 175,  505 => 174,  502 => 173,  496 => 172,  490 => 171,  488 => 170,  485 => 169,  482 => 168,  476 => 166,  470 => 164,  467 => 156,  465 => 155,  462 => 154,  456 => 153,  450 => 152,  448 => 151,  445 => 150,  440 => 148,  437 => 147,  431 => 146,  425 => 145,  423 => 144,  420 => 143,  415 => 141,  412 => 140,  406 => 139,  400 => 138,  398 => 137,  395 => 136,  390 => 134,  387 => 133,  381 => 132,  375 => 131,  373 => 130,  370 => 129,  365 => 127,  362 => 126,  356 => 125,  350 => 124,  348 => 123,  343 => 121,  339 => 119,  336 => 118,  330 => 116,  324 => 114,  321 => 113,  319 => 111,  318 => 110,  316 => 109,  310 => 108,  305 => 107,  302 => 106,  296 => 105,  290 => 104,  288 => 103,  285 => 102,  282 => 101,  276 => 99,  273 => 98,  267 => 96,  261 => 94,  259 => 93,  256 => 92,  254 => 91,  251 => 90,  245 => 89,  239 => 88,  237 => 87,  234 => 86,  227 => 82,  222 => 79,  216 => 77,  210 => 75,  208 => 74,  205 => 73,  199 => 72,  193 => 71,  191 => 70,  188 => 69,  185 => 68,  179 => 66,  173 => 64,  171 => 63,  168 => 62,  162 => 61,  156 => 60,  154 => 59,  149 => 57,  143 => 54,  138 => 52,  134 => 51,  130 => 50,  126 => 49,  122 => 48,  118 => 47,  114 => 46,  110 => 45,  106 => 44,  102 => 43,  94 => 38,  91 => 37,  87 => 36,  81 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "settings-page.twig", "/var/www/cms/views/settings-page.twig");
    }
}
