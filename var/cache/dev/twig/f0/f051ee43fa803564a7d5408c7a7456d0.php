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

/* product/filters/numberrange.html.twig */
class __TwigTemplate_f3bff1551ba569f845d2c7c805674555 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/numberrange.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/numberrange.html.twig"));

        // line 1
        echo "<div class=\"filter pb-3\">
    <h6 class=\"mb-0\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("general.filter." . $this->sandbox->ensureToStringAllowed((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 2, $this->source); })()), 2, $this->source)))), "html", null, true);
        echo "</h6>

    <div class=\"card\">
        <div class=\"card-body\">

            <div class=\"row\">
                <div class=\"col\">
                    <label for=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 9, $this->source); })()), 9, $this->source), "html", null, true);
        echo "['from']\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filter.from"), "html", null, true);
        echo "</label>
                    <input id=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 10, $this->source); })()), 10, $this->source), "html", null, true);
        echo "['from']\" name=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 10, $this->source); })()), 10, $this->source), "html", null, true);
        echo "[from]\" type=\"number\"
                           class=\"form-control\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filter.from"), "html", null, true);
        echo "\"
                           min=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 12, $this->source); })()), "rangeFrom", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\" max=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 12, $this->source); })()), "rangeTo", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\"
                           value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 13, $this->source); })()), "from", [], "array", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\"
                    >
                </div>
                <div class=\"col\">
                    <label for=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 17, $this->source); })()), 17, $this->source), "html", null, true);
        echo "['to']\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filter.to"), "html", null, true);
        echo "</label>
                    <input id=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 18, $this->source); })()), 18, $this->source), "html", null, true);
        echo "['to']\" name=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 18, $this->source); })()), 18, $this->source), "html", null, true);
        echo "[to]\" type=\"number\"
                           class=\"form-control\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filter.from"), "html", null, true);
        echo "\"
                           min=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 20, $this->source); })()), "rangeFrom", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "\" max=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 20, $this->source); })()), "rangeTo", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "\"
                           value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 21, $this->source); })()), "to", [], "array", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "\"
                    >
                </div>
            </div>

            <div class=\"d-flex justify-content-end pt-3\">
                <button type=\"submit\" class=\"btn btn-sm btn-outline-primary\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filter.apply"), "html", null, true);
        echo "</button>
            </div>
        </div>


    </div>


</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/filters/numberrange.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 27,  109 => 21,  103 => 20,  99 => 19,  93 => 18,  87 => 17,  80 => 13,  74 => 12,  70 => 11,  64 => 10,  58 => 9,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"filter pb-3\">
    <h6 class=\"mb-0\">{{ ('general.filter.' ~ label)|lower|trans }}</h6>

    <div class=\"card\">
        <div class=\"card-body\">

            <div class=\"row\">
                <div class=\"col\">
                    <label for=\"{{ fieldname }}['from']\">{{ 'general.filter.from' | trans }}</label>
                    <input id=\"{{ fieldname }}['from']\" name=\"{{ fieldname }}[from]\" type=\"number\"
                           class=\"form-control\" placeholder=\"{{ 'general.filter.from' | trans }}\"
                           min=\"{{ definition.rangeFrom }}\" max=\"{{ definition.rangeTo }}\"
                           value=\"{{ currentValue['from'] }}\"
                    >
                </div>
                <div class=\"col\">
                    <label for=\"{{ fieldname }}['to']\">{{ 'general.filter.to' | trans }}</label>
                    <input id=\"{{ fieldname }}['to']\" name=\"{{ fieldname }}[to]\" type=\"number\"
                           class=\"form-control\" placeholder=\"{{ 'general.filter.from' | trans }}\"
                           min=\"{{ definition.rangeFrom }}\" max=\"{{ definition.rangeTo }}\"
                           value=\"{{ currentValue['to'] }}\"
                    >
                </div>
            </div>

            <div class=\"d-flex justify-content-end pt-3\">
                <button type=\"submit\" class=\"btn btn-sm btn-outline-primary\">{{ 'general.filter.apply' | trans }}</button>
            </div>
        </div>


    </div>


</div>", "product/filters/numberrange.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/filters/numberrange.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2, "trans" => 2, "lower" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans', 'lower'],
                []
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
