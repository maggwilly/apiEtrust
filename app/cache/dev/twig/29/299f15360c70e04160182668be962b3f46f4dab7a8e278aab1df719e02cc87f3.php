<?php

/* AppBundle:User:new.html.twig */
class __TwigTemplate_a8b1bde8f7ec92148d1634af0407509a963894ff87d8958f81d032cdc189a6bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:new.html.twig", 1);
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
        $__internal_a2f10ade4d3843084c6b9f5dcf146e0ae21f065cc1ed997e79fca40a58a22775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f10ade4d3843084c6b9f5dcf146e0ae21f065cc1ed997e79fca40a58a22775->enter($__internal_a2f10ade4d3843084c6b9f5dcf146e0ae21f065cc1ed997e79fca40a58a22775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2f10ade4d3843084c6b9f5dcf146e0ae21f065cc1ed997e79fca40a58a22775->leave($__internal_a2f10ade4d3843084c6b9f5dcf146e0ae21f065cc1ed997e79fca40a58a22775_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27fa2b5f95fcb916f6a40c0552433c217d295bcbec2c6ae8d6077de60f26d9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fa2b5f95fcb916f6a40c0552433c217d295bcbec2c6ae8d6077de60f26d9b2->enter($__internal_27fa2b5f95fcb916f6a40c0552433c217d295bcbec2c6ae8d6077de60f26d9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_27fa2b5f95fcb916f6a40c0552433c217d295bcbec2c6ae8d6077de60f26d9b2->leave($__internal_27fa2b5f95fcb916f6a40c0552433c217d295bcbec2c6ae8d6077de60f26d9b2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:new.html.twig";
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
    <h1>User creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('user') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "AppBundle:User:new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/User/new.html.twig");
    }
}
