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

/* areas/email-wysiwyg/view.html.twig */
class __TwigTemplate_59006ba148de9e2a8caf1672d670b867 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/email-wysiwyg/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/email-wysiwyg/view.html.twig"));

        // line 1
        echo "<table class=\"row\">
    <tbody>
    <tr>
        <th class=\"small-12 large-12 columns first last\">
            <table>
                <tr>
                    <th>
                        ";
        // line 8
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "                            <h3>";
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
            echo "</h3>
                        ";
        } else {
            // line 11
            echo "
                            ";
            // line 12
            if ( !twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline"), "isEmpty", [], "any", false, false, true, 12)) {
                // line 13
                echo "                                <h3>";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
                echo "</h3>
                            ";
            }
            // line 15
            echo "
                        ";
        }
        // line 17
        echo "
                        <p>";
        // line 18
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "text");
        echo "</p>
                    </th>
                </tr>
            </table>
        </th>
    </tr>
    </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/email-wysiwyg/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  77 => 17,  73 => 15,  67 => 13,  65 => 12,  62 => 11,  56 => 9,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"row\">
    <tbody>
    <tr>
        <th class=\"small-12 large-12 columns first last\">
            <table>
                <tr>
                    <th>
                        {% if editmode %}
                            <h3>{{ pimcore_input('headline') }}</h3>
                        {% else %}

                            {% if not pimcore_input('headline').isEmpty %}
                                <h3>{{ pimcore_input('headline') }}</h3>
                            {% endif %}

                        {% endif %}

                        <p>{{ pimcore_wysiwyg('text') }}</p>
                    </th>
                </tr>
            </table>
        </th>
    </tr>
    </tbody>
</table>", "areas/email-wysiwyg/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/email-wysiwyg/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8);
        static $filters = array();
        static $functions = array("pimcore_input" => 9, "pimcore_wysiwyg" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['pimcore_input', 'pimcore_wysiwyg']
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
