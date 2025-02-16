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

/* globalVars.twig */
class __TwigTemplate_9ea2fd9fc77bfd7a4148001ff085be54 extends Template
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
    var userPreferencesUrl = \"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.pref"), "html", null, true);
        yield "\";

    // TODO: Change this to a call to all route permissions ( something like currentUser.getRoutePermissions() )
    var userRoutePermissions = {
        tags: \"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 7), "html", null, true);
        yield "\"
    };

    var tagGetByNameUrl = \"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        yield "\";
    var tagEditMultipleUrl = \"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.editMultiple", ["type" => "[type]"]), "html", null, true);
        yield "\";
    var tagSearchUrl = \"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
        yield "\";

    var fullscreenSchedule = {
        urlForLibrarySearch: \"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        yield "?fullScreenScheduleCheck=true&types[]=image&types[]=video\",
        urlForPlaylistSearch: \"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search"), "html", null, true);
        yield "?fullScreenScheduleCheck=true\",
        urlForResolutionSearch: \"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("resolution.search"), "html", null, true);
        yield "\",
        urlForLayoutAddFullscreenSchedule: \"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.add.full.screen.schedule"), "html", null, true);
        yield "\",
    };
    var urlForLayoutSearch = \"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        yield "\";
    var calendarType = \"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "CALENDAR_TYPE", [], "any", false, false, false, 21), "html", null, true);
        yield "\";
    var language = \"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translate"] ?? null), "jsLocale", [], "any", false, false, false, 22), "html", null, true);
        yield "\";
    var timezone = \"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "defaultTimezone", [], "any", false, false, false, 23), "html", null, true);
        yield "\";
    var dateFormat = \"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_FORMAT", [], "any", false, false, false, 24), "html", null, true);
        yield "\";
    var jsDateFormat = (CALENDAR_TYPE == \"Jalali\") ? \"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_FORMAT_JALALI_JS", [], "any", false, false, false, 25), "html", null, true);
        yield "\" : \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_FORMAT_JS", [], "any", false, false, false, 25), "html", null, true);
        yield "\";
    var timeFormat = \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "TIME_FORMAT", [], "any", false, false, false, 26), "html", null, true);
        yield "\";
    var jsTimeFormat = \"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "TIME_FORMAT_JS", [], "any", false, false, false, 27), "html", null, true);
        yield "\";
    var dateOnlyFormat = \"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_ONLY_FORMAT", [], "any", false, false, false, 28), "html", null, true);
        yield "\";
    var jsDateOnlyFormat = (CALENDAR_TYPE == \"Jalali\") ? \"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_ONLY_FORMAT_JALALI_JS", [], "any", false, false, false, 29), "html", null, true);
        yield "\" : \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_ONLY_FORMAT_JS", [], "any", false, false, false, 29), "html", null, true);
        yield "\";
    var systemDateFormat = \"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "systemDateFormat", [], "any", false, false, false, 30), "html", null, true);
        yield "\";
    var systemTimeFormat = \"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "systemTimeFormat", [], "any", false, false, false, 31), "html", null, true);
        yield "\";
    var clockUrl = \"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("clock"), "html", null, true);
        yield "\";
    var calendarLanguage = \"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translate"] ?? null), "jsShortLocale", [], "any", false, false, false, 33), "html", null, true);
        yield "\";
    var pingUrl = \"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("ping"), "html", null, true);
        yield "\";
    var foldersUrl = \"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search"), "html", null, true);
        yield "\";
    var permissionsUrl = \"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.set.permissions.multi", ["entity" => ":entity"]), "html", null, true);
        yield "\";
    var addMediaThumbnailUrl = \"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.thumbnail.add"), "html", null, true);
        yield "\";
    var revokeApplicationAccess = \"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.revoke", ["id" => ":id", "userId" => ":userId"]), "html", null, true);
        yield "\";
    var getFontsUrl = \"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("font.search"), "html", null, true);
        yield "\";
    var libraryFontCSS = \"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.font.css"), "html", null, true);
        yield "\";
    var imageDownloadUrl = \"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
        yield "?preview=1\";
    var commandSearchUrl = \"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.search"), "html", null, true);
        yield "\";

    var dataTablesTemplate = \"<'row'<'dataTables_folder col-sm-12 col-lg-5'><'col-sm-12 col-lg-7 text-right'<'d-inline-block mr-2'l><'dataTables_buttons d-inline-block'>>>\" +
        \"<'row'<'col-sm-12'tr>>\" +
        \"<'row'<'col-sm-12 col-lg-5'i><'col-lg-7 col-sm-12'p>>\";

    // User preference regarding Folder tree state
    var rememberFolderTreeStateGlobally = ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["rememberFolderTreeStateGlobally", "1"], "method", false, false, false, 49), "html", null, true);
        yield "
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "globalVars.twig";
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
        return array (  189 => 49,  179 => 42,  175 => 41,  171 => 40,  167 => 39,  163 => 38,  159 => 37,  155 => 36,  151 => 35,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  64 => 12,  60 => 11,  56 => 10,  50 => 7,  43 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "globalVars.twig", "/var/www/cms/views/globalVars.twig");
    }
}
