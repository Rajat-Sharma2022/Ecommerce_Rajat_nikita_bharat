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

/* @PimcoreEcommerceFramework/admin_order/item_edit.html.twig */
class __TwigTemplate_ae2f81bf0df3a481f2c375e238b444a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/admin_order/item_edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/admin_order/item_edit.html.twig"));

        // line 1
        $context["product"] = twig_get_attribute($this->env, $this->source, (isset($context["orderItem"]) || array_key_exists("orderItem", $context) ? $context["orderItem"] : (function () { throw new RuntimeError('Variable "orderItem" does not exist.', 1, $this->source); })()), "getProduct", [], "method", false, false, true, 1);
        // line 2
        $context["urlSave"] = $this->env->getFunction('pimcore_url')->getCallable()();
        // line 3
        echo "
<form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["urlSave"]) || array_key_exists("urlSave", $context) ? $context["urlSave"] : (function () { throw new RuntimeError('Variable "urlSave" does not exist.', 4, $this->source); })()), 4, $this->source), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"csrfToken\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csrf"]) || array_key_exists("pimcore_csrf", $context) ? $context["pimcore_csrf"] : (function () { throw new RuntimeError('Variable "pimcore_csrf" does not exist.', 5, $this->source); })()), "getCsrfToken", [], "method", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
    <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["orderItem"]) || array_key_exists("orderItem", $context) ? $context["orderItem"] : (function () { throw new RuntimeError('Variable "orderItem" does not exist.', 7, $this->source); })()), "getProductName", [], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.item-edit", [], "admin"), "html", null, true);
        echo "</small></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
    <div class=\"modal-body\">

        <div class=\"form-group row col-sm-6\">
            <label class=\"sr-only\" for=\"inputAmount\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.quantity", [], "admin"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["orderItem"]) || array_key_exists("orderItem", $context) ? $context["orderItem"] : (function () { throw new RuntimeError('Variable "orderItem" does not exist.', 15, $this->source); })()), "getAmount", [], "method", false, false, true, 15), 15, $this->source), "html", null, true);
        echo ")</label>
            <div class=\"input-group\">
                <div class=\"input-group-text input-group-prepend\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.quantity", [], "admin"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["orderItem"]) || array_key_exists("orderItem", $context) ? $context["orderItem"] : (function () { throw new RuntimeError('Variable "orderItem" does not exist.', 17, $this->source); })()), "getAmount", [], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo ")</div>
                <input type=\"number\" name=\"quantity\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["orderItem"]) || array_key_exists("orderItem", $context) ? $context["orderItem"] : (function () { throw new RuntimeError('Variable "orderItem" does not exist.', 18, $this->source); })()), "getAmount", [], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "\" id=\"inputAmount\" class=\"form-control\" />
            </div>
        </div>

        <div class=\"row form-group\">
            <label class=\"col-sm-12\" for=\"message\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.order.item-edit.message", [], "admin"), "html", null, true);
        echo "</label>
            <div class=\"col-sm-12\"><textarea class=\"form-control\" name=\"message\" id=\"message\" rows=\"6\"></textarea></div>
        </div>

    </div>
    <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-primary\" name=\"confirmed\" value=\"1\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce.back-office.save", [], "admin"), "html", null, true);
        echo "</button>
    </div>
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/admin_order/item_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  95 => 23,  87 => 18,  81 => 17,  74 => 15,  61 => 7,  56 => 5,  52 => 4,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set product = orderItem.getProduct() %}
{% set urlSave = pimcore_url() %}

<form action=\"{{ urlSave }}\" method=\"post\">
    <input type=\"hidden\" name=\"csrfToken\" value=\"{{ pimcore_csrf.getCsrfToken() }}\">
    <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ orderItem.getProductName() }} <small>{{ ('bundle_ecommerce.back-office.order.item-edit')|trans([],'admin') }}</small></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
    <div class=\"modal-body\">

        <div class=\"form-group row col-sm-6\">
            <label class=\"sr-only\" for=\"inputAmount\">{{ ('bundle_ecommerce.back-office.order.quantity')|trans([],'admin') }} ({{ orderItem.getAmount() }})</label>
            <div class=\"input-group\">
                <div class=\"input-group-text input-group-prepend\">{{ ('bundle_ecommerce.back-office.order.quantity')|trans([],'admin') }} ({{ orderItem.getAmount() }})</div>
                <input type=\"number\" name=\"quantity\" value=\"{{ orderItem.getAmount() }}\" id=\"inputAmount\" class=\"form-control\" />
            </div>
        </div>

        <div class=\"row form-group\">
            <label class=\"col-sm-12\" for=\"message\">{{ ('bundle_ecommerce.back-office.order.item-edit.message')|trans([],'admin') }}</label>
            <div class=\"col-sm-12\"><textarea class=\"form-control\" name=\"message\" id=\"message\" rows=\"6\"></textarea></div>
        </div>

    </div>
    <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-primary\" name=\"confirmed\" value=\"1\">{{ ('bundle_ecommerce.back-office.save')|trans([],'admin') }}</button>
    </div>
</form>
", "@PimcoreEcommerceFramework/admin_order/item_edit.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/admin_order/item_edit.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 4, "trans" => 7);
        static $functions = array("pimcore_url" => 2);

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
