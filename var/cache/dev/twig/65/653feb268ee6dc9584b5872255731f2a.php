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

/* account/index.html.twig */
class __TwigTemplate_9aa76c725796963a5dbe8e0dd0183485 extends Template
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
        // line 3
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "account/index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<div class=\"pb-5 bg-light\">
    <div class=\"container\">

        <h1 class=\"display-4\">Hello ";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, true, 10), "email", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</h1>

        <div class=\"row\">

            <div class=\"col-12 col-md-6\">

                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.customer-data"), "html", null, true);
        echo "</strong>
                    </div>

                    <div class=\"card-body\">

                        <div class=\"row\">

                            <dl class=\"item-property col-6\">
                                <dt>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.firstname"), "html", null, true);
        echo "</dt>
                                <dd>";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, true, 27), "firstname", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "</dd>
                            </dl>

                            <dl class=\"item-property col-6\">
                                <dt>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.lastname"), "html", null, true);
        echo "</dt>
                                <dd>";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, true, 32), "lastname", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "</dd>
                            </dl>

                            <dl class=\"item-property col-12\">
                                <dt>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.email"), "html", null, true);
        echo "</dt>
                                <dd>";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, true, 37), "email", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "</dd>
                            </dl>

                            ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, true, 40), "company", [], "any", false, false, true, 40)) {
            // line 41
            echo "                                <dl class=\"item-property col-6\">
                                    <dt>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.company"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, true, 43), "company", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "</dd>
                                </dl>
                            ";
        }
        // line 46
        echo "
                            <dl class=\"item-property col-12\">
                                <dt>";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.street"), "html", null, true);
        echo "</dt>
                                <dd>";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, true, 49), "street", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</dd>
                            </dl>

                            <dl class=\"item-property col-6\">
                                <dt>";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.zip"), "html", null, true);
        echo "</dt>
                                <dd>";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, true, 54), "zip", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "</dd>
                            </dl>

                            <dl class=\"item-property col-6\">
                                <dt>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.city"), "html", null, true);
        echo "</dt>
                                <dd>";
        // line 59
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, true, 59), "city", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "</dd>
                            </dl>

                            <dl class=\"item-property col-6\">
                                <dt>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.country"), "html", null, true);
        echo "</dt>
                                <dd>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getFilter('country')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, true, 64), "countryCode", [], "any", false, false, true, 64), 64, $this->source)), "html", null, true);
        echo "</dd>
                            </dl>

                        </div>

                        <div>
                            ";
        // line 70
        $this->loadTemplate("account/partial/social_buttons.html.twig", "account/index.html.twig", 70)->display(twig_array_merge($context, ["connect" => true, "blacklist" => (isset($context["blacklist"]) || array_key_exists("blacklist", $context) ? $context["blacklist"] : (function () { throw new RuntimeError('Variable "blacklist" does not exist.', 70, $this->source); })()), "route" => "app_auth_oauth_connect"]));
        // line 71
        echo "                        </div>
                    </div>

                </div>

                <div class=\"card mt-5\">
                    <div class=\"card-header\">
                        <strong>";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.marketing"), "html", null, true);
        echo "</strong>
                    </div>

                    <div class=\"card-body\">
                        <form name=\"marketing_form\" method=\"post\" action=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account-update-marketing-permission");
        echo "\">
                            <div class=\"form-group\">
                                <div class=\"custom-control custom-checkbox\">
                                    <input type=\"checkbox\" id=\"marketing_form_newsletter\" name=\"newsletter\" class=\"custom-control-input\" value=\"1\" ";
        // line 85
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, true, 85), "newsletter", [], "any", false, false, true, 85), "consent", [], "any", false, false, true, 85)) ? ("CHECKED=\"CHECKED\"") : (""));
        echo ">
                                    <label class=\"checkbox-custom custom-control-label\" for=\"marketing_form_newsletter\">";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.newsletter"), "html", null, true);
        echo "</label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"custom-control custom-checkbox\">
                                    <input type=\"checkbox\" id=\"marketing_form_profiling\" name=\"profiling\" class=\"custom-control-input\" value=\"1\" ";
        // line 91
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, true, 91), "profiling", [], "any", false, false, true, 91), "consent", [], "any", false, false, true, 91)) ? ("CHECKED=\"CHECKED\"") : (""));
        echo ">
                                    <label class=\"checkbox-custom custom-control-label\" for=\"marketing_form_profiling\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.profiling"), "html", null, true);
        echo "</label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" id=\"marketing_form__submit\" class=\"btn btn-sm btn-block btn-success btn\">
                                    ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.update"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </form>
                    </div>
                </div>




            </div>

            ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, (isset($context["orderList"]) || array_key_exists("orderList", $context) ? $context["orderList"] : (function () { throw new RuntimeError('Variable "orderList" does not exist.', 109, $this->source); })()), "count", [], "any", false, false, true, 109) > 0)) {
            // line 110
            echo "
                <div class=\"col-12 col-md-6\">

                    <div class=\"card\">
                        <div class=\"card-header\">
                            <strong>";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.orders"), "html", null, true);
            echo "</strong>
                        </div>

                        <div class=\"card-body\">

                            ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orderList"]) || array_key_exists("orderList", $context) ? $context["orderList"] : (function () { throw new RuntimeError('Variable "orderList" does not exist.', 120, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 121
                echo "
                                ";
                // line 122
                $context["order"] = twig_get_attribute($this->env, $this->source, $context["orderItem"], "reference", [], "any", false, false, true, 122);
                // line 123
                echo "



                                <div class=\"media mb-4\">
                                    <div class=\"mr-3\"><i class=\"fa fa-shopping-cart\"></i></div>
                                    <div class=\"media-body\">
                                        <small class=\"text-muted\">
                                            ";
                // line 131
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 131, $this->source); })()), "orderdate", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "
                                        </small>

                                        <h6> ";
                // line 134
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.order"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 134, $this->source); })()), "ordernumber", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                echo " </h6>

                                        <dl class=\"item-property\">
                                            <dt>";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.orderItems"), "html", null, true);
                echo "</dt>
                                            <dd>
                                                ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 139, $this->source); })()), "items", [], "any", false, false, true, 139));
                foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                    // line 140
                    echo "                                                    <div>
                                                        ";
                    // line 141
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productNumber", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
                    echo ")
                                                        <span class=\"float-right\">";
                    // line 142
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, true, 142), 142, $this->source)), "html", null, true);
                    echo "</span>
                                                    </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "                                            </dd>
                                        </dl>

                                        ";
                // line 148
                if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 148, $this->source); })()), "priceModifications", [], "any", false, false, true, 148)) {
                    // line 149
                    echo "                                            <dl class=\"item-property\">
                                                <dt>";
                    // line 150
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.priceModifications"), "html", null, true);
                    echo "</dt>
                                                <dd>
                                                    ";
                    // line 152
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 152, $this->source); })()), "priceModifications", [], "any", false, false, true, 152));
                    foreach ($context['_seq'] as $context["_key"] => $context["priceModification"]) {
                        // line 153
                        echo "                                                        <div>
                                                            ";
                        // line 154
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["priceModification"], "name", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
                        echo "
                                                            <span class=\"float-right\">";
                        // line 155
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["priceModification"], "amount", [], "any", false, false, true, 155), 155, $this->source)), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceModification'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "                                                </dd>
                                            </dl>
                                        ";
                }
                // line 161
                echo "
                                        ";
                // line 162
                if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 162, $this->source); })()), "giftItems", [], "any", false, false, true, 162)) {
                    // line 163
                    echo "                                            <dl class=\"item-property\">
                                                <dt>";
                    // line 164
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.giftItems"), "html", null, true);
                    echo "</dt>
                                                <dd>
                                                    ";
                    // line 166
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 166, $this->source); })()), "giftItems", [], "any", false, false, true, 166));
                    foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                        // line 167
                        echo "                                                        <div>
                                                            ";
                        // line 168
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
                        echo " (";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productNumber", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
                        echo ")
                                                        </div>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo "                                                </dd>
                                            </dl>
                                        ";
                }
                // line 174
                echo "
                                        <dl class=\"item-property\">
                                            <dd>
                                                <strong>
                                                    ";
                // line 178
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.totalPrice"), "html", null, true);
                echo "
                                                    <span class=\"float-right\">";
                // line 179
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 179, $this->source); })()), "totalPrice", [], "any", false, false, true, 179), 179, $this->source)), "html", null, true);
                echo "</span>
                                                </strong>
                                            </dd>
                                        </dl>



                                    </div>
                                </div>

                                <hr/>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "

                        </div>
                    </div>
                </div>

            ";
        }
        // line 199
        echo "        </div>



    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 199,  440 => 192,  421 => 179,  417 => 178,  411 => 174,  406 => 171,  395 => 168,  392 => 167,  388 => 166,  383 => 164,  380 => 163,  378 => 162,  375 => 161,  370 => 158,  361 => 155,  357 => 154,  354 => 153,  350 => 152,  345 => 150,  342 => 149,  340 => 148,  335 => 145,  326 => 142,  320 => 141,  317 => 140,  313 => 139,  308 => 137,  300 => 134,  294 => 131,  284 => 123,  282 => 122,  279 => 121,  275 => 120,  267 => 115,  260 => 110,  258 => 109,  243 => 97,  235 => 92,  231 => 91,  223 => 86,  219 => 85,  213 => 82,  206 => 78,  197 => 71,  195 => 70,  186 => 64,  182 => 63,  175 => 59,  171 => 58,  164 => 54,  160 => 53,  153 => 49,  149 => 48,  145 => 46,  139 => 43,  135 => 42,  132 => 41,  130 => 40,  124 => 37,  120 => 36,  113 => 32,  109 => 31,  102 => 27,  98 => 26,  87 => 18,  76 => 10,  70 => 6,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var order \\Pimcore\\Model\\DataObject\\OnlineShopOrder #}

{% extends 'layouts/layout.html.twig' %}

{% block content %}

<div class=\"pb-5 bg-light\">
    <div class=\"container\">

        <h1 class=\"display-4\">Hello {{ app.user.email }}</h1>

        <div class=\"row\">

            <div class=\"col-12 col-md-6\">

                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong>{{ 'general.customer-data' | trans }}</strong>
                    </div>

                    <div class=\"card-body\">

                        <div class=\"row\">

                            <dl class=\"item-property col-6\">
                                <dt>{{ 'general.firstname' | trans }}</dt>
                                <dd>{{ app.user.firstname }}</dd>
                            </dl>

                            <dl class=\"item-property col-6\">
                                <dt>{{ 'general.lastname' | trans }}</dt>
                                <dd>{{ app.user.lastname }}</dd>
                            </dl>

                            <dl class=\"item-property col-12\">
                                <dt>{{ 'general.email' | trans }}</dt>
                                <dd>{{ app.user.email }}</dd>
                            </dl>

                            {% if app.user.company %}
                                <dl class=\"item-property col-6\">
                                    <dt>{{ 'general.company' | trans }}</dt>
                                    <dd>{{ app.user.company }}</dd>
                                </dl>
                            {% endif %}

                            <dl class=\"item-property col-12\">
                                <dt>{{ 'general.street' | trans }}</dt>
                                <dd>{{ app.user.street }}</dd>
                            </dl>

                            <dl class=\"item-property col-6\">
                                <dt>{{ 'general.zip' | trans }}</dt>
                                <dd>{{ app.user.zip }}</dd>
                            </dl>

                            <dl class=\"item-property col-6\">
                                <dt>{{ 'general.city' | trans }}</dt>
                                <dd>{{ app.user.city }}</dd>
                            </dl>

                            <dl class=\"item-property col-6\">
                                <dt>{{ 'general.country' | trans }}</dt>
                                <dd>{{ app.user.countryCode | country }}</dd>
                            </dl>

                        </div>

                        <div>
                            {% include 'account/partial/social_buttons.html.twig' with {'connect': true, 'blacklist': blacklist, 'route': 'app_auth_oauth_connect'} %}
                        </div>
                    </div>

                </div>

                <div class=\"card mt-5\">
                    <div class=\"card-header\">
                        <strong>{{ 'general.marketing' | trans }}</strong>
                    </div>

                    <div class=\"card-body\">
                        <form name=\"marketing_form\" method=\"post\" action=\"{{ path('account-update-marketing-permission') }}\">
                            <div class=\"form-group\">
                                <div class=\"custom-control custom-checkbox\">
                                    <input type=\"checkbox\" id=\"marketing_form_newsletter\" name=\"newsletter\" class=\"custom-control-input\" value=\"1\" {{ app.user.newsletter.consent ? 'CHECKED=\"CHECKED\"' : '' }}>
                                    <label class=\"checkbox-custom custom-control-label\" for=\"marketing_form_newsletter\">{{ 'general.newsletter' | trans }}</label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"custom-control custom-checkbox\">
                                    <input type=\"checkbox\" id=\"marketing_form_profiling\" name=\"profiling\" class=\"custom-control-input\" value=\"1\" {{ app.user.profiling.consent ? 'CHECKED=\"CHECKED\"' : '' }}>
                                    <label class=\"checkbox-custom custom-control-label\" for=\"marketing_form_profiling\">{{ 'general.profiling' | trans }}</label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" id=\"marketing_form__submit\" class=\"btn btn-sm btn-block btn-success btn\">
                                    {{ 'general.update' | trans }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>




            </div>

            {% if orderList.count > 0 %}

                <div class=\"col-12 col-md-6\">

                    <div class=\"card\">
                        <div class=\"card-header\">
                            <strong>{{ 'general.orders' | trans }}</strong>
                        </div>

                        <div class=\"card-body\">

                            {% for orderItem in orderList %}

                                {% set order = orderItem.reference %}




                                <div class=\"media mb-4\">
                                    <div class=\"mr-3\"><i class=\"fa fa-shopping-cart\"></i></div>
                                    <div class=\"media-body\">
                                        <small class=\"text-muted\">
                                            {{ order.orderdate }}
                                        </small>

                                        <h6> {{ 'general.order' | trans }} {{ order.ordernumber }} </h6>

                                        <dl class=\"item-property\">
                                            <dt>{{ 'general.orderItems' | trans }}</dt>
                                            <dd>
                                                {% for orderItem in order.items %}
                                                    <div>
                                                        {{ orderItem.productName }} ({{ orderItem.productNumber }})
                                                        <span class=\"float-right\">{{ orderItem.totalPrice | currency }}</span>
                                                    </div>
                                                {% endfor %}
                                            </dd>
                                        </dl>

                                        {% if order.priceModifications %}
                                            <dl class=\"item-property\">
                                                <dt>{{ 'general.priceModifications' | trans }}</dt>
                                                <dd>
                                                    {% for priceModification in order.priceModifications %}
                                                        <div>
                                                            {{ priceModification.name }}
                                                            <span class=\"float-right\">{{ priceModification.amount | currency }}</span>
                                                        </div>
                                                    {% endfor %}
                                                </dd>
                                            </dl>
                                        {% endif %}

                                        {% if order.giftItems %}
                                            <dl class=\"item-property\">
                                                <dt>{{ 'general.giftItems' | trans }}</dt>
                                                <dd>
                                                    {% for orderItem in order.giftItems %}
                                                        <div>
                                                            {{ orderItem.productName }} ({{ orderItem.productNumber }})
                                                        </div>
                                                    {% endfor %}
                                                </dd>
                                            </dl>
                                        {% endif %}

                                        <dl class=\"item-property\">
                                            <dd>
                                                <strong>
                                                    {{ 'general.totalPrice' | trans }}
                                                    <span class=\"float-right\">{{ order.totalPrice | currency }}</span>
                                                </strong>
                                            </dd>
                                        </dl>



                                    </div>
                                </div>

                                <hr/>

                            {% endfor %}


                        </div>
                    </div>
                </div>

            {% endif %}
        </div>



    </div>
</div>

{% endblock %}

", "account/index.html.twig", "/var/www/html/EcommerceProject/ecom/templates/account/index.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40, "include" => 70, "for" => 120, "set" => 122);
        static $filters = array("escape" => 10, "trans" => 18, "country" => 64, "currency" => 142);
        static $functions = array("path" => 82);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include', 'for', 'set'],
                ['escape', 'trans', 'country', 'currency'],
                ['path']
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
