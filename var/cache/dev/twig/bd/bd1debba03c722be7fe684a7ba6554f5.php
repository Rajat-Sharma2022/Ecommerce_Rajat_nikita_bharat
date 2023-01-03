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

/* @PimcoreEcommerceFramework/admin_order/item_cancel.html.twig */
class __TwigTemplate_4cfcd6a7d502d9e4f281dcd3a3ca5a39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/admin_order/item_cancel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/admin_order/item_cancel.html.twig"));

        // line 1
        $context["urlSave"] = $this->env->getFunction('pimcore_url')->getCallable()();
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["urlSave"]) || array_key_exists("urlSave", $context) ? $context["urlSave"] : (function () { throw new RuntimeError('Variable "urlSave" does not exist.', 3, $this->source); })()), 3, $this->source), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"csrfToken\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csrf"]) || array_key_exists("pimcore_csrf", $context) ? $context["pimcore_csrf"] : (function () { throw new RuntimeError('Variable "pimcore_csrf" does not exist.', 4, $this->source); })()), "getCsrfToken", [], "method", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\">
    <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["orderItem"]) || array_key_exists("orderItem", $context) ? $context["orderItem"] : (function () { throw new RuntimeError('Variable "orderItem" does not exist.', 6, $this->source); })()), "getProductName", [], "method", false, false, true, 6), 6, $this->source), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.item-cancel", [], "admin"), "html", null, true);
        echo "</small></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
    <div class=\"modal-body\">
        <div class=\"row form-group\">
            <label class=\"col-sm-12\" for=\"inputMessage\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.item-cancel.message", [], "admin"), "html", null, true);
        echo "</label>
            <div class=\"col-sm-12\"><textarea class=\"form-control\" name=\"message\" rows=\"8\" id=\"inputMessage\"></textarea></div>
        </div>
    </div>
    <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-danger\" name=\"confirmed\" value=\"1\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.item-cancel", [], "admin"), "html", null, true);
        echo "</button>
    </div>
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/admin_order/item_cancel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  71 => 13,  59 => 6,  54 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set urlSave = pimcore_url() %}

<form action=\"{{ urlSave }}\" method=\"post\">
    <input type=\"hidden\" name=\"csrfToken\" value=\"{{ pimcore_csrf.getCsrfToken() }}\">
    <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ orderItem.getProductName() }} <small>{{ ('bundle_ecommerce.back-office.order.item-cancel')|trans([],'admin') }}</small></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
    <div class=\"modal-body\">
        <div class=\"row form-group\">
            <label class=\"col-sm-12\" for=\"inputMessage\">{{ ('bundle_ecommerce.back-office.order.item-cancel.message')|trans([],'admin') }}</label>
            <div class=\"col-sm-12\"><textarea class=\"form-control\" name=\"message\" rows=\"8\" id=\"inputMessage\"></textarea></div>
        </div>
    </div>
    <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-danger\" name=\"confirmed\" value=\"1\">{{ ('bundle_ecommerce.back-office.order.item-cancel')|trans([],'admin') }}</button>
    </div>
</form>", "@PimcoreEcommerceFramework/admin_order/item_cancel.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/admin_order/item_cancel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 3, "trans" => 6);
        static $functions = array("pimcore_url" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
