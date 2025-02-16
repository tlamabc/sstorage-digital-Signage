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

/* user-force-change-password-page.twig */
class __TwigTemplate_9aeb1abc90da8f5ff92a292f81afdfb3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "user-force-change-password-page.twig", 24)->unwrap();
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-force-change-password-page.twig", 25)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "user-force-change-password-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 29
        echo __("Password change required");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <form id=\"userChangePasswordForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.force.change.password", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 33)]), "html", null, true);
        yield "\">
                        ";
        // line 34
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("User Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["userName", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userName", [], "any", false, false, false, 35)], 35, $context, $this->getSourceContext());
        yield "

                        ";
        // line 37
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("New Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter your new password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_password", ["newPassword", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 39, $context, $this->getSourceContext());
        yield "

                        ";
        // line 41
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Retype New Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please repeat the new Password.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_password", ["retypeNewPassword", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 43, $context, $this->getSourceContext());
        yield "
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <button class=\"XiboFormButton btn btn-save btn-block btn-success\" id=\"changePassword\" title=\"";
        // line 49
        echo __("Save");
        yield "\">";
        echo __("Save");
        yield "</button>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 56
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        yield "<script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">

    \$(\"#changePassword\").click(function () {
        XiboFormSubmit(\$(\"#userChangePasswordForm\"), null, function(xhr, form) {
            if (xhr.success) {
                \$(\"#changePassword\").addClass(\"disabled\");
                window.location.href = \"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        yield "\";
            }
        });
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
        return "user-force-change-password-page.twig";
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
        return array (  147 => 63,  137 => 57,  133 => 56,  120 => 49,  110 => 43,  104 => 42,  99 => 41,  93 => 39,  87 => 38,  82 => 37,  76 => 35,  71 => 34,  67 => 33,  60 => 29,  57 => 28,  53 => 27,  48 => 23,  46 => 25,  44 => 24,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-force-change-password-page.twig", "/var/www/cms/views/user-force-change-password-page.twig");
    }
}
