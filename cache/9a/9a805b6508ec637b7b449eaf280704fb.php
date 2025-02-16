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

/* report-page.twig */
class __TwigTemplate_a28034621b408e0f11c4ec2c8c8224e6 extends Template
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
        // line 24
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "report-page.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "report-page.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["defaults"] ?? null), "availableReports", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["key"] => $context["reports"]) {
            // line 29
            yield "        <div class=\"row reports-available\">
            <div class=\"reports-available-title col-12\">
                <span>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "</span>
            </div>
            ";
            // line 33
            if ((($context["key"] == "Proof of Play") && CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["proof-of-play"], "method", false, false, false, 33))) {
                // line 34
                yield "                <div class=\"col-lg-3 col-md-6 col-12\">
                    <div class=\"widget content\" style=\"min-height: 210px\">
                        <div class=\"widget-body\">
                            <div class=\"widget-icon green\">
                                <a class=\"XiboFormButton btns\" href=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("stats.export.form"), "html", null, true);
                yield "\"> <i class=\"fa fa-external-link\"></i></a>
                            </div>
                            <div class=\"widget-content\">
                                <div class=\"report-title\">";
                // line 41
                echo __("Proof of Play");
                yield "</div>
                                <div class=\"comment\"><a class=\"XiboFormButton btns\" href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("stats.export.form"), "html", null, true);
                yield "\">";
                echo __("Export");
                yield "</a></div>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 49
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["reports"]);
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 50
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["report"], "hidden", [], "any", false, false, false, 50) == 0)) {
                    // line 51
                    yield "                    <div class=\"report-box col-lg-3 col-md-6 col-12\">
                        <div class=\"widget content\" style=\"min-height: 210px\">
                            <div class=\"widget-body\">
                                <div class=\"widget-icon ";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "color", [], "any", false, false, false, 54), "html", null, true);
                    yield " \">
                                    <i class=\"fa ";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "fa_icon", [], "any", false, false, false, 55), "html", null, true);
                    yield "\"></i>
                                </div>
                                <div class=\"widget-content\">
                                    <div class=\"report-title\">  ";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "description", [], "any", false, false, false, 58), "html", null, true);
                    yield "  </div>
                                    <div class=\"comment\"><a href=\"";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("report.form", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["report"], "name", [], "any", false, false, false, 59)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 59), "html", null, true);
                    yield "</a></div>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>
                ";
                }
                // line 66
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['reports'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 72
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        function statsExportFormSelect(dialog) {
            var fromDtLink;
            var toDtLink;
            var displayId;

            \$(dialog).find(\"input, select\").on(\"change\", function() {

                fromDtLink =  \$(dialog).find(\"#fromDt\").val();
                toDtLink =  \$(dialog).find(\"#toDt\").val();
                displayId =  \$(dialog).find(\"#displayId\").val();

                if (!(
                    fromDtLink === null ||  toDtLink === null  ||
                    fromDtLink === '' ||  toDtLink === ''  ||
                    fromDtLink === undefined || toDtLink === undefined
                )) {

                    \$(dialog).find(\".total-stat\").remove();
                    \$(dialog).find('.save-button').prop('disabled', true);
                    \$(dialog).find(\".loading-overlay\").show();

                    \$.ajax({
                        type: \"get\",
                        url: \"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("stats.getExportStatsCount"), "html", null, true);
        yield "\",
                        cache: false,
                        dataType: \"json\",
                        data: {
                            fromDt: fromDtLink,
                            toDt: toDtLink,
                            displayId: displayId
                        },

                        success: function(response) {

                            \$(dialog).find(\".loading-overlay\").hide();

                            if (response.success === false) {
                                \$(dialog).find(\"#totalStat\").append('<div class=\"total-stat alert alert-danger\">' + response.message + '</strong></div>');
                                return;
                            } else {
                                var total = response.data.total;
                                \$(dialog).find(\"#totalStat\").append('<div class=\"total-stat alert alert-success\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Total number of records to be exported "), "html", null, true);
        yield "' + '<strong>' + total + '</strong></div>');
                            }

                            \$(dialog).find('.save-button').prop('disabled', false);
                        }
                    });
                }
            });
        }

        function statsExportFormSubmit() {
            var form = \$(\"#statisticsExportForm\");
            var valid = true;

            var validateForm = function(element) {
                if (element.val() == null || element.val() == '') {
                    valid = false;
                    element.closest('.form-group').removeClass('has-success').addClass('has-error');
                } else {
                    element.closest('.form-group').addClass('has-success').removeClass('has-error');
                }
            };

            validateForm(form.find(\"#fromDt\"));
            validateForm(form.find(\"#toDt\"));

            if (valid) {
                form.submit();
                form.find(\".form-error\").remove();

                XiboDialogClose();

            } else {
                // Remove the spinner
                form.closest(\".modal-dialog\").find(\".saving\").remove();
                // https://github.com/xibosignage/xibo/issues/1589
                form.closest(\".modal-dialog\").find(\".save-button\").removeClass(\"disabled\");

                if (!form.find(\".form-error\").length) {
                    form.append('<div class=\"alert alert-danger form-error\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form field is required."), "html", null, true);
        yield "</div>');
                }
            }
        }

        // Or use this to Open link in same window (similar to target=_blank)
        \$(\".report-box\").click(function(){
            window.location = \$(this).find(\"a:first\").attr(\"href\");
            return false;
        });

    </script>

    <style>
        .row-flex {
            display: flex;
            flex-wrap: wrap;
        }

        .content {
            height: 100%;
            padding: 20px;
            border-radius: 5px;
        }

        .reports-available {
            background-color: #d2e0db;
            border: 1px solid #d2e0db;
            border-radius: 5px;
            margin: 0 1rem 1rem 1rem !important;
        }

        .reports-available-title {
            width: 100%;
            margin-top: 1rem;
            color: #273759;
            font-size: 1.4rem;
        }

        div.report-box {
            position: relative;
        }

        div.report-box:hover {
            cursor: pointer;
            opacity: .9;
        }

        .widget .widget-content .report-title {
            font-size: 1.15rem;
            padding: 10px 0 0;
            display: block;
        }

        .widget .widget-content .comment {
            font-size: 1rem;
        }
    </style>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "report-page.twig";
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
        return array (  249 => 154,  207 => 115,  186 => 97,  158 => 73,  154 => 72,  144 => 67,  138 => 66,  126 => 59,  122 => 58,  116 => 55,  112 => 54,  107 => 51,  104 => 50,  99 => 49,  87 => 42,  83 => 41,  77 => 38,  71 => 34,  69 => 33,  64 => 31,  60 => 29,  55 => 28,  51 => 27,  46 => 24,  44 => 25,  37 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "report-page.twig", "/var/www/cms/views/report-page.twig");
    }
}
