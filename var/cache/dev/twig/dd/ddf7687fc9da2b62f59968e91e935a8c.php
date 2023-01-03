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

/* @PimcoreCustomerManagementFramework/admin/activities/list.html.twig */
class __TwigTemplate_dd21e6c2b8886e63fc26fa2f6e489e41 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/activities/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/activities/list.html.twig"));

        $this->parent = $this->loadTemplate("@PimcoreCustomerManagementFramework/layout.html.twig", "@PimcoreCustomerManagementFramework/admin/activities/list.html.twig", 1);
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
        twig_get_attribute($this->env, $this->source, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getJsConfig(), "add", [0 => "formAutoSubmit", 1 => true], "method", false, false, true, 5);
        // line 6
        echo "
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 7, $this->source); })()), "totalItemCount", [], "any", false, false, true, 7)) {
            // line 8
            echo "        ";
            $context["contextBoxClasses"] = [0 => "no-padding", 1 => "table-responsive"];
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["contextBoxClasses"] = [];
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    <section class=\"content\">
        <div class=\"box box-info\">
            <div class=\"box-header with-border with-form\">
                <h3 class=\"box-title\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_activities_activities", [], "admin"), "html", null, true);
        echo "
                </h3>

                <div class=\"box-tools pull-right\">
                    <form>
                        <div class=\"form-group\">
                            <select name=\"type\" class=\"form-control js-form-auto-submit\">
                                <option value=\"\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_activities_all_activity_types", [], "admin"), "html", null, true);
        echo "</option>
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 26
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["type"], 26, $this->source), "html", null, true);
            echo "\" ";
            echo ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 26, $this->source); })()) == $context["type"])) ? ("selected=\"selected\"") : (""));
            echo ">
                                        ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["type"], 27, $this->source), [], "admin"), "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                            </select>

                            <input type=\"hidden\" name=\"customerId\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, true, 32), "get", [0 => "customerId"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "\"/>
                        </div>
                    </form>
                </div>
            </div>

            <div class=\"box-body ";
        // line 38
        echo twig_escape_filter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed((isset($context["contextBoxClasses"]) || array_key_exists("contextBoxClasses", $context) ? $context["contextBoxClasses"] : (function () { throw new RuntimeError('Variable "contextBoxClasses" does not exist.', 38, $this->source); })()), 38, $this->source), " "), "html", null, true);
        echo "\">
                ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 39, $this->source); })()), "totalItemCount", [], "any", false, false, true, 39)) {
            // line 40
            echo "                    <table class=\"table table-striped table-bordered table-hover\">
                        <tr>
                            <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_activities_activity", [], "admin"), "html", null, true);
            echo " </th>
                            <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_activities_activity_date", [], "admin"), "html", null, true);
            echo "</th>
                            <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_activities_activity_details", [], "admin"), "html", null, true);
            echo "</th>
                        </tr>

                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 48
                echo "
                            <tr>
                                <td width=\"300\">
                                    ";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, true, 51), 51, $this->source), [], "admin"), "html", null, true);
                echo "
                                    <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customermanagementframework_admin_activities_detail", ["activityId" => twig_get_attribute($this->env, $this->source,                 // line 53
$context["activity"], "id", [], "any", false, false, true, 53), "customerId" => twig_get_attribute($this->env, $this->source,                 // line 54
(isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, true, 54)]), "html", null, true);
                // line 56
                echo "\" class=\"btn btn-default btn-xs\">
                                        ";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_activities_details", [], "admin"), "html", null, true);
                echo "
                                    </a>
                                </td>
                                <td width=\"160\">";
                // line 60
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "activityDate", [], "any", false, false, true, 60), "formatLocalized", [0 => "%x %X"], "method", false, false, true, 60), 60, $this->source), "html", null, true);
                echo "</td>
                                <td>

                                    ";
                // line 63
                $context["data"] = twig_get_attribute($this->env, $this->source, (isset($context["activityView"]) || array_key_exists("activityView", $context) ? $context["activityView"] : (function () { throw new RuntimeError('Variable "activityView" does not exist.', 63, $this->source); })()), "overviewAdditionalData", [0 => $context["activity"]], "method", false, false, true, 63);
                // line 64
                echo "                                    ";
                if ( !twig_test_empty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()))) {
                    // line 65
                    echo "                                        <table class=\"overview-data-table\">
                                            <tr>
                                                ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 67, $this->source); })()));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 68
                        echo "                                                    <th>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 68, $this->source), "html", null, true);
                        echo "</th>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "                                            </tr>
                                            <tr>
                                                ";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 72, $this->source); })()));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 73
                        echo "                                                    <td>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 73, $this->source), "html", null, true);
                        echo "</td>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                                            </tr>
                                        </table>
                                    ";
                }
                // line 78
                echo "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "
                    </table>

                    ";
            // line 84
            echo twig_include($this->env, $context, "@PimcoreCustomerManagementFramework/admin/partial/pagination/default.html.twig");
            echo "
                ";
        } else {
            // line 86
            echo "
                    <div class=\"callout callout-warning\">
                        <p>";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_activities_no_activity_found", [], "admin"), "html", null, true);
            echo "</p>
                    </div>

                ";
        }
        // line 92
        echo "            </div>
        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/activities/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 92,  268 => 88,  264 => 86,  259 => 84,  254 => 81,  246 => 78,  241 => 75,  232 => 73,  228 => 72,  224 => 70,  215 => 68,  211 => 67,  207 => 65,  204 => 64,  202 => 63,  196 => 60,  190 => 57,  187 => 56,  185 => 54,  184 => 53,  183 => 52,  179 => 51,  174 => 48,  170 => 47,  164 => 44,  160 => 43,  156 => 42,  152 => 40,  150 => 39,  146 => 38,  137 => 32,  133 => 30,  124 => 27,  117 => 26,  113 => 25,  109 => 24,  99 => 17,  92 => 12,  89 => 11,  86 => 10,  83 => 9,  80 => 8,  78 => 7,  75 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@PimcoreCustomerManagementFramework/layout.html.twig' %}

{% block content %}

    {% do cmf_jsConfig().add('formAutoSubmit', true) %}

    {% if activities.totalItemCount %}
        {% set contextBoxClasses = ['no-padding', 'table-responsive'] %}
    {% else %}
        {% set contextBoxClasses = [] %}
    {% endif %}

    <section class=\"content\">
        <div class=\"box box-info\">
            <div class=\"box-header with-border with-form\">
                <h3 class=\"box-title\">
                    {{ 'cmf_activities_activities' | trans({}, 'admin') }}
                </h3>

                <div class=\"box-tools pull-right\">
                    <form>
                        <div class=\"form-group\">
                            <select name=\"type\" class=\"form-control js-form-auto-submit\">
                                <option value=\"\">{{ 'cmf_activities_all_activity_types' | trans({}, 'admin') }}</option>
                                {% for type in types %}
                                    <option value=\"{{ type }}\" {{ selectedType == type ? 'selected=\"selected\"' : '' }}>
                                        {{ type| trans({}, 'admin') }}
                                    </option>
                                {% endfor %}
                            </select>

                            <input type=\"hidden\" name=\"customerId\" value=\"{{ app.request.get('customerId') }}\"/>
                        </div>
                    </form>
                </div>
            </div>

            <div class=\"box-body {{ contextBoxClasses | join(' ')}}\">
                {% if activities.totalItemCount %}
                    <table class=\"table table-striped table-bordered table-hover\">
                        <tr>
                            <th>{{ 'cmf_activities_activity' | trans({}, 'admin') }} </th>
                            <th>{{ 'cmf_activities_activity_date' | trans({}, 'admin') }}</th>
                            <th>{{ 'cmf_activities_activity_details' | trans({}, 'admin') }}</th>
                        </tr>

                        {% for activity in activities %}

                            <tr>
                                <td width=\"300\">
                                    {{ activity.type | trans({}, 'admin') }}
                                    <a href=\"{{ path('customermanagementframework_admin_activities_detail', {
                                            activityId: activity.id,
                                            customerId: customer.id
                                        }
                                    )  }}\" class=\"btn btn-default btn-xs\">
                                        {{ 'cmf_activities_details' | trans({}, 'admin') }}
                                    </a>
                                </td>
                                <td width=\"160\">{{ activity.activityDate.formatLocalized('%x %X') }}</td>
                                <td>

                                    {% set data = activityView.overviewAdditionalData(activity) %}
                                    {% if not data is empty %}
                                        <table class=\"overview-data-table\">
                                            <tr>
                                                {% for key, value in data %}
                                                    <th>{{ key }}</th>
                                                {% endfor %}
                                            </tr>
                                            <tr>
                                                {% for key, value in data %}
                                                    <td>{{ value }}</td>
                                                {% endfor %}
                                            </tr>
                                        </table>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}

                    </table>

                    {{ include('@PimcoreCustomerManagementFramework/admin/partial/pagination/default.html.twig') }}
                {% else %}

                    <div class=\"callout callout-warning\">
                        <p>{{ 'cmf_activities_no_activity_found' | trans({}, 'admin') }}</p>
                    </div>

                {% endif %}
            </div>
        </div>
    </section>

{% endblock %}", "@PimcoreCustomerManagementFramework/admin/activities/list.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/activities/list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("do" => 5, "if" => 7, "set" => 8, "for" => 25);
        static $filters = array("escape" => 17, "trans" => 17, "join" => 38);
        static $functions = array("cmf_jsConfig" => 5, "path" => 52, "include" => 84);

        try {
            $this->sandbox->checkSecurity(
                ['do', 'if', 'set', 'for'],
                ['escape', 'trans', 'join'],
                ['cmf_jsConfig', 'path', 'include']
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
