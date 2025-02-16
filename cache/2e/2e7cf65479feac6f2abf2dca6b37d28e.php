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

/* usergroup-form-acl.twig */
class __TwigTemplate_21c6540aaf3981b84049788dfe816d43 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "usergroup-form-acl.twig", 25)->unwrap();
        // line 26
        $macros["flow"] = $this->macros["flow"] = $this;
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "usergroup-form-acl.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        /* xgettext:no-php-format */        echo strtr(__("Turn Features on/off for %group%"), array("%group%" => ($context["group"] ?? null), ));
        return; yield '';
    }

    // line 32
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 34
        echo __("Save");
        yield ", \$(\"#AclForm\").submit()
";
        return; yield '';
    }

    // line 37
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "forms.featureAclFormOpen";
        return; yield '';
    }

    // line 76
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        yield "
    <div class=\"row\">
        <div class=\"col-md-12\">

            ";
        // line 81
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Check or un-check the options against each item to control whether access to a Feature is allowed or not.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        yield "            ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 82, $context, $this->getSourceContext());
        yield "

            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#mediaTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 85
        echo __("Content");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#displaysTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 86
        echo __("Displays");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#homepagesTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 87
        echo __("Reports");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#usersTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 88
        echo __("Users");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#systemTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 89
        echo __("System");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#customTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 90
        echo __("Custom");
        yield "</span></a></li>
            </ul>
            <form id=\"AclForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.acl", ["id" => ($context["groupId"] ?? null)]), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane\" id=\"homepagesTab\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Feature"), "html", null, true);
        yield "</th>
                                    <th>
                                        ";
        // line 100
        echo __("Enabled?");
        // line 101
        yield "                                        <i class=\"fa fa-info-circle\" title=\"";
        yield "Check this box to give this User access to this Feature.";
        yield "\"></i>
                                    </th>
                                    ";
        // line 103
        if ((($context["isUserSpecific"] ?? null) == 1)) {
            // line 104
            yield "                                        <th>
                                            ";
            // line 105
            echo __("Inherited?");
            // line 106
            yield "                                            <i class=\"fa fa-info-circle\" title=\"";
            yield "If checked this User already has access to this Feature due to the User Groups they belong to.";
            yield "\"></i>
                                        </th>
                                    ";
        }
        // line 109
        yield "                                </tr>
                            </thead>

                            <tbody class=\"feature-group\">
                                ";
        // line 113
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Reporting"), __("Run reporting on a variety of different KPI's and metrics applicable to the Features enabled."), ($context["isUserSpecific"] ?? null)], 113, $context, $this->getSourceContext());
        yield "
                                ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["reporting"], "method", false, false, false, 114));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 115
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 115), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 115), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 115, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "                            </tbody>
                        </table>
                    </div>
                    <div class=\"tab-pane active\" id=\"mediaTab\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Feature"), "html", null, true);
        yield "</th>
                                    <th>
                                        ";
        // line 126
        echo __("Enabled?");
        // line 127
        yield "                                        <i class=\"fa fa-info-circle\" title=\"";
        yield "Check this box to give this User access to this Feature.";
        yield "\"></i>
                                    </th>
                                    ";
        // line 129
        if ((($context["isUserSpecific"] ?? null) == 1)) {
            // line 130
            yield "                                        <th>
                                            ";
            // line 131
            echo __("Inherited?");
            // line 132
            yield "                                            <i class=\"fa fa-info-circle\" title=\"";
            yield "If checked this User already has access to this Feature due to the User Groups they belong to.";
            yield "\"></i>
                                        </th>
                                    ";
        }
        // line 135
        yield "                                </tr>
                            </thead>

                            <tbody class=\"feature-group\">
                                ";
        // line 139
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Folders"), __("Organise content sharing with Folders"), ($context["isUserSpecific"] ?? null)], 139, $context, $this->getSourceContext());
        yield "
                                ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["folders"], "method", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 141
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 141), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 141), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 141, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        yield "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 146
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Library"), __("Media Library that stores file based content for use in Layouts, DataSets, Playlists and Menu Boards"), ($context["isUserSpecific"] ?? null)], 146, $context, $this->getSourceContext());
        yield "
                                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["library"], "method", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 148
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 148), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 148), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 148, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["playlist-design"], "method", false, false, false, 150));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 151
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 151), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 151), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 151, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["menuboard-design"], "method", false, false, false, 153));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 154
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 154), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 154), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 154, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 159
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Layout Design"), __("Allow content creators to create Layouts - which hold the content you want to show on your Displays"), ($context["isUserSpecific"] ?? null)], 159, $context, $this->getSourceContext());
        yield "
                                ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["layout-design"], "method", false, false, false, 160));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 161
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 161), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 161), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 161, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 166
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Campaigns"), __("Ensure ordering by grouping Layouts into Campaigns"), ($context["isUserSpecific"] ?? null)], 166, $context, $this->getSourceContext());
        yield "
                                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["campaigns"], "method", false, false, false, 167));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 168
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 168), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 168), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 168, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 173
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Tagging"), __("Organise and filter items by using Tags"), ($context["isUserSpecific"] ?? null)], 173, $context, $this->getSourceContext());
        yield "
                                ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["tagging"], "method", false, false, false, 174));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 175
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 175), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 175), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 175, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 180
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Fonts"), __("Administrative access to Fonts"), ($context["isUserSpecific"] ?? null)], 180, $context, $this->getSourceContext());
        yield "
                                ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["fonts"], "method", false, false, false, 181));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 182
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 182), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 182), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 182, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        yield "                            </tbody>
                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"displaysTab\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Feature"), "html", null, true);
        yield "</th>
                                    <th>
                                        ";
        // line 193
        echo __("Enabled?");
        // line 194
        yield "                                        <i class=\"fa fa-info-circle\" title=\"";
        yield "Check this box to give this User access to this Feature.";
        yield "\"></i>
                                    </th>
                                    ";
        // line 196
        if ((($context["isUserSpecific"] ?? null) == 1)) {
            // line 197
            yield "                                        <th>
                                            ";
            // line 198
            echo __("Inherited?");
            // line 199
            yield "                                            <i class=\"fa fa-info-circle\" title=\"";
            yield "If checked this User already has access to this Feature due to the User Groups they belong to.";
            yield "\"></i>
                                        </th>
                                    ";
        }
        // line 202
        yield "                                </tr>
                            </thead>

                            <tbody class=\"feature-group\">
                                ";
        // line 206
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Scheduling"), __("Create and manage Scheduled Events for Displays and Display Groups"), ($context["isUserSpecific"] ?? null)], 206, $context, $this->getSourceContext());
        yield "
                                ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["scheduling"], "method", false, false, false, 207));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 208
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 208), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 208), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 208, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        yield "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 213
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Display Management"), __("Connect and manage Displays."), ($context["isUserSpecific"] ?? null)], 213, $context, $this->getSourceContext());
        yield "
                                ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["displays"], "method", false, false, false, 214));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 215
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 215), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 215), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 215, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        yield "                            </tbody>

                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"usersTab\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Feature"), "html", null, true);
        yield "</th>
                                    <th>
                                        ";
        // line 227
        echo __("Enabled?");
        // line 228
        yield "                                        <i class=\"fa fa-info-circle\" title=\"";
        yield "Check this box to give this User access to this Feature.";
        yield "\"></i>
                                    </th>
                                    ";
        // line 230
        if ((($context["isUserSpecific"] ?? null) == 1)) {
            // line 231
            yield "                                        <th>
                                            ";
            // line 232
            echo __("Inherited?");
            // line 233
            yield "                                            <i class=\"fa fa-info-circle\" title=\"";
            yield "If checked this User already has access to this Feature due to the User Groups they belong to.";
            yield "\"></i>
                                        </th>
                                    ";
        }
        // line 236
        yield "                                </tr>
                            </thead>

                            <tbody class=\"feature-group\">
                                ";
        // line 240
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("User functions"), __("User profile preferences for the logged in User"), ($context["isUserSpecific"] ?? null)], 240, $context, $this->getSourceContext());
        yield "
                                ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["users"], "method", false, false, false, 241));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 242
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 242), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 242), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 242, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        yield "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 247
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Notifications"), __("Notification Centre allows for users to to create/edit Notifications sent to other Users or used in Layouts"), ($context["isUserSpecific"] ?? null)], 247, $context, $this->getSourceContext());
        yield "
                                ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["notifications"], "method", false, false, false, 248));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 249
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 249), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 249), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 249, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        yield "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 254
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("User Management"), __("Manage Users that can authenticate with the CMS. Create and organise them into User Groups to enable 'Group Features'"), ($context["isUserSpecific"] ?? null)], 254, $context, $this->getSourceContext());
        yield "
                                ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["users-management"], "method", false, false, false, 255));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 256
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 256), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 256), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 256, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        yield "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 261
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Dashboards"), __("Dashboards bring together key features for Users"), ($context["isUserSpecific"] ?? null)], 261, $context, $this->getSourceContext());
        yield "
                                ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["dashboards"], "method", false, false, false, 262));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 263
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 263), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 263), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 263, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        yield "                            </tbody>

                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"systemTab\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Feature"), "html", null, true);
        yield "</th>
                                    <th>
                                        ";
        // line 275
        echo __("Enabled?");
        // line 276
        yield "                                        <i class=\"fa fa-info-circle\" title=\"";
        yield "Check this box to give this User access to this Feature.";
        yield "\"></i>
                                    </th>
                                    ";
        // line 278
        if ((($context["isUserSpecific"] ?? null) == 1)) {
            // line 279
            yield "                                        <th>
                                            ";
            // line 280
            echo __("Inherited?");
            // line 281
            yield "                                            <i class=\"fa fa-info-circle\" title=\"";
            yield "If checked this User already has access to this Feature due to the User Groups they belong to.";
            yield "\"></i>
                                        </th>
                                    ";
        }
        // line 284
        yield "                                </tr>
                            </thead>

                            <tbody class=\"feature-group\">
                                ";
        // line 288
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Configuration"), __("Restricted high level access advised - potentially damaging system settings"), ($context["isUserSpecific"] ?? null)], 288, $context, $this->getSourceContext());
        yield "
                                ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["system"], "method", false, false, false, 289));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 290
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 290), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 290), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 290, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        yield "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 295
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Troubleshooting"), __("Tools to diagnose problems when seeking help"), ($context["isUserSpecific"] ?? null)], 295, $context, $this->getSourceContext());
        yield "
                                ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["troubleshooting"], "method", false, false, false, 296));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 297
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 297), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 297), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 297, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 299
        yield "                            </tbody>

                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"customTab\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Feature"), "html", null, true);
        yield "</th>
                                    <th>
                                        ";
        // line 309
        echo __("Enabled?");
        // line 310
        yield "                                        <i class=\"fa fa-info-circle\" title=\"";
        yield "Check this box to give this User access to this Feature.";
        yield "\"></i>
                                    </th>
                                    ";
        // line 312
        if ((($context["isUserSpecific"] ?? null) == 1)) {
            // line 313
            yield "                                        <th>
                                            ";
            // line 314
            echo __("Inherited?");
            // line 315
            yield "                                            <i class=\"fa fa-info-circle\" title=\"";
            yield "If checked this User already has access to this Feature due to the User Groups they belong to.";
            yield "\"></i>
                                        </th>
                                    ";
        }
        // line 318
        yield "                                </tr>
                            </thead>

                            <tbody class=\"feature-group\">
                                ";
        // line 322
        yield CoreExtension::callMacro($macros["flow"], "macro_featureTitleRow", [__("Custom"), __("Third party extensions to the platform."), ($context["isUserSpecific"] ?? null)], 322, $context, $this->getSourceContext());
        yield "
                                ";
        // line 323
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["custom"], "method", false, false, false, 323));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 324
            yield "                                    ";
            yield CoreExtension::callMacro($macros["flow"], "macro_featureRow", [CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 324), CoreExtension::getAttribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 324), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 324, $context, $this->getSourceContext());
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        yield "                            </tbody>

                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        return; yield '';
    }

    // line 39
    public function macro_hasFeature($__features__ = null, $__feature__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "features" => $__features__,
            "feature" => $__feature__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 40
            yield "    ";
            if (CoreExtension::inFilter(($context["feature"] ?? null), ($context["features"] ?? null))) {
                // line 41
                yield "        checked
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 45
    public function macro_featureTitleRow($__title__ = null, $__description__ = null, $__isUserSpecific__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "description" => $__description__,
            "isUserSpecific" => $__isUserSpecific__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 46
            yield "    <tr class=\"feature-group-row\">
        <td class=\"feature-group-header-cell closed\">
            <strong>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</strong> <i class=\"fa fa-arrow-circle-down\"></i>
            <p class=\"feature-group-description\">
                ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
            yield "
            </p>
        </td>
        <td><input class=\"feature-select-all\" type=\"checkbox\" /></td>
        ";
            // line 54
            if ((($context["isUserSpecific"] ?? null) == 1)) {
                // line 55
                yield "            <td>
                <input type=\"checkbox\" class=\"inherit-group-all\" disabled>
            </td>
        ";
            }
            // line 59
            yield "    </tr>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 62
    public function macro_featureRow($__feature__ = null, $__title__ = null, $__features__ = null, $__inheritedFeatures__ = null, $__isUserSpecific__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "feature" => $__feature__,
            "title" => $__title__,
            "features" => $__features__,
            "inheritedFeatures" => $__inheritedFeatures__,
            "isUserSpecific" => $__isUserSpecific__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 63
            yield "    <tr class=\"feature-row\">
        <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</td>
        <td>
            <input type=\"checkbox\" name=\"features[]\" value=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["feature"] ?? null), "html", null, true);
            yield "\" ";
            yield CoreExtension::callMacro($macros["flow"], "macro_hasFeature", [($context["features"] ?? null), ($context["feature"] ?? null)], 66, $context, $this->getSourceContext());
            yield ">
        </td>
        ";
            // line 68
            if ((($context["isUserSpecific"] ?? null) == 1)) {
                // line 69
                yield "            <td>
                <input type=\"checkbox\" class=\"inherit-group\" disabled ";
                // line 70
                yield CoreExtension::callMacro($macros["flow"], "macro_hasFeature", [($context["inheritedFeatures"] ?? null), ($context["feature"] ?? null)], 70, $context, $this->getSourceContext());
                yield ">
            </td>
        ";
            }
            // line 73
            yield "    </tr>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "usergroup-form-acl.twig";
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
        return array (  865 => 73,  859 => 70,  856 => 69,  854 => 68,  847 => 66,  842 => 64,  839 => 63,  823 => 62,  816 => 59,  810 => 55,  808 => 54,  801 => 50,  796 => 48,  792 => 46,  778 => 45,  770 => 41,  767 => 40,  754 => 39,  741 => 326,  732 => 324,  728 => 323,  724 => 322,  718 => 318,  711 => 315,  709 => 314,  706 => 313,  704 => 312,  698 => 310,  696 => 309,  691 => 307,  681 => 299,  672 => 297,  668 => 296,  664 => 295,  659 => 292,  650 => 290,  646 => 289,  642 => 288,  636 => 284,  629 => 281,  627 => 280,  624 => 279,  622 => 278,  616 => 276,  614 => 275,  609 => 273,  599 => 265,  590 => 263,  586 => 262,  582 => 261,  577 => 258,  568 => 256,  564 => 255,  560 => 254,  555 => 251,  546 => 249,  542 => 248,  538 => 247,  533 => 244,  524 => 242,  520 => 241,  516 => 240,  510 => 236,  503 => 233,  501 => 232,  498 => 231,  496 => 230,  490 => 228,  488 => 227,  483 => 225,  473 => 217,  464 => 215,  460 => 214,  456 => 213,  451 => 210,  442 => 208,  438 => 207,  434 => 206,  428 => 202,  421 => 199,  419 => 198,  416 => 197,  414 => 196,  408 => 194,  406 => 193,  401 => 191,  392 => 184,  383 => 182,  379 => 181,  375 => 180,  370 => 177,  361 => 175,  357 => 174,  353 => 173,  348 => 170,  339 => 168,  335 => 167,  331 => 166,  326 => 163,  317 => 161,  313 => 160,  309 => 159,  304 => 156,  295 => 154,  290 => 153,  281 => 151,  276 => 150,  267 => 148,  263 => 147,  259 => 146,  254 => 143,  245 => 141,  241 => 140,  237 => 139,  231 => 135,  224 => 132,  222 => 131,  219 => 130,  217 => 129,  211 => 127,  209 => 126,  204 => 124,  195 => 117,  186 => 115,  182 => 114,  178 => 113,  172 => 109,  165 => 106,  163 => 105,  160 => 104,  158 => 103,  152 => 101,  150 => 100,  145 => 98,  136 => 92,  131 => 90,  127 => 89,  123 => 88,  119 => 87,  115 => 86,  111 => 85,  104 => 82,  99 => 81,  93 => 77,  89 => 76,  81 => 37,  74 => 34,  69 => 33,  65 => 32,  59 => 29,  55 => 28,  50 => 24,  48 => 26,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "usergroup-form-acl.twig", "/var/www/cms/views/usergroup-form-acl.twig");
    }
}
