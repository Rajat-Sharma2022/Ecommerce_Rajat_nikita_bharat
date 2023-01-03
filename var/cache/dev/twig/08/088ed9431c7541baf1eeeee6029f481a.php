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

/* @PimcoreEcommerceFramework/voucher/parts/paginator.html.twig */
class __TwigTemplate_f28f14ad2ff2c6584d8ed5656db19cd2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/paginator.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/paginator.html.twig"));

        // line 1
        echo "<div class=\"paging\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["paginationVariables"] ?? null), "pageCount", [], "any", true, true, true, 2) && (twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 2, $this->source); })()), "pageCount", [], "any", false, false, true, 2) > 1))) {
            // line 3
            echo "        <ul class=\"pagination float-right\">
            ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["paginationVariables"] ?? null), "previous", [], "any", true, true, true, 4)) {
                // line 5
                echo "                <li class=\"first\">
                    <a class=\"pagination-li\" href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 6, $this->source); })()), "previous", [], "any", false, false, true, 6)]), "html", null, true);
                echo "\" rel=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 6, $this->source); })()), "previous", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\" >
                        <span class=\"pag-text-label\">
                            <span class=\"fa fa-chevron-left\"></span>
                            ";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_paging-previous", [], "admin"), "html", null, true);
                echo "
                        </span>
                    </a>
                </li>
            ";
            } else {
                // line 14
                echo "                <li class=\"first\">
                    <span class=\"pag-text-label\">
                        <span class=\"fa fa-chevron-left\"></span>
                        ";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_paging-previous", [], "admin"), "html", null, true);
                echo "
                    </span>
                </li>
            ";
            }
            // line 21
            echo "
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 22, $this->source); })()), "pagesInRange", [], "any", false, false, true, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 23
                echo "                ";
                if (($context["page"] != twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 23, $this->source); })()), "current", [], "any", false, false, true, 23))) {
                    // line 24
                    echo "                    <li><a class=\"pagination-li\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["page" => $context["page"]]), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 24, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 24, $this->source), "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 26
                    echo "                    <li class=\"current\"><span class=\"active\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 26, $this->source), "html", null, true);
                    echo "</span></li>
                ";
                }
                // line 28
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "
            ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, ($context["paginationVariables"] ?? null), "next", [], "any", true, true, true, 30)) {
                // line 31
                echo "                <li class=\"last\">
                    <a class=\"pagination-li\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()(["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 32, $this->source); })()), "next", [], "any", false, false, true, 32)]), "html", null, true);
                echo "\" rel=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["paginationVariables"]) || array_key_exists("paginationVariables", $context) ? $context["paginationVariables"] : (function () { throw new RuntimeError('Variable "paginationVariables" does not exist.', 32, $this->source); })()), "next", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "\">
                        <span class=\"pag-text-label\">";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_paging-next", [], "admin"), "html", null, true);
                echo "
                            <span class=\"fa fa-chevron-right\"></span>
                        </span>
                    </a>
                </li>
            ";
            } else {
                // line 39
                echo "                <li class=\"last\">
                    <span class=\"pag-text-label\">
                        ";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_paging-next", [], "admin"), "html", null, true);
                echo "
                        <span class=\"fa fa-chevron-right\"></span>
                    </span>
                </li>
            ";
            }
            // line 46
            echo "        </ul>
    ";
        }
        // line 48
        echo "

</div>

<style>

    .paging ul.pagination li{
        padding: 0 ;
    }

    .paging ul.pagination li a, ul.pagination li span {
        border:0;
        color:black;
        display: inline-block;
        font-size: 14px;
        padding: 2px;
        margin: -2px 2px 0;
        text-decoration: none;
    }

    .paging ul.pagination  a:hover, ul.pagination  a:focus, ul.pagination li a.active, ul.pagination li span.active {
        background: #ecf0f1;
    }

    .bg-pattern .paging ul.pagination  a:hover, .bg-pattern ul.pagination  a:focus, .bg-pattern ul.pagination li a.active, .bg-pattern ul.pagination li span.active {
        text-decoration: underline;
        background-color: transparent;
    }

    .paging ul.pagination span.pag-text-label{
        font-weight: bold;
    }

    .paging .pagination li span, .paging .pagination li a{
        background-color: transparent;
    }

</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/voucher/parts/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 48,  153 => 46,  145 => 41,  141 => 39,  132 => 33,  126 => 32,  123 => 31,  121 => 30,  118 => 29,  112 => 28,  106 => 26,  96 => 24,  93 => 23,  89 => 22,  86 => 21,  79 => 17,  74 => 14,  66 => 9,  58 => 6,  55 => 5,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"paging\">
    {% if paginationVariables.pageCount is defined and paginationVariables.pageCount > 1 %}
        <ul class=\"pagination float-right\">
            {% if paginationVariables.previous is defined %}
                <li class=\"first\">
                    <a class=\"pagination-li\" href=\"{{ pimcore_url({'page': paginationVariables.previous}) }}\" rel=\"{{ paginationVariables.previous }}\" >
                        <span class=\"pag-text-label\">
                            <span class=\"fa fa-chevron-left\"></span>
                            {{ ('bundle_ecommerce_voucherservice_paging-previous')|trans([],'admin') }}
                        </span>
                    </a>
                </li>
            {% else %}
                <li class=\"first\">
                    <span class=\"pag-text-label\">
                        <span class=\"fa fa-chevron-left\"></span>
                        {{ ('bundle_ecommerce_voucherservice_paging-previous')|trans([],'admin') }}
                    </span>
                </li>
            {% endif %}

            {% for page in paginationVariables.pagesInRange %}
                {% if page != paginationVariables.current %}
                    <li><a class=\"pagination-li\" href=\"{{ pimcore_url({'page': page}) }}\" rel=\"{{ page }}\">{{ page }}</a></li>
                {% else %}
                    <li class=\"current\"><span class=\"active\">{{ page }}</span></li>
                {% endif %}
            {% endfor %}

            {% if paginationVariables.next is defined %}
                <li class=\"last\">
                    <a class=\"pagination-li\" href=\"{{ pimcore_url({'page': paginationVariables.next}) }}\" rel=\"{{ paginationVariables.next }}\">
                        <span class=\"pag-text-label\">{{('bundle_ecommerce_voucherservice_paging-next')|trans([],'admin')  }}
                            <span class=\"fa fa-chevron-right\"></span>
                        </span>
                    </a>
                </li>
            {% else %}
                <li class=\"last\">
                    <span class=\"pag-text-label\">
                        {{  ('bundle_ecommerce_voucherservice_paging-next')|trans([],'admin') }}
                        <span class=\"fa fa-chevron-right\"></span>
                    </span>
                </li>
            {% endif %}
        </ul>
    {% endif %}


</div>

<style>

    .paging ul.pagination li{
        padding: 0 ;
    }

    .paging ul.pagination li a, ul.pagination li span {
        border:0;
        color:black;
        display: inline-block;
        font-size: 14px;
        padding: 2px;
        margin: -2px 2px 0;
        text-decoration: none;
    }

    .paging ul.pagination  a:hover, ul.pagination  a:focus, ul.pagination li a.active, ul.pagination li span.active {
        background: #ecf0f1;
    }

    .bg-pattern .paging ul.pagination  a:hover, .bg-pattern ul.pagination  a:focus, .bg-pattern ul.pagination li a.active, .bg-pattern ul.pagination li span.active {
        text-decoration: underline;
        background-color: transparent;
    }

    .paging ul.pagination span.pag-text-label{
        font-weight: bold;
    }

    .paging .pagination li span, .paging .pagination li a{
        background-color: transparent;
    }

</style>
", "@PimcoreEcommerceFramework/voucher/parts/paginator.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/voucher/parts/paginator.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 22);
        static $filters = array("escape" => 6, "trans" => 9);
        static $functions = array("pimcore_url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'trans'],
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
