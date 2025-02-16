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

/* inline.twig */
class __TwigTemplate_8c1e23a5859f23938d4a35736d511001 extends Template
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
        // line 1
        yield "
";
        // line 8
        yield "
";
        // line 12
        yield "
";
        // line 18
        yield "
";
        // line 24
        yield "
";
        // line 30
        yield "
";
        // line 40
        yield "
";
        // line 47
        yield "
";
        // line 69
        yield "
";
        // line 76
        yield "
";
        // line 83
        yield "
";
        // line 90
        yield "
";
        // line 99
        yield "
";
        // line 108
        yield "
";
        // line 159
        yield "
";
        // line 178
        yield "
";
        // line 189
        yield "
";
        // line 200
        yield "
";
        // line 211
        yield "
";
        // line 222
        yield "
";
        // line 238
        yield "
";
        // line 245
        yield "
";
        // line 266
        yield "
";
        return; yield '';
    }

    // line 2
    public function macro_disabled($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 3
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <input readonly class=\"form-control\" value=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"></input>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function macro_hidden($__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield "    <input name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"hidden\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" />
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function macro_raw($__text__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield "    <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 15
            yield ($context["text"] ?? null);
            yield "
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function macro_message($__message__ = null, $__groupClass__ = null, $__messageStyleClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "groupClass" => $__groupClass__,
            "messageStyleClass" => $__messageStyleClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 20
            yield "    <div class=\"";
            if (($context["messageStyleClass"] ?? null)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["messageStyleClass"] ?? null), "html", null, true);
            }
            yield " mr-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <span>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "</span>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function macro_alert($__message__ = null, $__alertType__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "alertType" => $__alertType__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 26
            yield "    <div class=\"row\">
        <div class=\"mr-3 alert alert-";
            // line 27
            if (($context["alertType"] ?? null)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alertType"] ?? null), "html", null, true);
            } else {
                yield "primary";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "</div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 31
    public function macro_button($__title__ = null, $__type__ = null, $__link__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "type" => $__type__,
            "link" => $__link__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 32
            yield "    <div class=\"form-group ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 33
            if ((($context["type"] ?? null) == "link")) {
                // line 34
                yield "            <a class=\"btn btn-white xibo-inline-btn mr-1 ml-0\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 36
                yield "            <button class=\"btn btn-white xibo-inline-btn mr-1 ml-0\" type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</button>
        ";
            }
            // line 38
            yield "    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 41
    public function macro_input($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 42
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <input class=\"form-control\" name=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"text\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 48
    public function macro_inputWithTags($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__exactTag__ = null, $__exactTagTitle__ = null, $__logicalOperatorTitle__ = null, $__autoCompleteEnabled__ = 1, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "exactTag" => $__exactTag__,
            "exactTagTitle" => $__exactTagTitle__,
            "logicalOperatorTitle" => $__logicalOperatorTitle__,
            "autoCompleteEnabled" => $__autoCompleteEnabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 49
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        ";
            // line 51
            if (($context["exactTag"] ?? null)) {
                // line 52
                yield "            <div class=\"input-group input-group-tags-exact\">
                <input class=\"form-control\" name=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" type=\"text\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" data-role=\"tagsInputInline\" ";
                if ((($context["autoCompleteEnabled"] ?? null) == 1)) {
                    yield " data-auto-complete-url=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
                    yield "?allTags=1\" ";
                }
                yield "  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
                yield " />
                <div class=\"input-group-append input-group-addon\">
                    <div class=\"input-group-text\">
                        <input title=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["exactTagTitle"] ?? null), "html", null, true);
                yield "\" type=\"checkbox\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["exactTag"] ?? null), "html", null, true);
                yield "\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["exactTag"] ?? null), "html", null, true);
                yield "\">
                    </div>
                    <select class=\"custom-select\" id=\"logicalOperator\" name=\"logicalOperator\" title=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["logicalOperatorTitle"] ?? null), "html", null, true);
                yield "\" style=\"min-width:auto!important\">
                        <option value=\"OR\" selected>OR</option>
                        <option value=\"AND\">AND</option>
                    </select>
                </div>
            </div>
        ";
            } else {
                // line 65
                yield "            <input class=\"form-control\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" type=\"text\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" data-role=\"tagsInputInline\" ";
                if ((($context["autoCompleteEnabled"] ?? null) == 1)) {
                    yield " data-auto-complete-url=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
                    yield "?allTags=1\" ";
                }
                yield "  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
                yield " />
        ";
            }
            // line 67
            yield "    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 70
    public function macro_number($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__maxNumber__ = null, $__minNumber__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "maxNumber" => $__maxNumber__,
            "minNumber" => $__minNumber__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 71
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <input class=\"form-control\" name=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["maxNumber"] ?? null)) {
                yield "max=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxNumber"] ?? null), "html", null, true);
                yield "\" ";
            }
            if (($context["minNumber"] ?? null)) {
                yield "min=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["minNumber"] ?? null), "html", null, true);
                yield "\" ";
            }
            yield "type=\"number\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 77
    public function macro_email($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 78
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <input class=\"form-control\" name=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"email\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 84
    public function macro_password($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 85
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1\" for=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <input class=\"form-control\" name=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"password\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 91
    public function macro_checkbox($__name__ = null, $__title__ = null, $__value__ = null, $__groupClass__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 92
            yield "    <div class=\"form-group mt-2 mr-2 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <div class=\"form-check\">
            <input title=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" class=\"form-check-input\" type=\"checkbox\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" ";
            if ((($context["value"] ?? null) == 1)) {
                yield "checked";
            }
            yield ">
            <label class=\"form-check-label\" for=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 100
    public function macro_radio($__name__ = null, $__id__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__setValue__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "id" => $__id__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "setValue" => $__setValue__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 101
            yield "    <div class=\"form-group mt-2 mr-2 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" id=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["setValue"] ?? null), "html", null, true);
            yield "\" ";
            if ((($context["value"] ?? null) == ($context["setValue"] ?? null))) {
                yield "checked";
            }
            yield ">
            <label class=\"form-check-label\" for=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function macro_dropdown($__name__ = null, $__type__ = null, $__title__ = null, $__value__ = null, $__options__ = null, $__optionId__ = null, $__optionValue__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__callBack__ = null, $__dataAttributes__ = null, $__optionGroups__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "type" => $__type__,
            "title" => $__title__,
            "value" => $__value__,
            "options" => $__options__,
            "optionId" => $__optionId__,
            "optionValue" => $__optionValue__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "callBack" => $__callBack__,
            "dataAttributes" => $__dataAttributes__,
            "optionGroups" => $__optionGroups__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 110
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1\" for=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <select class=\"form-control\" ";
            // line 112
            if ((($context["type"] ?? null) == "dropdownmulti")) {
                yield "multiple";
            }
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["callBack"] ?? null), "html", null, true);
            yield "
        ";
            // line 113
            if ((($context["type"] ?? null) == "dropdownmulti")) {
                // line 114
                yield "            data-allow-clear=\"true\"
            data-placeholder--id=null
            data-placeholder--value=\"\"
        ";
            }
            // line 118
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["dataAttributes"] ?? null)) > 0)) {
                // line 119
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["dataAttributes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 120
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 120), "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 120), "html", null, true);
                    yield "\"
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                yield "        ";
            }
            yield ">

        ";
            // line 124
            $context["hasGroups"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["optionGroups"] ?? null)) > 0);
            // line 125
            yield "        ";
            if ( !($context["hasGroups"] ?? null)) {
                // line 126
                yield "            ";
                $context["optionGroups"] = ["label" => "General"];
                // line 127
                yield "        ";
            }
            // line 128
            yield "
        ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["optionGroups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 130
                yield "            ";
                if (($context["hasGroups"] ?? null)) {
                    // line 131
                    yield "                <optgroup label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 131), "html", null, true);
                    yield "\">
                ";
                    // line 132
                    $context["tempOptions"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 132), [], "any", false, false, false, 132);
                    // line 133
                    yield "            ";
                } else {
                    // line 134
                    yield "                ";
                    $context["tempOptions"] = ($context["options"] ?? null);
                    // line 135
                    yield "            ";
                }
                // line 136
                yield "
            ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["tempOptions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 138
                    yield "
                ";
                    // line 139
                    $context["itemOptionId"] = CoreExtension::getAttribute($this->env, $this->source, $context["option"], ($context["optionId"] ?? null), [], "any", false, false, false, 139);
                    // line 140
                    yield "                ";
                    $context["itemOptionValue"] = CoreExtension::getAttribute($this->env, $this->source, $context["option"], ($context["optionValue"] ?? null), [], "any", false, false, false, 140);
                    // line 141
                    yield "
                ";
                    // line 142
                    if ((($context["type"] ?? null) == "dropdownmulti")) {
                        // line 143
                        yield "                    ";
                        $context["selected"] = CoreExtension::inFilter(($context["itemOptionId"] ?? null), ($context["value"] ?? null));
                        // line 144
                        yield "                ";
                    } else {
                        // line 145
                        yield "                    ";
                        $context["selected"] = (($context["itemOptionId"] ?? null) == ($context["value"] ?? null));
                        // line 146
                        yield "                ";
                    }
                    // line 147
                    yield "
                <option value=\"";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemOptionId"] ?? null), "html", null, true);
                    yield "\" ";
                    if (($context["selected"] ?? null)) {
                        yield "selected";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemOptionValue"] ?? null), "html", null, true);
                    yield "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                yield "
            ";
                // line 151
                if (($context["hasGroups"] ?? null)) {
                    // line 152
                    yield "                </optgroup>
            ";
                }
                // line 154
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "
        </select>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 160
    public function macro_permissions($__name__ = null, $__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 161
            yield "    <table class=\"table table-bordered\">
        <tr>
            <th>";
            // line 163
            echo __("Group");
            yield "</th>
            <th>";
            // line 164
            echo __("View");
            yield "</th>
            <th>";
            // line 165
            echo __("Edit");
            yield "</th>
            <th>";
            // line 166
            echo __("Delete");
            yield "</th>
        </tr>
        ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 169
                yield "            <tr>
                <td>";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "</td>
                <td><input type=\"checkbox\" name=\"";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value_view"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value_view_checked"] ?? null), "html", null, true);
                yield "></td>
                <td><input type=\"checkbox\" name=\"";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value_edit"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value_edit_checked"] ?? null), "html", null, true);
                yield "></td>
                <td><input type=\"checkbox\" name=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value_del"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value_del_checked"] ?? null), "html", null, true);
                yield "></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            yield "    </table>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 179
    public function macro_date($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 180
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"input-group\">
            <div class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></div>
            <input class=\"form-control dateControl date\" type=\"text\" ";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" />
            <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 190
    public function macro_dateMonth($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 191
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"input-group\">
            <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
            <input class=\"form-control dateControl month\" type=\"text\" ";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" />
            <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 201
    public function macro_dateTime($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 202
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["linkedName"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"input-group\">
            <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
            <input class=\"form-control dateControl dateTime\" type=\"text\" ";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" />
            <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 212
    public function macro_time($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 213
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1 ";
            // line 214
            if ((($context["title"] ?? null) == "")) {
                yield "d-none";
            }
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"input-group\">
            <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
            <input class=\"form-control dateControl time\" type=\"text\" ";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" />
            <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 223
    public function macro_switch($__name__ = null, $__title__ = null, $__value__ = null, $__labelWidth__ = null, $__switchSize__ = null, $__onText__ = null, $__offText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "labelWidth" => $__labelWidth__,
            "switchSize" => $__switchSize__,
            "onText" => $__onText__,
            "offText" => $__offText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "disabled" => $__disabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 224
            yield "    <div class=\"form-group ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <div class=\"checkbox\">
            <input type=\"checkbox\" class=\"bootstrap-switch-target\" id=\"";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\"
                ";
            // line 227
            if ((($context["value"] ?? null) == 1)) {
                yield "checked";
            }
            // line 228
            yield "                ";
            if ((($context["disabled"] ?? null) == 1)) {
                yield "disabled";
            }
            // line 229
            yield "                data-label-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\"
                ";
            // line 230
            if (!CoreExtension::inFilter(($context["onText"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                yield " data-on-text=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["onText"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 231
            yield "                ";
            if (!CoreExtension::inFilter(($context["offText"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                yield " data-off-text=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["offText"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 232
            yield "                ";
            if (!CoreExtension::inFilter(($context["switchSize"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                yield "data-size=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["switchSize"] ?? null), "html", null, true);
                yield "\"";
            } else {
                yield "data-size=\"small\"";
            }
            // line 233
            yield "                ";
            if (!CoreExtension::inFilter(($context["labelWidth"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                yield " data-label-width=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["labelWidth"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 234
            yield "            >
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 239
    public function macro_color($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 240
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <input class=\"form-control XiboColorPicker\" name=\"";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"text\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 246
    public function macro_inputNameGrid($__name__ = null, $__title__ = null, $__groupClass__ = null, $__useRegexName__ = null, $__logicalOperatorName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "groupClass" => $__groupClass__,
            "useRegexName" => $__useRegexName__,
            "logicalOperatorName" => $__logicalOperatorName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 247
            yield "    <div class=\"form-group mr-1 mb-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"control-label mr-1\" title=\"\" for=\"";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div>
            <div class=\"input-group\">
                <input class=\"form-control\" name=\"";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"text\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"\">
                <div class=\"input-group-append input-group-addon\">
                    <div class=\"input-group-text\">
                        <input title=\"";
            // line 254
            echo __("Use Regex?");
            yield "\" type=\"checkbox\" ";
            if (($context["useRegexName"] ?? null)) {
                yield " id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["useRegexName"] ?? null), "html", null, true);
                yield "\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["useRegexName"] ?? null), "html", null, true);
                yield "\" ";
            } else {
                yield " id=\"useRegexForName\" name=\"useRegexForName\"";
            }
            yield ">
                    </div>
                    <select class=\"custom-select\" ";
            // line 256
            if (($context["logicalOperatorName"] ?? null)) {
                yield " id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["logicalOperatorName"] ?? null), "html", null, true);
                yield "\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["logicalOperatorName"] ?? null), "html", null, true);
                yield "\" ";
            } else {
                yield " id=\"logicalOperatorName\" name=\"logicalOperatorName\"";
            }
            // line 257
            yield "                            title=\"";
            echo __("When filtering by multiple names, which logical operator should be used?");
            yield "\" style=\"min-width:auto!important\">
                        <option value=\"OR\" selected>OR</option>
                        <option value=\"AND\">AND</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 267
    public function macro_dateRangeFilter($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 268
            yield "    <div class=\"form-group mr-1 mb-1 d-flex flex-row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 269
            $context["today"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(($context["now"] ?? null), "today"), "Y-m-d H:i:s");
            // line 270
            yield "        <div class=\"form-group mr-1\">
            <label class=\"control-label mr-1\" title=\"";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">
                ";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "
            </label>
            <div class=\"d-inline-flex\">
                <select class=\"form-control XiboDateRangeFilter\" name=\"";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\">
                    <option value=\"\" >";
            // line 276
            echo __("Select a range");
            yield "</option>
                    <option value=\"today\" selected>";
            // line 277
            echo __("Today");
            yield "</option>
                    <option value=\"yesterday\">";
            // line 278
            echo __("Yesterday");
            yield "</option>
                    <option value=\"thisweek\">";
            // line 279
            echo __("This Week");
            yield "</option>
                    <option value=\"thismonth\">";
            // line 280
            echo __("This Month");
            yield "</option>
                    <option value=\"thisyear\">";
            // line 281
            echo __("This Year");
            yield "</option>
                    <option value=\"lastweek\">";
            // line 282
            echo __("Last Week");
            yield "</option>
                    <option value=\"lastmonth\">";
            // line 283
            echo __("Last Month");
            yield "</option>
                    <option value=\"lastyear\">";
            // line 284
            echo __("Last Year");
            yield "</option>
                </select>
            </div>
        </div>
        <div class=\"form-group hidden mr-1 ";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("rangeFilterInput_" . ($context["name"] ?? null)), "html", null, true);
            yield "\">
            <label class=\"control-label mr-1\" title=\"";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">
                ";
            // line 290
            echo __("From Date");
            // line 291
            yield "            </label>
            <div class=\"input-group\">
                <div class=\"input-group-prepend input-group-text date-open-button\" role=\"button\">
                    <i class=\"fa fa-calendar\"></i>
                </div>
                <input class=\"form-control dateControl date rangeInput\"
                       type=\"text\" name=\"fromDt\" id=\"";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("fromDt_" . ($context["name"] ?? null)), "html", null, true);
            yield "\"
                       value=\"";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["today"] ?? null), "html", null, true);
            yield "\"
                />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\"
                      role=\"button\"
                >
                    <i class=\"fa fa-times\"></i>
                </span>
            </div>
        </div>
        <div class=\"form-group hidden ";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("rangeFilterInput_" . ($context["name"] ?? null)), "html", null, true);
            yield "\">
            <label class=\"control-label mr-1\" title=\"";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">
                ";
            // line 309
            echo __("To Date");
            // line 310
            yield "            </label>
            <div class=\"input-group\">
                <div class=\"input-group-prepend input-group-text date-open-button\" role=\"button\">
                    <i class=\"fa fa-calendar\"></i>
                </div>
                <input class=\"form-control dateControl date rangeInput\"
                       type=\"text\" name=\"toDt\" id=\"";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("toDt_" . ($context["name"] ?? null)), "html", null, true);
            yield "\"
                       value=\"";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(($context["today"] ?? null), "+1 day -1 second"), "Y-m-d H:i:s"), "html", null, true);
            yield "\"
                />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\"
                      role=\"button\"
                >
                    <i class=\"fa fa-times\"></i>
                </span>
            </div>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "inline.twig";
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
        return array (  1572 => 317,  1568 => 316,  1560 => 310,  1558 => 309,  1550 => 308,  1546 => 307,  1534 => 298,  1530 => 297,  1522 => 291,  1520 => 290,  1512 => 289,  1508 => 288,  1501 => 284,  1497 => 283,  1493 => 282,  1489 => 281,  1485 => 280,  1481 => 279,  1477 => 278,  1473 => 277,  1469 => 276,  1463 => 275,  1457 => 272,  1449 => 271,  1446 => 270,  1444 => 269,  1439 => 268,  1421 => 267,  1405 => 257,  1395 => 256,  1380 => 254,  1372 => 251,  1364 => 248,  1359 => 247,  1343 => 246,  1328 => 242,  1318 => 241,  1313 => 240,  1295 => 239,  1286 => 234,  1279 => 233,  1270 => 232,  1263 => 231,  1257 => 230,  1252 => 229,  1247 => 228,  1243 => 227,  1235 => 226,  1229 => 224,  1208 => 223,  1191 => 217,  1175 => 214,  1170 => 213,  1152 => 212,  1135 => 206,  1123 => 203,  1118 => 202,  1100 => 201,  1083 => 195,  1071 => 192,  1066 => 191,  1048 => 190,  1031 => 184,  1019 => 181,  1014 => 180,  996 => 179,  989 => 176,  976 => 173,  968 => 172,  960 => 171,  956 => 170,  953 => 169,  949 => 168,  944 => 166,  940 => 165,  936 => 164,  932 => 163,  928 => 161,  915 => 160,  906 => 155,  900 => 154,  896 => 152,  894 => 151,  891 => 150,  877 => 148,  874 => 147,  871 => 146,  868 => 145,  865 => 144,  862 => 143,  860 => 142,  857 => 141,  854 => 140,  852 => 139,  849 => 138,  845 => 137,  842 => 136,  839 => 135,  836 => 134,  833 => 133,  831 => 132,  826 => 131,  823 => 130,  819 => 129,  816 => 128,  813 => 127,  810 => 126,  807 => 125,  805 => 124,  799 => 122,  788 => 120,  783 => 119,  780 => 118,  774 => 114,  772 => 113,  760 => 112,  750 => 111,  745 => 110,  720 => 109,  704 => 104,  692 => 103,  686 => 101,  667 => 100,  653 => 95,  641 => 94,  635 => 92,  619 => 91,  604 => 87,  594 => 86,  589 => 85,  571 => 84,  556 => 80,  546 => 79,  541 => 78,  523 => 77,  497 => 73,  487 => 72,  482 => 71,  462 => 70,  455 => 67,  437 => 65,  427 => 58,  418 => 56,  400 => 53,  397 => 52,  395 => 51,  385 => 50,  380 => 49,  358 => 48,  343 => 44,  333 => 43,  328 => 42,  310 => 41,  303 => 38,  295 => 36,  287 => 34,  285 => 33,  280 => 32,  265 => 31,  248 => 27,  245 => 26,  231 => 25,  222 => 21,  213 => 20,  199 => 19,  190 => 15,  185 => 14,  172 => 13,  159 => 10,  146 => 9,  137 => 5,  131 => 4,  126 => 3,  110 => 2,  104 => 266,  101 => 245,  98 => 238,  95 => 222,  92 => 211,  89 => 200,  86 => 189,  83 => 178,  80 => 159,  77 => 108,  74 => 99,  71 => 90,  68 => 83,  65 => 76,  62 => 69,  59 => 47,  56 => 40,  53 => 30,  50 => 24,  47 => 18,  44 => 12,  41 => 8,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "inline.twig", "/var/www/cms/views/inline.twig");
    }
}
