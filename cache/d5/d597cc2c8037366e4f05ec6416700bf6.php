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

/* dataset-rss-form-edit.twig */
class __TwigTemplate_ae3be3e562bd88e869021946a9b10e85 extends Template
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
            'formFieldActions' => [$this, 'block_formFieldActions'],
            'extra' => [$this, 'block_extra'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "dataset-rss-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-rss-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit RSS");
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
        yield ", \$(\"#dataSetRssEditForm\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "configureQueryBuilder";
        return; yield '';
    }

    // line 38
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "[
    {
    \"field\": \"useOrderingClause\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".order-clause-field\": { \"display\": \"none\" },
    \"#orderClause\": { \"display\": \"\" }
    }
    },{
    \"field\": \"useOrderingClause\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".order-clause-field\": { \"display\": \"none\" },
    \"#orderClause\": { \"display\": \"\" }
    }
    },{
    \"field\": \"useOrderingClause\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".order-clause-field\": { \"display\": \"\" },
    \"#orderClause\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useOrderingClause\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".order-clause-field\": { \"display\": \"\" },
    \"#orderClause\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useFilteringClause\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".filter-clause-field\": { \"display\": \"none\" },
    \"#filterClause\": { \"display\": \"\" }
    }
    },{
    \"field\": \"useFilteringClause\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".filter-clause-field\": { \"display\": \"none\" },
    \"#filterClause\": { \"display\": \"\" }
    }
    },{
    \"field\": \"useFilteringClause\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".filter-clause-field\": { \"display\": \"\" },
    \"#filterClause\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useFilteringClause\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".filter-clause-field\": { \"display\": \"\" },
    \"#filterClause\": { \"display\": \"none\" }
    }
    }
]
";
        return; yield '';
    }

    // line 116
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield json_encode(($context["extra"] ?? null));
        return; yield '';
    }

    // line 118
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 122
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#orderCriteria\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 123
        echo __("Order");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#filterCriteria\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 124
        echo __("Filter");
        yield "</span></a></li>
            </ul>
            <form id=\"dataSetRssEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.rss.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 126), "rssId" => CoreExtension::getAttribute($this->env, $this->source, ($context["feed"] ?? null), "id", [], "any", false, false, false, 126)]), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 129
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Title");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The title for this Rss");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["title", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["feed"] ?? null), "title", [], "any", false, false, false, 131), ($context["helpText"] ?? null), "", "required"], 131, $context, $this->getSourceContext());
        yield "

                        ";
        // line 133
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Author");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The author for this Rss");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["author", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["feed"] ?? null), "author", [], "any", false, false, false, 135), ($context["helpText"] ?? null)], 135, $context, $this->getSourceContext());
        yield "

                        ";
        // line 137
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Title Column");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a column to be the item title");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["titleColumnId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["feed"] ?? null), "titleColumnId", [], "any", false, false, false, 139), Twig\Extension\CoreExtension::merge([["dataSetColumnId" => null, "heading" => ""]], CoreExtension::getAttribute($this->env, $this->source, ($context["extra"] ?? null), "columns", [], "any", false, false, false, 139)), "dataSetColumnId", "heading", ($context["helpText"] ?? null)], 139, $context, $this->getSourceContext());
        yield "

                        ";
        // line 141
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Summary Column");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a column to be the item summary");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["summaryColumnId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["feed"] ?? null), "summaryColumnId", [], "any", false, false, false, 143), Twig\Extension\CoreExtension::merge([["dataSetColumnId" => null, "heading" => ""]], CoreExtension::getAttribute($this->env, $this->source, ($context["extra"] ?? null), "columns", [], "any", false, false, false, 143)), "dataSetColumnId", "heading", ($context["helpText"] ?? null)], 143, $context, $this->getSourceContext());
        yield "

                        ";
        // line 145
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Content Column");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a column to be the item content");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 147
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["contentColumnId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["feed"] ?? null), "contentColumnId", [], "any", false, false, false, 147), Twig\Extension\CoreExtension::merge([["dataSetColumnId" => null, "heading" => ""]], CoreExtension::getAttribute($this->env, $this->source, ($context["extra"] ?? null), "columns", [], "any", false, false, false, 147)), "dataSetColumnId", "heading", ($context["helpText"] ?? null)], 147, $context, $this->getSourceContext());
        yield "

                        ";
        // line 149
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Published Date Column");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 150
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a column to be the item content. We will try to convert this to a date/time and if we can't we will use the current date/time.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["publishedDateColumnId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["feed"] ?? null), "publishedDateColumnId", [], "any", false, false, false, 151), Twig\Extension\CoreExtension::merge([["dataSetColumnId" => null, "heading" => ""]], CoreExtension::getAttribute($this->env, $this->source, ($context["extra"] ?? null), "dateColumns", [], "any", false, false, false, 151)), "dataSetColumnId", "heading", ($context["helpText"] ?? null)], 151, $context, $this->getSourceContext());
        yield "

                        ";
        // line 153
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Generate new address?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 154
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tick this box if you want to generate a new address for this RSS feed. You might want to do this if you think someone is accessing it unauthorised.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 155
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["regeneratePsk", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 155, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"orderCriteria\">

                        ";
        // line 159
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The DataSet results can be ordered by any column and set below. New fields can be added by selecting the plus icon at the end of the current row. Should a more complicated order be required the advanced checkbox can be selected to provide custom SQL syntax.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 160
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 160, $context, $this->getSourceContext());
        yield "

                        <div id=\"orderClause\">

                        </div>

                        ";
        // line 166
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use advanced order clause?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 167
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Provide a custom clause instead of using the clause builder above.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 168
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["useOrderingClause", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["extra"] ?? null), "useOrderingClause", [], "any", false, false, false, 168), ($context["helpText"] ?? null)], 168, $context, $this->getSourceContext());
        yield "

                        ";
        // line 170
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Order");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 171
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter a SQL clause for how this dataset should be ordered");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 172
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ordering", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["extra"] ?? null), "sort", [], "any", false, false, false, 172), ($context["helpText"] ?? null), "order-clause-field"], 172, $context, $this->getSourceContext());
        yield "

                    </div>
                    <div class=\"tab-pane\" id=\"filterCriteria\">
                        ";
        // line 176
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The DataSet results can be filtered by any column and set below. New fields can be added by selecting the plus icon at the end of the current row. Should a more complicated filter be required the advanced checkbox can be selected to provide custom SQL syntax.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 177
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 177, $context, $this->getSourceContext());
        yield "

                        <div id=\"filterClause\">

                        </div>

                        ";
        // line 183
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use advanced filter clause?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 184
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Provide a custom clause instead of using the clause builder above.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 185
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["useFilteringClause", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["extra"] ?? null), "useFilteringClause", [], "any", false, false, false, 185), ($context["helpText"] ?? null)], 185, $context, $this->getSourceContext());
        yield "

                        ";
        // line 187
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Filter");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter a SQL clause to filter this DataSet.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 189
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["filter", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["extra"] ?? null), "filter", [], "any", false, false, false, 189), ($context["helpText"] ?? null), "filter-clause-field"], 189, $context, $this->getSourceContext());
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
        return "dataset-rss-form-edit.twig";
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
        return array (  423 => 189,  417 => 188,  412 => 187,  406 => 185,  400 => 184,  395 => 183,  385 => 177,  380 => 176,  372 => 172,  366 => 171,  361 => 170,  355 => 168,  349 => 167,  344 => 166,  334 => 160,  329 => 159,  321 => 155,  315 => 154,  310 => 153,  304 => 151,  298 => 150,  293 => 149,  287 => 147,  281 => 146,  276 => 145,  270 => 143,  264 => 142,  259 => 141,  253 => 139,  247 => 138,  242 => 137,  236 => 135,  230 => 134,  225 => 133,  219 => 131,  213 => 130,  208 => 129,  202 => 126,  197 => 124,  193 => 123,  189 => 122,  184 => 119,  180 => 118,  172 => 116,  89 => 38,  81 => 36,  74 => 33,  69 => 32,  65 => 31,  59 => 28,  55 => 27,  50 => 24,  48 => 25,  41 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-rss-form-edit.twig", "/var/www/cms/views/dataset-rss-form-edit.twig");
    }
}
