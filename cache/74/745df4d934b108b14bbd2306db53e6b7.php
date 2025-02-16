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

/* dataset-form-add.twig */
class __TwigTemplate_e6c2dc40283f4a48d947c0afa0e7b334 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "dataset-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-form-add.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add DataSet");
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
        yield ", \$(\"#dataSetAddForm\").submit()    
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
            <form id=\"dataSetAddForm\" class=\"XiboForm custom-validation form-horizontal\" method=\"post\" action=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.add"), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">

                        ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 52)) {
            // line 53
            yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 54
            echo __("Folder");
            yield "</label>
                            <div class=\"col-sm-10\">
                                <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 56
            echo __("Select Folder");
            yield "</button>
                                <span id=\"selectedFormFolder\"></span>
                            </div>
                        </div>
                        ";
            // line 60
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId"], 60, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 62
        yield "
                        ";
        // line 63
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A name for this DataSet");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["dataSet", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 65, $context, $this->getSourceContext());
        yield "

                        ";
        // line 67
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("An optional description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["description", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 69, $context, $this->getSourceContext());
        yield "

                        ";
        // line 71
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A code which can be used to lookup this DataSet - usually for an API application");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 73, $context, $this->getSourceContext());
        yield "

                        ";
        // line 75
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Remote?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is this DataSet connected to a remote data source?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isRemote", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 77, $context, $this->getSourceContext());
        yield "

                        ";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["dataset.realtime"], "method", false, false, false, 79)) {
            // line 80
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Real time?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 81
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Is this DataSet connected to a real time data source?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 82
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isRealTime", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 82, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 84
        yield "
                        <div class=\"d-none\" id=\"dataSourceField\">
                            ";
        // line 86
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Data Connector Source");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select data connector source.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        yield "                            ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dataConnectorSource", "single", ($context["title"] ?? null), "", ($context["dataConnectorSources"] ?? null), "id", "name", ($context["helpText"] ?? null)], 88, $context, $this->getSourceContext());
        yield "
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"gateway\">
                        ";
        // line 93
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Method");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("What type of request needs to be made to get the remote data?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        yield "                        ";
        $context["request_get"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("GET");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        yield "                        ";
        $context["request_post"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("POST");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "                        ";
        $context["options"] = [["typeid" => "GET", "type" =>         // line 98
($context["request_get"] ?? null)], ["typeid" => "POST", "type" =>         // line 99
($context["request_post"] ?? null)]];
        // line 101
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["method", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null)], 101, $context, $this->getSourceContext());
        yield "

                        ";
        // line 103
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("URI");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("URL to the Remote DataSet for GET and POST.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["uri", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 105, $context, $this->getSourceContext());
        yield "

                        <div class=\"form-group row\">
                            <div class=\"col-sm-12\">
                                <div class=\"help-block\">
                                    <strong>";
        // line 110
        echo __("Replacements");
        yield "</strong><br>
                                    ";
        // line 111
        echo __("Request date: {{DATE}}");
        yield "<br>
                                    ";
        // line 112
        echo __("Request time: {{TIME}}");
        yield "<br>
                                    ";
        // line 113
        echo __("Dependant fields: {{COL.NAME}} where NAME is a FieldName from the dependant DataSet");
        yield "<br>
                                </div>
                                <div class=\"help-block\">
                                    ";
        // line 116
        echo __("Data to add to this request. This should be URL encoded, e.g. paramA=1&amp;paramB=2.");
        // line 117
        yield "                                </div>
                                <textarea class=\"form-control\" name=\"postData\" id=\"postData\" rows=\"10\"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"auth\">
                        ";
        // line 124
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Authentication");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the authentication requirements for the remote data source. These will be added to the request.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        yield "                        ";
        $context["auth_none"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("None");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        yield "                        ";
        $context["auth_basic"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Basic");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        yield "                        ";
        $context["auth_digest"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Digest");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        yield "                        ";
        $context["auth_ntlm"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("NTLM");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        yield "                        ";
        $context["auth_bearer"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Bearer");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        yield "                        ";
        $context["options"] = [["typeid" => "none", "type" =>         // line 132
($context["auth_none"] ?? null)], ["typeid" => "basic", "type" =>         // line 133
($context["auth_basic"] ?? null)], ["typeid" => "digest", "type" =>         // line 134
($context["auth_digest"] ?? null)], ["typeid" => "ntlm", "type" =>         // line 135
($context["auth_ntlm"] ?? null)], ["typeid" => "bearer", "type" =>         // line 136
($context["auth_bearer"] ?? null)]];
        // line 138
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["authentication", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null)], 138, $context, $this->getSourceContext());
        yield "

                        ";
        // line 140
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Username");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enter the authentication Username");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["username", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "auth-field-username", ""], 142, $context, $this->getSourceContext());
        yield "

                        ";
        // line 144
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 145
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Corresponding Password");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["password", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "auth-field-password", ""], 146, $context, $this->getSourceContext());
        yield "

                        ";
        // line 148
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Custom Headers");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 149
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Comma separated string of custom HTTP headers in headerName:headerValue format");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 150
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["customHeaders", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 150, $context, $this->getSourceContext());
        yield "

                        ";
        // line 152
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("User Agent");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 153
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally set specific User Agent for this request, provide only the value, relevant header will be added automatically");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 154
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["userAgent", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 154, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"data\">
                        ";
        // line 158
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Source");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select source type of the provided remote Dataset URL");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 160
        yield "                        ";
        $context["json"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("JSON");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        yield "                        ";
        $context["csv"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("CSV");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        yield "                        ";
        $context["options"] = [["sourceId" => 1, "source" =>         // line 163
($context["json"] ?? null)], ["sourceId" => 2, "source" =>         // line 164
($context["csv"] ?? null)]];
        // line 166
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["sourceId", "single", ($context["title"] ?? null), 1, ($context["options"] ?? null), "sourceId", "source", ($context["helpText"] ?? null)], 166, $context, $this->getSourceContext());
        yield "

                        ";
        // line 168
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Data root");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 169
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please enter the element in your remote data which we should use as the starting point when we match the remote Columns. This should be an array or an object. You can use the test button below to see the structure that is returned.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 170
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["dataRoot", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "json-source-field", ""], 170, $context, $this->getSourceContext());
        yield "

                        ";
        // line 172
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("CSV separator");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 173
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("What separator should be used for CSV source?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 174
        yield "                        ";
        $context["comma"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Comma");
            yield " (,)";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 175
        yield "                        ";
        $context["semicolon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Semicolon");
            yield " (;)";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 176
        yield "                        ";
        $context["space"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Space");
            yield " ( )";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 177
        yield "                        ";
        $context["tab"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tab");
            yield " (\\t)";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 178
        yield "                        ";
        $context["pipe"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Pipe");
            yield " (|)";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 179
        yield "                        ";
        $context["options"] = [["separatorId" => ",", "separator" =>         // line 180
($context["comma"] ?? null)], ["separatorId" => ";", "separator" =>         // line 181
($context["semicolon"] ?? null)], ["separatorId" => " ", "separator" =>         // line 182
($context["space"] ?? null)], ["separatorId" => "\t", "separator" =>         // line 183
($context["tab"] ?? null)], ["separatorId" => "|", "separator" =>         // line 184
($context["pipe"] ?? null)]];
        // line 186
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["csvSeparator", "single", ($context["title"] ?? null), ",", ($context["options"] ?? null), "separatorId", "separator", ($context["helpText"] ?? null), "csv-source-field"], 186, $context, $this->getSourceContext());
        yield "

                        ";
        // line 188
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Ignore first row?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 189
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("For CSV source, should the first row be ignored?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["ignoreFirstRow", ($context["title"] ?? null), 0, ($context["helpText"] ?? null), "csv-source-field"], 190, $context, $this->getSourceContext());
        yield "

                        <div class=\"form-group row\">
                            <div class=\"offset-sm-2 col-sm-10\">
                                <a class=\"btn btn-white\" id=\"dataSetRemoteTestButton\" href=\"#\">
                                    ";
        // line 195
        echo __("Test data URL");
        // line 196
        yield "                                </a>
                            </div>
                        </div>

                        ";
        // line 200
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Aggregation");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 201
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Aggregate received data by the given method");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 202
        yield "                        ";
        $context["summ_none"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("None");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 203
        yield "                        ";
        $context["summ_sum"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Summarize");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 204
        yield "                        ";
        $context["summ_count"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Count");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 205
        yield "                        ";
        $context["options"] = [["typeid" => "none", "type" =>         // line 206
($context["summ_none"] ?? null)], ["typeid" => "sum", "type" =>         // line 207
($context["summ_sum"] ?? null)], ["typeid" => "count", "type" =>         // line 208
($context["summ_count"] ?? null)]];
        // line 210
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["summarize", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null), "json-source-field"], 210, $context, $this->getSourceContext());
        yield "

                        <div class=\"form-group row json-source-field\">
                            <label class=\"col-sm-2 control-label\" for=\"summarizeField\">";
        // line 213
        echo __("By Field");
        yield "</label>
                            <div class=\"col-sm-10\">
                                <input class=\"form-control\" type=\"text\" name=\"summarizeField\" id=\"summarizeField\" />
                                <div class=\"help-block\">
                                    ";
        // line 217
        echo __("Using JSON syntax enter the path below the Data root by which the above aggregation should be applied.");
        yield "<br>
                                    ";
        // line 218
        echo __("Summarize: Values in this field will be summarized and stored in one column.");
        yield "<br>
                                    ";
        // line 219
        echo __("Count: All individual values in this field will be counted and stored in one Column for each value");
        yield "<br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"params\">
                        ";
        // line 226
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Refresh");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 227
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("How often should this remote data be fetched and imported?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 228
        yield "
                        ";
        // line 229
        $context["refresh_everytime"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Constantly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 230
        yield "                        ";
        $context["refresh_hour"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hourly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 231
        yield "                        ";
        $context["refresh_day"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Daily");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 232
        yield "                        ";
        $context["refresh_week"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Weekly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 233
        yield "                        ";
        $context["refresh_two_week"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Every two Weeks");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 234
        yield "                        ";
        $context["refresh_month"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monthly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 235
        yield "                        ";
        $context["refresh_quater"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Quaterly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 236
        yield "                        ";
        $context["refresh_year"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yearly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 237
        yield "                        ";
        $context["options"] = [["typeid" => "0", "type" =>         // line 238
($context["refresh_everytime"] ?? null)], ["typeid" => "3600", "type" =>         // line 239
($context["refresh_hour"] ?? null)], ["typeid" => "86400", "type" =>         // line 240
($context["refresh_day"] ?? null)], ["typeid" => "604800", "type" =>         // line 241
($context["refresh_week"] ?? null)], ["typeid" => "1209600", "type" =>         // line 242
($context["refresh_two_week"] ?? null)], ["typeid" => "2419200", "type" =>         // line 243
($context["refresh_month"] ?? null)], ["typeid" => "7257600", "type" =>         // line 244
($context["refresh_quater"] ?? null)], ["typeid" => "29030400", "type" =>         // line 245
($context["refresh_year"] ?? null)]];
        // line 247
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["refreshRate", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null)], 247, $context, $this->getSourceContext());
        yield "

                        ";
        // line 249
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Truncate DataSet");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 250
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select when you would like the Data to be truncated out of this DataSet. The criteria is assessed when synchronisation occurs and is truncated before adding new data.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 251
        yield "
                        ";
        // line 252
        $context["truncate_never"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Never");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 253
        yield "                        ";
        $context["truncate_everytime"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Always");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 254
        yield "                        ";
        $context["truncate_hour"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hourly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 255
        yield "                        ";
        $context["truncate_day"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Daily");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 256
        yield "                        ";
        $context["truncate_week"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Weekly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 257
        yield "                        ";
        $context["truncate_two_week"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Every two Weeks");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 258
        yield "                        ";
        $context["truncate_month"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monthly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 259
        yield "                        ";
        $context["truncate_quater"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Quaterly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 260
        yield "                        ";
        $context["truncate_year"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yearly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 261
        yield "                        ";
        $context["truncate_two_year"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Every second Year");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 262
        yield "                        ";
        $context["options"] = [["typeid" => "0", "type" =>         // line 263
($context["truncate_never"] ?? null)], ["typeid" => "1", "type" =>         // line 264
($context["truncate_everytime"] ?? null)], ["typeid" => "3600", "type" =>         // line 265
($context["truncate_hour"] ?? null)], ["typeid" => "86400", "type" =>         // line 266
($context["truncate_day"] ?? null)], ["typeid" => "604800", "type" =>         // line 267
($context["truncate_week"] ?? null)], ["typeid" => "1209600", "type" =>         // line 268
($context["truncate_two_week"] ?? null)], ["typeid" => "2419200", "type" =>         // line 269
($context["truncate_month"] ?? null)], ["typeid" => "7257600", "type" =>         // line 270
($context["truncate_quater"] ?? null)], ["typeid" => "29030400", "type" =>         // line 271
($context["truncate_year"] ?? null)], ["typeid" => "58060800", "type" =>         // line 272
($context["truncate_two_year"] ?? null)]];
        // line 274
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["clearRate", "single", ($context["title"] ?? null), "1", ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null)], 274, $context, $this->getSourceContext());
        yield "

                        ";
        // line 276
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Truncate with no new data?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 277
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should the DataSet data be truncated even if no new data is pulled from the source?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 278
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["truncateOnEmpty", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 278, $context, $this->getSourceContext());
        yield "

                        ";
        // line 280
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Depends on DataSet");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 281
        yield "                        ";
        $context["dataSets"] = Twig\Extension\CoreExtension::merge([["dataSetId" => null, "dataSet" => ""]], ($context["dataSets"] ?? null));
        // line 282
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The DataSet you select here will be processed in advance and have its values available for subsitution in the data to add to this request on the Remote tab.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 283
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["runsAfter", "single", ($context["title"] ?? null), "", ($context["dataSets"] ?? null), "dataSetId", "dataSet", ($context["helpText"] ?? null)], 283, $context, $this->getSourceContext());
        yield "

                        ";
        // line 285
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Row Limit");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 286
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally provide a row limit for this DataSet. When left empty the DataSet row limit from CMS Settings will be used.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 287
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["rowLimit", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 287, $context, $this->getSourceContext());
        yield "

                        ";
        // line 289
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Limit Policy");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 290
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("What should happen when this Dataset reaches the row limit?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 291
        yield "                        ";
        $context["stop"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Stop Syncing");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 292
        yield "                        ";
        $context["fifo"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("First In First Out");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 293
        yield "                        ";
        $context["truncate"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Truncate");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 294
        yield "                        ";
        $context["options"] = [["typeid" => "stop", "type" =>         // line 295
($context["stop"] ?? null)], ["typeid" => "fifo", "type" =>         // line 296
($context["fifo"] ?? null)], ["typeid" => "truncate", "type" =>         // line 297
($context["truncate"] ?? null)]];
        // line 299
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["limitPolicy", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null)], 299, $context, $this->getSourceContext());
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
        return "dataset-form-add.twig";
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
        return array (  934 => 299,  932 => 297,  931 => 296,  930 => 295,  928 => 294,  922 => 293,  916 => 292,  910 => 291,  904 => 290,  899 => 289,  893 => 287,  887 => 286,  882 => 285,  876 => 283,  870 => 282,  867 => 281,  862 => 280,  856 => 278,  850 => 277,  845 => 276,  839 => 274,  837 => 272,  836 => 271,  835 => 270,  834 => 269,  833 => 268,  832 => 267,  831 => 266,  830 => 265,  829 => 264,  828 => 263,  826 => 262,  820 => 261,  814 => 260,  808 => 259,  802 => 258,  796 => 257,  790 => 256,  784 => 255,  778 => 254,  772 => 253,  767 => 252,  764 => 251,  758 => 250,  753 => 249,  747 => 247,  745 => 245,  744 => 244,  743 => 243,  742 => 242,  741 => 241,  740 => 240,  739 => 239,  738 => 238,  736 => 237,  730 => 236,  724 => 235,  718 => 234,  712 => 233,  706 => 232,  700 => 231,  694 => 230,  689 => 229,  686 => 228,  680 => 227,  675 => 226,  665 => 219,  661 => 218,  657 => 217,  650 => 213,  643 => 210,  641 => 208,  640 => 207,  639 => 206,  637 => 205,  631 => 204,  625 => 203,  619 => 202,  613 => 201,  608 => 200,  602 => 196,  600 => 195,  591 => 190,  585 => 189,  580 => 188,  574 => 186,  572 => 184,  571 => 183,  570 => 182,  569 => 181,  568 => 180,  566 => 179,  559 => 178,  552 => 177,  545 => 176,  538 => 175,  531 => 174,  525 => 173,  520 => 172,  514 => 170,  508 => 169,  503 => 168,  497 => 166,  495 => 164,  494 => 163,  492 => 162,  486 => 161,  480 => 160,  474 => 159,  469 => 158,  461 => 154,  455 => 153,  450 => 152,  444 => 150,  438 => 149,  433 => 148,  427 => 146,  421 => 145,  416 => 144,  410 => 142,  404 => 141,  399 => 140,  393 => 138,  391 => 136,  390 => 135,  389 => 134,  388 => 133,  387 => 132,  385 => 131,  379 => 130,  373 => 129,  367 => 128,  361 => 127,  355 => 126,  349 => 125,  344 => 124,  335 => 117,  333 => 116,  327 => 113,  323 => 112,  319 => 111,  315 => 110,  306 => 105,  300 => 104,  295 => 103,  289 => 101,  287 => 99,  286 => 98,  284 => 97,  278 => 96,  272 => 95,  266 => 94,  261 => 93,  252 => 88,  246 => 87,  241 => 86,  237 => 84,  231 => 82,  225 => 81,  219 => 80,  217 => 79,  211 => 77,  205 => 76,  200 => 75,  194 => 73,  188 => 72,  183 => 71,  177 => 69,  171 => 68,  166 => 67,  160 => 65,  154 => 64,  149 => 63,  146 => 62,  141 => 60,  134 => 56,  129 => 54,  126 => 53,  124 => 52,  117 => 48,  112 => 46,  108 => 45,  104 => 44,  100 => 43,  96 => 42,  91 => 39,  87 => 38,  79 => 36,  72 => 33,  67 => 32,  63 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-form-add.twig", "/var/www/cms/views/dataset-form-add.twig");
    }
}
