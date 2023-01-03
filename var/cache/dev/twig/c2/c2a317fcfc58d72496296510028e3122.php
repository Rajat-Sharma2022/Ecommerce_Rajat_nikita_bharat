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

/* areas/print-product-row/view.html.twig */
class __TwigTemplate_9b3a2c2f524926d3e20e3887a4b4cd2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-product-row/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-product-row/view.html.twig"));

        // line 1
        $context["leftMode"] = (twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "mode"), "value", [], "any", false, false, true, 1) == "left");
        // line 2
        echo "
";
        // line 3
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "
    <div class=\"displaymode\">
        <div>Display Mode:</div>
        ";
            // line 7
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "mode", ["reload" => true, "store" => [0 => [0 => "left", 1 => "Left wide"], 1 => [0 => "right", 1 => "Right wide"]]]);
            // line 15
            echo "
    </div>

";
        }
        // line 19
        echo "

<div class=\"productrow\">

    <div class=\"element first ";
        // line 23
        echo (((isset($context["leftMode"]) || array_key_exists("leftMode", $context) ? $context["leftMode"] : (function () { throw new RuntimeError('Variable "leftMode" does not exist.', 23, $this->source); })())) ? ("wide") : ("small"));
        echo " \">
        ";
        // line 24
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "renderlet", "productteaser1", ["controller" => "App\\Controller\\Web2printController::productCellAction", "type" => "object", "className" => [0 => "Car", 1 => "AccessoryPart"], "editmode" =>         // line 29
(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 29, $this->source); })()), "title" => "Drag a product here", "height" => 400, "mode" => ((        // line 32
(isset($context["leftMode"]) || array_key_exists("leftMode", $context) ? $context["leftMode"] : (function () { throw new RuntimeError('Variable "leftMode" does not exist.', 32, $this->source); })())) ? ("") : ("small"))]);
        // line 34
        echo "

    </div>

    <div class=\"element ";
        // line 38
        echo (((isset($context["leftMode"]) || array_key_exists("leftMode", $context) ? $context["leftMode"] : (function () { throw new RuntimeError('Variable "leftMode" does not exist.', 38, $this->source); })())) ? ("small") : ("wide"));
        echo "\">
        ";
        // line 39
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "renderlet", "productteaser2", ["controller" => "App\\Controller\\Web2printController::productCellAction", "type" => "object", "className" => [0 => "Car", 1 => "AccessoryPart"], "editmode" =>         // line 44
(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 44, $this->source); })()), "title" => "Drag a product here", "height" => 400, "mode" => ((        // line 47
(isset($context["leftMode"]) || array_key_exists("leftMode", $context) ? $context["leftMode"] : (function () { throw new RuntimeError('Variable "leftMode" does not exist.', 47, $this->source); })())) ? ("small") : ("wide"))]);
        // line 49
        echo "
    </div>

    <div class=\"clear\"></div>

</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/print-product-row/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 49,  91 => 47,  90 => 44,  89 => 39,  85 => 38,  79 => 34,  77 => 32,  76 => 29,  75 => 24,  71 => 23,  65 => 19,  59 => 15,  57 => 7,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set leftMode = pimcore_select('mode').value == 'left' %}

{% if editmode %}

    <div class=\"displaymode\">
        <div>Display Mode:</div>
        {{
            pimcore_select('mode', {
                'reload': true,
                'store': [
                    ['left', 'Left wide'],
                    ['right', 'Right wide']
                ]
            })
        }}
    </div>

{% endif %}


<div class=\"productrow\">

    <div class=\"element first {{ leftMode ? 'wide' : 'small' }} \">
        {{
            pimcore_renderlet('productteaser1', {
                'controller': 'App\\\\Controller\\\\Web2printController::productCellAction',
                'type': 'object',
                'className': ['Car', 'AccessoryPart'],
                'editmode': editmode,
                'title': 'Drag a product here',
                'height': 400,
                'mode': (leftMode ? '' : 'small')
            })
        }}

    </div>

    <div class=\"element {{ leftMode ? 'small' : 'wide' }}\">
        {{
            pimcore_renderlet('productteaser2', {
                'controller': 'App\\\\Controller\\\\Web2printController::productCellAction',
                'type': 'object',
                'className': ['Car', 'AccessoryPart'],
                'editmode': editmode,
                'title': 'Drag a product here',
                'height': 400,
                'mode': (leftMode ? 'small' : 'wide')
            })
        }}
    </div>

    <div class=\"clear\"></div>

</div>
", "areas/print-product-row/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/print-product-row/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3);
        static $filters = array();
        static $functions = array("pimcore_select" => 1, "pimcore_renderlet" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['pimcore_select', 'pimcore_renderlet']
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
