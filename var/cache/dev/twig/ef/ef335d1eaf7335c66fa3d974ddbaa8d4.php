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

/* product/filters/multi_select.html.twig */
class __TwigTemplate_be11bb633e51b8ad022a5bb75296cec7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/multi_select.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/multi_select.html.twig"));

        // line 1
        if (( !twig_test_empty((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 1, $this->source); })())) && (twig_length_filter($this->env, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 1, $this->source); })())) > 0))) {
            // line 2
            echo "
    ";
            // line 3
            $context["translatedValues"] = $this->extensions['App\Twig\Extension\GeneralFilterExtension']->translateValues($this->sandbox->ensureToStringAllowed((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 3, $this->source); })()), 3, $this->source));
            // line 4
            echo "    ";
            $context["sortedValues"] = $this->extensions['App\Twig\Extension\GeneralFilterExtension']->sort($this->sandbox->ensureToStringAllowed((isset($context["translatedValues"]) || array_key_exists("translatedValues", $context) ? $context["translatedValues"] : (function () { throw new RuntimeError('Variable "translatedValues" does not exist.', 4, $this->source); })()), 4, $this->source), "translated");
            // line 5
            echo "
    <div class=\"filter pb-3\">
        <h6 class=\"mb-0\">";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("general.filter." . $this->sandbox->ensureToStringAllowed((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 7, $this->source); })()), 7, $this->source)))), "html", null, true);
            echo "</h6>

        <ul id=\"listgroup-";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 9, $this->source); })()), 9, $this->source), "html", null, true);
            echo "\" class=\"list-group\">

            ";
            // line 11
            $context["index"] = 0;
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sortedValues"]) || array_key_exists("sortedValues", $context) ? $context["sortedValues"] : (function () { throw new RuntimeError('Variable "sortedValues" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 13
                echo "
                ";
                // line 14
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 14))) {
                    // line 15
                    echo "
                    ";
                    // line 16
                    if (((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 16, $this->source); })()) == 8)) {
                        // line 17
                        echo "                        <a href=\"#\" id=\"head-hidden-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 17, $this->source); })()), 17, $this->source), "html", null, true);
                        echo "\" class=\"collapsed text-dark hide-me pt-1 text-center\" data-toggle=\"collapse\" data-target=\"#hidden-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 17, $this->source); })()), 17, $this->source), "html", null, true);
                        echo "\" aria-expanded=\"false\" aria-controls=\"hidden-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 17, $this->source); })()), 17, $this->source), "html", null, true);
                        echo "\">
                            ";
                        // line 18
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.show-more"), "html", null, true);
                        echo "
                        </a>
                        <div id=\"hidden-";
                        // line 20
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 20, $this->source); })()), 20, $this->source), "html", null, true);
                        echo "\" class=\"collapse\" aria-labelledby=\"head-hidden-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 20, $this->source); })()), 20, $this->source), "html", null, true);
                        echo "\" data-parent=\"#listgroup-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 20, $this->source); })()), 20, $this->source), "html", null, true);
                        echo "\">
                    ";
                    }
                    // line 22
                    echo "
                    ";
                    // line 23
                    $context["checked"] = twig_in_filter(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 23), (isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 23, $this->source); })()));
                    // line 24
                    echo "
                    <li class=\"list-group-item d-flex justify-content-between align-items-center ";
                    // line 25
                    echo (((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 25, $this->source); })())) ? ("list-group-item-secondary") : (""));
                    echo "\">

                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" id=\"";
                    // line 28
                    echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 28, $this->source); })()), 28, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 28), 28, $this->source)), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 28, $this->source); })()), 28, $this->source), "html", null, true);
                    echo "[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 28), 28, $this->source), "html", null, true);
                    echo "\" ";
                    echo (((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 28, $this->source); })())) ? ("checked=\"checked\"") : (""));
                    echo " class=\"custom-control-input\">
                            <label class=\"custom-control-label\" for=\"";
                    // line 29
                    echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 29, $this->source); })()), 29, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 29), 29, $this->source)), "html", null, true);
                    echo "\">
                                ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "translated", [], "array", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo "
                            </label>
                        </div>
                        <span class=\"badge badge-primary badge-pill\">";
                    // line 33
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "count", [], "array", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo "</span>
                    </li>

                    ";
                    // line 36
                    $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 36, $this->source); })()) + 1);
                    // line 37
                    echo "                ";
                }
                // line 38
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
            ";
            // line 41
            if (((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 41, $this->source); })()) > 8)) {
                // line 42
                echo "                </div>
            ";
            }
            // line 44
            echo "
    </ul>


    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/filters/multi_select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 44,  166 => 42,  164 => 41,  161 => 40,  154 => 38,  151 => 37,  149 => 36,  143 => 33,  137 => 30,  133 => 29,  123 => 28,  117 => 25,  114 => 24,  112 => 23,  109 => 22,  100 => 20,  95 => 18,  86 => 17,  84 => 16,  81 => 15,  79 => 14,  76 => 13,  71 => 12,  69 => 11,  64 => 9,  59 => 7,  55 => 5,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  if(values is not empty and values|length > 0) %}

    {% set translatedValues = app_general_filter_translate(values) %}
    {% set sortedValues = app_general_filter_sort(translatedValues, 'translated')  %}

    <div class=\"filter pb-3\">
        <h6 class=\"mb-0\">{{ ('general.filter.' ~ label)|lower|trans }}</h6>

        <ul id=\"listgroup-{{ fieldname }}\" class=\"list-group\">

            {% set index = 0 %}
            {% for value in sortedValues %}

                {% if(value['value'] is not empty) %}

                    {% if(index == 8) %}
                        <a href=\"#\" id=\"head-hidden-{{ fieldname }}\" class=\"collapsed text-dark hide-me pt-1 text-center\" data-toggle=\"collapse\" data-target=\"#hidden-{{ fieldname }}\" aria-expanded=\"false\" aria-controls=\"hidden-{{ fieldname}}\">
                            {{ 'filter.show-more' | trans }}
                        </a>
                        <div id=\"hidden-{{ fieldname }}\" class=\"collapse\" aria-labelledby=\"head-hidden-{{ fieldname }}\" data-parent=\"#listgroup-{{ fieldname }}\">
                    {% endif %}

                    {% set checked = (value['value'] in currentValue) %}

                    <li class=\"list-group-item d-flex justify-content-between align-items-center {{ checked ? 'list-group-item-secondary' : ''  }}\">

                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" id=\"{{ fieldname ~ value['value'] }}\" name=\"{{  fieldname }}[]\" value=\"{{ value['value'] }}\" {{ checked ? 'checked=\"checked\"' : ''  }} class=\"custom-control-input\">
                            <label class=\"custom-control-label\" for=\"{{ fieldname ~ value['value'] }}\">
                                {{ value['translated'] }}
                            </label>
                        </div>
                        <span class=\"badge badge-primary badge-pill\">{{  value['count']  }}</span>
                    </li>

                    {% set index = index + 1 %}
                {%  endif %}

            {% endfor %}

            {% if(index > 8) %}
                </div>
            {% endif %}

    </ul>


    </div>
{% endif %}", "product/filters/multi_select.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/filters/multi_select.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 3, "for" => 12);
        static $filters = array("length" => 1, "escape" => 7, "trans" => 7, "lower" => 7);
        static $functions = array("app_general_filter_translate" => 3, "app_general_filter_sort" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['length', 'escape', 'trans', 'lower'],
                ['app_general_filter_translate', 'app_general_filter_sort']
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
