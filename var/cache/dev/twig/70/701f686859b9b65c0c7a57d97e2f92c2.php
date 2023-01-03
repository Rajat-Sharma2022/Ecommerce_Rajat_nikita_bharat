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

/* @PimcoreEcommerceFramework/Tracking/analytics/enhanced/track_event.js.twig */
class __TwigTemplate_54051633bcb2c6764b68238fdaaa86f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/Tracking/analytics/enhanced/track_event.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/Tracking/analytics/enhanced/track_event.js.twig"));

        // line 1
        echo "ga('send', 'event', ";
        echo json_encode($this->sandbox->ensureToStringAllowed((isset($context["eventCategory"]) || array_key_exists("eventCategory", $context) ? $context["eventCategory"] : (function () { throw new RuntimeError('Variable "eventCategory" does not exist.', 1, $this->source); })()), 1, $this->source));
        echo ", ";
        echo json_encode($this->sandbox->ensureToStringAllowed((isset($context["eventAction"]) || array_key_exists("eventAction", $context) ? $context["eventAction"] : (function () { throw new RuntimeError('Variable "eventAction" does not exist.', 1, $this->source); })()), 1, $this->source));
        echo ", ";
        echo json_encode($this->sandbox->ensureToStringAllowed((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 1, $this->source); })()), 1, $this->source));
        echo ", ";
        echo json_encode($this->sandbox->ensureToStringAllowed((isset($context["eventValue"]) || array_key_exists("eventValue", $context) ? $context["eventValue"] : (function () { throw new RuntimeError('Variable "eventValue" does not exist.', 1, $this->source); })()), 1, $this->source));
        echo ");
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/Tracking/analytics/enhanced/track_event.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("ga('send', 'event', {{ eventCategory|json_encode|raw }}, {{ eventAction|json_encode|raw }}, {{ eventLabel|json_encode|raw }}, {{ eventValue|json_encode|raw }});
", "@PimcoreEcommerceFramework/Tracking/analytics/enhanced/track_event.js.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/Tracking/analytics/enhanced/track_event.js.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("raw" => 1, "json_encode" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw', 'json_encode'],
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
