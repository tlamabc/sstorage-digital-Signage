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

/* campaign-form-edit.twig */
class __TwigTemplate_4870dcfd93dc5db1c6c8f2959fac8061 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "campaign-form-edit.twig", 25)->unwrap();
        // line 26
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "campaign-form-edit.twig", 26)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "campaign-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        $context["campaignName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaign", [], "any", false, false, false, 29);
        // line 30
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Edit Campaign \"%campaignName%\""), array("%campaignName%" => ($context["campaignName"] ?? null), ));
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
        yield ", campaignFormSubmit(\$('#campaignEditForm'))
";
        return; yield '';
    }

    // line 38
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "campaignAssignLayoutsFormOpen";
        return; yield '';
    }

    // line 40
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tab-general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-refs\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Reference");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-layouts\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("Layouts");
        yield "</span></a></li>
            </ul>
            <form id=\"campaignEditForm\" class=\"XiboForm form-horizontal\" method=\"put\"
                  action=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaignId", [], "any", false, false, false, 49)]), "html", null, true);
        yield "\"
                  data-gettag=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-general\">
                        ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 53)) {
            // line 54
            yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 55
            echo __("Current Folder");
            yield "</label>
                            <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                                <span id=\"originalFormFolder\"></span>
                            </div>
                        </div>

                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 62
            echo __("Move to Selected Folder:");
            yield "</label>
                            <div class=\"col-sm-10\">
                                <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 64
            echo __("Select Folder");
            yield "</button>
                                <span id=\"selectedFormFolder\"></span>
                            </div>
                        </div>
                        ";
            // line 68
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId", CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "folderId", [], "any", false, false, false, 68)], 68, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 70
        yield "
                        ";
        // line 71
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this Campaign");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaign", [], "any", false, false, false, 73), ($context["helpText"] ?? null)], 73, $context, $this->getSourceContext());
        yield "

                        ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 75)) {
            // line 76
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 77
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags for this Campaign - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 78
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "getTagString", [], "method", false, false, false, 78), ($context["helpText"] ?? null), "tags-with-value"], 78, $context, $this->getSourceContext());
            yield "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 82
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 83
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 83, $context, $this->getSourceContext());
            yield "

                            <div id=\"tagValueContainer\">
                                ";
            // line 86
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 87
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 88
            yield "                                ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 88, $context, $this->getSourceContext());
            yield "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 92
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            yield "</p>
                            </div>
                        ";
        }
        // line 95
        yield "
                        ";
        // line 96
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable cycle based playback");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When cycle based playback is enabled only 1 Layout from this Campaign will be played each time it is in a Schedule loop. The same Layout will be shown until the 'Play count' is achieved.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["cyclePlaybackEnabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "cyclePlaybackEnabled", [], "any", false, false, false, 98), ($context["helpText"] ?? null), "campaign-type-list", null, false, "input-cycle-playback-enabled"], 98, $context, $this->getSourceContext());
        yield "

                        ";
        // line 100
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Play count");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("In cycle based playback, how many plays should each Layout have before moving on?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["playCount", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "playCount", [], "any", false, false, false, 102), ($context["helpText"] ?? null), "cycle-based-playback campaign-type-list"], 102, $context, $this->getSourceContext());
        yield "

                        ";
        // line 104
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("List play order");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When this campaign is scheduled alongside another campaign with the same display order, how should the layouts in both campaigns be ordered?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        yield "                        ";
        $context["options"] = [["id" => "round", "name" => __("Round-robin")], ["id" => "block", "name" => __("Block")]];
        // line 110
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["listPlayOrder", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "listPlayOrder", [], "any", false, false, false, 110), ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null), "campaign-type-list no-cycle-based-playback"], 110, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"tab-refs\">
                        ";
        // line 113
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("Add reference fields if needed")], 113, $context, $this->getSourceContext());
        yield "

                        ";
        // line 115
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 1");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 116
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "ref1", [], "any", false, false, false, 116), null], 116, $context, $this->getSourceContext());
        yield "

                        ";
        // line 118
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 2");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "ref2", [], "any", false, false, false, 119), null], 119, $context, $this->getSourceContext());
        yield "

                        ";
        // line 121
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 3");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "ref3", [], "any", false, false, false, 122), null], 122, $context, $this->getSourceContext());
        yield "

                        ";
        // line 124
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 4");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "ref4", [], "any", false, false, false, 125), null], 125, $context, $this->getSourceContext());
        yield "

                        ";
        // line 127
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 5");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "ref5", [], "any", false, false, false, 128), null], 128, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"tab-layouts\">
                        <div id=\"assignLayouts\"></div>
                        ";
        // line 132
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["manageLayouts", 0], 132, $context, $this->getSourceContext());
        yield "

                        <div class=\"row\">
                            <div class=\"col-md-12 card p-3 mb-3 bg-light\">
                                <div id=\"LayoutAssign\" class=\"card p-3 mb-3 bg-light\" data-url=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.assign.layout", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaignId", [], "any", false, false, false, 136)]), "html", null, true);
        yield "\">
                                    <div>
                                        <ul id=\"LayoutAssignSortable\" data-layouts=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["layouts"] ?? null)), "html", null, true);
        yield "\"></ul>
                                    </div>
                                </div>

                                <div class=\"XiboGrid\" id=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"layoutAssignView\">
                                    <div class=\"layoutAssignFilterOptions XiboFilter\">
                                        <div class=\"form-inline\">
                                            ";
        // line 145
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        yield "                                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["campaignId", ($context["title"] ?? null)], 146, $context, $this->getSourceContext());
        yield "

                                            ";
        // line 148
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 149
        yield "                                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["layout", ($context["title"] ?? null)], 149, $context, $this->getSourceContext());
        yield "

                                            ";
        // line 151
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 151)) {
            // line 152
            yield "                                                ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 153
            yield "                                                ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 154
            yield "                                                ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 155
            yield "                                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 156
            yield "                                                ";
            yield CoreExtension::callMacro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 156, $context, $this->getSourceContext());
            yield "
                                            ";
        }
        // line 158
        yield "
                                            ";
        // line 159
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 159)) {
            // line 160
            yield "                                                ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Folder Filter");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 161
            yield "                                                ";
            $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search")], ["name" => "data-filter-options", "value" => "{\"gridView\":1}"], ["name" => "data-search-term", "value" => "folderName"], ["name" => "data-id-property", "value" => "folderId"], ["name" => "data-text-property", "value" => "text"], ["name" => "data-initial-key", "value" => "folderId"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""]];
            // line 173
            yield "                                                ";
            yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["folderId", "single", ($context["title"] ?? null), "", null, "", "", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 173, $context, $this->getSourceContext());
            yield "
                                            ";
        }
        // line 175
        yield "
                                            ";
        // line 176
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Owner");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 177
        yield "                                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show items owned by the selected User.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 178
        yield "                                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 190
        yield "                                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 190, $context, $this->getSourceContext());
        yield "

                                            ";
        // line 192
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Orientation");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 193
        yield "                                            ";
        $context["option1"] = __("All");
        // line 194
        yield "                                            ";
        $context["option2"] = __("Landscape");
        // line 195
        yield "                                            ";
        $context["option3"] = __("Portrait");
        // line 196
        yield "                                            ";
        $context["values"] = [["id" => "", "value" => ($context["option1"] ?? null)], ["id" => "landscape", "value" => ($context["option2"] ?? null)], ["id" => "portrait", "value" => ($context["option3"] ?? null)]];
        // line 197
        yield "                                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), "", ($context["values"] ?? null), "id", "value"], 197, $context, $this->getSourceContext());
        yield "
                                        </div>
                                    </div>

                                    <div class=\"XiboData card pt-3\">
                                        <table id=\"layoutAssignments\" class=\"table table-striped\"
                                               style=\"width:100%\"
                                               data-state-preference-name=\"campaignLayoutAssignGrid\">
                                            <thead>
                                            <tr>
                                                <th>";
        // line 207
        echo __("ID");
        yield "</th>
                                                <th>";
        // line 208
        echo __("Name");
        yield "</th>
                                                <th>";
        // line 209
        echo __("Status");
        yield "</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
        return "campaign-form-edit.twig";
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
        return array (  517 => 209,  513 => 208,  509 => 207,  495 => 197,  492 => 196,  489 => 195,  486 => 194,  483 => 193,  478 => 192,  472 => 190,  469 => 178,  463 => 177,  458 => 176,  455 => 175,  449 => 173,  446 => 161,  440 => 160,  438 => 159,  435 => 158,  429 => 156,  423 => 155,  417 => 154,  411 => 153,  405 => 152,  403 => 151,  397 => 149,  392 => 148,  386 => 146,  381 => 145,  375 => 142,  368 => 138,  363 => 136,  356 => 132,  348 => 128,  343 => 127,  337 => 125,  332 => 124,  326 => 122,  321 => 121,  315 => 119,  310 => 118,  304 => 116,  299 => 115,  294 => 113,  287 => 110,  284 => 106,  278 => 105,  273 => 104,  267 => 102,  261 => 101,  256 => 100,  250 => 98,  244 => 97,  239 => 96,  236 => 95,  230 => 92,  222 => 88,  216 => 87,  211 => 86,  204 => 83,  199 => 82,  191 => 78,  185 => 77,  179 => 76,  177 => 75,  171 => 73,  165 => 72,  160 => 71,  157 => 70,  152 => 68,  145 => 64,  140 => 62,  130 => 55,  127 => 54,  125 => 53,  119 => 50,  115 => 49,  109 => 46,  105 => 45,  101 => 44,  96 => 41,  92 => 40,  84 => 38,  77 => 35,  72 => 34,  68 => 33,  62 => 30,  59 => 29,  55 => 28,  50 => 24,  48 => 26,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "campaign-form-edit.twig", "/var/www/cms/views/campaign-form-edit.twig");
    }
}
