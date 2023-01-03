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

/* @PimcoreCustomerManagementFramework/layout.html.twig */
class __TwigTemplate_616482d70c7334f3fbbd10d57ffd3343 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'headscripts' => [$this, 'block_headscripts'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, true, 2), "locale", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Customer Management</title>

    ";
        // line 10
        ob_start();
        // line 11
        echo "        ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->minifiedAssetUrl("/bundles/pimcorecustomermanagementframework/admin/css/lib.css")], "method", false, false, true, 11);
        // line 12
        echo "        ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->minifiedAssetUrl("/bundles/pimcorecustomermanagementframework/admin/css/cmf.css")], "method", false, false, true, 12);
        // line 13
        echo "    ";
        $___internal_parse_11_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        echo twig_spaceless($___internal_parse_11_);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "</head>
<body class=\"sidebar-collapse\">

<div class=\"wrapper\">
    <div class=\"content-wrapper\">
        ";
        // line 23
        $this->displayBlock("content", $context, $blocks);
        echo "
    </div>
</div>

";
        // line 27
        twig_get_attribute($this->env, $this->source, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getJsConfig(), "generateScriptTag", [0 => false], "method", false, false, true, 27);
        // line 28
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "captureStart", [], "method", false, false, true, 28);
        // line 29
        echo $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getJsConfig();
        echo "
";
        // line 30
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "captureEnd", [], "method", false, false, true, 30);
        // line 31
        echo "
";
        // line 32
        ob_start();
        // line 33
        echo "    ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->minifiedAssetUrl("/bundles/pimcorecustomermanagementframework/admin/js/cmf.js")], "method", false, false, true, 33);
        // line 34
        echo "    ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "prependFile", [0 => $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->minifiedAssetUrl("/bundles/pimcorecustomermanagementframework/admin/js/lib.js")], "method", false, false, true, 34);
        $___internal_parse_12_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        echo twig_spaceless($___internal_parse_12_);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('headscripts', $context, $blocks);
        // line 40
        echo "
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_head_stylesheets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head_stylesheets');
    }

    // line 15
    public function block_head_stylesheets_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 16
        echo "    ";
        echo $this->env->getFunction('pimcore_head_link')->getCallable()();
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_headscripts($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'headscripts');
    }

    // line 37
    public function block_headscripts_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headscripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headscripts"));

        // line 38
        echo $this->env->getFunction('pimcore_head_script')->getCallable()();
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 38,  171 => 37,  152 => 16,  142 => 15,  123 => 40,  121 => 37,  118 => 36,  116 => 32,  112 => 34,  109 => 33,  107 => 32,  104 => 31,  102 => 30,  98 => 29,  96 => 28,  94 => 27,  87 => 23,  80 => 18,  78 => 15,  75 => 14,  73 => 10,  70 => 13,  67 => 12,  64 => 11,  62 => 10,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Customer Management</title>

    {% apply spaceless %}
        {% do pimcore_head_link().appendStylesheet(cmf_minifiedAssetUrl('/bundles/pimcorecustomermanagementframework/admin/css/lib.css')) %}
        {% do pimcore_head_link().appendStylesheet(cmf_minifiedAssetUrl('/bundles/pimcorecustomermanagementframework/admin/css/cmf.css')) %}
    {% endapply %}

    {% block head_stylesheets deferred %}
    {{ pimcore_head_link() }}
    {% endblock %}
</head>
<body class=\"sidebar-collapse\">

<div class=\"wrapper\">
    <div class=\"content-wrapper\">
        {{ block('content') }}
    </div>
</div>

{% do cmf_jsConfig().generateScriptTag(false) %}
{% do pimcore_head_script().captureStart() %}
{{ cmf_jsConfig()|raw }}
{% do pimcore_head_script().captureEnd() %}

{% apply spaceless %}
    {% do pimcore_head_script().appendFile(cmf_minifiedAssetUrl('/bundles/pimcorecustomermanagementframework/admin/js/cmf.js')) %}
    {% do pimcore_head_script().prependFile(cmf_minifiedAssetUrl('/bundles/pimcorecustomermanagementframework/admin/js/lib.js')) %}
{% endapply %}

{% block headscripts deferred %}
{{ pimcore_head_script() }}
{% endblock %}

</body>
</html>
", "@PimcoreCustomerManagementFramework/layout.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 10, "do" => 11, "block" => 15);
        static $filters = array("escape" => 2, "spaceless" => 10, "raw" => 29);
        static $functions = array("pimcore_head_link" => 11, "cmf_minifiedAssetUrl" => 11, "cmf_jsConfig" => 27, "pimcore_head_script" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'do', 'block'],
                ['escape', 'spaceless', 'raw'],
                ['pimcore_head_link', 'cmf_minifiedAssetUrl', 'cmf_jsConfig', 'pimcore_head_script']
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
