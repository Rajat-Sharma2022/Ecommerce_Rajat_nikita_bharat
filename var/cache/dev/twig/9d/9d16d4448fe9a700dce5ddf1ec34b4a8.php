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

/* @PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/header.html.twig */
class __TwigTemplate_6b3b18d51e092d4c0d9c4881c8e308ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/header.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ((isset($context["accessToTempCustomerFolder"]) || array_key_exists("accessToTempCustomerFolder", $context) ? $context["accessToTempCustomerFolder"] : (function () { throw new RuntimeError('Variable "accessToTempCustomerFolder" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    ";
            twig_get_attribute($this->env, $this->source, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getJsConfig(), "add", [0 => "registerNewCustomerAction", 1 => true], "method", false, false, true, 3);
        }
        // line 5
        echo "
<!-- Filters -->
<div class=\"box-header with-border\">
    <div class=\"row\">
        <div class=\"col-sm-3 col-md-6\">
            <h3 class=\"box-title\">
                <a href=\"#\" data-widget=\"collapse-trigger\">
                    <i class=\"fa fa-filter\"></i>
                    ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_filters", [], "admin"), "html", null, true);
        echo "
                </a>
            </h3>
        </div>

        ";
        // line 18
        if ( !(isset($context["hideAdvancedFilterSettings"]) || array_key_exists("hideAdvancedFilterSettings", $context) ? $context["hideAdvancedFilterSettings"] : (function () { throw new RuntimeError('Variable "hideAdvancedFilterSettings" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "            <div class=\"col-sm-9 col-md-6 text-right\">
                ";
            // line 20
            if ((isset($context["accessToTempCustomerFolder"]) || array_key_exists("accessToTempCustomerFolder", $context) ? $context["accessToTempCustomerFolder"] : (function () { throw new RuntimeError('Variable "accessToTempCustomerFolder" does not exist.', 20, $this->source); })())) {
                // line 21
                echo "                    <button type=\"button\" class=\"btn btn-primary\" id=\"add-new-customer\"
                            name=\"add-new-customer\">";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_new_customer", [], "admin"), "html", null, true);
                echo "</button>
                ";
            }
            // line 24
            echo "                <!--suppress HtmlFormInputWithoutLabel -->
                <select
                        id=\"filterDefinition[id]\"
                        name=\"filterDefinition[id]\"
                        onchange=\"this.form.submit()\"
                        class=\"form-control plugin-select2\"
                        data-select2-options='";
            // line 30
            echo twig_escape_filter($this->env, json_encode(["width" => "50%"]), "html", null, true);
            echo "'
                >
                    <option value=\"0\">";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_no_filter_selected", [], "admin"), "html", null, true);
            echo "</option>
                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filterDefinitions"]) || array_key_exists("filterDefinitions", $context) ? $context["filterDefinitions"] : (function () { throw new RuntimeError('Variable "filterDefinitions" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["singleFilterDefinition"]) {
                // line 34
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["singleFilterDefinition"], "id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, $context["singleFilterDefinition"], "id", [], "any", false, false, true, 34) == twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, true, 34))) ? ("selected") : (""));
                echo ">
                            ";
                // line 35
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["singleFilterDefinition"], "name", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "
                        </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['singleFilterDefinition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </select>

                <a class=\"btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></a>

            </div>
        ";
        }
        // line 44
        echo "    </div>

</div>
<!-- /.box-header -->

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  124 => 38,  115 => 35,  108 => 34,  104 => 33,  100 => 32,  95 => 30,  87 => 24,  82 => 22,  79 => 21,  77 => 20,  74 => 19,  72 => 18,  64 => 13,  54 => 5,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if accessToTempCustomerFolder %}
    {% do cmf_jsConfig().add('registerNewCustomerAction', true) %}
{% endif %}

<!-- Filters -->
<div class=\"box-header with-border\">
    <div class=\"row\">
        <div class=\"col-sm-3 col-md-6\">
            <h3 class=\"box-title\">
                <a href=\"#\" data-widget=\"collapse-trigger\">
                    <i class=\"fa fa-filter\"></i>
                    {{ 'cmf_filters_filters' | trans({}, 'admin') }}
                </a>
            </h3>
        </div>

        {% if not hideAdvancedFilterSettings %}
            <div class=\"col-sm-9 col-md-6 text-right\">
                {% if accessToTempCustomerFolder %}
                    <button type=\"button\" class=\"btn btn-primary\" id=\"add-new-customer\"
                            name=\"add-new-customer\">{{ 'cmf_filters_new_customer'| trans({}, 'admin') }}</button>
                {% endif %}
                <!--suppress HtmlFormInputWithoutLabel -->
                <select
                        id=\"filterDefinition[id]\"
                        name=\"filterDefinition[id]\"
                        onchange=\"this.form.submit()\"
                        class=\"form-control plugin-select2\"
                        data-select2-options='{{ {'width': '50%'} | json_encode() }}'
                >
                    <option value=\"0\">{{ 'cmf_filters_no_filter_selected' | trans({}, 'admin') }}</option>
                    {% for singleFilterDefinition in filterDefinitions %}
                        <option value=\"{{ singleFilterDefinition.id }}\" {{ singleFilterDefinition.id == filterDefinition.id ? 'selected' : '' }}>
                            {{ singleFilterDefinition.name }}
                        </option>
                    {% endfor %}
                </select>

                <a class=\"btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></a>

            </div>
        {% endif %}
    </div>

</div>
<!-- /.box-header -->

", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/header.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/customers/partials/list_filter/box/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "do" => 3, "for" => 33);
        static $filters = array("escape" => 13, "trans" => 13, "json_encode" => 30);
        static $functions = array("cmf_jsConfig" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'do', 'for'],
                ['escape', 'trans', 'json_encode'],
                ['cmf_jsConfig']
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
