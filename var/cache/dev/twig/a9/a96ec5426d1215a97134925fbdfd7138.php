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

/* areas/email-teaser/view.html.twig */
class __TwigTemplate_5e4029f40aca212ff2013ace21ebb59b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/email-teaser/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/email-teaser/view.html.twig"));

        // line 1
        echo "<table class=\"row\">
    <tbody>
    <tr>
        <th class=\"small-12 large-8 columns first\">
            <table>
                <tbody><tr>
                    <th>
                        <h2>";
        // line 8
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "title");
        echo "</h2>

                        ";
        // line 10
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "text");
        echo "

                        <p>
                            ";
        // line 13
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", "more");
        echo "
                        </p>
                    </th>
                </tr>
                </tbody></table>
        </th>
        <th class=\"small-12 large-4 columns last\">
            <table>
                <tbody>
                    <tr>
                        <th>
                            ";
        // line 24
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "
                                ";
            // line 26
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image", ["thumbnail" => "mail_teaser", "class" => "small-float-center"]);
            echo "

                            ";
        } else {
            // line 29
            echo "
                                <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image"), "getThumbnail", [0 => "mail_teaser"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\" class=\"small-float-center\">

                            ";
        }
        // line 33
        echo "                        </th>
                    </tr>
                </tbody>
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
        return "areas/email-teaser/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 33,  93 => 30,  90 => 29,  84 => 26,  81 => 25,  79 => 24,  65 => 13,  59 => 10,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"row\">
    <tbody>
    <tr>
        <th class=\"small-12 large-8 columns first\">
            <table>
                <tbody><tr>
                    <th>
                        <h2>{{ pimcore_input('title') }}</h2>

                        {{ pimcore_wysiwyg('text') }}

                        <p>
                            {{ pimcore_link('more') }}
                        </p>
                    </th>
                </tr>
                </tbody></table>
        </th>
        <th class=\"small-12 large-4 columns last\">
            <table>
                <tbody>
                    <tr>
                        <th>
                            {% if editmode %}

                                {{ pimcore_image('image', {'thumbnail': 'mail_teaser', 'class': 'small-float-center'}) }}

                            {% else %}

                                <img src=\"{{ pimcore_image('image').getThumbnail('mail_teaser') }}\" class=\"small-float-center\">

                            {% endif %}
                        </th>
                    </tr>
                </tbody>
            </table>
        </th>
    </tr>
    </tbody>
</table>", "areas/email-teaser/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/email-teaser/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24);
        static $filters = array("escape" => 30);
        static $functions = array("pimcore_input" => 8, "pimcore_wysiwyg" => 10, "pimcore_link" => 13, "pimcore_image" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['pimcore_input', 'pimcore_wysiwyg', 'pimcore_link', 'pimcore_image']
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
