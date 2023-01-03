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

/* default/examples.html.twig */
class __TwigTemplate_30d8f47b77f40d6c88f1d9f0e5eca76f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/examples.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/examples.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "default/examples.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>h1.</h1>
    <h2>h2.</h2>
    <h3>h3.</h3>
    <h4>h4.</h4>
    <h5>h5.</h5>
    <h6>h6.</h6>

    <h1 class=\"display-1\">Display 1</h1>
    <h1 class=\"display-2\">Display 2</h1>
    <h1 class=\"display-3\">Display 3</h1>
    <h1 class=\"display-4\">Display 4</h1>

    <p>Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium.</p>

    <p class=\"small\">Ambitioni dedisse scripsisse iudicaretur.</p>
    <p class=\"label\">Ambitioni dedisse scripsisse iudicaretur.</p>

    <form style=\"width:500px\">
        <div class=\"form-group\">
            <label for=\"formGroupExampleInput\">Input</label>
            <input type=\"text\" class=\"form-control\" id=\"formGroupExampleInput\" placeholder=\"Example input\">
        </div>
        <div class=\"dropdown\">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Dropdown
                <i class='caret fas fa-angle-down'></i>
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            </div>
        </div>

        <div class=\"custom-control custom-checkbox\">
            <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
            <label class=\"custom-control-label\" for=\"customCheck1\">Lorem Ipsum</label>
        </div>

        <div class=\"custom-control custom-checkbox\">
            <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck2\">
            <label class=\"custom-control-label\" for=\"customCheck2\">Lorem Ipsum</label>
        </div>

        <div class=\"custom-control custom-radio\">
            <input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"custom-control-input\">
            <label class=\"custom-control-label\" for=\"customRadio1\">Toggle this custom radio</label>
        </div>
        <div class=\"custom-control custom-radio\">
            <input type=\"radio\" id=\"customRadio2\" name=\"customRadio\" class=\"custom-control-input\">
            <label class=\"custom-control-label\" for=\"customRadio2\">Or toggle this other custom radio</label>
        </div>

        <div class=\"form-group\">
            <label for=\"formGroupExampleInput2\">Another label</label>
            <input type=\"text\" class=\"form-control\" id=\"formGroupExampleInput2\" placeholder=\"Another input\">
        </div>
    </form>

    <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\" class=\"prev\"></span>
                </a>
            </li>
            <li class=\"page-item active\"><a class=\"page-link active\" href=\"#\">1</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                    <span aria-hidden=\"true\" class=\"next flip\"></span>
                </a>
            </li>
        </ul>
    </nav>

    <button type=\"button\" class=\"btn btn-primary\">Primary Button</button>
    <button type=\"button\" class=\"btn btn-secondary\">Secondary Button</button>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/examples.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}

{% block content %}
    <h1>h1.</h1>
    <h2>h2.</h2>
    <h3>h3.</h3>
    <h4>h4.</h4>
    <h5>h5.</h5>
    <h6>h6.</h6>

    <h1 class=\"display-1\">Display 1</h1>
    <h1 class=\"display-2\">Display 2</h1>
    <h1 class=\"display-3\">Display 3</h1>
    <h1 class=\"display-4\">Display 4</h1>

    <p>Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium.</p>

    <p class=\"small\">Ambitioni dedisse scripsisse iudicaretur.</p>
    <p class=\"label\">Ambitioni dedisse scripsisse iudicaretur.</p>

    <form style=\"width:500px\">
        <div class=\"form-group\">
            <label for=\"formGroupExampleInput\">Input</label>
            <input type=\"text\" class=\"form-control\" id=\"formGroupExampleInput\" placeholder=\"Example input\">
        </div>
        <div class=\"dropdown\">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Dropdown
                <i class='caret fas fa-angle-down'></i>
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            </div>
        </div>

        <div class=\"custom-control custom-checkbox\">
            <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
            <label class=\"custom-control-label\" for=\"customCheck1\">Lorem Ipsum</label>
        </div>

        <div class=\"custom-control custom-checkbox\">
            <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck2\">
            <label class=\"custom-control-label\" for=\"customCheck2\">Lorem Ipsum</label>
        </div>

        <div class=\"custom-control custom-radio\">
            <input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"custom-control-input\">
            <label class=\"custom-control-label\" for=\"customRadio1\">Toggle this custom radio</label>
        </div>
        <div class=\"custom-control custom-radio\">
            <input type=\"radio\" id=\"customRadio2\" name=\"customRadio\" class=\"custom-control-input\">
            <label class=\"custom-control-label\" for=\"customRadio2\">Or toggle this other custom radio</label>
        </div>

        <div class=\"form-group\">
            <label for=\"formGroupExampleInput2\">Another label</label>
            <input type=\"text\" class=\"form-control\" id=\"formGroupExampleInput2\" placeholder=\"Another input\">
        </div>
    </form>

    <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\" class=\"prev\"></span>
                </a>
            </li>
            <li class=\"page-item active\"><a class=\"page-link active\" href=\"#\">1</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                    <span aria-hidden=\"true\" class=\"next flip\"></span>
                </a>
            </li>
        </ul>
    </nav>

    <button type=\"button\" class=\"btn btn-primary\">Primary Button</button>
    <button type=\"button\" class=\"btn btn-secondary\">Secondary Button</button>

{%  endblock %}", "default/examples.html.twig", "/var/www/html/EcommerceProject/ecom/templates/default/examples.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
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
