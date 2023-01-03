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

/* checkout/checkout_completed.html.twig */
class __TwigTemplate_985ca86704fa3fb12bde62a5a5f74abb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/checkout_completed.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/checkout_completed.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "checkout/checkout_completed.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
<section class=\"jumbotron \">
    <div class=\"container\">
        <h1 class=\"display-2 text-center\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.thank-you-order"), "html", null, true);
        echo "</h1>
        <p class=\"text-center text-muted small mb-5\">";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.thank-you-order.txt");
        echo "</p>

        <div class=\"mb-5 d-flex justify-content-center\">
            <div class=\"card col-md-8\">
                <div class=\"card-body\">
                    <small class=\"text-muted\">
                        ";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "orderdate", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
                    </small>

                    <h6> ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.order"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "ordernumber", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo " </h6>

                    <dl class=\"item-property\">
                        <dt>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.orderItems"), "html", null, true);
        echo "</dt>
                        <dd>
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "items", [], "any", false, false, true, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
            // line 26
            echo "                                <div>
                                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productNumber", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo ")
                                    <span class=\"float-right\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, true, 28), 28, $this->source)), "html", null, true);
            echo "</span>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                        </dd>
                    </dl>

                    ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 34, $this->source); })()), "priceModifications", [], "any", false, false, true, 34)) {
            // line 35
            echo "                        <dl class=\"item-property\">
                            <dt>";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.priceModifications"), "html", null, true);
            echo "</dt>
                            <dd>
                                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 38, $this->source); })()), "priceModifications", [], "any", false, false, true, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["priceModification"]) {
                // line 39
                echo "                                    <div>
                                        ";
                // line 40
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["priceModification"], "name", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "
                                        <span class=\"float-right\">";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["priceModification"], "amount", [], "any", false, false, true, 41), 41, $this->source)), "html", null, true);
                echo "</span>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceModification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                            </dd>
                        </dl>
                    ";
        }
        // line 47
        echo "
                    ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 48, $this->source); })()), "giftItems", [], "any", false, false, true, 48)) {
            // line 49
            echo "                        <dl class=\"item-property\">
                            <dt>";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.giftItems"), "html", null, true);
            echo "</dt>
                            <dd>
                                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 52, $this->source); })()), "giftItems", [], "any", false, false, true, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 53
                echo "                                    <div>
                                        ";
                // line 54
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productNumber", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo ")
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                            </dd>
                        </dl>
                    ";
        }
        // line 60
        echo "
                    <dl class=\"item-property\">
                        <dd>
                            <strong>
                                ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.totalPrice"), "html", null, true);
        echo "
                                <span class=\"float-right\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 65, $this->source); })()), "totalPrice", [], "any", false, false, true, 65), 65, $this->source)), "html", null, true);
        echo "</span>
                            </strong>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>


        <div class=\"d-flex justify-content-center\">
            <div class=\"col-12 col-md-6\">
                <div class=\"row\">
                    <div class=\"";
        // line 77
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, true, 77)) ? ("col-6") : ("col-12"));
        echo "\">
                        <a href=\"/\" class=\"btn btn-primary my-2 w-100\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.continue-shopping"), "html", null, true);
        echo "</a>
                    </div>
                    ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, true, 80)) {
            // line 81
            echo "                        <div class=\"col-6\">
                            <a href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account-index");
            echo "\" class=\"btn btn-secondary my-2 w-100\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.profile"), "html", null, true);
            echo "</a>
                        </div>
                    ";
        }
        // line 85
        echo "
                </div>

            </div>
        </div>
    </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "checkout/checkout_completed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 85,  244 => 82,  241 => 81,  239 => 80,  234 => 78,  230 => 77,  215 => 65,  211 => 64,  205 => 60,  200 => 57,  189 => 54,  186 => 53,  182 => 52,  177 => 50,  174 => 49,  172 => 48,  169 => 47,  164 => 44,  155 => 41,  151 => 40,  148 => 39,  144 => 38,  139 => 36,  136 => 35,  134 => 34,  129 => 31,  120 => 28,  114 => 27,  111 => 26,  107 => 25,  102 => 23,  94 => 20,  88 => 17,  79 => 11,  75 => 10,  70 => 7,  60 => 6,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var order \\Pimcore\\Model\\DataObject\\OnlineShopOrder #}


{% extends 'layouts/layout.html.twig' %}

{% block content %}

<section class=\"jumbotron \">
    <div class=\"container\">
        <h1 class=\"display-2 text-center\">{{ 'checkout.thank-you-order' | trans }}</h1>
        <p class=\"text-center text-muted small mb-5\">{{ 'checkout.thank-you-order.txt' | trans | raw }}</p>

        <div class=\"mb-5 d-flex justify-content-center\">
            <div class=\"card col-md-8\">
                <div class=\"card-body\">
                    <small class=\"text-muted\">
                        {{ order.orderdate }}
                    </small>

                    <h6> {{ 'general.order' | trans }} {{ order.ordernumber }} </h6>

                    <dl class=\"item-property\">
                        <dt>{{ 'general.orderItems' | trans }}</dt>
                        <dd>
                            {% for orderItem in order.items %}
                                <div>
                                    {{ orderItem.productName }} ({{ orderItem.productNumber }})
                                    <span class=\"float-right\">{{ orderItem.totalPrice | currency }}</span>
                                </div>
                            {% endfor %}
                        </dd>
                    </dl>

                    {% if order.priceModifications %}
                        <dl class=\"item-property\">
                            <dt>{{ 'general.priceModifications' | trans }}</dt>
                            <dd>
                                {% for priceModification in order.priceModifications %}
                                    <div>
                                        {{ priceModification.name }}
                                        <span class=\"float-right\">{{ priceModification.amount | currency }}</span>
                                    </div>
                                {% endfor %}
                            </dd>
                        </dl>
                    {% endif %}

                    {% if order.giftItems %}
                        <dl class=\"item-property\">
                            <dt>{{ 'general.giftItems' | trans }}</dt>
                            <dd>
                                {% for orderItem in order.giftItems %}
                                    <div>
                                        {{ orderItem.productName }} ({{ orderItem.productNumber }})
                                    </div>
                                {% endfor %}
                            </dd>
                        </dl>
                    {% endif %}

                    <dl class=\"item-property\">
                        <dd>
                            <strong>
                                {{ 'general.totalPrice' | trans }}
                                <span class=\"float-right\">{{ order.totalPrice | currency }}</span>
                            </strong>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>


        <div class=\"d-flex justify-content-center\">
            <div class=\"col-12 col-md-6\">
                <div class=\"row\">
                    <div class=\"{{ app.user ? 'col-6' : 'col-12' }}\">
                        <a href=\"/\" class=\"btn btn-primary my-2 w-100\">{{ 'cart.continue-shopping' | trans }}</a>
                    </div>
                    {% if app.user %}
                        <div class=\"col-6\">
                            <a href=\"{{ path('account-index') }}\" class=\"btn btn-secondary my-2 w-100\">{{ 'general.profile' | trans }}</a>
                        </div>
                    {% endif %}

                </div>

            </div>
        </div>
    </div>
</section>

{% endblock %}", "checkout/checkout_completed.html.twig", "/var/www/html/EcommerceProject/ecom/templates/checkout/checkout_completed.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 25, "if" => 34);
        static $filters = array("escape" => 10, "trans" => 10, "raw" => 11, "currency" => 28);
        static $functions = array("path" => 82);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'trans', 'raw', 'currency'],
                ['path']
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
