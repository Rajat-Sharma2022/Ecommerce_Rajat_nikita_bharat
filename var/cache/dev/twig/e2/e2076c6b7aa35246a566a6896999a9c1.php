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

/* @Httplug/webprofiler.html.twig */
class __TwigTemplate_47c7059c155dfa298d4b06b11ad6655a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/webprofiler.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/webprofiler.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Httplug/webprofiler.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "stacks", [], "any", false, false, true, 4)) > 0)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "stacks", [], "any", false, false, true, 7), 7, $this->source)), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "totalDuration", [], "any", false, false, true, 9), 9, $this->source)), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">ms</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "stacks", [], "any", false, false, true, 15), 15, $this->source)), "html", null, true);
            echo " requests</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Method</th>
                        <th>Target</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "stacks", [], "any", false, false, true, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 30
                echo "                            <tr>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["stack"], "client", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["stack"], "requestMethod", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "</td>
                                ";
                // line 33
                $context["target"] = twig_get_attribute($this->env, $this->source, $context["stack"], "requestTarget", [], "any", false, false, true, 33);
                // line 34
                echo "                                <td title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 34, $this->source); })()), 34, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 34, $this->source); })()), 34, $this->source)) > 30)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 34, $this->source); })()), 34, $this->source), 0, 30) . "...")) : ((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 34, $this->source); })()))), "html", null, true);
                echo "</td>
                                <td>";
                // line 35
                (((twig_get_attribute($this->env, $this->source, $context["stack"], "duration", [], "any", false, false, true, 35) == 0)) ? (print ("n/a")) : (print (twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stack"], "duration", [], "any", false, false, true, 35)) . " ms"), "html", null, true))));
                echo "</td>
                                <td>";
                // line 36
                ((twig_get_attribute($this->env, $this->source, $context["stack"], "failed", [], "any", false, false, true, 36)) ? (print ("FAILED")) : (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["stack"], "responseCode", [], "any", true, true, true, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["stack"], "responseCode", [], "any", false, false, true, 36), "n/a")) : ("n/a")), "html", null, true))));
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 43
            echo "
        ";
            // line 44
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@Httplug/webprofiler.html.twig", 44)->display(twig_array_merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 44, $this->source); })()), "status" => ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "failedStacks", [], "any", false, false, true, 44))) ? ("red") : (""))]));
            // line 45
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 49
        echo "    <style>
        ";
        // line 50
        echo twig_include($this->env, $context, "@Httplug/style/httplug.css.twig");
        echo "
    </style>
    <script type=\"text/javascript\">
        ";
        // line 53
        echo twig_include($this->env, $context, "@Httplug/script/httplug.js.twig");
        echo "
    </script>
    ";
        // line 55
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 59
        echo "    ";
        // line 60
        echo "    <span class=\"label ";
        echo (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "stacks", [], "any", false, false, true, 60), 60, $this->source)) == 0)) ? ("disabled") : (""));
        echo " ";
        echo ((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "failedStacks", [], "any", false, false, true, 60), 60, $this->source))) ? ("label-status-error") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 62
        echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
        echo "
        </span>
        <strong>Httplug</strong>
        <span class=\"count\">
            <span>";
        // line 66
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "stacks", [], "any", false, false, true, 66), 66, $this->source)) - twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "failedStacks", [], "any", false, false, true, 66), 66, $this->source))) . "/") . twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "stacks", [], "any", false, false, true, 66), 66, $this->source))), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 72
        echo "    <h2>HTTPlug</h2>
    <div class=\"sf-tabs\">
        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "clients", [], "any", false, false, true, 74));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 75
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">";
            // line 76
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["client"], 76, $this->source), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 76, $this->source); })()), "countClientMessages", [0 => $context["client"]], "method", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"";
            // line 80
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["client"], 80, $this->source), "html", null, true);
            echo "\".
                </p>

                ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "clientRootStacks", [0 => $context["client"]], "method", false, false, true, 83));
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
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 84
                echo "                    <div class=\"httplug-stack\">
                        ";
                // line 85
                $this->loadTemplate("@Httplug/stack.html.twig", "@Httplug/webprofiler.html.twig", 85)->display(twig_to_array(["collector" =>                 // line 86
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "client" =>                 // line 87
$context["client"], "stack" =>                 // line 88
$context["stack"], "id" => twig_get_attribute($this->env, $this->source,                 // line 89
$context["loop"], "index", [], "any", false, false, true, 89)]));
                // line 91
                echo "                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 96
            echo "            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Httplug/webprofiler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 100,  341 => 96,  334 => 93,  319 => 91,  317 => 89,  316 => 88,  315 => 87,  314 => 86,  313 => 85,  310 => 84,  293 => 83,  287 => 80,  278 => 76,  275 => 75,  270 => 74,  266 => 72,  256 => 71,  242 => 66,  235 => 62,  227 => 60,  225 => 59,  215 => 58,  203 => 55,  198 => 53,  192 => 50,  189 => 49,  179 => 48,  168 => 45,  166 => 44,  163 => 43,  157 => 39,  148 => 36,  144 => 35,  137 => 34,  135 => 33,  131 => 32,  127 => 31,  124 => 30,  120 => 29,  103 => 15,  100 => 14,  98 => 13,  95 => 12,  89 => 9,  84 => 7,  79 => 6,  76 => 5,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.stacks|length > 0 %}
        {% set icon %}
            {{ include('@Httplug/Icon/httplug.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.stacks|length }}</span>
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">{{ collector.totalDuration|number_format }}</span>
            <span class=\"sf-toolbar-label\">ms</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ collector.stacks|length }} requests</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Method</th>
                        <th>Target</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        {% for stack in collector.stacks %}
                            <tr>
                                <td>{{ stack.client }}</td>
                                <td>{{ stack.requestMethod }}</td>
                                {% set target = stack.requestTarget %}
                                <td title=\"{{ target }}\">{{ target|length > 30 ? target[:30] ~ '...' : target }}</td>
                                <td>{{ stack.duration == 0 ? 'n/a' : stack.duration|number_format ~ ' ms'}}</td>
                                <td>{{ stack.failed ? 'FAILED' : stack.responseCode|default('n/a') }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endset %}

        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url, 'status': collector.failedStacks|length ? 'red' : '' } %}
    {% endif %}
{% endblock %}

{% block head %}
    <style>
        {{ include('@Httplug/style/httplug.css.twig') }}
    </style>
    <script type=\"text/javascript\">
        {{ include('@Httplug/script/httplug.js.twig') }}
    </script>
    {{ parent() }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label {{ collector.stacks|length == 0 ? 'disabled' }} {{ collector.failedStacks|length ? 'label-status-error' }}\">
        <span class=\"icon\">
            {{ include('@Httplug/Icon/httplug.svg') }}
        </span>
        <strong>Httplug</strong>
        <span class=\"count\">
            <span>{{ (collector.stacks|length - collector.failedStacks|length) ~ '/' ~ collector.stacks|length}}</span>
        </span>
    </span>
{% endblock %}

{% block panel %}
    <h2>HTTPlug</h2>
    <div class=\"sf-tabs\">
        {% for client in collector.clients %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">{{ client }} <span class=\"badge\">{{ collector.countClientMessages(client) }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"{{ client }}\".
                </p>

                {% for stack in collector.clientRootStacks(client) %}
                    <div class=\"httplug-stack\">
                        {% include '@Httplug/stack.html.twig' with {
                            'collector': collector,
                            'client': client,
                            'stack': stack,
                            'id': loop.index
                        } only %}
                    </div>
                {% endfor %}
            </div>
        </div>
        {% else %}
            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "@Httplug/webprofiler.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/php-http/httplug-bundle/src/Resources/views/webprofiler.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 5, "for" => 29, "include" => 44);
        static $filters = array("length" => 4, "escape" => 7, "number_format" => 9, "slice" => 34, "default" => 36);
        static $functions = array("include" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'include'],
                ['length', 'escape', 'number_format', 'slice', 'default'],
                ['include']
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
