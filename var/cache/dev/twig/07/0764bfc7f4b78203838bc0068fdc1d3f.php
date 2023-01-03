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

/* @PimcoreCustomerManagementFramework/admin/duplicates/partials/list_filter.html.twig */
class __TwigTemplate_fdbeb7982bff8fa30074295459de7e1b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/duplicates/partials/list_filter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/duplicates/partials/list_filter.html.twig"));

        // line 1
        echo "<form class=\"search-filters\" role=\"form\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getFilterFormAction($this->sandbox->ensureToStringAllowed((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), 1, $this->source)), "html", null, true);
        echo "\">

    <div class=\"box box-default box-collapsible-state search-filters-box search-filters-box--standalone\" data-identifier=\"customer-search-bar\">
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"form-group\" id=\"searchBar\">
                        <input type=\"text\" name=\"filter[search]\" class=\"form-control\" placeholder=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_search", [], "admin"), "html", null, true);
        echo "...\" value=\"";
        (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "array", true, true, true, 8) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "array", false, false, true, 8)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "array", false, false, true, 8), "html", null, true))) : (print ("")));
        echo "\">
                        ";
        // line 9
        $this->loadTemplate("@PimcoreCustomerManagementFramework/admin/partial/list_filter_helper.html.twig", "@PimcoreCustomerManagementFramework/admin/duplicates/partials/list_filter.html.twig", 9)->display($context);
        // line 10
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type=\"hidden\" name=\"declined\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, true, 16), "get", [0 => "declined"], "method", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\"/>

</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/duplicates/partials/list_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  64 => 10,  62 => 9,  56 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"search-filters\" role=\"form\" action=\"{{ cmf_filterFormAction(paginator) }}\">

    <div class=\"box box-default box-collapsible-state search-filters-box search-filters-box--standalone\" data-identifier=\"customer-search-bar\">
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"form-group\" id=\"searchBar\">
                        <input type=\"text\" name=\"filter[search]\" class=\"form-control\" placeholder=\"{{ 'cmf_filters_search' | trans({}, 'admin') }}...\" value=\"{{ filters['search'] ?? '' }}\">
                        {% include('@PimcoreCustomerManagementFramework/admin/partial/list_filter_helper.html.twig') %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type=\"hidden\" name=\"declined\" value=\"{{ app.request.get('declined') }}\"/>

</form>
", "@PimcoreCustomerManagementFramework/admin/duplicates/partials/list_filter.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/duplicates/partials/list_filter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 9);
        static $filters = array("escape" => 1, "trans" => 8);
        static $functions = array("cmf_filterFormAction" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape', 'trans'],
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
