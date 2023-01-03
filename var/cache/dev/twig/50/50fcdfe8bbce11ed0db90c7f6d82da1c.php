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

/* @PimcoreEcommerceFramework/voucher/parts/modals/cleanup_reservations_modal.html.twig */
class __TwigTemplate_ec343578bc2c12ea65361905e4dcd95b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/modals/cleanup_reservations_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/modals/cleanup_reservations_modal.html.twig"));

        // line 1
        echo "<div id=\"cleanup-reservations\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body-content\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <form class=\"form-horizontal js-cleanup-reservations-modal-form\"
                      action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_ecommerce_backend_voucher_cleanup-reservations", $this->sandbox->ensureToStringAllowed((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 7, $this->source); })()), 7, $this->source)), "html", null, true);
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"csrfToken\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csrf"]) || array_key_exists("pimcore_csrf", $context) ? $context["pimcore_csrf"] : (function () { throw new RuntimeError('Variable "pimcore_csrf" does not exist.', 8, $this->source); })()), "getCsrfToken", [], "method", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
                    <h3>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cleanup-reservations-headline", [], "admin"), "html", null, true);
        echo "</h3>
                    <div class=\"form-group\" style=\"margin-top: 20px\">
                        <div class=\"col col-sm-12\">
                            <label for=\"duration\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cleanup-reservations-olderthan-x-minutes", [], "admin"), "html", null, true);
        echo "</label>
                            <input type=\"number\" name=\"duration\" id=\"duration\" class=\"form-control form-control-25 text-center\" min=\"0\" value =\"5\"/>
                        </div>
                        <input type=\"hidden\" name=\"id\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, true, 15), "get", [0 => "id"], "method", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "\">
                    </div>
                </form>
            </div>

            <div class=\"modal-footer\">
                <div class=\"col col-sm-6 text-left\">
                    <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cleanup-reservations-infotext", [], "admin"), "html", null, true);
        echo "</p>
                </div>
                <button onclick=\"document.querySelector('.js-cleanup-reservations-modal-form').submit()\" class=\"btn btn-primary js-loading\"
                        data-msg=\"Cleaning up Tokens, please wait.\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_modal_cleanup-reservations-submit", [], "admin"), "html", null, true);
        echo "
                </button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 27
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
        return "@PimcoreEcommerceFramework/voucher/parts/modals/cleanup_reservations_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  89 => 25,  83 => 22,  73 => 15,  67 => 12,  61 => 9,  57 => 8,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"cleanup-reservations\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body-content\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <form class=\"form-horizontal js-cleanup-reservations-modal-form\"
                      action=\"{{ path('pimcore_ecommerce_backend_voucher_cleanup-reservations', urlParams) }}\" method=\"post\">
                    <input type=\"hidden\" name=\"csrfToken\" value=\"{{ pimcore_csrf.getCsrfToken() }}\">
                    <h3>{{ ('bundle_ecommerce_voucherservice_modal_cleanup-reservations-headline')|trans([],'admin') }}</h3>
                    <div class=\"form-group\" style=\"margin-top: 20px\">
                        <div class=\"col col-sm-12\">
                            <label for=\"duration\">{{ ('bundle_ecommerce_voucherservice_modal_cleanup-reservations-olderthan-x-minutes')|trans([],'admin')  }}</label>
                            <input type=\"number\" name=\"duration\" id=\"duration\" class=\"form-control form-control-25 text-center\" min=\"0\" value =\"5\"/>
                        </div>
                        <input type=\"hidden\" name=\"id\" value=\"{{ app.request.get('id') }}\">
                    </div>
                </form>
            </div>

            <div class=\"modal-footer\">
                <div class=\"col col-sm-6 text-left\">
                    <p>{{ 'bundle_ecommerce_voucherservice_modal_cleanup-reservations-infotext'|trans([],'admin') }}</p>
                </div>
                <button onclick=\"document.querySelector('.js-cleanup-reservations-modal-form').submit()\" class=\"btn btn-primary js-loading\"
                        data-msg=\"Cleaning up Tokens, please wait.\">{{ 'bundle_ecommerce_voucherservice_modal_cleanup-reservations-submit'|trans([],'admin') }}
                </button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">{{ 'bundle_ecommerce_voucherservice_modal_cancel'|trans([],'admin') }}</button>
            </div>
        </div>
    </div>
</div>
", "@PimcoreEcommerceFramework/voucher/parts/modals/cleanup_reservations_modal.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/voucher/parts/modals/cleanup_reservations_modal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 7, "trans" => 9);
        static $functions = array("path" => 7);

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
