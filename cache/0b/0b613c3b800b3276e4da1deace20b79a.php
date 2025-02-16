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

/* xibo-ssp-connector-form-settings.twig */
class __TwigTemplate_7565b8837f8004c4ca2b879d37e4a923 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'callBack' => [$this, 'block_callBack'],
            'connectorFormFields' => [$this, 'block_connectorFormFields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "connector-form-edit.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "xibo-ssp-connector-form-settings.twig", 24)->unwrap();
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "xibo-ssp-connector-form-settings.twig", 25)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("connector-form-edit.twig", "xibo-ssp-connector-form-settings.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "sspFormOpen";
        return; yield '';
    }

    // line 28
    public function block_connectorFormFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        $context["partners"] = CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getAvailablePartners", [], "method", false, false, false, 29);
        // line 30
        yield "
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#tab-general\" role=\"tab\" data-toggle=\"tab\">
                <span>";
        // line 34
        echo __("General");
        yield "</span>
            </a>
        </li>
        ";
        // line 37
        if ((is_iterable(($context["partners"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["partners"] ?? null)) > 0))) {
            // line 38
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["partners"] ?? null));
            foreach ($context['_seq'] as $context["partnerKey"] => $context["available"]) {
                // line 39
                yield "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#tab-";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["partnerKey"], "html", null, true);
                yield "\" role=\"tab\" data-toggle=\"tab\">
                        <span>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["available"], "name", [], "any", false, false, false, 41), "html", null, true);
                yield "</span>
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['partnerKey'], $context['available'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "        ";
        }
        // line 46
        yield "    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-general\">
            <h3>Xibo SSP Connector</h3>
            <h4>work with world leading supply side platforms</h4>
            <p>
                Onboard with one of our supported SSP's, enter your API key and configure which displays you want to activate. <br>
                In most cases you will need to list your displays with the SSP and copy your SSP ID into the CMS.
            </p>
            <p>
                Please note that your players will require HTTP access to <code>https://exchange.xibo-adspace.com</code>
                to receive ads from any SSP.
            </p>

            ";
        // line 60
        if ( !is_iterable(($context["partners"] ?? null))) {
            // line 61
            yield "                <p class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getFormError", [], "method", false, false, false, 61), "html", null, true);
            yield "</p>
            ";
        } else {
            // line 63
            yield "                ";
            $context["numberOfAuthedDisplays"] = CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getAuthorisedDisplayCount", [], "method", false, false, false, 63);
            // line 64
            yield "                <p class=\"alert alert-info\">";
            /* xgettext:no-php-format */            echo strtr(__("Your API key is authorised for %numberOfAuthedDisplays% displays."), array("%numberOfAuthedDisplays%" => ($context["numberOfAuthedDisplays"] ?? null), ));
            yield "</p>
            ";
        }
        // line 66
        yield "
            ";
        // line 67
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "isProviderSetting", ["apiKey"], "method", false, false, false, 67)) {
            // line 68
            yield "                ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("API Key");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 69
            yield "                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Your API key allows for secure communication between the CMS and the Xibo SSP connector service. It is used to orchestrate the delivery of ads to your players. Enter your API Key from Xibo.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 70
            yield "                ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["apiKey", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["apiKey"], "method", false, false, false, 70), ($context["helpText"] ?? null)], 70, $context, $this->getSourceContext());
            yield "
            ";
        }
        // line 72
        yield "
            ";
        // line 73
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "isProviderSetting", ["cmsUrl"], "method", false, false, false, 73)) {
            // line 74
            yield "                ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("CMS URL");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 75
            yield "                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The URL your players use to connect to your CMS.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            yield "                ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["cmsUrl", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", ["cmsUrl"], "method", false, false, false, 76), ($context["helpText"] ?? null)], 76, $context, $this->getSourceContext());
            yield "
            ";
        }
        // line 78
        yield "        </div>
        ";
        // line 79
        if ((is_iterable(($context["partners"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["partners"] ?? null)) > 0))) {
            // line 80
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["partners"] ?? null));
            foreach ($context['_seq'] as $context["partnerKey"] => $context["available"]) {
                // line 81
                yield "                <div class=\"tab-pane\" id=\"tab-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["partnerKey"], "html", null, true);
                yield "\">
                    ";
                // line 82
                if (CoreExtension::getAttribute($this->env, $this->source, $context["available"], "logo", [], "any", false, false, false, 82)) {
                    // line 83
                    yield "                        <div class=\"ssp-logo\" style=\"text-align: center\">
                            ";
                    // line 84
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["available"], "url", [], "any", false, false, false, 84)) {
                        // line 85
                        yield "                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["available"], "url", [], "any", false, false, false, 85), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["available"], "name", [], "any", false, false, false, 85), "html", null, true);
                        yield "\" target=\"_blank\">
                                    <img src=\"";
                        // line 86
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["available"], "logo", [], "any", false, false, false, 86), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["available"], "name", [], "any", false, false, false, 86), "html", null, true);
                        yield " Logo\" style=\"width: 250px\">
                                </a>
                            ";
                    } else {
                        // line 89
                        yield "                                <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["available"], "logo", [], "any", false, false, false, 89), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["available"], "name", [], "any", false, false, false, 89), "html", null, true);
                        yield " Logo\" style=\"width: 250px\">
                            ";
                    }
                    // line 91
                    yield "                        </div>
                    ";
                } else {
                    // line 93
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["available"], "url", [], "any", false, false, false, 93)) {
                        // line 94
                        yield "                            <h4><a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["available"], "url", [], "any", false, false, false, 94), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["available"], "name", [], "any", false, false, false, 94), "html", null, true);
                        yield "\" target=\"_blank\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["available"], "name", [], "any", false, false, false, 94), "html", null, true);
                        yield "</a></h4>
                        ";
                    } else {
                        // line 96
                        yield "                            <h4>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["available"], "name", [], "any", false, false, false, 96), "html", null, true);
                        yield "</h4>
                        ";
                    }
                    // line 98
                    yield "                    ";
                }
                // line 99
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["available"], "description", [], "any", false, false, false, 99)) {
                    // line 100
                    yield "                        <p>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["available"], "description", [], "any", false, false, false, 100), "html", null, true);
                    yield "</p>
                    ";
                }
                // line 102
                yield "
                    ";
                // line 103
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Enabled?");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 104
                yield "                    ";
                $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Connect to this partner");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 105
                yield "                    ";
                yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", [($context["partnerKey"] . "_enabled"), ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getPartnerSetting", [$context["partnerKey"], "enabled"], "method", false, false, false, 105), ($context["helpText"] ?? null)], 105, $context, $this->getSourceContext());
                yield "

                    ";
                // line 107
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("API Key");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 108
                yield "                    ";
                $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Enter your API Key from this SSP.");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 109
                yield "                    ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", [($context["partnerKey"] . "_key"), ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getPartnerSetting", [$context["partnerKey"], "key"], "method", false, false, false, 109), ($context["helpText"] ?? null)], 109, $context, $this->getSourceContext());
                yield "

                    ";
                // line 111
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Test mode?");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 112
                yield "                    ";
                $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Should we connect to this partners test or production system?");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 113
                yield "                    ";
                yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", [($context["partnerKey"] . "_isTest"), ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getPartnerSetting", [$context["partnerKey"], "isTest"], "method", false, false, false, 113), ($context["helpText"] ?? null)], 113, $context, $this->getSourceContext());
                yield "

                    ";
                // line 115
                if (CoreExtension::getAttribute($this->env, $this->source, $context["available"], "isWidgetSupported", [], "any", false, false, false, 115)) {
                    // line 116
                    yield "                        ";
                    $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        echo __("Use the SSP widget to schedule ad requests manually?");
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 117
                    yield "                        ";
                    $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        echo __("When using the SSP widget you do not need to configure a share of voice, duration or min/max duration.");
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 118
                    yield "                        ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", [($context["partnerKey"] . "_isUseWidget"), ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getPartnerSetting", [$context["partnerKey"], "isUseWidget"], "method", false, false, false, 118), ($context["helpText"] ?? null)], 118, $context, $this->getSourceContext());
                    yield "
                    ";
                }
                // line 120
                yield "
                    <div class=\"form-group\" style=\"display: flex;\">
                        <label class=\"col-sm-2 control-label\" for=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["partnerKey"] . "_sov"), "html", null, true);
                yield "\">";
                echo __("Share of Voice");
                yield "</label>
                        <div class=\"col-sm-5\">
                            <input class=\"form-control share-of-voice-control\"
                                   name=\"";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["partnerKey"] . "_sov"), "html", null, true);
                yield "\"
                                   type=\"number\" id=\"";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["partnerKey"] . "_sov"), "html", null, true);
                yield "\"
                                   data-partner=\"#";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["partnerKey"] . "_sovPercent"), "html", null, true);
                yield "\"
                                   value=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getPartnerSetting", [$context["partnerKey"], "sov"], "method", false, false, false, 128), "html", null, true);
                yield "\"
                                   min=\"0\" max=\"3600\" step=\"1\">
                            <small class=\"form-text text-muted\">";
                // line 130
                echo __("How many seconds per hour would you like to dedicate to this SSP?");
                yield "</small>
                        </div>

                        <div class=\"col-sm-5\">
                            <input class=\"form-control\" type=\"number\" id=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["partnerKey"] . "_sovPercent"), "html", null, true);
                yield "\" value=\"\">
                            <small class=\"form-text text-muted\">";
                // line 135
                echo __("As a percentage");
                yield "</small>
                        </div>
                    </div>

                    ";
                // line 139
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Duration (s)");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 140
                yield "                    ";
                $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("The expected duration of each ad served by the SSP.");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 141
                yield "                    ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", [($context["partnerKey"] . "_duration"), ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getPartnerSetting", [$context["partnerKey"], "duration"], "method", false, false, false, 141), ($context["helpText"] ?? null)], 141, $context, $this->getSourceContext());
                yield "

                    ";
                // line 143
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Min Duration (s)");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 144
                yield "                    ";
                $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("The minimum duration of an ad served by the SSP.");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 145
                yield "                    ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", [($context["partnerKey"] . "_minDuration"), ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getPartnerSetting", [$context["partnerKey"], "minDuration"], "method", false, false, false, 145), ($context["helpText"] ?? null)], 145, $context, $this->getSourceContext());
                yield "

                    ";
                // line 147
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Max Duration (s)");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 148
                yield "                    ";
                $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("The maximum duration of an ad served by the SSP.");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 149
                yield "                    ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", [($context["partnerKey"] . "_maxDuration"), ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getPartnerSetting", [$context["partnerKey"], "maxDuration"], "method", false, false, false, 149), ($context["helpText"] ?? null)], 149, $context, $this->getSourceContext());
                yield "

                    ";
                // line 151
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Allowed content types");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 152
                yield "                    ";
                $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Which content types should be allowed on these displays. Most SSPs will be able to further refine this by display.");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 153
                yield "                    ";
                $context["all"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Images and Video");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 154
                yield "                    ";
                $context["image"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Images only");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 155
                yield "                    ";
                $context["video"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Videos only");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 156
                yield "                    ";
                $context["options"] = [["id" => "imagesAndVideo", "value" =>                 // line 157
($context["all"] ?? null)], ["id" => "imageOnly", "value" =>                 // line 158
($context["image"] ?? null)], ["id" => "videoOnly", "value" =>                 // line 159
($context["video"] ?? null)]];
                // line 161
                yield "                    ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", [($context["partnerKey"] . "_mediaTypesAllowed"), "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getPartnerSetting", [$context["partnerKey"], "mediaTypesAllowed"], "method", false, false, false, 161), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 161, $context, $this->getSourceContext());
                yield "

                    ";
                // line 163
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Display Group");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 164
                yield "                    ";
                $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Which displays would you like to enroll with this SSP. Leave blank to enroll them all.");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 165
                yield "                    ";
                $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"]];
                // line 176
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", [($context["partnerKey"] . "_displayGroupId")], "method", false, false, false, 176)) {
                    // line 177
                    yield "                        ";
                    $context["attributes"] = Twig\Extension\CoreExtension::merge(($context["attributes"] ?? null), [["name" => "data-initial-key", "value" => "displayGroupId"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,                     // line 179
($context["interface"] ?? null), "getSetting", [($context["partnerKey"] . "_displayGroupId")], "method", false, false, false, 179)]]);
                    // line 181
                    yield "                    ";
                }
                // line 182
                yield "                    ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", [($context["partnerKey"] . "_displayGroupId"), "single", ($context["title"] ?? null), null, null, "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 182, $context, $this->getSourceContext());
                yield "

                    ";
                // line 184
                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("ID field");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 185
                yield "                    ";
                $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    echo __("Which field would you like to use as the ID for this SSP?");
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 186
                yield "                    ";
                $context["options"] = [["id" => "displayId", "value" => __("Display ID")], ["id" => "customId", "value" => __("Custom ID")], ["id" => "ref1", "value" => __("Reference 1")], ["id" => "ref2", "value" => __("Reference 2")], ["id" => "ref3", "value" => __("Reference 3")], ["id" => "ref4", "value" => __("Reference 4")], ["id" => "ref5", "value" => __("Reference 5")]];
                // line 195
                yield "                    ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", [($context["partnerKey"] . "_sspIdField"), "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["interface"] ?? null), "getSetting", [($context["partnerKey"] . "_sspIdField")], "method", false, false, false, 195), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 195, $context, $this->getSourceContext());
                yield "

                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['partnerKey'], $context['available'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            yield "    </div>
    ";
        } else {
            // line 201
            yield "        <p>To see a list of available partners please enter your API key, save this form and then come back here.</p>
    ";
        }
        // line 203
        yield "
    <hr>

    <h4>Enable/Disable</h4>
    <p>Disabling this connector will stop all displays from making ad requests.</p>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "xibo-ssp-connector-form-settings.twig";
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
        return array (  542 => 203,  538 => 201,  534 => 199,  523 => 195,  520 => 186,  514 => 185,  509 => 184,  503 => 182,  500 => 181,  498 => 179,  496 => 177,  493 => 176,  490 => 165,  484 => 164,  479 => 163,  473 => 161,  471 => 159,  470 => 158,  469 => 157,  467 => 156,  461 => 155,  455 => 154,  449 => 153,  443 => 152,  438 => 151,  432 => 149,  426 => 148,  421 => 147,  415 => 145,  409 => 144,  404 => 143,  398 => 141,  392 => 140,  387 => 139,  380 => 135,  376 => 134,  369 => 130,  364 => 128,  360 => 127,  356 => 126,  352 => 125,  344 => 122,  340 => 120,  334 => 118,  328 => 117,  322 => 116,  320 => 115,  314 => 113,  308 => 112,  303 => 111,  297 => 109,  291 => 108,  286 => 107,  280 => 105,  274 => 104,  269 => 103,  266 => 102,  260 => 100,  257 => 99,  254 => 98,  248 => 96,  238 => 94,  235 => 93,  231 => 91,  223 => 89,  215 => 86,  208 => 85,  206 => 84,  203 => 83,  201 => 82,  196 => 81,  191 => 80,  189 => 79,  186 => 78,  180 => 76,  174 => 75,  168 => 74,  166 => 73,  163 => 72,  157 => 70,  151 => 69,  145 => 68,  143 => 67,  140 => 66,  134 => 64,  131 => 63,  125 => 61,  123 => 60,  107 => 46,  104 => 45,  94 => 41,  90 => 40,  87 => 39,  82 => 38,  80 => 37,  74 => 34,  68 => 30,  65 => 29,  61 => 28,  53 => 27,  48 => 23,  46 => 25,  44 => 24,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "xibo-ssp-connector-form-settings.twig", "/var/www/cms/views/xibo-ssp-connector-form-settings.twig");
    }
}
