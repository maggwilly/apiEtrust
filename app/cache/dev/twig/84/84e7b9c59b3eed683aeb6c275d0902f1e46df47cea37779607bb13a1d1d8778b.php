<?php

/* AppBundle:CommandeClient:new.html.twig */
class __TwigTemplate_be133343e365bd655e0d56cefc42d1155fd62c352bcf6d7ca72cd56fb90f3223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:CommandeClient:new.html.twig", 1);
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
        $__internal_c4c9b2d6652a9f7f09c0dcec48fccbeb28f62cf2dff55a6f2a0e1451bd540660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c9b2d6652a9f7f09c0dcec48fccbeb28f62cf2dff55a6f2a0e1451bd540660->enter($__internal_c4c9b2d6652a9f7f09c0dcec48fccbeb28f62cf2dff55a6f2a0e1451bd540660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:CommandeClient:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c9b2d6652a9f7f09c0dcec48fccbeb28f62cf2dff55a6f2a0e1451bd540660->leave($__internal_c4c9b2d6652a9f7f09c0dcec48fccbeb28f62cf2dff55a6f2a0e1451bd540660_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e847d649c636a432d46679df9572d8550d0986ba8f741c6c4d7ac41be968325a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e847d649c636a432d46679df9572d8550d0986ba8f741c6c4d7ac41be968325a->enter($__internal_e847d649c636a432d46679df9572d8550d0986ba8f741c6c4d7ac41be968325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>CommandeClient creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_e847d649c636a432d46679df9572d8550d0986ba8f741c6c4d7ac41be968325a->leave($__internal_e847d649c636a432d46679df9572d8550d0986ba8f741c6c4d7ac41be968325a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:CommandeClient:new.html.twig";
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
    <h1>CommandeClient creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('commande_client') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "AppBundle:CommandeClient:new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/CommandeClient/new.html.twig");
    }
}
