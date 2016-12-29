<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_4c35d82a213fbf23456dd6a98a3f07bd59dcf1bae9c07f950dbb5fcaef91d506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AppBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d80f6eb1c212d3f39e3b729c2bd49eb4ae0b27d84fb41ba8550f6232b8e904b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80f6eb1c212d3f39e3b729c2bd49eb4ae0b27d84fb41ba8550f6232b8e904b0->enter($__internal_d80f6eb1c212d3f39e3b729c2bd49eb4ae0b27d84fb41ba8550f6232b8e904b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d80f6eb1c212d3f39e3b729c2bd49eb4ae0b27d84fb41ba8550f6232b8e904b0->leave($__internal_d80f6eb1c212d3f39e3b729c2bd49eb4ae0b27d84fb41ba8550f6232b8e904b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d4dd03de50b497b18165595fef3ce0ca4df2fbc57eec4a78580241a1edd09f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4dd03de50b497b18165595fef3ce0ca4df2fbc57eec4a78580241a1edd09f3->enter($__internal_6d4dd03de50b497b18165595fef3ce0ca4df2fbc57eec4a78580241a1edd09f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6d4dd03de50b497b18165595fef3ce0ca4df2fbc57eec4a78580241a1edd09f3->leave($__internal_6d4dd03de50b497b18165595fef3ce0ca4df2fbc57eec4a78580241a1edd09f3_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_881986552eb759449d28d0d57fc89f6af0b2ef7ac9c174fce6e1cd3d6ca4e936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881986552eb759449d28d0d57fc89f6af0b2ef7ac9c174fce6e1cd3d6ca4e936->enter($__internal_881986552eb759449d28d0d57fc89f6af0b2ef7ac9c174fce6e1cd3d6ca4e936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_881986552eb759449d28d0d57fc89f6af0b2ef7ac9c174fce6e1cd3d6ca4e936->leave($__internal_881986552eb759449d28d0d57fc89f6af0b2ef7ac9c174fce6e1cd3d6ca4e936_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_63c003f02f2cce11c5fd0488c03237f5ed4034ca9bf891b53921e9ce429977c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c003f02f2cce11c5fd0488c03237f5ed4034ca9bf891b53921e9ce429977c0->enter($__internal_63c003f02f2cce11c5fd0488c03237f5ed4034ca9bf891b53921e9ce429977c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->displayBlock('content_header', $context, $blocks);
        // line 20
        echo "
    <div class=\"block\">
        ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "
        <p>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nelmio_api_doc_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("api.doc.link", array(), "AppBundle"), "html", null, true);
        echo "</a>
        </p>
    </div>

    ";
        // line 29
        if (array_key_exists("code", $context)) {
            // line 30
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 32
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_63c003f02f2cce11c5fd0488c03237f5ed4034ca9bf891b53921e9ce429977c0->leave($__internal_63c003f02f2cce11c5fd0488c03237f5ed4034ca9bf891b53921e9ce429977c0_prof);

    }

    // line 11
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_ec7ca83950da29448fde2e1338237f537129a339532e79943524bac30a667066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7ca83950da29448fde2e1338237f537129a339532e79943524bac30a667066->enter($__internal_ec7ca83950da29448fde2e1338237f537129a339532e79943524bac30a667066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 12
        echo "        <ul id=\"menu\">
            ";
        // line 13
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 16
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_ec7ca83950da29448fde2e1338237f537129a339532e79943524bac30a667066->leave($__internal_ec7ca83950da29448fde2e1338237f537129a339532e79943524bac30a667066_prof);

    }

    // line 13
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_c7222d1dffba83663c8e46d6184cbaaa042a28005901f6e2fa8ea90ef099dd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7222d1dffba83663c8e46d6184cbaaa042a28005901f6e2fa8ea90ef099dd9c->enter($__internal_c7222d1dffba83663c8e46d6184cbaaa042a28005901f6e2fa8ea90ef099dd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 14
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_c7222d1dffba83663c8e46d6184cbaaa042a28005901f6e2fa8ea90ef099dd9c->leave($__internal_c7222d1dffba83663c8e46d6184cbaaa042a28005901f6e2fa8ea90ef099dd9c_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_03aea23d8e3b563795b7af15b9d889bc7b87da2d19b3879e2ca54ac60364a3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03aea23d8e3b563795b7af15b9d889bc7b87da2d19b3879e2ca54ac60364a3be->enter($__internal_03aea23d8e3b563795b7af15b9d889bc7b87da2d19b3879e2ca54ac60364a3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_03aea23d8e3b563795b7af15b9d889bc7b87da2d19b3879e2ca54ac60364a3be->leave($__internal_03aea23d8e3b563795b7af15b9d889bc7b87da2d19b3879e2ca54ac60364a3be_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 22,  143 => 14,  137 => 13,  127 => 16,  125 => 13,  122 => 12,  116 => 11,  105 => 32,  101 => 30,  99 => 29,  90 => 25,  86 => 23,  84 => 22,  80 => 20,  77 => 11,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"icon\" sizes=\"16x16\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/app/css/demo.css') }}\" />
{% endblock %}

{% block title 'Demo Bundle' %}

{% block body %}
    {% block content_header %}
        <ul id=\"menu\">
            {% block content_header_more %}
                <li><a href=\"{{ path('_demo') }}\">Demo Home</a></li>
            {% endblock %}
        </ul>

        <div style=\"clear: both\"></div>
    {% endblock %}

    <div class=\"block\">
        {% block content %}{% endblock %}

        <p>
            <a href=\"{{ path('nelmio_api_doc_index') }}\">{{ 'api.doc.link'|trans({}, 'AppBundle') }}</a>
        </p>
    </div>

    {% if code is defined %}
        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">{{ code|raw }}</div>
        </div>
    {% endif %}
{% endblock %}
", "AppBundle::layout.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/layout.html.twig");
    }
}
