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

/* areas/print-product-table/spec_attribute/column-attribute-table-values.html.twig */
class __TwigTemplate_ccd668f550d2594b5c73e2d6681fa7c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-product-table/spec_attribute/column-attribute-table-values.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-product-table/spec_attribute/column-attribute-table-values.html.twig"));

        // line 1
        $context["count"] = 0;
        // line 2
        $context["totalCount"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["configArray"]) || array_key_exists("configArray", $context) ? $context["configArray"] : (function () { throw new RuntimeError('Variable "configArray" does not exist.', 2, $this->source); })()), 2, $this->source));
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 4, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 5
            echo "
    ";
            // line 6
            $context["printRowEnd"] = false;
            // line 7
            echo "    ";
            if (( !array_key_exists("subgroup", $context) || ((isset($context["subgroup"]) || array_key_exists("subgroup", $context) ? $context["subgroup"] : (function () { throw new RuntimeError('Variable "subgroup" does not exist.', 7, $this->source); })()) == 0))) {
                // line 8
                echo "        <tr class=\"";
                echo (((((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 8, $this->source); })()) % 2) == 0)) ? ("even") : (""));
                echo "\">
        ";
                // line 9
                $context["subgroup"] = 0;
                // line 10
                echo "        ";
                $context["printRowEnd"] = true;
                // line 11
                echo "    ";
            }
            // line 12
            echo "
            ";
            // line 13
            $context["isFirstColumn"] = true;
            // line 14
            echo "
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["configArray"]) || array_key_exists("configArray", $context) ? $context["configArray"] : (function () { throw new RuntimeError('Variable "configArray" does not exist.', 15, $this->source); })()));
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
                // line 16
                echo "
                ";
                // line 17
                if ($this->env->getTest('instanceof')->getCallable()($context["configElement"], "\\OutputDataConfigToolkitBundle\\ConfigElement\\Operator\\Group")) {
                    // line 18
                    echo "
                    ";
                    // line 20
                    $this->loadTemplate("areas/print-product-table/spec_attribute/column-attribute-table-values.html.twig", "areas/print-product-table/spec_attribute/column-attribute-table-values.html.twig", 20)->display(twig_array_merge($context, ["configArray" => twig_get_attribute($this->env, $this->source,                     // line 21
$context["configElement"], "childs", [], "any", false, false, true, 21), "elements" => [0 =>                     // line 22
$context["element"]], "subgroup" => (                    // line 23
(isset($context["subgroup"]) || array_key_exists("subgroup", $context) ? $context["subgroup"] : (function () { throw new RuntimeError('Variable "subgroup" does not exist.', 23, $this->source); })()) + 1)]));
                    // line 26
                    echo "
                ";
                } else {
                    // line 28
                    echo "
                    ";
                    // line 29
                    if ($this->env->getTest('instanceof')->getCallable()($context["element"], "\\Web2PrintToolsBundle\\Model\\Document\\Tag\\Outputchanneltable\\MetaEntry\\Defaultentry")) {
                        // line 30
                        echo "
                        ";
                        // line 31
                        if (twig_get_attribute($this->env, $this->source, $context["element"], "span", [], "any", false, false, true, 31)) {
                            // line 32
                            echo "                            ";
                            if (((isset($context["isFirstColumn"]) || array_key_exists("isFirstColumn", $context) ? $context["isFirstColumn"] : (function () { throw new RuntimeError('Variable "isFirstColumn" does not exist.', 32, $this->source); })()) && ((isset($context["subgroup"]) || array_key_exists("subgroup", $context) ? $context["subgroup"] : (function () { throw new RuntimeError('Variable "subgroup" does not exist.', 32, $this->source); })()) == 0))) {
                                // line 33
                                echo "                                <td class=\"metaentry\" colspan=\"";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 33, $this->source); })()), 33, $this->source), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["element"], "value", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                                echo "</td>
                            ";
                            }
                            // line 35
                            echo "                        ";
                        } else {
                            // line 36
                            echo "                            <td class=\"metaentry\">";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["element"], "value", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                            echo "</td>
                        ";
                        }
                        // line 38
                        echo "
                    ";
                    } elseif ($this->env->getTest('instanceof')->getCallable()(                    // line 39
$context["element"], "\\Web2PrintToolsBundle\\Model\\Document\\Tag\\Outputchanneltable\\MetaEntry\\Table")) {
                        // line 40
                        echo "
                        ";
                        // line 41
                        if (((isset($context["isFirstColumn"]) || array_key_exists("isFirstColumn", $context) ? $context["isFirstColumn"] : (function () { throw new RuntimeError('Variable "isFirstColumn" does not exist.', 41, $this->source); })()) &&  !(isset($context["subgroup"]) || array_key_exists("subgroup", $context) ? $context["subgroup"] : (function () { throw new RuntimeError('Variable "subgroup" does not exist.', 41, $this->source); })()))) {
                            // line 42
                            echo "                            ";
                            twig_get_attribute($this->env, $this->source, $context["element"], "resetNextValue", [], "method", false, false, true, 42);
                            // line 43
                            echo "                        ";
                        }
                        // line 44
                        echo "
                        ";
                        // line 45
                        $context["value"] = twig_get_attribute($this->env, $this->source, $context["element"], "nextValue", [], "any", false, false, true, 45);
                        // line 46
                        echo "
                        ";
                        // line 47
                        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 47, $this->source); })())) {
                            // line 48
                            echo "                            <td colspan=\"";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 48, $this->source); })()), "span", [], "array", false, false, true, 48), 48, $this->source), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 48, $this->source); })()), "value", [], "array", false, false, true, 48), 48, $this->source), "html", null, true);
                            echo "</td>
                        ";
                        }
                        // line 50
                        echo "
                    ";
                    } else {
                        // line 52
                        echo "
                        <td>
                            ";
                        // line 54
                        $context["outputElement"] = twig_get_attribute($this->env, $this->source, $context["configElement"], "getLabeledValue", [0 => $context["element"]], "method", false, false, true, 54);
                        // line 55
                        echo "                            ";
                        echo $this->extensions['App\Twig\Extension\PrintCatalogExtension']->getSpecValue($this->sandbox->ensureToStringAllowed((isset($context["outputElement"]) || array_key_exists("outputElement", $context) ? $context["outputElement"] : (function () { throw new RuntimeError('Variable "outputElement" does not exist.', 55, $this->source); })()), 55, $this->source), $this->sandbox->ensureToStringAllowed((isset($context["thumbnailName"]) || array_key_exists("thumbnailName", $context) ? $context["thumbnailName"] : (function () { throw new RuntimeError('Variable "thumbnailName" does not exist.', 55, $this->source); })()), 55, $this->source));
                        echo "
                        </td>

                    ";
                    }
                    // line 59
                    echo "
                ";
                }
                // line 61
                echo "
                ";
                // line 62
                $context["isFirstColumn"] = false;
                // line 63
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
            // line 65
            echo "
    ";
            // line 66
            if ((isset($context["printRowEnd"]) || array_key_exists("printRowEnd", $context) ? $context["printRowEnd"] : (function () { throw new RuntimeError('Variable "printRowEnd" does not exist.', 66, $this->source); })())) {
                // line 67
                echo "        </tr>
        ";
                // line 68
                $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 68, $this->source); })()) + 1);
                // line 69
                echo "    ";
            }
            // line 70
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/print-product-table/spec_attribute/column-attribute-table-values.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 70,  248 => 69,  246 => 68,  243 => 67,  241 => 66,  238 => 65,  223 => 63,  221 => 62,  218 => 61,  214 => 59,  206 => 55,  204 => 54,  200 => 52,  196 => 50,  188 => 48,  186 => 47,  183 => 46,  181 => 45,  178 => 44,  175 => 43,  172 => 42,  170 => 41,  167 => 40,  165 => 39,  162 => 38,  156 => 36,  153 => 35,  145 => 33,  142 => 32,  140 => 31,  137 => 30,  135 => 29,  132 => 28,  128 => 26,  126 => 23,  125 => 22,  124 => 21,  123 => 20,  120 => 18,  118 => 17,  115 => 16,  98 => 15,  95 => 14,  93 => 13,  90 => 12,  87 => 11,  84 => 10,  82 => 9,  77 => 8,  74 => 7,  72 => 6,  69 => 5,  52 => 4,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set count = 0 %}
{% set totalCount = (configArray | length) %}

{% for element in elements %}

    {% set printRowEnd = false %}
    {% if not subgroup is defined or subgroup == 0 %}
        <tr class=\"{{ (count % 2 == 0) ? 'even' : '' }}\">
        {% set subgroup = 0 %}
        {% set printRowEnd = true %}
    {% endif %}

            {% set isFirstColumn = true %}

            {% for configElement in configArray %}

                {% if configElement is instanceof('\\\\OutputDataConfigToolkitBundle\\\\ConfigElement\\\\Operator\\\\Group') %}

                    {%
                        include 'areas/print-product-table/spec_attribute/column-attribute-table-values.html.twig' with {
                            'configArray': configElement.childs,
                            'elements': [element],
                            'subgroup': (subgroup + 1)
                        }
                    %}

                {% else %}

                    {% if element is instanceof('\\\\Web2PrintToolsBundle\\\\Model\\\\Document\\\\Tag\\\\Outputchanneltable\\\\MetaEntry\\\\Defaultentry') %}

                        {% if element.span %}
                            {% if isFirstColumn and subgroup == 0 %}
                                <td class=\"metaentry\" colspan=\"{{ totalCount }}\">{{ element.value }}</td>
                            {% endif %}
                        {% else %}
                            <td class=\"metaentry\">{{ element.value }}</td>
                        {% endif %}

                    {% elseif element is instanceof('\\\\Web2PrintToolsBundle\\\\Model\\\\Document\\\\Tag\\\\Outputchanneltable\\\\MetaEntry\\\\Table') %}

                        {% if isFirstColumn and not subgroup %}
                            {% do element.resetNextValue() %}
                        {% endif %}

                        {% set value = element.nextValue %}

                        {% if value %}
                            <td colspan=\"{{ value['span'] }}\">{{ value['value'] }}</td>
                        {% endif %}

                    {% else %}

                        <td>
                            {% set outputElement = configElement.getLabeledValue(element) %}
                            {{ app_print_output_spec_value(outputElement, thumbnailName) | raw }}
                        </td>

                    {% endif %}

                {% endif %}

                {% set isFirstColumn = false %}

            {% endfor %}

    {% if printRowEnd %}
        </tr>
        {% set count = count + 1 %}
    {% endif %}


{% endfor %}
", "areas/print-product-table/spec_attribute/column-attribute-table-values.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/print-product-table/spec_attribute/column-attribute-table-values.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 4, "if" => 7, "include" => 20, "do" => 42);
        static $filters = array("length" => 2, "escape" => 33, "raw" => 55);
        static $functions = array("app_print_output_spec_value" => 55);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include', 'do'],
                ['length', 'escape', 'raw'],
                ['app_print_output_spec_value']
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
