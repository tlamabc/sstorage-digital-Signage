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

/* dataset-form-edit.twig */
class __TwigTemplate_895ea1efc1800b9e66afd1a672bab1ce extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "dataset-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit DataSet");
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
        yield ", \$(\"#dataSetEditForm\").submit()    
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "dataSetFormOpen";
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
                <li class=\"nav-item tabForRemoteDataSet\"><a class=\"nav-link\" href=\"#gateway\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Remote");
        yield "</span></a></li>
                <li class=\"nav-item tabForRemoteDataSet\"><a class=\"nav-link\" href=\"#auth\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Authentication");
        yield "</span></a></li>
                <li class=\"nav-item tabForRemoteDataSet\"><a class=\"nav-link\" href=\"#data\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Data");
        yield "</span></a></li>
                <li class=\"nav-item tabForRemoteDataSet\"><a class=\"nav-link\" href=\"#params\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("Advanced");
        yield "</span></a></li>
            </ul>
            <form id=\"dataSetEditForm\" class=\"XiboForm custom-validation form-horizontal\" method=\"put\" action=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 48)]), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"testDataSetId\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSetId", [], "any", false, false, false, 49), "html", null, true);
        yield "\"/>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">

                        ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 53)) {
            // line 54
            yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 55
            echo __("Current Folder");
            yield "</label>
                            <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                                <span id=\"originalFormFolder\"></span>
                            </div>
                        </div>

                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 62
            echo __("Move to Selected Folder:");
            yield "</label>
                            <div class=\"col-sm-10\">
                                <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 64
            echo __("Select Folder");
            yield "</button>
                                <span id=\"selectedFormFolder\"></span>
                            </div>
                        </div>
                        ";
            // line 68
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId", CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "folderId", [], "any", false, false, false, 68)], 68, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 70
        yield "
                        ";
        // line 71
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A name for this DataSet");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["dataSet", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataSet", [], "any", false, false, false, 73), ($context["helpText"] ?? null), "", "required"], 73, $context, $this->getSourceContext());
        yield "

                        ";
        // line 75
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("An optional description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["description", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "description", [], "any", false, false, false, 77), ($context["helpText"] ?? null)], 77, $context, $this->getSourceContext());
        yield "

                        ";
        // line 79
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A code which can be used to lookup this DataSet - usually for an API application");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "code", [], "any", false, false, false, 81), ($context["helpText"] ?? null)], 81, $context, $this->getSourceContext());
        yield "

                        ";
        // line 83
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Remote?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is this DataSet connected to a remote data source?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isRemote", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "isRemote", [], "any", false, false, false, 85), ($context["helpText"] ?? null)], 85, $context, $this->getSourceContext());
        yield "

                        ";
        // line 87
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Real time?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is this DataSet connected to a real time data source?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isRealTime", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "isRealTime", [], "any", false, false, false, 89), ($context["helpText"] ?? null)], 89, $context, $this->getSourceContext());
        yield "

                        <div class=\"d-none\" id=\"dataSourceField\">
                            ";
        // line 92
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Data Connector Source");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select data connector source.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        yield "                            ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dataConnectorSource", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataConnectorSource", [], "any", false, false, false, 94), ($context["dataConnectorSources"] ?? null), "id", "name", ($context["helpText"] ?? null)], 94, $context, $this->getSourceContext());
        yield "
                        </div>

                        ";
        // line 97
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "isRemote", [], "any", false, false, false, 97)) {
            // line 98
            yield "                            ";
            $context["columnCount"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "columns", [], "any", false, false, false, 98), function ($__column__) use ($context, $macros) { $context["column"] = $__column__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "dataSetColumnTypeId", [], "any", false, false, false, 98) == "3"); });
            // line 99
            yield "                            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["columnCount"] ?? null)) == 0)) {
                // line 100
                yield "                                ";
                yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("No remote columns have been configured for this dataset. Please configure your columns accordingly."), "alert alert-warning"], 100, $context, $this->getSourceContext());
                yield "
                            ";
            }
            // line 102
            yield "                        ";
        } else {
            // line 103
            yield "                            ";
            $context["columnCount"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "columns", [], "any", false, false, false, 103), function ($__column__) use ($context, $macros) { $context["column"] = $__column__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "dataSetColumnTypeId", [], "any", false, false, false, 103) == "1"); });
            // line 104
            yield "                            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["columnCount"] ?? null)) == 0)) {
                // line 105
                yield "                                ";
                yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("No value columns have been configured for this dataset. Please configure your columns accordingly."), "alert alert-warning"], 105, $context, $this->getSourceContext());
                yield "
                            ";
            }
            // line 107
            yield "                        ";
        }
        // line 108
        yield "
                        ";
        // line 109
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "isActive", [], "method", false, false, false, 109)) {
            // line 110
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("This DataSet has been accessed or updated recently, which means the CMS will keep it active."), "alert alert-success"], 110, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 112
        yield "                    </div>
                    <div class=\"tab-pane\" id=\"gateway\">
                        ";
        // line 114
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Method");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("What type of request needs to be made to get the remote data?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 116
        yield "                        ";
        $context["request_get"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("GET");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        yield "                        ";
        $context["request_post"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("POST");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        yield "                        ";
        $context["options"] = [["typeid" => "GET", "type" =>         // line 119
($context["request_get"] ?? null)], ["typeid" => "POST", "type" =>         // line 120
($context["request_post"] ?? null)]];
        // line 122
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["method", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "method", [], "any", false, false, false, 122), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null)], 122, $context, $this->getSourceContext());
        yield "

                        ";
        // line 124
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("URI");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("URL to the Remote DataSet for GET and POST.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["uri", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "uri", [], "any", false, false, false, 126), ($context["helpText"] ?? null), "", "required"], 126, $context, $this->getSourceContext());
        yield "

                        <div class=\"form-group row\">
                            <div class=\"col-sm-12\">
                                <div class=\"help-block\">
                                    <strong>";
        // line 131
        echo __("Replacements");
        yield "</strong><br>
                                    ";
        // line 132
        echo __("Request date: {{DATE}}");
        yield "<br>
                                    ";
        // line 133
        echo __("Request time: {{TIME}}");
        yield "<br>
                                    ";
        // line 134
        echo __("Dependant fields: {{COL.NAME}} where NAME is a FieldName from the dependant DataSet");
        yield "<br>
                                </div>
                                <div class=\"help-block\">
                                    ";
        // line 137
        echo __("Data to add to this request. This should be URL encoded, e.g. paramA=1&amp;paramB=2.");
        // line 138
        yield "                                </div>
                                <textarea class=\"form-control\" name=\"postData\" id=\"postData\" rows=\"10\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "postData", [], "any", false, false, false, 139), "html", null, true);
        yield "</textarea>
                            </div>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"auth\">
                        ";
        // line 145
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Authentication");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the authentication requirements for the remote data source. These will be added to the request.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 147
        yield "                        ";
        $context["auth_none"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("None");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 148
        yield "                        ";
        $context["auth_basic"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Basic");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 149
        yield "                        ";
        $context["auth_digest"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Digest");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 150
        yield "                        ";
        $context["auth_ntlm"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("NTLM");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        yield "                        ";
        $context["auth_bearer"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Bearer");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 152
        yield "                        ";
        $context["options"] = [["typeid" => "none", "type" =>         // line 153
($context["auth_none"] ?? null)], ["typeid" => "basic", "type" =>         // line 154
($context["auth_basic"] ?? null)], ["typeid" => "digest", "type" =>         // line 155
($context["auth_digest"] ?? null)], ["typeid" => "ntlm", "type" =>         // line 156
($context["auth_ntlm"] ?? null)], ["typeid" => "bearer", "type" =>         // line 157
($context["auth_bearer"] ?? null)]];
        // line 159
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["authentication", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "authentication", [], "any", false, false, false, 159), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null)], 159, $context, $this->getSourceContext());
        yield "

                        ";
        // line 161
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Username");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enter the authentication Username");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 163
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["username", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "username", [], "any", false, false, false, 163), ($context["helpText"] ?? null), "auth-field-username", ""], 163, $context, $this->getSourceContext());
        yield "

                        ";
        // line 165
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 166
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Corresponding Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 167
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["password", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "password", [], "any", false, false, false, 167), ($context["helpText"] ?? null), "auth-field-password", ""], 167, $context, $this->getSourceContext());
        yield "

                        ";
        // line 169
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Custom Headers");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 170
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Comma separated string of custom HTTP headers in headerName:headerValue format");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 171
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["customHeaders", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "customHeaders", [], "any", false, false, false, 171), ($context["helpText"] ?? null)], 171, $context, $this->getSourceContext());
        yield "

                        ";
        // line 173
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("User Agent");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 174
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally set specific User Agent for this request, provide only the value, relevant header will be added automatically");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 175
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["userAgent", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "userAgent", [], "any", false, false, false, 175), ($context["helpText"] ?? null)], 175, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"data\">
                        ";
        // line 179
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Source");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 180
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select source type of the provided remote Dataset URL");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 181
        yield "                        ";
        $context["json"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("JSON");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 182
        yield "                        ";
        $context["csv"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("CSV");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 183
        yield "                        ";
        $context["options"] = [["sourceId" => 1, "source" =>         // line 184
($context["json"] ?? null)], ["sourceId" => 2, "source" =>         // line 185
($context["csv"] ?? null)]];
        // line 187
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["sourceId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "sourceId", [], "any", false, false, false, 187), ($context["options"] ?? null), "sourceId", "source", ($context["helpText"] ?? null)], 187, $context, $this->getSourceContext());
        yield "

                        ";
        // line 189
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Data root");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter the element in your remote data which we should use as the starting point when we match the remote Columns. This should be an array or an object. You can use the test button below to see the structure that is returned.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 191
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["dataRoot", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "dataRoot", [], "any", false, false, false, 191), ($context["helpText"] ?? null), "json-source-field", ""], 191, $context, $this->getSourceContext());
        yield "

                        ";
        // line 193
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("CSV separator");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 194
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("What separator should be used for CSV source?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 195
        yield "                        ";
        $context["comma"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Comma");
            yield " (,)";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 196
        yield "                        ";
        $context["semicolon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Semicolon");
            yield " (;)";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 197
        yield "                        ";
        $context["space"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Space");
            yield " ( )";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 198
        yield "                        ";
        $context["tab"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tab");
            yield " (\\t)";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 199
        yield "                        ";
        $context["pipe"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Pipe");
            yield " (|)";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 200
        yield "                        ";
        $context["options"] = [["separatorId" => ",", "separator" =>         // line 201
($context["comma"] ?? null)], ["separatorId" => ";", "separator" =>         // line 202
($context["semicolon"] ?? null)], ["separatorId" => " ", "separator" =>         // line 203
($context["space"] ?? null)], ["separatorId" => "\t", "separator" =>         // line 204
($context["tab"] ?? null)], ["separatorId" => "|", "separator" =>         // line 205
($context["pipe"] ?? null)]];
        // line 207
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["csvSeparator", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "csvSeparator", [], "any", false, false, false, 207), ($context["options"] ?? null), "separatorId", "separator", ($context["helpText"] ?? null), "csv-source-field"], 207, $context, $this->getSourceContext());
        yield "

                        ";
        // line 209
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Ignore first row?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 210
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("For CSV source, should the first row be ignored?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 211
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["ignoreFirstRow", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "ignoreFirstRow", [], "any", false, false, false, 211), ($context["helpText"] ?? null), "csv-source-field"], 211, $context, $this->getSourceContext());
        yield "

                        <div class=\"form-group row\">
                            <div class=\"offset-sm-2 col-sm-10\">
                                <a class=\"btn btn-white\" id=\"dataSetRemoteTestButton\" href=\"#\">
                                    ";
        // line 216
        echo __("Test data URL");
        // line 217
        yield "                                </a>
                            </div>
                        </div>

                        ";
        // line 221
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Aggregation");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 222
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Aggregate received data by the given method");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 223
        yield "                        ";
        $context["summ_none"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("None");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 224
        yield "                        ";
        $context["summ_sum"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Summarize");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 225
        yield "                        ";
        $context["summ_count"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Count");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 226
        yield "                        ";
        $context["options"] = [["typeid" => "none", "type" =>         // line 227
($context["summ_none"] ?? null)], ["typeid" => "sum", "type" =>         // line 228
($context["summ_sum"] ?? null)], ["typeid" => "count", "type" =>         // line 229
($context["summ_count"] ?? null)]];
        // line 231
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["summarize", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "summarize", [], "any", false, false, false, 231), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null), "json-source-field"], 231, $context, $this->getSourceContext());
        yield "

                        <div class=\"form-group row json-source-field\">
                            <label class=\"col-sm-2 control-label\" for=\"summarizeField\">";
        // line 234
        echo __("By Field");
        yield "</label>
                            <div class=\"col-sm-10\">
                                <input class=\"form-control\" type=\"text\" name=\"summarizeField\" id=\"summarizeField\" value=\"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "summarizeField", [], "any", false, false, false, 236), "html", null, true);
        yield "\"/>
                                <div class=\"help-block\">
                                    ";
        // line 238
        echo __("Using JSON syntax enter the path below the Data root by which the above aggregation should be applied.");
        yield "<br>
                                    ";
        // line 239
        echo __("Summarize: Values in this field will be summarized and stored in one column.");
        yield "<br>
                                    ";
        // line 240
        echo __("Count: All individual values in this field will be counted and stored in one Column for each value");
        yield "<br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"params\">
                        ";
        // line 247
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Refresh");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 248
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("How often should this remote data be fetched and imported?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 249
        yield "
                        ";
        // line 250
        $context["refresh_everytime"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Constantly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 251
        yield "                        ";
        $context["refresh_hour"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hourly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 252
        yield "                        ";
        $context["refresh_day"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Daily");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 253
        yield "                        ";
        $context["refresh_week"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Weekly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 254
        yield "                        ";
        $context["refresh_two_week"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Every two Weeks");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 255
        yield "                        ";
        $context["refresh_month"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monthly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 256
        yield "                        ";
        $context["refresh_quater"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Quaterly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 257
        yield "                        ";
        $context["refresh_year"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yearly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 258
        yield "                        ";
        $context["options"] = [["typeid" => "0", "type" =>         // line 259
($context["refresh_everytime"] ?? null)], ["typeid" => "3600", "type" =>         // line 260
($context["refresh_hour"] ?? null)], ["typeid" => "86400", "type" =>         // line 261
($context["refresh_day"] ?? null)], ["typeid" => "604800", "type" =>         // line 262
($context["refresh_week"] ?? null)], ["typeid" => "1209600", "type" =>         // line 263
($context["refresh_two_week"] ?? null)], ["typeid" => "2419200", "type" =>         // line 264
($context["refresh_month"] ?? null)], ["typeid" => "7257600", "type" =>         // line 265
($context["refresh_quater"] ?? null)], ["typeid" => "29030400", "type" =>         // line 266
($context["refresh_year"] ?? null)]];
        // line 268
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["refreshRate", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "refreshRate", [], "any", false, false, false, 268), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null)], 268, $context, $this->getSourceContext());
        yield "

                        ";
        // line 270
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Truncate DataSet");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 271
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select when you would like the Data to be truncated out of this DataSet. The criteria is assessed when synchronisation occurs and is truncated before adding new data.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 272
        yield "
                        ";
        // line 273
        $context["truncate_never"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Never");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 274
        yield "                        ";
        $context["truncate_everytime"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Always");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 275
        yield "                        ";
        $context["truncate_hour"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hourly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 276
        yield "                        ";
        $context["truncate_day"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Daily");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 277
        yield "                        ";
        $context["truncate_week"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Weekly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 278
        yield "                        ";
        $context["truncate_two_week"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Every two Weeks");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 279
        yield "                        ";
        $context["truncate_month"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monthly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 280
        yield "                        ";
        $context["truncate_quater"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Quaterly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 281
        yield "                        ";
        $context["truncate_year"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yearly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 282
        yield "                        ";
        $context["truncate_two_year"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Every second Year");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 283
        yield "                        ";
        $context["options"] = [["typeid" => "0", "type" =>         // line 284
($context["truncate_never"] ?? null)], ["typeid" => "1", "type" =>         // line 285
($context["truncate_everytime"] ?? null)], ["typeid" => "3600", "type" =>         // line 286
($context["truncate_hour"] ?? null)], ["typeid" => "86400", "type" =>         // line 287
($context["truncate_day"] ?? null)], ["typeid" => "604800", "type" =>         // line 288
($context["truncate_week"] ?? null)], ["typeid" => "1209600", "type" =>         // line 289
($context["truncate_two_week"] ?? null)], ["typeid" => "2419200", "type" =>         // line 290
($context["truncate_month"] ?? null)], ["typeid" => "7257600", "type" =>         // line 291
($context["truncate_quater"] ?? null)], ["typeid" => "29030400", "type" =>         // line 292
($context["truncate_year"] ?? null)], ["typeid" => "58060800", "type" =>         // line 293
($context["truncate_two_year"] ?? null)]];
        // line 295
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["clearRate", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "clearRate", [], "any", false, false, false, 295), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null)], 295, $context, $this->getSourceContext());
        yield "

                        ";
        // line 297
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Truncate with no new data?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 298
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should the DataSet data be truncated even if no new data is pulled from the source?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 299
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["truncateOnEmpty", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "truncateOnEmpty", [], "any", false, false, false, 299), ($context["helpText"] ?? null)], 299, $context, $this->getSourceContext());
        yield "

                        ";
        // line 301
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Depends on DataSet");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 302
        yield "                        ";
        $context["dataSets"] = Twig\Extension\CoreExtension::merge([["dataSetId" => null, "dataSet" => ""]], ($context["dataSets"] ?? null));
        // line 303
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The DataSet you select here will be processed in advance and have its values available for subsitution in the data to add to this request on the Remote tab.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 304
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["runsAfter", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "runsAfter", [], "any", false, false, false, 304), ($context["dataSets"] ?? null), "dataSetId", "dataSet", ($context["helpText"] ?? null)], 304, $context, $this->getSourceContext());
        yield "

                        ";
        // line 306
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Row Limit");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 307
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally provide a row limit for this DataSet. When left empty the DataSet row limit from CMS Settings will be used.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 308
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["rowLimit", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "rowLimit", [], "any", false, false, false, 308), ($context["helpText"] ?? null)], 308, $context, $this->getSourceContext());
        yield "

                        ";
        // line 310
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Limit Policy");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 311
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("What should happen when this Dataset reaches the row limit?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 312
        yield "                        ";
        $context["stop"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Stop Syncing");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 313
        yield "                        ";
        $context["fifo"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("First In First Out");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 314
        yield "                        ";
        $context["truncate"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Truncate");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 315
        yield "                        ";
        $context["options"] = [["typeid" => "stop", "type" =>         // line 316
($context["stop"] ?? null)], ["typeid" => "fifo", "type" =>         // line 317
($context["fifo"] ?? null)], ["typeid" => "truncate", "type" =>         // line 318
($context["truncate"] ?? null)]];
        // line 320
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["limitPolicy", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["dataSet"] ?? null), "limitPolicy", [], "any", false, false, false, 320), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null)], 320, $context, $this->getSourceContext());
        yield "
                    </div>
                </div>
            </form>
            <div id=\"datasetRemoteTestRequestResult\" class=\"col-sm-12 bg-light\"></div>
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
        return "dataset-form-edit.twig";
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
        return array (  993 => 320,  991 => 318,  990 => 317,  989 => 316,  987 => 315,  981 => 314,  975 => 313,  969 => 312,  963 => 311,  958 => 310,  952 => 308,  946 => 307,  941 => 306,  935 => 304,  929 => 303,  926 => 302,  921 => 301,  915 => 299,  909 => 298,  904 => 297,  898 => 295,  896 => 293,  895 => 292,  894 => 291,  893 => 290,  892 => 289,  891 => 288,  890 => 287,  889 => 286,  888 => 285,  887 => 284,  885 => 283,  879 => 282,  873 => 281,  867 => 280,  861 => 279,  855 => 278,  849 => 277,  843 => 276,  837 => 275,  831 => 274,  826 => 273,  823 => 272,  817 => 271,  812 => 270,  806 => 268,  804 => 266,  803 => 265,  802 => 264,  801 => 263,  800 => 262,  799 => 261,  798 => 260,  797 => 259,  795 => 258,  789 => 257,  783 => 256,  777 => 255,  771 => 254,  765 => 253,  759 => 252,  753 => 251,  748 => 250,  745 => 249,  739 => 248,  734 => 247,  724 => 240,  720 => 239,  716 => 238,  711 => 236,  706 => 234,  699 => 231,  697 => 229,  696 => 228,  695 => 227,  693 => 226,  687 => 225,  681 => 224,  675 => 223,  669 => 222,  664 => 221,  658 => 217,  656 => 216,  647 => 211,  641 => 210,  636 => 209,  630 => 207,  628 => 205,  627 => 204,  626 => 203,  625 => 202,  624 => 201,  622 => 200,  615 => 199,  608 => 198,  601 => 197,  594 => 196,  587 => 195,  581 => 194,  576 => 193,  570 => 191,  564 => 190,  559 => 189,  553 => 187,  551 => 185,  550 => 184,  548 => 183,  542 => 182,  536 => 181,  530 => 180,  525 => 179,  517 => 175,  511 => 174,  506 => 173,  500 => 171,  494 => 170,  489 => 169,  483 => 167,  477 => 166,  472 => 165,  466 => 163,  460 => 162,  455 => 161,  449 => 159,  447 => 157,  446 => 156,  445 => 155,  444 => 154,  443 => 153,  441 => 152,  435 => 151,  429 => 150,  423 => 149,  417 => 148,  411 => 147,  405 => 146,  400 => 145,  391 => 139,  388 => 138,  386 => 137,  380 => 134,  376 => 133,  372 => 132,  368 => 131,  359 => 126,  353 => 125,  348 => 124,  342 => 122,  340 => 120,  339 => 119,  337 => 118,  331 => 117,  325 => 116,  319 => 115,  314 => 114,  310 => 112,  304 => 110,  302 => 109,  299 => 108,  296 => 107,  290 => 105,  287 => 104,  284 => 103,  281 => 102,  275 => 100,  272 => 99,  269 => 98,  267 => 97,  260 => 94,  254 => 93,  249 => 92,  242 => 89,  236 => 88,  231 => 87,  225 => 85,  219 => 84,  214 => 83,  208 => 81,  202 => 80,  197 => 79,  191 => 77,  185 => 76,  180 => 75,  174 => 73,  168 => 72,  163 => 71,  160 => 70,  155 => 68,  148 => 64,  143 => 62,  133 => 55,  130 => 54,  128 => 53,  121 => 49,  117 => 48,  112 => 46,  108 => 45,  104 => 44,  100 => 43,  96 => 42,  91 => 39,  87 => 38,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-form-edit.twig", "/var/www/cms/views/dataset-form-edit.twig");
    }
}
