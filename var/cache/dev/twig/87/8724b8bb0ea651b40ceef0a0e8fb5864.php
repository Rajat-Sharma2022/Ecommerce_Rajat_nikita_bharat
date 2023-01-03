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

/* areas/embed/view.html.twig */
class __TwigTemplate_045c6058f725c2941a802ea0707a9ef6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/embed/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/embed/view.html.twig"));

        // line 1
        echo "<section class=\"area-embed\" style=\"margin-top:20px;\">
    <div class=\"row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "        <div class=\"col-sm-6\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", ("contents_" . $context["i"]))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 6
                echo "                <div class=\"embed\">
                    ";
                // line 7
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "embed", "socialContent", ["width" => 500]);
                // line 11
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    </div>
</section>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/embed/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  73 => 14,  65 => 11,  63 => 7,  60 => 6,  56 => 5,  53 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"area-embed\" style=\"margin-top:20px;\">
    <div class=\"row\">
        {% for i in 1..2 %}
        <div class=\"col-sm-6\">
            {% for i in pimcore_iterate_block(pimcore_block('contents_' ~ i)) %}
                <div class=\"embed\">
                    {{
                        pimcore_embed('socialContent', {
                            width: 500
                        })
                    }}
                </div>
            {% endfor %}
        </div>
        {% endfor %}

    </div>
</section>

", "areas/embed/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/embed/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3);
        static $filters = array();
        static $functions = array("range" => 3, "pimcore_iterate_block" => 5, "pimcore_block" => 5, "pimcore_embed" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                [],
                ['range', 'pimcore_iterate_block', 'pimcore_block', 'pimcore_embed']
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
