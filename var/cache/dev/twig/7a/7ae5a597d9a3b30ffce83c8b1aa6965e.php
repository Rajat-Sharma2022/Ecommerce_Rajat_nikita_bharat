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

/* @PimcoreCustomerManagementFramework/admin/customers/partials/list_export.html.twig */
class __TwigTemplate_0676e0e2aca9cd07e069037ad3c3eddf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_export.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_export.html.twig"));

        // line 1
        $context["exporterConfigs"] = $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getExporterConfigs();
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["exporterConfigs"]) || array_key_exists("exporterConfigs", $context) ? $context["exporterConfigs"] : (function () { throw new RuntimeError('Variable "exporterConfigs" does not exist.', 3, $this->source); })())) > 0)) {
            // line 4
            echo "    <div class=\"box box-default\">
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-xs-12 text-right\">

                    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["exporterConfigs"]) || array_key_exists("exporterConfigs", $context) ? $context["exporterConfigs"] : (function () { throw new RuntimeError('Variable "exporterConfigs" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["exporter"] => $context["exporterConfig"]) {
                // line 10
                echo "
                        ";
                // line 11
                $context["exportUrl"] = $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfUrlUtilsExtension']->getFormQueryString($this->env->getFunction('pimcore_url')->getCallable()(["exporter" => $context["exporter"]], "customermanagementframework_admin_customers_export"));
                // line 12
                echo "
                        <a href=\"#\" data-href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["exportUrl"]) || array_key_exists("exportUrl", $context) ? $context["exportUrl"] : (function () { throw new RuntimeError('Variable "exportUrl" does not exist.', 13, $this->source); })()), 13, $this->source), "html", null, true);
                echo "\" class=\"btn btn-default js-customer-export\">
                            <i class=\"";
                // line 14
                (((twig_get_attribute($this->env, $this->source, $context["exporterConfig"], "icon", [], "array", true, true, true, 14) &&  !(null === twig_get_attribute($this->env, $this->source, $context["exporterConfig"], "icon", [], "array", false, false, true, 14)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exporterConfig"], "icon", [], "array", false, false, true, 14), "html", null, true))) : (print ("fa fa-download")));
                echo "\"></i>
                            ";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_export", [], "admin"), "html", null, true);
                echo "
                            <span class=\"label label-info\">";
                // line 16
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["exporterConfig"], "name", [], "array", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</span>
                        </a>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['exporter'], $context['exporterConfig'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"exportModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exportModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\" id=\"exportModalLabel\"><i class=\"fa fa-clock-o\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_export_generating", [], "admin"), "html", null, true);
            echo "</h4>
                </div>
                <div class=\"modal-body center-block\">
                    <span class=\"js-progress-label\"></span>
                    <div class=\"progress\">
                        <div class=\"progress-bar bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">

                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/customers/partials/list_export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  93 => 20,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  68 => 12,  66 => 11,  63 => 10,  59 => 9,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set exporterConfigs = cmf_loadExporterConfigs() %}

{% if (exporterConfigs | length > 0) %}
    <div class=\"box box-default\">
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-xs-12 text-right\">

                    {% for exporter, exporterConfig in exporterConfigs %}

                        {% set exportUrl = cmf_formQueryString(pimcore_url({'exporter': exporter}, 'customermanagementframework_admin_customers_export')) %}

                        <a href=\"#\" data-href=\"{{ exportUrl }}\" class=\"btn btn-default js-customer-export\">
                            <i class=\"{{ exporterConfig['icon'] ?? 'fa fa-download' }}\"></i>
                            {{ 'cmf_filters_export' | trans({}, 'admin') }}
                            <span class=\"label label-info\">{{ exporterConfig['name'] }}</span>
                        </a>

                    {% endfor %}
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"exportModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exportModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\" id=\"exportModalLabel\"><i class=\"fa fa-clock-o\"></i> {{ 'cmf_filters_export_generating' | trans({}, 'admin') }}</h4>
                </div>
                <div class=\"modal-body center-block\">
                    <span class=\"js-progress-label\"></span>
                    <div class=\"progress\">
                        <div class=\"progress-bar bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">

                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

{% endif %}", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_export.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/customers/partials/list_export.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3, "for" => 9);
        static $filters = array("length" => 3, "escape" => 13, "trans" => 15);
        static $functions = array("cmf_loadExporterConfigs" => 1, "cmf_formQueryString" => 11, "pimcore_url" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'trans'],
                ['cmf_loadExporterConfigs', 'cmf_formQueryString', 'pimcore_url']
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
