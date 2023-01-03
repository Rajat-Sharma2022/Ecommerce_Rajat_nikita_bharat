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

/* @PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/segments.html.twig */
class __TwigTemplate_97eae50394e3e5473a7b7d7d57a35405 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/segments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/segments.html.twig"));

        // line 1
        $context["filteredSegmentGroups"] = $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getFilteredSegmentGroups($this->sandbox->ensureToStringAllowed((isset($context["segmentGroups"]) || array_key_exists("segmentGroups", $context) ? $context["segmentGroups"] : (function () { throw new RuntimeError('Variable "segmentGroups" does not exist.', 1, $this->source); })()), 1, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 1, $this->source); })()), "showSegments", [], "array", false, false, true, 1), 1, $this->source));
        // line 2
        echo "
";
        // line 3
        if ( !twig_test_empty((isset($context["segmentGroups"]) || array_key_exists("segmentGroups", $context) ? $context["segmentGroups"] : (function () { throw new RuntimeError('Variable "segmentGroups" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    <fieldset>
        <legend>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_segments", [], "admin"), "html", null, true);
            echo "

                    <select
                            id=\"form-filter-operator-segments\"
                            name=\"filter[operator-segments]\"
                            class=\"form-filter-operator\"
                            data-placeholder=\"<?= \$customerView->translate('cmf_filters_options_operator')  ?>\">

                        <option ";
            // line 16
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-segments", [], "array", true, true, true, 16) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-segments", [], "array", false, false, true, 16)))) ? (twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-segments", [], "array", false, false, true, 16)) : (null)) == "AND")) ? ("selected=\"selected\"") : (""));
            echo " value=\"AND\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_options_and", [], "admin"), "html", null, true);
            echo "
                        </option>
                        <option ";
            // line 19
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-segments", [], "array", true, true, true, 19) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-segments", [], "array", false, false, true, 19)))) ? (twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-segments", [], "array", false, false, true, 19)) : (null)) == "OR")) ? ("selected=\"selected\"") : (""));
            echo " value=\"OR\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_options_or", [], "admin"), "html", null, true);
            echo "
                        </option>
                        <option ";
            // line 22
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-segments", [], "array", true, true, true, 22) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-segments", [], "array", false, false, true, 22)))) ? (twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "operator-segments", [], "array", false, false, true, 22)) : (null)) == "ANY")) ? ("selected=\"selected\"") : (""));
            echo " value=\"ANY\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_options_any", [], "admin"), "html", null, true);
            echo "
                        </option>

                    </select>

                </div>
                ";
            // line 29
            if (( !(isset($context["hideAdvancedFilterSettings"]) || array_key_exists("hideAdvancedFilterSettings", $context) ? $context["hideAdvancedFilterSettings"] : (function () { throw new RuntimeError('Variable "hideAdvancedFilterSettings" does not exist.', 29, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 29, $this->source); })()), "isReadOnly", [], "method", false, false, true, 29))) {
                // line 30
                echo "                    <div class=\"col-md-6 text-right\">
                        <a type=\"button\" class=\"btn btn-sm\" data-toggle=\"modal\"
                           data-target=\"#show-segments-modal\">";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_segments_edit", [], "admin"), "html", null, true);
                echo "
                        </a>
                    </div>
                ";
            }
            // line 36
            echo "            </div>
        </legend>

        ";
            // line 39
            if ( !(isset($context["hideAdvancedFilterSettings"]) || array_key_exists("hideAdvancedFilterSettings", $context) ? $context["hideAdvancedFilterSettings"] : (function () { throw new RuntimeError('Variable "hideAdvancedFilterSettings" does not exist.', 39, $this->source); })())) {
                // line 40
                echo "            <div id=\"show-segments-modal\" class=\"modal fade text-left\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;
                            </button>
                            <h4 class=\"modal-title\">";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_segments_headline", [], "admin"), "html", null, true);
                echo "</h4>
                        </div>
                        <div class=\"modal-body\">
                            ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["segmentGroups"]) || array_key_exists("segmentGroups", $context) ? $context["segmentGroups"] : (function () { throw new RuntimeError('Variable "segmentGroups" does not exist.', 49, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["segmentGroup"]) {
                    // line 50
                    echo "                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input name=\"filter[showSegments][]\"
                                                       value=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["segmentGroup"], "id", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                    echo "\"
                                                       type=\"checkbox\"
                                                       ";
                    // line 57
                    echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["segmentGroup"], "id", [], "any", false, false, true, 57), twig_get_attribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 57, $this->source); })()), "showSegments", [], "array", false, false, true, 57))) ? (" checked=\"checked\"") : (""));
                    echo "
                                                >
                                                ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["segmentGroup"], "name", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                    echo "
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segmentGroup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                        </div>
                        <div class=\"modal-footer\">
                            <input type=\"button\" class=\"btn btn-default\"
                                   value=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_cancel", [], "admin"), "html", null, true);
                echo "\"
                                   data-dismiss=\"modal\"/>
                            <input type=\"submit\" class=\"btn btn-primary\"
                                   value=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_segments_confirm", [], "admin"), "html", null, true);
                echo "\"
                                   name=\"apply-segment-selection\"/>
                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            // line 78
            echo "
        ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["filteredSegmentGroups"]) || array_key_exists("filteredSegmentGroups", $context) ? $context["filteredSegmentGroups"] : (function () { throw new RuntimeError('Variable "filteredSegmentGroups" does not exist.', 79, $this->source); })()), 2));
            foreach ($context['_seq'] as $context["_key"] => $context["chunk"]) {
                // line 80
                echo "            <div class=\"row\">
                ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["chunk"]);
                foreach ($context['_seq'] as $context["_key"] => $context["segmentGroup"]) {
                    // line 82
                    echo "                    <div class=\"col-md-6 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"form-filter-segment-";
                    // line 84
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["segmentGroup"], "id", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["segmentGroup"], "name", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                    echo "</label>
                            <select
                                    id=\"form-filter-segment-";
                    // line 86
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["segmentGroup"], "id", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                    echo "\"
                                    name=\"filter[segments][";
                    // line 87
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["segmentGroup"], "id", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                    echo "][]\"
                                    class=\"form-control plugin-select2\"
                                    autocomplete=\"off\"
                                    multiple=\"multiple\"
                                    data-placeholder=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["segmentGroup"], "name", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                    echo "\"
                                    data-select2-options=\"";
                    // line 92
                    echo twig_escape_filter($this->env, json_encode(["allowClear" => false, "disabled" => twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 92, $this->source); })()), "isLockedSegment", [0 => twig_get_attribute($this->env, $this->source, $context["segmentGroup"], "id", [], "any", false, false, true, 92)], "method", false, false, true, 92)]), "html", null, true);
                    echo "\">

                                ";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getSegmentsForGroup($context["segmentGroup"]));
                    foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                        // line 95
                        echo "
                                    <option value=\"";
                        // line 96
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["segment"], "id", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                        echo "\" ";
                        echo ((twig_array_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "segments", [], "array", false, true, true, 96), twig_get_attribute($this->env, $this->source, $context["segmentGroup"], "id", [], "any", false, false, true, 96), [], "array", true, true, true, 96) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "segments", [], "array", false, true, true, 96), twig_get_attribute($this->env, $this->source, $context["segmentGroup"], "id", [], "any", false, false, true, 96), [], "array", false, false, true, 96)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "segments", [], "array", false, true, true, 96), twig_get_attribute($this->env, $this->source, $context["segmentGroup"], "id", [], "any", false, false, true, 96), [], "array", false, false, true, 96)) : ([])), function ($__id__) use ($context, $macros) { $context["id"] = $__id__; return ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 96, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["segment"], "id", [], "any", false, false, true, 96)); })) ? ("selected=\"selected\"") : (""));
                        echo ">
                                        ";
                        // line 97
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["segment"], "name", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                        echo "
                                    </option>

                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "
                            </select>
                        </div>
                    </div>

                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segmentGroup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chunk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "
    </fieldset>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/segments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 109,  267 => 107,  256 => 101,  246 => 97,  240 => 96,  237 => 95,  233 => 94,  228 => 92,  224 => 91,  217 => 87,  213 => 86,  206 => 84,  202 => 82,  198 => 81,  195 => 80,  191 => 79,  188 => 78,  178 => 71,  172 => 68,  167 => 65,  155 => 59,  150 => 57,  145 => 55,  138 => 50,  134 => 49,  128 => 46,  120 => 40,  118 => 39,  113 => 36,  106 => 32,  102 => 30,  100 => 29,  91 => 23,  87 => 22,  82 => 20,  78 => 19,  73 => 17,  69 => 16,  58 => 8,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set filteredSegmentGroups = cmf_filterSegmentGroups(segmentGroups, filters['showSegments'])  %}

{% if not segmentGroups is empty %}
    <fieldset>
        <legend>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    {{ 'cmf_filters_segments' | trans({}, 'admin') }}

                    <select
                            id=\"form-filter-operator-segments\"
                            name=\"filter[operator-segments]\"
                            class=\"form-filter-operator\"
                            data-placeholder=\"<?= \$customerView->translate('cmf_filters_options_operator')  ?>\">

                        <option {{ (filters['operator-segments'] ?? null) == 'AND' ? 'selected=\"selected\"' : '' }} value=\"AND\">
                            {{ 'cmf_filters_options_and' | trans({}, 'admin') }}
                        </option>
                        <option {{ (filters['operator-segments'] ?? null) == 'OR' ? 'selected=\"selected\"' : '' }} value=\"OR\">
                            {{ 'cmf_filters_options_or' | trans({}, 'admin') }}
                        </option>
                        <option {{ (filters['operator-segments'] ?? null) == 'ANY' ? 'selected=\"selected\"' : '' }} value=\"ANY\">
                            {{ 'cmf_filters_options_any' | trans({}, 'admin') }}
                        </option>

                    </select>

                </div>
                {% if not hideAdvancedFilterSettings and not filterDefinition.isReadOnly() %}
                    <div class=\"col-md-6 text-right\">
                        <a type=\"button\" class=\"btn btn-sm\" data-toggle=\"modal\"
                           data-target=\"#show-segments-modal\">{{ 'cmf_filters_segments_edit' | trans({}, 'admin') }}
                        </a>
                    </div>
                {% endif %}
            </div>
        </legend>

        {% if not hideAdvancedFilterSettings %}
            <div id=\"show-segments-modal\" class=\"modal fade text-left\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;
                            </button>
                            <h4 class=\"modal-title\">{{ 'cmf_filters_segments_headline' | trans({}, 'admin') }}</h4>
                        </div>
                        <div class=\"modal-body\">
                            {% for segmentGroup in segmentGroups %}
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input name=\"filter[showSegments][]\"
                                                       value=\"{{ segmentGroup.id }}\"
                                                       type=\"checkbox\"
                                                       {{ segmentGroup.id in filters['showSegments'] ? ' checked=\"checked\"' : ''  }}
                                                >
                                                {{ segmentGroup.name }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                        <div class=\"modal-footer\">
                            <input type=\"button\" class=\"btn btn-default\"
                                   value=\"{{ 'cmf_filters_cancel' | trans({}, 'admin') }}\"
                                   data-dismiss=\"modal\"/>
                            <input type=\"submit\" class=\"btn btn-primary\"
                                   value=\"{{ 'cmf_filters_segments_confirm' | trans({}, 'admin') }}\"
                                   name=\"apply-segment-selection\"/>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}

        {% for chunk in filteredSegmentGroups|batch(2) %}
            <div class=\"row\">
                {% for segmentGroup in chunk %}
                    <div class=\"col-md-6 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"form-filter-segment-{{ segmentGroup.id }}\">{{ segmentGroup.name }}</label>
                            <select
                                    id=\"form-filter-segment-{{ segmentGroup.id }}\"
                                    name=\"filter[segments][{{ segmentGroup.id }}][]\"
                                    class=\"form-control plugin-select2\"
                                    autocomplete=\"off\"
                                    multiple=\"multiple\"
                                    data-placeholder=\"{{ segmentGroup.name }}\"
                                    data-select2-options=\"{{ { 'allowClear': false, 'disabled': filterDefinition.isLockedSegment(segmentGroup.id) } | json_encode  }}\">

                                {% for segment in cmf_segmentsForGroup(segmentGroup) %}

                                    <option value=\"{{ segment.id }}\" {{ (filters['segments'][segmentGroup.id] ?? [])|filter(id => id == segment.id) ? 'selected=\"selected\"' : '' }}>
                                        {{ segment.name }}
                                    </option>

                                {% endfor %}

                            </select>
                        </div>
                    </div>

                {% endfor %}
            </div>
        {% endfor %}

    </fieldset>
{% endif %}
", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/segments.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/customers/partials/list_filter/segments.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3, "for" => 49);
        static $filters = array("escape" => 8, "trans" => 8, "batch" => 79, "json_encode" => 92, "filter" => 96);
        static $functions = array("cmf_filterSegmentGroups" => 1, "cmf_segmentsForGroup" => 94);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'batch', 'json_encode', 'filter'],
                ['cmf_filterSegmentGroups', 'cmf_segmentsForGroup']
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
