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

/* playlist-form-add.twig */
class __TwigTemplate_32ab71c145fbf6c7d1dd7baf78e20d42 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "playlist-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "playlist-form-add.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        echo __("Add Playlist");
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
        yield ", \$(\"#playlistAddForm\").submit()
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
            <form id=\"playlistAddForm\" class=\"XiboForm form-horizontal playlistForm\" method=\"post\" action=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.add"), "html", null, true);
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
            echo __("Folder");
            yield "</label>
                            <div class=\"col-sm-10\">
                                <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 93
            echo __("Select Folder");
            yield "</button>
                                <span id=\"selectedFormFolder\"></span>
                            </div>
                        </div>
                        ";
            // line 97
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId"], 97, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 99
        yield "
                        ";
        // line 100
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name of the Playlist - (1 - 50 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 102, $context, $this->getSourceContext());
        yield "

                        ";
        // line 104
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 104)) {
            // line 105
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags for this Playlist - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 107
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "tags-with-value"], 107, $context, $this->getSourceContext());
            yield "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 111
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 112
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 112, $context, $this->getSourceContext());
            yield "

                            <div id=\"tagValueContainer\">
                                ";
            // line 115
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 116
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 117
            yield "                                ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 117, $context, $this->getSourceContext());
            yield "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 121
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            yield "</p>
                            </div>
                        ";
        }
        // line 124
        yield "
                        ";
        // line 125
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Dynamic?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is the Playlist to have Library media assignments managed automatically by the CMS based on filter criteria? Set a filter on the next tab.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isDynamic", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 127, $context, $this->getSourceContext());
        yield "

                        ";
        // line 129
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable Playlist Stats Collection?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Enable the collection of Proof of Play statistics for this Playlist. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        yield "
                        ";
        // line 132
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("If you want to prepopulate your Playlist with Media using a search, then you can do so on the filter tab. Leave the Dynamic checkbox unticked to make it a one-time assignment.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_alert", [($context["message"] ?? null), "info"], 133, $context, $this->getSourceContext());
        yield "
                        
                        ";
        // line 135
        $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Off");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        yield "                        ";
        $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("On");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        yield "                        ";
        $context["inheritOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Inherit");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        yield "                        ";
        $context["options"] = [["id" => "Off", "value" =>         // line 139
($context["offOption"] ?? null)], ["id" => "On", "value" =>         // line 140
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>         // line 141
($context["inheritOption"] ?? null)]];
        // line 143
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["enableStat", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 143), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 143, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"populate\">
                        <div class=\"dynamic-message\">
                            ";
        // line 147
        $context["message"] = __("Populate with Library Media matching the criteria below and automatically maintain the Playlist.");
        // line 148
        yield "                            ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 148, $context, $this->getSourceContext());
        yield "
                        </div>
                        <div class=\"static-message\">
                            ";
        // line 151
        $context["message"] = __("Populate with Library Media matching the criteria below. This is a one time assignment and is not automatically maintained.");
        // line 152
        yield "                            ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 152, $context, $this->getSourceContext());
        yield "
                        </div>

                        <div class=\"widget\">
                            <div class=\"widget-title\">";
        // line 156
        echo __("Library Media");
        yield "</div>
                            <div class=\"widget-body\">
                                <div class=\"FilterDiv\" id=\"Filter\">
                                    ";
        // line 159
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name filter");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 160
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_inputWithLogicalOperator", ["filterMediaName", ($context["title"] ?? null)], 160, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 162
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 162)) {
            // line 163
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag filter");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 164
            yield "                                        ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 165
            yield "                                        ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 166
            yield "                                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated set of tags to match against tags on library media.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 167
            yield "                                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["filterMediaTag", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 167, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 169
        yield "
                                    ";
        // line 170
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 170)) {
            // line 171
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Folder Filter");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 172
            yield "                                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select a folder to filter the media items.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 173
            yield "                                        ";
            $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search")], ["name" => "data-filter-options", "value" => "{\"gridView\":1}"], ["name" => "data-search-term", "value" => "folderName"], ["name" => "data-id-property", "value" => "folderId"], ["name" => "data-text-property", "value" => "text"], ["name" => "data-initial-key", "value" => "folderId"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""]];
            // line 185
            yield "                                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["filterFolderId", "single", ($context["title"] ?? null), "", null, "", "", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 185, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 187
        yield "
                                    ";
        // line 188
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Max number of Items");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 189
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The upper limit on number of Media items that can be dynamically assigned to this Playlist");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        yield "                                    ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["maxNumberOfItems", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", [], "any", false, false, false, 190), ($context["helpText"] ?? null), "dynamic-message", "", "", CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", [], "any", false, false, false, 190)], 190, $context, $this->getSourceContext());
        yield "
                                </div>

                                <div class=\"XiboData card pt-3\">
                                    <table id=\"playlistLibraryMedia\" class=\"table table-striped\">
                                        <thead>
                                        <tr>
                                            <th>";
        // line 197
        echo __("ID");
        yield "</th>
                                            <th>";
        // line 198
        echo __("Name");
        yield "</th>
                                            <th>";
        // line 199
        echo __("Type");
        yield "</th>
                                            ";
        // line 200
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 200)) {
            yield "<th>";
            echo __("Tags");
            yield "</th>";
        }
        // line 201
        yield "                                            <th>";
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
        return "playlist-form-add.twig";
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
        return array (  474 => 201,  468 => 200,  464 => 199,  460 => 198,  456 => 197,  445 => 190,  439 => 189,  434 => 188,  431 => 187,  425 => 185,  422 => 173,  416 => 172,  410 => 171,  408 => 170,  405 => 169,  399 => 167,  393 => 166,  387 => 165,  381 => 164,  375 => 163,  373 => 162,  367 => 160,  362 => 159,  356 => 156,  348 => 152,  346 => 151,  339 => 148,  337 => 147,  329 => 143,  327 => 141,  326 => 140,  325 => 139,  323 => 138,  317 => 137,  311 => 136,  306 => 135,  300 => 133,  295 => 132,  292 => 131,  286 => 130,  281 => 129,  275 => 127,  269 => 126,  264 => 125,  261 => 124,  255 => 121,  247 => 117,  241 => 116,  236 => 115,  229 => 112,  224 => 111,  216 => 107,  210 => 106,  204 => 105,  202 => 104,  196 => 102,  190 => 101,  185 => 100,  182 => 99,  177 => 97,  170 => 93,  165 => 91,  162 => 90,  160 => 89,  151 => 85,  146 => 83,  142 => 82,  137 => 79,  133 => 78,  88 => 38,  80 => 36,  73 => 33,  68 => 32,  64 => 31,  58 => 28,  54 => 27,  49 => 24,  47 => 25,  40 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-form-add.twig", "/var/www/cms/views/playlist-form-add.twig");
    }
}
