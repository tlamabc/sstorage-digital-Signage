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

/* dataset-rss-form-add.twig */
class __TwigTemplate_76c43fd08eece4446a4c742a8061de06 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "dataset-rss-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-rss-form-add.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add RSS");
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
        yield ", \$(\"#dataSetRssAddForm\").submit()
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
            <form id=\"dataSetRssAddForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.rss.add", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 126)]), "html", null, true);
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
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["title", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 131, $context, $this->getSourceContext());
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
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["author", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 135, $context, $this->getSourceContext());
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
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["titleColumnId", "single", ($context["title"] ?? null), ($context["titleColumnId"] ?? null), Twig\Extension\CoreExtension::merge([["dataSetColumnId" => null, "heading" => ""]], CoreExtension::getAttribute($this->env, $this->source, ($context["extra"] ?? null), "columns", [], "any", false, false, false, 139)), "dataSetColumnId", "heading", ($context["helpText"] ?? null)], 139, $context, $this->getSourceContext());
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
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["summaryColumnId", "single", ($context["title"] ?? null), ($context["summaryColumnId"] ?? null), Twig\Extension\CoreExtension::merge([["dataSetColumnId" => null, "heading" => ""]], CoreExtension::getAttribute($this->env, $this->source, ($context["extra"] ?? null), "columns", [], "any", false, false, false, 143)), "dataSetColumnId", "heading", ($context["helpText"] ?? null)], 143, $context, $this->getSourceContext());
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
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["contentColumnId", "single", ($context["title"] ?? null), ($context["contentColumnId"] ?? null), Twig\Extension\CoreExtension::merge([["dataSetColumnId" => null, "heading" => ""]], CoreExtension::getAttribute($this->env, $this->source, ($context["extra"] ?? null), "columns", [], "any", false, false, false, 147)), "dataSetColumnId", "heading", ($context["helpText"] ?? null)], 147, $context, $this->getSourceContext());
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
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["publishedDateColumn", "single", ($context["title"] ?? null), ($context["publishedDateColumn"] ?? null), Twig\Extension\CoreExtension::merge([["dataSetColumnId" => null, "heading" => ""]], CoreExtension::getAttribute($this->env, $this->source, ($context["extra"] ?? null), "dateColumns", [], "any", false, false, false, 151)), "dataSetColumnId", "heading", ($context["helpText"] ?? null)], 151, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"orderCriteria\">

                        ";
        // line 155
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The DataSet results can be ordered by any column and set below. New fields can be added by selecting the plus icon at the end of the current row. Should a more complicated order be required the advanced checkbox can be selected to provide custom SQL syntax.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 156, $context, $this->getSourceContext());
        yield "

                        <div id=\"orderClause\">

                        </div>

                        ";
        // line 162
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use advanced order clause?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 163
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Provide a custom clause instead of using the clause builder above.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 164
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["useOrderingClause", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "getOption", ["useOrderingClause", 0], "method", false, false, false, 164), ($context["helpText"] ?? null)], 164, $context, $this->getSourceContext());
        yield "

                        ";
        // line 166
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Order");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 167
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter a SQL clause for how this dataset should be ordered");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 168
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ordering", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "getOption", ["ordering"], "method", false, false, false, 168), ($context["helpText"] ?? null), "order-clause-field"], 168, $context, $this->getSourceContext());
        yield "

                    </div>
                    <div class=\"tab-pane\" id=\"filterCriteria\">
                        ";
        // line 172
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The DataSet results can be filtered by any column and set below. New fields can be added by selecting the plus icon at the end of the current row. Should a more complicated filter be required the advanced checkbox can be selected to provide custom SQL syntax.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 173
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 173, $context, $this->getSourceContext());
        yield "

                        <div id=\"filterClause\">

                        </div>

                        ";
        // line 179
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use advanced filter clause?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 180
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Provide a custom clause instead of using the clause builder above.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 181
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["useFilteringClause", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "getOption", ["useFilteringClause", 0], "method", false, false, false, 181), ($context["helpText"] ?? null)], 181, $context, $this->getSourceContext());
        yield "

                        ";
        // line 183
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Filter");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 184
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter a SQL clause to filter this DataSet.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 185
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["filter", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "getOption", ["filter"], "method", false, false, false, 185), ($context["helpText"] ?? null), "filter-clause-field"], 185, $context, $this->getSourceContext());
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
        return "dataset-rss-form-add.twig";
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
        return array (  406 => 185,  400 => 184,  395 => 183,  389 => 181,  383 => 180,  378 => 179,  368 => 173,  363 => 172,  355 => 168,  349 => 167,  344 => 166,  338 => 164,  332 => 163,  327 => 162,  317 => 156,  312 => 155,  304 => 151,  298 => 150,  293 => 149,  287 => 147,  281 => 146,  276 => 145,  270 => 143,  264 => 142,  259 => 141,  253 => 139,  247 => 138,  242 => 137,  236 => 135,  230 => 134,  225 => 133,  219 => 131,  213 => 130,  208 => 129,  202 => 126,  197 => 124,  193 => 123,  189 => 122,  184 => 119,  180 => 118,  172 => 116,  89 => 38,  81 => 36,  74 => 33,  69 => 32,  65 => 31,  59 => 28,  55 => 27,  50 => 24,  48 => 25,  41 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-rss-form-add.twig", "/var/www/cms/views/dataset-rss-form-add.twig");
    }
}
