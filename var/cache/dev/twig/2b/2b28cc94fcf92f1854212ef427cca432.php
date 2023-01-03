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

/* @PimcoreCustomerManagementFramework/admin/duplicates/list.html.twig */
class __TwigTemplate_7acfc66cd753828a2b584c524650c53b extends Template
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
        // line 1
        return "@PimcoreCustomerManagementFramework/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/duplicates/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/duplicates/list.html.twig"));

        $this->parent = $this->loadTemplate("@PimcoreCustomerManagementFramework/layout.html.twig", "@PimcoreCustomerManagementFramework/admin/duplicates/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        twig_get_attribute($this->env, $this->source, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getJsConfig(), "add", [0 => "declineDuplicates", 1 => true], "method", false, false, true, 5);
        // line 6
        echo "
    <div class=\"container\">
        <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_duplicates_potential_duplicates", [], "admin"), "html", null, true);
        echo "</h2>
        <div>
            ";
        // line 10
        echo twig_include($this->env, $context, "@PimcoreCustomerManagementFramework/admin/duplicates/partials/list_filter.html.twig");
        echo "
        </div>

        <div>
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs\" role=\"tablist\" style=\"margin-bottom:20px;\">
                <li role=\"presentation\" ";
        // line 16
        echo (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, true, 16), "get", [0 => "declined"], "method", false, false, true, 16)) ? ("class=\"active\"") : (""));
        echo ">
                    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["declined" => 0]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_duplicates_current", [], "admin"), "html", null, true);
        echo "</a>
                </li>
                <li role=\"presentation\" ";
        // line 19
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, true, 19), "get", [0 => "declined"], "method", false, false, true, 19)) ? ("class=\"active\"") : (""));
        echo ">
                    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["declined" => 1]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_duplicates_declined", [], "admin"), "html", null, true);
        echo "</a>
                </li>
            </ul>

        </div>

        <table class=\"table\">

            <thead>
                <th colspan=\"42\">
                    <h4>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_duplicates_number_total", [], "admin"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 30, $this->source); })()), "getTotalItemCount", [], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "</h4>
                </th>
            </thead>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["duplicates"]) || array_key_exists("duplicates", $context) ? $context["duplicates"] : (function () { throw new RuntimeError('Variable "duplicates" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["duplicate"]) {
            // line 34
            echo "                ";
            $context["listData"] = twig_get_attribute($this->env, $this->source, (isset($context["duplicatesView"]) || array_key_exists("duplicatesView", $context) ? $context["duplicatesView"] : (function () { throw new RuntimeError('Variable "duplicatesView" does not exist.', 34, $this->source); })()), "listData", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["duplicate"], "getDuplicateCustomers", [], "any", false, false, true, 34), 0, [], "array", false, false, true, 34)], "method", false, false, true, 34);
            // line 35
            echo "
                <tbody id=\"customerduplicates_";
            // line 36
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["duplicate"], "getDuplicateCustomers", [], "any", false, false, true, 36), 0, [], "array", false, false, true, 36), "getId", [], "method", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["duplicate"], "getDuplicateCustomers", [], "any", false, false, true, 36), 1, [], "array", false, false, true, 36), "getId", [], "method", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\" class=\"js-duplicates-item duplicates-item\" >
                    <tr>
                        <td colspan=\"99\">
                            <a class=\"btn btn-primary btn-xs pull-right\" onClick=\"new window.top.pimcore.plugin.objectmerger.panel(";
            // line 39
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["duplicate"], "getDuplicateCustomers", [], "any", false, false, true, 39), 0, [], "array", false, false, true, 39), "getId", [], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["duplicate"], "getDuplicateCustomers", [], "any", false, false, true, 39), 1, [], "array", false, false, true, 39), "getId", [], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "); \">
                                ";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_duplicates_merge", [], "admin"), "html", null, true);
            echo "
                            </a>
                            ";
            // line 42
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, true, 42), "get", [0 => "declined"], "method", false, false, true, 42)) {
                // line 43
                echo "                                <a class=\"btn btn-danger btn-xs pull-right js-decline-duplicate\" data-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["duplicate"], "id", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "\" style=\"margin-right: 5px;\">
                                    ";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_duplicates_decline_duplicate", [], "admin"), "html", null, true);
                echo "
                                </a>
                            ";
            }
            // line 47
            echo "
                            ";
            // line 48
            if ($this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->inDebug()) {
                // line 49
                echo "                                <a class=\"btn btn-default btn-xs pull-right\" style=\"margin-right: 5px;\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"<div style='text-align:left;'><strong>matched field combinations (duplicate ID ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["duplicate"], "id", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                echo "):</strong><br/><br/>";
                echo twig_escape_filter($this->env, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->printFieldCombinations($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["duplicate"], "getFieldCombinations", [], "any", false, false, true, 49), 49, $this->source)), "html", null, true);
                echo "</div>\">info (debug)</a>
                            ";
            }
            // line 51
            echo "                        </td>
                    </tr>

                    <tr>
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listData"]) || array_key_exists("listData", $context) ? $context["listData"] : (function () { throw new RuntimeError('Variable "listData" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                // line 56
                echo "                            <th>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["label"], 56, $this->source), "html", null, true);
                echo "</th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    </tr>

                    ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["duplicate"], "getDuplicateCustomers", [], "method", false, false, true, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 61
                echo "
                        <tr>
                            ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["duplicatesView"]) || array_key_exists("duplicatesView", $context) ? $context["duplicatesView"] : (function () { throw new RuntimeError('Variable "duplicatesView" does not exist.', 63, $this->source); })()), "listData", [0 => $context["customer"]], "method", false, false, true, 63));
                foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                    // line 64
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 64, $this->source), "html", null, true);
                    echo "</td>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "            </tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['duplicate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
        </table>

        <div class=\"text-center\">
            ";
        // line 74
        echo twig_include($this->env, $context, "@PimcoreCustomerManagementFramework/admin/partial/pagination/default.html.twig");
        echo "
        </div>
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/duplicates/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 74,  244 => 70,  237 => 68,  230 => 66,  221 => 64,  217 => 63,  213 => 61,  209 => 60,  205 => 58,  196 => 56,  192 => 55,  186 => 51,  178 => 49,  176 => 48,  173 => 47,  167 => 44,  162 => 43,  160 => 42,  155 => 40,  149 => 39,  141 => 36,  138 => 35,  135 => 34,  131 => 33,  123 => 30,  108 => 20,  104 => 19,  97 => 17,  93 => 16,  84 => 10,  79 => 8,  75 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@PimcoreCustomerManagementFramework/layout.html.twig' %}

{% block content %}

    {% do cmf_jsConfig().add('declineDuplicates', true) %}

    <div class=\"container\">
        <h2>{{ 'cmf_duplicates_potential_duplicates' | trans({}, 'admin') }}</h2>
        <div>
            {{ include('@PimcoreCustomerManagementFramework/admin/duplicates/partials/list_filter.html.twig') }}
        </div>

        <div>
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs\" role=\"tablist\" style=\"margin-bottom:20px;\">
                <li role=\"presentation\" {{ (not(app.request.get('declined'))) ? 'class=\"active\"' : '' }}>
                    <a href=\"{{ pimcore_url({'declined': 0}) }}\">{{ 'cmf_duplicates_current' | trans({}, 'admin') }}</a>
                </li>
                <li role=\"presentation\" {{ (app.request.get('declined')) ? 'class=\"active\"' : '' }}>
                    <a href=\"{{ pimcore_url({'declined': 1}) }}\">{{ 'cmf_duplicates_declined' | trans({}, 'admin') }}</a>
                </li>
            </ul>

        </div>

        <table class=\"table\">

            <thead>
                <th colspan=\"42\">
                    <h4>{{ 'cmf_duplicates_number_total' | trans({}, 'admin') }}: {{ paginator.getTotalItemCount() }}</h4>
                </th>
            </thead>
            {% for duplicate in duplicates %}
                {% set listData = duplicatesView.listData(duplicate.getDuplicateCustomers[0]) %}

                <tbody id=\"customerduplicates_{{ duplicate.getDuplicateCustomers[0].getId() }}_{{ duplicate.getDuplicateCustomers[1].getId() }}\" class=\"js-duplicates-item duplicates-item\" >
                    <tr>
                        <td colspan=\"99\">
                            <a class=\"btn btn-primary btn-xs pull-right\" onClick=\"new window.top.pimcore.plugin.objectmerger.panel({{ duplicate.getDuplicateCustomers[0].getId() }}, {{ duplicate.getDuplicateCustomers[1].getId() }}); \">
                                {{ 'cmf_duplicates_merge' | trans({}, 'admin')  }}
                            </a>
                            {% if(not app.request.get('declined')) %}
                                <a class=\"btn btn-danger btn-xs pull-right js-decline-duplicate\" data-id=\"{{ duplicate.id }}\" style=\"margin-right: 5px;\">
                                    {{ 'cmf_duplicates_decline_duplicate' | trans({}, 'admin') }}
                                </a>
                            {% endif %}

                            {% if( cmf_inDebug() ) %}
                                <a class=\"btn btn-default btn-xs pull-right\" style=\"margin-right: 5px;\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"<div style='text-align:left;'><strong>matched field combinations (duplicate ID {{ duplicate.id }}):</strong><br/><br/>{{ duplicate.getFieldCombinations | cmf_printFieldCombinations }}</div>\">info (debug)</a>
                            {% endif %}
                        </td>
                    </tr>

                    <tr>
                        {% for label, value in listData %}
                            <th>{{ label }}</th>
                        {% endfor %}
                    </tr>

                    {% for customer in duplicate.getDuplicateCustomers() %}

                        <tr>
                            {% for label, value in duplicatesView.listData(customer) %}
                                <td>{{ value }}</td>
                            {% endfor %}
                        </tr>
                    {% endfor %}
            </tbody>
            {% endfor %}

        </table>

        <div class=\"text-center\">
            {{ include('@PimcoreCustomerManagementFramework/admin/partial/pagination/default.html.twig') }}
        </div>
    </div>


{% endblock %}", "@PimcoreCustomerManagementFramework/admin/duplicates/list.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/duplicates/list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("do" => 5, "for" => 33, "set" => 34, "if" => 42);
        static $filters = array("escape" => 8, "trans" => 8, "cmf_printFieldCombinations" => 49);
        static $functions = array("cmf_jsConfig" => 5, "include" => 10, "pimcore_url" => 17, "cmf_inDebug" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['do', 'for', 'set', 'if'],
                ['escape', 'trans', 'cmf_printFieldCombinations'],
                ['cmf_jsConfig', 'include', 'pimcore_url', 'cmf_inDebug']
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
