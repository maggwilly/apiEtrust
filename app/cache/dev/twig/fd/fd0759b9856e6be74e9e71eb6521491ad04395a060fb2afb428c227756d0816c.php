<?php

/* AppBundle:Organ:edit.html.twig */
class __TwigTemplate_121e50c185afccf6d89fc1219d213414889dd3357ef2323eb0ea0b1767b15498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Organ:edit.html.twig", 1);
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
        $__internal_ad5bdc0c7886061d66edc3236acfcad66758b03ecbd258950c97d571db91032f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5bdc0c7886061d66edc3236acfcad66758b03ecbd258950c97d571db91032f->enter($__internal_ad5bdc0c7886061d66edc3236acfcad66758b03ecbd258950c97d571db91032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Organ:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5bdc0c7886061d66edc3236acfcad66758b03ecbd258950c97d571db91032f->leave($__internal_ad5bdc0c7886061d66edc3236acfcad66758b03ecbd258950c97d571db91032f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bd1f38a79e02c3e44d3de331b981ff26a318a5dbef269c4cbb0af7b54e43e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd1f38a79e02c3e44d3de331b981ff26a318a5dbef269c4cbb0af7b54e43e98->enter($__internal_7bd1f38a79e02c3e44d3de331b981ff26a318a5dbef269c4cbb0af7b54e43e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Organ edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organ");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_7bd1f38a79e02c3e44d3de331b981ff26a318a5dbef269c4cbb0af7b54e43e98->leave($__internal_7bd1f38a79e02c3e44d3de331b981ff26a318a5dbef269c4cbb0af7b54e43e98_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Organ:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Organ edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('organ') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "AppBundle:Organ:edit.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/Organ/edit.html.twig");
    }
}
