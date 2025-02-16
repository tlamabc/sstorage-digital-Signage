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

/* notification-interrupt.twig */
class __TwigTemplate_bff115351a48aea1631e00a28e715d99 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "notification-interrupt.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "notification-interrupt.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "subject", [], "any", false, false, false, 28), "html", null, true);
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 32
        $context["readDt"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield "<span class=\"notification-date\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "readDt", [], "any", false, false, false, 32), "html", null, true);
            yield "</span>";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        yield "                    <p>";
        echo __("Published");
        yield " <span class=\"notification-date\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "releaseDt", [], "any", false, false, false, 33), "html", null, true);
        yield "</span>, ";
        /* xgettext:no-php-format */        echo strtr(__("you read this %readDt%."), array("%readDt%" => ($context["readDt"] ?? null), ));
        yield "</p>
                    ";
        // line 34
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "body", [], "any", false, false, false, 34);
        yield "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("interruptedUrl"));
        foreach ($context['_seq'] as $context["_key"] => $context["interruptedUrl"]) {
            // line 40
            yield "                        <p><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["interruptedUrl"], "html", null, true);
            yield "\">";
            echo __("Continue...");
            yield "</a></p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interruptedUrl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                </div>
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
        return "notification-interrupt.twig";
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
        return array (  103 => 42,  92 => 40,  88 => 39,  80 => 34,  71 => 33,  64 => 32,  57 => 28,  54 => 27,  50 => 26,  45 => 23,  43 => 24,  36 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "notification-interrupt.twig", "/var/www/cms/views/notification-interrupt.twig");
    }
}
