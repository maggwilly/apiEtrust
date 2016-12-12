<?php

/* fiscalite/new.html.twig */
class __TwigTemplate_a34a05f242d5f3b99bd6c6241912caad18c0bf8e5d55ecb0583f9a907fdd47d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiscalite/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5bbddf9019e6c77c33b874fb32799069d0e2c3d208b48e4966420be3e6958c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bbddf9019e6c77c33b874fb32799069d0e2c3d208b48e4966420be3e6958c2->enter($__internal_d5bbddf9019e6c77c33b874fb32799069d0e2c3d208b48e4966420be3e6958c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiscalite/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5bbddf9019e6c77c33b874fb32799069d0e2c3d208b48e4966420be3e6958c2->leave($__internal_d5bbddf9019e6c77c33b874fb32799069d0e2c3d208b48e4966420be3e6958c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eac8e280cfd7ae905059d2d2ec587648d10749d2760f3d471b9018dc3459901e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac8e280cfd7ae905059d2d2ec587648d10749d2760f3d471b9018dc3459901e->enter($__internal_eac8e280cfd7ae905059d2d2ec587648d10749d2760f3d471b9018dc3459901e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiscalite creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiscalite_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_eac8e280cfd7ae905059d2d2ec587648d10749d2760f3d471b9018dc3459901e->leave($__internal_eac8e280cfd7ae905059d2d2ec587648d10749d2760f3d471b9018dc3459901e_prof);

    }

    public function getTemplateName()
    {
        return "fiscalite/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Fiscalite creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fiscalite_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "fiscalite/new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app\\Resources\\views\\fiscalite\\new.html.twig");
    }
}
