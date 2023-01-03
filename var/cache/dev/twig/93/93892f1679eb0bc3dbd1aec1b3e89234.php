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

/* areas/print-toc/view.html.twig */
class __TwigTemplate_d15a015cd34094b5edd7c9e5a02fbea5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-toc/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/print-toc/view.html.twig"));

        // line 1
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/web2printtools/vendor/js/awesomizr.js")], "method", false, false, true, 1);
        // line 2
        echo "
";
        // line 3
        if ( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <script type=\"text/javascript\">

        \$(document).ready(function() {
            Awesomizr.createTableOfContents({
                /* toc container */
                insertiontarget: '#toc-wrapper',
                insertiontype: 'beforeend',
                /* levels to look for and link to in toc*/
                elements: ['h1','h2'],
                /* container element for the toc */
                container: {tag: 'ul', addClass: 'toc'},
                /* container element for one line in the toc */
                line: {tag: 'li'},
                disabledocumenttitle: true,
                toctitle: ' ',

                /* method of getting the text for the toc lines */
                text: function (elem) {
                    return elem.textContent;
                }
            });

        });

    </script>
";
        }
        // line 30
        echo "

<div id=\"toc-wrapper\">
    <h1>";
        // line 33
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "heading");
        echo "</h1>

    <p>";
        // line 35
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "introtext");
        echo "</p>

    ";
        // line 37
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "        TABLE OF CONTENTS IS GENERATED ON PDF-EXPORT
    ";
        }
        // line 40
        echo "</div>


";
        // line 43
        if ( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "    <div class=\"toc-footer-text-placeholder-left\">";
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "heading");
            echo "</div>
    <div class=\"toc-footer-text-placeholder-right\">";
            // line 45
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "heading");
            echo "</div>
";
        }
        // line 47
        echo "


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/print-toc/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  113 => 45,  108 => 44,  106 => 43,  101 => 40,  97 => 38,  95 => 37,  90 => 35,  85 => 33,  80 => 30,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% do pimcore_head_script().appendFile(asset('/bundles/web2printtools/vendor/js/awesomizr.js')) %}

{% if not editmode %}
    <script type=\"text/javascript\">

        \$(document).ready(function() {
            Awesomizr.createTableOfContents({
                /* toc container */
                insertiontarget: '#toc-wrapper',
                insertiontype: 'beforeend',
                /* levels to look for and link to in toc*/
                elements: ['h1','h2'],
                /* container element for the toc */
                container: {tag: 'ul', addClass: 'toc'},
                /* container element for one line in the toc */
                line: {tag: 'li'},
                disabledocumenttitle: true,
                toctitle: ' ',

                /* method of getting the text for the toc lines */
                text: function (elem) {
                    return elem.textContent;
                }
            });

        });

    </script>
{% endif %}


<div id=\"toc-wrapper\">
    <h1>{{ pimcore_input('heading') }}</h1>

    <p>{{ pimcore_wysiwyg('introtext') }}</p>

    {% if editmode %}
        TABLE OF CONTENTS IS GENERATED ON PDF-EXPORT
    {% endif %}
</div>


{% if not editmode %}
    <div class=\"toc-footer-text-placeholder-left\">{{ pimcore_input('heading') }}</div>
    <div class=\"toc-footer-text-placeholder-right\">{{ pimcore_input('heading') }}</div>
{% endif %}



", "areas/print-toc/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/print-toc/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("do" => 1, "if" => 3);
        static $filters = array();
        static $functions = array("pimcore_head_script" => 1, "asset" => 1, "pimcore_input" => 33, "pimcore_wysiwyg" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['do', 'if'],
                [],
                ['pimcore_head_script', 'asset', 'pimcore_input', 'pimcore_wysiwyg']
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
