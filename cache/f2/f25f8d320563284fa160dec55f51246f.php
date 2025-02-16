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

/* dataset-data-form-add.twig */
class __TwigTemplate_1a35dc6f94a943c3d8b69e9d59d0d8d5 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "dataset-data-form-add.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-data-form-add.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Add Data");
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
        echo __("Next");
        yield ", XiboDialogApply(\"#dataSetDataAdd\")
    ";
        // line 33
        echo __("Save");
        yield ", \$(\"#dataSetDataAdd\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetDataAdd\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.data.add", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "getColumn", [], "method", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 41
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "dataSetColumnTypeId", [], "any", false, false, false, 41) == 1)) {
                // line 42
                yield "                        ";
                $context["fieldId"] = ("dataSetColumnId_" . CoreExtension::getAttribute($this->env, $this->source, $context["col"], "dataSetColumnId", [], "any", false, false, false, 42));
                // line 43
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "isRequired", [], "any", false, false, false, 43) == 1)) {
                    // line 44
                    yield "                            ";
                    $context["validation"] = "required";
                    // line 45
                    yield "                        ";
                } else {
                    // line 46
                    yield "                            ";
                    $context["validation"] = "";
                    // line 47
                    yield "                        ";
                }
                // line 48
                yield "
                        ";
                // line 50
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "dataTypeId", [], "any", false, false, false, 50) == 2)) {
                    // line 51
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_number", [($context["fieldId"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 51), "", CoreExtension::getAttribute($this->env, $this->source, $context["col"], "tooltip", [], "any", false, false, false, 51), "", ($context["validation"] ?? null)], 51, $context, $this->getSourceContext());
                    yield "
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 52
$context["col"], "dataTypeId", [], "any", false, false, false, 52) == 3)) {
                    // line 53
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", [($context["fieldId"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 53), "", CoreExtension::getAttribute($this->env, $this->source, $context["col"], "tooltip", [], "any", false, false, false, 53), "", ($context["validation"] ?? null)], 53, $context, $this->getSourceContext());
                    yield "
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 54
$context["col"], "dataTypeId", [], "any", false, false, false, 54) == 5)) {
                    // line 55
                    yield "                            ";
                    $context["selectImage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        echo __("Select an Image");
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 56
                    yield "                            ";
                    $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search")], ["name" => "data-search-term", "value" => "media"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "mediaId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-filter-options", "value" => "{\"type\":\"image\"}"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder", "value" =>                     // line 64
($context["selectImage"] ?? null)]];
                    // line 66
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", [($context["fieldId"] ?? null), "single", CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 66), "", null, "mediaId", "name", CoreExtension::getAttribute($this->env, $this->source, $context["col"], "tooltip", [], "any", false, false, false, 66), "pagedSelect", ($context["validation"] ?? null), "", "", ($context["attributes"] ?? null)], 66, $context, $this->getSourceContext());
                    yield "
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 67
$context["col"], "listContent", [], "any", false, false, false, 67) != "")) {
                    // line 68
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", [($context["fieldId"] ?? null), "single", CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 68), ($context["heading"] ?? null), Twig\Extension\CoreExtension::merge([""], CoreExtension::getAttribute($this->env, $this->source, $context["col"], "listContentArray", [], "method", false, false, false, 68)), "", "", CoreExtension::getAttribute($this->env, $this->source, $context["col"], "tooltip", [], "any", false, false, false, 68), "", ($context["validation"] ?? null)], 68, $context, $this->getSourceContext());
                    yield "
                        ";
                } else {
                    // line 70
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_input", [($context["fieldId"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 70), "", CoreExtension::getAttribute($this->env, $this->source, $context["col"], "tooltip", [], "any", false, false, false, 70), "", ($context["validation"] ?? null)], 70, $context, $this->getSourceContext());
                    yield "
                        ";
                }
                // line 72
                yield "                    ";
            }
            // line 73
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
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
        return "dataset-data-form-add.twig";
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
        return array (  177 => 74,  171 => 73,  168 => 72,  162 => 70,  156 => 68,  154 => 67,  149 => 66,  147 => 64,  145 => 56,  139 => 55,  137 => 54,  132 => 53,  130 => 52,  125 => 51,  122 => 50,  119 => 48,  116 => 47,  113 => 46,  110 => 45,  107 => 44,  104 => 43,  101 => 42,  98 => 41,  94 => 40,  90 => 39,  86 => 37,  82 => 36,  75 => 33,  71 => 32,  66 => 31,  62 => 30,  56 => 27,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-data-form-add.twig", "/var/www/cms/views/dataset-data-form-add.twig");
    }
}
