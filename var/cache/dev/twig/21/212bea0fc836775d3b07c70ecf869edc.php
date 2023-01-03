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

/* web2print/product_cell.html.twig */
class __TwigTemplate_c89ce8d5823ea5376bd8ba59cae386b4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "web2print/product_cell.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "web2print/product_cell.html.twig"));

        // line 1
        $context["detailLink"] = $this->extensions['App\Twig\Extension\ProductPageExtension']->generateLink($this->sandbox->ensureToStringAllowed((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), 1, $this->source));
        // line 2
        echo "

<div class=\"productCell\">

    ";
        // line 6
        if ((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "
        <div class=\"texts\">
            <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "oSName", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</h4>

            <div class=\"infoblock\">

                ";
            // line 13
            if ($this->env->getTest('instanceof')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "App\\Model\\Product\\Car")) {
                // line 14
                echo "                    <p>";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "subText", [], "any", false, false, true, 14), 14, $this->source);
                echo "</p>
                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "saleInformation", [], "any", false, false, true, 15), "saleInformation", [], "any", false, false, true, 15)) {
                // line 16
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.condition"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("attribute." . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "saleInformation", [], "any", false, false, true, 16), "saleInformation", [], "any", false, false, true, 16), "condition", [], "any", false, false, true, 16), 16, $this->source))), "html", null, true);
                echo "</p>
                ";
            }
            // line 18
            echo "
                <p class=\"price\">";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "oSPrice", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo ",-</p>

            </div>

        </div>

        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["detailLink"]) || array_key_exists("detailLink", $context) ? $context["detailLink"] : (function () { throw new RuntimeError('Variable "detailLink" does not exist.', 25, $this->source); })()), 25, $this->source), "html", null, true);
            echo "\" class=\"mainImage\">

            ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "mainImage", [], "any", false, false, true, 27)) {
                // line 28
                echo "                ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "mainImage", [], "any", false, false, true, 28), "thumbnail", [0 => "print_productcell"], "method", false, false, true, 28), "html", [], "method", false, false, true, 28), 28, $this->source);
                echo "
            ";
            }
            // line 30
            echo "
        </a>



    ";
        } elseif (        // line 35
(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "
        <p>Drag a product here</p>

    ";
        }
        // line 40
        echo "</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "web2print/product_cell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 40,  117 => 36,  115 => 35,  108 => 30,  102 => 28,  100 => 27,  95 => 25,  86 => 19,  83 => 18,  75 => 16,  73 => 15,  68 => 14,  66 => 13,  59 => 9,  55 => 7,  53 => 6,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set detailLink = app_product_detaillink(product) %}


<div class=\"productCell\">

    {% if product %}

        <div class=\"texts\">
            <h4>{{ product.oSName }}</h4>

            <div class=\"infoblock\">

                {% if( product is instanceof('App\\\\Model\\\\Product\\\\Car')) %}
                    <p>{{ product.subText | raw }}</p>
                {% elseif(product.saleInformation.saleInformation)  %}
                    <p>{{ 'general.condition' | trans }}: {{ ('attribute.' ~ product.saleInformation.saleInformation.condition) | trans }}</p>
                {% endif %}

                <p class=\"price\">{{ product.oSPrice }},-</p>

            </div>

        </div>

        <a href=\"{{ detailLink }}\" class=\"mainImage\">

            {% if(product.mainImage) %}
                {{ product.mainImage.thumbnail('print_productcell').html() | raw }}
            {% endif %}

        </a>



    {%  elseif editmode %}

        <p>Drag a product here</p>

    {% endif %}
</div>

", "web2print/product_cell.html.twig", "/var/www/html/EcommerceProject/ecom/templates/web2print/product_cell.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 6);
        static $filters = array("escape" => 9, "raw" => 14, "trans" => 16);
        static $functions = array("app_product_detaillink" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw', 'trans'],
                ['app_product_detaillink']
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
