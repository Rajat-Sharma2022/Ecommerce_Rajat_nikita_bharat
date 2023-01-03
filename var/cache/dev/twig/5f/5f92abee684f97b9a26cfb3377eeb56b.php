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

/* @PimcoreEcommerceFramework/Tracking/analytics/universal/checkout_complete.js.twig */
class __TwigTemplate_0ed27ae593e91702edce8bdba8243f0a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/Tracking/analytics/universal/checkout_complete.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/Tracking/analytics/universal/checkout_complete.js.twig"));

        // line 1
        echo "ga('require', 'ecommerce', 'ecommerce.js');

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calls"]) || array_key_exists("calls", $context) ? $context["calls"] : (function () { throw new RuntimeError('Variable "calls" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["call"] => $context["callData"]) {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["callData"]);
            foreach ($context['_seq'] as $context["_key"] => $context["cd"]) {
                // line 5
                echo "ga('";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["call"], 5, $this->source), "js", null, true);
                echo "', ";
                echo json_encode($this->sandbox->ensureToStringAllowed($context["cd"], 5, $this->source));
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['call'], $context['callData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
ga('ecommerce:send');
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/Tracking/analytics/universal/checkout_complete.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  57 => 5,  53 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("ga('require', 'ecommerce', 'ecommerce.js');

{% for call, callData in calls %}
{% for cd in callData %}
ga('{{ call }}', {{ cd|json_encode|raw }});
{% endfor %}
{% endfor %}

ga('ecommerce:send');
", "@PimcoreEcommerceFramework/Tracking/analytics/universal/checkout_complete.js.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/Tracking/analytics/universal/checkout_complete.js.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3);
        static $filters = array("escape" => 5, "raw" => 5, "json_encode" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'raw', 'json_encode'],
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
