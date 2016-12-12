<?php

/* AppBundle:Produit:new.html.twig */
class __TwigTemplate_70009d9f3ddef8cca467bbdad93a8c1d1ea9de6a5c9ab1cfbc6265de0c9c71c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Produit:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6996333623e62ae0c2b1d57d19db7842564d9ab5c109a512ee9c7df99e390490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6996333623e62ae0c2b1d57d19db7842564d9ab5c109a512ee9c7df99e390490->enter($__internal_6996333623e62ae0c2b1d57d19db7842564d9ab5c109a512ee9c7df99e390490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Produit:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6996333623e62ae0c2b1d57d19db7842564d9ab5c109a512ee9c7df99e390490->leave($__internal_6996333623e62ae0c2b1d57d19db7842564d9ab5c109a512ee9c7df99e390490_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5de8a559f7cf701ff271690ae171854280d9754078b4fce0bb8e0a11110dfdf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de8a559f7cf701ff271690ae171854280d9754078b4fce0bb8e0a11110dfdf4->enter($__internal_5de8a559f7cf701ff271690ae171854280d9754078b4fce0bb8e0a11110dfdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Produit creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_5de8a559f7cf701ff271690ae171854280d9754078b4fce0bb8e0a11110dfdf4->leave($__internal_5de8a559f7cf701ff271690ae171854280d9754078b4fce0bb8e0a11110dfdf4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Produit:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Produit creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('produit') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "AppBundle:Produit:new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/Produit/new.html.twig");
    }
}
