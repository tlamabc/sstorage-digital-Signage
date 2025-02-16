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

/* playlist-form-setenablestat.twig */
class __TwigTemplate_8e880a05770a10ef5ecdd0c107b8318d extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "playlist-form-setenablestat.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "playlist-form-setenablestat.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "name", [], "any", false, false, false, 28);
        // line 29
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Playlist %name%"), array("%name%" => ($context["name"] ?? null), ));
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
        yield ", \$(\"#playlistSetEnableStatForm\").submit()
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
            <form id=\"playlistSetEnableStatForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.setenablestat", ["input" => "enableStat", "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "playlistId", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\">
                ";
        // line 41
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable Stats Collection?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable the collection of Proof of Play statistics for this Playlist.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        yield "
                ";
        // line 44
        $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Off");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "                ";
        $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("On");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                ";
        $context["inheritOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Inherit");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                ";
        $context["options"] = [["id" => "Off", "value" =>         // line 48
($context["offOption"] ?? null)], ["id" => "On", "value" =>         // line 49
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>         // line 50
($context["inheritOption"] ?? null)]];
        // line 52
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["enableStat", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "enableStat", [], "any", false, false, false, 52), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 52, $context, $this->getSourceContext());
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
        return "playlist-form-setenablestat.twig";
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
        return array (  130 => 52,  128 => 50,  127 => 49,  126 => 48,  124 => 47,  118 => 46,  112 => 45,  107 => 44,  104 => 43,  98 => 42,  93 => 41,  89 => 40,  85 => 38,  81 => 37,  74 => 34,  69 => 33,  65 => 32,  59 => 29,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-form-setenablestat.twig", "/var/www/cms/views/playlist-form-setenablestat.twig");
    }
}
