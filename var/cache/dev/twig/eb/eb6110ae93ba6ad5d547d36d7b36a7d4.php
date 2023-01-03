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

/* areas/text-accordion/view.html.twig */
class __TwigTemplate_1a8f82c751c1e0677d23d5044c0730c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/text-accordion/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/text-accordion/view.html.twig"));

        // line 1
        $context["accordionBlock"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "accordion");
        // line 2
        $context["id"] = $this->env->getFunction('uniqid')->getCallable()("accordion-");
        // line 3
        echo "
<section class=\"area-text-accordion\">
    <div id=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()), 5, $this->source), "html", null, true);
        echo "\" class=\"accordion\">

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator((isset($context["accordionBlock"]) || array_key_exists("accordionBlock", $context) ? $context["accordionBlock"] : (function () { throw new RuntimeError('Variable "accordionBlock" does not exist.', 7, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "            ";
            $context["headerId"] = ("heading" . $this->sandbox->ensureToStringAllowed($context["i"], 8, $this->source));
            // line 9
            echo "            ";
            $context["entryId"] = (($this->sandbox->ensureToStringAllowed((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })()), 9, $this->source) . "-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["accordionBlock"]) || array_key_exists("accordionBlock", $context) ? $context["accordionBlock"] : (function () { throw new RuntimeError('Variable "accordionBlock" does not exist.', 9, $this->source); })()), "getCurrent", [], "method", false, false, true, 9), 9, $this->source));
            // line 10
            echo "            ";
            $context["stateClass"] = ((((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 10, $this->source); })()) || (twig_get_attribute($this->env, $this->source, (isset($context["accordionBlock"]) || array_key_exists("accordionBlock", $context) ? $context["accordionBlock"] : (function () { throw new RuntimeError('Variable "accordionBlock" does not exist.', 10, $this->source); })()), "getCurrent", [], "method", false, false, true, 10) == 0))) ? ("show") : (""));
            // line 11
            echo "
            <div class=\"card\">
                <div class=\"card-header\" id=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["headerId"]) || array_key_exists("headerId", $context) ? $context["headerId"] : (function () { throw new RuntimeError('Variable "headerId" does not exist.', 13, $this->source); })()), 13, $this->source), "html", null, true);
            echo "\">
                    <h5 class=\"mb-0\">
                        ";
            // line 15
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 15, $this->source); })())) {
                // line 16
                echo "                            ";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
                echo "
                        ";
            } else {
                // line 18
                echo "                            <button class=\"btn btn-link ";
                echo ((((isset($context["stateClass"]) || array_key_exists("stateClass", $context) ? $context["stateClass"] : (function () { throw new RuntimeError('Variable "stateClass" does not exist.', 18, $this->source); })()) != "show")) ? ("collapsed") : (""));
                echo "\" data-toggle=\"collapse\" data-target=\"#";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["entryId"]) || array_key_exists("entryId", $context) ? $context["entryId"] : (function () { throw new RuntimeError('Variable "entryId" does not exist.', 18, $this->source); })()), 18, $this->source), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                ";
                // line 19
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline"), "getData", [], "method", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 22
            echo "                    </h5>
                </div>
                <div id=\"";
            // line 24
            (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 24, $this->source); })())) ? (print ("")) : (print (twig_escape_filter($this->env, (isset($context["entryId"]) || array_key_exists("entryId", $context) ? $context["entryId"] : (function () { throw new RuntimeError('Variable "entryId" does not exist.', 24, $this->source); })()), "html", null, true))));
            echo "\" class=\"collapse ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["stateClass"]) || array_key_exists("stateClass", $context) ? $context["stateClass"] : (function () { throw new RuntimeError('Variable "stateClass" does not exist.', 24, $this->source); })()), 24, $this->source), "html", null, true);
            echo "\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["headerId"]) || array_key_exists("headerId", $context) ? $context["headerId"] : (function () { throw new RuntimeError('Variable "headerId" does not exist.', 24, $this->source); })()), 24, $this->source), "html", null, true);
            echo "\" data-parent=\"#";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 24, $this->source); })()), 24, $this->source), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        ";
            // line 26
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "text");
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/text-accordion/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 31,  116 => 26,  105 => 24,  101 => 22,  95 => 19,  88 => 18,  82 => 16,  80 => 15,  75 => 13,  71 => 11,  68 => 10,  65 => 9,  62 => 8,  58 => 7,  53 => 5,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set accordionBlock = pimcore_block('accordion') %}
{% set id = uniqid('accordion-') %}

<section class=\"area-text-accordion\">
    <div id=\"{{ id }}\" class=\"accordion\">

        {% for i in pimcore_iterate_block(accordionBlock) %}
            {% set headerId = 'heading' ~ i %}
            {% set entryId = id ~ '-' ~ accordionBlock.getCurrent() %}
            {% set stateClass = (editmode or (accordionBlock.getCurrent() == 0)) ? 'show' %}

            <div class=\"card\">
                <div class=\"card-header\" id=\"{{ headerId }}\">
                    <h5 class=\"mb-0\">
                        {% if editmode %}
                            {{ pimcore_input('headline') }}
                        {% else %}
                            <button class=\"btn btn-link {{ stateClass != 'show' ? 'collapsed'}}\" data-toggle=\"collapse\" data-target=\"#{{ entryId }}\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                {{ pimcore_input('headline').getData() }}
                            </button>
                        {% endif %}
                    </h5>
                </div>
                <div id=\"{{ editmode ? '' : entryId }}\" class=\"collapse {{ stateClass }}\" aria-labelledby=\"{{ headerId }}\" data-parent=\"#{{ id }}\">
                    <div class=\"card-body\">
                        {{ pimcore_wysiwyg('text') }}
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</section>
", "areas/text-accordion/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/text-accordion/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 7, "if" => 15);
        static $filters = array("escape" => 5);
        static $functions = array("pimcore_block" => 1, "uniqid" => 2, "pimcore_iterate_block" => 7, "pimcore_input" => 16, "pimcore_wysiwyg" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape'],
                ['pimcore_block', 'uniqid', 'pimcore_iterate_block', 'pimcore_input', 'pimcore_wysiwyg']
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
