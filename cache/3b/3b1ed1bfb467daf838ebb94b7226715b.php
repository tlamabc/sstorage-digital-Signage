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

/* playlist-module-form-delete.twig */
class __TwigTemplate_1d3fab6d748d8c854bc7f4afd699f415 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "playlist-module-form-delete.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "playlist-module-form-delete.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Delete Widget");
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
        echo __("Yes");
        yield ", \$(\"#playlistModuleDeleteForm\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "playlistModuleDeleteFormOpen";
        return; yield '';
    }

    // line 39
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"playlistModuleDeleteForm\" class=\"form-horizontal\" method=\"delete\" action=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "widgetId", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\">
                ";
        // line 43
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Are you sure you want to remove this widget?");
            yield " ";
            echo __("This action cannot be undone.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 44, $context, $this->getSourceContext());
        yield "

                <div class=\"offset-sm-2 col-sm-10\">
                    <div class=\"checkbox\">
                        <label for=\"deleteMedia\" title=\"";
        // line 48
        echo __("Also delete from the Library?");
        yield "\" accesskey=\"\">
                            <input type=\"checkbox\" id=\"deleteMedia\" name=\"deleteMedia\">
                            ";
        // line 50
        echo __("Also delete from the Library?");
        // line 51
        yield "                        </label>
                    </div>
                    <span class=\"help-block\">";
        // line 53
        echo __("This widget is linked to Media in the Library. Check this option to also delete that Media.");
        yield " </span>
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
        return "playlist-module-form-delete.twig";
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
        return array (  125 => 53,  121 => 51,  119 => 50,  114 => 48,  106 => 44,  99 => 43,  95 => 42,  91 => 40,  87 => 39,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-module-form-delete.twig", "/var/www/cms/views/playlist-module-form-delete.twig");
    }
}
