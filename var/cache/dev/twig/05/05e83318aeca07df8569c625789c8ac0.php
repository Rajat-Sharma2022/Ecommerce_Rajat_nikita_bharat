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

/* areas/email-image/view.html.twig */
class __TwigTemplate_276843187ce001f81a369cfdd995bc1b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/email-image/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/email-image/view.html.twig"));

        // line 1
        echo "<table class=\"row\">
    <tbody>
    <tr>
        <th class=\"small-12 large-12 columns first last\">
            <table>
                <tbody><tr>
                    <th>
                        <center data-parsed=\"\">

                            ";
        // line 10
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "
                                ";
            // line 12
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image", ["thumbnail" => "mail_title", "class" => "float-center"]);
            echo "

                            ";
        } else {
            // line 15
            echo "
                                <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image"), "getThumbnail", [0 => "mail_title"], "method", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\" align=\"center\" class=\"float-center\">

                            ";
        }
        // line 19
        echo "
                        </center>
                    </th>
                    <th class=\"expander\"></th>
                </tr>
                </tbody></table>
        </th>
    </tr>
    </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/email-image/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  70 => 16,  67 => 15,  61 => 12,  58 => 11,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"row\">
    <tbody>
    <tr>
        <th class=\"small-12 large-12 columns first last\">
            <table>
                <tbody><tr>
                    <th>
                        <center data-parsed=\"\">

                            {% if editmode %}

                                {{ pimcore_image('image', {'thumbnail': 'mail_title', 'class': 'float-center'}) }}

                            {% else %}

                                <img src=\"{{ pimcore_image('image').getThumbnail('mail_title') }}\" align=\"center\" class=\"float-center\">

                            {% endif %}

                        </center>
                    </th>
                    <th class=\"expander\"></th>
                </tr>
                </tbody></table>
        </th>
    </tr>
    </tbody>
</table>", "areas/email-image/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/email-image/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
        static $filters = array("escape" => 16);
        static $functions = array("pimcore_image" => 12);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
