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

/* applications-authorize-page.twig */
class __TwigTemplate_7a3c8e20f4a79d2713a53da02812aa89 extends Template
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
        // line 23
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "applications-authorize-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "applications-authorize-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "        <div class=\"widget w-50 mx-auto\">
            <div class=\"widget-title\">";
        // line 28
        echo __("Authorize Request");
        yield "</div>
            <div class=\"widget-body\">
                <div class=\"card mx-auto my-auto\">
                    ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "coverImage", [], "any", false, false, false, 31)) {
            yield "<img class=\"card-img\" style=\"opacity: 0.4; object-fit: cover\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "coverImage", [], "any", false, false, false, 31), "html", null, true);
            yield "\" alt=\"Card image\">
                    <div class=\"card-img-overlay\" style=\"opacity: unset\">
                    ";
        }
        // line 34
        yield "                        <div class=\"card-body\">
                    ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "logo", [], "any", false, false, false, 35)) {
            yield "<div class=\"logo\" style=\"margin-bottom: 30px\"><img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "logo", [], "any", false, false, false, 35), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "getName", [], "method", false, false, false, 35), "html", null, true);
            yield "\" style=\"width: 150px;\"></div>";
        }
        // line 36
        yield "                        <h3 class=\"card-title\">";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "companyName", [], "any", false, false, false, 36)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "companyName", [], "any", false, false, false, 36), "html", null, true);
            yield " - ";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["authParams"] ?? null), "client", [], "any", false, false, false, 36), "getName", [], "method", false, false, false, 36), "html", null, true);
        yield "</h3>
                        <h5 class=\"card-text\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("would like access to the following scopes"), "html", null, true);
        yield ":</h5>
                        <ul class=\"card-text\" style=\"margin-bottom: 50px\">
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scopes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["scope"]) {
            // line 40
            yield "                            <li>
                                ";
            // line 41
            yield __(CoreExtension::getAttribute($this->env, $this->source, $context["scope"], "description", [], "any", false, false, false, 41));
            yield "
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scope'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                        </ul>
                        ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "description", [], "any", false, false, false, 45)) {
            yield "<h5 class=\"card-text\" style=\"margin-bottom: 30px\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "description", [], "any", false, false, false, 45), "html", null, true);
            yield "</h5>";
        }
        // line 46
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "termsUrl", [], "any", false, false, false, 46)) {
            yield "<h5 class=\"card-text\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "termsUrl", [], "any", false, false, false, 46), "html", null, true);
            yield "\">";
            echo __("Terms");
            yield "</a></h5>";
        }
        // line 47
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "privacyUrl", [], "any", false, false, false, 47)) {
            yield "<h5 class=\"card-text\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "privacyUrl", [], "any", false, false, false, 47), "html", null, true);
            yield "\">";
            echo __("Privacy Policy");
            yield "</a></h5>";
        }
        // line 48
        yield "                        </div>
                    ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "coverImage", [], "any", false, false, false, 49)) {
            yield "<img class=\"card-img\" style=\"opacity: 0.4; object-fit: cover\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["application"] ?? null), "coverImage", [], "any", false, false, false, 49), "html", null, true);
            yield "\" alt=\"Card image\">
                    </div>
                    ";
        }
        // line 52
        yield "                </div>
                 <form method=\"post\" action=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.authorize"), "html", null, true);
        yield "\" ";
        if (($context["approved"] ?? null)) {
            yield "style=\"display: none\"";
        }
        yield ">
                    <div class=\"text-right\">
                        <input type=\"hidden\" name=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrfKey"] ?? null), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrfToken"] ?? null), "html", null, true);
        yield "\" />
                        <input type=\"submit\" id=\"deny\" class=\"btn btn-danger\" value=\"Deny\" name=\"authorization\">
                        <input type=\"submit\" id=\"approve\" class=\"btn btn-success\" value=\"Approve\" name=\"authorization\">
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
        return "applications-authorize-page.twig";
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
        return array (  164 => 55,  155 => 53,  152 => 52,  144 => 49,  141 => 48,  132 => 47,  123 => 46,  117 => 45,  114 => 44,  105 => 41,  102 => 40,  98 => 39,  93 => 37,  82 => 36,  74 => 35,  71 => 34,  63 => 31,  57 => 28,  54 => 27,  50 => 26,  45 => 23,  43 => 24,  36 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "applications-authorize-page.twig", "/var/www/cms/views/applications-authorize-page.twig");
    }
}
