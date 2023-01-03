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

/* content/car_submit_success.html.twig */
class __TwigTemplate_6d723aaf37bb1a47f9807e75036ef903 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/car_submit_success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/car_submit_success.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "content/car_submit_success.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div id=\"main-content\" class=\"main-content mb-5\">

        <div class=\"page-header\">
            <h1 class=\"display-2 text-center\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.thank-you-car-submit"), "html", null, true);
        echo "</h1>
        </div>

        <p class=\"text-center text-muted small mb-5\">";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.thank-you-car-submit.txt");
        echo "</p>

        <div class=\"mb-5 d-flex justify-content-center\">
            <div class=\"card col-md-8\">
                <div class=\"card-body\">

                    <h6>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.car-details"), "html", null, true);
        echo "</h6>

                    <dl class=\"item-property\">
                        <dd>
                            <strong>
                                ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.name"), "html", null, true);
        echo "
                            </strong>
                            ";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
                        </dd>
                    </dl>

                    <dl class=\"item-property\">
                        <dd>
                            <strong>
                                ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.description"), "html", null, true);
        echo "
                            </strong>
                            ";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
                        </dd>
                    </dl>

                    <dl class=\"item-property\">
                        <dd>
                            <strong>
                                ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.manufacturer"), "html", null, true);
        echo "
                            </strong>
                            ";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 43, $this->source); })()), "manufacturer", [], "any", false, false, true, 43), "name", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "
                        </dd>
                    </dl>

                    <dl class=\"item-property\">
                        <dd>
                            <strong>
                                ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.body-style"), "html", null, true);
        echo "
                            </strong>
                            ";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 52, $this->source); })()), "bodyStyle", [], "any", false, false, true, 52), "name", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
                        </dd>
                    </dl>


                    <dl class=\"item-property\">
                        <dd>
                            <strong>
                                ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.car-class"), "html", null, true);
        echo "
                            </strong>
                            ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("attribute." . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 62, $this->source); })()), "carClass", [], "any", false, false, true, 62), 62, $this->source)))), "html", null, true);
        echo "
                        </dd>
                    </dl>

                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "content/car_submit_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  159 => 60,  148 => 52,  143 => 50,  133 => 43,  128 => 41,  118 => 34,  113 => 32,  103 => 25,  98 => 23,  90 => 18,  81 => 12,  75 => 9,  70 => 6,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}
{# @var news \\Pimcore\\Model\\DataObject\\Car #}


{% block content %}
    <div id=\"main-content\" class=\"main-content mb-5\">

        <div class=\"page-header\">
            <h1 class=\"display-2 text-center\">{{ 'general.thank-you-car-submit' | trans }}</h1>
        </div>

        <p class=\"text-center text-muted small mb-5\">{{ 'general.thank-you-car-submit.txt' | trans | raw }}</p>

        <div class=\"mb-5 d-flex justify-content-center\">
            <div class=\"card col-md-8\">
                <div class=\"card-body\">

                    <h6>{{ 'general.car-details' | trans }}</h6>

                    <dl class=\"item-property\">
                        <dd>
                            <strong>
                                {{ 'general.name' | trans }}
                            </strong>
                            {{ car.name }}
                        </dd>
                    </dl>

                    <dl class=\"item-property\">
                        <dd>
                            <strong>
                                {{ 'general.description' | trans }}
                            </strong>
                            {{ car.description }}
                        </dd>
                    </dl>

                    <dl class=\"item-property\">
                        <dd>
                            <strong>
                                {{ 'general.manufacturer' | trans }}
                            </strong>
                            {{ car.manufacturer.name }}
                        </dd>
                    </dl>

                    <dl class=\"item-property\">
                        <dd>
                            <strong>
                                {{ 'general.body-style' | trans }}
                            </strong>
                            {{ car.bodyStyle.name }}
                        </dd>
                    </dl>


                    <dl class=\"item-property\">
                        <dd>
                            <strong>
                                {{ 'general.car-class' | trans }}
                            </strong>
                            {{ ('attribute.' ~ car.carClass) | lower | trans}}
                        </dd>
                    </dl>

                </div>
            </div>
        </div>
    </div>

{% endblock %}", "content/car_submit_success.html.twig", "/var/www/html/EcommerceProject/ecom/templates/content/car_submit_success.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 9, "trans" => 9, "raw" => 12, "lower" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans', 'raw', 'lower'],
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
