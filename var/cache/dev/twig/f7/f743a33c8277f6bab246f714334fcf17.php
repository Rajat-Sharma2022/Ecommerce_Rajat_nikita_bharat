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

/* areas/personalized-product-teaser/view.html.twig */
class __TwigTemplate_c02a96dcfeff3ae7befccd365082e112 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/personalized-product-teaser/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/personalized-product-teaser/view.html.twig"));

        // line 1
        echo "<section class=\"teaser-row-container pt-5 pb-3 bg-light text-center\">
    <div class=\"container\">
        <h2>";
        // line 3
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "productTeaserTitle", ["placeholder" => "Enter Title"]);
        echo "</h2>


        ";
        // line 6
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "
            <div class=\"alert alert-info\">

                <div class=\"text-left\">
                    <strong>Teaser with personalized content:</strong>
                    <br/>
                    Content of this teaser will be personalized for visitor if possible. Personalization parameters
                    are <strong>manufactures</strong> and <strong>car classes</strong> of visited car detail pages.
                    <br/>
                    Manually assigned cars are fallback and will be displayed when no personalization is possible.
                </div>
            </div>

        ";
        }
        // line 21
        echo "
        <div class=\"row mb-3 text-left\">
            ";
        // line 23
        if (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 23, $this->source); })()) ||  !(isset($context["usePersonalizedData"]) || array_key_exists("usePersonalizedData", $context) ? $context["usePersonalizedData"] : (function () { throw new RuntimeError('Variable "usePersonalizedData" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 25
                echo "                    <div class=\"";
                echo (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 25, $this->source); })())) ? ("teaser-col") : ("col-md-4 d-flex align-items-stretch flex-column"));
                echo "\">
                        ";
                // line 26
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "renderlet", ("productTeaser" . $this->sandbox->ensureToStringAllowed(                // line 27
$context["i"], 27, $this->source)), ["type" => "object", "editmode" =>                 // line 29
(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 29, $this->source); })()), "controller" => "App\\Controller\\ProductController::productTeaserAction", "title" => "Drag a product here", "height" => "auto", "width" => "100%"]);
                // line 35
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            ";
        } else {
            // line 39
            echo "
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productList"]) || array_key_exists("productList", $context) ? $context["productList"] : (function () { throw new RuntimeError('Variable "productList" does not exist.', 40, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 41
                echo "                    <div class=\"col-md-4 d-flex align-items-stretch flex-column\">
                        ";
                // line 42
                $this->loadTemplate("product/product_teaser.html.twig", "areas/personalized-product-teaser/view.html.twig", 42)->display(twig_array_merge($context, ["product" => $context["product"]]));
                // line 43
                echo "                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
            ";
        }
        // line 47
        echo "        </div>

    </div>
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/personalized-product-teaser/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 47,  144 => 45,  129 => 43,  127 => 42,  124 => 41,  107 => 40,  104 => 39,  101 => 38,  93 => 35,  91 => 29,  90 => 27,  89 => 26,  84 => 25,  79 => 24,  77 => 23,  73 => 21,  57 => 7,  55 => 6,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"teaser-row-container pt-5 pb-3 bg-light text-center\">
    <div class=\"container\">
        <h2>{{ pimcore_input('productTeaserTitle', {'placeholder':'Enter Title'}) }}</h2>


        {% if editmode %}

            <div class=\"alert alert-info\">

                <div class=\"text-left\">
                    <strong>Teaser with personalized content:</strong>
                    <br/>
                    Content of this teaser will be personalized for visitor if possible. Personalization parameters
                    are <strong>manufactures</strong> and <strong>car classes</strong> of visited car detail pages.
                    <br/>
                    Manually assigned cars are fallback and will be displayed when no personalization is possible.
                </div>
            </div>

        {% endif %}

        <div class=\"row mb-3 text-left\">
            {% if editmode or not usePersonalizedData %}
                {% for i in 0..2 %}
                    <div class=\"{{ editmode ? 'teaser-col' : 'col-md-4 d-flex align-items-stretch flex-column' }}\">
                        {{
                            pimcore_renderlet(('productTeaser'~i), {
                                type: 'object',
                                editmode: editmode,
                                controller: 'App\\\\Controller\\\\ProductController::productTeaserAction',
                                title: 'Drag a product here',
                                height : 'auto',
                                width: '100%'
                            })
                        }}
                    </div>
                {% endfor %}
            {% else %}

                {% for product in productList %}
                    <div class=\"col-md-4 d-flex align-items-stretch flex-column\">
                        {% include 'product/product_teaser.html.twig' with {'product': product} %}
                    </div>
                {% endfor %}

            {% endif %}
        </div>

    </div>
</section>", "areas/personalized-product-teaser/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/personalized-product-teaser/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "for" => 24, "include" => 42);
        static $filters = array();
        static $functions = array("pimcore_input" => 3, "range" => 24, "pimcore_renderlet" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'include'],
                [],
                ['pimcore_input', 'range', 'pimcore_renderlet']
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
