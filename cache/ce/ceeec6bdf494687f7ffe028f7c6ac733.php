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

/* welcome-page.twig */
class __TwigTemplate_341f4a68c64565a562e8f0b32f47e3fc extends Template
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
        // line 23
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("authed.twig", "welcome-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Welcome"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 27
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    <div id=\"top\" class=\"welcome-page flex-column\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 28), "html", null, true);
        yield "theme/default/img/vector-bg.png');\">
        <div class=\"container-fluid\" style=\"max-width: 1500px;\">
            <div class=\"welcome-header\">
                <div class=\"header-text-content\">
                    ";
        // line 32
        $context["productName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_title"], "method", false, false, false, 32);
        // line 33
        yield "                    <h2>";
        /* xgettext:no-php-format */        echo strtr(__("Welcome to the %productName% CMS"), array("%productName%" => ($context["productName"] ?? null), ));
        yield "</h2>
                    <p>";
        // line 34
        echo __("The Content Management System (CMS) lets you create, manage, and update content. 
                        You can upload images and videos, design layouts, schedule content timing and location, 
                        and control the whole display network.");
        // line 36
        yield "</p>
                    <div class=\"d-flex\" style=\"column-gap: 8px;\">
                        <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["helpService"] ?? null), "getLandingPage", [], "method", false, false, false, 38), "html", null, true);
        yield "\" type=\"button\" class=\"btn-rounded btn-orange\">Documentation</a>
                        <a href=\"https://sstorage.vn/\" type=\"button\" class=\"btn-rounded btn-outlined\">Training</a>
                    </div>
                </div>
                <div class=\"header-image-box\">
                    <img class=\"onboarding-welcome-image\" src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 43), "html", null, true);
        yield "theme/default/img/onboarding.png\" alt=\"Welcome Image\">
                </div>
            </div>
            <div class=\"onboarding-cards-container\">
                <img class=\"line-curve\" src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 47), "html", null, true);
        yield "theme/default/img/line-curve-vector.svg\" alt=\"Welcome Image\">
            </div>
            <div class=\"d-flex flex-column service-card-container\" style=\"row-gap: 40px; margin-top: 80px;\">
                ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.view"], "method", false, false, false, 50)) {
            // line 51
            yield "                    <div class=\"displays-enabled\"></div>
                ";
        }
        // line 53
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.view"], "method", false, false, false, 53) || CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 53))) {
            // line 54
            yield "                    <div class=\"library-layout-enabled d-flex flex-column\" style=\"row-gap: 40px;\"></div>
                ";
        }
        // line 56
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.view"], "method", false, false, false, 56)) {
            // line 57
            yield "                    <div class=\"schedule-enabled\"></div>
                ";
        }
        // line 59
        yield "            </div>
            <div class=\"others-card-container\">
            </div>
        </div>
        <a class=\"scroll-up\" href=\"#top\">
            <img style=\"height:30px; width: 30px;\" src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 64), "html", null, true);
        yield "theme/default/img/onboarding/back-to-top-icon.svg\" alt=\"Welcome Image\">
        </a>
    </div>
";
        return; yield '';
    }

    // line 69
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        yield "    ";
        // line 71
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\" defer>
        var isXiboThemed = '";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["app_name"], "method", false, false, false, 72), "html", null, true);
        yield "' === 'Xibo';
        var isSuperAdmin ='";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 73), "html", null, true);
        yield "';

        var onboardingCard = [
            {
                title: '";
        // line 77
        echo __("Displays");
        yield "',
                link: 'displays',
                iconURL: '";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 79), "html", null, true);
        yield "theme/default/img/onboarding/displays-icon.svg',
            },
            {
                title: '";
        // line 82
        echo __("Existing Content");
        yield "',
                link: 'existing-content',
                iconURL: '";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 84), "html", null, true);
        yield "theme/default/img/onboarding/existing-content-icon.svg',
            },
            {
                title: '";
        // line 87
        echo __("Playlists");
        yield "',
                link: 'playlists',
                iconURL: '";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 89), "html", null, true);
        yield "theme/default/img/onboarding/playlist-icon.svg',
            },
            {
                title: '";
        // line 92
        echo __("Create Content");
        yield "',
                link: 'create-content',
                iconURL: '";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 94), "html", null, true);
        yield "theme/default/img/onboarding/create-content-icon.svg',
            },
            {
                title: '";
        // line 97
        echo __("Schedule");
        yield "',
                link: 'schedule',
                iconURL: '";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 99), "html", null, true);
        yield "theme/default/img/onboarding/schedule-icon.svg',
            },
        ];

        var serviceCards = [
            {
                title: '";
        // line 105
        echo __("Displays");
        yield "',
                text: 'Get started by installing one of our Players and entering the pairing code into the <a class=\"text-link\">Displays page</a> so that you can show your content. If you don’t have a device to use as a Player you can preview and test scheduling in your web browser.',
                firstLink: '";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.view"), "html", null, true);
        yield "',
                secondLink: '";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["helpService"] ?? null), "getLandingPage", [], "any", false, false, false, 108), "html", null, true);
        yield "displays.html',
                imageUrl: '";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 109), "html", null, true);
        yield "theme/default/img/onboarding/displays.png',
                serviceId: 'displays',
                featureFlag: \"displays.view\"
            },
            {
                title: '";
        // line 114
        echo __("Existing Content");
        yield "',
                text: 'Do you already have content ready to show? Get started showing that in 2 easy steps. Upload any existing full-screen images or videos to the <a class=\"text-link\">Media Library</a>, and then schedule those to be shown when you want on your display from the <a class=\"text-link\">Schedule page</a>.',
                firstLink: '";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.view"), "html", null, true);
        yield "',
                secondLink: '";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.view"), "html", null, true);
        yield "',
                otherLink: '";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["helpService"] ?? null), "getLandingPage", [], "any", false, false, false, 118), "html", null, true);
        yield "media_library.html',
                imageUrl: '";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 119), "html", null, true);
        yield "theme/default/img/onboarding/existing-content.png',
                serviceId: 'existing-content',
                featureFlag: [\"library.view\", \"layout.view\"],
                showLink: true
            },
            {
                title: '";
        // line 125
        echo __("Playlists");
        yield "',
                text: 'If you’ve got lots of images or videos to show, then put them into a Playlist and then schedule the Playlist on your display for easier management.',
                firstLink: '";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.view"), "html", null, true);
        yield "',
                secondLink: '";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["helpService"] ?? null), "getLandingPage", [], "any", false, false, false, 128), "html", null, true);
        yield "media_playlists.html',    
                imageUrl: '";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 129), "html", null, true);
        yield "theme/default/img/onboarding/playlists.png',
                serviceId: 'playlists',
                featureFlag: [\"library.view\", \"layout.view\"]
            },
            {
                title: '";
        // line 134
        echo __("Create Content");
        yield "',
                text: 'If you need to create more complex content, the Layout Editor is there to help you create something stunning. There are pre-designed templates that you can work from, or you can create something from scratch.',
                firstLink: '";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.view"), "html", null, true);
        yield "',
                secondLink: '";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["helpService"] ?? null), "getLandingPage", [], "any", false, false, false, 137), "html", null, true);
        yield "layouts_editor.html',
                imageUrl: '";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 138), "html", null, true);
        yield "theme/default/img/onboarding/create-content.png',
                serviceId: 'create-content',
                featureFlag: [\"library.view\", \"layout.view\"]
            },
            {
                title: '";
        // line 143
        echo __("Schedule");
        yield "',
                text: 'You can mix and match between scheduling media items, layouts, and campaigns as you want. If you schedule multiple things at the same time, they’ll be shown one after the other.',
                firstLink: '";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.view"), "html", null, true);
        yield "',
                secondLink: '";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["helpService"] ?? null), "getLandingPage", [], "any", false, false, false, 146), "html", null, true);
        yield "scheduling_events.html',
                imageUrl: '";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 147), "html", null, true);
        yield "theme/default/img/onboarding/schedule.png',
                serviceId: 'schedule',
                featureFlag: \"schedule.view\"
            }
        ];

        var othersCards = [
            {
                title: '";
        // line 155
        echo __("Documentation");
        yield "',
                text: '";
        // line 156
        echo __("Our documentation is there to help you at every turn. It’s updated regularly to reflect changes and additions to the platform, and so it’s a valuable reference tool for all users.");
        yield "',
                links: `
                        <a href=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["helpService"] ?? null), "getLandingPage", [], "method", false, false, false, 158), "html", null, true);
        yield "\" target=\"_blank\">";
        echo __("User Manual");
        yield "</a>
                        \${isXiboThemed && isSuperAdmin ? 
                        `<a href=\"https://xibosignage.com/docs/setup\" target=\"_blank\">";
        // line 160
        echo __("Admin");
        yield "</a>
                         <a href=\"https://xibosignage.com/docs/developer\" target=\"_blank\">";
        // line 161
        echo __("Developer");
        yield "</a>` : ''
                        }`,
                iconName: \"documentation\"
            },
        ];

        if (isXiboThemed) {
            othersCards.push({
                title: '";
        // line 169
        echo __("Training");
        yield "',
                text: '";
        // line 170
        echo __("Self-paced online training videos designed to get you up and running with Xibo in no time.");
        yield "',
                links: `<a href=\"https://xibosignage.com/training\" target=\"_blank\">";
        // line 171
        echo __("New User Training");
        yield "</a>`,
                iconName: \"training\"
            });
        }

        othersCards.push({
            title: '";
        // line 177
        echo __("Help");
        yield "',
            text: '";
        // line 178
        echo __("We are here to help! All the support you’re looking for, at your fingertips.");
        yield "',
            links: isXiboThemed ? `
                <a href=\"https://xibosignage.com/install-upgrade#install\" target=\"_blank\">";
        // line 180
        echo __("Help Centre");
        yield "</a>
                <a href=\"https://community.xibo.org.uk\" target=\"_blank\">";
        // line 181
        echo __("Community");
        yield "</a>
            ` : '',
            iconName: \"help\"
        });
    </script>

    ";
        // line 188
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 188), "html", null, true);
        yield "dist/pages/welcome-page.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "welcome-page.twig";
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
        return array (  405 => 188,  396 => 181,  392 => 180,  387 => 178,  383 => 177,  374 => 171,  370 => 170,  366 => 169,  355 => 161,  351 => 160,  344 => 158,  339 => 156,  335 => 155,  324 => 147,  320 => 146,  316 => 145,  311 => 143,  303 => 138,  299 => 137,  295 => 136,  290 => 134,  282 => 129,  278 => 128,  274 => 127,  269 => 125,  260 => 119,  256 => 118,  252 => 117,  248 => 116,  243 => 114,  235 => 109,  231 => 108,  227 => 107,  222 => 105,  213 => 99,  208 => 97,  202 => 94,  197 => 92,  191 => 89,  186 => 87,  180 => 84,  175 => 82,  169 => 79,  164 => 77,  157 => 73,  153 => 72,  148 => 71,  146 => 70,  142 => 69,  133 => 64,  126 => 59,  122 => 57,  119 => 56,  115 => 54,  112 => 53,  108 => 51,  106 => 50,  100 => 47,  93 => 43,  85 => 38,  81 => 36,  77 => 34,  72 => 33,  70 => 32,  62 => 28,  58 => 27,  49 => 25,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome-page.twig", "/var/www/cms/views/welcome-page.twig");
    }
}
