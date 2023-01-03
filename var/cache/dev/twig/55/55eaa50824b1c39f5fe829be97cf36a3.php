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

/* product/filters/input.html.twig */
class __TwigTemplate_5b2246ca1882c3a80b79a1cbb983c8f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/input.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/input.html.twig"));

        // line 1
        echo "<div class=\"filter pb-3\">
    <h6 class=\"mb-0\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("general.filter." . $this->sandbox->ensureToStringAllowed((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 2, $this->source); })()), 2, $this->source)))), "html", null, true);
        echo "</h6>

    <div class=\"card\">
        <div class=\"card-body\">

            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["fieldname"]) || array_key_exists("fieldname", $context) ? $context["fieldname"] : (function () { throw new RuntimeError('Variable "fieldname" does not exist.', 8, $this->source); })()), 8, $this->source), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 8, $this->source); })()), 8, $this->source), "html", null, true);
        echo "\">
            </div>

            <div class=\"d-flex justify-content-end pt-3\">
                <button type=\"submit\" class=\"btn btn-sm btn-outline-primary\">";
        // line 12
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
        return "product/filters/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 8,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"filter pb-3\">
    <h6 class=\"mb-0\">{{ ('general.filter.' ~ label)|lower|trans }}</h6>

    <div class=\"card\">
        <div class=\"card-body\">

            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"{{ fieldname }}\" value=\"{{ currentValue }}\">
            </div>

            <div class=\"d-flex justify-content-end pt-3\">
                <button type=\"submit\" class=\"btn btn-sm btn-outline-primary\">{{ 'general.filter.apply' | trans }}</button>
            </div>
        </div>


    </div>


</div>", "product/filters/input.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/filters/input.html.twig");
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
