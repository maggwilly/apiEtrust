<?php

/* AppBundle:Produit:edit.html.twig */
class __TwigTemplate_f269f9166f2b50b51b37c7505591ee138dbf71ecd22ae66f3ace66f2e326ffa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Produit:edit.html.twig", 1);
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
        $__internal_052ddc2d04483315e4aa589b274f4b98f94e3b011b59db33c5a16a57632f333c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052ddc2d04483315e4aa589b274f4b98f94e3b011b59db33c5a16a57632f333c->enter($__internal_052ddc2d04483315e4aa589b274f4b98f94e3b011b59db33c5a16a57632f333c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Produit:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_052ddc2d04483315e4aa589b274f4b98f94e3b011b59db33c5a16a57632f333c->leave($__internal_052ddc2d04483315e4aa589b274f4b98f94e3b011b59db33c5a16a57632f333c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_806d251d0ab730b5f7201c6893724309315a143e9866c7982f8af5f815f3e56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806d251d0ab730b5f7201c6893724309315a143e9866c7982f8af5f815f3e56e->enter($__internal_806d251d0ab730b5f7201c6893724309315a143e9866c7982f8af5f815f3e56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Produit edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_806d251d0ab730b5f7201c6893724309315a143e9866c7982f8af5f815f3e56e->leave($__internal_806d251d0ab730b5f7201c6893724309315a143e9866c7982f8af5f815f3e56e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Produit:edit.html.twig";
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
    <h1>Produit edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('produit') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "AppBundle:Produit:edit.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/Produit/edit.html.twig");
    }
}
