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

/* areas/featurette/view.html.twig */
class __TwigTemplate_e8c9081afdcbc178b9350a56f68d5948 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/featurette/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/featurette/view.html.twig"));

        // line 1
        $context["featuretteBlock"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "block");
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
            $context["positionSelect"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "position", ["store" => [0 => [0 => "left", 1 => "left"], 1 => [0 => "right", 1 => "right"]], "reload" => true, "class" => "align-middle"]);
            // line 10
            echo "
        ";
            // line 11
            $context["typeSelect"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "type", ["reload" => true, "store" => [0 => [0 => "video", 1 => "video"], 1 => [0 => "image", 1 => "image"]], "class" => "align-middle"]);
            // line 16
            echo "
        ";
            // line 17
            $context["position"] = ((twig_get_attribute($this->env, $this->source, ($context["positionSelect"] ?? null), "getData", [], "method", true, true, true, 17)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["positionSelect"] ?? null), "getData", [], "method", false, false, true, 17), 17, $this->source), "left")) : ("left"));
            // line 18
            echo "        ";
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 18, $this->source); })())) {
                // line 19
                echo "            <div class=\"mb-3\">
                <span class=\"editmode-label align-middle\">Orientation:</span>
                ";
                // line 21
                echo $this->sandbox->ensureToStringAllowed((isset($context["positionSelect"]) || array_key_exists("positionSelect", $context) ? $context["positionSelect"] : (function () { throw new RuntimeError('Variable "positionSelect" does not exist.', 21, $this->source); })()), 21, $this->source);
                echo "
            </div>
        ";
            }
            // line 24
            echo "
        <div class=\"row featurette\">
            <div class=\"col-sm-7 ";
            // line 26
            echo ((((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 26, $this->source); })()) == "right")) ? ("order-md-2") : (""));
            echo "\">
                <h2 class=\"featurette-heading\">
                    ";
            // line 28
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
            echo "
                    <br>
                    <span class=\"text-muted\">";
            // line 30
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "subline");
            echo "</span>
                </h2>

                <div class=\"lead\">
                    ";
            // line 34
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "content", ["height" => 200]);
            // line 36
            echo "
                </div>
            </div>

            <div class=\"col-sm-5 ";
            // line 40
            echo ((((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 40, $this->source); })()) == "right")) ? ("order-md-1") : (""));
            echo "\">

                ";
            // line 42
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 42, $this->source); })())) {
                // line 43
                echo "                    <div class=\"mb-3\">
                        <span class=\"editmode-label align-middle\">Type:</span>
                        ";
                // line 45
                echo $this->sandbox->ensureToStringAllowed((isset($context["typeSelect"]) || array_key_exists("typeSelect", $context) ? $context["typeSelect"] : (function () { throw new RuntimeError('Variable "typeSelect" does not exist.', 45, $this->source); })()), 45, $this->source);
                echo "
                    </div>
                ";
            }
            // line 48
            echo "
                ";
            // line 49
            $context["type"] = twig_get_attribute($this->env, $this->source, (isset($context["typeSelect"]) || array_key_exists("typeSelect", $context) ? $context["typeSelect"] : (function () { throw new RuntimeError('Variable "typeSelect" does not exist.', 49, $this->source); })()), "getData", [], "method", false, false, true, 49);
            // line 50
            echo "
                ";
            // line 51
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 51, $this->source); })()) == "video")) {
                // line 52
                echo "
                    ";
                // line 53
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "video", "video", ["thumbnail" => "featurerette", "attributes" => ["class" => "video-js vjs-default-skin vjs-big-play-centered", "data-setup" => "{}"]]);
                // line 61
                echo "

                ";
            } else {
                // line 64
                echo "
                    ";
                // line 65
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image", ["imgAttributes" => ["class" => "featurette-image img-responsive"], "thumbnail" => "featurerette"]);
                // line 70
                echo "

                ";
            }
            // line 73
            echo "
            </div>
        </div>

        ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, (isset($context["featuretteBlock"]) || array_key_exists("featuretteBlock", $context) ? $context["featuretteBlock"] : (function () { throw new RuntimeError('Variable "featuretteBlock" does not exist.', 77, $this->source); })()), "getCurrent", [], "method", false, false, true, 77) < (twig_get_attribute($this->env, $this->source, (isset($context["featuretteBlock"]) || array_key_exists("featuretteBlock", $context) ? $context["featuretteBlock"] : (function () { throw new RuntimeError('Variable "featuretteBlock" does not exist.', 77, $this->source); })()), "getCount", [], "method", false, false, true, 77) - 1))) {
                // line 78
                echo "            <hr class=\"featurette-divider\">
        ";
            }
            // line 80
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/featurette/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 82,  169 => 80,  165 => 78,  163 => 77,  157 => 73,  152 => 70,  150 => 65,  147 => 64,  142 => 61,  140 => 53,  137 => 52,  135 => 51,  132 => 50,  130 => 49,  127 => 48,  121 => 45,  117 => 43,  115 => 42,  110 => 40,  104 => 36,  102 => 34,  95 => 30,  90 => 28,  85 => 26,  81 => 24,  75 => 21,  71 => 19,  68 => 18,  66 => 17,  63 => 16,  61 => 11,  58 => 10,  55 => 5,  51 => 4,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set featuretteBlock = pimcore_block('block') %}

<section class=\"area-featurette\">
    {% for i in pimcore_iterate_block(featuretteBlock) %}
        {% set positionSelect = pimcore_select('position', {
            store: [[\"left\",\"left\"],[\"right\",\"right\"]],
            reload: true,
            class: 'align-middle'
        }) %}

        {% set typeSelect = pimcore_select('type', {
            reload: true,
            store: [[\"video\",\"video\"], [\"image\",\"image\"]],
            class: 'align-middle'
        }) %}

        {% set position = positionSelect.getData()|default('left') %}
        {% if editmode %}
            <div class=\"mb-3\">
                <span class=\"editmode-label align-middle\">Orientation:</span>
                {{ positionSelect | raw }}
            </div>
        {% endif %}

        <div class=\"row featurette\">
            <div class=\"col-sm-7 {{ position == 'right' ? 'order-md-2' : '' }}\">
                <h2 class=\"featurette-heading\">
                    {{ pimcore_input('headline') }}
                    <br>
                    <span class=\"text-muted\">{{ pimcore_input('subline') }}</span>
                </h2>

                <div class=\"lead\">
                    {{ pimcore_wysiwyg('content', {
                        height: 200
                    }) }}
                </div>
            </div>

            <div class=\"col-sm-5 {{ position == 'right' ? 'order-md-1' : '' }}\">

                {% if editmode %}
                    <div class=\"mb-3\">
                        <span class=\"editmode-label align-middle\">Type:</span>
                        {{ typeSelect|raw }}
                    </div>
                {% endif %}

                {% set type = typeSelect.getData() %}

                {% if type == 'video' %}

                    {{
                        pimcore_video('video', {
                            thumbnail: 'featurerette',
                            attributes: {
                                class: 'video-js vjs-default-skin vjs-big-play-centered',
                                'data-setup': '{}'
                            }
                        })
                    }}

                {% else %}

                    {{
                        pimcore_image('image', {
                            imgAttributes: {class: 'featurette-image img-responsive'},
                            thumbnail: 'featurerette'
                        })
                    }}

                {% endif %}

            </div>
        </div>

        {% if featuretteBlock.getCurrent() < (featuretteBlock.getCount() - 1) %}
            <hr class=\"featurette-divider\">
        {% endif %}

    {% endfor %}
</section>
", "areas/featurette/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/featurette/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 4, "if" => 18);
        static $filters = array("default" => 17, "raw" => 21);
        static $functions = array("pimcore_block" => 1, "pimcore_iterate_block" => 4, "pimcore_select" => 5, "pimcore_input" => 28, "pimcore_wysiwyg" => 34, "pimcore_video" => 54, "pimcore_image" => 66);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['default', 'raw'],
                ['pimcore_block', 'pimcore_iterate_block', 'pimcore_select', 'pimcore_input', 'pimcore_wysiwyg', 'pimcore_video', 'pimcore_image']
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
