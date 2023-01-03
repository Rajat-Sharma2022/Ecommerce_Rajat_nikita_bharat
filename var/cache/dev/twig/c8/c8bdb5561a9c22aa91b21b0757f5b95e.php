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

/* @PimcoreEcommerceFramework/voucher/voucher_code_tab_pattern.html.twig */
class __TwigTemplate_47b7aac1bb7739213873434118a999c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_pattern.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_pattern.html.twig"));

        $this->parent = $this->loadTemplate("@PimcoreEcommerceFramework/voucher/voucher_layout.html.twig", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_pattern.html.twig", 1);
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
        if (array_key_exists("paginator", $context)) {
            // line 7
            echo "        ";
            twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "setPageRange", [0 => 10], "method", false, false, true, 7);
            // line 8
            echo "        ";
            $context["pagesCount"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 8, $this->source); })()), "getPaginationData", [], "method", false, false, true, 8), "pageCount", [], "any", false, false, true, 8);
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <div class=\"container-fluid\">
        <div id=\"content\">
            <ul id=\"tabs\" class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a href=\"#manager\" class=\"nav-link active\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"manager\" aria-selected=\"true\">
                        <span class=\"fa fa-home\"></span> ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_tab-manager", [], "admin"), "html", null, true);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a id=\"statistic-tab\" href=\"#statistics\" class=\"nav-link\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"statistics\" aria-selected=\"true\">
                        <span class=\"fa fa-chart-line\"></span> ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_tab-statistics", [], "admin"), "html", null, true);
        echo "
                    </a>
                </li>
            </ul>

            <div id=\"my-tab-content\" class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"manager\">
                    <div class=\"row\">
                        <div class=\"col col-sm-12\">
                            <h2>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_tab-manager-headline", [], "admin"), "html", null, true);
        echo "</h2>
                        </div>
                    </div>

                    <div class=\"row header\">
                        <div class=\"col col-sm-4\">
                            <button type=\"button\" class=\"btn btn-primary js-modal\"  data-toggle=\"modal\" data-modal=\"generate\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_generate-button", [], "admin"), "html", null, true);
        echo "</button>
                            ";
        // line 37
        if ((array_key_exists("voucherType", $context) && ((isset($context["voucherType"]) || array_key_exists("voucherType", $context) ? $context["voucherType"] : (function () { throw new RuntimeError('Variable "voucherType" does not exist.', 37, $this->source); })()) != "VoucherTokenTypeSingle"))) {
            // line 38
            echo "                                <button type=\"button\" class=\"btn btn-default js-modal\" data-modal=\"cleanUp\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_cleanup-button", [], "admin"), "html", null, true);
            echo "</button>
                            ";
        }
        // line 40
        echo "                        </div>

                        <div class=\"col col-sm-4\">
                            ";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, ($context["msg"] ?? null), "error", [], "array", true, true, true, 43) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 43, $this->source); })()), "error", [], "array", false, false, true, 43)))) {
            // line 44
            echo "                                <div class=\"alert alert-danger js-fadeout\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 44, $this->source); })()), "error", [], "array", false, false, true, 44), 44, $this->source), "html", null, true);
            echo " </div>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 45
($context["msg"] ?? null), "success", [], "array", true, true, true, 45) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 45, $this->source); })()), "success", [], "array", false, false, true, 45)))) {
            // line 46
            echo "                                <div class=\"alert alert-success js-fadeout\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 46, $this->source); })()), "success", [], "array", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "  </div>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 47
($context["msg"] ?? null), "result", [], "array", true, true, true, 47) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 47, $this->source); })()), "result", [], "array", false, false, true, 47)))) {
            // line 48
            echo "                                <div class=\"alert alert-info js-fadeout\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 48, $this->source); })()), "result", [], "array", false, false, true, 48), 48, $this->source), "html", null, true);
            echo " </div>
                            ";
        }
        // line 50
        echo "                        </div>

                        <div class=\"col col-sm-4 text-right\">
                            <div class=\"btn-group\">
                                ";
        // line 54
        if ((isset($context["supportsExport"]) || array_key_exists("supportsExport", $context) ? $context["supportsExport"] : (function () { throw new RuntimeError('Variable "supportsExport" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "                                    ";
            $context["exportUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_ecommerce_backend_voucher_export-tokens", twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 55, $this->source); })()), 55, $this->source), ["format" => "csv"]));
            // line 56
            echo "                                    <a class=\"btn btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["exportUrl"]) || array_key_exists("exportUrl", $context) ? $context["exportUrl"] : (function () { throw new RuntimeError('Variable "exportUrl" does not exist.', 56, $this->source); })()), 56, $this->source), "html", null, true);
            echo "\" target=\"_blank\">
                                        <span class=\"fa fa-file-export\"></span>
                                        ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_export-button", [], "admin"), "html", null, true);
            echo "
                                    </a>
                                ";
        }
        // line 61
        echo "                            </div>
                        </div>
                    </div>

                    <div class=\"row content-block token-container\">

                        <div class=\"col col-sm-8 token-overview\">
                            <div class=\" row\">
                                <div class=\"col col-sm-5 mb-3\">
                                    <h4 style=\"float: left;\"><i class=\"fa fa-list\"></i> ";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_token-overview-headline", [], "admin"), "html", null, true);
        echo "</h4>
                                </div>
                                <div class=\"col col-sm-7 text-right\">
                                    ";
        // line 73
        $this->loadTemplate("@PimcoreEcommerceFramework/voucher/parts/paginator.html.twig", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_pattern.html.twig", 73)->display(twig_array_merge($context, ["paginationVariables" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 73, $this->source); })()), "getPaginationData", [], "method", false, false, true, 73)]));
        // line 74
        echo "                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col col-sm-6\">
                                    ";
        // line 78
        if ((array_key_exists("voucherType", $context) && ((isset($context["voucherType"]) || array_key_exists("voucherType", $context) ? $context["voucherType"] : (function () { throw new RuntimeError('Variable "voucherType" does not exist.', 78, $this->source); })()) != "VoucherTokenTypeSingle"))) {
            // line 79
            echo "                                        <h6 class=\"card-subtitle font-weight-light\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 79, $this->source); })()), 79, $this->source), 0, ",", " "), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_result-text", [], "admin"), "html", null, true);
            echo "</h6>
                                    ";
        }
        // line 81
        echo "                                </div>
                                ";
        // line 82
        if (array_key_exists("pagesCount", $context)) {
            // line 83
            echo "                                    <div class=\"col col-sm-6 text-right\">
                                        <h6 class=\"subtitle pages\">";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_tokens-per-page", [], "admin"), "html", null, true);
            echo "
                                            <a class=\"pages-count ";
            // line 85
            echo ((((isset($context["pagesCount"]) || array_key_exists("pagesCount", $context) ? $context["pagesCount"] : (function () { throw new RuntimeError('Variable "pagesCount" does not exist.', 85, $this->source); })()) == 25)) ? ("active") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["tokensPerPage" => 25]), "html", null, true);
            echo "\">25</a>
                                            <a class=\"pages-count ";
            // line 86
            echo ((((isset($context["pagesCount"]) || array_key_exists("pagesCount", $context) ? $context["pagesCount"] : (function () { throw new RuntimeError('Variable "pagesCount" does not exist.', 86, $this->source); })()) == 75)) ? ("active") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["tokensPerPage" => 75]), "html", null, true);
            echo "\">75</a>
                                            <a class=\"pages-count ";
            // line 87
            echo ((((isset($context["pagesCount"]) || array_key_exists("pagesCount", $context) ? $context["pagesCount"] : (function () { throw new RuntimeError('Variable "pagesCount" does not exist.', 87, $this->source); })()) == 150)) ? ("active") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["tokensPerPage" => 150]), "html", null, true);
            echo "\">150</a>
                                        </h6>
                                    </div>
                                ";
        }
        // line 91
        echo "                            </div>

                            <div class=\"table-container\">
                                <table class=\"table\">
                                    <thead class=\"card-header\">
                                    <tr class=\"active\">
                                        <th>#</th>
                                        <th><span class=\"sort fa fa-chevron-down\" data-criteria=\"token\"></span> ";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_table-token", [], "admin"), "html", null, true);
        echo "</th>
                                        <th class=\"text-center\"><span class=\"sort fa fa-chevron-down\" data-criteria=\"usages\"></span> ";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_table-usages", [], "admin"), "html", null, true);
        echo "</th>
                                        <th class=\"text-center\"><span class=\"sort fa fa-chevron-down\" data-criteria=\"length\"></span> ";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_table-length", [], "admin"), "html", null, true);
        echo "</th>
                                        <th class=\"text-center\"><span class=\"sort fa fa-chevron-down\" data-criteria=\"timestamp\"></span> ";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_table-date", [], "admin"), "html", null, true);
        echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 105
        if ((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 105, $this->source); })())) {
            // line 106
            echo "                                        ";
            $context["currentPage"] = (((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 106, $this->source); })()), "currentPageNumber", [], "method", false, false, true, 106) < 2)) ? (0) : ((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 106, $this->source); })()), "currentPageNumber", [], "method", false, false, true, 106) - 1)));
            // line 107
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 107, $this->source); })()));
            foreach ($context['_seq'] as $context["id"] => $context["code"]) {
                // line 108
                echo "                                            <tr>
                                                <td>";
                // line 109
                echo twig_escape_filter($this->env, (((isset($context["pagesCount"]) || array_key_exists("pagesCount", $context) ? $context["pagesCount"] : (function () { throw new RuntimeError('Variable "pagesCount" does not exist.', 109, $this->source); })()) * (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 109, $this->source); })())) + ($context["id"] + 1)), "html", null, true);
                echo "</td>
                                                <td class=\"token\">";
                // line 110
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["code"], "getToken", [], "method", false, false, true, 110), 110, $this->source), "html", null, true);
                echo "</td>
                                                <td class=\"text-center\">";
                // line 111
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["code"], "getUsages", [], "method", false, false, true, 111), 111, $this->source)), "html", null, true);
                echo "</td>
                                                <td class=\"text-center\">";
                // line 112
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["code"], "getLength", [], "method", false, false, true, 112), 112, $this->source)), "html", null, true);
                echo "</td>
                                                <td class=\"text-center\">";
                // line 113
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["code"], "getTimestamp", [], "method", false, false, true, 113), 113, $this->source), "html", null, true);
                echo "</td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                                    ";
        }
        // line 117
        echo "                                    <tr class=\" card-header\"><td colspan=\"5\"></td> </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        ";
        // line 122
        if ((array_key_exists("voucherType", $context) && ((isset($context["voucherType"]) || array_key_exists("voucherType", $context) ? $context["voucherType"] : (function () { throw new RuntimeError('Variable "voucherType" does not exist.', 122, $this->source); })()) != "VoucherTokenTypeSingle"))) {
            // line 123
            echo "                            <div class=\"col col-sm-4 filter token-filter\">
                                <h3><i class=\"fa fa-search\"></i> ";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_filter-headline", [], "admin"), "html", null, true);
            echo "</h3>

                                <form class=\"form-horizontal js-filter-form\" action=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()([], null, true), "html", null, true);
            echo "\">
                                    <div class=\"form-group\">
                                            <label>";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_filter-token", [], "admin"), "html", null, true);
            echo "</label>
                                            <input type=\"text\" name=\"token\" value=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "request", [], "any", false, false, true, 129), "get", [0 => "token"], "method", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "\" placeholder=\"token\"
                                                   class=\"form-control\"/>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_filter-from-date", [], "admin"), "html", null, true);
            echo "</label>
                                            <input type=\"text\" name=\"creation_from\" value=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "request", [], "any", false, false, true, 135), "get", [0 => "creation_from"], "method", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "\"
                                                   placeholder=\"YYYY-MM-DD\" class=\"js-datepicker form-control\"/>
                                        </div>
                                        <div class=\"form-group  col-sm-6\">
                                                <label>";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_filter-to-date", [], "admin"), "html", null, true);
            echo "</label>
                                                <input type=\"text\" name=\"creation_to\" value=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, true, 140), "get", [0 => "creation_to"], "method", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "\"
                                                       placeholder=\"YYYY-MM-DD\" class=\"js-datepicker form-control\"/>
                                        </div>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_filter-usages", [], "admin"), "html", null, true);
            echo "</label>
                                            <input type=\"number\" name=\"usages\" value=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "request", [], "any", false, false, true, 147), "get", [0 => "usages"], "method", false, false, true, 147), 147, $this->source), "html", null, true);
            echo "\" min=\"0\"
                                                   placeholder=\"usages\" class=\"form-control\"/>
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_filter-length", [], "admin"), "html", null, true);
            echo "</label>
                                            <select class=\"form-control\" name=\"length\" >
                                                ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokenLengths"]) || array_key_exists("tokenLengths", $context) ? $context["tokenLengths"] : (function () { throw new RuntimeError('Variable "tokenLengths" does not exist.', 153, $this->source); })()));
            foreach ($context['_seq'] as $context["length"] => $context["amount"]) {
                // line 154
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["length"], 154, $this->source), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "request", [], "any", false, false, true, 154), "get", [0 => "length"], "method", false, false, true, 154) == $context["length"])) ? ("selected") : (""));
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["length"], 154, $this->source), "html", null, true);
                echo " </option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['length'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                                            </select>
                                        </div>
                                    </div>

                                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "request", [], "any", false, false, true, 160), "get", [0 => "id"], "method", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "\">

                                    <div class=\"form-group\">
                                        <div class=\" col col-sm-12\">
                                            <button class=\"btn btn-primary\" type=\"submit\">";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_apply-filter-button", [], "admin"), "html", null, true);
            echo "</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        ";
        }
        // line 170
        echo "                    </div>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"statistics\">
                    <div class=\"row\">
                        <div class=\"col col-sm-12\">
                            <h2>";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_tab-statistics-headline", [], "admin"), "html", null, true);
        echo "</h2>
                        </div>
                    </div>

                    <div class=\"row header\">

                        <div class=\"col col-sm-4\">
                            ";
        // line 182
        if (array_key_exists("error", $context)) {
            // line 183
            echo "                                <div class=\"alert alert-danger\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 183, $this->source); })()), 183, $this->source), "html", null, true);
            echo "  </div>
                            ";
        }
        // line 185
        echo "                        </div>
                        <div class=\"col col-sm-8 text-right\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default js-modal\" data-modal=\"cleanup-reservations\"><span class=\"fa fa-refresh\"></span>
                                    ";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_cleanup-reservations-button", [], "admin"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>

                    ";
        // line 195
        $this->loadTemplate("@PimcoreEcommerceFramework/voucher/parts/statistics.html.twig", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_pattern.html.twig", 195)->display(twig_array_merge($context, ["statistics" => (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 195, $this->source); })()), "colors" => (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 195, $this->source); })())]));
        // line 196
        echo "
                </div>
            </div>
        </div>
    </div>

    ";
        // line 203
        echo "    ";
        $this->loadTemplate("@PimcoreEcommerceFramework/voucher/parts/modals/pattern/cleanup_modal.html.twig", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_pattern.html.twig", 203)->display(twig_array_merge($context, ["id" => (isset($context["seriesId"]) || array_key_exists("seriesId", $context) ? $context["seriesId"] : (function () { throw new RuntimeError('Variable "seriesId" does not exist.', 203, $this->source); })())]));
        // line 204
        echo "    ";
        $this->loadTemplate("@PimcoreEcommerceFramework/voucher/parts/modals/pattern/generate_modal.html.twig", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_pattern.html.twig", 204)->display(twig_array_merge($context, ["settings" => (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 204, $this->source); })()), "urlParams" => (isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 204, $this->source); })())]));
        // line 205
        echo "    ";
        $this->loadTemplate("@PimcoreEcommerceFramework/voucher/parts/modals/cleanup_reservations_modal.html.twig", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_pattern.html.twig", 205)->display(twig_array_merge($context, ["urlParams" => (isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 205, $this->source); })())]));
        // line 206
        echo "
    <!--Script for statistics-->
    ";
        // line 208
        if (twig_test_iterable(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 208, $this->source); })()), "usage", [], "array", false, false, true, 208))) {
            // line 209
            echo "        ";
            $this->loadTemplate("@PimcoreEcommerceFramework/voucher/parts/usage_statistic_script.html.twig", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_pattern.html.twig", 209)->display(twig_array_merge($context, ["usage" => twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 209, $this->source); })()), "usage", [], "array", false, false, true, 209), "colors" => (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 209, $this->source); })())]));
            // line 210
            echo "    ";
        }
        // line 211
        echo "
    <!--Script for tab view-->
    <script ";
        // line 213
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 213, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 213), 213, $this->source);
        echo ">
        document.addEventListener(\"DOMContentLoaded\", function(event) {
            var documentBody = document.getElementsByTagName(\"body\")[0];
            /**
             *  Init Datepicker
             */
            flatpickr(\".js-datepicker\", {allowInput: true});

            var form = document.querySelector('.js-filter-form');

            documentBody.querySelectorAll('th span.sort').forEach(function (el) {
                el.addEventListener('click', function () {
                    if (this.classList.contains('active')) {
                        console.log(this.classList);
                        if (this.classList.contains('fa-chevron-down')) {
                            this.classList.remove('fa-chevron-down');
                            this.classList.add('fa-chevron-up');
                        } else {
                            this.classList.remove('fa-chevron-up');
                            this.classList.add('fa-chevron-down');
                        }
                    }

                    var criteria = document.createElement('input');
                    criteria.setAttribute('type', 'hidden');
                    criteria.setAttribute('name', 'sort_criteria');
                    criteria.setAttribute('value', this.getAttribute('data-criteria'));

                    var sort_order = this.classList.contains('fa-chevron-down') ? \"DESC\" : \"ASC\";
                    var order = document.createElement('input');
                    order.setAttribute('type', 'hidden');
                    order.setAttribute('name', 'sort_order');
                    order.setAttribute('value', sort_order);

                    form.appendChild(criteria);
                    form.appendChild(order);

                    form.submit();
                });
            });

            /**
             * Init sort parameter and display of icon
             */
            var initSort = function () {
                var criteria = \"";
        // line 258
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 258, $this->source); })()), "request", [], "any", false, false, true, 258), "get", [0 => "sort_criteria"], "method", false, false, true, 258), 258, $this->source), "html", null, true);
        echo "\";
                var order = \"";
        // line 259
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 259, $this->source); })()), "request", [], "any", false, false, true, 259), "get", [0 => "sort_order"], "method", false, false, true, 259), 259, $this->source), "html", null, true);
        echo "\";
                var sortItemActive = document.querySelector('th .sort[data-criteria=\"' + criteria + '\"]');
                var sortItems = document.querySelector('th .sort');

                if (criteria) {
                    sortItems.classList.remove('active');
                    sortItemActive.classList.add('active');
                }

                if (sortItemActive) {
                    if (order == \"ASC\") {
                        sortItemActive.classList.remove(\"fa-chevron-down\");
                        sortItemActive.classList.add(\"fa-chevron-up\");
                    } else {
                        sortItemActive.classList.remove(\"fa-chevron-up\");
                        sortItemActive.classList.add(\"fa-chevron-down\");
                    }
                }

            };

            initSort();
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/voucher/voucher_code_tab_pattern.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 259,  560 => 258,  512 => 213,  508 => 211,  505 => 210,  502 => 209,  500 => 208,  496 => 206,  493 => 205,  490 => 204,  487 => 203,  479 => 196,  477 => 195,  468 => 189,  462 => 185,  456 => 183,  454 => 182,  444 => 175,  437 => 170,  428 => 164,  421 => 160,  415 => 156,  402 => 154,  398 => 153,  393 => 151,  386 => 147,  382 => 146,  373 => 140,  369 => 139,  362 => 135,  358 => 134,  350 => 129,  346 => 128,  341 => 126,  336 => 124,  333 => 123,  331 => 122,  324 => 117,  321 => 116,  312 => 113,  308 => 112,  304 => 111,  300 => 110,  296 => 109,  293 => 108,  288 => 107,  285 => 106,  283 => 105,  276 => 101,  272 => 100,  268 => 99,  264 => 98,  255 => 91,  246 => 87,  240 => 86,  234 => 85,  230 => 84,  227 => 83,  225 => 82,  222 => 81,  214 => 79,  212 => 78,  206 => 74,  204 => 73,  198 => 70,  187 => 61,  181 => 58,  175 => 56,  172 => 55,  170 => 54,  164 => 50,  158 => 48,  156 => 47,  151 => 46,  149 => 45,  144 => 44,  142 => 43,  137 => 40,  131 => 38,  129 => 37,  125 => 36,  116 => 30,  104 => 21,  96 => 16,  88 => 10,  85 => 9,  82 => 8,  79 => 7,  76 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@PimcoreEcommerceFramework/voucher/voucher_layout.html.twig' %}

{% block content %}
    {% set seriesId = app.request.get('id') %}
    {% set urlParams = app.request.query.all %}
    {% if paginator is defined %}
        {% do paginator.setPageRange(10) %}
        {% set pagesCount = paginator.getPaginationData().pageCount %}
    {% endif %}

    <div class=\"container-fluid\">
        <div id=\"content\">
            <ul id=\"tabs\" class=\"nav nav-tabs\" role=\"tablist\">
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
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"manager\">
                    <div class=\"row\">
                        <div class=\"col col-sm-12\">
                            <h2>{{ ('bundle_ecommerce_voucherservice_tab-manager-headline')|trans([],'admin') }}</h2>
                        </div>
                    </div>

                    <div class=\"row header\">
                        <div class=\"col col-sm-4\">
                            <button type=\"button\" class=\"btn btn-primary js-modal\"  data-toggle=\"modal\" data-modal=\"generate\">{{ ('bundle_ecommerce_voucherservice_generate-button')|trans([],'admin') }}</button>
                            {% if voucherType is defined and voucherType != \"VoucherTokenTypeSingle\" %}
                                <button type=\"button\" class=\"btn btn-default js-modal\" data-modal=\"cleanUp\">{{ ('bundle_ecommerce_voucherservice_cleanup-button')|trans([],'admin') }}</button>
                            {% endif %}
                        </div>

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
                                <div class=\"col col-sm-5 mb-3\">
                                    <h4 style=\"float: left;\"><i class=\"fa fa-list\"></i> {{ 'bundle_ecommerce_voucherservice_token-overview-headline'|trans([],'admin') }}</h4>
                                </div>
                                <div class=\"col col-sm-7 text-right\">
                                    {% include \"@PimcoreEcommerceFramework/voucher/parts/paginator.html.twig\" with {'paginationVariables': paginator.getPaginationData() } %}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col col-sm-6\">
                                    {% if voucherType is defined and voucherType != \"VoucherTokenTypeSingle\" %}
                                        <h6 class=\"card-subtitle font-weight-light\">{{ count|number_format(0, ',', ' ') }} {{ ('bundle_ecommerce_voucherservice_result-text')|trans([],'admin') }}</h6>
                                    {% endif %}
                                </div>
                                {% if pagesCount is defined %}
                                    <div class=\"col col-sm-6 text-right\">
                                        <h6 class=\"subtitle pages\">{{ ('bundle_ecommerce_voucherservice_tokens-per-page')|trans([],'admin') }}
                                            <a class=\"pages-count {{ ( pagesCount == 25? 'active') }}\" href=\"{{ pimcore_url({'tokensPerPage': 25}) }}\">25</a>
                                            <a class=\"pages-count {{ (pagesCount == 75? 'active') }}\" href=\"{{ pimcore_url({'tokensPerPage': 75}) }}\">75</a>
                                            <a class=\"pages-count {{ (pagesCount == 150? 'active') }}\" href=\"{{ pimcore_url({'tokensPerPage': 150}) }}\">150</a>
                                        </h6>
                                    </div>
                                {% endif %}
                            </div>

                            <div class=\"table-container\">
                                <table class=\"table\">
                                    <thead class=\"card-header\">
                                    <tr class=\"active\">
                                        <th>#</th>
                                        <th><span class=\"sort fa fa-chevron-down\" data-criteria=\"token\"></span> {{ ('bundle_ecommerce_voucherservice_table-token')|trans([],'admin') }}</th>
                                        <th class=\"text-center\"><span class=\"sort fa fa-chevron-down\" data-criteria=\"usages\"></span> {{ ('bundle_ecommerce_voucherservice_table-usages')|trans([],'admin') }}</th>
                                        <th class=\"text-center\"><span class=\"sort fa fa-chevron-down\" data-criteria=\"length\"></span> {{ ('bundle_ecommerce_voucherservice_table-length')|trans([],'admin') }}</th>
                                        <th class=\"text-center\"><span class=\"sort fa fa-chevron-down\" data-criteria=\"timestamp\"></span> {{ ('bundle_ecommerce_voucherservice_table-date')|trans([],'admin') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% if paginator %}
                                        {% set currentPage = (paginator.currentPageNumber() < 2 ? 0: paginator.currentPageNumber() - 1) %}
                                        {% for id, code in paginator %}
                                            <tr>
                                                <td>{{ (pagesCount * currentPage) + (id + 1) }}</td>
                                                <td class=\"token\">{{ code.getToken() }}</td>
                                                <td class=\"text-center\">{{ code.getUsages()|number_format }}</td>
                                                <td class=\"text-center\">{{ code.getLength()|number_format }}</td>
                                                <td class=\"text-center\">{{ code.getTimestamp() }}</td>
                                            </tr>
                                        {% endfor %}
                                    {% endif %}
                                    <tr class=\" card-header\"><td colspan=\"5\"></td> </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {% if voucherType is defined and voucherType != \"VoucherTokenTypeSingle\" %}
                            <div class=\"col col-sm-4 filter token-filter\">
                                <h3><i class=\"fa fa-search\"></i> {{ ('bundle_ecommerce_voucherservice_filter-headline')|trans([],'admin') }}</h3>

                                <form class=\"form-horizontal js-filter-form\" action=\"{{ pimcore_url([], null, true) }}\">
                                    <div class=\"form-group\">
                                            <label>{{ ('bundle_ecommerce_voucherservice_filter-token')|trans([],'admin') }}</label>
                                            <input type=\"text\" name=\"token\" value=\"{{ app.request.get('token') }}\" placeholder=\"token\"
                                                   class=\"form-control\"/>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>{{ ('bundle_ecommerce_voucherservice_filter-from-date')|trans([],'admin') }}</label>
                                            <input type=\"text\" name=\"creation_from\" value=\"{{ app.request.get('creation_from') }}\"
                                                   placeholder=\"YYYY-MM-DD\" class=\"js-datepicker form-control\"/>
                                        </div>
                                        <div class=\"form-group  col-sm-6\">
                                                <label>{{ ('bundle_ecommerce_voucherservice_filter-to-date')|trans([],'admin') }}</label>
                                                <input type=\"text\" name=\"creation_to\" value=\"{{ app.request.get('creation_to') }}\"
                                                       placeholder=\"YYYY-MM-DD\" class=\"js-datepicker form-control\"/>
                                        </div>
                                    </div>
                                    <div class=\"form-row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>{{ ('bundle_ecommerce_voucherservice_filter-usages')|trans([],'admin') }}</label>
                                            <input type=\"number\" name=\"usages\" value=\"{{ app.request.get('usages') }}\" min=\"0\"
                                                   placeholder=\"usages\" class=\"form-control\"/>
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>{{ ('bundle_ecommerce_voucherservice_filter-length')|trans([],'admin') }}</label>
                                            <select class=\"form-control\" name=\"length\" >
                                                {% for length, amount in tokenLengths %}
                                                    <option value=\"{{ length }}\" {{ (app.request.get('length') == length? \"selected\") }}\"> {{ length }} </option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>

                                    <input type=\"hidden\" name=\"id\" value=\"{{ app.request.get('id') }}\">

                                    <div class=\"form-group\">
                                        <div class=\" col col-sm-12\">
                                            <button class=\"btn btn-primary\" type=\"submit\">{{ ('bundle_ecommerce_voucherservice_apply-filter-button')|trans([],'admin') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"statistics\">
                    <div class=\"row\">
                        <div class=\"col col-sm-12\">
                            <h2>{{ ('bundle_ecommerce_voucherservice_tab-statistics-headline')|trans([],'admin') }}</h2>
                        </div>
                    </div>

                    <div class=\"row header\">

                        <div class=\"col col-sm-4\">
                            {% if error is defined %}
                                <div class=\"alert alert-danger\"> {{ error }}  </div>
                            {% endif %}
                        </div>
                        <div class=\"col col-sm-8 text-right\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default js-modal\" data-modal=\"cleanup-reservations\"><span class=\"fa fa-refresh\"></span>
                                    {{ ('bundle_ecommerce_voucherservice_cleanup-reservations-button'|trans([],'admin')) }}
                                </button>
                            </div>
                        </div>
                    </div>

                    {% include \"@PimcoreEcommerceFramework/voucher/parts/statistics.html.twig\" with {'statistics': statistics, 'colors': colors} %}

                </div>
            </div>
        </div>
    </div>

    {#Modal Templates#}
    {% include \"@PimcoreEcommerceFramework/voucher/parts/modals/pattern/cleanup_modal.html.twig\" with {'id': seriesId} %}
    {% include \"@PimcoreEcommerceFramework/voucher/parts/modals/pattern/generate_modal.html.twig\" with {'settings': settings, 'urlParams': urlParams} %}
    {% include \"@PimcoreEcommerceFramework/voucher/parts/modals/cleanup_reservations_modal.html.twig\" with {'urlParams': urlParams} %}

    <!--Script for statistics-->
    {% if statistics['usage'] is iterable  %}
        {% include \"@PimcoreEcommerceFramework/voucher/parts/usage_statistic_script.html.twig\" with {'usage': statistics['usage'], 'colors': colors} %}
    {% endif %}

    <!--Script for tab view-->
    <script {{ pimcore_csp.getNonceHtmlAttribute()|raw }}>
        document.addEventListener(\"DOMContentLoaded\", function(event) {
            var documentBody = document.getElementsByTagName(\"body\")[0];
            /**
             *  Init Datepicker
             */
            flatpickr(\".js-datepicker\", {allowInput: true});

            var form = document.querySelector('.js-filter-form');

            documentBody.querySelectorAll('th span.sort').forEach(function (el) {
                el.addEventListener('click', function () {
                    if (this.classList.contains('active')) {
                        console.log(this.classList);
                        if (this.classList.contains('fa-chevron-down')) {
                            this.classList.remove('fa-chevron-down');
                            this.classList.add('fa-chevron-up');
                        } else {
                            this.classList.remove('fa-chevron-up');
                            this.classList.add('fa-chevron-down');
                        }
                    }

                    var criteria = document.createElement('input');
                    criteria.setAttribute('type', 'hidden');
                    criteria.setAttribute('name', 'sort_criteria');
                    criteria.setAttribute('value', this.getAttribute('data-criteria'));

                    var sort_order = this.classList.contains('fa-chevron-down') ? \"DESC\" : \"ASC\";
                    var order = document.createElement('input');
                    order.setAttribute('type', 'hidden');
                    order.setAttribute('name', 'sort_order');
                    order.setAttribute('value', sort_order);

                    form.appendChild(criteria);
                    form.appendChild(order);

                    form.submit();
                });
            });

            /**
             * Init sort parameter and display of icon
             */
            var initSort = function () {
                var criteria = \"{{ app.request.get('sort_criteria') }}\";
                var order = \"{{ app.request.get('sort_order') }}\";
                var sortItemActive = document.querySelector('th .sort[data-criteria=\"' + criteria + '\"]');
                var sortItems = document.querySelector('th .sort');

                if (criteria) {
                    sortItems.classList.remove('active');
                    sortItemActive.classList.add('active');
                }

                if (sortItemActive) {
                    if (order == \"ASC\") {
                        sortItemActive.classList.remove(\"fa-chevron-down\");
                        sortItemActive.classList.add(\"fa-chevron-up\");
                    } else {
                        sortItemActive.classList.remove(\"fa-chevron-up\");
                        sortItemActive.classList.add(\"fa-chevron-down\");
                    }
                }

            };

            initSort();
        });
    </script>
{% endblock %}
", "@PimcoreEcommerceFramework/voucher/voucher_code_tab_pattern.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/voucher/voucher_code_tab_pattern.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 6, "do" => 7, "include" => 73, "for" => 107);
        static $filters = array("escape" => 16, "trans" => 16, "merge" => 55, "number_format" => 79, "raw" => 213);
        static $functions = array("path" => 55, "pimcore_url" => 85);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'do', 'include', 'for'],
                ['escape', 'trans', 'merge', 'number_format', 'raw'],
                ['path', 'pimcore_url']
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
