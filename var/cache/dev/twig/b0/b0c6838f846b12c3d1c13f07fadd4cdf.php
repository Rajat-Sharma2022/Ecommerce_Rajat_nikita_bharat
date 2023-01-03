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

/* news/email_news_teaser.html.twig */
class __TwigTemplate_36e33bd12b4cc61f201415c1f188b758 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/email_news_teaser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/email_news_teaser.html.twig"));

        // line 2
        echo "
<table class=\"row\">
    <tbody>
    <tr>
        <th class=\"small-12 large-8 columns first\">
            <table>
                <tbody><tr>
                    <th>
                        <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</h2>

                        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 12, $this->source); })()), "shortText", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</p>

                        <p>
                            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["detailLink"]) || array_key_exists("detailLink", $context) ? $context["detailLink"] : (function () { throw new RuntimeError('Variable "detailLink" does not exist.', 15, $this->source); })()), 15, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.read-more"), "html", null, true);
        echo "</a>
                        </p>
                    </th>
                </tr>
                </tbody></table>
        </th>
        <th class=\"small-12 large-4 columns last\">
            <table>
                <tbody>
                <tr>
                    <th>
                        ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 26, $this->source); })()), "gallery", [], "any", false, false, true, 26), "items", [], "any", false, false, true, 26)) {
            // line 27
            echo "                            ";
            $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 27, $this->source); })()), "gallery", [], "any", false, false, true, 27), "current", [], "any", false, false, true, 27);
            // line 28
            echo "
                            ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, true, 29)) {
                // line 30
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 30, $this->source); })()), "image", [], "any", false, false, true, 30), "thumbnail", [0 => "mail_teaser"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "\" class=\"small-float-center\">
                            ";
            }
            // line 32
            echo "
                        ";
        }
        // line 34
        echo "
                    </th>
                </tr>
                </tbody>
            </table>
        </th>
    </tr>
    </tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "news/email_news_teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  98 => 32,  92 => 30,  90 => 29,  87 => 28,  84 => 27,  82 => 26,  66 => 15,  60 => 12,  55 => 10,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var news \\Pimcore\\Model\\DataObject\\News #}

<table class=\"row\">
    <tbody>
    <tr>
        <th class=\"small-12 large-8 columns first\">
            <table>
                <tbody><tr>
                    <th>
                        <h2>{{ news.title }}</h2>

                        <p>{{ news.shortText }}</p>

                        <p>
                            <a href=\"{{ detailLink }}\">{{ 'general.read-more' | trans }}</a>
                        </p>
                    </th>
                </tr>
                </tbody></table>
        </th>
        <th class=\"small-12 large-4 columns last\">
            <table>
                <tbody>
                <tr>
                    <th>
                        {% if news.gallery.items %}
                            {% set image = news.gallery.current %}

                            {% if image.image %}
                                <img src=\"{{ image.image.thumbnail('mail_teaser') }}\" class=\"small-float-center\">
                            {% endif %}

                        {% endif %}

                    </th>
                </tr>
                </tbody>
            </table>
        </th>
    </tr>
    </tbody>
</table>
", "news/email_news_teaser.html.twig", "/var/www/html/EcommerceProject/ecom/templates/news/email_news_teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26, "set" => 27);
        static $filters = array("escape" => 10, "trans" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
