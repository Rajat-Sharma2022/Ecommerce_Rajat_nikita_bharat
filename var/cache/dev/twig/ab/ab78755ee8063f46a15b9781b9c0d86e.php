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

/* product/detail.html.twig */
class __TwigTemplate_c16d60bcfc8d0683923fc1e6ecffa433 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'additionalimages' => [$this, 'block_additionalimages'],
            'colorvariants' => [$this, 'block_colorvariants'],
            'detailinfos' => [$this, 'block_detailinfos'],
            'salesinfos' => [$this, 'block_salesinfos'],
            'description' => [$this, 'block_description'],
            'attributes' => [$this, 'block_attributes'],
            'productrelations' => [$this, 'block_productrelations'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/detail.html.twig"));

        // line 3
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("product/macros.html.twig", "product/detail.html.twig", 3)->unwrap();
        // line 5
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "product/detail.html.twig", 5);
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
    <div id=\"main-content\" class=\"main-content\">

        <div class=\"d-md-none mt-3\">
            ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "manufacturer", [], "any", false, false, true, 12) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "manufacturer", [], "any", false, false, true, 12), "logo", [], "any", false, false, true, 12))) {
            // line 13
            echo "                ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "manufacturer", [], "any", false, false, true, 13), "logo", [], "any", false, false, true, 13), "thumbnail", [0 => "product_detail_manufacturer"], "method", false, false, true, 13), "getHTML", [0 => ["imgAttributes" => ["class" => "img-fluid float-right"]]], "method", false, false, true, 13), 13, $this->source);
            echo "
            ";
        }
        // line 15
        echo "            <div class=\"page-header\">
                <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "oSName", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</h1>
            </div>
        </div>

        <div class=\"bg-white my-3\">
            <div class=\"row\">

                <div class=\"col-md-6 mb-4\">
                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "mainImage", [], "any", false, false, true, 24)) {
            // line 25
            echo "
                        <div class=\"p-3\">
                            <a href=\"";
            // line 27
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "mainImage", [], "any", false, false, true, 27), "getThumbnail", [0 => "galleryLightbox"], "method", false, false, true, 27), 27, $this->source);
            echo "\" class=\"thumbnail\">
                                ";
            // line 28
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "mainImage", [], "any", false, false, true, 28), "thumbnail", [0 => "product_detail"], "method", false, false, true, 28), "getHTML", [0 => ["imgAttributes" => ["class" => "img-thumbnail1 img-fluid"]]], "method", false, false, true, 28), 28, $this->source);
            echo "
                            </a>

                            ";
            // line 31
            $this->displayBlock('additionalimages', $context, $blocks);
            // line 53
            echo "                        </div>
                    ";
        }
        // line 55
        echo "                </div>

                <div class=\"col-md-6 mb-4\">

                    <div class=\"p-3 pt-4\">

                        <div class=\"row d-none d-md-block mb-3\">
                            <div class=\"col-12\">
                                ";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 63, $this->source); })()), "manufacturer", [], "any", false, false, true, 63) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 63, $this->source); })()), "manufacturer", [], "any", false, false, true, 63), "logo", [], "any", false, false, true, 63))) {
            // line 64
            echo "                                    ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 64, $this->source); })()), "manufacturer", [], "any", false, false, true, 64), "logo", [], "any", false, false, true, 64), "thumbnail", [0 => "product_detail_manufacturer"], "method", false, false, true, 64), "getHTML", [0 => ["imgAttributes" => ["class" => "img-fluid float-right"]]], "method", false, false, true, 64), 64, $this->source);
            echo "
                                ";
        }
        // line 66
        echo "
                                <h2 class=\"\">";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 67, $this->source); })()), "oSName", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "</h2>
                            </div>
                        </div>
                        <div class=\"row\">

                            ";
        // line 72
        $this->displayBlock('colorvariants', $context, $blocks);
        // line 86
        echo "
                            ";
        // line 87
        $this->displayBlock('detailinfos', $context, $blocks);
        // line 100
        echo "
                            ";
        // line 101
        $this->displayBlock('salesinfos', $context, $blocks);
        // line 117
        echo "
                        </div>

                        <hr/>
                        <div class=\"mt-4 text-center\">
                            ";
        // line 122
        $context["priceInfo"] = twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 122, $this->source); })()), "oSPriceInfo", [], "any", false, false, true, 122);
        // line 123
        echo "                            ";
        $context["price"] = twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 123, $this->source); })()), "oSPrice", [], "any", false, false, true, 123);
        // line 124
        echo "
                            ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, (isset($context["priceInfo"]) || array_key_exists("priceInfo", $context) ? $context["priceInfo"] : (function () { throw new RuntimeError('Variable "priceInfo" does not exist.', 125, $this->source); })()), "rules", [], "any", false, false, true, 125)) {
            // line 126
            echo "
                                <div class=\"alert alert-success mb-4\" role=\"alert\">

                                    <p class=\"small mb-2\"><strong>";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.your-benefits"), "html", null, true);
            echo "</strong></p>

                                    <ul class=\"list-unstyled mb-0 small\">
                                        ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["priceInfo"]) || array_key_exists("priceInfo", $context) ? $context["priceInfo"] : (function () { throw new RuntimeError('Variable "priceInfo" does not exist.', 132, $this->source); })()), "rules", [], "any", false, false, true, 132));
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 133
                echo "                                            <li>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["rule"], "label", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                echo "</li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                                    </ul>

                                </div>

                            ";
        }
        // line 140
        echo "
                            ";
        // line 141
        if (twig_get_attribute($this->env, $this->source, (isset($context["priceInfo"]) || array_key_exists("priceInfo", $context) ? $context["priceInfo"] : (function () { throw new RuntimeError('Variable "priceInfo" does not exist.', 141, $this->source); })()), "hasDiscount", [], "any", false, false, true, 141)) {
            // line 142
            echo "                                <p class=\"detail-price original mb-3\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["priceInfo"]) || array_key_exists("priceInfo", $context) ? $context["priceInfo"] : (function () { throw new RuntimeError('Variable "priceInfo" does not exist.', 142, $this->source); })()), "originalPrice", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
            echo "</p>
                            ";
        }
        // line 144
        echo "
                            <p class=\"detail-price mb-2\">";
        // line 145
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 145, $this->source); })()), 145, $this->source), "html", null, true);
        echo "</p>

                            <div class=\"detail-tax text-muted\">
                                <ul class=\"list-unstyled\">
                                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 149, $this->source); })()), "taxEntries", [], "any", false, false, true, 149));
        foreach ($context['_seq'] as $context["_key"] => $context["taxEntry"]) {
            // line 150
            echo "                                        <li>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taxEntry"], "entry", [], "any", false, false, true, 150), "name", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["taxEntry"], "percent", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "% (";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taxEntry"], "amount", [], "any", false, false, true, 150), "asNumeric", [], "any", false, false, true, 150), 150, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 150, $this->source); })()), "currency", [], "any", false, false, true, 150), "shortName", [], "any", false, false, true, 150), 150, $this->source)), "html", null, true);
            echo ")</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxEntry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                                </ul>
                            </div>

                            ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 155, $this->source); })()), "saleInformation", [], "any", false, false, true, 155), "saleInformation", [], "any", false, false, true, 155)) {
            // line 156
            echo "                                <p class=\"small text-muted mt-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.available-in"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("attribute." . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 156, $this->source); })()), "saleInformation", [], "any", false, false, true, 156), "saleInformation", [], "any", false, false, true, 156), "availabilityType", [], "any", false, false, true, 156), 156, $this->source)))), "html", null, true);
            echo "</p>
                            ";
        }
        // line 158
        echo "                        </div>
                        <form id=\"shop_add_to_cart_form_";
        // line 159
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
        echo "\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop-add-to-cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, true, 159)]), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addToCart"), "html", null, true);
        echo "\">
                            <a href=\"#\"
                               onclick=\"document.getElementById('shop_add_to_cart_form_";
        // line 162
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
        echo "').submit();\"
                               class=\"btn btn-success btn-block\">";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add-to-cart"), "html", null, true);
        echo "</a>
                        </form>

                    </div>

                </div>

            </div>

            <hr>

            ";
        // line 174
        $this->displayBlock('description', $context, $blocks);
        // line 184
        echo "
            ";
        // line 185
        $this->displayBlock('attributes', $context, $blocks);
        // line 284
        echo "
            ";
        // line 285
        $this->displayBlock('productrelations', $context, $blocks);
        // line 309
        echo "

        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_additionalimages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "additionalimages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "additionalimages"));

        // line 32
        echo "                                ";
        $context["additionalImages"] = twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "additionalImages", [], "any", false, false, true, 32);
        // line 33
        echo "                                ";
        if ((isset($context["additionalImages"]) || array_key_exists("additionalImages", $context) ? $context["additionalImages"] : (function () { throw new RuntimeError('Variable "additionalImages" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "
                                    <div class=\"row\">

                                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["additionalImages"]) || array_key_exists("additionalImages", $context) ? $context["additionalImages"] : (function () { throw new RuntimeError('Variable "additionalImages" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 38
                echo "
                                            <div class=\"col-4 mt-3\">

                                                <a href=\"";
                // line 41
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getThumbnail", [0 => "galleryLightbox"], "method", false, false, true, 41), 41, $this->source);
                echo "\" class=\"thumbnail\">
                                                    ";
                // line 42
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "thumbnail", [0 => "product_detail_small"], "method", false, false, true, 42), "getHTML", [0 => ["imgAttributes" => ["class" => "img-thumbnail1 img-fluid"]]], "method", false, false, true, 42), 42, $this->source);
                echo "
                                                </a>

                                            </div>

                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
                                    </div>

                                ";
        }
        // line 52
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_colorvariants($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "colorvariants"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "colorvariants"));

        // line 73
        echo "                                <dl class=\"item-property col-12\">
                                    <dt>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.color"), "html", null, true);
        echo "</dt>
                                    <dd>
                                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()), "colorVariants", [], "any", false, false, true, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["colorVariant"]) {
            // line 77
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ProductPageExtension']->generateLink($this->sandbox->ensureToStringAllowed($context["colorVariant"], 77, $this->source)), "html", null, true);
            echo "\"
                                               class=\"btn ";
            // line 78
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, true, 78) == twig_get_attribute($this->env, $this->source, $context["colorVariant"], "id", [], "any", false, false, true, 78))) ? ("btn-primary") : ("btn-outline-primary"));
            echo "\">
                                                ";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ProductPageExtension']->getColorName($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["colorVariant"], "color", [], "any", false, false, true, 79), 79, $this->source)), "html", null, true);
            echo "
                                            </a>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colorVariant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                    </dd>

                                </dl>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 87
    public function block_detailinfos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detailinfos"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detailinfos"));

        // line 88
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 88, $this->source); })()), "bodyStyle", [], "any", false, false, true, 88)) {
            // line 89
            echo "                                    <dl class=\"item-property col-6\">
                                        <dt>";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.body-style"), "html", null, true);
            echo "</dt>
                                        <dd>";
            // line 91
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 91, $this->source); })()), "bodyStyle", [], "any", false, false, true, 91), "name", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "</dd>
                                    </dl>
                                ";
        }
        // line 94
        echo "
                                <dl class=\"item-property col-6\">
                                    <dt>";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.car-class"), "html", null, true);
        echo "</dt>
                                    <dd>";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("attribute." . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 97, $this->source); })()), "carClass", [], "any", false, false, true, 97), 97, $this->source)))), "html", null, true);
        echo "</dd>
                                </dl>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 101
    public function block_salesinfos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesinfos"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesinfos"));

        // line 102
        echo "
                                ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 103, $this->source); })()), "saleInformation", [], "any", false, false, true, 103), "saleInformation", [], "any", false, false, true, 103)) {
            // line 104
            echo "
                                    <dl class=\"item-property col-6 mb-0\">
                                        <dt>";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.condition"), "html", null, true);
            echo "</dt>
                                        <dd>";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_lower_filter($this->env, ("attribute." . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 107, $this->source); })()), "saleInformation", [], "any", false, false, true, 107), "saleInformation", [], "any", false, false, true, 107), "condition", [], "any", false, false, true, 107), 107, $this->source)))), "html", null, true);
            echo "</dd>
                                    </dl>

                                    <dl class=\"item-property col-6 mb-0\">
                                        <dt>";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.milage"), "html", null, true);
            echo "</dt>
                                        <dd>";
            // line 112
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 112, $this->source); })()), "saleInformation", [], "any", false, false, true, 112), "saleInformation", [], "any", false, false, true, 112), "milage", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</dd>
                                    </dl>

                                ";
        }
        // line 116
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 174
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        // line 175
        echo "                <div class=\"mt-5 col-12 text-center\">
                    <h4 class=\"text-center\">";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.additional-information"), "html", null, true);
        echo "</h4>

                    ";
        // line 178
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 178, $this->source); })()), "description", [], "any", false, false, true, 178)) {
            // line 179
            echo "                        <p>";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 179, $this->source); })()), "description", [], "any", false, false, true, 179), 179, $this->source);
            echo "</p>
                    ";
        }
        // line 181
        echo "
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 185
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attributes"));

        // line 186
        echo "                <div class=\"col-12\">

                <ul class=\"nav nav-tabs\" id=\"attributes\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.general"), "html", null, true);
        echo "</a>
                    </li>
                    ";
        // line 192
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 192, $this->source); })()), "attributes", [], "any", false, false, true, 192), "dimensions", [], "any", false, false, true, 192) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 192, $this->source); })()), "attributes", [], "any", false, false, true, 192), "bodywork", [], "any", false, false, true, 192))) {
            // line 193
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"dimensions-tab\" data-toggle=\"tab\" href=\"#dimensions\" role=\"tab\" aria-controls=\"dimensions\" aria-selected=\"false\">";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.dimensions"), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        // line 197
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 197, $this->source); })()), "attributes", [], "any", false, false, true, 197), "engine", [], "any", false, false, true, 197) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 197, $this->source); })()), "attributes", [], "any", false, false, true, 197), "transmission", [], "any", false, false, true, 197))) {
            // line 198
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"engine-tab\" data-toggle=\"tab\" href=\"#engine\" role=\"tab\" aria-controls=\"engine\" aria-selected=\"false\">";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.engine"), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        // line 202
        echo "                </ul>
                <div class=\"tab-content\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">

                        <div class=\"m-3\">

                            <div class=\"row\">

                                ";
        // line 210
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 210, $this->source); })()), "manufacturer", [], "any", false, false, true, 210)) {
            // line 211
            echo "                                    <dl class=\"item-property col-6 col-md-3\">
                                        <dt>";
            // line 212
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.manufacturer"), "html", null, true);
            echo "</dt>
                                        <dd>";
            // line 213
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 213, $this->source); })()), "manufacturer", [], "any", false, false, true, 213), "name", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
            echo "</dd>
                                    </dl>
                                ";
        }
        // line 216
        echo "
                                ";
        // line 217
        echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 217, $this->source); })()), "productionYear", [], "any", false, false, true, 217), "general.productionYear"], 217, $context, $this->getSourceContext());
        echo "

                                ";
        // line 219
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 219, $this->source); })()), "country", [], "any", false, false, true, 219)) {
            // line 220
            echo "                                    <dl class=\"item-property col-6 col-md-3\">
                                        <dt>";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.country"), "html", null, true);
            echo "</dt>
                                        <dd>";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getFilter('country')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 222, $this->source); })()), "country", [], "any", false, false, true, 222), 222, $this->source)), "html", null, true);
            echo "</dd>
                                    </dl>
                                ";
        }
        // line 225
        echo "
                            </div>

                        </div>

                    </div>
                    ";
        // line 231
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 231, $this->source); })()), "attributes", [], "any", false, false, true, 231), "dimensions", [], "any", false, false, true, 231) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 231, $this->source); })()), "attributes", [], "any", false, false, true, 231), "bodywork", [], "any", false, false, true, 231))) {
            // line 232
            echo "                        <div class=\"tab-pane fade\" id=\"dimensions\" role=\"tabpanel\" aria-labelledby=\"dimensions-tab\">

                            <div class=\"m-3\">

                                <div class=\"row\">

                                    ";
            // line 238
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 238, $this->source); })()), "attributes", [], "any", false, false, true, 238), "dimensions", [], "any", false, false, true, 238)) {
                // line 239
                echo "                                        ";
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 239, $this->source); })()), "attributes", [], "any", false, false, true, 239), "dimensions", [], "any", false, false, true, 239), "length", [], "any", false, false, true, 239), "general.length"], 239, $context, $this->getSourceContext());
                echo "
                                        ";
                // line 240
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 240, $this->source); })()), "attributes", [], "any", false, false, true, 240), "dimensions", [], "any", false, false, true, 240), "width", [], "any", false, false, true, 240), "general.width"], 240, $context, $this->getSourceContext());
                echo "
                                        ";
                // line 241
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 241, $this->source); })()), "attributes", [], "any", false, false, true, 241), "dimensions", [], "any", false, false, true, 241), "wheelbase", [], "any", false, false, true, 241), "general.wheelbase"], 241, $context, $this->getSourceContext());
                echo "
                                        ";
                // line 242
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 242, $this->source); })()), "attributes", [], "any", false, false, true, 242), "dimensions", [], "any", false, false, true, 242), "weight", [], "any", false, false, true, 242), "general.weight"], 242, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 244
            echo "
                                    ";
            // line 245
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 245, $this->source); })()), "attributes", [], "any", false, false, true, 245), "bodywork", [], "any", false, false, true, 245)) {
                // line 246
                echo "                                        ";
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 246, $this->source); })()), "attributes", [], "any", false, false, true, 246), "bodywork", [], "any", false, false, true, 246), "numberOfDoors", [], "any", false, false, true, 246), "general.numberOfDoors"], 246, $context, $this->getSourceContext());
                echo "
                                        ";
                // line 247
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 247, $this->source); })()), "attributes", [], "any", false, false, true, 247), "bodywork", [], "any", false, false, true, 247), "numberOfSeats", [], "any", false, false, true, 247), "general.numberOfSeats"], 247, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 249
            echo "
                                </div>

                            </div>

                        </div>
                    ";
        }
        // line 256
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 256, $this->source); })()), "attributes", [], "any", false, false, true, 256), "engine", [], "any", false, false, true, 256) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 256, $this->source); })()), "attributes", [], "any", false, false, true, 256), "transmission", [], "any", false, false, true, 256))) {
            // line 257
            echo "                        <div class=\"tab-pane fade\" id=\"engine\" role=\"tabpanel\" aria-labelledby=\"engine-tab\">

                            <div class=\"m-3\">

                                <div class=\"row\">

                                    ";
            // line 263
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 263, $this->source); })()), "attributes", [], "any", false, false, true, 263), "engine", [], "any", false, false, true, 263)) {
                // line 264
                echo "                                        ";
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 264, $this->source); })()), "attributes", [], "any", false, false, true, 264), "engine", [], "any", false, false, true, 264), "cylinders", [], "any", false, false, true, 264), "general.cylinders"], 264, $context, $this->getSourceContext());
                echo "
                                        ";
                // line 265
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 265, $this->source); })()), "attributes", [], "any", false, false, true, 265), "engine", [], "any", false, false, true, 265), "capacity", [], "any", false, false, true, 265), "general.capacity"], 265, $context, $this->getSourceContext());
                echo "
                                        ";
                // line 266
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 266, $this->source); })()), "attributes", [], "any", false, false, true, 266), "engine", [], "any", false, false, true, 266), "power", [], "any", false, false, true, 266), "general.power"], 266, $context, $this->getSourceContext());
                echo "
                                        ";
                // line 267
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 267, $this->source); })()), "attributes", [], "any", false, false, true, 267), "engine", [], "any", false, false, true, 267), "engineLocation", [], "any", false, false, true, 267), "general.engineLocation"], 267, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 269
            echo "
                                    ";
            // line 270
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 270, $this->source); })()), "attributes", [], "any", false, false, true, 270), "transmission", [], "any", false, false, true, 270)) {
                // line 271
                echo "                                        ";
                echo twig_call_macro($macros["macros"], "macro_attribute", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 271, $this->source); })()), "attributes", [], "any", false, false, true, 271), "transmission", [], "any", false, false, true, 271), "wheelDrive", [], "any", false, false, true, 271), "general.wheelDrive", true, "attribute."], 271, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 273
            echo "
                                </div>

                            </div>

                        </div>
                    ";
        }
        // line 280
        echo "                </div>

            </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 285
    public function block_productrelations($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productrelations"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productrelations"));

        // line 286
        echo "                ";
        $context["accessories"] = twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 286, $this->source); })()), "accessories", [], "any", false, false, true, 286);
        // line 287
        echo "
                ";
        // line 288
        if (twig_get_attribute($this->env, $this->source, (isset($context["accessories"]) || array_key_exists("accessories", $context) ? $context["accessories"] : (function () { throw new RuntimeError('Variable "accessories" does not exist.', 288, $this->source); })()), "count", [], "any", false, false, true, 288)) {
            // line 289
            echo "
                    <hr>

                    <div class=\"mt-5 col-12\">
                        <h4 class=\"text-center\">";
            // line 293
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.accessories"), "html", null, true);
            echo "</h4>

                        <div class=\"row\">
                            ";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["accessories"]) || array_key_exists("accessories", $context) ? $context["accessories"] : (function () { throw new RuntimeError('Variable "accessories" does not exist.', 296, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 297
                echo "
                                <div class=\"col-md-3 d-flex align-items-stretch\">
                                    ";
                // line 299
                $this->loadTemplate("product/product_teaser.html.twig", "product/detail.html.twig", 299)->display(twig_array_merge($context, ["product" => $context["item"]]));
                // line 300
                echo "                                </div>

                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "                        </div>

                    </div>

                ";
        }
        // line 308
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  875 => 308,  868 => 303,  852 => 300,  850 => 299,  846 => 297,  829 => 296,  823 => 293,  817 => 289,  815 => 288,  812 => 287,  809 => 286,  799 => 285,  786 => 280,  777 => 273,  771 => 271,  769 => 270,  766 => 269,  761 => 267,  757 => 266,  753 => 265,  748 => 264,  746 => 263,  738 => 257,  735 => 256,  726 => 249,  721 => 247,  716 => 246,  714 => 245,  711 => 244,  706 => 242,  702 => 241,  698 => 240,  693 => 239,  691 => 238,  683 => 232,  681 => 231,  673 => 225,  667 => 222,  663 => 221,  660 => 220,  658 => 219,  653 => 217,  650 => 216,  644 => 213,  640 => 212,  637 => 211,  635 => 210,  625 => 202,  619 => 199,  616 => 198,  613 => 197,  607 => 194,  604 => 193,  602 => 192,  597 => 190,  591 => 186,  581 => 185,  569 => 181,  563 => 179,  561 => 178,  556 => 176,  553 => 175,  543 => 174,  533 => 116,  526 => 112,  522 => 111,  515 => 107,  511 => 106,  507 => 104,  505 => 103,  502 => 102,  492 => 101,  479 => 97,  475 => 96,  471 => 94,  465 => 91,  461 => 90,  458 => 89,  455 => 88,  445 => 87,  432 => 82,  423 => 79,  419 => 78,  414 => 77,  410 => 76,  405 => 74,  402 => 73,  392 => 72,  382 => 52,  376 => 48,  364 => 42,  360 => 41,  355 => 38,  351 => 37,  346 => 34,  343 => 33,  340 => 32,  330 => 31,  316 => 309,  314 => 285,  311 => 284,  309 => 185,  306 => 184,  304 => 174,  290 => 163,  286 => 162,  281 => 160,  275 => 159,  272 => 158,  264 => 156,  262 => 155,  257 => 152,  244 => 150,  240 => 149,  233 => 145,  230 => 144,  224 => 142,  222 => 141,  219 => 140,  212 => 135,  203 => 133,  199 => 132,  193 => 129,  188 => 126,  186 => 125,  183 => 124,  180 => 123,  178 => 122,  171 => 117,  169 => 101,  166 => 100,  164 => 87,  161 => 86,  159 => 72,  151 => 67,  148 => 66,  142 => 64,  140 => 63,  130 => 55,  126 => 53,  124 => 31,  118 => 28,  114 => 27,  110 => 25,  108 => 24,  97 => 16,  94 => 15,  88 => 13,  86 => 12,  80 => 8,  70 => 7,  59 => 5,  57 => 3,  44 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var product \\App\\Model\\Product\\Car #}

{% import 'product/macros.html.twig' as macros %}

{% extends 'layouts/layout.html.twig' %}

{% block content %}

    <div id=\"main-content\" class=\"main-content\">

        <div class=\"d-md-none mt-3\">
            {% if(product.manufacturer and product.manufacturer.logo)  %}
                {{ product.manufacturer.logo.thumbnail('product_detail_manufacturer').getHTML({imgAttributes: {class: 'img-fluid float-right'}})|raw }}
            {%  endif  %}
            <div class=\"page-header\">
                <h1>{{ product.oSName }}</h1>
            </div>
        </div>

        <div class=\"bg-white my-3\">
            <div class=\"row\">

                <div class=\"col-md-6 mb-4\">
                    {% if(product.mainImage) %}

                        <div class=\"p-3\">
                            <a href=\"{{ product.mainImage.getThumbnail('galleryLightbox')|raw }}\" class=\"thumbnail\">
                                {{ product.mainImage.thumbnail('product_detail').getHTML({imgAttributes: {class: 'img-thumbnail1 img-fluid'}})|raw }}
                            </a>

                            {% block additionalimages %}
                                {% set additionalImages = product.additionalImages %}
                                {%  if(additionalImages) %}

                                    <div class=\"row\">

                                        {% for image in additionalImages %}

                                            <div class=\"col-4 mt-3\">

                                                <a href=\"{{ image.getThumbnail('galleryLightbox')|raw }}\" class=\"thumbnail\">
                                                    {{ image.thumbnail('product_detail_small').getHTML({imgAttributes: {class: 'img-thumbnail1 img-fluid'}})|raw }}
                                                </a>

                                            </div>

                                        {% endfor %}

                                    </div>

                                {%  endif %}
                            {% endblock %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"col-md-6 mb-4\">

                    <div class=\"p-3 pt-4\">

                        <div class=\"row d-none d-md-block mb-3\">
                            <div class=\"col-12\">
                                {% if(product.manufacturer and product.manufacturer.logo)  %}
                                    {{ product.manufacturer.logo.thumbnail('product_detail_manufacturer').getHTML({imgAttributes: {class: 'img-fluid float-right'}})|raw }}
                                {%  endif  %}

                                <h2 class=\"\">{{ product.oSName }}</h2>
                            </div>
                        </div>
                        <div class=\"row\">

                            {% block colorvariants %}
                                <dl class=\"item-property col-12\">
                                    <dt>{{ 'general.color' | trans }}</dt>
                                    <dd>
                                        {% for colorVariant in product.colorVariants %}
                                            <a href=\"{{ app_product_detaillink(colorVariant) }}\"
                                               class=\"btn {{ product.id == colorVariant.id ? 'btn-primary' : 'btn-outline-primary' }}\">
                                                {{ colorVariant.color | colorname }}
                                            </a>
                                        {% endfor %}
                                    </dd>

                                </dl>
                            {% endblock %}

                            {% block detailinfos %}
                                {% if(product.bodyStyle) %}
                                    <dl class=\"item-property col-6\">
                                        <dt>{{ 'general.body-style' | trans }}</dt>
                                        <dd>{{ product.bodyStyle.name }}</dd>
                                    </dl>
                                {% endif %}

                                <dl class=\"item-property col-6\">
                                    <dt>{{ 'general.car-class' | trans }}</dt>
                                    <dd>{{ ('attribute.' ~ product.carClass) | lower | trans }}</dd>
                                </dl>
                            {% endblock %}

                            {% block salesinfos %}

                                {% if product.saleInformation.saleInformation %}

                                    <dl class=\"item-property col-6 mb-0\">
                                        <dt>{{ 'general.condition' | trans }}</dt>
                                        <dd>{{ ('attribute.' ~ product.saleInformation.saleInformation.condition) | lower | trans}}</dd>
                                    </dl>

                                    <dl class=\"item-property col-6 mb-0\">
                                        <dt>{{ 'general.milage' | trans }}</dt>
                                        <dd>{{ product.saleInformation.saleInformation.milage}}</dd>
                                    </dl>

                                {% endif %}
                            {% endblock %}

                        </div>

                        <hr/>
                        <div class=\"mt-4 text-center\">
                            {% set priceInfo = product.oSPriceInfo %}
                            {% set price = product.oSPrice %}

                            {% if(priceInfo.rules) %}

                                <div class=\"alert alert-success mb-4\" role=\"alert\">

                                    <p class=\"small mb-2\"><strong>{{ 'general.your-benefits' | trans }}</strong></p>

                                    <ul class=\"list-unstyled mb-0 small\">
                                        {% for rule in priceInfo.rules %}
                                            <li>{{ rule.label }}</li>
                                        {% endfor %}
                                    </ul>

                                </div>

                            {% endif %}

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

                            {% if product.saleInformation.saleInformation %}
                                <p class=\"small text-muted mt-1\">{{ 'general.available-in' | trans }} {{ ('attribute.' ~ product.saleInformation.saleInformation.availabilityType) | lower | trans }}</p>
                            {% endif %}
                        </div>
                        <form id=\"shop_add_to_cart_form_{{ product.id }}\" method=\"post\" action=\"{{ path('shop-add-to-cart', { id: product.id }) }}\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('addToCart') }}\">
                            <a href=\"#\"
                               onclick=\"document.getElementById('shop_add_to_cart_form_{{ product.id }}').submit();\"
                               class=\"btn btn-success btn-block\">{{ 'general.add-to-cart' | trans }}</a>
                        </form>

                    </div>

                </div>

            </div>

            <hr>

            {% block description %}
                <div class=\"mt-5 col-12 text-center\">
                    <h4 class=\"text-center\">{{ 'general.additional-information' | trans }}</h4>

                    {% if(product.description) %}
                        <p>{{ product.description | raw }}</p>
                    {% endif %}

                </div>
            {% endblock %}

            {% block attributes %}
                <div class=\"col-12\">

                <ul class=\"nav nav-tabs\" id=\"attributes\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">{{ 'general.general' | trans }}</a>
                    </li>
                    {% if(product.attributes.dimensions or product.attributes.bodywork) %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"dimensions-tab\" data-toggle=\"tab\" href=\"#dimensions\" role=\"tab\" aria-controls=\"dimensions\" aria-selected=\"false\">{{ 'general.dimensions' | trans }}</a>
                        </li>
                    {% endif %}
                    {% if(product.attributes.engine or product.attributes.transmission) %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"engine-tab\" data-toggle=\"tab\" href=\"#engine\" role=\"tab\" aria-controls=\"engine\" aria-selected=\"false\">{{ 'general.engine' | trans }}</a>
                        </li>
                    {%  endif %}
                </ul>
                <div class=\"tab-content\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">

                        <div class=\"m-3\">

                            <div class=\"row\">

                                {% if(product.manufacturer) %}
                                    <dl class=\"item-property col-6 col-md-3\">
                                        <dt>{{ 'general.manufacturer' | trans }}</dt>
                                        <dd>{{ product.manufacturer.name }}</dd>
                                    </dl>
                                {% endif %}

                                {{ macros.attribute(product.productionYear, 'general.productionYear') }}

                                {% if(product.country) %}
                                    <dl class=\"item-property col-6 col-md-3\">
                                        <dt>{{ 'general.country' | trans }}</dt>
                                        <dd>{{ product.country | country }}</dd>
                                    </dl>
                                {% endif %}

                            </div>

                        </div>

                    </div>
                    {% if(product.attributes.dimensions or product.attributes.bodywork) %}
                        <div class=\"tab-pane fade\" id=\"dimensions\" role=\"tabpanel\" aria-labelledby=\"dimensions-tab\">

                            <div class=\"m-3\">

                                <div class=\"row\">

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

                            </div>

                        </div>
                    {%  endif %}
                    {% if(product.attributes.engine or product.attributes.transmission) %}
                        <div class=\"tab-pane fade\" id=\"engine\" role=\"tabpanel\" aria-labelledby=\"engine-tab\">

                            <div class=\"m-3\">

                                <div class=\"row\">

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

                            </div>

                        </div>
                    {%  endif %}
                </div>

            </div>
            {% endblock %}

            {% block productrelations %}
                {% set accessories = product.accessories %}

                {%  if(accessories.count) %}

                    <hr>

                    <div class=\"mt-5 col-12\">
                        <h4 class=\"text-center\">{{ 'general.accessories' | trans }}</h4>

                        <div class=\"row\">
                            {% for item in accessories %}

                                <div class=\"col-md-3 d-flex align-items-stretch\">
                                    {% include 'product/product_teaser.html.twig' with {'product': item} %}
                                </div>

                            {% endfor %}
                        </div>

                    </div>

                {% endif %}
            {% endblock %}


        </div>
    </div>
{% endblock %}", "product/detail.html.twig", "/var/www/html/EcommerceProject/ecom/templates/product/detail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 3, "if" => 12, "block" => 31, "set" => 122, "for" => 132, "include" => 299);
        static $filters = array("raw" => 13, "escape" => 16, "trans" => 129, "currency" => 150, "lower" => 156, "colorname" => 79, "country" => 222);
        static $functions = array("path" => 159, "csrf_token" => 160, "app_product_detaillink" => 77);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'block', 'set', 'for', 'include'],
                ['raw', 'escape', 'trans', 'currency', 'lower', 'colorname', 'country'],
                ['path', 'csrf_token', 'app_product_detaillink']
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
