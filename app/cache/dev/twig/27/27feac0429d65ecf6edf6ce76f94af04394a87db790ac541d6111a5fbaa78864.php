<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5c7d5fca2aace66563dda58aec83f1bee058219e6a3e0f40857a44d948f592d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55689e7a5f276b7e937ca94f1c5345e78258f882c6acaa4785e02d3dc5643668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55689e7a5f276b7e937ca94f1c5345e78258f882c6acaa4785e02d3dc5643668->enter($__internal_55689e7a5f276b7e937ca94f1c5345e78258f882c6acaa4785e02d3dc5643668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55689e7a5f276b7e937ca94f1c5345e78258f882c6acaa4785e02d3dc5643668->leave($__internal_55689e7a5f276b7e937ca94f1c5345e78258f882c6acaa4785e02d3dc5643668_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_201e80b3a5bf568a0196edddc7531edc5374c7c6c9f603fbd3adc6861cfa3270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201e80b3a5bf568a0196edddc7531edc5374c7c6c9f603fbd3adc6861cfa3270->enter($__internal_201e80b3a5bf568a0196edddc7531edc5374c7c6c9f603fbd3adc6861cfa3270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_201e80b3a5bf568a0196edddc7531edc5374c7c6c9f603fbd3adc6861cfa3270->leave($__internal_201e80b3a5bf568a0196edddc7531edc5374c7c6c9f603fbd3adc6861cfa3270_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5befe9c99d57f09392b41cbf844d25b88d3e9592ab46e71efdcfd6a74a8aa4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5befe9c99d57f09392b41cbf844d25b88d3e9592ab46e71efdcfd6a74a8aa4d6->enter($__internal_5befe9c99d57f09392b41cbf844d25b88d3e9592ab46e71efdcfd6a74a8aa4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5befe9c99d57f09392b41cbf844d25b88d3e9592ab46e71efdcfd6a74a8aa4d6->leave($__internal_5befe9c99d57f09392b41cbf844d25b88d3e9592ab46e71efdcfd6a74a8aa4d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_687a4e0471865a0b6ed14987d7cbdea23de3170ccce1f0115b7f992defab62da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687a4e0471865a0b6ed14987d7cbdea23de3170ccce1f0115b7f992defab62da->enter($__internal_687a4e0471865a0b6ed14987d7cbdea23de3170ccce1f0115b7f992defab62da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_687a4e0471865a0b6ed14987d7cbdea23de3170ccce1f0115b7f992defab62da->leave($__internal_687a4e0471865a0b6ed14987d7cbdea23de3170ccce1f0115b7f992defab62da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
