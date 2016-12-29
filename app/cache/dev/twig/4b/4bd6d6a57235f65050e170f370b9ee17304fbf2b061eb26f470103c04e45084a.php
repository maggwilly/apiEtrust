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
        $__internal_2b40a441cc7b68bffcd020e9af53d914cd907de47425e029898a1e887ebc7751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b40a441cc7b68bffcd020e9af53d914cd907de47425e029898a1e887ebc7751->enter($__internal_2b40a441cc7b68bffcd020e9af53d914cd907de47425e029898a1e887ebc7751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b40a441cc7b68bffcd020e9af53d914cd907de47425e029898a1e887ebc7751->leave($__internal_2b40a441cc7b68bffcd020e9af53d914cd907de47425e029898a1e887ebc7751_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e1b6e0b77f872b415e9342e4098e25087a06d181c50e91e3b68b78d8e7afa0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1b6e0b77f872b415e9342e4098e25087a06d181c50e91e3b68b78d8e7afa0a->enter($__internal_6e1b6e0b77f872b415e9342e4098e25087a06d181c50e91e3b68b78d8e7afa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6e1b6e0b77f872b415e9342e4098e25087a06d181c50e91e3b68b78d8e7afa0a->leave($__internal_6e1b6e0b77f872b415e9342e4098e25087a06d181c50e91e3b68b78d8e7afa0a_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_897fd8f678cbae01a0d30a19169f988589381c76a8abf01bb1e6d847bc062cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897fd8f678cbae01a0d30a19169f988589381c76a8abf01bb1e6d847bc062cfd->enter($__internal_897fd8f678cbae01a0d30a19169f988589381c76a8abf01bb1e6d847bc062cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_897fd8f678cbae01a0d30a19169f988589381c76a8abf01bb1e6d847bc062cfd->leave($__internal_897fd8f678cbae01a0d30a19169f988589381c76a8abf01bb1e6d847bc062cfd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_809ad4215db82fff7d37abfcfbe26537dd7a73e93a4c0c7491f398b456d28b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809ad4215db82fff7d37abfcfbe26537dd7a73e93a4c0c7491f398b456d28b7a->enter($__internal_809ad4215db82fff7d37abfcfbe26537dd7a73e93a4c0c7491f398b456d28b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_809ad4215db82fff7d37abfcfbe26537dd7a73e93a4c0c7491f398b456d28b7a->leave($__internal_809ad4215db82fff7d37abfcfbe26537dd7a73e93a4c0c7491f398b456d28b7a_prof);

    }

    // line 11
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_1ee9b2970dd53b420bdf46dabbddc7ec97ae5182173df601d6745c34eb00e4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee9b2970dd53b420bdf46dabbddc7ec97ae5182173df601d6745c34eb00e4e5->enter($__internal_1ee9b2970dd53b420bdf46dabbddc7ec97ae5182173df601d6745c34eb00e4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 12
        echo "        <ul id=\"menu\">
            ";
        // line 13
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 16
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_1ee9b2970dd53b420bdf46dabbddc7ec97ae5182173df601d6745c34eb00e4e5->leave($__internal_1ee9b2970dd53b420bdf46dabbddc7ec97ae5182173df601d6745c34eb00e4e5_prof);

    }

    // line 13
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_8d7c6e03f71f0e0dec1d0426a2aa48aca30f68eb251d2a92c8ac61121e6d3e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7c6e03f71f0e0dec1d0426a2aa48aca30f68eb251d2a92c8ac61121e6d3e1e->enter($__internal_8d7c6e03f71f0e0dec1d0426a2aa48aca30f68eb251d2a92c8ac61121e6d3e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 14
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_8d7c6e03f71f0e0dec1d0426a2aa48aca30f68eb251d2a92c8ac61121e6d3e1e->leave($__internal_8d7c6e03f71f0e0dec1d0426a2aa48aca30f68eb251d2a92c8ac61121e6d3e1e_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_87a84c50091476bfc14322d632bb968bdc55b620c850cc49f5062a00e0c8f0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a84c50091476bfc14322d632bb968bdc55b620c850cc49f5062a00e0c8f0c5->enter($__internal_87a84c50091476bfc14322d632bb968bdc55b620c850cc49f5062a00e0c8f0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_87a84c50091476bfc14322d632bb968bdc55b620c850cc49f5062a00e0c8f0c5->leave($__internal_87a84c50091476bfc14322d632bb968bdc55b620c850cc49f5062a00e0c8f0c5_prof);

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
