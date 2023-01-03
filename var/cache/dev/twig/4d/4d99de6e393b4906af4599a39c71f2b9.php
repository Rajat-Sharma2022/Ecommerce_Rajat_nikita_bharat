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

/* product/filters/select.html.twig */
class __TwigTemplate_a199302a0d66c8a92a79b34c75d03412 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/select.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/select.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (( !twig_test_empty((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 2, $this->source); })())) && (twig_length_filter($this->env, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 2, $this->source); })())) > 0))) {
            // line 3
            echo "
    ";
            // line 4
            $context["translatedValues"] = $this->extensions['App\Twig\Extension\GeneralFilterExtension']->translateValues($this->sandbox->ensureToStringAllowed((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 4, $this->source); })()), 4, $this->source));
            // line 5
            echo "    ";
            $context["sortedValues"] = $this->extensions['App\Twig\Extension\GeneralFilterExtension']->sort($this->sandbox->ensureToStringAllowed((isset($context["translatedValues"]) || array_key_exists("translatedValues", $context) ? $context["translatedValues"] : (function () { throw new RuntimeError('Variable "translatedValues" does not exist.', 5, $this->source); })()), 5, $this->source), "translated");
            // line 6
            echo "
    <div class=\"filter pb-3\">
        <h6 class=\"mb-0\">";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("general.filter." . $this->sandbox->ensureToStringAllowed((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 8, $this->source); })()), 8, $this->source)))), "html", null, true);
            echo "</h6>

        <ul id=\"listgroup-";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 10, $this->source); })()), 10, $this->source), "html", null, true);
            echo "\" class=\"list-group\">

            ";
            // line 12
            if ( !twig_test_empty((isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 12, $this->source); })()))) {
                // line 13
                echo "
                <li class=\"list-group-item\">

                    <div class=\"custom-control custom-radio\">
                        <input type=\"radio\" id=\"";
                // line 17
                echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 17, $this->source); })()), 17, $this->source) . "empty"), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 17, $this->source); })()), 17, $this->source), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_constant("\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\AbstractFilterType::EMPTY_STRING"), "html", null, true);
                echo "\" class=\"custom-control-input\">
                        <label class=\"custom-control-label\" for=\"";
                // line 18
                echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 18, $this->source); })()), 18, $this->source) . "empty"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filters.all"), "html", null, true);
                echo "</label>
                    </div>

                </li>

            ";
            }
            // line 24
            echo "
            ";
            // line 25
            $context["index"] = 0;
            // line 26
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sortedValues"]) || array_key_exists("sortedValues", $context) ? $context["sortedValues"] : (function () { throw new RuntimeError('Variable "sortedValues" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 27
                echo "
                ";
                // line 28
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 28))) {
                    // line 29
                    echo "
                    ";
                    // line 30
                    if (((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 30, $this->source); })()) == 8)) {
                        // line 31
                        echo "                        <a href=\"#\" id=\"head-hidden-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 31, $this->source); })()), 31, $this->source), "html", null, true);
                        echo "\" class=\"collapsed text-dark hide-me pt-1 text-center\" data-toggle=\"collapse\" data-target=\"#hidden-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 31, $this->source); })()), 31, $this->source), "html", null, true);
                        echo "\" aria-expanded=\"false\" aria-controls=\"hidden-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 31, $this->source); })()), 31, $this->source), "html", null, true);
                        echo "\">
                            ";
                        // line 32
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.show-more"), "html", null, true);
                        echo "
                        </a>
                        <div id=\"hidden-";
                        // line 34
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 34, $this->source); })()), 34, $this->source), "html", null, true);
                        echo "\" class=\"collapse\" aria-labelledby=\"head-hidden-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 34, $this->source); })()), 34, $this->source), "html", null, true);
                        echo "\" data-parent=\"#listgroup-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 34, $this->source); })()), 34, $this->source), "html", null, true);
                        echo "\">
                    ";
                    }
                    // line 36
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
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "translated", [], "array", false, false, true, 45), 45, $this->source), "html", null, true);
                    echo "
                            </label>
                        </div>
                        <span class=\"badge badge-primary badge-pill\">";
                    // line 48
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "count", [], "array", false, false, true, 48), 48, $this->source), "html", null, true);
                    echo "</span>
                    </li>

                    ";
                    // line 51
                    $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 51, $this->source); })()) + 1);
                    // line 52
                    echo "                ";
                }
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
        return "product/filters/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 58,  199 => 56,  197 => 55,  194 => 54,  188 => 53,  185 => 52,  183 => 51,  177 => 48,  171 => 45,  167 => 44,  157 => 43,  151 => 40,  148 => 39,  146 => 38,  142 => 36,  133 => 34,  128 => 32,  119 => 31,  117 => 30,  114 => 29,  112 => 28,  109 => 27,  104 => 26,  102 => 25,  99 => 24,  88 => 18,  80 => 17,  74 => 13,  72 => 12,  67 => 10,  62 => 8,  58 => 6,  55 => 5,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{%  if(values is not empty and values|length > 0) %}

    {% set translatedValues = app_general_filter_translate(values) %}
    {% set sortedValues = app_general_filter_sort(translatedValues, 'translated')  %}

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

            {% endif %}

            {% set index = 0 %}
            {% for value in sortedValues %}

                {% if(value['value'] is not empty) %}

                    {% if(index == 8) %}
                        <a href=\"#\" id=\"head-hidden-{{ fieldname }}\" class=\"collapsed text-dark hide-me pt-1 text-center\" data-toggle=\"collapse\" data-target=\"#hidden-{{ fieldname }}\" aria-expanded=\"false\" aria-controls=\"hidden-{{ fieldname}}\">
                            {{ 'filter.show-more' | trans }}
                        </a>
                        <div id=\"hidden-{{ fieldname }}\" class=\"collapse\" aria-labelledby=\"head-hidden-{{ fieldname }}\" data-parent=\"#listgroup-{{ fieldname }}\">
                    {% endif %}


                    {% set checked = currentValue == value['value'] %}

                    <li class=\"list-group-item d-flex justify-content-between align-items-center {{ checked ? 'list-group-item-secondary' : ''  }}\">

                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" id=\"{{ fieldname ~ value['value'] }}\" name=\"{{  fieldname }}\" value=\"{{ value['value'] }}\" {{ checked ? 'checked=\"checked\"' : ''  }} class=\"custom-control-input\">
                            <label class=\"custom-control-label\" for=\"{{ fieldname ~ value['value'] }}\">
                                {{ value['translated'] }}
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

{% endif %}", "product/filters/select.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/filters/select.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "set" => 4, "for" => 26);
        static $filters = array("length" => 2, "escape" => 8, "trans" => 8, "lower" => 8);
        static $functions = array("app_general_filter_translate" => 4, "app_general_filter_sort" => 5, "constant" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['length', 'escape', 'trans', 'lower'],
                ['app_general_filter_translate', 'app_general_filter_sort', 'constant']
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
