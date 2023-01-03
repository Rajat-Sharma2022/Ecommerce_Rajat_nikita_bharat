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

/* snippets/standard-teaser.html.twig */
class __TwigTemplate_3a40a763ddbafb11ca989f3d9ddc01b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "snippets/standard-teaser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "snippets/standard-teaser.html.twig"));

        // line 1
        $context["suffix"] = (($context["suffix"]) ?? (""));
        // line 2
        echo "
";
        // line 3
        if ((twig_test_empty((isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 3, $this->source); })())) && (isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    <style type=\"text/css\">
        .teaser {
            max-width: 250px;
        }

        .teaser img {
            max-width: 100%;
        }
    </style>
";
        }
        // line 14
        echo "
<div class=\"teaser card custom-standard-card mb-4 shadow-sm\">
    ";
        // line 16
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", ("image" . $this->sandbox->ensureToStringAllowed(        // line 17
(isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 17, $this->source); })()), 17, $this->source)), ["thumbnail" => "standardTeaser", "imgAttributes" => ["class" => "img-fluid w-100"]]);
        // line 21
        echo "

    <div class=\"card-body\">
        <h4 class=\"card-title pricing-card-title text-uppercase\">";
        // line 24
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", ("title" . $this->sandbox->ensureToStringAllowed((isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 24, $this->source); })()), 24, $this->source)));
        echo "</h4>
        <p class=\"card-text\">
            ";
        // line 26
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", ("text" . $this->sandbox->ensureToStringAllowed(        // line 27
(isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 27, $this->source); })()), 27, $this->source)), ["height" => 100, "enterMode" => 2]);
        // line 31
        echo "
        </p>
        <p>
            ";
        // line 34
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("link" . $this->sandbox->ensureToStringAllowed(        // line 35
(isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 35, $this->source); })()), 35, $this->source)), ["class" => "btn btn-lg btn-secondary"]);
        // line 38
        echo "
        </p>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "snippets/standard-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 38,  90 => 35,  89 => 34,  84 => 31,  82 => 27,  81 => 26,  76 => 24,  71 => 21,  69 => 17,  68 => 16,  64 => 14,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set suffix = suffix ?? '' %}

{% if suffix is empty and editmode %}
    <style type=\"text/css\">
        .teaser {
            max-width: 250px;
        }

        .teaser img {
            max-width: 100%;
        }
    </style>
{% endif %}

<div class=\"teaser card custom-standard-card mb-4 shadow-sm\">
    {{
        pimcore_image('image' ~ suffix, {
            thumbnail: 'standardTeaser',
            imgAttributes: {class: 'img-fluid w-100'}
        })
    }}

    <div class=\"card-body\">
        <h4 class=\"card-title pricing-card-title text-uppercase\">{{ pimcore_input('title' ~ suffix) }}</h4>
        <p class=\"card-text\">
            {{
                    pimcore_wysiwyg('text' ~ suffix, {
                    height: 100,
                    enterMode: 2,
                })
            }}
        </p>
        <p>
            {{
                pimcore_link('link' ~ suffix, {
                    class: 'btn btn-lg btn-secondary'
                })
            }}
        </p>
    </div>
</div>
", "snippets/standard-teaser.html.twig", "/var/www/html/EcommerceProject/ecom/templates/snippets/standard-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3);
        static $filters = array();
        static $functions = array("pimcore_image" => 17, "pimcore_input" => 24, "pimcore_wysiwyg" => 27, "pimcore_link" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['pimcore_image', 'pimcore_input', 'pimcore_wysiwyg', 'pimcore_link']
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
