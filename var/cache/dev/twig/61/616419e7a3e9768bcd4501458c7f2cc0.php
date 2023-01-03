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

/* @Httplug/style/httplug.css.twig */
class __TwigTemplate_37f6749c9092fc89b809b97b566dfe16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/style/httplug.css.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/style/httplug.css.twig"));

        // line 1
        echo ".httplug-push-right {
    float: right;
}

.httplug-plugin-name {
    font-size: 130%;
    font-weight: bold;
    text-align: center;
}

.httplug-hidden {
    display: none;
}

.httplug-toggle {
    cursor: pointer;
}

.httplug-center {
    text-align: center;
}

/**
 * Toolbar
 */
.httplug-toolbar {
    display: flex;
    justify-content: space-between;
}

.httplug-toolbar>*:not(:last-child) {
    margin-right:5px;
}

.httplug-toolbar .httplug-copy-as-curl {
    flex: 1;
}

.httplug-copy-as-curl {
    font-size: 0; /*hide line return spacings*/
    display: flex;
}

.httplug-copy-as-curl>input {
    padding: .5em .75em;
    border-radius: 2px 0px 0px 2px;
    border: 0;
    line-height: inherit;
    background-color: var(--metric-value-background, #eee);
    opacity: 1;
    font-size: 14px;
    flex: 1;
}

.httplug-copy-as-curl>button {
    font-size: 14px;
    border-radius: 0px 2px 2px 0px;
}

/**
 * Message
 */
.httplug-message {
    box-sizing: border-box;
    padding: 5px;
    flex: 1;
    margin: 5px;
    overflow-x: auto;
    white-space: nowrap;
}

.httplug-messages {
    clear: both;
    display: flex;
}

/**
 * Stack
 */
.httplug-stack>.httplug-stack {
    margin-left: 2.5em;
}

/**
 * Stack header
 */
.httplug-stack-header {
    display: flex;
    justify-content: space-between;

    background: var(--table-background, #FFF);
    border: 1px solid #E0E0E0;
    box-shadow: 0px 0px 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.httplug-stack-failed {
    color:#B0413E;
}

.httplug-stack-success {
    color: #4F805D;
}

.httplug-stack-header .httplug-stack-header-target {
    flex: 1;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    background: var(--table-background, white);
    color: var(--color-text, black);
    font-size: 0; /*hide line return spacings*/
}

.httplug-scheme-http {
    display: none;
}

.httplug-scheme-https {
    color: green;
}

.httplug-target, .httplug-scheme, .httplug-port {
    font-weight: normal;
}

.httplug-target, .httplug-host, .httplug-scheme, .httplug-port {
    font-size: 12px;
}

.httplug-duration {
    min-width: 6ch;
    text-align:center;
}

/**
 * HTTP method colors from swagger-ui.
 */
.httplug-method.label {
    color: black;
    width: 9ch;
    text-align: center;
}

.httplug-method-post.label {
    background: #49cc90;
}

.httplug-method-get.label {
    background: #61affe;
}

.httplug-method-put.label {
    background: #fca130;
}

.httplug-method-delete.label {
    background: #f93e3e;
}

.httplug-method-head.label {
    background: #9012fe;
    color: white;
}

.httplug-method-patch.label {
    background: #50e3c2;
}

.httplug-method-options.label {
    background: #0d5aa7;
    color: white;
}

.httplug-method-connect.label {
    background: #ebebeb;
}

.httplug-method-trace.label {
    background: #ebebeb;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Httplug/style/httplug.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".httplug-push-right {
    float: right;
}

.httplug-plugin-name {
    font-size: 130%;
    font-weight: bold;
    text-align: center;
}

.httplug-hidden {
    display: none;
}

.httplug-toggle {
    cursor: pointer;
}

.httplug-center {
    text-align: center;
}

/**
 * Toolbar
 */
.httplug-toolbar {
    display: flex;
    justify-content: space-between;
}

.httplug-toolbar>*:not(:last-child) {
    margin-right:5px;
}

.httplug-toolbar .httplug-copy-as-curl {
    flex: 1;
}

.httplug-copy-as-curl {
    font-size: 0; /*hide line return spacings*/
    display: flex;
}

.httplug-copy-as-curl>input {
    padding: .5em .75em;
    border-radius: 2px 0px 0px 2px;
    border: 0;
    line-height: inherit;
    background-color: var(--metric-value-background, #eee);
    opacity: 1;
    font-size: 14px;
    flex: 1;
}

.httplug-copy-as-curl>button {
    font-size: 14px;
    border-radius: 0px 2px 2px 0px;
}

/**
 * Message
 */
.httplug-message {
    box-sizing: border-box;
    padding: 5px;
    flex: 1;
    margin: 5px;
    overflow-x: auto;
    white-space: nowrap;
}

.httplug-messages {
    clear: both;
    display: flex;
}

/**
 * Stack
 */
.httplug-stack>.httplug-stack {
    margin-left: 2.5em;
}

/**
 * Stack header
 */
.httplug-stack-header {
    display: flex;
    justify-content: space-between;

    background: var(--table-background, #FFF);
    border: 1px solid #E0E0E0;
    box-shadow: 0px 0px 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.httplug-stack-failed {
    color:#B0413E;
}

.httplug-stack-success {
    color: #4F805D;
}

.httplug-stack-header .httplug-stack-header-target {
    flex: 1;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    background: var(--table-background, white);
    color: var(--color-text, black);
    font-size: 0; /*hide line return spacings*/
}

.httplug-scheme-http {
    display: none;
}

.httplug-scheme-https {
    color: green;
}

.httplug-target, .httplug-scheme, .httplug-port {
    font-weight: normal;
}

.httplug-target, .httplug-host, .httplug-scheme, .httplug-port {
    font-size: 12px;
}

.httplug-duration {
    min-width: 6ch;
    text-align:center;
}

/**
 * HTTP method colors from swagger-ui.
 */
.httplug-method.label {
    color: black;
    width: 9ch;
    text-align: center;
}

.httplug-method-post.label {
    background: #49cc90;
}

.httplug-method-get.label {
    background: #61affe;
}

.httplug-method-put.label {
    background: #fca130;
}

.httplug-method-delete.label {
    background: #f93e3e;
}

.httplug-method-head.label {
    background: #9012fe;
    color: white;
}

.httplug-method-patch.label {
    background: #50e3c2;
}

.httplug-method-options.label {
    background: #0d5aa7;
    color: white;
}

.httplug-method-connect.label {
    background: #ebebeb;
}

.httplug-method-trace.label {
    background: #ebebeb;
}
", "@Httplug/style/httplug.css.twig", "/var/www/html/EcommerceProject/ecom/vendor/php-http/httplug-bundle/src/Resources/views/style/httplug.css.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
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
