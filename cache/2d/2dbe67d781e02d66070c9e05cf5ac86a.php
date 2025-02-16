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

/* dataset-data-form-edit.twig */
class __TwigTemplate_1b1a17f3206e870318206a2d1c9272b1 extends Template
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
        // line 24
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "dataset-data-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-data-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit Data");
        return; yield '';
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        echo __("Delete");
        yield ", XiboSwapDialog(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.data.delete.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 32), "rowId" => CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "id", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\")
    ";
        // line 33
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 34
        echo __("Save");
        yield ", \$(\"#dataSetEditData\").submit()
";
        return; yield '';
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetEditData\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.data.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 40), "rowId" => CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "id", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "getColumn", [], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 42
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "dataSetColumnTypeId", [], "any", false, false, false, 42) == 1)) {
                // line 43
                yield "                        ";
                $context["fieldId"] = ("dataSetColumnId_" . CoreExtension::getAttribute($this->env, $this->source, $context["col"], "dataSetColumnId", [], "any", false, false, false, 43));
                // line 44
                yield "                        ";
                $context["heading"] = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 44), [], "any", false, false, false, 44);
                // line 45
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "isRequired", [], "any", false, false, false, 45) == 1)) {
                    // line 46
                    yield "                            ";
                    $context["validation"] = "required";
                    // line 47
                    yield "                        ";
                } else {
                    // line 48
                    yield "                            ";
                    $context["validation"] = "";
                    // line 49
                    yield "                        ";
                }
                // line 50
                yield "
                        ";
                // line 52
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "dataTypeId", [], "any", false, false, false, 52) == 2)) {
                    // line 53
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_number", [($context["fieldId"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 53), ($context["heading"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["col"], "tooltip", [], "any", false, false, false, 53), "", ($context["validation"] ?? null)], 53, $context, $this->getSourceContext());
                    yield "
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 54
$context["col"], "dataTypeId", [], "any", false, false, false, 54) == 3)) {
                    // line 55
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", [($context["fieldId"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 55), ($context["heading"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["col"], "tooltip", [], "any", false, false, false, 55), "", ($context["validation"] ?? null)], 55, $context, $this->getSourceContext());
                    yield "
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 56
$context["col"], "dataTypeId", [], "any", false, false, false, 56) == 5)) {
                    // line 57
                    yield "                            ";
                    $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search")], ["name" => "data-search-term", "value" => "media"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "mediaId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-filter-options", "value" => "{\"type\":\"image\"}"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder", "value" => "Select an Image"]];
                    // line 67
                    yield "                            ";
                    $context["images"] = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "__images", [], "any", false, false, false, 67);
                    // line 68
                    yield "                            ";
                    $context["images"] = CoreExtension::getAttribute($this->env, $this->source, ($context["images"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["col"], "dataSetColumnId", [], "any", false, false, false, 68), [], "any", false, false, false, 68);
                    // line 69
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", [($context["fieldId"] ?? null), "single", CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 69), ($context["heading"] ?? null), [($context["images"] ?? null)], "mediaId", "name", CoreExtension::getAttribute($this->env, $this->source, $context["col"], "tooltip", [], "any", false, false, false, 69), "pagedSelect", ($context["validation"] ?? null), "", "", ($context["attributes"] ?? null)], 69, $context, $this->getSourceContext());
                    yield "
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 70
$context["col"], "listContent", [], "any", false, false, false, 70) != "")) {
                    // line 71
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", [($context["fieldId"] ?? null), "single", CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 71), ($context["heading"] ?? null), Twig\Extension\CoreExtension::merge([""], CoreExtension::getAttribute($this->env, $this->source, $context["col"], "listContentArray", [], "method", false, false, false, 71)), "", "", CoreExtension::getAttribute($this->env, $this->source, $context["col"], "tooltip", [], "any", false, false, false, 71), "", ($context["validation"] ?? null)], 71, $context, $this->getSourceContext());
                    yield "
                        ";
                } else {
                    // line 73
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_input", [($context["fieldId"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, false, 73), ($context["heading"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["col"], "tooltip", [], "any", false, false, false, 73), "", ($context["validation"] ?? null)], 73, $context, $this->getSourceContext());
                    yield "
                        ";
                }
                // line 75
                yield "                    ";
            }
            // line 76
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        return "dataset-data-form-edit.twig";
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
        return array (  181 => 77,  175 => 76,  172 => 75,  166 => 73,  160 => 71,  158 => 70,  153 => 69,  150 => 68,  147 => 67,  144 => 57,  142 => 56,  137 => 55,  135 => 54,  130 => 53,  127 => 52,  124 => 50,  121 => 49,  118 => 48,  115 => 47,  112 => 46,  109 => 45,  106 => 44,  103 => 43,  100 => 42,  96 => 41,  92 => 40,  88 => 38,  84 => 37,  77 => 34,  73 => 33,  66 => 32,  62 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-data-form-edit.twig", "/var/www/cms/views/dataset-data-form-edit.twig");
    }
}
