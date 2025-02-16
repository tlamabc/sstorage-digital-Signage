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

/* displaygroup-form-edit.twig */
class __TwigTemplate_4f71f587f4360725cea73d616e5b9c81 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displaygroup-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "displaygroup-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit Display Group");
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
        yield ", \$(\"#displayGroupEditForm\").submit()
";
        return; yield '';
    }

    // line 36
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

    // line 72
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "displayGroupFormOpen";
        return; yield '';
    }

    // line 74
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 78
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#reference\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 79
        echo __("Reference");
        yield "</span></a></li>
            </ul>
            <form id=\"displayGroupEditForm\" class=\"XiboForm form-horizontal displayGroupForm\" method=\"put\" action=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroupId", [], "any", false, false, false, 81)]), "html", null, true);
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
            echo __("Current Folder");
            yield "</label>
                                <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                                    <span id=\"originalFormFolder\"></span>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <label class=\"col-sm-2 control-label\">";
            // line 94
            echo __("Move to Selected Folder:");
            yield "</label>
                                <div class=\"col-sm-10\">
                                    <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 96
            echo __("Select Folder");
            yield "</button>
                                    <span id=\"selectedFormFolder\"></span>
                                </div>
                            </div>
                            ";
            // line 100
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId", CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "folderId", [], "any", false, false, false, 100)], 100, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 102
        yield "
                        ";
        // line 103
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this Display Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["displayGroup", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroup", [], "any", false, false, false, 105), ($context["helpText"] ?? null)], 105, $context, $this->getSourceContext());
        yield "

                        ";
        // line 107
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A short description of this Display Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["description", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "description", [], "any", false, false, false, 109), ($context["helpText"] ?? null)], 109, $context, $this->getSourceContext());
        yield "


                        ";
        // line 112
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 112)) {
            // line 113
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 114
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags for this Display Group - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 115
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "getTagString", [], "method", false, false, false, 115), ($context["helpText"] ?? null), "tags-with-value"], 115, $context, $this->getSourceContext());
            yield "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 119
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 120
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 120, $context, $this->getSourceContext());
            yield "

                            <div id=\"tagValueContainer\">
                                ";
            // line 123
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 124
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 125
            yield "                                ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 125, $context, $this->getSourceContext());
            yield "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 129
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            yield "</p>
                            </div>
                        ";
        }
        // line 132
        yield "
                        ";
        // line 133
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Dynamic Group?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Are the members of this group dynamic?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDynamic", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "isDynamic", [], "any", false, false, false, 135), ($context["helpText"] ?? null)], 135, $context, $this->getSourceContext());
        yield "

                        <div class=\"widget dynamic-fields\">
                            <div class=\"widget-title\">";
        // line 138
        echo __("Displays");
        yield "</div>
                            <div class=\"widget-body\">
                                <div class=\"FilterDiv card-body\" id=\"Filter\">
                                    ";
        // line 141
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Criteria");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A comma separated set of regular expressions run against the Display name to determine membership.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_inputWithLogicalOperator", ["dynamicCriteria", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "dynamicCriteria", [], "any", false, false, false, 143), ($context["helpText"] ?? null), "dynamic-fields", "", "", CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "dynamicCriteriaLogicalOperator", [], "any", false, false, false, 143)], 143, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 145
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 145)) {
            // line 146
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Criteria Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 147
            yield "                                        ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 148
            yield "                                        ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 149
            yield "                                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated set of tags run against the Display tag to determine membership.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 150
            yield "                                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["dynamicCriteriaTags", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "dynamicCriteriaTags", [], "any", false, false, false, 150), ($context["helpText"] ?? null), "dynamic-fields", null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "dynamicCriteriaExactTags", [], "any", false, false, false, 150), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "dynamicCriteriaTagsLogicalOperator", [], "any", false, false, false, 150)], 150, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 152
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["useRegexForName", 1], 152, $context, $this->getSourceContext());
        yield "
                                </div>

                                <div class=\"XiboData card pt-3\">
                                    <table id=\"displayGroupDisplays\" class=\"table table-striped\">
                                        <thead>
                                        <tr>
                                            <th>";
        // line 159
        echo __("ID");
        yield "</th>
                                            <th>";
        // line 160
        echo __("Display");
        yield "</th>
                                            <th>";
        // line 161
        echo __("Tags");
        yield "</th>
                                            <th>";
        // line 162
        echo __("Status");
        yield "</th>
                                            <th>";
        // line 163
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
        // line 175
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 1");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 176
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref1", [], "any", false, false, false, 176)], 176, $context, $this->getSourceContext());
        yield "

                        ";
        // line 178
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 2");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 179
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref2", [], "any", false, false, false, 179)], 179, $context, $this->getSourceContext());
        yield "

                        ";
        // line 181
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 3");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 182
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref3", [], "any", false, false, false, 182)], 182, $context, $this->getSourceContext());
        yield "

                        ";
        // line 184
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 4");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 185
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref4", [], "any", false, false, false, 185)], 185, $context, $this->getSourceContext());
        yield "

                        ";
        // line 187
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 5");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref5", [], "any", false, false, false, 188)], 188, $context, $this->getSourceContext());
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
        return "displaygroup-form-edit.twig";
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
        return array (  452 => 188,  447 => 187,  441 => 185,  436 => 184,  430 => 182,  425 => 181,  419 => 179,  414 => 178,  408 => 176,  403 => 175,  388 => 163,  384 => 162,  380 => 161,  376 => 160,  372 => 159,  361 => 152,  355 => 150,  349 => 149,  343 => 148,  337 => 147,  331 => 146,  329 => 145,  323 => 143,  317 => 142,  312 => 141,  306 => 138,  299 => 135,  293 => 134,  288 => 133,  285 => 132,  279 => 129,  271 => 125,  265 => 124,  260 => 123,  253 => 120,  248 => 119,  240 => 115,  234 => 114,  228 => 113,  226 => 112,  219 => 109,  213 => 108,  208 => 107,  202 => 105,  196 => 104,  191 => 103,  188 => 102,  183 => 100,  176 => 96,  171 => 94,  161 => 87,  158 => 86,  156 => 85,  147 => 81,  142 => 79,  138 => 78,  133 => 75,  129 => 74,  121 => 72,  80 => 36,  73 => 33,  68 => 32,  64 => 31,  58 => 28,  54 => 27,  49 => 24,  47 => 25,  40 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "displaygroup-form-edit.twig", "/var/www/cms/views/displaygroup-form-edit.twig");
    }
}
