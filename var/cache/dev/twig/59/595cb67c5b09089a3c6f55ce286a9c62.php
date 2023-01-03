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

/* @PimcoreCustomerManagementFramework/admin/activities/detail.html.twig */
class __TwigTemplate_6d9f34f090667be167dc8d51f1fade89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/activities/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/activities/detail.html.twig"));

        $this->parent = $this->loadTemplate("@PimcoreCustomerManagementFramework/layout.html.twig", "@PimcoreCustomerManagementFramework/admin/activities/detail.html.twig", 1);
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
        if (array_key_exists("activity", $context)) {
            // line 6
            echo "
        <section class=\"content\">

            ";
            // line 9
            $context["template"] = twig_get_attribute($this->env, $this->source, (isset($context["activityView"]) || array_key_exists("activityView", $context) ? $context["activityView"] : (function () { throw new RuntimeError('Variable "activityView" does not exist.', 9, $this->source); })()), "detailviewTemplate", [0 => (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 9, $this->source); })())], "method", false, false, true, 9);
            // line 10
            echo "            ";
            if ( !twig_test_empty((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 10, $this->source); })()))) {
                // line 11
                echo "
                ";
                // line 12
                echo twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 12, $this->source); })()), 12, $this->source));
                echo "
            ";
            } else {
                // line 14
                echo "
                ";
                // line 15
                $context["visibleAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["activityView"]) || array_key_exists("activityView", $context) ? $context["activityView"] : (function () { throw new RuntimeError('Variable "activityView" does not exist.', 15, $this->source); })()), "detailviewData", [0 => (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 15, $this->source); })())], "method", false, false, true, 15);
                // line 16
                echo "
                <div class=\"box box-info\">
                    <div class=\"box-header with-border with-form\">
                        <h3 class=\"box-title\">
                            ";
                // line 20
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "
                        </h3>

                        <div>
                            <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customermanagementframework_admin_activities_list", ["customerId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, true, 24), "get", [0 => "customerId"], "method", false, false, true, 24)]), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">&laquo; back</a>
                        </div>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"row\">
                            ";
                // line 30
                $context["chunkSize"] = $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->calculateArrayChunkSize($this->sandbox->ensureToStringAllowed((isset($context["visibleAttributes"]) || array_key_exists("visibleAttributes", $context) ? $context["visibleAttributes"] : (function () { throw new RuntimeError('Variable "visibleAttributes" does not exist.', 30, $this->source); })()), 30, $this->source));
                // line 31
                echo "
                            ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["visibleAttributes"]) || array_key_exists("visibleAttributes", $context) ? $context["visibleAttributes"] : (function () { throw new RuntimeError('Variable "visibleAttributes" does not exist.', 32, $this->source); })()), (isset($context["chunkSize"]) || array_key_exists("chunkSize", $context) ? $context["chunkSize"] : (function () { throw new RuntimeError('Variable "chunkSize" does not exist.', 32, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                    // line 33
                    echo "
                                <div class=\"col col-sm-6\">
                                    <table class=\"table table-striped\">

                                        ";
                    // line 37
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 38
                        echo "                                            <tr>
                                                <th width=\"200\">";
                        // line 39
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 39, $this->source), "html", null, true);
                        echo "</th>
                                                <td>
                                                    ";
                        // line 41
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 41, $this->source), "html", null, true);
                        echo "
                                                </td>
                                            </tr>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "
                                    </table>
                                </div>

                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                        </div>
                    </div>
                </div>

            ";
            }
            // line 55
            echo "
        </section>

    ";
        }
        // line 59
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/activities/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 59,  174 => 55,  167 => 50,  157 => 45,  147 => 41,  142 => 39,  139 => 38,  135 => 37,  129 => 33,  125 => 32,  122 => 31,  120 => 30,  111 => 24,  104 => 20,  98 => 16,  96 => 15,  93 => 14,  88 => 12,  85 => 11,  82 => 10,  80 => 9,  75 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@PimcoreCustomerManagementFramework/layout.html.twig' %}

{% block content %}

    {% if activity is defined %}

        <section class=\"content\">

            {% set template = activityView.detailviewTemplate(activity) %}
            {% if not template is empty %}

                {{ include(template) }}
            {% else %}

                {% set visibleAttributes = activityView.detailviewData(activity) %}

                <div class=\"box box-info\">
                    <div class=\"box-header with-border with-form\">
                        <h3 class=\"box-title\">
                            {{ activity.type }}
                        </h3>

                        <div>
                            <a href=\"{{ path('customermanagementframework_admin_activities_list', {customerId: app.request.get('customerId')}) }}\" class=\"btn btn-default btn-xs\">&laquo; back</a>
                        </div>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"row\">
                            {% set chunkSize = cmf_arrayChunkSize(visibleAttributes)  %}

                            {% for attributes in visibleAttributes|batch(chunkSize) %}

                                <div class=\"col col-sm-6\">
                                    <table class=\"table table-striped\">

                                        {% for key, value in attributes %}
                                            <tr>
                                                <th width=\"200\">{{ key }}</th>
                                                <td>
                                                    {{ value }}
                                                </td>
                                            </tr>
                                        {% endfor %}

                                    </table>
                                </div>

                            {% endfor %}
                        </div>
                    </div>
                </div>

            {% endif %}

        </section>

    {% endif %}


{% endblock %}", "@PimcoreCustomerManagementFramework/admin/activities/detail.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/activities/detail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "set" => 9, "for" => 32);
        static $filters = array("escape" => 20, "batch" => 32);
        static $functions = array("include" => 12, "path" => 24, "cmf_arrayChunkSize" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'batch'],
                ['include', 'path', 'cmf_arrayChunkSize']
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
