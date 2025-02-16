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

/* module-form-audio.twig */
class __TwigTemplate_76a8e182a696bbe48eb9455985636efd extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "module-form-audio.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "module-form-audio.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "name", [], "any", false, false, false, 28);
        // line 29
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Audio for %name%"), array("%name%" => ($context["name"] ?? null), ));
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
        yield ", \$(\"#widgetAudioForm\").submit()
";
        return; yield '';
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "
    ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "countAudio", [], "any", false, false, false, 39) > 0)) {
            // line 40
            yield "        ";
            $context["audio"] = (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "audio", [], "any", false, false, false, 40)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null);
            // line 41
            yield "        ";
            $context["mediaId"] = CoreExtension::getAttribute($this->env, $this->source, ($context["audio"] ?? null), "mediaId", [], "any", false, false, false, 41);
            // line 42
            yield "        ";
            $context["volume"] = CoreExtension::getAttribute($this->env, $this->source, ($context["audio"] ?? null), "volume", [], "any", false, false, false, 42);
            // line 43
            yield "        ";
            $context["loop"] = CoreExtension::getAttribute($this->env, $this->source, ($context["audio"] ?? null), "loop", [], "any", false, false, false, 43);
            // line 44
            yield "    ";
        } else {
            // line 45
            yield "        ";
            $context["mediaId"] = 0;
            // line 46
            yield "        ";
            $context["volume"] = 100;
            // line 47
            yield "        ";
            $context["loop"] = 0;
            // line 48
            yield "    ";
        }
        // line 49
        yield "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"widgetAudioForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.audio", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "widgetId", [], "any", false, false, false, 52)]), "html", null, true);
        yield "\">

                ";
        // line 54
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Audio Media");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the audio file that should be played when this Widget starts.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["mediaId", "single", ($context["title"] ?? null), ($context["mediaId"] ?? null), Twig\Extension\CoreExtension::merge([["mediaId" => 0, "name" => ""]], ($context["media"] ?? null)), "mediaId", "name", ($context["helpText"] ?? null)], 56, $context, $this->getSourceContext());
        yield "

                ";
        // line 58
        if ( !($context["isAudioAvailable"] ?? null)) {
            // line 59
            yield "                    ";
            $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The currently selected audio has been retired, please select a new item or cancel to keep the current one.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null), "alert alert-danger"], 60, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 62
        yield "
                ";
        // line 63
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Volume");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enter the volume percentage for this audio to play at.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["volume", ($context["title"] ?? null), ($context["volume"] ?? null), ($context["helpText"] ?? null)], 65, $context, $this->getSourceContext());
        yield "

                ";
        // line 67
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Loop?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should the audio loop if it finishes before the widget has finished?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["loop", ($context["title"] ?? null), ($context["loop"] ?? null), ($context["helpText"] ?? null), "loop-fields"], 69, $context, $this->getSourceContext());
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
        return "module-form-audio.twig";
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
        return array (  189 => 69,  183 => 68,  178 => 67,  172 => 65,  166 => 64,  161 => 63,  158 => 62,  152 => 60,  146 => 59,  144 => 58,  138 => 56,  132 => 55,  127 => 54,  122 => 52,  117 => 49,  114 => 48,  111 => 47,  108 => 46,  105 => 45,  102 => 44,  99 => 43,  96 => 42,  93 => 41,  90 => 40,  88 => 39,  85 => 38,  81 => 37,  74 => 34,  69 => 33,  65 => 32,  59 => 29,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "module-form-audio.twig", "/var/www/cms/views/module-form-audio.twig");
    }
}
