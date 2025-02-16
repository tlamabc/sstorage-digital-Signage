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

/* campaign-page.twig */
class __TwigTemplate_a719c10f83bf70eb3f0b9a20f63a27f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "campaign-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "campaign-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Campaigns"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "  <div class=\"widget-action-menu pull-right\">
    ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["campaign.add"], "method", false, false, false, 30)) {
            // line 31
            yield "      <button class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a new Campaign");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.add.form"), "html", null, true);
            yield "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>  ";
            echo __("Add Campaign");
            yield "</button>
    ";
        }
        // line 33
        yield "    <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
  </div>
";
        return; yield '';
    }

    // line 37
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 39
        echo __("Campaigns");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"campaignView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 45
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["name", ($context["title"] ?? null)], 46, $context, $this->getSourceContext());
        yield "

                            ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 48)) {
            // line 49
            yield "                                ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 50
            yield "                                ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            yield "                                ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 53
            yield "                                ";
            yield CoreExtension::callMacro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 53, $context, $this->getSourceContext());
            yield "
                            ";
        }
        // line 55
        yield "
                            ";
        // line 56
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layouts");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                            ";
        $context["values"] = [["id" => 0, "value" => ""], ["id" => 2, "value" => "Yes"], ["id" => 1, "value" => "No"]];
        // line 58
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["hasLayouts", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value"], 58, $context, $this->getSourceContext());
        yield "

                            ";
        // line 60
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["folderId"], 60, $context, $this->getSourceContext());
        yield "

                            ";
        // line 62
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["layoutId", ($context["title"] ?? null), ($context["layoutId"] ?? null)], 63, $context, $this->getSourceContext());
        yield "

                            ";
        // line 65
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["ad.campaign"], "method", false, false, false, 65)) {
            // line 66
            yield "                                ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Type");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            yield "                                ";
            $context["options"] = [["id" => null, "name" => ""], ["id" => "list", "name" => __("Layout list")], ["id" => "ad", "name" => __("Ad Campaign")]];
            // line 72
            yield "                                ";
            yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["type", "single", ($context["title"] ?? null), "both", ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null)], 72, $context, $this->getSourceContext());
            yield "
                            ";
        }
        // line 74
        yield "
                            ";
        // line 75
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Cycle Based Playback");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                            ";
        $context["enabled"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enabled");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        yield "                            ";
        $context["disabled"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Disabled");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        yield "                            ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => 0, "option" =>         // line 80
($context["disabled"] ?? null)], ["optionid" => 1, "option" =>         // line 81
($context["enabled"] ?? null)]];
        // line 83
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["cyclePlaybackEnabled", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 83, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>

                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 90
        echo __("Search");
        yield "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 93
        echo __("Search in all folders");
        yield "\">";
        echo __("All Folders");
        yield "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 96
        echo __("No Folders matching the search term");
        yield "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 101
        echo __("Open / Close Folder Search options");
        yield "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"campaigns\" class=\"table table-striped\" data-content-type=\"campaign\" data-content-id-name=\"campaignId\" data-state-preference-name=\"campaignGrid\" style=\"width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 109
        echo __("Name");
        yield "</th>
                                        ";
        // line 110
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["ad.campaign"], "method", false, false, false, 110)) {
            // line 111
            yield "                                        <th>";
            echo __("Type");
            yield "</th>
                                        <th>";
            // line 112
            echo __("Start Date");
            yield "</th>
                                        <th>";
            // line 113
            echo __("End Date");
            yield "</th>
                                        ";
        }
        // line 115
        yield "                                        <th>";
        echo __("# Layouts");
        yield "</th>
                                        ";
        // line 116
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 116)) {
            yield "<th>";
            echo __("Tags");
            yield "</th>";
        }
        // line 117
        yield "                                        <th>";
        echo __("Duration");
        yield "</th>
                                        <th>";
        // line 118
        echo __("Cycle based Playback");
        yield "</th>
                                        <th>";
        // line 119
        echo __("Play Count");
        yield "</th>
                                        ";
        // line 120
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["ad.campaign"], "method", false, false, false, 120)) {
            // line 121
            yield "                                        <th>";
            echo __("Target Type");
            yield "</th>
                                        <th>";
            // line 122
            echo __("Target");
            yield "</th>
                                        <th>";
            // line 123
            echo __("Plays");
            yield "</th>
                                        <th>";
            // line 124
            echo __("Spend");
            yield "</th>
                                        <th>";
            // line 125
            echo __("Impressions");
            yield "</th>
                                        ";
        }
        // line 127
        yield "                                        <th>";
        echo __("Ref 1");
        yield "</th>
                                        <th>";
        // line 128
        echo __("Ref 2");
        yield "</th>
                                        <th>";
        // line 129
        echo __("Ref 3");
        yield "</th>
                                        <th>";
        // line 130
        echo __("Ref 4");
        yield "</th>
                                        <th>";
        // line 131
        echo __("Ref 5");
        yield "</th>
                                        <th>";
        // line 132
        echo __("Created At");
        yield "</th>
                                        <th>";
        // line 133
        echo __("Modified At");
        yield "</th>
                                        <th>";
        // line 134
        echo __("Modified By");
        yield "</th>
                                        <th class=\"rowMenu\"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 150
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        yield "    ";
        // line 152
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\" defer>
        ";
        // line 154
        yield "        var campaignSearchURL = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search"), "html", null, true);
        yield "\";
        var layoutSearchURL = \"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        yield "\";

        var folderViewEnabled = \"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 157), "html", null, true);
        yield "\";
        var adCampaignEnabled = \"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["ad.campaign"], "method", false, false, false, 158), "html", null, true);
        yield "\";
        var taggingEnabled = \"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 159), "html", null, true);
        yield "\";

        ";
        // line 162
        yield "        var campaignPageTrans = {
            list: \"";
        // line 163
        echo __("List");
        yield "\",
            ad: \"";
        // line 164
        echo __("Ad");
        yield "\",
            plays: \"";
        // line 165
        echo __("Plays");
        yield "\",
            budget: \"";
        // line 166
        echo __("Budget");
        yield "\",
            impressions: \"";
        // line 167
        echo __("Impressions");
        yield "\",
        };
    </script>

    ";
        // line 172
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 172), "html", null, true);
        yield "dist/pages/campaign-page.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "campaign-page.twig";
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
        return array (  448 => 172,  441 => 167,  437 => 166,  433 => 165,  429 => 164,  425 => 163,  422 => 162,  417 => 159,  413 => 158,  409 => 157,  404 => 155,  399 => 154,  394 => 152,  392 => 151,  388 => 150,  368 => 134,  364 => 133,  360 => 132,  356 => 131,  352 => 130,  348 => 129,  344 => 128,  339 => 127,  334 => 125,  330 => 124,  326 => 123,  322 => 122,  317 => 121,  315 => 120,  311 => 119,  307 => 118,  302 => 117,  296 => 116,  291 => 115,  286 => 113,  282 => 112,  277 => 111,  275 => 110,  271 => 109,  260 => 101,  252 => 96,  244 => 93,  238 => 90,  227 => 83,  225 => 81,  224 => 80,  222 => 78,  216 => 77,  210 => 76,  205 => 75,  202 => 74,  196 => 72,  193 => 67,  187 => 66,  185 => 65,  179 => 63,  174 => 62,  169 => 60,  163 => 58,  160 => 57,  155 => 56,  152 => 55,  146 => 53,  140 => 52,  134 => 51,  128 => 50,  122 => 49,  120 => 48,  114 => 46,  109 => 45,  102 => 41,  97 => 39,  94 => 38,  90 => 37,  81 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "campaign-page.twig", "/var/www/cms/views/campaign-page.twig");
    }
}
