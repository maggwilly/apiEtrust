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
        $__internal_28130ef4649b81b3b355e5bf6d612a6ce9e6f7bb196664eb3b537feeba686916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28130ef4649b81b3b355e5bf6d612a6ce9e6f7bb196664eb3b537feeba686916->enter($__internal_28130ef4649b81b3b355e5bf6d612a6ce9e6f7bb196664eb3b537feeba686916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28130ef4649b81b3b355e5bf6d612a6ce9e6f7bb196664eb3b537feeba686916->leave($__internal_28130ef4649b81b3b355e5bf6d612a6ce9e6f7bb196664eb3b537feeba686916_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8b93afaad185b95cca3d15d987429bc4471d2c19c6e90fae1092c48a801c69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b93afaad185b95cca3d15d987429bc4471d2c19c6e90fae1092c48a801c69c->enter($__internal_f8b93afaad185b95cca3d15d987429bc4471d2c19c6e90fae1092c48a801c69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f8b93afaad185b95cca3d15d987429bc4471d2c19c6e90fae1092c48a801c69c->leave($__internal_f8b93afaad185b95cca3d15d987429bc4471d2c19c6e90fae1092c48a801c69c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_33f0ac47c9fac8d7cede0215318b56ddee215494fb36e6e0078a421b98605359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f0ac47c9fac8d7cede0215318b56ddee215494fb36e6e0078a421b98605359->enter($__internal_33f0ac47c9fac8d7cede0215318b56ddee215494fb36e6e0078a421b98605359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_33f0ac47c9fac8d7cede0215318b56ddee215494fb36e6e0078a421b98605359->leave($__internal_33f0ac47c9fac8d7cede0215318b56ddee215494fb36e6e0078a421b98605359_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d54d83bc711e848248af5c74ba9f5f5068472f9f0a880f47b7237cc4fdbd6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d54d83bc711e848248af5c74ba9f5f5068472f9f0a880f47b7237cc4fdbd6f0->enter($__internal_4d54d83bc711e848248af5c74ba9f5f5068472f9f0a880f47b7237cc4fdbd6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4d54d83bc711e848248af5c74ba9f5f5068472f9f0a880f47b7237cc4fdbd6f0->leave($__internal_4d54d83bc711e848248af5c74ba9f5f5068472f9f0a880f47b7237cc4fdbd6f0_prof);

    }

    // line 11
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_2de9387fe87b9d481f78dfc4860aaec9f6e8f3424d8611879f9db06289aae7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de9387fe87b9d481f78dfc4860aaec9f6e8f3424d8611879f9db06289aae7a9->enter($__internal_2de9387fe87b9d481f78dfc4860aaec9f6e8f3424d8611879f9db06289aae7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 12
        echo "        <ul id=\"menu\">
            ";
        // line 13
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 16
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_2de9387fe87b9d481f78dfc4860aaec9f6e8f3424d8611879f9db06289aae7a9->leave($__internal_2de9387fe87b9d481f78dfc4860aaec9f6e8f3424d8611879f9db06289aae7a9_prof);

    }

    // line 13
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_5befeb2ba5f18ceca1cac48c3ab947069fa4707639b8e98b93265acad733d81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5befeb2ba5f18ceca1cac48c3ab947069fa4707639b8e98b93265acad733d81d->enter($__internal_5befeb2ba5f18ceca1cac48c3ab947069fa4707639b8e98b93265acad733d81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 14
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_5befeb2ba5f18ceca1cac48c3ab947069fa4707639b8e98b93265acad733d81d->leave($__internal_5befeb2ba5f18ceca1cac48c3ab947069fa4707639b8e98b93265acad733d81d_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_cf13ab2adb2e9e02be4a90c2137891770b57bbcd87302e95c885e42ca6673179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf13ab2adb2e9e02be4a90c2137891770b57bbcd87302e95c885e42ca6673179->enter($__internal_cf13ab2adb2e9e02be4a90c2137891770b57bbcd87302e95c885e42ca6673179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cf13ab2adb2e9e02be4a90c2137891770b57bbcd87302e95c885e42ca6673179->leave($__internal_cf13ab2adb2e9e02be4a90c2137891770b57bbcd87302e95c885e42ca6673179_prof);

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
