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

/* xibo-dashboard-form-settings.twig */
class __TwigTemplate_50622135c4ba0d1c4f1fb3316c776023 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'connectorFormFields' => [$this, 'block_connectorFormFields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "connector-form-edit.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "xibo-dashboard-form-settings.twig", 25)->unwrap();
        // line 26
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "xibo-dashboard-form-settings.twig", 26)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("connector-form-edit.twig", "xibo-dashboard-form-settings.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_connectorFormFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        $context["services"] = CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getAvailableServices", [], "method", false, false, false, 29);
        // line 30
        yield "    <h3>Xibo Dashboards<small> - Securely capture and show your data</small></h3>
    <p>The Xibo dashboard service securely stores your credentials, connects to your dashboard provider and
        records your dashboard. It makes that dashboard available to your player via a secure link on a short lease.</p>

    ";
        // line 34
        if ( !is_iterable(($context["services"] ?? null))) {
            // line 35
            yield "        <p class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["services"] ?? null), "html", null, true);
            yield "</p>
    ";
        }
        // line 37
        yield "
    ";
        // line 38
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "isProviderSetting", ["apiKey"], "method", false, false, false, 38)) {
            // line 39
            yield "        <h4>Settings</h4>
        <p>Your API key allows for secure communication between the CMS and the Xibo dashboard service. It is used
            to register your credentials and retrieve dashboards. It is never possible to retrieve credentials.</p>

        ";
            // line 43
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("API Key");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 44
            yield "        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter your API Key from Xibo.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["apiKey", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["apiKey"], "method", false, false, false, 45), ($context["helpText"] ?? null)], 45, $context, $this->getSourceContext());
            yield "
    ";
        }
        // line 47
        yield "
    <h4>Credentials</h4>
    ";
        // line 49
        if ((is_iterable(($context["services"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["services"] ?? null)) > 0))) {
            // line 50
            yield "        <p>Select the type of dashboard you want to connect with and enter your credentials below. Credentials are stored
            in our secure dashboard service and not in the CMS or Players. Once you have entered the credentials and this
            form has been accepted, you cannot retrieve them from the CMS.</p>

        <p class=\"alert alert-info\">Please note: changing credentials can take a few minutes after pressing save.</p>

        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Type</th>
                <th>Status</th>
                <th>User</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getAvailableServices", [], "method", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 68
                yield "                ";
                $context["credential"] = CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getCredentialForType", [CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 68)], "method", false, false, false, 68);
                // line 69
                yield "                <tr>
                    <input type=\"hidden\" name=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 70), "html", null, true);
                yield "_id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["credential"] ?? null), "id", [], "any", false, false, false, 70), "html", null, true);
                yield "\">
                    <td>";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 71), "html", null, true);
                yield "</td>
                    ";
                // line 72
                if (($context["credential"] ?? null)) {
                    // line 73
                    yield "                        <td>";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "isCredentialInErrorState", [CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 73)], "method", false, false, false, 73)) {
                        yield "Error";
                    } else {
                        yield "Connected";
                    }
                    yield "</td>
                        <td>";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["credential"] ?? null), "userName", [], "any", false, false, false, 74), "html", null, true);
                    yield "</td>
                        <td>
                            ";
                    // line 76
                    $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        echo __("Change Password");
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 77
                    yield "                            ";
                    $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please enter the password you use to connect to %service%", ["%service%" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 77)]), "html", null, true);
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 78
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["inline"], "macro_password", [(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 78) . "_password"), ($context["title"] ?? null), null, ($context["helpText"] ?? null)], 78, $context, $this->getSourceContext());
                    yield "

                            ";
                    // line 80
                    $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        echo __("Change second factor secret");
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 81
                    yield "                            ";
                    $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        echo __("We support Google Authenticator or similar two factor codes. You get this secret by scanning the QR code.");
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 82
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["inline"], "macro_input", [(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 82) . "_twoFactorSecret"), ($context["title"] ?? null), null, ($context["helpText"] ?? null)], 82, $context, $this->getSourceContext());
                    yield "
                        </td>
                        <td>";
                    // line 84
                    yield CoreExtension::callMacro($macros["inline"], "macro_checkbox", [(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 84) . "_remove"), __("Check to remove")], 84, $context, $this->getSourceContext());
                    yield "</td>
                    ";
                } else {
                    // line 86
                    yield "                        <td colspan=\"4\">
                            ";
                    // line 87
                    $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        echo __("Username");
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 88
                    yield "                            ";
                    $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        echo __("Please enter the username you use to connect to your dashboard service.");
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 89
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["inline"], "macro_input", [(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 89) . "_userName"), ($context["title"] ?? null), null, ($context["helpText"] ?? null)], 89, $context, $this->getSourceContext());
                    yield "

                            ";
                    // line 91
                    $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        echo __("Password");
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 92
                    yield "                            ";
                    $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please enter the password you use to connect to %service%", ["%service%" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 92)]), "html", null, true);
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 93
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["inline"], "macro_password", [(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 93) . "_password"), ($context["title"] ?? null), null, ($context["helpText"] ?? null)], 93, $context, $this->getSourceContext());
                    yield "

                            ";
                    // line 95
                    $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        echo __("Second factor secret");
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 96
                    yield "                            ";
                    $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        echo __("We support Google Authenticator or similar two factor codes. You get this secret by scanning the QR code.");
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 97
                    yield "                            ";
                    yield CoreExtension::callMacro($macros["inline"], "macro_input", [(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 97) . "_twoFactorSecret"), ($context["title"] ?? null), null, ($context["helpText"] ?? null)], 97, $context, $this->getSourceContext());
                    yield "

                            ";
                    // line 99
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "isUrl", [], "any", false, false, false, 99)) {
                        // line 100
                        yield "                                ";
                        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            echo __("URL");
                            return; yield '';
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 101
                        yield "                                ";
                        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The URL where the %service% is hosted", ["%service%" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 101)]), "html", null, true);
                            return; yield '';
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 102
                        yield "                                ";
                        yield CoreExtension::callMacro($macros["inline"], "macro_input", [(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 102) . "_url"), ($context["title"] ?? null), null, ($context["helpText"] ?? null)], 102, $context, $this->getSourceContext());
                        yield "
                            ";
                    }
                    // line 104
                    yield "                        </td>
                    ";
                }
                // line 106
                yield "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "            </tbody>
        </table>
    ";
        } else {
            // line 111
            yield "        <p>To see a list of available services please enter your API key, save this form and then come back here.</p>
    ";
        }
        // line 113
        yield "
    <h4>Enable/Disable</h4>
    <p>Disabling this connector will stop new dashboards being captured for any existing credentials. If the connector
        is disabled for longer than 30 days, you will need to enter your credentials again.</p>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "xibo-dashboard-form-settings.twig";
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
        return array (  295 => 113,  291 => 111,  286 => 108,  279 => 106,  275 => 104,  269 => 102,  263 => 101,  257 => 100,  255 => 99,  249 => 97,  243 => 96,  238 => 95,  232 => 93,  226 => 92,  221 => 91,  215 => 89,  209 => 88,  204 => 87,  201 => 86,  196 => 84,  190 => 82,  184 => 81,  179 => 80,  173 => 78,  167 => 77,  162 => 76,  157 => 74,  148 => 73,  146 => 72,  142 => 71,  136 => 70,  133 => 69,  130 => 68,  126 => 67,  107 => 50,  105 => 49,  101 => 47,  95 => 45,  89 => 44,  84 => 43,  78 => 39,  76 => 38,  73 => 37,  67 => 35,  65 => 34,  59 => 30,  56 => 29,  52 => 28,  47 => 24,  45 => 26,  43 => 25,  36 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "xibo-dashboard-form-settings.twig", "/var/www/cms/views/xibo-dashboard-form-settings.twig");
    }
}
