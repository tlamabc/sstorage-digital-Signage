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

/* displayprofile-form-edit.twig */
class __TwigTemplate_a438dde1a8dbd6f3dcb2e7ccf1f7d6ce extends Template
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
            'formFieldActions' => [$this, 'block_formFieldActions'],
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
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "displayprofile-form-edit.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Edit Profile");
        return; yield '';
    }

    // line 30
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 32
        echo __("Save");
        yield ", displayProfileEditFormSubmit()
";
        return; yield '';
    }

    // line 35
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    [
        {
        \"field\": \"statsEnabled\", \"trigger\": \"init\",
        \"operation\": \"is:checked\", \"value\": false,
        \"actions\": { \".aggregation-level\": { \"display\": \"none\" } }
        },{
        \"field\": \"statsEnabled\", \"trigger\": \"change\",
        \"operation\": \"is:checked\", \"value\": false,
        \"actions\": { \".aggregation-level\": { \"display\": \"none\" } }
        },
        {
        \"field\": \"statsEnabled\", \"trigger\": \"init\",
        \"operation\": \"is:checked\", \"value\": true,
        \"actions\": { \".aggregation-level\": { \"display\": \"\" } }
        },{
        \"field\": \"statsEnabled\", \"trigger\": \"change\",
        \"operation\": \"is:checked\", \"value\": true,
        \"actions\": { \".aggregation-level\": { \"display\": \"\" } }
        }
    ]
";
        return; yield '';
    }

    // line 58
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "displayProfileFormOpen";
        return; yield '';
    }

    // line 60
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        yield "    ";
        // line 62
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 62) == "android")) {
            // line 63
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "displayprofile-form-edit-android.twig");
            yield "
    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 64) == "windows")) {
            // line 65
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "displayprofile-form-edit-windows.twig");
            yield "
    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 66) == "linux")) {
            // line 67
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "displayprofile-form-edit-linux.twig");
            yield "
    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 68) == "lg") || (CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 68) == "sssp"))) {
            // line 69
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "displayprofile-form-edit-soc.twig");
            yield "
    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 70) == "chromeOS")) {
            // line 71
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "displayprofile-form-edit-chromeos.twig");
            yield "
    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["displayProfile"] ?? null), "isCustom", [], "method", false, false, false, 72)) {
            // line 73
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getCustomEditTemplate", [], "method", false, false, false, 73));
            yield "
    ";
        } else {
            // line 75
            yield "        ";
            $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This is an unknown type of Player and there are no special settings for it.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            yield "        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 76, $context, $this->getSourceContext());
            yield "

        ";
            // line 78
            yield Twig\Extension\CoreExtension::include($this->env, $context, "displayprofile-form-edit-common-fields.twig");
            yield "
    ";
        }
        // line 80
        yield "
    ";
        // line 81
        yield Twig\Extension\CoreExtension::include($this->env, $context, "displayprofile-form-edit-javascript.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "displayprofile-form-edit.twig";
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
        return array (  186 => 81,  183 => 80,  178 => 78,  172 => 76,  166 => 75,  160 => 73,  158 => 72,  153 => 71,  151 => 70,  146 => 69,  144 => 68,  139 => 67,  137 => 66,  132 => 65,  130 => 64,  125 => 63,  122 => 62,  120 => 61,  116 => 60,  108 => 58,  80 => 35,  73 => 32,  68 => 31,  64 => 30,  58 => 27,  54 => 26,  49 => 23,  47 => 24,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit.twig", "/var/www/cms/views/displayprofile-form-edit.twig");
    }
}
