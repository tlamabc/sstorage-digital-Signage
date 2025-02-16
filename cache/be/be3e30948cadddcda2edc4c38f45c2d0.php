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

/* user-form-permissions.twig */
class __TwigTemplate_1eeb36009323514a914ef9d4a8eaf662 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-permissions.twig", 24)->unwrap();
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "user-form-permissions.twig", 25)->unwrap();
        // line 27
        $context["randomId"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-permissions.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    ";
        if (($context["objectNameOverride"] ?? null)) {
            // line 31
            yield "        ";
            $context["objectName"] = ($context["objectNameOverride"] ?? null);
            // line 32
            yield "    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isLayoutSpecific", [], "any", false, false, false, 32) == 1)) {
            // line 33
            yield "        ";
            $context["objectName"] = __("Layout");
            // line 34
            yield "    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isDisplaySpecific", [], "any", false, false, false, 34) == 1)) {
            // line 35
            yield "        ";
            $context["objectName"] = __("Display");
            // line 36
            yield "    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "type", [], "any", false, false, false, 36) == "playlist") || (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "type", [], "any", false, false, false, 36) == "subplaylist"))) {
            // line 37
            yield "        ";
            $context["objectName"] = __("Playlist");
            // line 38
            yield "    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "type", [], "any", false, false, false, 38) == "frame")) {
            // line 39
            yield "        ";
            $context["objectName"] = __("Region");
            // line 40
            yield "    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "type", [], "any", false, false, false, 40) == "global")) {
            // line 41
            yield "        ";
            $context["objectName"] = __("Canvas global widget");
            // line 42
            yield "    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "type", [], "any", false, false, false, 42) == "canvas")) {
            // line 43
            yield "        ";
            $context["objectName"] = __("Canvas");
            // line 44
            yield "    ";
        } else {
            // line 45
            yield "        ";
            $context["objectName"] = __(($context["entity"] ?? null));
            // line 46
            yield "    ";
        }
        // line 47
        yield "
    ";
        // line 48
        /* xgettext:no-php-format */        echo strtr(__("Sharing for %objectName%"), array("%objectName%" => ($context["objectName"] ?? null), ));
        return; yield '';
    }

    // line 51
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 53
        echo __("Save");
        yield ", forms.permissionsFormSubmit(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["randomId"] ?? null), "html", null, true);
        yield "\")
";
        return; yield '';
    }

    // line 56
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "forms.permissionsFormOpen";
        return; yield '';
    }

    // line 58
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        yield "    <div class=\"permissions-form\" id=\"permissionsForm\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"XiboGrid permissionsGrid\" id=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["randomId"] ?? null), "html", null, true);
        yield "\"
                     data-url=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.permissions", ["entity" => ($context["entity"] ?? null), "id" => ($context["objectId"] ?? null)]), "html", null, true);
        yield "\"
                     data-permissions=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["permissions"] ?? null)), "html", null, true);
        yield "\">
                    <div class=\"permissionsTableFilter\">
                        <div class=\"XiboFilter card mb-3 bg-light\">
                            <div class=\"FilterDiv card-body\" id=\"Filter\">
                                <form class=\"form-inline\">
                                    ";
        // line 69
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["name", ($context["title"] ?? null)], 70, $context, $this->getSourceContext());
        yield "
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"XiboData card pt-3\">
                        <table id=\"permissionsTable\" class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>";
        // line 79
        echo __("Name");
        yield "</th>
                                <th>";
        // line 80
        echo __("View");
        yield "</th>
                                <th>";
        // line 81
        echo __("Edit");
        yield "</th>
                                <th>";
        // line 82
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
        ";
        // line 93
        if (($context["canSetOwner"] ?? null)) {
            // line 94
            yield "        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 96
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Owner");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 97
            yield "                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Change the Owner of this item. Leave empty to keep the current owner.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 98
            yield "                ";
            $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-anchor-element", "value" => "#permissionsForm"]];
            // line 110
            yield "                ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["ownerId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 110, $context, $this->getSourceContext());
            yield "
            </div>
        </div>
        ";
        }
        // line 114
        yield "    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user-form-permissions.twig";
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
        return array (  243 => 114,  235 => 110,  232 => 98,  226 => 97,  221 => 96,  217 => 94,  215 => 93,  201 => 82,  197 => 81,  193 => 80,  189 => 79,  176 => 70,  171 => 69,  163 => 64,  159 => 63,  155 => 62,  150 => 59,  146 => 58,  138 => 56,  129 => 53,  124 => 52,  120 => 51,  115 => 48,  112 => 47,  109 => 46,  106 => 45,  103 => 44,  100 => 43,  97 => 42,  94 => 41,  91 => 40,  88 => 39,  85 => 38,  82 => 37,  79 => 36,  76 => 35,  73 => 34,  70 => 33,  67 => 32,  64 => 31,  61 => 30,  57 => 29,  52 => 23,  50 => 27,  48 => 25,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-permissions.twig", "/var/www/cms/views/user-form-permissions.twig");
    }
}
