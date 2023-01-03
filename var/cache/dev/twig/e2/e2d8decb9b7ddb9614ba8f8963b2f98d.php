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

/* areas/image-hotspot-marker/view.html.twig */
class __TwigTemplate_d3a524f48b10d858c6debf55c82e0540 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/image-hotspot-marker/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/image-hotspot-marker/view.html.twig"));

        // line 1
        $macros["local_macros"] = $this->macros["local_macros"] = $this;
        // line 2
        echo "
";
        // line 27
        echo "
<section class=\"area-image\">
    <div style=\"position: relative;\">
        ";
        // line 30
        $context["image"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image", ["thumbnail" => "content", "imgAttributes" => ["class" => "img-responsive"]]);
        // line 34
        echo "
        ";
        // line 35
        echo $this->sandbox->ensureToStringAllowed((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 35, $this->source); })()), 35, $this->source);
        echo "

        ";
        // line 37
        if ( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "
            ";
            // line 40
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 40, $this->source); })()), "getMarker", [], "method", false, false, true, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["marker"]) {
                // line 41
                echo "                ";
                echo twig_call_macro($macros["local_macros"], "macro_image_marker", [$context["marker"], "image-marker", [0 => "top", 1 => "left"]], 41, $context, $this->getSourceContext());
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
            ";
            // line 45
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 45, $this->source); })()), "getHotspots", [], "method", false, false, true, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["hotspot"]) {
                // line 46
                echo "                ";
                echo twig_call_macro($macros["local_macros"], "macro_image_marker", [$context["hotspot"], "image-hotspot", [0 => "width", 1 => "height", 2 => "top", 3 => "left"]], 46, $context, $this->getSourceContext());
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotspot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
        ";
        }
        // line 50
        echo "    </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function macro_image_marker($__el__ = null, $__class__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "el" => $__el__,
            "class" => $__class__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "image_marker"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "image_marker"));

            // line 4
            echo "
    ";
            // line 6
            echo "    ";
            $context["title"] = "";
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["el"]) || array_key_exists("el", $context) ? $context["el"] : (function () { throw new RuntimeError('Variable "el" does not exist.', 7, $this->source); })()), "data", [], "array", false, false, true, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 8
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["d"], "name", [], "array", false, false, true, 8) == "title")) {
                    // line 9
                    echo "            ";
                    $context["title"] = twig_get_attribute($this->env, $this->source, $context["d"], "value", [], "array", false, false, true, 9);
                    // line 10
                    echo "        ";
                }
                // line 11
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "
    ";
            // line 14
            echo "    ";
            $context["styleAttributes"] = [];
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 16
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["el"] ?? null), $context["attribute"], [], "array", true, true, true, 16)) {
                    // line 17
                    echo "            ";
                    $context["attributePair"] = ((($this->sandbox->ensureToStringAllowed($context["attribute"], 17, $this->source) . ": ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["el"]) || array_key_exists("el", $context) ? $context["el"] : (function () { throw new RuntimeError('Variable "el" does not exist.', 17, $this->source); })()), $context["attribute"], [], "array", false, false, true, 17), 17, $this->source)) . "%");
                    // line 18
                    echo "            ";
                    $context["styleAttributes"] = twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["styleAttributes"]) || array_key_exists("styleAttributes", $context) ? $context["styleAttributes"] : (function () { throw new RuntimeError('Variable "styleAttributes" does not exist.', 18, $this->source); })()), 18, $this->source), [0 => (isset($context["attributePair"]) || array_key_exists("attributePair", $context) ? $context["attributePair"] : (function () { throw new RuntimeError('Variable "attributePair" does not exist.', 18, $this->source); })())]);
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
    ";
            // line 22
            $context["style"] = twig_join_filter($this->sandbox->ensureToStringAllowed((isset($context["styleAttributes"]) || array_key_exists("styleAttributes", $context) ? $context["styleAttributes"] : (function () { throw new RuntimeError('Variable "styleAttributes" does not exist.', 22, $this->source); })()), 22, $this->source), "; ");
            // line 23
            echo "
    <div class=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 24, $this->source); })()), 24, $this->source), "html", null, true);
            echo "\" style=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 24, $this->source); })()), 24, $this->source), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 24, $this->source); })()), 24, $this->source), "html", null, true);
            echo "\"></div>

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
        return "areas/image-hotspot-marker/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 24,  198 => 23,  196 => 22,  193 => 21,  187 => 20,  184 => 19,  181 => 18,  178 => 17,  175 => 16,  170 => 15,  167 => 14,  164 => 12,  158 => 11,  155 => 10,  152 => 9,  149 => 8,  144 => 7,  141 => 6,  138 => 4,  117 => 3,  105 => 50,  101 => 48,  92 => 46,  87 => 45,  84 => 43,  75 => 41,  70 => 40,  67 => 38,  65 => 37,  60 => 35,  57 => 34,  55 => 30,  50 => 27,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as local_macros %}

{% macro image_marker(el, class, attributes) %}

    {# extract title #}
    {% set title = '' %}
    {% for d in el['data'] %}
        {% if d['name'] == 'title' %}
            {% set title = d['value'] %}
        {% endif %}
    {% endfor %}

    {# build style attributes #}
    {% set styleAttributes = [] %}
    {% for attribute in attributes %}
        {% if el[attribute] is defined %}
            {% set attributePair = attribute ~ ': ' ~ el[attribute] ~ '%' %}
            {% set styleAttributes = styleAttributes|merge([attributePair]) %}
        {% endif %}
    {% endfor %}

    {% set style = styleAttributes|join('; ') %}

    <div class=\"{{ class }}\" style=\"{{ style }}\" data-toggle=\"tooltip\" title=\"{{ title }}\"></div>

{% endmacro %}

<section class=\"area-image\">
    <div style=\"position: relative;\">
        {% set image = pimcore_image('image', {
            thumbnail: 'content',
            imgAttributes: {class: 'img-responsive'}
        }) %}

        {{ image|raw }}

        {% if not editmode %}

            {# markers #}
            {% for marker in image.getMarker() %}
                {{ local_macros.image_marker(marker, 'image-marker', ['top', 'left']) }}
            {% endfor %}

            {# hotspots #}
            {% for hotspot in image.getHotspots() %}
                {{ local_macros.image_marker(hotspot, 'image-hotspot', ['width', 'height', 'top', 'left']) }}
            {% endfor %}

        {% endif %}
    </div>
</section>
", "areas/image-hotspot-marker/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/image-hotspot-marker/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "set" => 30, "if" => 37, "for" => 40, "macro" => 3);
        static $filters = array("raw" => 35, "merge" => 18, "join" => 22, "escape" => 24);
        static $functions = array("pimcore_image" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'if', 'for', 'macro'],
                ['raw', 'merge', 'join', 'escape'],
                ['pimcore_image']
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
