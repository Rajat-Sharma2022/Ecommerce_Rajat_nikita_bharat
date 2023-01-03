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

/* checkout/checkout_address.html.twig */
class __TwigTemplate_82f91812c6941d8a97f8998854d32031 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/checkout_address.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/checkout_address.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "checkout/checkout_address.html.twig", 1);
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
    <div class=\"py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-8\">
                    <h4 class=\"mb-3\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.billing-address"), "html", null, true);
        echo "</h4>

                    ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, true, 15)) {
            // line 16
            echo "                        <div class=\"mb-5\">
                            ";
            // line 17
            $this->loadTemplate("account/partial/social_buttons.html.twig", "checkout/checkout_address.html.twig", 17)->display(twig_array_merge($context, ["connect" => false]));
            // line 18
            echo "                        </div>
                    ";
        }
        // line 20
        echo "
                    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 21, $this->source), 'form_start');
        echo "

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "firstname", [], "any", false, false, true, 25), 25, $this->source), 'row');
        echo "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "lastname", [], "any", false, false, true, 28), 28, $this->source), 'row');
        echo "
                            </div>
                        </div>
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, true, 31), 31, $this->source), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "company", [], "any", false, false, true, 32), 32, $this->source), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "street", [], "any", false, false, true, 33), 33, $this->source), 'row');
        echo "

                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "zip", [], "any", false, false, true, 37), 37, $this->source), 'row');
        echo "
                            </div>
                            <div class=\"col-md-8\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "city", [], "any", false, false, true, 40), 40, $this->source), 'row');
        echo "
                            </div>
                        </div>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "countryCode", [], "any", false, false, true, 43), 43, $this->source), 'row');
        echo "

                        <hr/>

                    <div class=\"form-group\">
                        ";
        // line 48
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "terms", [], "any", false, false, true, 48), "setRendered", [], "any", false, false, true, 48);
        // line 49
        echo "                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" id=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "terms", [], "any", false, false, true, 50), "vars", [], "any", false, false, true, 50), "id", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "terms", [], "any", false, false, true, 50), "vars", [], "any", false, false, true, 50), "name", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "\" ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "terms", [], "any", false, false, true, 50), "vars", [], "any", false, false, true, 50), "required", [], "any", false, false, true, 50)) ? ("required=\"required\"") : (""));
        echo " class=\"custom-control-input\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "terms", [], "any", false, false, true, 50), "vars", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "\">
                            <label class=\"checkbox-custom custom-control-label ";
        // line 51
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "terms", [], "any", false, false, true, 51), "vars", [], "any", false, false, true, 51), "required", [], "any", false, false, true, 51)) ? ("required") : (""));
        echo "\" for=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "terms", [], "any", false, false, true, 51), "vars", [], "any", false, false, true, 51), "id", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "\">
                                ";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.terms", [0 => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 52, $this->source); })()), "getProperty", [0 => "terms_and_conditions"], "method", false, false, true, 52)]);
        echo "
                            </label>
                        </div>
                    </div>

";
        // line 58
        echo "
";
        // line 60
        echo "
                        <hr/>

                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "_submit", [], "any", false, false, true, 63), 63, $this->source), 'row', ["attr" => ["class" => "btn-success btn-lg btn-block"]]);
        echo "

                    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 65, $this->source), 'form_end');
        echo "

                </div>
                <div class=\"col-md-4 mb-4 mt-5 mt-md-0\">
                    ";
        // line 69
        $this->loadTemplate("cart/shared/order_summary.html.twig", "checkout/checkout_address.html.twig", 69)->display($context);
        // line 70
        echo "                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "checkout/checkout_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 70,  204 => 69,  197 => 65,  192 => 63,  187 => 60,  184 => 58,  176 => 52,  170 => 51,  160 => 50,  157 => 49,  155 => 48,  147 => 43,  141 => 40,  135 => 37,  128 => 33,  124 => 32,  120 => 31,  114 => 28,  108 => 25,  101 => 21,  98 => 20,  94 => 18,  92 => 17,  89 => 16,  87 => 15,  82 => 13,  73 => 6,  63 => 5,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}


{% block content %}

    <div class=\"py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-8\">
                    <h4 class=\"mb-3\">{{ 'checkout.billing-address' | trans }}</h4>

                    {% if(not app.user) %}
                        <div class=\"mb-5\">
                            {% include 'account/partial/social_buttons.html.twig' with {'connect': false} %}
                        </div>
                    {% endif %}

                    {{ form_start(form) }}

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                {{ form_row(form.firstname) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(form.lastname) }}
                            </div>
                        </div>
                        {{ form_row(form.email) }}
                        {{ form_row(form.company) }}
                        {{ form_row(form.street) }}

                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                {{ form_row(form.zip) }}
                            </div>
                            <div class=\"col-md-8\">
                                {{ form_row(form.city) }}
                            </div>
                        </div>
                        {{ form_row(form.countryCode) }}

                        <hr/>

                    <div class=\"form-group\">
                        {% do form.terms.setRendered %}
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" id=\"{{ form.terms.vars.id }}\" name=\"{{ form.terms.vars.name }}\" {{ form.terms.vars.required ? 'required=\"required\"' : '' }} class=\"custom-control-input\" value=\"{{ form.terms.vars.value }}\">
                            <label class=\"checkbox-custom custom-control-label {{ form.terms.vars.required ? 'required' : '' }}\" for=\"{{ form.terms.vars.id }}\">
                                {{ 'checkout.terms' | trans([document.getProperty('terms_and_conditions')]) | raw }}
                            </label>
                        </div>
                    </div>

{#                    {{ form_widget(form.terms) }}#}

{#                        {{ form_row(form.terms, {'label': ( 'checkout.terms' | trans([document.getProperty('terms_and_conditions')]) | raw ), label_attr: {class: 'checkbox-custom'} }) }}#}

                        <hr/>

                    {{ form_row(form._submit, {'attr': {'class': 'btn-success btn-lg btn-block'}}) }}

                    {{ form_end(form) }}

                </div>
                <div class=\"col-md-4 mb-4 mt-5 mt-md-0\">
                    {% include 'cart/shared/order_summary.html.twig' %}
                </div>
            </div>

        </div>
    </div>

{% endblock %}


", "checkout/checkout_address.html.twig", "/var/www/html/EcommerceProject/ecom/templates/checkout/checkout_address.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 2, "if" => 15, "include" => 17, "do" => 48);
        static $filters = array("escape" => 13, "trans" => 13, "raw" => 52);
        static $functions = array("form_start" => 21, "form_row" => 25, "form_end" => 65);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'if', 'include', 'do'],
                ['escape', 'trans', 'raw'],
                ['form_start', 'form_row', 'form_end']
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
