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

/* includes/macros.html.twig */
class __TwigTemplate_4534f3d251e4a52000ef3a4aafb90f79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/macros.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_image_link($__image__ = null, $__editmode__ = false, $__linkThumbnail__ = "galleryLightbox", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "image" => $__image__,
            "editmode" => $__editmode__,
            "linkThumbnail" => $__linkThumbnail__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "image_link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "image_link"));

            // line 2
            echo "
    ";
            // line 4
            echo "    ";
            $context["hasLink"] = ( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 4, $this->source); })()) &&  !twig_test_empty((isset($context["linkThumbnail"]) || array_key_exists("linkThumbnail", $context) ? $context["linkThumbnail"] : (function () { throw new RuntimeError('Variable "linkThumbnail" does not exist.', 4, $this->source); })())));
            // line 5
            echo "
    ";
            // line 6
            if ((isset($context["hasLink"]) || array_key_exists("hasLink", $context) ? $context["hasLink"] : (function () { throw new RuntimeError('Variable "hasLink" does not exist.', 6, $this->source); })())) {
                // line 7
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 7, $this->source); })()), "getThumbnail", [0 => (isset($context["linkThumbnail"]) || array_key_exists("linkThumbnail", $context) ? $context["linkThumbnail"] : (function () { throw new RuntimeError('Variable "linkThumbnail" does not exist.', 7, $this->source); })())], "method", false, false, true, 7), 7, $this->source), "html", null, true);
                echo "\" class=\"thumbnail\">
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            echo $this->sandbox->ensureToStringAllowed((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 10, $this->source); })()), 10, $this->source);
            echo "

    ";
            // line 12
            if ((isset($context["hasLink"]) || array_key_exists("hasLink", $context) ? $context["hasLink"] : (function () { throw new RuntimeError('Variable "hasLink" does not exist.', 12, $this->source); })())) {
                // line 13
                echo "        </a>
    ";
            }
            // line 15
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "includes/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 15,  101 => 13,  99 => 12,  94 => 10,  91 => 9,  85 => 7,  83 => 6,  80 => 5,  77 => 4,  74 => 2,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro image_link(image, editmode = false, linkThumbnail = 'galleryLightbox') %}

    {# @var image \\Pimcore\\Model\\Document\\Tag\\Image #}
    {% set hasLink = not editmode and linkThumbnail is not empty %}

    {% if hasLink %}
        <a href=\"{{ image.getThumbnail(linkThumbnail) }}\" class=\"thumbnail\">
    {% endif %}

    {{ image|raw }}

    {% if hasLink %}
        </a>
    {% endif %}

{% endmacro %}
", "includes/macros.html.twig", "/var/www/html/EcommerceProject/ecom/templates/includes/macros.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("macro" => 1, "set" => 4, "if" => 6);
        static $filters = array("escape" => 7, "raw" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'set', 'if'],
                ['escape', 'raw'],
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
