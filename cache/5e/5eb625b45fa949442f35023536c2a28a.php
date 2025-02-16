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

/* user-form-preferences.twig */
class __TwigTemplate_abb6c32dd89b0b722e2fd2785fc0620e extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-preferences.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-preferences.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Preferences");
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
        yield ", userPreferencesFormSubmit()
";
        return; yield '';
    }

    // line 35
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"userPreferences\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.pref"), "html", null, true);
        yield "\">
                ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["NAVIGATION_MENU_POSITION"], "method", false, false, false, 39) && CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["NAVIGATION_MENU_POSITION"], "method", false, false, false, 39))) {
            // line 40
            yield "                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Navigation Menu");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 41
            yield "                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select where the Navigation Menu should be positioned. Once selected please refresh your browser window to apply changes.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            yield "
                    ";
            // line 43
            $context["defaultOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Use the default configured by your administrator");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 44
            yield "                    ";
            $context["horizontalOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Horizontal along the top");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            yield "                    ";
            $context["verticalOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Vertically on the left");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            yield "                    ";
            $context["options"] = [["id" => "", "value" =>             // line 47
($context["defaultOption"] ?? null)], ["id" => "horizontal", "value" =>             // line 48
($context["horizontalOption"] ?? null)], ["id" => "vertical", "value" =>             // line 49
($context["verticalOption"] ?? null)]];
            // line 51
            yield "                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["navigationMenuPosition", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["navigationMenuPosition", ""], "method", false, false, false, 51), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 51, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 53
        yield "            
                ";
        // line 54
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Force current Library duration?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Assign all Media items to Playlists based on their Library duration, and make it sticky so that changes in the library are not pulled into Layouts.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["useLibraryDuration", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["useLibraryDuration", 0], "method", false, false, false, 56), ($context["helpText"] ?? null)], 56, $context, $this->getSourceContext());
        yield "

                ";
        // line 58
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Auto show thumbnail column?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When requesting a screenshot from a display should the Thumbnail column be automatically shown if it's not visible?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["showThumbnailColumn", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["showThumbnailColumn", 1], "method", false, false, false, 60), ($context["helpText"] ?? null)], 60, $context, $this->getSourceContext());
        yield "

                ";
        // line 62
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Clear all auto submit form choices?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("If you have selected to automatically submit any forms, tick here to reset.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["autoSubmitClearAll", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 64, $context, $this->getSourceContext());
        yield "

                ";
        // line 66
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Always use manual Add User form?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("If selected the manual Add User form will always open when you click Add User, otherwise the onboarding form will open.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isAlwaysUseManualAddUserForm", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["isAlwaysUseManualAddUserForm", 0], "method", false, false, false, 68), ($context["helpText"] ?? null)], 68, $context, $this->getSourceContext());
        yield "

                ";
        // line 70
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Remember Folder tree state globally?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        yield "                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When enabled the Folder tree state will be saved globally, each Page will remember the same state. If disabled, the Folder tree state will be saved per Page.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["rememberFolderTreeStateGlobally", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["rememberFolderTreeStateGlobally", 1], "method", false, false, false, 72), ($context["helpText"] ?? null)], 72, $context, $this->getSourceContext());
        yield "
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
        return "user-form-preferences.twig";
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
        return array (  218 => 72,  212 => 71,  207 => 70,  201 => 68,  195 => 67,  190 => 66,  184 => 64,  178 => 63,  173 => 62,  167 => 60,  161 => 59,  156 => 58,  150 => 56,  144 => 55,  139 => 54,  136 => 53,  130 => 51,  128 => 49,  127 => 48,  126 => 47,  124 => 46,  118 => 45,  112 => 44,  107 => 43,  104 => 42,  98 => 41,  92 => 40,  90 => 39,  86 => 38,  82 => 36,  78 => 35,  71 => 32,  66 => 31,  62 => 30,  56 => 27,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-preferences.twig", "/var/www/cms/views/user-form-preferences.twig");
    }
}
