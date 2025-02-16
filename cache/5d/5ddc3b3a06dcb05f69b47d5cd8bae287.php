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

/* globalTranslations.twig */
class __TwigTemplate_d0936ea32b30bdefaa960c4ebf67327e extends Template
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
        // line 2
        yield "<script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
    var translations = ";
        // line 3
        yield ($context["translations"] ?? null);
        yield ";
    ";
        // line 5
        yield "    translations.withselected = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("With Selected"), "js", null, true);
        yield "\";
    translations.selectAll = \"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select All"), "js", null, true);
        yield "\";
    translations.multiselect = \"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Multiple Items Selected"), "js", null, true);
        yield "\";
    translations.indeterminate = \"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Indeterminate State"), "js", null, true);
        yield "\";
    translations.multiselectNoItemsMessage = \"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sorry, no items have been selected."), "js", null, true);
        yield "\";
    translations.multiselectMessage = \"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Caution, you have selected %1 items. Clicking save will run the %2 transaction on all these items."), "js", null, true);
        yield "\";
    translations.validExtensions = \"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Valid extensions are %s"), "js", null, true);
        yield "\";
    translations.save = \"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "js", null, true);
        yield "\";
    translations.cancel = \"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js", null, true);
        yield "\";
    translations.close = \"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "js", null, true);
        yield "\";
    translations.success = \"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Success"), "js", null, true);
        yield "\";
    translations.failure = \"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Failure"), "js", null, true);
        yield "\";
    translations.enterText = \"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enter text..."), "js", null, true);
        yield "\";
    translations.rowMenu = \"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Row Menu"), "js", null, true);
        yield "\";
    translations.noDataMessage = \"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No Data returned from the source"), "js", null, true);
        yield "\";
    translations.statusPending = \"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Status Pending"), "js", null, true);
        yield "\";
    translations.duplicate = \"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate"), "js", null, true);
        yield "\";
    translations.deleteRecurring = \"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete from Schedule"), "js", null, true);
        yield "\";
    translations.spacesWarning = \"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Warning - starts with or ends with a space, or contains double spaces"), "js", null, true);
        yield "\";
    translations.done = \"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Done"), "js", null, true);
        yield "\";
    translations.freeTextCommand = \"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Free Text"), "js", null, true);
        yield "\";
    translations.editTags = \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Tags"), "js", null, true);
        yield "\";
    translations.tagInputValueHelpText = \"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Provide an optional Value for this Tag. If no Value is required, this field can be left blank"), "js", null, true);
        yield "\";
    translations.tagInputValueRequiredHelpText = \"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please provide the value for this Tag and confirm by pressing enter on your keyboard."), "js", null, true);
        yield "\";
    translations.videoImageCoverHelpText = \"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Before Uploading, scroll through the progress bar or play and pause to select a still to be used as the video file thumbnail."), "js", null, true);
        yield "\";
    translations.folderTreeCreate = \"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create"), "js", null, true);
        yield "\";
    translations.folderTreeEdit = \"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Rename"), "js", null, true);
        yield "\";
    translations.folderTreeDelete = \"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove"), "js", null, true);
        yield "\";
    translations.folderTreeShare = \"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Share"), "js", null, true);
        yield "\";
    translations.folderTreeSetAsHome = \"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set as Home"), "js", null, true);
        yield "\";
    translations.folderTreeError = \"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cannot modify root folder."), "js", null, true);
        yield "\";
    translations.folderWithContent = \"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cannot remove Folder with content"), "js", null, true);
        yield "\";
    translations.folderNew = \"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New Folder"), "js", null, true);
        yield "\";
    translations.folderTreeMove = \"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move Folder"), "js", null, true);
        yield "\";
    translations.folderRootTitle = \"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Right click a Folder for further Options"), "js", null, true);
        yield "\";
    translations.dayPartExceptionErrorMessage = \"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You already set an exception for this day."), "js", null, true);
        yield "\";
    translations.online = \"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Online"), "js", null, true);
        yield "\";
    translations.offline = \"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Offline"), "js", null, true);
        yield "\";
    translations.upToDate = \"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Up to date"), "js", null, true);
        yield "\";
    translations.notUpToDate = \"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Not up to date"), "js", null, true);
        yield "\";
    translations.publishedStatusFuture = \"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Publishing"), "js", null, true);
        yield "\";
    translations.publishedStatusFailed = \"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Publish failed."), "js", null, true);
        yield "\";
    translations.defaultSorting = \"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Default Sorting"), "js", null, true);
        yield "\";
    translations.unlimited = \"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unlimited"), "js", null, true);
        yield "\";
    translations.imagePixelSizeTooLarge = \"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Warning : Image is too large and will not be displayed on the Players. Please check the allowed Resize Limit in Administration -> Settings"), "js", null, true);
        yield "\";
    translations.triggerCodeLabel = \"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger Code"), "js", null, true);
        yield "\"
    translations.triggerCodeHelpText = \"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enter the code associated with the web hook you wish to trigger. Please note that for this action to work, the webhook trigger code has to be added to Interactive Actions in scheduled content for this Player."), "js", null, true);
        yield "\";
    translations.sendCommandLabel = \"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Command"), "js", null, true);
        yield "\"
    translations.sendCommandHelpText = \"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Pick a command to send to the Player. If the CMS has XMR enabled this will be sent immediately, otherwise it will show an error."), "js", null, true);
        yield "\";
    translations.schedule = {
        criteriaFields: {
            custom: \"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Custom"), "js", null, true);
        yield "\",
            isSet: \"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Is set"), "js", null, true);
        yield "\",
            lessThan: \"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Less than"), "js", null, true);
        yield "\",
            lessThanOrEqualTo: \"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Less than or equal to"), "js", null, true);
        yield "\",
            equalTo: \"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Equal to"), "js", null, true);
        yield "\",
            notEqualTo: \"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Not equal to"), "js", null, true);
        yield "\",
            greaterThanOrEqualTo: \"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Greater than or equal to"), "js", null, true);
        yield "\",
            greaterThan: \"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Greater than"), "js", null, true);
        yield "\",
            contains: \"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Contains"), "js", null, true);
        yield "\",
            notContains: \"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Not contains"), "js", null, true);
        yield "\",
        },
        fullscreen: {
            header: {
                media: \"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select Media"), "js", null, true);
        yield "\",
                playlist: \"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select Playlist"), "js", null, true);
        yield "\",
            },
            mediaInput: {
                title: \"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Media"), "js", null, true);
        yield "\",
                helpText: \"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select a Media file from the Library to use. The selected file will be shown full screen for this event."), "js", null, true);
        yield "\",
            },
            playlistInput: {
                title: \"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                helpText: \"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select a Playlist to use. The selected playlist will be shown full screen for this event."), "js", null, true);
        yield "\",
            },
            resolutionInput: {
                title: \"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Resolution"), "js", null, true);
        yield "\",
                helpText: \"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Optionally select a Resolution to use for the selected Media. Leave blank to match with an existing Resolution closest in size to the selected media."), "js", null, true);
        yield "\",
                mediaHelp: \"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Optionally select a Resolution to use for the selected Media. Leave blank to match with an existing Resolution closest in size to the selected media."), "js", null, true);
        yield "\",
                playlistHelp: \"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Optionally select a Resolution to use for the selected Playlist. Leave blank to default to a 1080p Resolution."), "js", null, true);
        yield "\",
            },
            layoutDuration: {
                title: \"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration in loop"), "js", null, true);
        yield "\",
                helpText: \"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set how long this item should be shown each time it appears in the schedule. Leave blank to use the Media Duration set in the Library."), "js", null, true);
        yield "\",
            },
            backgroundColor: {
                title: \"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Background Colour"), "js", null, true);
        yield "\",
                helpText: \"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Optionally set a colour to use as a background for if the item selected does not fill the entire screen."), "js", null, true);
        yield "\",
            },
            saveForm: \"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "js", null, true);
        yield "\",
        },
        reminder: {
            type: {
                minute: \"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Minute"), "js", null, true);
        yield "\",
                hour: \"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hour"), "js", null, true);
        yield "\",
                day: \"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Day"), "js", null, true);
        yield "\",
                week: \"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Week"), "js", null, true);
        yield "\",
                month: \"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Month"), "js", null, true);
        yield "\",
            },
            option: {
                beforeScheduleStarts: \"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Before schedule starts"), "js", null, true);
        yield "\",
                afterScheduleStarts: \"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("After schedule starts"), "js", null, true);
        yield "\",
                beforeScheduleEnds: \"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Before schedule ends"), "js", null, true);
        yield "\",
                afterScheduleEnds: \"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("After schedule ends"), "js", null, true);
        yield "\",
            },
            notifyByEmail: \"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notify by email?"), "js", null, true);
        yield "\",
        },
        syncEventSelector: {
            lead: \"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Lead"), "js", null, true);
        yield "\",
            mirror: \"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mirror"), "js", null, true);
        yield "\",
            setOnAllDisplays: \"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set The same Layout on all displays?"), "js", null, true);
        yield "\",
        },
        calendar: {
            campaigns: \"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Campaigns"), "js", null, true);
        yield "\",
            id: \"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("ID"), "js", null, true);
        yield "\",
            name: \"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
            cyclePlayback: \"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cycle Playback?"), "js", null, true);
        yield "\",
            displayGroups: \"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Display Groups"), "js", null, true);
        yield "\",
            layoutName: \"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Name"), "js", null, true);
        yield "\",
            status: \"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Status"), "js", null, true);
        yield "\",
            fromDate: \"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("From Date"), "js", null, true);
        yield "\",
            toDate: \"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("To Date"), "js", null, true);
        yield "\",
            layoutDuration: \"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Duration"), "js", null, true);
        yield "\",
            shareOfVoice: \"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Share of Voice"), "js", null, true);
        yield "\",
            displayOrder: \"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Display Order"), "js", null, true);
        yield "\",
            priority: \"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Priority"), "js", null, true);
        yield "\",
            visible: \"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Visible"), "js", null, true);
        yield "\",
            layouts: \"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layouts"), "js", null, true);
        yield "\",
            overlayLayouts: \"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Overlay Layouts"), "js", null, true);
        yield "\",
            interruptLayouts: \"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Interrupt Layouts"), "js", null, true);
        yield "\",
            campaignLayouts: \"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Campaign Layouts"), "js", null, true);
        yield "\",
            fullscreenVideoImage: \"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Full Screen Video/Image"), "js", null, true);
        yield "\",
            fullscreenPlaylist: \"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Full Screen Playlist"), "js", null, true);
        yield "\",
            synchronised: \"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Synchronised"), "js", null, true);
        yield "\",
            numberLayouts: \"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Number of Layouts"), "js", null, true);
        yield "\",
            layoutWontBeShown: \"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This layout will not be shown as there are higher priority layouts scheduled at this time"), "js", null, true);
        yield "\",
            always: \"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Always"), "js", null, true);
        yield "\",
            displayNotSelected: \"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Display not selected!"), "js", null, true);
        yield "\",
            showAllOptionsDNW: \"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show All option does not work for this filter, one or more specific Display/Display Group need to be selected!"), "js", null, true);
        yield "\",
            noEventsForTheChosen: \"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No events for the chosen Display/Display Group on the selected date!"), "js", null, true);
        yield "\",
            dataRequestFailed: \"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data request failed!"), "js", null, true);
        yield "\",
            schedule: \"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Schedule"), "js", null, true);
        yield "\",
            numberOfEvents: \"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Number of events"), "js", null, true);
        yield "\",
        },
    };
    translations.commandInput = {
        showCommandPreview: \"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show command preview!"), "js", null, true);
        yield "\",
        invalidCommand: \"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Invalid command!"), "js", null, true);
        yield "\",
        off: \"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Off"), "js", null, true);
        yield "\",
        red: \"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Red"), "js", null, true);
        yield "\",
        green: \"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Green"), "js", null, true);
        yield "\",
        blue: \"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Blue"), "js", null, true);
        yield "\",
        white: \"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("White"), "js", null, true);
        yield "\",
        name: \"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
        key: \"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Key"), "js", null, true);
        yield "\",
        value: \"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Value"), "js", null, true);
        yield "\",
        type: \"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "js", null, true);
        yield "\",
        intent: \"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Intent"), "js", null, true);
        yield "\",
        extra: \"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Extra"), "js", null, true);
        yield "\",
        deviceNameCOM: \"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Device Name/COM"), "js", null, true);
        yield "\",
        baudRate: \"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Baud Rate"), "js", null, true);
        yield "\",
        dateBits: \"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data Bits"), "js", null, true);
        yield "\",
        parity: \"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Parity"), "js", null, true);
        yield "\",
        stopBits: \"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Stop Bits"), "js", null, true);
        yield "\",
        handshake: \"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Handshake"), "js", null, true);
        yield "\",
        hexSupport: \"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("HexSupport"), "js", null, true);
        yield "\",
        command: \"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Command"), "js", null, true);
        yield "\",
        url: \"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("URL"), "js", null, true);
        yield "\",
        queryParamBuilder: \"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Query params builder"), "js", null, true);
        yield "\",
        queryBuilder: \"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Query builder"), "js", null, true);
        yield "\",
        queryParams: \"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Query params"), "js", null, true);
        yield "\",
        requestMethod: \"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Request method"), "js", null, true);
        yield "\",
        showRawHeaders: \"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show raw headers"), "js", null, true);
        yield "\",
        headers: \"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Headers"), "js", null, true);
        yield "\",
        contentType: \"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Content Type"), "js", null, true);
        yield "\",
        showRawBodyData: \"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show raw body data"), "js", null, true);
        yield "\",
        showRawData: \"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show raw data"), "js", null, true);
        yield "\",
        bodyData: \"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Body data"), "js", null, true);
        yield "\",
    };
    translations.multiSelectTagEditForm = {
        newTags: \"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New tags"), "js", null, true);
        yield "\",
        newTagsHelp: \"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("A comma separated list of tags to add to the selected elements."), "js", null, true);
        yield "\",
        tagValue: \"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tag value"), "js", null, true);
        yield "\",
        tagValueHelp: \"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Provide an optional Value for this Tag. If no Value is required, this field can be left blank."), "js", null, true);
        yield "\",
        tagValueRequired: \"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field."), "js", null, true);
        yield "\",
        existingTags: \"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Existing tags"), "js", null, true);
        yield "\",
        existingTagsHelp: \"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove tags from the list to remove them from elements that contain them."), "js", null, true);
        yield "\",
    };
    translations.clearFilters = \"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear Filters"), "js", null, true);
        yield "\";
    translations.folderTree = {
        selectFolder: \"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select Folder"), "js", null, true);
        yield "\",
        search: \"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "js", null, true);
        yield "\",
        noFolderMatch: \"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No Folders matching the search term"), "js", null, true);
        yield "\",
        done: \"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Done"), "js", null, true);
        yield "\",
    };
    translations.autoSubmitField = {
        label: \"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Automatically submit this form?"), "js", null, true);
        yield "\",
        helpText: \"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When enabled, this form will automatically submit in future. Reset this in your User Profile."), "js", null, true);
        yield "\",
    };
    translations.miniPlayer = {
        play: \"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Play Preview"), "js", null, true);
        yield "\",
        close: \"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close Preview"), "js", null, true);
        yield "\",
        changeSize: \"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change window size"), "js", null, true);
        yield "\",
        newWindow: \"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview in new window"), "js", null, true);
        yield "\",
    };
    var dataTablesLanguage = {
        \"decimal\":        \"\",
        \"emptyTable\":     \"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No data available in table"), "js", null, true);
        yield "\",
        \"info\":           \"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Showing _START_ to _END_ of _TOTAL_ entries"), "js", null, true);
        yield "\",
        \"infoEmpty\":      \"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Showing 0 to 0 of 0 entries"), "js", null, true);
        yield "\",
        \"infoFiltered\":   \"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("(filtered from _MAX_ total entries)"), "js", null, true);
        yield "\",
        \"infoPostFix\":    \"\",
        \"thousands\":      \",\",
        \"lengthMenu\":     \"";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show _MENU_ entries"), "js", null, true);
        yield "\",
        \"loadingRecords\": \"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Loading..."), "js", null, true);
        yield "\",
        \"processing\":     \"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Processing..."), "js", null, true);
        yield "\",
        \"search\":         \"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search:"), "js", null, true);
        yield "\",
        \"zeroRecords\":    \"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No matching records found"), "js", null, true);
        yield "\",
        \"paginate\": {
            \"first\":      \"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("First"), "js", null, true);
        yield "\",
            \"last\":       \"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last"), "js", null, true);
        yield "\",
            \"next\":       \"";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next"), "js", null, true);
        yield "\",
            \"previous\":   \"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous"), "js", null, true);
        yield "\"
        },
        \"aria\": {
            \"sortAscending\":  \"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(": activate to sort column ascending"), "js", null, true);
        yield "\",
            \"sortDescending\": \"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(": activate to sort column descending"), "js", null, true);
        yield "\"
        },
        \"buttons\": {
            \"colvis\":  \"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Column visibility"), "js", null, true);
        yield "\",
            \"print\": \"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Print"), "js", null, true);
        yield "\"
        }
    };
    ";
        // line 239
        yield "</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "globalTranslations.twig";
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
        return array (  833 => 239,  827 => 235,  823 => 234,  817 => 231,  813 => 230,  807 => 227,  803 => 226,  799 => 225,  795 => 224,  790 => 222,  786 => 221,  782 => 220,  778 => 219,  774 => 218,  768 => 215,  764 => 214,  760 => 213,  756 => 212,  749 => 208,  745 => 207,  741 => 206,  737 => 205,  731 => 202,  727 => 201,  721 => 198,  717 => 197,  713 => 196,  709 => 195,  704 => 193,  699 => 191,  695 => 190,  691 => 189,  687 => 188,  683 => 187,  679 => 186,  675 => 185,  669 => 182,  665 => 181,  661 => 180,  657 => 179,  653 => 178,  649 => 177,  645 => 176,  641 => 175,  637 => 174,  633 => 173,  629 => 172,  625 => 171,  621 => 170,  617 => 169,  613 => 168,  609 => 167,  605 => 166,  601 => 165,  597 => 164,  593 => 163,  589 => 162,  585 => 161,  581 => 160,  577 => 159,  573 => 158,  569 => 157,  565 => 156,  561 => 155,  557 => 154,  553 => 153,  549 => 152,  545 => 151,  538 => 147,  534 => 146,  530 => 145,  526 => 144,  522 => 143,  518 => 142,  514 => 141,  510 => 140,  506 => 139,  502 => 138,  498 => 137,  494 => 136,  490 => 135,  486 => 134,  482 => 133,  478 => 132,  474 => 131,  470 => 130,  466 => 129,  462 => 128,  458 => 127,  454 => 126,  450 => 125,  446 => 124,  442 => 123,  438 => 122,  434 => 121,  430 => 120,  426 => 119,  422 => 118,  416 => 115,  412 => 114,  408 => 113,  402 => 110,  397 => 108,  393 => 107,  389 => 106,  385 => 105,  379 => 102,  375 => 101,  371 => 100,  367 => 99,  363 => 98,  356 => 94,  351 => 92,  347 => 91,  341 => 88,  337 => 87,  331 => 84,  327 => 83,  323 => 82,  319 => 81,  313 => 78,  309 => 77,  303 => 74,  299 => 73,  293 => 70,  289 => 69,  282 => 65,  278 => 64,  274 => 63,  270 => 62,  266 => 61,  262 => 60,  258 => 59,  254 => 58,  250 => 57,  246 => 56,  240 => 53,  236 => 52,  232 => 51,  228 => 50,  224 => 49,  220 => 48,  216 => 47,  212 => 46,  208 => 45,  204 => 44,  200 => 43,  196 => 42,  192 => 41,  188 => 40,  184 => 39,  180 => 38,  176 => 37,  172 => 36,  168 => 35,  164 => 34,  160 => 33,  156 => 32,  152 => 31,  148 => 30,  144 => 29,  140 => 28,  136 => 27,  132 => 26,  128 => 25,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  47 => 5,  43 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "globalTranslations.twig", "/var/www/cms/views/globalTranslations.twig");
    }
}
