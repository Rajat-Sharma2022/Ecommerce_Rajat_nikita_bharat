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

/* areas/wysiwyg-with-images/view.html.twig */
class __TwigTemplate_8df6c9903d196e0325a90902288ddb6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/wysiwyg-with-images/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/wysiwyg-with-images/view.html.twig"));

        // line 1
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("includes/macros.html.twig", "areas/wysiwyg-with-images/view.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["content"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "content");
        // line 4
        echo "
";
        // line 6
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 6, $this->source); })()), "getDescription", [], "method", false, false, true, 6))) {
            // line 7
            echo "    ";
            twig_get_attribute($this->env, $this->source, $this->env->getFunction('pimcore_head_meta')->getCallable()(), "setDescription", [0 => twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 7, $this->source); })()), "getData", [], "method", false, false, true, 7), 1 => 160], "method", false, false, true, 7);
        }
        // line 9
        echo "
<section class=\"area-wysiwyg\">
    <div class=\"row\">
        <div class=\"col-sm-8\">
            ";
        // line 13
        ob_start();
        // line 14
        echo "                ";
        echo $this->sandbox->ensureToStringAllowed((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 14, $this->source); })()), 14, $this->source);
        echo "
            ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        echo $this->extensions['Pimcore\Twig\Extension\GlossaryExtension']->applyGlossary($___internal_parse_1_);
        // line 16
        echo "        </div>
        <div class=\"col-sm-4\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "                ";
            echo twig_call_macro($macros["macros"], "macro_image_link", [$this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image", ["thumbnail" => "galleryThumbnail", "imgAttributes" => ["class" => "img-responsive img-thumbnail mb-3"]]), (isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 19, $this->source); })()), "galleryLightbox"], 19, $context, $this->getSourceContext());
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
    </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/wysiwyg-with-images/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  85 => 19,  81 => 18,  77 => 16,  75 => 13,  69 => 14,  67 => 13,  61 => 9,  57 => 7,  55 => 6,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'includes/macros.html.twig' as macros %}

{% set content = pimcore_wysiwyg('content') %}

{# add autogenerated meta description #}
{% if document.getDescription() is empty %}
    {% do pimcore_head_meta().setDescription(content.getData(), 160) %}
{% endif %}

<section class=\"area-wysiwyg\">
    <div class=\"row\">
        <div class=\"col-sm-8\">
            {% apply pimcore_glossary %}
                {{ content|raw }}
            {% endapply %}
        </div>
        <div class=\"col-sm-4\">
            {% for i in pimcore_iterate_block(pimcore_block('images')) %}
                {{ macros.image_link(pimcore_image('image', { thumbnail: 'galleryThumbnail', imgAttributes: {class: 'img-responsive img-thumbnail mb-3' }}), editmode, 'galleryLightbox') }}
            {% endfor %}
        </div>
    </div>
</section>
", "areas/wysiwyg-with-images/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/wysiwyg-with-images/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "set" => 3, "if" => 6, "do" => 7, "apply" => 13, "for" => 18);
        static $filters = array("raw" => 14, "pimcore_glossary" => 13);
        static $functions = array("pimcore_wysiwyg" => 3, "pimcore_head_meta" => 7, "pimcore_iterate_block" => 18, "pimcore_block" => 18, "pimcore_image" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'if', 'do', 'apply', 'for'],
                ['raw', 'pimcore_glossary'],
                ['pimcore_wysiwyg', 'pimcore_head_meta', 'pimcore_iterate_block', 'pimcore_block', 'pimcore_image']
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
