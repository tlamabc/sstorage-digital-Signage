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

/* install-step2.twig */
class __TwigTemplate_10c1d5dc06b67fc977c1509f8550e5b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stepContent' => [$this, 'block_stepContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-install.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "install-step2.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base-install.twig", "install-step2.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stepContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 7
        $context["themeName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["app_name"], "method", false, false, false, 7);
        // line 8
        yield "            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#new\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 9
        echo __("New");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#existing\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 10
        echo __("Existing");
        yield "</span></a></li>
            </ul>
            <form action=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 3]), "html", null, true);
        yield "\" class=\"form-horizontal\" method=\"post\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"new\">
                        ";
        // line 15
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            /* xgettext:no-php-format */            echo strtr(__("%themeName% needs to set-up a connection to your MySQL database."), array("%themeName%" => ($context["themeName"] ?? null), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 16, $context, $this->getSourceContext());
        yield "

                        ";
        // line 18
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("If you have not yet created an empty database and database user for Xibo to use, and know the user name / password of a MySQL administrator stay on this tab, otherwise click \"Use Existing\".");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 19, $context, $this->getSourceContext());
        yield "

                        ";
        // line 21
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Create a new database");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select to create a new database");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_radio", ["db_create", "db_create1", ($context["title"] ?? null), (($__internal_compile_0 = ($context["session"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["db_create"] ?? null) : null), ($context["helpText"] ?? null), "", "", 1], 23, $context, $this->getSourceContext());
        yield "

                        ";
        // line 25
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Host");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter the hostname for the MySQL server. This is usually localhost.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["host", ($context["title"] ?? null), (($__internal_compile_1 = ($context["session"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["new_db_host"] ?? null) : null), ($context["helpText"] ?? null)], 27, $context, $this->getSourceContext());
        yield "

                        ";
        // line 29
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Admin Username");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter the user name of an account that has administrator privileges on the MySQL server.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["admin_username", ($context["title"] ?? null), (($__internal_compile_2 = ($context["session"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["db_admin_user"] ?? null) : null), ($context["helpText"] ?? null)], 31, $context, $this->getSourceContext());
        yield "

                        ";
        // line 33
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Admin Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter password for the Admin account.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_password", ["admin_password", ($context["title"] ?? null), (($__internal_compile_3 = ($context["session"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["db_admin_pass"] ?? null) : null), ($context["helpText"] ?? null)], 35, $context, $this->getSourceContext());
        yield "

                        ";
        // line 37
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Database Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter the name of the database that should be created.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["db_name", ($context["title"] ?? null), (($__internal_compile_4 = ($context["session"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["new_db_name"] ?? null) : null), ($context["helpText"] ?? null)], 39, $context, $this->getSourceContext());
        yield "

                        ";
        // line 41
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Database Username");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter the name of the database user that should be created.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["db_username", ($context["title"] ?? null), (($__internal_compile_5 = ($context["session"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["new_db_user"] ?? null) : null), ($context["helpText"] ?? null)], 43, $context, $this->getSourceContext());
        yield "

                        ";
        // line 45
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Database Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter a password for this user.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_password", ["db_password", ($context["title"] ?? null), (($__internal_compile_6 = ($context["session"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["new_db_pass"] ?? null) : null), ($context["helpText"] ?? null)], 47, $context, $this->getSourceContext());
        yield "

                        ";
        // line 49
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("CA File");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("To connect to a MySQL server over SSL, enter the path to the CA file.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["db_ssl_ca", ($context["title"] ?? null), (($__internal_compile_7 = ($context["session"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["new_db_ssl_ca"] ?? null) : null), ($context["helpText"] ?? null)], 51, $context, $this->getSourceContext());
        yield "

                        ";
        // line 53
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Verify CA Identity?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Turn this off for self-signed certificates.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["db_ssl_verify", ($context["title"] ?? null), (($__internal_compile_8 = ($context["session"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["new_db_ssl_verify"] ?? null) : null), ($context["helpText"] ?? null)], 55, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"existing\">
                        ";
        // line 58
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use an existing database");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select to use an existing database. Please note that when you use an existing database it must be empty of all other contents.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_radio", ["db_create", "db_create2", ($context["title"] ?? null), (($__internal_compile_9 = ($context["session"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["db_create"] ?? null) : null), ($context["helpText"] ?? null), "", "", 2], 60, $context, $this->getSourceContext());
        yield "

                        ";
        // line 62
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Host");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter the hostname for the MySQL server. This is usually localhost.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["existing_host", ($context["title"] ?? null), (($__internal_compile_10 = ($context["session"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["existing_db_host"] ?? null) : null), ($context["helpText"] ?? null)], 64, $context, $this->getSourceContext());
        yield "

                        ";
        // line 66
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Database Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter the name of the database that should be used.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["existing_db_name", ($context["title"] ?? null), (($__internal_compile_11 = ($context["session"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["existing_db_name"] ?? null) : null), ($context["helpText"] ?? null)], 68, $context, $this->getSourceContext());
        yield "

                        ";
        // line 70
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Database Username");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter the name of the database user that should be used.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["existing_db_username", ($context["title"] ?? null), (($__internal_compile_12 = ($context["session"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["existing_db_user"] ?? null) : null), ($context["helpText"] ?? null)], 72, $context, $this->getSourceContext());
        yield "

                        ";
        // line 74
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Database Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter a password for this user.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_password", ["existing_db_password", ($context["title"] ?? null), (($__internal_compile_13 = ($context["session"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["existing_db_pass"] ?? null) : null), ($context["helpText"] ?? null)], 76, $context, $this->getSourceContext());
        yield "

                        ";
        // line 78
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("CA File");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("To connect to a MySQL server over SSL, enter the path to the CA file.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["existing_db_ssl_ca", ($context["title"] ?? null), (($__internal_compile_14 = ($context["session"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["existing_db_ssl_ca"] ?? null) : null), ($context["helpText"] ?? null)], 80, $context, $this->getSourceContext());
        yield "

                        ";
        // line 82
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Verify CA Identity?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Turn this off for self-signed certificates.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["existing_db_ssl_verify", ($context["title"] ?? null), (($__internal_compile_15 = ($context["session"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["existing_db_ssl_verify"] ?? null) : null), ($context["helpText"] ?? null)], 84, $context, $this->getSourceContext());
        yield "
                    </div>
                </div>

                ";
        // line 88
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Next");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        yield "                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_button", [($context["title"] ?? null), "submit"], 89, $context, $this->getSourceContext());
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
        return "install-step2.twig";
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
        return array (  380 => 89,  375 => 88,  367 => 84,  361 => 83,  356 => 82,  350 => 80,  344 => 79,  339 => 78,  333 => 76,  327 => 75,  322 => 74,  316 => 72,  310 => 71,  305 => 70,  299 => 68,  293 => 67,  288 => 66,  282 => 64,  276 => 63,  271 => 62,  265 => 60,  259 => 59,  254 => 58,  247 => 55,  241 => 54,  236 => 53,  230 => 51,  224 => 50,  219 => 49,  213 => 47,  207 => 46,  202 => 45,  196 => 43,  190 => 42,  185 => 41,  179 => 39,  173 => 38,  168 => 37,  162 => 35,  156 => 34,  151 => 33,  145 => 31,  139 => 30,  134 => 29,  128 => 27,  122 => 26,  117 => 25,  111 => 23,  105 => 22,  100 => 21,  94 => 19,  89 => 18,  83 => 16,  78 => 15,  72 => 12,  67 => 10,  63 => 9,  60 => 8,  58 => 7,  54 => 5,  50 => 4,  45 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install-step2.twig", "/var/www/cms/views/install-step2.twig");
    }
}
