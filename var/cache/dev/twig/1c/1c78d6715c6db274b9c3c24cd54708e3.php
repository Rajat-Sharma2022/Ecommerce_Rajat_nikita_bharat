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

/* areas/product-teaser/view.html.twig */
class __TwigTemplate_f57792b7376a118abfa4d48eb871e9f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/product-teaser/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/product-teaser/view.html.twig"));

        // line 1
        echo "<section class=\"teaser-row-container pt-5 pb-3 bg-light text-center\">
    <div class=\"container\">
        <h2>";
        // line 3
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "productTeaserTitle", ["placeholder" => "Enter Title"]);
        echo "</h2>
        <div class=\"row mb-3 text-left\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "teaserblock", ["class" => "row11"])));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "                <div class=\"";
            echo (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 6, $this->source); })())) ? ("") : ("col-md-4 d-flex align-items-stretch flex-column"));
            echo "\">
                    ";
            // line 7
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "renderlet", "productTeaser", ["type" => "object", "editmode" =>             // line 10
(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 10, $this->source); })()), "controller" => "App\\Controller\\ProductController::productTeaserAction", "title" => "Drag a product here", "height" => "auto", "width" => "100%"]);
            // line 16
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
    </div>
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/product-teaser/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  66 => 16,  64 => 10,  63 => 7,  58 => 6,  54 => 5,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"teaser-row-container pt-5 pb-3 bg-light text-center\">
    <div class=\"container\">
        <h2>{{ pimcore_input('productTeaserTitle', {'placeholder':'Enter Title'}) }}</h2>
        <div class=\"row mb-3 text-left\">
            {% for i in pimcore_iterate_block(pimcore_block('teaserblock',{class:'row11'})) %}
                <div class=\"{{ editmode ? '' : 'col-md-4 d-flex align-items-stretch flex-column' }}\">
                    {{
                        pimcore_renderlet('productTeaser', {
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
        </div>
    </div>
</section>", "areas/product-teaser/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/product-teaser/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5);
        static $filters = array();
        static $functions = array("pimcore_input" => 3, "pimcore_iterate_block" => 5, "pimcore_block" => 5, "pimcore_renderlet" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                [],
                ['pimcore_input', 'pimcore_iterate_block', 'pimcore_block', 'pimcore_renderlet']
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
