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

/* @PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/footer.html.twig */
class __TwigTemplate_cb623755f6d29453aee2f342dac197ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/footer.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context["userAllowedToUpdate"] = $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getUserAllowedToUpdate($this->sandbox->ensureToStringAllowed((isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 2, $this->source); })()), 2, $this->source));
        // line 3
        $context["userAllowedToShare"] = $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getUserAllowedToShare($this->sandbox->ensureToStringAllowed((isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 3, $this->source); })()), 3, $this->source));
        // line 4
        twig_get_attribute($this->env, $this->source, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getJsConfig(), "add", [0 => "registerSaveFilterDefinition", 1 => true], "method", false, false, true, 4);
        // line 5
        twig_get_attribute($this->env, $this->source, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getJsConfig(), "add", [0 => "registerUpdateFilterDefinition", 1 => true], "method", false, false, true, 5);
        // line 6
        twig_get_attribute($this->env, $this->source, $this->extensions['CustomerManagementFrameworkBundle\Twig\Extension\CmfFrontendUtilsExtension']->getJsConfig(), "add", [0 => "registerShareFilterDefinition", 1 => true], "method", false, false, true, 6);
        // line 7
        echo "

<div class=\"box-footer text-right\">

    ";
        // line 11
        if ((( !(isset($context["hideAdvancedFilterSettings"]) || array_key_exists("hideAdvancedFilterSettings", $context) ? $context["hideAdvancedFilterSettings"] : (function () { throw new RuntimeError('Variable "hideAdvancedFilterSettings" does not exist.', 11, $this->source); })()) && (isset($context["userAllowedToShare"]) || array_key_exists("userAllowedToShare", $context) ? $context["userAllowedToShare"] : (function () { throw new RuntimeError('Variable "userAllowedToShare" does not exist.', 11, $this->source); })())) && (isset($context["userAllowedToUpdate"]) || array_key_exists("userAllowedToUpdate", $context) ? $context["userAllowedToUpdate"] : (function () { throw new RuntimeError('Variable "userAllowedToUpdate" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "
        <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\"
                data-target=\"#share-filter-definition-modal\">
            <i class=\"fa fa-share\"></i>&nbsp;";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_share", [], "admin"), "html", null, true);
            echo "</button>
        <div id=\"share-filter-definition-modal\" class=\"modal fade text-left\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title pull-left\">";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_share_headline", [], "admin"), "html", null, true);
            echo "</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        ";
            // line 24
            $this->loadTemplate("@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/user_roles.html.twig", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/footer.html.twig", 24)->display(twig_array_merge($context, ["preselected" => false]));
            // line 25
            echo "                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" value=\"Cancel\" data-dismiss=\"modal\"/>
                        <a type=\"button\" class=\"btn btn-primary\" name=\"share-filter-definition\"
                           id=\"share-filter-definition\">
                            ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_share_confirm", [], "admin"), "html", null, true);
            echo "
                        </a>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ( !(isset($context["hideAdvancedFilterSettings"]) || array_key_exists("hideAdvancedFilterSettings", $context) ? $context["hideAdvancedFilterSettings"] : (function () { throw new RuntimeError('Variable "hideAdvancedFilterSettings" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "        ";
            if ((isset($context["userAllowedToUpdate"]) || array_key_exists("userAllowedToUpdate", $context) ? $context["userAllowedToUpdate"] : (function () { throw new RuntimeError('Variable "userAllowedToUpdate" does not exist.', 39, $this->source); })())) {
                // line 40
                echo "            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\"
                    data-target=\"#delete-filter-definition-modal\">
                <i class=\"fa fa-trash\"></i>&nbsp;";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_delete", [], "admin"), "html", null, true);
                echo "</button>
            <div id=\"delete-filter-definition-modal\" class=\"modal fade text-left\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title pull-left\">";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_delete_headline", [], "admin"), "html", null, true);
                echo "</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        </div>
                        <div class=\"modal-footer\">
                            <input type=\"button\" class=\"btn btn-default\" value=\"Cancel\" data-dismiss=\"modal\"/>
                            <a class=\"btn btn-danger\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cmf_filter_definition_delete", ["filterDefinition" => ["id" => twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, true, 52)]]), "html", null, true);
                echo "\"
                               name=\"delete-filter-definition\">
                                ";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_delete_confirm", [], "admin"), "html", null, true);
                echo "
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            // line 61
            echo "
        <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#save-filter-definition-modal\"><i
                    class=\"fa fa-save\"></i>&nbsp;";
            // line 63
            echo twig_escape_filter($this->env, ((((isset($context["userAllowedToUpdate"]) || array_key_exists("userAllowedToUpdate", $context) ? $context["userAllowedToUpdate"] : (function () { throw new RuntimeError('Variable "userAllowedToUpdate" does not exist.', 63, $this->source); })()) && (isset($context["userAllowedToShare"]) || array_key_exists("userAllowedToShare", $context) ? $context["userAllowedToShare"] : (function () { throw new RuntimeError('Variable "userAllowedToShare" does not exist.', 63, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_share", [], "admin")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save", [], "admin"))), "html", null, true);
            echo "
        </button>
        <div id=\"save-filter-definition-modal\" class=\"modal fade text-left\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title pull-left\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_headline", [], "admin"), "html", null, true);
            echo "</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    </div>
                    <div class=\"modal-body\">

                        <div class=\"alert alert-danger\" style=\"display: none;\" id=\"name-required-message\">
                            ";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_error_name", [], "admin"), "html", null, true);
            echo "
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"form-group\">
                                    <label for=\"filterDefinition[name]\">";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_name", [], "admin"), "html", null, true);
            echo "</label>
                                    <input type=\"text\" name=\"filterDefinition[name]\" id=\"filterDefinition[name]\"
                                           class=\"form-control\"
                                           placeholder=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_name", [], "admin"), "html", null, true);
            echo "\"
                                           value=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "\">
                                </div>
                            </div>
                        </div>

                        ";
            // line 90
            $this->loadTemplate("@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/user_roles.html.twig", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/footer.html.twig", 90)->display(twig_array_merge($context, ["preselected" => true]));
            // line 91
            echo "
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"checkbox\">
                                    <label for=\"filterDefinition[readOnly]\">
                                        <input type=\"checkbox\" name=\"filterDefinition[readOnly]\"
                                               id=\"filterDefinition[readOnly]\" ";
            // line 97
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 97, $this->source); })()), "isReadOnly", [], "method", false, false, true, 97)) ? ("checked=\"checked\"") : (""));
            echo ">
                                        ";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_read_only", [], "admin"), "html", null, true);
            echo "
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"checkbox\">
                                    <label for=\"filterDefinition[shortcutAvailable]\">
                                        <input type=\"checkbox\" name=\"filterDefinition[shortcutAvailable]\"
                                               id=\"filterDefinition[shortcutAvailable]\" ";
            // line 106
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["filterDefinition"]) || array_key_exists("filterDefinition", $context) ? $context["filterDefinition"] : (function () { throw new RuntimeError('Variable "filterDefinition" does not exist.', 106, $this->source); })()), "isShortcutAvailable", [], "method", false, false, true, 106)) ? ("checked=\"checked\"") : (""));
            echo ">
                                        ";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_shortcut_available", [], "admin"), "html", null, true);
            echo "
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_cancel", [], "admin"), "html", null, true);
            echo "\"
                               data-dismiss=\"modal\"/>
                        <?php if(\$userAllowedToUpdate): ?>
                            <a type=\"button\" class=\"btn btn-primary\" name=\"update-filter-definition\"
                               id=\"update-filter-definition\"><i class=\"fa fa-save\"></i>
                                ";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_update", [], "admin"), "html", null, true);
            echo "
                            </a>
                        <?php endif; ?>
                        <a type=\"button\" class=\"btn btn-success\" name=\"save-filter-definition\"
                           id=\"save-filter-definition\"><i class=\"fa fa-plus\"></i>
                            ";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_save_new", [], "admin"), "html", null, true);
            echo "
                        </a>

                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 132
        echo "
    <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getFunction('pimcore_url')->getCallable()([], null, true), "html", null, true);
        echo "\"
       class=\"btn btn-default\">
        <i class=\"fa fa-ban\"></i>
        ";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_clear", [], "admin"), "html", null, true);
        echo "
    </a>

    <button type=\"submit\" class=\"btn btn-primary\">
        <i class=\"fa fa-filter\"></i>
        ";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cmf_filters_apply", [], "admin"), "html", null, true);
        echo "
    </button>
</div>
<!-- /.box-footer -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 141,  272 => 136,  266 => 133,  263 => 132,  252 => 124,  244 => 119,  236 => 114,  226 => 107,  222 => 106,  211 => 98,  207 => 97,  199 => 91,  197 => 90,  189 => 85,  185 => 84,  179 => 81,  170 => 75,  161 => 69,  152 => 63,  148 => 61,  138 => 54,  133 => 52,  125 => 47,  117 => 42,  113 => 40,  110 => 39,  108 => 38,  105 => 37,  95 => 30,  88 => 25,  86 => 24,  79 => 20,  71 => 15,  66 => 12,  64 => 11,  58 => 7,  56 => 6,  54 => 5,  52 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set userAllowedToUpdate = cmf_userAllowedToUpdate(filterDefinition) %}
{% set userAllowedToShare = cmf_userAllowedToShare(filterDefinition) %}
{% do cmf_jsConfig().add('registerSaveFilterDefinition', true) %}
{% do cmf_jsConfig().add('registerUpdateFilterDefinition', true) %}
{% do cmf_jsConfig().add('registerShareFilterDefinition', true) %}


<div class=\"box-footer text-right\">

    {% if (not hideAdvancedFilterSettings) and userAllowedToShare and userAllowedToUpdate %}

        <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\"
                data-target=\"#share-filter-definition-modal\">
            <i class=\"fa fa-share\"></i>&nbsp;{{ 'cmf_filters_share' | trans({}, 'admin') }}</button>
        <div id=\"share-filter-definition-modal\" class=\"modal fade text-left\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title pull-left\">{{ 'cmf_filters_share_headline' | trans({}, 'admin') }}</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        {% include '@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/user_roles.html.twig' with {'preselected': false}  %}
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" value=\"Cancel\" data-dismiss=\"modal\"/>
                        <a type=\"button\" class=\"btn btn-primary\" name=\"share-filter-definition\"
                           id=\"share-filter-definition\">
                            {{ 'cmf_filters_share_confirm' | trans({}, 'admin') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}

    {% if (not hideAdvancedFilterSettings) %}
        {% if userAllowedToUpdate %}
            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\"
                    data-target=\"#delete-filter-definition-modal\">
                <i class=\"fa fa-trash\"></i>&nbsp;{{ 'cmf_filters_delete' | trans({}, 'admin') }}</button>
            <div id=\"delete-filter-definition-modal\" class=\"modal fade text-left\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title pull-left\">{{ 'cmf_filters_delete_headline' | trans({}, 'admin') }}</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        </div>
                        <div class=\"modal-footer\">
                            <input type=\"button\" class=\"btn btn-default\" value=\"Cancel\" data-dismiss=\"modal\"/>
                            <a class=\"btn btn-danger\" href=\"{{ url('cmf_filter_definition_delete', {'filterDefinition': {'id': filterDefinition.id}}) }}\"
                               name=\"delete-filter-definition\">
                                {{ 'cmf_filters_delete_confirm' | trans({}, 'admin') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}

        <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#save-filter-definition-modal\"><i
                    class=\"fa fa-save\"></i>&nbsp;{{ (userAllowedToUpdate and userAllowedToShare) ? ('cmf_filters_save_share' | trans({}, 'admin')) : ('cmf_filters_save' | trans({}, 'admin')) }}
        </button>
        <div id=\"save-filter-definition-modal\" class=\"modal fade text-left\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title pull-left\">{{ 'cmf_filters_save_headline' | trans({}, 'admin') }}</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    </div>
                    <div class=\"modal-body\">

                        <div class=\"alert alert-danger\" style=\"display: none;\" id=\"name-required-message\">
                            {{ 'cmf_filters_save_error_name' | trans({}, 'admin') }}
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"form-group\">
                                    <label for=\"filterDefinition[name]\">{{ 'cmf_filters_save_name' | trans({}, 'admin') }}</label>
                                    <input type=\"text\" name=\"filterDefinition[name]\" id=\"filterDefinition[name]\"
                                           class=\"form-control\"
                                           placeholder=\"{{ 'cmf_filters_save_name' | trans({}, 'admin') }}\"
                                           value=\"{{ filterDefinition.name }}\">
                                </div>
                            </div>
                        </div>

                        {% include '@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/user_roles.html.twig' with {'preselected': true}  %}

                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"checkbox\">
                                    <label for=\"filterDefinition[readOnly]\">
                                        <input type=\"checkbox\" name=\"filterDefinition[readOnly]\"
                                               id=\"filterDefinition[readOnly]\" {{ filterDefinition.isReadOnly() ? 'checked=\"checked\"' : '' }}>
                                        {{ 'cmf_filters_save_read_only' | trans({}, 'admin') }}
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"checkbox\">
                                    <label for=\"filterDefinition[shortcutAvailable]\">
                                        <input type=\"checkbox\" name=\"filterDefinition[shortcutAvailable]\"
                                               id=\"filterDefinition[shortcutAvailable]\" {{ filterDefinition.isShortcutAvailable() ? 'checked=\"checked\"' : '' }}>
                                        {{ 'cmf_filters_save_shortcut_available' | trans({}, 'admin') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" value=\"{{ 'cmf_filters_cancel' | trans({}, 'admin') }}\"
                               data-dismiss=\"modal\"/>
                        <?php if(\$userAllowedToUpdate): ?>
                            <a type=\"button\" class=\"btn btn-primary\" name=\"update-filter-definition\"
                               id=\"update-filter-definition\"><i class=\"fa fa-save\"></i>
                                {{ 'cmf_filters_save_update' | trans({}, 'admin') }}
                            </a>
                        <?php endif; ?>
                        <a type=\"button\" class=\"btn btn-success\" name=\"save-filter-definition\"
                           id=\"save-filter-definition\"><i class=\"fa fa-plus\"></i>
                            {{ 'cmf_filters_save_new' | trans({}, 'admin') }}
                        </a>

                    </div>
                </div>
            </div>
        </div>
    {% endif %}

    <a href=\"{{ pimcore_url([], null, true) }}\"
       class=\"btn btn-default\">
        <i class=\"fa fa-ban\"></i>
        {{ 'cmf_filters_clear' | trans({}, 'admin') }}
    </a>

    <button type=\"submit\" class=\"btn btn-primary\">
        <i class=\"fa fa-filter\"></i>
        {{ 'cmf_filters_apply' | trans({}, 'admin') }}
    </button>
</div>
<!-- /.box-footer -->", "@PimcoreCustomerManagementFramework/admin/customers/partials/list_filter/box/footer.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/customer-management-framework-bundle/src/Resources/views/admin/customers/partials/list_filter/box/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "do" => 4, "if" => 11, "include" => 24);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("cmf_userAllowedToUpdate" => 2, "cmf_userAllowedToShare" => 3, "cmf_jsConfig" => 4, "url" => 52, "pimcore_url" => 133);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'do', 'if', 'include'],
                ['escape', 'trans'],
                ['cmf_userAllowedToUpdate', 'cmf_userAllowedToShare', 'cmf_jsConfig', 'url', 'pimcore_url']
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
