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
        $__internal_d95a763ffd4882ae05c1a49a61a9fc767b421db0e7cfe7599e46ca5f358a2a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95a763ffd4882ae05c1a49a61a9fc767b421db0e7cfe7599e46ca5f358a2a7c->enter($__internal_d95a763ffd4882ae05c1a49a61a9fc767b421db0e7cfe7599e46ca5f358a2a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95a763ffd4882ae05c1a49a61a9fc767b421db0e7cfe7599e46ca5f358a2a7c->leave($__internal_d95a763ffd4882ae05c1a49a61a9fc767b421db0e7cfe7599e46ca5f358a2a7c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_35da96ef80cc31dd613cca50b18e82df348e8a3de92b098a7ca3a36b03af1c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35da96ef80cc31dd613cca50b18e82df348e8a3de92b098a7ca3a36b03af1c66->enter($__internal_35da96ef80cc31dd613cca50b18e82df348e8a3de92b098a7ca3a36b03af1c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_35da96ef80cc31dd613cca50b18e82df348e8a3de92b098a7ca3a36b03af1c66->leave($__internal_35da96ef80cc31dd613cca50b18e82df348e8a3de92b098a7ca3a36b03af1c66_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f1e1ad0fac78f42f7ca8d394c46b3b42f3c4e6f18b537ee484b6bb2a30a5745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1e1ad0fac78f42f7ca8d394c46b3b42f3c4e6f18b537ee484b6bb2a30a5745->enter($__internal_3f1e1ad0fac78f42f7ca8d394c46b3b42f3c4e6f18b537ee484b6bb2a30a5745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_3f1e1ad0fac78f42f7ca8d394c46b3b42f3c4e6f18b537ee484b6bb2a30a5745->leave($__internal_3f1e1ad0fac78f42f7ca8d394c46b3b42f3c4e6f18b537ee484b6bb2a30a5745_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9899c8139f48b123c0ccdac6c9b3332462f10ebd70c4308bb76b15f48a9115a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9899c8139f48b123c0ccdac6c9b3332462f10ebd70c4308bb76b15f48a9115a->enter($__internal_a9899c8139f48b123c0ccdac6c9b3332462f10ebd70c4308bb76b15f48a9115a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a9899c8139f48b123c0ccdac6c9b3332462f10ebd70c4308bb76b15f48a9115a->leave($__internal_a9899c8139f48b123c0ccdac6c9b3332462f10ebd70c4308bb76b15f48a9115a_prof);

    }

    // line 11
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_daeb7439ffcc6c2f9b01880a233074595b6b01c6ae7670ef02bb2667d1fe46eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daeb7439ffcc6c2f9b01880a233074595b6b01c6ae7670ef02bb2667d1fe46eb->enter($__internal_daeb7439ffcc6c2f9b01880a233074595b6b01c6ae7670ef02bb2667d1fe46eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 12
        echo "        <ul id=\"menu\">
            ";
        // line 13
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 16
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_daeb7439ffcc6c2f9b01880a233074595b6b01c6ae7670ef02bb2667d1fe46eb->leave($__internal_daeb7439ffcc6c2f9b01880a233074595b6b01c6ae7670ef02bb2667d1fe46eb_prof);

    }

    // line 13
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_6417dd698548b8fb7f5daa6403ceedfef34acc52598c5735f5a1157528b64bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6417dd698548b8fb7f5daa6403ceedfef34acc52598c5735f5a1157528b64bef->enter($__internal_6417dd698548b8fb7f5daa6403ceedfef34acc52598c5735f5a1157528b64bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 14
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_6417dd698548b8fb7f5daa6403ceedfef34acc52598c5735f5a1157528b64bef->leave($__internal_6417dd698548b8fb7f5daa6403ceedfef34acc52598c5735f5a1157528b64bef_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_a81f65ee654983427f9904949ab321d3455ec90e2f59708ea13cd9737f2ff524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81f65ee654983427f9904949ab321d3455ec90e2f59708ea13cd9737f2ff524->enter($__internal_a81f65ee654983427f9904949ab321d3455ec90e2f59708ea13cd9737f2ff524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a81f65ee654983427f9904949ab321d3455ec90e2f59708ea13cd9737f2ff524->leave($__internal_a81f65ee654983427f9904949ab321d3455ec90e2f59708ea13cd9737f2ff524_prof);

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
