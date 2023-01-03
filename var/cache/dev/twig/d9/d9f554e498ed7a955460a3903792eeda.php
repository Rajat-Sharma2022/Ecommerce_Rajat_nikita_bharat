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

/* default/generic_mail.html.twig */
class __TwigTemplate_3a43e8ee567a0b10fdb55ed58ea00df7 extends Template
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
        return "layouts/email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/generic_mail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/generic_mail.html.twig"));

        $this->parent = $this->loadTemplate("layouts/email.html.twig", "default/generic_mail.html.twig", 1);
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
    <table class=\"spacer\">
        <tbody>
        <tr>
            <td height=\"16px\" style=\"font-size:16px;line-height:16px;\">&#xA0;</td>
        </tr>
        </tbody>
    </table>
    <table class=\"row\">
        <tbody>
        <tr>
            <th class=\"small-12 large-12 columns first last\">
                <table>
                    <tr>
                        <th>

                            <h3>";
        // line 20
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "greeting");
        echo "</h3>
                            <p>";
        // line 21
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "greeting_text");
        echo "</p>
                        </th>
                    </tr>
                </table>
            </th>
        </tr>
        </tbody>
    </table>

    ";
        // line 30
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "areablock", "content", ["allowed" => [0 => "email-image", 1 => "email-wysiwyg", 2 => "email-teaser", 3 => "email-news"]]);
        // line 39
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/generic_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  104 => 30,  92 => 21,  88 => 20,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends('layouts/email.html.twig') %}

{% block content %}

    <table class=\"spacer\">
        <tbody>
        <tr>
            <td height=\"16px\" style=\"font-size:16px;line-height:16px;\">&#xA0;</td>
        </tr>
        </tbody>
    </table>
    <table class=\"row\">
        <tbody>
        <tr>
            <th class=\"small-12 large-12 columns first last\">
                <table>
                    <tr>
                        <th>

                            <h3>{{ pimcore_input('greeting') }}</h3>
                            <p>{{ pimcore_wysiwyg('greeting_text') }}</p>
                        </th>
                    </tr>
                </table>
            </th>
        </tr>
        </tbody>
    </table>

    {{
        pimcore_areablock('content', {
            'allowed': [
                'email-image',
                'email-wysiwyg', 
                'email-teaser',
                'email-news'
            ]
        })
    }}

{% endblock %}", "default/generic_mail.html.twig", "/var/www/html/EcommerceProject/ecom/templates/default/generic_mail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("pimcore_input" => 20, "pimcore_wysiwyg" => 21, "pimcore_areablock" => 31);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['pimcore_input', 'pimcore_wysiwyg', 'pimcore_areablock']
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
