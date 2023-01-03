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

/* news/listing.html.twig */
class __TwigTemplate_e1da7d6e5865439eb6631415f39aaf38 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/listing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/listing.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "news/listing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div id=\"main-content\" class=\"main-content\">

        ";
        // line 8
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 8, $this->source); })()), "getTitle", [], "method", false, false, true, 8))) {
            // line 9
            echo "            ";
            $this->env->getFunction('pimcore_head_title')->getCallable()(twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline"), "getData", [], "method", false, false, true, 9), "PREPEND");
            // line 10
            echo "        ";
        }
        // line 11
        echo "
        <div class=\"page-header\">
            <h1>";
        // line 13
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline", ["placeholder" => "Headline"]);
        echo "</h1>
        </div>

        ";
        // line 16
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "areablock", "content", ["allowed" => [0 => "headlines", 1 => "hero-teaser", 2 => "horizontal-line", 3 => "wysiwyg"]]);
        // line 25
        echo "

        <div class=\"row\">
            <ul class=\"list-unstyled\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 30
            echo "                    ";
            // line 31
            echo "                    ";
            $context["detailLink"] = $this->extensions['App\Twig\Extension\NewsExtension']->generateLink($this->sandbox->ensureToStringAllowed($context["news"], 31, $this->source));
            // line 32
            echo "
                    <li class=\"media my-3\">
                        ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["news"], "gallery", [], "any", false, false, true, 34), "items", [], "any", false, false, true, 34)) {
                // line 35
                echo "                            ";
                $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["news"], "gallery", [], "any", false, false, true, 35), "current", [], "any", false, false, true, 35);
                // line 36
                echo "
                            ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 37, $this->source); })()), "image", [], "any", false, false, true, 37)) {
                    // line 38
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["detailLink"]) || array_key_exists("detailLink", $context) ? $context["detailLink"] : (function () { throw new RuntimeError('Variable "detailLink" does not exist.', 38, $this->source); })()), 38, $this->source), "html", null, true);
                    echo "\">
                                    ";
                    // line 39
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 39, $this->source); })()), "image", [], "any", false, false, true, 39), "thumbnail", [0 => "newsList"], "method", false, false, true, 39), "html", [0 => ["imgAttributes" => ["class" => "mr-3"]]], "method", false, false, true, 39), 39, $this->source);
                    echo "
                                </a>
                            ";
                }
                // line 42
                echo "                        ";
            }
            // line 43
            echo "
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">
                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["detailLink"]) || array_key_exists("detailLink", $context) ? $context["detailLink"] : (function () { throw new RuntimeError('Variable "detailLink" does not exist.', 46, $this->source); })()), 46, $this->source), "html", null, true);
            echo "\" class=\"text-decoration-none text-dark\">
                                    ";
            // line 47
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "
                                </a>
                            </h5>
                            ";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "shortText", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </ul>
        </div>

        <div class=\"pt-5\">

            ";
        // line 59
        $this->loadTemplate("includes/pagination.html.twig", "news/listing.html.twig", 59)->display($context);
        // line 60
        echo "
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "news/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 60,  170 => 59,  163 => 54,  153 => 50,  147 => 47,  143 => 46,  138 => 43,  135 => 42,  129 => 39,  124 => 38,  122 => 37,  119 => 36,  116 => 35,  114 => 34,  110 => 32,  107 => 31,  105 => 30,  101 => 29,  95 => 25,  93 => 16,  87 => 13,  83 => 11,  80 => 10,  77 => 9,  75 => 8,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}


{% block content %}

    <div id=\"main-content\" class=\"main-content\">

        {% if document.getTitle() is empty %}
            {% do pimcore_head_title(pimcore_input('headline').getData(), 'PREPEND') %}
        {% endif %}

        <div class=\"page-header\">
            <h1>{{ pimcore_input('headline', {'placeholder':'Headline'}) }}</h1>
        </div>

        {{
            pimcore_areablock('content', {
                'allowed': [
                    'headlines',
                    'hero-teaser',
                    'horizontal-line',
                    'wysiwyg'
                ]
            })
        }}

        <div class=\"row\">
            <ul class=\"list-unstyled\">
                {%  for news in news %}
                    {# @var news \\Pimcore\\Model\\DataObject\\News #}
                    {% set detailLink = app_news_detaillink(news) %}

                    <li class=\"media my-3\">
                        {% if news.gallery.items %}
                            {% set image = news.gallery.current %}

                            {% if image.image %}
                                <a href=\"{{ detailLink }}\">
                                    {{ image.image.thumbnail('newsList').html({imgAttributes: {class: 'mr-3'}}) | raw }}
                                </a>
                            {% endif %}
                        {% endif %}

                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">
                                <a href=\"{{ detailLink }}\" class=\"text-decoration-none text-dark\">
                                    {{ news.title }}
                                </a>
                            </h5>
                            {{ news.shortText }}
                        </div>
                    </li>
                {% endfor %}
            </ul>
        </div>

        <div class=\"pt-5\">

            {% include 'includes/pagination.html.twig' %}

        </div>

    </div>

{%  endblock %}
", "news/listing.html.twig", "/var/www/html/EcommerceProject/ecom/templates/news/listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8, "do" => 9, "for" => 29, "set" => 31, "include" => 59);
        static $filters = array("escape" => 38, "raw" => 39);
        static $functions = array("pimcore_head_title" => 9, "pimcore_input" => 9, "pimcore_areablock" => 17, "app_news_detaillink" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'do', 'for', 'set', 'include'],
                ['escape', 'raw'],
                ['pimcore_head_title', 'pimcore_input', 'pimcore_areablock', 'app_news_detaillink']
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
