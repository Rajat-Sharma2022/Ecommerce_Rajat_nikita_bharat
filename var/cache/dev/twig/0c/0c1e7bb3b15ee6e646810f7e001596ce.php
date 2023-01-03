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

/* @PimcoreCustomerManagementFramework/preview/object_preview/link_activity_definition_preview.html.twig */
class __TwigTemplate_accd542bffb3a6411316b550755a4b3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/preview/object_preview/link_activity_definition_preview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/preview/object_preview/link_activity_definition_preview.html.twig"));

        // line 3
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcorecustomermanagementframework/vendor/clipboardjs/clipboard.min.js")], "method", false, false, true, 3);
        // line 4
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcorecustomermanagementframework/js/LinkActivityDefinition/preview.js")], "method", false, false, true, 4);
        // line 1
        $this->parent = $this->loadTemplate("@PimcoreCustomerManagementFramework/layout.html.twig", "@PimcoreCustomerManagementFramework/preview/object_preview/link_activity_definition_preview.html.twig", 1);
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
    <div class=\"wrapper\">
        <div class=\"content-wrapper\">

            <section class=\"content\">
                <div class=\"container\">

                    <div class=\"box box-info\">

                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                <i class=\"fa fa-link\"></i>
                                Link
                            </h3>
                        </div>
                        <div class=\"box-body\">
                            ";
        // line 23
        if (array_key_exists("activityDefinition", $context)) {
            // line 24
            echo "                                ";
            $context["link"] = $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getActivityDefinitionUrl($this->sandbox->ensureToStringAllowed((isset($context["activityDefinition"]) || array_key_exists("activityDefinition", $context) ? $context["activityDefinition"] : (function () { throw new RuntimeError('Variable "activityDefinition" does not exist.', 24, $this->source); })()), 24, $this->source));
            // line 25
            echo "                                ";
            if ((array_key_exists("link", $context) &&  !twig_test_empty((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 25, $this->source); })())))) {
                // line 26
                echo "                                    <a href=\"#\" data-clipboard-target=\"#js-copy-to-clipboard-container\" style=\"margin-right: 10px;\" class=\"btn btn-sm btn-default pull-left js-copy-to-clipboard\" title=\"copy to clipboard\">
                                        <i class=\"fa fa-clipboard\"></i>
                                    </a>

                                    <div id=\"js-copy-to-clipboard-container\" style=\"padding-top: 5px;\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 30, $this->source); })()), 30, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 30, $this->source); })()), 30, $this->source), "html", null, true);
                echo "</div>

                                ";
            } else {
                // line 33
                echo "                                    -
                                ";
            }
            // line 35
            echo "                            ";
        } else {
            // line 36
            echo "                                -
                            ";
        }
        // line 38
        echo "                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/preview/object_preview/link_activity_definition_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 38,  122 => 36,  119 => 35,  115 => 33,  107 => 30,  101 => 26,  98 => 25,  95 => 24,  93 => 23,  75 => 7,  65 => 6,  54 => 1,  52 => 4,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@PimcoreCustomerManagementFramework/layout.html.twig' %}

{% do pimcore_head_script().appendFile(asset('/bundles/pimcorecustomermanagementframework/vendor/clipboardjs/clipboard.min.js')) %}
{% do pimcore_head_script().appendFile(asset('/bundles/pimcorecustomermanagementframework/js/LinkActivityDefinition/preview.js')) %}

{% block content %}

    <div class=\"wrapper\">
        <div class=\"content-wrapper\">

            <section class=\"content\">
                <div class=\"container\">

                    <div class=\"box box-info\">

                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                <i class=\"fa fa-link\"></i>
                                Link
                            </h3>
                        </div>
                        <div class=\"box-body\">
                            {% if activityDefinition is defined %}
                                {% set link = cmf_activityDefinitionUrl(activityDefinition) %}
                                {% if link is defined and not link is empty %}
                                    <a href=\"#\" data-clipboard-target=\"#js-copy-to-clipboard-container\" style=\"margin-right: 10px;\" class=\"btn btn-sm btn-default pull-left js-copy-to-clipboard\" title=\"copy to clipboard\">
                                        <i class=\"fa fa-clipboard\"></i>
                                    </a>

                                    <div id=\"js-copy-to-clipboard-container\" style=\"padding-top: 5px;\" href=\"{{ link }}\">{{ link }}</div>

                                {% else %}
                                    -
                                {% endif %}
                            {% else %}
                                -
                            {% endif %}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

{% endblock %}", "@PimcoreCustomerManagementFramework/preview/object_preview/link_activity_definition_preview.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/preview/object_preview/link_activity_definition_preview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("do" => 3, "if" => 23, "set" => 24);
        static $filters = array("escape" => 30);
        static $functions = array("pimcore_head_script" => 3, "asset" => 3, "cmf_activityDefinitionUrl" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['do', 'if', 'set'],
                ['escape'],
                ['pimcore_head_script', 'asset', 'cmf_activityDefinitionUrl']
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
