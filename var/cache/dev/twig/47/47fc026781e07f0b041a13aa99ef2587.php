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

/* product/filters/nested_attributes.html.twig */
class __TwigTemplate_335f8b02b26841941d8abb467d3e537d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/nested_attributes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/nested_attributes.html.twig"));

        // line 1
        if (( !twig_test_empty((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 1, $this->source); })())) && (twig_length_filter($this->env, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 1, $this->source); })())) > 0))) {
            // line 2
            echo "
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["keyId"] => $context["keyBucket"]) {
                // line 4
                echo "
        ";
                // line 5
                $context["subFieldname"] = ((($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 5, $this->source); })()), 5, $this->source) . "[") . $this->sandbox->ensureToStringAllowed($context["keyId"], 5, $this->source)) . "]");
                // line 6
                echo "        ";
                $context["subFieldId"] = (($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 6, $this->source); })()), 6, $this->source) . "-") . $this->sandbox->ensureToStringAllowed($context["keyId"], 6, $this->source));
                // line 7
                echo "
        <div class=\"filter pb-3\">
            <h6 class=\"mb-0\">";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("general.filter." . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["keyBucket"], "keyConfig", [], "array", false, false, true, 9), "title", [], "any", false, false, true, 9), 9, $this->source)))), "html", null, true);
                echo "</h6>


            <ul id=\"listgroup-";
                // line 12
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["subFieldId"]) || array_key_exists("subFieldId", $context) ? $context["subFieldId"] : (function () { throw new RuntimeError('Variable "subFieldId" does not exist.', 12, $this->source); })()), 12, $this->source), "html", null, true);
                echo "\" class=\"list-group\">

                ";
                // line 14
                if (( !twig_test_empty((isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 14, $this->source); })())) && twig_get_attribute($this->env, $this->source, ($context["currentValue"] ?? null), $context["keyId"], [], "array", true, true, true, 14))) {
                    // line 15
                    echo "
                    <li class=\"list-group-item\">

                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" id=\"";
                    // line 19
                    echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["subFieldId"]) || array_key_exists("subFieldId", $context) ? $context["subFieldId"] : (function () { throw new RuntimeError('Variable "subFieldId" does not exist.', 19, $this->source); })()), 19, $this->source) . "empty"), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["subFieldname"]) || array_key_exists("subFieldname", $context) ? $context["subFieldname"] : (function () { throw new RuntimeError('Variable "subFieldname" does not exist.', 19, $this->source); })()), 19, $this->source), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_constant("\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\AbstractFilterType::EMPTY_STRING"), "html", null, true);
                    echo "\" class=\"custom-control-input\">
                            <label class=\"custom-control-label\" for=\"";
                    // line 20
                    echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["subFieldId"]) || array_key_exists("subFieldId", $context) ? $context["subFieldId"] : (function () { throw new RuntimeError('Variable "subFieldId" does not exist.', 20, $this->source); })()), 20, $this->source) . "empty"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filters.all"), "html", null, true);
                    echo "</label>
                        </div>

                    </li>

                ";
                }
                // line 26
                echo "
                ";
                // line 27
                $context["index"] = 0;
                // line 28
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["keyBucket"], "values", [], "array", false, false, true, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 29
                    echo "
                    ";
                    // line 30
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 30))) {
                        // line 31
                        echo "
                        ";
                        // line 32
                        if (((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 32, $this->source); })()) == 2)) {
                            // line 33
                            echo "                            <a href=\"#\" id=\"head-hidden-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["subFieldId"]) || array_key_exists("subFieldId", $context) ? $context["subFieldId"] : (function () { throw new RuntimeError('Variable "subFieldId" does not exist.', 33, $this->source); })()), 33, $this->source), "html", null, true);
                            echo "\" class=\"collapsed text-dark hide-me pt-1 text-center\" data-toggle=\"collapse\" data-target=\"#hidden-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["subFieldId"]) || array_key_exists("subFieldId", $context) ? $context["subFieldId"] : (function () { throw new RuntimeError('Variable "subFieldId" does not exist.', 33, $this->source); })()), 33, $this->source), "html", null, true);
                            echo "\" aria-expanded=\"false\" aria-controls=\"hidden-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["subFieldId"]) || array_key_exists("subFieldId", $context) ? $context["subFieldId"] : (function () { throw new RuntimeError('Variable "subFieldId" does not exist.', 33, $this->source); })()), 33, $this->source), "html", null, true);
                            echo "\">
                                ";
                            // line 34
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.show-more"), "html", null, true);
                            echo "
                            </a>
                            <div id=\"hidden-";
                            // line 36
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["subFieldId"]) || array_key_exists("subFieldId", $context) ? $context["subFieldId"] : (function () { throw new RuntimeError('Variable "subFieldId" does not exist.', 36, $this->source); })()), 36, $this->source), "html", null, true);
                            echo "\" class=\"collapse\" aria-labelledby=\"head-hidden-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["subFieldId"]) || array_key_exists("subFieldId", $context) ? $context["subFieldId"] : (function () { throw new RuntimeError('Variable "subFieldId" does not exist.', 36, $this->source); })()), 36, $this->source), "html", null, true);
                            echo "\" data-parent=\"#listgroup-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["subFieldId"]) || array_key_exists("subFieldId", $context) ? $context["subFieldId"] : (function () { throw new RuntimeError('Variable "subFieldId" does not exist.', 36, $this->source); })()), 36, $this->source), "html", null, true);
                            echo "\">
                        ";
                        }
                        // line 38
                        echo "

                        ";
                        // line 40
                        $context["checked"] = (twig_get_attribute($this->env, $this->source, ($context["currentValue"] ?? null), $context["keyId"], [], "array", true, true, true, 40) && (twig_get_attribute($this->env, $this->source, (isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 40, $this->source); })()), $context["keyId"], [], "array", false, false, true, 40) == twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 40)));
                        // line 41
                        echo "
                        <li class=\"list-group-item d-flex justify-content-between align-items-center ";
                        // line 42
                        echo (((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 42, $this->source); })())) ? ("list-group-item-secondary") : (""));
                        echo "\">

                            <div class=\"custom-control custom-radio\">
                                <input type=\"radio\" id=\"";
                        // line 45
                        echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["subFieldId"]) || array_key_exists("subFieldId", $context) ? $context["subFieldId"] : (function () { throw new RuntimeError('Variable "subFieldId" does not exist.', 45, $this->source); })()), 45, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 45), 45, $this->source)), "html", null, true);
                        echo "\" name=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["subFieldname"]) || array_key_exists("subFieldname", $context) ? $context["subFieldname"] : (function () { throw new RuntimeError('Variable "subFieldname" does not exist.', 45, $this->source); })()), 45, $this->source), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 45), 45, $this->source), "html", null, true);
                        echo "\" ";
                        echo (((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 45, $this->source); })())) ? ("checked=\"checked\"") : (""));
                        echo " class=\"custom-control-input\">
                                <label class=\"custom-control-label\" for=\"";
                        // line 46
                        echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["subFieldId"]) || array_key_exists("subFieldId", $context) ? $context["subFieldId"] : (function () { throw new RuntimeError('Variable "subFieldId" does not exist.', 46, $this->source); })()), 46, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 46), 46, $this->source)), "html", null, true);
                        echo "\">
                                    ";
                        // line 47
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "array", false, false, true, 47), 47, $this->source), "html", null, true);
                        echo "
                                </label>
                            </div>
                            <span class=\"badge badge-primary badge-pill\">";
                        // line 50
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "count", [], "array", false, false, true, 50), 50, $this->source), "html", null, true);
                        echo "</span>
                        </li>

                        ";
                        // line 53
                        $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 53, $this->source); })()) + 1);
                        // line 54
                        echo "                    ";
                    }
                    // line 55
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "
                ";
                // line 57
                if (((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 57, $this->source); })()) > 2)) {
                    // line 58
                    echo "                    </div>
                ";
                }
                // line 60
                echo "
            </ul>


        </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyId'], $context['keyBucket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/filters/nested_attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 67,  208 => 60,  204 => 58,  202 => 57,  199 => 56,  193 => 55,  190 => 54,  188 => 53,  182 => 50,  176 => 47,  172 => 46,  162 => 45,  156 => 42,  153 => 41,  151 => 40,  147 => 38,  138 => 36,  133 => 34,  124 => 33,  122 => 32,  119 => 31,  117 => 30,  114 => 29,  109 => 28,  107 => 27,  104 => 26,  93 => 20,  85 => 19,  79 => 15,  77 => 14,  72 => 12,  66 => 9,  62 => 7,  59 => 6,  57 => 5,  54 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  if(values is not empty and values|length > 0) %}

    {% for keyId, keyBucket in values %}

        {%  set subFieldname = fieldname ~ '[' ~ keyId ~ ']' %}
        {%  set subFieldId = fieldname ~ '-' ~ keyId %}

        <div class=\"filter pb-3\">
            <h6 class=\"mb-0\">{{ ('general.filter.' ~ keyBucket['keyConfig'].title)|lower|trans }}</h6>


            <ul id=\"listgroup-{{ subFieldId }}\" class=\"list-group\">

                {%  if(currentValue is not empty and currentValue[keyId] is defined ) %}

                    <li class=\"list-group-item\">

                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" id=\"{{ subFieldId ~ 'empty' }}\" name=\"{{  subFieldname }}\" value=\"{{ constant('\\\\Pimcore\\\\Bundle\\\\EcommerceFrameworkBundle\\\\FilterService\\\\FilterType\\\\AbstractFilterType::EMPTY_STRING') }}\" class=\"custom-control-input\">
                            <label class=\"custom-control-label\" for=\"{{ subFieldId ~ 'empty' }}\">{{ 'general.filters.all' | trans }}</label>
                        </div>

                    </li>

                {% endif %}

                {% set index = 0 %}
                {% for value in keyBucket['values'] %}

                    {% if(value['value'] is not empty) %}

                        {% if(index == 2) %}
                            <a href=\"#\" id=\"head-hidden-{{ subFieldId }}\" class=\"collapsed text-dark hide-me pt-1 text-center\" data-toggle=\"collapse\" data-target=\"#hidden-{{ subFieldId }}\" aria-expanded=\"false\" aria-controls=\"hidden-{{ subFieldId }}\">
                                {{ 'filter.show-more' | trans }}
                            </a>
                            <div id=\"hidden-{{ subFieldId }}\" class=\"collapse\" aria-labelledby=\"head-hidden-{{ subFieldId }}\" data-parent=\"#listgroup-{{ subFieldId }}\">
                        {% endif %}


                        {% set checked = (currentValue[keyId] is defined and currentValue[keyId] == value['value']) %}

                        <li class=\"list-group-item d-flex justify-content-between align-items-center {{ checked ? 'list-group-item-secondary' : ''  }}\">

                            <div class=\"custom-control custom-radio\">
                                <input type=\"radio\" id=\"{{ subFieldId ~ value['value'] }}\" name=\"{{  subFieldname }}\" value=\"{{ value['value'] }}\" {{ checked ? 'checked=\"checked\"' : ''  }} class=\"custom-control-input\">
                                <label class=\"custom-control-label\" for=\"{{ subFieldId ~ value['value'] }}\">
                                    {{ value['value'] }}
                                </label>
                            </div>
                            <span class=\"badge badge-primary badge-pill\">{{  value['count']  }}</span>
                        </li>

                        {% set index = index + 1 %}
                    {% endif %}
                {% endfor %}

                {% if(index > 2) %}
                    </div>
                {% endif %}

            </ul>


        </div>

    {% endfor %}

{% endif %}", "product/filters/nested_attributes.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/filters/nested_attributes.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 3, "set" => 5);
        static $filters = array("length" => 1, "escape" => 9, "trans" => 9, "lower" => 9);
        static $functions = array("constant" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['length', 'escape', 'trans', 'lower'],
                ['constant']
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
