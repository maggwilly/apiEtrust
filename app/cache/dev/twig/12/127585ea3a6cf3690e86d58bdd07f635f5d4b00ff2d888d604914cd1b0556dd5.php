<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5dd9ff7d1460ca646a7970ae5505f44543c654779d1f9a76c69ee4f1f325db65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_e9998a58859cb5ef80ec4166f031e8989eb063b37eea456165fc057bddc59717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9998a58859cb5ef80ec4166f031e8989eb063b37eea456165fc057bddc59717->enter($__internal_e9998a58859cb5ef80ec4166f031e8989eb063b37eea456165fc057bddc59717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9998a58859cb5ef80ec4166f031e8989eb063b37eea456165fc057bddc59717->leave($__internal_e9998a58859cb5ef80ec4166f031e8989eb063b37eea456165fc057bddc59717_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_694f21003f4406bc0bf73c96ae96869e5da2364db0b9270ce27129783aa88076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694f21003f4406bc0bf73c96ae96869e5da2364db0b9270ce27129783aa88076->enter($__internal_694f21003f4406bc0bf73c96ae96869e5da2364db0b9270ce27129783aa88076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_694f21003f4406bc0bf73c96ae96869e5da2364db0b9270ce27129783aa88076->leave($__internal_694f21003f4406bc0bf73c96ae96869e5da2364db0b9270ce27129783aa88076_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93f8afbda725e399e09c0c8ad284634070d01eed306d73fb60093f407c4900c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f8afbda725e399e09c0c8ad284634070d01eed306d73fb60093f407c4900c1->enter($__internal_93f8afbda725e399e09c0c8ad284634070d01eed306d73fb60093f407c4900c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93f8afbda725e399e09c0c8ad284634070d01eed306d73fb60093f407c4900c1->leave($__internal_93f8afbda725e399e09c0c8ad284634070d01eed306d73fb60093f407c4900c1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d699363fc6d9fea02b447f71496a10aefa0467e2bc30d6af8048f4cea7ed1a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d699363fc6d9fea02b447f71496a10aefa0467e2bc30d6af8048f4cea7ed1a7f->enter($__internal_d699363fc6d9fea02b447f71496a10aefa0467e2bc30d6af8048f4cea7ed1a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d699363fc6d9fea02b447f71496a10aefa0467e2bc30d6af8048f4cea7ed1a7f->leave($__internal_d699363fc6d9fea02b447f71496a10aefa0467e2bc30d6af8048f4cea7ed1a7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
