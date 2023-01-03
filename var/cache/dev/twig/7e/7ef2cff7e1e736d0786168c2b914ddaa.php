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

/* web2print/product_detail.html.twig */
class __TwigTemplate_225768b14850ed76f9fd86e4b2857037 extends Template
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
        // line 3
        return "layouts/print_catalog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "web2print/product_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "web2print/product_detail.html.twig"));

        // line 1
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("product/macros.html.twig", "web2print/product_detail.html.twig", 1)->unwrap();
        // line 5
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", 1 => null, 2 => null, 3 => ["integrity" => "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T", "crossorigin" => "anonymous"]], "method", false, false, true, 5);
        // line 3
        $this->parent = $this->loadTemplate("layouts/print_catalog.html.twig", "web2print/product_detail.html.twig", 3);
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
        echo "    <div class=\"page product-sheet\">
        <div class=\"print-row\">
            <div class=\"print-col-6\">
                ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "mainImage", [], "any", false, false, true, 11)) {
            // line 12
            echo "                    <div class=\"\">
                        ";
            // line 13
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "mainImage", [], "any", false, false, true, 13), "thumbnail", [0 => "print_product_detail"], "method", false, false, true, 13), "getHTML", [0 => ["imgAttributes" => ["class" => "img-fluid"]]], "method", false, false, true, 13), 13, $this->source);
            echo "

                        ";
            // line 15
            $context["additionalImages"] = twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "additionalImages", [], "any", false, false, true, 15);
            // line 16
            echo "                        ";
            if ((isset($context["additionalImages"]) || array_key_exists("additionalImages", $context) ? $context["additionalImages"] : (function () { throw new RuntimeError('Variable "additionalImages" does not exist.', 16, $this->source); })())) {
                // line 17
                echo "
                            <div class=\"print-row\">

                                ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["additionalImages"]) || array_key_exists("additionalImages", $context) ? $context["additionalImages"] : (function () { throw new RuntimeError('Variable "additionalImages" does not exist.', 20, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 21
                    echo "
                                    <div class=\"print-col-6 mt-3\">
                                        ";
                    // line 23
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "thumbnail", [0 => "print_product_detail_small"], "method", false, false, true, 23), "getHTML", [0 => ["imgAttributes" => ["class" => "img-fluid"]]], "method", false, false, true, 23), 23, $this->source);
                    echo "
                                    </div>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "
                            </div>

                        ";
            }
            // line 31
            echo "                </div>
            ";
        }
        // line 33
        echo "            </div>

            <div class=\"print-col-6\">
                <div class=\"print-row d-none d-block mb-3\">
                    <div class=\"print-col-12\">
                        ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "manufacturer", [], "any", false, false, true, 38) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "manufacturer", [], "any", false, false, true, 38), "logo", [], "any", false, false, true, 38))) {
            // line 39
            echo "                            ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "manufacturer", [], "any", false, false, true, 39), "logo", [], "any", false, false, true, 39), "thumbnail", [0 => "print_product_detail_manufacturer"], "method", false, false, true, 39), "getHTML", [0 => ["imgAttributes" => ["class" => "img-fluid float-right"]]], "method", false, false, true, 39), 39, $this->source);
            echo "
                        ";
        }
        // line 41
        echo "
                        <h1 class=\"d-block\">";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "oSName", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "</h1>
                    </div>
                </div>
                <div class=\"print-row pt-3\">
                    <dl class=\"item-property print-col-12\">
                        <dt>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.color"), "html", null, true);
        echo "</dt>
                        <dd>
                            ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ProductPageExtension']->getColorName($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "color", [], "any", false, false, true, 49), 49, $this->source)), "html", null, true);
        echo "
                        </dd>
                    </dl>

                    ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 53, $this->source); })()), "bodyStyle", [], "any", false, false, true, 53)) {
            // line 54
            echo "                        <dl class=\"item-property print-col-6\">
                            <dt>";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.body-style"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 56
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 56, $this->source); })()), "bodyStyle", [], "any", false, false, true, 56), "name", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "</dd>
                        </dl>
                    ";
        }
        // line 59
        echo "
                    <dl class=\"item-property print-col-6\">
                        <dt>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.car-class"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("attribute." . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 62, $this->source); })()), "carClass", [], "any", false, false, true, 62), 62, $this->source)))), "html", null, true);
        echo "</dd>
                    </dl>

                    ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 65, $this->source); })()), "saleInformation", [], "any", false, false, true, 65), "saleInformation", [], "any", false, false, true, 65)) {
            // line 66
            echo "                        <dl class=\"item-property print-col-6 mb-0\">
                            <dt class=\"\">";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.condition"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("attribute." . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 68, $this->source); })()), "saleInformation", [], "any", false, false, true, 68), "saleInformation", [], "any", false, false, true, 68), "condition", [], "any", false, false, true, 68), 68, $this->source)))), "html", null, true);
            echo "</dd>
                        </dl>

                        <dl class=\"item-property print-col-6 mb-0\">
                            <dt class=\"\">";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.milage"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 73
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "saleInformation", [], "any", false, false, true, 73), "saleInformation", [], "any", false, false, true, 73), "milage", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "</dd>
                        </dl>
                    ";
        }
        // line 76
        echo "

                </div>
                <div class=\"print-row\">
                    <hr/>
                    <div class=\"mt-4 text-center\">
                        ";
        // line 82
        $context["priceInfo"] = twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 82, $this->source); })()), "oSPriceInfo", [], "any", false, false, true, 82);
        // line 83
        echo "                        ";
        $context["price"] = twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 83, $this->source); })()), "oSPrice", [], "any", false, false, true, 83);
        // line 84
        echo "

                        ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, (isset($context["priceInfo"]) || array_key_exists("priceInfo", $context) ? $context["priceInfo"] : (function () { throw new RuntimeError('Variable "priceInfo" does not exist.', 86, $this->source); })()), "hasDiscount", [], "any", false, false, true, 86)) {
            // line 87
            echo "                            <p class=\"detail-price original mb-3\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["priceInfo"]) || array_key_exists("priceInfo", $context) ? $context["priceInfo"] : (function () { throw new RuntimeError('Variable "priceInfo" does not exist.', 87, $this->source); })()), "originalPrice", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "</p>
                        ";
        }
        // line 89
        echo "
                        <p class=\"detail-price mb-2\">";
        // line 90
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 90, $this->source); })()), 90, $this->source), "html", null, true);
        echo "</p>

                        <div class=\"detail-tax text-muted\">
                            <ul class=\"list-unstyled\">
                                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 94, $this->source); })()), "taxEntries", [], "any", false, false, true, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["taxEntry"]) {
            // line 95
            echo "                                    <li>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taxEntry"], "entry", [], "any", false, false, true, 95), "name", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["taxEntry"], "percent", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "% (";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taxEntry"], "amount", [], "any", false, false, true, 95), "asNumeric", [], "any", false, false, true, 95), 95, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 95, $this->source); })()), "currency", [], "any", false, false, true, 95), "shortName", [], "any", false, false, true, 95), 95, $this->source)), "html", null, true);
            echo ")</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxEntry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"print-row\">

            <div class=\"print-col-12 text-center\">
                <hr/>
                <h4 class=\"text-center mt-4\">";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.additional-information"), "html", null, true);
        echo "</h4>

                ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 111, $this->source); })()), "description", [], "any", false, false, true, 111)) {
            // line 112
            echo "                    <p>";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 112, $this->source); })()), "description", [], "any", false, false, true, 112), 112, $this->source);
            echo "</p>
                ";
        }
        // line 114
        echo "
            </div>

            <div class=\"print-col-12\">
                <div class=\"print-row\">

                    <h2 class=\"print-col-12\">";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.general"), "html", null, true);
        echo "</h2>

                    ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 122, $this->source); })()), "manufacturer", [], "any", false, false, true, 122)) {
            // line 123
            echo "                        <dl class=\"item-property print-col-3\">
                            <dt>";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.manufacturer"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 125
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 125, $this->source); })()), "manufacturer", [], "any", false, false, true, 125), "name", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "</dd>
                        </dl>
                    ";
        }
        // line 128
        echo "
                    ";
        // line 129
        echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 129, $this->source); })()), "productionYear", [], "any", false, false, true, 129), "general.productionYear"], 129, $context, $this->getSourceContext());
        echo "

                    ";
        // line 131
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 131, $this->source); })()), "country", [], "any", false, false, true, 131)) {
            // line 132
            echo "                        <dl class=\"item-property print-col-3\">
                            <dt>";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.country"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getFilter('country')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 134, $this->source); })()), "country", [], "any", false, false, true, 134), 134, $this->source)), "html", null, true);
            echo "</dd>
                        </dl>
                    ";
        }
        // line 137
        echo "
                </div>

                ";
        // line 140
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 140, $this->source); })()), "attributes", [], "any", false, false, true, 140), "dimensions", [], "any", false, false, true, 140) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 140, $this->source); })()), "attributes", [], "any", false, false, true, 140), "bodywork", [], "any", false, false, true, 140))) {
            // line 141
            echo "                    <div class=\"print-row\">
                        <h2 class=\"print-col-12\">";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.dimensions"), "html", null, true);
            echo "</h2>

                        ";
            // line 144
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 144, $this->source); })()), "attributes", [], "any", false, false, true, 144), "dimensions", [], "any", false, false, true, 144)) {
                // line 145
                echo "                            ";
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 145, $this->source); })()), "attributes", [], "any", false, false, true, 145), "dimensions", [], "any", false, false, true, 145), "length", [], "any", false, false, true, 145), "general.length"], 145, $context, $this->getSourceContext());
                echo "
                            ";
                // line 146
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 146, $this->source); })()), "attributes", [], "any", false, false, true, 146), "dimensions", [], "any", false, false, true, 146), "width", [], "any", false, false, true, 146), "general.width"], 146, $context, $this->getSourceContext());
                echo "
                            ";
                // line 147
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 147, $this->source); })()), "attributes", [], "any", false, false, true, 147), "dimensions", [], "any", false, false, true, 147), "wheelbase", [], "any", false, false, true, 147), "general.wheelbase"], 147, $context, $this->getSourceContext());
                echo "
                            ";
                // line 148
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 148, $this->source); })()), "attributes", [], "any", false, false, true, 148), "dimensions", [], "any", false, false, true, 148), "weight", [], "any", false, false, true, 148), "general.weight"], 148, $context, $this->getSourceContext());
                echo "
                        ";
            }
            // line 150
            echo "
                        ";
            // line 151
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 151, $this->source); })()), "attributes", [], "any", false, false, true, 151), "bodywork", [], "any", false, false, true, 151)) {
                // line 152
                echo "                            ";
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 152, $this->source); })()), "attributes", [], "any", false, false, true, 152), "bodywork", [], "any", false, false, true, 152), "numberOfDoors", [], "any", false, false, true, 152), "general.numberOfDoors"], 152, $context, $this->getSourceContext());
                echo "
                            ";
                // line 153
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 153, $this->source); })()), "attributes", [], "any", false, false, true, 153), "bodywork", [], "any", false, false, true, 153), "numberOfSeats", [], "any", false, false, true, 153), "general.numberOfSeats"], 153, $context, $this->getSourceContext());
                echo "
                        ";
            }
            // line 155
            echo "
                    </div>
                ";
        }
        // line 158
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 158, $this->source); })()), "attributes", [], "any", false, false, true, 158), "engine", [], "any", false, false, true, 158) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 158, $this->source); })()), "attributes", [], "any", false, false, true, 158), "transmission", [], "any", false, false, true, 158))) {
            // line 159
            echo "                    <div class=\"print-row\">
                        <h2 class=\"print-col-12\">";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.engine"), "html", null, true);
            echo "</h2>
                        ";
            // line 161
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 161, $this->source); })()), "attributes", [], "any", false, false, true, 161), "engine", [], "any", false, false, true, 161)) {
                // line 162
                echo "                            ";
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 162, $this->source); })()), "attributes", [], "any", false, false, true, 162), "engine", [], "any", false, false, true, 162), "cylinders", [], "any", false, false, true, 162), "general.cylinders"], 162, $context, $this->getSourceContext());
                echo "
                            ";
                // line 163
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 163, $this->source); })()), "attributes", [], "any", false, false, true, 163), "engine", [], "any", false, false, true, 163), "capacity", [], "any", false, false, true, 163), "general.capacity"], 163, $context, $this->getSourceContext());
                echo "
                            ";
                // line 164
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 164, $this->source); })()), "attributes", [], "any", false, false, true, 164), "engine", [], "any", false, false, true, 164), "power", [], "any", false, false, true, 164), "general.power"], 164, $context, $this->getSourceContext());
                echo "
                            ";
                // line 165
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 165, $this->source); })()), "attributes", [], "any", false, false, true, 165), "engine", [], "any", false, false, true, 165), "engineLocation", [], "any", false, false, true, 165), "general.engineLocation"], 165, $context, $this->getSourceContext());
                echo "
                        ";
            }
            // line 167
            echo "
                        ";
            // line 168
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 168, $this->source); })()), "attributes", [], "any", false, false, true, 168), "transmission", [], "any", false, false, true, 168)) {
                // line 169
                echo "                            ";
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 169, $this->source); })()), "attributes", [], "any", false, false, true, 169), "transmission", [], "any", false, false, true, 169), "wheelDrive", [], "any", false, false, true, 169), "general.wheelDrive", true, "attribute."], 169, $context, $this->getSourceContext());
                echo "
                        ";
            }
            // line 171
            echo "                    </div>
                ";
        }
        // line 173
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "web2print/product_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 173,  447 => 171,  441 => 169,  439 => 168,  436 => 167,  431 => 165,  427 => 164,  423 => 163,  418 => 162,  416 => 161,  412 => 160,  409 => 159,  406 => 158,  401 => 155,  396 => 153,  391 => 152,  389 => 151,  386 => 150,  381 => 148,  377 => 147,  373 => 146,  368 => 145,  366 => 144,  361 => 142,  358 => 141,  356 => 140,  351 => 137,  345 => 134,  341 => 133,  338 => 132,  336 => 131,  331 => 129,  328 => 128,  322 => 125,  318 => 124,  315 => 123,  313 => 122,  308 => 120,  300 => 114,  294 => 112,  292 => 111,  287 => 109,  273 => 97,  260 => 95,  256 => 94,  249 => 90,  246 => 89,  240 => 87,  238 => 86,  234 => 84,  231 => 83,  229 => 82,  221 => 76,  215 => 73,  211 => 72,  204 => 68,  200 => 67,  197 => 66,  195 => 65,  189 => 62,  185 => 61,  181 => 59,  175 => 56,  171 => 55,  168 => 54,  166 => 53,  159 => 49,  154 => 47,  146 => 42,  143 => 41,  137 => 39,  135 => 38,  128 => 33,  124 => 31,  118 => 27,  108 => 23,  104 => 21,  100 => 20,  95 => 17,  92 => 16,  90 => 15,  85 => 13,  82 => 12,  80 => 11,  75 => 8,  65 => 7,  54 => 3,  52 => 5,  50 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'product/macros.html.twig' as macros %}

{% extends 'layouts/print_catalog.html.twig' %}

{% do pimcore_head_link().appendStylesheet('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',null,null,{integrity:\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\",crossorigin:\"anonymous\"}) %}

{% block content %}
    <div class=\"page product-sheet\">
        <div class=\"print-row\">
            <div class=\"print-col-6\">
                {% if(product.mainImage) %}
                    <div class=\"\">
                        {{ product.mainImage.thumbnail('print_product_detail').getHTML({imgAttributes: {class: 'img-fluid'}})|raw }}

                        {% set additionalImages = product.additionalImages %}
                        {%  if(additionalImages) %}

                            <div class=\"print-row\">

                                {% for image in additionalImages %}

                                    <div class=\"print-col-6 mt-3\">
                                        {{ image.thumbnail('print_product_detail_small').getHTML({imgAttributes: {class: 'img-fluid'}})|raw }}
                                    </div>

                                {% endfor %}

                            </div>

                        {%  endif %}
                </div>
            {% endif %}
            </div>

            <div class=\"print-col-6\">
                <div class=\"print-row d-none d-block mb-3\">
                    <div class=\"print-col-12\">
                        {% if(product.manufacturer and product.manufacturer.logo)  %}
                            {{ product.manufacturer.logo.thumbnail('print_product_detail_manufacturer').getHTML({imgAttributes: {class: 'img-fluid float-right'}})|raw }}
                        {%  endif  %}

                        <h1 class=\"d-block\">{{ product.oSName }}</h1>
                    </div>
                </div>
                <div class=\"print-row pt-3\">
                    <dl class=\"item-property print-col-12\">
                        <dt>{{ 'general.color' | trans }}</dt>
                        <dd>
                            {{ product.color | colorname }}
                        </dd>
                    </dl>

                    {% if(product.bodyStyle) %}
                        <dl class=\"item-property print-col-6\">
                            <dt>{{ 'general.body-style' | trans }}</dt>
                            <dd>{{ product.bodyStyle.name }}</dd>
                        </dl>
                    {% endif %}

                    <dl class=\"item-property print-col-6\">
                        <dt>{{ 'general.car-class' | trans }}</dt>
                        <dd>{{ ('attribute.' ~ product.carClass) | lower | trans }}</dd>
                    </dl>

                    {% if product.saleInformation.saleInformation %}
                        <dl class=\"item-property print-col-6 mb-0\">
                            <dt class=\"\">{{ 'general.condition' | trans }}</dt>
                            <dd>{{ ('attribute.' ~ product.saleInformation.saleInformation.condition) | lower | trans}}</dd>
                        </dl>

                        <dl class=\"item-property print-col-6 mb-0\">
                            <dt class=\"\">{{ 'general.milage' | trans }}</dt>
                            <dd>{{ product.saleInformation.saleInformation.milage}}</dd>
                        </dl>
                    {% endif %}


                </div>
                <div class=\"print-row\">
                    <hr/>
                    <div class=\"mt-4 text-center\">
                        {% set priceInfo = product.oSPriceInfo %}
                        {% set price = product.oSPrice %}


                        {% if(priceInfo.hasDiscount) %}
                            <p class=\"detail-price original mb-3\">{{ priceInfo.originalPrice }}</p>
                        {% endif %}

                        <p class=\"detail-price mb-2\">{{ price }}</p>

                        <div class=\"detail-tax text-muted\">
                            <ul class=\"list-unstyled\">
                                {% for taxEntry in price.taxEntries %}
                                    <li>{{ taxEntry.entry.name }}: {{ taxEntry.percent }}% ({{ taxEntry.amount.asNumeric | currency(price.currency.shortName) }})</li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"print-row\">

            <div class=\"print-col-12 text-center\">
                <hr/>
                <h4 class=\"text-center mt-4\">{{ 'general.additional-information' | trans }}</h4>

                {% if(product.description) %}
                    <p>{{ product.description | raw }}</p>
                {% endif %}

            </div>

            <div class=\"print-col-12\">
                <div class=\"print-row\">

                    <h2 class=\"print-col-12\">{{ 'general.general' | trans }}</h2>

                    {% if(product.manufacturer) %}
                        <dl class=\"item-property print-col-3\">
                            <dt>{{ 'general.manufacturer' | trans }}</dt>
                            <dd>{{ product.manufacturer.name }}</dd>
                        </dl>
                    {% endif %}

                    {{ macros.attribute(product.productionYear, 'general.productionYear') }}

                    {% if(product.country) %}
                        <dl class=\"item-property print-col-3\">
                            <dt>{{ 'general.country' | trans }}</dt>
                            <dd>{{ product.country | country }}</dd>
                        </dl>
                    {% endif %}

                </div>

                {% if(product.attributes.dimensions or product.attributes.bodywork) %}
                    <div class=\"print-row\">
                        <h2 class=\"print-col-12\">{{ 'general.dimensions' | trans }}</h2>

                        {% if(product.attributes.dimensions) %}
                            {{ macros.attribute(product.attributes.dimensions.length, 'general.length') }}
                            {{ macros.attribute(product.attributes.dimensions.width, 'general.width') }}
                            {{ macros.attribute(product.attributes.dimensions.wheelbase, 'general.wheelbase') }}
                            {{ macros.attribute(product.attributes.dimensions.weight, 'general.weight') }}
                        {%  endif %}

                        {% if(product.attributes.bodywork) %}
                            {{ macros.attribute(product.attributes.bodywork.numberOfDoors, 'general.numberOfDoors') }}
                            {{ macros.attribute(product.attributes.bodywork.numberOfSeats, 'general.numberOfSeats') }}
                        {%  endif %}

                    </div>
                {%  endif %}
                {% if(product.attributes.engine or product.attributes.transmission) %}
                    <div class=\"print-row\">
                        <h2 class=\"print-col-12\">{{ 'general.engine' | trans }}</h2>
                        {% if(product.attributes.engine) %}
                            {{ macros.attribute(product.attributes.engine.cylinders, 'general.cylinders') }}
                            {{ macros.attribute(product.attributes.engine.capacity, 'general.capacity') }}
                            {{ macros.attribute(product.attributes.engine.power, 'general.power') }}
                            {{ macros.attribute(product.attributes.engine.engineLocation, 'general.engineLocation') }}
                        {%  endif %}

                        {% if(product.attributes.transmission) %}
                            {{ macros.attribute(product.attributes.transmission.wheelDrive, 'general.wheelDrive', true, 'attribute.') }}
                        {%  endif %}
                    </div>
                {%  endif %}
            </div>
        </div>
    </div>
{% endblock %}
", "web2print/product_detail.html.twig", "/var/www/html/EcommerceProject/ecom/templates/web2print/product_detail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "do" => 5, "if" => 11, "set" => 15, "for" => 20);
        static $filters = array("raw" => 13, "escape" => 42, "trans" => 47, "colorname" => 49, "lower" => 62, "currency" => 95, "country" => 134);
        static $functions = array("pimcore_head_link" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'do', 'if', 'set', 'for'],
                ['raw', 'escape', 'trans', 'colorname', 'lower', 'currency', 'country'],
                ['pimcore_head_link']
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
