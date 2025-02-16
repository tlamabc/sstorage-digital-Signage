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

/* fault-page.twig */
class __TwigTemplate_cc6492dfa90f2e5df1da1b604c4bec2b extends Template
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
        $this->parent = $this->loadTemplate("authed.twig", "fault-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 27
        echo __("Report Fault");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"board\">
                    <div class=\"board-inner\">
                        <ul class=\"nav fault nav-tabs\" id=\"fault\">
                            <div class=\"liner\"></div>
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" href=\"#home\" data-toggle=\"tab\">
                                    <span class=\"round-tabs one\"> <i class=\"fa fa-home\"></i> </span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#checklist\" data-toggle=\"tab\">
                                    <span class=\"round-tabs two\"> <i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> </span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#turnons\" data-toggle=\"tab\">
                                    <span class=\"round-tabs three\"> <i class=\"fa fa-bug\" aria-hidden=\"true\"></i> </span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#replicate\" data-toggle=\"tab\">
                                    <span class=\"round-tabs four\"> <i class=\"fa fa-clone\" aria-hidden=\"true\"></i> </span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#collect\" data-toggle=\"tab\">
                                    <span class=\"round-tabs five\"> <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i> </span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#turnoff\" data-toggle=\"tab\">
                                    <span class=\"round-tabs six\">  <span><i class=\"fa fa-bug\"></i><i class=\"fa fa-ban fa-stack-2x\"></i></span> </span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#ask\" data-toggle=\"tab\">
                                    <span class=\"round-tabs seven\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade in active show\" id=\"home\">
                            <h3 class=\"head text-center\">";
        // line 73
        echo __("Report an application fault");
        // line 74
        yield "                                <span style=\"color:#f48260;\"></span>
                            </h3>

                            ";
        // line 77
        if (($context["urlError"] ?? null)) {
            // line 78
            yield "                                <p class=\"alert alert-info\">";
            echo __("CMS configuration warning, it is very unlikely that /web/ should be in the URL. This usually means that the DocumentRoot of the web server is wrong and may put your CMS at risk if not corrected.");
            yield "</p>
                            ";
        }
        // line 80
        yield "
                            ";
        // line 81
        if (($context["binLogError"] ?? null)) {
            // line 82
            yield "                                <p class=\"alert alert-info\">";
            echo __("The CMS may not be working as expected because MySQL BINLOG format is set to STATEMENT. This can effect sessions and should be set to ROW or MIXED.");
            yield "</p>
                            ";
        }
        // line 84
        yield "
                            <p class=\"narrow text-center\">";
        // line 85
        echo __("Before reporting a fault it would be appreciated if you follow the steps. Click start ");
        yield "</p>

                            <form class=\"form-horizontal text-center\" id=\"home_form\" name=\"home_form\" role=\"form\">
                                <fieldset>
                                    <button type=\"submit\" href=\"#checklist\" name=\"home_form\" class=\"btn-submit btn btn-success\">
                                        ";
        // line 90
        echo __("Start");
        // line 91
        yield "                                        <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></button>
                                </fieldset>
                            </form>
                        </div>
                        <div class=\"tab-pane fade\" id=\"checklist\">
                            <p class=\"text-center\">";
        // line 96
        echo __("Check that the Environment passes all the CMS Environment checks.");
        yield "</p>

                            ";
        // line 98
        if (($context["environmentFault"] ?? null)) {
            // line 99
            yield "                                <p class=\"alert alert-danger narrow text-center\">";
            echo __("There is a critical error that you should resolve first.");
            yield "</p>
                            ";
        } elseif (        // line 100
($context["environmentWarning"] ?? null)) {
            // line 101
            yield "                                <p class=\"alert alert-warning narrow text-center\">";
            echo __("There is a warning on the checklist that you should resolve.");
            yield "</p>
                            ";
        } else {
            // line 103
            yield "                                <p class=\"alert alert-success narrow text-center\">";
            echo __("All checks pass. Click next to continue");
            yield "</p>
                            ";
        }
        // line 105
        yield "
                            <br/>
                            ";
        // line 107
        if ((($context["environmentFault"] ?? null) || ($context["environmentWarning"] ?? null))) {
            // line 108
            yield "                                <table id=\"checksWithFaults\" class=\"table table-striped\">
                                    <thead>
                                    <tr>
                                        <th>";
            // line 111
            echo __("Item");
            yield "</th>
                                        <th>";
            // line 112
            echo __("Status");
            yield "</th>
                                        <th>";
            // line 113
            echo __("Advice");
            yield "</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["environmentCheck"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["check"]) {
                // line 118
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["check"], "status", [], "any", false, false, false, 118) != 1)) {
                    // line 119
                    yield "                                            <tr>
                                                <td>";
                    // line 120
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["check"], "item", [], "any", false, false, false, 120), "html", null, true);
                    yield "</td>
                                                <td>
                                                    ";
                    // line 122
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["check"], "status", [], "any", false, false, false, 122) == 0)) {
                        // line 123
                        yield "                                                        <span class=\"fa fa-times\"></span>
                                                    ";
                    } else {
                        // line 125
                        yield "                                                        <span class=\"fa fa-exclamation\"></span>
                                                    ";
                    }
                    // line 127
                    yield "                                                </td>
                                                <td>";
                    // line 128
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["check"], "advice", [], "any", false, false, false, 128), "html", null, true);
                    yield "</td>
                                            </tr>
                                        ";
                }
                // line 131
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['check'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            yield "                                    </tbody>
                                </table>

                                <p class=\"text-center\"><b>";
            // line 135
            echo __("All other checks passed");
            yield "</b></p>

                            ";
        }
        // line 138
        yield "                            <div class=\"text-center\">
                                <a id=\"toggler\" href=\"#\" class=\"btn btn-info\">";
        // line 139
        echo __("I want to see the list anyway.");
        yield "</a>
                            </div>
                            <br/>
                            ";
        // line 142
        if (($context["environmentCheck"] ?? null)) {
            // line 143
            yield "                                <table id=\"checksWithSuccess\" class=\"table table-striped hide-table\">
                                    <thead>
                                    <tr>
                                        <th>";
            // line 146
            echo __("Item");
            yield "</th>
                                        <th>";
            // line 147
            echo __("Status");
            yield "</th>
                                        <th>";
            // line 148
            echo __("Advice");
            yield "</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["environmentCheck"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["check"]) {
                // line 153
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["check"], "status", [], "any", false, false, false, 153) == 1)) {
                    // line 154
                    yield "                                            <tr>
                                                <td>";
                    // line 155
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["check"], "item", [], "any", false, false, false, 155), "html", null, true);
                    yield "</td>
                                                <td>
                                                    ";
                    // line 157
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["check"], "status", [], "any", false, false, false, 157) == 1)) {
                        // line 158
                        yield "                                                        <span class=\"fa fa-check fa-2x text-success\"></span>
                                                    ";
                    }
                    // line 160
                    yield "                                                </td>
                                                <td>";
                    // line 161
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["check"], "advice", [], "any", false, false, false, 161), "html", null, true);
                    yield "</td>
                                            </tr>
                                        ";
                }
                // line 164
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['check'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "                                    </tbody>
                                </table>
                            ";
        }
        // line 168
        yield "

                            <form class=\"form-horizontal text-center\" id=\"checklist_form\" name=\"checklist_form\" role=\"form\">
                                <fieldset>
                                    <button type=\"submit\" href=\"#home\" name=\"home_form\" class=\"btn-submit btn btn-info\">
                                        <i class=\"fa fa-chevron-circle-left\" aria-hidden=\"true\"></i> ";
        // line 173
        echo __("Previous");
        // line 174
        yield "                                    </button>
                                    <button type=\"submit\" href=\"#turnons\" name=\"checklist_form\" class=\"btn-submit btn btn-primary\">
                                        ";
        // line 176
        echo __("Next");
        yield " <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                    </button>
                                </fieldset>
                            </form>
                        </div>

                        <div class=\"tab-pane fade\" id=\"turnons\">

                            <p class=\"narrow text-center\">";
        // line 184
        echo __("Turn ON full auditing and debugging.");
        yield "</p>
                            <form id=\"1\" class=\"XiboAutoForm text-center \" action=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("fault.debug.on"), "html", null, true);
        yield "\" method=\"put\" onsubmit=\"return checkFormOn(this);\">
                                <input class=\"btn btn-success\" type=\"submit\" name=\"onDeb\" value=\"";
        // line 186
        echo __(" Turn ON Debugging");
        yield "\"></input>
                            </form>
                            <br/>
                            <form class=\"form-horizontal text-center\" id=\"turnons_form\" name=\"turnons_form\" role=\"form\">
                                <fieldset>
                                    <button type=\"submit\" href=\"#checklist\" name=\"turnons_form\" class=\"btn-submit btn btn-info\">
                                        <i class=\"fa fa-chevron-circle-left\" aria-hidden=\"true\"></i> ";
        // line 192
        echo __("Previous");
        // line 193
        yield "                                    </button>
                                    <button type=\"submit\" href=\"#replicate\" name=\"turnons_form\" class=\"btn-submit btn btn-primary\">
                                        ";
        // line 195
        echo __("Next");
        yield " <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                    </button>
                                </fieldset>
                            </form>

                        </div>


                        <div class=\"tab-pane fade text-center\" id=\"replicate\">
                            <p class=\"narrow\">";
        // line 204
        echo __("Recreate the Problem in a new window.");
        yield "</p>
                            <p class=\"narrow\">";
        // line 205
        echo __("Please open a new window and recreate the problem. While you do that we are going to log all of the actions taken in a text based log. We won't capture screenshots or videos, so if you feel that this would be useful please capture those manually and add them to the zip file you will download in the next step.");
        yield "</p>
                            <br/>
                            <a href=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        yield "\" target=\"_blank\" class=\"btn btn-success\"><i class=\"fa fa-external-link\"></i> ";
        echo __("Open a new window");
        yield "</a>
                            <br/>
                            <br/>
                            <form class=\"form-horizontal text-center\" id=\"replicate_form\" name=\"replicate_form\" role=\"form\">
                                <fieldset>
                                    <button type=\"submit\" href=\"#turnons\" name=\"replicate_form\" class=\"btn-submit btn btn btn-info\">
                                        <i class=\"fa fa-chevron-circle-left\" aria-hidden=\"true\"></i> ";
        // line 213
        echo __("Previous");
        // line 214
        yield "                                    </button>
                                    <button type=\"submit\" href=\"#collect\" name=\"replicate_form\" class=\"btn-submit btn btn-primary\">
                                        ";
        // line 216
        echo __("Next");
        yield " <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                    </button>
                                </fieldset>
                            </form>
                        </div>

                        <div class=\"tab-pane fade\" id=\"collect\">
                            <p class=\"narrow text-center\">
                                ";
        // line 224
        echo __("Automatically collect and export relevant information into a text file.");
        // line 225
        yield "                                ";
        echo __("Please save this file to your PC.");
        // line 226
        yield "                            </p>
                            <p class=\"narrow text-center\">
                                ";
        // line 228
        echo __("What items would you like to save?");
        // line 229
        yield "                            </p>
                            <div class=\"col-md-6 offset-md-3 \">
                                <div class=\"funkyradio\">
                                    <div class=\"funkyradio-primary\">
                                        <input type=\"checkbox\" name=\"outputVersion\" id=\"outputVersion\" checked/>
                                        <label for=\"outputVersion\">";
        // line 234
        echo __("Version Information");
        yield "</label>
                                    </div>
                                    <div class=\"funkyradio-primary\">
                                        <input type=\"checkbox\" name=\"outputLog\" id=\"outputLog\" checked/>
                                        <label for=\"outputLog\">";
        // line 238
        echo __("Log");
        yield "</label>
                                    </div>
                                    <div class=\"funkyradio-primary\">
                                        <input type=\"checkbox\" name=\"outputEnvCheck\" id=\"outputEnvCheck\" checked/>
                                        <label for=\"outputEnvCheck\">";
        // line 242
        echo __("Environment Check");
        yield "</label>
                                    </div>
                                    <div class=\"funkyradio-primary\">
                                        <input type=\"checkbox\" name=\"outputSettings\" id=\"outputSettings\" checked/>
                                        <label for=\"outputSettings\">";
        // line 246
        echo __("Settings");
        yield "</label>
                                    </div>
                                    <div class=\"funkyradio-primary\">
                                        <input type=\"checkbox\" name=\"outputDisplays\" id=\"outputDisplays\" checked/>
                                        <label for=\"outputDisplays\">";
        // line 250
        echo __("Display List");
        yield "</label>
                                    </div>
                                    <div class=\"funkyradio-primary\">
                                        <input type=\"checkbox\" name=\"outputDisplayProfile\" id=\"outputDisplayProfile\" checked/>
                                        <label for=\"outputDisplayProfile\">";
        // line 254
        echo __("Display Settings Profile (included with each display)");
        yield "</label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-12 text-center\">
                                <a id=\"dldata\" class=\"btn btn-success text-center\" type=\"submit\" href=\"#\" data-base-href=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("fault.collect"), "html", null, true);
        yield "\">
                                    <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i> ";
        // line 261
        echo __("Collect and Save Data");
        // line 262
        yield "                                </a> <br/><br/>
                                <form class=\"form-horizontal text-center\" id=\"collect_form\" name=\"collect_form\" role=\"form\">
                                    <button type=\"submit\" href=\"#replicate\" name=\"collect_form\" class=\"btn-submit btn btn-info\">
                                        <i class=\"fa fa-chevron-circle-left\" aria-hidden=\"true\"></i>";
        // line 265
        echo __("Previous");
        // line 266
        yield "                                    </button>
                                    <button type=\"submit\" href=\"#turnoff\" name=\"collect_form\" class=\"btn-submit btn btn-primary\">
                                        ";
        // line 268
        echo __("Next");
        yield " <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                    </button>
                                </form>
                            </div>


                        </div>

                        <div class=\"tab-pane fade text-center\" id=\"turnoff\">
                            <p class=\"narrow\">";
        // line 277
        echo __("Turn full auditing and debugging OFF.");
        yield "</p>

                            <form id=\"2\" class=\"XiboAutoForm text-center \" action=\"";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("fault.debug.off"), "html", null, true);
        yield "\" method=\"put\" onsubmit=\"return checkFormOff(this);\">
                                <input class=\"btn btn-danger\" type=\"submit\" name=\"offDeb\" value=\"";
        // line 280
        echo __(" Turn OFF Debugging");
        yield "\"></input>
                            </form>
                            <br/>
                            <form class=\"form-horizontal text-center\" id=\"turnoff_form\" name=\"turnoff_form\" role=\"form\">
                                <fieldset>
                                    <button type=\"submit\" href=\"#collect\" name=\"turnoff_form\" class=\"btn-submit btn btn-info\">
                                        <i class=\"fa fa-chevron-circle-left\" aria-hidden=\"true\"></i> ";
        // line 286
        echo __("Previous");
        // line 287
        yield "                                    </button>
                                    <button type=\"submit\" href=\"#ask\" name=\"turnoff_form\" class=\"btn-submit btn btn-primary\">
                                        ";
        // line 289
        echo __("Next");
        yield " <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                    </button>
                                </fieldset>
                            </form>
                        </div>


                        <div class=\"tab-pane fade\" id=\"ask\">
                            <div class=\"text-center\"><i class=\"img-intro icon-checkmark-circle\"></i></div>
                            <h3 class=\"head text-center\">
                                ";
        // line 299
        echo __("That's it!");
        // line 300
        yield "                            </h3>
                            <p class=\"narrow text-center\">
                                ";
        // line 302
        echo __("Click on the below link to open the bug report page for this release.");
        // line 303
        yield "                                ";
        echo __("Describe the problem and include a link to the fault archive you obtained earlier - please check this archive for sensitive information, redact as appropriate, and upload it somewhere publically accessible.");
        // line 304
        yield "                            </p>
                            <form class=\"text-center\">
                                <fieldset>
                                    <a class=\"btn btn-success\" href=\"";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["product_support_url", "https://community.xibo.org.uk/c/support"], "method", false, false, false, 307), "html", null, true);
        yield "\" target=\"_blank\">
                                        <i class=\"fa fa-question\" aria-hidden=\"true\"></i> ";
        // line 308
        echo __("Ask a question");
        // line 309
        yield "                                    </a>
                                    <button type=\"submit\" href=\"#home\" name=\"turnoff_form\" class=\"btn-submit btn btn-info\">
                                        <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 311
        echo __("Start again");
        // line 312
        yield "                                    </button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
";
        return; yield '';
    }

    // line 325
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 326
        yield "        <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
            // Fault Page List switcher
            \$(function () {
                \$('a[title]').tooltip();
                \$('.btn-submit').on('click', function (e) {
                    var formname = \$(this).attr('name');
                    var tabname = \$(this).attr('href');
                    if (\$('#' + formname)[0].checkValidity()) { /* Only works in Firefox/Chrome need polyfill for IE9, Safari. */
                        e.preventDefault();
                        \$('ul.nav li a[href=\"' + tabname + '\"]').parent().removeClass('disabled');
                        \$('ul.nav li a[href=\"' + tabname + '\"]').trigger('click');
                    }
                });
                \$('ul.nav li').on('click', function (e) {
                    if (\$(this).hasClass('disabled')) {
                        e.preventDefault();
                        return false;
                    }
                });
            });

        </script>


        <script type=\"text/javascript\" nonce=\"";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">

            \$(function () {
                \$('[data-toggle=\"popover\"]').popover()
            })


            function checkFormOn(form) {
                form.onDeb.disabled = true;
                form.onDeb.value = \"Debugging mode ON\";
                return true;
            }

            function checkFormOff(form) {
                form.offDeb.disabled = true;
                form.offDeb.value = \"Debugging mode Off\";
                return true;
            }

            \$(\"#dldata\").on(\"click\", function (event) {
                if (\$(this).hasClass(\"disabled\")) {
                    event.preventDefault();
                }

                // Disable download button when downloading
                \$(this).addClass(\"btn-success disabled\");
                \$(\"#dldata\").text('";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Downloading file"), "html", null, true);
        yield "');
                \$(\"#dldata\").prop(\"href\", \$(\"#dldata\").data().baseHref + \"?\" + \$(\".funkyradio\").find(\"input[type=checkbox]\").serialize());


                //Re Enables download button after new checkbox selection
                \$('.funkyradio').click(function () {
                    if (\$(this).is(':checked')) {
                        \$('#dldata').removeClass('disabled');

                    } else {
                        \$('#dldata').removeClass('disabled').attr('enabled');
                        ;
                        \$(\"#dldata\").text('";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Download selected items"), "html", null, true);
        yield "');
                    }
                });

            });


        </script>

        <script>
            \$(\"#toggler\").click(function () {
                \$(this).text(function (i, v) {
                    return v === '";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hide Environment checks"), "html", null, true);
        yield "' ? '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show Environment checks"), "html", null, true);
        yield "' : '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hide Environment checks"), "html", null, true);
        yield "'
                })
                \$(\"#checksWithSuccess\").toggle();
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
        return "fault-page.twig";
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
        return array (  683 => 400,  668 => 388,  653 => 376,  624 => 350,  596 => 326,  592 => 325,  577 => 312,  575 => 311,  571 => 309,  569 => 308,  565 => 307,  560 => 304,  557 => 303,  555 => 302,  551 => 300,  549 => 299,  536 => 289,  532 => 287,  530 => 286,  521 => 280,  517 => 279,  512 => 277,  500 => 268,  496 => 266,  494 => 265,  489 => 262,  487 => 261,  483 => 260,  474 => 254,  467 => 250,  460 => 246,  453 => 242,  446 => 238,  439 => 234,  432 => 229,  430 => 228,  426 => 226,  423 => 225,  421 => 224,  410 => 216,  406 => 214,  404 => 213,  393 => 207,  388 => 205,  384 => 204,  372 => 195,  368 => 193,  366 => 192,  357 => 186,  353 => 185,  349 => 184,  338 => 176,  334 => 174,  332 => 173,  325 => 168,  320 => 165,  314 => 164,  308 => 161,  305 => 160,  301 => 158,  299 => 157,  294 => 155,  291 => 154,  288 => 153,  284 => 152,  277 => 148,  273 => 147,  269 => 146,  264 => 143,  262 => 142,  256 => 139,  253 => 138,  247 => 135,  242 => 132,  236 => 131,  230 => 128,  227 => 127,  223 => 125,  219 => 123,  217 => 122,  212 => 120,  209 => 119,  206 => 118,  202 => 117,  195 => 113,  191 => 112,  187 => 111,  182 => 108,  180 => 107,  176 => 105,  170 => 103,  164 => 101,  162 => 100,  157 => 99,  155 => 98,  150 => 96,  143 => 91,  141 => 90,  133 => 85,  130 => 84,  124 => 82,  122 => 81,  119 => 80,  113 => 78,  111 => 77,  106 => 74,  104 => 73,  55 => 27,  52 => 26,  48 => 25,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "fault-page.twig", "/var/www/cms/views/fault-page.twig");
    }
}
