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

/* includes/footer.html.twig */
class __TwigTemplate_adab5efc0339ce0a750e7d5b21510a82 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        // line 1
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/editmode.css")], "method", false, false, true, 2);
            // line 3
            echo "    ";
            echo $this->env->getFunction('pimcore_head_link')->getCallable()();
            echo "
";
        }
        // line 6
        echo "<footer class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-12 col-md\">
            <a class=\"text-dark text-decoration-none\" href=\"/\" >
                <img id=\"logo-footer\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/static/images/logo-dark.svg"), "html", null, true);
        echo "\" >
                <small class=\"d-block mb-3  p-3\">&copy; ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " pimcore GmbH</small>
            </a>
        </div>
        ";
        // line 14
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "            <h3 class=\"float-left\">";
            echo "Footer Column(s):";
            echo "</h3>
        ";
        }
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "mainlinkblock")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 18
            echo "            <div class=\"col-6 col-md\">
                <h5>";
            // line 19
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "mainBlockTitle", ["placeholder" => "Footer Title"]);
            echo "</h5>
                <ul class=\"list-unstyled text-small\">
                    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "linkblock")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "                        <li>";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", "myLink", ["class" => "text-muted"]);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </ul>
            </div>
            ";
            // line 26
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 26, $this->source); })())) {
                // line 27
                echo "                <hr />
            ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 30,  116 => 29,  112 => 27,  110 => 26,  106 => 24,  97 => 22,  93 => 21,  88 => 19,  85 => 18,  80 => 17,  74 => 15,  72 => 14,  66 => 11,  62 => 10,  56 => 6,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if editmode %}
    {% do pimcore_head_link().appendStylesheet(asset('static/css/editmode.css')) %}
    {{ pimcore_head_link() }}
{% endif %}
{#footer#}
<footer class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-12 col-md\">
            <a class=\"text-dark text-decoration-none\" href=\"/\" >
                <img id=\"logo-footer\" src=\"{{ asset('/static/images/logo-dark.svg') }}\" >
                <small class=\"d-block mb-3  p-3\">&copy; {{ \"now\"|date('Y') }} pimcore GmbH</small>
            </a>
        </div>
        {% if editmode %}
            <h3 class=\"float-left\">{{ 'Footer Column(s):' }}</h3>
        {% endif %}
        {% for i in pimcore_iterate_block(pimcore_block('mainlinkblock')) %}
            <div class=\"col-6 col-md\">
                <h5>{{ pimcore_input('mainBlockTitle', {'placeholder': 'Footer Title'}) }}</h5>
                <ul class=\"list-unstyled text-small\">
                    {% for i in pimcore_iterate_block(pimcore_block('linkblock')) %}
                        <li>{{ pimcore_link('myLink', {'class': \"text-muted\"}) }}</li>
                    {% endfor %}
                </ul>
            </div>
            {% if editmode %}
                <hr />
            {% endif %}
        {% endfor %}
    </div>
</footer>", "includes/footer.html.twig", "/var/www/html/EcommerceProject/ecom/templates/includes/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "do" => 2, "for" => 17);
        static $filters = array("escape" => 10, "date" => 11);
        static $functions = array("pimcore_head_link" => 2, "asset" => 2, "pimcore_iterate_block" => 17, "pimcore_block" => 17, "pimcore_input" => 19, "pimcore_link" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'do', 'for'],
                ['escape', 'date'],
                ['pimcore_head_link', 'asset', 'pimcore_iterate_block', 'pimcore_block', 'pimcore_input', 'pimcore_link']
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
