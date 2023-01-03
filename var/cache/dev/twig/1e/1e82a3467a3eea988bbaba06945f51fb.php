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

/* @PimcoreEcommerceFramework/voucher/voucher_layout.html.twig */
class __TwigTemplate_0e22e81ab4fddddd4f6833ed83a7d689 extends Template
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
            'scripts' => [$this, 'block_scripts'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/voucher_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/voucher_layout.html.twig"));

        // line 1
        echo "<head>
    ";
        // line 2
        ob_start();
        // line 3
        echo "        ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreecommerceframework/vendor/bootstrap4/css/bootstrap.css")], "method", false, false, true, 3);
        // line 4
        echo "        ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreecommerceframework/vendor/flatpickr.min.css")], "method", false, false, true, 4);
        // line 5
        echo "        ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => "/bundles/pimcoreecommerceframework/vendor/fontawesome/css/fontawesome-all.min.css"], "method", false, false, true, 5);
        // line 6
        echo "        ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreecommerceframework/css/voucherservice/style.css")], "method", false, false, true, 6);
        // line 7
        echo "        ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "prependFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreecommerceframework/vendor/bootstrap4/js/bootstrap-native-v4.min.js")], "method", false, false, true, 7);
        // line 8
        echo "        ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreecommerceframework/vendor/chart.min.js")], "method", false, false, true, 8);
        // line 9
        echo "        ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreecommerceframework/vendor/flatpickr.min.js")], "method", false, false, true, 9);
        // line 10
        echo "        ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreecommerceframework/js/voucherservice/voucherSeriesTabScript.js")], "method", false, false, true, 10);
        // line 11
        echo "    ";
        $___internal_parse_10_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_parse_10_);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 16
        echo "</head>
<body>
    ";
        // line 19
        echo "    ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 22
        echo "    ";
        $context["colors"] = ["used" => "#F7355B", "free" => "#47BFBD", "reserved" => "#FDC45B"];
        // line 27
        echo "    ";
        $this->displayBlock("content", $context, $blocks);
        echo "
</body>
";
        $this->deferred->resolve($this, $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_head_stylesheets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head_stylesheets');
    }

    // line 13
    public function block_head_stylesheets_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 14
        echo "    ";
        echo $this->env->getFunction('pimcore_head_link')->getCallable()();
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_scripts($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'scripts');
    }

    // line 19
    public function block_scripts_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 20
        echo "        ";
        echo $this->env->getFunction('pimcore_head_script')->getCallable()();
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/voucher/voucher_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 20,  146 => 19,  127 => 14,  117 => 13,  97 => 27,  94 => 22,  91 => 19,  87 => 16,  85 => 13,  82 => 12,  80 => 2,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  65 => 7,  62 => 6,  59 => 5,  56 => 4,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    {% apply spaceless %}
        {% do pimcore_head_link().appendStylesheet(asset('/bundles/pimcoreecommerceframework/vendor/bootstrap4/css/bootstrap.css')) %}
        {% do pimcore_head_link().appendStylesheet(asset('/bundles/pimcoreecommerceframework/vendor/flatpickr.min.css')) %}
        {% do pimcore_head_link().appendStylesheet('/bundles/pimcoreecommerceframework/vendor/fontawesome/css/fontawesome-all.min.css') %}
        {% do pimcore_head_link().appendStylesheet(asset('/bundles/pimcoreecommerceframework/css/voucherservice/style.css')) %}
        {% do pimcore_head_script().prependFile(asset('/bundles/pimcoreecommerceframework/vendor/bootstrap4/js/bootstrap-native-v4.min.js')) %}
        {% do pimcore_head_script().appendFile(asset('/bundles/pimcoreecommerceframework/vendor/chart.min.js')) %}
        {% do pimcore_head_script().appendFile(asset('/bundles/pimcoreecommerceframework/vendor/flatpickr.min.js')) %}
        {% do pimcore_head_script().appendFile(asset('/bundles/pimcoreecommerceframework/js/voucherservice/voucherSeriesTabScript.js')) %}
    {% endapply %}

    {% block head_stylesheets deferred %}
    {{ pimcore_head_link() }}
    {% endblock %}
</head>
<body>
    {# output scripts added before #}
    {% block scripts deferred %}
        {{ pimcore_head_script() }}
    {% endblock %}
    {% set colors = {
        'used': \"#F7355B\",
        'free': \"#47BFBD\",
        'reserved': \"#FDC45B\"}
    %}
    {{ block('content') }}
</body>
", "@PimcoreEcommerceFramework/voucher/voucher_layout.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/voucher/voucher_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 2, "do" => 3, "block" => 13, "set" => 22);
        static $filters = array("spaceless" => 2);
        static $functions = array("pimcore_head_link" => 3, "asset" => 3, "pimcore_head_script" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'do', 'block', 'set'],
                ['spaceless'],
                ['pimcore_head_link', 'asset', 'pimcore_head_script']
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
