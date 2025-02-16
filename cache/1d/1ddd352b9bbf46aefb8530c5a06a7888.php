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

/* dataset-data-connector-test-page.twig */
class __TwigTemplate_4dc3f6ebfefbab1563cbc39c40182d57 extends Template
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
        yield "<!DOCTYPE html>
<html>
    <head>
        <title>Data Connector Test</title>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"public-path\" content=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 31), "html", null, true);
        yield "\"/>

        <link rel=\"shortcut icon\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/favicon.ico"], "method", false, false, false, 33), "html", null, true);
        yield "\" />
    </head>
    <body>
        <script type=\"text/javascript\" nonce=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
          window.xiboDC = (function() {
            'use strict';

            const mainLib = {
              /**
               * Inject the data connector event parameters and dataSetId
               * @param {string} dataSetId - The id of the dataset
               * @param {string} dataSetParameters - A url string of parameters
               */
              initialise: function(dataSetId, dataSetParameters) {
                window.dataSetId = dataSetId;
                new URLSearchParams(dataSetParameters).forEach(function (value, key) {
                  window[key] = value;
                });

                if (typeof (window.onInit) == 'function') {
                  window.onInit();
                }
              },

              /**
               * Set the realtime into the player. Called from Data Connector.
               * @param {string} dataKey A dataKey to store this data
               * @param {String} data The data as string
               * @param {Object} options - Request options
               * @param {callback} options.done Optional
               * @param {callback} options.error Optional
               */
              setData: function(dataKey, data, {done, error} = {}) {
                // Persist the data we've been given
                window.parent.receiveData('set', {
                  dataKey: dataKey,
                  data: data
                });
                if (typeof (done) == 'function') {
                  done(true);
                }
              },

              /**
               * Notify main application that we have new data. Called from data collector.
               * @param {string} dataKey - The key of the data that has been changed.
               */
              notifyHost: function(dataKey) {
                // Update the table.
                window.parent.receiveData('notify', dataKey);
              },

              /**
               * Make a request to the configured server/player
               * @param  {string} path - Request path
               * @param  {Object} [options] - Optional params
               * @param  {string} [options.type]
               * @param  {Object[]} [options.headers]
               *  Request headers in the format {key: key, value: value}
               * @param  {Object} [options.data]
               * @param  {callback} [options.done]
               * @param  {callback} [options.error]
               */
              makeRequest: function(path, {type, headers, data, done, error} = {}) {
                window.parent.makeRequest(path, {type, headers, data, done, error});
              },

              /**
               * Set Schedule Criteria
               * @param {string} metric The Metric Name
               * @param {string} value The Value
               * @param {int} ttl A TTL in seconds
               */
              setCriteria: function(metric, value, ttl) {
                window.parent.receiveData('criteria', {
                  dataKey: metric,
                  data: {
                    metric: metric,
                    value: value || null,
                    ttl: ttl,
                  }
                });
              },
            }
            return mainLib;
          })();

          // Capture console logs and report out.
          (function () {
            const log = console.log;
            console.log = function () {
              log.apply(this, Array.prototype.slice.call(arguments));
              window.parent.receiveData('log', Array.prototype.slice.call(arguments));
            };
          }());

          // Say when we're loaded.
          window.onload = function () {
            window.parent.receiveData('loaded', null);
          }
        </script>
        <script type=\"text/javascript\" nonce=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
          ";
        // line 135
        yield ($context["script"] ?? null);
        yield "
        </script>
    </body>
</html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dataset-data-connector-test-page.twig";
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
        return array (  164 => 135,  160 => 134,  59 => 36,  53 => 33,  48 => 31,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "dataset-data-connector-test-page.twig", "/var/www/cms/views/dataset-data-connector-test-page.twig");
    }
}
