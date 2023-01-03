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

/* product/macros.html.twig */
class __TwigTemplate_84ce7e647acc5e30b6154fef4758e49f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/macros.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_attribute($__value__ = null, $__label__ = null, $__translate__ = false, $__translationKeyPrefix__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "label" => $__label__,
            "translate" => $__translate__,
            "translationKeyPrefix" => $__translationKeyPrefix__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attribute"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attribute"));

            // line 2
            echo "
    ";
            // line 3
            if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 3, $this->source); })())) {
                // line 4
                echo "        <dl class=\"item-property col-6 col-md-3 print-col-3\">
            <dt>";
                // line 5
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 5, $this->source); })()), 5, $this->source)), "html", null, true);
                echo "</dt>

            ";
                // line 7
                if ((isset($context["translate"]) || array_key_exists("translate", $context) ? $context["translate"] : (function () { throw new RuntimeError('Variable "translate" does not exist.', 7, $this->source); })())) {
                    // line 8
                    echo "                <dd>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ($this->sandbox->ensureToStringAllowed((isset($context["translationKeyPrefix"]) || array_key_exists("translationKeyPrefix", $context) ? $context["translationKeyPrefix"] : (function () { throw new RuntimeError('Variable "translationKeyPrefix" does not exist.', 8, $this->source); })()), 8, $this->source) . $this->sandbox->ensureToStringAllowed((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 8, $this->source); })()), 8, $this->source)))), "html", null, true);
                    echo "</dd>
            ";
                } else {
                    // line 10
                    echo "                <dd>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 10, $this->source); })()), 10, $this->source), "html", null, true);
                    echo "</dd>
            ";
                }
                // line 12
                echo "
        </dl>
    ";
            }
            // line 15
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "product/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 15,  102 => 12,  96 => 10,  90 => 8,  88 => 7,  83 => 5,  80 => 4,  78 => 3,  75 => 2,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro attribute(value, label, translate = false, translationKeyPrefix = '') %}

    {% if(value) %}
        <dl class=\"item-property col-6 col-md-3 print-col-3\">
            <dt>{{ label | trans }}</dt>

            {% if(translate) %}
                <dd>{{ (translationKeyPrefix ~ value) | lower | trans }}</dd>
            {% else %}
                <dd>{{ value }}</dd>
            {% endif %}

        </dl>
    {% endif %}

{% endmacro %}
", "product/macros.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/macros.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("macro" => 1, "if" => 3);
        static $filters = array("escape" => 5, "trans" => 5, "lower" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'if'],
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
