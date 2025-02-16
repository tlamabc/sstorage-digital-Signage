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

/* display-form-purge-all.twig */
class __TwigTemplate_99865f87125f3d8a2af50c7916e9092a extends Template
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
        // line 22
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "display-form-purge-all.twig", 23)->unwrap();
        // line 22
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-purge-all.twig", 22);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "    ";
        echo __("Purge all Media files");
        return; yield '';
    }

    // line 29
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 31
        echo __("Save");
        yield ", \$(\"#displayPurgeAllForm\").submit()
";
        return; yield '';
    }

    // line 34
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"displayPurgeAllForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.purge.all", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\">
                ";
        // line 38
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Caution! Trigerring this action will ask Player to remove every downloaded Media file from its storage.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_alert", [($context["message"] ?? null), "danger"], 39, $context, $this->getSourceContext());
        yield "

                ";
        // line 41
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("This action will be immediately actioned. Player will remove all existing Media files from its local storage and request fresh copies of required files from the CMS");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_alert", [($context["message"] ?? null), "info"], 42, $context, $this->getSourceContext());
        yield "

                ";
        // line 44
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "xmrChannel", [], "any", false, false, false, 44))) {
            // line 45
            yield "                    <div class=\"alert alert-info\">
                        ";
            // line 46
            $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("XMR is not working on this Player yet and therefore the licence check may not occur.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 47
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 47, $context, $this->getSourceContext());
            yield "
                    </div>
                ";
        }
        // line 50
        yield "            </form>
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
        return "display-form-purge-all.twig";
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
        return array (  129 => 50,  122 => 47,  117 => 46,  114 => 45,  112 => 44,  106 => 42,  101 => 41,  95 => 39,  90 => 38,  86 => 37,  82 => 35,  78 => 34,  71 => 31,  66 => 30,  62 => 29,  56 => 26,  52 => 25,  47 => 22,  45 => 23,  38 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-form-purge-all.twig", "/var/www/cms/views/display-form-purge-all.twig");
    }
}
