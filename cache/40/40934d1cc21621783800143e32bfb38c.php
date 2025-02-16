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

/* display-page.twig */
class __TwigTemplate_3664761cf671d846d59a706937db586e extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "display-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "display-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Displays"), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.add"], "method", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a Display via user_code displayed on the Player screen");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.addViaCode.form"), "html", null, true);
            yield "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Display (Code)");
            yield "</button>
        ";
        }
        // line 33
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 37
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 39
        echo __("Displays");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"displayView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#filter-general\" role=\"tab\" data-toggle=\"tab\">";
        // line 45
        echo __("General");
        yield "</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#filter-advanced\" role=\"tab\" data-toggle=\"tab\">";
        // line 46
        echo __("Advanced");
        yield "</a></li>
                        </ul>
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"filter-general\">
                                    ";
        // line 51
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["displayId", ($context["title"] ?? null)], 52, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 54
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["display", ($context["title"] ?? null)], 55, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 57
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Status");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                                    ";
        $context["check"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Up to date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "                                    ";
        $context["cross"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Downloading");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                                    ";
        $context["cloud"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Out of date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "1", "option" =>         // line 63
($context["check"] ?? null)], ["optionid" => "2", "option" =>         // line 64
($context["cross"] ?? null)], ["optionid" => "3", "option" =>         // line 65
($context["cloud"] ?? null)]];
        // line 67
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["mediaInventoryStatus", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 67, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 69
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Logged In?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        yield "                                    ";
        $context["yesOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        yield "                                    ";
        $context["noOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "1", "option" =>         // line 74
($context["yesOption"] ?? null)], ["optionid" => "0", "option" =>         // line 75
($context["noOption"] ?? null)]];
        // line 77
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["loggedIn", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 77, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 79
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Authorised?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        yield "                                    ";
        $context["yesOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        yield "                                    ";
        $context["noOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "1", "option" =>         // line 84
($context["yesOption"] ?? null)], ["optionid" => "0", "option" =>         // line 85
($context["noOption"] ?? null)]];
        // line 87
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["authorised", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 87, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 89
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("XMR Registered?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        yield "                                    ";
        $context["yesOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        yield "                                    ";
        $context["noOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => 1, "option" =>         // line 94
($context["yesOption"] ?? null)], ["optionid" => 0, "option" =>         // line 95
($context["noOption"] ?? null)]];
        // line 97
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["xmrRegistered", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 97, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 99
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 99)) {
            // line 100
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 101
            yield "                                        ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 102
            yield "                                        ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 103
            yield "                                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 104
            yield "                                        ";
            yield CoreExtension::callMacro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 104, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 106
        yield "
                                    ";
        // line 107
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displaygroup.view"], "method", false, false, false, 107)) {
            // line 108
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Display Group");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 109
            yield "                                        ";
            $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-filter-options", "value" => "{\"isDisplaySpecific\":0}"], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"], ["name" => "data-initial-key", "value" => "displayGroupId"]];
            // line 121
            yield "                                        ";
            yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayGroupId", "single", ($context["title"] ?? null), "", null, "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 121, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 123
        yield "
                                    ";
        // line 124
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displayprofile.view"], "method", false, false, false, 124)) {
            // line 125
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Display Profile");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            yield "                                        ";
            yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayProfileId", "single", ($context["title"] ?? null), "", Twig\Extension\CoreExtension::merge([["displayProfileId" => null, "name" => ""]], ($context["displayProfiles"] ?? null)), "displayProfileId", "name"], 126, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 128
        yield "
                                    ";
        // line 129
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["folderId"], 129, $context, $this->getSourceContext());
        yield "
                                </div>

                                <div class=\"tab-pane\" id=\"filter-advanced\">
                                    ";
        // line 133
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Last Accessed");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_date", ["lastAccessed", ($context["title"] ?? null)], 134, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 136
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Player Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        yield "                                    ";
        $context["android"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Android");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        yield "                                    ";
        $context["chromeos"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ChromeOS");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        yield "                                    ";
        $context["windows"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Windows");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        yield "                                    ";
        $context["webos"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("webOS");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        yield "                                    ";
        $context["sssp"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tizen");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        yield "                                    ";
        $context["linux"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Linux");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "android", "option" =>         // line 145
($context["android"] ?? null)], ["optionid" => "chromeos", "option" =>         // line 146
($context["chromeos"] ?? null)], ["optionid" => "windows", "option" =>         // line 147
($context["windows"] ?? null)], ["optionid" => "lg", "option" =>         // line 148
($context["webos"] ?? null)], ["optionid" => "sssp", "option" =>         // line 149
($context["sssp"] ?? null)], ["optionid" => "linux", "option" =>         // line 150
($context["linux"] ?? null)]];
        // line 152
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["clientType", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 152, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 154
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Player Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 155
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["clientCode", ($context["title"] ?? null)], 155, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 157
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Custom ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["customId", ($context["title"] ?? null)], 158, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 160
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Mac Address");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["macAddress", ($context["title"] ?? null)], 161, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 163
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("IP Address");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 164
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["clientAddress", ($context["title"] ?? null)], 164, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 166
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Orientation");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 167
        yield "                                    ";
        $context["landscape"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Landscape");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 168
        yield "                                    ";
        $context["portrait"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Portrait");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 169
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "landscape", "option" =>         // line 171
($context["landscape"] ?? null)], ["optionid" => "portrait", "option" =>         // line 172
($context["portrait"] ?? null)]];
        // line 174
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 174, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 176
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Commercial Licence");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 177
        yield "                                    ";
        $context["licensed"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Licensed fully");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 178
        yield "                                    ";
        $context["trial"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Trial");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 179
        yield "                                    ";
        $context["notLinceced"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Not licenced");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 180
        yield "                                    ";
        $context["notApplicable"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Not applicable");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 181
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "1", "option" =>         // line 183
($context["licensed"] ?? null)], ["optionid" => "2", "option" =>         // line 184
($context["trial"] ?? null)], ["optionid" => "0", "option" =>         // line 185
($context["notLinceced"] ?? null)], ["optionid" => "3", "option" =>         // line 186
($context["notApplicable"] ?? null)]];
        // line 188
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["commercialLicence", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 188, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 190
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Player supported?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 191
        yield "                                    ";
        $context["yesOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 192
        yield "                                    ";
        $context["noOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 193
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => 1, "option" =>         // line 195
($context["yesOption"] ?? null)], ["optionid" => 0, "option" =>         // line 196
($context["noOption"] ?? null)]];
        // line 198
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["isPlayerSupported", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 198, $context, $this->getSourceContext());
        yield "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 206
        echo __("Search");
        yield "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 209
        echo __("Search in all folders");
        yield "\">";
        echo __("All Folders");
        yield "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 212
        echo __("No Folders matching the search term");
        yield "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Open / Close Folder Search options"), "html", null, true);
        yield "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div class=\"map-controller d-none pl-1\">
                        <button type=\"button\" id=\"map_button\" class=\"btn btn-primary\" title=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Map"), "html", null, true);
        yield "\"><i class=\"fa fa-map\"></i></button>
                    </div>
                    <div class=\"list-controller d-none pl-1\">
                        <button type=\"button\" id=\"list_button\" class=\"btn btn-primary\" title=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("List"), "html", null, true);
        yield "\"><i class=\"fa fa-list\"></i></button>
                    </div>

                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"displays\" class=\"table table-striped\" data-content-type=\"display\" data-content-id-name=\"displayId\" data-state-preference-name=\"displayGrid\" style=\"width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 232
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 233
        echo __("Display");
        yield "</th>
                                        <th>";
        // line 234
        echo __("Display Type");
        yield "</th>
                                        <th>";
        // line 235
        echo __("Address");
        yield "</th>
                                        <th>";
        // line 236
        echo __("Status");
        yield "</th>
                                        <th>";
        // line 237
        echo __("Authorised?");
        yield "</th>
                                        <th>";
        // line 238
        echo __("Current Layout");
        yield "</th>
                                        <th>";
        // line 239
        echo __("Storage Available");
        yield "</th>
                                        <th>";
        // line 240
        echo __("Storage Total");
        yield "</th>
                                        <th>";
        // line 241
        echo __("Storage Free %");
        yield "</th>
                                        <th>";
        // line 242
        echo __("Description");
        yield "</th>
                                        <th>";
        // line 243
        echo __("Orientation");
        yield "</th>
                                        <th>";
        // line 244
        echo __("Resolution");
        yield "</th>
                                        ";
        // line 245
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 245)) {
            yield "<th>";
            echo __("Tags");
            yield "</th>";
        }
        // line 246
        yield "                                        <th>";
        echo __("Default Layout");
        yield "</th>
                                        <th>";
        // line 247
        echo __("Interleave Default");
        yield "</th>
                                        <th>";
        // line 248
        echo __("Email Alert");
        yield "</th>
                                        <th>";
        // line 249
        echo __("Logged In");
        yield "</th>
                                        <th>";
        // line 250
        echo __("Last Accessed");
        yield "</th>
                                        <th>";
        // line 251
        echo __("Display Profile");
        yield "</th>
                                        <th>";
        // line 252
        echo __("Version");
        yield "</th>
                                        <th>";
        // line 253
        echo __("Supported?");
        yield "</th>
                                        <th>";
        // line 254
        echo __("Device Name");
        yield "</th>
                                        <th>";
        // line 255
        echo __("IP Address");
        yield "</th>
                                        <th>";
        // line 256
        echo __("Mac Address");
        yield "</th>
                                        <th>";
        // line 257
        echo __("Timezone");
        yield "</th>
                                        <th>";
        // line 258
        echo __("Languages");
        yield "</th>
                                        <th>";
        // line 259
        echo __("Latitude");
        yield "</th>
                                        <th>";
        // line 260
        echo __("Longitude");
        yield "</th>
                                        <th>";
        // line 261
        echo __("Screen shot?");
        yield "</th>
                                        <th>";
        // line 262
        echo __("Thumbnail");
        yield "</th>
                                        <th>";
        // line 263
        echo __("CMS Transfer?");
        yield "</th>
                                        <th>";
        // line 264
        echo __("Bandwidth Limit");
        yield "</th>
                                        <th>";
        // line 265
        echo __("Last Command");
        yield "</th>
                                        <th>";
        // line 266
        echo __("XMR Registered");
        yield "</th>
                                        <th>";
        // line 267
        echo __("Commercial Licence");
        yield "</th>
                                        <th>";
        // line 268
        echo __("Remote");
        yield "</th>
                                        <th>";
        // line 269
        echo __("Sharing");
        yield "</th>
                                        <th>";
        // line 270
        echo __("Screen Size");
        yield "</th>
                                        <th>";
        // line 271
        echo __("Is Mobile?");
        yield "</th>
                                        <th>";
        // line 272
        echo __("Outdoor?");
        yield "</th>
                                        <th>";
        // line 273
        echo __("Reference 1");
        yield "</th>
                                        <th>";
        // line 274
        echo __("Reference 2");
        yield "</th>
                                        <th>";
        // line 275
        echo __("Reference 3");
        yield "</th>
                                        <th>";
        // line 276
        echo __("Reference 4");
        yield "</th>
                                        <th>";
        // line 277
        echo __("Reference 5");
        yield "</th>
                                        <th>";
        // line 278
        echo __("Custom ID");
        yield "</th>
                                        <th>";
        // line 279
        echo __("Cost Per Play");
        yield "</th>
                                        <th>";
        // line 280
        echo __("Impressions Per Play");
        yield "</th>
                                        <th>";
        // line 281
        echo __("Created Date");
        yield "</th>
                                        <th>";
        // line 282
        echo __("Modified Date");
        yield "</th>
                                        <th>";
        // line 283
        echo __("Faults?");
        yield "</th>
                                        <th>";
        // line 284
        echo __("OS Version");
        yield "</th>
                                        <th>";
        // line 285
        echo __("OS SDK");
        yield "</th>
                                        <th>";
        // line 286
        echo __("Manufacturer");
        yield "</th>
                                        <th>";
        // line 287
        echo __("Brand");
        yield "</th>
                                        <th>";
        // line 288
        echo __("Model");
        yield "</th>
                                        <th class=\"rowMenu\"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                            <!-- Map -->
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"map-legend\" style=\"display:none; position: absolute; z-index: 500; right: 20px; top: 10px;\">
                                        <div class=\"display-map-legend\" style=\"font-size: 12px;\">
                                            <div>Logged in</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 303), "html", null, true);
        yield "dist/assets/map-marker-green-check.png'/> - Up to date</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 304), "html", null, true);
        yield "dist/assets/map-marker-yellow-check.png'/> - Out of date</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 305), "html", null, true);
        yield "dist/assets/map-marker-red-check.png'/> - Downloading/Unknown</div>
                                            </br>
                                            <div>Logged out</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 308), "html", null, true);
        yield "dist/assets/map-marker-green-cross.png'/> - Up to date</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 309), "html", null, true);
        yield "dist/assets/map-marker-yellow-cross.png'/> - Out of date</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 310), "html", null, true);
        yield "dist/assets/map-marker-red-cross.png'/> - Downloading/Unknown</div>
                                        </div>
                                    </div>
                                    <div id=\"display-map\" data-displays-url=\"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.map"), "html", null, true);
        yield "\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 325
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 326
        yield "    ";
        // line 327
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\" defer>
        ";
        // line 329
        yield "        var publicPath = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 329), "html", null, true);
        yield "\";
        var displaySearchURL = \"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        yield "\";
        var layoutSearchURL = \"";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        yield "\";
        var mapConfig = ";
        // line 332
        yield json_encode(($context["mapConfig"] ?? null));
        yield ";
        var playerVersionSupport = \"";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["playerVersion"] ?? null), "html", null, true);
        yield "\";
        var folderViewEnabled = \"";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 334), "html", null, true);
        yield "\";
        var taggingEnabled = \"";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 335), "html", null, true);
        yield "\";
        var showThumbnailColumn = \"";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["showThumbnailColumn", 1], "method", false, false, false, 336), "html", null, true);
        yield "\";
        var SHOW_DISPLAY_AS_VNCLINK = \"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", [], "any", false, false, false, 337), "html", null, true);
        yield "\";
        var SHOW_DISPLAY_AS_VNC_TGT = \"";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNC_TGT", [], "any", false, false, false, 338), "html", null, true);
        yield "\";

        ";
        // line 341
        yield "        var displayPageTrans = {
            back: \"";
        // line 342
        echo __("Back");
        yield "\",
            yes: \"";
        // line 343
        echo __("Yes");
        yield "\",
            no: \"";
        // line 344
        echo __("No");
        yield "\",
            daysOfTheWeek: {
                monday: \"";
        // line 346
        echo __("Monday");
        yield "\",
                tuesday: \"";
        // line 347
        echo __("Tuesday");
        yield "\",
                wednesday: \"";
        // line 348
        echo __("Wednesday");
        yield "\",
                thursday: \"";
        // line 349
        echo __("Thursday");
        yield "\",
                friday: \"";
        // line 350
        echo __("Friday");
        yield "\",
                saturday: \"";
        // line 351
        echo __("Saturday");
        yield "\",
                sunday: \"";
        // line 352
        echo __("Sunday");
        yield "\",
            },
            playerStatusWindow: \"";
        // line 354
        echo __("Player Status Window");
        yield "\",
            VNCtoThisDisplay: \"";
        // line 355
        echo __("VNC to this Display");
        yield "\",
            TeamViewertoThisDisplay: \"";
        // line 356
        echo __("TeamViewer to this Display");
        yield "\",
            WebkeytoThisDisplay: \"";
        // line 357
        echo __("Webkey to this Display");
        yield "\",
        };
    </script>

    ";
        // line 362
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 362), "html", null, true);
        yield "dist/leaflet.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 363), "html", null, true);
        yield "dist/pages/display-page.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display-page.twig";
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
        return array (  1019 => 363,  1008 => 362,  1001 => 357,  997 => 356,  993 => 355,  989 => 354,  984 => 352,  980 => 351,  976 => 350,  972 => 349,  968 => 348,  964 => 347,  960 => 346,  955 => 344,  951 => 343,  947 => 342,  944 => 341,  939 => 338,  935 => 337,  931 => 336,  927 => 335,  923 => 334,  919 => 333,  915 => 332,  911 => 331,  907 => 330,  902 => 329,  897 => 327,  895 => 326,  891 => 325,  875 => 313,  869 => 310,  865 => 309,  861 => 308,  855 => 305,  851 => 304,  847 => 303,  829 => 288,  825 => 287,  821 => 286,  817 => 285,  813 => 284,  809 => 283,  805 => 282,  801 => 281,  797 => 280,  793 => 279,  789 => 278,  785 => 277,  781 => 276,  777 => 275,  773 => 274,  769 => 273,  765 => 272,  761 => 271,  757 => 270,  753 => 269,  749 => 268,  745 => 267,  741 => 266,  737 => 265,  733 => 264,  729 => 263,  725 => 262,  721 => 261,  717 => 260,  713 => 259,  709 => 258,  705 => 257,  701 => 256,  697 => 255,  693 => 254,  689 => 253,  685 => 252,  681 => 251,  677 => 250,  673 => 249,  669 => 248,  665 => 247,  660 => 246,  654 => 245,  650 => 244,  646 => 243,  642 => 242,  638 => 241,  634 => 240,  630 => 239,  626 => 238,  622 => 237,  618 => 236,  614 => 235,  610 => 234,  606 => 233,  602 => 232,  591 => 224,  585 => 221,  578 => 217,  570 => 212,  562 => 209,  556 => 206,  544 => 198,  542 => 196,  541 => 195,  539 => 193,  533 => 192,  527 => 191,  522 => 190,  516 => 188,  514 => 186,  513 => 185,  512 => 184,  511 => 183,  509 => 181,  503 => 180,  497 => 179,  491 => 178,  485 => 177,  480 => 176,  474 => 174,  472 => 172,  471 => 171,  469 => 169,  463 => 168,  457 => 167,  452 => 166,  446 => 164,  441 => 163,  435 => 161,  430 => 160,  424 => 158,  419 => 157,  413 => 155,  408 => 154,  402 => 152,  400 => 150,  399 => 149,  398 => 148,  397 => 147,  396 => 146,  395 => 145,  393 => 143,  387 => 142,  381 => 141,  375 => 140,  369 => 139,  363 => 138,  357 => 137,  352 => 136,  346 => 134,  341 => 133,  334 => 129,  331 => 128,  325 => 126,  319 => 125,  317 => 124,  314 => 123,  308 => 121,  305 => 109,  299 => 108,  297 => 107,  294 => 106,  288 => 104,  282 => 103,  276 => 102,  270 => 101,  264 => 100,  262 => 99,  256 => 97,  254 => 95,  253 => 94,  251 => 92,  245 => 91,  239 => 90,  234 => 89,  228 => 87,  226 => 85,  225 => 84,  223 => 82,  217 => 81,  211 => 80,  206 => 79,  200 => 77,  198 => 75,  197 => 74,  195 => 72,  189 => 71,  183 => 70,  178 => 69,  172 => 67,  170 => 65,  169 => 64,  168 => 63,  166 => 61,  160 => 60,  154 => 59,  148 => 58,  143 => 57,  137 => 55,  132 => 54,  126 => 52,  121 => 51,  113 => 46,  109 => 45,  102 => 41,  97 => 39,  94 => 38,  90 => 37,  81 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-page.twig", "/var/www/cms/views/display-page.twig");
    }
}
