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

/* syncgroup-form-edit.twig */
class __TwigTemplate_46c8f4d594cbfed93972f812b1a5117e extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "syncgroup-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "syncgroup-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit Sync Group");
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
        yield ", \$(\"#syncGroupEditForm\").submit()
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
            <form id=\"syncGroupEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["syncGroup"] ?? null), "syncGroupId", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\">
                ";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 40)) {
            // line 41
            yield "                    <div class=\"form-group row\">
                        <label class=\"col-sm-2 control-label\">";
            // line 42
            echo __("Folder");
            yield "</label>
                        <div class=\"col-sm-10\">
                            <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 44
            echo __("Select Folder");
            yield "</button>
                            <span id=\"selectedFormFolder\"></span>
                        </div>
                    </div>
                    ";
            // line 48
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId", CoreExtension::getAttribute($this->env, $this->source, ($context["syncGroup"] ?? null), "folderId", [], "any", false, false, false, 48)], 48, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 50
        yield "
                ";
        // line 51
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A name for this Sync Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["syncGroup"] ?? null), "name", [], "any", false, false, false, 53), ($context["helpText"] ?? null)], 53, $context, $this->getSourceContext());
        yield "

                ";
        // line 55
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Publisher Port");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The port on which players will communicate");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["syncPublisherPort", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["syncGroup"] ?? null), "syncPublisherPort", [], "any", false, false, false, 57), ($context["helpText"] ?? null)], 57, $context, $this->getSourceContext());
        yield "

                ";
        // line 59
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Switch Delay");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The delay (in ms) when displaying the changes in content. If the network is unstable this value can be raised to compensate.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["syncSwitchDelay", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["syncGroup"] ?? null), "syncSwitchDelay", [], "any", false, false, false, 61), ($context["helpText"] ?? null)], 61, $context, $this->getSourceContext());
        yield "

                ";
        // line 63
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Video Pause Delay");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The delay (in ms) before unpausing the video on start. If some of the devices in the group do not support gapless, this value can be raised to compensate.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["syncVideoPauseDelay", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["syncGroup"] ?? null), "syncVideoPauseDelay", [], "any", false, false, false, 65), ($context["helpText"] ?? null)], 65, $context, $this->getSourceContext());
        yield "

                ";
        // line 67
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Lead Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select Lead Display for this sync group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield "                ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => (($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search") . "?syncGroupId=") . CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["syncGroup"] ?? null), "syncGroupId", [], "any", false, false, false, 74))], ["name" => "data-search-term", "value" => "display"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayId"], ["name" => "data-text-property", "value" => "display"]];
        // line 80
        yield "
                ";
        // line 81
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["leadDisplayId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["syncGroup"] ?? null), "leadDisplayId", [], "any", false, false, false, 81), [($context["leadDisplay"] ?? null)], "displayId", "display", ($context["helpText"] ?? null), "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 81, $context, $this->getSourceContext());
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
        return "syncgroup-form-edit.twig";
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
        return array (  201 => 81,  198 => 80,  196 => 74,  194 => 69,  188 => 68,  183 => 67,  177 => 65,  171 => 64,  166 => 63,  160 => 61,  154 => 60,  149 => 59,  143 => 57,  137 => 56,  132 => 55,  126 => 53,  120 => 52,  115 => 51,  112 => 50,  107 => 48,  100 => 44,  95 => 42,  92 => 41,  90 => 40,  86 => 39,  82 => 37,  78 => 36,  71 => 33,  66 => 32,  62 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "syncgroup-form-edit.twig", "/var/www/cms/views/syncgroup-form-edit.twig");
    }
}
