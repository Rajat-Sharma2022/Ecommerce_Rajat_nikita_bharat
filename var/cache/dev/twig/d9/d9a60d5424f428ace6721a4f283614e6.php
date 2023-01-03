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

/* product/listing_content.html.twig */
class __TwigTemplate_e68bdd0317a1a7f782fef882a5d2bb14 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/listing_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/listing_content.html.twig"));

        // line 6
        echo "

";
        // line 8
        if ((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "    <div class=\"page-header\">
        <h1>";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</h1>
    </div>
";
        }
        // line 13
        echo "
<div class=\"album bg-light\">
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-3\">

                ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, Pimcore\Tool\DeviceDetector::getInstance(), "isPhone", [], "any", false, false, true, 21)) {
            // line 22
            echo "                <div id=\"filter-container\" class=\"card mb-4\">
                    <div class=\"card-header\">
                        <a id=\"filter-head\" href=\"#\" class=\"text-dark text-decoration-none\" data-toggle=\"collapse\" data-target=\"#filter-container-content\" aria-expanded=\"true\" aria-controls=\"filter-container-content\">
                            ";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title"), "html", null, true);
            echo "
                        </a>
                    </div>
                    <div id=\"filter-container-content\" class=\"card-body collapse\" aria-labelledby=\"filter-head\" data-parent=\"#filter-container\">
                        ";
        }
        // line 30
        echo "
                        <form id=\"js_filterfield\">

                            ";
        // line 33
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 33, $this->source); })()), "filters", [], "any", false, false, true, 33)) > 0)) {
            // line 34
            echo "
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 35, $this->source); })()), "filters", [], "any", false, false, true, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 36
                echo "
                                    ";
                // line 37
                $context["filterMarkup"] = twig_get_attribute($this->env, $this->source, (isset($context["filterService"]) || array_key_exists("filterService", $context) ? $context["filterService"] : (function () { throw new RuntimeError('Variable "filterService" does not exist.', 37, $this->source); })()), "filterFrontend", [0 => $context["filter"], 1 => (isset($context["productListing"]) || array_key_exists("productListing", $context) ? $context["productListing"] : (function () { throw new RuntimeError('Variable "productListing" does not exist.', 37, $this->source); })()), 2 => (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 37, $this->source); })())], "method", false, false, true, 37);
                // line 38
                echo "
                                    ";
                // line 39
                echo $this->sandbox->ensureToStringAllowed((isset($context["filterMarkup"]) || array_key_exists("filterMarkup", $context) ? $context["filterMarkup"] : (function () { throw new RuntimeError('Variable "filterMarkup" does not exist.', 39, $this->source); })()), 39, $this->source);
                echo "

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                            ";
        }
        // line 43
        echo "
                        </form>

                        ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, Pimcore\Tool\DeviceDetector::getInstance(), "isPhone", [], "any", false, false, true, 46)) {
            // line 47
            echo "                    </div></div>
                ";
        }
        // line 49
        echo "
            </div>

            <div class=\"col-md-9\">

                <div class=\"row\">

                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 56, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 57
            echo "                        <div class=\"col-md-4 d-flex align-items-stretch flex-column\">
                            ";
            // line 58
            $this->loadTemplate("product/product_teaser.html.twig", "product/listing_content.html.twig", 58)->display(twig_array_merge($context, ["product" => $context["item"]]));
            // line 59
            echo "                        </div>

                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </div>

            </div>

        </div>

        <div class=\"pt-5\">

            ";
        // line 70
        $this->loadTemplate("includes/pagination.html.twig", "product/listing_content.html.twig", 70)->display($context);
        // line 71
        echo "
        </div>

    </div>
</div>

";
        // line 77
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_inline_script')->getCallable()(), "appendScript", [0 => "

    \$('#js_filterfield .custom-checkbox input, #js_filterfield .custom-radio input').on('change', function() {
        \$('#js_filterfield').submit();
    });

"], "method", false, false, true, 77);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/listing_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 77,  189 => 71,  187 => 70,  177 => 62,  161 => 59,  159 => 58,  156 => 57,  139 => 56,  130 => 49,  126 => 47,  124 => 46,  119 => 43,  116 => 42,  107 => 39,  104 => 38,  102 => 37,  99 => 36,  95 => 35,  92 => 34,  90 => 33,  85 => 30,  77 => 25,  72 => 22,  70 => 21,  60 => 13,  54 => 10,  51 => 9,  49 => 8,  45 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var productListing \\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\ProductList\\ProductListInterface #}
{# @var result Knp\\Component\\Pager\\Pagination\\SlidingPagination #}
{# @var item \\App\\Model\\Product\\Car #}
{# @var filterService \\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterService #}
{# @var filterDefinition \\Pimcore\\Model\\DataObject\\FilterDefinition #}


{% if(category) %}
    <div class=\"page-header\">
        <h1>{{ category.name }}</h1>
    </div>
{% endif %}

<div class=\"album bg-light\">
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-3\">

                {% if( pimcore_device().isPhone ) %}
                <div id=\"filter-container\" class=\"card mb-4\">
                    <div class=\"card-header\">
                        <a id=\"filter-head\" href=\"#\" class=\"text-dark text-decoration-none\" data-toggle=\"collapse\" data-target=\"#filter-container-content\" aria-expanded=\"true\" aria-controls=\"filter-container-content\">
                            {{ 'filter.title' | trans }}
                        </a>
                    </div>
                    <div id=\"filter-container-content\" class=\"card-body collapse\" aria-labelledby=\"filter-head\" data-parent=\"#filter-container\">
                        {% endif %}

                        <form id=\"js_filterfield\">

                            {% if(filterDefinition.filters|length > 0) %}

                                {% for filter in filterDefinition.filters %}

                                    {% set filterMarkup = filterService.filterFrontend(filter, productListing, currentFilter) %}

                                    {{ filterMarkup | raw  }}

                                {% endfor %}
                            {% endif %}

                        </form>

                        {% if( pimcore_device().isPhone ) %}
                    </div></div>
                {% endif %}

            </div>

            <div class=\"col-md-9\">

                <div class=\"row\">

                    {%  for item in results %}
                        <div class=\"col-md-4 d-flex align-items-stretch flex-column\">
                            {% include 'product/product_teaser.html.twig' with {'product': item} %}
                        </div>

                    {% endfor %}
                </div>

            </div>

        </div>

        <div class=\"pt-5\">

            {% include 'includes/pagination.html.twig' %}

        </div>

    </div>
</div>

{% do pimcore_inline_script().appendScript(\"

    \$('#js_filterfield .custom-checkbox input, #js_filterfield .custom-radio input').on('change', function() {
        \$('#js_filterfield').submit();
    });

\") %}", "product/listing_content.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/listing_content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8, "for" => 35, "set" => 37, "include" => 58, "do" => 77);
        static $filters = array("escape" => 10, "trans" => 25, "length" => 33, "raw" => 39);
        static $functions = array("pimcore_device" => 21, "pimcore_inline_script" => 77);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set', 'include', 'do'],
                ['escape', 'trans', 'length', 'raw'],
                ['pimcore_device', 'pimcore_inline_script']
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
