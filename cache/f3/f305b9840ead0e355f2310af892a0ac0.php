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

/* layout-form-background.twig */
class __TwigTemplate_2e66ecebad590e4c82ef0cf12a4a2969 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-background.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-background.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit Layout");
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
        yield ", \$(\"#layoutEditForm\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "backGroundFormSetup";
        return; yield '';
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"row\">
        <ul class=\"nav nav-tabs nav-fill\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 41
        echo __("General");
        yield "</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"layoutEditForm\" class=\"form-horizontal\" method=\"put\" action=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.edit.background", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 47
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Background Colour");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use the colour picker to select the background colour");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_colorPicker", ["backgroundColor", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "backgroundColor", [], "any", false, false, false, 49), ($context["helpText"] ?? null)], 49, $context, $this->getSourceContext());
        yield "

                        <div class=\"form-group row\">

                            <label class=\"col-sm-2 control-label\">
                                ";
        // line 54
        echo __("Background Image");
        // line 55
        yield "                            </label>

                            <div class=\"col-sm-10\">
                                <div class=\"text-center background-image-add editable\">
                                    <div id=\"bg_not_found_icon\">
                                        <i class=\"fa bg_not_found_icon\"></i>
                                        <div>";
        // line 61
        echo __("No Image set, add from Toolbox or Upload!");
        yield "</div>
                                    </div>

                                    <img id=\"bg_image_image\" data-url=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
        yield "?preview=1&width=200&height=100\" alt=\"";
        echo __("Background thumbnail");
        yield "\" />
                                    <div class=\"background-image-drop\">";
        // line 65
        echo __("Add background image");
        yield "</div>
                                </div>

                                <div class=\"background-image-actions text-center\">
                                    <div class=\"btn-group\">
                                        <button id=\"backgroundUploadButton\" class=\"btn btn-outline-secondary\" type=\"button\" data-add-new-background-url=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        yield "\">
                                            <i class=\"fa fa-upload\"></i>
                                            ";
        // line 72
        echo __("Upload");
        // line 73
        yield "                                        </button>

                                        <button id=\"backgroundRemoveButton\" class=\"btn btn-outline-danger\" type=\"button\">
                                            <i class=\"fa fa-remove\"></i>
                                            ";
        // line 77
        echo __("Remove");
        // line 78
        yield "                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 85
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["backgroundImageId", ($context["backgroundId"] ?? null)], 85, $context, $this->getSourceContext());
        yield "
                        </div>

                        ";
        // line 88
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Resolution");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Change the resolution");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["resolutionId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["resolution"] ?? null), "resolutionId", [], "any", false, false, false, 90), ($context["resolutions"] ?? null), "resolutionId", "resolution", ($context["helpText"] ?? null), "resolution-group"], 90, $context, $this->getSourceContext());
        yield "

                        ";
        // line 92
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layer");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The layering order of the background image (z-index). Advanced use only.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["backgroundzIndex", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "backgroundzIndex", [], "any", false, false, false, 94), ($context["helpText"] ?? null)], 94, $context, $this->getSourceContext());
        yield "

                        ";
        // line 96
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Automatically apply Transitions?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When enabled, the default Transition type and duration will be applied to all widgets on this Layout.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["autoApplyTransitions", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "autoApplyTransitions", [], "any", false, false, false, 98), ($context["helpText"] ?? null)], 98, $context, $this->getSourceContext());
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
        return "layout-form-background.twig";
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
        return array (  232 => 98,  226 => 97,  221 => 96,  215 => 94,  209 => 93,  204 => 92,  198 => 90,  192 => 89,  187 => 88,  181 => 85,  172 => 78,  170 => 77,  164 => 73,  162 => 72,  157 => 70,  149 => 65,  143 => 64,  137 => 61,  129 => 55,  127 => 54,  118 => 49,  112 => 48,  107 => 47,  101 => 44,  95 => 41,  91 => 39,  87 => 38,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-background.twig", "/var/www/cms/views/layout-form-background.twig");
    }
}
