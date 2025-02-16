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

/* displaygroup-form-add.twig */
class __TwigTemplate_4d246de8762b90fe15586be971d0bbef extends Template
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
            'formFieldActions' => [$this, 'block_formFieldActions'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displaygroup-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "displaygroup-form-add.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add Display Group");
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
        echo __("Next");
        yield ", displayGroupAddFormNext()
    ";
        // line 34
        echo __("Save");
        yield ", \$(\"#displayGroupAddForm\").submit();
";
        return; yield '';
    }

    // line 37
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    [{
    \"field\": \"isDynamic\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-fields\": { \"display\": \"\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-fields\": { \"display\": \"\" }
    }
    }]
";
        return; yield '';
    }

    // line 73
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "displayGroupFormOpen";
        return; yield '';
    }

    // line 75
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 79
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#reference\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 80
        echo __("Reference");
        yield "</span></a></li>
            </ul>
            <form id=\"displayGroupAddForm\" class=\"XiboForm form-horizontal displayGroupForm\" method=\"post\" action=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.add"), "html", null, true);
        yield "\" data-gettag=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 85
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 85)) {
            // line 86
            yield "                            <div class=\"form-group row\">
                                <label class=\"col-sm-2 control-label\">";
            // line 87
            echo __("Folder");
            yield "</label>
                                <div class=\"col-sm-10\">
                                    <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 89
            echo __("Select Folder");
            yield "</button>
                                    <span id=\"selectedFormFolder\"></span>
                                </div>
                            </div>
                            ";
            // line 93
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId"], 93, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 95
        yield "
                        ";
        // line 96
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this Display Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["displayGroup", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 98, $context, $this->getSourceContext());
        yield "

                        ";
        // line 100
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A short description of this Display Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["description", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 102, $context, $this->getSourceContext());
        yield "

                        ";
        // line 104
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 104)) {
            // line 105
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags for this Display Group - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 107
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "tags-with-value"], 107, $context, $this->getSourceContext());
            yield "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 111
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 112
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 112, $context, $this->getSourceContext());
            yield "

                            <div id=\"tagValueContainer\">
                                ";
            // line 115
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 116
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 117
            yield "                                ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 117, $context, $this->getSourceContext());
            yield "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 121
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            yield "</p>
                            </div>
                        ";
        }
        // line 124
        yield "
                        ";
        // line 125
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Dynamic Group?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Are the members of this group dynamic?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDynamic", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 127, $context, $this->getSourceContext());
        yield "

                        <div class=\"widget dynamic-fields\">
                            <div class=\"widget-title\">";
        // line 130
        echo __("Displays");
        yield "</div>
                            <div class=\"widget-body\">
                                <div class=\"FilterDiv card-body\" id=\"Filter\">
                                    ";
        // line 133
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Criteria");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A comma separated set of regular expressions run against the Display name to determine membership.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_inputWithLogicalOperator", ["dynamicCriteria", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "dynamic-fields"], 135, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 137
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 137)) {
            // line 138
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Criteria Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 139
            yield "                                        ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 140
            yield "                                        ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 141
            yield "                                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated set of tags run against the Display tag to determine membership.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 142
            yield "                                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["dynamicCriteriaTags", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "dynamic-fields", null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 142, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 144
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["useRegexForName", 1], 144, $context, $this->getSourceContext());
        yield "
                                </div>

                                <div class=\"XiboData card pt-3\">
                                    <table id=\"displayGroupDisplays\" class=\"table table-striped\">
                                        <thead>
                                        <tr>
                                            <th>";
        // line 151
        echo __("ID");
        yield "</th>
                                            <th>";
        // line 152
        echo __("Display");
        yield "</th>
                                            <th>";
        // line 153
        echo __("Tags");
        yield "</th>
                                            <th>";
        // line 154
        echo __("Status");
        yield "</th>
                                            <th>";
        // line 155
        echo __("Licence");
        yield "</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"tab-pane\" id=\"reference\">
                        ";
        // line 168
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("Add reference fields if needed")], 168, $context, $this->getSourceContext());
        yield "

                        ";
        // line 170
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 1");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 171
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref1", [], "any", false, false, false, 171)], 171, $context, $this->getSourceContext());
        yield "

                        ";
        // line 173
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 2");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 174
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref2", [], "any", false, false, false, 174)], 174, $context, $this->getSourceContext());
        yield "

                        ";
        // line 176
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 3");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 177
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref3", [], "any", false, false, false, 177)], 177, $context, $this->getSourceContext());
        yield "

                        ";
        // line 179
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 4");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 180
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref4", [], "any", false, false, false, 180)], 180, $context, $this->getSourceContext());
        yield "

                        ";
        // line 182
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 5");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 183
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref5", [], "any", false, false, false, 183)], 183, $context, $this->getSourceContext());
        yield "
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
        return "displaygroup-form-add.twig";
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
        return array (  450 => 183,  445 => 182,  439 => 180,  434 => 179,  428 => 177,  423 => 176,  417 => 174,  412 => 173,  406 => 171,  401 => 170,  396 => 168,  380 => 155,  376 => 154,  372 => 153,  368 => 152,  364 => 151,  353 => 144,  347 => 142,  341 => 141,  335 => 140,  329 => 139,  323 => 138,  321 => 137,  315 => 135,  309 => 134,  304 => 133,  298 => 130,  291 => 127,  285 => 126,  280 => 125,  277 => 124,  271 => 121,  263 => 117,  257 => 116,  252 => 115,  245 => 112,  240 => 111,  232 => 107,  226 => 106,  220 => 105,  218 => 104,  212 => 102,  206 => 101,  201 => 100,  195 => 98,  189 => 97,  184 => 96,  181 => 95,  176 => 93,  169 => 89,  164 => 87,  161 => 86,  159 => 85,  151 => 82,  146 => 80,  142 => 79,  137 => 76,  133 => 75,  125 => 73,  84 => 37,  77 => 34,  73 => 33,  68 => 32,  64 => 31,  58 => 28,  54 => 27,  49 => 24,  47 => 25,  40 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "displaygroup-form-add.twig", "/var/www/cms/views/displaygroup-form-add.twig");
    }
}
