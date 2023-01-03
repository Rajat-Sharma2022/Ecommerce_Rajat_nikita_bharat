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

/* @PimcoreCustomerManagementFramework/admin/customers/partials/detail.html.twig */
class __TwigTemplate_197896e7f0ec46ac8836c64caa1bc886 extends Template
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
        return "@PimcoreCustomerManagementFramework/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/detail.html.twig"));

        $this->parent = $this->loadTemplate("@PimcoreCustomerManagementFramework/layout.html.twig", "@PimcoreCustomerManagementFramework/admin/customers/partials/detail.html.twig", 1);
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
        $context["backUrl"] = $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getFormQueryString($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("customermanagementframework_admin_customers_list"));
        // line 5
        echo "
    <div class=\"box box-info\">
        <div class=\"box-header with-border with-form\">
            <h3 class=\"box-title\">
                <a href=\"#\" class=\"js-pimcore-link\" data-pimcore-id=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">
                    <i class=\"fa fa-link\"></i>
                </a>

                ";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 13, $this->source); })()), "lastname", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
            </h3>

            <div>
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["backUrl"]) || array_key_exists("backUrl", $context) ? $context["backUrl"] : (function () { throw new RuntimeError('Variable "backUrl" does not exist.', 17, $this->source); })()), 17, $this->source), "html", null, true);
        echo "\" class=\"btn btn-default btn-xs\">
                    &laquo; ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_back", [], "admin"), "html", null, true);
        echo "
                </a>
            </div>
        </div>

        <div class=\"box-body\">
            <div class=\"row\">
                ";
        // line 25
        $context["detailAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["customerView"]) || array_key_exists("customerView", $context) ? $context["customerView"] : (function () { throw new RuntimeError('Variable "customerView" does not exist.', 25, $this->source); })()), "getDetailviewData", [0 => (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 25, $this->source); })())], "method", false, false, true, 25);
        // line 26
        echo "                ";
        $context["chunkSize"] = $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->calculateArrayChunkSize($this->sandbox->ensureToStringAllowed((isset($context["detailAttributes"]) || array_key_exists("detailAttributes", $context) ? $context["detailAttributes"] : (function () { throw new RuntimeError('Variable "detailAttributes" does not exist.', 26, $this->source); })()), 26, $this->source));
        // line 27
        echo "
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["detailAttributes"]) || array_key_exists("detailAttributes", $context) ? $context["detailAttributes"] : (function () { throw new RuntimeError('Variable "detailAttributes" does not exist.', 28, $this->source); })()), (isset($context["chunkSize"]) || array_key_exists("chunkSize", $context) ? $context["chunkSize"] : (function () { throw new RuntimeError('Variable "chunkSize" does not exist.', 28, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
            // line 29
            echo "                    <div class=\"col col-sm-6\">
                        <table class=\"table table-striped\">

                            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["attributes"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 33
                echo "                                <tr>
                                    <th width=\"200\">";
                // line 34
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 34, $this->source), "html", null, true);
                echo "</th>
                                    <td>
                                        ";
                // line 36
                if (($context["value"] === "true")) {
                    // line 37
                    echo "                                            <i class=\"glyphicon glyphicon-check\"></i>
                                        ";
                } elseif ((                // line 38
$context["value"] === "false")) {
                    // line 39
                    echo "                                            <i class=\"glyphicon glyphicon-unchecked\"></i>
                                        ";
                } else {
                    // line 41
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 41, $this->source), "html", null, true);
                    echo "
                                        ";
                }
                // line 43
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
                        </table>
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/customers/partials/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 51,  163 => 46,  155 => 43,  149 => 41,  145 => 39,  143 => 38,  140 => 37,  138 => 36,  133 => 34,  130 => 33,  126 => 32,  121 => 29,  117 => 28,  114 => 27,  111 => 26,  109 => 25,  99 => 18,  95 => 17,  86 => 13,  79 => 9,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@PimcoreCustomerManagementFramework/layout.html.twig' %}

{% block content %}
    {% set backUrl = cmf_formQueryString(url('customermanagementframework_admin_customers_list')) %}

    <div class=\"box box-info\">
        <div class=\"box-header with-border with-form\">
            <h3 class=\"box-title\">
                <a href=\"#\" class=\"js-pimcore-link\" data-pimcore-id=\"{{ customer.id }}\">
                    <i class=\"fa fa-link\"></i>
                </a>

                {{ customer.firstname }} {{ customer.lastname }}
            </h3>

            <div>
                <a href=\"{{ backUrl }}\" class=\"btn btn-default btn-xs\">
                    &laquo; {{ 'cmf_filters_customer_back' | trans({}, 'admin') }}
                </a>
            </div>
        </div>

        <div class=\"box-body\">
            <div class=\"row\">
                {% set detailAttributes = customerView.getDetailviewData(customer) %}
                {% set chunkSize = cmf_arrayChunkSize(detailAttributes)  %}

                {% for attributes in detailAttributes|batch(chunkSize) %}
                    <div class=\"col col-sm-6\">
                        <table class=\"table table-striped\">

                            {% for key, value in attributes %}
                                <tr>
                                    <th width=\"200\">{{ key }}</th>
                                    <td>
                                        {% if value is same as('true')  %}
                                            <i class=\"glyphicon glyphicon-check\"></i>
                                        {% elseif value is same as('false') %}
                                            <i class=\"glyphicon glyphicon-unchecked\"></i>
                                        {% else %}
                                            {{ value }}
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}

                        </table>
                    </div>

                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}", "@PimcoreCustomerManagementFramework/admin/customers/partials/detail.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/customers/partials/detail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "for" => 28, "if" => 36);
        static $filters = array("escape" => 9, "trans" => 18, "batch" => 28);
        static $functions = array("cmf_formQueryString" => 4, "url" => 4, "cmf_arrayChunkSize" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans', 'batch'],
                ['cmf_formQueryString', 'url', 'cmf_arrayChunkSize']
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
