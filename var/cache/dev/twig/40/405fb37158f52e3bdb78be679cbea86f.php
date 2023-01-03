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

/* @PimcoreEcommerceFramework/voucher/parts/statistics.html.twig */
class __TwigTemplate_25346a21358927860559aee4417d6e5b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/voucher/parts/statistics.html.twig"));

        // line 1
        echo "<div class=\"row border content-block\">
    <div class=\"col col-sm-3\">
        <div class=\"statistics\">
            <h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_token-statistic-headline", [], "admin"), "html", null, true);
        echo "</h3>
        </div>
        <canvas id=\"canvas-token\"></canvas>
        <table class=\"table current-data\" style=\"margin-top: 35px;\">
            <tbody>
            <tr>
                <td><span class=\"fa fa-list-alt\"></span> ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_token-overall", [], "admin"), "html", null, true);
        echo "</td>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 11, $this->source); })()), "overallCount", [], "array", false, false, true, 11), 11, $this->source), 0, ",", " "), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td><span style=\"color: ";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 14, $this->source); })()), "used", [], "array", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "\" class=\"fa fa-share-square\"></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_token-used", [], "admin"), "html", null, true);
        echo "</td>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 15, $this->source); })()), "usageCount", [], "array", false, false, true, 15), 15, $this->source), 0, ",", " "), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td><span style=\"color: ";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 18, $this->source); })()), "reserved", [], "array", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "\" class=\"fa fa-edit\"></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_token-reserved", [], "admin"), "html", null, true);
        echo "</td>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 19, $this->source); })()), "reservedCount", [], "array", false, false, true, 19), 19, $this->source), 0, ",", " "), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td><span style=\"color: ";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 22, $this->source); })()), "free", [], "array", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "\" class=\"fa fa-external-link-alt\"></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_token-free", [], "admin"), "html", null, true);
        echo "</td>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 23, $this->source); })()), "freeCount", [], "array", false, false, true, 23), 23, $this->source), 0, ",", " "), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>

    </div>
    <div class=\"col col-sm-9 canvas-container\">
        <div class=\"statistics\">
            <h3>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle_ecommerce_voucherservice_usage-headline", [], "admin"), "html", null, true);
        echo "</h3>
        </div>
        <canvas id=\"canvas-usage\" height=\"130\" style=\"padding-right: 50px;\"></canvas>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/voucher/parts/statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  99 => 23,  93 => 22,  87 => 19,  81 => 18,  75 => 15,  69 => 14,  63 => 11,  59 => 10,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row border content-block\">
    <div class=\"col col-sm-3\">
        <div class=\"statistics\">
            <h3>{{ ('bundle_ecommerce_voucherservice_token-statistic-headline')|trans([],'admin') }}</h3>
        </div>
        <canvas id=\"canvas-token\"></canvas>
        <table class=\"table current-data\" style=\"margin-top: 35px;\">
            <tbody>
            <tr>
                <td><span class=\"fa fa-list-alt\"></span> {{ ('bundle_ecommerce_voucherservice_token-overall')|trans([],'admin') }}</td>
                <td>{{ statistics['overallCount']|number_format(0, ',', ' ')  }}</td>
            </tr>
            <tr>
                <td><span style=\"color: {{ colors['used'] }}\" class=\"fa fa-share-square\"></span> {{ ('bundle_ecommerce_voucherservice_token-used')|trans([],'admin') }}</td>
                <td>{{ statistics['usageCount']|number_format(0, ',', ' ')  }}</td>
            </tr>
            <tr>
                <td><span style=\"color: {{ colors['reserved'] }}\" class=\"fa fa-edit\"></span> {{ ('bundle_ecommerce_voucherservice_token-reserved')|trans([],'admin') }}</td>
                <td>{{ statistics['reservedCount']|number_format(0, ',', ' ')  }}</td>
            </tr>
            <tr>
                <td><span style=\"color: {{ colors['free'] }}\" class=\"fa fa-external-link-alt\"></span> {{ ('bundle_ecommerce_voucherservice_token-free')|trans([],'admin') }}</td>
                <td>{{ statistics['freeCount']|number_format(0, ',', ' ')  }}</td>
            </tr>
            </tbody>
        </table>

    </div>
    <div class=\"col col-sm-9 canvas-container\">
        <div class=\"statistics\">
            <h3>{{ ('bundle_ecommerce_voucherservice_usage-headline')|trans([],'admin') }}</h3>
        </div>
        <canvas id=\"canvas-usage\" height=\"130\" style=\"padding-right: 50px;\"></canvas>
    </div>
</div>
", "@PimcoreEcommerceFramework/voucher/parts/statistics.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/voucher/parts/statistics.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4, "trans" => 4, "number_format" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans', 'number_format'],
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
