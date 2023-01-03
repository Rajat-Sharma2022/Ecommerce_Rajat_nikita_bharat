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

/* areas/standard-teaser/view.html.twig */
class __TwigTemplate_33466b366ded350f6f21ae46c1fd7583 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/standard-teaser/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/standard-teaser/view.html.twig"));

        // line 1
        echo "<section class=\"area-standard-teaser bg-light text-center\">
    <div class=\"container\">
        <h2>";
        // line 3
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "standardTeaserHeading");
        echo "</h2>
        <div class=\"card-deck mb-3 text-center ";
        // line 4
        echo (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 4, $this->source); })())) ? ("no-gutters") : (""));
        echo " \">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 6
            echo "                ";
            // line 7
            $context["select"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", ("type_" . $this->sandbox->ensureToStringAllowed($context["t"], 7, $this->source)), ["width" => 110, "reload" => true, "store" => [0 => [0 => "direct", 1 => "direct"], 1 => [0 => "snippet", 1 => "snippet"], 2 => [0 => "news", 1 => "news"]], "class" => "align-middle"]);
            // line 18
            echo "
                ";
            // line 19
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 19, $this->source); })())) {
                // line 20
                echo "                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <span class=\"editmode-label align-middle\">Type:</span>
                            ";
                // line 23
                echo $this->sandbox->ensureToStringAllowed((isset($context["select"]) || array_key_exists("select", $context) ? $context["select"] : (function () { throw new RuntimeError('Variable "select" does not exist.', 23, $this->source); })()), 23, $this->source);
                echo "
                        </div>
                ";
            }
            // line 26
            echo "
                ";
            // line 27
            $context["type"] = twig_get_attribute($this->env, $this->source, (isset($context["select"]) || array_key_exists("select", $context) ? $context["select"] : (function () { throw new RuntimeError('Variable "select" does not exist.', 27, $this->source); })()), "getData", [], "method", false, false, true, 27);
            // line 28
            echo "                ";
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 28, $this->source); })()) == "direct")) {
                // line 29
                echo "                    ";
                echo twig_include($this->env, $context, "snippets/standard-teaser.html.twig", ["suffix" => (                // line 31
$context["t"] + 1)]);
                // line 33
                echo "
                ";
            } elseif ((            // line 34
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 34, $this->source); })()) == "news")) {
                // line 35
                echo "                    ";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "renderlet", ("newsteaser_" . $this->sandbox->ensureToStringAllowed(                // line 36
$context["t"], 36, $this->source)), ["type" => "object", "editmode" =>                 // line 38
(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 38, $this->source); })()), "controller" => "App\\Controller\\NewsController::newsTeaserAction", "title" => "Drag a news object here", "height" => "auto", "width" => "100%"]);
                // line 44
                echo "
                ";
            } else {
                // line 46
                echo "                    ";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", ("teaser_" . $this->sandbox->ensureToStringAllowed($context["t"], 46, $this->source)));
                echo "
                ";
            }
            // line 48
            echo "
                ";
            // line 49
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 49, $this->source); })())) {
                // line 50
                echo "                    </div>
                ";
            }
            // line 52
            echo "

            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>
    </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/standard-teaser/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 55,  135 => 52,  131 => 50,  129 => 49,  126 => 48,  120 => 46,  116 => 44,  114 => 38,  113 => 36,  111 => 35,  109 => 34,  106 => 33,  104 => 31,  102 => 29,  99 => 28,  97 => 27,  94 => 26,  88 => 23,  83 => 20,  81 => 19,  78 => 18,  76 => 7,  74 => 6,  57 => 5,  53 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"area-standard-teaser bg-light text-center\">
    <div class=\"container\">
        <h2>{{ pimcore_input('standardTeaserHeading') }}</h2>
        <div class=\"card-deck mb-3 text-center {{ editmode ? 'no-gutters' : '' }} \">
            {% for t in 0..2 %}
                {%
                    set select = pimcore_select('type_' ~ t, {
                        width: 110,
                        reload: true,
                        store: [
                            ['direct','direct'],
                            ['snippet','snippet'],
                            ['news','news']
                        ],
                        class: 'align-middle'
                    })
                %}

                {% if editmode %}
                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <span class=\"editmode-label align-middle\">Type:</span>
                            {{ select|raw }}
                        </div>
                {% endif %}

                {% set type = select.getData() %}
                {% if type == \"direct\" %}
                    {{
                        include('snippets/standard-teaser.html.twig', {
                            suffix: (t+1)
                        })
                    }}
                {% elseif type == \"news\" %}
                    {{
                        pimcore_renderlet('newsteaser_' ~ t, {
                            type: 'object',
                            editmode: editmode,
                            controller: 'App\\\\Controller\\\\NewsController::newsTeaserAction',
                            title: 'Drag a news object here',
                            height : 'auto',
                            width: '100%'
                        })
                    }}
                {% else %}
                    {{ pimcore_snippet('teaser_' ~ t) }}
                {% endif %}

                {% if editmode %}
                    </div>
                {% endif %}


            {% endfor %}
        </div>
    </div>
</section>
", "areas/standard-teaser/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/standard-teaser/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5, "set" => 7, "if" => 19);
        static $filters = array("raw" => 23);
        static $functions = array("pimcore_input" => 3, "range" => 5, "pimcore_select" => 7, "include" => 30, "pimcore_renderlet" => 36, "pimcore_snippet" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['raw'],
                ['pimcore_input', 'range', 'pimcore_select', 'include', 'pimcore_renderlet', 'pimcore_snippet']
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
