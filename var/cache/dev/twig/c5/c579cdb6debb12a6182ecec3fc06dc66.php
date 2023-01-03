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

/* cart/cart_listing.html.twig */
class __TwigTemplate_ae7793baabef022919e8a93ee5658ba7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/cart_listing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/cart_listing.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "cart/cart_listing.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
    <div class=\"py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-4 order-md-2 mb-4\">
                    ";
        // line 13
        $this->loadTemplate("cart/shared/order_summary.html.twig", "cart/cart_listing.html.twig", 13)->display($context);
        // line 14
        echo "
                    <form method=\"post\" action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop-cart-apply-voucher");
        echo "\" class=\"card p-2 mb-4\">

                        ";
        // line 17
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 17, $this->source); })()), "pricingManagerTokenInformationDetails", [], "any", false, false, true, 17)) > 0)) {
            // line 18
            echo "
                            <ul class=\"list-group pb-3\">

                            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 21, $this->source); })()), "pricingManagerTokenInformationDetails", [], "any", false, false, true, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["codeInfo"]) {
                // line 22
                echo "
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-10\" style=\"padding-top: 4px\">
                                            <div>";
                // line 26
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["codeInfo"], "tokenCode", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "</div>
                                            ";
                // line 27
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["codeInfo"], "errorMessages", [], "any", false, false, true, 27)) > 0)) {
                    // line 28
                    echo "                                                <small class=\"text-muted\"><i class=\"fas fa-exclamation-triangle\"></i> ";
                    echo twig_escape_filter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["codeInfo"], "errorMessages", [], "any", false, false, true, 28), 28, $this->source), ", "), "html", null, true);
                    echo "</small>
                                            ";
                }
                // line 30
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["codeInfo"], "noValidRule", [], "any", false, false, true, 30)) {
                    // line 31
                    echo "                                                <small class=\"text-muted\"><i class=\"fas fa-exclamation-triangle\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.voucher-no-rule"), "html", null, true);
                    echo "</small>
                                            ";
                }
                // line 33
                echo "                                        </div>

                                        <div class=\"col-2\">
                                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop-cart-remove-voucher", ["voucher-code" => twig_get_attribute($this->env, $this->source, $context["codeInfo"], "tokenCode", [], "any", false, false, true, 36)]), "html", null, true);
                echo "\" class=\"btn btn-outline-danger btn-sm\">
                                                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                            </a>

                                        </div>
                                    </div>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['codeInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
                            </ul>

                        ";
        }
        // line 48
        echo "

                        <div class=\"input-group\">
                            <input name=\"voucher-code\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.voucher-code"), "html", null, true);
        echo "\">
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-secondary\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.apply-voucher-code"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </form>

                    <div class=\"card p-2\">
                        <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop-checkout-address");
        echo "\" class=\"btn btn-success btn-lg\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.start-checkout"), "html", null, true);
        echo "</a>
                    </div>
                </div>
                <div class=\"col-md-8 order-md-1\">
                    <h4 class=\"mb-3\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.title"), "html", null, true);
        echo "</h4>
                    <div class=\"card shopping-cart\">
                        <form method=\"post\">
                            <div class=\"card-body\">

                                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 68, $this->source); })()), "items", [], "any", false, false, true, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
            echo "
                                    ";
            // line 70
            $context["product"] = twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, true, 70);
            // line 71
            echo "
                                    <div class=\"row\">
                                        <div class=\"col-4 col-sm-4 col-md-2 text-md-center text-sm-left \">

                                            ";
            // line 75
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 75, $this->source); })()), "mainImage", [], "any", false, false, true, 75))) {
                // line 76
                echo "
                                                ";
                // line 77
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 77, $this->source); })()), "mainImage", [], "any", false, false, true, 77), "thumbnail", [0 => "cart"], "method", false, false, true, 77), "html", [0 => ["imgAttributes" => ["class" => "img-responsive", "style" => "width:100%; height: auto"]]], "method", false, false, true, 77), 77, $this->source);
                echo "

                                            ";
            }
            // line 80
            echo "
                                        </div>
                                        <div class=\"col-8 text-sm-left col-md-5 text-md-left col-md-4\">
                                            <h6 style=\"padding-top: 3px\" class=\"product-name\">";
            // line 83
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 83, $this->source); })()), "oSName", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "</h6>
                                            ";
            // line 84
            if ($this->env->getTest('instanceof')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 84, $this->source); })()), "App\\Model\\Product\\Car")) {
                // line 85
                echo "                                                <p class=\"text-muted small\">";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 85, $this->source); })()), "subText", [], "any", false, false, true, 85), 85, $this->source);
                echo "</p>
                                            ";
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 86
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 86, $this->source); })()), "saleInformation", [], "any", false, false, true, 86)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 86, $this->source); })()), "saleInformation", [], "any", false, false, true, 86), "saleInformation", [], "any", false, false, true, 86))) {
                // line 87
                echo "                                                <p class=\"text-muted small\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.condition"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("attribute." . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 87, $this->source); })()), "saleInformation", [], "any", false, false, true, 87), "saleInformation", [], "any", false, false, true, 87), "condition", [], "any", false, false, true, 87), 87, $this->source))), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 89
            echo "
                                            ";
            // line 90
            $context["priceInfo"] = twig_get_attribute($this->env, $this->source, $context["item"], "priceInfo", [], "any", false, false, true, 90);
            // line 91
            echo "
                                            ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, (isset($context["priceInfo"]) || array_key_exists("priceInfo", $context) ? $context["priceInfo"] : (function () { throw new RuntimeError('Variable "priceInfo" does not exist.', 92, $this->source); })()), "rules", [], "any", false, false, true, 92)) {
                // line 93
                echo "
                                                <div class=\"alert alert-success mb-1\" role=\"alert\">

                                                    <p class=\"extra-small small mb-2\"><strong>";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.your-benefits"), "html", null, true);
                echo "</strong></p>

                                                    <ul class=\"list-unstyled mb-0 extra-small\">
                                                        ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["priceInfo"]) || array_key_exists("priceInfo", $context) ? $context["priceInfo"] : (function () { throw new RuntimeError('Variable "priceInfo" does not exist.', 99, $this->source); })()), "rules", [], "any", false, false, true, 99));
                foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                    // line 100
                    echo "                                                            <li>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["rule"], "label", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                    echo "</li>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                                                    </ul>

                                                </div>

                                            ";
            }
            // line 107
            echo "

                                        </div>

                                        <div class=\"col-12 col-sm-12 text-sm-center col-md-5 text-md-right row pt-md-0 pt-2 ml-0 ml-md-n1\">
                                            <div class=\"col-7 col-sm-7 col-md-8 text-right pr-0\" style=\"padding-top: 3px\">
                                                <h6>";
            // line 113
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "  <span class=\"text-muted\">x</span></h6>
                                            </div>
                                            <div class=\"col-3 col-sm-3 col-md-3\">
                                                <div class=\"quantity\">
                                                    <input name=\"items[";
            // line 117
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "itemKey", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "]\" type=\"number\" step=\"1\" max=\"99\" min=\"1\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "count", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "\" title=\"Qty\" class=\"qty w-100\" size=\"4\">
                                                </div>
                                            </div>
                                            <div class=\"col-2 col-sm-2 col-md-1 text-right px-md-0\">
                                                <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop-remove-from-cart", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "itemKey", [], "any", false, false, true, 121)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger btn-sm\">
                                                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
                                <div class=\"text-right\">
                                    <button type=\"submit\" class=\"btn btn-outline-secondary text-right\">
                                        ";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.update-cart"), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    ";
        // line 140
        if (twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 140, $this->source); })()), "giftItems", [], "any", false, false, true, 140)) {
            // line 141
            echo "                        <h6 class=\"mt-5 mb-0\">Gifts</h6>
                        <div class=\"card shopping-cart\">
                            <div class=\"card-body\">

                                ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 145, $this->source); })()), "giftItems", [], "any", false, false, true, 145));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 146
                echo "
                                    ";
                // line 147
                $context["product"] = twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, true, 147);
                // line 148
                echo "
                                    <div class=\"row\">
                                        <div class=\"col-4 col-sm-4 col-md-2 text-md-center text-sm-left \">

                                            ";
                // line 152
                if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "mainImage", [], "any", true, true, true, 152)) {
                    // line 153
                    echo "
                                                ";
                    // line 154
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 154, $this->source); })()), "mainImage", [], "any", false, false, true, 154), "thumbnail", [0 => "cart"], "method", false, false, true, 154), "html", [0 => ["imgAttributes" => ["class" => "img-responsive", "style" => "width:100%; height: auto"]]], "method", false, false, true, 154), 154, $this->source);
                    echo "

                                            ";
                }
                // line 157
                echo "
                                        </div>
                                        <div class=\"col-8 text-sm-left text-md-left\">
                                            <h6 style=\"padding-top: 3px\" class=\"product-name\">";
                // line 160
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 160, $this->source); })()), "oSName", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
                echo "</h6>
                                            ";
                // line 161
                if ($this->env->getTest('instanceof')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 161, $this->source); })()), "App\\Model\\Product\\Car")) {
                    // line 162
                    echo "                                                <p class=\"text-muted small\">";
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 162, $this->source); })()), "subText", [], "any", false, false, true, 162), 162, $this->source);
                    echo "</p>
                                            ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 163
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 163, $this->source); })()), "saleInformation", [], "any", false, false, true, 163), "saleInformation", [], "any", false, false, true, 163)) {
                    // line 164
                    echo "                                                <p class=\"text-muted small\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.condition"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("attribute." . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 164, $this->source); })()), "saleInformation", [], "any", false, false, true, 164), "saleInformation", [], "any", false, false, true, 164), "condition", [], "any", false, false, true, 164), 164, $this->source))), "html", null, true);
                    echo "</p>
                                            ";
                }
                // line 166
                echo "
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                            </div>
                        </div>
                    ";
        }
        // line 173
        echo "                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/cart_listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 173,  403 => 170,  394 => 166,  386 => 164,  384 => 163,  379 => 162,  377 => 161,  373 => 160,  368 => 157,  362 => 154,  359 => 153,  357 => 152,  351 => 148,  349 => 147,  346 => 146,  342 => 145,  336 => 141,  334 => 140,  324 => 133,  319 => 130,  304 => 121,  295 => 117,  288 => 113,  280 => 107,  273 => 102,  264 => 100,  260 => 99,  254 => 96,  249 => 93,  247 => 92,  244 => 91,  242 => 90,  239 => 89,  231 => 87,  229 => 86,  224 => 85,  222 => 84,  218 => 83,  213 => 80,  207 => 77,  204 => 76,  202 => 75,  196 => 71,  194 => 70,  191 => 69,  187 => 68,  179 => 63,  170 => 59,  161 => 53,  156 => 51,  151 => 48,  145 => 44,  131 => 36,  126 => 33,  120 => 31,  117 => 30,  111 => 28,  109 => 27,  105 => 26,  99 => 22,  95 => 21,  90 => 18,  88 => 17,  83 => 15,  80 => 14,  78 => 13,  70 => 7,  60 => 6,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var cart \\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\CartInterface #}
{# @var product \\App\\Model\\Product\\AbstractProduct #}

{% extends 'layouts/layout.html.twig' %}

{% block content %}

    <div class=\"py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-4 order-md-2 mb-4\">
                    {% include 'cart/shared/order_summary.html.twig' %}

                    <form method=\"post\" action=\"{{ path('shop-cart-apply-voucher') }}\" class=\"card p-2 mb-4\">

                        {% if(cart.pricingManagerTokenInformationDetails | length > 0) %}

                            <ul class=\"list-group pb-3\">

                            {% for codeInfo in cart.pricingManagerTokenInformationDetails %}

                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-10\" style=\"padding-top: 4px\">
                                            <div>{{ codeInfo.tokenCode }}</div>
                                            {% if (codeInfo.errorMessages | length) > 0 %}
                                                <small class=\"text-muted\"><i class=\"fas fa-exclamation-triangle\"></i> {{ codeInfo.errorMessages | join(', ') }}</small>
                                            {% endif %}
                                            {% if (codeInfo.noValidRule) %}
                                                <small class=\"text-muted\"><i class=\"fas fa-exclamation-triangle\"></i> {{ 'cart.voucher-no-rule' | trans }}</small>
                                            {% endif %}
                                        </div>

                                        <div class=\"col-2\">
                                            <a href=\"{{ path('shop-cart-remove-voucher', {'voucher-code': codeInfo.tokenCode}) }}\" class=\"btn btn-outline-danger btn-sm\">
                                                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                            </a>

                                        </div>
                                    </div>
                                </li>
                            {% endfor %}

                            </ul>

                        {% endif %}


                        <div class=\"input-group\">
                            <input name=\"voucher-code\" type=\"text\" class=\"form-control\" placeholder=\"{{ 'cart.voucher-code' | trans }}\">
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-secondary\">{{ 'cart.apply-voucher-code' | trans }}</button>
                            </div>
                        </div>
                    </form>

                    <div class=\"card p-2\">
                        <a href=\"{{ path('shop-checkout-address') }}\" class=\"btn btn-success btn-lg\">{{ 'cart.start-checkout' | trans }}</a>
                    </div>
                </div>
                <div class=\"col-md-8 order-md-1\">
                    <h4 class=\"mb-3\">{{ 'cart.title' | trans }}</h4>
                    <div class=\"card shopping-cart\">
                        <form method=\"post\">
                            <div class=\"card-body\">

                                {% for item in cart.items %}

                                    {% set product = item.product %}

                                    <div class=\"row\">
                                        <div class=\"col-4 col-sm-4 col-md-2 text-md-center text-sm-left \">

                                            {% if(product.mainImage is not empty) %}

                                                {{ product.mainImage.thumbnail('cart').html({imgAttributes: {class: 'img-responsive', style: 'width:100%; height: auto'}}) | raw }}

                                            {% endif %}

                                        </div>
                                        <div class=\"col-8 text-sm-left col-md-5 text-md-left col-md-4\">
                                            <h6 style=\"padding-top: 3px\" class=\"product-name\">{{ product.oSName }}</h6>
                                            {% if( product is instanceof('App\\\\Model\\\\Product\\\\Car')) %}
                                                <p class=\"text-muted small\">{{ product.subText | raw }}</p>
                                            {% elseif(product.saleInformation is not empty and product.saleInformation.saleInformation)  %}
                                                <p class=\"text-muted small\">{{ 'general.condition' | trans }}: {{ ('attribute.' ~ product.saleInformation.saleInformation.condition) | trans }}</p>
                                            {% endif %}

                                            {% set priceInfo = item.priceInfo %}

                                            {% if(priceInfo.rules) %}

                                                <div class=\"alert alert-success mb-1\" role=\"alert\">

                                                    <p class=\"extra-small small mb-2\"><strong>{{ 'general.your-benefits' | trans }}</strong></p>

                                                    <ul class=\"list-unstyled mb-0 extra-small\">
                                                        {% for rule in priceInfo.rules %}
                                                            <li>{{ rule.label }}</li>
                                                        {% endfor %}
                                                    </ul>

                                                </div>

                                            {% endif %}


                                        </div>

                                        <div class=\"col-12 col-sm-12 text-sm-center col-md-5 text-md-right row pt-md-0 pt-2 ml-0 ml-md-n1\">
                                            <div class=\"col-7 col-sm-7 col-md-8 text-right pr-0\" style=\"padding-top: 3px\">
                                                <h6>{{ item.price }}  <span class=\"text-muted\">x</span></h6>
                                            </div>
                                            <div class=\"col-3 col-sm-3 col-md-3\">
                                                <div class=\"quantity\">
                                                    <input name=\"items[{{ item.itemKey }}]\" type=\"number\" step=\"1\" max=\"99\" min=\"1\" value=\"{{ item.count }}\" title=\"Qty\" class=\"qty w-100\" size=\"4\">
                                                </div>
                                            </div>
                                            <div class=\"col-2 col-sm-2 col-md-1 text-right px-md-0\">
                                                <a href=\"{{ path('shop-remove-from-cart', {id: item.itemKey}) }}\" class=\"btn btn-outline-danger btn-sm\">
                                                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                {% endfor %}

                                <div class=\"text-right\">
                                    <button type=\"submit\" class=\"btn btn-outline-secondary text-right\">
                                        {{ 'cart.update-cart' | trans }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    {% if(cart.giftItems) %}
                        <h6 class=\"mt-5 mb-0\">Gifts</h6>
                        <div class=\"card shopping-cart\">
                            <div class=\"card-body\">

                                {% for item in cart.giftItems %}

                                    {% set product = item.product %}

                                    <div class=\"row\">
                                        <div class=\"col-4 col-sm-4 col-md-2 text-md-center text-sm-left \">

                                            {% if(product.mainImage is defined) %}

                                                {{ product.mainImage.thumbnail('cart').html({imgAttributes: {class: 'img-responsive', style: 'width:100%; height: auto'}}) | raw }}

                                            {% endif %}

                                        </div>
                                        <div class=\"col-8 text-sm-left text-md-left\">
                                            <h6 style=\"padding-top: 3px\" class=\"product-name\">{{ product.oSName }}</h6>
                                            {% if( product is instanceof('App\\\\Model\\\\Product\\\\Car')) %}
                                                <p class=\"text-muted small\">{{ product.subText | raw }}</p>
                                            {% elseif(product.saleInformation.saleInformation)  %}
                                                <p class=\"text-muted small\">{{ 'general.condition' | trans }}: {{ ('attribute.' ~ product.saleInformation.saleInformation.condition) | trans }}</p>
                                            {% endif %}

                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>

        </div>
    </div>

{% endblock %}", "cart/cart_listing.html.twig", "/var/www/html/EcommerceProject/ecom/templates/cart/cart_listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 13, "if" => 17, "for" => 21, "set" => 70);
        static $filters = array("length" => 17, "escape" => 26, "join" => 28, "trans" => 31, "raw" => 77);
        static $functions = array("path" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if', 'for', 'set'],
                ['length', 'escape', 'join', 'trans', 'raw'],
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
