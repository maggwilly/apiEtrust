<?php

/* @App/Organ/edit.html.twig */
class __TwigTemplate_02ea013ecb4d94d74a18ef76cf31376d17106f605ba4a7d3c27e637bd1c503a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Organ/edit.html.twig", 1);
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
        $__internal_bf3621b476cb0b12bfee53ceda8175831366665d98673dafe852e0ad1c7f1f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3621b476cb0b12bfee53ceda8175831366665d98673dafe852e0ad1c7f1f36->enter($__internal_bf3621b476cb0b12bfee53ceda8175831366665d98673dafe852e0ad1c7f1f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Organ/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf3621b476cb0b12bfee53ceda8175831366665d98673dafe852e0ad1c7f1f36->leave($__internal_bf3621b476cb0b12bfee53ceda8175831366665d98673dafe852e0ad1c7f1f36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bee39c0a16e9c9da96b9c9c1ac46d71e26a74aa0412232b697893d8d3947f853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee39c0a16e9c9da96b9c9c1ac46d71e26a74aa0412232b697893d8d3947f853->enter($__internal_bee39c0a16e9c9da96b9c9c1ac46d71e26a74aa0412232b697893d8d3947f853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bee39c0a16e9c9da96b9c9c1ac46d71e26a74aa0412232b697893d8d3947f853->leave($__internal_bee39c0a16e9c9da96b9c9c1ac46d71e26a74aa0412232b697893d8d3947f853_prof);

    }

    public function getTemplateName()
    {
        return "@App/Organ/edit.html.twig";
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
", "@App/Organ/edit.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\Organ\\edit.html.twig");
    }
}
