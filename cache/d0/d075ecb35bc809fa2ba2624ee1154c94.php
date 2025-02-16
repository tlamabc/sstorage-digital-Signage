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

/* library-form-uploadFromUrl.twig */
class __TwigTemplate_c8c26c021cb1fe3031bb80d1f35ece31 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "library-form-uploadFromUrl.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "library-form-uploadFromUrl.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add Media via URL");
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
        yield ", \$(\"#libraryUploadFromurl_form\").submit()
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
            <form id=\"libraryUploadFromurl_form\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.uploadFromUrl"), "html", null, true);
        yield "\">
                <div class=\"card p-3 mb-3 bg-light\">
                    ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["uploadSizeMessage"] ?? null), "html", null, true);
        yield "
                </div>

                ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 44)) {
            // line 45
            yield "                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\">";
            // line 46
            echo __("Folder");
            yield "</label>
                    <div class=\"col-sm-10\">
                        <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 48
            echo __("Select Folder");
            yield "</button>
                        <span id=\"selectedFormFolder\"></span>
                    </div>
                </div>
                ";
            // line 52
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId"], 52, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 54
        yield "
                ";
        // line 55
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("URL");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please provide the remote URL to the file");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["url", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 57, $context, $this->getSourceContext());
        yield "

                ";
        // line 59
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optional Media name, if left empty it will default to the file name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["optionalName", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 61, $context, $this->getSourceContext());
        yield "

                ";
        // line 63
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable Media Stats Collection?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable the collection of Proof of Play statistics for this Media Item. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "
                ";
        // line 66
        $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Off");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                ";
        $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("On");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                ";
        $context["inheritOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Inherit");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield "                ";
        $context["options"] = [["id" => "Off", "value" =>         // line 70
($context["offOption"] ?? null)], ["id" => "On", "value" =>         // line 71
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>         // line 72
($context["inheritOption"] ?? null)]];
        // line 74
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["enableStat", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 74), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 74, $context, $this->getSourceContext());
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
        return "library-form-uploadFromUrl.twig";
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
        return array (  193 => 74,  191 => 72,  190 => 71,  189 => 70,  187 => 69,  181 => 68,  175 => 67,  170 => 66,  167 => 65,  161 => 64,  156 => 63,  150 => 61,  144 => 60,  139 => 59,  133 => 57,  127 => 56,  122 => 55,  119 => 54,  114 => 52,  107 => 48,  102 => 46,  99 => 45,  97 => 44,  91 => 41,  86 => 39,  82 => 37,  78 => 36,  71 => 33,  66 => 32,  62 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-form-uploadFromUrl.twig", "/var/www/cms/views/library-form-uploadFromUrl.twig");
    }
}
