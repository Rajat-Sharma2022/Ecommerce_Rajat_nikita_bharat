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

/* @PimcoreEcommerceFramework/voucher/parts/modals/pattern/cleanup_modal.html.twig */
class __TwigTemplate_aac244bb8c6389528b4d2f9ec40c0841 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/modals/pattern/cleanup_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/modals/pattern/cleanup_modal.html.twig"));

        // line 1
        echo "<div id=\"cleanUp\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <form class=\"form-horizontal js-cleanup-modal-form\"
              action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_ecommerce_backend_voucher_cleanup");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"csrfToken\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csrf"]) || array_key_exists("pimcore_csrf", $context) ? $context["pimcore_csrf"] : (function () { throw new RuntimeError('Variable "pimcore_csrf" does not exist.', 5, $this->source); })()), "getCsrfToken", [], "method", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
            <div class=\"modal-content\">

                <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 8, $this->source); })()), 8, $this->source), "html", null, true);
        echo "\">

                <!-- dialog body -->
                <div class=\"modal-body-content\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <div class=\"clearfix\"></div>
                    <h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cleanup-headline", [], "admin"), "html", null, true);
        echo "</h3>

                    <div id=\"cleanupButtons\" class=\"form-group\">
                        <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                            <label class=\"btn btn-secondary active cleanup-radio\">
                                <input type=\"radio\" name=\"usage\" value='used' class=\"form-control\">
                                ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cleanup-used-checkbox", [], "admin"), "html", null, true);
        echo "
                            </label>

                            <label class=\"btn btn-secondary cleanup-radio\">
                                <input type=\"radio\" name=\"usage\" value='unused' class=\"form-control\">
                                ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cleanup-unused-checkbox", [], "admin"), "html", null, true);
        echo "
                            </label>
                            <label class=\"btn btn-secondary cleanup-radio\">
                                <input type=\"radio\" name=\"usage\" value='both' class=\"form-control\">
                                ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cleanup-both-checkbox", [], "admin"), "html", null, true);
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"form-group\" style=\"margin-top: 20px\">
                        <div class=\"col col-sm-6\">
                            <label>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cleanup-older-than", [], "admin"), "html", null, true);
        echo "</label>
                            <input type=\"text\" name=\"olderThan\" class=\"form-control js-datepicker\">
                        </div>
                    </div>

                </div>

                <!-- dialog buttons -->
                <div class=\"modal-footer\">
                    <div class=\"col col-sm-6 text-left\">
                        <p>
                            ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cleanup-infotext", [], "admin"), "html", null, true);
        echo "
                        </p>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary js-loading\" data-msg=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cleanup-loadingtext", [], "admin"), "html", null, true);
        echo "\">
                        ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cleanup-submit-button", [], "admin"), "html", null, true);
        echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cancel", [], "admin"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/voucher/parts/modals/pattern/cleanup_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 52,  126 => 50,  122 => 49,  116 => 46,  102 => 35,  93 => 29,  86 => 25,  78 => 20,  69 => 14,  60 => 8,  54 => 5,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"cleanUp\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <form class=\"form-horizontal js-cleanup-modal-form\"
              action=\"{{ path('pimcore_ecommerce_backend_voucher_cleanup') }}\" method=\"post\">
            <input type=\"hidden\" name=\"csrfToken\" value=\"{{ pimcore_csrf.getCsrfToken() }}\">
            <div class=\"modal-content\">

                <input type=\"hidden\" name=\"id\" value=\"{{ id }}\">

                <!-- dialog body -->
                <div class=\"modal-body-content\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <div class=\"clearfix\"></div>
                    <h3>{{ ('bundle_ecommerce_voucherservice_modal_cleanup-headline')|trans([],'admin') }}</h3>

                    <div id=\"cleanupButtons\" class=\"form-group\">
                        <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                            <label class=\"btn btn-secondary active cleanup-radio\">
                                <input type=\"radio\" name=\"usage\" value='used' class=\"form-control\">
                                {{ ('bundle_ecommerce_voucherservice_modal_cleanup-used-checkbox')|trans([],'admin') }}
                            </label>

                            <label class=\"btn btn-secondary cleanup-radio\">
                                <input type=\"radio\" name=\"usage\" value='unused' class=\"form-control\">
                                {{ ('bundle_ecommerce_voucherservice_modal_cleanup-unused-checkbox')|trans([],'admin') }}
                            </label>
                            <label class=\"btn btn-secondary cleanup-radio\">
                                <input type=\"radio\" name=\"usage\" value='both' class=\"form-control\">
                                {{ ('bundle_ecommerce_voucherservice_modal_cleanup-both-checkbox')|trans([],'admin') }}
                            </label>
                        </div>
                    </div>
                    <div class=\"form-group\" style=\"margin-top: 20px\">
                        <div class=\"col col-sm-6\">
                            <label>{{ ('bundle_ecommerce_voucherservice_modal_cleanup-older-than')|trans([],'admin') }}</label>
                            <input type=\"text\" name=\"olderThan\" class=\"form-control js-datepicker\">
                        </div>
                    </div>

                </div>

                <!-- dialog buttons -->
                <div class=\"modal-footer\">
                    <div class=\"col col-sm-6 text-left\">
                        <p>
                            {{ ('bundle_ecommerce_voucherservice_modal_cleanup-infotext')|trans([],'admin') }}
                        </p>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary js-loading\" data-msg=\"{{ ('bundle_ecommerce_voucherservice_modal_cleanup-loadingtext')|trans([],'admin') }}\">
                        {{ ('bundle_ecommerce_voucherservice_modal_cleanup-submit-button')|trans([],'admin') }}
                    </button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">{{ ('bundle_ecommerce_voucherservice_modal_cancel')|trans([],'admin') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
", "@PimcoreEcommerceFramework/voucher/parts/modals/pattern/cleanup_modal.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/voucher/parts/modals/pattern/cleanup_modal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5, "trans" => 14);
        static $functions = array("path" => 4);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans'],
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
