<?php

/* @App/PointVente/show.html.twig */
class __TwigTemplate_d11ebb2ac5fbc18233420caf0548dc99e854bb36a3c1d4798f8dd40213b06a79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/PointVente/show.html.twig", 1);
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
        $__internal_5af747ad40e595525e1446f9cd60096ade43c74c11d0b1377046bc396efe3786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af747ad40e595525e1446f9cd60096ade43c74c11d0b1377046bc396efe3786->enter($__internal_5af747ad40e595525e1446f9cd60096ade43c74c11d0b1377046bc396efe3786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/PointVente/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5af747ad40e595525e1446f9cd60096ade43c74c11d0b1377046bc396efe3786->leave($__internal_5af747ad40e595525e1446f9cd60096ade43c74c11d0b1377046bc396efe3786_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3e6fb35fe471b7c5a05b592f7920973502821cb7f1abc7e4caef6c61fb5da1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e6fb35fe471b7c5a05b592f7920973502821cb7f1abc7e4caef6c61fb5da1a->enter($__internal_e3e6fb35fe471b7c5a05b592f7920973502821cb7f1abc7e4caef6c61fb5da1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>PointVente</h1>

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
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quartier</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quartier", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("point_vente");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("point_vente_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_e3e6fb35fe471b7c5a05b592f7920973502821cb7f1abc7e4caef6c61fb5da1a->leave($__internal_e3e6fb35fe471b7c5a05b592f7920973502821cb7f1abc7e4caef6c61fb5da1a_prof);

    }

    public function getTemplateName()
    {
        return "@App/PointVente/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 46,  101 => 42,  93 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>PointVente</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ entity.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ entity.nom }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ entity.telephone }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ entity.type }}</td>
            </tr>
            <tr>
                <th>Quartier</th>
                <td>{{ entity.quartier }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ entity.adresse }}</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('point_vente') }}\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"{{ path('point_vente_edit', { 'id': entity.id }) }}\">
            Edit
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "@App/PointVente/show.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\PointVente\\show.html.twig");
    }
}
