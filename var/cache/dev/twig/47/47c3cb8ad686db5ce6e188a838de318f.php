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

/* includes/content-headline.html.twig */
class __TwigTemplate_bb15fe76cb5f96c2a21819396cb274b4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/content-headline.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/content-headline.html.twig"));

        // line 1
        $context["headline"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
        // line 2
        $this->env->getFunction('pimcore_head_title')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["headline"]) || array_key_exists("headline", $context) ? $context["headline"] : (function () { throw new RuntimeError('Variable "headline" does not exist.', 2, $this->source); })()), "getData", [], "method", false, false, true, 2));
        // line 3
        echo "
<div class=\"page-header\">
    ";
        // line 6
        echo "    <h1>";
        echo $this->sandbox->ensureToStringAllowed((isset($context["headline"]) || array_key_exists("headline", $context) ? $context["headline"] : (function () { throw new RuntimeError('Variable "headline" does not exist.', 6, $this->source); })()), 6, $this->source);
        echo "</h1>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "includes/content-headline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set headline = pimcore_input('headline') %}
{% do pimcore_head_title(headline.getData()) %}

<div class=\"page-header\">
    {# we need to pipe the editable through the raw filter here as we saved it to a variable #}
    <h1>{{ headline|raw }}</h1>
</div>
", "includes/content-headline.html.twig", "/var/www/html/EcommerceProject/ecom/templates/includes/content-headline.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "do" => 2);
        static $filters = array("raw" => 6);
        static $functions = array("pimcore_input" => 1, "pimcore_head_title" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'do'],
                ['raw'],
                ['pimcore_input', 'pimcore_head_title']
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
