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

/* news/news_teaser.html.twig */
class __TwigTemplate_6d35b0522dba77a771c0f8efcd1ca47b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/news_teaser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/news_teaser.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["detailLink"] = $this->extensions['App\Twig\Extension\NewsExtension']->generateLink($this->sandbox->ensureToStringAllowed((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 3, $this->source); })()), 3, $this->source));
        // line 4
        echo "

<div class=\"teaser card custom-standard-card mb-4 shadow-sm\">
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["detailLink"]) || array_key_exists("detailLink", $context) ? $context["detailLink"] : (function () { throw new RuntimeError('Variable "detailLink" does not exist.', 7, $this->source); })()), 7, $this->source), "html", null, true);
        echo "\" class=\"text-decoration-none text-dark\">

    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 9, $this->source); })()), "gallery", [], "any", false, false, true, 9), "items", [], "any", false, false, true, 9)) {
            // line 10
            echo "        ";
            $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 10, $this->source); })()), "gallery", [], "any", false, false, true, 10), "current", [], "any", false, false, true, 10);
            // line 11
            echo "
        ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, true, 12)) {
                // line 13
                echo "            ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, true, 13), "thumbnail", [0 => "standardTeaser"], "method", false, false, true, 13), "html", [0 => ["imgAttributes" => ["class" => "img-fluid"]]], "method", false, false, true, 13), 13, $this->source);
                echo "
        ";
            }
            // line 15
            echo "
    ";
        }
        // line 17
        echo "
        <div class=\"card-body\">
            <h4 class=\"card-title pricing-card-title text-uppercase\">";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</h4>
            <p class=\"card-text\">
                ";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 21, $this->source); })()), "shortText", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
            </p>
            <p>
                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["detailLink"]) || array_key_exists("detailLink", $context) ? $context["detailLink"] : (function () { throw new RuntimeError('Variable "detailLink" does not exist.', 24, $this->source); })()), 24, $this->source), "html", null, true);
        echo "\" class=\"btn btn-lg btn-secondary\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.read-more"), "html", null, true);
        echo "</a>
            </p>
        </div>
    </a>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "news/news_teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 24,  89 => 21,  84 => 19,  80 => 17,  76 => 15,  70 => 13,  68 => 12,  65 => 11,  62 => 10,  60 => 9,  55 => 7,  50 => 4,  48 => 3,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var news \\Pimcore\\Model\\DataObject\\News #}

{% set detailLink = app_news_detaillink(news) %}


<div class=\"teaser card custom-standard-card mb-4 shadow-sm\">
    <a href=\"{{ detailLink }}\" class=\"text-decoration-none text-dark\">

    {% if news.gallery.items %}
        {% set image = news.gallery.current %}

        {% if image.image %}
            {{ image.image.thumbnail('standardTeaser').html({imgAttributes: {class: 'img-fluid'}}) | raw }}
        {% endif %}

    {% endif %}

        <div class=\"card-body\">
            <h4 class=\"card-title pricing-card-title text-uppercase\">{{ news.title }}</h4>
            <p class=\"card-text\">
                {{ news.shortText }}
            </p>
            <p>
                <a href=\"{{ detailLink }}\" class=\"btn btn-lg btn-secondary\">{{ 'general.read-more' | trans }}</a>
            </p>
        </div>
    </a>
</div>", "news/news_teaser.html.twig", "/var/www/html/EcommerceProject/ecom/templates/news/news_teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 9);
        static $filters = array("escape" => 7, "raw" => 13, "trans" => 24);
        static $functions = array("app_news_detaillink" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw', 'trans'],
                ['app_news_detaillink']
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
