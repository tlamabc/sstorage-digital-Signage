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

/* displaygroup-form-layouts.twig */
class __TwigTemplate_a19e681d6f11a2fa4e83a9036ab91f60 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displaygroup-form-layouts.twig", 25)->unwrap();
        // line 26
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "displaygroup-form-layouts.twig", 26)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "displaygroup-form-layouts.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        echo __("Assign a Layout");
        return; yield '';
    }

    // line 32
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 34
        echo __("Save");
        yield ", forms.layoutAssignSubmit()
";
        return; yield '';
    }

    // line 37
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "forms.layoutFormCallBack";
        return; yield '';
    }

    // line 39
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"alert alert-warning\">
                ";
        // line 43
        echo __("Assigning a Layout to a Display/DisplayGroup does NOT schedule that Layout to be shown. Please use the Schedule to show Layouts.");
        // line 44
        yield "            </div>
            <div id=\"FileAssociationsAssign\" class=\"card p-3 mb-3 bg-light\" data-url=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.assign.layout", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroupId", [], "any", false, false, false, 45)]), "html", null, true);
        yield "\">
                <div>
                    <ul id=\"FileAssociationsSortable\">
                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            yield "                        <li data-layout-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "layoutId", [], "any", false, false, false, 49), "html", null, true);
            yield "\" class=\"btn btn-sm btn-white\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "layout", [], "any", false, false, false, 49), "html", null, true);
            yield "<span class=\"fa fa-minus\"></span></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"XiboGrid\" id=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
                <div class=\"FilterDiv card-body\">
                    <form onsubmit=\"false\">

                    </form>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"layoutAssignments\" data-url=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        yield "\" class=\"table table-striped\" data-state-preference-name=\"campaignLayoutAssignGrid\">
                        <thead>
                        <tr>
                            <th>";
        // line 68
        echo __("Name");
        yield "</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
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
        return "displaygroup-form-layouts.twig";
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
        return array (  149 => 68,  143 => 65,  133 => 58,  124 => 51,  113 => 49,  109 => 48,  103 => 45,  100 => 44,  98 => 43,  93 => 40,  89 => 39,  81 => 37,  74 => 34,  69 => 33,  65 => 32,  59 => 29,  55 => 28,  50 => 24,  48 => 26,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "displaygroup-form-layouts.twig", "/var/www/cms/views/displaygroup-form-layouts.twig");
    }
}
