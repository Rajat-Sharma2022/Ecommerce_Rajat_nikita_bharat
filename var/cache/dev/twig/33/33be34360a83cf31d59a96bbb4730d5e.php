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

/* @PimcoreDataHub/Feature/explorer.html.twig */
class __TwigTemplate_1acf4d2ca63f2dabb825842e43ae926b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreDataHub/Feature/explorer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreDataHub/Feature/explorer.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8/>
        <meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui\">
        <title>GraphQL Playground</title>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/pimcoredatahub/playground/index.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/pimcoredatahub/playground/animations.css"), "html", null, true);
        echo "\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/pimcoredatahub/playground/favicon.png"), "html", null, true);
        echo "\"/>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/pimcoredatahub/playground/middleware.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div id=\"loading-wrapper\">
            <svg class=\"logo\" viewBox=\"0 0 128 128\">
                <title>GraphQL Playground Logo</title>
                <defs>
                    <linearGradient id=\"linearGradient-1\" x1=\"4.86%\" x2=\"96.21%\" y1=\"0%\" y2=\"99.66%\">
                        <stop stop-color=\"#E00082\" stop-opacity=\".8\" offset=\"0%\"></stop>
                        <stop stop-color=\"#E00082\" offset=\"100%\"></stop>
                    </linearGradient>
                </defs>
                <g>
                    <rect id=\"Gradient\" width=\"127.96\" height=\"127.96\" y=\"1\" fill=\"url(#linearGradient-1)\" rx=\"4\"></rect>
                    <path id=\"Border\" fill=\"#E00082\" fill-rule=\"nonzero\"
                          d=\"M4.7 2.84c-1.58 0-2.86 1.28-2.86 2.85v116.57c0 1.57 1.28 2.84 2.85 2.84h116.57c1.57 0 2.84-1.26 2.84-2.83V5.67c0-1.55-1.26-2.83-2.83-2.83H4.67zM4.7 0h116.58c3.14 0 5.68 2.55 5.68 5.7v116.58c0 3.14-2.54 5.68-5.68 5.68H4.68c-3.13 0-5.68-2.54-5.68-5.68V5.68C-1 2.56 1.55 0 4.7 0z\"></path>
                    <path class=\"bglIGM\" x=\"64\" y=\"28\" fill=\"#fff\" d=\"M64 36c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8\"
                          style=\"transform: translate(100px, 100px);\"></path>
                    <path class=\"ksxRII\" x=\"95.98500061035156\" y=\"46.510000228881836\" fill=\"#fff\"
                          d=\"M89.04 50.52c-2.2-3.84-.9-8.73 2.94-10.96 3.83-2.2 8.72-.9 10.95 2.94 2.2 3.84.9 8.73-2.94 10.96-3.85 2.2-8.76.9-10.97-2.94\"
                          style=\"transform: translate(100px, 100px);\"></path>
                    <path class=\"cWrBmb\" x=\"95.97162628173828\" y=\"83.4900016784668\" fill=\"#fff\"
                          d=\"M102.9 87.5c-2.2 3.84-7.1 5.15-10.94 2.94-3.84-2.2-5.14-7.12-2.94-10.96 2.2-3.84 7.12-5.15 10.95-2.94 3.86 2.23 5.16 7.12 2.94 10.96\"
                          style=\"transform: translate(100px, 100px);\"></path>
                    <path class=\"Wnusb\" x=\"64\" y=\"101.97999572753906\" fill=\"#fff\" d=\"M64 110c-4.43 0-8-3.6-8-8.02 0-4.44 3.57-8.02 8-8.02s8 3.58 8 8.02c0 4.4-3.57 8.02-8 8.02\"
                          style=\"transform: translate(100px, 100px);\"></path>
                    <path class=\"bfPqf\" x=\"32.03982162475586\" y=\"83.4900016784668\" fill=\"#fff\"
                          d=\"M25.1 87.5c-2.2-3.84-.9-8.73 2.93-10.96 3.83-2.2 8.72-.9 10.95 2.94 2.2 3.84.9 8.73-2.94 10.96-3.85 2.2-8.74.9-10.95-2.94\"
                          style=\"transform: translate(100px, 100px);\"></path>
                    <path class=\"edRCTN\" x=\"32.033552169799805\" y=\"46.510000228881836\" fill=\"#fff\"
                          d=\"M38.96 50.52c-2.2 3.84-7.12 5.15-10.95 2.94-3.82-2.2-5.12-7.12-2.92-10.96 2.2-3.84 7.12-5.15 10.95-2.94 3.83 2.23 5.14 7.12 2.94 10.96\"
                          style=\"transform: translate(100px, 100px);\"></path>
                    <path class=\"iEGVWn\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M63.55 27.5l32.9 19-32.9-19z\"></path>
                    <path class=\"bsocdx\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M96 46v38-38z\"></path>
                    <path class=\"jAZXmP\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M96.45 84.5l-32.9 19 32.9-19z\"></path>
                    <path class=\"hSeArx\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M64.45 103.5l-32.9-19 32.9 19z\"></path>
                    <path class=\"bVgqGk\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M32 84V46v38z\"></path>
                    <path class=\"hEFqBt\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M31.55 46.5l32.9-19-32.9 19z\"></path>
                    <path class=\"dzEKCM\" id=\"Triangle-Bottom\" stroke=\"#fff\" stroke-width=\"4\" d=\"M30 84h70\" stroke-linecap=\"round\"></path>
                    <path class=\"DYnPx\" id=\"Triangle-Left\" stroke=\"#fff\" stroke-width=\"4\" d=\"M65 26L30 87\" stroke-linecap=\"round\"></path>
                    <path class=\"hjPEAQ\" id=\"Triangle-Right\" stroke=\"#fff\" stroke-width=\"4\" d=\"M98 87L63 26\" stroke-linecap=\"round\"></path>
                </g>
            </svg>
            <div class=\"text\">Loading
                <span class=\"dGfHfc\">GraphQL Playground</span>
            </div>
        </div>

        <div id=\"root\"/>
        <script type=\"text/javascript\">
            function getCookie(name) {
                var value = \"; \" + document.cookie;
                var parts = value.split(\"; \" + name + \"=\");
                if (parts.length == 2) return parts.pop().split(\";\").shift();
            }

            window.addEventListener(\"load\", function (event) {
                const loadingWrapper = document.getElementById(\"loading-wrapper\");
                loadingWrapper.classList.add(\"fadeOut\");

                const root = document.getElementById(\"root\");
                root.classList.add(\"playgroundIn\");

                const url = new URL(window.location.href);
                let query = url.searchParams.get(\"query\") ?? '';

                let config = {
                    endpoint: \"";
        // line 77
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["graphQLUrl"]) || array_key_exists("graphQLUrl", $context) ? $context["graphQLUrl"] : (function () { throw new RuntimeError('Variable "graphQLUrl" does not exist.', 77, $this->source); })()), 77, $this->source), "html", null, true);
        echo "\",
                    headers: {
                        \"";
        // line 79
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["tokenHeader"]) || array_key_exists("tokenHeader", $context) ? $context["tokenHeader"] : (function () { throw new RuntimeError('Variable "tokenHeader" does not exist.', 79, $this->source); })()), 79, $this->source), "html", null, true);
        echo "\": url.searchParams.get(\"apikey\"),
                        \"X-XSRF-TOKEN\": getCookie(\"XSRF-TOKEN\"),
                    }
                };

                if (query) {
                    query = decodeURIComponent(query);
                    config.query = query;
                    config = {
                        tabs: [
                            config
                        ]
                    };
                }

                GraphQLPlayground.init(root, config);
            });
        </script>
    </body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreDataHub/Feature/explorer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 79,  135 => 77,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8/>
        <meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui\">
        <title>GraphQL Playground</title>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/pimcoredatahub/playground/index.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/pimcoredatahub/playground/animations.css') }}\"/>
        <link rel=\"shortcut icon\" href=\"{{ asset('bundles/pimcoredatahub/playground/favicon.png') }}\"/>
        <script src=\"{{ asset('bundles/pimcoredatahub/playground/middleware.js') }}\"></script>
    </head>
    <body>
        <div id=\"loading-wrapper\">
            <svg class=\"logo\" viewBox=\"0 0 128 128\">
                <title>GraphQL Playground Logo</title>
                <defs>
                    <linearGradient id=\"linearGradient-1\" x1=\"4.86%\" x2=\"96.21%\" y1=\"0%\" y2=\"99.66%\">
                        <stop stop-color=\"#E00082\" stop-opacity=\".8\" offset=\"0%\"></stop>
                        <stop stop-color=\"#E00082\" offset=\"100%\"></stop>
                    </linearGradient>
                </defs>
                <g>
                    <rect id=\"Gradient\" width=\"127.96\" height=\"127.96\" y=\"1\" fill=\"url(#linearGradient-1)\" rx=\"4\"></rect>
                    <path id=\"Border\" fill=\"#E00082\" fill-rule=\"nonzero\"
                          d=\"M4.7 2.84c-1.58 0-2.86 1.28-2.86 2.85v116.57c0 1.57 1.28 2.84 2.85 2.84h116.57c1.57 0 2.84-1.26 2.84-2.83V5.67c0-1.55-1.26-2.83-2.83-2.83H4.67zM4.7 0h116.58c3.14 0 5.68 2.55 5.68 5.7v116.58c0 3.14-2.54 5.68-5.68 5.68H4.68c-3.13 0-5.68-2.54-5.68-5.68V5.68C-1 2.56 1.55 0 4.7 0z\"></path>
                    <path class=\"bglIGM\" x=\"64\" y=\"28\" fill=\"#fff\" d=\"M64 36c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8\"
                          style=\"transform: translate(100px, 100px);\"></path>
                    <path class=\"ksxRII\" x=\"95.98500061035156\" y=\"46.510000228881836\" fill=\"#fff\"
                          d=\"M89.04 50.52c-2.2-3.84-.9-8.73 2.94-10.96 3.83-2.2 8.72-.9 10.95 2.94 2.2 3.84.9 8.73-2.94 10.96-3.85 2.2-8.76.9-10.97-2.94\"
                          style=\"transform: translate(100px, 100px);\"></path>
                    <path class=\"cWrBmb\" x=\"95.97162628173828\" y=\"83.4900016784668\" fill=\"#fff\"
                          d=\"M102.9 87.5c-2.2 3.84-7.1 5.15-10.94 2.94-3.84-2.2-5.14-7.12-2.94-10.96 2.2-3.84 7.12-5.15 10.95-2.94 3.86 2.23 5.16 7.12 2.94 10.96\"
                          style=\"transform: translate(100px, 100px);\"></path>
                    <path class=\"Wnusb\" x=\"64\" y=\"101.97999572753906\" fill=\"#fff\" d=\"M64 110c-4.43 0-8-3.6-8-8.02 0-4.44 3.57-8.02 8-8.02s8 3.58 8 8.02c0 4.4-3.57 8.02-8 8.02\"
                          style=\"transform: translate(100px, 100px);\"></path>
                    <path class=\"bfPqf\" x=\"32.03982162475586\" y=\"83.4900016784668\" fill=\"#fff\"
                          d=\"M25.1 87.5c-2.2-3.84-.9-8.73 2.93-10.96 3.83-2.2 8.72-.9 10.95 2.94 2.2 3.84.9 8.73-2.94 10.96-3.85 2.2-8.74.9-10.95-2.94\"
                          style=\"transform: translate(100px, 100px);\"></path>
                    <path class=\"edRCTN\" x=\"32.033552169799805\" y=\"46.510000228881836\" fill=\"#fff\"
                          d=\"M38.96 50.52c-2.2 3.84-7.12 5.15-10.95 2.94-3.82-2.2-5.12-7.12-2.92-10.96 2.2-3.84 7.12-5.15 10.95-2.94 3.83 2.23 5.14 7.12 2.94 10.96\"
                          style=\"transform: translate(100px, 100px);\"></path>
                    <path class=\"iEGVWn\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M63.55 27.5l32.9 19-32.9-19z\"></path>
                    <path class=\"bsocdx\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M96 46v38-38z\"></path>
                    <path class=\"jAZXmP\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M96.45 84.5l-32.9 19 32.9-19z\"></path>
                    <path class=\"hSeArx\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M64.45 103.5l-32.9-19 32.9 19z\"></path>
                    <path class=\"bVgqGk\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M32 84V46v38z\"></path>
                    <path class=\"hEFqBt\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M31.55 46.5l32.9-19-32.9 19z\"></path>
                    <path class=\"dzEKCM\" id=\"Triangle-Bottom\" stroke=\"#fff\" stroke-width=\"4\" d=\"M30 84h70\" stroke-linecap=\"round\"></path>
                    <path class=\"DYnPx\" id=\"Triangle-Left\" stroke=\"#fff\" stroke-width=\"4\" d=\"M65 26L30 87\" stroke-linecap=\"round\"></path>
                    <path class=\"hjPEAQ\" id=\"Triangle-Right\" stroke=\"#fff\" stroke-width=\"4\" d=\"M98 87L63 26\" stroke-linecap=\"round\"></path>
                </g>
            </svg>
            <div class=\"text\">Loading
                <span class=\"dGfHfc\">GraphQL Playground</span>
            </div>
        </div>

        <div id=\"root\"/>
        <script type=\"text/javascript\">
            function getCookie(name) {
                var value = \"; \" + document.cookie;
                var parts = value.split(\"; \" + name + \"=\");
                if (parts.length == 2) return parts.pop().split(\";\").shift();
            }

            window.addEventListener(\"load\", function (event) {
                const loadingWrapper = document.getElementById(\"loading-wrapper\");
                loadingWrapper.classList.add(\"fadeOut\");

                const root = document.getElementById(\"root\");
                root.classList.add(\"playgroundIn\");

                const url = new URL(window.location.href);
                let query = url.searchParams.get(\"query\") ?? '';

                let config = {
                    endpoint: \"{{ graphQLUrl }}\",
                    headers: {
                        \"{{ tokenHeader }}\": url.searchParams.get(\"apikey\"),
                        \"X-XSRF-TOKEN\": getCookie(\"XSRF-TOKEN\"),
                    }
                };

                if (query) {
                    query = decodeURIComponent(query);
                    config.query = query;
                    config = {
                        tabs: [
                            config
                        ]
                    };
                }

                GraphQLPlayground.init(root, config);
            });
        </script>
    </body>

</html>
", "@PimcoreDataHub/Feature/explorer.html.twig", "/var/www/html/EcommerceProject/ecom/vendor/pimcore/data-hub/src/Resources/views/Feature/explorer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 7);
        static $functions = array("asset" => 7);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['asset']
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
