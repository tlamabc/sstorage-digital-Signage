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

/* forms.twig */
class __TwigTemplate_5795ea4525117495f8af279098b65bc1 extends Template
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
        // line 11
        yield "
";
        // line 15
        yield "
";
        // line 23
        yield "
";
        // line 31
        yield "
";
        // line 37
        yield "
";
        // line 49
        yield "
";
        // line 59
        yield "
";
        // line 74
        yield "
";
        // line 92
        yield "
";
        // line 120
        yield "
";
        // line 130
        yield "
";
        // line 140
        yield "
";
        // line 150
        yield "
";
        // line 169
        yield "
";
        // line 181
        yield "
";
        // line 193
        yield "
";
        // line 273
        yield "
";
        // line 287
        yield "
";
        // line 301
        yield "
";
        // line 315
        yield "
";
        // line 329
        yield "
";
        // line 348
        yield "
";
        // line 360
        yield "
";
        // line 376
        yield "
";
        // line 396
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
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\">";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "</p>
            <small class=\"form-text text-muted\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 12
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
            // line 13
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

    // line 16
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
            // line 17
            yield "    <div class=\"row\">
        <div class=\"col-sm-12 ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
            ";
            // line 19
            yield ($context["text"] ?? null);
            yield "
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 24
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
            // line 25
            yield "    <div class=\"row\">
        <div class=\"";
            // line 26
            if (($context["messageStyleClass"] ?? null)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["messageStyleClass"] ?? null), "html", null, true);
            }
            yield " col-sm-12 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
            <p>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "</p>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 32
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
            // line 33
            yield "    <div class=\"row\">
        <div class=\"alert alert-";
            // line 34
            if (($context["alertType"] ?? null)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alertType"] ?? null), "html", null, true);
            } else {
                yield "primary";
            }
            yield " col-sm-12 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "</div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function macro_button($__title__ = null, $__type__ = null, $__link__ = null, $__groupClass__ = null, $__id__ = null, $__buttonClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "type" => $__type__,
            "link" => $__link__,
            "groupClass" => $__groupClass__,
            "id" => $__id__,
            "buttonClass" => $__buttonClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <div class=\"offset-sm-2 col-sm-10\">
            ";
            // line 41
            if ((($context["type"] ?? null) == "link")) {
                // line 42
                yield "            <a class=\"btn ";
                if (($context["buttonClass"] ?? null)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonClass"] ?? null), "html", null, true);
                } else {
                    yield "btn-white";
                }
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</a>
            ";
            } else {
                // line 44
                yield "            <button id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "\" class=\"btn ";
                if (($context["buttonClass"] ?? null)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonClass"] ?? null), "html", null, true);
                } else {
                    yield "btn-white";
                }
                yield " ml-0\" type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</button>
            ";
            }
            // line 46
            yield "        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 50
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
            // line 51
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"text\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
            <small class=\"form-text text-muted\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 60
    public function macro_colorPicker($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
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
            // line 61
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10 colorpicker-input\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <i class=\"input-group-text input-group-addon\" id=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "_label\"></i>
                </div>
                <input class=\"form-control\" name=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"text\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" aria-describedby=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "_label\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
            </div>
            <small class=\"form-text text-muted\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function macro_inputWithButton($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__buttonId__ = null, $__buttonTitle__ = null, $__buttonType__ = null, $__buttonLink__ = null, ...$__varargs__)
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
            "buttonId" => $__buttonId__,
            "buttonTitle" => $__buttonTitle__,
            "buttonType" => $__buttonType__,
            "buttonLink" => $__buttonLink__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 76
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"input-group col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"text\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " aria-describedby=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonId"] ?? null), "html", null, true);
            yield "\" />

            <div class=\"input-group-append\">
                ";
            // line 82
            if ((($context["buttonType"] ?? null) == "link")) {
                // line 83
                yield "                    <a class=\"btn btn-white\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonTitle"] ?? null), "html", null, true);
                yield "</a>
                ";
            } else {
                // line 85
                yield "                    <button id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonId"] ?? null), "html", null, true);
                yield "\" class=\"btn btn-white\" type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonType"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonTitle"] ?? null), "html", null, true);
                yield "</button>
                ";
            }
            // line 87
            yield "            </div>
        </div>
        <small class=\"form-text offset-2 px-4 text-muted\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 93
    public function macro_inputWithTags($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__exactTag__ = null, $__exactTagTitle__ = null, $__logicalOperatorTitle__ = null, $__exactTagValue__ = null, $__logicalOperatorValue__ = null, $__autoCompleteEnabled__ = 1, ...$__varargs__)
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
            "exactTagValue" => $__exactTagValue__,
            "logicalOperatorValue" => $__logicalOperatorValue__,
            "autoCompleteEnabled" => $__autoCompleteEnabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 94
            yield "        ";
            if (($context["exactTag"] ?? null)) {
                // line 95
                yield "            <div class=\"form-group tags-input-addons-wide row ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" accesskey=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</label>
            <div class=\"input-group input-group-tags-exact col-sm-10\">
                <input class=\"form-control\" name=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" type=\"text\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" data-role=\"tagsInputForm\" ";
                if ((($context["autoCompleteEnabled"] ?? null) == 1)) {
                    yield " data-auto-complete-url=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
                    yield "?allTags=1\" ";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
                yield " />
                <div class=\"input-group-append input-group-addon\">
                    <div class=\"input-group-text\">
                        <input title=\"";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["exactTagTitle"] ?? null), "html", null, true);
                yield "\" type=\"checkbox\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["exactTag"] ?? null), "html", null, true);
                yield "\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["exactTag"] ?? null), "html", null, true);
                yield "\" ";
                if (($context["exactTagValue"] ?? null)) {
                    yield "checked";
                }
                yield ">
                    </div>
                    <select class=\"custom-select\" id=\"logicalOperator\" name=\"logicalOperator\" title=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["logicalOperatorTitle"] ?? null), "html", null, true);
                yield "\" >
                        <option value=\"OR\" ";
                // line 104
                if ((($context["logicalOperatorValue"] ?? null) != "AND")) {
                    yield "selected";
                }
                yield ">OR</option>
                        <option value=\"AND\" ";
                // line 105
                if ((($context["logicalOperatorValue"] ?? null) == "AND")) {
                    yield "selected";
                }
                yield ">AND</option>
                    </select>
                </div>
                <small class=\"form-text text-muted\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
                yield "</small>
            </div>
        ";
            } else {
                // line 111
                yield "            <div class=\"form-group tags-input-wide row ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" accesskey=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</label>
            <div class=\"col-sm-10\">
                <input class=\"form-control\" name=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" type=\"text\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" data-role=\"tagsInputForm\" ";
                if ((($context["autoCompleteEnabled"] ?? null) == 1)) {
                    yield " data-auto-complete-url=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
                    yield "?allTags=1\" ";
                }
                yield "  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
                yield " />
                <small class=\"form-text text-muted\">";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
                yield "</small>
            </div>
        ";
            }
            // line 118
            yield "    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 121
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
            // line 122
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" ";
            if ((($context["maxNumber"] ?? null) != ($context["undefined"] ?? null))) {
                yield "max=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxNumber"] ?? null), "html", null, true);
                yield "\" ";
            }
            if ((($context["minNumber"] ?? null) != ($context["undefined"] ?? null))) {
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
            <small class=\"form-text text-muted\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 131
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
            // line 132
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"email\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
            <small class=\"form-text text-muted\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 141
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
            // line 142
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"password\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
            <small class=\"form-text text-muted\">";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 151
    public function macro_textarea($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__rows__ = null, $__inline__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "rows" => $__rows__,
            "inline" => $__inline__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 152
            yield "    ";
            if ((($context["inline"] ?? null) == true)) {
                // line 153
                yield "        <div class=\"form-group row ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</label>
            <div class=\"col-sm-10\">
                <textarea class=\"form-control\" name=\"";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" rows=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rows"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "</textarea>
                <small class=\"form-text text-muted\">";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
                yield "</small>
            </div>
        </div>
    ";
            } else {
                // line 161
                yield "        <div class=\"form-group row ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
                yield "\">
            <div class=\"col-sm-12\">
                <small class=\"form-text text-muted\">";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
                yield "</small>
                <textarea class=\"form-control\" name=\"";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" rows=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rows"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "</textarea>
            </div>
        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 170
    public function macro_checkbox($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, $__id__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "disabled" => $__disabled__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 171
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <div class=\"offset-sm-2 col-sm-10\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" ";
            // line 174
            if (($context["id"] ?? null)) {
                yield " id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "\" ";
            } else {
                yield " id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" ";
            }
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" ";
            if ((($context["value"] ?? null) == 1)) {
                yield "checked";
            }
            yield " ";
            if ((($context["disabled"] ?? null) == 1)) {
                yield "disabled";
            }
            yield ">
                <label class=\"form-check-label\" ";
            // line 175
            if (($context["id"] ?? null)) {
                yield " for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "\" ";
            } else {
                yield " for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" ";
            }
            yield " accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
            </div>
            <small class=\"form-text text-muted\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 182
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
            // line 183
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <div class=\"offset-sm-2 col-sm-10\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" id=\"";
            // line 186
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
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
            </div>
            <small class=\"form-text text-muted\">";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 194
    public function macro_dropdown($__name__ = null, $__type__ = null, $__title__ = null, $__value__ = null, $__options__ = null, $__optionId__ = null, $__optionValue__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__callBack__ = null, $__dataAttributes__ = null, $__optionGroups__ = null, $__optionImageValue__ = null, $__optionFilter__ = null, $__readonly__ = null, ...$__varargs__)
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
            "optionImageValue" => $__optionImageValue__,
            "optionFilter" => $__optionFilter__,
            "readonly" => $__readonly__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 195
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <select class=\"form-control\" ";
            // line 198
            if ((($context["type"] ?? null) == "dropdownmulti")) {
                yield "multiple";
            }
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["callBack"] ?? null), "html", null, true);
            yield " ";
            if (($context["readonly"] ?? null)) {
                yield "readonly";
            }
            // line 199
            yield "                ";
            if ((($context["type"] ?? null) == "dropdownmulti")) {
                // line 200
                yield "                    data-allow-clear=\"true\"
                    data-placeholder--id=null
                    data-placeholder--value=\"\"
                ";
            }
            // line 204
            yield "                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["dataAttributes"] ?? null)) > 0)) {
                // line 205
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["dataAttributes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 206
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 206), "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 206), "html", null, true);
                    yield "\"
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                yield "                ";
            }
            // line 209
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield ">

            ";
            // line 211
            $context["hasGroups"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["optionGroups"] ?? null)) > 0);
            // line 212
            yield "            ";
            if ( !($context["hasGroups"] ?? null)) {
                // line 213
                yield "                ";
                $context["optionGroups"] = ["label" => "General"];
                // line 214
                yield "            ";
            }
            // line 215
            yield "
            ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["optionGroups"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 217
                yield "                ";
                if (($context["hasGroups"] ?? null)) {
                    // line 218
                    yield "                    <optgroup label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 218), "html", null, true);
                    yield "\">
                    ";
                    // line 219
                    $context["tempOptions"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 219), [], "any", false, false, false, 219);
                    // line 220
                    yield "                ";
                } else {
                    // line 221
                    yield "                    ";
                    $context["tempOptions"] = ($context["options"] ?? null);
                    // line 222
                    yield "                ";
                }
                // line 223
                yield "
                ";
                // line 224
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["tempOptions"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 225
                    yield "
                    ";
                    // line 226
                    if ((($context["optionId"] ?? null) == "")) {
                        // line 227
                        yield "                        ";
                        $context["itemOptionId"] = $context["option"];
                        // line 228
                        yield "                        ";
                        $context["itemOptionValue"] = $context["option"];
                        // line 229
                        yield "                        ";
                        if (($context["optionImageValue"] ?? null)) {
                            // line 230
                            yield "                            ";
                            $context["itemOptionImageValue"] = $context["option"];
                            // line 231
                            yield "                        ";
                        }
                        // line 232
                        yield "                    ";
                    } else {
                        // line 233
                        yield "                        ";
                        $context["itemOptionId"] = CoreExtension::getAttribute($this->env, $this->source, $context["option"], ($context["optionId"] ?? null), [], "any", false, false, false, 233);
                        // line 234
                        yield "                        ";
                        $context["itemOptionValue"] = CoreExtension::getAttribute($this->env, $this->source, $context["option"], ($context["optionValue"] ?? null), [], "any", false, false, false, 234);
                        // line 235
                        yield "                        ";
                        if (($context["optionImageValue"] ?? null)) {
                            // line 236
                            yield "                            ";
                            $context["itemOptionImageValue"] = CoreExtension::getAttribute($this->env, $this->source, $context["option"], ($context["optionImageValue"] ?? null), [], "any", false, false, false, 236);
                            // line 237
                            yield "                        ";
                        }
                        // line 238
                        yield "                    ";
                    }
                    // line 239
                    yield "
                    ";
                    // line 240
                    if ((($context["type"] ?? null) == "dropdownmulti")) {
                        // line 241
                        yield "                        ";
                        $context["selected"] = CoreExtension::inFilter(($context["itemOptionId"] ?? null), ($context["value"] ?? null));
                        // line 242
                        yield "                    ";
                    } else {
                        // line 243
                        yield "                        ";
                        $context["selected"] = (($context["itemOptionId"] ?? null) == ($context["value"] ?? null));
                        // line 244
                        yield "                    ";
                    }
                    // line 245
                    yield "
                    <option value=\"";
                    // line 246
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemOptionId"] ?? null), "html", null, true);
                    yield "\" ";
                    if (($context["selected"] ?? null)) {
                        yield "selected";
                    }
                    // line 247
                    yield "                            ";
                    if (($context["itemOptionImageValue"] ?? null)) {
                        // line 248
                        yield "                                data-content=\"<span class='media'><span class='media-left mr-2'><img style='max-width: 100px; max-height: 80px;' src='";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemOptionImageValue"] ?? null), "html", null, true);
                        yield "' /></span> <span class='media-body'>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemOptionValue"] ?? null), "html", null, true);
                        yield "</span></span>\"
                            ";
                    }
                    // line 250
                    yield "
                            ";
                    // line 251
                    if (($context["optionFilter"] ?? null)) {
                        // line 252
                        yield "                                ";
                        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["optionFilter"] ?? null), 0, [], "array", true, true, false, 252)) {
                            // line 253
                            yield "                                    data-filter-class=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], ($context["optionFilter"] ?? null), [], "any", false, false, false, 253), "html", null, true);
                            yield "\"
                                ";
                        } else {
                            // line 255
                            yield "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(($context["optionFilter"] ?? null));
                            $context['loop'] = [
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            ];
                            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                                $length = count($context['_seq']);
                                $context['loop']['revindex0'] = $length - 1;
                                $context['loop']['revindex'] = $length;
                                $context['loop']['length'] = $length;
                                $context['loop']['last'] = 1 === $length;
                            }
                            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                                // line 256
                                yield "                                        data-filter";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 256), "html", null, true);
                                yield "-class=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], $context["filter"], [], "any", false, false, false, 256), "html", null, true);
                                yield "\"
                                    ";
                                ++$context['loop']['index0'];
                                ++$context['loop']['index'];
                                $context['loop']['first'] = false;
                                if (isset($context['loop']['length'])) {
                                    --$context['loop']['revindex0'];
                                    --$context['loop']['revindex'];
                                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 258
                            yield "                                ";
                        }
                        // line 259
                        yield "                            ";
                    }
                    // line 260
                    yield "                    >";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemOptionValue"] ?? null), "html", null, true);
                    yield "</option>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 262
                yield "
                ";
                // line 263
                if (($context["hasGroups"] ?? null)) {
                    // line 264
                    yield "                    </optgroup>
                ";
                }
                // line 266
                yield "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            yield "
            </select>
            <small class=\"form-text text-muted\">";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 274
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
            // line 275
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateControl date\" type=\"text\" ";
            // line 280
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
            <small class=\"form-text text-muted\">";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 288
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
            // line 289
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateControl dateTime\" type=\"text\" ";
            // line 294
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
            <small class=\"form-text text-muted\">";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 302
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
            // line 303
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" title=\"";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateControl month\" type=\"text\" ";
            // line 308
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
            <small class=\"form-text text-muted\">";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 316
    public function macro_time($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__customFormat__ = null, ...$__varargs__)
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
            "customFormat" => $__customFormat__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 317
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateControl time\" type=\"text\" ";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["customFormat"] ?? null)) {
                yield "data-custom-format=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["customFormat"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 330
    public function macro_switch($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__labelWidth__ = null, $__switchSize__ = null, $__onText__ = null, $__offText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
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
            // line 331
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <div class=\"offset-sm-2 col-sm-10\">
            <div class=\"checkbox\" title=\"";
            // line 333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\">
                <input type=\"checkbox\" class=\"bootstrap-switch-target\" id=\"";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\"
                    ";
            // line 335
            if ((($context["value"] ?? null) == 1)) {
                yield "checked";
            }
            // line 336
            yield "                    ";
            if ((($context["disabled"] ?? null) == 1)) {
                yield "disabled";
            }
            // line 337
            yield "                    data-label-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\"
                    ";
            // line 338
            if (!CoreExtension::inFilter(($context["onText"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                yield " data-on-text=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["onText"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 339
            yield "                    ";
            if (!CoreExtension::inFilter(($context["offText"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                yield " data-off-text=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["offText"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 340
            yield "                    ";
            if (!CoreExtension::inFilter(($context["switchSize"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                yield "data-size=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["switchSize"] ?? null), "html", null, true);
                yield "\"";
            } else {
                yield "data-size=\"small\"";
            }
            // line 341
            yield "                    ";
            if (!CoreExtension::inFilter(($context["labelWidth"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                yield " data-label-width=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["labelWidth"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 342
            yield "                    >
            </div>
            <small class=\"form-text text-muted\">";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 349
    public function macro_playerCompat($__android__ = null, $__linux__ = null, $__tizen__ = null, $__webos__ = null, $__windows__ = null, $__message__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "android" => $__android__,
            "linux" => $__linux__,
            "tizen" => $__tizen__,
            "webos" => $__webos__,
            "windows" => $__windows__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 350
            yield "    <span class=\"fa fa-info-circle\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-html=\"true\"
          data-content='";
            // line 351
            if (($context["message"] ?? null)) {
                yield "<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
                yield "</p>";
            }
            yield "<ul class=\"player-compatibility\">
                ";
            // line 352
            if (($context["android"] ?? null)) {
                yield "<li><span class=\"fa fa-android\"></span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["android"] ?? null), "html", null, true);
                yield "</li>";
            }
            // line 353
            yield "                ";
            if (($context["linux"] ?? null)) {
                yield "<li><span class=\"fa fa-linux\"></span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["linux"] ?? null), "html", null, true);
                yield "</li>";
            }
            // line 354
            yield "                ";
            if (($context["tizen"] ?? null)) {
                yield "<li>Tizen: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tizen"] ?? null), "html", null, true);
                yield "</li>";
            }
            // line 355
            yield "                ";
            if (($context["webos"] ?? null)) {
                yield "<li>webOS: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["webos"] ?? null), "html", null, true);
                yield "</li>";
            }
            // line 356
            yield "                ";
            if (($context["windows"] ?? null)) {
                yield "<li><span class=\"fa fa-windows\"></span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["windows"] ?? null), "html", null, true);
                yield "</li>";
            }
            // line 357
            yield "            </ul>'>
    </span>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 361
    public function macro_inputWithLogicalOperator($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__logicalOperatorValue__ = null, ...$__varargs__)
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
            "logicalOperatorValue" => $__logicalOperatorValue__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 362
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"input-group col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"text\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
            <div class=\"input-group-append input-group-addon\">
                <select class=\"custom-select\" id=\"logicalOperatorName\" name=\"logicalOperatorName\" title=\"";
            // line 367
            echo __("When filtering by multiple names, which logical operator should be used?");
            yield "\">
                        <option value=\"OR\" ";
            // line 368
            if ((($context["logicalOperatorValue"] ?? null) != "AND")) {
                yield "selected";
            }
            yield ">OR</option>
                        <option value=\"AND\" ";
            // line 369
            if ((($context["logicalOperatorValue"] ?? null) == "AND")) {
                yield "selected";
            }
            yield ">AND</option>
                </select>
            </div>
            <small class=\"form-text text-muted\">";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 377
    public function macro_inputFullScreenSchedule($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__idValue__ = null, $__validation__ = null, $__accessKey__ = null, $__readonly__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "idValue" => $__idValue__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "readonly" => $__readonly__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 378
            yield "    <div class=\"form-group row input-full-screen-layout ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" id=\"fullScreen-";
            // line 382
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " readonly />
                <input type=\"hidden\" id=\"fullScreen-";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "Id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["idValue"] ?? null), "html", null, true);
            yield "\"/>
                <div class=\"input-group-append input-group-addon\">
                    <button class=\"btn btn-outline-secondary full-screen-layout-form\" type=\"button\"
                        id=\"fullScreenControl_";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\"
                        data-no-layout=\"";
            // line 387
            echo __("Choose");
            yield "\" data-has-layout=\"";
            echo __("Change");
            yield "\" data-readonly=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["readonly"] ?? null), "html", null, true);
            yield "\">
                        ";
            // line 388
            if (($context["idValue"] ?? null)) {
                echo __("Change");
            } else {
                echo __("Choose");
            }
            // line 389
            yield "                    </button>
                </div>
            </div>
            <small class=\"form-text text-muted\">";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 397
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
            // line 398
            yield "    <div class=\"form-group mr-1 mb-1 d-flex flex-row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 399
            $context["today"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(($context["now"] ?? null), "today"), "Y-m-d H:i:s");
            // line 400
            yield "        <div class=\"form-group mr-1\">
            <label class=\"control-label mr-1\" title=\"";
            // line 401
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">
                ";
            // line 402
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "
            </label>
            <div class=\"d-inline-flex\">
                <select class=\"form-control XiboDateRangeFilter\" name=\"";
            // line 405
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\">
                    <option value=\"\" >";
            // line 406
            echo __("Select a range");
            yield "</option>
                    <option value=\"today\" selected>";
            // line 407
            echo __("Today");
            yield "</option>
                    <option value=\"yesterday\">";
            // line 408
            echo __("Yesterday");
            yield "</option>
                    <option value=\"thisweek\">";
            // line 409
            echo __("This Week");
            yield "</option>
                    <option value=\"thismonth\">";
            // line 410
            echo __("This Month");
            yield "</option>
                    <option value=\"thisyear\">";
            // line 411
            echo __("This Year");
            yield "</option>
                    <option value=\"lastweek\">";
            // line 412
            echo __("Last Week");
            yield "</option>
                    <option value=\"lastmonth\">";
            // line 413
            echo __("Last Month");
            yield "</option>
                    <option value=\"lastyear\">";
            // line 414
            echo __("Last Year");
            yield "</option>
                </select>
            </div>
        </div>
        <div class=\"form-group hidden mr-1 ";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("rangeFilterInput_" . ($context["name"] ?? null)), "html", null, true);
            yield "\">
            <label class=\"control-label mr-1\" title=\"";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">
                ";
            // line 420
            echo __("From Date");
            // line 421
            yield "            </label>
            <div class=\"input-group\">
                <div class=\"input-group-prepend input-group-text date-open-button\" role=\"button\">
                    <i class=\"fa fa-calendar\"></i>
                </div>
                <input class=\"form-control dateControl date rangeInput\"
                       type=\"text\" name=\"fromDt\" id=\"";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("fromDt_" . ($context["name"] ?? null)), "html", null, true);
            yield "\"
                       value=\"";
            // line 428
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
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("rangeFilterInput_" . ($context["name"] ?? null)), "html", null, true);
            yield "\">
            <label class=\"control-label mr-1\" title=\"";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">
                ";
            // line 439
            echo __("To Date");
            // line 440
            yield "            </label>
            <div class=\"input-group\">
                <div class=\"input-group-prepend input-group-text date-open-button\" role=\"button\">
                    <i class=\"fa fa-calendar\"></i>
                </div>
                <input class=\"form-control dateControl date rangeInput\"
                       type=\"text\" name=\"toDt\" id=\"";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("toDt_" . ($context["name"] ?? null)), "html", null, true);
            yield "\"
                       value=\"";
            // line 447
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
        return "forms.twig";
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
        return array (  2125 => 447,  2121 => 446,  2113 => 440,  2111 => 439,  2103 => 438,  2099 => 437,  2087 => 428,  2083 => 427,  2075 => 421,  2073 => 420,  2065 => 419,  2061 => 418,  2054 => 414,  2050 => 413,  2046 => 412,  2042 => 411,  2038 => 410,  2034 => 409,  2030 => 408,  2026 => 407,  2022 => 406,  2016 => 405,  2010 => 402,  2002 => 401,  1999 => 400,  1997 => 399,  1992 => 398,  1974 => 397,  1964 => 392,  1959 => 389,  1953 => 388,  1945 => 387,  1941 => 386,  1933 => 383,  1925 => 382,  1915 => 379,  1910 => 378,  1890 => 377,  1880 => 372,  1872 => 369,  1866 => 368,  1862 => 367,  1851 => 365,  1842 => 363,  1837 => 362,  1818 => 361,  1810 => 357,  1803 => 356,  1796 => 355,  1789 => 354,  1782 => 353,  1776 => 352,  1768 => 351,  1765 => 350,  1748 => 349,  1738 => 344,  1734 => 342,  1727 => 341,  1718 => 340,  1711 => 339,  1705 => 338,  1700 => 337,  1695 => 336,  1691 => 335,  1683 => 334,  1679 => 333,  1673 => 331,  1651 => 330,  1641 => 325,  1623 => 322,  1612 => 318,  1607 => 317,  1588 => 316,  1578 => 311,  1566 => 308,  1553 => 304,  1548 => 303,  1530 => 302,  1520 => 297,  1508 => 294,  1497 => 290,  1492 => 289,  1474 => 288,  1464 => 283,  1452 => 280,  1441 => 276,  1436 => 275,  1418 => 274,  1408 => 269,  1404 => 267,  1390 => 266,  1386 => 264,  1384 => 263,  1381 => 262,  1364 => 260,  1361 => 259,  1358 => 258,  1339 => 256,  1321 => 255,  1315 => 253,  1312 => 252,  1310 => 251,  1307 => 250,  1299 => 248,  1296 => 247,  1290 => 246,  1287 => 245,  1284 => 244,  1281 => 243,  1278 => 242,  1275 => 241,  1273 => 240,  1270 => 239,  1267 => 238,  1264 => 237,  1261 => 236,  1258 => 235,  1255 => 234,  1252 => 233,  1249 => 232,  1246 => 231,  1243 => 230,  1240 => 229,  1237 => 228,  1234 => 227,  1232 => 226,  1229 => 225,  1212 => 224,  1209 => 223,  1206 => 222,  1203 => 221,  1200 => 220,  1198 => 219,  1193 => 218,  1190 => 217,  1173 => 216,  1170 => 215,  1167 => 214,  1164 => 213,  1161 => 212,  1159 => 211,  1153 => 209,  1150 => 208,  1139 => 206,  1134 => 205,  1131 => 204,  1125 => 200,  1122 => 199,  1108 => 198,  1099 => 196,  1094 => 195,  1066 => 194,  1056 => 189,  1047 => 187,  1035 => 186,  1028 => 183,  1009 => 182,  999 => 177,  982 => 175,  960 => 174,  953 => 171,  934 => 170,  915 => 164,  911 => 163,  905 => 161,  898 => 157,  886 => 156,  879 => 154,  874 => 153,  871 => 152,  852 => 151,  842 => 146,  832 => 145,  823 => 143,  818 => 142,  800 => 141,  790 => 136,  780 => 135,  771 => 133,  766 => 132,  748 => 131,  738 => 126,  717 => 125,  708 => 123,  703 => 122,  683 => 121,  676 => 118,  670 => 115,  654 => 114,  645 => 112,  640 => 111,  634 => 108,  626 => 105,  620 => 104,  616 => 103,  603 => 101,  585 => 98,  576 => 96,  571 => 95,  568 => 94,  544 => 93,  535 => 89,  531 => 87,  521 => 85,  513 => 83,  511 => 82,  497 => 79,  488 => 77,  483 => 76,  461 => 75,  451 => 70,  438 => 68,  433 => 66,  422 => 62,  417 => 61,  399 => 60,  389 => 55,  379 => 54,  370 => 52,  365 => 51,  347 => 50,  339 => 46,  323 => 44,  309 => 42,  307 => 41,  301 => 39,  284 => 38,  267 => 34,  264 => 33,  250 => 32,  240 => 27,  232 => 26,  229 => 25,  215 => 24,  205 => 19,  201 => 18,  198 => 17,  185 => 16,  172 => 13,  159 => 12,  149 => 7,  145 => 6,  140 => 4,  135 => 3,  119 => 2,  113 => 396,  110 => 376,  107 => 360,  104 => 348,  101 => 329,  98 => 315,  95 => 301,  92 => 287,  89 => 273,  86 => 193,  83 => 181,  80 => 169,  77 => 150,  74 => 140,  71 => 130,  68 => 120,  65 => 92,  62 => 74,  59 => 59,  56 => 49,  53 => 37,  50 => 31,  47 => 23,  44 => 15,  41 => 11,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forms.twig", "/var/www/cms/views/forms.twig");
    }
}
