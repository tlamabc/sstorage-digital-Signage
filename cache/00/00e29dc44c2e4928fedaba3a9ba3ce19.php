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

/* xibo-audience-connector-form-javascript.twig */
class __TwigTemplate_fc99a69dc45e70a6359d65bc8f8bbd61 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "xibo-audience-connector-form-javascript.twig", 23)->unwrap();
        // line 24
        yield "<script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
  ";
        // line 26
        yield "  window.audienceDaysOfWeek = {
      1: \"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Monday"), "js", null, true);
        yield "\",
      2: \"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tuesday"), "js", null, true);
        yield "\",
      3: \"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Wednesday"), "js", null, true);
        yield "\",
      4: \"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thursday"), "js", null, true);
        yield "\",
      5: \"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Friday"), "js", null, true);
        yield "\",
      6: \"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Saturday"), "js", null, true);
        yield "\",
      7: \"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sunday"), "js", null, true);
        yield "\",
  };
  ";
        // line 36
        yield "
  window.audienceFormOpen = function(\$audienceConnector) {
    // Make a datatable
    var dialog = \$audienceConnector.closest('.modal');
    var \$table = \$('#audience-dma');
    var audienceDmaTable;
    audienceDmaTable = \$table.DataTable({
      language: dataTablesLanguage,
      dom: dataTablesTemplate,
      serverSide: false,
      stateSave: false,
      responsive: true,
      filter: true,
      searchDelay: 3000,
      order: [[ 0, 'asc']],
      ajax: {
        url: \$table.data('proxyUrl').replace(':method', 'dmaSearch'),
        data: function (d) {
          \$.extend(d, \$table.closest('.XiboGrid').find('.FilterDiv form').serializeObject());
        }
      },
      columns: [
        { data: 'name', responsivePriority: 1 },
        { data: 'costPerPlay', responsivePriority: 1 },
        { data: 'impressionsPerPlay', responsivePriority: 1 },
        { data: 'impressionSource', responsivePriority: 10 },
        {
          data: 'startDate',
          responsivePriority: 2,
          render: function(data, type) {
            if (type !== 'display' && type !== 'export' || data == null) {
              return data;
            }

            return moment(data, systemDateFormat).format(jsDateOnlyFormat);
          },
        },
        {
          data: 'endDate',
          responsivePriority: 2,
          render: function(data, type) {
            if (type !== 'display' && type !== 'export' || data == null) {
              return data;
            }

            return moment(data, systemDateFormat).format(jsDateOnlyFormat);
          },
        },
        {
          data: 'daysOfWeek',
          responsivePriority: 2,
          render: function(data) {
            let daysOfWeek = [];
            \$.each(data, function(index, el) {
              daysOfWeek.push(audienceDaysOfWeek[el]);
            });
            return daysOfWeek.join(', ');
          },
        },
        { data: 'startTime', responsivePriority: 2 },
        { data: 'endTime', responsivePriority: 2 },
        {
          data: 'geoFence',
          responsivePriority: 3,
          render: function(data) {
            let icon;
            if (data && data.length > 0)
              icon = \"fa-check\";
            else
              icon = \"fa-times\";

            return '<span class=\"fa ' + icon + '\"></span>';
          },
        },
        { data: 'priority', responsivePriority: 2 },
        {
          data: function(data) {
            if (data.displays) {
              return data.displays.length;
            } else {
              return 0;
            }
          },
          responsivePriority: 1,
        },
        {
          data: function(data, type, set, meta) {
            if (type !== 'display') {
              return '';
            }
            return '<a class=\"btn btn-sm\" href=\"#\" id=\"addDmaBtn\"><span class=\"fa fa-pencil\" title=\"";
        // line 126
        echo __("Edit");
        yield "\"></span></a>'
              + '<a class=\"btn btn-sm\" href=\"#\" id=\"delDmaBtn\"><span class=\"fa fa-trash\" title=\"";
        // line 127
        echo __("Delete");
        yield "\"></span></a>';
          },
          responsivePriority: 1,
        }
      ],
    });

    table.on('draw', dataTableDraw);
    table.on('processing.dt', dataTableProcessing);

    // Add button
    new \$.fn.dataTable.Buttons(audienceDmaTable, {
      buttons: [
        {
          text: '";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add DMA"), "html", null, true);
        yield "',
          action: function (e, dt, node, config) {
            openDmaForm();
          },
        },
      ]
    });

    audienceDmaTable.buttons().container().css('margin-bottom', '10px').appendTo('#audience-dma_wrapper .dataTables_folder');

    setTimeout(function() {
      audienceDmaTable.columns.adjust()
    }, 500);

    // Handle btn click
    \$('#ssp-activity tbody').on('click', 'a', function (e) {
        let btnType = \$(this).attr('id');
        let id = table.row(e.target.closest('tr')).index();

        if (btnType === 'addDmaBtn') {
            openDmaForm(id);
        } else if (btnType === 'delDmaBtn') {
            deleteDmaForm(id);
        }
    });

    // Add an add button.
    var dmaTemplate = Handlebars.compile(\$('#xibo-audience-connector-dma-form').html());
    window.openDmaForm = function(id = null) {
      let title;
      let method;
      let dma;
      if (id !== null) {
        dma = audienceDmaTable.rows(id).data()[0];
        title = '";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit DMA"), "html", null, true);
        yield "';
        method = 'dmaEdit';
      } else {
        title = '";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add DMA"), "html", null, true);
        yield "';
        method = 'dmaAdd';
      }

      bootbox.hideAll();
      const \$dialog = bootbox.dialog({
        message: dmaTemplate({
          connectorId: \$table.data('connectorId'),
          method: method,
          dma: dma,
          impressionSources: \$table.data('impressionSources'),
        }),
        title: title,
        animate: false,
        size: 'large',
        buttons: {
          back: {
            label: '";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back"), "html", null, true);
        yield "',
            className: 'btn-white',
            callback: function() {
              // Open up the connector config form.
              bootbox.hideAll();
              \$('[data-connector-class-name-last=\"XiboAudienceReportingConnector\"]').find('.btn-primary').click();
            }
          },
          save: {
            label: '";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
        yield "',
            className: 'btn-success',
            callback: function() {
              // Submit the form in the usual way, and then open up the connector config form.
              const \$form = \$dialog.find('form');
              const button = \$dialog.find('.btn-success');
              button.addClass('disabled').append('<span class=\"saving fa fa-cog fa-spin p-1\"></span>');

              XiboFormSubmit(\$form, null, function(xhr) {
                if (xhr.success === false) {
                  button.removeClass('disabled').find('.saving').remove();
                } else {
                  bootbox.hideAll();
                  \$('[data-connector-class-name-last=\"XiboAudienceReportingConnector\"]').find('.btn-primary').click();
                }
              });
              return false;
            }
          },
        },
        onShown: function(e) {
          const \$form = \$(e.target).find('form');

          // Before we initialise we work out if we need to set the initial key/value on the displayGroupId
          // select list.
          const \$displayGroupId = \$form.find('select[name=displayGroupId]');
          if (dma && dma.displayGroupId) {
            \$displayGroupId.attr('data-initial-key', 'displayGroupId');
            \$displayGroupId.attr('data-initial-value', dma.displayGroupId);
          }

          // Initialise general fields.
          XiboInitialise('#' + \$form.attr('id'));

          const \$daysOfWeek = \$form.find('select[name=\"daysOfWeek[]\"]');
          if (dma && dma.daysOfWeek) {
            \$.each(dma.daysOfWeek, function(index, element) {
              \$daysOfWeek.find('option[value=' + element + ']')
                .attr('selected', 'selected');
            });
          }
          \$daysOfWeek.select2({width: '100%'}).val();

          // Map
          // ---
          const getDataProperty = function(\$element, property, defaultValue = null) {
            const value = \$element.data(property);
            if (value) {
              return value;
            } else {
              return defaultValue;
            }
          };
          const \$containerSelector = \$form.find('#audience-dma-map');
          const \$geoFenceField = \$form.find('input[name=\"geoFence\"]');
          if (dma && dma.geoFence) {
            \$geoFenceField.val(JSON.stringify(dma.geoFence));
          }

          let map = null;
          \$(e.target).find('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (event) {
            if (\$(event.target).attr('href') === '#tab-geo' && map === null) {
              map = L.map('audience-dma-map').setView(
                [
                  getDataProperty(\$containerSelector, 'mapLat', '51'),
                  getDataProperty(\$containerSelector, 'mapLong', '0.4'),
                ],
                getDataProperty(\$containerSelector, 'mapZoom', 13),
              );

              L.tileLayer(getDataProperty(\$containerSelector, 'mapTileServer'), {
                attribution: getDataProperty(
                  \$containerSelector,
                  'mapAttribution',
                  '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a>',
                ),
                subdomains: ['a', 'b', 'c'],
              }).addTo(map);

              // Add a layer for drawn items
              const drawnItems = new L.FeatureGroup();
              map.addLayer(drawnItems);

              // Add draw control (toolbar)
              const drawControl = new L.Control.Draw({
                position: 'topright',
                draw: {
                  polyline: false,
                  circle: false,
                  marker: false,
                  circlemarker: false,
                },
                edit: {
                  featureGroup: drawnItems,
                },
              });

              map.addControl(drawControl);

              // add search Control - allows searching by country/city and automatically
              // moves map to that location
              const searchControl = new L.Control.Search({
                url: 'https://nominatim.openstreetmap.org/search?format=json&q={s}',
                jsonpParam: 'json_callback',
                propertyName: 'display_name',
                propertyLoc: ['lat', 'lon'],
                marker: L.circleMarker([0, 0], {radius: 30}),
                autoCollapse: true,
                autoType: false,
                minLength: 2,
                hideMarkerOnCollapse: true,
                firstTipSubmit: true,
              });

              map.addControl(searchControl);

              // Draw events
              map.on('draw:created', function(e) {
                drawnItems.addLayer(e.layer);
                \$geoFenceField.val(JSON.stringify(drawnItems.toGeoJSON()));
              });
              map.on('draw:edited', function(e) {
                \$geoFenceField.val(JSON.stringify(drawnItems.toGeoJSON()));
              });
              map.on('draw:deleted', function(e) {
                e.layers.eachLayer(function(layer) {
                  drawnItems.removeLayer(layer);
                });
                \$geoFenceField.val(JSON.stringify(drawnItems.toGeoJSON()));
              });

              // Load existing geoJSON
              if (dma && dma.geoFence) {
                L.geoJSON(dma.geoFence, {
                  onEachFeature: function(feature, layer) {
                    drawnItems.addLayer(layer);
                    map.fitBounds(drawnItems.getBounds());
                  },
                });
              }
            }
          });
        }
      });
    }

    window.deleteDmaForm = function(id) {
      const dma = audienceDmaTable.rows(id).data()[0];
      bootbox.hideAll();
      bootbox.confirm({
        message: '";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this DMA?"), "html", null, true);
        yield "',
        buttons: {
          confirm: {
            label: '";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Yes"), "html", null, true);
        yield "',
            className: 'btn-success',
          },
          cancel: {
            label: '";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No"), "html", null, true);
        yield "',
            className: 'btn-danger',
          },
        },
        callback: function (result) {
          if (result) {
            \$.ajax({
              method: 'POST',
              url: \$table.data('proxyUrl').replace(':method', 'dmaDelete') + '?_id=' + dma._id,
              success: function(xhr) {
                if (xhr && !xhr.success) {
                  toastr.error(xhr.message);
                } else {
                  SystemMessage('";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("DMA deleted"), "html", null, true);
        yield "', true);
                }
              },
              error: function(xhr, textStatus, errorThrown) {
                toastr.error(xhr.message);
              },
              complete: function() {
                \$('[data-connector-class-name-last=\"XiboAudienceReportingConnector\"]').find('.btn-primary').click();
              }
            });
          } else {
            \$('[data-connector-class-name-last=\"XiboAudienceReportingConnector\"]').find('.btn-primary').click();
          }
        }
      });
    }
  };
</script>
<script type=\"text/x-handlebars-template\" id=\"xibo-audience-connector-dma-form\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tab-general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 396
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-dates\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 397
        echo __("Date/Time");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-geo\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 398
        echo __("Geofence");
        yield "</span></a></li>
            </ul>
            <form id=\"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" class=\"form-horizontal\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("connector.edit.form.proxy", ["id" => "{{connectorId}}", "method" => "{{method}}"]), "html", null, true);
        yield "\" method=\"POST\">
                <input type=\"hidden\" name=\"_id\" value=\"";
        // line 401
        yield "{{ dma._id }}";
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-general\">
                        ";
        // line 404
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 405
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Name of this DMA - (1 - 50 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 406
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), "{{dma.name}}", ($context["helpText"] ?? null)], 406, $context, $this->getSourceContext());
        yield "

                        ";
        // line 408
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Priority");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 409
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set a priority for this DMA. Higher priorities take precedence.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 410
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["priority", ($context["title"] ?? null), "{{dma.priority}}", ($context["helpText"] ?? null)], 410, $context, $this->getSourceContext());
        yield "

                        ";
        // line 412
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 413
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Which displays would you like this DMA to apply to?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 414
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"]];
        // line 425
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["displayGroupId", "single", ($context["title"] ?? null), null, null, "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 425, $context, $this->getSourceContext());
        yield "

                        ";
        // line 427
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Cost per Play");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 428
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The cost per play");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 429
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["costPerPlay", ($context["title"] ?? null), "{{dma.costPerPlay}}", ($context["helpText"] ?? null)], 429, $context, $this->getSourceContext());
        yield "

                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"field-impression-source\">
                                ";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Impression Source"), "html", null, true);
        yield "
                            </label>
                            <div class=\"col-sm-10\">
                                <select class=\"form-control\" name=\"impressionSource\" id=\"field-impression-source\">";
        // line 440
        yield "
                                  {{#each impressionSources}}
                                    <option name=\"{{value}}\"{{#eq value dma.impressionSource }} selected{{/eq}}>{{name}}</option>
                                  {{/each}}
                                ";
        yield "</select>
                                <small class=\"form-text text-muted\">";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("What is the source of this impression figure?"), "html", null, true);
        yield "</small>
                            </div>
                        </div>

                        ";
        // line 445
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Impressions per play");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 446
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The impressions per play");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 447
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["impressionsPerPlay", ($context["title"] ?? null), "{{dma.impressionsPerPlay}}", ($context["helpText"] ?? null)], 447, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"tab-dates\">
                        ";
        // line 450
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Start Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 451
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the start date for this DMA");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 452
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_date", ["startDate", ($context["title"] ?? null), "{{dma.startDate}}", ($context["helpText"] ?? null), "starttime-control", "", ""], 452, $context, $this->getSourceContext());
        yield "

                        ";
        // line 454
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("End Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 455
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the end date for this DMA");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 456
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_date", ["endDate", ($context["title"] ?? null), "{{dma.endDate}}", ($context["helpText"] ?? null), "endtime-control", "", ""], 456, $context, $this->getSourceContext());
        yield "

                        ";
        // line 458
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Days of the week");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 459
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Which days of the week should the DMA be active?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 460
        yield "                        ";
        $context["options"] = [["id" => 1, "name" => __("Monday")], ["id" => 2, "name" => __("Tuesday")], ["id" => 3, "name" => __("Wednesday")], ["id" => 4, "name" => __("Thursday")], ["id" => 5, "name" => __("Friday")], ["id" => 6, "name" => __("Saturday")], ["id" => 7, "name" => __("Sunday")]];
        // line 469
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["daysOfWeek[]", "dropdownmulti", ($context["title"] ?? null), null, ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null)], 469, $context, $this->getSourceContext());
        yield "

                        ";
        // line 471
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Start Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 472
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the start time for this DMA");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 473
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["startTime", ($context["title"] ?? null), "{{dma.startTime}}", ($context["helpText"] ?? null), "starttime-control", "", ""], 473, $context, $this->getSourceContext());
        yield "

                        ";
        // line 475
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("End Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 476
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the end time for this DMA");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 477
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_time", ["endTime", ($context["title"] ?? null), "{{dma.endTime}}", ($context["helpText"] ?? null), "endtime-control", "", ""], 477, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"tab-geo\">
                        ";
        // line 480
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["geoFence", "{{dma.geoFence}}"], 480, $context, $this->getSourceContext());
        yield "

                        ";
        // line 482
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("Draw areas on the map where you want this DMA to be active.")], 482, $context, $this->getSourceContext());
        yield "

                        <div id=\"audience-dma-map\"
                           data-map-tile-server=\"https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png\"
                           data-map-lat=\"";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DEFAULT_LAT", [], "any", false, false, false, 486), "html", null, true);
        yield "\"
                           data-map-long=\"";
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DEFAULT_LONG", [], "any", false, false, false, 487), "html", null, true);
        yield "\"
                           data-map-zoom=\"13\"
                           style=\"height: 500px; width: 100%\"></div>
                    </div>
                </div>
            </form>
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
        return "xibo-audience-connector-form-javascript.twig";
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
        return array (  714 => 487,  710 => 486,  703 => 482,  698 => 480,  691 => 477,  685 => 476,  680 => 475,  674 => 473,  668 => 472,  663 => 471,  657 => 469,  654 => 460,  648 => 459,  643 => 458,  637 => 456,  631 => 455,  626 => 454,  620 => 452,  614 => 451,  609 => 450,  602 => 447,  596 => 446,  591 => 445,  584 => 441,  576 => 440,  570 => 433,  562 => 429,  556 => 428,  551 => 427,  545 => 425,  542 => 414,  536 => 413,  531 => 412,  525 => 410,  519 => 409,  514 => 408,  508 => 406,  502 => 405,  497 => 404,  491 => 401,  485 => 400,  480 => 398,  476 => 397,  472 => 396,  447 => 374,  431 => 361,  424 => 357,  418 => 354,  265 => 204,  253 => 195,  233 => 178,  227 => 175,  190 => 141,  173 => 127,  169 => 126,  77 => 36,  72 => 33,  68 => 32,  64 => 31,  60 => 30,  56 => 29,  52 => 28,  48 => 27,  45 => 26,  40 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "xibo-audience-connector-form-javascript.twig", "/var/www/cms/views/xibo-audience-connector-form-javascript.twig");
    }
}
