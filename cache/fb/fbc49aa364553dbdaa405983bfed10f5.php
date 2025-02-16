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

/* layout-page-grid-widgetlist.twig */
class __TwigTemplate_1fd67e0d0a9bdf77d7928097bb13b28d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["regions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 2
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["region"], "name", [], "any", false, false, false, 2), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["region"], "width", [], "any", false, false, false, 2), "html", null, true);
            yield " x ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["region"], "height", [], "any", false, false, false, 2), "html", null, true);
            yield " [";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["region"], "top", [], "any", false, false, false, 2), "html", null, true);
            yield ",";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["region"], "left", [], "any", false, false, false, 2), "html", null, true);
            yield "]
    <p>";
            // line 3
            echo __("Widgets that have been Published will be displayed below");
            yield "</p>
    ";
            // line 4
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["region"], "regionPlaylist", [], "any", false, false, false, 4), "widgets", [], "any", false, false, false, 4)) > 0)) {
                // line 5
                yield "    <table class=\"table table-bordered\">
        <thead>
            <th>";
                // line 7
                echo __("Playlist");
                yield "</th>
            <th>";
                // line 8
                echo __("Name");
                yield "</th>
            <th>";
                // line 9
                echo __("Type");
                yield "</th>
            <th>";
                // line 10
                echo __("Duration");
                yield "</th>
        </thead>
        <tbody>
        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["region"], "regionPlaylist", [], "any", false, false, false, 13), "widgets", [], "any", false, false, false, 13), 0, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                    // line 14
                    yield "            <tr>
                <td>";
                    // line 15
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["region"], "regionPlaylist", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
                    yield "</td>
                <td>";
                    // line 16
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "name", [], "any", false, false, false, 16), "html", null, true);
                    yield "</td>
                <td>";
                    // line 17
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "moduleName", [], "any", false, false, false, 17), "html", null, true);
                    yield "</td>
                <td>";
                    // line 18
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "calculatedDuration", [], "any", false, false, false, 18), "html", null, true);
                    yield "</td>
            </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                yield "        </tbody>
    </table>
        ";
                // line 23
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["region"], "regionPlaylist", [], "any", false, false, false, 23), "widgets", [], "any", false, false, false, 23)) > 10)) {
                    // line 24
                    yield "            <p>";
                    echo __("This Playlist has more than 10 widgets. The first ten widgets are shown as they appear");
                    yield "</p>
        ";
                }
                // line 26
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout-page-grid-widgetlist.twig";
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
        return array (  123 => 26,  117 => 24,  115 => 23,  111 => 21,  102 => 18,  98 => 17,  94 => 16,  90 => 15,  87 => 14,  83 => 13,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  61 => 5,  59 => 4,  55 => 3,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-page-grid-widgetlist.twig", "/var/www/cms/views/layout-page-grid-widgetlist.twig");
    }
}
