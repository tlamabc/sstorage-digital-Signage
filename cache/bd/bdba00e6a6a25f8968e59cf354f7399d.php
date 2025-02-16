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

/* menuboard-product-javascript.twig */
class __TwigTemplate_a95928a70d06e68b28a43b8e56d2fe04 extends Template
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
        // line 23
        yield "<script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
    function menuBoardProductFormOpen(dialog) {
        configureProductOptions(\$(dialog))
    }

    function configureProductOptions(container) {
        if(container.length == 0) {
            return;
        }

        var \$productOptionsContainer = container.find('#productOptionsContainer');
        var productOptionsTemplate = formHelpers.getTemplate('menuProductOptions');
        var productOptions =  container.data().extra;

        if(productOptions.length == 0) {
            // Add a template row
            var context = {title: '1', value: '', buttonGlyph: 'fa-plus', buttonClass: 'btn-success'};
            \$(productOptionsTemplate(context)).appendTo(\$productOptionsContainer);
        } else {
            // For each of the existing options, create form components
            var i = 0;
            \$.each(productOptions, function(index, field) {
                i++;

                var context = {title: i, optionName: field['option'], optionValue: field['value'], buttonGlyph: ((i === 1) ? 'fa-plus' : 'fa-minus')};
                \$productOptionsContainer.append(productOptionsTemplate(context));

            });
        }

        // Nabble the resulting buttons
        \$productOptionsContainer.on('click', 'button', function(e) {
            e.preventDefault();

            // find the gylph
            if(\$(this).find('i').hasClass('fa-plus')) {
                var context = {title: \$productOptionsContainer.find('.form-product-options').length + 1, value: '', buttonGlyph: 'fa-minus'};
                \$productOptionsContainer.append(productOptionsTemplate(context));
            } else {
                // Remove this row
                \$(this).closest('.form-product-options').remove();
            }
        });
    }
</script>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "menuboard-product-javascript.twig";
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
        return array (  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "menuboard-product-javascript.twig", "/var/www/cms/views/menuboard-product-javascript.twig");
    }
}
