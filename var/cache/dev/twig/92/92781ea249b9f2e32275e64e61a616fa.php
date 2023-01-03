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

/* product/filters/object_relation.html.twig */
class __TwigTemplate_dd93f31496b5a6d4cb3443d42c1d95cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/object_relation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/object_relation.html.twig"));

        // line 1
        if (( !twig_test_empty((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 1, $this->source); })())) && (twig_length_filter($this->env, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 1, $this->source); })())) > 0))) {
            // line 2
            echo "
    ";
            // line 3
            $context["sortedValues"] = $this->extensions['App\Twig\Extension\GeneralFilterExtension']->sortObjects($this->sandbox->ensureToStringAllowed((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 3, $this->source); })()), 3, $this->source), "name", $this->sandbox->ensureToStringAllowed((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 3, $this->source); })()), 3, $this->source));
            // line 4
            echo "
    <div class=\"filter pb-3\">
        <h6 class=\"mb-0\">";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("general.filter." . $this->sandbox->ensureToStringAllowed((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 6, $this->source); })()), 6, $this->source)))), "html", null, true);
            echo "</h6>

        <ul id=\"listgroup-";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 8, $this->source); })()), 8, $this->source), "html", null, true);
            echo "\" class=\"list-group\">

            ";
            // line 10
            if ( !twig_test_empty((isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 10, $this->source); })()))) {
                // line 11
                echo "
                <li class=\"list-group-item\">

                    <div class=\"custom-control custom-radio\">
                        <input type=\"radio\" id=\"";
                // line 15
                echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 15, $this->source); })()), 15, $this->source) . "empty"), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 15, $this->source); })()), 15, $this->source), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_constant("\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\AbstractFilterType::EMPTY_STRING"), "html", null, true);
                echo "\" class=\"custom-control-input\">
                        <label class=\"custom-control-label\" for=\"";
                // line 16
                echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 16, $this->source); })()), 16, $this->source) . "empty"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filters.all"), "html", null, true);
                echo "</label>
                    </div>

                </li>

            ";
            }
            // line 22
            echo "
            ";
            // line 23
            $context["index"] = 0;
            // line 24
            echo "
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sortedValues"]) || array_key_exists("sortedValues", $context) ? $context["sortedValues"] : (function () { throw new RuntimeError('Variable "sortedValues" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 26
                echo "
                ";
                // line 27
                if (((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 27, $this->source); })()) == 8)) {
                    // line 28
                    echo "                    <a href=\"#\" id=\"head-hidden-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 28, $this->source); })()), 28, $this->source), "html", null, true);
                    echo "\" class=\"collapsed text-dark hide-me pt-1 text-center\" data-toggle=\"collapse\" data-target=\"#hidden-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 28, $this->source); })()), 28, $this->source), "html", null, true);
                    echo "\" aria-expanded=\"false\" aria-controls=\"hidden-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 28, $this->source); })()), 28, $this->source), "html", null, true);
                    echo "\">
                        ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.show-more"), "html", null, true);
                    echo "
                    </a>
                    <div id=\"hidden-";
                    // line 31
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 31, $this->source); })()), 31, $this->source), "html", null, true);
                    echo "\" class=\"collapse\" aria-labelledby=\"head-hidden-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 31, $this->source); })()), 31, $this->source), "html", null, true);
                    echo "\" data-parent=\"#listgroup-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 31, $this->source); })()), 31, $this->source), "html", null, true);
                    echo "\">
                ";
                }
                // line 33
                echo "
                ";
                // line 34
                $context["object"] = twig_get_attribute($this->env, $this->source, (isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 34, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 34), [], "array", false, false, true, 34);
                // line 35
                echo "
                ";
                // line 36
                if (twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 36, $this->source); })()), "published", [], "any", false, false, true, 36)) {
                    // line 37
                    echo "
                    ";
                    // line 38
                    $context["checked"] = ((isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 38, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 38));
                    // line 39
                    echo "
                    <li class=\"list-group-item d-flex justify-content-between align-items-center ";
                    // line 40
                    echo (((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 40, $this->source); })())) ? ("list-group-item-secondary") : (""));
                    echo "\">

                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" id=\"";
                    // line 43
                    echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 43, $this->source); })()), 43, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 43), 43, $this->source)), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 43, $this->source); })()), 43, $this->source), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "\" ";
                    echo (((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 43, $this->source); })())) ? ("checked=\"checked\"") : (""));
                    echo " class=\"custom-control-input\">
                            <label class=\"custom-control-label\" for=\"";
                    // line 44
                    echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 44, $this->source); })()), 44, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 44), 44, $this->source)), "html", null, true);
                    echo "\">
                                ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                    echo "
                            </label>
                        </div>
                        <span class=\"badge badge-primary badge-pill\">";
                    // line 48
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "count", [], "array", false, false, true, 48), 48, $this->source), "html", null, true);
                    echo "</span>
                    </li>

                ";
                }
                // line 52
                echo "                ";
                $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 52, $this->source); })()) + 1);
                // line 53
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
            ";
            // line 55
            if (((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 55, $this->source); })()) > 8)) {
                // line 56
                echo "                </div>
            ";
            }
            // line 58
            echo "        </ul>


    </div>

";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/filters/object_relation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 58,  198 => 56,  196 => 55,  193 => 54,  187 => 53,  184 => 52,  177 => 48,  171 => 45,  167 => 44,  157 => 43,  151 => 40,  148 => 39,  146 => 38,  143 => 37,  141 => 36,  138 => 35,  136 => 34,  133 => 33,  124 => 31,  119 => 29,  110 => 28,  108 => 27,  105 => 26,  101 => 25,  98 => 24,  96 => 23,  93 => 22,  82 => 16,  74 => 15,  68 => 11,  66 => 10,  61 => 8,  56 => 6,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  if(values is not empty and values|length > 0) %}

    {% set sortedValues = app_general_filter_sort_objects(values, 'name', objects)  %}

    <div class=\"filter pb-3\">
        <h6 class=\"mb-0\">{{ ('general.filter.' ~ label)|lower|trans }}</h6>

        <ul id=\"listgroup-{{ fieldname }}\" class=\"list-group\">

            {%  if(currentValue is not empty) %}

                <li class=\"list-group-item\">

                    <div class=\"custom-control custom-radio\">
                        <input type=\"radio\" id=\"{{ fieldname ~ 'empty' }}\" name=\"{{  fieldname }}\" value=\"{{ constant('\\\\Pimcore\\\\Bundle\\\\EcommerceFrameworkBundle\\\\FilterService\\\\FilterType\\\\AbstractFilterType::EMPTY_STRING') }}\" class=\"custom-control-input\">
                        <label class=\"custom-control-label\" for=\"{{ fieldname ~ 'empty' }}\">{{ 'general.filters.all' | trans }}</label>
                    </div>

                </li>

            {%  endif %}

            {% set index = 0 %}

            {% for value in sortedValues %}

                {% if(index == 8) %}
                    <a href=\"#\" id=\"head-hidden-{{ fieldname }}\" class=\"collapsed text-dark hide-me pt-1 text-center\" data-toggle=\"collapse\" data-target=\"#hidden-{{ fieldname }}\" aria-expanded=\"false\" aria-controls=\"hidden-{{ fieldname}}\">
                        {{ 'filter.show-more' | trans }}
                    </a>
                    <div id=\"hidden-{{ fieldname }}\" class=\"collapse\" aria-labelledby=\"head-hidden-{{ fieldname }}\" data-parent=\"#listgroup-{{ fieldname }}\">
                {% endif %}

                {% set object = objects[value['value']] %}

                {%  if (object.published)  %}

                    {% set checked = currentValue == value['value'] %}

                    <li class=\"list-group-item d-flex justify-content-between align-items-center {{ checked ? 'list-group-item-secondary' : ''  }}\">

                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" id=\"{{ fieldname ~ value['value'] }}\" name=\"{{  fieldname }}\" value=\"{{ value['value'] }}\" {{ checked ? 'checked=\"checked\"' : ''  }} class=\"custom-control-input\">
                            <label class=\"custom-control-label\" for=\"{{ fieldname ~ value['value'] }}\">
                                {{ object.name }}
                            </label>
                        </div>
                        <span class=\"badge badge-primary badge-pill\">{{  value['count']  }}</span>
                    </li>

                {% endif %}
                {% set index = index + 1 %}
            {% endfor %}

            {% if(index > 8) %}
                </div>
            {% endif %}
        </ul>


    </div>

{% endif %}", "product/filters/object_relation.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/filters/object_relation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 3, "for" => 25);
        static $filters = array("length" => 1, "escape" => 6, "trans" => 6, "lower" => 6);
        static $functions = array("app_general_filter_sort_objects" => 3, "constant" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['length', 'escape', 'trans', 'lower'],
                ['app_general_filter_sort_objects', 'constant']
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
