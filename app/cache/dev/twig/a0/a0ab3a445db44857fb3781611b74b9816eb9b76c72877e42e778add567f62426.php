<?php

/* AppBundle:CommandeClient:edit.html.twig */
class __TwigTemplate_a723fc59d1653022b56f57e3e570b62ec4bafeb0097b04a08da285344e01de3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:CommandeClient:edit.html.twig", 1);
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
        $__internal_2e4108aa10e99ce66000d6e3520d57a5ed7a79c9402339d441480de5e7448244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4108aa10e99ce66000d6e3520d57a5ed7a79c9402339d441480de5e7448244->enter($__internal_2e4108aa10e99ce66000d6e3520d57a5ed7a79c9402339d441480de5e7448244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:CommandeClient:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e4108aa10e99ce66000d6e3520d57a5ed7a79c9402339d441480de5e7448244->leave($__internal_2e4108aa10e99ce66000d6e3520d57a5ed7a79c9402339d441480de5e7448244_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_edaa06aa12de429570794e564c32af2289f7019b81d72ef79c1ab503f012502f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edaa06aa12de429570794e564c32af2289f7019b81d72ef79c1ab503f012502f->enter($__internal_edaa06aa12de429570794e564c32af2289f7019b81d72ef79c1ab503f012502f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>CommandeClient edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_client");
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
        
        $__internal_edaa06aa12de429570794e564c32af2289f7019b81d72ef79c1ab503f012502f->leave($__internal_edaa06aa12de429570794e564c32af2289f7019b81d72ef79c1ab503f012502f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:CommandeClient:edit.html.twig";
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
    <h1>CommandeClient edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('commande_client') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "AppBundle:CommandeClient:edit.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/CommandeClient/edit.html.twig");
    }
}
