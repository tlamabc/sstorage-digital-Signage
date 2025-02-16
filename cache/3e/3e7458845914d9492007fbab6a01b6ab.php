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

/* playlist-dashboard-spots.twig */
class __TwigTemplate_30e45a61917d8ecde29d3cebb5b8e156 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("form-base.twig", "playlist-dashboard-spots.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "    ";
        if ((($context["spotsFound"] ?? null) <= 0)) {
            // line 27
            yield "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"alert alert-warning\">
                    ";
            // line 30
            echo __("This Playlist does not have any Spots for you to manage. Please choose another.");
            // line 31
            yield "                </div>
            </div>
        </div>
    ";
        }
        // line 35
        yield "
    ";
        // line 36
        if ((($context["spotsFound"] ?? null) > 0)) {
            // line 37
            yield "        <div class=\"widget\">
            <div class=\"widget-title\">
                <h3>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "name", [], "any", false, false, false, 39), "html", null, true);
            yield " <small>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["spotsFound"] ?? null), "html", null, true);
            yield " ";
            echo __("Spots");
            yield "</small></h3>
            </div>
            <div class=\"widget-body\">

                ";
            // line 43
            $context["widgetLength"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "widgets", [], "any", false, false, false, 43));
            // line 44
            yield "                ";
            $context["remaining"] = (($context["spotsFound"] ?? null) - ($context["widgetLength"] ?? null));
            // line 45
            yield "
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "widgets", [], "any", false, false, false, 46));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 47
                yield "
                    <div class=\"row\">
                        <div class=\"col-md-1\">
                            <span class=\"row-title\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50), "html", null, true);
                yield "</span>
                        </div>
                        <div class=\"col-md-2\">
                            ";
                // line 53
                if (CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["viewble"], "method", false, false, false, 53)) {
                    // line 54
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 54) == "image")) {
                        // line 55
                        yield "                                    ";
                        $context["downloadUrl"] = $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getPrimaryMediaId", [], "method", false, false, false, 55)]);
                        // line 56
                        yield "                                    ";
                        $context["thumbnailUrl"] = $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.thumbnail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getPrimaryMediaId", [], "method", false, false, false, 56)]);
                        // line 57
                        yield "                                    <a class=\"img-replace\" data-toggle=\"lightbox\" data-type=\"image\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["downloadUrl"] ?? null), "html", null, true);
                        yield "?preview=1\">
                                        <img src='";
                        // line 58
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["thumbnailUrl"] ?? null), "html", null, true);
                        yield "' style='max-height: 50px; max-width: 50px;' alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thumbnail"), "html", null, true);
                        yield "\"/>
                                    </a>
                                ";
                    } else {
                        // line 61
                        yield "                                    <i title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["name"], "method", false, false, false, 61), "html", null, true);
                        yield "\" class=\"fa-2x ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["moduleIcon"], "method", false, false, false, 61), "html", null, true);
                        yield "\" style=\"height: 50px; max-width: 50px;\"></i>
                                ";
                    }
                    // line 63
                    yield "                            ";
                }
                // line 64
                yield "                        </div>
                        <div class=\"col-md-8\"
                             data-button-type=\"replace\"
                             data-playlist-id=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "playlistId", [], "any", false, false, false, 67), "html", null, true);
                yield "\"
                             data-widget-id=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "widgetId", [], "any", false, false, false, 68), "html", null, true);
                yield "\"
                             data-widget-name=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["name"], "method", false, false, false, 69), "html", null, true);
                yield "\"
                             data-widget-preview=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
                yield "?preview=1\"
                            ";
                // line 71
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["regionSpecific"], "method", false, false, false, 71) == 0)) {
                    // line 72
                    yield "                             data-media-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getPrimaryMediaId", [], "method", false, false, false, 72), "html", null, true);
                    yield "\"
                            ";
                }
                // line 74
                yield "                            ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["deletable"], "method", false, false, false, 74) == 1) && CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playlist.modify"], "method", false, false, false, 74)) && (CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["regionSpecific"], "method", false, false, false, 74) == 0))) {
                    // line 75
                    yield "                             data-widget-del=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.module.widget.delete.form", ["id" => ":id"]), "html", null, true);
                    yield "\"
                            ";
                }
                // line 77
                yield "                             data-feature-enabled=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playlist.modify"], "method", false, false, false, 77), "html", null, true);
                yield "\"
                        >

                            ";
                // line 80
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["regionSpecific"], "method", false, false, false, 80) == 0) && CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["editable"], "method", false, false, false, 80))) {
                    // line 81
                    yield "                                ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["viewble"], "method", false, false, false, 81)) {
                        // line 82
                        yield "                                    <button class=\"btn btn-block disabled\">
                                        <i class=\"fa fa-lock fa-lg\"></i>
                                    </button>
                                ";
                    } elseif ( !CoreExtension::getAttribute($this->env, $this->source,                     // line 85
$context["widget"], "getUnmatchedProperty", ["editable"], "method", false, false, false, 85)) {
                        // line 86
                        yield "                                    <button class=\"btn btn-block disabled\">
                                        ";
                        // line 87
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["name"], "method", false, false, false, 87), "html", null, true);
                        yield " <i class=\"fa fa-lock fa-lg\"></i>
                                    </button>
                                ";
                    } else {
                        // line 90
                        yield "                                    <button class=\"btn btn-block btn-warning spot-action-button\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["name"], "method", false, false, false, 90), "html", null, true);
                        yield " </button>
                                ";
                    }
                    // line 92
                    yield "                            ";
                } else {
                    // line 93
                    yield "                                <button class=\"btn btn-block btn-white\" disabled>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["name"], "method", false, false, false, 93), "html", null, true);
                    yield " - ";
                    echo __("Locked");
                    yield "</button>
                            ";
                }
                // line 95
                yield "                        </div>
                        <div class=\"col-md-1\">
                            ";
                // line 97
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["deletable"], "method", false, false, false, 97) == 1) && CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playlist.modify"], "method", false, false, false, 97)) && (CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "getUnmatchedProperty", ["regionSpecific"], "method", false, false, false, 97) == 0))) {
                    // line 98
                    yield "                                <a class=\"XiboFormButton btns\" title=\"";
                    echo __("Delete");
                    yield "\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.module.widget.delete.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "widgetId", [], "any", false, false, false, 98)]), "html", null, true);
                    yield "\">
                                    <i class=\"fa fa-lg fa-trash\" aria-hidden=\"true\" style=\"padding:8px 0 8px; color:#d9534f;\"></i>
                                </a>
                            ";
                }
                // line 102
                yield "                        </div>
                    </div>

                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            yield "
                ";
            // line 107
            if ((($context["remaining"] ?? null) > 0)) {
                // line 108
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["remaining"] ?? null) - 1)));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 109
                    yield "
                        <div class=\"row\">
                            <div class=\"col-md-1\">
                                <span class=\"row-title\">";
                    // line 112
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 112) + ($context["widgetLength"] ?? null)), "html", null, true);
                    yield "</span>
                            </div>
                            <div class=\"col-md-2\">
                            </div>
                            <div class=\"col-md-8\"
                                 data-button-type=\"add\"
                                 data-widget-id=\"\"
                                 data-playlist-id=\"";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "playlistId", [], "any", false, false, false, 119), "html", null, true);
                    yield "\"
                                 data-widget-preview=\"";
                    // line 120
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
                    yield "?preview=1\"
                                 data-widget-del=\"";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.module.widget.delete.form", ["id" => ":id"]), "html", null, true);
                    yield "\"
                                 data-feature-enabled=\"";
                    // line 122
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playlist.modify"], "method", false, false, false, 122), "html", null, true);
                    yield "\">
                                ";
                    // line 123
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 123)) {
                        // line 124
                        yield "                                    <button class=\"btn btn-block btn-success spot-action-button\">";
                        echo __("Add");
                        yield "</button>
                                ";
                    } else {
                        // line 126
                        yield "                                    <button class=\"btn btn-block btn-white\" disabled>";
                        echo __("Empty");
                        yield "</button>
                                ";
                    }
                    // line 128
                    yield "                            </div>

                            <div class=\"col-md-1 delete-widget\">
                            </div>
                        </div>

                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                yield "                ";
            }
            // line 136
            yield "
            </div>
        </div>
    ";
        }
        // line 140
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "playlist-dashboard-spots.twig";
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
        return array (  371 => 140,  365 => 136,  362 => 135,  342 => 128,  336 => 126,  330 => 124,  328 => 123,  324 => 122,  320 => 121,  316 => 120,  312 => 119,  302 => 112,  297 => 109,  279 => 108,  277 => 107,  274 => 106,  257 => 102,  247 => 98,  245 => 97,  241 => 95,  233 => 93,  230 => 92,  224 => 90,  218 => 87,  215 => 86,  213 => 85,  208 => 82,  205 => 81,  203 => 80,  196 => 77,  190 => 75,  187 => 74,  181 => 72,  179 => 71,  175 => 70,  171 => 69,  167 => 68,  163 => 67,  158 => 64,  155 => 63,  147 => 61,  139 => 58,  134 => 57,  131 => 56,  128 => 55,  125 => 54,  123 => 53,  117 => 50,  112 => 47,  95 => 46,  92 => 45,  89 => 44,  87 => 43,  76 => 39,  72 => 37,  70 => 36,  67 => 35,  61 => 31,  59 => 30,  54 => 27,  51 => 26,  47 => 25,  36 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-dashboard-spots.twig", "/var/www/cms/views/playlist-dashboard-spots.twig");
    }
}
