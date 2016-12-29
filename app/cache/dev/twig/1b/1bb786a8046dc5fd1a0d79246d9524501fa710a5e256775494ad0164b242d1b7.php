<?php

/* AppBundle:Organ:new.html.twig */
class __TwigTemplate_1757310f4c25b64359b3edcf512b28d466dbad35f7b79462057a99a82c4c69c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Organ:new.html.twig", 1);
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
        $__internal_341407a48292558774a770dc491eb76500ec683d06850775942f3d5a2e251bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341407a48292558774a770dc491eb76500ec683d06850775942f3d5a2e251bb7->enter($__internal_341407a48292558774a770dc491eb76500ec683d06850775942f3d5a2e251bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Organ:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_341407a48292558774a770dc491eb76500ec683d06850775942f3d5a2e251bb7->leave($__internal_341407a48292558774a770dc491eb76500ec683d06850775942f3d5a2e251bb7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6797dc5e01628eadc9f65db9c3620bbae812810267b98ffb3aff223d416a617a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6797dc5e01628eadc9f65db9c3620bbae812810267b98ffb3aff223d416a617a->enter($__internal_6797dc5e01628eadc9f65db9c3620bbae812810267b98ffb3aff223d416a617a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Organ creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_6797dc5e01628eadc9f65db9c3620bbae812810267b98ffb3aff223d416a617a->leave($__internal_6797dc5e01628eadc9f65db9c3620bbae812810267b98ffb3aff223d416a617a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Organ:new.html.twig";
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
    <h1>Organ creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('organ') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "AppBundle:Organ:new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/Organ/new.html.twig");
    }
}
