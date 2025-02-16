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

/* form-base.twig */
class __TwigTemplate_8665556afe7794a1d4d9ceba5d785a5d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formHtml' => [$this, 'block_formHtml'],
            'formButtons' => [$this, 'block_formButtons'],
            'formFieldActions' => [$this, 'block_formFieldActions'],
            'callBack' => [$this, 'block_callBack'],
            'extra' => [$this, 'block_extra'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "{
    \"title\": ";
        // line 2
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('formTitle', $context, $blocks);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield json_encode($___internal_parse_0_);
        yield ",
    \"html\": ";
        // line 3
        $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('formHtml', $context, $blocks);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield json_encode($___internal_parse_1_);
        yield ",
    \"buttons\": ";
        // line 4
        $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('formButtons', $context, $blocks);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield json_encode($___internal_parse_2_);
        yield ",
    \"fieldActions\": ";
        // line 5
        $___internal_parse_3_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('formFieldActions', $context, $blocks);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield json_encode($___internal_parse_3_);
        yield ",
    \"callBack\": ";
        // line 6
        $___internal_parse_4_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('callBack', $context, $blocks);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield json_encode($___internal_parse_4_);
        yield ",
    \"extra\": ";
        // line 7
        yield from $this->unwrap()->yieldBlock('extra', $context, $blocks);
        // line 8
        yield "}";
        return; yield '';
    }

    // line 2
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 3
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 4
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 5
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 6
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 7
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "[]";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "form-base.twig";
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
        return array (  129 => 7,  122 => 6,  115 => 5,  108 => 4,  101 => 3,  94 => 2,  89 => 8,  87 => 7,  79 => 6,  71 => 5,  63 => 4,  55 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form-base.twig", "/var/www/cms/views/form-base.twig");
    }
}
