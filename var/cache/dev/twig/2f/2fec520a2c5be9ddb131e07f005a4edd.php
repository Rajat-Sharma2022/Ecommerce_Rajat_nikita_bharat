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

/* areas/gallery-carousel/view.html.twig */
class __TwigTemplate_485274d47eeb5ac9bd88bbb97a1360ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/gallery-carousel/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/gallery-carousel/view.html.twig"));

        // line 1
        echo "<section class=\"area-gallery-carousel\">
    ";
        // line 2
        $context["selectStore"] = [];
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "        ";
            $context["selectStore"] = twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["selectStore"]) || array_key_exists("selectStore", $context) ? $context["selectStore"] : (function () { throw new RuntimeError('Variable "selectStore" does not exist.', 4, $this->source); })()), 4, $this->source), [0 => $context["i"]]);
            // line 5
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
    ";
        // line 7
        $context["slidesSelect"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "slides", ["store" =>         // line 8
(isset($context["selectStore"]) || array_key_exists("selectStore", $context) ? $context["selectStore"] : (function () { throw new RuntimeError('Variable "selectStore" does not exist.', 8, $this->source); })()), "reload" => true, "width" => 70, "class" => "align-middle"]);
        // line 13
        echo "
    ";
        // line 14
        $context["showPreviewsCheckbox"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "checkbox", "showPreviews", ["class" => "align-middle pt-7px"]);
        // line 15
        echo "    ";
        $context["showPreviews"] = (twig_get_attribute($this->env, $this->source, (isset($context["showPreviewsCheckbox"]) || array_key_exists("showPreviewsCheckbox", $context) ? $context["showPreviewsCheckbox"] : (function () { throw new RuntimeError('Variable "showPreviewsCheckbox" does not exist.', 15, $this->source); })()), "isChecked", [], "any", false, false, true, 15) &&  !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 15, $this->source); })()));
        // line 16
        echo "
    ";
        // line 17
        $context["id"] = ("gallery-carousel-" . $this->env->getFunction('uniqid')->getCallable()());
        // line 18
        echo "    ";
        $context["slides"] = ((twig_get_attribute($this->env, $this->source, ($context["slidesSelect"] ?? null), "getData", [], "method", true, true, true, 18)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["slidesSelect"] ?? null), "getData", [], "method", false, false, true, 18), 18, $this->source), 2)) : (2));
        // line 19
        echo "
    ";
        // line 20
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "
        <div class=\"alert alert-secondary col-xs-12\" style=\"height: 75px\">
            <div class=\"col-xs-6 d-inline mx-auto\">
                <span class=\"editmode-label align-middle\">How many images you want to show?</span>
                ";
            // line 25
            echo $this->sandbox->ensureToStringAllowed((isset($context["slidesSelect"]) || array_key_exists("slidesSelect", $context) ? $context["slidesSelect"] : (function () { throw new RuntimeError('Variable "slidesSelect" does not exist.', 25, $this->source); })()), 25, $this->source);
            echo "
            </div>
            <div class=\"col-xs-6 d-inline ml-5\">
                <span class=\"editmode-label align-middle\">Show Previews</span>
                ";
            // line 29
            echo $this->sandbox->ensureToStringAllowed((isset($context["showPreviewsCheckbox"]) || array_key_exists("showPreviewsCheckbox", $context) ? $context["showPreviewsCheckbox"] : (function () { throw new RuntimeError('Variable "showPreviewsCheckbox" does not exist.', 29, $this->source); })()), 29, $this->source);
            echo "
            </div>
        </div>

    ";
        }
        // line 34
        echo "
    <div id=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })()), 35, $this->source), "html", null, true);
        echo "\" class=\"gallery carousel slide\" data-ride=\"carousel\"  ";
        echo (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 35, $this->source); })())) ? ("data-interval=\"false\"") : (""));
        echo ">
        <!-- Indicators -->
        <ol class=\"carousel-indicators ";
        // line 37
        echo (((isset($context["showPreviews"]) || array_key_exists("showPreviews", $context) ? $context["showPreviews"] : (function () { throw new RuntimeError('Variable "showPreviews" does not exist.', 37, $this->source); })())) ? ("preview visible-lg") : (""));
        echo "\">

            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["slides"]) || array_key_exists("slides", $context) ? $context["slides"] : (function () { throw new RuntimeError('Variable "slides" does not exist.', 39, $this->source); })()) - 1)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "
                <li data-target=\"#";
            // line 41
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 41, $this->source); })()), 41, $this->source), "html", null, true);
            echo "\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 41, $this->source), "html", null, true);
            echo "\" class=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 41)) ? ("active") : (""));
            echo "\">
                    ";
            // line 42
            if ((isset($context["showPreviews"]) || array_key_exists("showPreviews", $context) ? $context["showPreviews"] : (function () { throw new RuntimeError('Variable "showPreviews" does not exist.', 42, $this->source); })())) {
                // line 43
                echo "                        ";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", ("image_" . $this->sandbox->ensureToStringAllowed(                // line 44
$context["i"], 44, $this->source)), ["thumbnail" => "galleryCarouselPreview"]);
                // line 47
                echo "
                    ";
            }
            // line 49
            echo "                </li>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </ol>

        <div class=\"carousel-inner\">
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["slides"]) || array_key_exists("slides", $context) ? $context["slides"] : (function () { throw new RuntimeError('Variable "slides" does not exist.', 55, $this->source); })()) - 1)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 56
            echo "                <div class=\"carousel-item ";
            echo twig_escape_filter($this->env, (($this->sandbox->ensureToStringAllowed((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 56, $this->source); })()), 56, $this->source) . "-") . $this->sandbox->ensureToStringAllowed($context["i"], 56, $this->source)), "html", null, true);
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 56)) ? ("active") : (""));
            echo "\">
                    ";
            // line 57
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", ("image_" . $this->sandbox->ensureToStringAllowed(            // line 58
$context["i"], 58, $this->source)), ["thumbnail" => "galleryCarousel", "hidetext" => true, "dropClass" => (($this->sandbox->ensureToStringAllowed(            // line 61
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 61, $this->source); })()), 61, $this->source) . "-") . $this->sandbox->ensureToStringAllowed($context["i"], 61, $this->source)), "imgAttributes" => ["class" => "d-block w-100"]]);
            // line 64
            echo "

                    <div class=\"carousel-caption text-center ";
            // line 66
            echo (((isset($context["showPreviews"]) || array_key_exists("showPreviews", $context) ? $context["showPreviews"] : (function () { throw new RuntimeError('Variable "showPreviews" does not exist.', 66, $this->source); })())) ? ("vh-10") : (""));
            echo "\">
                        <h3>";
            // line 67
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", ("caption-title_" . $this->sandbox->ensureToStringAllowed($context["i"], 67, $this->source)));
            echo "</h3>
                        <p class=\"hero-text\">";
            // line 68
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "textarea", ("caption-text" . $this->sandbox->ensureToStringAllowed($context["i"], 68, $this->source)));
            echo "</p>
                        <p>";
            // line 69
            $context["cLink"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("caption-link" . $this->sandbox->ensureToStringAllowed($context["i"], 69, $this->source)), ["class" => "btn btn-lg btn-primary"]);
            // line 72
            echo "                            ";
            echo $this->sandbox->ensureToStringAllowed((isset($context["cLink"]) || array_key_exists("cLink", $context) ? $context["cLink"] : (function () { throw new RuntimeError('Variable "cLink" does not exist.', 72, $this->source); })()), 72, $this->source);
            echo "
                        </p>
                    </div>
                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </div>

        <a class=\"carousel-control carousel-control-prev\" href=\"#";
        // line 79
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 79, $this->source); })()), 79, $this->source), "html", null, true);
        echo "\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control carousel-control-next\" href=\"#";
        // line 83
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 83, $this->source); })()), 83, $this->source), "html", null, true);
        echo "\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/gallery-carousel/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 83,  256 => 79,  252 => 77,  232 => 72,  230 => 69,  226 => 68,  222 => 67,  218 => 66,  214 => 64,  212 => 61,  211 => 58,  210 => 57,  203 => 56,  186 => 55,  181 => 52,  165 => 49,  161 => 47,  159 => 44,  157 => 43,  155 => 42,  147 => 41,  144 => 40,  127 => 39,  122 => 37,  115 => 35,  112 => 34,  104 => 29,  97 => 25,  91 => 21,  89 => 20,  86 => 19,  83 => 18,  81 => 17,  78 => 16,  75 => 15,  73 => 14,  70 => 13,  68 => 8,  67 => 7,  64 => 6,  58 => 5,  55 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"area-gallery-carousel\">
    {% set selectStore = [] %}
    {% for i in 2..29 %}
        {% set selectStore = selectStore|merge([i]) %}
    {% endfor %}

    {% set slidesSelect = pimcore_select('slides', {
        store: selectStore,
        reload: true,
        width: 70,
        class: 'align-middle'
    }) %}

    {% set showPreviewsCheckbox = pimcore_checkbox('showPreviews', {class: 'align-middle pt-7px'}) %}
    {% set showPreviews = showPreviewsCheckbox.isChecked and not editmode %}

    {% set id = 'gallery-carousel-' ~ uniqid() %}
    {% set slides = slidesSelect.getData()|default(2) %}

    {% if editmode %}

        <div class=\"alert alert-secondary col-xs-12\" style=\"height: 75px\">
            <div class=\"col-xs-6 d-inline mx-auto\">
                <span class=\"editmode-label align-middle\">How many images you want to show?</span>
                {{ slidesSelect|raw }}
            </div>
            <div class=\"col-xs-6 d-inline ml-5\">
                <span class=\"editmode-label align-middle\">Show Previews</span>
                {{ showPreviewsCheckbox|raw }}
            </div>
        </div>

    {% endif %}

    <div id=\"{{ id }}\" class=\"gallery carousel slide\" data-ride=\"carousel\"  {{ editmode ? 'data-interval=\"false\"' : '' }}>
        <!-- Indicators -->
        <ol class=\"carousel-indicators {{ showPreviews ? 'preview visible-lg' }}\">

            {% for i in 0..(slides-1) %}

                <li data-target=\"#{{ id }}\" data-slide-to=\"{{ i }}\" class=\"{{ loop.first ? 'active' }}\">
                    {% if showPreviews %}
                        {{
                            pimcore_image('image_' ~ i, {
                                thumbnail: 'galleryCarouselPreview',
                            })
                        }}
                    {% endif %}
                </li>

            {% endfor %}
        </ol>

        <div class=\"carousel-inner\">
            {% for i in 0..(slides-1) %}
                <div class=\"carousel-item {{ id ~ '-' ~ i }} {{ loop.first ? 'active' }}\">
                    {{
                        pimcore_image('image_' ~ i, {
                            thumbnail: 'galleryCarousel',
                            hidetext: true,
                            dropClass: id ~ '-' ~ i,
                            imgAttributes: {class: 'd-block w-100'}
                        })
                    }}

                    <div class=\"carousel-caption text-center {{ showPreviews ? 'vh-10' : ''}}\">
                        <h3>{{ pimcore_input('caption-title_' ~ i) }}</h3>
                        <p class=\"hero-text\">{{ pimcore_textarea('caption-text' ~ i) }}</p>
                        <p>{% set cLink = pimcore_link('caption-link' ~ i, {
                                'class': 'btn btn-lg btn-primary'
                            }) %}
                            {{ cLink|raw }}
                        </p>
                    </div>
                </div>
            {% endfor %}
        </div>

        <a class=\"carousel-control carousel-control-prev\" href=\"#{{ id }}\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control carousel-control-next\" href=\"#{{ id }}\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</section>
", "areas/gallery-carousel/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/gallery-carousel/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "for" => 3, "if" => 20);
        static $filters = array("merge" => 4, "default" => 18, "raw" => 25, "escape" => 35);
        static $functions = array("range" => 3, "pimcore_select" => 7, "pimcore_checkbox" => 14, "uniqid" => 17, "pimcore_image" => 44, "pimcore_input" => 67, "pimcore_textarea" => 68, "pimcore_link" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['merge', 'default', 'raw', 'escape'],
                ['range', 'pimcore_select', 'pimcore_checkbox', 'uniqid', 'pimcore_image', 'pimcore_input', 'pimcore_textarea', 'pimcore_link']
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
