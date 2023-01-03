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

/* @PimcoreEcommerceFramework/includes/paging.html.twig */
class __TwigTemplate_9e2287aff7a867d7b36eeda08eb64838 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/includes/paging.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/includes/paging.html.twig"));

        // line 1
        echo "<nav aria-label=\"Pagination\">
    <ul class=\"pagination justify-content-center\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["paginationVariables"] ?? null), "previous", [], "any", true, true, true, 3)) {
            // line 4
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 5, $this->source); })()), "previous", [], "any", false, false, true, 5)]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                    <span class=\"fas fa-chevron-left\" aria-hidden=\"true\"></span>
                </a>
            </li>
        ";
        }
        // line 10
        echo "
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 11, $this->source); })()), "pagesInRange", [], "any", false, false, true, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 12
            echo "
            ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 13, $this->source); })()), "current", [], "any", false, false, true, 13) == $context["page"])) {
                // line 14
                echo "
                <li class=\"page-item active\" aria-current=\"page\">
                              <span class=\"page-link\">
                                ";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 17, $this->source), "html", null, true);
                echo "
                                <span class=\"sr-only\">(current)</span>
                              </span>
                </li>

            ";
            } else {
                // line 23
                echo "                <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["page" => $context["page"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 23, $this->source), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 25
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["paginationVariables"] ?? null), "next", [], "any", true, true, true, 28)) {
            // line 29
            echo "            <li class=\"page-item\">
                <a class=\"page-link next flip\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 30, $this->source); })()), "next", [], "any", false, false, true, 30)]), "html", null, true);
            echo "\" aria-label=\"Next\">
                    <span class=\"fas fa-chevron-right\" aria-hidden=\"true\"></span>
                </a>
            </li>
        ";
        }
        // line 35
        echo "    </ul>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/includes/paging.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  111 => 30,  108 => 29,  106 => 28,  103 => 27,  96 => 25,  88 => 23,  79 => 17,  74 => 14,  72 => 13,  69 => 12,  65 => 11,  62 => 10,  54 => 5,  51 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav aria-label=\"Pagination\">
    <ul class=\"pagination justify-content-center\">
        {%  if(paginationVariables.previous is defined) %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{  pimcore_url({'page': paginationVariables.previous}) }}\" aria-label=\"Previous\">
                    <span class=\"fas fa-chevron-left\" aria-hidden=\"true\"></span>
                </a>
            </li>
        {%  endif %}

        {%  for page in paginationVariables.pagesInRange %}

            {%  if(paginationVariables.current == page) %}

                <li class=\"page-item active\" aria-current=\"page\">
                              <span class=\"page-link\">
                                {{  page }}
                                <span class=\"sr-only\">(current)</span>
                              </span>
                </li>

            {%  else %}
                <li class=\"page-item\"><a class=\"page-link\" href=\"{{  pimcore_url({'page': page}) }}\">{{ page }}</a></li>
            {%  endif %}

        {% endfor %}

        {%  if(paginationVariables.next is defined) %}
            <li class=\"page-item\">
                <a class=\"page-link next flip\" href=\"{{  pimcore_url({'page': paginationVariables.next}) }}\" aria-label=\"Next\">
                    <span class=\"fas fa-chevron-right\" aria-hidden=\"true\"></span>
                </a>
            </li>
        {%  endif %}
    </ul>
</nav>", "@PimcoreEcommerceFramework/includes/paging.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/includes/paging.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "for" => 11);
        static $filters = array("escape" => 5);
        static $functions = array("pimcore_url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                ['pimcore_url']
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
