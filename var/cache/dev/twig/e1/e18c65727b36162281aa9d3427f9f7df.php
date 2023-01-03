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

/* layouts/layout.html.twig */
class __TwigTemplate_43f19b57166f17dce49c0baaff801740 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_head_meta' => [$this, 'block_layout_head_meta'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'headscripts' => [$this, 'block_headscripts'],
            'inlinescripts' => [$this, 'block_inlinescripts'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, true, 2), "locale", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\">
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        ";
        // line 8
        ob_start();
        // line 9
        echo "            ";
        // line 10
        echo "            ";
        // line 11
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => "https://fonts.googleapis.com/css?family=Hind+Guntur:300,400,500,600,700&display=swap"], "method", false, false, true, 11);
        // line 12
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", 1 => null, 2 => null, 3 => ["integrity" => "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T", "crossorigin" => "anonymous"]], "method", false, false, true, 12);
        // line 13
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => "https://use.fontawesome.com/releases/v5.9.0/css/all.css"], "method", false, false, true, 13);
        // line 14
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/lib/magnific/magnific.css"), 1 => "screen"], "method", false, false, true, 14);
        // line 15
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/lib/autocompletejs/css/autoComplete.css"), 1 => "screen"], "method", false, false, true, 15);
        // line 16
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => "https://use.fontawesome.com/releases/v5.7.0/css/all.css", 1 => null, 2 => null, 3 => ["integrity" => "sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ", "crossorigin" => "anonymous"]], "method", false, false, true, 16);
        // line 17
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/global.css")], "method", false, false, true, 17);
        // line 18
        echo "            ";
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                ";
            twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/editmode.css")], "method", false, false, true, 19);
            // line 20
            echo "            ";
        }
        // line 21
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => "https://code.jquery.com/jquery-3.3.1.slim.min.js", 1 => null, 2 => null, 3 => ["integrity" => "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo", "crossorigin" => "anonymous"]], "method", false, false, true, 21);
        // line 22
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js", 1 => null, 2 => null, 3 => ["integrity" => "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1", "crossorigin" => "anonymous"]], "method", false, false, true, 22);
        // line 23
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js", 1 => null, 2 => null, 3 => ["integrity" => "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM", "crossorigin" => "anonymous"]], "method", false, false, true, 23);
        // line 24
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/lib/magnific/magnific.js")], "method", false, false, true, 24);
        // line 25
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/lib/autocompletejs/js/autoComplete.min.js")], "method", false, false, true, 25);
        // line 26
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/search-autocomplete.js")], "method", false, false, true, 26);
        // line 27
        echo "            ";
        twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/main.js")], "method", false, false, true, 27);
        // line 28
        echo "            ";
        if ( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "                    ";
            twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_script')->getCallable()(), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/frontend.js")], "method", false, false, true, 29);
            // line 30
            echo "            ";
        }
        // line 31
        echo "
            ";
        // line 32
        if (( !array_key_exists("document", $context) ||  !(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "                ";
            $context["document"] = Pimcore\Model\Document::getById(1);
            // line 34
            echo "            ";
        }
        // line 35
        echo "
            ";
        // line 36
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 36, $this->source); })()), "\\Pimcore\\Model\\Document\\Link")) {
            // line 37
            echo "                ";
            // line 38
            echo "                ";
            $context["document"] = twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 38, $this->source); })()), "getObject", [], "method", false, false, true, 38);
            // line 39
            echo "            ";
        }
        // line 40
        echo "
            ";
        // line 41
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 41, $this->source); })()), "\\Pimcore\\Model\\Document\\Page")) {
            // line 42
            echo "                ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 42, $this->source); })()), "getTitle", [], "method", false, false, true, 42))) {
                // line 43
                echo "                    ";
                twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_title')->getCallable()(), "set", [0 => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 43, $this->source); })()), "getTitle", [], "method", false, false, true, 43)], "method", false, false, true, 43);
                // line 44
                echo "                ";
            }
            // line 45
            echo "
                ";
            // line 46
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 46, $this->source); })()), "getDescription", [], "method", false, false, true, 46))) {
                // line 47
                echo "                    ";
                twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_meta')->getCallable()(), "setDescription", [0 => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 47, $this->source); })()), "getDescription", [], "method", false, false, true, 47)], "method", false, false, true, 47);
                // line 48
                echo "                ";
            }
            // line 49
            echo "
                ";
            // line 50
            twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_title')->getCallable()(), "append", [0 => "Pimcore Demo"], "method", false, false, true, 50);
            // line 51
            echo "                ";
            twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_title')->getCallable()(), "setSeparator", [0 => " : "], "method", false, false, true, 51);
            // line 52
            echo "            ";
        }
        // line 53
        echo "
            ";
        // line 54
        $context["isPortal"] = (array_key_exists("isPortal", $context) && (isset($context["isPortal"]) || array_key_exists("isPortal", $context) ? $context["isPortal"] : (function () { throw new RuntimeError('Variable "isPortal" does not exist.', 54, $this->source); })()));
        // line 55
        echo "        ";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo twig_spaceless($___internal_parse_2_);
        // line 56
        echo "
        ";
        // line 58
        echo "        ";
        $this->displayBlock('layout_head_meta', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 71
        echo "
    </head>
    <body>
        ";
        // line 75
        echo "        ";
        if (( !array_key_exists("document", $context) ||  !(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 75, $this->source); })()))) {
            // line 76
            echo "            ";
            $context["document"] = Pimcore\Model\Document::getById(1);
            // line 77
            echo "        ";
        }
        // line 78
        echo "
        <nav class=\"navbar navbar-expand-md navbar-dark sticky-top py-1 site-header ";
        // line 79
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 79, $this->source); })()), "getProperty", [0 => "header_color"], "method", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "\">

            ";
        // line 82
        echo "            ";
        $context["navStartNode"] = twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 82, $this->source); })()), "getProperty", [0 => "navigation_root"], "method", false, false, true, 82);
        // line 83
        echo "
            ";
        // line 84
        if ( !$this->env->getTest('instanceof')->getCallable()((isset($context["navStartNode"]) || array_key_exists("navStartNode", $context) ? $context["navStartNode"] : (function () { throw new RuntimeError('Variable "navStartNode" does not exist.', 84, $this->source); })()), "\\Pimcore\\Model\\Document")) {
            // line 85
            echo "                ";
            $context["navStartNode"] = Pimcore\Model\Document::getById(1);
            // line 86
            echo "            ";
        }
        // line 87
        echo "
            ";
        // line 88
        $context["mainNavigation"] = $this->extensions['App\Twig\Extension\NavigationExtension']->getDataLinks($this->sandbox->ensureToStringAllowed((isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 88, $this->source); })()), 88, $this->source), $this->sandbox->ensureToStringAllowed((isset($context["navStartNode"]) || array_key_exists("navStartNode", $context) ? $context["navStartNode"] : (function () { throw new RuntimeError('Variable "navStartNode" does not exist.', 88, $this->source); })()), 88, $this->source));
        // line 89
        echo "            <div class=\"container\">
                ";
        // line 91
        echo "                <a class=\"py-2 mb-2\" href=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["navStartNode"]) || array_key_exists("navStartNode", $context) ? $context["navStartNode"] : (function () { throw new RuntimeError('Variable "navStartNode" does not exist.', 91, $this->source); })()), 91, $this->source), "html", null, true);
        echo "\">
                    <img id=\"logo\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/static/images/logo.svg"), "html", null, true);
        echo "\" alt=\"Classic Cars - Pimcore Demo\">
                </a>
                ";
        // line 95
        echo "                <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                ";
        // line 100
        echo "                <div class=\"navbar-collapse collapse\" id=\"navbarCollapse\">
                    ";
        // line 102
        echo "

                    ";
        // line 104
        echo $this->env->getFunction('pimcore_render_nav')->getCallable()($this->sandbox->ensureToStringAllowed(        // line 105
(isset($context["mainNavigation"]) || array_key_exists("mainNavigation", $context) ? $context["mainNavigation"] : (function () { throw new RuntimeError('Variable "mainNavigation" does not exist.', 105, $this->source); })()), 105, $this->source), "menu", "renderMenu", ["maxDepth" => 2, "ulClass" => [0 => "navbar-nav menu-links ml-4 m-auto", 1 => "dropdown dropdown-menu", "default" => "dropdown-menu dropdown-submenu"]]);
        // line 113
        echo "


                    ";
        // line 117
        echo "                    ";
        echo twig_include($this->env, $context, "includes/navigation-icons.html.twig");
        echo "
                </div>
            </div>
        </nav>
        <header></header>

        <main role=\"main\">
            ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "flashes", [], "any", false, false, true, 124));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 125
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 126
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["label"], 126, $this->source), "html", null, true);
                echo " alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                        ";
                // line 128
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 128, $this->source), "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "

            ";
        // line 134
        if ((isset($context["isPortal"]) || array_key_exists("isPortal", $context) ? $context["isPortal"] : (function () { throw new RuntimeError('Variable "isPortal" does not exist.', 134, $this->source); })())) {
            // line 135
            echo "                ";
            $this->displayBlock("content", $context, $blocks);
            echo "
            ";
        } else {
            // line 137
            echo "                <div id=\"content\" class=\"container\">
                    <div class=\"row\">
                        ";
            // line 139
            $context["leftNavShow"] = twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 139, $this->source); })()), "getProperty", [0 => "left_nav_show"], "method", false, false, true, 139);
            // line 140
            echo "                        ";
            $context["showBreadcrumbs"] = ((array_key_exists("hideBreadcrumbs", $context)) ? ( !(isset($context["hideBreadcrumbs"]) || array_key_exists("hideBreadcrumbs", $context) ? $context["hideBreadcrumbs"] : (function () { throw new RuntimeError('Variable "hideBreadcrumbs" does not exist.', 140, $this->source); })())) : (true));
            // line 141
            echo "                        ";
            $context["mainColClass"] = (((isset($context["leftNavShow"]) || array_key_exists("leftNavShow", $context) ? $context["leftNavShow"] : (function () { throw new RuntimeError('Variable "leftNavShow" does not exist.', 141, $this->source); })())) ? ("col-md-9 pt-3 pt-md-5 order-last") : ("col-md-12 pt-3 pt-md-5"));
            // line 142
            echo "
                        <div class=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["mainColClass"]) || array_key_exists("mainColClass", $context) ? $context["mainColClass"] : (function () { throw new RuntimeError('Variable "mainColClass" does not exist.', 143, $this->source); })()), 143, $this->source), "html", null, true);
            echo "\">
                            ";
            // line 144
            if ((isset($context["showBreadcrumbs"]) || array_key_exists("showBreadcrumbs", $context) ? $context["showBreadcrumbs"] : (function () { throw new RuntimeError('Variable "showBreadcrumbs" does not exist.', 144, $this->source); })())) {
                // line 145
                echo "                                ";
                $context["mainNavStartNode"] = twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 145, $this->source); })()), "getProperty", [0 => "navigation_root"], "method", false, false, true, 145);
                // line 146
                echo "                                ";
                if (twig_test_empty((isset($context["mainNavStartNode"]) || array_key_exists("mainNavStartNode", $context) ? $context["mainNavStartNode"] : (function () { throw new RuntimeError('Variable "mainNavStartNode" does not exist.', 146, $this->source); })()))) {
                    // line 147
                    echo "                                    ";
                    $context["mainNavStartNode"] = Pimcore\Model\Document::getById(1);
                    // line 148
                    echo "                                ";
                }
                // line 149
                echo "
                                ";
                // line 150
                $context["breadbrumbs"] = $this->env->getFunction('pimcore_build_nav')->getCallable()(["active" =>                 // line 151
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 151, $this->source); })()), "root" =>                 // line 152
(isset($context["mainNavStartNode"]) || array_key_exists("mainNavStartNode", $context) ? $context["mainNavStartNode"] : (function () { throw new RuntimeError('Variable "mainNavStartNode" does not exist.', 152, $this->source); })())]);
                // line 154
                echo "                                ";
                $this->extensions['App\Twig\Extension\NavigationExtension']->enrichBreadcrumbs((isset($context["breadbrumbs"]) || array_key_exists("breadbrumbs", $context) ? $context["breadbrumbs"] : (function () { throw new RuntimeError('Variable "breadbrumbs" does not exist.', 154, $this->source); })()));
                // line 155
                echo "                                ";
                twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_nav_renderer')->getCallable()("breadcrumbs"), "setMinDepth", [0 => null], "method", false, false, true, 155);
                // line 156
                echo "
                                <div class=\"breadcrumb-header\">
                                    <a href=\"/\">";
                // line 158
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home"), "html", null, true);
                echo "</a> &gt;
                                    ";
                // line 159
                echo $this->env->getFunction('pimcore_render_nav')->getCallable()($this->sandbox->ensureToStringAllowed((isset($context["breadbrumbs"]) || array_key_exists("breadbrumbs", $context) ? $context["breadbrumbs"] : (function () { throw new RuntimeError('Variable "breadbrumbs" does not exist.', 159, $this->source); })()), 159, $this->source), "breadcrumbs");
                echo "
                                </div>
                            ";
            }
            // line 162
            echo "                            ";
            $this->displayBlock("content", $context, $blocks);
            echo "
                        </div>

                        ";
            // line 165
            if ((isset($context["leftNavShow"]) || array_key_exists("leftNavShow", $context) ? $context["leftNavShow"] : (function () { throw new RuntimeError('Variable "leftNavShow" does not exist.', 165, $this->source); })())) {
                // line 166
                echo "                            <div class=\"col-md-3 pt-3 pt-md-5 order-first sidebar\">
                                <div class=\"sticky\">
                                    <div class=\"bs-sidebar hidden-print affix-top\" role=\"complementary\">
                                        ";
                // line 169
                $context["leftStartNode"] = twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 169, $this->source); })()), "getProperty", [0 => "left_nav_start_node"], "method", false, false, true, 169);
                // line 170
                echo "                                        ";
                if (twig_test_empty((isset($context["leftStartNode"]) || array_key_exists("leftStartNode", $context) ? $context["leftStartNode"] : (function () { throw new RuntimeError('Variable "leftStartNode" does not exist.', 170, $this->source); })()))) {
                    // line 171
                    echo "                                            ";
                    $context["leftStartNode"] = (isset($context["mainNavStartNode"]) || array_key_exists("mainNavStartNode", $context) ? $context["mainNavStartNode"] : (function () { throw new RuntimeError('Variable "mainNavStartNode" does not exist.', 171, $this->source); })());
                    // line 172
                    echo "                                        ";
                }
                // line 173
                echo "
                                        ";
                // line 174
                $context["leftNav"] = $this->env->getFunction('pimcore_build_nav')->getCallable()(["active" =>                 // line 175
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 175, $this->source); })()), "root" =>                 // line 176
(isset($context["leftStartNode"]) || array_key_exists("leftStartNode", $context) ? $context["leftStartNode"] : (function () { throw new RuntimeError('Variable "leftStartNode" does not exist.', 176, $this->source); })())]);
                // line 178
                echo "
                                        <h5>";
                // line 179
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["leftStartNode"]) || array_key_exists("leftStartNode", $context) ? $context["leftStartNode"] : (function () { throw new RuntimeError('Variable "leftStartNode" does not exist.', 179, $this->source); })()), "getProperty", [0 => "navigation_name"], "method", false, false, true, 179), 179, $this->source), "html", null, true);
                echo "</h5>

                                        ";
                // line 181
                echo $this->env->getFunction('pimcore_render_nav')->getCallable()($this->sandbox->ensureToStringAllowed((isset($context["leftNav"]) || array_key_exists("leftNav", $context) ? $context["leftNav"] : (function () { throw new RuntimeError('Variable "leftNav" does not exist.', 181, $this->source); })()), 181, $this->source), "menu", "renderMenu", ["ulClass" => "nav bs-sidenav", "expandSiblingNodesOfActiveBranch" => true]);
                // line 184
                echo "
                                    </div>
                                    ";
                // line 186
                echo $this->env->getFunction('pimcore_inc')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 186, $this->source); })()), "getProperty", [0 => "sidebar"], "method", false, false, true, 186), 186, $this->source));
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 190
            echo "                    </div>
                </div>
            ";
        }
        // line 193
        echo "            <a id=\"back-to-top\" href=\"#\" class=\"btn btn-primary btn-lg back-to-top\" role=\"button\" title=\"Click to return on the top\" data-toggle=\"tooltip\" data-placement=\"left\">
                <span class=\"fa fa-arrow-up\"></span>
            </a>

        </main>

        ";
        // line 200
        echo "        ";
        echo $this->env->getFunction('pimcore_inc')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 200, $this->source); })()), "getProperty", [0 => "footer"], "method", false, false, true, 200), 200, $this->source));
        echo "

        ";
        // line 203
        echo "        ";
        $this->displayBlock('headscripts', $context, $blocks);
        // line 206
        echo "

        ";
        // line 208
        $this->displayBlock('inlinescripts', $context, $blocks);
        // line 211
        echo "    </body>
</html>";
        $this->deferred->resolve($this, $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_head_meta($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'layout_head_meta');
    }

    // line 58
    public function block_layout_head_meta_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta"));

        // line 59
        echo "            ";
        echo $this->env->getFunction('pimcore_head_title')->getCallable()();
        echo "
            ";
        // line 60
        echo $this->env->getFunction('pimcore_head_meta')->getCallable()();
        echo "

            ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_placeholder')->getCallable()("canonical"), "count", [], "method", false, false, true, 62)) {
            // line 63
            echo "                <link rel=\"canonical\" href=\"";
            echo $this->env->getFunction('pimcore_placeholder')->getCallable()("canonical");
            echo "\"/>
            ";
        }
        // line 65
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head_stylesheets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head_stylesheets');
    }

    // line 68
    public function block_head_stylesheets_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 69
        echo "            ";
        echo $this->env->getFunction('pimcore_head_link')->getCallable()();
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_headscripts($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'headscripts');
    }

    // line 203
    public function block_headscripts_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headscripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headscripts"));

        // line 204
        echo "            ";
        echo $this->env->getFunction('pimcore_head_script')->getCallable()();
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_inlinescripts($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'inlinescripts');
    }

    // line 208
    public function block_inlinescripts_deferred($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inlinescripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inlinescripts"));

        // line 209
        echo "            ";
        echo $this->env->getFunction('pimcore_inline_script')->getCallable()();
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "layouts/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 209,  598 => 208,  579 => 204,  569 => 203,  550 => 69,  540 => 68,  523 => 65,  517 => 63,  515 => 62,  510 => 60,  505 => 59,  495 => 58,  478 => 211,  476 => 208,  472 => 206,  469 => 203,  463 => 200,  455 => 193,  450 => 190,  443 => 186,  439 => 184,  437 => 181,  432 => 179,  429 => 178,  427 => 176,  426 => 175,  425 => 174,  422 => 173,  419 => 172,  416 => 171,  413 => 170,  411 => 169,  406 => 166,  404 => 165,  397 => 162,  391 => 159,  387 => 158,  383 => 156,  380 => 155,  377 => 154,  375 => 152,  374 => 151,  373 => 150,  370 => 149,  367 => 148,  364 => 147,  361 => 146,  358 => 145,  356 => 144,  352 => 143,  349 => 142,  346 => 141,  343 => 140,  341 => 139,  337 => 137,  331 => 135,  329 => 134,  325 => 132,  319 => 131,  310 => 128,  304 => 126,  299 => 125,  295 => 124,  284 => 117,  279 => 113,  277 => 105,  276 => 104,  272 => 102,  269 => 100,  263 => 95,  258 => 92,  253 => 91,  250 => 89,  248 => 88,  245 => 87,  242 => 86,  239 => 85,  237 => 84,  234 => 83,  231 => 82,  226 => 79,  223 => 78,  220 => 77,  217 => 76,  214 => 75,  209 => 71,  207 => 68,  204 => 67,  201 => 58,  198 => 56,  196 => 8,  193 => 55,  191 => 54,  188 => 53,  185 => 52,  182 => 51,  180 => 50,  177 => 49,  174 => 48,  171 => 47,  169 => 46,  166 => 45,  163 => 44,  160 => 43,  157 => 42,  155 => 41,  152 => 40,  149 => 39,  146 => 38,  144 => 37,  142 => 36,  139 => 35,  136 => 34,  133 => 33,  131 => 32,  128 => 31,  125 => 30,  122 => 29,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  107 => 24,  104 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  89 => 18,  86 => 17,  83 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  66 => 10,  64 => 9,  62 => 8,  53 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        {% apply spaceless %}
            {# add global stylesheets and scripts outside of any blocsk to add them to the helpers before any others assets are added #}
            {# we use the view helper to have cache buster functionality #}
            {% do pimcore_head_link().appendStylesheet('https://fonts.googleapis.com/css?family=Hind+Guntur:300,400,500,600,700&display=swap') %}
            {% do pimcore_head_link().appendStylesheet('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',null,null,{integrity:\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\",crossorigin:\"anonymous\"}) %}
            {% do pimcore_head_link().appendStylesheet('https://use.fontawesome.com/releases/v5.9.0/css/all.css') %}
            {% do pimcore_head_link().appendStylesheet(asset('static/lib/magnific/magnific.css'), 'screen') %}
            {% do pimcore_head_link().appendStylesheet(asset('static/lib/autocompletejs/css/autoComplete.css'), 'screen') %}
            {% do pimcore_head_link().appendStylesheet('https://use.fontawesome.com/releases/v5.7.0/css/all.css',null,null,{integrity:'sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ',crossorigin:'anonymous'}) %}
            {% do pimcore_head_link().appendStylesheet(asset('static/css/global.css')) %}
            {% if editmode %}
                {% do pimcore_head_link().appendStylesheet(asset('static/css/editmode.css')) %}
            {% endif %}
            {% do pimcore_head_script().appendFile('https://code.jquery.com/jquery-3.3.1.slim.min.js',null,null,{ integrity:\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\",crossorigin:\"anonymous\"}) %}
            {% do pimcore_head_script().appendFile('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',null,null,{ integrity:\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\",crossorigin:\"anonymous\"}) %}
            {% do pimcore_head_script().appendFile('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',null,null,{ integrity:\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\",crossorigin:\"anonymous\"}) %}
            {% do pimcore_head_script().appendFile(asset('static/lib/magnific/magnific.js')) %}
            {% do pimcore_head_script().appendFile(asset('static/lib/autocompletejs/js/autoComplete.min.js')) %}
            {% do pimcore_head_script().appendFile(asset('static/js/search-autocomplete.js')) %}
            {% do pimcore_head_script().appendFile(asset('static/js/main.js')) %}
            {% if not editmode %}
                    {% do pimcore_head_script().appendFile(asset('static/js/frontend.js')) %}
            {% endif %}

            {% if not document is defined or not document %}
                {% set document = pimcore_document(1) %}
            {% endif %}

            {% if document is instanceof('\\\\Pimcore\\\\Model\\\\Document\\\\Link') %}
                {# @var document \\Pimcore\\Model\\Document\\Link #}
                {% set document = document.getObject() %}
            {% endif %}

            {% if document is instanceof('\\\\Pimcore\\\\Model\\\\Document\\\\Page') %}
                {% if document.getTitle() is not empty %}
                    {% do pimcore_head_title().set(document.getTitle()) %}
                {% endif %}

                {% if document.getDescription() is not empty %}
                    {% do pimcore_head_meta().setDescription(document.getDescription()) %}
                {% endif %}

                {% do pimcore_head_title().append('Pimcore Demo') %}
                {% do pimcore_head_title().setSeparator(' : ') %}
            {% endif %}

            {% set isPortal = ((isPortal is defined) and isPortal) %}
        {% endapply %}

        {# we're using the deferred extension here to make sure this block is rendered after all helper calls #}
        {% block layout_head_meta deferred %}
            {{ pimcore_head_title() }}
            {{ pimcore_head_meta() }}

            {% if pimcore_placeholder('canonical').count() %}
                <link rel=\"canonical\" href=\"{{ pimcore_placeholder('canonical') }}\"/>
            {% endif %}

        {% endblock %}

        {% block head_stylesheets deferred %}
            {{ pimcore_head_link() }}
        {% endblock %}

    </head>
    <body>
        {# get root node if there is no document defined (for pages which are routed directly through static route) #}
        {% if not document is defined or not document %}
            {% set document = pimcore_document(1) %}
        {% endif %}

        <nav class=\"navbar navbar-expand-md navbar-dark sticky-top py-1 site-header {{ document.getProperty('header_color') }}\">

            {# get the document which should be used to start in navigation | default home #}
            {% set navStartNode = document.getProperty('navigation_root') %}

            {% if not navStartNode is instanceof('\\\\Pimcore\\\\Model\\\\Document') %}
                {% set navStartNode = pimcore_document(1) %}
            {% endif %}

            {% set mainNavigation =  app_navigation_data_links(document, navStartNode) %}
            <div class=\"container\">
                {#Logo Image#}
                <a class=\"py-2 mb-2\" href=\"{{ navStartNode }}\">
                    <img id=\"logo\" src=\"{{ asset('/static/images/logo.svg') }}\" alt=\"Classic Cars - Pimcore Demo\">
                </a>
                {#responsive burger menu icon#}
                <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                {#main header#}
                <div class=\"navbar-collapse collapse\" id=\"navbarCollapse\">
                    {#header - generate pimcore navigation #}


                    {{
                        pimcore_render_nav(mainNavigation, 'menu', 'renderMenu', {
                            maxDepth: 2,
                            ulClass: {
                                0: 'navbar-nav menu-links ml-4 m-auto',
                                1: 'dropdown dropdown-menu',
                                'default': 'dropdown-menu dropdown-submenu'
                            }
                        })
                    }}


                    {#header - navigation icons#}
                    {{ include('includes/navigation-icons.html.twig') }}
                </div>
            </div>
        </nav>
        <header></header>

        <main role=\"main\">
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }} alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}


            {% if isPortal %}
                {{ block('content') }}
            {% else %}
                <div id=\"content\" class=\"container\">
                    <div class=\"row\">
                        {% set leftNavShow = document.getProperty('left_nav_show') %}
                        {% set showBreadcrumbs = (hideBreadcrumbs is defined) ? not hideBreadcrumbs : true %}
                        {% set mainColClass = leftNavShow ? 'col-md-9 pt-3 pt-md-5 order-last' : 'col-md-12 pt-3 pt-md-5' %}

                        <div class=\"{{ mainColClass }}\">
                            {% if showBreadcrumbs %}
                                {% set mainNavStartNode = document.getProperty('navigation_root') %}
                                {% if mainNavStartNode is empty %}
                                    {% set mainNavStartNode = pimcore_document(1) %}
                                {% endif %}

                                {% set breadbrumbs = pimcore_build_nav({
                                    active: document,
                                    root: mainNavStartNode
                                }) %}
                                {% do app_navigation_enrich_breadcrumbs(breadbrumbs) %}
                                {% do pimcore_nav_renderer('breadcrumbs').setMinDepth(null) %}

                                <div class=\"breadcrumb-header\">
                                    <a href=\"/\">{{ \"Home\"|trans }}</a> &gt;
                                    {{ pimcore_render_nav(breadbrumbs, 'breadcrumbs') }}
                                </div>
                            {% endif %}
                            {{ block('content') }}
                        </div>

                        {% if leftNavShow %}
                            <div class=\"col-md-3 pt-3 pt-md-5 order-first sidebar\">
                                <div class=\"sticky\">
                                    <div class=\"bs-sidebar hidden-print affix-top\" role=\"complementary\">
                                        {% set leftStartNode = document.getProperty('left_nav_start_node') %}
                                        {% if leftStartNode is empty %}
                                            {% set leftStartNode = mainNavStartNode %}
                                        {% endif %}

                                        {% set leftNav = pimcore_build_nav({
                                            active: document,
                                            root: leftStartNode
                                        }) %}

                                        <h5>{{ leftStartNode.getProperty('navigation_name') }}</h5>

                                        {{ pimcore_render_nav(leftNav, 'menu', 'renderMenu', {
                                            ulClass: 'nav bs-sidenav',
                                            expandSiblingNodesOfActiveBranch: true,
                                        }) }}
                                    </div>
                                    {{ pimcore_inc(document.getProperty('sidebar')) }}
                                </div>
                            </div>
                        {% endif %}
                    </div>
                </div>
            {% endif %}
            <a id=\"back-to-top\" href=\"#\" class=\"btn btn-primary btn-lg back-to-top\" role=\"button\" title=\"Click to return on the top\" data-toggle=\"tooltip\" data-placement=\"left\">
                <span class=\"fa fa-arrow-up\"></span>
            </a>

        </main>

        {# include a document-snippet - in this case the footer document #}
        {{ pimcore_inc(document.getProperty('footer')) }}

        {# output scripts added before #}
        {% block headscripts deferred %}
            {{ pimcore_head_script() }}
        {% endblock %}


        {% block inlinescripts deferred %}
            {{ pimcore_inline_script() }}
        {% endblock %}
    </body>
</html>", "layouts/layout.html.twig", "/var/www/html/EcommerceProject/ecom/templates/layouts/layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 8, "do" => 11, "if" => 18, "set" => 33, "block" => 58, "for" => 124);
        static $filters = array("escape" => 2, "spaceless" => 8, "trans" => 158);
        static $functions = array("pimcore_head_link" => 11, "asset" => 14, "pimcore_head_script" => 21, "pimcore_document" => 33, "pimcore_head_title" => 43, "pimcore_head_meta" => 47, "app_navigation_data_links" => 88, "pimcore_render_nav" => 105, "include" => 117, "pimcore_build_nav" => 150, "app_navigation_enrich_breadcrumbs" => 154, "pimcore_nav_renderer" => 155, "pimcore_inc" => 186, "pimcore_placeholder" => 62, "pimcore_inline_script" => 209);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'do', 'if', 'set', 'block', 'for'],
                ['escape', 'spaceless', 'trans'],
                ['pimcore_head_link', 'asset', 'pimcore_head_script', 'pimcore_document', 'pimcore_head_title', 'pimcore_head_meta', 'app_navigation_data_links', 'pimcore_render_nav', 'include', 'pimcore_build_nav', 'app_navigation_enrich_breadcrumbs', 'pimcore_nav_renderer', 'pimcore_inc', 'pimcore_placeholder', 'pimcore_inline_script']
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
