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

/* areas/hero-teaser/view.html.twig */
class __TwigTemplate_903470103ee0da54930e40958e28d5e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/hero-teaser/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/hero-teaser/view.html.twig"));

        // line 1
        echo "<section class=\"jumbotron bg-white text-center\">
    <div class=\"container\">
        <h2 class=\"jumbotron-heading\">";
        // line 3
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "infoHeading", ["placeholder" => "Heading"]);
        echo "</h2>
        <p>";
        // line 4
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "infoSummary", ["placeholder" => "Summary"]);
        echo "</p>
        <div class=\"row\">
            <div class=\"col-sm-12 text-center\">
                <div class=\"jumbotron-btn d-inline\">
                    ";
        // line 8
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", "infoLinkPrimary", ["class" => "btn btn-primary my-2"]);
        echo "
                </div>
                <div class=\"jumbotron-btn d-inline\">
                    ";
        // line 11
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", "infoLinkSecondary", ["class" => "btn btn-secondary my-2 ml-3"]);
        echo "
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/hero-teaser/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  60 => 8,  53 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"jumbotron bg-white text-center\">
    <div class=\"container\">
        <h2 class=\"jumbotron-heading\">{{ pimcore_input('infoHeading',{'placeholder': 'Heading'}) }}</h2>
        <p>{{ pimcore_input('infoSummary',{'placeholder': 'Summary'}) }}</p>
        <div class=\"row\">
            <div class=\"col-sm-12 text-center\">
                <div class=\"jumbotron-btn d-inline\">
                    {{  pimcore_link('infoLinkPrimary', {'class': \"btn btn-primary my-2\"}) }}
                </div>
                <div class=\"jumbotron-btn d-inline\">
                    {{  pimcore_link('infoLinkSecondary', {'class': \"btn btn-secondary my-2 ml-3\"}) }}
                </div>
            </div>
        </div>
    </div>
</section>", "areas/hero-teaser/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/hero-teaser/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("pimcore_input" => 3, "pimcore_link" => 8);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['pimcore_input', 'pimcore_link']
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
