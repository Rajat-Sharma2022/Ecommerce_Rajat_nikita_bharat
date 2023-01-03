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

/* checkout/confirmation_mail.html.twig */
class __TwigTemplate_2e583472a82c4e09b6179f668f49cc24 extends Template
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
        // line 5
        return "layouts/email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirmation_mail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirmation_mail.html.twig"));

        $this->parent = $this->loadTemplate("layouts/email.html.twig", "checkout/confirmation_mail.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
    <table class=\"spacer\">
        <tbody>
        <tr>
            <td height=\"16px\" style=\"font-size:16px;line-height:16px;\">&#xA0;</td>
        </tr>
        </tbody>
    </table>
    <table class=\"row\">
        <tbody>
        <tr>
            <th class=\"small-12 large-12 columns first last\">
                <table>
                    <tr>
                        <th>

                            <h3>";
        // line 24
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "greeting");
        echo "</h3>
                            <p>";
        // line 25
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "greeting_text");
        echo "</p>
                            <table class=\"spacer\">
                                <tbody>
                                <tr>
                                    <td height=\"16px\" style=\"font-size:16px;line-height:16px;\">&#xA0;</td>
                                </tr>
                                </tbody>
                            </table>
                            ";
        // line 33
        if ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "                                <table class=\"callout\">
                                    <tr>
                                        <th class=\"callout-inner secondary\">
                                            <table class=\"row\">
                                                <tbody>
                                                    <tr>
                                                        <th class=\"small-12 large-6 columns first\">
                                                            <table>
                                                                <tr>
                                                                    <th>
                                                                        <p> <strong>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.orderNumber"), "html", null, true);
            echo "</strong><br> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 44, $this->source); })()), "ordernumber", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo " </p>
                                                                        <p> <strong>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.email"), "html", null, true);
            echo "</strong><br> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 45, $this->source); })()), "customerEmail", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</p>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                        <th class=\"small-12 large-6 columns last\">
                                                            <table>
                                                                <tr>
                                                                    <th>
                                                                        <p>
                                                                            <strong>";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.address"), "html", null, true);
            echo "</strong><br>
                                                                            ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 56, $this->source); })()), "customerCompany", [], "any", false, false, true, 56)) {
                // line 57
                echo "                                                                                ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 57, $this->source); })()), "customerCompany", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "
                                                                            ";
            }
            // line 59
            echo "                                                                            ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 59, $this->source); })()), "customerFirstname", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 59, $this->source); })()), "customerLastname", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo " <br/>
                                                                            ";
            // line 60
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 60, $this->source); })()), "customerStreet", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo " <br/>
                                                                            ";
            // line 61
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 61, $this->source); })()), "customerZip", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 61, $this->source); })()), "customerCity", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo " <br/>
                                                                            ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getFilter('country')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 62, $this->source); })()), "customerCountry", [], "any", false, false, true, 62), 62, $this->source)), "html", null, true);
            echo "
                                                                        </p>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </th>
                                        <th class=\"expander\"></th>
                                    </tr>
                                </table>

                                <table class=\"spacer\">
                                    <tbody>
                                    <tr>
                                        <td height=\"30px\" style=\"font-size:30px;line-height:30px;\">&#xA0;</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <h4>";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summary"), "html", null, true);
            echo "</h4>
                                <table>
                                    <tr>
                                        <th><strong>";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.products"), "html", null, true);
            echo "</strong></th>
                                        <th></th>
                                        <th></th>
                                    </tr>

                                    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 92, $this->source); })()), "items", [], "any", false, false, true, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 93
                echo "                                        <tr>
                                            <td>";
                // line 94
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                echo "</td>
                                            <td>";
                // line 95
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "amount", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                echo "</td>
                                            <td class=\"text-right\">";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, true, 96), 96, $this->source)), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "
                                    ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 100, $this->source); })()), "giftItems", [], "any", false, false, true, 100)) {
                // line 101
                echo "
                                        <tr>
                                            <td colspan=\"3\">
                                                <table class=\"spacer\">
                                                    <tbody>
                                                    <tr>
                                                        <td height=\"15px\" style=\"font-size:15px;line-height:15px;\">&#xA0;</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                        <tr class=\"mt-5\">
                                            <td><strong>";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.giftItems"), "html", null, true);
                echo "</strong></td>
                                            <td></td>
                                            <td></td>
                                        </tr>


                                        ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 121, $this->source); })()), "giftItems", [], "any", false, false, true, 121));
                foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                    // line 122
                    echo "                                            <tr>
                                                <td>";
                    // line 123
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                    echo "</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "
                                    ";
            }
            // line 130
            echo "
                                    ";
            // line 131
            if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 131, $this->source); })()), "priceModifications", [], "any", false, false, true, 131)) {
                // line 132
                echo "
                                        <tr>
                                            <td colspan=\"3\">
                                                <table class=\"spacer\">
                                                    <tbody>
                                                    <tr>
                                                        <td height=\"15px\" style=\"font-size:15px;line-height:15px;\">&#xA0;</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><strong>";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.priceModifications"), "html", null, true);
                echo "</strong></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        ";
                // line 151
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 151, $this->source); })()), "priceModifications", [], "any", false, false, true, 151));
                foreach ($context['_seq'] as $context["_key"] => $context["priceModification"]) {
                    // line 152
                    echo "                                            <tr>
                                                <td>";
                    // line 153
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["priceModification"], "name", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                    echo "</td>
                                                <td></td>
                                                <td class=\"text-right\">";
                    // line 155
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["priceModification"], "amount", [], "any", false, false, true, 155), 155, $this->source)), "html", null, true);
                    echo "</td>
                                            </tr>

                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceModification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "
                                    ";
            }
            // line 161
            echo "
                                    <tr>
                                        <td colspan=\"3\">
                                            <table class=\"spacer\">
                                                <tbody>
                                                <tr>
                                                    <td height=\"15px\" style=\"font-size:15px;line-height:15px;\">&#xA0;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr class=\"mt-5\">
                                        <td colspan=\"2\"><h5>";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.totalPrice"), "html", null, true);
            echo "</h5></td>
                                        <td><h5 class=\"text-right\">";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 176, $this->source); })()), "totalPrice", [], "any", false, false, true, 176), 176, $this->source)), "html", null, true);
            echo "</h5></td>
                                    </tr>
                                </table>
                            ";
        } else {
            // line 180
            echo "                                <table>
                                    <tr>
                                        <td>
                                            HERE GOES SOME ORDER DATA
                                        </td>
                                    </tr>
                                </table>
                            ";
        }
        // line 188
        echo "                            <hr>
                        </th>
                    </tr>
                </table>
            </th>
        </tr>
        </tbody>
    </table>
    <table class=\"row footer text-center\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "checkout/confirmation_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 188,  364 => 180,  357 => 176,  353 => 175,  337 => 161,  333 => 159,  323 => 155,  318 => 153,  315 => 152,  311 => 151,  303 => 146,  287 => 132,  285 => 131,  282 => 130,  278 => 128,  267 => 123,  264 => 122,  260 => 121,  251 => 115,  235 => 101,  233 => 100,  230 => 99,  221 => 96,  217 => 95,  213 => 94,  210 => 93,  206 => 92,  198 => 87,  192 => 84,  167 => 62,  161 => 61,  157 => 60,  150 => 59,  144 => 57,  142 => 56,  138 => 55,  123 => 45,  117 => 44,  105 => 34,  103 => 33,  92 => 25,  88 => 24,  70 => 8,  60 => 7,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var order \\Pimcore\\Model\\DataObject\\OnlineShopOrder #}
{# @var ordernumber string #}


{% extends('layouts/email.html.twig') %}

{% block content %}

    <table class=\"spacer\">
        <tbody>
        <tr>
            <td height=\"16px\" style=\"font-size:16px;line-height:16px;\">&#xA0;</td>
        </tr>
        </tbody>
    </table>
    <table class=\"row\">
        <tbody>
        <tr>
            <th class=\"small-12 large-12 columns first last\">
                <table>
                    <tr>
                        <th>

                            <h3>{{ pimcore_input('greeting') }}</h3>
                            <p>{{ pimcore_wysiwyg('greeting_text') }}</p>
                            <table class=\"spacer\">
                                <tbody>
                                <tr>
                                    <td height=\"16px\" style=\"font-size:16px;line-height:16px;\">&#xA0;</td>
                                </tr>
                                </tbody>
                            </table>
                            {% if order %}
                                <table class=\"callout\">
                                    <tr>
                                        <th class=\"callout-inner secondary\">
                                            <table class=\"row\">
                                                <tbody>
                                                    <tr>
                                                        <th class=\"small-12 large-6 columns first\">
                                                            <table>
                                                                <tr>
                                                                    <th>
                                                                        <p> <strong>{{ 'general.orderNumber' | trans }}</strong><br> {{ order.ordernumber }} </p>
                                                                        <p> <strong>{{ 'general.email' | trans }}</strong><br> {{ order.customerEmail }}</p>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                        <th class=\"small-12 large-6 columns last\">
                                                            <table>
                                                                <tr>
                                                                    <th>
                                                                        <p>
                                                                            <strong>{{ 'general.address' | trans }}</strong><br>
                                                                            {% if order.customerCompany %}
                                                                                {{ order.customerCompany }}
                                                                            {% endif %}
                                                                            {{ order.customerFirstname }} {{ order.customerLastname }} <br/>
                                                                            {{ order.customerStreet }} <br/>
                                                                            {{ order.customerZip }} {{ order.customerCity }} <br/>
                                                                            {{ order.customerCountry | country }}
                                                                        </p>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </th>
                                        <th class=\"expander\"></th>
                                    </tr>
                                </table>

                                <table class=\"spacer\">
                                    <tbody>
                                    <tr>
                                        <td height=\"30px\" style=\"font-size:30px;line-height:30px;\">&#xA0;</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <h4>{{ 'checkout.summary' | trans }}</h4>
                                <table>
                                    <tr>
                                        <th><strong>{{ 'checkout.products' | trans }}</strong></th>
                                        <th></th>
                                        <th></th>
                                    </tr>

                                    {% for orderItem in order.items %}
                                        <tr>
                                            <td>{{ orderItem.productName }}</td>
                                            <td>{{ orderItem.amount }}</td>
                                            <td class=\"text-right\">{{ orderItem.totalPrice | currency }}</td>
                                        </tr>
                                    {% endfor %}

                                    {% if order.giftItems %}

                                        <tr>
                                            <td colspan=\"3\">
                                                <table class=\"spacer\">
                                                    <tbody>
                                                    <tr>
                                                        <td height=\"15px\" style=\"font-size:15px;line-height:15px;\">&#xA0;</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                        <tr class=\"mt-5\">
                                            <td><strong>{{ 'general.giftItems' | trans }}</strong></td>
                                            <td></td>
                                            <td></td>
                                        </tr>


                                        {% for orderItem in order.giftItems %}
                                            <tr>
                                                <td>{{ orderItem.productName }}</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        {% endfor %}

                                    {% endif %}

                                    {% if order.priceModifications %}

                                        <tr>
                                            <td colspan=\"3\">
                                                <table class=\"spacer\">
                                                    <tbody>
                                                    <tr>
                                                        <td height=\"15px\" style=\"font-size:15px;line-height:15px;\">&#xA0;</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><strong>{{ 'general.priceModifications' | trans }}</strong></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        {% for priceModification in order.priceModifications %}
                                            <tr>
                                                <td>{{ priceModification.name }}</td>
                                                <td></td>
                                                <td class=\"text-right\">{{ priceModification.amount | currency }}</td>
                                            </tr>

                                        {% endfor %}

                                    {% endif %}

                                    <tr>
                                        <td colspan=\"3\">
                                            <table class=\"spacer\">
                                                <tbody>
                                                <tr>
                                                    <td height=\"15px\" style=\"font-size:15px;line-height:15px;\">&#xA0;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr class=\"mt-5\">
                                        <td colspan=\"2\"><h5>{{ 'general.totalPrice' | trans }}</h5></td>
                                        <td><h5 class=\"text-right\">{{ order.totalPrice | currency }}</h5></td>
                                    </tr>
                                </table>
                            {% else %}
                                <table>
                                    <tr>
                                        <td>
                                            HERE GOES SOME ORDER DATA
                                        </td>
                                    </tr>
                                </table>
                            {% endif %}
                            <hr>
                        </th>
                    </tr>
                </table>
            </th>
        </tr>
        </tbody>
    </table>
    <table class=\"row footer text-center\">

{% endblock %}", "checkout/confirmation_mail.html.twig", "/var/www/html/EcommerceProject/ecom/templates/checkout/confirmation_mail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33, "for" => 92);
        static $filters = array("escape" => 44, "trans" => 44, "country" => 62, "currency" => 96);
        static $functions = array("pimcore_input" => 24, "pimcore_wysiwyg" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'trans', 'country', 'currency'],
                ['pimcore_input', 'pimcore_wysiwyg']
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
