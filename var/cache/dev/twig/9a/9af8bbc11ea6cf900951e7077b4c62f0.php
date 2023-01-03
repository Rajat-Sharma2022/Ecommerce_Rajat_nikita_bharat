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

/* @PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/fields.html.twig */
class __TwigTemplate_acfb362c6298db1298abf4ce79d7393f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/fields.html.twig"));

        // line 1
        echo "<fieldset>
    <legend>
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer", [], "admin"), "html", null, true);
        echo "
        <select
                id=\"form-filter-operator-customer\"
                name=\"filter[operator-customer]\"
                class=\"form-filter-operator\"
                data-placeholder=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_options_operator", [], "admin"), "html", null, true);
        echo "\">

            <option ";
        // line 10
        echo ((((((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-customer", [], "array", true, true, true, 10) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-customer", [], "array", false, false, true, 10)))) ? (twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-customer", [], "array", false, false, true, 10)) : (null)) == "AND")) ? ("selected=\"selected\"") : (""));
        echo " value=\"AND\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_options_and", [], "admin"), "html", null, true);
        echo "</option>
            <option ";
        // line 11
        echo ((((((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-customer", [], "array", true, true, true, 11) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-customer", [], "array", false, false, true, 11)))) ? (twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-customer", [], "array", false, false, true, 11)) : (null)) == "OR")) ? ("selected=\"selected\"") : (""));
        echo " value=\"OR\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_options_any", [], "admin"), "html", null, true);
        echo "</option>

        </select>
    </legend>

    <div class=\"form-group\">
        <label for=\"form-filter-id\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_id", [], "admin"), "html", null, true);
        echo "</label>
        <input type=\"number\" autocomplete=\"no\" name=\"filter[id]\" id=\"form-filter-id\" class=\"form-control\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_id", [], "admin"), "html", null, true);
        echo "\" value=\"";
        (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "id", [], "array", true, true, true, 18) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "id", [], "array", false, false, true, 18)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "id", [], "array", false, false, true, 18), "html", null, true))) : (print ("")));
        echo "\" ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 18, $this->source); })()), "isLocked", [0 => "id"], "method", false, false, true, 18)) ? ("disabled") : (""));
        echo ">
    </div>

    <div class=\"form-group\">
        <label for=\"form-filter-email\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_email", [], "admin"), "html", null, true);
        echo "</label>
        <input type=\"text\" autocomplete=\"no\" name=\"filter[email]\" id=\"form-filter-email\" class=\"form-control\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_email", [], "admin"), "html", null, true);
        echo "\" value=\"";
        (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "email", [], "array", true, true, true, 23) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "email", [], "array", false, false, true, 23)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "email", [], "array", false, false, true, 23), "html", null, true))) : (print ("")));
        echo "\" ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 23, $this->source); })()), "isLocked", [0 => "email"], "method", false, false, true, 23)) ? ("disabled") : (""));
        echo ">
    </div>

    <div class=\"form-group\">
        <label for=\"form-filter-firstname\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_firstname", [], "admin"), "html", null, true);
        echo "</label>
        <input type=\"text\" autocomplete=\"no\" name=\"filter[firstname]\" id=\"form-filter-firstname\" class=\"form-control\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_firstname", [], "admin"), "html", null, true);
        echo "\" value=\"";
        (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "firstname", [], "array", true, true, true, 28) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "firstname", [], "array", false, false, true, 28)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "firstname", [], "array", false, false, true, 28), "html", null, true))) : (print ("")));
        echo "\" ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 28, $this->source); })()), "isLocked", [0 => "firstname"], "method", false, false, true, 28)) ? ("disabled") : (""));
        echo ">
    </div>

    <div class=\"form-group\">
        <label for=\"form-filter-lastname\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_lastname", [], "admin"), "html", null, true);
        echo "</label>
        <input type=\"text\" autocomplete=\"no\" name=\"filter[lastname]\" id=\"form-filter-lastname\" class=\"form-control\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customer_lastname", [], "admin"), "html", null, true);
        echo "\" value=\"";
        (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "lastname", [], "array", true, true, true, 33) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "lastname", [], "array", false, false, true, 33)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "lastname", [], "array", false, false, true, 33), "html", null, true))) : (print ("")));
        echo "\" ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 33, $this->source); })()), "isLocked", [0 => "lastname"], "method", false, false, true, 33)) ? ("disabled") : (""));
        echo ">
    </div>
</fieldset>

<fieldset>
    <legend>
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_options", [], "admin"), "html", null, true);
        echo "
    </legend>

    <div class=\"form-group\">
        <div class=\"checkbox\">
            <label>
                <input name=\"filter[active]\" value=\"1\" type=\"checkbox\" ";
        // line 45
        echo (((((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "active", [], "array", true, true, true, 45) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "active", [], "array", false, false, true, 45)))) ? (twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "active", [], "array", false, false, true, 45)) : (false))) ? ("checked=\"checked\"") : (""));
        echo ">
                ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_options_only_active", [], "admin"), "html", null, true);
        echo "
            </label>
        </div>
    </div>
</fieldset>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 46,  150 => 45,  141 => 39,  128 => 33,  124 => 32,  113 => 28,  109 => 27,  98 => 23,  94 => 22,  83 => 18,  79 => 17,  68 => 11,  62 => 10,  57 => 8,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset>
    <legend>
        {{ 'cmf_filters_customer' | trans({}, 'admin') }}
        <select
                id=\"form-filter-operator-customer\"
                name=\"filter[operator-customer]\"
                class=\"form-filter-operator\"
                data-placeholder=\"{{  'cmf_filters_options_operator' | trans({}, 'admin') }}\">

            <option {{ (filters['operator-customer'] ?? null) == 'AND' ? 'selected=\"selected\"' : '' }} value=\"AND\">{{ 'cmf_filters_options_and' | trans({}, 'admin') }}</option>
            <option {{ (filters['operator-customer'] ?? null)  == 'OR' ? 'selected=\"selected\"' : '' }} value=\"OR\">{{ 'cmf_filters_options_any' | trans({}, 'admin') }}</option>

        </select>
    </legend>

    <div class=\"form-group\">
        <label for=\"form-filter-id\">{{ 'cmf_filters_customer_id' | trans({}, 'admin') }}</label>
        <input type=\"number\" autocomplete=\"no\" name=\"filter[id]\" id=\"form-filter-id\" class=\"form-control\" placeholder=\"{{ 'cmf_filters_customer_id' | trans({}, 'admin') }}\" value=\"{{ filters['id'] ?? '' }}\" {{ filterDefinition.isLocked('id') ? 'disabled' : ''}}>
    </div>

    <div class=\"form-group\">
        <label for=\"form-filter-email\">{{ 'cmf_filters_customer_email' | trans({}, 'admin') }}</label>
        <input type=\"text\" autocomplete=\"no\" name=\"filter[email]\" id=\"form-filter-email\" class=\"form-control\" placeholder=\"{{ 'cmf_filters_customer_email' | trans({}, 'admin') }}\" value=\"{{ filters['email'] ?? '' }}\" {{ filterDefinition.isLocked('email') ? 'disabled' : ''}}>
    </div>

    <div class=\"form-group\">
        <label for=\"form-filter-firstname\">{{ 'cmf_filters_customer_firstname' | trans({}, 'admin') }}</label>
        <input type=\"text\" autocomplete=\"no\" name=\"filter[firstname]\" id=\"form-filter-firstname\" class=\"form-control\" placeholder=\"{{ 'cmf_filters_customer_firstname' | trans({}, 'admin') }}\" value=\"{{ filters['firstname'] ?? '' }}\" {{ filterDefinition.isLocked('firstname') ? 'disabled' : ''}}>
    </div>

    <div class=\"form-group\">
        <label for=\"form-filter-lastname\">{{ 'cmf_filters_customer_lastname' | trans({}, 'admin') }}</label>
        <input type=\"text\" autocomplete=\"no\" name=\"filter[lastname]\" id=\"form-filter-lastname\" class=\"form-control\" placeholder=\"{{ 'cmf_filters_customer_lastname' | trans({}, 'admin') }}\" value=\"{{ filters['lastname'] ?? '' }}\" {{ filterDefinition.isLocked('lastname') ? 'disabled' : ''}}>
    </div>
</fieldset>

<fieldset>
    <legend>
        {{ 'cmf_filters_options' | trans({}, 'admin') }}
    </legend>

    <div class=\"form-group\">
        <div class=\"checkbox\">
            <label>
                <input name=\"filter[active]\" value=\"1\" type=\"checkbox\" {{ (filters['active'] ?? false) ? 'checked=\"checked\"' : '' }}>
                {{ 'cmf_filters_options_only_active' | trans({}, 'admin') }}
            </label>
        </div>
    </div>
</fieldset>
", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/fields.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/customers/partials/list_filter/fields.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3, "trans" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans'],
                []
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
