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

/* product/product_teaser.html.twig */
class __TwigTemplate_8c5d934b48ce8d2a29ad4701faf6102d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/product_teaser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/product_teaser.html.twig"));

        // line 1
        echo "<div class=\"card custom-product-card mb-4 shadow-sm flex-fill\" data-productid=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "\">
    ";
        // line 2
        $context["detailLink"] = $this->extensions['App\Twig\Extension\ProductPageExtension']->generateLink($this->sandbox->ensureToStringAllowed((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), 2, $this->source));
        // line 3
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["detailLink"]) || array_key_exists("detailLink", $context) ? $context["detailLink"] : (function () { throw new RuntimeError('Variable "detailLink" does not exist.', 3, $this->source); })()), 3, $this->source), "html", null, true);
        echo "\" class=\"text-decoration-none text-dark\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "mainImage", [], "any", false, false, true, 4)) {
            // line 5
            echo "        <div class=\"product-img\">
            ";
            // line 6
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "mainImage", [], "any", false, false, true, 6), "thumbnail", [0 => "grid"], "method", false, false, true, 6), "html", [0 => ["imgAttributes" => ["class" => "img-fluid w-100"]]], "method", false, false, true, 6), 6, $this->source);
            echo "
        </div>
        ";
        }
        // line 9
        echo "

        <div class=\"card-body pricing\">
            <div class=\"card-body-top pb-3\">
                <h4 class=\"card-title pricing-card-title text-uppercase\">";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "oSName", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</h4>
                ";
        // line 14
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "App\\Model\\Product\\Car")) {
            // line 15
            echo "                    <p class=\"card-text\">";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "subText", [], "any", false, false, true, 15), 15, $this->source);
            echo "</p>
                ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "saleInformation", [], "any", false, false, true, 16), "saleInformation", [], "any", false, false, true, 16)) {
            // line 17
            echo "                    <p class=\"card-text\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.condition"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("attribute." . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "saleInformation", [], "any", false, false, true, 17), "saleInformation", [], "any", false, false, true, 17), "condition", [], "any", false, false, true, 17), 17, $this->source))), "html", null, true);
            echo "</p>
                ";
        }
        // line 19
        echo "            </div>
            <div class=\"card-body-bottom\">

                ";
        // line 22
        $context["priceInfo"] = twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "oSPriceInfo", [], "any", false, false, true, 22);
        // line 23
        echo "
                ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["priceInfo"]) || array_key_exists("priceInfo", $context) ? $context["priceInfo"] : (function () { throw new RuntimeError('Variable "priceInfo" does not exist.', 24, $this->source); })()), "hasDiscount", [], "any", false, false, true, 24)) {
            // line 25
            echo "                    <p class=\"card-price original mb-1\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["priceInfo"]) || array_key_exists("priceInfo", $context) ? $context["priceInfo"] : (function () { throw new RuntimeError('Variable "priceInfo" does not exist.', 25, $this->source); })()), "originalPrice", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</p>
                ";
        }
        // line 27
        echo "
                <p class=\"card-price\">";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "oSPrice", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "</p>
                <div class=\"row button-row\">
                    <div class=\"col p-1\">
                        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["detailLink"]) || array_key_exists("detailLink", $context) ? $context["detailLink"] : (function () { throw new RuntimeError('Variable "detailLink" does not exist.', 31, $this->source); })()), 31, $this->source), "html", null, true);
        echo "\" class=\"btn btn-block btn-secondary\">
                            ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.details"), "html", null, true);
        echo "
                        </a>
                    </div>
                    <div class=\"col p-1\">
                        <form id=\"shop_add_to_cart_form_";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop-add-to-cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, true, 36)]), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addToCart"), "html", null, true);
        echo "\">
                            <a href=\"#\" onclick=\"document.getElementById('shop_add_to_cart_form_";
        // line 38
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "').submit();\"
                               class=\"btn btn-block btn-primary\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.buy"), "html", null, true);
        echo " <i class=\" ml-2\"><img
                                        src=\"/static/images/icons/cart.svg\" height=\"20\" width=\"auto\"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/product_teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 39,  143 => 38,  139 => 37,  133 => 36,  126 => 32,  122 => 31,  116 => 28,  113 => 27,  107 => 25,  105 => 24,  102 => 23,  100 => 22,  95 => 19,  87 => 17,  85 => 16,  80 => 15,  78 => 14,  74 => 13,  68 => 9,  62 => 6,  59 => 5,  57 => 4,  52 => 3,  50 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card custom-product-card mb-4 shadow-sm flex-fill\" data-productid=\"{{ product.id }}\">
    {% set detailLink = app_product_detaillink(product) %}
    <a href=\"{{ detailLink }}\" class=\"text-decoration-none text-dark\">
        {% if(product.mainImage) %}
        <div class=\"product-img\">
            {{ product.mainImage.thumbnail('grid').html({imgAttributes: {class: 'img-fluid w-100'}}) | raw }}
        </div>
        {% endif %}


        <div class=\"card-body pricing\">
            <div class=\"card-body-top pb-3\">
                <h4 class=\"card-title pricing-card-title text-uppercase\">{{ product.oSName }}</h4>
                {% if( product is instanceof('App\\\\Model\\\\Product\\\\Car')) %}
                    <p class=\"card-text\">{{ product.subText | raw }}</p>
                {% elseif(product.saleInformation.saleInformation)  %}
                    <p class=\"card-text\">{{ 'general.condition' | trans }}: {{ ('attribute.' ~ product.saleInformation.saleInformation.condition) | trans }}</p>
                {% endif %}
            </div>
            <div class=\"card-body-bottom\">

                {% set priceInfo = product.oSPriceInfo %}

                {% if(priceInfo.hasDiscount) %}
                    <p class=\"card-price original mb-1\">{{ priceInfo.originalPrice }}</p>
                {% endif %}

                <p class=\"card-price\">{{ product.oSPrice }}</p>
                <div class=\"row button-row\">
                    <div class=\"col p-1\">
                        <a href=\"{{ detailLink }}\" class=\"btn btn-block btn-secondary\">
                            {{ 'general.details' | trans }}
                        </a>
                    </div>
                    <div class=\"col p-1\">
                        <form id=\"shop_add_to_cart_form_{{ product.id }}\" method=\"post\" action=\"{{ path('shop-add-to-cart', { id: product.id }) }}\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('addToCart') }}\">
                            <a href=\"#\" onclick=\"document.getElementById('shop_add_to_cart_form_{{ product.id }}').submit();\"
                               class=\"btn btn-block btn-primary\">{{ 'general.buy' | trans }} <i class=\" ml-2\"><img
                                        src=\"/static/images/icons/cart.svg\" height=\"20\" width=\"auto\"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
", "product/product_teaser.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/product_teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 4);
        static $filters = array("escape" => 1, "raw" => 6, "trans" => 17);
        static $functions = array("app_product_detaillink" => 2, "path" => 36, "csrf_token" => 37);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw', 'trans'],
                ['app_product_detaillink', 'path', 'csrf_token']
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
