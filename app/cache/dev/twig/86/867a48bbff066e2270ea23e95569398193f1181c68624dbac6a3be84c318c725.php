<?php

/* @App/CommandeClient/new.html.twig */
class __TwigTemplate_1f248c75701622528166afa5bd1f93d2302c377373cf565e934468035e8a3112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/CommandeClient/new.html.twig", 1);
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
        $__internal_fb3497c3f8871d1af02ea7e6980ebccc432205778abf621b77196e91744dbb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3497c3f8871d1af02ea7e6980ebccc432205778abf621b77196e91744dbb23->enter($__internal_fb3497c3f8871d1af02ea7e6980ebccc432205778abf621b77196e91744dbb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/CommandeClient/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb3497c3f8871d1af02ea7e6980ebccc432205778abf621b77196e91744dbb23->leave($__internal_fb3497c3f8871d1af02ea7e6980ebccc432205778abf621b77196e91744dbb23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cebbfc005f20168a60e33d5fabeb506df7191e4b5d29f91198d47751ffa9e31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebbfc005f20168a60e33d5fabeb506df7191e4b5d29f91198d47751ffa9e31a->enter($__internal_cebbfc005f20168a60e33d5fabeb506df7191e4b5d29f91198d47751ffa9e31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cebbfc005f20168a60e33d5fabeb506df7191e4b5d29f91198d47751ffa9e31a->leave($__internal_cebbfc005f20168a60e33d5fabeb506df7191e4b5d29f91198d47751ffa9e31a_prof);

    }

    public function getTemplateName()
    {
        return "@App/CommandeClient/new.html.twig";
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
", "@App/CommandeClient/new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\CommandeClient\\new.html.twig");
    }
}
