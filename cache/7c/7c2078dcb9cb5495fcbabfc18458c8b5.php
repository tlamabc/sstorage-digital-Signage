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

/* notification-form-show.twig */
class __TwigTemplate_ade7b315e6e395bcc5607ce1a0dc3c05 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "notification-form-show.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "notification-form-show.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "subject", [], "any", false, false, false, 28), "html", null, true);
        yield "
";
        return; yield '';
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        echo __("Close");
        yield ", XiboDialogClose(true)
";
        return; yield '';
    }

    // line 35
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 38
        $context["readDt"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield "<span class=\"notification-date\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "readDt", [], "any", false, false, false, 38), "html", null, true);
            yield "</span>";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        yield "            <p>";
        echo __("Published");
        yield " <span class=\"notification-date\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "releaseDt", [], "any", false, false, false, 39), "html", null, true);
        yield "</span>, ";
        /* xgettext:no-php-format */        echo strtr(__("you read this %readDt%."), array("%readDt%" => ($context["readDt"] ?? null), ));
        yield "</p>
            ";
        // line 40
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "body", [], "any", false, false, false, 40);
        yield "
            <p><a href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("notification.exportattachment", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "notificationId", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "originalFileName", [], "any", false, false, false, 41), "html", null, true);
        yield "</a> </p>

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
        return "notification-form-show.twig";
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
        return array (  104 => 41,  100 => 40,  91 => 39,  84 => 38,  80 => 36,  76 => 35,  68 => 32,  64 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "notification-form-show.twig", "/var/www/cms/views/notification-form-show.twig");
    }
}
