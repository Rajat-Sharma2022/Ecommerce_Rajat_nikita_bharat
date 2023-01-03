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

/* areas/hero-grid/view.html.twig */
class __TwigTemplate_77dc12f29c3181a37a5c89ae8745919d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/hero-grid/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/hero-grid/view.html.twig"));

        // line 1
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<div class=\"alert alert-secondary\">
    ";
            // line 3
            echo "Please use same aspect ratio images for best result.";
            echo "
</div>
";
        }
        // line 6
        $context["id"] = $this->env->getFunction('uniqid')->getCallable()("heroGrid-");
        // line 7
        echo "<section id=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()), 7, $this->source), "html", null, true);
        echo "\" class=\"section grid-gallery no-gutters ";
        echo (( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 7, $this->source); })())) ? ("row") : (""));
        echo "\">

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "heroGridBlock", ["class" => "row m-0"])));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "    <div class=\"grid-gallery-item grid-gallery-item-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })()), 10, $this->source), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 10, $this->source), "html", null, true);
            echo " ";
            echo (( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 10, $this->source); })())) ? ("col-md-6") : (""));
            echo " zoom-outer\">

        ";
            // line 12
            if ( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 12, $this->source); })())) {
                // line 13
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("heroGridLink" . $this->sandbox->ensureToStringAllowed($context["i"], 13, $this->source))), "href", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "\">
        ";
            }
            // line 15
            echo "            <span  class=\"tint ";
            echo (( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 15, $this->source); })())) ? ("zoom-inner") : (""));
            echo "\">
                ";
            // line 16
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", ("heroGridImage" . $this->sandbox->ensureToStringAllowed(            // line 17
$context["i"], 17, $this->source)), ["dropClass" => ((("grid-gallery-item-" . $this->sandbox->ensureToStringAllowed(            // line 18
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })()), 18, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed($context["i"], 18, $this->source)), "reload" => true, "hidetext" => true, "thumbnail" => "heroGrid", "imgAttributes" => ["class" => "img-fluid"], "title" => "Drag background image here"]);
            // line 25
            echo "
            </span>
             <span class=\"grid-gallery-item-text\">
                <h2 class=\"text-uppercase\">";
            // line 28
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", ("heroGridHeadline" . $this->sandbox->ensureToStringAllowed($context["i"], 28, $this->source)), ["placeholder" => "Headline"]);
            echo "</h2>
                <h5>";
            // line 29
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", ("heroGridSubheadline" . $this->sandbox->ensureToStringAllowed($context["i"], 29, $this->source)), ["placeholder" => "Sub Headline"]);
            echo "</h5>
                ";
            // line 30
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 30, $this->source); })())) {
                // line 31
                echo "                    <div class=\"mx-auto\">";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("heroGridLink" . $this->sandbox->ensureToStringAllowed($context["i"], 31, $this->source)));
                echo "</div>
                ";
            }
            // line 33
            echo "            </span>
        ";
            // line 34
            if ( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 34, $this->source); })())) {
                // line 35
                echo "            </a>
        ";
            }
            // line 37
            echo "
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/hero-grid/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  127 => 37,  123 => 35,  121 => 34,  118 => 33,  112 => 31,  110 => 30,  106 => 29,  102 => 28,  97 => 25,  95 => 18,  94 => 17,  93 => 16,  88 => 15,  82 => 13,  80 => 12,  70 => 10,  66 => 9,  58 => 7,  56 => 6,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if  editmode %}
<div class=\"alert alert-secondary\">
    {{ 'Please use same aspect ratio images for best result.' }}
</div>
{% endif %}
{% set id = uniqid('heroGrid-') %}
<section id=\"{{ id }}\" class=\"section grid-gallery no-gutters {{ (not editmode?'row':'') }}\">

{% for i in pimcore_iterate_block(pimcore_block('heroGridBlock', {class:'row m-0'})) %}
    <div class=\"grid-gallery-item grid-gallery-item-{{ id }}-{{ i }} {{ (not editmode?'col-md-6':'') }} zoom-outer\">

        {% if not editmode %}
            <a href=\"{{ pimcore_link('heroGridLink' ~ i).href }}\">
        {% endif %}
            <span  class=\"tint {{ (not editmode?'zoom-inner':'') }}\">
                {{
                    pimcore_image('heroGridImage' ~ i, {
                        dropClass: 'grid-gallery-item-' ~ id ~ '-' ~ i,
                        reload: true,
                        hidetext: true,
                        thumbnail: 'heroGrid',
                        imgAttributes: {class: 'img-fluid'},
                        title: 'Drag background image here'
                    })
                }}
            </span>
             <span class=\"grid-gallery-item-text\">
                <h2 class=\"text-uppercase\">{{ pimcore_input('heroGridHeadline' ~ i,{placeholder: 'Headline'}) }}</h2>
                <h5>{{ pimcore_input('heroGridSubheadline' ~ i,{placeholder: 'Sub Headline'}) }}</h5>
                {% if editmode %}
                    <div class=\"mx-auto\">{{ pimcore_link('heroGridLink' ~ i) }}</div>
                {% endif %}
            </span>
        {% if not editmode %}
            </a>
        {% endif %}

    </div>

{% endfor %}

</section>
", "areas/hero-grid/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/hero-grid/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 6, "for" => 9);
        static $filters = array("escape" => 7);
        static $functions = array("uniqid" => 6, "pimcore_iterate_block" => 9, "pimcore_block" => 9, "pimcore_link" => 13, "pimcore_image" => 17, "pimcore_input" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape'],
                ['uniqid', 'pimcore_iterate_block', 'pimcore_block', 'pimcore_link', 'pimcore_image', 'pimcore_input']
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
