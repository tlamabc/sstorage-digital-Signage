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

/* display-form-edit.twig */
class __TwigTemplate_b9f273dc725c7defd2230d0a4e6d7a60 extends Template
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
            'extra' => [$this, 'block_extra'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "display-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-edit.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Edit Display");
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
        yield ", displayEditFormSubmit()
";
        return; yield '';
    }

    // line 35
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "displayEditFormOpen";
        return; yield '';
    }

    // line 37
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "overrideConfig", [], "any", false, false, false, 37));
        return; yield '';
    }

    // line 39
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#location\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Details");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#reference\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Reference");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#maintenance\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("Maintenance");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#wol\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 47
        echo __("Wake on LAN");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#settings\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 48
        echo __("Settings");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#remote\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 49
        echo __("Remote");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 50
        echo __("Advanced");
        yield "</span></a></li>
            </ul>
            <form id=\"displayEditForm\" class=\"DisplayForm XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 52)]), "html", null, true);
        yield "\" data-gettag=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 55)) {
            // line 56
            yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 57
            echo __("Current Folder");
            yield "</label>
                            <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                                <span id=\"originalFormFolder\"></span>
                            </div>
                        </div>

                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 64
            echo __("Move to Selected Folder:");
            yield "</label>
                            <div class=\"col-sm-10\">
                                <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 66
            echo __("Select Folder");
            yield "</button>
                                <span id=\"selectedFormFolder\"></span>
                            </div>
                        </div>

                        ";
            // line 71
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId", CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "folderId", [], "any", false, false, false, 71)], 71, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 73
        yield "
                        ";
        // line 74
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        yield "                        ";
        if (($context["displayLockName"] ?? null)) {
            // line 76
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Name of the Display - your administrator has locked this to the device name");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 77
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["display", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "display", [], "any", false, false, false, 77), ($context["helpText"] ?? null), "", "required"], 77, $context, $this->getSourceContext());
            yield "
                        ";
        } else {
            // line 79
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Name of the Display - (1 - 50 characters).");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 80
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["display", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "display", [], "any", false, false, false, 80), ($context["helpText"] ?? null), "", "required"], 80, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 82
        yield "
                        ";
        // line 83
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display's Hardware Key");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A unique identifier for this display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["license", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "license", [], "any", false, false, false, 85), ($context["helpText"] ?? null), "", "required", "", false], 85, $context, $this->getSourceContext());
        yield "

                        ";
        // line 87
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A description - (1 - 254 characters).");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["description", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "description", [], "any", false, false, false, 89), ($context["helpText"] ?? null)], 89, $context, $this->getSourceContext());
        yield "

                        ";
        // line 91
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 91)) {
            // line 92
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 93
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags for this Display - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 94
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "getTagString", [], "method", false, false, false, 94), ($context["helpText"] ?? null), "tags-with-value"], 94, $context, $this->getSourceContext());
            yield "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 98
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 99
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 99, $context, $this->getSourceContext());
            yield "

                            <div id=\"tagValueContainer\">
                                ";
            // line 102
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 103
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 104
            yield "                                ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 104, $context, $this->getSourceContext());
            yield "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 108
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            yield "</p>
                            </div>
                        ";
        }
        // line 111
        yield "
                        ";
        // line 112
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Authorise display?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use one of the available slots for this display?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        yield "                        ";
        $context["yes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        yield "                        ";
        $context["no"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 116
        yield "                        ";
        $context["options"] = [["licensedid" => 1, "licensed" =>         // line 117
($context["yes"] ?? null)], ["licensedid" => 0, "licensed" =>         // line 118
($context["no"] ?? null)]];
        // line 120
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["licensed", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "licensed", [], "any", false, false, false, 120), ($context["options"] ?? null), "licensedid", "licensed", ($context["helpText"] ?? null)], 120, $context, $this->getSourceContext());
        yield "

                        ";
        // line 122
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Default Layout");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set the Default Layout to use when no other content is scheduled to this Display. This will override the global Default Layout as set in CMS Administrator Settings. If left blank a global Default Layout will be automatically set for this Display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 124
        yield "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search")], ["name" => "data-search-term", "value" => "layout"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "layoutId"], ["name" => "data-text-property", "value" => "layout"], ["name" => "data-filter-options", "value" => "{\"retired\":\"0\"}"]];
        // line 132
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["defaultLayoutId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "defaultLayoutId", [], "any", false, false, false, 132), ($context["layouts"] ?? null), "layoutId", "layout", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 132, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"location\">
                        ";
        // line 135
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Latitude");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Latitude of this display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["latitude", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "latitude", [], "any", false, false, false, 137), ($context["helpText"] ?? null)], 137, $context, $this->getSourceContext());
        yield "

                        ";
        // line 139
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Longitude");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Longitude of this Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["longitude", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "longitude", [], "any", false, false, false, 141), ($context["helpText"] ?? null)], 141, $context, $this->getSourceContext());
        yield "

                        ";
        // line 143
        $context["attributes"] = [["name" => "data-width", "value" => "100%"]];
        // line 146
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Timezone");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 147
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The timezone for this display, or empty to use the CMS timezone");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 148
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["timeZone", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "timeZone", [], "any", false, false, false, 148), Twig\Extension\CoreExtension::merge([["id" => "", "value" => ""]], ($context["timeZones"] ?? null)), "id", "value", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null)], 148, $context, $this->getSourceContext());
        yield "

                        ";
        // line 150
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Languages");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Languages supported in this display location");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 152
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["languages[]", "dropdownmulti", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "getLanguages", [], "method", false, false, false, 152), ($context["languages"] ?? null), "id", "value", ($context["helpText"] ?? null), "selectPicker"], 152, $context, $this->getSourceContext());
        yield "

                        ";
        // line 154
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 155
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Type of this Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["displayTypeId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "displayTypeId", [], "any", false, false, false, 156), Twig\Extension\CoreExtension::merge([["displayTypeId" => null, "displayType" => ""]], ($context["displayTypes"] ?? null)), "displayTypeId", "displayType", ($context["helpText"] ?? null)], 156, $context, $this->getSourceContext());
        yield "

                        ";
        // line 158
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Venue");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Location/Venue of this display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 160
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.venue.search")], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-venue-id", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 166
($context["display"] ?? null), "venueId", [], "any", false, false, false, 166)]];
        // line 168
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["venueId", "single", ($context["title"] ?? null), "", null, "venueId", "venueName", ($context["helpText"] ?? null), "venue-select", "", "", "", ($context["attributes"] ?? null)], 168, $context, $this->getSourceContext());
        yield "

                        ";
        // line 170
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Address");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 171
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Address of this Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 172
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["address", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "address", [], "any", false, false, false, 172), ($context["helpText"] ?? null)], 172, $context, $this->getSourceContext());
        yield "

                        ";
        // line 174
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Screen size");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 175
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Screen size of this Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 176
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["screenSize", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "screenSize", [], "any", false, false, false, 176), ($context["helpText"] ?? null)], 176, $context, $this->getSourceContext());
        yield "

                        ";
        // line 178
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is mobile?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 179
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is this display mobile?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 180
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isMobile", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "isMobile", [], "any", false, false, false, 180), ($context["helpText"] ?? null)], 180, $context, $this->getSourceContext());
        yield "

                        ";
        // line 182
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is outdoor?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 183
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is your display located outdoors?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 184
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isOutdoor", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "isOutdoor", [], "any", false, false, false, 184), ($context["helpText"] ?? null)], 184, $context, $this->getSourceContext());
        yield "

                        ";
        // line 186
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Cost per play");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 187
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The cost per play");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["costPerPlay", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "costPerPlay", [], "any", false, false, false, 188), ($context["helpText"] ?? null)], 188, $context, $this->getSourceContext());
        yield "

                        ";
        // line 190
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Impressions per play");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 191
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The impressions per play");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 192
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["impressionsPerPlay", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "impressionsPerPlay", [], "any", false, false, false, 192), ($context["helpText"] ?? null)], 192, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"reference\">
                        ";
        // line 195
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("Add reference fields if needed")], 195, $context, $this->getSourceContext());
        yield "

                        ";
        // line 197
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 1");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 198
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "ref1", [], "any", false, false, false, 198)], 198, $context, $this->getSourceContext());
        yield "

                        ";
        // line 200
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 2");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 201
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "ref2", [], "any", false, false, false, 201)], 201, $context, $this->getSourceContext());
        yield "

                        ";
        // line 203
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 3");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 204
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "ref3", [], "any", false, false, false, 204)], 204, $context, $this->getSourceContext());
        yield "

                        ";
        // line 206
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 4");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 207
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "ref4", [], "any", false, false, false, 207)], 207, $context, $this->getSourceContext());
        yield "

                        ";
        // line 209
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 5");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 210
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "ref5", [], "any", false, false, false, 210)], 210, $context, $this->getSourceContext());
        yield "

                        ";
        // line 212
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Custom ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 213
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["customId", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "customId", [], "any", false, false, false, 213)], 213, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"maintenance\">

                        ";
        // line 217
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Email Alerts");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 218
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Do you want to be notified by email if there is a problem with this display?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 219
        yield "                        ";
        $context["yes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 220
        yield "                        ";
        $context["no"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 221
        yield "                        ";
        $context["options"] = [["id" => 0, "value" =>         // line 222
($context["no"] ?? null)], ["id" => 1, "value" =>         // line 223
($context["yes"] ?? null)]];
        // line 225
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["emailAlert", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "emailAlert", [], "any", false, false, false, 225), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 225, $context, $this->getSourceContext());
        yield "

                        ";
        // line 227
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use the Global Timeout?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 228
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this display be tested against the global time out or the Player collection interval?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 229
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["alertTimeout", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "alertTimeout", [], "any", false, false, false, 229), ($context["helpText"] ?? null)], 229, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"wol\">

                        ";
        // line 233
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable Wake on LAN");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 234
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Wake on Lan requires the correct network configuration to route the magic packet to the display PC");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 235
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["wakeOnLanEnabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "wakeOnLanEnabled", [], "any", false, false, false, 235), ($context["helpText"] ?? null)], 235, $context, $this->getSourceContext());
        yield "

                        ";
        // line 237
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("BroadCast Address");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 238
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The IP address of the remote host's broadcast address (or gateway)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 239
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["broadCastAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "broadCastAddress", [], "any", false, false, false, 239), ($context["helpText"] ?? null)], 239, $context, $this->getSourceContext());
        yield "

                        ";
        // line 241
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Wake on LAN SecureOn");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 242
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enter a hexadecimal password of a SecureOn enabled Network Interface Card (NIC) of the remote host. Enter a value in this pattern: 'xx-xx-xx-xx-xx-xx'. Leave the following field empty, if SecureOn is not used (for example, because the NIC of the remote host does not support SecureOn).");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 243
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["secureOn", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "secureOn", [], "any", false, false, false, 243), ($context["helpText"] ?? null)], 243, $context, $this->getSourceContext());
        yield "

                        ";
        // line 245
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Wake on LAN Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 246
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The time this display should receive the WOL command, using the 24hr clock - e.g. 19:00. Maintenance must be enabled.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 247
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["wakeOnLanTime", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "wakeOnLanTime", [], "any", false, false, false, 247), ($context["helpText"] ?? null)], 247, $context, $this->getSourceContext());
        yield "


                        ";
        // line 250
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Wake on LAN CIDR");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 251
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enter a number within the range of 0 to 32 in the following field. Leave the following field empty, if no subnet mask should be used (CIDR = 0). If the remote host's broadcast address is unknown: Enter the host name or IP address of the remote host in Broad Cast Address and enter the CIDR subnet mask of the remote host in this field.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 252
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["cidr", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "cidr", [], "any", false, false, false, 252), ($context["helpText"] ?? null)], 252, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"settings\">
                        ";
        // line 255
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Settings Profile?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 256
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("What display profile should this display use? To use the default profile leave this empty.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 257
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["displayProfileId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "displayProfileId", [], "any", false, false, false, 257), Twig\Extension\CoreExtension::merge([["displayProfileId" => null, "name" => ""]], ($context["profiles"] ?? null)), "displayProfileId", "name", ($context["helpText"] ?? null)], 257, $context, $this->getSourceContext());
        yield "

                        ";
        // line 259
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The settings for this display are shown below. They are taken from the active Display Profile for this Display, which can be changed in Display Settings. If you have altered the Settings Profile above, you will need to save and re-show the form.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 260
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 260, $context, $this->getSourceContext());
        yield "

                        <table id=\"settings-from-profile\" class=\"table table-striped\">
                            <thead>
                                <th>";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Setting"), "html", null, true);
        yield "</th>
                                <th>";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Profile"), "html", null, true);
        yield "</th>
                                <th>";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Override"), "html", null, true);
        yield "</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"advanced\">
                        ";
        // line 273
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Interleave Default");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 274
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Whether to always put the default layout into the cycle.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 275
        yield "                        ";
        $context["yes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 276
        yield "                        ";
        $context["no"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 277
        yield "                        ";
        $context["options"] = [["id" => 0, "value" =>         // line 278
($context["no"] ?? null)], ["id" => 1, "value" =>         // line 279
($context["yes"] ?? null)]];
        // line 281
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["incSchedule", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "incSchedule", [], "any", false, false, false, 281), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 281, $context, $this->getSourceContext());
        yield "

                        ";
        // line 283
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Auditing until");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 284
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Collect auditing from this Player. Should only be used if there is a problem with the display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 285
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "isAuditing", [], "method", false, false, false, 285)) {
            // line 286
            yield "                            ";
            $context["auditing"] = CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "getUnmatchedProperty", ["auditingUntilIso"], "method", false, false, false, 286);
            // line 287
            yield "                        ";
        } else {
            // line 288
            yield "                            ";
            $context["auditing"] = "";
            // line 289
            yield "                        ";
        }
        // line 290
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["auditingUntil", ($context["title"] ?? null), ($context["auditing"] ?? null), ($context["helpText"] ?? null)], 290, $context, $this->getSourceContext());
        yield "

                        ";
        // line 292
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Bandwidth limit");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 293
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The bandwidth limit that should be applied. Enter 0 for no limit.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 294
        yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"bandwidthLimit\">";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-6\">
                                <input class=\"form-control\" name=\"bandwidthLimit\" type=\"number\" id=\"bandwidthLimit\" min=\"0\" value=\"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "bandwidthLimit", [], "any", false, false, false, 297), "html", null, true);
        yield "\"/>
                                <span class=\"help-block\">";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"col-sm-4\">
                                <select name=\"bandwidthLimitUnits\" class=\"form-control\">
                                    <option value=\"kb\">KiB</option>
                                    <option value=\"mb\">MiB</option>
                                    <option value=\"gb\">GiB</option>
                                </select>
                            </div>
                        </div>

                        ";
        // line 309
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Clear Cached Data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 310
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Remove any cached data for this display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 311
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["clearCachedData", ($context["title"] ?? null), 1, ($context["helpText"] ?? null)], 311, $context, $this->getSourceContext());
        yield "

                        ";
        // line 313
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reconfigure XMR");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 314
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Remove the XMR configuration for this Player and send a rekey action.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 315
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["rekeyXmr", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 315, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"remote\">
                        ";
        // line 319
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("TeamViewer Serial");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 320
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("If TeamViewer is installed on the device, enter the serial number here.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 321
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["teamViewerSerial", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "teamViewerSerial", [], "any", false, false, false, 321), ($context["helpText"] ?? null)], 321, $context, $this->getSourceContext());
        yield "

                        ";
        // line 323
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Webkey Serial");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 324
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("If Webkey is installed on the device, enter the serial number here.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 325
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["webkeySerial", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "webkeySerial", [], "any", false, false, false, 325), ($context["helpText"] ?? null)], 325, $context, $this->getSourceContext());
        yield "
                    </div>
                </div>
            </form>


            <div id=\"settings-from-display-profile\" style=\"display:none\">
                ";
        // line 333
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 333) == "android")) {
            // line 334
            yield "                    ";
            yield from             $this->loadTemplate("displayprofile-form-edit-android.twig", "display-form-edit.twig", 334)->unwrap()->yield($context);
            // line 335
            yield "                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 335) == "windows")) {
            // line 336
            yield "                    ";
            yield from             $this->loadTemplate("displayprofile-form-edit-windows.twig", "display-form-edit.twig", 336)->unwrap()->yield($context);
            // line 337
            yield "                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 337) == "linux")) {
            // line 338
            yield "                    ";
            yield from             $this->loadTemplate("displayprofile-form-edit-linux.twig", "display-form-edit.twig", 338)->unwrap()->yield($context);
            // line 339
            yield "                ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 339) == "lg") || (CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 339) == "sssp"))) {
            // line 340
            yield "                    ";
            yield from             $this->loadTemplate("displayprofile-form-edit-soc.twig", "display-form-edit.twig", 340)->unwrap()->yield($context);
            // line 341
            yield "                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 341) == "chromeOS")) {
            // line 342
            yield "                    ";
            yield from             $this->loadTemplate("displayprofile-form-edit-chromeos.twig", "display-form-edit.twig", 342)->unwrap()->yield($context);
            // line 343
            yield "                ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "isCustom", [], "method", false, false, false, 343)) {
            // line 344
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getCustomEditTemplate", [], "method", false, false, false, 344));
            yield "
                ";
        }
        // line 346
        yield "
                ";
        // line 347
        yield from         $this->loadTemplate("displayprofile-form-edit-javascript.twig", "display-form-edit.twig", 347)->unwrap()->yield($context);
        // line 348
        yield "            </div>
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
        return "display-form-edit.twig";
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
        return array (  1063 => 348,  1061 => 347,  1058 => 346,  1052 => 344,  1049 => 343,  1046 => 342,  1043 => 341,  1040 => 340,  1037 => 339,  1034 => 338,  1031 => 337,  1028 => 336,  1025 => 335,  1022 => 334,  1019 => 333,  1008 => 325,  1002 => 324,  997 => 323,  991 => 321,  985 => 320,  980 => 319,  972 => 315,  966 => 314,  961 => 313,  955 => 311,  949 => 310,  944 => 309,  930 => 298,  926 => 297,  921 => 295,  918 => 294,  912 => 293,  907 => 292,  901 => 290,  898 => 289,  895 => 288,  892 => 287,  889 => 286,  886 => 285,  880 => 284,  875 => 283,  869 => 281,  867 => 279,  866 => 278,  864 => 277,  858 => 276,  852 => 275,  846 => 274,  841 => 273,  831 => 266,  827 => 265,  823 => 264,  815 => 260,  810 => 259,  804 => 257,  798 => 256,  793 => 255,  786 => 252,  780 => 251,  775 => 250,  768 => 247,  762 => 246,  757 => 245,  751 => 243,  745 => 242,  740 => 241,  734 => 239,  728 => 238,  723 => 237,  717 => 235,  711 => 234,  706 => 233,  698 => 229,  692 => 228,  687 => 227,  681 => 225,  679 => 223,  678 => 222,  676 => 221,  670 => 220,  664 => 219,  658 => 218,  653 => 217,  645 => 213,  640 => 212,  634 => 210,  629 => 209,  623 => 207,  618 => 206,  612 => 204,  607 => 203,  601 => 201,  596 => 200,  590 => 198,  585 => 197,  580 => 195,  573 => 192,  567 => 191,  562 => 190,  556 => 188,  550 => 187,  545 => 186,  539 => 184,  533 => 183,  528 => 182,  522 => 180,  516 => 179,  511 => 178,  505 => 176,  499 => 175,  494 => 174,  488 => 172,  482 => 171,  477 => 170,  471 => 168,  469 => 166,  467 => 160,  461 => 159,  456 => 158,  450 => 156,  444 => 155,  439 => 154,  433 => 152,  427 => 151,  422 => 150,  416 => 148,  410 => 147,  404 => 146,  402 => 143,  396 => 141,  390 => 140,  385 => 139,  379 => 137,  373 => 136,  368 => 135,  361 => 132,  358 => 124,  352 => 123,  347 => 122,  341 => 120,  339 => 118,  338 => 117,  336 => 116,  330 => 115,  324 => 114,  318 => 113,  313 => 112,  310 => 111,  304 => 108,  296 => 104,  290 => 103,  285 => 102,  278 => 99,  273 => 98,  265 => 94,  259 => 93,  253 => 92,  251 => 91,  245 => 89,  239 => 88,  234 => 87,  228 => 85,  222 => 84,  217 => 83,  214 => 82,  208 => 80,  202 => 79,  196 => 77,  190 => 76,  187 => 75,  182 => 74,  179 => 73,  174 => 71,  166 => 66,  161 => 64,  151 => 57,  148 => 56,  146 => 55,  138 => 52,  133 => 50,  129 => 49,  125 => 48,  121 => 47,  117 => 46,  113 => 45,  109 => 44,  105 => 43,  100 => 40,  96 => 39,  88 => 37,  80 => 35,  73 => 32,  68 => 31,  64 => 30,  58 => 27,  54 => 26,  49 => 23,  47 => 24,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-form-edit.twig", "/var/www/cms/views/display-form-edit.twig");
    }
}
