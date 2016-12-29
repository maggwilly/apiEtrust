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
        $__internal_521d16d8691c4c8d99dec7b00f61038dc6b680eb6810231e089f363167ad93d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521d16d8691c4c8d99dec7b00f61038dc6b680eb6810231e089f363167ad93d8->enter($__internal_521d16d8691c4c8d99dec7b00f61038dc6b680eb6810231e089f363167ad93d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Organ/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_521d16d8691c4c8d99dec7b00f61038dc6b680eb6810231e089f363167ad93d8->leave($__internal_521d16d8691c4c8d99dec7b00f61038dc6b680eb6810231e089f363167ad93d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_074d322f537ea5aa574f37ef9b8fa2c5a21564b9f9917669b6e936e1a2b7192a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074d322f537ea5aa574f37ef9b8fa2c5a21564b9f9917669b6e936e1a2b7192a->enter($__internal_074d322f537ea5aa574f37ef9b8fa2c5a21564b9f9917669b6e936e1a2b7192a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_074d322f537ea5aa574f37ef9b8fa2c5a21564b9f9917669b6e936e1a2b7192a->leave($__internal_074d322f537ea5aa574f37ef9b8fa2c5a21564b9f9917669b6e936e1a2b7192a_prof);

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
