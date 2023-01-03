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

/* content/editable_roundup.html.twig */
class __TwigTemplate_1070b700339d284da89f9564341a8d8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/editable_roundup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/editable_roundup.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "content/editable_roundup.html.twig", 1);
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
        echo "
    <div id=\"main-content\" class=\"main-content\" >

        ";
        // line 7
        echo twig_include($this->env, $context, "includes/content-headline.html.twig");
        echo "

        <div class=\"lead\">
            ";
        // line 10
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "lead");
        echo "
        </div>

        ";
        // line 13
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "            <style type=\"text/css\">
                .alert {
                    margin-top: 60px;
                }
            </style>

            <div class=\"editable-roundup\">

                <div class=\"alert alert-secondary\">
                    <h4>Checkbox</h4>
                </div>
                ";
            // line 25
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "checkbox", "myCheckbox");
            echo "

                <div class=\"clearfix\"></div>

                <div class=\"alert alert-secondary\">
                    <h4>Date</h4>
                </div>
                ";
            // line 32
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "date", "myDate");
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Relation (Many-To-One)</h4>
                </div>
                ";
            // line 37
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "relation", "myRelation");
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Relation (Many-To-Many)</h4>
                </div>
                ";
            // line 42
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "relations", "myRelations");
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Image</h4>
                </div>
                ";
            // line 47
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "myImage");
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Input</h4>
                </div>
                ";
            // line 52
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "myInput");
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Link</h4>
                </div>
                ";
            // line 57
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", "myLink");
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Multi-Select</h4>
                </div>
                ";
            // line 62
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "multiselect", "myMultiselect", ["width" => 200, "height" => 100, "store" => [0 => [0 => "cars", 1 => "Cars"], 1 => [0 => "motorcycles", 1 => "Motorcycles"], 2 => [0 => "accessories", 1 => "Accessories"]]]);
            // line 70
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Numeric</h4>
                </div>
                ";
            // line 75
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "numeric", "myNumeric");
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Embed</h4>
                </div>
                ";
            // line 80
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "embed", "myWidgets");
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Renderlet (drop an asset folder)</h4>
                </div>
                ";
            // line 85
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "renderlet", "myRenderlet", ["controller" => "App\\Controller\\DefaultController::galleryRenderletAction"]);
            // line 87
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Select</h4>
                </div>
                ";
            // line 92
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "mySelect", ["store" => [0 => [0 => "one-month", 1 => "One month"], 1 => [0 => "three-months", 1 => "Three months"], 2 => [0 => "unlimited", 1 => "Unlimited"]]]);
            // line 98
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Snippet</h4>
                    <p>drop a document snippet here</p>
                </div>
                ";
            // line 104
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "mySnippet");
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Table</h4>
                    <p>of course you can create tables in the wysiwyg too</p>
                </div>
                ";
            // line 110
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "table", "tableName", ["width" => 700, "height" => 400, "defaults" => ["cols" => 6, "rows" => 10, "data" => [0 => [0 => "Value 1", 1 => "Value 2", 2 => "Value 3"], 1 => [0 => "this", 1 => "is", 2 => "test"]]]]);
            // line 121
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Textarea</h4>
                </div>
                ";
            // line 126
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "textarea", "myTextarea");
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>Video</h4>
                </div>
                ";
            // line 131
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "video", "myVideo", ["attributes" => ["class" => "video-js vjs-default-skin vjs-big-play-centered", "data-setup" => "{}"], "thumbnail" => "content", "height" => 380]);
            // line 138
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>WYSIWYG</h4>
                </div>
                ";
            // line 143
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "myWysiwyg");
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>PDF</h4>
                </div>
                ";
            // line 148
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "pdf", "myPdf", ["width" => 640, "height" => 100]);
            echo "

                <div class=\"alert alert-secondary\">
                    <h4>EDITABLE DIALOG BOX</h4>
                    <p>Configured on the Image w. metadata brick class \"App\\Document\\Areabrick\\ImageMetadata\". Click on the edit button(pencil) for editable box:</p>
                </div>
                ";
            // line 154
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "area", "content", ["type" => "image-metadata"]);
            echo "
            </div>

        ";
        }
        // line 158
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "content/editable_roundup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 158,  256 => 154,  247 => 148,  239 => 143,  232 => 138,  230 => 131,  222 => 126,  215 => 121,  213 => 110,  204 => 104,  196 => 98,  194 => 92,  187 => 87,  185 => 85,  177 => 80,  169 => 75,  162 => 70,  160 => 62,  152 => 57,  144 => 52,  136 => 47,  128 => 42,  120 => 37,  112 => 32,  102 => 25,  89 => 14,  87 => 13,  81 => 10,  75 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}

{% block content %}

    <div id=\"main-content\" class=\"main-content\" >

        {{ include('includes/content-headline.html.twig') }}

        <div class=\"lead\">
            {{ pimcore_wysiwyg('lead') }}
        </div>

        {% if editmode %}
            <style type=\"text/css\">
                .alert {
                    margin-top: 60px;
                }
            </style>

            <div class=\"editable-roundup\">

                <div class=\"alert alert-secondary\">
                    <h4>Checkbox</h4>
                </div>
                {{ pimcore_checkbox('myCheckbox') }}

                <div class=\"clearfix\"></div>

                <div class=\"alert alert-secondary\">
                    <h4>Date</h4>
                </div>
                {{ pimcore_date('myDate') }}

                <div class=\"alert alert-secondary\">
                    <h4>Relation (Many-To-One)</h4>
                </div>
                {{ pimcore_relation(\"myRelation\") }}

                <div class=\"alert alert-secondary\">
                    <h4>Relation (Many-To-Many)</h4>
                </div>
                {{ pimcore_relations(\"myRelations\") }}

                <div class=\"alert alert-secondary\">
                    <h4>Image</h4>
                </div>
                {{ pimcore_image('myImage') }}

                <div class=\"alert alert-secondary\">
                    <h4>Input</h4>
                </div>
                {{ pimcore_input('myInput') }}

                <div class=\"alert alert-secondary\">
                    <h4>Link</h4>
                </div>
                {{ pimcore_link('myLink') }}

                <div class=\"alert alert-secondary\">
                    <h4>Multi-Select</h4>
                </div>
                {{ pimcore_multiselect('myMultiselect', {
                    width: 200,
                    height: 100,
                    store: [
                        [\"cars\", \"Cars\"],
                        [\"motorcycles\", \"Motorcycles\"],
                        [\"accessories\", \"Accessories\"]
                    ]
                }) }}

                <div class=\"alert alert-secondary\">
                    <h4>Numeric</h4>
                </div>
                {{ pimcore_numeric('myNumeric') }}

                <div class=\"alert alert-secondary\">
                    <h4>Embed</h4>
                </div>
                {{ pimcore_embed(\"myWidgets\") }}

                <div class=\"alert alert-secondary\">
                    <h4>Renderlet (drop an asset folder)</h4>
                </div>
                {{ pimcore_renderlet('myRenderlet', {
                    controller: 'App\\\\Controller\\\\DefaultController::galleryRenderletAction'
                }) }}

                <div class=\"alert alert-secondary\">
                    <h4>Select</h4>
                </div>
                {{ pimcore_select('mySelect', {
                    store: [
                        ['one-month', 'One month'],
                        ['three-months', 'Three months'],
                        ['unlimited', 'Unlimited']
                    ]
                }) }}

                <div class=\"alert alert-secondary\">
                    <h4>Snippet</h4>
                    <p>drop a document snippet here</p>
                </div>
                {{ pimcore_snippet('mySnippet') }}

                <div class=\"alert alert-secondary\">
                    <h4>Table</h4>
                    <p>of course you can create tables in the wysiwyg too</p>
                </div>
                {{ pimcore_table('tableName', {
                    width: 700,
                    height: 400,
                    defaults: {
                        cols: 6,
                        rows: 10,
                        data: [
                            [\"Value 1\", \"Value 2\", \"Value 3\"],
                            [\"this\", \"is\", \"test\"]
                        ]
                    }
                }) }}

                <div class=\"alert alert-secondary\">
                    <h4>Textarea</h4>
                </div>
                {{ pimcore_textarea('myTextarea') }}

                <div class=\"alert alert-secondary\">
                    <h4>Video</h4>
                </div>
                {{ pimcore_video('myVideo', {
                    attributes: {
                        class: 'video-js vjs-default-skin vjs-big-play-centered',
                        'data-setup': '{}'
                    },
                    thumbnail: 'content',
                    height: 380
                }) }}

                <div class=\"alert alert-secondary\">
                    <h4>WYSIWYG</h4>
                </div>
                {{ pimcore_wysiwyg('myWysiwyg') }}

                <div class=\"alert alert-secondary\">
                    <h4>PDF</h4>
                </div>
                {{ pimcore_pdf(\"myPdf\", {\"width\": 640, height: 100}) }}

                <div class=\"alert alert-secondary\">
                    <h4>EDITABLE DIALOG BOX</h4>
                    <p>Configured on the Image w. metadata brick class \"App\\Document\\Areabrick\\ImageMetadata\". Click on the edit button(pencil) for editable box:</p>
                </div>
                {{ pimcore_area('content', { 'type' : 'image-metadata'}) }}
            </div>

        {% endif %}

    </div>
{% endblock %}
", "content/editable_roundup.html.twig", "/var/www/html/EcommerceProject/ecom/templates/content/editable_roundup.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array();
        static $functions = array("include" => 7, "pimcore_wysiwyg" => 10, "pimcore_checkbox" => 25, "pimcore_date" => 32, "pimcore_relation" => 37, "pimcore_relations" => 42, "pimcore_image" => 47, "pimcore_input" => 52, "pimcore_link" => 57, "pimcore_multiselect" => 62, "pimcore_numeric" => 75, "pimcore_embed" => 80, "pimcore_renderlet" => 85, "pimcore_select" => 92, "pimcore_snippet" => 104, "pimcore_table" => 110, "pimcore_textarea" => 126, "pimcore_video" => 131, "pimcore_pdf" => 148, "pimcore_area" => 154);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['include', 'pimcore_wysiwyg', 'pimcore_checkbox', 'pimcore_date', 'pimcore_relation', 'pimcore_relations', 'pimcore_image', 'pimcore_input', 'pimcore_link', 'pimcore_multiselect', 'pimcore_numeric', 'pimcore_embed', 'pimcore_renderlet', 'pimcore_select', 'pimcore_snippet', 'pimcore_table', 'pimcore_textarea', 'pimcore_video', 'pimcore_pdf', 'pimcore_area']
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
