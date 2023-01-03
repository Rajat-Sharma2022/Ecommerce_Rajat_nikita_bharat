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

/* @PimcoreCustomerManagementFramework/admin/customers/partials/list_row.html.twig */
class __TwigTemplate_55fc1e87b0312597f5bcf5d78f22350c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_row.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_row.html.twig"));

        // line 1
        $context["userDetailUrl"] = $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getUserDetailUrl($this->sandbox->ensureToStringAllowed((isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 1, $this->source); })()), 1, $this->source));
        // line 2
        echo "
<tr>
    <td class=\"table-id-column\">
        <a href=\"#\" class=\"js-pimcore-link\" data-pimcore-id=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
            <i class=\"fa fa-link\"></i>
        </a>
    </td>

    <td class=\"reference-id-column\">
        ";
        // line 11
        if ( !twig_test_empty((isset($context["userDetailUrl"]) || array_key_exists("userDetailUrl", $context) ? $context["userDetailUrl"] : (function () { throw new RuntimeError('Variable "userDetailUrl" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["userDetailUrl"]) || array_key_exists("userDetailUrl", $context) ? $context["userDetailUrl"] : (function () { throw new RuntimeError('Variable "userDetailUrl" does not exist.', 12, $this->source); })()), 12, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 14
            echo "            <a href=\"#\" class=\"js-pimcore-link\" data-pimcore-id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</a>
        ";
        }
        // line 16
        echo "    </td>
    <td class=\"icon-column icon-column--center\">
        ";
        // line 18
        $this->loadTemplate("@PimcoreCustomerManagementFramework/admin/customers/partials/active_state.html.twig", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_row.html.twig", 18)->display(twig_array_merge($context, ["customer" => (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 18, $this->source); })())]));
        // line 19
        echo "    </td>
    <td>
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 21, $this->source); })()), "firstname", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 24, $this->source); })()), "lastname", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
    </td>

    <td>
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 31, $this->source); })()), "gender", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
    </td>

    <td>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 35, $this->source); })()), "getAllSegments", [], "method", false, false, true, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 36
            echo "            ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerView"]) || array_key_exists("customerView", $context) ? $context["customerView"] : (function () { throw new RuntimeError('Variable "customerView" does not exist.', 36, $this->source); })()), "viewFormatter", [], "any", false, false, true, 36), "formatValue", [0 => $context["segment"]], "method", false, false, true, 36), 36, $this->source);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </td>
</tr>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/customers/partials/list_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  119 => 36,  115 => 35,  108 => 31,  101 => 27,  95 => 24,  89 => 21,  85 => 19,  83 => 18,  79 => 16,  71 => 14,  63 => 12,  61 => 11,  52 => 5,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set userDetailUrl = cmf_userDetailUrl(customer) %}

<tr>
    <td class=\"table-id-column\">
        <a href=\"#\" class=\"js-pimcore-link\" data-pimcore-id=\"{{ customer.id }}\">
            <i class=\"fa fa-link\"></i>
        </a>
    </td>

    <td class=\"reference-id-column\">
        {% if userDetailUrl is not empty %}
            <a href=\"{{ userDetailUrl }}\">{{ customer.id }}</a>
        {% else %}
            <a href=\"#\" class=\"js-pimcore-link\" data-pimcore-id=\"{{ customer.id }}\">{{ customer.id }}</a>
        {% endif %}
    </td>
    <td class=\"icon-column icon-column--center\">
        {% include '@PimcoreCustomerManagementFramework/admin/customers/partials/active_state.html.twig' with {customer: customer} %}
    </td>
    <td>
        {{ customer.firstname }}
    </td>
    <td>
        {{ customer.lastname }}
    </td>
    <td>
        {{ customer.email }}
    </td>

    <td>
        {{ customer.gender }}
    </td>

    <td>
        {% for segment in customer.getAllSegments() %}
            {{ customerView.viewFormatter.formatValue(segment) | raw }}
        {% endfor %}
    </td>
</tr>
", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_row.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/customers/partials/list_row.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 11, "include" => 18, "for" => 35);
        static $filters = array("escape" => 5, "raw" => 36);
        static $functions = array("cmf_userDetailUrl" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'for'],
                ['escape', 'raw'],
                ['cmf_userDetailUrl']
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
