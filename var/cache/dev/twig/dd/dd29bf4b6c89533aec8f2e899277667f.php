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

/* default/gallery_renderlet.html.twig */
class __TwigTemplate_9759e59ff4f891b03e7dff62c5e0a4a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/gallery_renderlet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/gallery_renderlet.html.twig"));

        // line 1
        echo "<section class=\"row\">
    ";
        // line 2
        if ((isset($context["asset"]) || array_key_exists("asset", $context) ? $context["asset"] : (function () { throw new RuntimeError('Variable "asset" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["asset"]) || array_key_exists("asset", $context) ? $context["asset"] : (function () { throw new RuntimeError('Variable "asset" does not exist.', 3, $this->source); })()), "getChildren", [], "method", false, false, true, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 4
                echo "                ";
                if ($this->env->getTest('instanceof')->getCallable()($context["image"], "\\Pimcore\\Model\\Asset\\Image")) {
                    // line 5
                    echo "                    <div class=\"col-md-4\">
                        <a href=\"";
                    // line 6
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getThumbnail", [0 => "galleryLightbox"], "method", false, false, true, 6), 6, $this->source);
                    echo "\" class=\"thumbnail\">
                            ";
                    // line 7
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "getThumbnail", [0 => "galleryThumbnail"], "method", false, false, true, 7), "getHTML", [0 => ["imgAttributes" => ["class" => "img-thumbnail img-responsive"]]], "method", false, false, true, 7), 7, $this->source);
                    echo "
                        </a>
                    </div>
                ";
                }
                // line 11
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/gallery_renderlet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 13,  78 => 12,  72 => 11,  65 => 7,  61 => 6,  58 => 5,  55 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"row\">
    {% if asset %}
            {% for image in asset.getChildren() %}
                {% if image is instanceof('\\\\Pimcore\\\\Model\\\\Asset\\\\Image') %}
                    <div class=\"col-md-4\">
                        <a href=\"{{ image.getThumbnail('galleryLightbox')|raw }}\" class=\"thumbnail\">
                            {{ image.getThumbnail('galleryThumbnail').getHTML({imgAttributes: {class: 'img-thumbnail img-responsive'}})|raw }}
                        </a>
                    </div>
                {% endif %}
            {% endfor %}
    {% endif %}
</section>
", "default/gallery_renderlet.html.twig", "/var/www/html/EcommerceProject/ecom/templates/default/gallery_renderlet.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 3);
        static $filters = array("raw" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['raw'],
                []
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
