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

/* menuboard-category-form-edit.twig */
class __TwigTemplate_25b0b80faac40ef5228488814c04f834 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "menuboard-category-form-edit.twig", 25)->unwrap();
        // line 26
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "menuboard-category-form-edit.twig", 26)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "menuboard-category-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        echo __("Edit Category ");
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardCategory"] ?? null), "name", [], "any", false, false, false, 29), "html", null, true);
        yield "
";
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
        yield ", \$(\"#menuBoardCategoryEditForm\").submit()
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
            <form id=\"menuBoardCategoryEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.category.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardCategory"] ?? null), "menuCategoryId", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\">

                ";
        // line 42
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this Menu Board Category");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardCategory"] ?? null), "name", [], "any", false, false, false, 44), ($context["helpText"] ?? null)], 44, $context, $this->getSourceContext());
        yield "

                ";
        // line 46
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The description for this Menu Board Category");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["description", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardCategory"] ?? null), "description", [], "any", false, false, false, 48), ($context["helpText"] ?? null)], 48, $context, $this->getSourceContext());
        yield "

                ";
        // line 50
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Code identifier for this Menu Board Category");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardCategory"] ?? null), "code", [], "any", false, false, false, 52), ($context["helpText"] ?? null)], 52, $context, $this->getSourceContext());
        yield "

                ";
        // line 54
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Media");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally select Image or Video to be associated with this Menu Board Category");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search")], ["name" => "data-search-term", "value" => "media"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "mediaId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-filter-options", "value" => "{\"onlyMenuBoardAllowed\":1}"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder", "value" => "Select an Image or Video"], ["name" => "data-thumbnail", "value" => "thumbnail"]];
        // line 67
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["mediaId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardCategory"] ?? null), "mediaId", [], "any", false, false, false, 67), [($context["media"] ?? null)], "mediaId", "name", ($context["helpText"] ?? null), "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 67, $context, $this->getSourceContext());
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
        return "menuboard-category-form-edit.twig";
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
        return array (  162 => 67,  159 => 56,  153 => 55,  148 => 54,  142 => 52,  136 => 51,  131 => 50,  125 => 48,  119 => 47,  114 => 46,  108 => 44,  102 => 43,  97 => 42,  92 => 40,  88 => 38,  84 => 37,  77 => 34,  72 => 33,  68 => 32,  58 => 29,  54 => 28,  49 => 24,  47 => 26,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "menuboard-category-form-edit.twig", "/var/www/cms/views/menuboard-category-form-edit.twig");
    }
}
