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

/* menuboard-category-form-add.twig */
class __TwigTemplate_781d77a672adac5a3c883cd43ff7ec88 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "menuboard-category-form-add.twig", 25)->unwrap();
        // line 26
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "menuboard-category-form-add.twig", 26)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "menuboard-category-form-add.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        echo __("Add Category to ");
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoard"] ?? null), "name", [], "any", false, false, false, 29), "html", null, true);
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
        echo __("Next");
        yield ", XiboDialogApply(\"#menuBoardCategoryAddForm\")
    ";
        // line 35
        echo __("Save");
        yield ", \$(\"#menuBoardCategoryAddForm\").submit()
";
        return; yield '';
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"menuBoardCategoryAddForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.category.add", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoard"] ?? null), "menuId", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\">

                ";
        // line 43
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this Menu Board Category");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 45, $context, $this->getSourceContext());
        yield "

                ";
        // line 47
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The description for this Menu Board Category");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["description", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 49, $context, $this->getSourceContext());
        yield "

                ";
        // line 51
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Code identifier for this Menu Board Category");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 53, $context, $this->getSourceContext());
        yield "

                ";
        // line 55
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Media");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally select Image or Video to be associated with this Menu Board Category");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                ";
        $context["placeholder"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select an Image or Video");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search")], ["name" => "data-search-term", "value" => "media"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "mediaId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-filter-options", "value" => "{\"onlyMenuBoardAllowed\":1}"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder", "value" =>         // line 66
($context["placeholder"] ?? null)], ["name" => "data-thumbnail", "value" => "thumbnail"]];
        // line 69
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["mediaId", "single", ($context["title"] ?? null), "", null, "mediaId", "media", ($context["helpText"] ?? null), "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 69, $context, $this->getSourceContext());
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
        return "menuboard-category-form-add.twig";
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
        return array (  173 => 69,  171 => 66,  169 => 58,  163 => 57,  157 => 56,  152 => 55,  146 => 53,  140 => 52,  135 => 51,  129 => 49,  123 => 48,  118 => 47,  112 => 45,  106 => 44,  101 => 43,  96 => 41,  92 => 39,  88 => 38,  81 => 35,  77 => 34,  72 => 33,  68 => 32,  58 => 29,  54 => 28,  49 => 24,  47 => 26,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "menuboard-category-form-add.twig", "/var/www/cms/views/menuboard-category-form-add.twig");
    }
}
