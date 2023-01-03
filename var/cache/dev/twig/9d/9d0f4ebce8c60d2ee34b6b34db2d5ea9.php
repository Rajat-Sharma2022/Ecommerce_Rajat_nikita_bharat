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

/* @PimcoreEcommerceFramework/voucher/parts/modals/pattern/generate_modal.html.twig */
class __TwigTemplate_03c6279ac28428119df1e01b31abb735 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/modals/pattern/generate_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/modals/pattern/generate_modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"generate\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body-content\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <div class=\"clearfix\"></div>
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_generate-headline", [], "admin"), "html", null, true);
        echo "</h3>
                <div class=\"row\">
                    <div class=\"col col-sm-10\">
                        <table class=\"table current-data table-only-body\">
                            <tbody>
                            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["setting"]) {
            // line 13
            echo "                            <tr>
                                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["name"], 14, $this->source), [], "admin"), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 16
            if (twig_matches("/^\\d+\$/", $context["setting"])) {
                // line 17
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($context["setting"], 17, $this->source), 0, ",", " "), "html", null, true);
                echo "
                                    ";
            } else {
                // line 19
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["setting"], 19, $this->source), "html", null, true);
                echo "
                                    ";
            }
            // line 21
            echo "                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['setting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_ecommerce_backend_voucher_generate", $this->sandbox->ensureToStringAllowed((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 30, $this->source); })()), 30, $this->source)), "html", null, true);
        echo "\" class=\"btn btn-primary js-loading\" data-msg=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_generate-infotext", [], "admin"), "html", null, true);
        echo "\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_generate-submit-button", [], "admin"), "html", null, true);
        echo "
                </a>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 33
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
        return "@PimcoreEcommerceFramework/voucher/parts/modals/pattern/generate_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  109 => 31,  103 => 30,  95 => 24,  87 => 21,  81 => 19,  75 => 17,  73 => 16,  68 => 14,  65 => 13,  61 => 12,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"generate\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body-content\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <div class=\"clearfix\"></div>
                <h3>{{ ('bundle_ecommerce_voucherservice_modal_generate-headline')|trans([],'admin') }}</h3>
                <div class=\"row\">
                    <div class=\"col col-sm-10\">
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
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <a href=\"{{ path('pimcore_ecommerce_backend_voucher_generate', urlParams) }}\" class=\"btn btn-primary js-loading\" data-msg=\"{{ ('bundle_ecommerce_voucherservice_modal_generate-infotext')|trans([],'admin') }}\">
                    {{ ('bundle_ecommerce_voucherservice_modal_generate-submit-button')|trans([],'admin') }}
                </a>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">{{ ('bundle_ecommerce_voucherservice_modal_cancel')|trans([],'admin') }}</button>
            </div>
        </div>
    </div>
</div>
", "@PimcoreEcommerceFramework/voucher/parts/modals/pattern/generate_modal.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/voucher/parts/modals/pattern/generate_modal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12, "if" => 16);
        static $filters = array("escape" => 7, "trans" => 7, "number_format" => 17);
        static $functions = array("path" => 30);

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
