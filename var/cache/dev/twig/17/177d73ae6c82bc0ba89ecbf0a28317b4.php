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

/* areas/icon-teaser-row/view.html.twig */
class __TwigTemplate_e50102e2162f207cc90fbc33d892c36a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/icon-teaser-row/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/icon-teaser-row/view.html.twig"));

        // line 1
        $context["icons"] = ["asterisk" => "f069", "plus" => "f067", "euro-sign" => "f153", "minus" => "f068", "cloud" => "f0c2", "envelope" => "f0e0", "pencil" => "f040", "glass" => "f000", "music" => "f001", "search" => "f002", "heart" => "f004", "star" => "f005", "star-o" => "f006", "user" => "f007", "film" => "f008", "th-large" => "f009", "th" => "f00a", "th-list" => "f00b", "check" => "f00c", "times" => "f00d", "search-plus" => "f00e", "search-minus" => "f010", "power-off" => "f011", "signal" => "f012", "gear" => "f013", "trash" => "f1f8", "home" => "f015", "file" => "f15b", "clock-o" => "f017", "road" => "f018", "download" => "f019", "cloud-download" => "f0ed", "upload" => "f093", "inbox" => "f01c", "play-circle" => "f144", "repeat" => "f01e", "refresh" => "f021", "list-alt" => "f022", "lock" => "f023", "flag" => "f024", "headphones" => "f025", "volume-off" => "f026", "volume-down" => "f027", "volume-up" => "f028", "qrcode" => "f029", "barcode" => "f02a", "tag" => "f02b", "tags" => "f02c", "book" => "f02d", "bookmark" => "f097", "print" => "f02f", "camera" => "f030", "font" => "f031", "bold" => "f032", "italic" => "f033", "text-height" => "f034", "text-width" => "f035", "align-left" => "f036", "align-center" => "f037", "align-right" => "f038", "align-justify" => "f039", "list" => "f03a", "indent" => "f03c", "video-camera" => "f03d", "picture-o" => "f03e", "map-marker" => "f041", "adjust" => "f042", "tint" => "f043", "edit" => "f044", "share" => "f064", "arrows" => "f047", "step-backward" => "f048", "fast-backward" => "f049", "backward" => "f04a", "play" => "f04b", "pause" => "f04c", "stop" => "f04d", "forward" => "f04e", "fast-forward" => "f050", "step-forward" => "f051", "eject" => "f052", "chevron-left" => "f053", "chevron-right" => "f054", "question" => "f128", "info" => "f129", "crop" => "f125", "minus-circle" => "f056", "check-circle" => "f058", "ban" => "f05e", "arrow-left" => "f060", "arrow-right" => "f061", "arrow-up" => "f062", "arrow-down" => "f063", "share-alt" => "f1e0", "expand" => "f065", "compress" => "f066", "exclamation" => "f12a", "gift" => "f06b", "leaf" => "f06c", "fire" => "f06d", "eye" => "f06e", "eye-slash" => "f070", "warning" => "f071", "plane" => "f072", "calendar" => "f073", "random" => "f074", "comment" => "f075", "magnet" => "f076", "chevron-up" => "f077", "chevron-down" => "f078", "retweet" => "f079", "shopping-cart" => "f07a", "folder" => "f07b", "folder-open" => "f07c", "arrows-v" => "f07d", "arrows-h" => "f07e", "hdd-o" => "f0a0", "bullhorn" => "f0a1", "bell" => "f0f3", "certificate" => "f0a3", "thumbs-up" => "f164", "thumbs-down" => "f165", "hand-o-right" => "f0a4", "hand-o-left" => "f0a5", "hand-o-up" => "f0a6", "hand-o-down" => "f0a7", "arrow-circle-right" => "f0a9", "arrow-circle-left" => "f0a8", "arrow-circle-up" => "f0aa", "arrow-circle-down" => "f0ab", "globe" => "f0ac", "wrench" => "f0ad", "tasks" => "f0ae", "filter" => "f0b0", "briefcase" => "f0b1", "paperclip" => "f0c6", "link" => "f0c1", "phone" => "f095", "dollar-sign" => "f155", "pound-sign" => "f154", "sort" => "f0dc", "\tsort-alpha-down" => "f15d", "angle-down" => "f107", "angle-up" => "f106", "user" => "f007", "user-times" => "f235", "save" => "f0c7", "credit-card" => "f09d", "chart-line" => "f201", "copyright" => "f1f9", "compass" => "f14e"];
        // line 2
        $context["iconStore"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["code"]) {
            // line 4
            echo "    ";
            $context["iconStore"] = twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["iconStore"]) || array_key_exists("iconStore", $context) ? $context["iconStore"] : (function () { throw new RuntimeError('Variable "iconStore" does not exist.', 4, $this->source); })()), 4, $this->source), [0 => [0 => $context["name"], 1 => (("&#x" . $this->sandbox->ensureToStringAllowed($context["code"], 4, $this->source)) . ";")]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
<section class=\"area-icon-teaser-row\">
    <div class=\"row\">

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 11
            echo "
            ";
            // line 12
            $context["iconSelect"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", ("icon_" . $this->sandbox->ensureToStringAllowed($context["t"], 12, $this->source)), ["width" => 50, "store" =>             // line 14
(isset($context["iconStore"]) || array_key_exists("iconStore", $context) ? $context["iconStore"] : (function () { throw new RuntimeError('Variable "iconStore" does not exist.', 14, $this->source); })()), "reload" => true, "listConfig" => ["cls" => "fa-selection"]]);
            // line 18
            echo "
            <div class=\"col-sm-4 d-flex \">
                <div class=\"teaser-icon\">
                    <div class=\"icon\">
                        <div class=\"image\">
                            <i class=\"fa fa-";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["iconSelect"]) || array_key_exists("iconSelect", $context) ? $context["iconSelect"] : (function () { throw new RuntimeError('Variable "iconSelect" does not exist.', 23, $this->source); })()), "getData", [], "method", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\"></i>

                            ";
            // line 25
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 25, $this->source); })())) {
                // line 26
                echo "                                ";
                echo $this->sandbox->ensureToStringAllowed((isset($context["iconSelect"]) || array_key_exists("iconSelect", $context) ? $context["iconSelect"] : (function () { throw new RuntimeError('Variable "iconSelect" does not exist.', 26, $this->source); })()), 26, $this->source);
                echo "
                            ";
            }
            // line 28
            echo "                        </div>
                        <div class=\"info\">
                            <h3 class=\"title\">
                                ";
            // line 31
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", ("title_" . $this->sandbox->ensureToStringAllowed($context["t"], 31, $this->source)));
            echo "
                            </h3>

                            <p>
                                ";
            // line 35
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "textarea", ("text_" . $this->sandbox->ensureToStringAllowed($context["t"], 35, $this->source)));
            echo "
                            </p>

                            <div class=\"more\">
                                ";
            // line 39
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("link_" . $this->sandbox->ensureToStringAllowed($context["t"], 39, $this->source)), ["class" => "btn btn-outline-primary"]);
            // line 41
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
    </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "areas/icon-teaser-row/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 49,  117 => 41,  115 => 39,  108 => 35,  101 => 31,  96 => 28,  90 => 26,  88 => 25,  83 => 23,  76 => 18,  74 => 14,  73 => 12,  70 => 11,  66 => 10,  60 => 6,  53 => 4,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set icons = { \"asterisk\": \"f069\", \"plus\": \"f067\", \"euro-sign\": \"f153\", \"minus\": \"f068\", \"cloud\": \"f0c2\", \"envelope\": \"f0e0\", \"pencil\": \"f040\", \"glass\": \"f000\", \"music\": \"f001\", \"search\": \"f002\", \"heart\": \"f004\", \"star\": \"f005\", \"star-o\": \"f006\", \"user\": \"f007\", \"film\": \"f008\", \"th-large\": \"f009\", \"th\": \"f00a\", \"th-list\": \"f00b\", \"check\": \"f00c\", \"times\": \"f00d\", \"search-plus\": \"f00e\", \"search-minus\": \"f010\", \"power-off\": \"f011\", \"signal\": \"f012\", \"gear\": \"f013\", \"trash\": \"f1f8\", \"home\": \"f015\", \"file\": \"f15b\", \"clock-o\": \"f017\", \"road\": \"f018\", \"download\": \"f019\", \"cloud-download\": \"f0ed\", \"upload\": \"f093\", \"inbox\": \"f01c\", \"play-circle\": \"f144\", \"repeat\": \"f01e\", \"refresh\": \"f021\", \"list-alt\": \"f022\", \"lock\": \"f023\", \"flag\": \"f024\", \"headphones\": \"f025\", \"volume-off\": \"f026\", \"volume-down\": \"f027\", \"volume-up\": \"f028\", \"qrcode\": \"f029\", \"barcode\": \"f02a\", \"tag\": \"f02b\", \"tags\": \"f02c\", \"book\": \"f02d\", \"bookmark\": \"f097\", \"print\": \"f02f\", \"camera\": \"f030\", \"font\": \"f031\", \"bold\": \"f032\", \"italic\": \"f033\", \"text-height\": \"f034\", \"text-width\": \"f035\", \"align-left\": \"f036\", \"align-center\": \"f037\", \"align-right\": \"f038\", \"align-justify\": \"f039\", \"list\": \"f03a\", \"indent\": \"f03c\", \"video-camera\": \"f03d\", \"picture-o\": \"f03e\", \"map-marker\": \"f041\", \"adjust\": \"f042\", \"tint\": \"f043\", \"edit\": \"f044\", \"share\": \"f064\", \"arrows\": \"f047\", \"step-backward\": \"f048\", \"fast-backward\": \"f049\", \"backward\": \"f04a\", \"play\": \"f04b\", \"pause\": \"f04c\", \"stop\": \"f04d\", \"forward\": \"f04e\", \"fast-forward\": \"f050\", \"step-forward\": \"f051\", \"eject\": \"f052\", \"chevron-left\": \"f053\", \"chevron-right\": \"f054\", \"question\": \"f128\", \"info\": \"f129\", \"crop\": \"f125\", \"minus-circle\": \"f056\", \"check-circle\": \"f058\", \"ban\": \"f05e\", \"arrow-left\": \"f060\", \"arrow-right\": \"f061\", \"arrow-up\": \"f062\", \"arrow-down\": \"f063\", \"share-alt\": \"f1e0\", \"expand\": \"f065\", \"compress\": \"f066\", \"exclamation\": \"f12a\", \"gift\": \"f06b\", \"leaf\": \"f06c\", \"fire\": \"f06d\", \"eye\": \"f06e\", \"eye-slash\": \"f070\", \"warning\": \"f071\", \"plane\": \"f072\", \"calendar\": \"f073\", \"random\": \"f074\", \"comment\": \"f075\", \"magnet\": \"f076\", \"chevron-up\": \"f077\", \"chevron-down\": \"f078\", \"retweet\": \"f079\", \"shopping-cart\": \"f07a\", \"folder\": \"f07b\", \"folder-open\": \"f07c\", \"arrows-v\": \"f07d\", \"arrows-h\": \"f07e\", \"hdd-o\": \"f0a0\", \"bullhorn\": \"f0a1\", \"bell\": \"f0f3\", \"certificate\": \"f0a3\", \"thumbs-up\": \"f164\", \"thumbs-down\": \"f165\", \"hand-o-right\": \"f0a4\", \"hand-o-left\": \"f0a5\", \"hand-o-up\": \"f0a6\", \"hand-o-down\": \"f0a7\", \"arrow-circle-right\": \"f0a9\", \"arrow-circle-left\": \"f0a8\", \"arrow-circle-up\": \"f0aa\", \"arrow-circle-down\": \"f0ab\", \"globe\": \"f0ac\", \"wrench\": \"f0ad\", \"tasks\": \"f0ae\", \"filter\": \"f0b0\", \"briefcase\": \"f0b1\", \"paperclip\": \"f0c6\", \"link\": \"f0c1\", \"phone\": \"f095\", \"dollar-sign\": \"f155\", \"pound-sign\": \"f154\", \"sort\": \"f0dc\", \"\tsort-alpha-down\": \"f15d\", \"angle-down\": \"f107\", \"angle-up\": \"f106\", \"user\": \"f007\", \"user-times\": \"f235\", \"save\": \"f0c7\", \"credit-card\": \"f09d\", \"chart-line\": \"f201\", \"copyright\": \"f1f9\", \"compass\":\"f14e\" } %}
{% set iconStore = [] %}
{% for name, code in icons %}
    {% set iconStore = iconStore|merge([[name, '&#x' ~ code ~ ';']]) %}
{% endfor %}

<section class=\"area-icon-teaser-row\">
    <div class=\"row\">

        {% for t in 0..2 %}

            {% set iconSelect = pimcore_select('icon_' ~ t, {
                width: 50,
                store: iconStore,
                reload: true,
                listConfig: {'cls': 'fa-selection'}
            }) %}

            <div class=\"col-sm-4 d-flex \">
                <div class=\"teaser-icon\">
                    <div class=\"icon\">
                        <div class=\"image\">
                            <i class=\"fa fa-{{ iconSelect.getData() }}\"></i>

                            {% if editmode %}
                                {{ iconSelect|raw }}
                            {% endif %}
                        </div>
                        <div class=\"info\">
                            <h3 class=\"title\">
                                {{ pimcore_input('title_' ~ t) }}
                            </h3>

                            <p>
                                {{ pimcore_textarea('text_' ~ t) }}
                            </p>

                            <div class=\"more\">
                                {{ pimcore_link('link_' ~ t, {
                                    class: 'btn btn-outline-primary'
                                }) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        {% endfor %}

    </div>
</section>
", "areas/icon-teaser-row/view.html.twig", "/var/www/html/EcommerceProject/ecom/templates/areas/icon-teaser-row/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 3, "if" => 25);
        static $filters = array("merge" => 4, "escape" => 23, "raw" => 26);
        static $functions = array("range" => 10, "pimcore_select" => 12, "pimcore_input" => 31, "pimcore_textarea" => 35, "pimcore_link" => 39);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['merge', 'escape', 'raw'],
                ['range', 'pimcore_select', 'pimcore_input', 'pimcore_textarea', 'pimcore_link']
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
