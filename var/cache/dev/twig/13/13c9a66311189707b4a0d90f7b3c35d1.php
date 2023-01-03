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

/* web2print/default_no_layout.html.twig */
class __TwigTemplate_baab2aa18be1161d23c73d29ed55c8b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "web2print/default_no_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "web2print/default_no_layout.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "

    ";
        // line 4
        $this->extensions['App\Twig\Extension\PrintCatalogExtension']->createRegisterTitleStyling(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 4, $this->source); })()), "getProperty", [0 => "print_register_title"], "method", false, false, true, 4), twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 4, $this->source); })()), "getProperty", [0 => "print_register_type"], "method", false, false, true, 4));
        // line 5
        echo "
    <div class=\"page ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\PrintCatalogExtension']->getRegisterName($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 6, $this->source); })()), "getProperty", [0 => "print_register_title"], "method", false, false, true, 6), 6, $this->source)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 6, $this->source); })()), "getProperty", [0 => "print_register_type"], "method", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\" id=\"documentpage-";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">

        <div>

            ";
        // line 10
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "areablock", "content", ["allowed" => [0 => "print-wysiwyg", 1 => "print-page-break", 2 => "print-title-page", 3 => "print-key-visual", 4 => "print-product-row", 5 => "print-product-table", 6 => "print-toc"]]);
        // line 22
        echo "

        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "web2print/default_no_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  85 => 10,  74 => 6,  71 => 5,  69 => 4,  65 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  block content %}


    {% do app_print_create_register(document.getProperty('print_register_title') , document.getProperty('print_register_type')) %}

    <div class=\"page {{ app_print_get_register_name(document.getProperty('print_register_title')) }} {{ document.getProperty('print_register_type') }}\" id=\"documentpage-{{ document.id }}\">

        <div>

            {{
            pimcore_areablock('content', {
                'allowed': [
                    'print-wysiwyg',
                    'print-page-break',
                    'print-title-page',
                    'print-key-visual',
                    'print-product-row',
                    'print-product-table',
                    'print-toc'
                ]
            })
            }}

        </div>

    </div>

{% endblock %}
", "web2print/default_no_layout.html.twig", "/var/www/html/EcommerceProject/ecom/templates/web2print/default_no_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "do" => 4);
        static $filters = array("escape" => 6);
        static $functions = array("app_print_create_register" => 4, "app_print_get_register_name" => 6, "pimcore_areablock" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'do'],
                ['escape'],
                ['app_print_create_register', 'app_print_get_register_name', 'pimcore_areablock']
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
