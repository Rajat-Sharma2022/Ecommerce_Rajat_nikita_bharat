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

/* areas/blockquote/view.html.twig */
class __TwigTemplate_53a8a0c813e3c6c7aae440c2eff64201 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/blockquote/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/blockquote/view.html.twig"));

        // line 1
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            // line 3
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "position"), "isEmpty", [], "method", false, false, true, 3)) {
                // line 4
                echo "        ";
                twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "position"), "setDataFromResource", [0 => "left"], "method", false, false, true, 4);
                // line 5
                echo "    ";
            }
            // line 6
            echo "
    <div class=\"editmode-label align-middle\">
        Orientation:
    </div>
    ";
            // line 10
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "position", ["store" => [0 => [0 => "text-left", 1 => "left"], 1 => [0 => "text-right", 1 => "right"], 2 => [0 => "text-center", 1 => "center"]], "reload" => true, "class" => "align-middle"]);
            // line 20
            echo "
";
        }
        // line 22
        echo "

<section class=\"container\">

    <blockquote class=\"blockquote ";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "position"), "getData", [], "method", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "\">
        <p class=\"mb-0\">";
        // line 27
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "quote");
        echo "</p>
        <footer class=\"blockquote-footer\">";
        // line 28
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "author");
        echo "</footer>
    </blockquote>

</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/blockquote/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  80 => 27,  76 => 26,  70 => 22,  66 => 20,  64 => 10,  58 => 6,  55 => 5,  52 => 4,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if editmode %}
    {# pre-select default option #}
    {% if pimcore_select(\"position\").isEmpty() %}
        {% do pimcore_select(\"position\").setDataFromResource(\"left\") %}
    {% endif %}

    <div class=\"editmode-label align-middle\">
        Orientation:
    </div>
    {{
        pimcore_select('position', {
            store: [
                [\"text-left\",\"left\"],
                [\"text-right\",\"right\"],
                [\"text-center\",\"center\"]
            ],
            reload: true,
            class: 'align-middle'
        })
    }}
{% endif %}


<section class=\"container\">

    <blockquote class=\"blockquote {{ pimcore_select('position').getData() }}\">
        <p class=\"mb-0\">{{ pimcore_input('quote') }}</p>
        <footer class=\"blockquote-footer\">{{ pimcore_input('author') }}</footer>
    </blockquote>

</section>
", "areas/blockquote/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/blockquote/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "do" => 4);
        static $filters = array("escape" => 26);
        static $functions = array("pimcore_select" => 3, "pimcore_input" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'do'],
                ['escape'],
                ['pimcore_select', 'pimcore_input']
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
