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

/* account/login.html.twig */
class __TwigTemplate_ec7f64587f4c68dca217eab7641d8246 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/login.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "account/login.html.twig", 1);
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
        echo "
    <div class=\"text-center\">

        <div class=\"form-signin mb-5\">


            ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "getMessage", [], "method", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 17
        echo "
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 18, $this->source), 'form_start');
        echo "
                <h1 class=\"display-3 mb-3 font-weight-normal\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.please-sign-in"), "html", null, true);
        echo "</h1>
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "_username", [], "any", false, false, true, 20), 20, $this->source), 'widget', ["attr" => ["placeholder" => "Username"]]);
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "_password", [], "any", false, false, true, 21), 21, $this->source), 'widget', ["attr" => ["placeholder" => "Password"]]);
        echo "

                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                >

                <div class=\"custom-control custom-checkbox mb-3\">
                    <input name=\"_remember_me\" type=\"checkbox\" class=\"custom-control-input\" id=\"rememberMe\">
                    <label class=\"custom-control-label\" for=\"rememberMe\">Remember me</label>
                </div>

                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "_submit", [], "any", false, false, true, 32), 32, $this->source), 'row', ["attr" => ["class" => "btn-success btn-lg btn-block mt-4"]]);
        echo "

            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 34, $this->source), 'form_end');
        echo "

            <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.forgot-password"), "html", null, true);
        echo " <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account-password-send-recovery");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.password-recovery"), "html", null, true);
        echo "</a></p>
            <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no-account"), "html", null, true);
        echo " <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account-register");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.register-now"), "html", null, true);
        echo "</a></p>


            ";
        // line 40
        $this->loadTemplate("account/partial/social_buttons.html.twig", "account/login.html.twig", 40)->display(twig_array_merge($context, ["connect" => false]));
        // line 41
        echo "

        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 41,  152 => 40,  142 => 37,  134 => 36,  129 => 34,  124 => 32,  113 => 24,  107 => 21,  103 => 20,  99 => 19,  95 => 18,  92 => 17,  86 => 14,  83 => 13,  81 => 12,  73 => 6,  63 => 5,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}


{% block content %}

    <div class=\"text-center\">

        <div class=\"form-signin mb-5\">


            {% if error %}
                <div class=\"alert alert-danger\">
                    {{ error.getMessage() }}
                </div>
            {% endif %}

            {{ form_start(form) }}
                <h1 class=\"display-3 mb-3 font-weight-normal\">{{ 'general.please-sign-in' | trans }}</h1>
                {{ form_widget(form._username, { 'attr': {'placeholder': 'Username'}}) }}
                {{ form_widget(form._password, { 'attr': {'placeholder': 'Password'}}) }}

                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"{{ csrf_token('authenticate') }}\"
                >

                <div class=\"custom-control custom-checkbox mb-3\">
                    <input name=\"_remember_me\" type=\"checkbox\" class=\"custom-control-input\" id=\"rememberMe\">
                    <label class=\"custom-control-label\" for=\"rememberMe\">Remember me</label>
                </div>

                {{ form_row(form._submit, {'attr': {'class': 'btn-success btn-lg btn-block mt-4'}}) }}

            {{ form_end(form) }}

            <p>{{ 'account.forgot-password' | trans }} <a href=\"{{ path('account-password-send-recovery') }}\">{{ 'account.password-recovery' | trans }}</a></p>
            <p>{{ 'general.no-account' | trans }} <a href=\"{{ path('account-register') }}\">{{ 'general.register-now' | trans }}</a></p>


            {% include 'account/partial/social_buttons.html.twig' with {'connect': false} %}


        </div>
    </div>

{% endblock %}", "account/login.html.twig", "/var/www/html/EcommerceProject/ecom/templates/account/login.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 2, "if" => 12, "include" => 40);
        static $filters = array("escape" => 14, "trans" => 19);
        static $functions = array("form_start" => 18, "form_widget" => 20, "csrf_token" => 24, "form_row" => 32, "form_end" => 34, "path" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'if', 'include'],
                ['escape', 'trans'],
                ['form_start', 'form_widget', 'csrf_token', 'form_row', 'form_end', 'path']
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
