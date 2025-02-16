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

/* editorVars.twig */
class __TwigTemplate_207c1b24c20afb1c3e9f5164f6e09218 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield from $this->unwrap()->yieldBlock('javaScript', $context, $blocks);
        return; yield '';
    }

    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var serverMode = \"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SERVER_MODE", [], "any", false, false, false, 7), "html", null, true);
        yield "\";
        var playlistRegionColouring =  \"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "REGION_OPTIONS_COLOURING", [], "any", false, false, false, 8), "html", null, true);
        yield "\";
        var libraryUpload = ";
        // line 9
        yield json_encode(($context["libraryUpload"] ?? null));
        yield ";
        var librarySearchUrl = \"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search.all"), "html", null, true);
        yield "\";
        var libraryAddUrl = \"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        yield "\";
        var templateSearchUrl = \"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.search.all"), "html", null, true);
        yield "\";
        var defaultThumbnailUrl = '";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 13), "html", null, true);
        yield "theme/default/img/thumbs/placeholder.png';
        var uploadFormUpdateAllDefault = ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 14) == 1)) {
            yield "true";
        } else {
            yield "false";
        }
        yield ";
        var uploadFormDeleteOldDefault = ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", [], "any", false, false, false, 15) == 1)) {
            yield "true";
        } else {
            yield "false";
        }
        yield ";
        var assetDownloadUrl = \"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.asset.download", ["assetId" => ":assetId"]), "html", null, true);
        yield "\";
        var tooltipDelay = {'show': 250, 'hide': 0};
        var playlistEditorUrl = \"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.timeline.form", ["id" => ":id"]), "html", null, true);
        yield "\";
        var timezones = ";
        // line 19
        yield json_encode(($context["timeZones"] ?? null));
        yield ";

        // Save navbar position
        var navbarPosition = 'vertical';
        ";
        // line 23
        $context["horizontalNav"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["navigationMenuPosition", CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["NAVIGATION_MENU_POSITION", "vertical"], "method", false, false, false, 23)], "method", false, false, false, 23) == "horizontal");
        // line 24
        yield "        ";
        if (($context["horizontalNav"] ?? null)) {
            // line 25
            yield "            navbarPosition = 'horizontal';
        ";
        }
        // line 27
        yield "
        // MODULES LIST
        var modulesList = [];
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 31
            yield "            modulesList.push(";
            yield json_encode($context["module"]);
            yield ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
        // Structure with API URLs
        var urlsForApi = {
            layout: {
                designer: {
                    url: \"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.designer", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                get: {
                    url: \"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                add: {
                    url: \"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.add"), "html", null, true);
        yield "\",
                    type: 'POST'
                },
                getForm: {
                    url: \"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.background.form", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                editForm: {
                    url: \"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.edit.form", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.edit.background", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                downloadBackground: {
                    url: \"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.download.background", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                preview: {
                    url: \"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.preview", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                checkout: {
                    url: \"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.checkout", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                publish: {
                    url: \"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.publish", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                discard: {
                    url: \"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.discard", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                clear: {
                    url: \"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.clear", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                delete: {
                    url: \"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.delete", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'DELETE'
                },
                unlock: {
                    url: \"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.lock.release", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                applyTemplate: {
                    url: \"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.apply.template", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                list: {
                    url: \"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.view"), "html", null, true);
        yield "\"
                },
                status: {
                    url: \"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.status", ["id" => ":id"]), "html", null, true);
        yield "\"
                },
                designer: {
                    url: \"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.designer", ["id" => ":id"]), "html", null, true);
        yield "\"
                },
                schedule: {
                    url: \"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add.form", ["from" => "Layout", "id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                saveTemplate: {
                    url: \"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.from.layout.form", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                publishForm: {
                    url: \"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.publish.form", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                discardForm: {
                    url: \"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.discard.form", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                clearForm: {
                    url: \"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.clear.form", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                deleteForm: {
                    url: \"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.delete.form", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                addDrawer: {
                    url: \"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.add.drawer", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'POST'
                },
                saveDrawer: {
                    url: \"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.save.drawer", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                addThumbnail: {
                  url: '";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.thumbnail.add", ["id" => ":id"]), "html", null, true);
        yield "',
                  type: 'POST'
                },
                codeSearch: {
                    url: \"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.code.search"), "html", null, true);
        yield "\",
                    type: 'GET'
                },
            },
            template: {
                list: {
                    url: \"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.view"), "html", null, true);
        yield "\"
                },
                getProviders: {
                    url: \"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.search.providers"), "html", null, true);
        yield "\",
                    type: 'GET'
                },
            },
            region: {
                transform: {
                    url: \"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.position.all", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT',
                    useMainObjectId: true
                },
                getForm: {
                    url: \"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.get", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.edit", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                create: {
                    url: \"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.add", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'POST',
                    useMainObjectId: true
                },
                delete: {
                    url: \"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.delete", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'DELETE'
                },
                preview: {
                    url: \"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.preview", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                getPermissions:  {
                    url: \"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.permissions.form", ["entity" => "Region", "id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                }
            },
            widget: {
                getForm: {
                    url: \"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.get", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.edit", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                preview: {
                    url: \"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.preview", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                delete: {
                    url: \"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.delete", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'DELETE'
                },
                getAudio: {
                    url: \"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.audio.form", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                saveAudio:  {
                    url: \"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.audio", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                getExpiry: {
                    url: \"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.expiry.form", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                saveExpiry:  {
                    url: \"";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.expiry", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                getTransition: {
                    url: \"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.transition.edit.form", ["id" => ":id", "type" => ":type"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                saveTransition:  {
                    url: \"";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.transition.edit", ["id" => ":id", "type" => ":type"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                getPermissions:  {
                    url: \"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.permissions.form", ["entity" => "Widget", "id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                setRegion: {
                    url: \"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.set.region", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                getDataType: {
                    url: \"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.dataType", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                saveElements: {
                    url: \"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.elements", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
                data: {
                    get: {
                        url: \"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.data.get", ["id" => ":id"]), "html", null, true);
        yield "\",
                        type: 'GET'
                    },
                    add: {
                        url: \"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.data.add", ["id" => ":id"]), "html", null, true);
        yield "\",
                        type: 'POST'
                    },
                    edit: {
                        url: \"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.data.edit", ["id" => ":id", "dataId" => ":dataId"]), "html", null, true);
        yield "\",
                        type: 'PUT'
                    },
                    delete: {
                        url: \"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.data.delete", ["id" => ":id", "dataId" => ":dataId"]), "html", null, true);
        yield "\",
                        type: 'DELETE'
                    },
                    setOrder: {
                        url: \"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.data.set.order", ["id" => ":id"]), "html", null, true);
        yield "\",
                        type: 'POST'
                    },
                },
            },
            library: {
                get: {
                    url: \"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                connectorImport: {
                    url: \"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.connector.import"), "html", null, true);
        yield "\",
                    type: 'POST'
                },
                download: {
                    url: \"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
            },
            playlist: {
                get: {
                    url: \"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search"), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                getForm: {
                    url: \"";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.edit.form", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                addMedia: {
                    url: \"";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.library.assign", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'POST'
                },
                addWidget: {
                    url: \"";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.add", ["type" => ":type", "id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'POST'
                },
                preview: {
                    url: \"";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.preview", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                order: {
                    url: \"";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.order", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'POST'
                },
                convert: {
                    url: \"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.convert", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'POST'
                },
            },
            user: {
                get: {
                    url: \"";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search"), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                getPref: {
                    url: \"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.pref"), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                savePref: {
                    url: \"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.pref"), "html", null, true);
        yield "\",
                    type: 'POST'
                },
                permissions: {
                    url: \"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.permissions.form", ["entity" => ":entity", "id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                }
            },
            media: {
                isUsed: {
                    url: \"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.isused", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                getProviders: {
                    url: \"";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search.providers"), "html", null, true);
        yield "\",
                    type: 'GET'
                }
            },
            module: {
                getTemplates: {
                    url: \"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.template.search", ["dataType" => ":dataType"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                getData: {
                    url: \"";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.getData", ["regionId" => ":regionId", "id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                assetDownload: {
                    url: \"";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.asset.download", ["assetId" => ":assetId"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
            },
            actions: {
                get: {
                    url: \"";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("action.search"), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                delete: {
                    url: \"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("action.delete", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'DELETE'
                },
                add: {
                    url: \"";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("action.add", ["source" => ":source", "id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'POST'
                },
                edit: {
                    url: \"";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("action.edit", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'PUT'
                },
            },
            dataset: {
                search: {
                    url: \"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.search"), "html", null, true);
        yield "\",
                    type: 'GET'
                },
            },
            menuBoard: {
                search: {
                    url: \"";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.search"), "html", null, true);
        yield "\",
                    type: 'GET'
                },
                categorySearch: {
                    url: \"";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.category.search", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                },
            },
            command: {
                search: {
                    url: \"";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.search"), "html", null, true);
        yield "\",
                    type: 'GET'
                },
            },
            connectorProperties: {
                search: {
                    url: \"";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("widget.edit.options", ["id" => ":id"]), "html", null, true);
        yield "\",
                    type: 'GET'
                }
            },
            layoutTemplates: {
                search: {
                    url: \"";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.search"), "html", null, true);
        yield "\",
                    type: 'GET',
                }
            },
            folders: {
                get: {
                    url: \"";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search"), "html", null, true);
        yield "\",
                    type: 'GET',
                }
            }
        };
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "editorVars.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  771 => 408,  762 => 402,  753 => 396,  744 => 390,  735 => 384,  728 => 380,  719 => 374,  710 => 368,  703 => 364,  696 => 360,  689 => 356,  680 => 350,  673 => 346,  666 => 342,  657 => 336,  650 => 332,  641 => 326,  634 => 322,  627 => 318,  620 => 314,  611 => 308,  604 => 304,  597 => 300,  590 => 296,  583 => 292,  576 => 288,  569 => 284,  560 => 278,  553 => 274,  546 => 270,  536 => 263,  529 => 259,  522 => 255,  515 => 251,  508 => 247,  500 => 242,  493 => 238,  486 => 234,  479 => 230,  472 => 226,  465 => 222,  458 => 218,  451 => 214,  444 => 210,  437 => 206,  430 => 202,  423 => 198,  416 => 194,  409 => 190,  400 => 184,  393 => 180,  386 => 176,  378 => 171,  371 => 167,  364 => 163,  356 => 158,  347 => 152,  341 => 149,  332 => 143,  325 => 139,  318 => 135,  311 => 131,  304 => 127,  297 => 123,  290 => 119,  283 => 115,  276 => 111,  269 => 107,  263 => 104,  257 => 101,  251 => 98,  244 => 94,  237 => 90,  230 => 86,  223 => 82,  216 => 78,  209 => 74,  202 => 70,  195 => 66,  188 => 62,  181 => 58,  174 => 54,  167 => 50,  160 => 46,  153 => 42,  146 => 38,  139 => 33,  130 => 31,  126 => 30,  121 => 27,  117 => 25,  114 => 24,  112 => 23,  105 => 19,  101 => 18,  96 => 16,  88 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  47 => 6,  39 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "editorVars.twig", "/var/www/cms/views/editorVars.twig");
    }
}
