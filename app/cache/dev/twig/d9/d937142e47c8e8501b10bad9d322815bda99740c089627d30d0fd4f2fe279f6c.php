<?php

/* @App/layout.html.twig */
class __TwigTemplate_cc9e9ca81ef85dc69e0920614ba4f6107ee8bb5c32329a41477dc35bd05f8987 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@App/layout.html.twig", 1);
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
        $__internal_766b05595d5ec9475130866fcdad2c6159d325bede9b78620435c4602a4b3919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766b05595d5ec9475130866fcdad2c6159d325bede9b78620435c4602a4b3919->enter($__internal_766b05595d5ec9475130866fcdad2c6159d325bede9b78620435c4602a4b3919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_766b05595d5ec9475130866fcdad2c6159d325bede9b78620435c4602a4b3919->leave($__internal_766b05595d5ec9475130866fcdad2c6159d325bede9b78620435c4602a4b3919_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9334a2c6abbd6114cba0cbbfff1d397c2309170e135d7cc553ee92c04cc96b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9334a2c6abbd6114cba0cbbfff1d397c2309170e135d7cc553ee92c04cc96b56->enter($__internal_9334a2c6abbd6114cba0cbbfff1d397c2309170e135d7cc553ee92c04cc96b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9334a2c6abbd6114cba0cbbfff1d397c2309170e135d7cc553ee92c04cc96b56->leave($__internal_9334a2c6abbd6114cba0cbbfff1d397c2309170e135d7cc553ee92c04cc96b56_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_15724514e83329671f229b9e76911db87b0ffbadf43374daa224b1683b1b762d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15724514e83329671f229b9e76911db87b0ffbadf43374daa224b1683b1b762d->enter($__internal_15724514e83329671f229b9e76911db87b0ffbadf43374daa224b1683b1b762d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_15724514e83329671f229b9e76911db87b0ffbadf43374daa224b1683b1b762d->leave($__internal_15724514e83329671f229b9e76911db87b0ffbadf43374daa224b1683b1b762d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dad273a89768b2614c1bd2c422a8fc64478fef9a955cb3c6017ab34342b476cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad273a89768b2614c1bd2c422a8fc64478fef9a955cb3c6017ab34342b476cd->enter($__internal_dad273a89768b2614c1bd2c422a8fc64478fef9a955cb3c6017ab34342b476cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dad273a89768b2614c1bd2c422a8fc64478fef9a955cb3c6017ab34342b476cd->leave($__internal_dad273a89768b2614c1bd2c422a8fc64478fef9a955cb3c6017ab34342b476cd_prof);

    }

    // line 11
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_7f52ff886501686800c53f3b5b434e1f26f5f91b1ff8ae8f313e9c99a8f3d71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f52ff886501686800c53f3b5b434e1f26f5f91b1ff8ae8f313e9c99a8f3d71d->enter($__internal_7f52ff886501686800c53f3b5b434e1f26f5f91b1ff8ae8f313e9c99a8f3d71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 12
        echo "        <ul id=\"menu\">
            ";
        // line 13
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 16
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_7f52ff886501686800c53f3b5b434e1f26f5f91b1ff8ae8f313e9c99a8f3d71d->leave($__internal_7f52ff886501686800c53f3b5b434e1f26f5f91b1ff8ae8f313e9c99a8f3d71d_prof);

    }

    // line 13
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_cb8a76d54477e95420905c2d448985c3e93f841ac0b91e0f2a0ed21ab7ba259f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8a76d54477e95420905c2d448985c3e93f841ac0b91e0f2a0ed21ab7ba259f->enter($__internal_cb8a76d54477e95420905c2d448985c3e93f841ac0b91e0f2a0ed21ab7ba259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 14
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_cb8a76d54477e95420905c2d448985c3e93f841ac0b91e0f2a0ed21ab7ba259f->leave($__internal_cb8a76d54477e95420905c2d448985c3e93f841ac0b91e0f2a0ed21ab7ba259f_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_266aa5ea65740501e48f7e713e236b314c1b0c9c8cc40bbfa004fe8a0331b808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266aa5ea65740501e48f7e713e236b314c1b0c9c8cc40bbfa004fe8a0331b808->enter($__internal_266aa5ea65740501e48f7e713e236b314c1b0c9c8cc40bbfa004fe8a0331b808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_266aa5ea65740501e48f7e713e236b314c1b0c9c8cc40bbfa004fe8a0331b808->leave($__internal_266aa5ea65740501e48f7e713e236b314c1b0c9c8cc40bbfa004fe8a0331b808_prof);

    }

    public function getTemplateName()
    {
        return "@App/layout.html.twig";
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
", "@App/layout.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\layout.html.twig");
    }
}
