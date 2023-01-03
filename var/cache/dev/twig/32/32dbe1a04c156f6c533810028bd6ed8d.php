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

/* payment/checkout_payment.html.twig */
class __TwigTemplate_26275761281d1bed23fd211bf2fcbac5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/checkout_payment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/checkout_payment.html.twig"));

        // line 6
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => (isset($context["SDKUrl"]) || array_key_exists("SDKUrl", $context) ? $context["SDKUrl"] : (function () { throw new RuntimeError('Variable "SDKUrl" does not exist.', 6, $this->source); })())], "method", false, false, true, 6);
        // line 127
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_inline_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/payment.js")], "method", false, false, true, 127);
        // line 4
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "payment/checkout_payment.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
    <div class=\"py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-8\">
                    <h4 class=\"mb-3\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.payment"), "html", null, true);
        echo "</h4>

                    <div id=\"paypal-button-container\"></div>

                    <!-- Form to submit successful payment result to Pimcore -->
                    <form id=\"js-submit-payment-result\" action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop-checkout-start-payment");
        echo "\">
                        <input type=\"hidden\" name=\"paymentMethod\" class=\"js-payment-method-hidden\" value=\"\"/>
                        <input type=\"hidden\" name=\"paymentId\" class=\"js-payment-id-hidden\" value=\"\"/>
                    </form>

                </div>

                <div class=\"col-md-4 mb-4 mt-5 mt-md-0\">
                    ";
        // line 29
        $this->loadTemplate("cart/shared/order_summary.html.twig", "payment/checkout_payment.html.twig", 29)->display($context);
        // line 30
        echo "                </div>


            </div>

            <div class=\"row mt-5\">

                <div class=\"col-12\">

                    <div class=\"alert alert-info\">

                        <h6>Test Payment Data</h6>

                        <div class=\"row\" style=\"font-size:10pt\">
                            <div class=\"col-md-4\">

                                <strong>Credit Card</strong>
                                <table class=\"table table-sm\">
                                    <tr class=\"tr\">
                                        <th class=\"th\">Type</th>
                                        <th class=\"th\">Field</th>
                                        <th class=\"th\">Value</th>
                                    </tr>
                                    <tr class=\"tr\">
                                        <td class=\"td\">Visa</td>
                                        <td class=\"td\">number</td>
                                        <td class=\"td\"><code>4111111111111111</code></td>
                                    </tr>
                                    <tr class=\"tr\">
                                        <td class=\"td\"></td>
                                        <td class=\"td\">expiryDate</td>
                                        <td class=\"td\"><code>Date in the future</code></td>
                                    </tr>
                                    <tr class=\"tr\">
                                        <td class=\"td\"></td>
                                        <td class=\"td\">cvc</td>
                                        <td class=\"td\"><code>123</code></td>
                                    </tr>
                                    <tr><td colspan=\"3\">&nbsp;</td></tr>
                                    <tr class=\"tr\">
                                        <td class=\"td\">Mastercard</td>
                                        <td class=\"td\">number</td>
                                        <td class=\"td\"><code>5555555555554444</code></td>
                                    </tr>
                                    <tr class=\"tr\">
                                        <td class=\"td\"></td>
                                        <td class=\"td\">expiryDate</td>
                                        <td class=\"td\"><code>Date in the future</code></td>
                                    </tr>
                                    <tr class=\"tr\">
                                        <td class=\"td\"></td>
                                        <td class=\"td\">cvc</td>
                                        <td class=\"td\"><code>123</code></td>
                                    </tr>
                                </table>

                            </div>

                            <div class=\"col-md-4\">
                                <strong>EPS</strong>
                                <table class=\"table table-sm\">
                                    <tr class=\"tr\">
                                        <td class=\"td\">any data works, allows you to decide the payment result</td>
                                    </tr>
                                </table>
                            </div>


                            <div class=\"col-md-4\">
                                <strong>Paypal/Sofort</strong>

                                <table class=\"table table-sm\">
                                    <tr class=\"tr\">
                                        <td class=\"td\">Test Credentials</td>
                                        <td class=\"td\"><a href=\"https://developer.paypal.com/developer/accounts\" target=\"_blank\">here in the sandbox</a></td>
                                    </tr>
                                </table>

                            </div>

                        </div>




                    </div>
                </div>


            </div>


        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "payment/checkout_payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  103 => 29,  92 => 21,  84 => 16,  75 => 9,  65 => 8,  54 => 4,  52 => 127,  50 => 6,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var cart \\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\CartInterface #}
{# @var product \\App\\Model\\Product\\AbstractProduct #}

{% extends 'layouts/layout.html.twig' %}

{% do pimcore_head_script().appendFile(SDKUrl) %}

{% block content %}

    <div class=\"py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-8\">
                    <h4 class=\"mb-3\">{{ 'checkout.payment' | trans }}</h4>

                    <div id=\"paypal-button-container\"></div>

                    <!-- Form to submit successful payment result to Pimcore -->
                    <form id=\"js-submit-payment-result\" action=\"{{ path('shop-checkout-start-payment') }}\">
                        <input type=\"hidden\" name=\"paymentMethod\" class=\"js-payment-method-hidden\" value=\"\"/>
                        <input type=\"hidden\" name=\"paymentId\" class=\"js-payment-id-hidden\" value=\"\"/>
                    </form>

                </div>

                <div class=\"col-md-4 mb-4 mt-5 mt-md-0\">
                    {% include 'cart/shared/order_summary.html.twig' %}
                </div>


            </div>

            <div class=\"row mt-5\">

                <div class=\"col-12\">

                    <div class=\"alert alert-info\">

                        <h6>Test Payment Data</h6>

                        <div class=\"row\" style=\"font-size:10pt\">
                            <div class=\"col-md-4\">

                                <strong>Credit Card</strong>
                                <table class=\"table table-sm\">
                                    <tr class=\"tr\">
                                        <th class=\"th\">Type</th>
                                        <th class=\"th\">Field</th>
                                        <th class=\"th\">Value</th>
                                    </tr>
                                    <tr class=\"tr\">
                                        <td class=\"td\">Visa</td>
                                        <td class=\"td\">number</td>
                                        <td class=\"td\"><code>4111111111111111</code></td>
                                    </tr>
                                    <tr class=\"tr\">
                                        <td class=\"td\"></td>
                                        <td class=\"td\">expiryDate</td>
                                        <td class=\"td\"><code>Date in the future</code></td>
                                    </tr>
                                    <tr class=\"tr\">
                                        <td class=\"td\"></td>
                                        <td class=\"td\">cvc</td>
                                        <td class=\"td\"><code>123</code></td>
                                    </tr>
                                    <tr><td colspan=\"3\">&nbsp;</td></tr>
                                    <tr class=\"tr\">
                                        <td class=\"td\">Mastercard</td>
                                        <td class=\"td\">number</td>
                                        <td class=\"td\"><code>5555555555554444</code></td>
                                    </tr>
                                    <tr class=\"tr\">
                                        <td class=\"td\"></td>
                                        <td class=\"td\">expiryDate</td>
                                        <td class=\"td\"><code>Date in the future</code></td>
                                    </tr>
                                    <tr class=\"tr\">
                                        <td class=\"td\"></td>
                                        <td class=\"td\">cvc</td>
                                        <td class=\"td\"><code>123</code></td>
                                    </tr>
                                </table>

                            </div>

                            <div class=\"col-md-4\">
                                <strong>EPS</strong>
                                <table class=\"table table-sm\">
                                    <tr class=\"tr\">
                                        <td class=\"td\">any data works, allows you to decide the payment result</td>
                                    </tr>
                                </table>
                            </div>


                            <div class=\"col-md-4\">
                                <strong>Paypal/Sofort</strong>

                                <table class=\"table table-sm\">
                                    <tr class=\"tr\">
                                        <td class=\"td\">Test Credentials</td>
                                        <td class=\"td\"><a href=\"https://developer.paypal.com/developer/accounts\" target=\"_blank\">here in the sandbox</a></td>
                                    </tr>
                                </table>

                            </div>

                        </div>




                    </div>
                </div>


            </div>


        </div>
    </div>

{% endblock %}

{% do pimcore_inline_script().appendFile(asset('static/js/payment.js')) %}", "payment/checkout_payment.html.twig", "/var/www/html/EcommerceProject/ecom/templates/payment/checkout_payment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("do" => 6, "include" => 29);
        static $filters = array("escape" => 16, "trans" => 16);
        static $functions = array("pimcore_head_script" => 6, "pimcore_inline_script" => 127, "asset" => 127, "path" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['do', 'include'],
                ['escape', 'trans'],
                ['pimcore_head_script', 'pimcore_inline_script', 'asset', 'path']
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
