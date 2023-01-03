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

/* @PimcoreCustomerManagementFramework/targeting/toolbar.html.twig */
class __TwigTemplate_e8778bc92575fba10f636e60c291e1ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'documentTargetGroups' => [$this, 'block_documentTargetGroups'],
            'cmfTrackedSegments' => [$this, 'block_cmfTrackedSegments'],
            'cmfTrackedSegmentsTable' => [$this, 'block_cmfTrackedSegmentsTable'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate((isset($context["cmfOriginalTemplate"]) || array_key_exists("cmfOriginalTemplate", $context) ? $context["cmfOriginalTemplate"] : (function () { throw new RuntimeError('Variable "cmfOriginalTemplate" does not exist.', 3, $this->source); })()), "@PimcoreCustomerManagementFramework/targeting/toolbar.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/targeting/toolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/targeting/toolbar.html.twig"));

        // line 1
        $macros["toolbar"] = $this->macros["toolbar"] = $this->loadTemplate("@PimcoreCore/Targeting/toolbar/macros.html.twig", "@PimcoreCustomerManagementFramework/targeting/toolbar.html.twig", 1)->unwrap();
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_documentTargetGroups($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "documentTargetGroups"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "documentTargetGroups"));

        // line 6
        echo "    ";
        $this->displayParentBlock("documentTargetGroups", $context, $blocks);
        echo "

    ";
        // line 8
        $this->displayBlock('cmfTrackedSegments', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_cmfTrackedSegments($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cmfTrackedSegments"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cmfTrackedSegments"));

        // line 9
        echo "        ";
        if ( !twig_test_empty((isset($context["cmfTrackedSegments"]) || array_key_exists("cmfTrackedSegments", $context) ? $context["cmfTrackedSegments"] : (function () { throw new RuntimeError('Variable "cmfTrackedSegments" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "            <h2
                class=\"_ptgtb__collapse__trigger--block\"
                data-ptgtb-toggle=\"collapse\"
                data-ptgtb-target=\"#";
            // line 13
            echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 13, $this->source); })()), "cmf-tracked-segments"], 13, $context, $this->getSourceContext());
            echo "\"
                data-ptgtb-collapse-store=\"cmf-tracked-segments\"
            >
                CMF: Tracked Segments
                ";
            // line 17
            echo twig_call_macro($macros["toolbar"], "macro_label", [twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["cmfTrackedSegments"]) || array_key_exists("cmfTrackedSegments", $context) ? $context["cmfTrackedSegments"] : (function () { throw new RuntimeError('Variable "cmfTrackedSegments" does not exist.', 17, $this->source); })()), 17, $this->source))], 17, $context, $this->getSourceContext());
            echo "
            </h2>

            <table id=\"";
            // line 20
            echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 20, $this->source); })()), "cmf-tracked-segments"], 20, $context, $this->getSourceContext());
            echo "\" class=\"_ptgtb__table\">
                ";
            // line 21
            $this->displayBlock('cmfTrackedSegmentsTable', $context, $blocks);
            // line 49
            echo "            </table>
        ";
        }
        // line 51
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_cmfTrackedSegmentsTable($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cmfTrackedSegmentsTable"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cmfTrackedSegmentsTable"));

        // line 22
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cmfTrackedSegments"]) || array_key_exists("cmfTrackedSegments", $context) ? $context["cmfTrackedSegments"] : (function () { throw new RuntimeError('Variable "cmfTrackedSegments" does not exist.', 22, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trackedSegment"]) {
            // line 23
            echo "                        ";
            $context["rowIdentifier"] = twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 23, $this->source); })()), "cmf-tracked-segments-details", twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 23)], 23, $context, $this->getSourceContext());
            // line 24
            echo "
                        <tr class=\"_ptgtb__table__row-with-details\">
                            <td>
                                ";
            // line 27
            echo twig_call_macro($macros["toolbar"], "macro_trigger_label", [twig_get_attribute($this->env, $this->source, $context["trackedSegment"], "name", [], "any", false, false, true, 27), ("#" . $this->sandbox->ensureToStringAllowed((isset($context["rowIdentifier"]) || array_key_exists("rowIdentifier", $context) ? $context["rowIdentifier"] : (function () { throw new RuntimeError('Variable "rowIdentifier" does not exist.', 27, $this->source); })()), 27, $this->source)), [0 => "_ptgtb__label--target-group"]], 27, $context, $this->getSourceContext());
            echo "
                            </td>
                            <td class=\"_ptgtb__table__col-right\">
                                ";
            // line 30
            echo twig_call_macro($macros["toolbar"], "macro_label", [twig_get_attribute($this->env, $this->source, $context["trackedSegment"], "count", [], "any", false, false, true, 30)], 30, $context, $this->getSourceContext());
            echo "
                            </td>
                        </tr>
                        <tr id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["rowIdentifier"]) || array_key_exists("rowIdentifier", $context) ? $context["rowIdentifier"] : (function () { throw new RuntimeError('Variable "rowIdentifier" does not exist.', 33, $this->source); })()), 33, $this->source), "html", null, true);
            echo "\" class=\"_ptgtb__table__row-details\">
                            <td colspan=\"2\">
                                ";
            // line 35
            echo twig_call_macro($macros["toolbar"], "macro_metric", ["Segment ID", twig_get_attribute($this->env, $this->source, $context["trackedSegment"], "id", [], "any", false, false, true, 35)], 35, $context, $this->getSourceContext());
            echo "

                                ";
            // line 37
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trackedSegment"], "group", [], "any", false, false, true, 37))) {
                // line 38
                echo "                                    ";
                echo twig_call_macro($macros["toolbar"], "macro_metric", ["Group", twig_get_attribute($this->env, $this->source, $context["trackedSegment"], "group", [], "any", false, false, true, 38)], 38, $context, $this->getSourceContext());
                echo "
                                ";
            }
            // line 40
            echo "
                                ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["trackedSegment"], "calculated", [], "any", false, false, true, 41)) {
                // line 42
                echo "                                    ";
                echo twig_call_macro($macros["toolbar"], "macro_label", ["calculated"], 42, $context, $this->getSourceContext());
                echo "
                                ";
            }
            // line 44
            echo "                            </td>
                        </tr>

                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trackedSegment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/targeting/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 48,  217 => 44,  211 => 42,  209 => 41,  206 => 40,  200 => 38,  198 => 37,  193 => 35,  188 => 33,  182 => 30,  176 => 27,  171 => 24,  168 => 23,  150 => 22,  140 => 21,  130 => 51,  126 => 49,  124 => 21,  120 => 20,  114 => 17,  107 => 13,  102 => 10,  99 => 9,  80 => 8,  74 => 6,  64 => 5,  54 => 3,  52 => 1,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@PimcoreCore/Targeting/toolbar/macros.html.twig' as toolbar %}

{% extends cmfOriginalTemplate %}

{% block documentTargetGroups %}
    {{ parent() }}

    {% block cmfTrackedSegments %}
        {% if cmfTrackedSegments is not empty %}
            <h2
                class=\"_ptgtb__collapse__trigger--block\"
                data-ptgtb-toggle=\"collapse\"
                data-ptgtb-target=\"#{{ toolbar.identifier(token, 'cmf-tracked-segments') }}\"
                data-ptgtb-collapse-store=\"cmf-tracked-segments\"
            >
                CMF: Tracked Segments
                {{ toolbar.label(cmfTrackedSegments|length) }}
            </h2>

            <table id=\"{{ toolbar.identifier(token, 'cmf-tracked-segments') }}\" class=\"_ptgtb__table\">
                {% block cmfTrackedSegmentsTable %}
                    {% for trackedSegment in cmfTrackedSegments %}
                        {% set rowIdentifier = toolbar.identifier(token, 'cmf-tracked-segments-details', loop.index) %}

                        <tr class=\"_ptgtb__table__row-with-details\">
                            <td>
                                {{ toolbar.trigger_label(trackedSegment.name, '#' ~ rowIdentifier, ['_ptgtb__label--target-group']) }}
                            </td>
                            <td class=\"_ptgtb__table__col-right\">
                                {{ toolbar.label(trackedSegment.count) }}
                            </td>
                        </tr>
                        <tr id=\"{{ rowIdentifier }}\" class=\"_ptgtb__table__row-details\">
                            <td colspan=\"2\">
                                {{ toolbar.metric('Segment ID', trackedSegment.id) }}

                                {% if trackedSegment.group is not empty %}
                                    {{ toolbar.metric('Group', trackedSegment.group) }}
                                {% endif %}

                                {% if trackedSegment.calculated %}
                                    {{ toolbar.label('calculated') }}
                                {% endif %}
                            </td>
                        </tr>

                    {% endfor %}
                {% endblock %}
            </table>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@PimcoreCustomerManagementFramework/targeting/toolbar.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/targeting/toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "block" => 8, "if" => 9, "for" => 22, "set" => 23);
        static $filters = array("length" => 17, "escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'block', 'if', 'for', 'set'],
                ['length', 'escape'],
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
