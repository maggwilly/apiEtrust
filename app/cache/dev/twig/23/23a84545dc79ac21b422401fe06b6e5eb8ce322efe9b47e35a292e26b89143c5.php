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
        $__internal_6eb7ba81504c6501a44aff6e36ba2f99cb5d7b9d68b9c056b58e454f1ee611c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb7ba81504c6501a44aff6e36ba2f99cb5d7b9d68b9c056b58e454f1ee611c2->enter($__internal_6eb7ba81504c6501a44aff6e36ba2f99cb5d7b9d68b9c056b58e454f1ee611c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Produit:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eb7ba81504c6501a44aff6e36ba2f99cb5d7b9d68b9c056b58e454f1ee611c2->leave($__internal_6eb7ba81504c6501a44aff6e36ba2f99cb5d7b9d68b9c056b58e454f1ee611c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fd431184624e9404f6f86a1d520929376b91353584024e13098f43c1cb4eeab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd431184624e9404f6f86a1d520929376b91353584024e13098f43c1cb4eeab->enter($__internal_0fd431184624e9404f6f86a1d520929376b91353584024e13098f43c1cb4eeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0fd431184624e9404f6f86a1d520929376b91353584024e13098f43c1cb4eeab->leave($__internal_0fd431184624e9404f6f86a1d520929376b91353584024e13098f43c1cb4eeab_prof);

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
