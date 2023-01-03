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

/* areas/print-product-table/spec_attribute/column-attribute-table-header.html.twig */
class __TwigTemplate_fbc1bacfe5c5e4ae16d0028deb8c0cc6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-product-table/spec_attribute/column-attribute-table-header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-product-table/spec_attribute/column-attribute-table-header.html.twig"));

        // line 1
        echo "<tr>

    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configArray"]) || array_key_exists("configArray", $context) ? $context["configArray"] : (function () { throw new RuntimeError('Variable "configArray" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["configElement"]) {
            // line 4
            echo "
        ";
            // line 5
            if ($this->env->getTest('instanceof')->getCallable()($context["configElement"], "\\OutputDataConfigToolkitBundle\\ConfigElement\\Operator\\Group")) {
                // line 6
                echo "
            <td class=\"super-header\" colspan=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["configElement"], "childs", [], "any", false, false, true, 7), 7, $this->source)), "html", null, true);
                echo "\">
                ";
                // line 8
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["configElement"], "label", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "
            </td>

        ";
            } else {
                // line 12
                echo "            <td class=\"";
                echo ((((isset($context["currentLevel"]) || array_key_exists("currentLevel", $context) ? $context["currentLevel"] : (function () { throw new RuntimeError('Variable "currentLevel" does not exist.', 12, $this->source); })()) > 0)) ? ("sub-header") : (""));
                echo "\" rowspan=\"";
                echo twig_escape_filter($this->env, ((isset($context["levels"]) || array_key_exists("levels", $context) ? $context["levels"] : (function () { throw new RuntimeError('Variable "levels" does not exist.', 12, $this->source); })()) - (isset($context["currentLevel"]) || array_key_exists("currentLevel", $context) ? $context["currentLevel"] : (function () { throw new RuntimeError('Variable "currentLevel" does not exist.', 12, $this->source); })())), "html", null, true);
                echo "\">
                ";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Web2PrintToolsBundle\Twig\OutputChannelExtension']->getColumnHeader($this->sandbox->ensureToStringAllowed($context["configElement"], 13, $this->source), $this->sandbox->ensureToStringAllowed((isset($context["classname"]) || array_key_exists("classname", $context) ? $context["classname"] : (function () { throw new RuntimeError('Variable "classname" does not exist.', 13, $this->source); })()), 13, $this->source)), "html", null, true);
                echo "
            </td>
        ";
            }
            // line 16
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configElement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
</tr>


";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configArray"]) || array_key_exists("configArray", $context) ? $context["configArray"] : (function () { throw new RuntimeError('Variable "configArray" does not exist.', 23, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["configElement"]) {
            // line 24
            echo "
    ";
            // line 25
            if ($this->env->getTest('instanceof')->getCallable()($context["configElement"], "\\OutputDataConfigToolkitBundle\\ConfigElement\\Operator\\Group")) {
                // line 26
                echo "
        ";
                // line 28
                $this->loadTemplate("areas/print-product-table/spec_attribute/column-attribute-table-header.html.twig", "areas/print-product-table/spec_attribute/column-attribute-table-header.html.twig", 28)->display(twig_array_merge($context, ["configArray" => twig_get_attribute($this->env, $this->source,                 // line 29
$context["configElement"], "childs", [], "any", false, false, true, 29), "classname" =>                 // line 30
(isset($context["classname"]) || array_key_exists("classname", $context) ? $context["classname"] : (function () { throw new RuntimeError('Variable "classname" does not exist.', 30, $this->source); })()), "levels" =>                 // line 31
(isset($context["levels"]) || array_key_exists("levels", $context) ? $context["levels"] : (function () { throw new RuntimeError('Variable "levels" does not exist.', 31, $this->source); })()), "currentLevel" => (                // line 32
(isset($context["currentLevel"]) || array_key_exists("currentLevel", $context) ? $context["currentLevel"] : (function () { throw new RuntimeError('Variable "currentLevel" does not exist.', 32, $this->source); })()) + 1)]));
                // line 35
                echo "
    ";
            }
            // line 37
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configElement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/print-product-table/spec_attribute/column-attribute-table-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 37,  129 => 35,  127 => 32,  126 => 31,  125 => 30,  124 => 29,  123 => 28,  120 => 26,  118 => 25,  115 => 24,  98 => 23,  92 => 18,  85 => 16,  79 => 13,  72 => 12,  65 => 8,  61 => 7,  58 => 6,  56 => 5,  53 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>

    {% for configElement in configArray %}

        {% if configElement is instanceof('\\\\OutputDataConfigToolkitBundle\\\\ConfigElement\\\\Operator\\\\Group') %}

            <td class=\"super-header\" colspan=\"{{ configElement.childs | length }}\">
                {{ configElement.label }}
            </td>

        {% else %}
            <td class=\"{{ currentLevel > 0 ? 'sub-header' : '' }}\" rowspan=\"{{ levels - currentLevel }}\">
                {{ output_channel_column_header(configElement, classname) }}
            </td>
        {% endif %}

    {% endfor %}

</tr>


{# for sub groups add additional row to header #}
{% for configElement in configArray %}

    {% if configElement is instanceof('\\\\OutputDataConfigToolkitBundle\\\\ConfigElement\\\\Operator\\\\Group') %}

        {%
            include 'areas/print-product-table/spec_attribute/column-attribute-table-header.html.twig' with {
            'configArray': configElement.childs,
            'classname': classname,
            'levels': levels,
            'currentLevel': (currentLevel + 1)
        }
        %}

    {% endif %}

{% endfor %}", "areas/print-product-table/spec_attribute/column-attribute-table-header.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/print-product-table/spec_attribute/column-attribute-table-header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "if" => 5, "include" => 28);
        static $filters = array("escape" => 7, "length" => 7);
        static $functions = array("output_channel_column_header" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'include'],
                ['escape', 'length'],
                ['output_channel_column_header']
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
