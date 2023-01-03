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

/* content/tenant_switches.html.twig */
class __TwigTemplate_6a3457e143ff149199feb06bed6204c4 extends Template
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
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/tenant_switches.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/tenant_switches.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "content/tenant_switches.html.twig", 1);
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
<div class=\"row\">

    <div class=\"col-12\">
        <h1>";
        // line 8
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
        echo "</h1>


        <h4>Checkout Tenants</h4>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["checkoutTenants"]) || array_key_exists("checkoutTenants", $context) ? $context["checkoutTenants"] : (function () { throw new RuntimeError('Variable "checkoutTenants" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["checkoutTenant"] => $context["desc"]) {
            // line 14
            echo "            <a href=\"?change-checkout-tenant=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["checkoutTenant"], 14, $this->source), "html", null, true);
            echo "\" class=\"btn btn-block ";
            echo ((($context["checkoutTenant"] == (isset($context["currentCheckoutTenant"]) || array_key_exists("currentCheckoutTenant", $context) ? $context["currentCheckoutTenant"] : (function () { throw new RuntimeError('Variable "currentCheckoutTenant" does not exist.', 14, $this->source); })()))) ? ("btn-success") : (""));
            echo " }}\" type=\"button\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["checkoutTenant"], 15, $this->source), "html", null, true);
            echo "

                ";
            // line 17
            if ($context["desc"]) {
                // line 18
                echo "                    <br/><small>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["desc"], 18, $this->source), "html", null, true);
                echo "</small>
                ";
            }
            // line 20
            echo "            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['checkoutTenant'], $context['desc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "

        <br/><br/>
        <h4>Assortment Tenants</h4>

        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assortmentTenants"]) || array_key_exists("assortmentTenants", $context) ? $context["assortmentTenants"] : (function () { throw new RuntimeError('Variable "assortmentTenants" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["assortmentTenant"] => $context["desc"]) {
            // line 28
            echo "            <a href=\"?change-assortment-tenant=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["assortmentTenant"], 28, $this->source), "html", null, true);
            echo "\" class=\"btn btn-block ";
            echo ((($context["assortmentTenant"] == (isset($context["currentAssortmentTenant"]) || array_key_exists("currentAssortmentTenant", $context) ? $context["currentAssortmentTenant"] : (function () { throw new RuntimeError('Variable "currentAssortmentTenant" does not exist.', 28, $this->source); })()))) ? ("btn-success") : (""));
            echo " }}\" type=\"button\">
                ";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["assortmentTenant"], 29, $this->source), "html", null, true);
            echo "

                ";
            // line 31
            if ($context["desc"]) {
                // line 32
                echo "                    <br/><small>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["desc"], 32, $this->source), "html", null, true);
                echo "</small>
                ";
            }
            // line 34
            echo "            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['assortmentTenant'], $context['desc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    </div>

</div><!-- end row -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "content/tenant_switches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 36,  146 => 34,  140 => 32,  138 => 31,  133 => 29,  126 => 28,  122 => 27,  115 => 22,  108 => 20,  102 => 18,  100 => 17,  95 => 15,  88 => 14,  84 => 13,  76 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}

{% block content %}

<div class=\"row\">

    <div class=\"col-12\">
        <h1>{{ pimcore_input('headline') }}</h1>


        <h4>Checkout Tenants</h4>

        {% for checkoutTenant, desc in checkoutTenants %}
            <a href=\"?change-checkout-tenant={{ checkoutTenant }}\" class=\"btn btn-block {{ checkoutTenant == currentCheckoutTenant ? 'btn-success' : '' }} }}\" type=\"button\">
                {{ checkoutTenant }}

                {% if desc %}
                    <br/><small>{{ desc }}</small>
                {% endif %}
            </a>
        {% endfor %}


        <br/><br/>
        <h4>Assortment Tenants</h4>

        {% for assortmentTenant, desc in assortmentTenants %}
            <a href=\"?change-assortment-tenant={{ assortmentTenant }}\" class=\"btn btn-block {{ assortmentTenant == currentAssortmentTenant ? 'btn-success' : '' }} }}\" type=\"button\">
                {{ assortmentTenant }}

                {% if desc %}
                    <br/><small>{{ desc }}</small>
                {% endif %}
            </a>
        {% endfor %}

    </div>

</div><!-- end row -->

{% endblock %}", "content/tenant_switches.html.twig", "/var/www/html/EcommerceProject/ecom/templates/content/tenant_switches.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 13, "if" => 17);
        static $filters = array("escape" => 14);
        static $functions = array("pimcore_input" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                ['pimcore_input']
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
