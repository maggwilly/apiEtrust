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
        $__internal_0f5f15450155a0552142a14660ce1092dbe0fde590cd3545bf3154674871f950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5f15450155a0552142a14660ce1092dbe0fde590cd3545bf3154674871f950->enter($__internal_0f5f15450155a0552142a14660ce1092dbe0fde590cd3545bf3154674871f950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Produit:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f5f15450155a0552142a14660ce1092dbe0fde590cd3545bf3154674871f950->leave($__internal_0f5f15450155a0552142a14660ce1092dbe0fde590cd3545bf3154674871f950_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d068cd5362c411286af165caf04ba27c7085e3be272f242f3e916bcfe25a1739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d068cd5362c411286af165caf04ba27c7085e3be272f242f3e916bcfe25a1739->enter($__internal_d068cd5362c411286af165caf04ba27c7085e3be272f242f3e916bcfe25a1739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d068cd5362c411286af165caf04ba27c7085e3be272f242f3e916bcfe25a1739->leave($__internal_d068cd5362c411286af165caf04ba27c7085e3be272f242f3e916bcfe25a1739_prof);

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
