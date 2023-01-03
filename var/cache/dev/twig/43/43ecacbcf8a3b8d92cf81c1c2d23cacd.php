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

/* areas/gallery-single-images/view.html.twig */
class __TwigTemplate_2d58df3d028d04224664e7c7c04c2dfc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/gallery-single-images/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/gallery-single-images/view.html.twig"));

        // line 1
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("includes/macros.html.twig", "areas/gallery-single-images/view.html.twig", 1)->unwrap();
        // line 2
        echo "
<section class=\"area-gallery-single-images ";
        // line 3
        echo (( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 3, $this->source); })())) ? ("row") : (""));
        echo "\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "gallery")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "                ";
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 5, $this->source); })())) {
                // line 6
                echo "                        ";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image", ["thumbnail" => "galleryThumbnail", "imgAttributes" => ["class" => "img-thumbnail"]]);
                echo "
                ";
            } else {
                // line 8
                echo "                        <div class=\"col-md-4\">
                                ";
                // line 9
                echo twig_call_macro($macros["macros"], "macro_image_link", [$this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image", ["thumbnail" => "galleryThumbnail", "imgAttributes" => ["class" => "img-thumbnail"]]), (isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 9, $this->source); })()), "galleryLightbox"], 9, $context, $this->getSourceContext());
                echo "
                         </div>
                ";
            }
            // line 12
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</section>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/gallery-single-images/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  76 => 12,  70 => 9,  67 => 8,  61 => 6,  58 => 5,  54 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'includes/macros.html.twig' as macros %}

<section class=\"area-gallery-single-images {{ ( not editmode ? 'row':'') }}\">
        {% for i in pimcore_iterate_block(pimcore_block('gallery')) %}
                {% if editmode %}
                        {{ pimcore_image('image', { thumbnail: 'galleryThumbnail', imgAttributes: {class: 'img-thumbnail'}}) }}
                {% else %}
                        <div class=\"col-md-4\">
                                {{ macros.image_link(pimcore_image('image', { thumbnail: 'galleryThumbnail', imgAttributes: {class: 'img-thumbnail'}}), editmode, 'galleryLightbox') }}
                         </div>
                {% endif %}

        {% endfor %}
</section>

", "areas/gallery-single-images/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/gallery-single-images/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "for" => 4, "if" => 5);
        static $filters = array();
        static $functions = array("pimcore_iterate_block" => 4, "pimcore_block" => 4, "pimcore_image" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'for', 'if'],
                [],
                ['pimcore_iterate_block', 'pimcore_block', 'pimcore_image']
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
