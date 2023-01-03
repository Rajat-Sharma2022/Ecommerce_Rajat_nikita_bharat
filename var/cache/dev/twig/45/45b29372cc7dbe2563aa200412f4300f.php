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

/* product/search.html.twig */
class __TwigTemplate_8af0d997db71b5145d3bb035f663c943 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/search.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "product/search.html.twig", 1);
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
        if ((twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 4, $this->source); })())) < 1)) {
            // line 5
            echo "<h3 class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shop.empty-result"), "html", null, true);
            echo "</h3>
<h2 class=\"text-center\">";
            // line 6
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 6, $this->source); })()), 6, $this->source)), "html", null, true);
            echo "</h2>
";
        } else {
            // line 8
            echo "<h2>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 8, $this->source); })()), 8, $this->source)), "html", null, true);
            echo "</h2>
<form id=\"js_filterfield\" action=\"\" method=\"get\">
    <input type=\"hidden\" name=\"term\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 10, $this->source); })()), 10, $this->source), "html", null, true);
            echo "\"/>

    <div class=\"productList\" id=\"js-productlist\">
        ";
            // line 13
            $this->loadTemplate("product/listing_content.html.twig", "product/search.html.twig", 13)->display(twig_array_merge($context, ["productListing" => (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 13, $this->source); })()), "language" => (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 13, $this->source); })())]));
            // line 14
            echo "    </div>
</form>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 14,  94 => 13,  88 => 10,  82 => 8,  77 => 6,  72 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}

{% block content %}
{% if products|length < 1 %}
<h3 class=\"text-center\">{{ 'shop.empty-result' | trans }}</h3>
<h2 class=\"text-center\">{{ term | upper }}</h2>
{% else  %}
<h2>{{ term | upper }}</h2>
<form id=\"js_filterfield\" action=\"\" method=\"get\">
    <input type=\"hidden\" name=\"term\" value=\"{{ term }}\"/>

    <div class=\"productList\" id=\"js-productlist\">
        {% include \"product/listing_content.html.twig\" with {'productListing': products, 'language': language} %}
    </div>
</form>
{% endif %}
{% endblock %}", "product/search.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/search.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "include" => 13);
        static $filters = array("length" => 4, "escape" => 5, "trans" => 5, "upper" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['length', 'escape', 'trans', 'upper'],
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
