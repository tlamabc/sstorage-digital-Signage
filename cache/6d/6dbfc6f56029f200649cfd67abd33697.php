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

/* notification-page.twig */
class __TwigTemplate_3f9f49497f87549b4845278c65c223db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actionMenu' => [$this, 'block_actionMenu'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "notification-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "notification-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notification Centre"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["notification.add"], "method", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-success XiboFormButton\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("notification.add.form"), "html", null, true);
            yield "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Notification");
            yield "</button>
        ";
        }
        // line 33
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 37
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 39
        echo __("Notification Centre");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"notificationView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 45
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Status");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        yield "                            ";
        $context["option1"] = __("My Read");
        // line 47
        yield "                            ";
        $context["option2"] = __("My Unread");
        // line 48
        yield "                            ";
        $context["option3"] = __("All");
        // line 49
        yield "                            ";
        $context["values"] = [["id" => 1, "value" => ($context["option1"] ?? null)], ["id" => 0, "value" => ($context["option2"] ?? null)]];
        // line 50
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 50)) {
            // line 51
            yield "                                ";
            $context["values"] = Twig\Extension\CoreExtension::merge(($context["values"] ?? null), [["id" => null, "value" => ($context["option3"] ?? null)]]);
            // line 52
            yield "                            ";
        }
        // line 53
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["read", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value"], 53, $context, $this->getSourceContext());
        yield "

                            ";
        // line 55
        $context["options"] = [["optionid" => "", "option" => "All"], ["optionid" => "custom", "option" => __("Custom")], ["optionid" => "dataset", "option" => __("DataSet")], ["optionid" => "display", "option" => __("Display")], ["optionid" => "layout", "option" => __("Layout")], ["optionid" => "library", "option" => __("Library")], ["optionid" => "report", "option" => __("Report")], ["optionid" => "schedule", "option" => __("Schedule")]];
        // line 65
        yield "                            ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        yield "
                            ";
        // line 67
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["type", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option", ($context["helpText"] ?? null)], 67, $context, $this->getSourceContext());
        yield "

                            ";
        // line 69
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["releaseDt", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", ""], 70, $context, $this->getSourceContext());
        yield "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"notifications\" class=\"table table-striped\" data-state-preference-name=\"notificationGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 78
        echo __("Subject");
        yield "</th>
                                <th>";
        // line 79
        echo __("Type");
        yield "</th>
                                <th>";
        // line 80
        echo __("Date");
        yield "</th>
                                <th>";
        // line 81
        echo __("Interrupt?");
        yield "</th>
                                <th class=\"rowMenu\"></th>
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

    // line 95
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
      \$(function() {
        var table = \$(\"#notifications\").DataTable({
          language: dataTablesLanguage,
          dom: dataTablesTemplate,
          serverSide: true,
          stateSave: true,
          stateDuration: 0,
          responsive: true,
          stateLoadCallback: dataTableStateLoadCallback,
          stateSaveCallback: dataTableStateSaveCallback,
          filter: false,
          searchDelay: 3000,
          order: [[ 1, 'desc']],
          ajax: {
            url: \"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("notification.search"), "html", null, true);
        yield "\",
            data: function(d) {
              \$.extend(d, \$('#notifications').closest('.XiboGrid').find('.FilterDiv form').serializeObject());
            }
          },
          columns: [
            {
              data: 'subject',
              responsivePriority: 2
            },
            {
              data: 'type',
              responsivePriority: 2
            },
            {
              data: 'releaseDt',
              responsivePriority: 2,
              render: dataTableDateFromUnix
            },
            {
              data: 'isInterrupt',
              responsivePriority: 3,
              render: dataTableTickCrossColumn
            },
            {
              orderable: false,
              responsivePriority : 1,
              data: dataTableButtonsColumn
            }
          ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#notifications_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });

        const notificationShow = _.debounce(function() {
          const data = table.row(\$(this)).data();
          let showUrl = \"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("notification.show", ["id" => ":rowId"]), "html", null, true);
        yield "\".replace(':rowId', data.notificationId);
          XiboFormRender(showUrl);
        }, 500);

        \$(\"#notifications tbody\").on('dblclick', 'tr', notificationShow);
      });

      var attachmentFormSubmit = function(dialog) {
        var form = \$(dialog);

        // Update any text editor instances we have
        for(var editor in formHelpers.ckEditorInstances) {
          formHelpers.updateCKEditor(
            formHelpers.ckEditorInstances[editor].id,
          );
        }

        // Submit via ajax - change the attachment color on success
        \$.ajax({
          type: form.attr(\"method\"),
          url: form.attr(\"action\"),
          cache: false,
          dataType: \"json\",
          data: \$(form).serialize(),
          success: function(xhr, textStatus, error) {

            XiboSubmitResponse(xhr, form);

            if (xhr.success) {
              console.debug('success');
            }
          },
          error: function(xhr, textStatus, errorThrown) {
            SystemMessage(xhr.responseText, false);
          }
        });
      }

      var attachmentFormSetup = function(dialog) {
        // Conjure up a text editor
        formHelpers.createCKEditor('notificationMessage', \$('#body')).then((editor) => {
          // Update text area when unfocusing editor
          editor.ui.focusTracker.on('change:isFocused', (evt, name, isFocused ) => {
            if (!isFocused) {
              // Update editor
              formHelpers.updateCKEditor('notificationMessage');
            }
          });
        });

        // Make sure when we close the dialog we also destroy the editor
        dialog.on(\"hide.bs.modal\", function(event) {
          if (\$(event.target).hasClass('bootbox')) {
            formHelpers.destroyCKEditor('notificationMessage');
          }
        });

        var attachmentImageList = \$('#attachmentImageId');
        var attachmentChanged = false;

        // Bind to the attachment add button click
        \$(\"#attachmentAddButton\").on(\"click\", function(e) {
          notificationAddFormAttachmentButtonClicked(e, dialog);
        });

        // Validate form
        forms.validateForm(
          dialog.find('#notificationForm'), // form
          dialog, // container
          {
            submitHandler: attachmentFormSubmit,
          },
        );
      };

      /**
       * Add notification attachment add image button
       * @param e the event
       * @param dialog the dialog
       */
      function notificationAddFormAttachmentButtonClicked(e, dialog) {
        e.preventDefault();

        // Open an upload form
        var upload = openUploadForm({
          url: \"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("notification.addattachment"), "html", null, true);
        yield "\",
          title: \"";
        // line 239
        echo __("Browse/Add attachment");
        yield "\",
          videoImageCovers: false,
          animateDialog: false,
          className: \"second-dialog\",
          buttons: {
            main: {
              label: \"";
        // line 245
        echo __("Done");
        yield "\",
              className: \"btn-primary btn-bb-main\",
              callback: function () {
                upload.modal('hide');
              }
            }
          },
          templateOptions: {
            multi: false,
            trans: {
              addFiles: \"";
        // line 255
        echo __("Browse/Add Attachment");
        yield "\",
              startUpload: \"";
        // line 256
        echo __("Start Upload");
        yield "\",
              cancelUpload: \"";
        // line 257
        echo __("Cancel Upload");
        yield "\"
            },
            upload: {
              maxSize: ";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 260), "html", null, true);
        yield ",
              maxSizeMessage: \"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 261), "html", null, true);
        yield "\",
              validExt: \"jpg|jpeg|png|bmp|gif|zip|pdf\"
            },
            folderSelector: false
          },
          uploadDoneEvent: function (data) {
            // Get the attachment filename
            var filename = data.result.files[0].name;

            dialog.find(\"input[name='attachedFilename']\").remove();

            // Create a hidden field with the filename
            \$(\"#notificationForm\").append(\$(\"<input type='hidden' name='attachedFilename' value='\" + filename + \"'/>\"));

            // Close
            upload.modal('hide');
          }
        });
      }
    </script>

    ";
        // line 283
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 283), "html", null, true);
        yield "dist/wysiwygEditor.bundle.min.js?v=";
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
        return "notification-page.twig";
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
        return array (  426 => 283,  402 => 261,  398 => 260,  392 => 257,  388 => 256,  384 => 255,  371 => 245,  362 => 239,  358 => 238,  270 => 153,  225 => 111,  206 => 96,  202 => 95,  184 => 81,  180 => 80,  176 => 79,  172 => 78,  160 => 70,  155 => 69,  150 => 67,  147 => 66,  141 => 65,  139 => 55,  133 => 53,  130 => 52,  127 => 51,  124 => 50,  121 => 49,  118 => 48,  115 => 47,  112 => 46,  107 => 45,  100 => 41,  95 => 39,  92 => 38,  88 => 37,  79 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "notification-page.twig", "/var/www/cms/views/notification-page.twig");
    }
}
