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

/* cart/shared/order_summary.html.twig */
class __TwigTemplate_6d1ad676cc6f7ff260af568425df820d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/shared/order_summary.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/shared/order_summary.html.twig"));

        // line 1
        echo "<h4 class=\"d-flex justify-content-between align-items-center mb-3\">
    <span class=\"\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summary"), "html", null, true);
        echo "</span>
    <span class=\"badge badge-secondary badge-pill\">";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 3, $this->source); })()), "itemAmount", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</span>
</h4>
<ul class=\"list-group mb-3\">
    <li class=\"list-group-item d-flex justify-content-between\">
        <div>
            <p class=\"mb-0\"><strong class=\"my-0\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.products"), "html", null, true);
        echo "</strong></p>
            <small class=\"text-muted\">

                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 11, $this->source); })()), "items", [], "any", false, false, true, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["cartItem"]) {
            // line 12
            echo "
                    <div>";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cartItem"], "name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
            </small>
        </div>
        <span class=\"text-muted text-nowrap text-right\">";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 19, $this->source); })()), "priceCalculator", [], "any", false, false, true, 19), "subTotal", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</span>
    </li>

    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 22, $this->source); })()), "priceCalculator", [], "any", false, false, true, 22), "priceModifications", [], "any", false, false, true, 22));
        foreach ($context['_seq'] as $context["name"] => $context["modification"]) {
            // line 23
            echo "
        <li class=\"list-group-item d-flex justify-content-between\">
            <div>
                <strong class=\"my-0\">
                    ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["modification"], "description", [], "any", false, false, true, 27)) {
                // line 28
                echo "                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["modification"], "description", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "
                    ";
            } else {
                // line 30
                echo "                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 30, $this->source), "html", null, true);
                echo "
                    ";
            }
            // line 32
            echo "                </strong>
            </div>
            <span class=\"text-muted text-nowrap text-right\">";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["modification"], 34, $this->source), "html", null, true);
            echo "</span>
        </li>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['modification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    <li class=\"list-group-item d-flex justify-content-between\" style=\"border-top: 2px solid\">
        <h6><span>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.totalprice"), "html", null, true);
        echo "</span></h6>
        <h6 class=\"text-nowrap text-right\">";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 42, $this->source); })()), "priceCalculator", [], "any", false, false, true, 42), "grandTotal", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "</h6>
    </li>
</ul>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "cart/shared/order_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  136 => 41,  132 => 39,  121 => 34,  117 => 32,  111 => 30,  105 => 28,  103 => 27,  97 => 23,  93 => 22,  87 => 19,  82 => 16,  73 => 13,  70 => 12,  66 => 11,  60 => 8,  52 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4 class=\"d-flex justify-content-between align-items-center mb-3\">
    <span class=\"\">{{ 'checkout.summary' | trans }}</span>
    <span class=\"badge badge-secondary badge-pill\">{{ cart.itemAmount }}</span>
</h4>
<ul class=\"list-group mb-3\">
    <li class=\"list-group-item d-flex justify-content-between\">
        <div>
            <p class=\"mb-0\"><strong class=\"my-0\">{{ 'checkout.products' | trans }}</strong></p>
            <small class=\"text-muted\">

                {% for cartItem in cart.items %}

                    <div>{{ cartItem.name }}</div>

                {% endfor %}

            </small>
        </div>
        <span class=\"text-muted text-nowrap text-right\">{{ cart.priceCalculator.subTotal }}</span>
    </li>

    {% for name, modification in cart.priceCalculator.priceModifications %}

        <li class=\"list-group-item d-flex justify-content-between\">
            <div>
                <strong class=\"my-0\">
                    {% if(modification.description) %}
                        {{ modification.description }}
                    {% else %}
                        {{ name }}
                    {% endif %}
                </strong>
            </div>
            <span class=\"text-muted text-nowrap text-right\">{{ modification }}</span>
        </li>


    {% endfor %}

    <li class=\"list-group-item d-flex justify-content-between\" style=\"border-top: 2px solid\">
        <h6><span>{{ 'checkout.totalprice' | trans }}</span></h6>
        <h6 class=\"text-nowrap text-right\">{{ cart.priceCalculator.grandTotal }}</h6>
    </li>
</ul>", "cart/shared/order_summary.html.twig", "/var/www/html/EcommerceProject/ecom/templates/cart/shared/order_summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 11, "if" => 27);
        static $filters = array("escape" => 2, "trans" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'trans'],
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
