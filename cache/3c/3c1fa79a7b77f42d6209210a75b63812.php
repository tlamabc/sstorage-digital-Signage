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

/* display-page-manage.twig */
class __TwigTemplate_e88c1a4e0d757dbe7f75573751624654 extends Template
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
        // line 24
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "display-page-manage.twig", 24)->unwrap();
        // line 25
        $context["displayName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "display", [], "any", false, false, false, 25);
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "display-page-manage.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        /* xgettext:no-php-format */        echo strtr(__("Manage %displayName%"), array("%displayName%" => ($context["displayName"] ?? null), ));
        yield " | ";
        return; yield '';
    }

    // line 29
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    ";
        $context["displayLastAccessed"] = CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "lastAccessed", [], "any", false, false, false, 30);
        // line 31
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "loggedIn", [], "any", false, false, false, 31) == 1)) {
            // line 32
            yield "        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                /* xgettext:no-php-format */                echo strtr(__("Display %displayName% is currently logged-in, seen %timeAgo%."), array("%displayName%" => ($context["displayName"] ?? null), "%timeAgo%" => ($context["timeAgo"] ?? null), ));
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 33
            yield "    ";
        } else {
            // line 34
            yield "        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                /* xgettext:no-php-format */                echo strtr(__("Display %displayName% is not logged in at the moment and last accessed at <span class=\"unixDate\">%displayLastAccessed%</span>"), array("%displayName%" => ($context["displayName"] ?? null), "%displayLastAccessed%" => ($context["displayLastAccessed"] ?? null), ));
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 35
            yield "    ";
        }
        // line 36
        yield "    <h1 class=\"text-center\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h1>
    ";
        // line 37
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "mediaInventoryStatus", [], "any", false, false, false, 37) == 3)) {
            // line 38
            yield "    <p class=\"text-center\">";
            echo __("This Display hasn't connected since updates have been made in the CMS. The below information will be updated when it has.");
            yield "</p>
    ";
        }
        // line 40
        yield "    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 43
        echo __("File Status - Count of Files");
        yield "</div>
                <div class=\"widget-body\">
                    <canvas id=\"downloadedCountPie\" style=\"clear:both; margin-top:25px;\" width=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 51
        echo __("File Status - Size of Files");
        yield "</div>
                <div class=\"widget-body\">
                    <canvas id=\"downloadedSizePie\" style=\"clear:both; margin-top:25px;\" width=\"230\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "clientCode", [], "any", false, false, false, 61) < 300)) {
            // line 62
            yield "                    <div class=\"widget-body medium\">
                        <p class=\"alert alert-info\">
                            ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This player is too old to show faults. Please upgrade it to v3 or later."), "html", null, true);
            yield "
                        </p>
                    </div>
                ";
        } else {
            // line 68
            yield "                <div class=\"widget-title\">
                    <button id=\"refreshLog\" class=\"btn btn-sm pull-right\"><span class=\"fa fa-refresh\"></span></button>
                    ";
            // line 70
            echo __("Reported Player Faults");
            // line 71
            yield "                </div>
                <div class=\"widget-body medium no-padding\">
                    <table id=\"playerFaults\" class=\"table table-striped\" data-url=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.faults.search", ["displayId" => CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\">
                        <thead>
                        <tr>
                            <th>";
            // line 76
            echo __("Code");
            yield "</th>
                            <th>";
            // line 77
            echo __("Reason");
            yield "</th>
                            <th>";
            // line 78
            echo __("Date");
            yield "</th>
                            <th>";
            // line 79
            echo __("Expires");
            yield "</th>
                            <th>";
            // line 80
            echo __("Schedule ID");
            yield "</th>
                            <th>";
            // line 81
            echo __("Layout ID");
            yield "</th>
                            <th>";
            // line 82
            echo __("Region ID");
            yield "</th>
                            <th>";
            // line 83
            echo __("Widget ID");
            yield "</th>
                            <th>";
            // line 84
            echo __("Media ID");
            yield "</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                ";
        }
        // line 93
        yield "            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 97
        echo __("Dependencies");
        yield "</div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 102
        echo __("Name");
        yield "</th>
                            <th>";
        // line 103
        echo __("Type");
        yield "</th>
                            <th>";
        // line 104
        echo __("Complete");
        yield "</th>
                            <th>";
        // line 105
        echo __("Downloaded");
        yield "</th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "dependencies", [], "any", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 110
            yield "                                <tr>
                                    <td>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 111), "html", null, true);
            yield "</td>
                                    <td>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fileType", [], "any", false, false, false, 112), "html", null, true);
            yield "</td>
                                    <td>
                                        <span class=\"fa ";
            // line 114
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "complete", [], "any", false, false, false, 114) == 1)) {
                yield "fa-check";
            } else {
                yield "fa-download";
            }
            yield "\"></span>
                                    </td>
                                    <td>";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bytesRequested", [], "any", false, false, false, 116)), "html", null, true);
            yield "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 128
        echo __("Layouts");
        yield "</div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 133
        echo __("ID");
        yield "</th>
                            <th>";
        // line 134
        echo __("Name");
        yield "</th>
                            <th>";
        // line 135
        echo __("Size");
        yield "</th>
                            <th>";
        // line 136
        echo __("Complete");
        yield "</th>
                            <th>";
        // line 137
        echo __("Downloaded");
        yield "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "layouts", [], "any", false, false, false, 141));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 142
            yield "                            <tr>
                                <td>";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "itemId", [], "any", false, false, false, 143), "html", null, true);
            yield "</td>
                                <td>";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "layout", [], "any", false, false, false, 144), "html", null, true);
            yield "</td>
                                <td>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 145)), "html", null, true);
            yield "</td>
                                <td>
                                    <span class=\"fa ";
            // line 147
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "complete", [], "any", false, false, false, 147) == 1)) {
                yield "fa-check";
            } else {
                yield "fa-download";
            }
            yield "\"></span>
                                </td>
                                <td>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bytesRequested", [], "any", false, false, false, 149)), "html", null, true);
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    ";
        // line 160
        echo __("Media");
        // line 161
        yield "                </div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 166
        echo __("ID");
        yield "</th>
                            <th>";
        // line 167
        echo __("Name");
        yield "</th>
                            <th>";
        // line 168
        echo __("Type");
        yield "</th>
                            <th>";
        // line 169
        echo __("File Name");
        yield "</th>
                            <th>";
        // line 170
        echo __("Size");
        yield "</th>
                            <th>";
        // line 171
        echo __("Complete");
        yield "</th>
                            <th>";
        // line 172
        echo __("Downloaded");
        yield "</th>
                            <th>";
        // line 173
        echo __("Released");
        yield "</th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "media", [], "any", false, false, false, 177));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 178
            yield "                                <tr>
                                    <td>";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "itemId", [], "any", false, false, false, 179), "html", null, true);
            yield "</td>
                                    <td>";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 180), "html", null, true);
            yield "</td>
                                    <td>";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 181), "html", null, true);
            yield "</td>
                                    <td>";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "storedAs", [], "any", false, false, false, 182), "html", null, true);
            yield "</td>
                                    <td>";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 183)), "html", null, true);
            yield "</td>
                                    <td title=\"";
            // line 184
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lastUsed", [], "any", false, false, false, 184) == 0)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nonceNotUsed"] ?? null), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nonceUsed"] ?? null), "html", null, true);
            }
            yield "\">
                                        <span class=\"fa ";
            // line 185
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "complete", [], "any", false, false, false, 185) == 1)) {
                yield "fa-check";
            } else {
                yield "fa-download";
            }
            yield "\"></span>
                                    </td>
                                    <td>";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bytesRequested", [], "any", false, false, false, 187)), "html", null, true);
            yield "</td>
                                    <td>
                                        <span class=\"fa ";
            // line 189
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "released", [], "any", false, false, false, 189) == 1)) {
                yield "fa-check";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "released", [], "any", false, false, false, 189) == 0)) {
                yield "fa-cogs";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "released", [], "any", false, false, false, 189) == 2)) {
                yield "fa-times";
            }
            yield "\"></span>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 202
        echo __("Widgets");
        yield "</div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 207
        echo __("ID");
        yield "</th>
                            <th>";
        // line 208
        echo __("Name");
        yield "</th>
                            <th>";
        // line 209
        echo __("Complete");
        yield "</th>
                            <th>";
        // line 210
        echo __("Downloaded");
        yield "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "widgets", [], "any", false, false, false, 214));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 215
            yield "                            <tr>
                                <td>";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "itemId", [], "any", false, false, false, 216), "html", null, true);
            yield "</td>
                                <td>";
            // line 217
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "widgetName", [], "any", false, false, false, 217)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "widgetName", [], "any", false, false, false, 217), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "widgetType", [], "any", false, false, false, 217), "html", null, true);
            }
            yield "</td>
                                <td title=\"";
            // line 218
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lastUsed", [], "any", false, false, false, 218) == 0)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nonceNotUsed"] ?? null), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nonceUsed"] ?? null), "html", null, true);
            }
            yield "\">
                                    <span class=\"fa ";
            // line 219
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "complete", [], "any", false, false, false, 219) == 1)) {
                yield "fa-check";
            } else {
                yield "fa-download";
            }
            yield "\"></span>
                                </td>
                                <td>";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bytesRequested", [], "any", false, false, false, 221)), "html", null, true);
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 231
        echo __("Widget Data");
        yield "</div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 236
        echo __("ID");
        yield "</th>
                            <th>";
        // line 237
        echo __("Name");
        yield "</th>
                            <th>";
        // line 238
        echo __("Downloaded");
        yield "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["inventory"] ?? null), "widgetData", [], "any", false, false, false, 242));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 243
            yield "                            <tr>
                                <td>";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "widgetId", [], "any", false, false, false, 244), "html", null, true);
            yield "</td>
                                <td>";
            // line 245
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "widgetName", [], "any", false, false, false, 245)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "widgetName", [], "any", false, false, false, 245), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "widgetType", [], "any", false, false, false, 245), "html", null, true);
            }
            yield "</td>
                                <td>";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bytesRequested", [], "any", false, false, false, 246)), "html", null, true);
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 255
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.reporting"], "method", false, false, false, 255)) {
            // line 256
            yield "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
            // line 259
            echo __("Bandwidth");
            yield "</div>
                <div class=\"widget-body\">
                    <div class=\"XiboGrid\" id=\"";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
            yield "\">
                        <div class=\"XiboFilter\">
                            <div class=\"FilterDiv card-body\" id=\"bandwidthFilter\">
                                <form class=\"form-inline\">
                                    ";
            // line 265
            yield CoreExtension::callMacro($macros["inline"], "macro_dateMonth", ["fromDt", "From Date", CoreExtension::getAttribute($this->env, $this->source, ($context["defaults"] ?? null), "fromDate", [], "any", false, false, false, 265), "", "", "", ""], 265, $context, $this->getSourceContext());
            yield "
                                    ";
            // line 266
            yield CoreExtension::callMacro($macros["inline"], "macro_dateMonth", ["toDt", "To Date", CoreExtension::getAttribute($this->env, $this->source, ($context["defaults"] ?? null), "toDate", [], "any", false, false, false, 266), "", "", "", ""], 266, $context, $this->getSourceContext());
            yield "
                                    ";
            // line 267
            yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["displayId", CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 267)], 267, $context, $this->getSourceContext());
            yield "
                                </form>
                            </div>
                        </div>
                        <div class=\"XiboData\">
                            <canvas id=\"bandwidthChart\" style=\"clear:both; margin-top:25px;\" height=\"330\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        return; yield '';
    }

    // line 282
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 283
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">

        \$(document).ready(function() {
            const \$playerFaults = \$('#playerFaults');
            if (\$playerFaults.length < 0) {
              return;
            }
            var table = \$playerFaults.DataTable({
                language: dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                responsive: true,
                searchDelay: 3000,
                order: [[2, \"desc\"]],
                ajax: {
                    url: \$playerFaults.data().url,
                },
                \"columns\": [
                    {\"data\": \"code\", responsivePriority: 1, className: 'all'},
                    {\"data\": \"reason\", responsivePriority: 1, className: 'all'},
                    {\"data\": \"incidentDt\", responsivePriority: 1, className: 'all'},
                    {\"data\": \"expires\", responsivePriority: 1, className: 'all'},
                    {\"data\": \"scheduleId\", responsivePriority: 99, className: 'none'},
                    {\"data\": \"layoutId\", responsivePriority: 99, className: 'none'},
                    {\"data\": \"regionId\", responsivePriority: 99, className: 'none'},
                    {\"data\": \"widgetId\", responsivePriority: 99, className: 'none'},
                    {\"data\": \"mediaId\", responsivePriority: 99, className: 'none'}
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);

            \$(\"#refreshLog\").click(function () {
                table.ajax.reload();
            });
        });

        var bandwidthChart = null;

        function setBandwidthChart() {
            \$.ajax({
                type: \"get\",
                url: \"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("stats.bandwidth.data"), "html", null, true);
        yield "\",
                cache: false,
                dataType: \"json\",
                data: \$(\"#bandwidthFilter\").find(\"form\").serialize(),
                success: function(response) {
                    if (bandwidthChart !== undefined && bandwidthChart !== null) {
                        bandwidthChart.destroy();
                    }

                    if (response.extra.data.length <= 0) {
                        return;
                    }

                    // Create our chart
                    bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
                        type: \"bar\",
                        data: {
                            labels: response.extra.labels,
                            datasets: [{
                                label: \"";
        // line 348
        echo __("Bandwidth");
        yield "\",
                                backgroundColor: \"rgb(11, 98, 164)\",
                                data: response.extra.data
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    scaleLabel: {
                                        display: true,
                                        labelString: response.extra.postUnits,
                                    }
                                }]
                            },
                            legend: {
                                display: false
                            },
                            maintainAspectRatio: false,
                        }
                    });
                }
            });
        }

        \$(document).ready(function() {

            ";
        // line 374
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.reporting"], "method", false, false, false, 374)) {
            // line 375
            yield "            setBandwidthChart();

            // Bind to form change
            \$(\"#bandwidthFilter input, #bandwidthFilter select\").change(function() {
                setBandwidthChart();
            });
            ";
        }
        // line 382
        yield "
            // Find all Unix Dates and sort them out
            \$(\"span.unixDate\").each(function() {
                \$(this).html(moment(\$(this).html(), \"X\").format(jsDateFormat));
            });

            // Find all ISO Dates and sort them out
            \$(\"span.isoDate\").each(function() {
                \$(this).html(moment(\$(this).html()).format(jsDateFormat));
            });

            // Handle the Pie chart for download status
            var downloadedCountPie = new Chart(\$(\"#downloadedCountPie\"), {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [";
        // line 398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "countComplete", [], "any", false, false, false, 398), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "countRemaining", [], "any", false, false, false, 398), "html", null, true);
        yield "],
                        backgroundColor: [\"#00CC00\", \"#FF0000\"]
                    }],
                    labels: [
                        \"";
        // line 402
        echo __("Downloaded");
        yield "\", \"";
        echo __("Pending");
        yield "\"
                    ]
                }
            });

            var downloadedSizePie = new Chart(\$(\"#downloadedSizePie\"), {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "sizeComplete", [], "any", false, false, false, 411), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "sizeRemaining", [], "any", false, false, false, 411), "html", null, true);
        yield "],
                        backgroundColor: [\"#00CC00\", \"#FF0000\"]
                    }],
                    labels: [
                        \"";
        // line 415
        echo __("Downloaded");
        yield "\" + \" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "units", [], "any", false, false, false, 415), "html", null, true);
        yield "\", \"";
        echo __("Pending");
        yield "\" + \" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "units", [], "any", false, false, false, 415), "html", null, true);
        yield "\"
                    ]
                },
            });
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
        return "display-page-manage.twig";
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
        return array (  835 => 415,  826 => 411,  812 => 402,  803 => 398,  785 => 382,  776 => 375,  774 => 374,  745 => 348,  723 => 329,  673 => 283,  669 => 282,  650 => 267,  646 => 266,  642 => 265,  635 => 261,  630 => 259,  625 => 256,  623 => 255,  615 => 249,  606 => 246,  598 => 245,  594 => 244,  591 => 243,  587 => 242,  580 => 238,  576 => 237,  572 => 236,  564 => 231,  555 => 224,  546 => 221,  537 => 219,  529 => 218,  521 => 217,  517 => 216,  514 => 215,  510 => 214,  503 => 210,  499 => 209,  495 => 208,  491 => 207,  483 => 202,  472 => 193,  456 => 189,  451 => 187,  442 => 185,  434 => 184,  430 => 183,  426 => 182,  422 => 181,  418 => 180,  414 => 179,  411 => 178,  407 => 177,  400 => 173,  396 => 172,  392 => 171,  388 => 170,  384 => 169,  380 => 168,  376 => 167,  372 => 166,  365 => 161,  363 => 160,  353 => 152,  344 => 149,  335 => 147,  330 => 145,  326 => 144,  322 => 143,  319 => 142,  315 => 141,  308 => 137,  304 => 136,  300 => 135,  296 => 134,  292 => 133,  284 => 128,  273 => 119,  264 => 116,  255 => 114,  250 => 112,  246 => 111,  243 => 110,  239 => 109,  232 => 105,  228 => 104,  224 => 103,  220 => 102,  212 => 97,  206 => 93,  194 => 84,  190 => 83,  186 => 82,  182 => 81,  178 => 80,  174 => 79,  170 => 78,  166 => 77,  162 => 76,  156 => 73,  152 => 71,  150 => 70,  146 => 68,  139 => 64,  135 => 62,  133 => 61,  120 => 51,  109 => 43,  104 => 40,  98 => 38,  96 => 37,  91 => 36,  88 => 35,  82 => 34,  79 => 33,  73 => 32,  70 => 31,  67 => 30,  63 => 29,  54 => 27,  49 => 23,  47 => 25,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-page-manage.twig", "/var/www/cms/views/display-page-manage.twig");
    }
}
