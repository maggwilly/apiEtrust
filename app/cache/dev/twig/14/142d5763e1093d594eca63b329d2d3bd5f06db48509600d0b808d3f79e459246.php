<?php

/* @App/User/edit.html.twig */
class __TwigTemplate_43065850fa2f67c5fdf91b8b47f5e511082d20086b5b7ef88ff1162280f6f59a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/User/edit.html.twig", 1);
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
        $__internal_73f114160dc90fa3d9b17909d6a24cdff6bdf5e1249c4eca2404bcd0d932447a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f114160dc90fa3d9b17909d6a24cdff6bdf5e1249c4eca2404bcd0d932447a->enter($__internal_73f114160dc90fa3d9b17909d6a24cdff6bdf5e1249c4eca2404bcd0d932447a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/User/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73f114160dc90fa3d9b17909d6a24cdff6bdf5e1249c4eca2404bcd0d932447a->leave($__internal_73f114160dc90fa3d9b17909d6a24cdff6bdf5e1249c4eca2404bcd0d932447a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03d1fac51f96fc0042ac276bed5a66e65acfd21e04ae9584f9201aa944dad08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d1fac51f96fc0042ac276bed5a66e65acfd21e04ae9584f9201aa944dad08d->enter($__internal_03d1fac51f96fc0042ac276bed5a66e65acfd21e04ae9584f9201aa944dad08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user");
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
        
        $__internal_03d1fac51f96fc0042ac276bed5a66e65acfd21e04ae9584f9201aa944dad08d->leave($__internal_03d1fac51f96fc0042ac276bed5a66e65acfd21e04ae9584f9201aa944dad08d_prof);

    }

    public function getTemplateName()
    {
        return "@App/User/edit.html.twig";
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
    <h1>User edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('user') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "@App/User/edit.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\User\\edit.html.twig");
    }
}
