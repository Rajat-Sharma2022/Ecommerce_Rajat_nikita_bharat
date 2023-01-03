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

/* @PimcoreCustomerManagementFramework/admin/customers/partials/list_table.html.twig */
class __TwigTemplate_bfb4d30107f3a4341f7ab060a25bcce1 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_table.html.twig"));

        // line 1
        echo "<div class=\"box-body no-padding table-responsive\">
    <table class=\"table table-striped table-bordered table-hover dataTable\">
        <thead>
        <tr>
            <th class=\"table-id-column\">#</th>
            <th width=\"80px\">
                <div class=\"pos\">
                    <a class=\"sorting";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getCurrentOrder("o_id"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customermanagementframework_admin_customers_list", $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getNextFormOrderParams("o_id")), "html", null, true);
        echo "\">
                        ID
                    </a>
                </div>
            </th>
            <th class=\"icon-column icon-column--center\"></th>
            <th width=\"15%\">
                <div class=\"pos\">
                    <a class=\"sorting";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getCurrentOrder("firstname"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customermanagementframework_admin_customers_list", $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getNextFormOrderParams("firstname")), "html", null, true);
        echo "\">
                        ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_firstname", [], "admin"), "html", null, true);
        echo "
                    </a>
                </div>
            </th>
            <th width=\"15%\">
                <div class=\"pos\">
                    <a class=\"sorting";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getCurrentOrder("lastname"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customermanagementframework_admin_customers_list", $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getNextFormOrderParams("lastname")), "html", null, true);
        echo "\">
                        ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_lastname", [], "admin"), "html", null, true);
        echo "
                    </a>
                </div>
            </th>
            <th width=\"15%\">
                <div class=\"pos\">
                    <a class=\"sorting";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getCurrentOrder("email"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customermanagementframework_admin_customers_list", $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getNextFormOrderParams("email")), "html", null, true);
        echo "\">
                        ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_email", [], "admin"), "html", null, true);
        echo "
                    </a>
                </div>
            </th>
            <th width=\"100px\">
                <div class=\"pos\">
                    <a class=\"sorting";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getCurrentOrder("gender"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customermanagementframework_admin_customers_list", $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getNextFormOrderParams("gender")), "html", null, true);
        echo "\">
                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_gender", [], "admin"), "html", null, true);
        echo "
                    </a>
                </div>
            </th>
            <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_segments", [], "admin"), "html", null, true);
        echo "</th>
        </tr>
        </thead>

        <tbody>

        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 49
            echo "            ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["customerView"]) || array_key_exists("customerView", $context) ? $context["customerView"] : (function () { throw new RuntimeError('Variable "customerView" does not exist.', 49, $this->source); })()), "overviewTemplate", [0 => $context["customer"]], "method", false, false, true, 49), "@PimcoreCustomerManagementFramework/admin/customers/partials/list_table.html.twig", 49)->display(twig_to_array(["customer" => $context["customer"], "customerView" => (isset($context["customerView"]) || array_key_exists("customerView", $context) ? $context["customerView"] : (function () { throw new RuntimeError('Variable "customerView" does not exist.', 49, $this->source); })())]));
            // line 50
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        </tbody>
    </table>
</div>

";
        // line 56
        $this->loadTemplate("@PimcoreCustomerManagementFramework/admin/partial/table/pagination_footer.html.twig", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_table.html.twig", 56)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/customers/partials/list_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 56,  147 => 51,  141 => 50,  138 => 49,  134 => 48,  125 => 42,  118 => 38,  112 => 37,  103 => 31,  97 => 30,  88 => 24,  82 => 23,  73 => 17,  67 => 16,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"box-body no-padding table-responsive\">
    <table class=\"table table-striped table-bordered table-hover dataTable\">
        <thead>
        <tr>
            <th class=\"table-id-column\">#</th>
            <th width=\"80px\">
                <div class=\"pos\">
                    <a class=\"sorting{{ cmf_currentOrder('o_id') }}\" href=\"{{ path('customermanagementframework_admin_customers_list', cmf_nextFormOrderParams('o_id')) }}\">
                        ID
                    </a>
                </div>
            </th>
            <th class=\"icon-column icon-column--center\"></th>
            <th width=\"15%\">
                <div class=\"pos\">
                    <a class=\"sorting{{ cmf_currentOrder('firstname') }}\" href=\"{{ path('customermanagementframework_admin_customers_list', cmf_nextFormOrderParams('firstname')) }}\">
                        {{ 'cmf_filters_customer_firstname' | trans({}, 'admin') }}
                    </a>
                </div>
            </th>
            <th width=\"15%\">
                <div class=\"pos\">
                    <a class=\"sorting{{ cmf_currentOrder('lastname') }}\" href=\"{{ path('customermanagementframework_admin_customers_list', cmf_nextFormOrderParams('lastname')) }}\">
                        {{ 'cmf_filters_customer_lastname' | trans({}, 'admin') }}
                    </a>
                </div>
            </th>
            <th width=\"15%\">
                <div class=\"pos\">
                    <a class=\"sorting{{ cmf_currentOrder('email') }}\" href=\"{{ path('customermanagementframework_admin_customers_list', cmf_nextFormOrderParams('email')) }}\">
                        {{ 'cmf_filters_customer_email' | trans({}, 'admin') }}
                    </a>
                </div>
            </th>
            <th width=\"100px\">
                <div class=\"pos\">
                    <a class=\"sorting{{ cmf_currentOrder('gender') }}\" href=\"{{ path('customermanagementframework_admin_customers_list', cmf_nextFormOrderParams('gender')) }}\">
                        {{ 'cmf_filters_customer_gender' | trans({}, 'admin') }}
                    </a>
                </div>
            </th>
            <th>{{ 'cmf_filters_segments'| trans({}, 'admin') }}</th>
        </tr>
        </thead>

        <tbody>

        {% for customer in paginator %}
            {% include customerView.overviewTemplate(customer) with {customer: customer, customerView: customerView} only %}
        {% endfor %}

        </tbody>
    </table>
</div>

{% include '@PimcoreCustomerManagementFramework/admin/partial/table/pagination_footer.html.twig' %}", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_table.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/customers/partials/list_table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 48, "include" => 49);
        static $filters = array("escape" => 8, "trans" => 17);
        static $functions = array("cmf_currentOrder" => 8, "path" => 8, "cmf_nextFormOrderParams" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'include'],
                ['escape', 'trans'],
                ['cmf_currentOrder', 'path', 'cmf_nextFormOrderParams']
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
