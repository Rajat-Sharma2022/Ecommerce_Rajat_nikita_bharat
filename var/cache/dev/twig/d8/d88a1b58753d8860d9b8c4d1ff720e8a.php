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

/* @PimcoreEcommerceFramework/Tracking/analytics/enhanced/checkout_complete.js.twig */
class __TwigTemplate_b5ed97f8b562b12b9cb7acdfeaceb1f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/Tracking/analytics/enhanced/checkout_complete.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/Tracking/analytics/enhanced/checkout_complete.js.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calls"]) || array_key_exists("calls", $context) ? $context["calls"] : (function () { throw new RuntimeError('Variable "calls" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["call"] => $context["callData"]) {
            // line 2
            echo "ga('ec:addProduct', ";
            echo json_encode($this->sandbox->ensureToStringAllowed($context["callData"], 2, $this->source));
            echo ");
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['call'], $context['callData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
ga('ec:setAction', 'purchase', ";
        // line 5
        echo json_encode($this->sandbox->ensureToStringAllowed((isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 5, $this->source); })()), 5, $this->source));
        echo ");
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/Tracking/analytics/enhanced/checkout_complete.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 5,  58 => 4,  49 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for call, callData in calls %}
ga('ec:addProduct', {{ callData|json_encode|raw }});
{% endfor %}

ga('ec:setAction', 'purchase', {{ transaction|json_encode()|raw }});
", "@PimcoreEcommerceFramework/Tracking/analytics/enhanced/checkout_complete.js.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/Tracking/analytics/enhanced/checkout_complete.js.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1);
        static $filters = array("raw" => 2, "json_encode" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
