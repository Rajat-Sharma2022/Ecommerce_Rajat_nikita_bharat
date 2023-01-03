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

/* news/detail.html.twig */
class __TwigTemplate_80e906923a4eb0911400e0d87e923a2a extends Template
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
        // line 3
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/detail.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "news/detail.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
    <div id=\"main-content\" class=\"main-content mb-5\">

        <div class=\"page-header\">
            <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"text-muted mb-3\">";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 14, $this->source); })()), "date", [], "any", false, false, true, 14), 14, $this->source), "Y-m-d h:i A"), "html", null, true);
        echo "</div>
        <div class=\"display-6\">
            ";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 16, $this->source); })()), "shortText", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
        </div>

        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 19, $this->source); })()), "gallery", [], "any", false, false, true, 19), "items", [], "any", false, false, true, 19)) {
            // line 20
            echo "
            <div class=\"row\">

                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 23, $this->source); })()), "gallery", [], "any", false, false, true, 23), "items", [], "any", false, false, true, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 24
                echo "
                    ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, true, 25)) {
                    // line 26
                    echo "
                        <div class=\"col-sm-3 mt-3\">

                            <a href=\"";
                    // line 29
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getThumbnail", [0 => "galleryLightbox"], "method", false, false, true, 29), 29, $this->source);
                    echo "\" class=\"thumbnail\">
                                ";
                    // line 30
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "thumbnail", [0 => "galleryThumbnail"], "method", false, false, true, 30), "getHTML", [0 => ["imgAttributes" => ["class" => "img-thumbnail img-fluid w-100"]]], "method", false, false, true, 30), 30, $this->source);
                    echo "
                            </a>

                        </div>

                    ";
                }
                // line 36
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
            </div>

        ";
        }
        // line 42
        echo "
        ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 43, $this->source); })()), "content", [], "any", false, false, true, 43)) {
            // line 44
            echo "
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 45, $this->source); })()), "content", [], "any", false, false, true, 45), "items", [], "any", false, false, true, 45));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 46
                echo "
                ";
                // line 47
                $this->loadTemplate((("news/content/" . twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, true, 47)) . ".html.twig"), "news/detail.html.twig", 47)->display(twig_array_merge($context, ["item" => $context["item"]]));
                // line 48
                echo "
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        }
        // line 51
        echo "

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "news/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 51,  185 => 50,  170 => 48,  168 => 47,  165 => 46,  148 => 45,  145 => 44,  143 => 43,  140 => 42,  134 => 38,  127 => 36,  118 => 30,  114 => 29,  109 => 26,  107 => 25,  104 => 24,  100 => 23,  95 => 20,  93 => 19,  87 => 16,  82 => 14,  76 => 11,  70 => 7,  60 => 6,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var news \\Pimcore\\Model\\DataObject\\News #}

{% extends 'layouts/layout.html.twig' %}


{% block content %}

    <div id=\"main-content\" class=\"main-content mb-5\">

        <div class=\"page-header\">
            <h1>{{ news.title }}</h1>
        </div>

        <div class=\"text-muted mb-3\">{{ news.date | date('Y-m-d h:i A') }}</div>
        <div class=\"display-6\">
            {{ news.shortText }}
        </div>

        {% if news.gallery.items %}

            <div class=\"row\">

                {% for image in news.gallery.items %}

                    {% if image.image %}

                        <div class=\"col-sm-3 mt-3\">

                            <a href=\"{{ image.getThumbnail('galleryLightbox')|raw }}\" class=\"thumbnail\">
                                {{ image.thumbnail('galleryThumbnail').getHTML({imgAttributes: {class: 'img-thumbnail img-fluid w-100'}})|raw }}
                            </a>

                        </div>

                    {% endif %}

                {% endfor %}

            </div>

        {% endif %}

        {% if news.content %}

            {% for item in news.content.items %}

                {% include 'news/content/' ~ item.type ~ '.html.twig' with {'item': item} %}

            {% endfor %}
        {% endif %}


    </div>

{% endblock %}", "news/detail.html.twig", "/var/www/html/EcommerceProject/ecom/templates/news/detail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "for" => 23, "include" => 47);
        static $filters = array("escape" => 11, "date" => 14, "raw" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'include'],
                ['escape', 'date', 'raw'],
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
