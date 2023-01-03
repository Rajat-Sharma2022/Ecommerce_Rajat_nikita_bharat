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

/* areas/print-product-table/view.html.twig */
class __TwigTemplate_00994831cb6c307724efba97683a8184 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-product-table/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-product-table/view.html.twig"));

        // line 1
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "
    <h3>";
            // line 3
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
            echo "</h3>
    <p>";
            // line 4
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "textarea", "headtext");
            echo "</p>

    ";
            // line 6
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "outputchanneltable", "tableconfig", ["disableClassSelection" => false, "disableFavoriteOutputChannel" => true]);
            // line 11
            echo "

";
        } else {
            // line 14
            echo "
    <div class=\"headline\">
        <h2>";
            // line 16
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
            echo "</h2>
    </div>

    <p>";
            // line 19
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "textarea", "headtext");
            echo "</p>


    ";
            // line 22
            $context["configArray"] = $this->extensions['Web2PrintToolsBundle\Twig\OutputChannelExtension']->buildOutputDataConfig($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "outputchanneltable", "tableconfig"), "getOutputChannel", [], "method", false, false, true, 22), 22, $this->source));
            // line 23
            echo "    <table class=\"outputchannel\">
        ";
            // line 25
            $this->loadTemplate("areas/print-product-table/spec_attribute/column-attribute-table.html.twig", "areas/print-product-table/view.html.twig", 25)->display(twig_array_merge($context, ["configArray" =>             // line 26
(isset($context["configArray"]) || array_key_exists("configArray", $context) ? $context["configArray"] : (function () { throw new RuntimeError('Variable "configArray" does not exist.', 26, $this->source); })()), "classname" => ("Pimcore\\Model\\DataObject\\" . twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "outputchanneltable", "tableconfig"), "selectedClass", [], "any", false, false, true, 27)), "elements" => $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "outputchanneltable", "tableconfig"), "thumbnailName" => "print_image_small"]));
            // line 32
            echo "    </table>

";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/print-product-table/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  88 => 26,  87 => 25,  84 => 23,  82 => 22,  76 => 19,  70 => 16,  66 => 14,  61 => 11,  59 => 6,  54 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if editmode %}

    <h3>{{ pimcore_input('headline') }}</h3>
    <p>{{ pimcore_textarea('headtext') }}</p>

    {{
        pimcore_outputchanneltable('tableconfig', {
            'disableClassSelection': false,
            'disableFavoriteOutputChannel': true
        })
    }}

{%  else %}

    <div class=\"headline\">
        <h2>{{ pimcore_input('headline') }}</h2>
    </div>

    <p>{{ pimcore_textarea('headtext') }}</p>


    {% set configArray = output_channel_build_output_data_config(pimcore_outputchanneltable('tableconfig').getOutputChannel()) %}
    <table class=\"outputchannel\">
        {%
            include 'areas/print-product-table/spec_attribute/column-attribute-table.html.twig' with {
                'configArray': configArray,
                'classname': (\"Pimcore\\\\Model\\\\DataObject\\\\\" ~ pimcore_outputchanneltable('tableconfig').selectedClass),
                'elements': pimcore_outputchanneltable('tableconfig'),
                'thumbnailName': 'print_image_small'
            }
        %}
    </table>

{% endif %}", "areas/print-product-table/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/print-product-table/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 22, "include" => 25);
        static $filters = array();
        static $functions = array("pimcore_input" => 3, "pimcore_textarea" => 4, "pimcore_outputchanneltable" => 7, "output_channel_build_output_data_config" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                [],
                ['pimcore_input', 'pimcore_textarea', 'pimcore_outputchanneltable', 'output_channel_build_output_data_config']
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
