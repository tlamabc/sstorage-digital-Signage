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

/* campaign-builder.twig */
class __TwigTemplate_c3b5b5e0a4574f9a98c2cf008375eac0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "campaign-builder.twig", 24)->unwrap();
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "campaign-builder.twig", 25)->unwrap();
        // line 29
        $context["hideNavigation"] = "1";
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "campaign-builder.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $context["campaignName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaign", [], "any", false, false, false, 27);
        /* xgettext:no-php-format */        echo strtr(__("%campaignName% - Campaign Builder"), array("%campaignName%" => ($context["campaignName"] ?? null), ));
        yield " | ";
        return; yield '';
    }

    // line 31
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "    <div id=\"campaign-builder\"
         data-campaign-id=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaignId", [], "any", false, false, false, 33), "html", null, true);
        yield "\">
        <div class=\"back-button\">
            <a id=\"backBtn\" class=\"btn btn-primary\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.view"), "html", null, true);
        yield "\">
                <i class=\"fa fa-angle-left\"></i>
                <span>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back"), "html", null, true);
        yield "</span>
            </a>
        </div>

        <div class=\"widget mt-3\">
            <div class=\"widget-body\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"campaign-title\">
                            <h1>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaign", [], "any", false, false, false, 46), "html", null, true);
        yield "</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tab-general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 53
        echo __("General");
        yield "</span></a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-refs\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 54
        echo __("Reference");
        yield "</span></a></li>
                        </ul>
                        <form id=\"campaign-builder-form-details\" class=\"XiboForm form-horizontal\"
                             method=\"put\"
                             action=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaignId", [], "any", false, false, false, 58)]), "html", null, true);
        yield "\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"tab-general\">

                                    ";
        // line 62
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this Campaign");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaign", [], "any", false, false, false, 64), ($context["helpText"] ?? null)], 64, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 66
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Start Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the start date for this campaign");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_date", ["startDt", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "getStartDt", [], "method", false, false, false, 68), ($context["helpText"] ?? null), "starttime-control", "required", ""], 68, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 70
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("End Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the end date for this campaign");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_date", ["endDt", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "getEndDt", [], "method", false, false, false, 72), ($context["helpText"] ?? null), "endtime-control", "required", ""], 72, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 74
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select one or more displays / groups for this event to be shown on.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                                    ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-trans-groups", "value" => __("Groups")], ["name" => "data-trans-display", "value" => __("Display")], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"]];
        // line 84
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["displayGroupIds[]", "dropdownmulti", ($context["title"] ?? null), ($context["displayGroupIds"] ?? null), ($context["displayGroups"] ?? null), "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "", "", "", "", ($context["attributes"] ?? null)], 84, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 86
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Target Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("How would you like to set the target for this campaign?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        yield "                                    ";
        $context["options"] = [["id" => "plays", "name" => __("Plays")], ["id" => "budget", "name" => __("Budget")], ["id" => "imp", "name" => __("Impressions")]];
        // line 93
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["targetType", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "targetType", [], "any", false, false, false, 93), ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null), "campaign-type-ad"], 93, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 95
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Target");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("What is the target number for this Campaign over its entire playtime");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["target", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "target", [], "any", false, false, false, 97), ($context["helpText"] ?? null)], 97, $context, $this->getSourceContext());
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
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags for this Campaign - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 102
            yield "                                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "getTagString", [], "method", false, false, false, 102), ($context["helpText"] ?? null), "tags-with-value"], 102, $context, $this->getSourceContext());
            yield "

                                        <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                                        ";
            // line 106
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 107
            yield "                                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 107, $context, $this->getSourceContext());
            yield "

                                        <div id=\"tagValueContainer\">
                                            ";
            // line 110
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 111
            yield "                                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 112
            yield "                                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 112, $context, $this->getSourceContext());
            yield "
                                        </div>

                                        <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                            <p>";
            // line 116
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            yield "</p>
                                        </div>
                                    ";
        }
        // line 119
        yield "                                </div>
                                <div class=\"tab-pane\" id=\"tab-refs\">
                                    ";
        // line 121
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("Add reference fields if needed")], 121, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 123
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 1");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 124
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "ref1", [], "any", false, false, false, 124), null], 124, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 126
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 2");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "ref2", [], "any", false, false, false, 127), null], 127, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 129
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 3");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "ref3", [], "any", false, false, false, 130), null], 130, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 132
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 4");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "ref4", [], "any", false, false, false, 133), null], 133, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 135
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 5");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "ref5", [], "any", false, false, false, 136), null], 136, $context, $this->getSourceContext());
        yield "
                                </div>
                            </div>

                            ";
        // line 140
        yield CoreExtension::callMacro($macros["forms"], "macro_button", [__("Save"), "submit", null, null, null, "btn-success"], 140, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                ";
        // line 147
        yield "                                ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search")], ["name" => "data-search-term", "value" => "layout"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-trans-layout", "value" => __("Layout")], ["name" => "data-id-property", "value" => "layoutId"], ["name" => "data-text-property", "value" => "layout"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => __("Add a layout")]];
        // line 157
        yield "
                                ";
        // line 158
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Add Layout");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        yield "                                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a Layout to add to this Campaign");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 160
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["layoutId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "campaignId", [], "any", false, false, false, 160), null, "campaignId", "campaign", ($context["helpText"] ?? null), "layout-control", "", "", "", ($context["attributes"] ?? null)], 160, $context, $this->getSourceContext());
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                    <table id=\"table-campaign-builder-layout-assignments\"
                                           data-search-url=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search"), "html", null, true);
        yield "?campaignId=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaignId", [], "any", false, false, false, 166), "html", null, true);
        yield "&embed=layouts\"
                                           data-assignment-delete-url=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.layout.remove.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaignId", [], "any", false, false, false, 167)]), "html", null, true);
        yield "\"
                                           class=\"table table-striped\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 171
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 172
        echo __("Name");
        yield "</th>
                                        <th>";
        // line 173
        echo __("Duration");
        yield "</th>
                                        <th>";
        // line 174
        echo __("Day Parts");
        yield "</th>
                                        <th>";
        // line 175
        echo __("Days of the week");
        yield "</th>
                                        <th>";
        // line 176
        echo __("Geofence");
        yield "</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <h5>Time - ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "complete", [], "any", false, false, false, 190), "html", null, true);
        yield "%</h5>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\"
                                                 role=\"progressbar\"
                                                 aria-valuenow=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "complete", [], "any", false, false, false, 194), "html", null, true);
        yield "\"
                                                 aria-valuemin=\"0\"
                                                 aria-valuemax=\"100\"
                                                 style=\"width: ";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "complete", [], "any", false, false, false, 197), "html", null, true);
        yield "%\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <h5>Target - ";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "target", [], "any", false, false, false, 203), "html", null, true);
        yield "%</h5>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\"
                                                 role=\"progressbar\"
                                                 aria-valuenow=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "target", [], "any", false, false, false, 207), "html", null, true);
        yield "\"
                                                 aria-valuemin=\"0\"
                                                 aria-valuemax=\"100\"
                                                 style=\"width: ";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "target", [], "any", false, false, false, 210), "html", null, true);
        yield "%\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <table class=\"table table-striped\">
                                            <tbody>
                                                <tr>
                                                    <td>";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plays"), "html", null, true);
        yield "</td>
                                                    <td>";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "plays", [], "any", false, false, false, 222), "html", null, true);
        yield "</td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Spend"), "html", null, true);
        yield "</td>
                                                    <td>";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "spend", [], "any", false, false, false, 226), "html", null, true);
        yield "</td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Impressions"), "html", null, true);
        yield "</td>
                                                    <td>";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "impressions", [], "any", false, false, false, 230), "html", null, true);
        yield "</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"alert alert-info\">
                                    ";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Stats need to be enabled on the Displays and Layouts selected on this campaign"), "html", null, true);
        yield "
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

    // line 252
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 253
        yield "    ";
        // line 254
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\" defer>
        ";
        // line 256
        yield "        var campaignBuilderDefaultVars = {
            campaignAssignLayoutURL: \"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.assign.layout", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaignId", [], "any", false, false, false, 257)]), "html", null, true);
        yield "\",
            campaignRemoveLayoutURL: \"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.remove.layout", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaignId", [], "any", false, false, false, 258)]), "html", null, true);
        yield "\",
            defaultLat: \"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DEFAULT_LAT", [], "any", false, false, false, 259), "html", null, true);
        yield "\",
            defaultLong: \"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DEFAULT_LONG", [], "any", false, false, false, 260), "html", null, true);
        yield "\",
            dayPartSearchURL:  \"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.search"), "html", null, true);
        yield "\" + \"?isAlways=0&isCustom=0\",
        };

        ";
        // line 265
        yield "        ";
        // line 266
        yield "            ";
        // line 267
        yield "            var campaignBuilderTrans = {
              saveButton: '";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "js", null, true);
        yield "',
              cancelButton: '";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js", null, true);
        yield "',
              addLayoutFormTitle: '";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add Layout"), "js", null, true);
        yield "',
              editLayoutFormTitle: '";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Layout"), "js", null, true);
        yield "',
              assignmentEditButton: '";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "js", null, true);
        yield "',
              assignmentDeleteButton: '";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "',
              daysOfWeek: {
                monday: '";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Monday"), "js", null, true);
        yield "',
                tuesday: '";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tuesday"), "js", null, true);
        yield "',
                wednesday: '";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Wednesday"), "js", null, true);
        yield "',
                thursday: '";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thursday"), "js", null, true);
        yield "',
                friday: '";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Friday"), "js", null, true);
        yield "',
                saturday: '";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Saturday"), "js", null, true);
        yield "',
                sunday: '";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sunday"), "js", null, true);
        yield "',
              },
              daysOfWeekDropdownTitle: '";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Days of the week"), "js", null, true);
        yield "',
              daysOfWeekDropdownHelpText: '";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Which days of the week should the layout be active?"), "js", null, true);
        yield "',
              dayPartDropdownTitle: '";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dayparting"), "js", null, true);
        yield "',
              dayPartDropdownHelpText:'";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Should this layout only be shown on selected day parts?"), "js", null, true);
        yield "',
              builderMessage: '";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Draw areas on the map where you want this layout to play"), "js", null, true);
        yield "',
            };
        ";
        // line 290
        yield "    </script>

    <script src=\"";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 292), "html", null, true);
        yield "dist/leaflet.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 293), "html", null, true);
        yield "dist/campaignBuilder.bundle.min.js?v=";
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
        return "campaign-builder.twig";
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
        return array (  676 => 293,  666 => 292,  662 => 290,  657 => 287,  653 => 286,  649 => 285,  645 => 284,  641 => 283,  636 => 281,  632 => 280,  628 => 279,  624 => 278,  620 => 277,  616 => 276,  612 => 275,  607 => 273,  603 => 272,  599 => 271,  595 => 270,  591 => 269,  587 => 268,  584 => 267,  582 => 266,  580 => 265,  574 => 261,  570 => 260,  566 => 259,  562 => 258,  558 => 257,  555 => 256,  550 => 254,  548 => 253,  544 => 252,  529 => 241,  515 => 230,  511 => 229,  505 => 226,  501 => 225,  495 => 222,  491 => 221,  477 => 210,  471 => 207,  464 => 203,  455 => 197,  449 => 194,  442 => 190,  425 => 176,  421 => 175,  417 => 174,  413 => 173,  409 => 172,  405 => 171,  398 => 167,  392 => 166,  382 => 160,  376 => 159,  371 => 158,  368 => 157,  365 => 147,  356 => 140,  348 => 136,  343 => 135,  337 => 133,  332 => 132,  326 => 130,  321 => 129,  315 => 127,  310 => 126,  304 => 124,  299 => 123,  294 => 121,  290 => 119,  284 => 116,  276 => 112,  270 => 111,  265 => 110,  258 => 107,  253 => 106,  245 => 102,  239 => 101,  233 => 100,  231 => 99,  225 => 97,  219 => 96,  214 => 95,  208 => 93,  205 => 88,  199 => 87,  194 => 86,  188 => 84,  185 => 76,  179 => 75,  174 => 74,  168 => 72,  162 => 71,  157 => 70,  151 => 68,  145 => 67,  140 => 66,  134 => 64,  128 => 63,  123 => 62,  116 => 58,  109 => 54,  105 => 53,  95 => 46,  83 => 37,  78 => 35,  73 => 33,  70 => 32,  66 => 31,  56 => 27,  51 => 23,  49 => 29,  47 => 25,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "campaign-builder.twig", "/var/www/cms/views/campaign-builder.twig");
    }
}
