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

/* menuboard-product-form-edit.twig */
class __TwigTemplate_b59927613137f1fa2444686be4565852 extends Template
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
            'extra' => [$this, 'block_extra'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "menuboard-product-form-edit.twig", 25)->unwrap();
        // line 26
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "menuboard-product-form-edit.twig", 26)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "menuboard-product-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        echo __("Edit Product ");
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
        yield ", \$(\"#menuBoardProductEditForm\").submit()
";
        return; yield '';
    }

    // line 37
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "menuBoardProductFormOpen";
        return; yield '';
    }

    // line 38
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardProduct"] ?? null), "getOptions", [], "method", false, false, false, 38));
        return; yield '';
    }

    // line 40
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "    <div class=\"row\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#generalTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("General");
        yield "</span></a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#detailTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Details");
        yield "</span></a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#configurationTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Product Options");
        yield "</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"menuBoardProductEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.product.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardProduct"] ?? null), "menuProductId", [], "any", false, false, false, 48)]), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"generalTab\">
                        ";
        // line 51
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name for this Menu Board Product");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardProduct"] ?? null), "name", [], "any", false, false, false, 53), ($context["helpText"] ?? null)], 53, $context, $this->getSourceContext());
        yield "

                        ";
        // line 55
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Price");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Price for this Menu Board Product");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["price", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardProduct"] ?? null), "price", [], "any", false, false, false, 57), ($context["helpText"] ?? null)], 57, $context, $this->getSourceContext());
        yield "

                        ";
        // line 59
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Order");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set a display order for this item to appear");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["displayOrder", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardProduct"] ?? null), "displayOrder", [], "any", false, false, false, 61), ($context["helpText"] ?? null)], 61, $context, $this->getSourceContext());
        yield "

                        ";
        // line 63
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Availability");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this Product appear as available?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_switch", ["availability", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardProduct"] ?? null), "availability", [], "any", false, false, false, 65), ($context["helpText"] ?? null)], 65, $context, $this->getSourceContext());
        yield "

                        ";
        // line 67
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Code identifier for this Menu Board Product");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardProduct"] ?? null), "code", [], "any", false, false, false, 69), ($context["helpText"] ?? null)], 69, $context, $this->getSourceContext());
        yield "

                        ";
        // line 71
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Media");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally select Image or Video to be associated with this Menu Board Product");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search")], ["name" => "data-search-term", "value" => "media"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "mediaId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-filter-options", "value" => "{\"onlyMenuBoardAllowed\":1}"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder", "value" => "Select an Image or Video"], ["name" => "data-thumbnail", "value" => "thumbnail"]];
        // line 84
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["mediaId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardProduct"] ?? null), "mediaId", [], "any", false, false, false, 84), [($context["media"] ?? null)], "mediaId", "name", ($context["helpText"] ?? null), "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 84, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"detailTab\">
                        ";
        // line 88
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Description for this Menu Board Product");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardProduct"] ?? null), "description", [], "any", false, false, false, 90), ($context["helpText"] ?? null)], 90, $context, $this->getSourceContext());
        yield "

                        ";
        // line 92
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Allergy Information");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Allergy Information for this Menu Board Product");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_textarea", ["allergyInfo", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardProduct"] ?? null), "allergyInfo", [], "any", false, false, false, 94), ($context["helpText"] ?? null)], 94, $context, $this->getSourceContext());
        yield "

                        ";
        // line 96
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Calories");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("How many calories are in this product?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["calories", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["menuBoardProduct"] ?? null), "calories", [], "any", false, false, false, 98), ($context["helpText"] ?? null)], 98, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"configurationTab\">
                        ";
        // line 102
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield " ";
            echo __("If required please provide additional options and their prices for this Product.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null), "alert alert-info"], 103, $context, $this->getSourceContext());
        yield "
                        <div id=\"productOptionsContainer\">

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 113
        yield Twig\Extension\CoreExtension::include($this->env, $context, "menuboard-product-javascript.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "menuboard-product-form-edit.twig";
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
        return array (  306 => 113,  292 => 103,  286 => 102,  278 => 98,  272 => 97,  267 => 96,  261 => 94,  255 => 93,  250 => 92,  244 => 90,  238 => 89,  233 => 88,  225 => 84,  222 => 73,  216 => 72,  211 => 71,  205 => 69,  199 => 68,  194 => 67,  188 => 65,  182 => 64,  177 => 63,  171 => 61,  165 => 60,  160 => 59,  154 => 57,  148 => 56,  143 => 55,  137 => 53,  131 => 52,  126 => 51,  120 => 48,  114 => 45,  110 => 44,  106 => 43,  102 => 41,  98 => 40,  90 => 38,  82 => 37,  75 => 34,  70 => 33,  66 => 32,  60 => 29,  56 => 28,  51 => 24,  49 => 26,  47 => 25,  40 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "menuboard-product-form-edit.twig", "/var/www/cms/views/menuboard-product-form-edit.twig");
    }
}
