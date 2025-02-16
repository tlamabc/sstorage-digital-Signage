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

/* library-direct-media-details.twig */
class __TwigTemplate_d6bf3a3fdd981d0ffd49713dfe06acbd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("authed.twig", "library-direct-media-details.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "    <div class=\"card mx-auto my-auto\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "orientation", [], "any", false, false, false, 3) == "landscape")) {
            yield " style=\"max-width: 50%;\" ";
        } else {
            yield " style=\"max-width: 30%;\" ";
        }
        yield ">
        ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "thumbnail", [], "any", false, false, false, 4)) {
            yield "<img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "thumbnail", [], "any", false, false, false, 4), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
            yield "\">";
        }
        // line 5
        yield "        <div class=\"card-body\">
            <h5 class=\"card-title\">";
        // line 6
        echo __("Name");
        yield " : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "</h5>
            <p class=\"card-text\">";
        // line 7
        echo __("Tags");
        yield " : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "getTagString", [], "method", false, false, false, 7), "html", null, true);
        yield "</p>
            <p class=\"card-text\">";
        // line 8
        echo __("Type");
        yield " : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "mediaType", [], "any", false, false, false, 8), "html", null, true);
        yield "</p>
            ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "orientation", [], "any", false, false, false, 9)) {
            yield "<p class=\"card-text\">";
            echo __("Orientation");
            yield " : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "orientation", [], "any", false, false, false, 9), "html", null, true);
            yield "</p>";
        }
        // line 10
        yield "            <p class=\"card-text\">";
        echo __("File Size");
        yield " : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "getUnmatchedProperty", ["fileSizeFormatted"], "method", false, false, false, 10), "html", null, true);
        yield "</p>
            <p class=\"card-text\">";
        // line 11
        echo __("Date Created");
        yield " : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "createdDt", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
            <p class=\"card-text\">";
        // line 12
        echo __("Date Modified");
        yield " : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "modifiedDt", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
            <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.view"), "html", null, true);
        yield "\" class=\"btn btn-primary\">";
        echo __("Go back to Library page");
        yield "</a>
            <hr>
            ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "mediaType", [], "any", false, false, false, 15) == "image")) {
            // line 16
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "fileName", [], "any", false, false, false, 16), "html", null, true);
            yield "\">
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 17
($context["media"] ?? null), "mediaType", [], "any", false, false, false, 17) == "video")) {
            // line 18
            yield "                <video class=\"w-100\" controls autoplay muted>
                    <source src=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\">
                    Your browser does not support the video tag.
                </video>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 22
($context["media"] ?? null), "mediaType", [], "any", false, false, false, 22) == "audio")) {
            // line 23
            yield "                <audio class=\"w-100\" controls>
                    <source src=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\">
                    Your browser does not support the audio tag.
                </audio>
            ";
        }
        // line 28
        yield "        </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "library-direct-media-details.twig";
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
        return array (  155 => 28,  148 => 24,  145 => 23,  143 => 22,  137 => 19,  134 => 18,  132 => 17,  125 => 16,  123 => 15,  116 => 13,  110 => 12,  104 => 11,  97 => 10,  89 => 9,  83 => 8,  77 => 7,  71 => 6,  68 => 5,  60 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-direct-media-details.twig", "/var/www/cms/views/library-direct-media-details.twig");
    }
}
