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

/* authed-sidebar.twig */
class __TwigTemplate_a2ef7e07f4e85804bf0253766a279f48 extends Template
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
        // line 1
        yield "<div id=\"sidebar-wrapper\">
    <ul class=\"sidebar\">
        <li class=\"sidebar-main\"><a href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        yield "\">";
        echo __("Dashboard");
        yield "</a></li>

        ";
        // line 5
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.view"], "method", false, false, false, 5)) {
            // line 6
            yield "            <li class=\"sidebar-list\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.view"), "html", null, true);
            yield "\">";
            echo __("Schedule");
            yield "</a></li>
        ";
        }
        // line 8
        yield "
        ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["daypart.view"], "method", false, false, false, 9)) {
            // line 10
            yield "            <li class=\"sidebar-list\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.view"), "html", null, true);
            yield "\">";
            echo __("Dayparting");
            yield "</a></li>
        ";
        }
        // line 12
        yield "
        ";
        // line 13
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["campaign.view", "layout.view", "template.view", "resolution.view"]], "method", false, false, false, 13);
        // line 14
        yield "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 15
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Design");
            yield "</a></li>
            ";
            // line 16
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["campaign.view"], "method", false, false, false, 16)) {
                // line 17
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.view"), "html", null, true);
                yield "\">";
                echo __("Campaigns");
                yield "</a></li>
            ";
            }
            // line 19
            yield "
            ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 20)) {
                // line 21
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.view"), "html", null, true);
                yield "\">";
                echo __("Layouts");
                yield "</a></li>
            ";
            }
            // line 23
            yield "
            ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["template.view"], "method", false, false, false, 24)) {
                // line 25
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.view"), "html", null, true);
                yield "\">";
                echo __("Templates");
                yield "</a></li>
            ";
            }
            // line 27
            yield "
            ";
            // line 28
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["resolution.view"], "method", false, false, false, 28)) {
                // line 29
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("resolution.view"), "html", null, true);
                yield "\">";
                echo __("Resolutions");
                yield "</a></li>
            ";
            }
            // line 31
            yield "        ";
        }
        // line 32
        yield "
        ";
        // line 33
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["library.view", "playlist.view", "dataset.view", "menuBoard.view"]], "method", false, false, false, 33);
        // line 34
        yield "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 35
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Library");
            yield "</a></li>
            ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playlist.view"], "method", false, false, false, 36)) {
                // line 37
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.view"), "html", null, true);
                yield "\">";
                echo __("Playlists");
                yield "</a></li>
            ";
            }
            // line 39
            yield "
            ";
            // line 40
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.view"], "method", false, false, false, 40)) {
                // line 41
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.view"), "html", null, true);
                yield "\">";
                echo __("Media");
                yield "</a></li>
            ";
            }
            // line 43
            yield "
            ";
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["dataset.view"], "method", false, false, false, 44)) {
                // line 45
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataset.view"), "html", null, true);
                yield "\">";
                echo __("DataSets");
                yield "</a></li>
            ";
            }
            // line 47
            yield "
            ";
            // line 48
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["menuBoard.view"], "method", false, false, false, 48)) {
                // line 49
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.view"), "html", null, true);
                yield "\">";
                echo __("Menu Boards");
                yield "</a></li>
            ";
            }
            // line 51
            yield "        ";
        }
        // line 52
        yield "
        ";
        // line 53
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["displays.view", "displaygroup.view", "displayprofile.view", "playersoftware.view", "command.view"]], "method", false, false, false, 53);
        // line 54
        yield "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 55
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Displays");
            yield "</a></li>
            ";
            // line 56
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.view"], "method", false, false, false, 56)) {
                // line 57
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.view"), "html", null, true);
                yield "\">";
                echo __("Displays");
                yield "</a></li>
            ";
            }
            // line 59
            yield "
            ";
            // line 60
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displaygroup.view"], "method", false, false, false, 60)) {
                // line 61
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displaygroup.view"), "html", null, true);
                yield "\">";
                echo __("Display Groups");
                yield "</a></li>
            ";
            }
            // line 63
            yield "
            ";
            // line 64
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["display.syncView"], "method", false, false, false, 64)) {
                // line 65
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.view"), "html", null, true);
                yield "\">";
                echo __("Sync Groups");
                yield "</a></li>
            ";
            }
            // line 67
            yield "
            ";
            // line 68
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displayprofile.view"], "method", false, false, false, 68)) {
                // line 69
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayprofile.view"), "html", null, true);
                yield "\">";
                echo __("Display Settings");
                yield "</a></li>
            ";
            }
            // line 71
            yield "
            ";
            // line 72
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playersoftware.view"], "method", false, false, false, 72)) {
                // line 73
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.view"), "html", null, true);
                yield "\">";
                echo __("Player Versions");
                yield "</a></li>
            ";
            }
            // line 75
            yield "
            ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["command.view"], "method", false, false, false, 76)) {
                // line 77
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.view"), "html", null, true);
                yield "\">";
                echo __("Commands");
                yield "</a></li>
            ";
            }
            // line 79
            yield "        ";
        }
        // line 80
        yield "
        ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["users.view"], "method", false, false, false, 81) && (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isGroupAdmin", [], "method", false, false, false, 81) || CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 81)))) {
            // line 82
            yield "            ";
            $context["userMenuViewable"] = true;
            // line 83
            yield "        ";
        } else {
            // line 84
            yield "            ";
            $context["userMenuViewable"] = false;
            // line 85
            yield "        ";
        }
        // line 86
        yield "
        ";
        // line 87
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["usergroup.view", "module.view", "transition.view", "task.view"]], "method", false, false, false, 87);
        // line 88
        yield "        ";
        if (((($context["countViewable"] ?? null) > 0) || ($context["userMenuViewable"] ?? null))) {
            // line 89
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Administration");
            yield "</a></li>

            ";
            // line 91
            if (($context["userMenuViewable"] ?? null)) {
                // line 92
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.view"), "html", null, true);
                yield "\">";
                echo __("Users");
                yield "</a></li>
            ";
            }
            // line 94
            yield "
            ";
            // line 95
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["usergroup.view"], "method", false, false, false, 95)) {
                // line 96
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.view"), "html", null, true);
                yield "\">";
                echo __("User Groups");
                yield "</a></li>
            ";
            }
            // line 98
            yield "
            ";
            // line 99
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 99)) {
                // line 100
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin.view"), "html", null, true);
                yield "\">";
                echo __("Settings");
                yield "</a></li>
            ";
            }
            // line 102
            yield "
            ";
            // line 103
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 103)) {
                // line 104
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.view"), "html", null, true);
                yield "\">";
                echo __("Applications");
                yield "</a></li>
            ";
            }
            // line 106
            yield "
            ";
            // line 107
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["module.view"], "method", false, false, false, 107)) {
                // line 108
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.view"), "html", null, true);
                yield "\">";
                echo __("Modules");
                yield "</a></li>
            ";
            }
            // line 110
            yield "
            ";
            // line 111
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["transition.view"], "method", false, false, false, 111)) {
                // line 112
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.view"), "html", null, true);
                yield "\">";
                echo __("Transitions");
                yield "</a></li>
            ";
            }
            // line 114
            yield "
            ";
            // line 115
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["task.view"], "method", false, false, false, 115)) {
                // line 116
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("task.view"), "html", null, true);
                yield "\">";
                echo __("Tasks");
                yield "</a></li>
            ";
            }
            // line 118
            yield "
            ";
            // line 119
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.view"], "method", false, false, false, 119)) {
                // line 120
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.view"), "html", null, true);
                yield "\">";
                echo __("Tags");
                yield "</a></li>
            ";
            }
            // line 122
            yield "
            ";
            // line 123
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 123)) {
                // line 124
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.view"), "html", null, true);
                yield "\">";
                echo __("Folders");
                yield "</a></li>
            ";
            }
            // line 126
            yield "
            ";
            // line 127
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["font.view"], "method", false, false, false, 127)) {
                // line 128
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("font.view"), "html", null, true);
                yield "\">";
                echo __("Fonts");
                yield "</a></li>
            ";
            }
            // line 130
            yield "        ";
        }
        // line 131
        yield "

        ";
        // line 133
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["report.view", "report.scheduling", "report.saving"]], "method", false, false, false, 133);
        // line 134
        yield "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 135
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Reporting");
            yield "</a></li>

            ";
            // line 137
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["report.view"], "method", false, false, false, 137)) {
                // line 138
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("report.view"), "html", null, true);
                yield "\">";
                echo __("All Reports");
                yield "</a></li>
            ";
            }
            // line 140
            yield "
            ";
            // line 141
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["report.scheduling"], "method", false, false, false, 141)) {
                // line 142
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.view"), "html", null, true);
                yield "\">";
                echo __("Report Schedules");
                yield "</a></li>
            ";
            }
            // line 144
            yield "
            ";
            // line 145
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["report.saving"], "method", false, false, false, 145)) {
                // line 146
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("savedreport.view"), "html", null, true);
                yield "\">";
                echo __("Saved Reports");
                yield "</a></li>
            ";
            }
            // line 148
            yield "
        ";
        }
        // line 150
        yield "
        ";
        // line 151
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["log.view", "sessions.view", "auditlog.view", "fault.view"]], "method", false, false, false, 151);
        // line 152
        yield "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 153
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Advanced");
            yield "</a></li>

            ";
            // line 155
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["log.view"], "method", false, false, false, 155)) {
                // line 156
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.view"), "html", null, true);
                yield "\">";
                echo __("Log");
                yield "</a></li>
            ";
            }
            // line 158
            yield "
            ";
            // line 159
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["sessions.view"], "method", false, false, false, 159)) {
                // line 160
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("sessions.view"), "html", null, true);
                yield "\">";
                echo __("Sessions");
                yield "</a></li>
            ";
            }
            // line 162
            yield "
            ";
            // line 163
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["auditlog.view"], "method", false, false, false, 163)) {
                // line 164
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("auditlog.view"), "html", null, true);
                yield "\">";
                echo __("Audit Trail");
                yield "</a></li>
            ";
            }
            // line 166
            yield "
            ";
            // line 167
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["fault.view"], "method", false, false, false, 167)) {
                // line 168
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("fault.view"), "html", null, true);
                yield "\">";
                echo __("Report Fault");
                yield "</a></li>
            ";
            }
            // line 170
            yield "        ";
        }
        // line 171
        yield "
        ";
        // line 172
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["developer.edit"]], "method", false, false, false, 172);
        // line 173
        yield "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 174
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Developer");
            yield "</a></li>

            ";
            // line 176
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["developer.edit"], "method", false, false, false, 176)) {
                // line 177
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.view"), "html", null, true);
                yield "\">";
                echo __("Module Templates");
                yield "</a></li>
            ";
            }
            // line 179
            yield "        ";
        }
        // line 180
        yield "    </ul>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "authed-sidebar.twig";
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
        return array (  602 => 180,  599 => 179,  591 => 177,  589 => 176,  583 => 174,  580 => 173,  578 => 172,  575 => 171,  572 => 170,  564 => 168,  562 => 167,  559 => 166,  551 => 164,  549 => 163,  546 => 162,  538 => 160,  536 => 159,  533 => 158,  525 => 156,  523 => 155,  517 => 153,  514 => 152,  512 => 151,  509 => 150,  505 => 148,  497 => 146,  495 => 145,  492 => 144,  484 => 142,  482 => 141,  479 => 140,  471 => 138,  469 => 137,  463 => 135,  460 => 134,  458 => 133,  454 => 131,  451 => 130,  443 => 128,  441 => 127,  438 => 126,  430 => 124,  428 => 123,  425 => 122,  417 => 120,  415 => 119,  412 => 118,  404 => 116,  402 => 115,  399 => 114,  391 => 112,  389 => 111,  386 => 110,  378 => 108,  376 => 107,  373 => 106,  365 => 104,  363 => 103,  360 => 102,  352 => 100,  350 => 99,  347 => 98,  339 => 96,  337 => 95,  334 => 94,  326 => 92,  324 => 91,  318 => 89,  315 => 88,  313 => 87,  310 => 86,  307 => 85,  304 => 84,  301 => 83,  298 => 82,  296 => 81,  293 => 80,  290 => 79,  282 => 77,  280 => 76,  277 => 75,  269 => 73,  267 => 72,  264 => 71,  256 => 69,  254 => 68,  251 => 67,  243 => 65,  241 => 64,  238 => 63,  230 => 61,  228 => 60,  225 => 59,  217 => 57,  215 => 56,  210 => 55,  207 => 54,  205 => 53,  202 => 52,  199 => 51,  191 => 49,  189 => 48,  186 => 47,  178 => 45,  176 => 44,  173 => 43,  165 => 41,  163 => 40,  160 => 39,  152 => 37,  150 => 36,  145 => 35,  142 => 34,  140 => 33,  137 => 32,  134 => 31,  126 => 29,  124 => 28,  121 => 27,  113 => 25,  111 => 24,  108 => 23,  100 => 21,  98 => 20,  95 => 19,  87 => 17,  85 => 16,  80 => 15,  77 => 14,  75 => 13,  72 => 12,  64 => 10,  62 => 9,  59 => 8,  51 => 6,  49 => 5,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "authed-sidebar.twig", "/var/www/cms/views/authed-sidebar.twig");
    }
}
