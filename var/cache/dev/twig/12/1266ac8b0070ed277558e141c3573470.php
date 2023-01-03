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

/* product/filters/numberrange_select.html.twig */
class __TwigTemplate_36b48a84b7da6e8a5ba9157b0fc4aa5c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/numberrange_select.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/numberrange_select.html.twig"));

        // line 1
        if (( !twig_test_empty((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 1, $this->source); })())) && (twig_length_filter($this->env, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 1, $this->source); })())) > 0))) {
            // line 2
            echo "
    <div class=\"filter pb-3\">
        <h6 class=\"mb-0\">";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("general.filter." . $this->sandbox->ensureToStringAllowed((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 4, $this->source); })()), 4, $this->source)))), "html", null, true);
            echo "</h6>

        <ul class=\"list-group\">

            ";
            // line 8
            if ( !twig_test_empty((isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 8, $this->source); })()))) {
                // line 9
                echo "
                <li class=\"list-group-item\">

                    <div class=\"custom-control custom-radio\">
                        <input type=\"radio\" id=\"";
                // line 13
                echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 13, $this->source); })()), 13, $this->source) . "empty"), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 13, $this->source); })()), 13, $this->source), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_constant("\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\AbstractFilterType::EMPTY_STRING"), "html", null, true);
                echo "\" class=\"custom-control-input\">
                        <label class=\"custom-control-label\" for=\"";
                // line 14
                echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 14, $this->source); })()), 14, $this->source) . "empty"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filters.all"), "html", null, true);
                echo "</label>
                    </div>

                </li>

            ";
            }
            // line 20
            echo "
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 22
                echo "
                ";
                // line 23
                $context["checked"] = ((isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 23, $this->source); })()) == (($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "from", [], "array", false, false, true, 23), 23, $this->source) . "-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "to", [], "array", false, false, true, 23), 23, $this->source)));
                // line 24
                echo "
                <li class=\"list-group-item d-flex justify-content-between align-items-center ";
                // line 25
                echo (((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 25, $this->source); })())) ? ("list-group-item-secondary") : (""));
                echo "\">

                    <div class=\"custom-control custom-radio\">
                        <input type=\"radio\" id=\"";
                // line 28
                echo twig_escape_filter($this->env, ((($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 28, $this->source); })()), 28, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "from", [], "array", false, false, true, 28), 28, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "to", [], "array", false, false, true, 28), 28, $this->source)), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 28, $this->source); })()), 28, $this->source), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "from", [], "array", false, false, true, 28), 28, $this->source) . "-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "to", [], "array", false, false, true, 28), 28, $this->source)), "html", null, true);
                echo "\" ";
                echo (((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 28, $this->source); })())) ? ("checked=\"checked\"") : (""));
                echo " class=\"custom-control-input\">
                        <label class=\"custom-control-label\" for=\"";
                // line 29
                echo twig_escape_filter($this->env, ((($this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 29, $this->source); })()), 29, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "from", [], "array", false, false, true, 29), 29, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "to", [], "array", false, false, true, 29), 29, $this->source)), "html", null, true);
                echo "\">
                            ";
                // line 30
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "label", [], "array", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "
                        </label>
                    </div>
                    <span class=\"badge badge-primary badge-pill\">";
                // line 33
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "count", [], "array", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "</span>
                </li>


            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </ul>


    </div>

";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/filters/numberrange_select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  126 => 33,  120 => 30,  116 => 29,  106 => 28,  100 => 25,  97 => 24,  95 => 23,  92 => 22,  88 => 21,  85 => 20,  74 => 14,  66 => 13,  60 => 9,  58 => 8,  51 => 4,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  if(values is not empty and values|length > 0) %}

    <div class=\"filter pb-3\">
        <h6 class=\"mb-0\">{{ ('general.filter.' ~ label)|lower|trans }}</h6>

        <ul class=\"list-group\">

            {%  if(currentValue is not empty) %}

                <li class=\"list-group-item\">

                    <div class=\"custom-control custom-radio\">
                        <input type=\"radio\" id=\"{{ fieldname ~ 'empty' }}\" name=\"{{  fieldname }}\" value=\"{{ constant('\\\\Pimcore\\\\Bundle\\\\EcommerceFrameworkBundle\\\\FilterService\\\\FilterType\\\\AbstractFilterType::EMPTY_STRING') }}\" class=\"custom-control-input\">
                        <label class=\"custom-control-label\" for=\"{{ fieldname ~ 'empty' }}\">{{ 'general.filters.all' | trans }}</label>
                    </div>

                </li>

            {% endif %}

            {% for value in values %}

                {% set checked = currentValue == value['from'] ~ '-' ~ value['to'] %}

                <li class=\"list-group-item d-flex justify-content-between align-items-center {{ checked ? 'list-group-item-secondary' : ''  }}\">

                    <div class=\"custom-control custom-radio\">
                        <input type=\"radio\" id=\"{{ fieldname ~ value['from'] ~ '-' ~ value['to']  }}\" name=\"{{  fieldname }}\" value=\"{{ value['from'] ~ '-' ~ value['to'] }}\" {{ checked ? 'checked=\"checked\"' : ''  }} class=\"custom-control-input\">
                        <label class=\"custom-control-label\" for=\"{{ fieldname ~ value['from'] ~ '-' ~ value['to']  }}\">
                            {{ value['label'] }}
                        </label>
                    </div>
                    <span class=\"badge badge-primary badge-pill\">{{  value['count']  }}</span>
                </li>


            {% endfor %}
        </ul>


    </div>

{% endif %}", "product/filters/numberrange_select.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/filters/numberrange_select.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 21, "set" => 23);
        static $filters = array("length" => 1, "escape" => 4, "trans" => 4, "lower" => 4);
        static $functions = array("constant" => 13);

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
