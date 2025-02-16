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

/* playlist-form-timeline.twig */
class __TwigTemplate_9adfd553ef24176777d9d43f0e3432ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("form-base.twig", "playlist-form-timeline.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "playlistEditorFormOpen";
        return; yield '';
    }

    // line 27
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        // line 29
        yield "    <div class=\"modal editor-modal\">  
        <div class=\"modal-dialog editor-modal-dialog\">
            <div class=\"modal-content editor-modal-content\">
                <div class=\"modal-header editor-modal-header\">
                    <div class=\"modal-header--left\"></div>
                    
                    <div class=\"\">
                        <button type=\"button\" class=\"close editor-modal-close pl-2\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </div>
                </div>

                <div class=\"modal-body editor-modal-body container-designer\">
                    <div id=\"playlist-editor\" playlist-id=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "playlistId", [], "any", false, false, false, 43), "html", null, true);
        yield "\"></div>
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\" nonce=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        \$(document).ready(function() {
            // Load the editor to populate the modal
            pE.loadEditor();
        });
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "playlist-form-timeline.twig";
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
        return array (  87 => 49,  78 => 43,  62 => 29,  60 => 28,  56 => 27,  48 => 25,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-form-timeline.twig", "/var/www/cms/views/playlist-form-timeline.twig");
    }
}
