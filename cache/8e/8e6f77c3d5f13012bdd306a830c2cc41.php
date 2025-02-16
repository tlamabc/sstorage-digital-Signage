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

/* library-form-edit.twig */
class __TwigTemplate_7953a18957da81f3c34604779078035e extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "library-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "library-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit Media");
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
        yield ", \$(\"#mediaEditForm\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "mediaEditFormOpen";
        return; yield '';
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"mediaEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\" data-media-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 41), "html", null, true);
        yield "\" data-valid-extensions=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validExtensions"] ?? null), "html", null, true);
        yield "\" data-gettag=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        yield "\" data-folder-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "folderId", [], "any", false, false, false, 41), "html", null, true);
        yield "\">
                ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "mediaType", [], "any", false, false, false, 42) != "font")) {
            // line 43
            yield "
                    <div class=\"form-group row\">
                        <label class=\"col-sm-2 control-label\">";
            // line 45
            echo __("Current Folder");
            yield "</label>
                        <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                            <span id=\"originalFormFolder\"></span>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-sm-2 control-label\">";
            // line 52
            echo __("Move to Selected Folder:");
            yield "</label>
                        <div class=\"col-sm-10\">
                            <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 54
            echo __("Select Folder");
            yield "</button>
                            <span id=\"selectedFormFolder\"></span>
                        </div>
                    </div>

                    ";
            // line 59
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Name");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Name of this item - Leave blank to use the file name");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 61
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "name", [], "any", false, false, false, 61), ($context["helpText"] ?? null)], 61, $context, $this->getSourceContext());
            yield "

                    ";
            // line 63
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Duration");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 64
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The duration in seconds this item should be displayed");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 65
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_number", ["duration", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "duration", [], "any", false, false, false, 65), ($context["helpText"] ?? null)], 65, $context, $this->getSourceContext());
            yield "

                    ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 67)) {
                // line 68
                yield "                        ";
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Tags");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 69
                yield "                        ";
                $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Tags for this Media - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 70
                yield "                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "getTagString", [], "method", false, false, false, 70), ($context["helpText"] ?? null), "tags-with-value"], 70, $context, $this->getSourceContext());
                yield "

                        <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                        ";
                // line 74
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Tag value");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 75
                yield "                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 75, $context, $this->getSourceContext());
                yield "

                        <div id=\"tagValueContainer\">
                            ";
                // line 78
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Tag value");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 79
                yield "                            ";
                $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 80
                yield "                            ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 80, $context, $this->getSourceContext());
                yield "
                        </div>

                        <div id=\"tagValueRequired\" class=\"alert alert-info\">
                            <p>";
                // line 84
                echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
                yield "</p>
                        </div>
                    ";
            }
            // line 87
            yield "
                    ";
            // line 88
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Expiry date");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select the date and time after which this media should be removed from the CMS - it will be removed from any existing widgets as well");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 90
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["expires", ($context["title"] ?? null), ($context["expiryDate"] ?? null), ($context["helpText"] ?? null)], 90, $context, $this->getSourceContext());
            yield "

                    ";
            // line 92
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Retire this media?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 93
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Retired media remains on existing Layouts but is not available to assign to new Layouts.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 94
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["retired", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "retired", [], "any", false, false, false, 94), ($context["helpText"] ?? null)], 94, $context, $this->getSourceContext());
            yield "

                    ";
            // line 96
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Media Stats Collection?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 97
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable the collection of Proof of Play statistics for this Media Item. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 98
            yield "
                    ";
            // line 99
            $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 100
            yield "                    ";
            $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 101
            yield "                    ";
            $context["inheritOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Inherit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 102
            yield "                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 103
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 104
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>             // line 105
($context["inheritOption"] ?? null)]];
            // line 107
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["enableStat", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "enableStat", [], "any", false, false, false, 107), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 107, $context, $this->getSourceContext());
            yield "

                    ";
            // line 109
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Orientation");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 110
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set intended orientation for this Media, this is for filtering purpose only.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 111
            yield "                    ";
            $context["option1"] = __("Landscape");
            // line 112
            yield "                    ";
            $context["option2"] = __("Portrait");
            // line 113
            yield "                    ";
            $context["values"] = [["id" => "landscape", "value" => ($context["option1"] ?? null)], ["id" => "portrait", "value" => ($context["option2"] ?? null)]];
            // line 114
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "orientation", [], "any", false, false, false, 114), ($context["values"] ?? null), "id", "value", ($context["helpText"] ?? null)], 114, $context, $this->getSourceContext());
            yield "

                    ";
            // line 116
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Update this media in all layouts it is assigned to?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 117
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Note: It will only be updated in layouts you have permission to edit.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 118) == 1)) {
                // line 119
                yield "                        ";
                $context["checked"] = 1;
                // line 120
                yield "                    ";
            }
            // line 121
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["updateInLayouts", ($context["title"] ?? null), ($context["checked"] ?? null), ($context["helpText"] ?? null)], 121, $context, $this->getSourceContext());
            yield "

                    ";
            // line 123
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId", CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "folderId", [], "any", false, false, false, 123)], 123, $context, $this->getSourceContext());
            yield "
                ";
        } else {
            // line 125
            yield "                    ";
            $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Sorry, Fonts do not have any editable properties.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 126, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 128
        yield "            </form>
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
        return "library-form-edit.twig";
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
        return array (  378 => 128,  372 => 126,  366 => 125,  361 => 123,  355 => 121,  352 => 120,  349 => 119,  346 => 118,  340 => 117,  335 => 116,  329 => 114,  326 => 113,  323 => 112,  320 => 111,  314 => 110,  309 => 109,  303 => 107,  301 => 105,  300 => 104,  299 => 103,  297 => 102,  291 => 101,  285 => 100,  280 => 99,  277 => 98,  271 => 97,  266 => 96,  260 => 94,  254 => 93,  249 => 92,  243 => 90,  237 => 89,  232 => 88,  229 => 87,  223 => 84,  215 => 80,  209 => 79,  204 => 78,  197 => 75,  192 => 74,  184 => 70,  178 => 69,  172 => 68,  170 => 67,  164 => 65,  158 => 64,  153 => 63,  147 => 61,  141 => 60,  136 => 59,  128 => 54,  123 => 52,  113 => 45,  109 => 43,  107 => 42,  95 => 41,  91 => 39,  87 => 38,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-form-edit.twig", "/var/www/cms/views/library-form-edit.twig");
    }
}
