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

/* includes/language.html.twig */
class __TwigTemplate_d78b9cd21d8e3ef938d0f4e16f191829 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/language.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/language.html.twig"));

        // line 1
        echo "<li class=\"nav-item dropdown\">
    <a class=\"dropdown-toggle py-2 d-none d-md-inline-block menu-icon ml-4\" data-toggle=\"dropdown\" href=\"#\">
        <img src=\"/static/images/icons/language.svg\" />
    </a>
    <ul class=\"dropdown-menu\">
        <span class=\"dropdown-menu-arrow search arrow\"></span>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['App\Twig\Extension\LanguageSwitcherExtension']->getLocalizedLinks((isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 7, $this->source); })())));
        foreach ($context['_seq'] as $context["key"] => $context["lang"]) {
            // line 8
            echo "            <li>
                <a class=\"dropdown-item\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["lang"], "link", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\">
                    <img class=\"language-switcher-img\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\LanguageSwitcherExtension']->getLanguageFlag($this->sandbox->ensureToStringAllowed($context["key"], 10, $this->source)), "html", null, true);
            echo "\" height=\"20\" width=\"25\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["lang"], "text", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
</li>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "includes/language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  68 => 11,  64 => 10,  60 => 9,  57 => 8,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"nav-item dropdown\">
    <a class=\"dropdown-toggle py-2 d-none d-md-inline-block menu-icon ml-4\" data-toggle=\"dropdown\" href=\"#\">
        <img src=\"/static/images/icons/language.svg\" />
    </a>
    <ul class=\"dropdown-menu\">
        <span class=\"dropdown-menu-arrow search arrow\"></span>
        {% for key, lang in get_localized_links(document) %}
            <li>
                <a class=\"dropdown-item\" href=\"{{ lang.link }}\">
                    <img class=\"language-switcher-img\" src=\"{{ get_language_flag(key) }}\" height=\"20\" width=\"25\">
                    {{ lang.text }}</a>
            </li>
        {% endfor %}
    </ul>
</li>", "includes/language.html.twig", "/var/www/html/EcommerceProject/ecom/templates/includes/language.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7);
        static $filters = array("escape" => 9);
        static $functions = array("get_localized_links" => 7, "get_language_flag" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['get_localized_links', 'get_language_flag']
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
