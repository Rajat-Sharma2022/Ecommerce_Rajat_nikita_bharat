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

/* @PimcoreCustomerManagementFramework/admin/customers/list.html.twig */
class __TwigTemplate_223ed841bdfda24ed874194f77ae3992 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/list.html.twig"));

        $this->parent = $this->loadTemplate("@PimcoreCustomerManagementFramework/layout.html.twig", "@PimcoreCustomerManagementFramework/admin/customers/list.html.twig", 1);
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
        echo "
    ";
        // line 5
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcorecustomermanagementframework/js/CustomerView/frontend.js")], "method", false, false, true, 5);
        // line 6
        echo "
    <section class=\"content\">

        ";
        // line 9
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "                <div class=\"callout callout-danger\">
                    ";
                // line 12
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["error"], 12, $this->source), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->loadTemplate("@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter.html.twig", "@PimcoreCustomerManagementFramework/admin/customers/list.html.twig", 17)->display($context);
        // line 18
        echo "
        ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 19, $this->source); })()), "totalItemCount", [], "any", false, false, true, 19) === 0)) {
            // line 20
            echo "            <div class=\"callout callout-warning\">
                <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_no_results", [], "admin"), "html", null, true);
            echo "</p>
            </div>
        ";
        } else {
            // line 24
            echo "
            <!-- List -->
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">
                        <i class=\"fa fa-user\"></i>
                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_customers", [], "admin"), "html", null, true);
            echo "
                    </h3>
                </div>
                <!-- /.box-header -->

                <div class=\"customer-table-content\">
                    ";
            // line 36
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["customerView"]) || array_key_exists("customerView", $context) ? $context["customerView"] : (function () { throw new RuntimeError('Variable "customerView" does not exist.', 36, $this->source); })()), "overviewWrapperTemplate", [], "any", false, false, true, 36), "@PimcoreCustomerManagementFramework/admin/customers/list.html.twig", 36)->display(twig_to_array(["paginator" => (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 36, $this->source); })()), "customerView" => (isset($context["customerView"]) || array_key_exists("customerView", $context) ? $context["customerView"] : (function () { throw new RuntimeError('Variable "customerView" does not exist.', 36, $this->source); })()), "paginationVariables" => (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 36, $this->source); })())]));
            // line 37
            echo "                    <!-- /.box-body -->
                </div>

                ";
            // line 40
            $this->loadTemplate("@PimcoreCustomerManagementFramework/admin/customers/partials/list_export.html.twig", "@PimcoreCustomerManagementFramework/admin/customers/list.html.twig", 40)->display($context);
            // line 41
            echo "            </div>

        ";
        }
        // line 44
        echo "
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/customers/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 44,  147 => 41,  145 => 40,  140 => 37,  138 => 36,  129 => 30,  121 => 24,  115 => 21,  112 => 20,  110 => 19,  107 => 18,  105 => 17,  102 => 16,  99 => 15,  90 => 12,  87 => 11,  82 => 10,  80 => 9,  75 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@PimcoreCustomerManagementFramework/layout.html.twig' %}

{% block content %}

    {% do pimcore_head_script().appendFile(asset('/bundles/pimcorecustomermanagementframework/js/CustomerView/frontend.js')) %}

    <section class=\"content\">

        {% if not errors is empty %}
            {% for error in errors %}
                <div class=\"callout callout-danger\">
                    {{ error }}
                </div>
            {% endfor %}
        {% endif %}

        {% include '@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter.html.twig' %}

        {% if paginator.totalItemCount is same as (0) %}
            <div class=\"callout callout-warning\">
                <p>{{ 'cmf_filters_no_results' | trans({}, 'admin') }}</p>
            </div>
        {% else %}

            <!-- List -->
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">
                        <i class=\"fa fa-user\"></i>
                        {{ 'cmf_filters_customers'| trans({}, 'admin') }}
                    </h3>
                </div>
                <!-- /.box-header -->

                <div class=\"customer-table-content\">
                    {% include customerView.overviewWrapperTemplate with {'paginator': paginator, 'customerView': customerView, 'paginationVariables': paginationVariables} only %}
                    <!-- /.box-body -->
                </div>

                {% include '@PimcoreCustomerManagementFramework/admin/customers/partials/list_export.html.twig' %}
            </div>

        {% endif %}

    </section>

{% endblock %}
", "@PimcoreCustomerManagementFramework/admin/customers/list.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/customers/list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("do" => 5, "if" => 9, "for" => 10, "include" => 17);
        static $filters = array("escape" => 12, "trans" => 21);
        static $functions = array("pimcore_head_script" => 5, "asset" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['do', 'if', 'for', 'include'],
                ['escape', 'trans'],
                ['pimcore_head_script', 'asset']
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
