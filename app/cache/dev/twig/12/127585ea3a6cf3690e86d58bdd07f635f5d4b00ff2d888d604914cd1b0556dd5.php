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
        $__internal_b741b3b21b24aa23bd73f08d3dde5fed465d37393363334e939808dbadc0ff5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b741b3b21b24aa23bd73f08d3dde5fed465d37393363334e939808dbadc0ff5b->enter($__internal_b741b3b21b24aa23bd73f08d3dde5fed465d37393363334e939808dbadc0ff5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b741b3b21b24aa23bd73f08d3dde5fed465d37393363334e939808dbadc0ff5b->leave($__internal_b741b3b21b24aa23bd73f08d3dde5fed465d37393363334e939808dbadc0ff5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7f8d154e396efc215a66c1f718ec1653f5e0f9c7dd00c410ad1e12c2b7fc5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f8d154e396efc215a66c1f718ec1653f5e0f9c7dd00c410ad1e12c2b7fc5b3->enter($__internal_b7f8d154e396efc215a66c1f718ec1653f5e0f9c7dd00c410ad1e12c2b7fc5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b7f8d154e396efc215a66c1f718ec1653f5e0f9c7dd00c410ad1e12c2b7fc5b3->leave($__internal_b7f8d154e396efc215a66c1f718ec1653f5e0f9c7dd00c410ad1e12c2b7fc5b3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fc6415ac289e9f9f33765aebf8f26c4f3c624a9ed90247f1019228077f13688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc6415ac289e9f9f33765aebf8f26c4f3c624a9ed90247f1019228077f13688->enter($__internal_8fc6415ac289e9f9f33765aebf8f26c4f3c624a9ed90247f1019228077f13688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8fc6415ac289e9f9f33765aebf8f26c4f3c624a9ed90247f1019228077f13688->leave($__internal_8fc6415ac289e9f9f33765aebf8f26c4f3c624a9ed90247f1019228077f13688_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeb5fd1f72495698481254ea5c2f6559b2e9822e9e61c9ebc541cdc96a062265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb5fd1f72495698481254ea5c2f6559b2e9822e9e61c9ebc541cdc96a062265->enter($__internal_eeb5fd1f72495698481254ea5c2f6559b2e9822e9e61c9ebc541cdc96a062265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_eeb5fd1f72495698481254ea5c2f6559b2e9822e9e61c9ebc541cdc96a062265->leave($__internal_eeb5fd1f72495698481254ea5c2f6559b2e9822e9e61c9ebc541cdc96a062265_prof);

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
