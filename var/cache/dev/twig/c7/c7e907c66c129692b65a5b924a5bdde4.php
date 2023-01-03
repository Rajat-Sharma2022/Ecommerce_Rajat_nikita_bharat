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

/* areas/print-product-table/spec_attribute/column-attribute-table.html.twig */
class __TwigTemplate_2bf3afe663f7c58cf25e4d88f26a4860 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-product-table/spec_attribute/column-attribute-table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-product-table/spec_attribute/column-attribute-table.html.twig"));

        // line 1
        $context["levels"] = $this->extensions['Web2PrintToolsBundle\Twig\OutputChannelExtension']->getMaxGroupDepth($this->sandbox->ensureToStringAllowed((isset($context["configArray"]) || array_key_exists("configArray", $context) ? $context["configArray"] : (function () { throw new RuntimeError('Variable "configArray" does not exist.', 1, $this->source); })()), 1, $this->source));
        // line 2
        echo "
<thead>
    ";
        // line 5
        $this->loadTemplate("areas/print-product-table/spec_attribute/column-attribute-table-header.html.twig", "areas/print-product-table/spec_attribute/column-attribute-table.html.twig", 5)->display(twig_array_merge($context, ["configArray" =>         // line 6
(isset($context["configArray"]) || array_key_exists("configArray", $context) ? $context["configArray"] : (function () { throw new RuntimeError('Variable "configArray" does not exist.', 6, $this->source); })()), "classname" =>         // line 7
(isset($context["classname"]) || array_key_exists("classname", $context) ? $context["classname"] : (function () { throw new RuntimeError('Variable "classname" does not exist.', 7, $this->source); })()), "levels" =>         // line 8
(isset($context["levels"]) || array_key_exists("levels", $context) ? $context["levels"] : (function () { throw new RuntimeError('Variable "levels" does not exist.', 8, $this->source); })()), "currentLevel" => 0]));
        // line 12
        echo "</thead>

<tbody>
    ";
        // line 16
        $this->loadTemplate("areas/print-product-table/spec_attribute/column-attribute-table-values.html.twig", "areas/print-product-table/spec_attribute/column-attribute-table.html.twig", 16)->display(twig_array_merge($context, ["configArray" =>         // line 17
(isset($context["configArray"]) || array_key_exists("configArray", $context) ? $context["configArray"] : (function () { throw new RuntimeError('Variable "configArray" does not exist.', 17, $this->source); })()), "elements" =>         // line 18
(isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 18, $this->source); })()), "thumbnailName" =>         // line 19
(isset($context["thumbnailName"]) || array_key_exists("thumbnailName", $context) ? $context["thumbnailName"] : (function () { throw new RuntimeError('Variable "thumbnailName" does not exist.', 19, $this->source); })())]));
        // line 22
        echo "</tbody>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/print-product-table/spec_attribute/column-attribute-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  64 => 19,  63 => 18,  62 => 17,  61 => 16,  56 => 12,  54 => 8,  53 => 7,  52 => 6,  51 => 5,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set levels = output_channel_max_group_depth(configArray) %}

<thead>
    {%
        include 'areas/print-product-table/spec_attribute/column-attribute-table-header.html.twig' with {
            'configArray': configArray,
            'classname': classname,
            'levels': levels,
            'currentLevel': 0
        }
    %}
</thead>

<tbody>
    {%
        include 'areas/print-product-table/spec_attribute/column-attribute-table-values.html.twig' with {
        'configArray': configArray,
        'elements': elements,
        'thumbnailName': thumbnailName
    }
    %}
</tbody>
", "areas/print-product-table/spec_attribute/column-attribute-table.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/print-product-table/spec_attribute/column-attribute-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "include" => 5);
        static $filters = array();
        static $functions = array("output_channel_max_group_depth" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                [],
                ['output_channel_max_group_depth']
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
