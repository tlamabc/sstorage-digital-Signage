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

/* editorTranslations.twig */
class __TwigTemplate_a4d6714b4d2e1c42a2dd244715d0bcd7 extends Template
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
        ";
        // line 8
        yield "            var editorsTrans = {
                deleteTitle: \"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete %obj%"), "js", null, true);
        yield "\",
                onbeforeunload: \"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Changes that you have made may not be saved!"), "js", null, true);
        yield "\",
                minDimensionsMessageHeader: \"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Content editing works best with a higher resolution"), "js", null, true);
        yield "\",
                minDimensionsMessageBody: \"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please resize your window to at least 1200 pixels by 600 pixels, or reduce your zoom level, for the best experience"), "js", null, true);
        yield "\",
                minDimensionsMessageHide: \"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hide message and go back to editing"), "js", null, true);
        yield "\",
                yes: \"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Yes"), "js", null, true);
        yield "\",
                no: \"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No"), "js", null, true);
        yield "\",
                selectAll: \"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select All"), "js", null, true);
        yield "\",
                back: \"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back"), "js", null, true);
        yield "\",
                delete: \"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "\",
                loadPropertyForObject: \"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Load %prop% for %obj%"), "js", null, true);
        yield "\",
                loading: \"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Loading"), "js", null, true);
        yield "\",
                retire: \"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Retire"), "js", null, true);
        yield "\",
                publish: \"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Publish"), "js", null, true);
        yield "\",
                discard: \"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Discard"), "js", null, true);
        yield "\",
                copyToClipboard: \"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copy to Clipboard"), "js", null, true);
        yield "\",
                viewSource: \"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("View Source Code"), "js", null, true);
        yield "\",
                detachEditor: \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Detach Editor"), "js", null, true);
        yield "\",
                attachEditor: \"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Attach Editor"), "js", null, true);
        yield "\",
                scaleToContainer: \"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scale to view"), "js", null, true);
        yield "\",
                scaleToWidth: \"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scale to width"), "js", null, true);
        yield "\",
                scaleToHeight: \"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scale to height"), "js", null, true);
        yield "\",
                zoomInEditor: \"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zoom in"), "js", null, true);
        yield "\",
                zoomOutEditor: \"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zoom out"), "js", null, true);
        yield "\",
                couldNotCopy: \"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Could not copy"), "js", null, true);
        yield "\",
                copied: \"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copied!"), "js", null, true);
        yield "\",
                invalidModule:  \"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This widget isn't enabled and can't be configured, please contact your administrator for help."), "js", null, true);
        yield "\",
                timeline: \"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Timeline"), "js", null, true);
        yield "\",
                actions: {
                    layouts:  \"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layouts"), "js", null, true);
        yield "\",
                    regions: \"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zones"), "js", null, true);
        yield "\",
                    widgets: \"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widgets"), "js", null, true);
        yield "\",
                    playlists: \"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlists"), "js", null, true);
        yield "\",
                    deleteWidget: \"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "\",
                    deleteModal: {
                        title: \"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Action"), "js", null, true);
        yield "\",
                        message: \"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this action?"), "js", null, true);
        yield "\",
                        buttons: {
                            cancel: \"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js", null, true);
        yield "\",
                            delete: \"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "\"
                        },
                    },
                },
                layoutTemplateReplace: {
                    title: \"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Replace Layout"), "js", null, true);
        yield "\",
                    message: \"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to replace your Layout with a template?"), "js", null, true);
        yield "\",
                    buttons: {
                        cancel: \"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js", null, true);
        yield "\",
                        delete: \"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Replace"), "js", null, true);
        yield "\"
                    },
                },
                selectWidgetFromCanvasModal: {
                    title: \"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select widget or create a new one"), "js", null, true);
        yield "\",
                    createNew: \"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create new"), "js", null, true);
        yield "\",
                    name: \"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                    type: \"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "js", null, true);
        yield "\",
                    numEl: \"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("# of elements"), "js", null, true);
        yield "\",
                    numElGr: \"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("# of element groups"), "js", null, true);
        yield "\",
                },
                exit: \"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Exit"), "js", null, true);
        yield "\",
                convertPlaylistSuccess: \"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist converted to global!"), "js", null, true);
        yield "\",
            };

            var uploadTrans = {
                uploadMessage: \"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload media"), "js", null, true);
        yield "\",
                addFiles: \"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add files"), "js", null, true);
        yield "\",
                startUpload: \"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Start upload"), "js", null, true);
        yield "\",
                cancelUpload: \"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel upload"), "js", null, true);
        yield "\",
                processing: \"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Processing..."), "js", null, true);
        yield "\",
                widgetFromDt: \"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Start time"), "js", null, true);
        yield "\",
                widgetToDt: \"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("End time"), "js", null, true);
        yield "\",
                widgetExpiryDates: \"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set Expiry Dates"), "js", null, true);
        yield "\",
                widgetExpiryDatesMessage: \"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use the check box to set Start and End dates/times for media files and use the Start Upload button to apply to all files or the row upload button to upload individually."), "js", null, true);
        yield "\",
                widgetFromDtMessage: \"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the start time for this widget"), "js", null, true);
        yield "\",
                widgetToDtMessage: \"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the end time for this widget"), "js", null, true);
        yield "\",
                deleteOnExpiry: \"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete on Expiry"), "js", null, true);
        yield "\",
                deleteOnExpiryMessage: \"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When the End Time for this Widget passes should the Widget be removed from the Playlist?"), "js", null, true);
        yield "\",
                applyToMedia: \"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete from Library"), "js", null, true);
        yield "\",
                applyToMediaMessage: \"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove file from the Media Library"), "js", null, true);
        yield "\",
                selectFolder: \"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select Folder"), "js", null, true);
        yield "\",
                selectFolderTitle: \"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change Current Folder location"), "js", null, true);
        yield "\",
                selectedFolder: \"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current Folder"), "js", null, true);
        yield ":\",
                selectedFolderTitle: \"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload files to this Folder"), "js", null, true);
        yield ":\"
            };

            var contextMenuTrans = {
                editAudio: \"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Attached Audio"), "js", null, true);
        yield "\",
                editExpiry: \"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Expiry Dates"), "js", null, true);
        yield "\",
                editTransIn: \"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Transition In"), "js", null, true);
        yield "\",
                editTransOut: \"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Transition Out"), "js", null, true);
        yield "\",
                editPermissions: \"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Sharing"), "js", null, true);
        yield "\",
                editRegionPermissions: \"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Region Sharing"), "js", null, true);
        yield "\",
                editWidgetPermissions: \"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Widget Sharing"), "js", null, true);
        yield "\",
                editPlaylist: \"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Playlist"), "js", null, true);
        yield "\",
                convertPlaylist: \"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Convert Playlist"), "js", null, true);
        yield "\",
                convertPlaylistHelpText: \"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Convert Layout playlist into a Global playlist."), "js", null, true);
        yield "\",
                options: \"";
        // line 105
        echo __("Options");
        yield "\",
                moveLeft: \"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move one step left"), "js", null, true);
        yield "\",
                moveRight: \"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move one step right"), "js", null, true);
        yield "\",
                moveTopLeft: \"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move to the top left"), "js", null, true);
        yield "\",
                moveTopRight: \"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move to the top right"), "js", null, true);
        yield "\",
                bringToFront: \"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bring to front"), "js", null, true);
        yield "\",
                bringForward: \"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bring forward"), "js", null, true);
        yield "\",
                sendBackwards: \"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Send backwards"), "js", null, true);
        yield "\",
                sendToBack: \"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Send to back"), "js", null, true);
        yield "\",
                delete: \"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "\",
                copy: \"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate"), "js", null, true);
        yield "\",
                newConfig: \"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New Configuration"), "js", null, true);
        yield "\",
                editText: \"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Text"), "js", null, true);
        yield "\",
                groupElements: \"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Group elements"), "js", null, true);
        yield "\",
                ungroupElements: \"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Ungroup elements"), "js", null, true);
        yield "\",
                addElementsToGroup: \"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add elements to group"), "js", null, true);
        yield "\",
                deleteGroupElements: \"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete all"), "js", null, true);
        yield "\",
            };

            var propertiesPanelTrans = {
                playlist: \"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                zone: \"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                widget: \"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget"), "js", null, true);
        yield "\",
                playlist: \"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                configure: \"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure"), "js", null, true);
        yield "\",
                appearance: \"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Appearance"), "js", null, true);
        yield "\",
                fallback: \"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Fallback Data"), "js", null, true);
        yield "\",
                advanced: \"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Advanced"), "js", null, true);
        yield "\",
                general: \"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("General"), "js", null, true);
        yield "\",
                positioning: \"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Positioning"), "js", null, true);
        yield "\",
                transition: \"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transition"), "js", null, true);
        yield "\",
                width: \"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Width"), "js", null, true);
        yield "\",
                height: \"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Height"), "js", null, true);
        yield "\",
                widgetDimensions: \"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget Dimensions"), "js", null, true);
        yield "\",
                top: \"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Top"), "js", null, true);
        yield "\",
                left: \"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Left"), "js", null, true);
        yield "\",
                scale: \"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scale"), "js", null, true);
        yield "\",
                layer: \"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer"), "js", null, true);
        yield "\",
                invalidWidget:  \"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This widget needs to be configured before it will be shown."), "js", null, true);
        yield "\",
                requiredElementsMessage: \"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This widget needs to have at least one of the following elements: %elements%."), "js", null, true);
        yield "\",
                dataSlot: \"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data Slot"), "js", null, true);
        yield "\",
                dataSlotHelpText: \"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When there are more than one of the same element for a widget you can set the slot for each element. For example with two of the same element you'd have data slot 1 and data slot 2. If 10 items were returned slot 1 would receive items 1,3,5,7,9 and slot 2 would receive items 2,4,6,8,10."), "js", null, true);
        yield "\",
                pinSlot: \"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Pin this slot?"), "js", null, true);
        yield "\",
                pinSlotHelpText: \"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The first item that appears in a slot will be pinned and will not cycle with the rest of the items."), "js", null, true);
        yield "\",
                groupScale: \"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scale with group"), "js", null, true);
        yield "\",
                groupScaleHelpText: \"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scale element when scaling containing group."), "js", null, true);
        yield "\",
                groupScaleTypeH: \"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Horizontal Align"), "js", null, true);
        yield "\",
                groupScaleTypeHHelpText: \"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Horizontal alignment when scaling the containing group."), "js", null, true);
        yield "\",
                groupScaleTypeV: \"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Vertical Align"), "js", null, true);
        yield "\",
                groupScaleTypeVHelpText: \"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Vertical alignment when scaling the containing group."), "js", null, true);
        yield "\",
                groupScaleTypeOptions: {
                    left: \"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Left"), "js", null, true);
        yield "\",
                    center: \"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Center"), "js", null, true);
        yield "\",
                    right: \"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Right"), "js", null, true);
        yield "\",
                    top: \"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Top"), "js", null, true);
        yield "\",
                    middle: \"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Middle"), "js", null, true);
        yield "\",
                    bottom: \"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bottom"), "js", null, true);
        yield "\",
                },
                somethingWentWrong: \"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Something went wrong!"), "js", null, true);
        yield "\",
                somethingWentWrongEditPermissions: \"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Selected item is not shared with you with edit permission!"), "js", null, true);
        yield "\",
                actions: {
                    noActionsToShow: \"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No actions to show"), "js", null, true);
        yield "\",
                    otherActions: \"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Other Actions"), "js", null, true);
        yield "\",
                    notDefined: \"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("* Not Defined"), "js", null, true);
        yield "\",
                    itemActions: {
                        layout: \"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Actions"), "js", null, true);
        yield "\",
                        region: \"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone Actions"), "js", null, true);
        yield "\",
                        widget: \"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget Actions"), "js", null, true);
        yield "\",
                    },
                    targetsAndSources: {
                        layout: \"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout"), "js", null, true);
        yield "\",
                        region: \"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                        widget: \"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget"), "js", null, true);
        yield "\",
                        screen: \"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout"), "js", null, true);
        yield "\",
                        playlist: \"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                    },
                    trigger: \"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger"), "js", null, true);
        yield "\",
                    target: \"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Target"), "js", null, true);
        yield "\",
                    targetHelpText: \"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If your Widget is a Shell Command you can select to target 'Screen' to run the command without affecting any Zones. For all other Widgets select 'Zone' as target."), "js", null, true);
        yield "\",
                    touch: \"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Touch/Click"), "js", null, true);
        yield "\",
                    webhook: \"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Web hook"), "js", null, true);
        yield "\",
                    save: \"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "js", null, true);
        yield "\",
                    cancel: \"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js", null, true);
        yield "\",
                    editAction: \"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Action"), "js", null, true);
        yield "\",
                    deleteAction: \"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Action"), "js", null, true);
        yield "\",
                    nextLayout: \"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next Layout"), "js", null, true);
        yield "\",
                    previousLayout: \"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous Layout"), "js", null, true);
        yield "\",
                    nextWidget: \"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next Widget"), "js", null, true);
        yield "\",
                    previousWidget: \"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous Widget"), "js", null, true);
        yield "\",
                    navLayout: \"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Navigate to Layout"), "js", null, true);
        yield "\",
                    navWidget: \"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Navigate to Widget"), "js", null, true);
        yield "\",
                    widgetToLoad: \"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget to Load"), "js", null, true);
        yield "\",
                    widgetToLoadHelpText: \"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select or create a Widget to be loaded"), "js", null, true);
        yield "\",
                    triggerType: \"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger Type"), "js", null, true);
        yield "\",
                    triggerTypeHelpText: \"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("How should the Player listen for this Action to be triggered?"), "js", null, true);
        yield "\",
                    triggerCode: \"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger Code"), "js", null, true);
        yield "\",
                    triggerCodeHelpText: \"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If this Action is triggered by a Web Hook then this Trigger Code must be present in the URL `trigger=` parameter."), "js", null, true);
        yield "\",
                    triggerTarget: \"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger"), "js", null, true);
        yield "\",
                    triggerTargetHelpText: \"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the target for the Trigger"), "js", null, true);
        yield "\",
                    layoutCode: \"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Code"), "js", null, true);
        yield "\",
                    layoutCodeHelpText: \"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please enter the Code identifier for the Layout as assigned in the Add / Edit Layout form."), "js", null, true);
        yield "\",
                    createNewDrawerWidget: \"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("-- Create New --"), "js", null, true);
        yield "\",
                },
                positionTab: {
                    layer: \"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer"), "js", null, true);
        yield "\",
                    layerHelp: \"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer related to all layout objects"), "js", null, true);
        yield "\",
                    elementLayer: \"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element Layer"), "js", null, true);
        yield "\",
                    elementLayerHelp: \"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer for the element related to other elements"), "js", null, true);
        yield "\",
                    elementGroupLayer: \"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element Group Layer"), "js", null, true);
        yield "\",
                    elementGroupLayerHelp: \"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer for the element group related to other groups or elements without group"), "js", null, true);
        yield "\",
                    canvasLayer: \"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Canvas Layer"), "js", null, true);
        yield "\",
                    canvasLayerHelp: \"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer for the canvas containing all elements"), "js", null, true);
        yield "\",
                    top: \"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Top"), "js", null, true);
        yield "\",
                    left: \"";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Left"), "js", null, true);
        yield "\",
                    width: \"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Width"), "js", null, true);
        yield "\",
                    height: \"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Height"), "js", null, true);
        yield "\",
                    rotation: \"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Rotation"), "js", null, true);
        yield "\",
                    setFullscreen: \"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Make this full screen, dimensions will be set to %layout.width% by %layout.height%."), "js", null, true);
        yield "\",
                    bringToView: \"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bring selected object back to the Layout view."), "js", null, true);
        yield "\",
                },
                layout: {
                    backgroundColor: \"";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Background Colour"), "js", null, true);
        yield "\",
                    backgroundColorHelpText: \"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use the colour picker to select the background colour"), "js", null, true);
        yield "\",
                    backgroundImage: \"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Background Image"), "js", null, true);
        yield "\",
                    noImageSet: \"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No Image set, add from Toolbox or Upload!"), "js", null, true);
        yield "\",
                    addBackgroundImage: \"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add background image"), "js", null, true);
        yield "\",
                    upload: \"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload"), "js", null, true);
        yield "\",
                    remove: \"";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove"), "js", null, true);
        yield "\",
                    resolution: \"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Resolution"), "js", null, true);
        yield "\",
                    resolutionHelpText: \"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change the resolution"), "js", null, true);
        yield "\",
                    layer: \"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer"), "js", null, true);
        yield "\",
                    layerHelpText: \"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The layering order of the background image (z-index). Advanced use only."), "js", null, true);
        yield "\",
                    autoApplyTransitions: \"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Automatically apply Transitions?"), "js", null, true);
        yield "\",
                    autoApplyTransitionsHelpText: \"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When enabled, the default Transition type and duration will be applied to all widgets on this Layout."), "js", null, true);
        yield "\",
                },
                region: {
                    name: \"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                    nameHelpText: \"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An optional name for this widget"), "js", null, true);
        yield "\",
                    syncKey: \"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Content Synchronisation Key"), "js", null, true);
        yield "\",
                    syncKeyHelpText: \"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If this layout is scheduled using a synchronised event, this key will be used to match with other layouts in the same event."), "js", null, true);
        yield "\",
                    loop: \"";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Loop?"), "js", null, true);
        yield "\",
                    loopHelpText: \"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enable Widget loop?"), "js", null, true);
        yield "\",
                    loopMessage1: \"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When should the Widget Loop be enabled?"), "js", null, true);
        yield "\",
                    loopMessage2: \"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("* If the Widget is a 'fixed' item (eg Text), Loop should not be enabled."), "js", null, true);
        yield "\",
                    loopMessage3: \"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("* If the Widget needs to update periodically (eg RSS Ticker Widget), Loop can be enabled ONLY if the Widget needs to update MORE frequently than the duration of the overall Layout."), "js", null, true);
        yield "\",
                    exitTransitionTitle: \"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Exit Transition?"), "js", null, true);
        yield "\",
                    exitTransitionHelpText: \"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("What transition should be applied when this region is finished?"), "js", null, true);
        yield "\",
                    layer: \"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer"), "js", null, true);
        yield "\",
                    layerHelpText: \"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The layering order of this %regionType% (z-index). Advanced use only."), "js", null, true);
        yield "\",
                    top: \"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Top"), "js", null, true);
        yield "\",
                    topHelpText: \"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The top position of the %regionType%"), "js", null, true);
        yield "\",
                    left: \"";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Left"), "js", null, true);
        yield "\",
                    leftHelpText: \"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The left position of the %regionType%"), "js", null, true);
        yield "\",
                    width: \"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Width"), "js", null, true);
        yield "\",
                    widthHelpText: \"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The width of the %regionType%"), "js", null, true);
        yield "\",
                    height: \"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Height"), "js", null, true);
        yield "\",
                    heightHelpText: \"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The height of the %regionType%"), "js", null, true);
        yield "\",
                    makeRegionFullScreen: \"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Make this %regionType% full screen, dimensions will be set to %layout.width% by %layout.height%."), "js", null, true);
        yield "\",
                    bringRegionToView: \"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bring selected %regionType% back to the Layout view."), "js", null, true);
        yield "\"
                },
                widget: {
                    name: \"";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configuration Name"), "js", null, true);
        yield "\",
                    nameHelpText: \"";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An optional name for this widget"), "js", null, true);
        yield "\",
                    useDuration: \"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set a duration?"), "js", null, true);
        yield "\",
                    useDurationHelpText: \"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select to provide a specific duration for this Widget"), "js", null, true);
        yield "\",
                    duration: \"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "js", null, true);
        yield "\",
                    durationHelpText: \"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The duration of the widget in seconds"), "js", null, true);
        yield "\",
                    enableStat: \"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enable Stats Collection?"), "js", null, true);
        yield "\",
                    enableStatHelpText: \"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enable the collection of Proof of Play statistics for this Widget. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings."), "js", null, true);
        yield "\",
                    enableStatOff: \"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Off"), "js", null, true);
        yield "\",
                    enableStatOn: \"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("On"), "js", null, true);
        yield "\",
                    enableStatInherit: \"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inherit"), "js", null, true);
        yield "\",
                    isRepeatData: \"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Repeat items to fill all data slots?"), "js", null, true);
        yield "\",
                    isRepeatDataHelpText: \"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Once all items have been placed in a slot, any empty slots will be filled with items from the start."), "js", null, true);
        yield "\",
                },
                effect: \"Effect\",
                effectHelpText: \"Please select the effect that will be used to transition between items.\",
                canvasWidgetControl: {
                    canvasWidgets: \"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget"), "js", null, true);
        yield "\",
                    canvasWidgetsHelp: \"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widgets of the same type, change to transfer the source to a different widget."), "js", null, true);
        yield "\",
                    transferWidget: \"";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transfer"), "js", null, true);
        yield "\",
                    transferWidgetHelp: \"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transfer the currently selected elements into a new widget!"), "js", null, true);
        yield "\",
                },
                widgetInfo: {
                    widgetName: \"";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget Name"), "js", null, true);
        yield "\",
                },
                widgetType: \"";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget"), "js", null, true);
        yield "\",
                elementName: \"";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element Name"), "js", null, true);
        yield "\",
                elementNameHelpText: \"";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An optional name for this element"), "js", null, true);
        yield "\",
                elementGroupName: \"";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element Group Name"), "js", null, true);
        yield "\",
                elementGroupNameHelpText: \"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An optional name for this group of elements"), "js", null, true);
        yield "\",
                colorGradient: {
                    gradientColor1: \"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Color 1"), "js", null, true);
        yield "\",
                    gradientColor2: \"";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Color 2"), "js", null, true);
        yield "\",
                    gradientType: \"";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "js", null, true);
        yield "\",
                    gradientTypeRadial: \"";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Radial"), "js", null, true);
        yield "\",
                    gradientTypeLinear: \"";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Linear"), "js", null, true);
        yield "\",
                    gradientAngle: \"";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Angle"), "js", null, true);
        yield "\",
                }
            };

            var toolbarTrans = {
                deleteObject: \"";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete selected %object%"), "js", null, true);
        yield "\",
                deleteMultipleObjects: \"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete selected objects"), "js", null, true);
        yield "\",
                changeLayout: \"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change Layout"), "js", null, true);
        yield "\",
                options: \"";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Options"), "js", null, true);
        yield "\",
                displayTooltipsName: \"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tooltips?"), "js", null, true);
        yield "\",
                displayTooltipsTitle: \"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show/Hide tooltips which provide help; informational tooltips will remain."), "js", null, true);
        yield "\",
                deleteConfirmationName: \"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete confirmation?"), "js", null, true);
        yield "\",
                deleteConfirmationTitle: \"";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Do we want to show confirmation modals when deleting critical Layout content?"), "js", null, true);
        yield "\",
                search: \"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "js", null, true);
        yield "\",
                select: \"";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select"), "js", null, true);
        yield "\",
                deselect: \"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Deselect"), "js", null, true);
        yield "\",
                duration: \"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "js", null, true);
        yield "\",
                dynamicPlaylist: \"";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dynamic Playlist"), "js", null, true);
        yield "\",
                preview: \"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview media"), "js", null, true);
        yield "\",
                open: \"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Open"), "js", null, true);
        yield "\",
                addAsFavourite: \"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mark as favourite"), "js", null, true);
        yield "\",
                upload: \"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload new"), "js", null, true);
        yield "\",
                uploadType: \"";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload %obj%"), "js", null, true);
        yield "\",
                newPlaylist: \"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New Playlist"), "js", null, true);
        yield "\",
                searchFilters: {
                    search: \"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "js", null, true);
        yield "\",
                    name: \"";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                    tag: \"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tag"), "js", null, true);
        yield "\",
                    type: \"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "js", null, true);
        yield "\",
                    owner: \"";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Owner"), "js", null, true);
        yield "\",
                    user: \"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Owner"), "js", null, true);
        yield "\",
                    orientation: \"";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Orientation"), "js", null, true);
        yield "\",
                    provider: \"";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Provider"), "js", null, true);
        yield "\",
                    folder: \"";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Folder"), "js", null, true);
        yield "\",
                },
                searchSortBy: \"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sort by"), "js", null, true);
        yield "\",
                searchSort: {
                    mediaId: \"";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Media Id"), "js", null, true);
        yield "\",
                    name: \"";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                    orientation: \"";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Orientation"), "js", null, true);
        yield "\",
                    width: \"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Width"), "js", null, true);
        yield "\",
                    height: \"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Height"), "js", null, true);
        yield "\",
                    duration: \"";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "js", null, true);
        yield "\",
                    fileSize: \"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("File Size"), "js", null, true);
        yield "\",
                    createdDt: \"";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Created Date"), "js", null, true);
        yield "\",
                    modifiedDt: \"";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Modified Date"), "js", null, true);
        yield "\",
                },
                orientationValues: {
                  all: \"";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All"), "js", null, true);
        yield "\",
                  landscape: \"";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Landscape"), "js", null, true);
        yield "\",
                  portrait: \"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Portrait"), "js", null, true);
        yield "\"
                },
                providerValues: {
                  both: \"";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All"), "js", null, true);
        yield "\",
                  local: \"";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Local"), "js", null, true);
        yield "\",
                  remote: \"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remote"), "js", null, true);
        yield "\"
                },
                menuItems: {
                    widgetsName: \"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widgets"), "js", null, true);
        yield "\",
                    widgetsTitle: \"";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add widgets"), "js", null, true);
        yield "\",
                    globalElementsName: \"";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Global"), "js", null, true);
        yield "\",
                    globalElementsTitle: \"";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Global Elements"), "js", null, true);
        yield "\",
                    imageName: \"";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Image"), "js", null, true);
        yield "\",
                    imageTitle: \"";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Library image search"), "js", null, true);
        yield "\",
                    audioName: \"";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Audio"), "js", null, true);
        yield "\",
                    audioTitle: \"";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Library audio search"), "js", null, true);
        yield "\",
                    videoName: \"";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Video"), "js", null, true);
        yield "\",
                    videoTitle: \"";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Library video search"), "js", null, true);
        yield "\",
                    libraryName: \"";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Other"), "js", null, true);
        yield "\",
                    libraryTitle: \"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Library other media search"), "js", null, true);
        yield "\",
                    actionsName: \"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actions"), "js", null, true);
        yield "\",
                    actionsTitle: \"";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Interactive actions"), "js", null, true);
        yield "\",
                    layoutTemplateName: \"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Templates"), "js", null, true);
        yield "\",
                    layoutTemplateTitle: \"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search for Layout Templates"), "js", null, true);
        yield "\",
                    layoutExchangeTitle: \"";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search for templates available from the %obj%."), "js", null, true);
        yield "\",
                    playlistsName: \"";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlists"), "js", null, true);
        yield "\",
                    playlistsTitle: \"";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add Playlists"), "js", null, true);
        yield "\",
                    providerTitle: \"";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Provider: %obj%"), "js", null, true);
        yield "\",
                },
                window: {
                    drag: \"";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move Window"), "js", null, true);
        yield "\",
                    close: \"";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close Window"), "js", null, true);
        yield "\",
                    minimise: \"";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Minimise Window"), "js", null, true);
        yield "\",
                    newTab: \"";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New Tab"), "js", null, true);
        yield "\"
                },
                interactive: {
                    actions: {
                        nextLayout: \"";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next Layout"), "js", null, true);
        yield "\",
                        previousLayout: \"";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous Layout"), "js", null, true);
        yield "\",
                        nextWidget: \"";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next Widget"), "js", null, true);
        yield "\",
                        previousWidget: \"";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous Widget"), "js", null, true);
        yield "\",
                        navLayout: \"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Navigate to Layout"), "js", null, true);
        yield "\",
                        navWidget: \"";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Navigate to Widget"), "js", null, true);
        yield "\",
                    },
                },
                widgets: \"";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widgets"), "js", null, true);
        yield "\",
                dataWidgets: \"";
        // line 398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data Widgets"), "js", null, true);
        yield "\",
                actions: \"";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actions"), "js", null, true);
        yield "\",
                favourites: \"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Favourites"), "js", null, true);
        yield "\",
                elements: \"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Elements"), "js", null, true);
        yield "\",
                stencils: \"";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Stencils"), "js", null, true);
        yield "\",
                templates: \"";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Static Templates"), "js", null, true);
        yield "\",
                closeTab: \"";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close content"), "js", null, true);
        yield "\",
                noWidgetsToShow: \"";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No widgets to display"), "js", null, true);
        yield "\",
                noActionsToShow: \"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No actions to display"), "js", null, true);
        yield "\",
                noTemplatesToShow: \"";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No templates to display"), "js", null, true);
        yield "\",
                noMediaToShow: \"";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No media to display!"), "js", null, true);
        yield "\",
                noPlaylistsToShow: \"";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No playlists to display!"), "js", null, true);
        yield "\",
                showMore: \"";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show more"), "js", null, true);
        yield "\",
                noShowMore: \"";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No more results for this filter!"), "js", null, true);
        yield "\",
                mediaPreview: {
                    close: \"";
        // line 413
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close Preview"), "js", null, true);
        yield "\",
                    change: \"";
        // line 414
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change window size"), "js", null, true);
        yield "\",
                    select: \"";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select media to add"), "js", null, true);
        yield "\",
                    dimensions: \"";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dimensions"), "js", null, true);
        yield "\",
                    size: \"";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Size"), "js", null, true);
        yield "\",
                },
                playlist: \"";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                zone: \"";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                element: \"";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element"), "js", null, true);
        yield "\",
                elementGroup: \"";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element Group"), "js", null, true);
        yield "\",
                layout: \"";
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout"), "js", null, true);
        yield "\",
                region: \"";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                layoutTemplatesMessage: \"";
        // line 425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Replace your Layout with a template?"), "js", null, true);
        yield "\",
                layoutExchangeTemplatesMessage: \"";
        // line 426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Replace your Layout with a %obj% template?"), "js", null, true);
        yield "\",
                isRequired: \"";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Required"), "js", null, true);
        yield "\",
                libraryTypes: {
                    image: \"";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Image"), "js", null, true);
        yield "\",
                    video: \"";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Video"), "js", null, true);
        yield "\",
                    audio: \"";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Audio"), "js", null, true);
        yield "\",
                    flash: \"";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Flash"), "js", null, true);
        yield "\",
                    htmlpackage: \"";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("HTML Package"), "js", null, true);
        yield "\",
                    pdf: \"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("PDF"), "js", null, true);
        yield "\",
                    powerpoint: \"";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("PowerPoint"), "js", null, true);
        yield "\",
                },
                mediaTable: {
                    mediaId: \"";
        // line 438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("ID"), "js", null, true);
        yield "\",
                    mediaName: \"";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                    mediaType: \"";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "js", null, true);
        yield "\",
                    mediaTags: \"";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tags"), "js", null, true);
        yield "\",
                    mediaThumb: \"";
        // line 442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thumbnail"), "js", null, true);
        yield "\",
                },
                placeholder: {
                    image: {
                        title: \"";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Placeholder"), "js", null, true);
        yield "\",
                        description: \"";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use this item to be used as a placeholder to add images."), "js", null, true);
        yield "\",
                    }
                }
            };

            var topbarTrans = {
                name: \"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                nameDetail: \"";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout name"), "js", null, true);
        yield "\",
                duration: \"";
        // line 455
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "js", null, true);
        yield "\",
                durationDetail: \"";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout duration"), "js", null, true);
        yield "\",
                dimensions: \"";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dimensions"), "js", null, true);
        yield "\",
                dimensionsDetail: \"";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout dimensions"), "js", null, true);
        yield "\",
                layoutActions: \"";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Actions:"), "js", null, true);
        yield "\",
                onlyMyLayouts: \"";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("My Layouts?"), "js", null, true);
        yield "\"
            };

            var historyManagerTrans = {
                revert: {
                    saveForm: \"";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% save"), "js", null, true);
        yield "\",
                    order: \"";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% order"), "js", null, true);
        yield "\",
                    transform: \"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% transformation"), "js", null, true);
        yield "\",
                    addWidget: \"";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% creation"), "js", null, true);
        yield "\",
                    addMedia: \"";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% assignment"), "js", null, true);
        yield "\",
                    create: \"";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% creation"), "js", null, true);
        yield "\",
                    saveElements: \"";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% elements change"), "js", null, true);
        yield "\"
                },
                target: {
                    widget: \"";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget"), "js", null, true);
        yield "\",
                    region: \"";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Region"), "js", null, true);
        yield "\",
                    canvas: \"";
        // line 476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Canvas"), "js", null, true);
        yield "\",
                    frame: \"";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Frame"), "js", null, true);
        yield "\",
                    zone: \"";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                    playlist: \"";
        // line 479
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                }
            };

            var layerManagerTrans = {
                title: \"";
        // line 484
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layers"), "js", null, true);
        yield "\",
                layer: \"";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer"), "js", null, true);
        yield "\",
                canvas: \"";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Canvas"), "js", null, true);
        yield "\",
                group: \"";
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Group"), "js", null, true);
        yield "\",
                inGroup: \"";
        // line 488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("In %groupId%"), "js", null, true);
        yield "\",
                name: \"";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                template: \"";
        // line 490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Template"), "js", null, true);
        yield "\",
                duration: \"";
        // line 491
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "js", null, true);
        yield "\",
                emptyLayout: \"";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Empty layout"), "js", null, true);
        yield "\",
                expand: \"";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Expand"), "js", null, true);
        yield "\",
                shrink: \"";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Shrink"), "js", null, true);
        yield "\",
                playlist: \"";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                zone: \"";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                layoutBackground: \"";
        // line 497
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Background"), "js", null, true);
        yield "\",
                outsideViewArea: \"";
        // line 498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Outside View Area! Go to Position tab on Properties Panel to bring back to view."), "js", null, true);
        yield "\",
                invalidRegion: \"";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Invalid Region"), "js", null, true);
        yield "\",
                invalidRegionHelp: \"";
        // line 500
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Region is invalid: Please delete it to validate the Layout!"), "js", null, true);
        yield "\",
            };

            var playlistAddFilesTrans = {
                uploadMessage: \"";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Replace"), "js", null, true);
        yield "\",
                addFiles: \"";
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add Replacement"), "js", null, true);
        yield "\",
                startUpload: \"";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Start Replace"), "js", null, true);
        yield "\",
                cancelUpload: \"";
        // line 507
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel Replace"), "js", null, true);
        yield "\",
                selectFolder: \"";
        // line 508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select Folder"), "js", null, true);
        yield "\",
                selectFolderTitle: \"";
        // line 509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change Current Folder location"), "js", null, true);
        yield "\",
                processing: \"";
        // line 510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Processing..."), "js", null, true);
        yield "\",
                updateInLayouts: {
                    title: \"";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Update this media in all layouts it is assigned to?"), "js", null, true);
        yield "\",
                    helpText: \"";
        // line 513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Note: It will only be updated in layouts you have permission to edit."), "js", null, true);
        yield "\"
                },
                deleteOldRevisions: {
                    title: \"";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete the old version?"), "js", null, true);
        yield "\",
                    helpText: \"";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Completely remove the old version of this media item if a new file is being uploaded."), "js", null, true);
        yield "\"
                },
                widgetExpiryDates: \"";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set Expiry Dates"), "js", null, true);
        yield "\",
                widgetExpiryDatesMessage: \"";
        // line 520
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use the check box to set Start and End dates/times for media files and use the Start Upload button to apply to all files or the row upload button to upload individually."), "js", null, true);
        yield "\",
                widgetFromDtMessage: \"";
        // line 521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the start time for this widget"), "js", null, true);
        yield "\",
                widgetToDtMessage: \"";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the end time for this widget"), "js", null, true);
        yield "\",
                deleteOnExpiry: \"";
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete on Expiry"), "js", null, true);
        yield "\",
                deleteOnExpiryMessage: \"";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When the End Time for this Widget passes should the Widget be removed from the Playlist?"), "js", null, true);
        yield "\",

            };

            var errorMessagesTrans = {
                error: \"";
        // line 529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("ERROR"), "js", null, true);
        yield "\",
                loadingLayout: \"";
        // line 530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("There was a problem loading the Layout!"), "js", null, true);
        yield "\",
                loadingPlaylist: \"";
        // line 531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("There was a problem loading the Playlist!"), "js", null, true);
        yield "\",
                userSavePreferencesFailed: \"";
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User save preferences failed!"), "js", null, true);
        yield "\",
                userLoadPreferencesFailed: \"";
        // line 533
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User load preferences failed!"), "js", null, true);
        yield "\",
                libraryLoadFailed: \"";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Library load failed!"), "js", null, true);
        yield "\",
                formLoadFailed: \"";
        // line 535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form load failed!"), "js", null, true);
        yield "\",
                convertPlaylistFailed: \"";
        // line 536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Convert playlist failed!"), "js", null, true);
        yield "\",
                convertPlaylistNoName: \"";
        // line 537
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist needs a name to be converted!"), "js", null, true);
        yield "\",
                revertFailed: \"";
        // line 538
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert failed: %error%"), "js", null, true);
        yield "\",
                saveOrderFailed: \"";
        // line 539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save order failed: %error%"), "js", null, true);
        yield "\",
                deleteFailed: \"";
        // line 540
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete failed: %error%"), "js", null, true);
        yield "\",
                saveAllChangesFailed: \"";
        // line 541
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save all changes failed!"), "js", null, true);
        yield "\",
                removeAllChangesFailed: \"";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove all changes failed!!"), "js", null, true);
        yield "\",
                importingMediaFailed: \"";
        // line 543
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Importing media failed!!"), "js", null, true);
        yield "\",
                addMediaFailed: \"";
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add media failed: %error%"), "js", null, true);
        yield "\",
                addModuleFailed: \"";
        // line 545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add module failed: %error%"), "js", null, true);
        yield "\",
                createRegionFailed: \"";
        // line 546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create region failed: %error%"), "js", null, true);
        yield "\",
                listOrderNotChanged: \"";
        // line 547
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("List order not Changed!"), "js", null, true);
        yield "\",
                playlistOrderSave: \"";
        // line 548
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist save order failed!"), "js", null, true);
        yield "\",
                getFormFailed: \"";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Get form failed!"), "js", null, true);
        yield "\",
                transformRegionFailed: \"";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transform zone failed!"), "js", null, true);
        yield "\",
                previewFailed: \"";
        // line 551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview failed!"), "js", null, true);
        yield "\",
                noWidgetsNeedSaving: \"";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No widgets need saving!"), "js", null, true);
        yield "\",
                requiredField: \"";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Missing required property %property%"), "js", null, true);
        yield "\",
                unknown: \"";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unknown Error"), "js", null, true);
        yield "\",
                invalidRegion: \"";
        // line 555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Region is invalid: Please delete it to validate the Layout!"), "js", null, true);
        yield "\",
                failedToImportMedia: \"";
        // line 556
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Failed to import media!"), "js", null, true);
        yield "\",
                canvasWidgetNotShared: \"";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This Canvas is not shared with you with edit permission!"), "js", null, true);
        yield "\",
                getProvidersFailed: \"";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Failed to load media providers!"), "js", null, true);
        yield "\",
            };

            var widgetStatusTrans = {
                setToStart: \"";
        // line 562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set to start"), "js", null, true);
        yield "\",
                setToExpire: \"";
        // line 563
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set to expire"), "js", null, true);
        yield "\",
                expired: \"";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Expired"), "js", null, true);
        yield "\",
                startTime: \"";
        // line 565
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Start Time"), "js", null, true);
        yield "\",
                endTime: \"";
        // line 566
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("End Time"), "js", null, true);
        yield "\"
            };

            var datasetQueryBuilderTranslations = {
                ascTitle: \"";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Ascending"), "js", null, true);
        yield "\",
                descTitle: \"";
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Descending"), "js", null, true);
        yield "\",
                filterOptions: [
                    {
                        id: \"starts-with\",
                        value: \"";
        // line 575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("starts with"), "js", null, true);
        yield "\"
                    }, {
                        id: \"ends-with\",
                        value: \"";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("ends with"), "js", null, true);
        yield "\"
                    }, {
                        id: \"contains\",
                        value: \"";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("contains"), "js", null, true);
        yield "\"
                    }, {
                        id: \"equals\",
                        value: \"";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("equals"), "js", null, true);
        yield "\"
                    }, {
                        id: \"not-starts-with\",
                        value: \"";
        // line 587
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("does not start with"), "js", null, true);
        yield "\"
                    }, {
                        id: \"not-ends-with\",
                        value: \"";
        // line 590
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("does not end with"), "js", null, true);
        yield "\"
                    }, {
                        id: \"not-contains\",
                        value: \"";
        // line 593
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("does not contain"), "js", null, true);
        yield "\"
                    }, {
                        id: \"not-equals\",
                        value: \"";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("does not equal"), "js", null, true);
        yield "\"
                    }, {
                        id: \"greater-than\",
                        value: \"";
        // line 599
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("greater than"), "js", null, true);
        yield "\"
                    }, {
                        id: \"less-than\",
                        value: \"";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("less than"), "js", null, true);
        yield "\"
                    }
                ],
                filterOperatorOptions: [
                    {
                        id: \"OR\",
                        value: \"";
        // line 608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Or"), "js", null, true);
        yield "\"
                    }, {
                        id: \"AND\",
                        value: \"";
        // line 611
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("And"), "js", null, true);
        yield "\"
                    }
                ]
            };

            var playlistMixerTranslations = {
                fillTitle: \"";
        // line 617
        echo __("Fill");
        yield "\",
                fillHelpText: \"";
        // line 618
        echo __("Fill - use the first Playlist to fill any remaining Spots");
        yield "\",
                padTitle: \"";
        // line 619
        echo __("Pad");
        yield "\",
                padHelpText: \"";
        // line 620
        echo __("Pad - use the first Playlist to pad any remaining Spots");
        yield "\",
                repeatTitle: \"";
        // line 621
        echo __("Repeat");
        yield "\",
                repeatHelpText: \"";
        // line 622
        echo __("Repeat - repeat the Widgets in this Playlist until the number of Spots have been filled");
        yield "\",
                playlists: \"";
        // line 623
        echo __("Playlists");
        yield "\",
                spotsHelp: \"";
        // line 624
        echo __("How many spots would you like on this Sub-Playlist? This is used before ordering to expand or shrink the list to the specified size. Leave empty to use the count of Widgets.");
        yield "\",
                spots: \"";
        // line 625
        echo __("Spots");
        yield "\",
                spotsLengthHelp: \"";
        // line 626
        echo __("Set the duration of all Widgets in the Playlist to a specific value in seconds. Leave empty to use each Widget duration.");
        yield "\",
                spotsLength: \"";
        // line 627
        echo __("Spot Length");
        yield "\",
                spotsFillHelp: \"";
        // line 628
        echo __("If there are not enough Widgets fill all spots, how should the remaining spots be filled?");
        yield "\",
                spotsFill: \"";
        // line 629
        echo __("Spot Fill");
        yield "\",
                noPermission: \"";
        // line 630
        echo __("You do not have access to this playlist");
        yield "\",
                playlistId: \"";
        // line 631
        echo __("Playlist Id");
        yield "\",
            };

            var datasetColumnSelectorTranslations = {
                colAvailable: \"";
        // line 635
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Columns Available"), "js", null, true);
        yield "\",
                colSelected: \"";
        // line 636
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Columns Selected"), "js", null, true);
        yield "\",
            };

            var tickerTagSelectorTranslations = {
                tagsTitle: \"";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tags"), "js", null, true);
        yield "\",
                tagsHelp: \"";
        // line 641
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Drag tags to the right column so thy can be displayed on the marquee."), "js", null, true);
        yield "\",
                tagAvailable: \"";
        // line 642
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Available"), "js", null, true);
        yield "\",
                tagSelected: \"";
        // line 643
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Selected"), "js", null, true);
        yield "\",
                title: \"";
        // line 644
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Title"), "js", null, true);
        yield "\",
                summary: \"";
        // line 645
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Summary"), "js", null, true);
        yield "\",
                content: \"";
        // line 646
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Content"), "js", null, true);
        yield "\",
                author: \"";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Author"), "js", null, true);
        yield "\",
                permalink: \"";
        // line 648
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Permalink"), "js", null, true);
        yield "\",
                link: \"";
        // line 649
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Link"), "js", null, true);
        yield "\",
                date: \"";
        // line 650
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Date"), "js", null, true);
        yield "\",
                publishedDate: \"";
        // line 651
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Published Date"), "js", null, true);
        yield "\",
                image: \"";
        // line 652
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Image"), "js", null, true);
        yield "\",
                form: {
                    fontFamily: \"";
        // line 654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Family"), "js", null, true);
        yield "\",
                    fontColor: \"";
        // line 655
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Colour"), "js", null, true);
        yield "\",
                    fontSize: \"";
        // line 656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Size"), "js", null, true);
        yield "\",
                    bold: \"";
        // line 657
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bold"), "js", null, true);
        yield "\",
                    italics: \"";
        // line 658
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Italics"), "js", null, true);
        yield "\",
                    underline: \"";
        // line 659
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Underline"), "js", null, true);
        yield "\",
                    dateFormat: \"";
        // line 660
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Date Format"), "js", null, true);
        yield "\",
                    opacity: \"";
        // line 661
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Opacity"), "js", null, true);
        yield "\",
                    width: \"";
        // line 662
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Width"), "js", null, true);
        yield "\",
                    height: \"";
        // line 663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Height"), "js", null, true);
        yield "\",
                }
            };

            var fallbackDataTrans = {
                message:  \"";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Fallback data for this Data Widget can be provided below and included according to the property \"Show fallback data\". Fallback data will be shown with the same appearance as data returned from the source, and can be edited using the form below."), "js", null, true);
        yield "\",
                addNewRecord: \"";
        // line 669
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add New"), "js", null, true);
        yield "\",
                saveRecord: \"";
        // line 670
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "js", null, true);
        yield "\",
                editRecord: \"";
        // line 671
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "js", null, true);
        yield "\",
                deleteRecord: \"";
        // line 672
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "\",
                fallbackTypeTitle: \"";
        // line 673
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show fallback data"), "js", null, true);
        yield "\",
                fallbackTypeHelpText: \"";
        // line 674
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If provided, when should we show fallback data for this Widget?"), "js", null, true);
        yield "\",
                never: \"";
        // line 675
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Never"), "js", null, true);
        yield "\",
                always: \"";
        // line 676
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Always"), "js", null, true);
        yield "\",
                empty: \"";
        // line 677
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When no data is returned"), "js", null, true);
        yield "\",
                error: \"";
        // line 678
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When there is an error"), "js", null, true);
        yield "\",
                noData: \"";
        // line 679
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Undefined"), "js", null, true);
        yield "\",
                invalidRecordEmpty: \"";
        // line 680
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please fill out all least one field!"), "js", null, true);
        yield "\",
                invalidRecordRequired: \"";
        // line 681
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please fill out all the required fields!"), "js", null, true);
        yield "\",
                requiredField: \"";
        // line 682
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Required Field!"), "js", null, true);
        yield "\",
            };

            var datasetColStyleSelectorTranslations = {
                colAvailable: \"";
        // line 686
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Columns Available"), "js", null, true);
        yield "\",
                colSelected: \"";
        // line 687
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Columns Selected"), "js", null, true);
        yield "\",
                title: \"";
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Title"), "js", null, true);
        yield "\",
                summary: \"";
        // line 689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Summary"), "js", null, true);
        yield "\",
                content: \"";
        // line 690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Content"), "js", null, true);
        yield "\",
                author: \"";
        // line 691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Author"), "js", null, true);
        yield "\",
                permalink: \"";
        // line 692
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Permalink"), "js", null, true);
        yield "\",
                link: \"";
        // line 693
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Link"), "js", null, true);
        yield "\",
                date: \"";
        // line 694
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Date"), "js", null, true);
        yield "\",
                publishedDate: \"";
        // line 695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Published Date"), "js", null, true);
        yield "\",
                image: \"";
        // line 696
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Image"), "js", null, true);
        yield "\",
                form: {
                    fontFamily: \"";
        // line 698
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Family"), "js", null, true);
        yield "\",
                    fontColor: \"";
        // line 699
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Colour"), "js", null, true);
        yield "\",
                    fontSize: \"";
        // line 700
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Size"), "js", null, true);
        yield "\",
                    bold: \"";
        // line 701
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bold"), "js", null, true);
        yield "\",
                    italics: \"";
        // line 702
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Italics"), "js", null, true);
        yield "\",
                    underline: \"";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Underline"), "js", null, true);
        yield "\",
                    dateFormat: \"";
        // line 704
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Date Format"), "js", null, true);
        yield "\",
                    opacity: \"";
        // line 705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Opacity"), "js", null, true);
        yield "\",
                    width: \"";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Width"), "js", null, true);
        yield "\",
                    height: \"";
        // line 707
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Height"), "js", null, true);
        yield "\",
                }
            };

            var actionsTranslations = {
                tableHeaders: {
                    name: \"";
        // line 713
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actions"), "js", null, true);
        yield "\",
                    id: \"";
        // line 714
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Id"), "js", null, true);
        yield "\",
                    ownerId: \"";
        // line 715
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Owner Id"), "js", null, true);
        yield "\",
                    triggerType: \"";
        // line 716
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger Type"), "js", null, true);
        yield "\",
                    triggerCode: \"";
        // line 717
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger Code"), "js", null, true);
        yield "\",
                    actionType: \"";
        // line 718
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Action Type"), "js", null, true);
        yield "\",
                    target: \"";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Target Type"), "js", null, true);
        yield "\",
                    targetId: \"";
        // line 720
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Target"), "js", null, true);
        yield "\",
                    widgetId: \"";
        // line 721
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget"), "js", null, true);
        yield "\",
                    layoutCode: \"";
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Code"), "js", null, true);
        yield "\",
                },
                button: {
                    name: \"";
        // line 725
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add Action"), "js", null, true);
        yield "\",
                    description: \"";
        // line 726
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Click to Add a new Action"), "js", null, true);
        yield "\"
                }
            };

            var menuBoardTranslations = {
                maxNumElementsPerZone: \"";
        // line 731
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("There can only be one category per zone!"), "js", null, true);
        yield "\",
            };

            var effectsTranslations = {
                all: \"";
        // line 735
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All"), "js", null, true);
        yield "\",
                showAll: \"";
        // line 736
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show All"), "js", null, true);
        yield "\",
                showPaged: \"";
        // line 737
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show Paged"), "js", null, true);
        yield "\",
                none: \"";
        // line 738
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("None"), "js", null, true);
        yield "\",
                noTransition: \"";
        // line 739
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No Transition"), "js", null, true);
        yield "\",
                marqueeLeft: \"";
        // line 740
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Marquee Left"), "js", null, true);
        yield "\",
                marqueeRight: \"";
        // line 741
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Marquee Right"), "js", null, true);
        yield "\",
                marqueeUp: \"";
        // line 742
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Marquee Up"), "js", null, true);
        yield "\",
                marqueeDown: \"";
        // line 743
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Marquee Down"), "js", null, true);
        yield "\",
                fade: \"";
        // line 744
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Fade"), "js", null, true);
        yield "\",
                fadeout: \"";
        // line 745
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Fade Out"), "js", null, true);
        yield "\",
                scrollHorz: \"";
        // line 746
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scroll Horizontal"), "js", null, true);
        yield "\",
                scrollVert: \"";
        // line 747
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scroll Vertical"), "js", null, true);
        yield "\",
                flipHorz: \"";
        // line 748
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Flip Horizontal"), "js", null, true);
        yield "\",
                flipVert: \"";
        // line 749
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Flip Vertical"), "js", null, true);
        yield "\",
                shuffle: \"";
        // line 750
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Shuffle"), "js", null, true);
        yield "\",
                tileSlide: \"";
        // line 751
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tile Slide"), "js", null, true);
        yield "\",
                tileBlind: \"";
        // line 752
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tile Blind"), "js", null, true);
        yield "\",
            };

            var playlistEditorTrans = {
                duration: toolbarTrans.duration,
                editPlaylistTitle: \"";
        // line 757
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Playlist - %playlistName% - "), "js", null, true);
        yield "\",
                widgetsCount: \"";
        // line 758
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widgets count"), "js", null, true);
        yield "\",
                editingSourcePlaylist: \"";
        // line 759
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Editing source playlist %playlistName% "), "js", null, true);
        yield "\",
                zoomControls: {
                    in: \"";
        // line 761
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zoom In"), "js", null, true);
        yield "\",
                    out: \"";
        // line 762
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zoom Out"), "js", null, true);
        yield "\",
                    default: \"";
        // line 763
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Default zoom"), "js", null, true);
        yield "\",
                    scaleMode: \"";
        // line 764
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change scale mode"), "js", null, true);
        yield "\",
                },
                externalPlaylistMessage: \"";
        // line 766
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Your changes will apply anywhere this Playlist is used."), "js", null, true);
        yield "\",
            };

            var deleteModalTrans = {
                playlist: {
                    title: \"";
        // line 771
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Playlist"), "js", null, true);
        yield "\",
                    message: \"";
        // line 772
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete a non-empty Playlist?"), "js", null, true);
        yield "\",
                },
                region: {
                    title: \"";
        // line 775
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Region"), "js", null, true);
        yield "\",
                    message: \"";
        // line 776
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this region?"), "js", null, true);
        yield "\",
                },
                widget: {
                    title: \"";
        // line 779
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Widget"), "js", null, true);
        yield "\",
                    message: \"";
        // line 780
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this widget?"), "js", null, true);
        yield "\",
                },
                element: {
                    title: \"";
        // line 783
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Element"), "js", null, true);
        yield "\",
                    message: \"";
        // line 784
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this element? Widget will also be deleted and configuration will be lost."), "js", null, true);
        yield "\",
                },
                elementGroup: {
                    title: \"";
        // line 787
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Element Group"), "js", null, true);
        yield "\",
                    message: \"";
        // line 788
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this element group? Widget will also be deleted and configuration will be lost."), "js", null, true);
        yield "\",
                },
                multiple: {
                    title: \"";
        // line 791
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete all selected objects?"), "js", null, true);
        yield "\",
                    message: \"";
        // line 792
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete all selected objects? Widgets might also be deleted and configuration will be lost."), "js", null, true);
        yield "\",
                },
            };

            var momentLocalesTrans = {
                \"af\": \"";
        // line 797
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Afrikaans"), "js", null, true);
        yield "\",
                \"ar-dz\": \"";
        // line 798
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic (Algeria)"), "js", null, true);
        yield "\",
                \"ar-kw\": \"";
        // line 799
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic (Kuwait)"), "js", null, true);
        yield "\",
                \"ar-ly\": \"";
        // line 800
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic (Libya)"), "js", null, true);
        yield "\",
                \"ar-ma\": \"";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic (Morocco)"), "js", null, true);
        yield "\",
                \"ar-sa\": \"";
        // line 802
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic (Saudi Arabia)"), "js", null, true);
        yield "\",
                \"ar-tn\": \"";
        // line 803
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic (Tunisia)"), "js", null, true);
        yield "\",
                \"ar\": \"";
        // line 804
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic"), "js", null, true);
        yield "\",
                \"az\": \"";
        // line 805
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Azerbaijani"), "js", null, true);
        yield "\",  
                \"be\": \"";
        // line 806
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Belarusian"), "js", null, true);
        yield "\",
                \"bg\": \"";
        // line 807
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bulgarian"), "js", null, true);
        yield "\",
                \"bm\": \"";
        // line 808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bambara"), "js", null, true);
        yield "\",
                \"bn-bd\": \"";
        // line 809
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bengali (Bangladesh)"), "js", null, true);
        yield "\",
                \"bn\": \"";
        // line 810
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bengali"), "js", null, true);
        yield "\",
                \"bo\": \"";
        // line 811
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tibetan"), "js", null, true);
        yield "\",
                \"br\": \"";
        // line 812
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Breton"), "js", null, true);
        yield "\",
                \"bs\": \"";
        // line 813
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bosnian"), "js", null, true);
        yield "\",    
                \"ca\": \"";
        // line 814
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Catalan"), "js", null, true);
        yield "\",
                \"cs\": \"";
        // line 815
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Czech"), "js", null, true);
        yield "\",
                \"cv\": \"";
        // line 816
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Chuvash"), "js", null, true);
        yield "\",
                \"cy\": \"";
        // line 817
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Welsh"), "js", null, true);
        yield "\",   
                \"da\": \"";
        // line 818
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Danish"), "js", null, true);
        yield "\",
                \"de-at\": \"";
        // line 819
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("German (Austria)"), "js", null, true);
        yield "\",  
                \"de-ch\": \"";
        // line 820
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("German (Switzerland)"), "js", null, true);
        yield "\",
                \"de\": \"";
        // line 821
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("German"), "js", null, true);
        yield "\",
                \"dv\": \"";
        // line 822
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Divehi"), "js", null, true);
        yield "\", 
                \"el\": \"";
        // line 823
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Greek"), "js", null, true);
        yield "\",
                \"en\": \"";
        // line 824
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English"), "js", null, true);
        yield "\",
                \"en-au\": \"";
        // line 825
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (Australia)"), "js", null, true);
        yield "\",
                \"en-ca\": \"";
        // line 826
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (Canada)"), "js", null, true);
        yield "\",
                \"en-gb\": \"";
        // line 827
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (United Kingdom)"), "js", null, true);
        yield "\",
                \"en-GB\": \"";
        // line 828
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (United Kingdom)"), "js", null, true);
        yield "\",
                \"en-ie\": \"";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (Ireland)"), "js", null, true);
        yield "\",
                \"en-il\": \"";
        // line 830
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (Israel)"), "js", null, true);
        yield "\",
                \"en-in\": \"";
        // line 831
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (India)"), "js", null, true);
        yield "\",
                \"en-nz\": \"";
        // line 832
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (New Zealand)"), "js", null, true);
        yield "\",  
                \"en-sg\": \"";
        // line 833
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (Singapore)"), "js", null, true);
        yield "\",  
                \"eo\": \"";
        // line 834
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Esperanto"), "js", null, true);
        yield "\",
                \"es-do\": \"";
        // line 835
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Spanish (Dominican Republic)"), "js", null, true);
        yield "\",
                \"es-mx\": \"";
        // line 836
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Spanish (Mexico)"), "js", null, true);
        yield "\", 
                \"es-us\": \"";
        // line 837
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Spanish (United States)"), "js", null, true);
        yield "\",
                \"es\": \"";
        // line 838
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Spanish"), "js", null, true);
        yield "\",
                \"et\": \"";
        // line 839
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Estonian"), "js", null, true);
        yield "\",
                \"eu\": \"";
        // line 840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Basque"), "js", null, true);
        yield "\",    
                \"fa\": \"";
        // line 841
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Persian"), "js", null, true);
        yield "\",
                \"fi\": \"";
        // line 842
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Finnish"), "js", null, true);
        yield "\",
                \"fil\": \"";
        // line 843
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Filipino"), "js", null, true);
        yield "\",
                \"fo\": \"";
        // line 844
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Faroese"), "js", null, true);
        yield "\",
                \"fr-ca\": \"";
        // line 845
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("French (Canada)"), "js", null, true);
        yield "\",
                \"fr-ch\": \"";
        // line 846
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("French (Switzerland)"), "js", null, true);
        yield "\",
                \"fr\": \"";
        // line 847
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("French"), "js", null, true);
        yield "\",
                \"fy\": \"";
        // line 848
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Western Frisian"), "js", null, true);
        yield "\",
                \"gd\": \"";
        // line 849
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scottish Gaelic"), "js", null, true);
        yield "\",
                \"gl\": \"";
        // line 850
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Galician"), "js", null, true);
        yield "\",
                \"gom-latn\": \"";
        // line 851
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("gom (Latin)"), "js", null, true);
        yield "\",
                \"gu\": \"";
        // line 852
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Gujarati"), "js", null, true);
        yield "\", 
                \"he\": \"";
        // line 853
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hebrew"), "js", null, true);
        yield "\",
                \"hi\": \"";
        // line 854
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hindi"), "js", null, true);
        yield "\",
                \"hr\": \"";
        // line 855
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Croatian"), "js", null, true);
        yield "\",
                \"hu\": \"";
        // line 856
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hungarian"), "js", null, true);
        yield "\",
                \"hy-am\": \"";
        // line 857
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Armenian (Armenia)"), "js", null, true);
        yield "\", 
                \"id\": \"";
        // line 858
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Indonesian"), "js", null, true);
        yield "\",
                \"is\": \"";
        // line 859
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Icelandic"), "js", null, true);
        yield "\",
                \"it-ch\": \"";
        // line 860
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Italian (Switzerland)"), "js", null, true);
        yield "\",
                \"it\": \"";
        // line 861
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Italian"), "js", null, true);
        yield "\", 
                \"ja\": \"";
        // line 862
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Japanese"), "js", null, true);
        yield "\",
                \"jv\": \"";
        // line 863
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Javanese"), "js", null, true);
        yield "\", 
                \"ka\": \"";
        // line 864
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Georgian"), "js", null, true);
        yield "\",
                \"kk\": \"";
        // line 865
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Kazakh"), "js", null, true);
        yield "\",
                \"km\": \"";
        // line 866
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Khmer"), "js", null, true);
        yield "\",
                \"kn\": \"";
        // line 867
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Kannada"), "js", null, true);
        yield "\",
                \"ko\": \"";
        // line 868
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Korean"), "js", null, true);
        yield "\",
                \"ku\": \"";
        // line 869
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Kurdish"), "js", null, true);
        yield "\",
                \"ky\": \"";
        // line 870
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Kirghiz"), "js", null, true);
        yield "\", 
                \"lb\": \"";
        // line 871
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Luxembourgish"), "js", null, true);
        yield "\",
                \"lo\": \"";
        // line 872
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Lao"), "js", null, true);
        yield "\",
                \"lt\": \"";
        // line 873
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Lithuanian"), "js", null, true);
        yield "\",
                \"lv\": \"";
        // line 874
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Latvian"), "js", null, true);
        yield "\",
                \"me\": \"";
        // line 875
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Montenegrin"), "js", null, true);
        yield "\",
                \"mi\": \"";
        // line 876
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Maori"), "js", null, true);
        yield "\",
                \"mk\": \"";
        // line 877
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Macedonian"), "js", null, true);
        yield "\",
                \"ml\": \"";
        // line 878
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Malayalam"), "js", null, true);
        yield "\",
                \"mn\": \"";
        // line 879
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mongolian"), "js", null, true);
        yield "\",
                \"mr\": \"";
        // line 880
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Marathi"), "js", null, true);
        yield "\", 
                \"ms-my\": \"";
        // line 881
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Malay (Malaysia)"), "js", null, true);
        yield "\",
                \"ms\": \"";
        // line 882
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Malay"), "js", null, true);
        yield "\",
                \"mt\": \"";
        // line 883
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Maltese"), "js", null, true);
        yield "\",
                \"my\": \"";
        // line 884
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Burmese"), "js", null, true);
        yield "\",
                \"nb\": \"";
        // line 885
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Norwegian Bokmål"), "js", null, true);
        yield "\",
                \"ne\": \"";
        // line 886
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Nepali"), "js", null, true);
        yield "\", 
                \"nl-be\": \"";
        // line 887
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dutch (Belgium)"), "js", null, true);
        yield "\",
                \"nl\": \"";
        // line 888
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dutch"), "js", null, true);
        yield "\",
                \"nn\": \"";
        // line 889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Norwegian Nynorsk"), "js", null, true);
        yield "\", 
                \"pa-in\": \"";
        // line 890
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Punjabi (India)"), "js", null, true);
        yield "\", 
                \"pl\": \"";
        // line 891
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Polish"), "js", null, true);
        yield "\",
                \"pt-br\": \"";
        // line 892
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Portuguese (Brazil)"), "js", null, true);
        yield "\", 
                \"pt\": \"";
        // line 893
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Portuguese"), "js", null, true);
        yield "\", 
                \"ro\": \"";
        // line 894
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Romanian"), "js", null, true);
        yield "\",
                \"ru\": \"";
        // line 895
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Russian"), "js", null, true);
        yield "\",  
                \"sd\": \"";
        // line 896
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sindhi"), "js", null, true);
        yield "\",
                \"se\": \"";
        // line 897
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Northern Sami"), "js", null, true);
        yield "\",
                \"si\": \"";
        // line 898
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sinhala"), "js", null, true);
        yield "\",
                \"sk\": \"";
        // line 899
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Slovak"), "js", null, true);
        yield "\",
                \"sl\": \"";
        // line 900
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Slovenian"), "js", null, true);
        yield "\",  
                \"sq\": \"";
        // line 901
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Albanian"), "js", null, true);
        yield "\",
                \"sr-cyrl\": \"";
        // line 902
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Serbian (Cyrillic)"), "js", null, true);
        yield "\",
                \"sr\": \"";
        // line 903
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Serbian"), "js", null, true);
        yield "\",
                \"ss\": \"";
        // line 904
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Swati"), "js", null, true);
        yield "\",
                \"sv\": \"";
        // line 905
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Swedish"), "js", null, true);
        yield "\",
                \"sw\": \"";
        // line 906
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Swahili"), "js", null, true);
        yield "\",  
                \"ta\": \"";
        // line 907
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tamil"), "js", null, true);
        yield "\",
                \"te\": \"";
        // line 908
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Telugu"), "js", null, true);
        yield "\",
                \"tet\": \"";
        // line 909
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tetum"), "js", null, true);
        yield "\",
                \"tg\": \"";
        // line 910
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tajik"), "js", null, true);
        yield "\",
                \"th\": \"";
        // line 911
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thai"), "js", null, true);
        yield "\", 
                \"tk\": \"";
        // line 912
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Turkmen"), "js", null, true);
        yield "\", 
                \"tl-ph\": \"";
        // line 913
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tagalog (Philippines)"), "js", null, true);
        yield "\",
                \"tlh\": \"";
        // line 914
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Klingon"), "js", null, true);
        yield "\",
                \"tr\": \"";
        // line 915
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Turkish"), "js", null, true);
        yield "\", 
                \"tzl\": \"";
        // line 916
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Talossan"), "js", null, true);
        yield "\", 
                \"tzm-latn\": \"";
        // line 917
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Central Atlas Tamazight (Latin)"), "js", null, true);
        yield "\",
                \"tzm\": \"";
        // line 918
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Central Atlas Tamazight"), "js", null, true);
        yield "\",   
                \"ug-cn\": \"";
        // line 919
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Uyghur (China)"), "js", null, true);
        yield "\", 
                \"uk\": \"";
        // line 920
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Ukrainian"), "js", null, true);
        yield "\", 
                \"ur\": \"";
        // line 921
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Urdu"), "js", null, true);
        yield "\",
                \"uz-latn\": \"";
        // line 922
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Uzbek (Latin)"), "js", null, true);
        yield "\",
                \"uz\": \"";
        // line 923
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Uzbek"), "js", null, true);
        yield "\",  
                \"vi\": \"";
        // line 924
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Vietnamese"), "js", null, true);
        yield "\",  
                \"x-pseudo\": \"";
        // line 925
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Pseudo"), "js", null, true);
        yield "\",  
                \"yo\": \"";
        // line 926
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Yoruba (Nigeria)"), "js", null, true);
        yield "\",  
                \"zh-cn\": \"";
        // line 927
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Chinese (China)"), "js", null, true);
        yield "\",
                \"zh-hk\": \"";
        // line 928
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Chinese (Hong Kong)"), "js", null, true);
        yield "\",  
                \"zh-mo\": \"";
        // line 929
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Chinese (Macau)"), "js", null, true);
        yield "\",
                \"zh-tw\": \"";
        // line 930
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Chinese (Taiwan)"), "js", null, true);
        yield "\",
            };
        ";
        // line 933
        yield "    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "editorTranslations.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  3174 => 933,  3169 => 930,  3165 => 929,  3161 => 928,  3157 => 927,  3153 => 926,  3149 => 925,  3145 => 924,  3141 => 923,  3137 => 922,  3133 => 921,  3129 => 920,  3125 => 919,  3121 => 918,  3117 => 917,  3113 => 916,  3109 => 915,  3105 => 914,  3101 => 913,  3097 => 912,  3093 => 911,  3089 => 910,  3085 => 909,  3081 => 908,  3077 => 907,  3073 => 906,  3069 => 905,  3065 => 904,  3061 => 903,  3057 => 902,  3053 => 901,  3049 => 900,  3045 => 899,  3041 => 898,  3037 => 897,  3033 => 896,  3029 => 895,  3025 => 894,  3021 => 893,  3017 => 892,  3013 => 891,  3009 => 890,  3005 => 889,  3001 => 888,  2997 => 887,  2993 => 886,  2989 => 885,  2985 => 884,  2981 => 883,  2977 => 882,  2973 => 881,  2969 => 880,  2965 => 879,  2961 => 878,  2957 => 877,  2953 => 876,  2949 => 875,  2945 => 874,  2941 => 873,  2937 => 872,  2933 => 871,  2929 => 870,  2925 => 869,  2921 => 868,  2917 => 867,  2913 => 866,  2909 => 865,  2905 => 864,  2901 => 863,  2897 => 862,  2893 => 861,  2889 => 860,  2885 => 859,  2881 => 858,  2877 => 857,  2873 => 856,  2869 => 855,  2865 => 854,  2861 => 853,  2857 => 852,  2853 => 851,  2849 => 850,  2845 => 849,  2841 => 848,  2837 => 847,  2833 => 846,  2829 => 845,  2825 => 844,  2821 => 843,  2817 => 842,  2813 => 841,  2809 => 840,  2805 => 839,  2801 => 838,  2797 => 837,  2793 => 836,  2789 => 835,  2785 => 834,  2781 => 833,  2777 => 832,  2773 => 831,  2769 => 830,  2765 => 829,  2761 => 828,  2757 => 827,  2753 => 826,  2749 => 825,  2745 => 824,  2741 => 823,  2737 => 822,  2733 => 821,  2729 => 820,  2725 => 819,  2721 => 818,  2717 => 817,  2713 => 816,  2709 => 815,  2705 => 814,  2701 => 813,  2697 => 812,  2693 => 811,  2689 => 810,  2685 => 809,  2681 => 808,  2677 => 807,  2673 => 806,  2669 => 805,  2665 => 804,  2661 => 803,  2657 => 802,  2653 => 801,  2649 => 800,  2645 => 799,  2641 => 798,  2637 => 797,  2629 => 792,  2625 => 791,  2619 => 788,  2615 => 787,  2609 => 784,  2605 => 783,  2599 => 780,  2595 => 779,  2589 => 776,  2585 => 775,  2579 => 772,  2575 => 771,  2567 => 766,  2562 => 764,  2558 => 763,  2554 => 762,  2550 => 761,  2545 => 759,  2541 => 758,  2537 => 757,  2529 => 752,  2525 => 751,  2521 => 750,  2517 => 749,  2513 => 748,  2509 => 747,  2505 => 746,  2501 => 745,  2497 => 744,  2493 => 743,  2489 => 742,  2485 => 741,  2481 => 740,  2477 => 739,  2473 => 738,  2469 => 737,  2465 => 736,  2461 => 735,  2454 => 731,  2446 => 726,  2442 => 725,  2436 => 722,  2432 => 721,  2428 => 720,  2424 => 719,  2420 => 718,  2416 => 717,  2412 => 716,  2408 => 715,  2404 => 714,  2400 => 713,  2391 => 707,  2387 => 706,  2383 => 705,  2379 => 704,  2375 => 703,  2371 => 702,  2367 => 701,  2363 => 700,  2359 => 699,  2355 => 698,  2350 => 696,  2346 => 695,  2342 => 694,  2338 => 693,  2334 => 692,  2330 => 691,  2326 => 690,  2322 => 689,  2318 => 688,  2314 => 687,  2310 => 686,  2303 => 682,  2299 => 681,  2295 => 680,  2291 => 679,  2287 => 678,  2283 => 677,  2279 => 676,  2275 => 675,  2271 => 674,  2267 => 673,  2263 => 672,  2259 => 671,  2255 => 670,  2251 => 669,  2247 => 668,  2239 => 663,  2235 => 662,  2231 => 661,  2227 => 660,  2223 => 659,  2219 => 658,  2215 => 657,  2211 => 656,  2207 => 655,  2203 => 654,  2198 => 652,  2194 => 651,  2190 => 650,  2186 => 649,  2182 => 648,  2178 => 647,  2174 => 646,  2170 => 645,  2166 => 644,  2162 => 643,  2158 => 642,  2154 => 641,  2150 => 640,  2143 => 636,  2139 => 635,  2132 => 631,  2128 => 630,  2124 => 629,  2120 => 628,  2116 => 627,  2112 => 626,  2108 => 625,  2104 => 624,  2100 => 623,  2096 => 622,  2092 => 621,  2088 => 620,  2084 => 619,  2080 => 618,  2076 => 617,  2067 => 611,  2061 => 608,  2052 => 602,  2046 => 599,  2040 => 596,  2034 => 593,  2028 => 590,  2022 => 587,  2016 => 584,  2010 => 581,  2004 => 578,  1998 => 575,  1991 => 571,  1987 => 570,  1980 => 566,  1976 => 565,  1972 => 564,  1968 => 563,  1964 => 562,  1957 => 558,  1953 => 557,  1949 => 556,  1945 => 555,  1941 => 554,  1937 => 553,  1933 => 552,  1929 => 551,  1925 => 550,  1921 => 549,  1917 => 548,  1913 => 547,  1909 => 546,  1905 => 545,  1901 => 544,  1897 => 543,  1893 => 542,  1889 => 541,  1885 => 540,  1881 => 539,  1877 => 538,  1873 => 537,  1869 => 536,  1865 => 535,  1861 => 534,  1857 => 533,  1853 => 532,  1849 => 531,  1845 => 530,  1841 => 529,  1833 => 524,  1829 => 523,  1825 => 522,  1821 => 521,  1817 => 520,  1813 => 519,  1808 => 517,  1804 => 516,  1798 => 513,  1794 => 512,  1789 => 510,  1785 => 509,  1781 => 508,  1777 => 507,  1773 => 506,  1769 => 505,  1765 => 504,  1758 => 500,  1754 => 499,  1750 => 498,  1746 => 497,  1742 => 496,  1738 => 495,  1734 => 494,  1730 => 493,  1726 => 492,  1722 => 491,  1718 => 490,  1714 => 489,  1710 => 488,  1706 => 487,  1702 => 486,  1698 => 485,  1694 => 484,  1686 => 479,  1682 => 478,  1678 => 477,  1674 => 476,  1670 => 475,  1666 => 474,  1660 => 471,  1656 => 470,  1652 => 469,  1648 => 468,  1644 => 467,  1640 => 466,  1636 => 465,  1628 => 460,  1624 => 459,  1620 => 458,  1616 => 457,  1612 => 456,  1608 => 455,  1604 => 454,  1600 => 453,  1591 => 447,  1587 => 446,  1580 => 442,  1576 => 441,  1572 => 440,  1568 => 439,  1564 => 438,  1558 => 435,  1554 => 434,  1550 => 433,  1546 => 432,  1542 => 431,  1538 => 430,  1534 => 429,  1529 => 427,  1525 => 426,  1521 => 425,  1517 => 424,  1513 => 423,  1509 => 422,  1505 => 421,  1501 => 420,  1497 => 419,  1492 => 417,  1488 => 416,  1484 => 415,  1480 => 414,  1476 => 413,  1471 => 411,  1467 => 410,  1463 => 409,  1459 => 408,  1455 => 407,  1451 => 406,  1447 => 405,  1443 => 404,  1439 => 403,  1435 => 402,  1431 => 401,  1427 => 400,  1423 => 399,  1419 => 398,  1415 => 397,  1409 => 394,  1405 => 393,  1401 => 392,  1397 => 391,  1393 => 390,  1389 => 389,  1382 => 385,  1378 => 384,  1374 => 383,  1370 => 382,  1364 => 379,  1360 => 378,  1356 => 377,  1352 => 376,  1348 => 375,  1344 => 374,  1340 => 373,  1336 => 372,  1332 => 371,  1328 => 370,  1324 => 369,  1320 => 368,  1316 => 367,  1312 => 366,  1308 => 365,  1304 => 364,  1300 => 363,  1296 => 362,  1292 => 361,  1288 => 360,  1282 => 357,  1278 => 356,  1274 => 355,  1268 => 352,  1264 => 351,  1260 => 350,  1254 => 347,  1250 => 346,  1246 => 345,  1242 => 344,  1238 => 343,  1234 => 342,  1230 => 341,  1226 => 340,  1222 => 339,  1217 => 337,  1212 => 335,  1208 => 334,  1204 => 333,  1200 => 332,  1196 => 331,  1192 => 330,  1188 => 329,  1184 => 328,  1180 => 327,  1175 => 325,  1171 => 324,  1167 => 323,  1163 => 322,  1159 => 321,  1155 => 320,  1151 => 319,  1147 => 318,  1143 => 317,  1139 => 316,  1135 => 315,  1131 => 314,  1127 => 313,  1123 => 312,  1119 => 311,  1115 => 310,  1111 => 309,  1107 => 308,  1103 => 307,  1095 => 302,  1091 => 301,  1087 => 300,  1083 => 299,  1079 => 298,  1075 => 297,  1070 => 295,  1066 => 294,  1062 => 293,  1058 => 292,  1054 => 291,  1049 => 289,  1043 => 286,  1039 => 285,  1035 => 284,  1031 => 283,  1023 => 278,  1019 => 277,  1015 => 276,  1011 => 275,  1007 => 274,  1003 => 273,  999 => 272,  995 => 271,  991 => 270,  987 => 269,  983 => 268,  979 => 267,  975 => 266,  969 => 263,  965 => 262,  961 => 261,  957 => 260,  953 => 259,  949 => 258,  945 => 257,  941 => 256,  937 => 255,  933 => 254,  929 => 253,  925 => 252,  921 => 251,  917 => 250,  913 => 249,  909 => 248,  905 => 247,  901 => 246,  897 => 245,  893 => 244,  889 => 243,  885 => 242,  881 => 241,  875 => 238,  871 => 237,  867 => 236,  863 => 235,  859 => 234,  855 => 233,  851 => 232,  847 => 231,  843 => 230,  839 => 229,  835 => 228,  831 => 227,  827 => 226,  821 => 223,  817 => 222,  813 => 221,  809 => 220,  805 => 219,  801 => 218,  797 => 217,  793 => 216,  789 => 215,  785 => 214,  781 => 213,  777 => 212,  773 => 211,  769 => 210,  765 => 209,  759 => 206,  755 => 205,  751 => 204,  747 => 203,  743 => 202,  739 => 201,  735 => 200,  731 => 199,  727 => 198,  723 => 197,  719 => 196,  715 => 195,  711 => 194,  707 => 193,  703 => 192,  699 => 191,  695 => 190,  691 => 189,  687 => 188,  683 => 187,  679 => 186,  675 => 185,  671 => 184,  667 => 183,  663 => 182,  659 => 181,  654 => 179,  650 => 178,  646 => 177,  642 => 176,  638 => 175,  632 => 172,  628 => 171,  624 => 170,  619 => 168,  615 => 167,  611 => 166,  606 => 164,  602 => 163,  597 => 161,  593 => 160,  589 => 159,  585 => 158,  581 => 157,  577 => 156,  572 => 154,  568 => 153,  564 => 152,  560 => 151,  556 => 150,  552 => 149,  548 => 148,  544 => 147,  540 => 146,  536 => 145,  532 => 144,  528 => 143,  524 => 142,  520 => 141,  516 => 140,  512 => 139,  508 => 138,  504 => 137,  500 => 136,  496 => 135,  492 => 134,  488 => 133,  484 => 132,  480 => 131,  476 => 130,  472 => 129,  468 => 128,  464 => 127,  460 => 126,  456 => 125,  449 => 121,  445 => 120,  441 => 119,  437 => 118,  433 => 117,  429 => 116,  425 => 115,  421 => 114,  417 => 113,  413 => 112,  409 => 111,  405 => 110,  401 => 109,  397 => 108,  393 => 107,  389 => 106,  385 => 105,  381 => 104,  377 => 103,  373 => 102,  369 => 101,  365 => 100,  361 => 99,  357 => 98,  353 => 97,  349 => 96,  345 => 95,  338 => 91,  334 => 90,  330 => 89,  326 => 88,  322 => 87,  318 => 86,  314 => 85,  310 => 84,  306 => 83,  302 => 82,  298 => 81,  294 => 80,  290 => 79,  286 => 78,  282 => 77,  278 => 76,  274 => 75,  270 => 74,  266 => 73,  259 => 69,  255 => 68,  250 => 66,  246 => 65,  242 => 64,  238 => 63,  234 => 62,  230 => 61,  223 => 57,  219 => 56,  214 => 54,  210 => 53,  202 => 48,  198 => 47,  193 => 45,  189 => 44,  184 => 42,  180 => 41,  176 => 40,  172 => 39,  168 => 38,  163 => 36,  159 => 35,  155 => 34,  151 => 33,  147 => 32,  143 => 31,  139 => 30,  135 => 29,  131 => 28,  127 => 27,  123 => 26,  119 => 25,  115 => 24,  111 => 23,  107 => 22,  103 => 21,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  52 => 8,  47 => 6,  39 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "editorTranslations.twig", "/var/www/cms/views/editorTranslations.twig");
    }
}
