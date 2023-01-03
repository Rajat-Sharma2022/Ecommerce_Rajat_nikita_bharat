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

/* areas/time-slider-featurette/view.html.twig */
class __TwigTemplate_673da08707cff7e78174185c240df9ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/time-slider-featurette/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/time-slider-featurette/view.html.twig"));

        // line 1
        $context["featuretteBlock"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "scheduledblock", "block");
        // line 2
        echo "
<section class=\"area-featurette\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator((isset($context["featuretteBlock"]) || array_key_exists("featuretteBlock", $context) ? $context["featuretteBlock"] : (function () { throw new RuntimeError('Variable "featuretteBlock" does not exist.', 4, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "        ";
            $context["positionSelect"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "position", ["store" => [0 => [0 => "left", 1 => "left"], 1 => [0 => "right", 1 => "right"]], "class" => "align-middle"]);
            // line 9
            echo "
        ";
            // line 10
            $context["position"] = ((twig_get_attribute($this->env, $this->source, ($context["positionSelect"] ?? null), "getData", [], "method", true, true, true, 10)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["positionSelect"] ?? null), "getData", [], "method", false, false, true, 10), 10, $this->source), "right")) : ("right"));
            // line 11
            echo "
        <div class=\"row featurette\">
            <div class=\"col-sm-7 ";
            // line 13
            echo ((((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 13, $this->source); })()) == "right")) ? ("col-sm-push-5") : (""));
            echo "\">
                <h2 class=\"featurette-heading\">
                    ";
            // line 15
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
            echo "
                    <span class=\"text-muted\">";
            // line 16
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "subline");
            echo "</span>
                </h2>

                <div class=\"lead\">
                    ";
            // line 20
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "content", ["height" => 200]);
            // line 24
            echo "
                </div>
            </div>

            <div class=\"col-sm-5 ";
            // line 28
            echo ((((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 28, $this->source); })()) == "right")) ? ("col-sm-pull-7") : (""));
            echo "\">
                ";
            // line 29
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 29, $this->source); })())) {
                // line 30
                echo "
                    <div class=\"mb-4\">
                        <span class=\"editmode-label align-middle\">Orientation:</span>
                        ";
                // line 33
                echo $this->sandbox->ensureToStringAllowed((isset($context["positionSelect"]) || array_key_exists("positionSelect", $context) ? $context["positionSelect"] : (function () { throw new RuntimeError('Variable "positionSelect" does not exist.', 33, $this->source); })()), 33, $this->source);
                echo "
                    </div>


                ";
            }
            // line 38
            echo "
                ";
            // line 39
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image", ["imgAttributes" => ["class" => "featurette-image img-responsive"], "thumbnail" => "featurerette"]);
            // line 44
            echo "

            </div>
        </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/time-slider-featurette/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 51,  115 => 44,  113 => 39,  110 => 38,  102 => 33,  97 => 30,  95 => 29,  91 => 28,  85 => 24,  83 => 20,  76 => 16,  72 => 15,  67 => 13,  63 => 11,  61 => 10,  58 => 9,  55 => 5,  51 => 4,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set featuretteBlock = pimcore_scheduledblock('block') %}

<section class=\"area-featurette\">
    {% for i in pimcore_iterate_block(featuretteBlock) %}
        {% set positionSelect = pimcore_select('position', {
            store: [[\"left\",\"left\"],[\"right\",\"right\"]],
            class: 'align-middle'
        }) %}

        {% set position = positionSelect.getData()|default('right') %}

        <div class=\"row featurette\">
            <div class=\"col-sm-7 {{ position == 'right' ? 'col-sm-push-5' : '' }}\">
                <h2 class=\"featurette-heading\">
                    {{ pimcore_input('headline') }}
                    <span class=\"text-muted\">{{ pimcore_input('subline') }}</span>
                </h2>

                <div class=\"lead\">
                    {{
                        pimcore_wysiwyg('content', {
                            height: 200
                        })
                    }}
                </div>
            </div>

            <div class=\"col-sm-5 {{ position == 'right' ? 'col-sm-pull-7' : '' }}\">
                {% if editmode %}

                    <div class=\"mb-4\">
                        <span class=\"editmode-label align-middle\">Orientation:</span>
                        {{ positionSelect|raw }}
                    </div>


                {% endif %}

                {{
                    pimcore_image('image', {
                        imgAttributes: {class: 'featurette-image img-responsive'},
                        thumbnail: 'featurerette'
                    })
                }}

            </div>
        </div>


    {% endfor %}
</section>
", "areas/time-slider-featurette/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/time-slider-featurette/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 4, "if" => 29);
        static $filters = array("default" => 10, "raw" => 33);
        static $functions = array("pimcore_scheduledblock" => 1, "pimcore_iterate_block" => 4, "pimcore_select" => 5, "pimcore_input" => 15, "pimcore_wysiwyg" => 21, "pimcore_image" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['default', 'raw'],
                ['pimcore_scheduledblock', 'pimcore_iterate_block', 'pimcore_select', 'pimcore_input', 'pimcore_wysiwyg', 'pimcore_image']
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
