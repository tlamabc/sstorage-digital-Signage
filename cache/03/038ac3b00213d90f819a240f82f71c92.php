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

/* user-form-multiple-permissions.twig */
class __TwigTemplate_6046a0958b3bc07be4a10a2d948a7e30 extends Template
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
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-multiple-permissions.twig", 24)->unwrap();
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "user-form-multiple-permissions.twig", 25)->unwrap();
        // line 27
        $context["randomId"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-multiple-permissions.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isLayoutSpecific", [], "any", false, false, false, 30) == 1)) {
            // line 31
            yield "        ";
            $context["objectName"] = __("Layout");
            // line 32
            yield "    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isDisplaySpecific", [], "any", false, false, false, 32) == 1)) {
            // line 33
            yield "        ";
            $context["objectName"] = __("Display");
            // line 34
            yield "    ";
        } else {
            // line 35
            yield "        ";
            $context["objectName"] = __(($context["entity"] ?? null));
            // line 36
            yield "    ";
        }
        // line 37
        yield "
    ";
        // line 38
        /* xgettext:no-php-format */        echo strtr(__("Sharing for %objectName%"), array("%objectName%" => ($context["objectName"] ?? null), ));
        return; yield '';
    }

    // line 41
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 43
        echo __("Save");
        yield ", forms.permissionsMultiFormSubmit(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["randomId"] ?? null), "html", null, true);
        yield "\")
";
        return; yield '';
    }

    // line 46
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "forms.permissionsMultiFormOpen";
        return; yield '';
    }

    // line 48
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        yield "    <div class=\"multiple-permissions-form\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"XiboGrid permissionsGrid\" id=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["randomId"] ?? null), "html", null, true);
        yield "\"
                     data-url=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.permissions.multi", ["entity" => ($context["entity"] ?? null)]), "html", null, true);
        yield "\"
                     data-target-ids=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["objectIds"] ?? null), "html", null, true);
        yield "\">
                    <div class=\"permissionsMultiTableFilter\">
                        <div class=\"XiboFilter card mb-3 bg-light\">
                            <div class=\"FilterDiv card-body\" id=\"Filter\">
                                <form class=\"form-inline\">
                                    ";
        // line 59
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["name", ($context["title"] ?? null)], 60, $context, $this->getSourceContext());
        yield "
                                </form>
                            </div>
                        </div>
                    </div>

                    ";
        // line 66
        $context["multiplePermissionsMessage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 67
            yield "                        ";
            echo __("Edit multiple sharing at the same time. Elements shown with an indeterminate state [-], result from a difference in sharing already set. All changes set here will be applied to all selected elements.");
            yield "<br>
                    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield "                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["multiplePermissionsMessage"] ?? null)], 69, $context, $this->getSourceContext());
        yield "
                    
                    <div class=\"XiboData card pt-3\">
                        <table id=\"permissionsMultiTable\" class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>";
        // line 75
        echo __("Name");
        yield "</th>
                                <th>";
        // line 76
        echo __("View");
        yield "</th>
                                <th>";
        // line 77
        echo __("Edit");
        yield "</th>
                                <th>";
        // line 78
        echo __("Delete");
        yield "</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
        return "user-form-multiple-permissions.twig";
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
        return array (  187 => 78,  183 => 77,  179 => 76,  175 => 75,  165 => 69,  158 => 67,  156 => 66,  146 => 60,  141 => 59,  133 => 54,  129 => 53,  125 => 52,  120 => 49,  116 => 48,  108 => 46,  99 => 43,  94 => 42,  90 => 41,  85 => 38,  82 => 37,  79 => 36,  76 => 35,  73 => 34,  70 => 33,  67 => 32,  64 => 31,  61 => 30,  57 => 29,  52 => 23,  50 => 27,  48 => 25,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-multiple-permissions.twig", "/var/www/cms/views/user-form-multiple-permissions.twig");
    }
}
