<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PimcoreEcommerceFramework/voucher/voucher_code_tab_single.html.twig */
class __TwigTemplate_f4f7f9410611ba134b470fd02d4d7a35 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@PimcoreEcommerceFramework/voucher/voucher_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_single.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_single.html.twig"));

        $this->parent = $this->loadTemplate("@PimcoreEcommerceFramework/voucher/voucher_layout.html.twig", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_single.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $context["seriesId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, true, 4), "get", [0 => "id"], "method", false, false, true, 4);
        // line 5
        echo "    ";
        $context["urlParams"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, true, 5), "query", [], "any", false, false, true, 5), "all", [], "any", false, false, true, 5);
        // line 6
        echo "    ";
        $context["generateWarning"] = ((array_key_exists("generateWarning", $context)) ? (null) : (""));
        // line 7
        echo "
    <div class=\"container-fluid\">
        <div id=\"content\">
            <ul  id=\"tabs\" class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a href=\"#manager\" class=\"nav-link active\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"manager\" aria-selected=\"true\">
                        <span class=\"fa fa-home\"></span> ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_tab-manager", [], "admin"), "html", null, true);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a id=\"statistic-tab\" href=\"#statistics\" class=\"nav-link\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"statistics\" aria-selected=\"true\">
                        <span class=\"fa fa-chart-line\"></span> ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_tab-statistics", [], "admin"), "html", null, true);
        echo "
                    </a>
                </li>
            </ul>

            <div id=\"my-tab-content\" class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\"  aria-labelledby=\"manager-tab\"  id=\"manager\">
                    <div class=\"row\">
                        <div class=\"col col-sm-12\">
                            <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_usage-headline", [], "admin"), "html", null, true);
        echo "</h2>
                        </div>
                    </div>

                    <div class=\"row header\">
                        <div class=\"col col-sm-4\">
                            <button type=\"button\" class=\"btn btn-primary js-modal\" data-modal=\"assignsettings\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_assign-config", [], "admin"), "html", null, true);
        echo "</button>
                        </div>

                        <!--Info and Error Messages Container-->

                        <div class=\"col col-sm-4\">
                            ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, ($context["msg"] ?? null), "error", [], "array", true, true, true, 39) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 39, $this->source); })()), "error", [], "array", false, false, true, 39)))) {
            // line 40
            echo "                                <div class=\"alert alert-danger js-fadeout\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 40, $this->source); })()), "error", [], "array", false, false, true, 40), 40, $this->source), "html", null, true);
            echo " </div>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 41
($context["msg"] ?? null), "success", [], "array", true, true, true, 41) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 41, $this->source); })()), "success", [], "array", false, false, true, 41)))) {
            // line 42
            echo "                                <div class=\"alert alert-success js-fadeout\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 42, $this->source); })()), "success", [], "array", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "  </div>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 43
($context["msg"] ?? null), "result", [], "array", true, true, true, 43) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 43, $this->source); })()), "result", [], "array", false, false, true, 43)))) {
            // line 44
            echo "                                <div class=\"alert alert-info js-fadeout\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 44, $this->source); })()), "result", [], "array", false, false, true, 44), 44, $this->source), "html", null, true);
            echo " </div>
                            ";
        }
        // line 46
        echo "                        </div>

                        <div class=\"col col-sm-4 text-right\">
                            <div class=\"btn-group\">
                                ";
        // line 50
        if ((isset($context["supportsExport"]) || array_key_exists("supportsExport", $context) ? $context["supportsExport"] : (function () { throw new RuntimeError('Variable "supportsExport" does not exist.', 50, $this->source); })())) {
            // line 51
            echo "                                    ";
            $context["exportUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_ecommerce_backend_voucher_export-tokens", twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 51, $this->source); })()), 51, $this->source), ["format" => "csv"]));
            // line 52
            echo "                                    <a class=\"btn btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["exportUrl"]) || array_key_exists("exportUrl", $context) ? $context["exportUrl"] : (function () { throw new RuntimeError('Variable "exportUrl" does not exist.', 52, $this->source); })()), 52, $this->source), "html", null, true);
            echo "\" target=\"_blank\">
                                        <span class=\"fa fa-file-export\"></span>
                                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_export-button", [], "admin"), "html", null, true);
            echo "
                                    </a>
                                ";
        }
        // line 57
        echo "                            </div>
                        </div>
                    </div>

                    <div class=\"row content-block token-container\">

                        <div class=\"col col-sm-8 token-overview\">
                            <div class=\" row\">
                                <div class=\"col col-sm-5\">
                                    <h3 style=\"float: left;\"><i class=\"fa fa-list\"></i> ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_token-overview-headline", [], "admin"), "html", null, true);
        echo "</h3>
                                </div>
                                <div class=\"col col-sm-7 text-right\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col col-sm-12\">
                                </div>
                            </div>

                            <div class=\"table-container\">
                                <table class=\"table\">
                                    <thead>
                                    <tr class=\"active\">
                                        <th><span class=\"sort fa fa-chevron-down\" data-criteria=\"token\"></span> ";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_table-token", [], "admin"), "html", null, true);
        echo "</th>
                                        <th class=\"text-center\"><span class=\"sort fa fa-chevron-down\" data-criteria=\"usages\"></span> ";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_table-usages", [], "admin"), "html", null, true);
        echo "</th>
                                        <th class=\"text-center\"><span class=\"sort fa fa-chevron-down\" data-criteria=\"length\"></span> ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_table-length", [], "admin"), "html", null, true);
        echo "</th>
                                        <th class=\"text-center\"><span class=\"sort active fa fa-chevron-down\" data-criteria=\"timestamp\"></span> ";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_table-date", [], "admin"), "html", null, true);
        echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 87
        if (array_key_exists("paginator", $context)) {
            // line 88
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 88, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 89
                echo "                                            <tr>
                                                <td class=\"token\">";
                // line 90
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["code"], "token", [], "array", false, false, true, 90), 90, $this->source), "html", null, true);
                echo "</td>
                                                <td class=\"text-center\">";
                // line 91
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["code"], "usages", [], "array", false, false, true, 91), 91, $this->source)), "html", null, true);
                echo "</td>
                                                <td class=\"text-center\">";
                // line 92
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["code"], "length", [], "array", false, false, true, 92), 92, $this->source)), "html", null, true);
                echo "</td>
                                                <td class=\"text-center\">";
                // line 93
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["code"], "timestamp", [], "array", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "</td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                                    ";
        }
        // line 97
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane\"  aria-labelledby=\"statistics-tab\"  id=\"statistics\">
                    <div class=\"row\">
                        <div class=\"col col-sm-12\">
                            <h2>";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_tab-statistics-headline", [], "admin"), "html", null, true);
        echo "</h2>
                        </div>
                    </div>

                    <div class=\"row header\">

                        <div class=\"col col-sm-4\">
                            ";
        // line 113
        if (array_key_exists("error", $context)) {
            // line 114
            echo "                                <div class=\"alert alert-danger\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 114, $this->source); })()), 114, $this->source), "html", null, true);
            echo " </div>
                            ";
        }
        // line 116
        echo "                        </div>
                        <div class=\"col col-sm-8 text-right\">
                            <button type=\"button\" class=\"btn btn-default js-modal\" data-modal=\"cleanup-reservations\"><span class=\"fa fa-refresh\"></span> ";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_cleanup-reservations-button", [], "admin"), "html", null, true);
        echo "</button>
                        </div>
                    </div>

                    ";
        // line 122
        $this->loadTemplate("@PimcoreEcommerceFramework/voucher/parts/statistics.html.twig", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_single.html.twig", 122)->display(twig_array_merge($context, ["statistics" => (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 122, $this->source); })()), "colors" => (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 122, $this->source); })())]));
        // line 123
        echo "                </div>
            </div>
        </div>
    </div>

    <!-- Modal Templates -->
    ";
        // line 129
        $this->loadTemplate("@PimcoreEcommerceFramework/voucher/parts/modals/single/assign_settings_modal.html.twig", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_single.html.twig", 129)->display(twig_array_merge($context, ["settings" => (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 129, $this->source); })()), "generateWarning" => (isset($context["generateWarning"]) || array_key_exists("generateWarning", $context) ? $context["generateWarning"] : (function () { throw new RuntimeError('Variable "generateWarning" does not exist.', 129, $this->source); })()), "urlParams" => (isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 129, $this->source); })())]));
        // line 130
        echo "    ";
        $this->loadTemplate("@PimcoreEcommerceFramework/voucher/parts/modals/cleanup_reservations_modal.html.twig", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_single.html.twig", 130)->display(twig_array_merge($context, ["urlParams" => (isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 130, $this->source); })())]));
        // line 131
        echo "

    <!--Script for statistics-->
    ";
        // line 134
        if (twig_test_iterable(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 134, $this->source); })()), "usage", [], "array", false, false, true, 134))) {
            // line 135
            echo "        ";
            $this->loadTemplate("@PimcoreEcommerceFramework/voucher/parts/usage_statistic_script.html.twig", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_single.html.twig", 135)->display(twig_array_merge($context, ["usage" => twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 135, $this->source); })()), "usage", [], "array", false, false, true, 135), "colors" => (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 135, $this->source); })())]));
            // line 136
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/voucher/voucher_code_tab_single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 136,  313 => 135,  311 => 134,  306 => 131,  303 => 130,  301 => 129,  293 => 123,  291 => 122,  284 => 118,  280 => 116,  274 => 114,  272 => 113,  262 => 106,  251 => 97,  248 => 96,  239 => 93,  235 => 92,  231 => 91,  227 => 90,  224 => 89,  219 => 88,  217 => 87,  210 => 83,  206 => 82,  202 => 81,  198 => 80,  181 => 66,  170 => 57,  164 => 54,  158 => 52,  155 => 51,  153 => 50,  147 => 46,  141 => 44,  139 => 43,  134 => 42,  132 => 41,  127 => 40,  125 => 39,  116 => 33,  107 => 27,  95 => 18,  87 => 13,  79 => 7,  76 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@PimcoreEcommerceFramework/voucher/voucher_layout.html.twig' %}

{% block content %}
    {% set seriesId = app.request.get('id') %}
    {% set urlParams = app.request.query.all %}
    {% set generateWarning = generateWarning is defined? null %}

    <div class=\"container-fluid\">
        <div id=\"content\">
            <ul  id=\"tabs\" class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a href=\"#manager\" class=\"nav-link active\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"manager\" aria-selected=\"true\">
                        <span class=\"fa fa-home\"></span> {{ ('bundle_ecommerce_voucherservice_tab-manager')|trans([],'admin') }}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a id=\"statistic-tab\" href=\"#statistics\" class=\"nav-link\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"statistics\" aria-selected=\"true\">
                        <span class=\"fa fa-chart-line\"></span> {{ ('bundle_ecommerce_voucherservice_tab-statistics')|trans([],'admin') }}
                    </a>
                </li>
            </ul>

            <div id=\"my-tab-content\" class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\"  aria-labelledby=\"manager-tab\"  id=\"manager\">
                    <div class=\"row\">
                        <div class=\"col col-sm-12\">
                            <h2>{{ ('bundle_ecommerce_voucherservice_usage-headline')|trans([],'admin') }}</h2>
                        </div>
                    </div>

                    <div class=\"row header\">
                        <div class=\"col col-sm-4\">
                            <button type=\"button\" class=\"btn btn-primary js-modal\" data-modal=\"assignsettings\">{{ ('bundle_ecommerce_voucherservice_assign-config')|trans([],'admin') }}</button>
                        </div>

                        <!--Info and Error Messages Container-->

                        <div class=\"col col-sm-4\">
                            {% if msg['error'] is defined and msg['error'] is not null %}
                                <div class=\"alert alert-danger js-fadeout\"> {{ msg['error'] }} </div>
                            {% elseif msg['success'] is defined and msg['success'] is not null %}
                                <div class=\"alert alert-success js-fadeout\"> {{ msg['success'] }}  </div>
                            {% elseif msg['result'] is defined and msg['result'] is not null %}
                                <div class=\"alert alert-info js-fadeout\"> {{ msg['result'] }} </div>
                            {% endif %}
                        </div>

                        <div class=\"col col-sm-4 text-right\">
                            <div class=\"btn-group\">
                                {% if supportsExport %}
                                    {% set exportUrl = path('pimcore_ecommerce_backend_voucher_export-tokens', urlParams|merge({'format': 'csv'})) %}
                                    <a class=\"btn btn-secondary\" href=\"{{ exportUrl }}\" target=\"_blank\">
                                        <span class=\"fa fa-file-export\"></span>
                                        {{ 'bundle_ecommerce_voucherservice_export-button'|trans([],'admin') }}
                                    </a>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    <div class=\"row content-block token-container\">

                        <div class=\"col col-sm-8 token-overview\">
                            <div class=\" row\">
                                <div class=\"col col-sm-5\">
                                    <h3 style=\"float: left;\"><i class=\"fa fa-list\"></i> {{ ('bundle_ecommerce_voucherservice_token-overview-headline')|trans([],'admin') }}</h3>
                                </div>
                                <div class=\"col col-sm-7 text-right\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col col-sm-12\">
                                </div>
                            </div>

                            <div class=\"table-container\">
                                <table class=\"table\">
                                    <thead>
                                    <tr class=\"active\">
                                        <th><span class=\"sort fa fa-chevron-down\" data-criteria=\"token\"></span> {{ ('bundle_ecommerce_voucherservice_table-token')|trans([],'admin') }}</th>
                                        <th class=\"text-center\"><span class=\"sort fa fa-chevron-down\" data-criteria=\"usages\"></span> {{ ('bundle_ecommerce_voucherservice_table-usages')|trans([],'admin') }}</th>
                                        <th class=\"text-center\"><span class=\"sort fa fa-chevron-down\" data-criteria=\"length\"></span> {{ ('bundle_ecommerce_voucherservice_table-length')|trans([],'admin') }}</th>
                                        <th class=\"text-center\"><span class=\"sort active fa fa-chevron-down\" data-criteria=\"timestamp\"></span> {{ ('bundle_ecommerce_voucherservice_table-date')|trans([],'admin') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% if paginator is defined %}
                                        {% for code in paginator %}
                                            <tr>
                                                <td class=\"token\">{{ code['token'] }}</td>
                                                <td class=\"text-center\">{{ code['usages']|number_format }}</td>
                                                <td class=\"text-center\">{{ code['length']|number_format }}</td>
                                                <td class=\"text-center\">{{ code['timestamp'] }}</td>
                                            </tr>
                                        {% endfor %}
                                    {% endif %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane\"  aria-labelledby=\"statistics-tab\"  id=\"statistics\">
                    <div class=\"row\">
                        <div class=\"col col-sm-12\">
                            <h2>{{ ('bundle_ecommerce_voucherservice_tab-statistics-headline')|trans([],'admin') }}</h2>
                        </div>
                    </div>

                    <div class=\"row header\">

                        <div class=\"col col-sm-4\">
                            {% if error is defined %}
                                <div class=\"alert alert-danger\"> {{ error }} </div>
                            {% endif %}
                        </div>
                        <div class=\"col col-sm-8 text-right\">
                            <button type=\"button\" class=\"btn btn-default js-modal\" data-modal=\"cleanup-reservations\"><span class=\"fa fa-refresh\"></span> {{ ('bundle_ecommerce_voucherservice_cleanup-reservations-button')|trans([],'admin') }}</button>
                        </div>
                    </div>

                    {% include \"@PimcoreEcommerceFramework/voucher/parts/statistics.html.twig\" with {'statistics': statistics, 'colors': colors} %}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Templates -->
    {% include \"@PimcoreEcommerceFramework/voucher/parts/modals/single/assign_settings_modal.html.twig\" with {'settings': settings, 'generateWarning': generateWarning, 'urlParams': urlParams} %}
    {% include \"@PimcoreEcommerceFramework/voucher/parts/modals/cleanup_reservations_modal.html.twig\" with {'urlParams': urlParams} %}


    <!--Script for statistics-->
    {% if statistics['usage'] is iterable  %}
        {% include \"@PimcoreEcommerceFramework/voucher/parts/usage_statistic_script.html.twig\" with {'usage': statistics['usage'], 'colors': colors} %}
    {% endif %}
{% endblock %}
", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_single.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/voucher/voucher_code_tab_single.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 39, "for" => 88, "include" => 122);
        static $filters = array("escape" => 13, "trans" => 13, "merge" => 51, "number_format" => 91);
        static $functions = array("path" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['escape', 'trans', 'merge', 'number_format'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
