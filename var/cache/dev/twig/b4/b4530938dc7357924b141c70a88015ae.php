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

/* content/default.html.twig */
class __TwigTemplate_0bec92909400bccab3cff99d5bed477d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/default.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "content/default.html.twig", 1);
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
        echo "    <div id=\"main-content\" class=\"main-content\" >
        ";
        // line 5
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 5, $this->source); })()), "getTitle", [], "method", false, false, true, 5))) {
            // line 6
            echo "            ";
            $this->env->getFunction('pimcore_head_title')->getCallable()(twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline"), "getData", [], "method", false, false, true, 6), "PREPEND");
            // line 7
            echo "        ";
        }
        // line 8
        echo "
        <div class=\"page-header\">
            <h1>";
        // line 10
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline", ["placeholder" => "Headline"]);
        echo "</h1>
        </div>

        ";
        // line 13
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "areablock", "content", ["allowed" => [0 => "blockquote", 1 => "embed", 2 => "featurette", 3 => "gallery-carousel", 4 => "gallery-folder", 5 => "gallery-single-images", 6 => "headlines", 7 => "horizontal-line", 8 => "icon-teaser-row", 9 => "image", 10 => "image-hotspot-marker", 11 => "image-metadata", 12 => "pdf", 13 => "product-grid", 14 => "product-teaser", 15 => "standard-teaser", 16 => "text-accordion", 17 => "time-slider-featurette", 18 => "video", 19 => "wysiwyg", 20 => "wysiwyg-with-images", 21 => "personalized-product-teaser"]]);
        // line 18
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "content/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  91 => 13,  85 => 10,  81 => 8,  78 => 7,  75 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}

{% block content %}
    <div id=\"main-content\" class=\"main-content\" >
        {% if document.getTitle() is empty %}
            {% do pimcore_head_title(pimcore_input('headline').getData(), 'PREPEND') %}
        {% endif %}

        <div class=\"page-header\">
            <h1>{{ pimcore_input('headline', {'placeholder':'Headline'}) }}</h1>
        </div>

        {{ pimcore_areablock('content', {
            'allowed': ['blockquote', 'embed', 'featurette', 'gallery-carousel', 'gallery-folder',
                'gallery-single-images', 'headlines', 'horizontal-line', 'icon-teaser-row', 'image',
                'image-hotspot-marker', 'image-metadata', 'pdf', 'product-grid', 'product-teaser', 'standard-teaser', 'text-accordion',
                'time-slider-featurette', 'video', 'wysiwyg', 'wysiwyg-with-images', 'personalized-product-teaser']
        }) }}
    </div>
{% endblock %}", "content/default.html.twig", "/var/www/html/EcommerceProject/ecom/templates/content/default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "do" => 6);
        static $filters = array();
        static $functions = array("pimcore_head_title" => 6, "pimcore_input" => 6, "pimcore_areablock" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'do'],
                [],
                ['pimcore_head_title', 'pimcore_input', 'pimcore_areablock']
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
