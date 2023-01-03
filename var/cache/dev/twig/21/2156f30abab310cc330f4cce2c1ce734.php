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

/* @PimcoreEcommerceFramework/back-office.html.twig */
class __TwigTemplate_0bf5e099846f962764b1a932674bbea6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ecommerce_title' => [$this, 'block_ecommerce_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'head_ie_stylesheets' => [$this, 'block_head_ie_stylesheets'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/back-office.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreEcommerceFramework/back-office.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, true, 2), "locale", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>";
        // line 9
        $this->displayBlock('ecommerce_title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        ob_start();
        // line 12
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreecommerceframework/vendor/bootstrap4/css/bootstrap.css")], "method", false, false, true, 12);
        // line 13
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => "/bundles/pimcoreecommerceframework/vendor/fontawesome/css/fontawesome-all.min.css"], "method", false, false, true, 13);
        // line 14
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreecommerceframework/css/back-office.css")], "method", false, false, true, 14);
        // line 15
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "prependFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/pimcoreecommerceframework/vendor/bootstrap4/js/bootstrap-native-v4.min.js")], "method", false, false, true, 15);
        // line 16
        echo "

        ";
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_parse_8_);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('head_ie_stylesheets', $context, $blocks);
        // line 31
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"/bundles/pimcoreadmin/img/favicon/favicon-32x32.png\"/>
    </head>
    <body>
    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "

    <!-- Modal / Popup -->
    <div class=\"modal\" id=\"actionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"actionModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div id=\"modal-content\" class=\"modal-content\"></div>
        </div>
    </div>

    ";
        // line 75
        echo "    ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 78
        echo "
    <script ";
        // line 79
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 79, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 79), 79, $this->source);
        echo ">
        var pimcore = parent.pimcore;
        var popups = document.getElementsByClassName('popup-modal');
        for (var i = 0; i < popups.length; i++) {
            var element = popups[i];

            element.onclick = function (e) {
                e.preventDefault();
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var actionModal = document.getElementById('actionModal');
                        var modal = new Modal(actionModal,
                            {
                                content: '<div id=\"modal-content\" class=\"modal-content\">' + this.response + '</div>', // sets modal content
                            });

                        modal.show();
                    }
                };

                xhttp.open(\"GET\", (this).getAttribute('href'), true);
                xhttp.send();
            };

        }
    </script>

    </body>
</html>";
        $this->deferred->resolve($this, $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_ecommerce_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ecommerce_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ecommerce_title"));

        echo "Ecommerce Framework Back Office";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_head_stylesheets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head_stylesheets');
    }

    // line 20
    public function block_head_stylesheets_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 21
        echo "            ";
        echo $this->env->getFunction('pimcore_head_link')->getCallable()();
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 24
    public function block_head_ie_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_ie_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_ie_stylesheets"));

        // line 25
        echo "            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
            <![endif]-->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "        <nav class=\"navbar navbar-expand-lg navbar-light bg-light rounded\">
            <div class=\"container\">
                <a href=\"#\" class=\"navbar-brand\"><span class=\"fa fa-shopping-cart\"></span> Ecommerce Framework Back Office</a>

                <div class=\"collapse navbar-collapse\">
                    <ul class=\"navbar-nav ml-auto\">
                        ";
        // line 42
        $context["user"] = (isset($context["pimcoreUser"]) || array_key_exists("pimcoreUser", $context) ? $context["pimcoreUser"] : (function () { throw new RuntimeError('Variable "pimcoreUser" does not exist.', 42, $this->source); })());
        // line 43
        echo "                        ";
        $context["currentRouteName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, true, 43), "get", [0 => "_route"], "method", false, false, true, 43);
        // line 44
        echo "                        ";
        $context["arrActions"] = [];
        // line 45
        echo "
                        ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "isAllowed", [0 => "bundle_ecommerce_back-office_order"], "method", false, false, true, 46)) {
            // line 47
            echo "                            ";
            $context["arrActions"] = twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["arrActions"]) || array_key_exists("arrActions", $context) ? $context["arrActions"] : (function () { throw new RuntimeError('Variable "arrActions" does not exist.', 47, $this->source); })()), 47, $this->source), ["order" => [0 => "list"]]);
            // line 48
            echo "                        ";
        }
        // line 49
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrActions"]) || array_key_exists("arrActions", $context) ? $context["arrActions"] : (function () { throw new RuntimeError('Variable "arrActions" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["controller"] => $context["actions"]) {
            // line 50
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["actions"]);
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 51
                echo "                                ";
                $context["route"] = ((("pimcore_ecommerce_backend_admin-" . $this->sandbox->ensureToStringAllowed($context["controller"], 51, $this->source)) . "_") . $this->sandbox->ensureToStringAllowed($context["action"], 51, $this->source));
                // line 52
                echo "                                <li class=\"nav-item ";
                echo ((((isset($context["currentRouteName"]) || array_key_exists("currentRouteName", $context) ? $context["currentRouteName"] : (function () { throw new RuntimeError('Variable "currentRouteName" does not exist.', 52, $this->source); })()) == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 52, $this->source); })()))) ? ("active") : (""));
                echo "\">
                                    <a class=\"nav-link\" href=\"";
                // line 53
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 53, $this->source); })()), 53, $this->source));
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((("bundle_ecommerce.back-office." . $this->sandbox->ensureToStringAllowed($context["controller"], 53, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed($context["action"], 53, $this->source)), [], "admin"), "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['controller'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"main-content container\">
            ";
        // line 62
        $this->displayBlock("content", $context, $blocks);
        echo "
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_scripts($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'scripts');
    }

    // line 75
    public function block_scripts_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 76
        echo "        ";
        echo $this->env->getFunction('pimcore_head_script')->getCallable()();
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "@PimcoreEcommerceFramework/back-office.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 76,  336 => 75,  318 => 62,  311 => 57,  305 => 56,  294 => 53,  289 => 52,  286 => 51,  281 => 50,  276 => 49,  273 => 48,  270 => 47,  268 => 46,  265 => 45,  262 => 44,  259 => 43,  257 => 42,  249 => 36,  239 => 35,  224 => 25,  214 => 24,  200 => 21,  190 => 20,  166 => 9,  125 => 79,  122 => 78,  119 => 75,  108 => 65,  106 => 35,  100 => 31,  98 => 24,  95 => 23,  93 => 20,  90 => 19,  88 => 11,  83 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  69 => 11,  64 => 9,  54 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>{% block ecommerce_title %}Ecommerce Framework Back Office{% endblock %}</title>

        {% apply spaceless %}
            {% do pimcore_head_link().appendStylesheet(asset('/bundles/pimcoreecommerceframework/vendor/bootstrap4/css/bootstrap.css')) %}
            {% do pimcore_head_link().appendStylesheet('/bundles/pimcoreecommerceframework/vendor/fontawesome/css/fontawesome-all.min.css') %}
            {% do pimcore_head_link().appendStylesheet(asset('/bundles/pimcoreecommerceframework/css/back-office.css')) %}
            {% do pimcore_head_script().prependFile(asset('/bundles/pimcoreecommerceframework/vendor/bootstrap4/js/bootstrap-native-v4.min.js')) %}


        {% endapply %}

        {% block head_stylesheets deferred %}
            {{ pimcore_head_link() }}
        {% endblock %}

        {% block head_ie_stylesheets %}
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
            <![endif]-->
        {% endblock %}

        <link rel=\"icon\" type=\"image/png\" href=\"/bundles/pimcoreadmin/img/favicon/favicon-32x32.png\"/>
    </head>
    <body>
    {% block body %}
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light rounded\">
            <div class=\"container\">
                <a href=\"#\" class=\"navbar-brand\"><span class=\"fa fa-shopping-cart\"></span> Ecommerce Framework Back Office</a>

                <div class=\"collapse navbar-collapse\">
                    <ul class=\"navbar-nav ml-auto\">
                        {% set user = pimcoreUser %}
                        {% set currentRouteName = app.request.get('_route') %}
                        {% set arrActions = [] %}

                        {% if (user.isAllowed('bundle_ecommerce_back-office_order')) %}
                            {% set arrActions = arrActions|merge({'order': ['list']}) %}
                        {% endif %}
                        {% for controller,actions in arrActions %}
                            {% for action in actions %}
                                {% set route = \"pimcore_ecommerce_backend_admin-\" ~ controller ~ \"_\" ~ action %}
                                <li class=\"nav-item {{ (currentRouteName == route ? 'active' : '') }}\">
                                    <a class=\"nav-link\" href=\"{{ path(route) }}\">{{ ('bundle_ecommerce.back-office.' ~ controller ~ '-' ~ action)|trans([],'admin') }}</a>
                                </li>
                            {% endfor %}
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"main-content container\">
            {{ block('content') }}
        </div>
    {% endblock %}


    <!-- Modal / Popup -->
    <div class=\"modal\" id=\"actionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"actionModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div id=\"modal-content\" class=\"modal-content\"></div>
        </div>
    </div>

    {# output scripts added before #}
    {% block scripts deferred %}
        {{ pimcore_head_script() }}
    {% endblock %}

    <script {{ pimcore_csp.getNonceHtmlAttribute()|raw }}>
        var pimcore = parent.pimcore;
        var popups = document.getElementsByClassName('popup-modal');
        for (var i = 0; i < popups.length; i++) {
            var element = popups[i];

            element.onclick = function (e) {
                e.preventDefault();
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var actionModal = document.getElementById('actionModal');
                        var modal = new Modal(actionModal,
                            {
                                content: '<div id=\"modal-content\" class=\"modal-content\">' + this.response + '</div>', // sets modal content
                            });

                        modal.show();
                    }
                };

                xhttp.open(\"GET\", (this).getAttribute('href'), true);
                xhttp.send();
            };

        }
    </script>

    </body>
</html>", "@PimcoreEcommerceFramework/back-office.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Resources/views/back-office.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 9, "apply" => 11, "do" => 12, "set" => 42, "if" => 46, "for" => 49);
        static $filters = array("escape" => 2, "spaceless" => 11, "raw" => 79, "merge" => 47, "trans" => 53);
        static $functions = array("pimcore_head_link" => 12, "asset" => 12, "pimcore_head_script" => 15, "path" => 53);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'apply', 'do', 'set', 'if', 'for'],
                ['escape', 'spaceless', 'raw', 'merge', 'trans'],
                ['pimcore_head_link', 'asset', 'pimcore_head_script', 'path']
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
