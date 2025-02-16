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

/* media-manager-page.twig */
class __TwigTemplate_8cd846d031eddcadf375937e32a9fd7e extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "media-manager-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "media-manager-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("theme-dashboard-message.twig", "media-manager-page.twig", 27);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            yield from $__internal_compile_0->unwrap()->yield($context);
        }
        // line 28
        yield "    <div class=\"row\">
        <div class=\"col-md-6 col-12\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <div class=\"widget\">
                        <div class=\"widget-body p-3 p-xl-2\">
                            <div class=\"widget-icon green pull-left\">
                                <i class=\"fa fa-users\"></i>
                            </div>
                            <div class=\"widget-content pull-left\">
                                <div class=\"title\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["library"] ?? null), "countOf", [], "any", false, false, false, 38), "html", null, true);
        yield "</div>
                                <div class=\"comment\">";
        // line 39
        echo __("Library Count");
        yield "</div>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"widget\">
                        <div class=\"widget-body p-3 p-xl-2\">
                            <div class=\"widget-icon red pull-left\">
                                <i class=\"fa fa-tasks\"></i>
                            </div>
                            <div class=\"widget-content pull-left\">
                                <div class=\"title\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["library"] ?? null), "size", [], "any", false, false, false, 52), "html", null, true);
        yield "</div>
                                <div class=\"comment\">";
        // line 53
        echo __("Library Size");
        yield "</div>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"widget\">
                        <div class=\"widget-title\">
                            <i class=\"fa fa-tasks\"></i>
                            ";
        // line 65
        echo __("Number of media items");
        // line 66
        yield "                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"widget-body medium no-padding\">
                            <canvas id=\"libraryCountChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"widget\">
                        <div class=\"widget-title\">
                            <i class=\"fa fa-tasks\"></i>
                            ";
        // line 79
        echo __("Size of media items");
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["library"] ?? null), "typesSuffix", [], "any", false, false, false, 79), "html", null, true);
        yield "
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"widget-body medium no-padding\">
                            <canvas id=\"librarySizeChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-12\">
            ";
        // line 90
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [], "any", false, false, false, 90) == 1) && CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.modify"], "method", false, false, false, 90))) {
            // line 91
            yield "                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"widget\">
                            <div class=\"widget-body p-3 p-xl-2 widget-button XiboFormButton\" href=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.tidy.form"), "html", null, true);
            yield "\">
                                <div class=\"widget-icon red pull-left\">
                                    <i class=\"fa fa-trash\"></i>
                                </div>
                                <div class=\"widget-content pull-left\">
                                    <div class=\"title\">
                                        ";
            // line 100
            echo __("Tidy library");
            // line 101
            yield "                                    </div>
                                    <div class=\"comment\">";
            // line 102
            echo __("Run through the library and remove unused and unnecessary files");
            yield "</div>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 110
        yield "            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"widget\">
                        <div class=\"widget-title\">
                            <i class=\"fa fa-video\"></i>
                            ";
        // line 115
        echo __("Unused media");
        // line 116
        yield "                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"widget-body medium no-padding\">
                            <div class=\"table\">
                                <table id=\"datatable-unused-media\" class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 123
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 124
        echo __("Name");
        yield "</th>
                                        <th>";
        // line 125
        echo __("Type");
        yield "</th>
                                        <th>";
        // line 126
        echo __("Size");
        yield "</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"widget\">
                        <div class=\"widget-title\">
                            <i class=\"fa fa-video\"></i>
                            ";
        // line 143
        echo __("Unreleased media");
        // line 144
        yield "                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"widget-body medium no-padding\">
                            <div class=\"table\">
                                <table id=\"datatable-unreleased-media\" class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 151
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 152
        echo __("Name");
        yield "</th>
                                        <th>";
        // line 153
        echo __("Filename");
        yield "</th>
                                        <th>";
        // line 154
        echo __("Reason");
        yield "</th>
                                        <th>";
        // line 155
        echo __("Widget cache?");
        yield "</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 171
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
      const stringToColour = function(str) {
        let hash = 0;
        str.split('').forEach(char => {
          hash = char.charCodeAt(0) + ((hash << 5) - hash);
        });
        let colour = '#';
        for (let i = 0; i < 3; i++) {
          const value = (hash >> (i * 8)) & 0xff
          colour += value.toString(16).padStart(2, '0');
        }
        return colour;
      }

      \$(document).ready(function() {
        // Library chart
        // -------------
        const libraryData = ";
        // line 189
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["library"] ?? null), "types", [], "any", false, false, false, 189));
        yield ";
        let dataCount = new Array();
        let dataSize = new Array();
        let colours = new Array();
        let labels = new Array();
        \$.each(libraryData, function (i, e) {
          dataSize.push(Math.round(e.size / Math.pow(1024, ";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["library"] ?? null), "typesBase", [], "any", false, false, false, 195), "html", null, true);
        yield "), 2));
          dataCount.push(e.count);
          labels.push(e.title);
          colours.push(stringToColour(e.title));
        });
        const librarySizeChart = new Chart(\$(\"#librarySizeChart\"), {
          type: 'pie',
          data: {
            datasets: [{
              data: dataSize,
              backgroundColor: colours
            }],
            labels: labels
          },
          options: {
            maintainAspectRatio: false
          }
        });
        const libraryCountChart = new Chart(\$(\"#libraryCountChart\"), {
          type: 'pie',
          data: {
            datasets: [{
              data: dataCount,
              backgroundColor: colours
            }],
            labels: labels
          },
          options: {
            maintainAspectRatio: false
          }
        });

        // Tables
        let language = dataTablesLanguage;

        // Unused media
        // ----------------
        language.emptyTable = '";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No unused media in the Library"), "html", null, true);
        yield "';
        const dataTableUnusedMedia = \$('#datatable-unused-media').DataTable({
          language: language,
          serverSide: true,
          stateSave: true,
          responsive: true,
          stateDuration: 0,
          stateLoadCallback: dataTableStateLoadCallback,
          stateSaveCallback: dataTableStateSaveCallback,
          filter: false,
          searchDelay: 3000,
          order: [[3, 'desc']],
          ajax: {
            url: '";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        yield "',
            data: function (dataToSend) {
              dataToSend.unusedOnly = 1;
              return dataToSend;
            },
          },
          lengthChange: false,
          columns: [
            {data: 'mediaId'},
            {data: 'name'},
            {data: 'mediaType'},
            {
              data: 'fileSize',
              render: function (data, type, row) {
                if (type !== 'display') {
                  return data;
                }

                return row.fileSizeFormatted;
              }
            },
          ]
        });
        dataTableUnusedMedia.on('processing.dt', dataTableProcessing);

        // Unreleased media
        // ----------------
        language.emptyTable = '";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No unreleased media in the Library"), "html", null, true);
        yield "';
        const dataTableUnreleasedMedia = \$('#datatable-unreleased-media').DataTable({
          language: language,
          serverSide: true,
          stateSave: true,
          responsive: true,
          stateDuration: 0,
          stateLoadCallback: dataTableStateLoadCallback,
          stateSaveCallback: dataTableStateSaveCallback,
          filter: false,
          searchDelay: 3000,
          order: [[1, 'asc']],
          ajax: {
            url: '";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        yield "',
            data: function (dataToSend) {
              dataToSend.unreleasedOnly = 1;
              return dataToSend;
            },
          },
          lengthChange: false,
          columns: [
            {data: 'mediaId'},
            {data: 'name'},
            {data: 'fileName'},
            {data: 'releasedDescription'},
            {
              data: 'mediaType',
              data: function(data, type) {
                const icon = data === 'module' ? 'tick' : 'times';
                return '<span class=\"fa ' + icon + '\"></span>';
              },
            },
          ]
        });
        dataTableUnreleasedMedia.on('processing.dt', dataTableProcessing);
      });
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "media-manager-page.twig";
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
        return array (  415 => 285,  399 => 272,  369 => 245,  353 => 232,  313 => 195,  304 => 189,  283 => 172,  279 => 171,  259 => 155,  255 => 154,  251 => 153,  247 => 152,  243 => 151,  234 => 144,  232 => 143,  212 => 126,  208 => 125,  204 => 124,  200 => 123,  191 => 116,  189 => 115,  182 => 110,  171 => 102,  168 => 101,  166 => 100,  157 => 94,  152 => 91,  150 => 90,  134 => 79,  119 => 66,  117 => 65,  102 => 53,  98 => 52,  82 => 39,  78 => 38,  66 => 28,  55 => 27,  51 => 26,  46 => 23,  44 => 24,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "media-manager-page.twig", "/var/www/cms/views/media-manager-page.twig");
    }
}
