<?php

/* AppBundle:PointVente:new.html.twig */
class __TwigTemplate_015526b48d57c2d1208dc2951b6bc0e13ae48092bc577922982135c7934abac1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:PointVente:new.html.twig", 1);
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
        $__internal_06f1cd4a535d68135f7fc092d92f36d555cba71d8d87445f95a34b36ec72db9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f1cd4a535d68135f7fc092d92f36d555cba71d8d87445f95a34b36ec72db9c->enter($__internal_06f1cd4a535d68135f7fc092d92f36d555cba71d8d87445f95a34b36ec72db9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:PointVente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f1cd4a535d68135f7fc092d92f36d555cba71d8d87445f95a34b36ec72db9c->leave($__internal_06f1cd4a535d68135f7fc092d92f36d555cba71d8d87445f95a34b36ec72db9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbda777a5ee36523b400ad73d89380ff0d35f2c7ffe7b955eece2497316cff04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbda777a5ee36523b400ad73d89380ff0d35f2c7ffe7b955eece2497316cff04->enter($__internal_fbda777a5ee36523b400ad73d89380ff0d35f2c7ffe7b955eece2497316cff04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>PointVente creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("point_vente");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_fbda777a5ee36523b400ad73d89380ff0d35f2c7ffe7b955eece2497316cff04->leave($__internal_fbda777a5ee36523b400ad73d89380ff0d35f2c7ffe7b955eece2497316cff04_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:PointVente:new.html.twig";
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
    <h1>PointVente creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('point_vente') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "AppBundle:PointVente:new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/PointVente/new.html.twig");
    }
}
