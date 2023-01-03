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

/* @PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/user_roles.html.twig */
class __TwigTemplate_8b05c142d86cce5d0209e06c7116050f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/user_roles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/user_roles.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ($this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->isCurrentUserFilterSharer()) {
            // line 3
            echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"form-group\">
                <label for=\"filterDefinition[allowedUserIds]\">";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_share_user", [], "admin"), "html", null, true);
            echo "</label>
                <select
                        id=\"filterDefinition[allowedUserIds]\"
                        name=\"filterDefinition[allowedUserIds][]\"
                        class=\"form-control plugin-select2\"
                        multiple=\"multiple\"
                        data-placeholder=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_share_user", [], "admin"), "html", null, true);
            echo "\"
                        data-select2-options='";
            // line 13
            echo twig_escape_filter($this->env, json_encode(["allowClear" => false]), "html", null, true);
            echo "'>

                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getUsers());
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 16
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "\" ";
                echo ((((isset($context["preselected"]) || array_key_exists("preselected", $context) ? $context["preselected"] : (function () { throw new RuntimeError('Variable "preselected" does not exist.', 16, $this->source); })()) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 16), twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 16, $this->source); })()), "getAllowedUserIds", [], "method", false, false, true, 16)))) ? ("selected=\"selected\"") : (""));
                echo ">
                            ";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                (( !twig_test_empty((twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, true, 17) . twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, true, 17)))) ? (print (twig_escape_filter($this->env, (("(" . twig_trim_filter(((twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, true, 17) . " ") . twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, true, 17)))) . ")"), "html", null, true))) : (print ("")));
                echo "
                        </option>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </select>
            </div>
        </div>
        <div class=\"col-xs-12\">
            <div class=\"form-group\">
                <label for=\"filterDefinition[allowedRoleIds]\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_share_role", [], "admin"), "html", null, true);
            echo "</label>
                <select
                        id=\"filterDefinition[allowedRoleIds]\"
                        name=\"filterDefinition[allowedRoleIds][]\"
                        class=\"form-control plugin-select2\"
                        multiple=\"multiple\"
                        data-placeholder=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_share_role", [], "admin"), "html", null, true);
            echo "\"
                        data-select2-options='";
            // line 33
            echo twig_escape_filter($this->env, json_encode(["allowClear" => false]), "html", null, true);
            echo "'>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getRoles());
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 35
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "\" ";
                echo ((((isset($context["preselected"]) || array_key_exists("preselected", $context) ? $context["preselected"] : (function () { throw new RuntimeError('Variable "preselected" does not exist.', 35, $this->source); })()) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, true, 35), twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 35, $this->source); })()), "getAllowedUserIds", [], "method", false, false, true, 35)))) ? ("selected=\"selected\"") : (""));
                echo ">
                            ";
                // line 36
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "
                        </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                </select>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/user_roles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 39,  130 => 36,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  102 => 26,  95 => 21,  84 => 17,  77 => 16,  73 => 15,  68 => 13,  64 => 12,  55 => 6,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if cmf_isCurrentUserFilterSharer()  %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"form-group\">
                <label for=\"filterDefinition[allowedUserIds]\">{{ 'cmf_filters_save_share_user' | trans({}, 'admin') }}</label>
                <select
                        id=\"filterDefinition[allowedUserIds]\"
                        name=\"filterDefinition[allowedUserIds][]\"
                        class=\"form-control plugin-select2\"
                        multiple=\"multiple\"
                        data-placeholder=\"{{ 'cmf_filters_save_share_user' | trans({}, 'admin') }}\"
                        data-select2-options='{{ {'allowClear': false} | json_encode }}'>

                    {% for user in cmf_loadUsers() %}
                        <option value=\"{{ user.id }}\" {{ (preselected and user.id in filterDefinition.getAllowedUserIds()) ? 'selected=\"selected\"' : '' }}>
                            {{ user.name }}{{ not (user.firstname ~ user.lastname) is empty ? ('(' ~ ((user.firstname ~ ' ' ~ user.lastname) | trim)) ~')' : '' }}
                        </option>

                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"col-xs-12\">
            <div class=\"form-group\">
                <label for=\"filterDefinition[allowedRoleIds]\">{{ 'cmf_filters_save_share_role' | trans({}, 'admin') }}</label>
                <select
                        id=\"filterDefinition[allowedRoleIds]\"
                        name=\"filterDefinition[allowedRoleIds][]\"
                        class=\"form-control plugin-select2\"
                        multiple=\"multiple\"
                        data-placeholder=\"{{ 'cmf_filters_save_share_role' | trans({}, 'admin') }}\"
                        data-select2-options='{{ {'allowClear': false} | json_encode }}'>
                    {% for role in cmf_loadRoles() %}
                        <option value=\"{{ role.id }}\" {{ (preselected and role.id in filterDefinition.getAllowedUserIds()) ? 'selected=\"selected\"' : '' }}>
                            {{ role.name }}
                        </option>
                    {% endfor %}
                </select>
            </div>
        </div>
    </div>
{% endif %}
", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/user_roles.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/customers/partials/list_filter/user_roles.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 15);
        static $filters = array("escape" => 6, "trans" => 6, "json_encode" => 13, "trim" => 17);
        static $functions = array("cmf_isCurrentUserFilterSharer" => 2, "cmf_loadUsers" => 15, "cmf_loadRoles" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'trans', 'json_encode', 'trim'],
                ['cmf_isCurrentUserFilterSharer', 'cmf_loadUsers', 'cmf_loadRoles']
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
