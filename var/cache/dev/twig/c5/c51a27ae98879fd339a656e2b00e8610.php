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

/* product/filters/select_category.html.twig */
class __TwigTemplate_a4a8e56b1ccf6c50ad77bfa5bb4c2251 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/select_category.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/filters/select_category.html.twig"));

        // line 1
        $context["data"] = $this->extensions['App\Twig\Extension\CategoryFilterExtension']->prepareData($this->sandbox->ensureToStringAllowed((isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 1, $this->source); })()), 1, $this->source), $this->sandbox->ensureToStringAllowed((isset($context["rootCategory"]) || array_key_exists("rootCategory", $context) ? $context["rootCategory"] : (function () { throw new RuntimeError('Variable "rootCategory" does not exist.', 1, $this->source); })()), 1, $this->source));
        // line 2
        echo "
<div class=\"filter categories pb-3\">

    <h6 class=\"mb-0\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("general.filter." . $this->sandbox->ensureToStringAllowed((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 5, $this->source); })()), 5, $this->source)))), "html", null, true);
        echo "</h6>

    <div class=\"list-group\">

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "parentCategories", [], "any", false, false, true, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["parentCategory"]) {
            // line 10
            echo "
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\CategoryFilterExtension']->generateLink($this->sandbox->ensureToStringAllowed($context["parentCategory"], 11, $this->source), $this->sandbox->ensureToStringAllowed((isset($context["rootCategory"]) || array_key_exists("rootCategory", $context) ? $context["rootCategory"] : (function () { throw new RuntimeError('Variable "rootCategory" does not exist.', 11, $this->source); })()), 11, $this->source), true), "html", null, true);
            echo "\" class=\"list-group-item list-group-item-action\">
                <i class=\"fas fa-angle-left\"></i>
                ";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["parentCategory"], "name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "
            </a>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parentCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
        <!-- current category -->
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "currentCategory", [], "any", false, false, true, 19)) {
            // line 20
            echo "            <input type=\"hidden\" name=\"parentCategoryIds\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "currentCategory", [], "any", false, false, true, 20), "id", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\" />
            <span class=\"list-group-item list-group-item-secondary d-flex justify-content-between align-items-center\">
                <strong>";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "currentCategory", [], "any", false, false, true, 22), "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</strong>
                ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["indexedValues"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "currentCategory", [], "any", false, false, true, 23), "id", [], "any", false, false, true, 23), [], "array", true, true, true, 23)) {
                // line 24
                echo "                    <span class=\"badge badge-primary badge-pill\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["indexedValues"]) || array_key_exists("indexedValues", $context) ? $context["indexedValues"] : (function () { throw new RuntimeError('Variable "indexedValues" does not exist.', 24, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "currentCategory", [], "any", false, false, true, 24), "id", [], "any", false, false, true, 24), [], "array", false, false, true, 24), "count", [], "array", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "</span>
                ";
            }
            // line 26
            echo "            </span>
        ";
        }
        // line 28
        echo "
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "subCategories", [], "any", false, false, true, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
            // line 30
            echo "
            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\CategoryFilterExtension']->generateLink($this->sandbox->ensureToStringAllowed($context["subCategory"], 31, $this->source), $this->sandbox->ensureToStringAllowed((isset($context["rootCategory"]) || array_key_exists("rootCategory", $context) ? $context["rootCategory"] : (function () { throw new RuntimeError('Variable "rootCategory" does not exist.', 31, $this->source); })()), 31, $this->source), true), "html", null, true);
            echo "\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                <span>
                    <i class=\"fas fa-angle-right\"></i>
                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subCategory"], "name", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
                </span>
                ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, ($context["indexedValues"] ?? null), twig_get_attribute($this->env, $this->source, $context["subCategory"], "id", [], "any", false, false, true, 36), [], "array", true, true, true, 36)) {
                // line 37
                echo "                    <span class=\"badge badge-primary badge-pill\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["indexedValues"]) || array_key_exists("indexedValues", $context) ? $context["indexedValues"] : (function () { throw new RuntimeError('Variable "indexedValues" does not exist.', 37, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["subCategory"], "id", [], "any", false, false, true, 37), [], "array", false, false, true, 37), "count", [], "array", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "</span>
                ";
            }
            // line 39
            echo "            </a>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    </div>

</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/filters/select_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 42,  138 => 39,  132 => 37,  130 => 36,  125 => 34,  119 => 31,  116 => 30,  112 => 29,  109 => 28,  105 => 26,  99 => 24,  97 => 23,  93 => 22,  87 => 20,  85 => 19,  81 => 17,  71 => 13,  66 => 11,  63 => 10,  59 => 9,  52 => 5,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  set data = app_category_filter_prepare_data(currentValue, rootCategory) %}

<div class=\"filter categories pb-3\">

    <h6 class=\"mb-0\">{{ ('general.filter.' ~ label) |lower|trans }}</h6>

    <div class=\"list-group\">

        {% for parentCategory in data.parentCategories %}

            <a href=\"{{ app_category_filter_generate_link(parentCategory, rootCategory, true)  }}\" class=\"list-group-item list-group-item-action\">
                <i class=\"fas fa-angle-left\"></i>
                {{ parentCategory.name }}
            </a>

        {% endfor %}

        <!-- current category -->
        {%  if(data.currentCategory) %}
            <input type=\"hidden\" name=\"parentCategoryIds\" value=\"{{ data.currentCategory.id }}\" />
            <span class=\"list-group-item list-group-item-secondary d-flex justify-content-between align-items-center\">
                <strong>{{ data.currentCategory.name }}</strong>
                {%  if(indexedValues[data.currentCategory.id]) is defined %}
                    <span class=\"badge badge-primary badge-pill\">{{  indexedValues[data.currentCategory.id]['count']  }}</span>
                {% endif %}
            </span>
        {%  endif %}

        {% for subCategory in data.subCategories %}

            <a href=\"{{ app_category_filter_generate_link(subCategory, rootCategory, true)  }}\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                <span>
                    <i class=\"fas fa-angle-right\"></i>
                    {{ subCategory.name }}
                </span>
                {%  if(indexedValues[subCategory.id]) is defined %}
                    <span class=\"badge badge-primary badge-pill\">{{ indexedValues[subCategory.id]['count']  }}</span>
                {% endif %}
            </a>

        {% endfor %}

    </div>

</div>", "product/filters/select_category.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/filters/select_category.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 9, "if" => 19);
        static $filters = array("escape" => 5, "trans" => 5, "lower" => 5);
        static $functions = array("app_category_filter_prepare_data" => 1, "app_category_filter_generate_link" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans', 'lower'],
                ['app_category_filter_prepare_data', 'app_category_filter_generate_link']
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
