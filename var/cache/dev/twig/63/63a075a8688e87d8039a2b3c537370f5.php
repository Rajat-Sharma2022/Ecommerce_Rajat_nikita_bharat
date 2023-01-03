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

/* areas/print-key-visual/view.html.twig */
class __TwigTemplate_01e8ad1dc9bc3df0a8604365a1328f80 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-key-visual/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-key-visual/view.html.twig"));

        // line 1
        echo "
<div class=\"keyvisual\">
    <div class=\"image-container\">
        ";
        // line 4
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "keyvisual", ["thumbnail" => "print_keyvisual"]);
        echo "
    </div>

    <h1 class=\"headline\">
        ";
        // line 8
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
        echo "
    </h1>

</div>

";
        // line 13
        if ( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "    <div class=\"footer-text-placeholder-left\">";
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
            echo "</div>
    <div class=\"footer-text-placeholder-right\">";
            // line 15
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
            echo "</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/print-key-visual/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  67 => 14,  65 => 13,  57 => 8,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"keyvisual\">
    <div class=\"image-container\">
        {{ pimcore_image('keyvisual', {'thumbnail': 'print_keyvisual'}) }}
    </div>

    <h1 class=\"headline\">
        {{ pimcore_input('headline') }}
    </h1>

</div>

{% if not editmode %}
    <div class=\"footer-text-placeholder-left\">{{ pimcore_input('headline') }}</div>
    <div class=\"footer-text-placeholder-right\">{{ pimcore_input('headline') }}</div>
{% endif %}", "areas/print-key-visual/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/print-key-visual/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array();
        static $functions = array("pimcore_image" => 4, "pimcore_input" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['pimcore_image', 'pimcore_input']
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
