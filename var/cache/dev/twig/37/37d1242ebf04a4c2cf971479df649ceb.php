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

/* @PimcoreEcommerceFramework/admin_order/detail.html.twig */
class __TwigTemplate_bd38244add532acd0a20251433d60d2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/admin_order/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/admin_order/detail.html.twig"));

        // line 11
        $context["order"] = twig_get_attribute($this->env, $this->source, (isset($context["orderAgent"]) || array_key_exists("orderAgent", $context) ? $context["orderAgent"] : (function () { throw new RuntimeError('Variable "orderAgent" does not exist.', 11, $this->source); })()), "getOrder", [], "method", false, false, true, 11);
        // line 12
        $context["currency"] = twig_get_attribute($this->env, $this->source, (isset($context["orderAgent"]) || array_key_exists("orderAgent", $context) ? $context["orderAgent"] : (function () { throw new RuntimeError('Variable "orderAgent" does not exist.', 12, $this->source); })()), "getCurrency", [], "method", false, false, true, 12);
        // line 13
        $context["regionArray"] = twig_get_attribute($this->env, $this->source, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 13, $this->source); })()), "getDisplayRegions", [], "method", false, false, true, 13);
        // line 14
        $context["urlParams"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, true, 14), "query", [], "any", false, false, true, 14), "all", [], "any", false, false, true, 14);
        // line 1
        $this->parent = $this->loadTemplate("@PimcoreEcommerceFramework/back-office.html.twig", "@PimcoreEcommerceFramework/admin_order/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreadmin/js/lib/leaflet/leaflet.css")], "method", false, false, true, 5);
        // line 6
        echo "        ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreadmin/js/lib/leaflet/leaflet.js")], "method", false, false, true, 6);
        // line 7
        echo "    ";
        $___internal_parse_9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_parse_9_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <div class=\"order-detail row mt-3\">
        <div class=\"col-md-7\">
            ";
        // line 20
        echo "            <div class=\"card mb-3\">
                <div class=\"card-header\">
                    <div class=\"row font-weight-bold\">
                        ";
        // line 23
        $context["urlParams"] = twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 23, $this->source); })()), 23, $this->source), ["id" => null]);
        // line 24
        echo "                        ";
        $context["urlList"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_ecommerce_backend_admin-order_list", $this->sandbox->ensureToStringAllowed((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 24, $this->source); })()), 24, $this->source));
        // line 25
        echo "                        <div class=\"col-sm-6\">
                            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["urlList"]) || array_key_exists("urlList", $context) ? $context["urlList"] : (function () { throw new RuntimeError('Variable "urlList" does not exist.', 26, $this->source); })()), 26, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order-list", [], "admin"), "html", null, true);
        echo "</a>
                            <span class=\"fa fa-chevron-right\"></span>
                            <a href=\"#\" data-action=\"open\" data-id=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()), "getId", [], "method", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()), "getOrdernumber", [], "method", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "</a>
                        </div>
                        <div class=\"col-sm-6 text-right\">
                            ";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 31, $this->source); })()), "getOrderDate", [], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
                        </div>
                    </div>
                    <h2 class=\"d-none row font-weight-bold\">
                        <div class=\"col-md-6\">
                            <a class=\"btn btn-default btn-xs\"><span class=\"fa fa-chevron-left\"></span></a>
                            ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order", [], "admin"), "html", null, true);
        echo " <a href=\"#\" data-action=\"open\" data-id=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 37, $this->source); })()), "getId", [], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 37, $this->source); })()), "getOrdernumber", [], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "</a>
                        </div>
                        <div class=\"col-md-6 text-right\">
                            ";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "getOrderDate", [], "method", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
                        </div>
                    </h2>
                </div>
            </div>

            ";
        // line 47
        echo "            <div class=\"card mb-3\">
                <div class=\"card-header\">
                    <span class=\"fa fa-list-alt\"></span> ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.order-items", [], "admin"), "html", null, true);
        echo "
                    ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 50, $this->source); })()), "getComment", [], "method", false, false, true, 50)) {
            // line 51
            echo "                        <button type=\"button\" class=\"btn btn-xs btn-default pull-right\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"right\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.comment.user", [], "admin"), "html", null, true);
            echo "\" data-content=\"";
            echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 51, $this->source); })()), "getComment", [], "method", false, false, true, 51), 51, $this->source), "html", null, true));
            echo "\">
                            <span class=\"fa fa-comment\"></span>
                        </button>
                    ";
        }
        // line 55
        echo "                </div>
                <table class=\"table table-order-items\">
                    <thead>
                    <tr>
                        <th width=\"70\">ID</th>
                        <th>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.product", [], "admin"), "html", null, true);
        echo "</th>
                        <th class=\"text-right\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.price.unit", [], "admin"), "html", null, true);
        echo "</th>
                        <th width=\"60\" class=\"text-center\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.quantity", [], "admin"), "html", null, true);
        echo "</th>
                        <th class=\"text-right\" width=\"110\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.price.total", [], "admin"), "html", null, true);
        echo "</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr class=\"card-header\">
                        <td colspan=\"6\"></td>
                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 70, $this->source); })()), "getPriceModifications", [], "method", false, false, true, 70)) ? (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 70, $this->source); })()), "getPriceModifications", [], "method", false, false, true, 70)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
            // line 71
            echo "                        <tr>
                            <td colspan=\"4\" class=\"text-right\">";
            // line 72
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["modification"], "getName", [], "method", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "</td>
                            <th class=\"text-right\">";
            // line 73
            ((twig_get_attribute($this->env, $this->source, (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 73, $this->source); })()), "toCurrency", [0 => twig_get_attribute($this->env, $this->source, $context["modification"], "getAmount", [], "method", false, false, true, 73)], "method", false, false, true, 73)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 73, $this->source); })()), "toCurrency", [0 => twig_get_attribute($this->env, $this->source, $context["modification"], "getAmount", [], "method", false, false, true, 73)], "method", false, false, true, 73), "html", null, true))) : (print ("-")));
            echo "</th>
                            <th></th>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    <tr class=\"card-header\">
                        <td colspan=\"4\"  class=\"text-right\">Total</td>
                        <th class=\"text-right\">";
        // line 79
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 79, $this->source); })()), "toCurrency", [0 => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 79, $this->source); })()), "getTotalPrice", [], "method", false, false, true, 79)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "</th>
                        <td></td>
                    </tr>

                    ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 83, $this->source); })()), "getTaxInfo", [], "method", false, false, true, 83)) {
            // line 84
            echo "                        <tr>
                            <th colspan=\"4\" class=\"text-right\">";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.cart-taxes", [], "admin"), "html", null, true);
            echo "</th>
                            <th></th>
                            <th></th>
                        </tr>

                        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 90, $this->source); })()), "getTaxInfo", [], "method", false, false, true, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["taxEntry"]) {
                // line 91
                echo "                            <tr>
                                <td colspan=\"4\" class=\"text-right\">";
                // line 92
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["taxEntry"], 0, [], "array", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "</td>
                                <td class=\"text-right\">
                                    ";
                // line 94
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["taxEntry"], 1, [], "array", false, false, true, 94), 94, $this->source), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 94, $this->source); })()), "toCurrency", [0 => twig_get_attribute($this->env, $this->source, $context["taxEntry"], 2, [], "array", false, false, true, 94)], "method", false, false, true, 94), 94, $this->source), "html", null, true);
                echo ")
                                </td>
                                <td></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxEntry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                    ";
        }
        // line 100
        echo "                    </tfoot>
                    <tbody>

                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 103, $this->source); })()), "getItems", [], "method", false, false, true, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 104
            echo "                        <tr>
                            <td>
                                <a href=\"#\" data-action=\"open\" data-id=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "</a>
                            </td>
                            <td>
                                ";
            // line 109
            ((twig_get_attribute($this->env, $this->source, $context["item"], "isCanceled", [], "method", false, false, true, 109)) ? (print (twig_sprintf("<s>%s</s>", twig_get_attribute($this->env, $this->source, $context["item"], "getProductName", [], "method", false, false, true, 109)))) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getProductName", [], "method", false, false, true, 109), "html", null, true))));
            echo "
                            </td>
                            <td class=\"text-right\">";
            // line 111
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 111, $this->source); })()), "toCurrency", [0 => (twig_get_attribute($this->env, $this->source, $context["item"], "getTotalPrice", [], "method", false, false, true, 111) / twig_get_attribute($this->env, $this->source, $context["item"], "getAmount", [], "any", false, false, true, 111))], "method", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 112
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "getAmount", [], "method", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</td>
                            <td class=\"text-right\">";
            // line 113
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 113, $this->source); })()), "toCurrency", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "getTotalPrice", [], "method", false, false, true, 113)], "method", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 115
            if (twig_get_attribute($this->env, $this->source, $context["item"], "getComment", [], "method", false, false, true, 115)) {
                // line 116
                echo "                                    <button type=\"button\" class=\"btn btn-xs btn-default\" data-container=\"body\" data-toggle=\"popover\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.comment.user", [], "admin"), "html", null, true);
                echo "\" data-content=\"";
                echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "getComment", [], "method", false, false, true, 116), 116, $this->source), "html", null, true));
                echo "\">
                                        <span class=\"fa fa-commnet\"></span>
                                    </button>
                                ";
            }
            // line 120
            echo "
                                <!-- item actions -->
                                ";
            // line 122
            if (twig_get_attribute($this->env, $this->source, $context["item"], "isEditAble", [], "method", false, false, true, 122)) {
                // line 123
                echo "                                    ";
                $context["urlEdit"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_ecommerce_backend_admin-order_item-edit", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, true, 123)]);
                // line 124
                echo "
                                <div class=\"btn-group btn-group-sm\">
                                    <button href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["urlEdit"]) || array_key_exists("urlEdit", $context) ? $context["urlEdit"] : (function () { throw new RuntimeError('Variable "urlEdit" does not exist.', 126, $this->source); })()), 126, $this->source), "html", null, true);
                echo "\" class=\"popup-modal btn btn-secondary input-group-text\"><span class=\"fa fa-pen\"></span></button>
                                    <button type=\"button\" class=\"input-group-append btn btn-secondary input-group-text dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"></button>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li>
                                            ";
                // line 130
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isCancelAble", [], "method", false, false, true, 130)) {
                    // line 131
                    echo "                                                ";
                    $context["urlCancel"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_ecommerce_backend_admin-order_item-cancel", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, true, 131)]);
                    // line 132
                    echo "                                                <a class=\"dropdown-item popup-modal\" href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["urlCancel"]) || array_key_exists("urlCancel", $context) ? $context["urlCancel"] : (function () { throw new RuntimeError('Variable "urlCancel" does not exist.', 132, $this->source); })()), 132, $this->source), "html", null, true);
                    echo "\" class=\"text-danger\">
                                                    <span class=\"fa fa-times pr-2 text-danger\"></span>
                                                    ";
                    // line 134
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.cancel.item", [], "admin"), "html", null, true);
                    echo "
                                                </a>
                                            ";
                }
                // line 137
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isComplaintAble", [], "method", false, false, true, 137)) {
                    // line 138
                    echo "                                                ";
                    $context["urlComplaint"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_ecommerce_backend_admin-order_item-complaint", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, true, 138)]);
                    // line 139
                    echo "                                                <a class=\"dropdown-item popup-modal\" href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["urlComplaint"]) || array_key_exists("urlComplaint", $context) ? $context["urlComplaint"] : (function () { throw new RuntimeError('Variable "urlComplaint" does not exist.', 139, $this->source); })()), 139, $this->source), "html", null, true);
                    echo "\" class=\"text-danger\">
                                                    <span class=\"fa fa-share pr-1\"></span>
                                                    ";
                    // line 141
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.complaint.item", [], "admin"), "html", null, true);
                    echo "
                                                </a>
                                            ";
                }
                // line 144
                echo "                                        </li>
                                    </ul>
                                </div>
                                ";
            }
            // line 148
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                    </tbody>
                </table>
            </div>

            ";
        // line 155
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 155, $this->source); })()), "giftItems", [], "method", false, false, true, 155)) > 0)) {
            // line 156
            echo "                <div class=\"card mb-3\">
                    <div class=\"card-header\">
                        <span class=\"fa fa-gift\"></span> ";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.gifts", [], "admin"), "html", null, true);
            echo "
                    </div>
                    <table class=\"table table-order-items\">
                        <thead>
                        <tr>
                            <th width=\"70\">ID</th>
                            <th>";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.product", [], "admin"), "html", null, true);
            echo "</th>
                            <th width=\"60\" class=\"text-center\">";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.quantity", [], "admin"), "html", null, true);
            echo "</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tbody>

                        ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 172, $this->source); })()), "giftItems", [], "method", false, false, true, 172));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 173
                echo "                            <tr>
                                <td>
                                    <a href=\"#\" data-action=\"open\" data-id=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, true, 175), 175, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, true, 175), 175, $this->source), "html", null, true);
                echo "</a>
                                </td>
                                <td>
                                    ";
                // line 178
                ((twig_get_attribute($this->env, $this->source, $context["item"], "isCanceled", [], "method", false, false, true, 178)) ? (print (twig_sprintf("<s>%s</s>", twig_get_attribute($this->env, $this->source, $context["item"], "getProductName", [], "method", false, false, true, 178)))) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getProductName", [], "method", false, false, true, 178), "html", null, true))));
                echo "
                                </td>
                                <td class=\"text-center\">";
                // line 180
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "getAmount", [], "method", false, false, true, 180), 180, $this->source), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                        </tbody>
                    </table>
                </div>
            ";
        }
        // line 187
        echo "
            ";
        // line 189
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["orderAgent"]) || array_key_exists("orderAgent", $context) ? $context["orderAgent"] : (function () { throw new RuntimeError('Variable "orderAgent" does not exist.', 189, $this->source); })()), "hasPayment", [], "method", false, false, true, 189)) {
            // line 190
            echo "            <div class=\"card\">
                <div class=\"card-header\">
                    <span class=\"fa fa-credit-card\"></span> ";
            // line 192
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.payment.history", [], "admin"), "html", null, true);
            echo "
                </div>
                <table class=\"table table-condensed mb-0\">
                    ";
            // line 195
            $context["class"] = null;
            // line 196
            echo "                    <tbody>
                        ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 197, $this->source); })()), "getPaymentInfo", [], "method", false, false, true, 197));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 198
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "getPaymentFinish", [], "method", false, false, true, 198)) {
                    // line 199
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "getPaymentState", [], "method", false, false, true, 199) == "paymentAuthorized")) {
                        // line 200
                        echo "                                        ";
                        $context["class"] = "alert-info";
                        // line 201
                        echo "                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["item"], "getPaymentState", [], "method", false, false, true, 201) == "committed")) {
                        // line 202
                        echo "                                        ";
                        $context["class"] = "alert-success";
                        // line 203
                        echo "                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["item"], "getPaymentState", [], "method", false, false, true, 203) == "aborted")) {
                        // line 204
                        echo "                                        ";
                        $context["class"] = "alert-danger";
                        // line 205
                        echo "                                ";
                    }
                    // line 206
                    echo "                            ";
                }
                // line 207
                echo "                            <tr>
                                <td width=\"130\">
                                    <small>
                                        ";
                // line 210
                ((twig_get_attribute($this->env, $this->source, $context["item"], "getPaymentFinish", [], "method", false, false, true, 210)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formatter"]) || array_key_exists("formatter", $context) ? $context["formatter"] : (function () { throw new RuntimeError('Variable "formatter" does not exist.', 210, $this->source); })()), "formatDateTime", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "getPaymentFinish", [], "method", false, false, true, 210), 1 => twig_constant("\\Pimcore\\Localization\\IntlFormatter::DATETIME_MEDIUM")], "method", false, false, true, 210), "html", null, true))) : (print ("")));
                echo "
                                    </small>
                                </td>
                                <td width=\"100\">
                                    <small>
                                        ";
                // line 215
                $context["amount"] = null;
                // line 216
                echo "                                        ";
                $context["break"] = false;
                // line 217
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["paymentProviders"]) || array_key_exists("paymentProviders", $context) ? $context["paymentProviders"] : (function () { throw new RuntimeError('Variable "paymentProviders" does not exist.', 217, $this->source); })()));
                foreach ($context['_seq'] as $context["providerKey"] => $context["providerClass"]) {
                    // line 218
                    echo "                                            ";
                    if ( !(isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new RuntimeError('Variable "break" does not exist.', 218, $this->source); })())) {
                        // line 219
                        echo "                                                ";
                        $context["getter"] = twig_sprintf("provider_%s_amount", $this->sandbox->ensureToStringAllowed($context["providerKey"], 219, $this->source));
                        // line 220
                        echo "                                                ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], (isset($context["getter"]) || array_key_exists("getter", $context) ? $context["getter"] : (function () { throw new RuntimeError('Variable "getter" does not exist.', 220, $this->source); })()), [], "any", true, true, true, 220)) {
                            // line 221
                            echo "                                                    ";
                            $context["amount"] = twig_get_attribute($this->env, $this->source, $context["item"], (isset($context["getter"]) || array_key_exists("getter", $context) ? $context["getter"] : (function () { throw new RuntimeError('Variable "getter" does not exist.', 221, $this->source); })()), [], "any", false, false, true, 221);
                            // line 222
                            echo "                                                    ";
                            if ((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 222, $this->source); })())) {
                                // line 223
                                echo "                                                        ";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 223, $this->source); })()), 223, $this->source), "html", null, true);
                                echo "
                                                        ";
                                // line 224
                                $context["break"] = true;
                                // line 225
                                echo "                                                    ";
                            }
                            // line 226
                            echo "                                                ";
                        }
                        // line 227
                        echo "                                            ";
                    }
                    // line 228
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['providerKey'], $context['providerClass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 229
                echo "                                    </small>
                                </td>
                                <td class=\"";
                // line 231
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 231, $this->source); })()), 231, $this->source), "html", null, true);
                echo "\">
                                    <small title=\"";
                // line 232
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "getPaymentState", [], "method", false, false, true, 232), 232, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "getMessage", [], "method", false, false, true, 232), 232, $this->source), "html", null, true);
                echo "</small>
                                </td>
                                <td class=\"text-right\"><small>";
                // line 234
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "getPaymentReference", [], "method", false, false, true, 234), 234, $this->source), "html", null, true);
                echo "</small></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                    </tbody>
                </table>
            </div>
            ";
        }
        // line 241
        echo "        </div>

        <div class=\"col-md-5\">
            <!-- customer infos -->
            <div role=\"tabpanel\" class=\"tabpanel-customer-info\">
                <ul class=\"nav nav-tabs\" id=\"deliveryTab\" role=\"tablist\">
                    <li role=\"presentation\" class=\"nav-item active\">
                        <a class=\"nav-link active\" href=\"#addressInvoice\" aria-controls=\"addressInvoice\" role=\"tab\" data-toggle=\"tab\"><span class=\"fa fa-file\"></span>
                            ";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.address.invoice", [], "admin"), "html", null, true);
        echo "</a>
                    </li>
                    ";
        // line 251
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 251, $this->source); })()), "hasDeliveryAddress", [], "method", false, false, true, 251)) {
            // line 252
            echo "                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link\" id=\"addressDeliveryTab\" href=\"#addressDelivery\" aria-controls=\"addressDelivery\" role=\"tab\" data-toggle=\"tab\"><span class=\"fa fa-home\"></span>
                            ";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.address.delivery", [], "admin"), "html", null, true);
            echo "</a>
                    </li>
                    ";
        }
        // line 257
        echo "
                    ";
        // line 258
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 258, $this->source); })()), "getCustomer", [], "method", false, false, true, 258)) {
            // line 259
            echo "                        <li class=\"nav-item ml-auto\" role=\"presentation\">
                            <a class=\"nav-link\" href=\"#customerDetail\" aria-controls=\"customerDetail\" role=\"tab\" data-toggle=\"tab\"><span class=\"fa fa-user\"></span>
                            </a>
                        </li>
                    ";
        }
        // line 264
        echo "                </ul>

                <!-- Tab panes -->
                <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"addressInvoice\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <address>
                                    ";
        // line 272
        $context["address"] = [];
        // line 273
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 273, $this->source); })()), "getCustomerCompany", [], "method", false, false, true, 273)) {
            // line 274
            echo "                                        <h4>";
            echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 274, $this->source); })()), "getCustomerCompany", [], "method", false, false, true, 274), 274, $this->source), "html", null, true));
            echo "</h4>
                                    ";
        }
        // line 276
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 276, $this->source); })()), "getCustomerFirstname", [], "method", false, false, true, 276) || twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 276, $this->source); })()), "getCustomerLastname", [], "method", false, false, true, 276))) {
            // line 277
            echo "                                        ";
            echo twig_escape_filter($this->env, (($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 277, $this->source); })()), "getCustomerFirstname", [], "method", false, false, true, 277), 277, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 277, $this->source); })()), "getCustomerLastname", [], "method", false, false, true, 277), 277, $this->source)), "html", null, true);
            echo "<br/>
                                    ";
        }
        // line 279
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 279, $this->source); })()), "getCustomerStreet", [], "method", false, false, true, 279), 279, $this->source), "html", null, true);
        echo "<br/>
                                    ";
        // line 280
        echo twig_escape_filter($this->env, (($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 280, $this->source); })()), "getCustomerZip", [], "method", false, false, true, 280), 280, $this->source) . " - ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 280, $this->source); })()), "getCustomerCity", [], "method", false, false, true, 280), 280, $this->source)), "html", null, true);
        echo "<br/>
                                    ";
        // line 281
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 281, $this->source); })()), "getCustomerCountry", [], "method", false, false, true, 281)) {
            // line 282
            echo "                                        ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 282, $this->source); })()), "getCustomerCountry", [], "method", false, false, true, 282), twig_get_array_keys_filter((isset($context["regionArray"]) || array_key_exists("regionArray", $context) ? $context["regionArray"] : (function () { throw new RuntimeError('Variable "regionArray" does not exist.', 282, $this->source); })())))) {
                // line 283
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["regionArray"]) || array_key_exists("regionArray", $context) ? $context["regionArray"] : (function () { throw new RuntimeError('Variable "regionArray" does not exist.', 283, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 283, $this->source); })()), "getCustomerCountry", [], "method", false, false, true, 283), [], "array", false, false, true, 283), 283, $this->source)), "html", null, true);
                echo "<br/>
                                        ";
            } else {
                // line 285
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 285, $this->source); })()), "getCustomerCountry", [], "method", false, false, true, 285), 285, $this->source)), "html", null, true);
                echo "<br/>
                                        ";
            }
            // line 286
            echo "                                        
                                    ";
        }
        // line 288
        echo "
                                    ";
        // line 289
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 289, $this->source); })()), "getCustomer", [], "method", false, false, true, 289) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getCustomer", [], "method", false, true, true, 289), "email", [], "any", true, true, true, 289))) {
            // line 290
            echo "                                        ";
            echo twig_sprintf("<a href=\"mailto:%1\$s\">%1\$s</a>", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 290, $this->source); })()), "getCustomer", [], "method", false, false, true, 290), "getEmail", [], "method", false, false, true, 290), 290, $this->source));
            echo "
                                    ";
        }
        // line 292
        echo "                                </address>
                            </div>
                            ";
        // line 294
        if ((isset($context["geoAddressInvoice"]) || array_key_exists("geoAddressInvoice", $context) ? $context["geoAddressInvoice"] : (function () { throw new RuntimeError('Variable "geoAddressInvoice" does not exist.', 294, $this->source); })())) {
            // line 295
            echo "                                <div class=\"col-md-6\">
                                    <div id=\"leafletmap-invoice\" style=\"width: 200px; height:200px\"></div>
                                </div>
                            ";
        }
        // line 299
        echo "                        </div>
                    </div>

                    ";
        // line 302
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 302, $this->source); })()), "hasDeliveryAddress", [], "method", false, false, true, 302)) {
            // line 303
            echo "                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"addressDelivery\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <address>
                                        ";
            // line 307
            $context["address"] = [];
            // line 308
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 308, $this->source); })()), "getDeliveryCompany", [], "method", false, false, true, 308)) {
                // line 309
                echo "                                            <h4>";
                echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 309, $this->source); })()), "getDeliveryCompany", [], "method", false, false, true, 309), 309, $this->source), "html", null, true));
                echo "</h4>
                                        ";
            }
            // line 311
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 311, $this->source); })()), "getDeliveryFirstname", [], "method", false, false, true, 311) || twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 311, $this->source); })()), "getDeliveryLastname", [], "method", false, false, true, 311))) {
                // line 312
                echo "                                            ";
                echo twig_escape_filter($this->env, (($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 312, $this->source); })()), "getDeliveryFirstname", [], "method", false, false, true, 312), 312, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 312, $this->source); })()), "getDeliveryLastname", [], "method", false, false, true, 312), 312, $this->source)), "html", null, true);
                echo "<br/>
                                        ";
            }
            // line 314
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 314, $this->source); })()), "getDeliveryStreet", [], "method", false, false, true, 314), 314, $this->source), "html", null, true);
            echo "<br/>
                                        ";
            // line 315
            echo twig_escape_filter($this->env, (($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 315, $this->source); })()), "getDeliveryZip", [], "method", false, false, true, 315), 315, $this->source) . " - ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 315, $this->source); })()), "getDeliveryCity", [], "method", false, false, true, 315), 315, $this->source)), "html", null, true);
            echo "<br/>
                                        ";
            // line 316
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["regionArray"]) || array_key_exists("regionArray", $context) ? $context["regionArray"] : (function () { throw new RuntimeError('Variable "regionArray" does not exist.', 316, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 316, $this->source); })()), "getDeliveryCountry", [], "method", false, false, true, 316), [], "array", false, false, true, 316), 316, $this->source)), "html", null, true);
            echo "<br/>
                                    </address>
                                </div>
                                ";
            // line 319
            if ((isset($context["geoAddressDelivery"]) || array_key_exists("geoAddressDelivery", $context) ? $context["geoAddressDelivery"] : (function () { throw new RuntimeError('Variable "geoAddressDelivery" does not exist.', 319, $this->source); })())) {
                // line 320
                echo "                                    <div class=\"col-md-6\">
                                        <div id=\"leafletmap-delivery\" style=\"width: 200px; height:200px\"></div>
                                    </div>
                                ";
            }
            // line 324
            echo "                            </div>
                        </div>
                    ";
        }
        // line 327
        echo "
                    ";
        // line 328
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 328, $this->source); })()), "getCustomer", [], "method", false, false, true, 328)) {
            // line 329
            echo "                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"customerDetail\">
                            <h4>";
            // line 330
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.customer.account", [], "admin"), "html", null, true);
            echo "</h4>
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"card card-body bg-light text-center\" style=\"margin-bottom: 0;\">
                                        <a href=\"#\" data-action=\"open\" data-id=\"";
            // line 334
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 334, $this->source); })()), "getCustomer", [], "method", false, false, true, 334), "getId", [], "method", false, false, true, 334), 334, $this->source), "html", null, true);
            echo "\">
                                            <span class=\"fa fa-user\" style=\"font-size: 400%;\"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-md-8\">
                                    <div class=\"row text-truncate\">
                                        <tbody>
                                        ";
            // line 342
            $context["arrIcon"] = ["created" => "fa fa-certificate", "email" => "fa fa-envelope", "orderCount" => "fa fa-shopping-cart"];
            // line 347
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrCustomerAccount"]) || array_key_exists("arrCustomerAccount", $context) ? $context["arrCustomerAccount"] : (function () { throw new RuntimeError('Variable "arrCustomerAccount" does not exist.', 347, $this->source); })()));
            foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                // line 348
                echo "                                            ";
                echo twig_sprintf("<div title=\"%1\$s\" class=\"col-md-12 p-1\"><span  class=\"%3\$s\"></span> %2\$s</div>", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("bundle_ecommerce.back-office.order.customer-account." . $this->sandbox->ensureToStringAllowed(                // line 349
$context["field"], 349, $this->source)), [], "admin"), $this->sandbox->ensureToStringAllowed(                // line 350
$context["value"], 350, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 351
(isset($context["arrIcon"]) || array_key_exists("arrIcon", $context) ? $context["arrIcon"] : (function () { throw new RuntimeError('Variable "arrIcon" does not exist.', 351, $this->source); })()), $context["field"], [], "array", false, false, true, 351), 351, $this->source));
                // line 352
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "                                        </tbody>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 360
        echo "                </div>
            </div>
            <!-- timeline -->
            <div class=\"timeline\">

                <!-- Line component -->
                <div class=\"line text-muted\"></div>

                ";
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timeLine"]) || array_key_exists("timeLine", $context) ? $context["timeLine"] : (function () { throw new RuntimeError('Variable "timeLine" does not exist.', 368, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["group"]) {
            // line 369
            echo "                    <!-- Separator -->
                    <div class=\"separator text-muted\">
                        <time>";
            // line 371
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 371, $this->source), "html", null, true);
            echo "</time>
                    </div>
                    ";
            // line 373
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["group"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 374
                echo "                        <!-- Panel -->
                        <article class=\"panel border rounded border-";
                // line 375
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "context", [], "array", false, false, true, 375), 375, $this->source), "html", null, true);
                echo "\">
                            <!-- Icon -->
                            <div class=\"panel-heading icon card-header alert-";
                // line 377
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "context", [], "array", false, false, true, 377), 377, $this->source), "html", null, true);
                echo "\">
                                <span class=\"";
                // line 378
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "array", false, false, true, 378), 378, $this->source), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("bundle_ecommerce.back-office.order.history." . twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "array", false, false, true, 378), 378, $this->source))), [], "admin"), "html", null, true);
                echo "\"></span>
                            </div>
                            <!-- /Icon -->

                            <!-- Body -->
                            <div class=\"card-body \">
                                <div class=\"media ng-scope\">
                                    <img src=\"";
                // line 385
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "avatar", [], "array", false, false, true, 385), 385, $this->source), "html", null, true);
                echo "\" width=\"40\" class=\"rounded-circle pr-2 mr-2\" title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "user", [], "array", false, false, true, 385), 385, $this->source), "html", null, true);
                echo "\">
                                    <div class=\"media-body\">
                                        <h6 class=\"media-heading\">
                                            ";
                // line 388
                echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "array", false, false, true, 388), 388, $this->source) . " -"), "html", null, true);
                echo "
                                            <small>";
                // line 389
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("bundle_ecommerce.back-office.order.history." . twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "array", false, false, true, 389), 389, $this->source))), [], "admin"), "html", null, true);
                echo "
                                                ";
                // line 390
                ((twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "array", false, false, true, 390)) ? (print (twig_escape_filter($this->env, (("(" . twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "array", false, false, true, 390)) . ")"), "html", null, true))) : (print ("")));
                echo "
                                            </small>
                                        </h6>
                                        <p>";
                // line 393
                echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "message", [], "array", false, false, true, 393), 393, $this->source), "html", null, true));
                echo "</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Body -->
                        </article>
                        <!-- /Panel -->
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "
                <!-- Separator -->
                <div class=\"separator text-muted\">
                    <time>";
        // line 405
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["formatter"]) || array_key_exists("formatter", $context) ? $context["formatter"] : (function () { throw new RuntimeError('Variable "formatter" does not exist.', 405, $this->source); })()), "formatDateTime", [0 => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 405, $this->source); })()), "getOrderdate", [], "method", false, false, true, 405), 1 => twig_constant("\\Pimcore\\Localization\\IntlFormatter::DATETIME_MEDIUM")], "method", false, false, true, 405), 405, $this->source), "html", null, true);
        echo "</time>
                </div>
                <!-- /Separator -->

                <article class=\"panel panel-default panel-outline\">
                    <div class=\"panel-heading icon alert-secondary\">
                        <i class=\"fa fa-shopping-cart\"></i>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.commit", [], "admin"), "html", null, true);
        echo "
                    </div>
                </article>
            </div>
        </div>
    </div>

    ";
        // line 421
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "captureStart", [], "method", false, false, true, 421);
        // line 422
        echo "        document.addEventListener(\"DOMContentLoaded\", function(event) {
            // pimcore open object
            document.querySelectorAll('[data-action=open]').forEach(function(el){
                el.addEventListener('click', function() {
                    pimcore.helpers.openObject(this.getAttribute('data-id') , \"object\");
                });
            });


            var elementsPopover = document.querySelectorAll('[data-toggle=\"popover\"]');
            for (var i = 0; i < elementsPopover.length; i++){
                new Popover(elementsPopover[i], {
                placement: 'right',
                delay: 100,
                dismissible: true,
                })
            }

            var tileLayerUrl = \"";
        // line 440
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pimcoreSymfonyConfig"]) || array_key_exists("pimcoreSymfonyConfig", $context) ? $context["pimcoreSymfonyConfig"] : (function () { throw new RuntimeError('Variable "pimcoreSymfonyConfig" does not exist.', 440, $this->source); })()), "maps", [], "array", false, false, true, 440), "tile_layer_url_template", [], "array", false, false, true, 440), 440, $this->source), "html", null, true);
        echo "\";
            ";
        // line 441
        if ((isset($context["geoAddressInvoice"]) || array_key_exists("geoAddressInvoice", $context) ? $context["geoAddressInvoice"] : (function () { throw new RuntimeError('Variable "geoAddressInvoice" does not exist.', 441, $this->source); })())) {
            // line 442
            echo "                var leafletMapInvoice =  L.map(\"leafletmap-invoice\").setView([";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["geoAddressInvoice"]) || array_key_exists("geoAddressInvoice", $context) ? $context["geoAddressInvoice"] : (function () { throw new RuntimeError('Variable "geoAddressInvoice" does not exist.', 442, $this->source); })()), "lat", [], "any", false, false, true, 442), 442, $this->source), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["geoAddressInvoice"]) || array_key_exists("geoAddressInvoice", $context) ? $context["geoAddressInvoice"] : (function () { throw new RuntimeError('Variable "geoAddressInvoice" does not exist.', 442, $this->source); })()), "lon", [], "any", false, false, true, 442), 442, $this->source), "html", null, true);
            echo "], 10);
                L.tileLayer(tileLayerUrl).addTo(leafletMapInvoice);
                L.marker([";
            // line 444
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["geoAddressInvoice"]) || array_key_exists("geoAddressInvoice", $context) ? $context["geoAddressInvoice"] : (function () { throw new RuntimeError('Variable "geoAddressInvoice" does not exist.', 444, $this->source); })()), "lat", [], "any", false, false, true, 444), 444, $this->source), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["geoAddressInvoice"]) || array_key_exists("geoAddressInvoice", $context) ? $context["geoAddressInvoice"] : (function () { throw new RuntimeError('Variable "geoAddressInvoice" does not exist.', 444, $this->source); })()), "lon", [], "any", false, false, true, 444), 444, $this->source), "html", null, true);
            echo "]).addTo(leafletMapInvoice);
            ";
        }
        // line 446
        echo "
            ";
        // line 447
        if ((isset($context["geoAddressDelivery"]) || array_key_exists("geoAddressDelivery", $context) ? $context["geoAddressDelivery"] : (function () { throw new RuntimeError('Variable "geoAddressDelivery" does not exist.', 447, $this->source); })())) {
            // line 448
            echo "                var leafletMapDelivery =  L.map(\"leafletmap-delivery\").setView([";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["geoAddressDelivery"]) || array_key_exists("geoAddressDelivery", $context) ? $context["geoAddressDelivery"] : (function () { throw new RuntimeError('Variable "geoAddressDelivery" does not exist.', 448, $this->source); })()), "lat", [], "any", false, false, true, 448), 448, $this->source), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["geoAddressDelivery"]) || array_key_exists("geoAddressDelivery", $context) ? $context["geoAddressDelivery"] : (function () { throw new RuntimeError('Variable "geoAddressDelivery" does not exist.', 448, $this->source); })()), "lon", [], "any", false, false, true, 448), 448, $this->source), "html", null, true);
            echo "], 10);
                L.tileLayer(tileLayerUrl).addTo(leafletMapDelivery);
                L.marker([";
            // line 450
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["geoAddressDelivery"]) || array_key_exists("geoAddressDelivery", $context) ? $context["geoAddressDelivery"] : (function () { throw new RuntimeError('Variable "geoAddressDelivery" does not exist.', 450, $this->source); })()), "lat", [], "any", false, false, true, 450), 450, $this->source), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["geoAddressDelivery"]) || array_key_exists("geoAddressDelivery", $context) ? $context["geoAddressDelivery"] : (function () { throw new RuntimeError('Variable "geoAddressDelivery" does not exist.', 450, $this->source); })()), "lon", [], "any", false, false, true, 450), 450, $this->source), "html", null, true);
            echo "]).addTo(leafletMapDelivery);

                document.getElementById('addressDeliveryTab').onclick = function(el){
                    leafletMapDelivery.invalidateSize();
                };
            ";
        }
        // line 456
        echo "
        });
    ";
        // line 458
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "captureEnd", [], "method", false, false, true, 458);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/admin_order/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1055 => 458,  1051 => 456,  1040 => 450,  1032 => 448,  1030 => 447,  1027 => 446,  1020 => 444,  1012 => 442,  1010 => 441,  1006 => 440,  986 => 422,  984 => 421,  974 => 414,  962 => 405,  957 => 402,  951 => 401,  937 => 393,  931 => 390,  927 => 389,  923 => 388,  915 => 385,  903 => 378,  899 => 377,  894 => 375,  891 => 374,  887 => 373,  882 => 371,  878 => 369,  874 => 368,  864 => 360,  856 => 354,  849 => 352,  847 => 351,  846 => 350,  845 => 349,  843 => 348,  838 => 347,  836 => 342,  825 => 334,  818 => 330,  815 => 329,  813 => 328,  810 => 327,  805 => 324,  799 => 320,  797 => 319,  791 => 316,  787 => 315,  782 => 314,  776 => 312,  773 => 311,  767 => 309,  764 => 308,  762 => 307,  756 => 303,  754 => 302,  749 => 299,  743 => 295,  741 => 294,  737 => 292,  731 => 290,  729 => 289,  726 => 288,  722 => 286,  716 => 285,  710 => 283,  707 => 282,  705 => 281,  701 => 280,  696 => 279,  690 => 277,  687 => 276,  681 => 274,  678 => 273,  676 => 272,  666 => 264,  659 => 259,  657 => 258,  654 => 257,  648 => 254,  644 => 252,  642 => 251,  637 => 249,  627 => 241,  621 => 237,  612 => 234,  605 => 232,  601 => 231,  597 => 229,  591 => 228,  588 => 227,  585 => 226,  582 => 225,  580 => 224,  575 => 223,  572 => 222,  569 => 221,  566 => 220,  563 => 219,  560 => 218,  555 => 217,  552 => 216,  550 => 215,  542 => 210,  537 => 207,  534 => 206,  531 => 205,  528 => 204,  525 => 203,  522 => 202,  519 => 201,  516 => 200,  513 => 199,  510 => 198,  506 => 197,  503 => 196,  501 => 195,  495 => 192,  491 => 190,  488 => 189,  485 => 187,  479 => 183,  470 => 180,  465 => 178,  457 => 175,  453 => 173,  449 => 172,  439 => 165,  435 => 164,  426 => 158,  422 => 156,  420 => 155,  414 => 151,  406 => 148,  400 => 144,  394 => 141,  388 => 139,  385 => 138,  382 => 137,  376 => 134,  370 => 132,  367 => 131,  365 => 130,  358 => 126,  354 => 124,  351 => 123,  349 => 122,  345 => 120,  335 => 116,  333 => 115,  328 => 113,  324 => 112,  320 => 111,  315 => 109,  307 => 106,  303 => 104,  299 => 103,  294 => 100,  291 => 99,  278 => 94,  273 => 92,  270 => 91,  266 => 90,  258 => 85,  255 => 84,  253 => 83,  246 => 79,  242 => 77,  232 => 73,  228 => 72,  225 => 71,  221 => 70,  211 => 63,  207 => 62,  203 => 61,  199 => 60,  192 => 55,  182 => 51,  180 => 50,  176 => 49,  172 => 47,  163 => 40,  153 => 37,  144 => 31,  136 => 28,  129 => 26,  126 => 25,  123 => 24,  121 => 23,  116 => 20,  112 => 17,  102 => 16,  92 => 4,  89 => 7,  86 => 6,  83 => 5,  80 => 4,  70 => 3,  59 => 1,  57 => 14,  55 => 13,  53 => 12,  51 => 11,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@PimcoreEcommerceFramework/back-office.html.twig' %}

{% block styles %}
    {% apply spaceless %}
        {% do pimcore_head_link().appendStylesheet(asset('/bundles/pimcoreadmin/js/lib/leaflet/leaflet.css')) %}
        {% do pimcore_head_script().appendFile(asset('/bundles/pimcoreadmin/js/lib/leaflet/leaflet.js')) %}
    {% endapply %}
{% endblock %}


{% set order = orderAgent.getOrder() %}
{% set currency = orderAgent.getCurrency() %}
{% set regionArray = locale.getDisplayRegions() %}
{% set urlParams = app.request.query.all %}

{% block content %}
    <div class=\"order-detail row mt-3\">
        <div class=\"col-md-7\">
            {#order header#}
            <div class=\"card mb-3\">
                <div class=\"card-header\">
                    <div class=\"row font-weight-bold\">
                        {% set urlParams = urlParams|merge({\"id\":null}) %}
                        {% set urlList = path(\"pimcore_ecommerce_backend_admin-order_list\",urlParams) %}
                        <div class=\"col-sm-6\">
                            <a href=\"{{ urlList }}\">{{ ('bundle_ecommerce.back-office.order-list')|trans([],'admin') }}</a>
                            <span class=\"fa fa-chevron-right\"></span>
                            <a href=\"#\" data-action=\"open\" data-id=\"{{ order.getId() }}\">{{ order.getOrdernumber() }}</a>
                        </div>
                        <div class=\"col-sm-6 text-right\">
                            {{ order.getOrderDate() }}
                        </div>
                    </div>
                    <h2 class=\"d-none row font-weight-bold\">
                        <div class=\"col-md-6\">
                            <a class=\"btn btn-default btn-xs\"><span class=\"fa fa-chevron-left\"></span></a>
                            {{ ('bundle_ecommerce.back-office.order')|trans([],'admin') }} <a href=\"#\" data-action=\"open\" data-id=\"{{ order.getId() }}\">{{ order.getOrdernumber() }}</a>
                        </div>
                        <div class=\"col-md-6 text-right\">
                            {{ order.getOrderDate() }}
                        </div>
                    </h2>
                </div>
            </div>

            {#order items#}
            <div class=\"card mb-3\">
                <div class=\"card-header\">
                    <span class=\"fa fa-list-alt\"></span> {{ ('bundle_ecommerce.back-office.order.order-items')|trans([],'admin') }}
                    {% if order.getComment() %}
                        <button type=\"button\" class=\"btn btn-xs btn-default pull-right\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"right\" title=\"{{ ('bundle_ecommerce.back-office.order.comment.user')|trans([],'admin') }}\" data-content=\"{{ order.getComment()|nl2br }}\">
                            <span class=\"fa fa-comment\"></span>
                        </button>
                    {% endif %}
                </div>
                <table class=\"table table-order-items\">
                    <thead>
                    <tr>
                        <th width=\"70\">ID</th>
                        <th>{{ ('bundle_ecommerce.back-office.order.product')|trans([],'admin') }}</th>
                        <th class=\"text-right\">{{ ('bundle_ecommerce.back-office.order.price.unit')|trans([],'admin') }}</th>
                        <th width=\"60\" class=\"text-center\">{{ ('bundle_ecommerce.back-office.order.quantity')|trans([],'admin') }}</th>
                        <th class=\"text-right\" width=\"110\">{{ ('bundle_ecommerce.back-office.order.price.total')|trans([],'admin') }}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr class=\"card-header\">
                        <td colspan=\"6\"></td>
                    {% for modification in order.getPriceModifications() ?: [] %}
                        <tr>
                            <td colspan=\"4\" class=\"text-right\">{{ modification.getName() }}</td>
                            <th class=\"text-right\">{{ currency.toCurrency(modification.getAmount()) ?: '-' }}</th>
                            <th></th>
                        </tr>
                    {% endfor %}
                    <tr class=\"card-header\">
                        <td colspan=\"4\"  class=\"text-right\">Total</td>
                        <th class=\"text-right\">{{ currency.toCurrency(order.getTotalPrice()) }}</th>
                        <td></td>
                    </tr>

                    {% if order.getTaxInfo() %}
                        <tr>
                            <th colspan=\"4\" class=\"text-right\">{{ \"bundle_ecommerce.back-office.order.cart-taxes\"|trans([],'admin') }}</th>
                            <th></th>
                            <th></th>
                        </tr>

                        {% for taxEntry in order.getTaxInfo() %}
                            <tr>
                                <td colspan=\"4\" class=\"text-right\">{{ taxEntry[0] }}</td>
                                <td class=\"text-right\">
                                    {{ taxEntry[1] }} ({{ currency.toCurrency(taxEntry[2]) }})
                                </td>
                                <td></td>
                            </tr>
                        {% endfor %}
                    {% endif %}
                    </tfoot>
                    <tbody>

                    {% for item in order.getItems() %}
                        <tr>
                            <td>
                                <a href=\"#\" data-action=\"open\" data-id=\"{{ item.getId() }}\">{{ item.getId() }}</a>
                            </td>
                            <td>
                                {{ (item.isCanceled() ? '<s>%s</s>'|format(item.getProductName())|raw : item.getProductName()) }}
                            </td>
                            <td class=\"text-right\">{{ currency.toCurrency(item.getTotalPrice() / item.getAmount) }}</td>
                            <td class=\"text-center\">{{ item.getAmount() }}</td>
                            <td class=\"text-right\">{{ currency.toCurrency(item.getTotalPrice()) }}</td>
                            <td>
                                {% if item.getComment() %}
                                    <button type=\"button\" class=\"btn btn-xs btn-default\" data-container=\"body\" data-toggle=\"popover\" title=\"{{ ('bundle_ecommerce.back-office.order.comment.user')|trans([],'admin') }}\" data-content=\"{{ item.getComment()|nl2br }}\">
                                        <span class=\"fa fa-commnet\"></span>
                                    </button>
                                {% endif %}

                                <!-- item actions -->
                                {% if item.isEditAble() %}
                                    {% set urlEdit = path(\"pimcore_ecommerce_backend_admin-order_item-edit\", {'id': item.getId()}) %}

                                <div class=\"btn-group btn-group-sm\">
                                    <button href=\"{{ urlEdit }}\" class=\"popup-modal btn btn-secondary input-group-text\"><span class=\"fa fa-pen\"></span></button>
                                    <button type=\"button\" class=\"input-group-append btn btn-secondary input-group-text dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"></button>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li>
                                            {% if (item.isCancelAble()) %}
                                                {% set urlCancel = path(\"pimcore_ecommerce_backend_admin-order_item-cancel\", {'id': item.getId()}) %}
                                                <a class=\"dropdown-item popup-modal\" href=\"{{ urlCancel }}\" class=\"text-danger\">
                                                    <span class=\"fa fa-times pr-2 text-danger\"></span>
                                                    {{ ('bundle_ecommerce.back-office.order.cancel.item')|trans([],'admin') }}
                                                </a>
                                            {% endif %}
                                            {% if (item.isComplaintAble()) %}
                                                {% set urlComplaint = path(\"pimcore_ecommerce_backend_admin-order_item-complaint\", {'id': item.getId()}) %}
                                                <a class=\"dropdown-item popup-modal\" href=\"{{ urlComplaint }}\" class=\"text-danger\">
                                                    <span class=\"fa fa-share pr-1\"></span>
                                                    {{ ('bundle_ecommerce.back-office.order.complaint.item')|trans([],'admin') }}
                                                </a>
                                            {% endif %}
                                        </li>
                                    </ul>
                                </div>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>

            {% if order.giftItems() | length > 0 %}
                <div class=\"card mb-3\">
                    <div class=\"card-header\">
                        <span class=\"fa fa-gift\"></span> {{ ('bundle_ecommerce.back-office.order.gifts')|trans([],'admin')}}
                    </div>
                    <table class=\"table table-order-items\">
                        <thead>
                        <tr>
                            <th width=\"70\">ID</th>
                            <th>{{ ('bundle_ecommerce.back-office.order.product')|trans([],'admin') }}</th>
                            <th width=\"60\" class=\"text-center\">{{ ('bundle_ecommerce.back-office.order.quantity')|trans([],'admin') }}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tbody>

                        {% for item in order.giftItems() %}
                            <tr>
                                <td>
                                    <a href=\"#\" data-action=\"open\" data-id=\"{{ item.getId() }}\">{{ item.getId() }}</a>
                                </td>
                                <td>
                                    {{ (item.isCanceled() ? '<s>%s</s>'|format(item.getProductName())|raw : item.getProductName()) }}
                                </td>
                                <td class=\"text-center\">{{ item.getAmount() }}</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% endif %}

            {#payment history#}
            {% if orderAgent.hasPayment() %}
            <div class=\"card\">
                <div class=\"card-header\">
                    <span class=\"fa fa-credit-card\"></span> {{ ('bundle_ecommerce.back-office.order.payment.history')|trans([],'admin')}}
                </div>
                <table class=\"table table-condensed mb-0\">
                    {% set class = null %}
                    <tbody>
                        {% for item in order.getPaymentInfo() %}
                            {% if item.getPaymentFinish() %}
                                {% if item.getPaymentState() == 'paymentAuthorized' %}
                                        {% set class = 'alert-info' %}
                                {% elseif item.getPaymentState() == 'committed' %}
                                        {% set class = 'alert-success' %}
                                {% elseif item.getPaymentState() == 'aborted' %}
                                        {% set class = 'alert-danger' %}
                                {% endif %}
                            {% endif %}
                            <tr>
                                <td width=\"130\">
                                    <small>
                                        {{ (item.getPaymentFinish() ? formatter.formatDateTime(item.getPaymentFinish(), constant('\\\\Pimcore\\\\Localization\\\\IntlFormatter::DATETIME_MEDIUM')) : '') }}
                                    </small>
                                </td>
                                <td width=\"100\">
                                    <small>
                                        {% set amount = null %}
                                        {% set break = false %}
                                        {% for providerKey, providerClass in paymentProviders %}
                                            {% if not break %}
                                                {% set getter = 'provider_%s_amount'|format(providerKey) %}
                                                {% if attribute(item, getter) is defined %}
                                                    {% set amount = attribute(item, getter) %}
                                                    {% if amount %}
                                                        {{ amount }}
                                                        {% set break = true %}
                                                    {% endif %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    </small>
                                </td>
                                <td class=\"{{ class }}\">
                                    <small title=\"{{ item.getPaymentState() }}\">{{ item.getMessage() }}</small>
                                </td>
                                <td class=\"text-right\"><small>{{ item.getPaymentReference() }}</small></td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            {% endif %}
        </div>

        <div class=\"col-md-5\">
            <!-- customer infos -->
            <div role=\"tabpanel\" class=\"tabpanel-customer-info\">
                <ul class=\"nav nav-tabs\" id=\"deliveryTab\" role=\"tablist\">
                    <li role=\"presentation\" class=\"nav-item active\">
                        <a class=\"nav-link active\" href=\"#addressInvoice\" aria-controls=\"addressInvoice\" role=\"tab\" data-toggle=\"tab\"><span class=\"fa fa-file\"></span>
                            {{ ('bundle_ecommerce.back-office.order.address.invoice')|trans([],'admin') }}</a>
                    </li>
                    {% if order.hasDeliveryAddress() %}
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link\" id=\"addressDeliveryTab\" href=\"#addressDelivery\" aria-controls=\"addressDelivery\" role=\"tab\" data-toggle=\"tab\"><span class=\"fa fa-home\"></span>
                            {{ ('bundle_ecommerce.back-office.order.address.delivery')|trans([],'admin') }}</a>
                    </li>
                    {% endif %}

                    {% if order.getCustomer() %}
                        <li class=\"nav-item ml-auto\" role=\"presentation\">
                            <a class=\"nav-link\" href=\"#customerDetail\" aria-controls=\"customerDetail\" role=\"tab\" data-toggle=\"tab\"><span class=\"fa fa-user\"></span>
                            </a>
                        </li>
                    {% endif %}
                </ul>

                <!-- Tab panes -->
                <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"addressInvoice\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <address>
                                    {% set address = [] %}
                                    {% if order.getCustomerCompany() %}
                                        <h4>{{ order.getCustomerCompany()|nl2br }}</h4>
                                    {% endif %}
                                    {% if order.getCustomerFirstname() or order.getCustomerLastname() %}
                                        {{ order.getCustomerFirstname() ~ ' ' ~ order.getCustomerLastname() }}<br/>
                                    {% endif %}
                                    {{ order.getCustomerStreet() }}<br/>
                                    {{ order.getCustomerZip() ~ ' - ' ~ order.getCustomerCity() }}<br/>
                                    {% if(order.getCustomerCountry()) %}
                                        {%  if order.getCustomerCountry() in regionArray|keys %}
                                            {{ (regionArray[order.getCustomerCountry()])|upper }}<br/>
                                        {% else %}
                                            {{ order.getCustomerCountry()|upper }}<br/>
                                        {% endif %}                                        
                                    {% endif %}

                                    {% if order.getCustomer() and attribute(order.getCustomer(), 'email') is defined %}
                                        {{ '<a href=\"mailto:%1\$s\">%1\$s</a>'|format(order.getCustomer().getEmail()) | raw }}
                                    {% endif %}
                                </address>
                            </div>
                            {% if geoAddressInvoice %}
                                <div class=\"col-md-6\">
                                    <div id=\"leafletmap-invoice\" style=\"width: 200px; height:200px\"></div>
                                </div>
                            {% endif %}
                        </div>
                    </div>

                    {% if order.hasDeliveryAddress() %}
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"addressDelivery\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <address>
                                        {% set address = [] %}
                                        {% if order.getDeliveryCompany() %}
                                            <h4>{{ order.getDeliveryCompany()|nl2br }}</h4>
                                        {% endif %}
                                        {% if order.getDeliveryFirstname() or order.getDeliveryLastname() %}
                                            {{ order.getDeliveryFirstname() ~ ' ' ~ order.getDeliveryLastname() }}<br/>
                                        {% endif %}
                                        {{ order.getDeliveryStreet() }}<br/>
                                        {{ order.getDeliveryZip() ~ ' - ' ~ order.getDeliveryCity() }}<br/>
                                        {{ regionArray[order.getDeliveryCountry()]|upper }}<br/>
                                    </address>
                                </div>
                                {% if geoAddressDelivery %}
                                    <div class=\"col-md-6\">
                                        <div id=\"leafletmap-delivery\" style=\"width: 200px; height:200px\"></div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    {% endif %}

                    {% if order.getCustomer() %}
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"customerDetail\">
                            <h4>{{ ('bundle_ecommerce.back-office.order.customer.account')|trans([],'admin') }}</h4>
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"card card-body bg-light text-center\" style=\"margin-bottom: 0;\">
                                        <a href=\"#\" data-action=\"open\" data-id=\"{{ order.getCustomer().getId() }}\">
                                            <span class=\"fa fa-user\" style=\"font-size: 400%;\"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-md-8\">
                                    <div class=\"row text-truncate\">
                                        <tbody>
                                        {% set arrIcon = {
                                            'created': 'fa fa-certificate',
                                            'email': 'fa fa-envelope',
                                            'orderCount': 'fa fa-shopping-cart'
                                        } %}
                                        {% for field, value in arrCustomerAccount %}
                                            {{ ('<div title=\"%1\$s\" class=\"col-md-12 p-1\"><span  class=\"%3\$s\"></span> %2\$s</div>'|format(
                                                ('bundle_ecommerce.back-office.order.customer-account.'~ field)|trans([],'admin'),
                                                value,
                                                arrIcon[field]
                                            )) | raw }}
                                        {% endfor %}
                                        </tbody>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
            <!-- timeline -->
            <div class=\"timeline\">

                <!-- Line component -->
                <div class=\"line text-muted\"></div>

                {% for name, group in timeLine %}
                    <!-- Separator -->
                    <div class=\"separator text-muted\">
                        <time>{{ name }}</time>
                    </div>
                    {% for item in group %}
                        <!-- Panel -->
                        <article class=\"panel border rounded border-{{ item['context'] }}\">
                            <!-- Icon -->
                            <div class=\"panel-heading icon card-header alert-{{ item['context'] }}\">
                                <span class=\"{{ item['icon'] }}\" title=\"{{ ('bundle_ecommerce.back-office.order.history.' ~ item['type']|lower)|trans([],'admin') }}\"></span>
                            </div>
                            <!-- /Icon -->

                            <!-- Body -->
                            <div class=\"card-body \">
                                <div class=\"media ng-scope\">
                                    <img src=\"{{ item['avatar'] }}\" width=\"40\" class=\"rounded-circle pr-2 mr-2\" title=\"{{ item['user'] }}\">
                                    <div class=\"media-body\">
                                        <h6 class=\"media-heading\">
                                            {{ item['title'] ~ ' -' }}
                                            <small>{{ ('bundle_ecommerce.back-office.order.history.' ~ item['type']|lower)|trans([],'admin') }}
                                                {{ item['quantity'] ? '(' ~ item['quantity'] ~ ')' }}
                                            </small>
                                        </h6>
                                        <p>{{ item['message']|nl2br }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Body -->
                        </article>
                        <!-- /Panel -->
                    {% endfor %}
                {% endfor %}

                <!-- Separator -->
                <div class=\"separator text-muted\">
                    <time>{{ formatter.formatDateTime(order.getOrderdate(), constant('\\\\Pimcore\\\\Localization\\\\IntlFormatter::DATETIME_MEDIUM')) }}</time>
                </div>
                <!-- /Separator -->

                <article class=\"panel panel-default panel-outline\">
                    <div class=\"panel-heading icon alert-secondary\">
                        <i class=\"fa fa-shopping-cart\"></i>
                    </div>
                    <div class=\"panel-body\">
                        {{ ('bundle_ecommerce.back-office.order.commit')|trans([],'admin') }}
                    </div>
                </article>
            </div>
        </div>
    </div>

    {% do pimcore_head_script().captureStart() %}
        document.addEventListener(\"DOMContentLoaded\", function(event) {
            // pimcore open object
            document.querySelectorAll('[data-action=open]').forEach(function(el){
                el.addEventListener('click', function() {
                    pimcore.helpers.openObject(this.getAttribute('data-id') , \"object\");
                });
            });


            var elementsPopover = document.querySelectorAll('[data-toggle=\"popover\"]');
            for (var i = 0; i < elementsPopover.length; i++){
                new Popover(elementsPopover[i], {
                placement: 'right',
                delay: 100,
                dismissible: true,
                })
            }

            var tileLayerUrl = \"{{ pimcoreSymfonyConfig['maps']['tile_layer_url_template'] }}\";
            {% if geoAddressInvoice %}
                var leafletMapInvoice =  L.map(\"leafletmap-invoice\").setView([{{ geoAddressInvoice.lat }}, {{  geoAddressInvoice.lon }}], 10);
                L.tileLayer(tileLayerUrl).addTo(leafletMapInvoice);
                L.marker([{{ geoAddressInvoice.lat }}, {{ geoAddressInvoice.lon }}]).addTo(leafletMapInvoice);
            {% endif %}

            {% if geoAddressDelivery %}
                var leafletMapDelivery =  L.map(\"leafletmap-delivery\").setView([{{ geoAddressDelivery.lat }}, {{ geoAddressDelivery.lon }}], 10);
                L.tileLayer(tileLayerUrl).addTo(leafletMapDelivery);
                L.marker([{{ geoAddressDelivery.lat }}, {{ geoAddressDelivery.lon }}]).addTo(leafletMapDelivery);

                document.getElementById('addressDeliveryTab').onclick = function(el){
                    leafletMapDelivery.invalidateSize();
                };
            {% endif %}

        });
    {% do pimcore_head_script().captureEnd() %}
{% endblock %}
", "@PimcoreEcommerceFramework/admin_order/detail.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/admin_order/detail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "apply" => 4, "do" => 5, "if" => 50, "for" => 70);
        static $filters = array("spaceless" => 4, "merge" => 23, "escape" => 26, "trans" => 26, "nl2br" => 51, "raw" => 109, "format" => 109, "length" => 155, "keys" => 282, "upper" => 283, "lower" => 378);
        static $functions = array("pimcore_head_link" => 5, "asset" => 5, "pimcore_head_script" => 6, "path" => 24, "constant" => 210);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'apply', 'do', 'if', 'for'],
                ['spaceless', 'merge', 'escape', 'trans', 'nl2br', 'raw', 'format', 'length', 'keys', 'upper', 'lower'],
                ['pimcore_head_link', 'asset', 'pimcore_head_script', 'path', 'constant']
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
