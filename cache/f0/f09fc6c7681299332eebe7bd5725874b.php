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

/* dataset-column-form-add.twig */
class __TwigTemplate_8aa8aa138232690323bbc377acf9f8b1 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "dataset-column-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-column-form-add.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add Column");
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
        yield ", \$(\"#dataSetColumnAddForm\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "dataSetColumnFormOpen";
        return; yield '';
    }

    // line 38
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "[
    {
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"init\",
      \"operation\": \"equals\", \"value\": \"1\",
      \"actions\": { \".formula\": { \"display\": \"none\" }, \".listContent\": { \"display\": \"\" }, \".remoteField\": { \"display\": \"none\" }, \".helperFields\": { \"display\": \"\" } }
    },{
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"change\",
      \"operation\": \"equals\", \"value\": \"1\",
      \"actions\": { \".formula\": { \"display\": \"none\" }, \".listContent\": { \"display\": \"\" }, \".remoteField\": { \"display\": \"none\" }, \".helperFields\": { \"display\": \"\" } }
    },
    {
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"init\",
      \"operation\": \"equals\", \"value\": \"2\",
      \"actions\": { \".formula\": { \"display\": \"\" }, \".listContent\": { \"display\": \"none\" }, \".remoteField\": { \"display\": \"none\" }, \".helperFields\": { \"display\": \"none\" } }
    },{
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"change\",
      \"operation\": \"equals\", \"value\": \"2\",
      \"actions\": { \".formula\": { \"display\": \"\" }, \".listContent\": { \"display\": \"none\" }, \".remoteField\": { \"display\": \"none\" }, \".helperFields\": { \"display\": \"none\" } }
    },
    {
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"init\",
      \"operation\": \"equals\", \"value\": \"3\",
      \"actions\": { \".formula\": { \"display\": \"none\" }, \".listContent\": { \"display\": \"none\" }, \".remoteField\": { \"display\": \"\" }, \".helperFields\": { \"display\": \"none\" } }
    },{
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"change\",
      \"operation\": \"equals\", \"value\": \"3\",
      \"actions\": { \".formula\": { \"display\": \"none\" }, \".listContent\": { \"display\": \"none\" }, \".remoteField\": { \"display\": \"\" }, \".helperFields\": { \"display\": \"none\" } }
    }
]
";
        return; yield '';
    }

    // line 70
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetColumnAddForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.column.add", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\">
                ";
        // line 74
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Heading");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The heading for this Column. You cannot use a column name with spaces.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["heading", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 76, $context, $this->getSourceContext());
        yield "

                ";
        // line 78
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Column Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the Column Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dataSetColumnTypeId", "single", ($context["title"] ?? null), "", ($context["dataSetColumnTypes"] ?? null), "dataSetColumnTypeId", "dataSetColumnType", ($context["helpText"] ?? null)], 80, $context, $this->getSourceContext());
        yield "

                ";
        // line 82
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Data Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The DataType of the Intended Data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dataTypeId", "single", ($context["title"] ?? null), "", ($context["dataTypes"] ?? null), "dataTypeId", "dataType", ($context["helpText"] ?? null)], 84, $context, $this->getSourceContext());
        yield "

                ";
        // line 86
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("List Content");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A comma separated list of items to present in a combo box");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["listContent", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "listContent"], 88, $context, $this->getSourceContext());
        yield "

                ";
        // line 90
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Remote Data Path");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "sourceId", [], "any", false, false, false, 91) == 1)) {
            // line 92
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Give the JSON-path in the remote data for the value that you want to fill this column. This path should be relative to the DataRoot configured on the DataSet.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 93
            yield "                ";
        } else {
            // line 94
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Provide Column number relative to the spreadsheet, numeration starts from 0 ie to get values from Column A from spreadsheet to this column enter 0");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 95
            yield "                ";
        }
        // line 96
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["remoteField", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSetColumn"] ?? null), "remoteField", [], "any", false, false, false, 96), ($context["helpText"] ?? null), "remoteField"], 96, $context, $this->getSourceContext());
        yield "

                ";
        // line 98
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Column Order");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The order this column should be displayed in when entering data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["columnOrder", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 100, $context, $this->getSourceContext());
        yield "

                ";
        // line 102
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tooltip");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optional message to be displayed under the input when entering data for this column");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["tooltip", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "helperFields"], 104, $context, $this->getSourceContext());
        yield "

                ";
        // line 106
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Formula");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enter a MySQL statement suitable to use in a 'SELECT' statement");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["formula", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "formula"], 108, $context, $this->getSourceContext());
        yield "

                ";
        // line 110
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Filter?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show as a filter option on the Data Entry Page?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["showFilter", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 112, $context, $this->getSourceContext());
        yield "

                ";
        // line 114
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Date Format");
            // line 115
            yield "                    <span class=\"fa fa-info-circle date-format-table\"
                          data-toggle=\"popover\"
                          data-trigger=\"hover\">
                    </span>
                ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enter a PHP date format to parse the dates from the source.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["dateFormat", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSetColumn"] ?? null), "dateFormat", [], "any", false, false, false, 121), ($context["helpText"] ?? null), "dateFormat"], 121, $context, $this->getSourceContext());
        yield "

                ";
        // line 123
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sort?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 124
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable sorting on the Data Entry Page? We recommend that the number of sortable columns is kept to a minimum.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["showSort", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 125, $context, $this->getSourceContext());
        yield "

                ";
        // line 127
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Required?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should the value for this Column be required?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isRequired", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "helperFields"], 129, $context, $this->getSourceContext());
        yield "

                ";
        // line 131
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Two substitutions are available for Formula columns: [DisplayId] and [DisplayGeoLocation]. They will be substituted at run time with the Display ID / Display Geo Location (MySQL GEOMETRY).");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        yield "                ";
        $context["message2"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Client side formula is also available for Formula columns : \$dateFormat(columnName,format,language), for example \$dateFormat(date,l,de), would return textual representation of a day in German language from the full date in date column");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        yield "
                ";
        // line 134
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null), "alert alert-info formula"], 134, $context, $this->getSourceContext());
        yield "
                ";
        // line 135
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message2"] ?? null), "alert alert-info formula"], 135, $context, $this->getSourceContext());
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
        return "dataset-column-form-add.twig";
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
        return array (  380 => 135,  376 => 134,  373 => 133,  367 => 132,  362 => 131,  356 => 129,  350 => 128,  345 => 127,  339 => 125,  333 => 124,  328 => 123,  322 => 121,  316 => 120,  308 => 115,  305 => 114,  299 => 112,  293 => 111,  288 => 110,  282 => 108,  276 => 107,  271 => 106,  265 => 104,  259 => 103,  254 => 102,  248 => 100,  242 => 99,  237 => 98,  231 => 96,  228 => 95,  222 => 94,  219 => 93,  213 => 92,  210 => 91,  205 => 90,  199 => 88,  193 => 87,  188 => 86,  182 => 84,  176 => 83,  171 => 82,  165 => 80,  159 => 79,  154 => 78,  148 => 76,  142 => 75,  137 => 74,  133 => 73,  129 => 71,  125 => 70,  88 => 38,  80 => 36,  73 => 33,  68 => 32,  64 => 31,  58 => 28,  54 => 27,  49 => 24,  47 => 25,  40 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-column-form-add.twig", "/var/www/cms/views/dataset-column-form-add.twig");
    }
}
