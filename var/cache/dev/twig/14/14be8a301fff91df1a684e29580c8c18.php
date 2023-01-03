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

/* @PimcoreEcommerceFramework/voucher/parts/usage_statistic_script.html.twig */
class __TwigTemplate_cb918e6c67bf923c0eb99c033cb25ae1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/usage_statistic_script.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/usage_statistic_script.html.twig"));

        // line 1
        if (twig_test_iterable((isset($context["usage"]) || array_key_exists("usage", $context) ? $context["usage"] : (function () { throw new RuntimeError('Variable "usage" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <script ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 2, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 2), 2, $this->source);
            echo ">
        var lineChartData = {
            labels: [
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usage"]) || array_key_exists("usage", $context) ? $context["usage"] : (function () { throw new RuntimeError('Variable "usage" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["date"] => $context["count"]) {
                // line 6
                echo "                     \"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["date"], 6, $this->source), "html", null, true);
                echo "\",
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "            ],
            datasets: [
                {
                    label: \"Usage Statistic\",
                    fillColor: \"rgba(220,220,220,0.2)\",
                    strokeColor: \"rgba(220,220,220,1)\",
                    pointColor: \"rgba(220,220,220,1)\",
                    pointStrokeColor: \"#fff\",
                    pointHighlightFill: \"#fff\",
                    pointHighlightStroke: \"rgba(220,220,220,1)\",
                    data: [
                        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usage"]) || array_key_exists("usage", $context) ? $context["usage"] : (function () { throw new RuntimeError('Variable "usage" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["date"] => $context["count"]) {
                // line 20
                echo "                        \"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["count"], 20, $this->source), "html", null, true);
                echo "\",
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                    ]
                }
            ]
        };

        /**
         * Init Statistics canvas on tab click.
         */
        document.querySelector('#statistic-tab').onclick = function(e){
            window.setTimeout(function () {

                var usage = document.getElementById(\"canvas-usage\").getContext(\"2d\");

                var usageChart = new Chart(usage, {
                    type: 'line',
                    data: lineChartData,
                    options: {
                        responsive: true,
                        showTooltips: false
                    }
                });

                var tokens = document.getElementById(\"canvas-token\").getContext(\"2d\");
                var tokenChart = new Chart(tokens, {
                    type: 'pie',
                    data: {
                        labels: ['";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Used"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reserved"), "html", null, true);
            echo "'],
                        datasets: [{
                            data: [";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 50, $this->source); })()), "usageCount", [], "array", false, false, true, 50), 50, $this->source), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 50, $this->source); })()), "freeCount", [], "array", false, false, true, 50), 50, $this->source), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 50, $this->source); })()), "reservedCount", [], "array", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "],
                            backgroundColor: [
                                \"";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 52, $this->source); })()), "used", [], "array", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\",
                                \"";
            // line 53
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 53, $this->source); })()), "free", [], "array", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\",
                                \"";
            // line 54
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 54, $this->source); })()), "reserved", [], "array", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "\"
                            ]
                        }]
                    },
                    options: {
                        responsive: true
                    }
                });
            }, 50);
        }
    </script>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/voucher/parts/usage_statistic_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 54,  143 => 53,  139 => 52,  130 => 50,  121 => 48,  93 => 22,  84 => 20,  80 => 19,  67 => 8,  58 => 6,  54 => 5,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if usage is iterable %}
    <script {{ pimcore_csp.getNonceHtmlAttribute()|raw }}>
        var lineChartData = {
            labels: [
                {% for date, count in usage %}
                     \"{{ date }}\",
                {% endfor %}
            ],
            datasets: [
                {
                    label: \"Usage Statistic\",
                    fillColor: \"rgba(220,220,220,0.2)\",
                    strokeColor: \"rgba(220,220,220,1)\",
                    pointColor: \"rgba(220,220,220,1)\",
                    pointStrokeColor: \"#fff\",
                    pointHighlightFill: \"#fff\",
                    pointHighlightStroke: \"rgba(220,220,220,1)\",
                    data: [
                        {% for date, count in usage %}
                        \"{{ count }}\",
                        {% endfor %}
                    ]
                }
            ]
        };

        /**
         * Init Statistics canvas on tab click.
         */
        document.querySelector('#statistic-tab').onclick = function(e){
            window.setTimeout(function () {

                var usage = document.getElementById(\"canvas-usage\").getContext(\"2d\");

                var usageChart = new Chart(usage, {
                    type: 'line',
                    data: lineChartData,
                    options: {
                        responsive: true,
                        showTooltips: false
                    }
                });

                var tokens = document.getElementById(\"canvas-token\").getContext(\"2d\");
                var tokenChart = new Chart(tokens, {
                    type: 'pie',
                    data: {
                        labels: ['{{ 'Used'|trans }}', '{{ 'Free'|trans }}', '{{ 'Reserved'|trans }}'],
                        datasets: [{
                            data: [{{ statistics['usageCount'] }}, {{ statistics['freeCount'] }}, {{ statistics['reservedCount'] }}],
                            backgroundColor: [
                                \"{{ colors['used'] }}\",
                                \"{{ colors['free'] }}\",
                                \"{{ colors['reserved'] }}\"
                            ]
                        }]
                    },
                    options: {
                        responsive: true
                    }
                });
            }, 50);
        }
    </script>
{% endif %}
", "@PimcoreEcommerceFramework/voucher/parts/usage_statistic_script.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/voucher/parts/usage_statistic_script.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 5);
        static $filters = array("raw" => 2, "escape" => 6, "trans" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['raw', 'escape', 'trans'],
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
