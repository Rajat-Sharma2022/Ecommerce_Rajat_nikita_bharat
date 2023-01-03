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

/* layouts/print_catalog.html.twig */
class __TwigTemplate_4d0c358d2c7516af1501e60be7e8cb24 extends Template
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
            'register_definition' => [$this, 'block_register_definition'],
            'inlinescripts' => [$this, 'block_inlinescripts'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/print_catalog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/print_catalog.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"\">
<head>

    ";
        // line 6
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 9
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/print/css/print-style.css\"/>

    <link href=\"https://fonts.googleapis.com/css?family=Hind+Guntur:300,400,500,600,700&display=swap\" rel=\"stylesheet\">
    ";
        // line 13
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/print/css/print-edit.css\" media=\"screen\" />
    ";
        }
        // line 16
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/print/css/print-preview.css\" media=\"screen\" />

    ";
        // line 18
        if ((array_key_exists("printermarks", $context) && ((isset($context["printermarks"]) || array_key_exists("printermarks", $context) ? $context["printermarks"] : (function () { throw new RuntimeError('Variable "printermarks" does not exist.', 18, $this->source); })()) == true))) {
            // line 19
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/pimcoreadmin/css/print/print-printermarks.css\" media=\"print\" />
    ";
        }
        // line 21
        echo "

    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>



    ";
        // line 27
        $this->displayBlock('headscripts', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('register_definition', $context, $blocks);
        // line 36
        echo "
</head>

<body>
<div class=\"site\">
    ";
        // line 41
        $this->displayBlock("content", $context, $blocks);
        echo "
</div>



";
        // line 46
        $this->displayBlock('inlinescripts', $context, $blocks);
        // line 49
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

    // line 6
    public function block_head_stylesheets_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 7
        echo "        ";
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

    // line 27
    public function block_headscripts_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headscripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headscripts"));

        // line 28
        echo "        ";
        echo $this->env->getFunction('pimcore_head_script')->getCallable()();
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_register_definition($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'register_definition');
    }

    // line 31
    public function block_register_definition_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "register_definition"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "register_definition"));

        // line 32
        echo "        <style type=\"text/css\">
            ";
        // line 33
        echo $this->env->getFunction('pimcore_placeholder')->getCallable()("register-title-definition");
        echo "
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_inlinescripts($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'inlinescripts');
    }

    // line 46
    public function block_inlinescripts_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inlinescripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inlinescripts"));

        // line 47
        echo "    ";
        echo $this->env->getFunction('pimcore_inline_script')->getCallable()();
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "layouts/print_catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 47,  222 => 46,  203 => 33,  200 => 32,  190 => 31,  171 => 28,  161 => 27,  142 => 7,  132 => 6,  113 => 49,  111 => 46,  103 => 41,  96 => 36,  94 => 31,  91 => 30,  89 => 27,  81 => 21,  77 => 19,  75 => 18,  71 => 16,  67 => 14,  65 => 13,  59 => 9,  57 => 6,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"\">
<head>

    {% block head_stylesheets deferred %}
        {{ pimcore_head_link() }}
    {% endblock %}

    <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/print/css/print-style.css\"/>

    <link href=\"https://fonts.googleapis.com/css?family=Hind+Guntur:300,400,500,600,700&display=swap\" rel=\"stylesheet\">
    {% if editmode %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/print/css/print-edit.css\" media=\"screen\" />
    {% endif %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/print/css/print-preview.css\" media=\"screen\" />

    {% if printermarks is defined and printermarks == true %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/pimcoreadmin/css/print/print-printermarks.css\" media=\"print\" />
    {% endif %}


    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>



    {% block headscripts deferred %}
        {{ pimcore_head_script() }}
    {% endblock %}

    {% block register_definition deferred %}
        <style type=\"text/css\">
            {{ pimcore_placeholder('register-title-definition') }}
        </style>
    {% endblock %}

</head>

<body>
<div class=\"site\">
    {{ block('content') }}
</div>



{% block inlinescripts deferred %}
    {{ pimcore_inline_script() }}
{% endblock %}

</body>
</html>
", "layouts/print_catalog.html.twig", "/var/www/html/EcommerceProject/ecom/templates/layouts/print_catalog.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 6, "if" => 13);
        static $filters = array();
        static $functions = array("pimcore_head_link" => 7, "pimcore_head_script" => 28, "pimcore_placeholder" => 33, "pimcore_inline_script" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                [],
                ['pimcore_head_link', 'pimcore_head_script', 'pimcore_placeholder', 'pimcore_inline_script']
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
