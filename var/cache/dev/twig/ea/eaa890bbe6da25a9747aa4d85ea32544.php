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

/* content/thumbnails.html.twig */
class __TwigTemplate_2d40be9c8ba33adfbff230a46cd3b63c extends Template
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
        // line 1
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/thumbnails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/thumbnails.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "content/thumbnails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div id=\"main-content\" class=\"main-content\" >

        ";
        // line 7
        echo twig_include($this->env, $context, "includes/content-headline.html.twig");
        echo "

        ";
        // line 10
        echo "        ";
        $context["image"] = ((twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image"), "getImage", [], "method", false, false, true, 10)) ? (twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image"), "getImage", [], "method", false, false, true, 10)) : (Pimcore\Model\Asset::getById(341)));
        // line 11
        echo "

        <p>
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Original Dimensions of the Image:"), "html", null, true);
        echo "
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 15, $this->source); })()), "width", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo " x ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 15, $this->source); })()), "height", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
        </p>

        <div class=\"mb-5\">
            ";
        // line 19
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image", ["thumbnail" => "content", "imgAttributes" => ["class" => "img-responsive"]]);
        echo "
        </div>


        ";
        // line 23
        $context["thumbnails"] = ["Cover" => "exampleCover", "Contain" => "exampleContain", "Frame" => "exampleFrame", "Rotate" => "exampleRotate", "Resize" => "exampleResize", "Scale by Width" => "exampleScaleWidth", "Scale by Height" => "exampleScaleHeight", "Contain & Overlay" => "exampleOverlay", "Rounded Corners" => "exampleCorners", "Colors" => "exampleColor", "Sepia" => "exampleSepia", "Grayscale" => "exampleGrayscale", "Mask" => "exampleMask", "Combined 1" => "exampleCombined1", "Combined 2" => "exampleCombined2"];
        // line 40
        echo "


        <section class=\"thumbnail-examples\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["thumbnails"]) || array_key_exists("thumbnails", $context) ? $context["thumbnails"] : (function () { throw new RuntimeError('Variable "thumbnails" does not exist.', 44, $this->source); })()));
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
        foreach ($context['_seq'] as $context["title"] => $context["name"]) {
            // line 45
            echo "
                ";
            // line 46
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 46) % 3) == 0)) {
                // line 47
                echo "                    <div class=\"row\">
                ";
            }
            // line 49
            echo "
                <div class=\"col-lg-4\">
                    ";
            // line 51
            $context["thumbnail"] = twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 51, $this->source); })()), "getThumbnail", [0 => $context["name"]], "method", false, false, true, 51);
            // line 52
            echo "
                    <div class=\"img-container\">
                        ";
            // line 54
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["thumbnail"]) || array_key_exists("thumbnail", $context) ? $context["thumbnail"] : (function () { throw new RuntimeError('Variable "thumbnail" does not exist.', 54, $this->source); })()), "getHTML", [], "method", false, false, true, 54), 54, $this->source);
            echo "
                    </div>

                    <h5>";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["title"], 57, $this->source)), "html", null, true);
            echo "</h5>

                    <div class=\"img-dimensions\">
                        ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dimensions:"), "html", null, true);
            echo "
                        ";
            // line 61
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["thumbnail"]) || array_key_exists("thumbnail", $context) ? $context["thumbnail"] : (function () { throw new RuntimeError('Variable "thumbnail" does not exist.', 61, $this->source); })()), "width", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo " x ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["thumbnail"]) || array_key_exists("thumbnail", $context) ? $context["thumbnail"] : (function () { throw new RuntimeError('Variable "thumbnail" does not exist.', 61, $this->source); })()), "height", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "
                    </div>
                </div>

                ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 65) || (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 65) + 1) % 3) == 0))) {
                // line 66
                echo "                    </div>
                ";
            }
            // line 68
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['title'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </section>

    </div>

    ";
        // line 73
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "areablock", "content_bottom");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "content/thumbnails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 73,  197 => 69,  183 => 68,  179 => 66,  177 => 65,  168 => 61,  164 => 60,  158 => 57,  152 => 54,  148 => 52,  146 => 51,  142 => 49,  138 => 47,  136 => 46,  133 => 45,  116 => 44,  110 => 40,  108 => 23,  101 => 19,  92 => 15,  88 => 14,  83 => 11,  80 => 10,  75 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}

{% block content %}

    <div id=\"main-content\" class=\"main-content\" >

        {{ include('includes/content-headline.html.twig') }}

        {# this is just used for demonstration #}
        {% set image =  pimcore_image('image').getImage() ?: pimcore_asset(341) %}


        <p>
            {{ 'Original Dimensions of the Image:'|trans }}
            {{ image.width }} x {{ image.height }}
        </p>

        <div class=\"mb-5\">
            {{ pimcore_image('image', { thumbnail: 'content', imgAttributes: {class: 'img-responsive'}}) }}
        </div>


        {% set thumbnails = {
            'Cover': 'exampleCover',
            'Contain': 'exampleContain',
            'Frame': 'exampleFrame',
            'Rotate': 'exampleRotate',
            'Resize': 'exampleResize',
            'Scale by Width': 'exampleScaleWidth',
            'Scale by Height': 'exampleScaleHeight',
            'Contain & Overlay': 'exampleOverlay',
            'Rounded Corners': 'exampleCorners',
            'Colors': 'exampleColor',
            'Sepia': 'exampleSepia',
            'Grayscale': 'exampleGrayscale',
            'Mask': 'exampleMask',
            'Combined 1': 'exampleCombined1',
            'Combined 2': 'exampleCombined2'
        } %}



        <section class=\"thumbnail-examples\">
            {% for title, name in thumbnails %}

                {% if loop.index0 % 3 == 0 %}
                    <div class=\"row\">
                {% endif %}

                <div class=\"col-lg-4\">
                    {% set thumbnail = image.getThumbnail(name) %}

                    <div class=\"img-container\">
                        {{ thumbnail.getHTML()|raw }}
                    </div>

                    <h5>{{ title|trans }}</h5>

                    <div class=\"img-dimensions\">
                        {{ 'Dimensions:'|trans }}
                        {{ thumbnail.width }} x {{ thumbnail.height }}
                    </div>
                </div>

                {% if loop.last or ((loop.index0 + 1) % 3 == 0) %}
                    </div>
                {% endif %}
            {% endfor %}
        </section>

    </div>

    {{ pimcore_areablock('content_bottom') }}
{% endblock %}


", "content/thumbnails.html.twig", "/var/www/html/EcommerceProject/ecom/templates/content/thumbnails.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "for" => 44, "if" => 46);
        static $filters = array("escape" => 14, "trans" => 14, "raw" => 54);
        static $functions = array("include" => 7, "pimcore_image" => 10, "pimcore_asset" => 10, "pimcore_areablock" => 73);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans', 'raw'],
                ['include', 'pimcore_image', 'pimcore_asset', 'pimcore_areablock']
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
