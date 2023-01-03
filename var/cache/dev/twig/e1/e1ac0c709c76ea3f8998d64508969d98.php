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

/* product/filters/multi_relation.html.twig */
class __TwigTemplate_23cede61abfd42ae04ab4b73ed8df220 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/multi_relation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/multi_relation.html.twig"));

        // line 1
        if (( !twig_test_empty((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 1, $this->source); })())) && (twig_length_filter($this->env, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 1, $this->source); })())) > 0))) {
            // line 2
            echo "
    ";
            // line 3
            $context["sortedValues"] = $this->extensions['App\Twig\Extension\GeneralFilterExtension']->sortObjects($this->sandbox->ensureToStringAllowed((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 3, $this->source); })()), 3, $this->source), "name", $this->sandbox->ensureToStringAllowed((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 3, $this->source); })()), 3, $this->source));
            // line 4
            echo "    <div class=\"filter pb-3\">
        <h6 class=\"mb-0\">";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("general.filter." . $this->sandbox->ensureToStringAllowed((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 5, $this->source); })()), 5, $this->source)))), "html", null, true);
            echo "</h6>

        <ul id=\"listgroup-";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 7, $this->source); })()), 7, $this->source), "html", null, true);
            echo "\" class=\"list-group\">

            ";
            // line 9
            $context["index"] = 0;
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sortedValues"]) || array_key_exists("sortedValues", $context) ? $context["sortedValues"] : (function () { throw new RuntimeError('Variable "sortedValues" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 11
                echo "
                ";
                // line 12
                $context["object"] = twig_get_attribute($this->env, $this->source, (isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 12, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 12), [], "array", false, false, true, 12);
                // line 13
                echo "
                ";
                // line 14
                if (((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 14, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 14, $this->source); })()), "published", [], "any", false, false, true, 14))) {
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
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
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
                    echo "
                ";
                }
                // line 39
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
            ";
            // line 42
            if (((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 42, $this->source); })()) > 8)) {
                // line 43
                echo "                </div>
            ";
            }
            // line 45
            echo "        </ul>


    </div>

";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/filters/multi_relation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 45,  168 => 43,  166 => 42,  163 => 41,  156 => 39,  152 => 37,  150 => 36,  144 => 33,  138 => 30,  134 => 29,  124 => 28,  118 => 25,  115 => 24,  113 => 23,  110 => 22,  101 => 20,  96 => 18,  87 => 17,  85 => 16,  82 => 15,  80 => 14,  77 => 13,  75 => 12,  72 => 11,  67 => 10,  65 => 9,  60 => 7,  55 => 5,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  if(values is not empty and values|length > 0) %}

    {% set sortedValues = app_general_filter_sort_objects(values, 'name', objects)  %}
    <div class=\"filter pb-3\">
        <h6 class=\"mb-0\">{{ ('general.filter.' ~ label)|lower|trans }}</h6>

        <ul id=\"listgroup-{{ fieldname }}\" class=\"list-group\">

            {% set index = 0 %}
            {% for value in sortedValues %}

                {% set object = objects[value['value']] %}

                {%  if (object and object.published)  %}

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
                                {{ object.name }}
                            </label>
                        </div>
                        <span class=\"badge badge-primary badge-pill\">{{  value['count']  }}</span>
                    </li>

                    {% set index = index + 1 %}

                {% endif %}

            {% endfor %}

            {% if(index > 8) %}
                </div>
            {% endif %}
        </ul>


    </div>

{% endif %}", "product/filters/multi_relation.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/filters/multi_relation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 3, "for" => 10);
        static $filters = array("length" => 1, "escape" => 5, "trans" => 5, "lower" => 5);
        static $functions = array("app_general_filter_sort_objects" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['length', 'escape', 'trans', 'lower'],
                ['app_general_filter_sort_objects']
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
