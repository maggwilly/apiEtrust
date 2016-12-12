<?php

/* AppBundle:CommandeClient:show.html.twig */
class __TwigTemplate_b580a2bbe9ceca69958902a57d33b8bfc6568c3d5865d477a6b3fec541d17c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:CommandeClient:show.html.twig", 1);
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
        $__internal_88f2316ee25ce805998c22ef6df984c47327d41df00f46ab624d5e6f33c3e2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f2316ee25ce805998c22ef6df984c47327d41df00f46ab624d5e6f33c3e2a0->enter($__internal_88f2316ee25ce805998c22ef6df984c47327d41df00f46ab624d5e6f33c3e2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:CommandeClient:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88f2316ee25ce805998c22ef6df984c47327d41df00f46ab624d5e6f33c3e2a0->leave($__internal_88f2316ee25ce805998c22ef6df984c47327d41df00f46ab624d5e6f33c3e2a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac6fb62958ad41362e79380b0a3cb187e94cc35cb43e7ad1d54d9171b5bfc6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6fb62958ad41362e79380b0a3cb187e94cc35cb43e7ad1d54d9171b5bfc6e3->enter($__internal_ac6fb62958ad41362e79380b0a3cb187e94cc35cb43e7ad1d54d9171b5bfc6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>CommandeClient</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_client");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_client_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_ac6fb62958ad41362e79380b0a3cb187e94cc35cb43e7ad1d54d9171b5bfc6e3->leave($__internal_ac6fb62958ad41362e79380b0a3cb187e94cc35cb43e7ad1d54d9171b5bfc6e3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:CommandeClient:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  80 => 30,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>CommandeClient</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ entity.id }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ entity.date|date('Y-m-d H:i:s') }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ entity.status }}</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('commande_client') }}\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"{{ path('commande_client_edit', { 'id': entity.id }) }}\">
            Edit
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "AppBundle:CommandeClient:show.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/CommandeClient/show.html.twig");
    }
}
