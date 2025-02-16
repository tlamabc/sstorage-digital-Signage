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

/* applications-form-edit.twig */
class __TwigTemplate_59d884ffa6fb59ca3c581615df6cda33 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "applications-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "applications-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit Application");
        return; yield '';
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 33
        echo __("Save");
        yield ", \$(\"#applicationFormSubmit\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "copyFromSecretInput";
        return; yield '';
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item tabForAuthCode\"><a class=\"nav-link\" href=\"#advanced\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Advanced");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#scopes\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Sharing");
        yield "</span></a></li>
            </ul>
            <form id=\"applicationFormSubmit\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "key", [], "any", false, false, false, 46)]), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Application Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "name", [], "any", false, false, false, 50)], 50, $context, $this->getSourceContext());
        yield "

                        ";
        // line 52
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Client Id");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["clientId", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "key", [], "any", false, false, false, 53), "", "", "disabled"], 53, $context, $this->getSourceContext());
        yield "

                        ";
        // line 55
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Client Secret");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                        ";
        $context["buttonTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Copy to Clipboard");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_inputWithButton", ["clientSecret", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "secret", [], "any", false, false, false, 57), "", "", "readonly='readonly'", "", "copy-button", ($context["buttonTitle"] ?? null), "button", ""], 57, $context, $this->getSourceContext());
        yield "
                                                    
                        ";
        // line 59
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reset Secret?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reset your client secret to prevent access from any existing application.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["resetKeys", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 61, $context, $this->getSourceContext());
        yield "

                        ";
        // line 63
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Selecting only one of the Authorisation Code or Client Credentials grants improves security by allowing us to revoke access tokens more effectively.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null), "alert alert-info"], 64, $context, $this->getSourceContext());
        yield "

                        ";
        // line 66
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Authorization Code?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Allow the Authorization Code Grant for this Client?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["authCode", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "authCode", [], "any", false, false, false, 68), ($context["helpText"] ?? null)], 68, $context, $this->getSourceContext());
        yield "

                        ";
        // line 70
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Client Credentials?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Allow the Client Credentials Grant for this Client?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["clientCredentials", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "clientCredentials", [], "any", false, false, false, 72), ($context["helpText"] ?? null)], 72, $context, $this->getSourceContext());
        yield "

                        ";
        // line 74
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is Confidential?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Can this Application keep a secret?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isConfidential", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "isConfidential", [], "any", false, false, false, 76), ($context["helpText"] ?? null)], 76, $context, $this->getSourceContext());
        yield "

                        ";
        // line 78
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("New Redirect URI");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("White listed redirect URI's that will be allowed, only application for Authorization Code Grants");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["redirectUri[]", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 80, $context, $this->getSourceContext());
        yield "

                        <div class=\"form-group row\">
                            <span class=\"control-label col-sm-2\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Existing Redirect URI"), "html", null, true);
        yield ":</span>
                        </div>

                        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "redirectUris", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 87
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["redirectUri[]", "", CoreExtension::getAttribute($this->env, $this->source, $context["url"], "redirectUri", [], "any", false, false, false, 87)], 87, $context, $this->getSourceContext());
            yield "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "                    </div>
                    <div class=\"tab-pane\" id=\"advanced\">
                        ";
        // line 91
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Below information will be displayed for User on Application authorization page");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null), "alert alert-info"], 92, $context, $this->getSourceContext());
        yield "

                        ";
        // line 94
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Application Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "description", [], "any", false, false, false, 95), ($context["title"] ?? null)], 95, $context, $this->getSourceContext());
        yield "

                        ";
        // line 97
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Logo");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Url pointing to the logo");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["logo", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "logo", [], "any", false, false, false, 99), ($context["helpText"] ?? null)], 99, $context, $this->getSourceContext());
        yield "

                        ";
        // line 101
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Cover Image");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Url pointing to the Cover Image");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["coverImage", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "coverImage", [], "any", false, false, false, 103), ($context["helpText"] ?? null)], 103, $context, $this->getSourceContext());
        yield "

                        ";
        // line 105
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Company Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["companyName", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "companyName", [], "any", false, false, false, 106)], 106, $context, $this->getSourceContext());
        yield "

                        ";
        // line 108
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Terms URL");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Url pointing to the terms for this Application");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 110
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["termsUrl", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "termsUrl", [], "any", false, false, false, 110), ($context["helpText"] ?? null)], 110, $context, $this->getSourceContext());
        yield "

                        ";
        // line 112
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Privacy Url");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Url pointing to the privacy policy for this Application");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["privacyUrl", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "privacyUrl", [], "any", false, false, false, 114), ($context["helpText"] ?? null)], 114, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"scopes\">
                        ";
        // line 117
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select sharing to grant to this application (scopes).");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null), "alert alert-info"], 118, $context, $this->getSourceContext());
        yield "
                        ";
        // line 119
        $context["message2"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Scopes grant the Application access to specific routes, all GET,POST and PUT calls for the selected scopes, will be available to use by this Application.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message2"] ?? null), "alert alert-info"], 120, $context, $this->getSourceContext());
        yield "
                        ";
        // line 121
        $context["message3"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The delete scopes are separate, without these Application will not have access to delete any existing content");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message3"] ?? null), "alert alert-info"], 122, $context, $this->getSourceContext());
        yield "

                        <div class=\"form-group row\">
                            <span class=\"control-label col-sm-2\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scopes"), "html", null, true);
        yield ":</span>
                        </div>

                        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scopes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["scope"]) {
            // line 129
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scope"], "description", [], "any", false, false, false, 129), "html", null, true);
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 130
            yield "                            ";
            $context["id"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "scope_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scope"], "id", [], "any", false, false, false, 130), "html", null, true);
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 131
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", [($context["id"] ?? null), ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["scope"], "getUnmatchedProperty", ["selected"], "method", false, false, false, 131)], 131, $context, $this->getSourceContext());
            yield "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scope'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "
                        ";
        // line 134
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Owner");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set the owner of this Application. Leave empty to keep the current owner. If you are not an admin you will not be able to reverse this action");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-anchor-element", "value" => "#applicationFormSubmit"]];
        // line 148
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 148, $context, $this->getSourceContext());
        yield "
                    </div>
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
        return "applications-form-edit.twig";
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
        return array (  457 => 148,  454 => 136,  448 => 135,  443 => 134,  440 => 133,  431 => 131,  424 => 130,  418 => 129,  414 => 128,  408 => 125,  401 => 122,  396 => 121,  391 => 120,  386 => 119,  381 => 118,  376 => 117,  369 => 114,  363 => 113,  358 => 112,  352 => 110,  346 => 109,  341 => 108,  335 => 106,  330 => 105,  324 => 103,  318 => 102,  313 => 101,  307 => 99,  301 => 98,  296 => 97,  290 => 95,  285 => 94,  279 => 92,  274 => 91,  270 => 89,  261 => 87,  257 => 86,  251 => 83,  244 => 80,  238 => 79,  233 => 78,  227 => 76,  221 => 75,  216 => 74,  210 => 72,  204 => 71,  199 => 70,  193 => 68,  187 => 67,  182 => 66,  176 => 64,  171 => 63,  165 => 61,  159 => 60,  154 => 59,  148 => 57,  142 => 56,  137 => 55,  131 => 53,  126 => 52,  120 => 50,  115 => 49,  109 => 46,  104 => 44,  100 => 43,  96 => 42,  91 => 39,  87 => 38,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "applications-form-edit.twig", "/var/www/cms/views/applications-form-edit.twig");
    }
}
