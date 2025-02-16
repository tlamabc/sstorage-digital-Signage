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

/* user-form-delete.twig */
class __TwigTemplate_b2b7df292eaf9f8995f6de6eef843938 extends Template
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
            'formFieldActions' => [$this, 'block_formFieldActions'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-delete.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-delete.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Delete");
        return; yield '';
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        echo __("No");
        yield ", XiboDialogClose()
    ";
        // line 33
        echo __("Yes");
        yield ", \$(\"#userDeleteForm\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    [{
    \"field\": \"deleteAllItems\",
    \"trigger\": \"init\",
    \"value\": 1,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".user-selector-group\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"deleteAllItems\",
    \"trigger\": \"change\",
    \"value\": 1,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".user-selector-group\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"deleteAllItems\",
    \"trigger\": \"init\",
    \"value\": 0,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".user-selector-group\": { \"display\": \"\" }
    }
    },{
    \"field\": \"deleteAllItems\",
    \"trigger\": \"change\",
    \"value\": 0,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".user-selector-group\": { \"display\": \"\" }
    }
    }]
";
        return; yield '';
    }

    // line 72
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"userDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 75)]), "html", null, true);
        yield "\">
                ";
        // line 76
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Are you sure you want to delete? You may not be able to delete this user if they have associated content. You can retire users by using the Edit Button.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 77, $context, $this->getSourceContext());
        yield "

                ";
        // line 79
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isSuperAdmin", [], "method", false, false, false, 79)) {
            // line 80
            yield "                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Delete all items owned by this User?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 81
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Check to delete all items owned by this user, including Layouts, Media, Schedules, etc.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 82
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["deleteAllItems", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 82, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 84
        yield "
                ";
        // line 85
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reassign items to another User");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reassign all items this User owns to the selected User.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["reassignUserId", "single", ($context["title"] ?? null), 0, Twig\Extension\CoreExtension::merge([["userId" => null, "userName" => ""]], ($context["users"] ?? null)), "userId", "userName", ($context["helpText"] ?? null), "user-selector-group"], 87, $context, $this->getSourceContext());
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
        return "user-form-delete.twig";
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
        return array (  177 => 87,  171 => 86,  166 => 85,  163 => 84,  157 => 82,  151 => 81,  145 => 80,  143 => 79,  137 => 77,  132 => 76,  128 => 75,  124 => 73,  120 => 72,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-delete.twig", "/var/www/cms/views/user-form-delete.twig");
    }
}
