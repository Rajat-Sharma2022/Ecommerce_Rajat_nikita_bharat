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

/* areas/product-grid/view.html.twig */
class __TwigTemplate_dca594a804098f8b80fe129e8710687b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/product-grid/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/product-grid/view.html.twig"));

        // line 1
        $context["filterDefinitionObject"] = (isset($context["filterDefinitionObject"]) || array_key_exists("filterDefinitionObject", $context) ? $context["filterDefinitionObject"] : (function () { throw new RuntimeError('Variable "filterDefinitionObject" does not exist.', 1, $this->source); })());
        // line 2
        $context["params"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, true, 2), "query", [], "any", false, false, true, 2), "all", [], "any", false, false, true, 2);
        // line 3
        echo "
";
        // line 4
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "    <div class=\"span3\">
    </div>
    <div class=\"span9\">
        <h2>ProductFilter Object</h2>

        <div>
            ";
            // line 11
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "relation", "productFilter", ["types" => [0 => "object"], "subtypes" => ["object" => [0 => "object"]], "classes" => [0 => "FilterDefinition"]]);
            // line 17
            echo "
        </div>
    </div>

    <div style=\"clear: both\"></div>
";
        }
        // line 23
        echo "
";
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "relation", "productFilter"), "isEmpty", [], "method", false, false, true, 24)) {
            // line 25
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProductController::listingAction", twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 25, $this->source); })()), 25, $this->source), ["filterdefinition" => (isset($context["filterDefinitionObject"]) || array_key_exists("filterDefinitionObject", $context) ? $context["filterDefinitionObject"] : (function () { throw new RuntimeError('Variable "filterDefinitionObject" does not exist.', 25, $this->source); })()), "noLayout" => true])));
            echo "
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/product-grid/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  75 => 24,  72 => 23,  64 => 17,  62 => 11,  54 => 5,  52 => 4,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set filterDefinitionObject = filterDefinitionObject %}
{% set params = app.request.query.all %}

{% if editmode %}
    <div class=\"span3\">
    </div>
    <div class=\"span9\">
        <h2>ProductFilter Object</h2>

        <div>
            {{ pimcore_relation(\"productFilter\",{
                \"types\": [\"object\"],
                \"subtypes\": {
                    \"object\": [\"object\"],
                },
                \"classes\": [\"FilterDefinition\"]
            }) }}
        </div>
    </div>

    <div style=\"clear: both\"></div>
{% endif %}

{% if not pimcore_relation(\"productFilter\").isEmpty() %}
    {{ render(controller('App\\\\Controller\\\\ProductController::listingAction', params | merge({\"filterdefinition\": filterDefinitionObject, \"noLayout\": true}))) }}
{% endif %}", "areas/product-grid/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/product-grid/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 4);
        static $filters = array("merge" => 25);
        static $functions = array("pimcore_relation" => 11, "render" => 25, "controller" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge'],
                ['pimcore_relation', 'render', 'controller']
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
