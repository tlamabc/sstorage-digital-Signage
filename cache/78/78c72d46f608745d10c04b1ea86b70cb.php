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

/* globalConfig.twig */
class __TwigTemplate_545afda151af12610f15b4d05ceccd71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "<script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
    var CKEDITOR_DEFAULT_CONFIG = {
        contentsCss: ['styles.css', libraryFontCSS],
        imageDownloadUrl: imageDownloadUrl,
        fontFamily: {
            options: ['default'],
        },
        fontSize: {
            options: [
            'default',
            8, 9, 10, 11, 12, 16, 18, 20,
            22, 24, 26, 28, 36, 48, 72, 80,
            88, 96, 128, 144, 168, 186, 200,
            244, 288, 300,
            ],
        },
    };

    moment.locale(\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translate"] ?? null), "jsLocale", [], "any", false, false, false, 20), "html", null, true);
        yield "\");

    \$(function() {
        var csrf_token = \$('meta[name=\"token\"]').attr('content');
        \$.ajaxSetup({
            headers: {
                'X-XSRF-TOKEN': csrf_token
            }
        });
    });

    toastr.options.positionClass = \"toast-bottom-center\";
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "globalConfig.twig";
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
        return array (  60 => 20,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "globalConfig.twig", "/var/www/cms/views/globalConfig.twig");
    }
}
