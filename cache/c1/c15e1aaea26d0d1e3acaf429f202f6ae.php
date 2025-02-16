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

/* playlist-dashboard.twig */
class __TwigTemplate_8fdad8392683d3ed490553791cb639a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "playlist-dashboard.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "playlist-dashboard.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "
    <div class=\"row mt-4\">
        <div class=\"col-lg-6\">
           ";
        // line 31
        yield "            ";
        $context["attributes"] = [["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlistdashboard.search")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "playlistId"], ["name" => "data-text-property", "value" => "name"]];
        // line 39
        yield "
            ";
        // line 40
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Playlist");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        yield "            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a Playlist to manage");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield "            ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["playlistId", "single", ($context["title"] ?? null), "", [($context["playlist"] ?? null)], "playlistId", "name", ($context["helpText"] ?? null), "playlist-control pagedSelect", "", "", "", ($context["attributes"] ?? null)], 42, $context, $this->getSourceContext());
        yield "

        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div id=\"spots\">

            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"card p-3 mb-3 bg-light\">
                <h3>";
        // line 54
        echo __("Playlist Content");
        yield "</h3>
                <p>";
        // line 55
        echo __("Fill empty Spots by clicking on ‘Add’ to select the media file you wish to use.");
        yield "</p>

                <p>";
        // line 57
        echo __("Replace existing media files by clicking on a Spot and select the new media file you wish to use.");
        yield "</p>

                <p>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 59), "html", null, true);
        yield "</p>
            </div>
            ";
        // line 61
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("theme-dashboard-message.twig", "playlist-dashboard.twig", 61);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            yield from $__internal_compile_0->unwrap()->yield($context);
        }
        // line 62
        yield "        </div>
    </div>

";
        return; yield '';
    }

    // line 67
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        yield "    ";
        // line 69
        yield "    ";
        yield from         $this->loadTemplate("editorTranslations.twig", "playlist-dashboard.twig", 69)->unwrap()->yield($context);
        // line 70
        yield "    ";
        yield from         $this->loadTemplate("editorVars.twig", "playlist-dashboard.twig", 70)->unwrap()->yield($context);
        // line 71
        yield "
    <script src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 72), "html", null, true);
        yield "dist/playlistEditor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 73), "html", null, true);
        yield "dist/codeEditor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 74), "html", null, true);
        yield "dist/editorCommon.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\" nonce=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        // Define some global variables to keep hold of
        var template;
        var uploadUrl;

        \$(document).ready(function() {

            // Hide reshow welcome on this page
            \$('#reshowWelcomeMenuItem').remove();

            // We need to have the URL of hte upload form available
            uploadUrl = \"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        yield "\";

            // Bind our buttons on the dashboard
            // Listen to the playlist selector change
            \$(\"div.playlist-control select\").on(\"change\", function() {
                loadPlaylistIntoSpotEditor(\$(this).val());
            });

            // Upload server status check for browsers with CORS support:
            if (\$.support.cors) {
                \$.ajax({
                    url: uploadUrl,
                    type: 'HEAD'
                }).fail(function () {
                    \$('<span class=\"alert alert-error\"/>')
                        .text('Upload server currently unavailable - ' + new Date())
                        .appendTo(\$('.card'));
                });
            }

            // Compile our template once
            template = Handlebars.compile(\$(\"#template-spot-dashboard\").html());

            // Do we need to load a preset?
            loadPlaylistIntoSpotEditor(\$(\"div.playlist-control select\").val());
        });

        /**
         * Load a Playlist into the Spot Editor
         * @param playlistId the playlistId
         */
        function loadPlaylistIntoSpotEditor(playlistId) {
            // Check we have a playlistId provided
            if (playlistId === undefined || playlistId === null || playlistId === \"\") {
                return;
            }

            // Make an AJAX call to the spots backend for this, and dump the resulting HTML into our target div.
            var \$spotElement = \$(\"#spots\");

            \$spotElement.html(\"<span class=\\\"fa fa-cogs fa-spin\\\"></span>\");

            \$.ajax(\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlistdashboard.show", ["id" => ":id"]), "html", null, true);
        yield "\".replace(\":id\", playlistId), {
                method: \"GET\",
                success: function(response) {
                    if (response.success) {
                        \$spotElement.html(response.html);

                        // Run init generally to capture any Xibo special elements
                        XiboInitialise(\"#spots\");

                        // Also bind to any special buttons we have on our page.

                        // Bind an on-click event to each of our buttons
                        // when we click them, they get replaced with a file upload form.
                        // once complete, or cancelled, they get reloaded with new information, or the old info put back.
                        \$spotElement.find(\".spot-action-button\").on(\"click\", function() {
                            spotActionButtonClick(\$(this));
                        });

                        // Bind click event to delete a playlist widget
                        \$spotElement.find(\".delete-widget\").click(function(e) {
                            var \$anchor = \$(this).children();
                            e.preventDefault();
                            XiboFormRender(\$anchor);
                        });
                    } else {
                        SystemMessage(response.message);
                    }
                }
            })
        }

        /**
         * What should happen when we click a button?
         * @param button
         */
        function spotActionButtonClick(button) {

            // Whip away the current button
            var \$container = button.parent();
            var \$imgDiv = \$container.prev();
            var \$delButtonDiv = \$container.next();

            // Remove the button, thumbnail and whatever else
            button.remove();
            \$imgDiv.empty();
            \$delButtonDiv.empty();

            // Append a new one
            \$container.append(template({
                playlistId: \$container.data(\"playlistId\"),
                widgetId: \$container.data(\"widgetId\"),
                oldMediaId: \$container.data(\"mediaId\"),
                upload: {
                    maxSize: ";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 181), "html", null, true);
        yield ",
                    validExt: \"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validExtensions"] ?? null), "html", null, true);
        yield "\"
                }
            }));

            // Hand over to blue-imp
            // Configure the upload form
            var form = \$container.find(\"form\");

            // Initialize the jQuery File Upload widget:
            form.fileupload({
                url: uploadUrl,
                disableImageResize: true,
                maxNumberOfFiles: 1,
                limitMultiFileUploads: 1,
                autoUpload: true,
                dropZone: \$(this).parent()
            });

            // Enable iframe cross-domain access via redirect option:
            form.fileupload('option', 'redirect', window.location.href.replace(/\\/[^\\/]*\$/, '/cors/result.html?%s'));

            form.bind('fileuploadalways', function (e, data) {
                if (data.textStatus === \"success\") {
                    // Take the data and update our form back to a replace button
                    var result = data.result.files[0];

                    // Pull the results out
                    if (result.error !== undefined) {
                        toastr.error(result.error);
                    } else {
                        // update the container with a new mediaId
                        \$container.data(\"mediaId\", result.mediaId);
                        \$container.data(\"widgetId\", result.widgetId);
                        \$container.data(\"widgetName\", result.name);
                        \$container.data(\"mediaType\", result.mediaType);

                        if (\$container.data(\"buttonType\") === \"add\") {

                            \$container.data(\"buttonType\", \"replace\");

                            // Change Empty to Add in the next row down (if there is one)
                            var \$next = \$container.parent().next().find(\"button\");
                            \$next.addClass(\"spot-action\").addClass(\"btn-success\").removeClass(\"btn-white\").prop(\"disabled\", false).html(\"Add\");
                            \$next.on(\"click\", function () {
                                spotActionButtonClick(\$next);
                            });
                        }
                    }
                } else {
                    toastr.error(data.result);
                }

                var button;
                if (\$container.data(\"widgetName\") !== undefined) {
                    // Switch back to a button
                    button = \$(\"<button class=\\\"btn btn-block btn-warning spot-action-button\\\">\" + \$container.data(\"widgetName\") + \"</button>\");
                    \$container.append(button);

                    var delTempl = Handlebars.compile(\$(\"#delete-template\").html());
                    \$delButtonDiv.append(delTempl({
                        href: \$container.data(\"widgetDel\").replace(\":id\", \$container.data(\"widgetId\")),
                        featureEnabled: \$container.data(\"featureEnabled\"),
                        transDelete: \"";
        // line 244
        echo __("Delete");
        yield "\"
                    }));

                    if (\$container.data(\"mediaType\") === \"image\") {
                        var previewUrl = \$container.data(\"widgetPreview\").replace(\":id\", \$container.data(\"mediaId\"));
                        var thumbnail = \$(\"<a class=\\\"img-replace\\\" data-toggle=\\\"lightbox\\\" data-type=\\\"image\\\" href=\\\"\" + previewUrl + \"\\\">\" +
                            \"<img src=\\\"\" + previewUrl.replace('download', 'thumbnail') + \"\\\" style=\\\"max-height: 50px; max-width: 50px;\\\" alt=\\\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thumbnail"), "html", null, true);
        yield "\\\"/>\" +
                            \"</a>\");

                        \$imgDiv.append(thumbnail);
                    } else {
                        \$imgDiv.append(\$(\"<i class=\\\"fa fa-2x fa-check\\\" style=\\\"height: 50px; max-width: 50px;\\\"></i>\"));
                    }

                } else {
                    button = \$(\"<button class=\\\"btn btn-block btn-success spot-action-button\\\">Add</button>\");
                    \$container.append(button);

                }

                // Bind to the button.
                button.on(\"click\", function () {
                    spotActionButtonClick(\$(this));
                });

                setTimeout(function() {
                    form.fileupload('destroy');
                    form.remove();
                }, 500);
            });

            // Click our new button
            \$container.find('input[name=\"files[]\"]').trigger(\"click\");
        }

        /**
         * Callback used by the Playlist Module Delete form opening.
         */
        function playlistModuleDeleteFormOpen() {

            \$(\"#playlistModuleDeleteForm\").submit(function(e) {
                e.preventDefault();

                // Call the usual form submit.
                XiboFormSubmit(\$(\"#playlistModuleDeleteForm\"), null, function(xhr, form) {
                    if (xhr.success) {
                        loadPlaylistIntoSpotEditor(\$(\"div.playlist-control select\").val());
                    }
                });
            });
        }

    </script>
    ";
        // line 298
        yield "    ";
        // line 347
        yield "
    <script type=\"text/x-handlebars-template\" id=\"template-spot-dashboard\">
        <form method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/){{ upload.validExt }}\$/i\">
            <input type=\"hidden\" name=\"playlistId\" value=\"{{ playlistId }}\" />
            {{#if widgetId}}
            <input type=\"hidden\" name=\"widgetId\" value=\"{{ widgetId }}\" />
            {{/if}}
            {{#if oldMediaId}}
            <input type=\"hidden\" name=\"oldMediaId\" value=\"{{ oldMediaId }}\" />
            {{/if}}
            <input type=\"hidden\" name=\"updateInLayouts\" value=\"1\" />
            <input type=\"hidden\" name=\"deleteOldRevisions\" value=\"1\" />
            <div class=\"row fileupload-buttonbar\">
                <div class=\"col-md-7\">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"fa fa-plus\"></i>
                        <span>Please select a file...</span>
                        <input type=\"file\" name=\"files[]\">
                    </span>
                    <!-- The loading indicator is shown during file processing -->
                    <span class=\"fileupload-loading\"></span>
                </div>
                <!-- The global progress information -->
                <div class=\"col-md-4 fileupload-progress fade\">
                    <!-- The global progress bar -->
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                            <div class=\"sr-only\"></div>
                        </div>
                    </div>
                    <!-- The extended global progress information -->
                    <div class=\"progress-extended\">&nbsp;</div>
                    <!-- Processing info container -->
                    <div class=\"progress-end\" style=\"display:none;\">{{ trans.processing }}</div>
                </div>
            </div>
        </form>
    </script>

    <!-- The template to display delete button -->
    <script type=\"text/x-handlebars-template\" id=\"delete-template\">
        {{#if featureEnabled }}
            <a class=\"XiboFormButton added btns\" title=\"{{ transDelete }}\" href=\"{{ href }}\">
                <i class=\"fa fa-lg fa-trash\" aria-hidden=\"true\" style=\"padding:8px 0 8px; color:#d9534f;\"></i>
            </a>
        {{/if}}
    </script>

    ";
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "playlist-dashboard.twig";
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
        return array (  420 => 347,  418 => 298,  368 => 250,  359 => 244,  294 => 182,  290 => 181,  234 => 128,  189 => 86,  175 => 75,  165 => 74,  155 => 73,  145 => 72,  142 => 71,  139 => 70,  136 => 69,  134 => 68,  130 => 67,  122 => 62,  112 => 61,  107 => 59,  102 => 57,  97 => 55,  93 => 54,  77 => 42,  71 => 41,  66 => 40,  63 => 39,  60 => 31,  55 => 27,  51 => 26,  46 => 23,  44 => 24,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-dashboard.twig", "/var/www/cms/views/playlist-dashboard.twig");
    }
}
