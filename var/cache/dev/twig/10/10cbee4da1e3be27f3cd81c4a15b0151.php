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

/* @PimcoreCustomerManagementFramework/admin/partial/list_filter_helper.html.twig */
class __TwigTemplate_84ef67fd1313b73fa6509295a00f6146 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/partial/list_filter_helper.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/partial/list_filter_helper.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context["exampleQueries"] = [0 => "fo* OR bar", 1 => "*a* AND foo", 2 => "foo", 3 => "foo AND bar", 4 => "foo OR bar", 5 => "foo OR !bar", 6 => "foo AND \"bar\"", 7 => "foo OR (bar AND baz)"];
        // line 13
        echo "
";
        // line 14
        $context["modifiers"] = ["Wildcard search (searched pattern should match the field/subpart of the field))" => [0 => "<term>*"], "Exact search (field must match exactly)" => [0 => "\"<term>\""], "Negation" => [0 => "!<term>", 1 => "!(<query>)"]];
        // line 27
        echo "
<p class=\"help-block help-block-toggle\">
    <a role=\"button\" data-toggle=\"collapse\" href=\"#searchBarHelp\" aria-expanded=\"false\" aria-controls=\"searchBarHelp\">
        <i class=\"fa fa-question-circle\"></i>
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_search_show_help", [], "admin"), "html", null, true);
        echo "
    </a>.

    ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_search_info", [], "admin"), "html", null, true);
        echo "
</p>

<div class=\"help-block collapse\" id=\"searchBarHelp\">
    <div id=\"searchBarFields\">
        <h4>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_fields_include", [], "admin"), "html", null, true);
        echo "</h4>
        ";
        // line 40
        echo $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->buildCodeList($this->sandbox->ensureToStringAllowed((isset($context["searchBarFields"]) || array_key_exists("searchBarFields", $context) ? $context["searchBarFields"] : (function () { throw new RuntimeError('Variable "searchBarFields" does not exist.', 40, $this->source); })()), 40, $this->source));
        echo "
    </div>

    <div id=\"searchBarExamples\">
        <h4>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_example_queries", [], "admin"), "html", null, true);
        echo "</h4>
        ";
        // line 45
        echo $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->buildCodeList($this->sandbox->ensureToStringAllowed((isset($context["exampleQueries"]) || array_key_exists("exampleQueries", $context) ? $context["exampleQueries"] : (function () { throw new RuntimeError('Variable "exampleQueries" does not exist.', 45, $this->source); })()), 45, $this->source));
        echo "
    </div>

    <div id=\"searchBarModifiers\">
        <h4>";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_modifiers", [], "admin"), "html", null, true);
        echo "</h4>
        <dl>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["modifierTitle"] => $context["modifierExamples"]) {
            // line 52
            echo "                <dt> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["modifierTitle"], 52, $this->source), [], "admin"), "html", null, true);
            echo "</dt>
                <dd>
                    ";
            // line 54
            echo $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->buildCodeList($this->sandbox->ensureToStringAllowed($context["modifierExamples"], 54, $this->source));
            echo "
                </dd>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['modifierTitle'], $context['modifierExamples'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </dl>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/partial/list_filter_helper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 57,  112 => 54,  106 => 52,  102 => 51,  97 => 49,  90 => 45,  86 => 44,  79 => 40,  75 => 39,  67 => 34,  61 => 31,  55 => 27,  53 => 14,  50 => 13,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set exampleQueries = [
    'fo* OR bar',
    '*a* AND foo',
    'foo',
    'foo AND bar',
    'foo OR bar',
    'foo OR !bar',
    'foo AND \"bar\"',
    'foo OR (bar AND baz)',
]
%}

{% set modifiers = {
    'Wildcard search (searched pattern should match the field/subpart of the field))': [
        '<term>*',
    ],
    'Exact search (field must match exactly)': [
        '\"<term>\"',
    ],
    'Negation': [
        '!<term>',
        '!(<query>)'
    ]
}
%}

<p class=\"help-block help-block-toggle\">
    <a role=\"button\" data-toggle=\"collapse\" href=\"#searchBarHelp\" aria-expanded=\"false\" aria-controls=\"searchBarHelp\">
        <i class=\"fa fa-question-circle\"></i>
        {{ 'cmf_filters_search_show_help' | trans({}, 'admin') }}
    </a>.

    {{ 'cmf_filters_search_info' | trans({}, 'admin') }}
</p>

<div class=\"help-block collapse\" id=\"searchBarHelp\">
    <div id=\"searchBarFields\">
        <h4>{{ 'cmf_filters_fields_include' | trans({}, 'admin') }}</h4>
        {{ searchBarFields | cmf_codeList | raw }}
    </div>

    <div id=\"searchBarExamples\">
        <h4>{{ 'cmf_filters_example_queries' | trans({}, 'admin') }}</h4>
        {{ exampleQueries | cmf_codeList | raw }}
    </div>

    <div id=\"searchBarModifiers\">
        <h4>{{ 'cmf_filters_modifiers' | trans({}, 'admin') }}</h4>
        <dl>
            {% for modifierTitle, modifierExamples in modifiers %}
                <dt> {{ modifierTitle | trans({}, 'admin') }}</dt>
                <dd>
                    {{ modifierExamples | cmf_codeList | raw }}
                </dd>
            {% endfor %}
        </dl>
    </div>
</div>", "@PimcoreCustomerManagementFramework/admin/partial/list_filter_helper.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/partial/list_filter_helper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "for" => 51);
        static $filters = array("escape" => 31, "trans" => 31, "raw" => 40, "cmf_codeList" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'trans', 'raw', 'cmf_codeList'],
                []
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
