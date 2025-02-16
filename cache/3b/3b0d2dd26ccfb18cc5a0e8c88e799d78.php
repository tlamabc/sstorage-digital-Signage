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

/* include-file-upload.twig */
class __TwigTemplate_c020c066ffeb2c338dbcfedd3b2dc4b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 3), "html", null, true);
        yield "dist/vendor/jquery-file-upload/js/tmpl.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 4), "html", null, true);
        yield "dist/vendor/jquery-load-image/load-image.all.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 5), "html", null, true);
        yield "dist/vendor/jquery-file-upload/js/jquery.iframe-transport.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 6), "html", null, true);
        yield "dist/vendor/jquery-file-upload/js/jquery.fileupload.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 7), "html", null, true);
        yield "dist/vendor/jquery-file-upload/js/jquery.fileupload-process.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 8), "html", null, true);
        yield "dist/vendor/jquery-file-upload/js/jquery.fileupload-resize.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 9), "html", null, true);
        yield "dist/vendor/jquery-file-upload/js/jquery.fileupload-validate.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 10), "html", null, true);
        yield "dist/vendor/jquery-file-upload/js/jquery.fileupload-ui.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 11), "html", null, true);
        yield "dist/vendor/jquery-file-upload/js/jquery.fileupload-image.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 12), "html", null, true);
        yield "dist/vendor/jquery-file-upload/js/jquery.fileupload-video.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 13), "html", null, true);
        yield "dist/vendor/jquery-file-upload/js/jquery.fileupload-audio.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>

";
        // line 16
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 16), "html", null, true);
        yield "dist/fileUpload.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>

";
        // line 19
        yield "<script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
  let maxImagePixelSize = \"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DEFAULT_RESIZE_LIMIT", [], "any", false, false, false, 20), "html", null, true);
        yield "\";
</script>

";
        // line 24
        yield "
";
        // line 52
        yield "
<script type=\"text/x-handlebars-template\" id=\"template-file-upload\">
    <form method=\"post\" enctype=\"multipart/form-data\" class=\"overflow-auto\">
        {{#if playlistId}}
            <input type=\"hidden\" name=\"playlistId\" value=\"{{ playlistId }}\" />
        {{/if}}
        {{#if widgetId}}
            <input type=\"hidden\" name=\"widgetId\" value=\"{{ widgetId }}\" />
        {{/if}}
        {{#if oldMediaId}}
            <input type=\"hidden\" name=\"oldMediaId\" value=\"{{ oldMediaId }}\" />
            <input type=\"hidden\" name=\"folderId\" type=\"hidden\" id=\"folderId\" value=\"{{oldFolderId}}\">
        {{else}}
            <input type=\"hidden\" name=\"folderId\" type=\"hidden\" id=\"formFolderId\" value=\"{{currentWorkingFolderId}}\">
        {{/if}}
        {{#if displayOrder}}
            <input type=\"hidden\" name=\"displayOrder\" value=\"{{ displayOrder }}\" />
        {{/if}}
        <div class=\"row fileupload-buttonbar\">
            <div class=\"col-md-7\">
                <div class=\"card p-3 mb-3 bg-light\">
                    <p>{{ upload.maxSizeMessage }}</p>
                    {{#if upload.validExtensionsMessage}}
                        <p><strong>{{ upload.validExtensionsMessage }}</strong></p>
                    {{/if}}
                    {{#if folderSelector}}
                    ";
        yield "   ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 52)) {
            yield " 
                    <div class=\"row\">
                        <div class=\"col-sm-3\" style=\"padding:0\">
                            <p title=\"{{trans.selectedFolderTitle}}\">{{ trans.selectedFolder }}</p>
                        </div>
                         <div class=\"col-sm-9\" style=\"padding:0\">
                            <span id=\"selectedFormFolder\"></span>
                        </div>
                    </div>
                      ";
        }
        // line 61
        yield " ";
        // line 83
        yield "
                    {{/if}}
                </div>
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class=\"btn btn-sm btn-success fileinput-button\">
                    <i class=\"fa fa-plus\"></i>
                    <span>{{ trans.addFiles }}</span>
                    {{#if multi }}
                    <input type=\"file\" name=\"files[]\" id=\"files\" multiple>
                    {{else}}
                    <input type=\"file\" name=\"files[]\" id=\"files\">
                    {{/if}}
                </span>
                <button type=\"submit\" class=\"btn btn-sm btn-primary start\">
                    <i class=\"fa fa-upload\"></i>
                    <span>{{ trans.startUpload }}</span>
                </button>
                <button type=\"reset\" class=\"btn btn-sm btn-warning cancel\">
                    <i class=\"fa fa-ban\"></i>
                    <span>{{ trans.cancelUpload }}</span>
                </button>
                {{#if folderSelector}}
                 ";
        yield "   ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 83)) {
            yield " 
                    <button type=\"button\" class=\"btn btn-sm btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\" title=\"{{trans.selectFolderTitle}}\">{{trans.selectFolder}}</button>
                   ";
        }
        // line 85
        yield " ";
        // line 234
        yield "
                {{/if}}
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
        {{#if oldMediaId}}
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" id=\"updateInLayouts\" name=\"updateInLayouts\" {{#if updateInAllChecked}}checked{{/if}}>
                    <label for=\"updateInLayouts\">
                        {{ trans.updateInLayouts.title }}
                    </label>
                </div>
                <small class=\"form-text text-muted\">{{ trans.updateInLayouts.helpText }}</small>
            </div>
            <div class=\"col-md-12\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" id=\"deleteOldRevisions\" name=\"deleteOldRevisions\" {{#if deleteOldRevisionsChecked}}checked{{/if}}>
                    <label for=\"deleteOldRevisions\">
                        {{ trans.deleteOldRevisions.title }}
                    </label>
                </div>
                <small class=\"form-text text-muted\">{{ trans.deleteOldRevisions.helpText }}</small>
            </div>
        </div>
        {{/if}}
        {{#if layoutImport }}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"replaceExisting\" name=\"replaceExisting\">
                    <label class=\"form-check-label\" for=\"replaceExisting\" title=\"If the import finds existing media with the same name, should it be replaced in the Layout or should the Layout use that media.\">
                        {{ trans.replaceExistingMediaMessage }}
                    </label>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"importTags\" name=\"importTags\">
                    <label class=\"form-check-label\" for=\"importTags\" title=\"Would you like to import any tags contained on the layout.\">
                        {{ trans.importTagsMessage }}
                    </label>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"useExistingDataSets\" name=\"useExistingDataSets\" checked>
                    <label class=\"form-check-label\" for=\"useExistingDataSets\">
                        {{ trans.useExistingDataSetsMessage }}
                    </label>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"importDataSetData\" name=\"importDataSetData\" disabled>
                    <label class=\"form-check-label\" for=\"importDataSetData\">
                        {{ trans.dataSetDataMessage }}
                    </label>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\"></div>
            <div class=\"col-md-6\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"field-importFallback\" name=\"importFallback\">
                    <label class=\"form-check-label\" for=\"field-importFallback\">
                        {{ trans.fallbackMessage }}
                    </label>
                </div>
            </div>
        </div>
        {{/if}}
        {{#if showWidgetDates }}
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"setExpiryDates\" name=\"setExpiryDates\">
                    <label class=\"form-check-label\" for=\"setExpiryDates\">{{ trans.widgetExpiryDates }}</label>
                </div>
                <small class=\"form-text text-muted\">{{ trans.widgetExpiryDatesMessage }}</small>
            </div>
        </div>
        <div class=\"row row-widget-dates row-widget-set-expiry hidden\">
            <div class=\"col-md-6\">
                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\" for=\"widgetFromDt\">{{ trans.widgetFromDt }}</label>
                    <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                            <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                            <input class=\"form-control dateControl dateTime\" type=\"text\" name=\"widgetFromDt\" id=\"widgetFromDt\" />
                            <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
                        </div>
                       <small class=\"form-text text-muted\">{{ trans.widgetFromDtMessage }}</small>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\" for=\"widgetToDt\">{{ trans.widgetToDt }}</label>
                    <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                            <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                            <input class=\"form-control dateControl dateTime\" type=\"text\" name=\"widgetToDt\" id=\"widgetToDt\" />
                            <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
                        </div>
                       <small class=\"form-text text-muted\">{{ trans.widgetToDtMessage }}</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row row-widget-set-expiry hidden\">
            <div class=\"col-md-12\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"deleteOnExpiry\" name=\"deleteOnExpiry\">
                    <label class=\"form-check-label\" for=\"deleteOnExpiry\">{{ trans.deleteOnExpiry }}</label>
                </div>
                <small class=\"form-text text-muted\">{{ trans.deleteOnExpiryMessage }}</small>
            </div>
            <div class=\"col-md-12\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"applyToMedia\" name=\"applyToMedia\">
                    <label class=\"form-check-label\" for=\"applyToMedia\">{{ trans.applyToMedia }}</label>
                </div>
                <span class=\"form-text text-muted\">{{ trans.applyToMediaMessage }}</span>
            </div>
        </div>
        {{/if}}
        <!-- The table listing the files available for upload/download -->
        <table role=\"presentation\" class=\"table table-striped table-sm\"><tbody class=\"files\"></tbody></table>
    </form>
</script>
";
        yield "

";
        // line 268
        yield "
<script id=\"template-upload-simple\" type=\"text/x-tmpl\">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class=\"template-upload\">
        <td>
            <span class=\"preview\"></span>
        </td>
        <td>
            <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                        <div class=\"sr-only\"></div>
                    </div>
                </div>
            </div>
        </td>
        <td class=\"btn-group\">
            {% if (!i && !o.options.autoUpload) { %}
                <button class=\"btn btn-primary start\" disabled>
                    <i class=\"fa fa-upload\"></i>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class=\"btn btn-warning cancel\">
                    <i class=\"fa fa-ban\"></i>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
";
        yield "

";
        // line 286
        yield "
<script id=\"template-upload\" type=\"text/x-tmpl\">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class=\"template-upload\">
        <td>
            <span class=\"preview\"></span>
        </td>
        <td class=\"row\">
            <div class=\"title col-12 mb-2 col-xl-6\" title=\"Name\">
                <label class=\"control-label\" title=\"Optional media name\" for=\"name[]\">Name</label>
                <div class=\"input-group\">
                    <input name=\"name[]\" type=\"text\" id=\"name\" value=\"\" />
                </div>
            </div>
            <div class=\"title col-12 mb-2 col-xl-6 tags-input-container\" title=\"Tags\">
                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 286)) {
            // line 287
            yield "                    <label class=\"control-label\" title=\"A comma separated list of tags to assign to this Media\" for=\"tags\">Tags</label>
                    <div class=\"input-group\">
                        <input name=\"tags[]\" type=\"text\" id=\"tags\" value=\"\" />
                    </div>
                ";
        }
        // line 326
        yield "
            </div>
            <div class=\"col-12 mb-2\">
                <span class=\"info\"></span>
            </div>
            <div class=\"col-12 mb-2\">
                <span class=\"error\"></span>
            </div>
        </td>
        <td>
            <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                        <div class=\"sr-only\"></div>
                    </div>
                </div>
            </div>
        </td>
        <td>
            <div class=\"btn-group\">
                {% if (!i && !o.options.autoUpload) { %}
                    <button class=\"btn btn-primary start\" disabled>
                        <i class=\"fa fa-upload\"></i>
                    </button>
                {% } %}
                {% if (!i) { %}
                    <button class=\"btn btn-warning cancel\">
                        <i class=\"fa fa-ban\"></i>
                    </button>
                {% } %}
            </div>
        </td>
    </tr>
{% } %}
</script>
";
        yield "

";
        // line 347
        yield "
<script id=\"template-download\" type=\"text/x-tmpl\">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class=\"template-download\">
       <td colspan=\"2\">
            <p class=\"name\" id=\"{%=file.storedas%}\" status=\"{% if (file.error) { %}error{% } %}\">
                {%=file.name%}
            </p>
            {% if (file.error) { %}
                <div><span class=\"label label-danger\">{%=file.error%}</span></div>
            {% } %}
        </td>
        <td colspan=\"2\">
            <span class=\"size\">{%=o.formatFileSize(file.size)%}</span>
        </td>
    </tr>
{% } %}
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "include-file-upload.twig";
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
        return array (  506 => 347,  466 => 326,  459 => 287,  441 => 286,  405 => 268,  251 => 234,  249 => 85,  219 => 83,  217 => 61,  176 => 52,  173 => 24,  167 => 20,  162 => 19,  150 => 16,  139 => 13,  129 => 12,  119 => 11,  109 => 10,  99 => 9,  89 => 8,  79 => 7,  69 => 6,  59 => 5,  49 => 4,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "include-file-upload.twig", "/var/www/cms/views/include-file-upload.twig");
    }
}
