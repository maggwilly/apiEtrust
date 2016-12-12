<?php

/* @App/CommandeClient/show.html.twig */
class __TwigTemplate_1eab1fa7d6239909eb41834320a8794a33930abc83b48e040083eac6640eca9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/CommandeClient/show.html.twig", 1);
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
        $__internal_3c2aaf906ac0ef126b578f14fcd97f6343eaa29168ffb2f7738712b1e423c710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2aaf906ac0ef126b578f14fcd97f6343eaa29168ffb2f7738712b1e423c710->enter($__internal_3c2aaf906ac0ef126b578f14fcd97f6343eaa29168ffb2f7738712b1e423c710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/CommandeClient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c2aaf906ac0ef126b578f14fcd97f6343eaa29168ffb2f7738712b1e423c710->leave($__internal_3c2aaf906ac0ef126b578f14fcd97f6343eaa29168ffb2f7738712b1e423c710_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e138a2eddfd4010580788f705dc7b33b950d0e04d6621438e849cf36945cd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e138a2eddfd4010580788f705dc7b33b950d0e04d6621438e849cf36945cd68->enter($__internal_1e138a2eddfd4010580788f705dc7b33b950d0e04d6621438e849cf36945cd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1e138a2eddfd4010580788f705dc7b33b950d0e04d6621438e849cf36945cd68->leave($__internal_1e138a2eddfd4010580788f705dc7b33b950d0e04d6621438e849cf36945cd68_prof);

    }

    public function getTemplateName()
    {
        return "@App/CommandeClient/show.html.twig";
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
", "@App/CommandeClient/show.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\CommandeClient\\show.html.twig");
    }
}
