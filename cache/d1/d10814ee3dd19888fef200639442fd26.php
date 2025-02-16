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

/* authed-topbar.twig */
class __TwigTemplate_d5f3a1e0ab48b15b14413fbba6238c93 extends Template
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
        // line 23
        yield "<ul class=\"nav navbar-nav\">
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        yield "\">";
        echo __("Dashboard");
        yield "</a></li>

    ";
        // line 26
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["schedule.view", "daypart.view"]], "method", false, false, false, 26);
        // line 27
        yield "    ";
        $context["groupElementClass"] = (((($context["countViewable"] ?? null) > 1)) ? ("dropdown-item") : ("nav-link"));
        // line 28
        yield "    ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 29
            yield "        ";
            if ((($context["countViewable"] ?? null) > 1)) {
                // line 30
                yield "        <li class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 31
                echo __("Schedule");
                yield " <span class=\"caret\"></span></a>
            <div class=\"dropdown-menu\">
        ";
            } else {
                // line 34
                yield "            <li class=\"nav-item\">
        ";
            }
            // line 36
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.view"], "method", false, false, false, 36)) {
                // line 37
                yield "                    <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.view"), "html", null, true);
                yield "\">";
                echo __("Schedule");
                yield "</a>
                ";
            }
            // line 39
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["daypart.view"], "method", false, false, false, 39)) {
                // line 40
                yield "                    <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.view"), "html", null, true);
                yield "\">";
                echo __("Dayparting");
                yield "</a>
                ";
            }
            // line 42
            yield "        ";
            if ((($context["countViewable"] ?? null) > 1)) {
                // line 43
                yield "            </div>
        ";
            }
            // line 45
            yield "        </li>
    ";
        }
        // line 47
        yield "
    ";
        // line 48
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["campaign.view", "layout.view", "template.view", "resolution.view"]], "method", false, false, false, 48);
        // line 49
        yield "    ";
        $context["groupElementClass"] = (((($context["countViewable"] ?? null) > 1)) ? ("dropdown-item") : ("nav-link"));
        // line 50
        yield "    ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 51
            yield "        ";
            if ((($context["countViewable"] ?? null) > 1)) {
                // line 52
                yield "        <li class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 53
                echo __("Design");
                yield " <span class=\"caret\"></span></a>
            <div class=\"dropdown-menu\">
        ";
            } else {
                // line 56
                yield "            <li class=\"nav-item\">
        ";
            }
            // line 58
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["campaign.view"], "method", false, false, false, 58)) {
                // line 59
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.view"), "html", null, true);
                yield "\">";
                echo __("Campaigns");
                yield "</a>
            ";
            }
            // line 61
            yield "
            ";
            // line 62
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 62)) {
                // line 63
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.view"), "html", null, true);
                yield "\">";
                echo __("Layouts");
                yield "</a>
            ";
            }
            // line 65
            yield "
            ";
            // line 66
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["template.view"], "method", false, false, false, 66)) {
                // line 67
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.view"), "html", null, true);
                yield "\">";
                echo __("Templates");
                yield "</a>
            ";
            }
            // line 69
            yield "
            ";
            // line 70
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["resolution.view"], "method", false, false, false, 70)) {
                // line 71
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("resolution.view"), "html", null, true);
                yield "\">";
                echo __("Resolutions");
                yield "</a>
            ";
            }
            // line 73
            yield "        ";
            if ((($context["countViewable"] ?? null) > 1)) {
                // line 74
                yield "            </div>
        ";
            }
            // line 76
            yield "        </li>
    ";
        }
        // line 78
        yield "
    ";
        // line 79
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["library.view", "playlist.view", "dataset.view", "menuBoard.view"]], "method", false, false, false, 79);
        // line 80
        yield "    ";
        $context["groupElementClass"] = (((($context["countViewable"] ?? null) > 1)) ? ("dropdown-item") : ("nav-link"));
        // line 81
        yield "    ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 82
            yield "        ";
            if ((($context["countViewable"] ?? null) > 1)) {
                // line 83
                yield "        <li class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 84
                echo __("Library");
                yield " <span class=\"caret\"></span></a>
            <div class=\"dropdown-menu\">
        ";
            } else {
                // line 87
                yield "            <li class=\"nav-item\">
        ";
            }
            // line 89
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playlist.view"], "method", false, false, false, 89)) {
                // line 90
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.view"), "html", null, true);
                yield "\">";
                echo __("Playlists");
                yield "</a>
            ";
            }
            // line 92
            yield "
            ";
            // line 93
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.view"], "method", false, false, false, 93)) {
                // line 94
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.view"), "html", null, true);
                yield "\">";
                echo __("Media");
                yield "</a>
            ";
            }
            // line 96
            yield "
            ";
            // line 97
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["dataset.view"], "method", false, false, false, 97)) {
                // line 98
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataset.view"), "html", null, true);
                yield "\">";
                echo __("DataSets");
                yield "</a>
            ";
            }
            // line 100
            yield "
            ";
            // line 101
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["menuBoard.view"], "method", false, false, false, 101)) {
                // line 102
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.view"), "html", null, true);
                yield "\">";
                echo __("Menu Boards");
                yield "</a>
            ";
            }
            // line 104
            yield "        ";
            if ((($context["countViewable"] ?? null) > 1)) {
                // line 105
                yield "            </div>
        ";
            }
            // line 107
            yield "        </li>
    ";
        }
        // line 109
        yield "
    ";
        // line 110
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["displays.view", "displaygroup.view", "displayprofile.view", "playersoftware.view", "command.view"]], "method", false, false, false, 110);
        // line 111
        yield "    ";
        $context["groupElementClass"] = (((($context["countViewable"] ?? null) > 1)) ? ("dropdown-item") : ("nav-link"));
        // line 112
        yield "    ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 113
            yield "        ";
            if ((($context["countViewable"] ?? null) > 1)) {
                // line 114
                yield "        <li class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 115
                echo __("Displays");
                yield " <span class=\"caret\"></span></a>
            <div class=\"dropdown-menu\">
        ";
            } else {
                // line 118
                yield "            <li class=\"nav-item\">
        ";
            }
            // line 120
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.view"], "method", false, false, false, 120)) {
                // line 121
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.view"), "html", null, true);
                yield "\">";
                echo __("Displays");
                yield "</a>
            ";
            }
            // line 123
            yield "
            ";
            // line 124
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displaygroup.view"], "method", false, false, false, 124)) {
                // line 125
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displaygroup.view"), "html", null, true);
                yield "\">";
                echo __("Display Groups");
                yield "</a>
            ";
            }
            // line 127
            yield "
            ";
            // line 128
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["display.syncView"], "method", false, false, false, 128)) {
                // line 129
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.view"), "html", null, true);
                yield "\">";
                echo __("Sync Groups");
                yield "</a>
            ";
            }
            // line 131
            yield "
            ";
            // line 132
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displayprofile.view"], "method", false, false, false, 132)) {
                // line 133
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayprofile.view"), "html", null, true);
                yield "\">";
                echo __("Display Settings");
                yield "</a>
            ";
            }
            // line 135
            yield "
            ";
            // line 136
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playersoftware.view"], "method", false, false, false, 136)) {
                // line 137
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.view"), "html", null, true);
                yield "\">";
                echo __("Player Versions");
                yield "</a>
            ";
            }
            // line 139
            yield "
            ";
            // line 140
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["command.view"], "method", false, false, false, 140)) {
                // line 141
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.view"), "html", null, true);
                yield "\">";
                echo __("Commands");
                yield "</a>
            ";
            }
            // line 143
            yield "        ";
            if ((($context["countViewable"] ?? null) > 1)) {
                // line 144
                yield "            </div>
        ";
            }
            // line 146
            yield "        </li>
    ";
        }
        // line 148
        yield "
    ";
        // line 149
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["users.view"], "method", false, false, false, 149) && (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isGroupAdmin", [], "method", false, false, false, 149) || CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 149)))) {
            // line 150
            yield "        ";
            $context["userMenuViewable"] = true;
            // line 151
            yield "    ";
        } else {
            // line 152
            yield "        ";
            $context["userMenuViewable"] = false;
            // line 153
            yield "    ";
        }
        // line 154
        yield "
    ";
        // line 155
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["usergroup.view", "module.view", "transition.view", "task.view"]], "method", false, false, false, 155);
        // line 156
        yield "    ";
        $context["groupElementClass"] = ((((($context["countViewable"] ?? null) > 1) || ((($context["countViewable"] ?? null) == 1) && ($context["userMenuViewable"] ?? null)))) ? ("dropdown-item") : ("nav-link"));
        // line 157
        yield "    ";
        if (((($context["countViewable"] ?? null) > 0) || ($context["userMenuViewable"] ?? null))) {
            // line 158
            yield "        ";
            if (((($context["countViewable"] ?? null) > 1) || ((($context["countViewable"] ?? null) == 1) && ($context["userMenuViewable"] ?? null)))) {
                // line 159
                yield "        <li class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 160
                echo __("Administration");
                yield " <span class=\"caret\"></span></a>
            <div class=\"dropdown-menu\">
        ";
            }
            // line 163
            yield "            ";
            if (($context["userMenuViewable"] ?? null)) {
                // line 164
                yield "                ";
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 165
                    yield "                <li class=\"nav-item\">
                ";
                }
                // line 167
                yield "                    <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.view"), "html", null, true);
                yield "\">";
                echo __("Users");
                yield "</a>
                ";
                // line 168
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 169
                    yield "                </li>
                ";
                }
                // line 171
                yield "            ";
            }
            // line 172
            yield "
            ";
            // line 173
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["usergroup.view"], "method", false, false, false, 173)) {
                // line 174
                yield "                ";
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 175
                    yield "                <li class=\"nav-item\">
                ";
                }
                // line 177
                yield "                    <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.view"), "html", null, true);
                yield "\">";
                echo __("User Groups");
                yield "</a>
                ";
                // line 178
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 179
                    yield "                </li>
                ";
                }
                // line 181
                yield "            ";
            }
            // line 182
            yield "
            ";
            // line 183
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 183)) {
                // line 184
                yield "                ";
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 185
                    yield "                <li class=\"nav-item\">
                ";
                }
                // line 187
                yield "                    <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin.view"), "html", null, true);
                yield "\">";
                echo __("Settings");
                yield "</a>
                ";
                // line 188
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 189
                    yield "                </li>
                ";
                }
                // line 191
                yield "            ";
            }
            // line 192
            yield "
            ";
            // line 193
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 193)) {
                // line 194
                yield "                ";
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 195
                    yield "                <li class=\"nav-item\">
                ";
                }
                // line 197
                yield "                    <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.view"), "html", null, true);
                yield "\">";
                echo __("Applications");
                yield "</a>
                ";
                // line 198
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 199
                    yield "                </li>
                ";
                }
                // line 201
                yield "            ";
            }
            // line 202
            yield "
            ";
            // line 203
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["module.view"], "method", false, false, false, 203)) {
                // line 204
                yield "                ";
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 205
                    yield "                <li class=\"nav-item\">
                ";
                }
                // line 207
                yield "                    <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.view"), "html", null, true);
                yield "\">";
                echo __("Modules");
                yield "</a>
                ";
                // line 208
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 209
                    yield "                </li>
                ";
                }
                // line 211
                yield "            ";
            }
            // line 212
            yield "
            ";
            // line 213
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["transition.view"], "method", false, false, false, 213)) {
                // line 214
                yield "                ";
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 215
                    yield "                <li class=\"nav-item\">
                ";
                }
                // line 217
                yield "                    <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.view"), "html", null, true);
                yield "\">";
                echo __("Transitions");
                yield "</a>
                ";
                // line 218
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 219
                    yield "                </li>
                ";
                }
                // line 221
                yield "            ";
            }
            // line 222
            yield "
            ";
            // line 223
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["task.view"], "method", false, false, false, 223)) {
                // line 224
                yield "                ";
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 225
                    yield "                <li class=\"nav-item\">
                ";
                }
                // line 227
                yield "                    <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("task.view"), "html", null, true);
                yield "\">";
                echo __("Tasks");
                yield "</a>
                ";
                // line 228
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 229
                    yield "                </li>
                ";
                }
                // line 231
                yield "            ";
            }
            // line 232
            yield "
            ";
            // line 233
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.view"], "method", false, false, false, 233)) {
                // line 234
                yield "                ";
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 235
                    yield "                <li class=\"nav-item\">
                ";
                }
                // line 237
                yield "                    <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.view"), "html", null, true);
                yield "\">";
                echo __("Tags");
                yield "</a>
                ";
                // line 238
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 239
                    yield "                </li>
                ";
                }
                // line 241
                yield "            ";
            }
            // line 242
            yield "
            ";
            // line 243
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 243)) {
                // line 244
                yield "                ";
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 245
                    yield "                <li class=\"nav-item\">
                ";
                }
                // line 247
                yield "                    <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.view"), "html", null, true);
                yield "\">";
                echo __("Folders");
                yield "</a>
                ";
                // line 248
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 249
                    yield "                </li>
                ";
                }
                // line 251
                yield "            ";
            }
            // line 252
            yield "
            ";
            // line 253
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["font.view"], "method", false, false, false, 253)) {
                // line 254
                yield "                ";
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 255
                    yield "                <li class=\"nav-item\">
                ";
                }
                // line 257
                yield "                    <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("font.view"), "html", null, true);
                yield "\">";
                echo __("Fonts");
                yield "</a>
                ";
                // line 258
                if ((($context["countViewable"] ?? null) == 0)) {
                    // line 259
                    yield "                </li>
                ";
                }
                // line 261
                yield "            ";
            }
            // line 262
            yield "            ";
            if (((($context["countViewable"] ?? null) > 1) || ((($context["countViewable"] ?? null) == 1) && ($context["userMenuViewable"] ?? null)))) {
                // line 263
                yield "            </div>
            ";
            }
            // line 265
            yield "        ";
            if (((($context["countViewable"] ?? null) > 1) || ((($context["countViewable"] ?? null) == 1) && ($context["userMenuViewable"] ?? null)))) {
                // line 266
                yield "        </li>
        ";
            }
            // line 268
            yield "    ";
        }
        // line 269
        yield "
    ";
        // line 270
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["report.view", "report.scheduling", "report.saving"]], "method", false, false, false, 270);
        // line 271
        yield "    ";
        $context["groupElementClass"] = (((($context["countViewable"] ?? null) > 1)) ? ("dropdown-item") : ("nav-link"));
        // line 272
        yield "    ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 273
            yield "        ";
            if ((($context["countViewable"] ?? null) > 1)) {
                // line 274
                yield "        <li class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 275
                echo __("Reporting");
                yield " <span class=\"caret\"></span></a>
            <div class=\"dropdown-menu\">
        ";
            } else {
                // line 278
                yield "            <li class=\"nav-item\">
        ";
            }
            // line 280
            yield "
            ";
            // line 281
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["report.view"], "method", false, false, false, 281)) {
                // line 282
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("report.view"), "html", null, true);
                yield "\">";
                echo __("All Reports");
                yield "</a>
            ";
            }
            // line 284
            yield "
            ";
            // line 285
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["report.scheduling"], "method", false, false, false, 285)) {
                // line 286
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.view"), "html", null, true);
                yield "\">";
                echo __("Report Schedules");
                yield "</a>
            ";
            }
            // line 288
            yield "
            ";
            // line 289
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["report.saving"], "method", false, false, false, 289)) {
                // line 290
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("savedreport.view"), "html", null, true);
                yield "\">";
                echo __("Saved Reports");
                yield "</a>
            ";
            }
            // line 292
            yield "
        ";
            // line 293
            if ((($context["countViewable"] ?? null) > 1)) {
                // line 294
                yield "            </div>
        ";
            }
            // line 296
            yield "        </li>
    ";
        }
        // line 298
        yield "
    ";
        // line 299
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["log.view", "sessions.view", "auditlog.view", "fault.view"]], "method", false, false, false, 299);
        // line 300
        yield "    ";
        $context["groupElementClass"] = (((($context["countViewable"] ?? null) > 1)) ? ("dropdown-item") : ("nav-link"));
        // line 301
        yield "    ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 302
            yield "        ";
            if ((($context["countViewable"] ?? null) > 1)) {
                // line 303
                yield "        <li class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 304
                echo __("Advanced");
                yield " <span class=\"caret\"></span></a>
            <div class=\"dropdown-menu\">
        ";
            } else {
                // line 307
                yield "            <li class=\"nav-item\">
        ";
            }
            // line 309
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["log.view"], "method", false, false, false, 309)) {
                // line 310
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.view"), "html", null, true);
                yield "\">";
                echo __("Log");
                yield "</a>
            ";
            }
            // line 312
            yield "
            ";
            // line 313
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["sessions.view"], "method", false, false, false, 313)) {
                // line 314
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("sessions.view"), "html", null, true);
                yield "\">";
                echo __("Sessions");
                yield "</a>
            ";
            }
            // line 316
            yield "
            ";
            // line 317
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["auditlog.view"], "method", false, false, false, 317)) {
                // line 318
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("auditlog.view"), "html", null, true);
                yield "\">";
                echo __("Audit Trail");
                yield "</a>
            ";
            }
            // line 320
            yield "
            ";
            // line 321
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["fault.view"], "method", false, false, false, 321)) {
                // line 322
                yield "                <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupElementClass"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("fault.view"), "html", null, true);
                yield "\">";
                echo __("Report Fault");
                yield "</a>
            ";
            }
            // line 324
            yield "        ";
            if ((($context["countViewable"] ?? null) > 1)) {
                // line 325
                yield "            </div>
        ";
            }
            // line 327
            yield "        </li>
    ";
        }
        // line 329
        yield "
    ";
        // line 330
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["developer.edit"]], "method", false, false, false, 330);
        // line 331
        yield "    ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 332
            yield "        <li class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 333
            echo __("Developer");
            yield " <span class=\"caret\"></span></a>
            <div class=\"dropdown-menu\">
            ";
            // line 335
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["developer.edit"], "method", false, false, false, 335)) {
                // line 336
                yield "                <a class=\"dropdown-item\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.view"), "html", null, true);
                yield "\">";
                echo __("Module Templates");
                yield "</a>
            ";
            }
            // line 338
            yield "            </div>
        </li>
    ";
        }
        // line 341
        yield "</ul>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "authed-topbar.twig";
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
        return array (  994 => 341,  989 => 338,  981 => 336,  979 => 335,  974 => 333,  971 => 332,  968 => 331,  966 => 330,  963 => 329,  959 => 327,  955 => 325,  952 => 324,  942 => 322,  940 => 321,  937 => 320,  927 => 318,  925 => 317,  922 => 316,  912 => 314,  910 => 313,  907 => 312,  897 => 310,  894 => 309,  890 => 307,  884 => 304,  881 => 303,  878 => 302,  875 => 301,  872 => 300,  870 => 299,  867 => 298,  863 => 296,  859 => 294,  857 => 293,  854 => 292,  844 => 290,  842 => 289,  839 => 288,  829 => 286,  827 => 285,  824 => 284,  814 => 282,  812 => 281,  809 => 280,  805 => 278,  799 => 275,  796 => 274,  793 => 273,  790 => 272,  787 => 271,  785 => 270,  782 => 269,  779 => 268,  775 => 266,  772 => 265,  768 => 263,  765 => 262,  762 => 261,  758 => 259,  756 => 258,  747 => 257,  743 => 255,  740 => 254,  738 => 253,  735 => 252,  732 => 251,  728 => 249,  726 => 248,  717 => 247,  713 => 245,  710 => 244,  708 => 243,  705 => 242,  702 => 241,  698 => 239,  696 => 238,  687 => 237,  683 => 235,  680 => 234,  678 => 233,  675 => 232,  672 => 231,  668 => 229,  666 => 228,  657 => 227,  653 => 225,  650 => 224,  648 => 223,  645 => 222,  642 => 221,  638 => 219,  636 => 218,  627 => 217,  623 => 215,  620 => 214,  618 => 213,  615 => 212,  612 => 211,  608 => 209,  606 => 208,  597 => 207,  593 => 205,  590 => 204,  588 => 203,  585 => 202,  582 => 201,  578 => 199,  576 => 198,  567 => 197,  563 => 195,  560 => 194,  558 => 193,  555 => 192,  552 => 191,  548 => 189,  546 => 188,  537 => 187,  533 => 185,  530 => 184,  528 => 183,  525 => 182,  522 => 181,  518 => 179,  516 => 178,  507 => 177,  503 => 175,  500 => 174,  498 => 173,  495 => 172,  492 => 171,  488 => 169,  486 => 168,  477 => 167,  473 => 165,  470 => 164,  467 => 163,  461 => 160,  458 => 159,  455 => 158,  452 => 157,  449 => 156,  447 => 155,  444 => 154,  441 => 153,  438 => 152,  435 => 151,  432 => 150,  430 => 149,  427 => 148,  423 => 146,  419 => 144,  416 => 143,  406 => 141,  404 => 140,  401 => 139,  391 => 137,  389 => 136,  386 => 135,  376 => 133,  374 => 132,  371 => 131,  361 => 129,  359 => 128,  356 => 127,  346 => 125,  344 => 124,  341 => 123,  331 => 121,  328 => 120,  324 => 118,  318 => 115,  315 => 114,  312 => 113,  309 => 112,  306 => 111,  304 => 110,  301 => 109,  297 => 107,  293 => 105,  290 => 104,  280 => 102,  278 => 101,  275 => 100,  265 => 98,  263 => 97,  260 => 96,  250 => 94,  248 => 93,  245 => 92,  235 => 90,  232 => 89,  228 => 87,  222 => 84,  219 => 83,  216 => 82,  213 => 81,  210 => 80,  208 => 79,  205 => 78,  201 => 76,  197 => 74,  194 => 73,  184 => 71,  182 => 70,  179 => 69,  169 => 67,  167 => 66,  164 => 65,  154 => 63,  152 => 62,  149 => 61,  139 => 59,  136 => 58,  132 => 56,  126 => 53,  123 => 52,  120 => 51,  117 => 50,  114 => 49,  112 => 48,  109 => 47,  105 => 45,  101 => 43,  98 => 42,  88 => 40,  85 => 39,  75 => 37,  72 => 36,  68 => 34,  62 => 31,  59 => 30,  56 => 29,  53 => 28,  50 => 27,  48 => 26,  41 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "authed-topbar.twig", "/var/www/cms/views/authed-topbar.twig");
    }
}
