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

/* account/partial/social_buttons.html.twig */
class __TwigTemplate_ae584ff5447653220c2452b53af403d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/partial/social_buttons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/partial/social_buttons.html.twig"));

        // line 1
        $context["providers"] = [0 => "google", 1 => "twitter"];
        // line 2
        $context["blacklist"] = ((array_key_exists("blacklist", $context)) ? ((isset($context["blacklist"]) || array_key_exists("blacklist", $context) ? $context["blacklist"] : (function () { throw new RuntimeError('Variable "blacklist" does not exist.', 2, $this->source); })())) : ([]));
        // line 3
        $context["route"] = ((array_key_exists("route", $context)) ? ((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 3, $this->source); })())) : ("hwi_oauth_service_redirect"));
        // line 4
        $context["connect"] = ((array_key_exists("connect", $context)) ? ((isset($context["connect"]) || array_key_exists("connect", $context) ? $context["connect"] : (function () { throw new RuntimeError('Variable "connect" does not exist.', 4, $this->source); })())) : (false));
        // line 5
        echo "
";
        // line 6
        $context["translationKey"] = (((isset($context["connect"]) || array_key_exists("connect", $context) ? $context["connect"] : (function () { throw new RuntimeError('Variable "connect" does not exist.', 6, $this->source); })())) ? ("general.connect-to") : ("general.sign-in-with"));
        // line 7
        echo "

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new RuntimeError('Variable "providers" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 10
            echo "
    ";
            // line 11
            if ( !twig_in_filter($context["provider"], (isset($context["blacklist"]) || array_key_exists("blacklist", $context) ? $context["blacklist"] : (function () { throw new RuntimeError('Variable "blacklist" does not exist.', 11, $this->source); })()))) {
                // line 12
                echo "
        <a class=\"btn btn-secondary btn-sm\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 13, $this->source); })()), 13, $this->source), ["service" => $context["provider"]]), "html", null, true);
                echo "\">
            <i class=\"fab fa-";
                // line 14
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["provider"], 14, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
            ";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed((isset($context["translationKey"]) || array_key_exists("translationKey", $context) ? $context["translationKey"] : (function () { throw new RuntimeError('Variable "translationKey" does not exist.', 15, $this->source); })()), 15, $this->source), [0 => $context["provider"]]), "html", null, true);
                echo "
        </a>

    ";
            }
            // line 19
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "account/partial/social_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  82 => 15,  78 => 14,  74 => 13,  71 => 12,  69 => 11,  66 => 10,  62 => 9,  58 => 7,  56 => 6,  53 => 5,  51 => 4,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set providers = ['google', 'twitter'] %}
{% set blacklist = blacklist is defined ? blacklist : [] %}
{% set route = route is defined ? route : 'hwi_oauth_service_redirect' %}
{% set connect = connect is defined ? connect : false %}

{% set translationKey = connect ? 'general.connect-to' : 'general.sign-in-with' %}


{% for provider in providers %}

    {% if(not (provider in blacklist)) %}

        <a class=\"btn btn-secondary btn-sm\" href=\"{{ path(route, {service: provider}) }}\">
            <i class=\"fab fa-{{ provider }}\" aria-hidden=\"true\"></i>
            {{ translationKey | trans([provider]) }}
        </a>

    {% endif %}

{% endfor %}
", "account/partial/social_buttons.html.twig", "/var/www/html/EcommerceProject/ecom/templates/account/partial/social_buttons.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 9, "if" => 11);
        static $filters = array("escape" => 13, "trans" => 15);
        static $functions = array("path" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans'],
                ['path']
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
