<?php

/* @App/Organ/new.html.twig */
class __TwigTemplate_46b84d827b0eb80e45f3537aa539605ee9cb57c6068203edcec34e0bc91d6204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Organ/new.html.twig", 1);
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
        $__internal_a88dcc606fd16b9b09685fde46d04c514f531636d9f4e2d71bffd3b6a1aedd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88dcc606fd16b9b09685fde46d04c514f531636d9f4e2d71bffd3b6a1aedd3d->enter($__internal_a88dcc606fd16b9b09685fde46d04c514f531636d9f4e2d71bffd3b6a1aedd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Organ/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a88dcc606fd16b9b09685fde46d04c514f531636d9f4e2d71bffd3b6a1aedd3d->leave($__internal_a88dcc606fd16b9b09685fde46d04c514f531636d9f4e2d71bffd3b6a1aedd3d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4a5c8e49f39939bfc25560e8703180f3887ab8a87f663106499001eb64d0bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a5c8e49f39939bfc25560e8703180f3887ab8a87f663106499001eb64d0bfc->enter($__internal_a4a5c8e49f39939bfc25560e8703180f3887ab8a87f663106499001eb64d0bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a4a5c8e49f39939bfc25560e8703180f3887ab8a87f663106499001eb64d0bfc->leave($__internal_a4a5c8e49f39939bfc25560e8703180f3887ab8a87f663106499001eb64d0bfc_prof);

    }

    public function getTemplateName()
    {
        return "@App/Organ/new.html.twig";
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
", "@App/Organ/new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\Organ\\new.html.twig");
    }
}
