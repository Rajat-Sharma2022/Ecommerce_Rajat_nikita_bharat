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

/* account/send_password_recovery_mail.html.twig */
class __TwigTemplate_1ce6746bff402b59e68053184adcd8e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/send_password_recovery_mail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/send_password_recovery_mail.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "account/send_password_recovery_mail.html.twig", 1);
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
    <div class=\"text-center\">

        <div class=\"form-signin mb-5\">

            <form method=\"post\">
                <h1 class=\"display-3 mb-3 font-weight-normal\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.password-recovery"), "html", null, true);
        echo "</h1>
                <input type=\"email\" id=\"email\" name=\"email\" required=\"required\" class=\"form-control\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["emailPrefill"]) || array_key_exists("emailPrefill", $context) ? $context["emailPrefill"] : (function () { throw new RuntimeError('Variable "emailPrefill" does not exist.', 12, $this->source); })()), 12, $this->source), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn-success btn-lg btn-block mt-4 btn\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.send-recovery-mail"), "html", null, true);
        echo "</button>
                </div>

            </form>

        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/send_password_recovery_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 15,  82 => 12,  78 => 11,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}


{% block content %}

    <div class=\"text-center\">

        <div class=\"form-signin mb-5\">

            <form method=\"post\">
                <h1 class=\"display-3 mb-3 font-weight-normal\">{{ 'account.password-recovery' | trans }}</h1>
                <input type=\"email\" id=\"email\" name=\"email\" required=\"required\" class=\"form-control\" value=\"{{ emailPrefill }}\" />

                <div class=\"form-group\">
                    <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn-success btn-lg btn-block mt-4 btn\">{{ 'account.send-recovery-mail' | trans }}</button>
                </div>

            </form>

        </div>
    </div>

{% endblock %}", "account/send_password_recovery_mail.html.twig", "/var/www/html/EcommerceProject/ecom/templates/account/send_password_recovery_mail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 11, "trans" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
