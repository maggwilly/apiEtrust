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
        $__internal_956177412b2b4e0bcb9587148ab07c87db25107a62c5584f5938b04110969739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956177412b2b4e0bcb9587148ab07c87db25107a62c5584f5938b04110969739->enter($__internal_956177412b2b4e0bcb9587148ab07c87db25107a62c5584f5938b04110969739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_956177412b2b4e0bcb9587148ab07c87db25107a62c5584f5938b04110969739->leave($__internal_956177412b2b4e0bcb9587148ab07c87db25107a62c5584f5938b04110969739_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_169152f3cbad998962f4ea312e839372ca820c68826b151933c14e4822135d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169152f3cbad998962f4ea312e839372ca820c68826b151933c14e4822135d05->enter($__internal_169152f3cbad998962f4ea312e839372ca820c68826b151933c14e4822135d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_169152f3cbad998962f4ea312e839372ca820c68826b151933c14e4822135d05->leave($__internal_169152f3cbad998962f4ea312e839372ca820c68826b151933c14e4822135d05_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_10c8d0ed5d8658e4317acd0880027f06e2ccde433203a368eed9e2d50ea903dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c8d0ed5d8658e4317acd0880027f06e2ccde433203a368eed9e2d50ea903dd->enter($__internal_10c8d0ed5d8658e4317acd0880027f06e2ccde433203a368eed9e2d50ea903dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_10c8d0ed5d8658e4317acd0880027f06e2ccde433203a368eed9e2d50ea903dd->leave($__internal_10c8d0ed5d8658e4317acd0880027f06e2ccde433203a368eed9e2d50ea903dd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_268085e03f60610cbf036d3e4afca76e4d57b65d2ae098a1f520461efa610691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268085e03f60610cbf036d3e4afca76e4d57b65d2ae098a1f520461efa610691->enter($__internal_268085e03f60610cbf036d3e4afca76e4d57b65d2ae098a1f520461efa610691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_268085e03f60610cbf036d3e4afca76e4d57b65d2ae098a1f520461efa610691->leave($__internal_268085e03f60610cbf036d3e4afca76e4d57b65d2ae098a1f520461efa610691_prof);

    }

    // line 11
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_2a6bbc0ffee9245931ad74fdc8eea183ec1f9d870bae5b56c7297dff6a616ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6bbc0ffee9245931ad74fdc8eea183ec1f9d870bae5b56c7297dff6a616ece->enter($__internal_2a6bbc0ffee9245931ad74fdc8eea183ec1f9d870bae5b56c7297dff6a616ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 12
        echo "        <ul id=\"menu\">
            ";
        // line 13
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 16
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_2a6bbc0ffee9245931ad74fdc8eea183ec1f9d870bae5b56c7297dff6a616ece->leave($__internal_2a6bbc0ffee9245931ad74fdc8eea183ec1f9d870bae5b56c7297dff6a616ece_prof);

    }

    // line 13
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_d4606bac2646e021149a452de8a1f669944f5d80f091198dd05a84bdd65081a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4606bac2646e021149a452de8a1f669944f5d80f091198dd05a84bdd65081a2->enter($__internal_d4606bac2646e021149a452de8a1f669944f5d80f091198dd05a84bdd65081a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 14
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_d4606bac2646e021149a452de8a1f669944f5d80f091198dd05a84bdd65081a2->leave($__internal_d4606bac2646e021149a452de8a1f669944f5d80f091198dd05a84bdd65081a2_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_c54978a1e0bf6da866ab9d608b9a687bae8dcfa794a6d037c5baf6c12953d370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54978a1e0bf6da866ab9d608b9a687bae8dcfa794a6d037c5baf6c12953d370->enter($__internal_c54978a1e0bf6da866ab9d608b9a687bae8dcfa794a6d037c5baf6c12953d370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c54978a1e0bf6da866ab9d608b9a687bae8dcfa794a6d037c5baf6c12953d370->leave($__internal_c54978a1e0bf6da866ab9d608b9a687bae8dcfa794a6d037c5baf6c12953d370_prof);

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
