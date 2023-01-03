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

/* areas/print-title-page/view.html.twig */
class __TwigTemplate_200b74dde8a9e68a62de546ca0beb71c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-title-page/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-title-page/view.html.twig"));

        // line 1
        echo "<div class=\"title-page-container\">

    ";
        // line 3
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "backgroundimage", ["thumbnail" => (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 3, $this->source); })())) ? ("print_backgroundimage_small") : ("print_backgroundimage")), "class" => "background"]);
        echo "

    <div class=\"img-container\">
        ";
        // line 6
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "titleimage", ["thumbnail" => "print_titleimage", "class" => "title"]);
        echo "

    </div>

    <div class=\"heading\">";
        // line 10
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "heading");
        echo "</div>
    <div class=\"subheading\">";
        // line 11
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "subheading");
        echo "</div>

</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/print-title-page/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  62 => 10,  55 => 6,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"title-page-container\">

    {{ pimcore_image('backgroundimage', {'thumbnail': (editmode ? 'print_backgroundimage_small' : 'print_backgroundimage'), 'class': 'background'}) }}

    <div class=\"img-container\">
        {{ pimcore_image('titleimage', {'thumbnail': 'print_titleimage', 'class': 'title'}) }}

    </div>

    <div class=\"heading\">{{ pimcore_input('heading') }}</div>
    <div class=\"subheading\">{{ pimcore_input('subheading') }}</div>

</div>
", "areas/print-title-page/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/print-title-page/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("pimcore_image" => 3, "pimcore_input" => 10);

        try {
            $this->sandbox->checkSecurity(
                [],
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
