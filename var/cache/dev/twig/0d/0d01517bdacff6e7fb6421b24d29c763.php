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

/* @PimcoreCustomerManagementFramework/admin/partial/table/pagination_footer.html.twig */
class __TwigTemplate_971b551c52b67f2f886f79205d5e82e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/partial/table/pagination_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/partial/table/pagination_footer.html.twig"));

        // line 1
        echo "
<div class=\"box-footer\">
    <div class=\"pagination-footer row\">
        <div class=\"pagination-footer__count-selector col-md-2\">
            <form class=\"pagination-footer__count-selector-form form-inline\">
                <div class=\"form-group\">

                    <label>Per page</label>
                    <select class=\"form-control\">
                        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => 10, 1 => 25, 2 => 50, 3 => 100, 4 => 250, 5 => 500]);
        foreach ($context['_seq'] as $context["_key"] => $context["itemCount"]) {
            // line 11
            echo "
                            ";
            // line 12
            $context["countUrl"] = $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getFormQueryString($this->env->getFunction('pimcore_url')->getCallable()(["page" => null, "perPage" => $context["itemCount"]]));
            // line 13
            echo "
                            <option data-url=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["countUrl"]) || array_key_exists("countUrl", $context) ? $context["countUrl"] : (function () { throw new RuntimeError('Variable "countUrl" does not exist.', 14, $this->source); })()), 14, $this->source), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["itemCount"], 14, $this->source), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 14, $this->source); })()), "itemNumberPerPage", [], "any", false, false, true, 14) == $context["itemCount"])) ? ("selected") : (""));
            echo ">
                                ";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["itemCount"], 15, $this->source), "html", null, true);
            echo "
                            </option>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemCount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    </select>
                </div>
            </form>
        </div>


        <div class=\"pagination-footer__pagination col-md-8\">
            ";
        // line 26
        echo twig_include($this->env, $context, "@PimcoreCustomerManagementFramework/admin/partial/pagination/default.html.twig");
        echo "
        </div>

        <div class=\"pagination-footer__summary col-md-2\">
            ";
        // line 30
        echo twig_escape_filter($this->env, twig_sprintf("Showing items %d to %d of total %d", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 30, $this->source); })()), "firstItemNumber", [], "array", false, false, true, 30), 30, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 30, $this->source); })()), "lastItemNumber", [], "array", false, false, true, 30), 30, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 30, $this->source); })()), "totalItemCount", [], "any", false, false, true, 30), 30, $this->source)), "html", null, true);
        echo "
        </div>

    </div>
</div><!-- box-footer -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/partial/table/pagination_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  95 => 26,  86 => 19,  76 => 15,  68 => 14,  65 => 13,  63 => 12,  60 => 11,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"box-footer\">
    <div class=\"pagination-footer row\">
        <div class=\"pagination-footer__count-selector col-md-2\">
            <form class=\"pagination-footer__count-selector-form form-inline\">
                <div class=\"form-group\">

                    <label>Per page</label>
                    <select class=\"form-control\">
                        {% for itemCount in [10, 25, 50, 100, 250, 500] %}

                            {% set countUrl = cmf_formQueryString(pimcore_url({'page': null, 'perPage': itemCount})) %}

                            <option data-url=\"{{ countUrl }}\" value=\"{{ itemCount }}\" {{ paginator.itemNumberPerPage == itemCount ? 'selected' : ''}}>
                                {{ itemCount }}
                            </option>

                        {% endfor %}
                    </select>
                </div>
            </form>
        </div>


        <div class=\"pagination-footer__pagination col-md-8\">
            {{ include('@PimcoreCustomerManagementFramework/admin/partial/pagination/default.html.twig') }}
        </div>

        <div class=\"pagination-footer__summary col-md-2\">
            {{ 'Showing items %d to %d of total %d' | format(paginationVariables['firstItemNumber'], paginationVariables['lastItemNumber'], paginator.totalItemCount) }}
        </div>

    </div>
</div><!-- box-footer -->
", "@PimcoreCustomerManagementFramework/admin/partial/table/pagination_footer.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/partial/table/pagination_footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 10, "set" => 12);
        static $filters = array("escape" => 14, "format" => 30);
        static $functions = array("cmf_formQueryString" => 12, "pimcore_url" => 12, "include" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape', 'format'],
                ['cmf_formQueryString', 'pimcore_url', 'include']
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
