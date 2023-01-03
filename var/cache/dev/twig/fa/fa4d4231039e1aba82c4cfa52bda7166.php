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

/* layouts/email.html.twig */
class __TwigTemplate_15663d1a1a3bfa30bd4b1d30bf533041 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/email.html.twig"));

        // line 1
        echo "<!-- Emails use the XHTML Strict doctype -->
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <!-- The character set should be utf-8 -->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width\"/>
    <!-- Link to the email's CSS, which will be inlined into the email -->
    <link rel=\"stylesheet\" href=\"/static/email/css/foundation-emails.css\">
    <style>
        .header {
            background: #000;
        }
        .header .columns {
            padding-bottom: 0;
        }
        .header p {
            color: #fff;
            margin-bottom: 0;
        }
        .header .container .text-right.text-light {
            color: #fff;
            text-align: right;
        }
        .header .wrapper-inner {
            padding: 20px; /*controls the height of the header*/
        }
        .header .container {
            background: #000;
        }
    </style>
</head>

<body>
<!-- Wrapper for the body of the email -->
<table class=\"body\" data-made-with-foundation>
    <tr>
        <!-- The class, align, and <center> tag center the container -->
        <td class=\"float-center\" align=\"center\" valign=\"top\">
            <center>
                <table align=\"center\" class=\"wrapper header float-center\">
                    <tbody>
                    <tr>
                        <td class=\"wrapper-inner\">
                            <table align=\"center\" class=\"container\">
                                <tbody>
                                <tr>
                                    <td>
                                        <table class=\"row collapse\">
                                            <tbody>
                                            <tr>
                                                <th class=\"small-6 large-6 columns first\" valign=\"middle\">
                                                    <table>
                                                        <tbody>
                                                        <tr>
                                                            <th>
                                                                <img id=\"logo\" src=\"/static/images/logo.jpg\" alt=\"Oldtimer Cars - Pimcore Demo\">
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                                <th class=\"small-6 large-6 columns last\" valign=\"middle\">
                                                    <table>
                                                        <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class=\"text-right text-light\">";
        // line 68
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "title");
        echo "</div>
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class=\"container\">
                    <tr>
                        <td>
                            ";
        // line 88
        $this->displayBlock("content", $context, $blocks);
        echo "
                        </td>
                    </tr>
                </table>
            </center>
        </td>
    </tr>
</table>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layouts/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 88,  114 => 68,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Emails use the XHTML Strict doctype -->
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <!-- The character set should be utf-8 -->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width\"/>
    <!-- Link to the email's CSS, which will be inlined into the email -->
    <link rel=\"stylesheet\" href=\"/static/email/css/foundation-emails.css\">
    <style>
        .header {
            background: #000;
        }
        .header .columns {
            padding-bottom: 0;
        }
        .header p {
            color: #fff;
            margin-bottom: 0;
        }
        .header .container .text-right.text-light {
            color: #fff;
            text-align: right;
        }
        .header .wrapper-inner {
            padding: 20px; /*controls the height of the header*/
        }
        .header .container {
            background: #000;
        }
    </style>
</head>

<body>
<!-- Wrapper for the body of the email -->
<table class=\"body\" data-made-with-foundation>
    <tr>
        <!-- The class, align, and <center> tag center the container -->
        <td class=\"float-center\" align=\"center\" valign=\"top\">
            <center>
                <table align=\"center\" class=\"wrapper header float-center\">
                    <tbody>
                    <tr>
                        <td class=\"wrapper-inner\">
                            <table align=\"center\" class=\"container\">
                                <tbody>
                                <tr>
                                    <td>
                                        <table class=\"row collapse\">
                                            <tbody>
                                            <tr>
                                                <th class=\"small-6 large-6 columns first\" valign=\"middle\">
                                                    <table>
                                                        <tbody>
                                                        <tr>
                                                            <th>
                                                                <img id=\"logo\" src=\"/static/images/logo.jpg\" alt=\"Oldtimer Cars - Pimcore Demo\">
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                                <th class=\"small-6 large-6 columns last\" valign=\"middle\">
                                                    <table>
                                                        <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class=\"text-right text-light\">{{ pimcore_input('title') }}</div>
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class=\"container\">
                    <tr>
                        <td>
                            {{ block('content') }}
                        </td>
                    </tr>
                </table>
            </center>
        </td>
    </tr>
</table>
</body>
</html>", "layouts/email.html.twig", "/var/www/html/EcommerceProject/ecom/templates/layouts/email.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("pimcore_input" => 68);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['pimcore_input']
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
