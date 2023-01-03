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

/* areas/headlines/view.html.twig */
class __TwigTemplate_6898485f9c29610d93618bfd128ca0ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/headlines/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/headlines/view.html.twig"));

        // line 1
        $context["headline"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline", ["placeholder" => "Heading"]);
        // line 2
        $context["lead"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "lead", ["height" => 100, "placeholder" => "Lead Text"]);
        // line 6
        echo "
";
        // line 7
        if (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 7, $this->source); })()) ||  !twig_get_attribute($this->env, $this->source, (isset($context["headline"]) || array_key_exists("headline", $context) ? $context["headline"] : (function () { throw new RuntimeError('Variable "headline" does not exist.', 7, $this->source); })()), "isEmpty", [], "method", false, false, true, 7))) {
            // line 8
            echo "    <div class=\"page-header\">
        <h2>";
            // line 9
            echo $this->sandbox->ensureToStringAllowed((isset($context["headline"]) || array_key_exists("headline", $context) ? $context["headline"] : (function () { throw new RuntimeError('Variable "headline" does not exist.', 9, $this->source); })()), 9, $this->source);
            echo "</h2>
    </div>
";
        }
        // line 12
        echo "
";
        // line 13
        if (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 13, $this->source); })()) ||  !twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 13, $this->source); })()), "isEmpty", [], "method", false, false, true, 13))) {
            // line 14
            echo "    <div class=\"lead\">
        ";
            // line 15
            echo $this->sandbox->ensureToStringAllowed((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 15, $this->source); })()), 15, $this->source);
            echo "
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/headlines/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  68 => 14,  66 => 13,  63 => 12,  57 => 9,  54 => 8,  52 => 7,  49 => 6,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set headline = pimcore_input('headline', {'placeholder': 'Heading'}) %}
{% set lead = pimcore_wysiwyg('lead', {
    height: 100,
    'placeholder': 'Lead Text'
}) %}

{% if editmode or not headline.isEmpty() %}
    <div class=\"page-header\">
        <h2>{{ headline|raw }}</h2>
    </div>
{% endif %}

{% if editmode or not lead.isEmpty() %}
    <div class=\"lead\">
        {{ lead|raw }}
    </div>
{% endif %}", "areas/headlines/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/headlines/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 7);
        static $filters = array("raw" => 9);
        static $functions = array("pimcore_input" => 1, "pimcore_wysiwyg" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['raw'],
                ['pimcore_input', 'pimcore_wysiwyg']
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
