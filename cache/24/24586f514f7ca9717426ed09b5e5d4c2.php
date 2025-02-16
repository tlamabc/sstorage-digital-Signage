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

/* playlist-form-edit.twig */
class __TwigTemplate_79a61e9a614feee39d796594f310a03a extends Template
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
            'formFieldActions' => [$this, 'block_formFieldActions'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "playlist-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "playlist-form-edit.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Edit Playlist");
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
        yield ", \$(\"#playlistEditForm\").submit()
";
        return; yield '';
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "playlistFormOpen";
        return; yield '';
    }

    // line 38
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    [{
    \"field\": \"isDynamic\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"none\" },
    \".static-message\": { \"display\": \"\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"none\" },
    \".static-message\": { \"display\": \"\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"\" },
    \".static-message\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"\" },
    \".static-message\": { \"display\": \"none\" }
    }
    }]
";
        return; yield '';
    }

    // line 78
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 82
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#populate\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 83
        echo __("Filter");
        yield "</span></a></li>
            </ul>
            <form id=\"playlistEditForm\" class=\"XiboForm form-horizontal playlistForm\" method=\"put\" action=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "playlistId", [], "any", false, false, false, 85)]), "html", null, true);
        yield "\" data-gettag=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">

                        ";
        // line 89
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 89)) {
            // line 90
            yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 91
            echo __("Current Folder");
            yield "</label>
                            <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                                <span id=\"originalFormFolder\"></span>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 97
            echo __("Move to Selected Folder:");
            yield "</label>
                            <div class=\"col-sm-10\">
                                <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 99
            echo __("Select Folder");
            yield "</button>
                                <span id=\"selectedFormFolder\"></span>
                            </div>
                        </div>
                        ";
            // line 103
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId", CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "folderId", [], "any", false, false, false, 103)], 103, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 105
        yield "
                        ";
        // line 106
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name of the Playlist - (1 - 50 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "name", [], "any", false, false, false, 108), ($context["helpText"] ?? null)], 108, $context, $this->getSourceContext());
        yield "

                        ";
        // line 110
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 110)) {
            // line 111
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 112
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags for this Playlist - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 113
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "getTagString", [], "method", false, false, false, 113), ($context["helpText"] ?? null), "tags-with-value"], 113, $context, $this->getSourceContext());
            yield "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 117
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 118, $context, $this->getSourceContext());
            yield "

                            <div id=\"tagValueContainer\">
                                ";
            // line 121
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 122
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 123
            yield "                                ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 123, $context, $this->getSourceContext());
            yield "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 127
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            yield "</p>
                            </div>
                        ";
        }
        // line 130
        yield "
                        ";
        // line 131
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Dynamic?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is the Playlist to have Library media assignments managed automatically by the CMS based on filter criteria? Set a filter on the next tab.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDynamic", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "isDynamic", [], "any", false, false, false, 133), ($context["helpText"] ?? null)], 133, $context, $this->getSourceContext());
        yield "

                        ";
        // line 135
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable Playlist Stats Collection?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable the collection of Proof of Play statistics for this Playlist. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        yield "
                        ";
        // line 138
        $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Off");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        yield "                        ";
        $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("On");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        yield "                        ";
        $context["inheritOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Inherit");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        yield "                        ";
        $context["options"] = [["id" => "Off", "value" =>         // line 142
($context["offOption"] ?? null)], ["id" => "On", "value" =>         // line 143
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>         // line 144
($context["inheritOption"] ?? null)]];
        // line 146
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["enableStat", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "enableStat", [], "any", false, false, false, 146), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 146, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"populate\">
                        <div class=\"dynamic-message\">
                            ";
        // line 150
        $context["message"] = __("Populate with Library Media matching the criteria below and automatically maintain the Playlist.");
        // line 151
        yield "                            ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 151, $context, $this->getSourceContext());
        yield "

                            <div class=\"widget\">
                                <div class=\"widget-title\">";
        // line 154
        echo __("Library Media");
        yield "</div>
                                <div class=\"widget-body\">
                                    ";
        // line 156
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name filter");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 157
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_inputWithLogicalOperator", ["filterMediaName", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "filterMediaName", [], "any", false, false, false, 157), "", "", "", "", CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "filterMediaNameLogicalOperator", [], "any", false, false, false, 157)], 157, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 159
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 159)) {
            // line 160
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag filter");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 161
            yield "                                        ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 162
            yield "                                        ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 163
            yield "                                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated set of tags run against the Media tag to determine membership.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 164
            yield "                                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["filterMediaTag", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "filterMediaTags", [], "any", false, false, false, 164), ($context["helpText"] ?? null), "", null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "filterExactTags", [], "any", false, false, false, 164), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "filterMediaTagsLogicalOperator", [], "any", false, false, false, 164)], 164, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 166
        yield "
                                    ";
        // line 167
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 167)) {
            // line 168
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Folder Filter");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 169
            yield "                                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select a folder to filter the media items.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 170
            yield "                                        ";
            $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search")], ["name" => "data-filter-options", "value" => "{\"gridView\":1}"], ["name" => "data-search-term", "value" => "folderName"], ["name" => "data-id-property", "value" => "folderId"], ["name" => "data-text-property", "value" => "text"], ["name" => "data-initial-key", "value" => "folderId"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,             // line 178
($context["playlist"] ?? null), "filterFolderId", [], "any", false, false, false, 178)], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""]];
            // line 183
            yield "                                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["filterFolderId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "filterFolderId", [], "any", false, false, false, 183), null, "", "", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 183, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 185
        yield "
                                    ";
        // line 186
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Max number of Items");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 187
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The upper limit on number of Media items that can be dynamically assigned to this Playlist");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["maxNumberOfItems", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "maxNumberOfItems", [], "any", false, false, false, 188), ($context["helpText"] ?? null), "dynamic-message", "", "", CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", [], "any", false, false, false, 188)], 188, $context, $this->getSourceContext());
        yield "

                                    <div class=\"XiboData card pt-3\">
                                        <table id=\"playlistLibraryMedia\" class=\"table table-striped\" style=\"width:100%\">
                                            <thead>
                                            <tr>
                                                <th>";
        // line 194
        echo __("ID");
        yield "</th>
                                                <th>";
        // line 195
        echo __("Name");
        yield "</th>
                                                <th>";
        // line 196
        echo __("Type");
        yield "</th>
                                                ";
        // line 197
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 197)) {
            yield "<th>";
            echo __("Tags");
            yield "</th>";
        }
        // line 198
        yield "                                                <th>";
        echo __("Duration");
        yield "</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"static-message\">
                            ";
        // line 211
        $context["message"] = __("Filter options are not available on a Playlist which isn't dynamic.");
        // line 212
        yield "                            ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 212, $context, $this->getSourceContext());
        yield "
                        </div>
                    </div>
                </div>
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
        return "playlist-form-edit.twig";
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
        return array (  480 => 212,  478 => 211,  461 => 198,  455 => 197,  451 => 196,  447 => 195,  443 => 194,  433 => 188,  427 => 187,  422 => 186,  419 => 185,  413 => 183,  411 => 178,  409 => 170,  403 => 169,  397 => 168,  395 => 167,  392 => 166,  386 => 164,  380 => 163,  374 => 162,  368 => 161,  362 => 160,  360 => 159,  354 => 157,  349 => 156,  344 => 154,  337 => 151,  335 => 150,  327 => 146,  325 => 144,  324 => 143,  323 => 142,  321 => 141,  315 => 140,  309 => 139,  304 => 138,  301 => 137,  295 => 136,  290 => 135,  284 => 133,  278 => 132,  273 => 131,  270 => 130,  264 => 127,  256 => 123,  250 => 122,  245 => 121,  238 => 118,  233 => 117,  225 => 113,  219 => 112,  213 => 111,  211 => 110,  205 => 108,  199 => 107,  194 => 106,  191 => 105,  186 => 103,  179 => 99,  174 => 97,  165 => 91,  162 => 90,  160 => 89,  151 => 85,  146 => 83,  142 => 82,  137 => 79,  133 => 78,  88 => 38,  80 => 36,  73 => 33,  68 => 32,  64 => 31,  58 => 28,  54 => 27,  49 => 24,  47 => 25,  40 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-form-edit.twig", "/var/www/cms/views/playlist-form-edit.twig");
    }
}
