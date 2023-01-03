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

/* @PimcoreEcommerceFramework/admin_order/list.html.twig */
class __TwigTemplate_e2eee972339bd3ecb0a92d5eb5189775 extends Template
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
        return "@PimcoreEcommerceFramework/back-office.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/admin_order/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/admin_order/list.html.twig"));

        // line 3
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreecommerceframework/vendor/flatpickr.min.css")], "method", false, false, true, 3);
        // line 4
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreecommerceframework/vendor/flatpickr.min.js")], "method", false, false, true, 4);
        // line 6
        $context["urlParams"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, true, 6), "query", [], "any", false, false, true, 6), "all", [], "any", false, false, true, 6);
        // line 1
        $this->parent = $this->loadTemplate("@PimcoreEcommerceFramework/back-office.html.twig", "@PimcoreEcommerceFramework/admin_order/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"page-header mt-5\">
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order-list", [], "admin"), "html", null, true);
        echo "</h1>
        <hr>
    </div>
    <div class=\"panel panel-default\">
        <form class=\"form\" role=\"search\">
            <div class=\"panel-body border rounded\">
                <div class=\"form-row m-2\">
                    <div class=\"form-group col-md-4\">
                        <div class=\"input-group\">
                            <div class=\"input-group-btn input-group-prepend\" id=\"search-filter\">
                                ";
        // line 19
        $context["arrFields"] = ["order" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order-list.filter-order", [], "admin"), "productType" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order-list.filter-product-type", [], "admin")];
        // line 21
        echo "                                ";
        $context["selected"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, true, 21), "get", [0 => "search", 1 => "order"], "method", false, false, true, 21);
        // line 22
        echo "                                <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\">
                                    <span id=\"search-filter-label\" data-bind=\"label\">";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["arrFields"]) || array_key_exists("arrFields", $context) ? $context["arrFields"] : (function () { throw new RuntimeError('Variable "arrFields" does not exist.', 23, $this->source); })()), (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 23, $this->source); })()), [], "array", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</span>
                                </button>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrFields"]) || array_key_exists("arrFields", $context) ? $context["arrFields"] : (function () { throw new RuntimeError('Variable "arrFields" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 27
            echo "                                        <li><a class=\"dropdown-item search-filter-item\" href=\"#\" data-value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["field"], 27, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["label"], 27, $this->source), "html", null, true);
            echo "</a></li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                                </ul>
                            </div>
                            <input type=\"hidden\" id=\"search-query\" name=\"search\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 31, $this->source); })()), 31, $this->source), "html", null, true);
        echo "\" />
                            <input type=\"text\" class=\"form-control\" name=\"q\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order-list.search.placeholder", [], "admin"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, true, 32), "get", [0 => "q"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-2\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\"><span class=\"input-group-text fa fa-calendar\"></span></div>
                            <input type=\"text\" id=\"date-from\" class=\"form-control date\" name=\"from\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order-list.filter-date.from", [], "admin"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, true, 38), "get", [0 => "from"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-2\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\"><span class=\"input-group-text fa fa-calendar\"></span></div>
                            <input type=\"text\" id=\"date-till\" class=\"form-control date\" name=\"till\" placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order-list.filter-date.to", [], "admin"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, true, 44), "get", [0 => "till"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    ";
        // line 47
        $context["list"] = twig_get_attribute($this->env, $this->source, (isset($context["listPricingRule"]) || array_key_exists("listPricingRule", $context) ? $context["listPricingRule"] : (function () { throw new RuntimeError('Variable "listPricingRule" does not exist.', 47, $this->source); })()), "load", [], "method", false, false, true, 47);
        // line 48
        echo "
                    ";
        // line 49
        if ((twig_length_filter($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 49, $this->source); })())) > 0)) {
            // line 50
            echo "                        <div class=\"form-group col-sm-4\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\"><span class=\"input-group-text fa fa-tag\"></span></div>
                                <select class=\"form-control custom-select\" name=\"pricingRule\">
                                    <option value=\"\">";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order-list.filter-pricing-rules", [], "admin"), "html", null, true);
            echo "</option>
                                    ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 56
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, true, 56) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, true, 56), "get", [0 => "pricingRule"], "method", false, false, true, 56))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "getLabel", [], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                </select>
                            </div>
                        </div>
                    ";
        }
        // line 62
        echo "
                </div>
                <div class=\"form-group col-md-12 card-header\">
                    <button type=\"submit\" class=\"btn btn-outline-secondary btn-sm d-block mx-auto\"><span class=\"fa fa-filter\"></span> ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order-list.search.button", [], "admin"), "html", null, true);
        echo " </button>
                </div>
            </div>

        </form>
    </div>

    <p class=\"mt-5\"><caption>";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order-list.total-orders", [], "admin"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 72, $this->source); })()), "getTotalItemCount", [], "method", false, false, true, 72), 72, $this->source), "html", null, true);
        echo "</caption></p>
    <table class=\"table table-striped table-hover\">

        <thead>
        <tr>
            <th width=\"180\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order", [], "admin"), "html", null, true);
        echo "</th>
            <th width=\"180\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.date", [], "admin"), "html", null, true);
        echo "</th>
            <th width=\"80\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.order-items", [], "admin"), "html", null, true);
        echo "</th>
            <th class=\"text-right\" width=\"100\">";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.price.total", [], "admin"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 84
        $context["totalSum"] = 0;
        // line 85
        echo "
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 86, $this->source); })()), "items", [], "any", false, false, true, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
            echo "            ";
            $context["totalSum"] = ((isset($context["totalSum"]) || array_key_exists("totalSum", $context) ? $context["totalSum"] : (function () { throw new RuntimeError('Variable "totalSum" does not exist.', 87, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "TotalPrice", [], "array", false, false, true, 87));
            // line 88
            echo "
        <tr>
            <td>
                ";
            // line 91
            $context["urlDetail"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_ecommerce_backend_admin-order_detail", twig_array_merge(["id" => twig_get_attribute($this->env, $this->source, $context["item"], "OrderId", [], "array", false, false, true, 91)], $this->sandbox->ensureToStringAllowed((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 91, $this->source); })()), 91, $this->source)));
            // line 92
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["urlDetail"]) || array_key_exists("urlDetail", $context) ? $context["urlDetail"] : (function () { throw new RuntimeError('Variable "urlDetail" does not exist.', 92, $this->source); })()), 92, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "OrderNumber", [], "array", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "</a>
            </td>
            <td>
                ";
            // line 95
            $context["date"] = twig_get_attribute($this->env, $this->source, $context["item"], "OrderDate", [], "array", false, false, true, 95);
            // line 96
            echo "
                ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "timestamp", [], "any", true, true, true, 97)) {
                // line 98
                echo "                    ";
                $context["date"] = twig_date_converter($this->env);
                // line 99
                echo "                    ";
                twig_get_attribute($this->env, $this->source, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 99, $this->source); })()), "setTimestamp", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "OrderDate", [], "array", false, false, true, 99)], "method", false, false, true, 99);
                // line 100
                echo "                ";
            }
            // line 101
            echo "
                ";
            // line 102
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["formatter"]) || array_key_exists("formatter", $context) ? $context["formatter"] : (function () { throw new RuntimeError('Variable "formatter" does not exist.', 102, $this->source); })()), "formatDateTime", [0 => (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 102, $this->source); })()), 1 => twig_constant("\\Pimcore\\Localization\\IntlFormatter::DATETIME_MEDIUM")], "method", false, false, true, 102), 102, $this->source), "html", null, true);
            echo "
            </td>
            <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "Items", [], "array", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "</td>
            </td>
            <td class=\"text-right\">";
            // line 106
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["formatter"]) || array_key_exists("formatter", $context) ? $context["formatter"] : (function () { throw new RuntimeError('Variable "formatter" does not exist.', 106, $this->source); })()), "formatCurrency", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "TotalPrice", [], "array", false, false, true, 106), 1 => twig_get_attribute($this->env, $this->source, (isset($context["defaultCurrency"]) || array_key_exists("defaultCurrency", $context) ? $context["defaultCurrency"] : (function () { throw new RuntimeError('Variable "defaultCurrency" does not exist.', 106, $this->source); })()), "getShortName", [], "method", false, false, true, 106)], "method", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\">
                <strong>";
        // line 114
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["defaultCurrency"]) || array_key_exists("defaultCurrency", $context) ? $context["defaultCurrency"] : (function () { throw new RuntimeError('Variable "defaultCurrency" does not exist.', 114, $this->source); })()), "toCurrency", [0 => (isset($context["totalSum"]) || array_key_exists("totalSum", $context) ? $context["totalSum"] : (function () { throw new RuntimeError('Variable "totalSum" does not exist.', 114, $this->source); })())], "method", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "</strong>
            </td>
        </tr>
        </tfoot>
    </table>

    ";
        // line 120
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 120, $this->source); })()), "getPaginationData", [], "method", false, false, true, 120), "pageCount", [], "any", false, false, true, 120) > 1)) {
            // line 121
            echo "        ";
            $this->loadTemplate("@PimcoreEcommerceFramework/includes/paging.html.twig", "@PimcoreEcommerceFramework/admin_order/list.html.twig", 121)->display(twig_array_merge($context, ["paginationVariables" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 121, $this->source); })()), "getPaginationData", [], "method", false, false, true, 121)]));
            // line 122
            echo "    ";
        }
        // line 123
        echo "
    ";
        // line 124
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "captureStart", [], "method", false, false, true, 124);
        // line 125
        echo "            //datepicker
            flatpickr(\".date\", {allowInput: true});

            document.querySelectorAll('.search-filter-item').forEach(function(el){
                el.addEventListener('click', function() {
                    document.querySelector('#search-filter-label').innerHTML = this.text;
                    document.querySelector('#search-query').setAttribute(\"value\", this.getAttribute('data-value'));
                });
            });

    ";
        // line 135
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "captureEnd", [], "method", false, false, true, 135);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/admin_order/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 135,  339 => 125,  337 => 124,  334 => 123,  331 => 122,  328 => 121,  326 => 120,  317 => 114,  310 => 109,  301 => 106,  296 => 104,  291 => 102,  288 => 101,  285 => 100,  282 => 99,  279 => 98,  277 => 97,  274 => 96,  272 => 95,  263 => 92,  261 => 91,  256 => 88,  253 => 87,  249 => 86,  246 => 85,  244 => 84,  237 => 80,  233 => 79,  229 => 78,  225 => 77,  215 => 72,  205 => 65,  200 => 62,  194 => 58,  181 => 56,  177 => 55,  173 => 54,  167 => 50,  165 => 49,  162 => 48,  160 => 47,  152 => 44,  141 => 38,  130 => 32,  126 => 31,  122 => 29,  111 => 27,  107 => 26,  101 => 23,  98 => 22,  95 => 21,  93 => 19,  80 => 9,  77 => 8,  67 => 7,  56 => 1,  54 => 6,  52 => 4,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@PimcoreEcommerceFramework/back-office.html.twig' %}

{% do pimcore_head_link().appendStylesheet(asset('/bundles/pimcoreecommerceframework/vendor/flatpickr.min.css')) %}
{% do pimcore_head_script().appendFile(asset('/bundles/pimcoreecommerceframework/vendor/flatpickr.min.js')) %}

{% set urlParams = app.request.query.all %}
{% block content %}
    <div class=\"page-header mt-5\">
        <h1>{{ 'bundle_ecommerce.back-office.order-list'|trans([],'admin') }}</h1>
        <hr>
    </div>
    <div class=\"panel panel-default\">
        <form class=\"form\" role=\"search\">
            <div class=\"panel-body border rounded\">
                <div class=\"form-row m-2\">
                    <div class=\"form-group col-md-4\">
                        <div class=\"input-group\">
                            <div class=\"input-group-btn input-group-prepend\" id=\"search-filter\">
                                {% set arrFields = {'order': ('bundle_ecommerce.back-office.order-list.filter-order')|trans([],'admin') ,
                                    'productType' :   ('bundle_ecommerce.back-office.order-list.filter-product-type')|trans([],'admin') } %}
                                {% set selected = app.request.get('search', 'order') %}
                                <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\">
                                    <span id=\"search-filter-label\" data-bind=\"label\">{{ arrFields[selected] }}</span>
                                </button>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    {% for field,label in arrFields %}
                                        <li><a class=\"dropdown-item search-filter-item\" href=\"#\" data-value=\"{{ field }}\">{{ label }}</a></li>
                                    {% endfor %}
                                </ul>
                            </div>
                            <input type=\"hidden\" id=\"search-query\" name=\"search\" value=\"{{ selected }}\" />
                            <input type=\"text\" class=\"form-control\" name=\"q\" placeholder=\"{{ 'bundle_ecommerce.back-office.order-list.search.placeholder'|trans([],'admin') }}\" value=\"{{ app.request.get('q') }}\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-2\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\"><span class=\"input-group-text fa fa-calendar\"></span></div>
                            <input type=\"text\" id=\"date-from\" class=\"form-control date\" name=\"from\" placeholder=\"{{ 'bundle_ecommerce.back-office.order-list.filter-date.from'|trans([],'admin') }}\" value=\"{{ app.request.get('from') }}\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-2\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\"><span class=\"input-group-text fa fa-calendar\"></span></div>
                            <input type=\"text\" id=\"date-till\" class=\"form-control date\" name=\"till\" placeholder=\"{{ 'bundle_ecommerce.back-office.order-list.filter-date.to'|trans([],'admin') }}\" value=\"{{ app.request.get('till') }}\">
                        </div>
                    </div>
                    {% set list = listPricingRule.load() %}

                    {%  if (list|length > 0)  %}
                        <div class=\"form-group col-sm-4\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\"><span class=\"input-group-text fa fa-tag\"></span></div>
                                <select class=\"form-control custom-select\" name=\"pricingRule\">
                                    <option value=\"\">{{ 'bundle_ecommerce.back-office.order-list.filter-pricing-rules'|trans([],'admin') }}</option>
                                    {% for item in list %}
                                        <option value=\"{{ item.getId() }}\" {{ (item.getId() == app.request.get('pricingRule') ? 'selected':'') }}>{{ item.getLabel() }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    {% endif %}

                </div>
                <div class=\"form-group col-md-12 card-header\">
                    <button type=\"submit\" class=\"btn btn-outline-secondary btn-sm d-block mx-auto\"><span class=\"fa fa-filter\"></span> {{ 'bundle_ecommerce.back-office.order-list.search.button'|trans([],'admin') }} </button>
                </div>
            </div>

        </form>
    </div>

    <p class=\"mt-5\"><caption>{{ 'bundle_ecommerce.back-office.order-list.total-orders'|trans([],'admin') }}: {{ paginator.getTotalItemCount() }}</caption></p>
    <table class=\"table table-striped table-hover\">

        <thead>
        <tr>
            <th width=\"180\">{{ 'bundle_ecommerce.back-office.order'|trans([],'admin') }}</th>
            <th width=\"180\">{{ 'bundle_ecommerce.back-office.order.date'|trans([],'admin') }}</th>
            <th width=\"80\">{{ 'bundle_ecommerce.back-office.order.order-items'|trans([],'admin') }}</th>
            <th class=\"text-right\" width=\"100\">{{ 'bundle_ecommerce.back-office.order.price.total'|trans([],'admin') }}</th>
        </tr>
        </thead>
        <tbody>
        {% set totalSum = 0 %}

        {% for item in paginator.items %}
            {% set totalSum = totalSum + item['TotalPrice'] %}

        <tr>
            <td>
                {% set urlDetail = path('pimcore_ecommerce_backend_admin-order_detail', {'id' : item['OrderId']}|merge(urlParams)) %}
                <a href=\"{{ urlDetail }}\">{{ item['OrderNumber'] }}</a>
            </td>
            <td>
                {% set date = item['OrderDate'] %}

                {% if date.timestamp is defined %}
                    {% set date = date() %}
                    {% do date.setTimestamp(item['OrderDate']) %}
                {% endif %}

                {{ formatter.formatDateTime(date, constant('\\\\Pimcore\\\\Localization\\\\IntlFormatter::DATETIME_MEDIUM')) }}
            </td>
            <td>{{ item['Items'] }}</td>
            </td>
            <td class=\"text-right\">{{ formatter.formatCurrency(item['TotalPrice'], defaultCurrency.getShortName()) }}</td>
        </tr>
        {% endfor %}
        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\">
                <strong>{{ defaultCurrency.toCurrency(totalSum) }}</strong>
            </td>
        </tr>
        </tfoot>
    </table>

    {% if paginator.getPaginationData().pageCount > 1 %}
        {% include \"@PimcoreEcommerceFramework/includes/paging.html.twig\" with {'paginationVariables': paginator.getPaginationData() } %}
    {% endif %}

    {% do pimcore_head_script().captureStart() %}
            //datepicker
            flatpickr(\".date\", {allowInput: true});

            document.querySelectorAll('.search-filter-item').forEach(function(el){
                el.addEventListener('click', function() {
                    document.querySelector('#search-filter-label').innerHTML = this.text;
                    document.querySelector('#search-query').setAttribute(\"value\", this.getAttribute('data-value'));
                });
            });

    {% do pimcore_head_script().captureEnd() %}
{% endblock %}



", "@PimcoreEcommerceFramework/admin_order/list.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/admin_order/list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("do" => 3, "set" => 6, "for" => 26, "if" => 49, "include" => 121);
        static $filters = array("escape" => 9, "trans" => 9, "length" => 49, "merge" => 91);
        static $functions = array("pimcore_head_link" => 3, "asset" => 3, "pimcore_head_script" => 4, "path" => 91, "date" => 98, "constant" => 102);

        try {
            $this->sandbox->checkSecurity(
                ['do', 'set', 'for', 'if', 'include'],
                ['escape', 'trans', 'length', 'merge'],
                ['pimcore_head_link', 'asset', 'pimcore_head_script', 'path', 'date', 'constant']
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
