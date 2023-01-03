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

/* @PimcoreEcommerceFramework/voucher/parts/modals/single/assign_settings_modal.html.twig */
class __TwigTemplate_6cc2639afd93372481a5ee18ce3a67ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/modals/single/assign_settings_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/modals/single/assign_settings_modal.html.twig"));

        // line 1
        echo "<div id=\"assignsettings\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <!-- dialog body -->
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div class=\"modal-body-content\">
                <h3>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_assign-headline", [], "admin"), "html", null, true);
        echo "</h3>
                <div class=\"row\">
                    <div class=\"col col-sm-8\">
                        <table class=\"table current-data table-only-body\">
                            <tbody>
                            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["setting"]) {
            // line 15
            echo "                                <tr>
                                    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["name"], 16, $this->source), [], "admin"), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 18
            if (twig_matches("/^\\d+\$/", $context["setting"])) {
                // line 19
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($context["setting"], 19, $this->source), 0, ",", " "), "html", null, true);
                echo "
                                        ";
            } else {
                // line 21
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["setting"], 21, $this->source), "html", null, true);
                echo "
                                        ";
            }
            // line 23
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['setting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                            </tbody>
                        </table>
                        ";
        // line 28
        if ((isset($context["generateWarning"]) || array_key_exists("generateWarning", $context) ? $context["generateWarning"] : (function () { throw new RuntimeError('Variable "generateWarning" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed((isset($context["generateWarning"]) || array_key_exists("generateWarning", $context) ? $context["generateWarning"] : (function () { throw new RuntimeError('Variable "generateWarning" does not exist.', 29, $this->source); })()), 29, $this->source), [], "admin"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 31
        echo "                    </div>
                </div>
            </div>
            <!-- dialog buttons -->
            <div class=\"modal-footer\">
                <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_ecommerce_backend_voucher_generate", $this->sandbox->ensureToStringAllowed((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 36, $this->source); })()), 36, $this->source)), "html", null, true);
        echo "\" class=\"btn btn-primary js-loading\" data-msg=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_assign-infotext", [], "admin"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_assign-submit", [], "admin"), "html", null, true);
        echo "</a>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cancel", [], "admin"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/voucher/parts/modals/single/assign_settings_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  116 => 36,  109 => 31,  103 => 29,  101 => 28,  97 => 26,  89 => 23,  83 => 21,  77 => 19,  75 => 18,  70 => 16,  67 => 15,  63 => 14,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"assignsettings\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <!-- dialog body -->
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div class=\"modal-body-content\">
                <h3>{{ 'bundle_ecommerce_voucherservice_modal_assign-headline'|trans([],'admin') }}</h3>
                <div class=\"row\">
                    <div class=\"col col-sm-8\">
                        <table class=\"table current-data table-only-body\">
                            <tbody>
                            {% for name, setting in settings %}
                                <tr>
                                    <td>{{ name|trans([],'admin') }}</td>
                                    <td>
                                        {% if setting matches '/^\\\\d+\$/' %}
                                            {{ setting|number_format(0, ',', ' ') }}
                                        {% else %}
                                            {{ setting }}
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                        {% if generateWarning %}
                            <div class=\"alert alert-danger\">{{ generateWarning|trans([],'admin') }}</div>
                        {% endif %}
                    </div>
                </div>
            </div>
            <!-- dialog buttons -->
            <div class=\"modal-footer\">
                <a href=\"{{ path(\"pimcore_ecommerce_backend_voucher_generate\", urlParams) }}\" class=\"btn btn-primary js-loading\" data-msg=\"{{ ('bundle_ecommerce_voucherservice_modal_assign-infotext')|trans([],'admin') }}\">{{ ('bundle_ecommerce_voucherservice_modal_assign-submit')|trans([],'admin') }}</a>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">{{ ('bundle_ecommerce_voucherservice_modal_cancel')|trans([],'admin') }}</button>
            </div>
        </div>
    </div>
</div>
", "@PimcoreEcommerceFramework/voucher/parts/modals/single/assign_settings_modal.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/voucher/parts/modals/single/assign_settings_modal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 14, "if" => 18);
        static $filters = array("escape" => 9, "trans" => 9, "number_format" => 19);
        static $functions = array("path" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'trans', 'number_format'],
                ['path']
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
