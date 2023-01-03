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

/* @PimcoreCustomerManagementFramework/admin/partial/pagination/default.html.twig */
class __TwigTemplate_b68d017c43fc5a8e659517e74db35d05 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/partial/pagination/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/partial/pagination/default.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 1, $this->source); })()), "pageCount", [], "any", false, false, true, 1) > 1)) {
            // line 2
            echo "    <nav aria-label=\"Pagination\">
        <ul class=\"pagination justify-content-center\">
            ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["paginationVariables"] ?? null), "previous", [], "any", true, true, true, 4)) {
                // line 5
                echo "                <li>
                    <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 6, $this->source); })()), "previous", [], "any", false, false, true, 6)]), "html", null, true);
                echo "\" aria-label=\"Previous\">
                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                    </a>
                </li>
            ";
            }
            // line 11
            echo "
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 12, $this->source); })()), "pagesInRange", [], "any", false, false, true, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 13
                echo "
                <li class=\"";
                // line 14
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 14, $this->source); })()), "current", [], "any", false, false, true, 14) == $context["page"])) ? ("active") : (""));
                echo "\" aria-current=\"page\">
                  <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["page" => $context["page"]]), "html", null, true);
                echo "\">
                    ";
                // line 16
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 16, $this->source), "html", null, true);
                echo "
                  </a>
                </li>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
            ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["paginationVariables"] ?? null), "next", [], "any", true, true, true, 22)) {
                // line 23
                echo "                <li>
                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 24, $this->source); })()), "next", [], "any", false, false, true, 24)]), "html", null, true);
                echo "\" aria-label=\"Next\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                    </a>
                </li>
            ";
            }
            // line 29
            echo "        </ul>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/partial/pagination/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  101 => 24,  98 => 23,  96 => 22,  93 => 21,  82 => 16,  78 => 15,  74 => 14,  71 => 13,  67 => 12,  64 => 11,  56 => 6,  53 => 5,  51 => 4,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if paginationVariables.pageCount > 1 %}
    <nav aria-label=\"Pagination\">
        <ul class=\"pagination justify-content-center\">
            {%  if(paginationVariables.previous is defined) %}
                <li>
                    <a href=\"{{  pimcore_url({'page': paginationVariables.previous}) }}\" aria-label=\"Previous\">
                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                    </a>
                </li>
            {%  endif %}

            {%  for page in paginationVariables.pagesInRange %}

                <li class=\"{{ (paginationVariables.current == page ? 'active' : '')}}\" aria-current=\"page\">
                  <a href=\"{{  pimcore_url({'page': page}) }}\">
                    {{  page }}
                  </a>
                </li>

            {% endfor %}

            {%  if(paginationVariables.next is defined) %}
                <li>
                    <a href=\"{{  pimcore_url({'page': paginationVariables.next}) }}\" aria-label=\"Next\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                    </a>
                </li>
            {%  endif %}
        </ul>
    </nav>
{% endif %}", "@PimcoreCustomerManagementFramework/admin/partial/pagination/default.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/partial/pagination/default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 12);
        static $filters = array("escape" => 6);
        static $functions = array("pimcore_url" => 6);

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
