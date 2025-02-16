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

/* xibo-ssp-connector-form-javascript.twig */
class __TwigTemplate_215da78dcfd4b811fab42d37b55a8b38 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "xibo-ssp-connector-form-javascript.twig", 23)->unwrap();
        // line 24
        $context["gridId"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 25
        yield "<script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
  \$(function() {
    \$('#connectors').on('connectors.loaded', function() {
      var \$sspConnector = \$('#connectors').find('div[data-connector-class-name-last=\"XiboSspConnector\"]');
      var \$button = \$('<button class=\"btn btn-info\" role=\"button\">";
        // line 29
        echo __("Activity Report");
        yield "</button>');
      \$button.on('click', function() {
        sspActivityDialogOpen(\$sspConnector);
      });
      \$sspConnector.find('.card-footer').append(\$button);
    });
  });

  window.sspFormOpen = function(dialog) {
    // CMS Url
    var \$cmsUrl = dialog.find('input[name=\"cmsUrl\"]');
    if (\$cmsUrl.val() === '') {
      \$cmsUrl.val(window.location.origin || null);
    }

    // Share of voice
    var \$shareOfVoice = dialog.find('.share-of-voice-control');
    \$shareOfVoice.on('change paste keyup', function() {
      dialog.find(\$(this).data('partner')).val(((100 * \$(this).val()) / 3600).toFixed(2));
    }).trigger('change');

    \$shareOfVoice.each(function(index, element) {
      dialog.find(\$(element).data('partner')).on('change paste keyup', function() {
        \$(element).val(Math.round((3600 * \$(this).val()) / 100));
      });
    });
  };

  window.sspActivityDialogOpen = function(\$sspConnector) {
    bootbox.hideAll();
    // Put the template into a modal.
    var template = Handlebars.compile(\$('#connector-ssp-activity').html());
    var dialog = bootbox.dialog({
      message: template({}),
      title: '";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Activity Report"), "html", null, true);
        yield "',
      animate: false,
      size: 'xl',
      onShown: function(e) {
        \$.ajax({
          url: \$sspConnector.data('proxyUrl').replace(':method', 'getAvailablePartnersFilter'),
          success: function(result) {
            if (result) {
              const \$form = \$('#activity-log-filters');
              const \$partnerId = \$form.find('select[name=partnerId]');

              \$.each(result, function(partnerKey, available) {
                \$partnerId.append(\$('<option>', {
                  id: partnerKey,
                  text: available.name,
                  value : partnerKey
                }));
              });
            }
          }
        });
      }
    });

    XiboInitialise('#";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["gridId"] ?? null), "html", null, true);
        yield "');

    dialog.closest('.modal').addClass('modal-big');

    // Initialize summary filter
    let filter;

    // Make a datatable
    var table;
    var chart;

    table = \$('#ssp-activity').DataTable({
      language: dataTablesLanguage,
      dom: dataTablesTemplate,
      serverSide: false,
      stateSave: false,
      responsive: true,
      filter: false,
      searchDelay: 3000,
      order: [[ 0, 'asc']],
      ajax: {
        url: \$sspConnector.data('proxyUrl').replace(':method', 'activity'),
        data: function (d) {
          \$.extend(d, \$('#ssp-activity').closest('.XiboGrid').find('.FilterDiv form').serializeObject());
        }
      },
      columns: [
        {
          data: 'scheduledAt',
          responsivePriority: 1,
          render: function(data, type) {
            if (type !== 'display' && type !== 'export' || data == null) {
              return data;
            }
            return moment(data).format(jsDateFormat);
          },
        },
        { data: 'campaignId', responsivePriority: 1 },
        { data: 'displayId', responsivePriority: 1 },
        { data: 'isPlayed', responsivePriority: 1 },
        { data: 'isErrored', responsivePriority: 1 },
        { data: 'impressions', responsivePriority: 2 },
        {
          data: 'impressionDate',
          responsivePriority: 10,
          render: function(data, type) {
            if (type !== 'display' && type !== 'export' || data == null) {
              return data;
            }
            return moment(data).format(jsDateFormat);
          },
        },
        { data: 'impressionActual', responsivePriority: 10 },
        { data: 'errors', responsivePriority: 10 },
        {
          data: 'errorDate',
          responsivePriority: 10,
          render: function(data, type) {
            if (type !== 'display' && type !== 'export' || data == null) {
              return data;
            }
            return moment(data).format(jsDateFormat);
          },
        },
        { data: 'errorCode', responsivePriority: 10 },
      ],

      initComplete: function(settings, json) {
        let filteredData = filterData(json.data, filter);

        drawSummaryTable(filteredData, filter);
      },

      footerCallback: function(row, data, start, end, display) {
        var json = this.api().ajax.json();
        if (json && json.stats) {
           \$(this.api().column(0).footer()).html(json.stats.scheduled || 0);
           \$(this.api().column(3).footer()).html(json.stats.played || 0);
           \$(this.api().column(4).footer()).html(json.stats.errored || 0);
           \$(this.api().column(5).footer()).html(json.stats.actualImpressions || 0);
        }
      },

      drawCallback: function(settings) {
        setTimeout(function() {
          dialog.find('a[data-apply-button=\"true\"]')
           .removeClass('disabled')
           .find('.saving').remove();
        }, 300);
      },
    });

    table.on('draw', dataTableDraw);
    table.on('processing.dt', dataTableProcessing);
    dataTableAddButtons(table, \$('#ssp-activity_wrapper').find('.dataTables_buttons'));

    // Find the apply button
    dialog.find('a[data-apply-button=\"true\"]').on('click', function() {
      \$(this).addClass('disabled').append('<span class=\"saving fa fa-cog fa-spin p-1\"></span>');
      table.ajax.reload(function(json) {
          let filteredData = filterData(json.data, filter);

          drawSummaryTable(filteredData, filter);
      }, true);
    });

    // Watch for filter option changes in Summary tab
    dialog.find('select[name=\"campaignFilter\"]').on('change', function(e) {
      table.ajax.reload(function(json) {
        filter = \$(e.target).val();
        let filteredData = filterData(json.data, filter);

        drawSummaryTable(filteredData, filter);
      }, true);
    });

    // Parse activity log summary according to filter selected
    function filterData(summaryData, filter='hour') {
      let filterOption = '';

      // Group the data according the filter selected
      let groups = summaryData.reduce((group, item) => {
        if (filter === 'display') {
          filterOption = item.displayId;
        } else if (filter === 'hour') {
          filterOption = `\${moment(item.scheduledAt).format('YYYY-MM-DD HH')}:00`;
        } else {
          filterOption = `\${moment(item.scheduledAt).format('YYYY-MM-DD HH')}:00 - \${item.displayId}`;
        }

        if (!group[filterOption]) {
          group[filterOption] = [];
        }

        group[filterOption].push({key: filterOption, ...item});

        return group;
      }, {});

      const groupKeys = Object.keys(groups);

      // Aggregate the data
      let data = groupKeys.map(key => {
        return groups[key].reduce((acc, {key, campaignId, scheduledAt, displayId, errors, isPlayed, isErrored, impressions, impressionActual}) => {
          acc['key'] = key;
          acc['errorCount'] = errors + (acc['errorCount'] || 0);
          acc['playCount'] = !isPlayed ? (acc['playCount'] || 0) : acc['playCount'] + 1
          acc['missesCount'] = (!isPlayed && !isErrored) ? (acc['missesCount'] + 1 || 1) : acc['missesCount'] || 0
          acc['impressions'] = impressions + (acc['impressions'] || 0);
          acc['impressionActual'] = impressionActual + (acc['impressionActual'] || 0);
          acc['campaignId'] = campaignId;
          acc['displayId'] = displayId;
          acc['date'] = moment(scheduledAt).format('MM-DD-YYYY');
          acc['time'] = `\${moment(scheduledAt).format('HH')}:00`;

          return acc;
        }, {});
      })

      // Get new data stats
      let stats = {
        totalErrorCount: 0,
        totalPlayCount: 0,
        totalMissCount: 0,
        totalImpressions: 0,
        impressionActual: 0
      }

      \$.each(data, function(index, el) {
        stats.totalErrorCount += el.errorCount;
        stats.totalPlayCount += el.playCount;
        stats.totalMissCount += el.missesCount;
        stats.totalImpressions += el.impressions;
        stats.impressionActual += el.impressionActual;
      });

      return {
        data: data.sort((a,b) => a.key.replace(/-|\\s/g,\"\") - b.key.replace(/-|\\s/g,\"\")),
        stats: stats
      }
    }

    function drawSummaryTable(filteredData, filter='hour') {
      let summaryTable = \$('#ssp-activity-summary').dataTable({
        \"bDestroy\": true,
        data: filteredData.data,
        columns: [
          { data: 'date', responsivePriority: 1 },
          { data: 'time', responsivePriority: 1 },
          { data: 'displayId', responsivePriority: 1 },
          { data: 'campaignId', responsivePriority: 1 },
          { data: 'playCount', responsivePriority: 1 },
          { data: 'errorCount', responsivePriority: 1 },
          { data: 'missesCount', responsivePriority: 1 },
          { data: 'impressions', responsivePriority: 2 },
          { data: 'impressionActual', responsivePriority: 10 },
        ],

        initComplete: function () {
          if (filter === 'hour' ) {
            // Hide Display ID column
            \$(this.api().column(2).visible(false));
          } else if (filter === 'display') {
            // Hide date and hour
            \$(this.api().column(0).visible(false));
            \$(this.api().column(1).visible(false));
          }

          drawSummaryChart(filteredData.stats);
        },

        footerCallback: function(row, data, start, end, display) {
            var json = filteredData.stats;
            if (filteredData) {
                \$(this.api().column(4).footer()).html(json.totalPlayCount || 0);
                \$(this.api().column(5).footer()).html(json.totalErrorCount || 0);
                \$(this.api().column(6).footer()).html(json.totalMissCount || 0);
                \$(this.api().column(7).footer()).html(json.totalImpressions || 0);
                \$(this.api().column(8).footer()).html(json.impressionActual || 0);
            }
        },
      });

      // Render the summary table
      summaryTable.on('draw', dataTableDraw);
      summaryTable.on('processing.dt', dataTableProcessing);
    }

    // Renders the chart data
    function drawSummaryChart(data) {
      if (chart !== undefined && chart !== null) {
        chart.destroy();
      }

      // Organise the rows into datasets for the chart
      let totalSize = data.totalErrorCount + data.totalPlayCount + data.totalMissCount;
      let chartData = {
          userData: [getPercentage(data.totalErrorCount), getPercentage(data.totalPlayCount), getPercentage(data.totalMissCount)],
          userLabels: ['Errors', 'Plays', 'Misses'],
          colours: ['red', 'green', 'blue']
      }

      function getPercentage(data) {
        return ((data/totalSize)*100).toFixed(2);
      }

      // Create the pie chart
      chart = new Chart(\$(\"#canvas\"), {
        type: 'pie',
        data: {
          datasets: [{
            data: chartData.userData,
            backgroundColor: chartData.colours
          }],
          labels: chartData.userLabels
        },
        options: {
          maintainAspectRatio: true
        }
      });
    }
  };
</script>
<script type=\"text/x-handlebars-template\" id=\"connector-ssp-activity\">
  <div class=\"XiboGrid\" id=\"";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["gridId"] ?? null), "html", null, true);
        yield "\" data-grid-name=\"connector-ssp-activity-log\">
      <div class=\"XiboFilterCustom card bg-light mb-3\">
          <div class=\"FilterDiv card-body\" id=\"connector-ssp-activity-log\">
              <form id=\"activity-log-filters\" class=\"form-inline\">
                  ";
        // line 355
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("From Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 356
        yield "                  ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["activityFromDt", ($context["title"] ?? null), $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate("now", "today"), "Y-m-d H:i:s"), "", "activity-from-dt", "", ""], 356, $context, $this->getSourceContext());
        yield "

                  ";
        // line 358
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("To Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 359
        yield "                  ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["activityToDt", ($context["title"] ?? null), $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate("tomorrow", "-1 minute"), "Y-m-d H:i:s"), "", "activity-to-dt", "", ""], 359, $context, $this->getSourceContext());
        yield "

                  ";
        // line 361
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 362
        yield "                  ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search")], ["name" => "data-search-term", "value" => "display"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayId"], ["name" => "data-text-property", "value" => "display"]];
        // line 373
        yield "                  ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayId", "single", ($context["title"] ?? null), "", null, "displayId", "display", "", "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 373, $context, $this->getSourceContext());
        yield "

                  ";
        // line 375
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Partner");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 376
        yield "                  ";
        $context["options"] = [["id" => "", "value" => ""]];
        // line 377
        yield "
                  ";
        // line 378
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["partnerId", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "id", "value"], 378, $context, $this->getSourceContext());
        yield "

                  <div class=\"w-100\">
                      <a data-apply-button=\"true\" class=\"btn btn-success\">
                          <span>";
        // line 382
        echo __("Apply");
        yield "</span>
                      </a>
                  </div>
              </form>
          </div>
      </div>
      <!-- Card Header -->
      <div class=\"card-header\">
          <ul class=\"nav nav-tabs card-header-tabs\" role=\"tablist\">
              <li class=\"nav-item\">
                  <a class=\"nav-link active\" id=\"chart-tab\" data-toggle=\"tab\" href=\"#chartTab\" role=\"tab\"
                     aria-controls=\"chartTab\" aria-selected=\"true\">Summary</a>
              </li>
              <li class=\"nav-item\">
                  <a class=\"nav-link\" id=\"tabular-tab\" data-toggle=\"tab\" href=\"#tabularTab\" role=\"tab\"
                     aria-controls=\"tabularTab\" aria-selected=\"false\">Detailed</a>
              </li>
          </ul>
      </div>
      <!-- Card Body -->
      <div class=\"card-body\">
          <div class=\"tab-content\">

              <!-- SUMMARY TAB-->
              <div class=\"tab-pane active\" id=\"chartTab\" role=\"tabpanel\" aria-labelledby=\"chart-tab\">
                  <div class=\"XiboFilterCustom card bg-light pb-0 mb-0\">
                      <div class=\"FilterDiv card-body\" id=\"connector-ssp-activity-logs\">
                          <form id=\"campaign-filter\">
                              ";
        // line 410
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Filter Options");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 411
        yield "                              ";
        $context["options"] = [["optionid" => "hour", "option" => "Hour"], ["optionid" => "display", "option" => "Display"], ["optionid" => "hourdisplay", "option" => "Display and Hour"]];
        // line 417
        yield "                              ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["campaignFilter", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option", ($context["helpText"] ?? null)], 417, $context, $this->getSourceContext());
        yield "
                              ";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["forms"] ?? null), "hidden", ["isDynamic", 1], "method", false, false, false, 418), "html", null, true);
        yield "
                          </form>

                          <!-- SUMMARY DATATABLE -->
                          <div class=\"XiboData card pt-3 my-3\">
                              <table id=\"ssp-activity-summary\"
                                     class=\"table table-striped table-full-width\"
                                     style=\"width: 100%\"
                                     data-state-preference-name=\"connector-ssp-activity-log-summary\">
                                  <thead>
                                      <tr>
                                          <th>";
        // line 429
        echo __("Date");
        yield "</th>
                                          <th>";
        // line 430
        echo __("Hour");
        yield "</th>
                                          <th>";
        // line 431
        echo __("Display ID");
        yield "</th>
                                          <th>";
        // line 432
        echo __("Campaign");
        yield "</th>
                                          <th>";
        // line 433
        echo __("Play Count");
        yield "</th>
                                          <th>";
        // line 434
        echo __("Error Count");
        yield "</th>
                                          <th>";
        // line 435
        echo __("Misses Count");
        yield "</th>
                                          <th>";
        // line 436
        echo __("Impressions");
        yield "</th>
                                          <th>";
        // line 437
        echo __("Impression Actual");
        yield "</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div>
                  </div>
                  <div class=\"widget mt-2 pb-2\">
                      <div class=\"widget-title\">
                          <i class=\"fa fa-tasks\"></i>
                              ";
        // line 462
        echo __("Summary Chart");
        // line 463
        yield "                          <div class=\"clearfix\"></div>
                      </div>
                      <canvas id=\"canvas\" style=\"clear:both; margin-top:25px;\" height=\"100%\"></canvas>
                  </div>
              </div>

              <!-- TABULAR TAB-->
              <div class=\"tab-pane show\" id=\"tabularTab\" role=\"tabpanel\" aria-labelledby=\"tabular-tab\">
                  <div class=\"XiboData card pt-3\">
                      <table id=\"ssp-activity\"
                             class=\"table table-striped table-full-width\"
                             style=\"width: 100%\"
                             data-state-preference-name=\"connector-ssp-activity-log\" >
                          <thead>
                          <tr>
                              <th>";
        // line 478
        echo __("Scheduled At");
        yield "</th>
                              <th>";
        // line 479
        echo __("Campaign");
        yield "</th>
                              <th>";
        // line 480
        echo __("Display ID");
        yield "</th>
                              <th>";
        // line 481
        echo __("Played?");
        yield "</th>
                              <th>";
        // line 482
        echo __("Errored?");
        yield "</th>
                              <th>";
        // line 483
        echo __("Impressions");
        yield "</th>
                              <th>";
        // line 484
        echo __("Impression Date");
        yield "</th>
                              <th>";
        // line 485
        echo __("Impression Actual");
        yield "</th>
                              <th>";
        // line 486
        echo __("Errors");
        yield "</th>
                              <th>";
        // line 487
        echo __("Error Date");
        yield "</th>
                              <th>";
        // line 488
        echo __("Error Code");
        yield "</th>
                          </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          <tfoot>
                              <tr>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "xibo-ssp-connector-form-javascript.twig";
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
        return array (  619 => 488,  615 => 487,  611 => 486,  607 => 485,  603 => 484,  599 => 483,  595 => 482,  591 => 481,  587 => 480,  583 => 479,  579 => 478,  562 => 463,  560 => 462,  532 => 437,  528 => 436,  524 => 435,  520 => 434,  516 => 433,  512 => 432,  508 => 431,  504 => 430,  500 => 429,  486 => 418,  481 => 417,  478 => 411,  473 => 410,  442 => 382,  435 => 378,  432 => 377,  429 => 376,  424 => 375,  418 => 373,  415 => 362,  410 => 361,  404 => 359,  399 => 358,  393 => 356,  388 => 355,  381 => 351,  114 => 87,  87 => 63,  50 => 29,  42 => 25,  40 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "xibo-ssp-connector-form-javascript.twig", "/var/www/cms/views/xibo-ssp-connector-form-javascript.twig");
    }
}
