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

/* campaign-form-add.twig */
class __TwigTemplate_10ab806c2fef4c4d070c86168a3dad62 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "campaign-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "campaign-form-add.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add Campaign");
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
        yield ", campaignFormSubmit(\$('#campaignAddForm'))
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "campaignAddFormOpen";
        return; yield '';
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"campaignAddForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.add"), "html", null, true);
        yield "\"
                  data-submit-call-back=\"campaignAddFormSubmitCallback\"
                  data-edit-form-url=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.edit.form", ["id" => ":id"]), "html", null, true);
        yield "\"
                  data-gettag=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        yield "\">
                ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 45)) {
            // line 46
            yield "                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\">";
            // line 47
            echo __("Folder");
            yield "</label>
                    <div class=\"col-sm-10\">
                        <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 49
            echo __("Select Folder");
            yield "</button>
                        <span id=\"selectedFormFolder\"></span>
                    </div>
                </div>
                ";
            // line 53
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId"], 53, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 55
        yield "
                ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["ad.campaign"], "method", false, false, false, 56)) {
            // line 57
            yield "                ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Type");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 58
            yield "                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("What type of Campaign would you like to create?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            yield "                ";
            $context["options"] = [["id" => "list", "name" => __("Layout list")], ["id" => "ad", "name" => __("Ad Campaign")]];
            // line 63
            yield "                ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["type", "single", ($context["title"] ?? null), "both", ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null)], 63, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 65
        yield "
                ";
        // line 66
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this Campaign");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 68, $context, $this->getSourceContext());
        yield "

                ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 70)) {
            // line 71
            yield "                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 72
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags for this Campaign - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "tags-with-value"], 73, $context, $this->getSourceContext());
            yield "

                    <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                    ";
            // line 77
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 78
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 78, $context, $this->getSourceContext());
            yield "

                    <div id=\"tagValueContainer\">
                        ";
            // line 81
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 82
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 83
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 83, $context, $this->getSourceContext());
            yield "
                    </div>

                    <div id=\"tagValueRequired\" class=\"alert alert-info\">
                        <p>";
            // line 87
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            yield "</p>
                    </div>
                ";
        }
        // line 90
        yield "
                ";
        // line 91
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable cycle based playback");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When cycle based playback is enabled only 1 Layout from this Campaign will be played each time it is in a Schedule loop. The same Layout will be shown until the 'Play count' is achieved.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["cyclePlaybackEnabled", ($context["title"] ?? null), 0, ($context["helpText"] ?? null), "campaign-type-list", null, false, "input-cycle-playback-enabled"], 93, $context, $this->getSourceContext());
        yield "

                ";
        // line 95
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Play count");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("In cycle based playback, how many plays should each Layout have before moving on?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["playCount", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "cycle-based-playback campaign-type-list"], 97, $context, $this->getSourceContext());
        yield "

                ";
        // line 99
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("List play order");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When this campaign is scheduled alongside another campaign with the same display order, how should the layouts in both campaigns be ordered?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        yield "                ";
        $context["options"] = [["id" => "round", "name" => __("Round-robin")], ["id" => "block", "name" => __("Block")]];
        // line 105
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["listPlayOrder", "single", ($context["title"] ?? null), "round", ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null), "campaign-type-list no-cycle-based-playback"], 105, $context, $this->getSourceContext());
        yield "

                ";
        // line 107
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Target Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("How would you like to set the target for this campaign?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        yield "                ";
        $context["options"] = [["id" => "plays", "name" => __("Plays")], ["id" => "budget", "name" => __("Budget")], ["id" => "imp", "name" => __("Impressions")]];
        // line 114
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["targetType", "single", ($context["title"] ?? null), "both", ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null), "campaign-type-ad"], 114, $context, $this->getSourceContext());
        yield "

                ";
        // line 116
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Target");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("What is the target number for this Campaign over its entire playtime");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["target", ($context["title"] ?? null), null, ($context["helpText"] ?? null), "campaign-type-ad"], 118, $context, $this->getSourceContext());
        yield "
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
        return "campaign-form-add.twig";
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
        return array (  323 => 118,  317 => 117,  312 => 116,  306 => 114,  303 => 109,  297 => 108,  292 => 107,  286 => 105,  283 => 101,  277 => 100,  272 => 99,  266 => 97,  260 => 96,  255 => 95,  249 => 93,  243 => 92,  238 => 91,  235 => 90,  229 => 87,  221 => 83,  215 => 82,  210 => 81,  203 => 78,  198 => 77,  190 => 73,  184 => 72,  178 => 71,  176 => 70,  170 => 68,  164 => 67,  159 => 66,  156 => 65,  150 => 63,  147 => 59,  141 => 58,  135 => 57,  133 => 56,  130 => 55,  125 => 53,  118 => 49,  113 => 47,  110 => 46,  108 => 45,  104 => 44,  100 => 43,  95 => 41,  91 => 39,  87 => 38,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "campaign-form-add.twig", "/var/www/cms/views/campaign-form-add.twig");
    }
}
