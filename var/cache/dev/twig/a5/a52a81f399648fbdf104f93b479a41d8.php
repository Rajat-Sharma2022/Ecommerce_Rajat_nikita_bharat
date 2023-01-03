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

/* @HWIOAuth/Connect/registration.html.twig */
class __TwigTemplate_ceea0a4c00d592b98b2f2dfd60adfe88 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'hwi_oauth_content' => [$this, 'block_hwi_oauth_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@HWIOAuth/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@HWIOAuth/Connect/registration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@HWIOAuth/Connect/registration.html.twig"));

        $this->parent = $this->loadTemplate("@HWIOAuth/layout.html.twig", "@HWIOAuth/Connect/registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.register", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["userInformation"]) || array_key_exists("userInformation", $context) ? $context["userInformation"] : (function () { throw new RuntimeError('Variable "userInformation" does not exist.', 4, $this->source); })()), "realName", [], "any", false, false, true, 4)], "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"span6\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 7, $this->source), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_connect_registration", ["key" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 7, $this->source); })())]), "attr" => ["class" => "hwi_oauth_registration_register"]]);
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 8, $this->source), 'widget');
        echo "
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connect.registration.submit", [], "HWIOAuthBundle"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_connect");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connect.registration.cancel", [], "HWIOAuthBundle"), "html", null, true);
        echo "</a>
                </div>
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 13, $this->source), 'form_end');
        echo "
        </div>
        <div class=\"span6\">
            ";
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["userInformation"]) || array_key_exists("userInformation", $context) ? $context["userInformation"] : (function () { throw new RuntimeError('Variable "userInformation" does not exist.', 16, $this->source); })()), "profilePicture", [], "any", false, false, true, 16))) {
            // line 17
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["userInformation"]) || array_key_exists("userInformation", $context) ? $context["userInformation"] : (function () { throw new RuntimeError('Variable "userInformation" does not exist.', 17, $this->source); })()), "profilePicture", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\" />
            ";
        }
        // line 19
        echo "        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@HWIOAuth/Connect/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 19,  105 => 17,  103 => 16,  97 => 13,  90 => 11,  86 => 10,  81 => 8,  77 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@HWIOAuth/layout.html.twig' %}

{% block hwi_oauth_content %}
    <h3>{{ 'header.register' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>
    <div class=\"row\">
        <div class=\"span6\">
            {{ form_start(form, {'action': path('hwi_oauth_connect_registration', {'key': key}), 'attr': {'class': 'hwi_oauth_registration_register'}}) }}
                {{ form_widget(form) }}
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">{{ 'connect.registration.submit'|trans({}, 'HWIOAuthBundle') }}</button>
                    <a href=\"{{ path('hwi_oauth_connect') }}\" class=\"btn\">{{ 'connect.registration.cancel' | trans({}, 'HWIOAuthBundle') }}</a>
                </div>
            {{ form_end(form) }}
        </div>
        <div class=\"span6\">
            {% if userInformation.profilePicture is not empty %}
                <img src=\"{{ userInformation.profilePicture }}\" />
            {% endif %}
        </div>
    </div>

{% endblock hwi_oauth_content %}
", "@HWIOAuth/Connect/registration.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/hwi/oauth-bundle/Resources/views/Connect/registration.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("escape" => 4, "trans" => 4);
        static $functions = array("form_start" => 7, "path" => 7, "form_widget" => 8, "form_end" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trans'],
                ['form_start', 'path', 'form_widget', 'form_end']
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
