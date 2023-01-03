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

/* @PimcoreCustomerManagementFramework/admin/customers/partials/list_filter.html.twig */
class __TwigTemplate_a2f3b90cc52a0fb8268e2f361dbd98ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter.html.twig"));

        // line 1
        echo "<form class=\"search-filters\" role=\"form\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getFilterFormAction($this->sandbox->ensureToStringAllowed((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), 1, $this->source)), "html", null, true);
        echo "\" autocomplete=\"off\">

    ";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["searchBarFields"]) || array_key_exists("searchBarFields", $context) ? $context["searchBarFields"] : (function () { throw new RuntimeError('Variable "searchBarFields" does not exist.', 3, $this->source); })())) > 0)) {
            // line 4
            echo "        <div class=\"box box-default box-collapsible-state search-filters-box search-filters-box--standalone\" data-identifier=\"customer-search-bar\">
            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"form-group\" id=\"searchBar\">
                            <input type=\"text\" autocomplete=\"no\" name=\"filter[search]\" class=\"form-control\" placeholder=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_search", [], "admin"), "html", null, true);
            echo "...\" value=\"";
            (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "array", true, true, true, 9) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "array", false, false, true, 9)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "array", false, false, true, 9), "html", null, true))) : (print ("")));
            echo "\">
                            ";
            // line 10
            $this->loadTemplate("@PimcoreCustomerManagementFramework/admin/partial/list_filter_helper.html.twig", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter.html.twig", 10)->display($context);
            // line 11
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 17
        echo "
    <!-- Filters -->
    <div class=\"box box-default box-collapsible-state search-filters-box\" data-identifier=\"customer-search-filter\">

        ";
        // line 21
        $this->loadTemplate("@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/header.html.twig", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter.html.twig", 21)->display($context);
        // line 22
        echo "
        <div class=\"box-body\">
            ";
        // line 24
        $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["customerView"]) || array_key_exists("customerView", $context) ? $context["customerView"] : (function () { throw new RuntimeError('Variable "customerView" does not exist.', 24, $this->source); })()), "getFilterWrapperTemplate", [], "method", false, false, true, 24), "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter.html.twig", 24)->display($context);
        // line 25
        echo "        </div>


        ";
        // line 28
        if ((false && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, true, 28), "get", [0 => "perPage"], "method", false, false, true, 28))) {
            // line 29
            echo "            <input type=\"hidden\" name=\"perPage\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, true, 29), "get", [0 => "perPage"], "method", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\"/>
        ";
        }
        // line 31
        echo "
        ";
        // line 32
        $this->loadTemplate("@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/footer.html.twig", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter.html.twig", 32)->display($context);
        // line 33
        echo "    </div>
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  106 => 32,  103 => 31,  97 => 29,  95 => 28,  90 => 25,  88 => 24,  84 => 22,  82 => 21,  76 => 17,  68 => 11,  66 => 10,  60 => 9,  53 => 4,  51 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"search-filters\" role=\"form\" action=\"{{ cmf_filterFormAction(paginator) }}\" autocomplete=\"off\">

    {% if searchBarFields|length > 0 %}
        <div class=\"box box-default box-collapsible-state search-filters-box search-filters-box--standalone\" data-identifier=\"customer-search-bar\">
            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"form-group\" id=\"searchBar\">
                            <input type=\"text\" autocomplete=\"no\" name=\"filter[search]\" class=\"form-control\" placeholder=\"{{ 'cmf_filters_search' | trans({}, 'admin') }}...\" value=\"{{ filters['search'] ?? '' }}\">
                            {% include('@PimcoreCustomerManagementFramework/admin/partial/list_filter_helper.html.twig') %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}

    <!-- Filters -->
    <div class=\"box box-default box-collapsible-state search-filters-box\" data-identifier=\"customer-search-filter\">

        {% include('@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/header.html.twig')  %}

        <div class=\"box-body\">
            {% include(customerView.getFilterWrapperTemplate())  %}
        </div>


        {% if false and app.request.get('perPage') %}
            <input type=\"hidden\" name=\"perPage\" value=\"{{ app.request.get('perPage') }}\"/>
        {% endif %}

        {% include('@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/footer.html.twig')  %}
    </div>
</form>", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/customers/partials/list_filter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "include" => 10);
        static $filters = array("escape" => 1, "length" => 3, "trans" => 9);
        static $functions = array("cmf_filterFormAction" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'length', 'trans'],
                ['cmf_filterFormAction']
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
