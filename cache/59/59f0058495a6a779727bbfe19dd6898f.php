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

/* dashboard-status-page.twig */
class __TwigTemplate_aec9fb298798b0aa3c03c4b086e744af extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "dashboard-status-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "dashboard-status-page.twig", 23);
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
            $__internal_compile_0 =             $this->loadTemplate("theme-dashboard-message.twig", "dashboard-status-page.twig", 27);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            yield from $__internal_compile_0->unwrap()->yield($context);
        }
        // line 28
        yield "    <div class=\"row\">
        <div class=\"col-xl-3 col-md-6 col-12\">
            <div class=\"widget\">
                <div class=\"widget-body p-3 p-xl-2\">
                    <div class=\"widget-icon orange pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title displays-count\">0</div>
                        <div class=\"comment displays-comment\" data-title=\"";
        // line 37
        echo __("Display");
        yield "\" data-title-plural=\"";
        echo __("Displays");
        yield "\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6 col-12\">
            <div class=\"widget\">
                <div class=\"widget-body p-3 p-xl-2\">
                    <div class=\"widget-icon red pull-left\">
                        <i class=\"fa fa-tasks\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["librarySize"] ?? null), "html", null, true);
        yield "</div>
                        <div class=\"comment\">";
        // line 51
        echo __("Library Size");
        yield "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6 col-12\">
            <div class=\"widget\">
                <div class=\"widget-body p-3 p-xl-2\">
                    <div class=\"widget-icon green pull-left\">
                        <i class=\"fa fa-users\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["countUsers"] ?? null), "html", null, true);
        yield "</div>
                        <div class=\"comment\">";
        // line 65
        if ((($context["countUsers"] ?? null) == 1)) {
            echo __("User");
        } else {
            echo __("Users");
        }
        yield "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6 col-12\">
            <div class=\"widget\">
                <div class=\"widget-body p-3 p-xl-2\">
                    <div class=\"widget-icon blue pull-left\">
                        <i class=\"fa fa-cogs\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        ";
        // line 78
        if ((($context["embeddedWidget"] ?? null) != "")) {
            // line 79
            yield "                            ";
            yield ($context["embeddedWidget"] ?? null);
            yield "
                        ";
        } else {
            // line 81
            yield "                            <div class=\"title\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nowShowing"] ?? null), "html", null, true);
            yield "</div>
                            <div class=\"comment\">";
            // line 82
            echo __("Now Showing");
            yield "</div>
                        ";
        }
        // line 84
        yield "                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-cloud-download\"></i>
                    ";
        // line 95
        if ((($context["xmdsLimit"] ?? null) != "")) {
            // line 96
            yield "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Bandwidth Usage. Limit %xmdsLimit%"), array("%xmdsLimit%" => ($context["xmdsLimit"] ?? null), ));
            // line 97
            yield "                    ";
        } else {
            // line 98
            yield "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Bandwidth Usage (%bandwidthSuffix%)"), array("%bandwidthSuffix%" => ($context["bandwidthSuffix"] ?? null), ));
            // line 99
            yield "                    ";
        }
        // line 100
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.reporting"], "method", false, false, false, 100)) {
            // line 101
            yield "                    <a class=\"pull-right\" href=\"/report/form/bandwidth\">";
            echo __("More Statistics");
            yield "</a>
                    ";
        }
        // line 103
        yield "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"bandwidthChart\" style=\"clear:both;\" height=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-tasks\"></i>
                    ";
        // line 114
        if ((($context["libraryLimitSet"] ?? null) != "")) {
            // line 115
            yield "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Library Usage. Limit %libraryLimit%"), array("%libraryLimit%" => ($context["libraryLimit"] ?? null), ));
            // line 116
            yield "                    ";
        } else {
            // line 117
            yield "                        ";
            echo __("Library Usage");
            // line 118
            yield "                    ";
        }
        // line 119
        yield "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"libraryChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    ";
        // line 132
        echo __("Display Activity");
        // line 133
        yield "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <div class=\"table-responsive\">
                        <table id=\"displays\" class=\"table\">
                            <thead>
                            <tr>
                                <th>";
        // line 140
        echo __("Display");
        yield "</th>
                                <th>";
        // line 141
        echo __("Logged In");
        yield "</th>
                                <th>";
        // line 142
        echo __("Authorised");
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
        <div class=\"col-lg-6\">
            <div class=\"widget news-widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-book\"></i>
                    ";
        // line 157
        echo __("Latest News");
        // line 158
        yield "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium\">
                    ";
        // line 161
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["latestNews"] ?? null)) > 0)) {
            // line 162
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["latestNews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 163
                yield "                            <div class=\"article\">
                                <h4 class=\"article_title\">";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, false, 164), "html", null, true);
                yield " <small class=\"article_date\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "date", [], "any", false, false, false, 164), "html", null, true);
                yield "</small></h4>
                                <p>";
                // line 165
                yield CoreExtension::getAttribute($this->env, $this->source, $context["news"], "description", [], "any", false, false, false, 165);
                yield " ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["news"], "link", [], "any", false, false, false, 165)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "link", [], "any", false, false, false, 165), "html", null, true);
                    yield "\" title=\"Read\" target=\"_blank\">";
                    echo __("Full Article");
                    yield "</a>.";
                }
                yield "</p>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            yield "                    ";
        }
        // line 169
        yield "                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    ";
        // line 179
        echo __("Display Status");
        // line 180
        yield "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\" style=\"overflow: hidden;\">
                    <div style=\"text-align: center; height: 10px; margin-bottom: 5px\"><span>";
        // line 183
        echo __("Click on the chart for a breakdown");
        yield "</span></div>
                    <div style=\"position: relative; height: 235px\">
                        <canvas id=\"displayStatusChart\" style=\"clear:both;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-cloud-download\"></i>
                    ";
        // line 194
        echo __("Display Content Status");
        // line 195
        yield "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\" style=\"overflow: hidden;\">
                    <div style=\"text-align: center; height: 10px; margin-bottom: 5px\"><span>";
        // line 198
        echo __("Click on the chart for a breakdown");
        yield "</span></div>
                    <div style=\"position: relative; height: 235px\">
                        <canvas id=\"displayContentChart\" style=\"clear:both;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row d-none\" id=\"displayGroupStatusChartRow\">

        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    <span id=\"dGStatusTitle\">";
        // line 213
        echo __("Display Groups Status");
        yield "</span>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\" style=\"overflow: hidden;\">
                    <div style=\"text-align: center; height: 10px; margin-bottom: 5px\"><span>";
        // line 217
        echo __("Click on the chart to view Display information");
        yield "</span></div>
                    <div style=\"position: relative; height: 235px;\">
                        <canvas id=\"displayGroupStatusChart\" style=\"clear:both;\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    <span id=\"dGContentTitle\"> ";
        // line 229
        echo __("Display Groups Content Status");
        yield "</span>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\" style=\"overflow: hidden;\">
                    <div style=\"text-align: center; height: 10px; margin-bottom: 5px\"><span>";
        // line 233
        echo __("Click on the chart to view Display information");
        yield "</span></div>
                    <div style=\"position: relative; height: 235px\">
                        <canvas id=\"displayGroupContentStatusChart\" style=\"clear:both;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"widget d-none\" id=\"displaysGridTable\">
        <div class=\"widget-title\">";
        // line 243
        echo __("Displays");
        // line 244
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.view"], "method", false, false, false, 244)) {
            // line 245
            yield "                <a class=\"pull-right\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.view"), "html", null, true);
            yield "\">";
            echo __("Displays Page");
            yield "</a>
            ";
        }
        // line 247
        yield "        </div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"displayGridView\">
                <div class=\"XiboFilter card mb-3 bg-light d-none\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline d-block\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"filter-general\">
                                    ";
        // line 255
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["displayGroupId"], 255, $context, $this->getSourceContext());
        yield "
                                    ";
        // line 256
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["mediaInventoryStatus"], 256, $context, $this->getSourceContext());
        yield "
                                    ";
        // line 257
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["loggedIn"], 257, $context, $this->getSourceContext());
        yield "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"displaysGrid\" class=\"table table-striped\" data-state-preference-name=\"statusDashboardDisplays\" style=\"width: 100%;\">
                        <thead>
                        <tr>
                            <th>";
        // line 267
        echo __("ID");
        yield "</th>
                            <th>";
        // line 268
        echo __("Display");
        yield "</th>
                            <th>";
        // line 269
        echo __("Status");
        yield "</th>
                            <th>";
        // line 270
        echo __("Authorised?");
        yield "</th>
                            <th>";
        // line 271
        echo __("Current Layout");
        yield "</th>
                            <th>";
        // line 272
        echo __("Storage Available");
        yield "</th>
                            <th>";
        // line 273
        echo __("Storage Total");
        yield "</th>
                            <th>";
        // line 274
        echo __("Storage Free %");
        yield "</th>
                            <th>";
        // line 275
        echo __("Description");
        yield "</th><th>";
        echo __("Orientation");
        yield "</th>
                            <th>";
        // line 276
        echo __("Resolution");
        yield "</th>
                            ";
        // line 277
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 277)) {
            yield "<th>";
            echo __("Tags");
            yield "</th>";
        }
        // line 278
        yield "                            <th>";
        echo __("Default Layout");
        yield "</th>
                            <th>";
        // line 279
        echo __("Interleave Default");
        yield "</th>
                            <th>";
        // line 280
        echo __("Email Alert");
        yield "</th>
                            <th>";
        // line 281
        echo __("Logged In");
        yield "</th>
                            <th>";
        // line 282
        echo __("Last Accessed");
        yield "</th>
                            <th>";
        // line 283
        echo __("Display Profile");
        yield "</th>
                            <th>";
        // line 284
        echo __("Version");
        yield "</th>
                            <th>";
        // line 285
        echo __("Device Name");
        yield "</th>
                            <th>";
        // line 286
        echo __("IP Address");
        yield "</th>
                            <th>";
        // line 287
        echo __("Mac Address");
        yield "</th>
                            <th>";
        // line 288
        echo __("Timezone");
        yield "</th>
                            <th>";
        // line 289
        echo __("Latitude");
        yield "</th>
                            <th>";
        // line 290
        echo __("Longitude");
        yield "</th>
                            <th>";
        // line 291
        echo __("Screen shot?");
        yield "</th>
                            <th>";
        // line 292
        echo __("Thumbnail");
        yield "</th>
                            <th>";
        // line 293
        echo __("CMS Transfer?");
        yield "</th>
                            <th>";
        // line 294
        echo __("Bandwidth Limit");
        yield "</th>
                            <th>";
        // line 295
        echo __("Last Command");
        yield "</th>
                            <th>";
        // line 296
        echo __("XMR Registered");
        yield "</th>
                            <th>";
        // line 297
        echo __("Commercial Licence");
        yield "</th>
                            <th>";
        // line 298
        echo __("Remote");
        yield "</th>
                            <th>";
        // line 299
        echo __("Created Date");
        yield "</th>
                            <th>";
        // line 300
        echo __("Modified Date");
        yield "</th>
                            <th>";
        // line 301
        echo __("Faults?");
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
";
        return; yield '';
    }

    // line 314
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 315
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

        var displayGroupStatusChart = null;
        var displayGroupContentStatusChart = null;

        var displayGroupId = null;
        var loggedInStatus = null;
        var mediaInventoryStatus = null;

        var displayGroupIdsContent = [];
        var displayGroupIdsStatus = [];
        var displayGridTable = null

        // Create our chart
        var bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
            type: \"bar\",
            data: ";
        // line 343
        yield ($context["bandwidthWidget"] ?? null);
        yield ",
            options: {
                scales: {
                    xAxes: [{
                        stacked: ";
        // line 347
        if (($context["xmdsLimit"] ?? null)) {
            yield "true";
        } else {
            yield "false";
        }
        // line 348
        yield "                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: \"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bandwidthSuffix"] ?? null), "html", null, true);
        yield "\",
                        },
                        stacked: ";
        // line 354
        if (($context["xmdsLimit"] ?? null)) {
            yield "true";
        } else {
            yield "false";
        }
        // line 355
        yield "                    }]
                },
                legend: {
                    display: false
                },
                maintainAspectRatio: false,
            }
        });

        var libraryData = ";
        // line 364
        yield ($context["libraryWidgetData"] ?? null);
        yield ";
        const libraryLabels = ";
        // line 365
        yield ($context["libraryWidgetLabels"] ?? null);
        yield ";
        var colours = new Array();
        for (var i = 0; i < libraryData.length; i++) {
          colours.push(stringToColour(libraryLabels[i]));
        }
        var libraryChart = new Chart(\$(\"#libraryChart\"), {
            type: 'pie',
            data: {
                datasets: [{
                    data: libraryData,
                    backgroundColor: colours
                }],
                labels: ";
        // line 377
        yield ($context["libraryWidgetLabels"] ?? null);
        yield "
            },
            options: {
                maintainAspectRatio: false
            }
        });

        \$('.article_date').each(function(index, element) {
          // Replace the ISO date with a nice formatted date \"for humans\"
          const date = \$(element).html();
          if (date) {
            \$(element).html(moment(date, systemDateFormat).fromNow());
          }
        });

        var table = \$(\"#displays\").DataTable({
            \"language\": dataTablesLanguage,
            serverSide: true,
            stateSave: true,
            responsive: true,
            stateDuration: 0,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            filter: false,
            searchDelay: 3000,
            order: [[0, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("statusdashboard.displays"), "html", null, true);
        yield "\",
                \"data\": function (dataToSend) {
                    //make a new object so as not to destroy the input.
                    var data = {};
                    data.draw = dataToSend.draw;
                    data.length = dataToSend.length;
                    data.start = dataToSend.start;
                    data.order = dataToSend.order;
                    data.columns = [];

                    \$.each(dataToSend.columns, function (index, e) {
                        var col = {};
                        col.data = e.data;
                        if (e.name != null && e.name !== \"\")
                            col.name = e.name;
                        data.columns.push(col);
                    });

                    \$.extend(data, \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());

                    return data;
                }
            },
            createdRow: function (row, data, index) {
                if (data.mediaInventoryStatus === 1) {
                    \$(row).addClass('table-success');
                } else if (data.mediaInventoryStatus === 1) {
                    \$(row).addClass('table-danger');
                } else {
                    \$(row).addClass('table-warning');
                }
            },
            lengthChange: false,
            \"columns\": [
                {\"data\": \"display\"},
                {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn},
                {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn}
            ]
        });

        table.on('processing.dt', dataTableProcessing);
        table.on('draw', function(e, settings) {
            var \$displaysComment = \$(\".displays-comment\");
            var total = table.page.info().recordsTotal;
            \$(\".displays-count\").html(total);
            \$displaysComment.html((total > 0) ? \$displaysComment.data().titlePlural : \$displaysComment.data().title)
        });

        var displayData ";
        // line 452
        if (($context["displayStatus"] ?? null)) {
            yield "= ";
            yield ($context["displayStatus"] ?? null);
        }
        yield ";
        var displayStatusChart = new Chart(\$(\"#displayStatusChart\"), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: displayData,
                    backgroundColor: [\"rgb(0,255,0)\", \"rgb(255,0,0)\"]
                }],
                labels: [translations.online, translations.offline]
            },
            options: {
                maintainAspectRatio: false
            }
        });

        var displayMediaStatusData ";
        // line 467
        if (($context["displayMediaStatus"] ?? null)) {
            yield "= ";
            yield ($context["displayMediaStatus"] ?? null);
        }
        yield ";

        var displayContentChart = new Chart(\$(\"#displayContentChart\"), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: displayMediaStatusData,
                    backgroundColor: [\"rgb(0,255,0)\", \"rgb(255,0,0)\"]
                }],
                labels: [translations.upToDate, translations.notUpToDate]
            },
            options: {
                maintainAspectRatio: false
            }
        });

        \$(\"#displayStatusChart\").click(function(evt){
                var activePoints = displayStatusChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    var label = chartData.labels[index];

                    if (label == translations.online) {
                        loggedInStatus = 1;
                        \$('#dGStatusTitle').css('color', 'rgb(0,255,0)')
                    } else {
                        loggedInStatus = 0;
                        \$('#dGStatusTitle').css('color', 'rgb(255,0,0)')
                    }

                    if (displayGroupStatusChart !== undefined && displayGroupStatusChart !== null) {
                        displayGroupStatusChart.destroy();
                    }

                    \$.ajax({
                        type: \"get\",
                        url: \"";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("statusdashboard.displayGroups"), "html", null, true);
        yield "\",
                        data: {
                            status: label
                        },
                        success: function (result) {
                            if (result.success === true) {

                                var displayGroupNames = JSON.parse(result.data.displayGroupNames);
                                var displaysAssigned = JSON.parse(result.data.displayGroupMembers);
                                displayGroupIdsStatus = JSON.parse(result.data.displayGroupIds);

                                var coloursDG = [];

                                for(var i = 0; i < displayGroupNames.length; i++) {
                                    coloursDG.push(\$c.rand());
                                }

                                displayGroupStatusChart = new Chart(\$(\"#displayGroupStatusChart\"), {
                                    type: 'doughnut',
                                    data: {
                                        datasets: [{
                                            data: displaysAssigned,
                                            backgroundColor: coloursDG
                                        }],
                                        labels: displayGroupNames
                                    },
                                    options: {
                                        maintainAspectRatio: false,
                                    }
                                });

                                \$(\"#displayGroupStatusChartRow\").removeClass('d-none');
                            }
                        }
                    });
                }
            }
        );

        \$(\"#displayContentChart\").click(function(evt){
                var activePoints = displayContentChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    var label = chartData.labels[index];

                    if (label == translations.upToDate) {
                        mediaInventoryStatus = 1;
                        \$('#dGContentTitle').css('color', 'rgb(0,255,0)')
                    } else {
                        mediaInventoryStatus = -1;
                        \$('#dGContentTitle').css('color', 'rgb(255,0,0)')
                    }

                    if (displayGroupContentStatusChart !== undefined && displayGroupContentStatusChart !== null) {
                        displayGroupContentStatusChart.destroy();
                    }

                    \$.ajax({
                        type: \"get\",
                        url: \"";
        // line 568
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("statusdashboard.displayGroups"), "html", null, true);
        yield "\",
                        data: {
                            inventoryStatus: label
                        },
                        success: function (result) {
                            if (result.success === true) {

                                var displayGroupNames = JSON.parse(result.data.displayGroupNames);
                                var displaysAssigned = JSON.parse(result.data.displayGroupMembers);
                                displayGroupIdsContent = JSON.parse(result.data.displayGroupIds);

                                var coloursDG = [];

                                for(var i = 0; i < displayGroupNames.length; i++) {
                                    coloursDG.push(\$c.rand());
                                }

                                displayGroupContentStatusChart = new Chart(\$(\"#displayGroupContentStatusChart\"), {
                                    type: 'doughnut',
                                    data: {
                                        datasets: [{
                                            data: displaysAssigned,
                                            backgroundColor: coloursDG
                                        }],
                                        labels: displayGroupNames
                                    },
                                    options: {
                                        maintainAspectRatio: false
                                    }
                                });

                                \$(\"#displayGroupStatusChartRow\").removeClass('d-none');
                            }
                        }
                    });
                }
            }
        );

        \$(\"#displayGroupStatusChart\").click(function(evt) {
                var activePoints = displayGroupStatusChart.getElementsAtEvent(evt);

                \$('#displayGroupId').val(\"\");
                \$('#mediaInventoryStatus').val(\"\");
                \$('#loggedIn').val(\"\");
                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    displayGroupId = displayGroupIdsStatus[index];

                    \$('#displayGroupId').val(displayGroupId);
                    \$('#loggedIn').val(loggedInStatus);
                    handleDisplaysGrid();

                    \$(\"#displaysGridTable\").removeClass('d-none');
                }
            }
        );

        \$(\"#displayGroupContentStatusChart\").click(function(evt){
                var activePoints = displayGroupContentStatusChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    \$('#displayGroupId').val(\"\");
                    \$('#mediaInventoryStatus').val(\"\");
                    \$('#loggedIn').val(\"\");

                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    displayGroupId = displayGroupIdsContent[index];

                    \$('#displayGroupId').val(displayGroupId);
                    \$('#mediaInventoryStatus').val(mediaInventoryStatus);
                    handleDisplaysGrid();

                    \$(\"#displaysGridTable\").removeClass('d-none');
                }
            }
        );

        function handleDisplaysGrid() {
            if (displayGridTable != null) {
                displayGridTable.ajax.reload();
            } else {
                displayGridTable = \$(\"#displaysGrid\").DataTable({
                    \"language\": dataTablesLanguage,
                    dom: dataTablesTemplate,
                    serverSide: true,
                    stateSave: true,
                    stateDuration: 0,
                    stateLoadCallback: dataTableStateLoadCallback,
                    stateSaveCallback: dataTableStateSaveCallback,
                    filter: false,
                    searchDelay: 3000,
                    responsive: true,
                    order: [[1, \"asc\"]],
                    ajax: {
                        \"url\": \"";
        // line 667
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        yield "\",
                        \"data\": function (dataToSend) {
                            //make a new object so as not to destroy the input.
                            var data = {};
                            data.draw = dataToSend.draw;
                            data.length = dataToSend.length;
                            data.start = dataToSend.start;
                            data.order = dataToSend.order;
                            data.columns = [];

                            \$.each(dataToSend.columns, function (index, e) {
                                var col = {};
                                col.data = e.data;
                                if (e.name != null && e.name != \"\")
                                    col.name = e.name;
                                data.columns.push(col);
                            });

                            \$.extend(data, \$(\"#displaysGrid\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                            return data;
                        }
                    },
                    createdRow: function (row, data, index) {
                        if (data.mediaInventoryStatus === 1) {
                            \$(row).addClass('table-success');
                        } else if (data.mediaInventoryStatus === 1) {
                            \$(row).addClass('table-danger');
                        } else {
                            \$(row).addClass('table-warning');
                        }
                    },
                    \"columns\": [
                        {\"data\": \"displayId\", responsivePriority: 2},
                        {\"data\": \"display\", responsivePriority: 2},
                        {
                            \"data\": \"mediaInventoryStatus\",
                            responsivePriority: 2,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                var icon = \"\";
                                if (data == 1)
                                    icon = \"fa-check\";
                                else if (data == 2)
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-cloud-download\";

                                return '<span class=\"fa ' + icon + '\" title=\"' + (row.statusDescription) + '\"></span>';
                            }
                        },
                        {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn, responsivePriority: 3},
                        {\"data\": \"currentLayout\", \"visible\": false, \"sortable\": false, responsivePriority: 5},
                        {
                            \"data\": \"storageAvailableSpace\",
                            responsivePriority: 5,
                            \"visible\": false,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                return row.storageAvailableSpaceFormatted;
                            }
                        },
                        {
                            \"data\": \"storageTotalSpace\",
                            responsivePriority: 5,
                            \"visible\": false,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                return row.storageTotalSpaceFormatted;
                            }
                        },
                        {\"data\": \"storagePercentage\", \"visible\": false, \"sortable\": false, responsivePriority: 5},
                        {\"data\": \"description\", \"visible\": false, responsivePriority: 4},
                        {\"data\": \"orientation\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"resolution\", \"visible\": false, responsivePriority: 6},
                        ";
        // line 747
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 747)) {
            // line 748
            yield "                        {
                            \"name\": \"tags\",
                            responsivePriority: 3,
                            \"sortable\": false,
                            \"visible\": false,
                            \"data\": dataTableCreateTags
                        },
                        ";
        }
        // line 756
        yield "                        {\"data\": \"defaultLayout\", \"visible\": false, responsivePriority: 4},
                        {\"data\": \"incSchedule\", \"render\": dataTableTickCrossColumn, \"visible\": false, responsivePriority: 5},
                        {\"data\": \"emailAlert\", \"render\": dataTableTickCrossColumn, \"visible\": false, responsivePriority: 5},
                        {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn, responsivePriority: 3},
                        {\"data\": \"lastAccessed\", \"render\": dataTableDateFromUnix, responsivePriority: 4},
                        {
                            \"name\": \"displayProfileId\",
                            responsivePriority: 5,
                            \"data\": function (data, type) {
                                return data.displayProfile;
                            },
                            \"visible\": false
                        },
                        {
                            \"name\": \"clientSort\",
                            responsivePriority: 4,
                            \"data\": function (data) {
                                if (data.clientType === 'lg') {
                                    data.clientType = 'webOS'
                                }

                                return data.clientType + ' ' + data.clientVersion + '-' + data.clientCode;
                            },
                            \"visible\": false
                        },
                        {\"data\": \"deviceName\", \"visible\": false, responsivePriority: 5},
                        {\"data\": \"clientAddress\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"macAddress\", responsivePriority: 5},
                        {\"data\": \"timeZone\", \"visible\": false, responsivePriority: 5},
                        {\"data\": \"latitude\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"longitude\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"screenShotRequested\", \"render\": dataTableTickCrossColumn, \"visible\": false, \"name\": \"screenShotRequested\", responsivePriority: 7},
                        {
                            \"name\": \"thumbnail\",
                            responsivePriority: 4,
                            \"orderable\": false,
                            \"data\": function (data, type) {
                                if (type != \"display\")
                                    return data.thumbnail;

                                if (data.thumbnail != \"\") {
                                    return '<a class=\"display-screenshot-container\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data.thumbnail + '\"><img class=\"display-screenshot\" src=\"' + data.thumbnail + '\" data-display-id=\"'+ data.displayId +'\" data-type=\"'+ data.clientType +'\" /></a>';
                                }
                                else {
                                    return \"\";
                                }
                            },
                            \"visible\": false
                        },
                        {
                            \"data\": \"isCmsTransferInProgress\",
                            \"render\": dataTableTickCrossColumn,
                            \"visible\": false,
                            \"name\": \"isCmsTransferInProgress\"
                        },
                        {
                            \"name\": \"bandwidthLimit\",
                            responsivePriority: 5,
                            \"data\": null,
                            \"render\": {\"_\": \"bandwidthLimit\", \"display\": \"bandwidthLimitFormatted\", \"sort\": \"bandwidthLimit\"},
                            \"visible\": false
                        },
                        {
                            \"data\": \"lastCommandSuccess\",
                            responsivePriority: 6,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                var icon = \"\";
                                if (data == 1)
                                    icon = \"fa-check\";
                                else if (data == 0)
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-question\";

                                return \"<span class='fa \" + icon + \"'></span>\";
                            },
                            \"visible\": false
                        },
                        {
                            \"data\": \"xmrChannel\",
                            responsivePriority: 6,
                            \"render\": function (data, type, row) {
                                if (type === \"export\") {
                                    return (data !== null && data !== \"\") ? 1 : 0;
                                }

                                if (type != \"display\")
                                    return data;

                                var icon = \"\";
                                if (data != null && data != \"\")
                                    icon = \"fa-check\";
                                else
                                    icon = \"fa-times\";

                                return \"<span class='fa \" + icon + \"'></span>\";
                            },
                            \"visible\": false
                        },
                        {
                            \"data\": \"commercialLicence\",
                            \"name\": \"commercialLicence\",
                            responsivePriority: 5,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                var icon = \"\";
                                if (data == 3) {
                                    return \"N/A\";
                                } else {
                                    if (data == 1) {
                                        icon = \"fa-check\";
                                    } else if (data == 0) {
                                        icon = \"fa-times\";
                                    } else if (data == 2) {
                                        icon = \"fa-clock-o\";
                                    }

                                    return '<span class=\"fa ' + icon + '\" title=\"' + (row.commercialLicenceDescription) + '\"></span>';
                                }
                            },
                            \"visible\": false
                        },
                        {
                            \"name\": \"remote\",
                            \"data\": null,
                            responsivePriority: 4,
                            \"render\": function (data, type, row) {
                                if (type === \"display\") {
                                    var html = \"<div class='remote-icons'>\";
                                    if (\"";
        // line 890
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", [], "any", false, false, false, 890), "html", null, true);
        yield "\" !== \"\" && row.clientAddress != null && row.clientAddress !== \"\") {
                                        var link = \"";
        // line 891
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", [], "any", false, false, false, 891), "html", null, true);
        yield "\".replace('%s', row.clientAddress);
                                        html += '<a href=\"' + link + '\" title=\"";
        // line 892
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("VNC to this Display"), "html", null, true);
        yield "\" target=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNC_TGT", [], "any", false, false, false, 892), "html", null, true);
        yield "\">'
                                            + '<i class=\"fa fa-eye\"></i></a>';
                                    }

                                    if (row.teamViewerLink !== \"\") {
                                        html += '<a href=\"' + row.teamViewerLink + '\" title=\"";
        // line 897
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("TeamViewer to this Display"), "html", null, true);
        yield "\" target=\"_blank\">'
                                            + '<img src=\"";
        // line 898
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 898), "html", null, true);
        yield "theme/default/img/remote_icons/teamviewer.png\" alt=\"TeamViewer Icon\"></a>';
                                    }

                                    if (row.webkeyLink !== \"\") {
                                        html += '<a href=\"' + row.webkeyLink + '\" title=\"";
        // line 902
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Webkey to this Display"), "html", null, true);
        yield "\" target=\"_blank\">'
                                            + '<img src=\"";
        // line 903
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 903), "html", null, true);
        yield "theme/default/img/remote_icons/webkey.png\" alt=\"Webkey Icon\"></a>';
                                    }

                                    return html + \"</div>\";

                                } else if (type === \"export\") {
                                    if (row.teamViewerLink !== \"\") {
                                        return \"TeamViewer: \" + row.teamViewerLink;
                                    }
                                    if (row.webkeyLink !== \"\") {
                                        return \"Webkey: \" + row.webkeyLink;
                                    }
                                    if (row.teamViewerLink === \"\" && row.webkeyLink === \"\") {
                                        return \"\";
                                    }
                                } else {
                                    return \"\";
                                }
                            },
                            \"visible\": true,
                            \"orderable\": false
                        },
                        {\"data\": \"createdDt\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"modifiedDt\", \"visible\": false, responsivePriority: 6},
                        {
                            \"data\": \"countFaults\",
                            \"name\": \"countFaults\",
                            responsivePriority: 3,
                            \"render\": function (data, type, row) {
                                if (type != \"display\") {
                                    return data;
                                }

                                if (data > 0) {
                                    return '<span class=\"badge\" style=\"background-color: red; color: white\">'+(row.countFaults)+'</span>';
                                } else {
                                    return '';
                                }
                            }
                        },
                    ]
                });

                displayGridTable.on('draw', dataTableDraw);
                displayGridTable.on('draw', { form: \$(\"#displaysGrid\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
                displayGridTable.on('processing.dt', dataTableProcessing);
                dataTableAddButtons(displayGridTable, \$('#displaysGrid_wrapper').find('.dataTables_buttons'))}
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
        return "dashboard-status-page.twig";
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
        return array (  1294 => 903,  1290 => 902,  1283 => 898,  1279 => 897,  1269 => 892,  1265 => 891,  1261 => 890,  1125 => 756,  1115 => 748,  1113 => 747,  1030 => 667,  928 => 568,  863 => 506,  818 => 467,  797 => 452,  746 => 404,  716 => 377,  701 => 365,  697 => 364,  686 => 355,  680 => 354,  675 => 352,  669 => 348,  663 => 347,  656 => 343,  624 => 315,  620 => 314,  603 => 301,  599 => 300,  595 => 299,  591 => 298,  587 => 297,  583 => 296,  579 => 295,  575 => 294,  571 => 293,  567 => 292,  563 => 291,  559 => 290,  555 => 289,  551 => 288,  547 => 287,  543 => 286,  539 => 285,  535 => 284,  531 => 283,  527 => 282,  523 => 281,  519 => 280,  515 => 279,  510 => 278,  504 => 277,  500 => 276,  494 => 275,  490 => 274,  486 => 273,  482 => 272,  478 => 271,  474 => 270,  470 => 269,  466 => 268,  462 => 267,  449 => 257,  445 => 256,  441 => 255,  432 => 249,  428 => 247,  420 => 245,  417 => 244,  415 => 243,  402 => 233,  395 => 229,  380 => 217,  373 => 213,  355 => 198,  350 => 195,  348 => 194,  334 => 183,  329 => 180,  327 => 179,  315 => 169,  312 => 168,  295 => 165,  289 => 164,  286 => 163,  281 => 162,  279 => 161,  274 => 158,  272 => 157,  254 => 142,  250 => 141,  246 => 140,  237 => 133,  235 => 132,  220 => 119,  217 => 118,  214 => 117,  211 => 116,  208 => 115,  206 => 114,  193 => 103,  187 => 101,  184 => 100,  181 => 99,  178 => 98,  175 => 97,  172 => 96,  170 => 95,  157 => 84,  152 => 82,  147 => 81,  141 => 79,  139 => 78,  119 => 65,  115 => 64,  99 => 51,  95 => 50,  77 => 37,  66 => 28,  55 => 27,  51 => 26,  46 => 23,  44 => 24,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard-status-page.twig", "/var/www/cms/views/dashboard-status-page.twig");
    }
}
