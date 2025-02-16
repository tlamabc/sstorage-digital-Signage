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

/* user-applications-form.twig */
class __TwigTemplate_2d7d37c555c5a786963884a44c15b20c extends Template
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
            'callBack' => [$this, 'block_callBack'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-applications-form.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "user-applications-form.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Authorized applications for user");
        return; yield '';
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        echo __("Close");
        yield ", XiboDialogClose()
";
        return; yield '';
    }

    // line 35
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "forms.userApprovedApplicationsFormOpen";
        return; yield '';
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <table id=\"applications\" class=\"table table-striped\">
                <thead>
                <tr>
                    <th>";
        // line 43
        echo __("Name");
        yield "</th>
                    <th>";
        // line 44
        echo __("Approved Date");
        yield "</th>
                    <th>";
        // line 45
        echo __("Approved IP Address");
        yield "</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["applications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 51
            yield "                        <tr>
                            <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["application"], "name", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                            <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["application"], "approvedDate", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["application"], "approvedIp", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                            <td><button class=\"btn btn-danger revokeAccess\" name=\"revoke\" title=\"";
            // line 55
            echo __("Revoke Access for this Application");
            yield "\" data-application-key=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 55), "html", null, true);
            yield "\" data-application-user=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userId", [], "any", false, false, false, 55), "html", null, true);
            yield "\"> ";
            echo __("Revoke");
            yield " </button> </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "                </tbody>
            </table>
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
        return "user-applications-form.twig";
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
        return array (  144 => 58,  129 => 55,  125 => 54,  121 => 53,  117 => 52,  114 => 51,  110 => 50,  102 => 45,  98 => 44,  94 => 43,  87 => 38,  83 => 37,  75 => 35,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-applications-form.twig", "/var/www/cms/views/user-applications-form.twig");
    }
}
