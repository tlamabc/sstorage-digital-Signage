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

/* layout-designer-page.twig */
class __TwigTemplate_ba316c0cd1be8fca2c5938911a931526 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "layout-designer-page.twig", 25)->unwrap();
        // line 29
        $context["hideNavigation"] = "1";
        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "layout-designer-page.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Editor"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 31
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "
    <!-- Editor structure -->
    <div id=\"layout-editor\" data-published-layout-id=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["publishedLayoutId"] ?? null), "html", null, true);
        yield "\" data-layout-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 34), "html", null, true);
        yield "\" data-layout-help=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["help"] ?? null), "html", null, true);
        yield "></div>

    <div class=\"loading-overlay\">
        <i class=\"fa fa-spinner fa-spin loading-icon\"></i>
    </div>

";
        return; yield '';
    }

    // line 42
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        yield "        ";
        // line 44
        yield "        ";
        yield from         $this->loadTemplate("editorTranslations.twig", "layout-designer-page.twig", 44)->unwrap()->yield($context);
        // line 45
        yield "        ";
        yield from         $this->loadTemplate("editorVars.twig", "layout-designer-page.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "
        <script src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 47), "html", null, true);
        yield "dist/layoutEditor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 48), "html", null, true);
        yield "dist/playlistEditor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 49), "html", null, true);
        yield "dist/codeEditor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 50), "html", null, true);
        yield "dist/wysiwygEditor.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 51), "html", null, true);
        yield "dist/editorCommon.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" nonce=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">

            ";
        // line 55
        yield "            ";
        // line 56
        yield "                var layoutEditorHelpLink = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["help"] ?? null), "js", null, true);
        yield "\";
                ";
        // line 58
        yield "                var layoutEditorTrans = {
                    back: \"";
        // line 59
        echo __("Back");
        yield "\",
                    exit: \"";
        // line 60
        echo __("Exit");
        yield "\",
                    cancel: \"";
        // line 61
        echo __("Cancel");
        yield "\",
                    toggleFullscreen: \"";
        // line 62
        echo __("Toggle Fullscreen Mode");
        yield "\",
                    layerManager: \"";
        // line 63
        echo __("Layer Manager");
        yield "\",
                    snapToGrid: \"";
        // line 64
        echo __("Snap to Grid");
        yield "\",
                    snapToBorders: \"";
        // line 65
        echo __("Snap to Borders");
        yield "\",
                    snapToElements: \"";
        // line 66
        echo __("Snap to Elements");
        yield "\",
                    newTitle: \"";
        // line 67
        echo __("New");
        yield "\",
                    publishTitle: \"";
        // line 68
        echo __("Publish");
        yield "\",
                    discardTitle: \"";
        // line 69
        echo __("Discard draft");
        yield "\",
                    deleteTitle: \"";
        // line 70
        echo __("Delete");
        yield "\",
                    publishMessage: \"";
        // line 71
        echo __("Are you sure you want to publish this Layout? If it is already in use the update will automatically get pushed.");
        yield "\",
                    checkoutTitle: \"";
        // line 72
        echo __("Checkout");
        yield "\",
                    scheduleTitle: \"";
        // line 73
        echo __("Schedule");
        yield "\",
                    clearLayout: \"";
        // line 74
        echo __("Clear Canvas");
        yield "\",
                    unlockTitle: \"";
        // line 75
        echo __("Unlock");
        yield "\",
                    saveTemplateTitle: \"";
        // line 76
        echo __("Save Template");
        yield "\",
                    readOnlyModeTitle: \"";
        // line 77
        echo __("Read Only");
        yield "\",
                    readOnlyModeMessage: \"";
        // line 78
        echo __("You are viewing this Layout in read only mode, checkout by clicking on this message or from the Options menu above!");
        yield "\",
                    lockedModeTitle: \"";
        // line 79
        echo __("Locked");
        yield "\",
                    lockedModeMessage: \"";
        // line 80
        echo __("This is being locked by another user. Lock expires on: [expiryDate]");
        yield "\",
                    checkoutMessage: \"";
        // line 81
        echo __("Not editable, please checkout!");
        yield "\",
                    unlockMessage: \"";
        // line 82
        echo __("The current layout will be unlocked to other users. You will also be redirected to the Layouts page");
        yield "\",
                    viewModeTitle: \"";
        // line 83
        echo __("View");
        yield "\",
                    actions: \"";
        // line 84
        echo __("Actions");
        yield "\",
                    welcomeModalMessage: \"";
        // line 85
        echo __("This is published and cannot be edited. You can checkout for editing below, or continue to view it in a read only mode.");
        yield "\",
                    showingSampleData:  \"";
        // line 86
        echo __("Showing sample data");
        yield "\",
                    emptyElementData: \"";
        // line 87
        echo __("Has empty data");
        yield "\",
                };

                var viewerTrans = {
                    inlineEditor: \"";
        // line 91
        echo __("Inline Editor");
        yield "\",
                    nextWidget: \"";
        // line 92
        echo __("Next widget");
        yield "\",
                    previousWidget: \"";
        // line 93
        echo __("Previous widget");
        yield "\",
                    addWidget: \"";
        // line 94
        echo __("Add Widget");
        yield "\",
                    editGroup: \"";
        // line 95
        echo __("Edit Group");
        yield "\",
                    editPlaylist: \"";
        // line 96
        echo __("Edit Playlist");
        yield "\",
                    prev: '";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous Widget"), "js", null, true);
        yield "',
                    next: '";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next Widget"), "js", null, true);
        yield "',
                    empty: '";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Empty Playlist"), "js", null, true);
        yield "',
                    invalidRegion: '";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Invalid Region"), "js", null, true);
        yield "',
                    editPlaylistTitle: '";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Playlist"), "js", null, true);
        yield "',
                    dynamicPlaylistTitle: '";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dynamic Playlist"), "js", null, true);
        yield "',
                };

                var timelineTrans = {
                    zoomIn: \"";
        // line 106
        echo __("Zoom in");
        yield "\",
                    zoomOut: \"";
        // line 107
        echo __("Zoom out");
        yield "\",
                    resetZoom: \"";
        // line 108
        echo __("Reset zoom");
        yield "\",
                    zoomDelta: \"";
        // line 109
        echo __("Visible area time span");
        yield "\",
                    hiddenTimeruler: \"";
        // line 110
        echo __("Zoom out to see timeruler!");
        yield "\",
                    emptyTimeline: \"";
        // line 111
        echo __("No Regions: Add a Region to start creating content by clicking here or the Edit Layout icon below!");
        yield "\",
                    zoomFindSelected: \"";
        // line 112
        echo __("Scroll to selected widget");
        yield "\",
                    startTime: \"";
        // line 113
        echo __("Visible area start time");
        yield "\",
                    endTime: \"";
        // line 114
        echo __("Visible area end time");
        yield "\",
                    layoutName: \"";
        // line 115
        echo __("Layout name");
        yield "\",
                    layoutDuration: \"";
        // line 116
        echo __("Layout duration");
        yield "\",
                    layoutDimensions: \"";
        // line 117
        echo __("Layout dimensions");
        yield "\",
                    addToThisPosition: \"";
        // line 118
        echo __("Add to this position");
        yield "\",
                    hiddenContentInWidget: \"";
        // line 119
        echo __("Zoom in to see more details!");
        yield "\",
                    editRegion: \"";
        // line 120
        echo __("Edit region");
        yield "\",
                    openRegionAsPlaylist: \"";
        // line 121
        echo __("Open as playlist");
        yield "\",
                    widgetActions: \"";
        // line 122
        echo __("Widget Actions:");
        yield "\",
                    regionActions: \"";
        // line 123
        echo __("Region Actions:");
        yield "\"
                };

                var bottombarTrans = {
                    edit: \"";
        // line 127
        echo __("Edit layout regions");
        yield "\",
                    addRegion: \"";
        // line 128
        echo __("Add");
        yield "\",
                    addRegionDesc: \"";
        // line 129
        echo __("Add a new region");
        yield "\",
                    deleteRegion: \"";
        // line 130
        echo __("Delete region");
        yield "\",
                    undo: \"";
        // line 131
        echo __("Undo");
        yield "\",
                    undoDesc: \"";
        // line 132
        echo __("Revert last change");
        yield "\",
                    close: \"";
        // line 133
        echo __("Close");
        yield "\",
                    closeDesc: \"";
        // line 134
        echo __("Return to Layout View");
        yield "\",
                    save: \"";
        // line 135
        echo __("Save");
        yield "\",
                    saveDesc: \"";
        // line 136
        echo __("Save changes");
        yield "\",
                    backToLayout: \"";
        // line 137
        echo __("Go back to Layout view");
        yield "\",
                    saveEditorChanges: \"";
        // line 138
        echo __("Save editor changes");
        yield "\",
                    playPreviewLayout: \"";
        // line 139
        echo __("Play Layout preview");
        yield "\",
                    playPreviewLayoutPOTitle: \"";
        // line 140
        echo __("Preview stopped!");
        yield "\",
                    playPreviewLayoutPOMessage: \"";
        // line 141
        echo __("Click to Play again");
        yield "\",
                    editLayout: \"";
        // line 142
        echo __("Edit Layout");
        yield "\",
                    stopPreviewLayout: \"";
        // line 143
        echo __("Stop Layout preview");
        yield "\",
                    nextWidget: \"";
        // line 144
        echo __("Next widget");
        yield "\",
                    previousWidget: \"";
        // line 145
        echo __("Previous widget");
        yield "\",
                    widgetName: \"";
        // line 146
        echo __("Widget Name");
        yield "\",
                    widgetType: \"";
        // line 147
        echo __("Widget Type");
        yield "\",
                    widgetTemplate: \"";
        // line 148
        echo __("Widget Template Name");
        yield "\",
                    elementName: \"";
        // line 149
        echo __("Element Name");
        yield "\",
                    elementMediaInfoName: \"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Media Name"), "js", null, true);
        yield "\",
                    elementMediaInfoId: \"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Media ID"), "js", null, true);
        yield "\",
                    elementGroupName: \"";
        // line 152
        echo __("Element Group Name");
        yield "\",
                    regionName: \"";
        // line 153
        echo __("Region Name");
        yield "\",
                    templateName: \"";
        // line 154
        echo __("Template");
        yield "\",
                    objectType: {
                        layout: \"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout"), "js", null, true);
        yield "\",
                        region: \"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Region"), "js", null, true);
        yield "\",
                        zone: \"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                        playlist: \"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                        widget: \"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget"), "js", null, true);
        yield "\",
                        element: \"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element"), "js", null, true);
        yield "\",
                        \"element-group\": \"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element Group"), "js", null, true);
        yield "\",
                    },
                    tools: {
                        audio: {
                            name: \"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Audio"), "js", null, true);
        yield "\",
                            description: \"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload Audio files to assign to Widgets"), "js", null, true);
        yield "\"
                        },
                        transitionIn: {
                            name: \"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transition In"), "js", null, true);
        yield "\",
                            description: \"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Apply a Transition type for the start of a media item"), "js", null, true);
        yield "\"
                        },
                        transitionOut: {
                            name: \"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transition Out"), "js", null, true);
        yield "\",
                            description: \"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Apply a Transition type for the end of a media item"), "js", null, true);
        yield "\"
                        },
                        permissions: {
                            name: \"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sharing"), "js", null, true);
        yield "\",
                            description: \"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set View, Edit and Delete Sharing for Widgets and Playlists"), "js", null, true);
        yield "\"
                        }
                    }
                };
            ";
        // line 184
        yield "        </script>
        <script type=\"text/javascript\" nonce=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
            /**
             * Setup the background form.
             */
            function backGroundFormSetup(dialog) {
                var \$backgroundImageId = \$('[name=\"backgroundImageId\"]', dialog);
                var notFoundIcon = \$('#bg_not_found_icon', dialog);
                var bgImageFileName = \$('#bg_media_name', dialog);
                var saveButton = \$('button#save', dialog);
                var initialBackgroundImageId = \$backgroundImageId.val();
                var backgroundChanged = false;
                var mediaName = '';

                function backgroundImageChange() {
                    // Want to attach an onchange event to the drop down for the bg-image
                    var id = \$backgroundImageId.val();
                    var isNotDefined = [0, ''].indexOf(id) !== -1;

                    // Disable remove button if no image is defined
                    \$('#backgroundRemoveButton').toggleClass('disabled', isNotDefined);

                    // If the image is not defined
                    if (isNotDefined) {
                        // Show not found icon and hide image
                        notFoundIcon.show();
                        bgImageFileName.hide();
                    } else {

                        // Hide not found icon and show image
                        notFoundIcon.hide();
                        bgImageFileName.show();

                        if(mediaName) {
                            bgImageFileName.html(mediaName);
                        }

                        // Auto-submit form
                        if (id !== initialBackgroundImageId) {
                          saveButton.trigger('click');
                        }
                    }

                    if (id !== initialBackgroundImageId) {
                        backgroundChanged = true;
                    }
                }

                function backgroundImageHandleDrop(mediaToAdd, fromProvider) {
                    if(fromProvider) {
                        lD.importFromProvider([mediaToAdd]).then((res) =>  {
                            \$backgroundImageId.val(res[0]).trigger('change');
                        }).catch(function() {
                            toastr.error(errorMessagesTrans.importingMediaFailed);
                        });
                    } else {
                        \$backgroundImageId.val(mediaToAdd).trigger('change');
                    }

                    // Deselect drop zones after adding
                    lD.toolbar.deselectCardsAndDropZones();
                }

                // Handle id change
                \$backgroundImageId.change(backgroundImageChange);

                // Call change on form load
                backgroundImageChange();

                // Bind to the background add and remove button click
                \$('#backgroundUploadButton').on('click', function(e) {
                    layoutEditBackgroundButtonClicked(e, dialog);
                });

                \$('#backgroundRemoveButton').on('click', function(e) {
                    if(!\$(this).hasClass('disabled')) {
                        \$backgroundImageId.val('').trigger('change');
                    }
                });

                // Handle droppable area
                \$('.background-image-add').droppable({
                    greedy: true,
                    tolerance: 'pointer',
                    accept: function(el) {
                        return (\$(el).data('type') === 'media' && \$(el).data('subType') === 'image');
                    },
                    drop: _.debounce(function(event, ui) {
                        var \$draggable = \$(ui.draggable[0]);

                        // Change file name
                        bgImageFileName.html(\$draggable.data('title'));

                        // Set media name
                        mediaName = \$draggable.data('cardTitle');


                        if(\$draggable.hasClass('from-provider')) {
                            backgroundImageHandleDrop(\$draggable.data('providerData'), true);
                        } else {
                            backgroundImageHandleDrop(\$draggable.data('mediaId'));
                        }
                    }, 200)
                });

                // Handle click to add
                \$('.background-image-drop').on('click', function() {
                    var selectedCard = lD.toolbar.selectedCard;
                    var fromProvider = selectedCard.hasClass('from-provider');
                    var cardData = (fromProvider) ? selectedCard.data('providerData') : selectedCard.data('mediaId');

                    // Change file name
                    bgImageFileName.html(selectedCard.data('cardTitle'));

                    // Set media name
                    mediaName = selectedCard.data('cardTitle');

                    backgroundImageHandleDrop(cardData, fromProvider);
                });

                // Bind to the layout form submit
                \$(\"#layoutEditForm\").submit(function(e) {
                    e.preventDefault();

                    var form = \$(this);

                    // Submit via ajax - change the background color on success
                    \$.ajax({
                        type: form.attr(\"method\"),
                        url: form.attr(\"action\"),
                        cache: false,
                        dataType: \"json\",
                        data: \$(form).serialize(),
                        success: function(xhr, textStatus, error) {

                            XiboSubmitResponse(xhr, form);

                            if (xhr.success) {
                                var layout = \$(\"div#layout\");

                                if (layout.length > 0) {
                                    var color = form.find(\"#backgroundColor\").val();
                                    layout.data().backgroundColor = color;
                                    layout.css(\"background-color\", color);

                                    if (backgroundChanged)
                                        window.location.reload();
                                } else {
                                    // We assume we're on the layout page - call render
                                    // If we're not, table is a Chrome/Safari/FireBug global function
                                    if (backgroundChanged && typeof(table) !== 'undefined' && table.hasOwnProperty('ajax'))
                                        table.ajax.reload(null, false);
                                }
                            }
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            SystemMessage(xhr.responseText, false);
                        }
                    });
                })
            };

            /**
             * Layout edit background add image button
             * @param e the event
             * @param dialog the dialog
             */
            function layoutEditBackgroundButtonClicked(e, dialog) {
                e.preventDefault();

                // Open an upload form
                openUploadForm({
                    url: \$(e.target).data().addNewBackgroundUrl,
                    title: \"";
        // line 357
        echo __("Add Background Image");
        yield "\",
                    videoImageCovers: false,
                    buttons: {
                        main: {
                            label: \"";
        // line 361
        echo __("Done");
        yield "\",
                            className: \"btn-primary btn-bb-main\",
                            callback: function () {
                                XiboDialogClose();
                            }
                        }
                    },
                    templateOptions: {
                        multi: false,
                        trans: {
                            addFiles: \"";
        // line 371
        echo __("Browse/Add Image");
        yield "\",
                            startUpload: \"";
        // line 372
        echo __("Start Upload");
        yield "\",
                            cancelUpload: \"";
        // line 373
        echo __("Cancel Upload");
        yield "\"
                        },
                        upload: {
                            maxSize: ";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 376), "html", null, true);
        yield ",
                            maxSizeMessage: \"";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 377), "html", null, true);
        yield "\",
                            validExt: \"";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "validImageExt", [], "any", false, false, false, 378), "html", null, true);
        yield "\"
                        }
                    },
                    uploadDoneEvent: function (data) {
                        // Get the mediaId
                        var mediaId = data.result.files[0].mediaId;

                        // Update the form field with the mediaId
                        // or add it if it doesn't exist
                        if (\$(dialog).find('[name=\"backgroundImageId\"]').length === 0) {
                            \$('<input>').attr({
                                type: 'hidden',
                                name: 'backgroundImageId',
                                value: mediaId
                            }).appendTo(dialog);
                        } else {
                            \$('[name=\"backgroundImageId\"]').val(mediaId);
                        }

                        dialog.find(\"#bg_not_found_icon\").hide();

                        // Enable the remove button
                        dialog.find(\"#backgroundRemoveButton\").removeClass(\"disabled\");

                        XiboDialogClose();

                        // Auto-submit form by triggering the input field
                        \$('[name=\"backgroundImageId\"]').trigger('change');
                    }
                });
            }

            function layoutPublishFormOpen() {
            }

            function layoutEditFormSaved() {
              lD.reloadData(lD.layout,
                {
                  refreshEditor: true,
                });
            }
        </script>
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout-designer-page.twig";
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
        return array (  817 => 378,  813 => 377,  809 => 376,  803 => 373,  799 => 372,  795 => 371,  782 => 361,  775 => 357,  600 => 185,  597 => 184,  590 => 179,  586 => 178,  580 => 175,  576 => 174,  570 => 171,  566 => 170,  560 => 167,  556 => 166,  549 => 162,  545 => 161,  541 => 160,  537 => 159,  533 => 158,  529 => 157,  525 => 156,  520 => 154,  516 => 153,  512 => 152,  508 => 151,  504 => 150,  500 => 149,  496 => 148,  492 => 147,  488 => 146,  484 => 145,  480 => 144,  476 => 143,  472 => 142,  468 => 141,  464 => 140,  460 => 139,  456 => 138,  452 => 137,  448 => 136,  444 => 135,  440 => 134,  436 => 133,  432 => 132,  428 => 131,  424 => 130,  420 => 129,  416 => 128,  412 => 127,  405 => 123,  401 => 122,  397 => 121,  393 => 120,  389 => 119,  385 => 118,  381 => 117,  377 => 116,  373 => 115,  369 => 114,  365 => 113,  361 => 112,  357 => 111,  353 => 110,  349 => 109,  345 => 108,  341 => 107,  337 => 106,  330 => 102,  326 => 101,  322 => 100,  318 => 99,  314 => 98,  310 => 97,  306 => 96,  302 => 95,  298 => 94,  294 => 93,  290 => 92,  286 => 91,  279 => 87,  275 => 86,  271 => 85,  267 => 84,  263 => 83,  259 => 82,  255 => 81,  251 => 80,  247 => 79,  243 => 78,  239 => 77,  235 => 76,  231 => 75,  227 => 74,  223 => 73,  219 => 72,  215 => 71,  211 => 70,  207 => 69,  203 => 68,  199 => 67,  195 => 66,  191 => 65,  187 => 64,  183 => 63,  179 => 62,  175 => 61,  171 => 60,  167 => 59,  164 => 58,  159 => 56,  157 => 55,  152 => 52,  142 => 51,  132 => 50,  122 => 49,  112 => 48,  102 => 47,  99 => 46,  96 => 45,  93 => 44,  91 => 43,  87 => 42,  71 => 34,  67 => 32,  63 => 31,  54 => 27,  49 => 24,  47 => 29,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-designer-page.twig", "/var/www/cms/views/layout-designer-page.twig");
    }
}
