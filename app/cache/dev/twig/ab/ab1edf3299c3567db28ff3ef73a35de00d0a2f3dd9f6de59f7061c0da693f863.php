<?php

/* AppBundle:PointVente:show.html.twig */
class __TwigTemplate_1cfee4b491f22ddd076e14a75676fcbf05f48af190e97ce3a1f2fa50dab0ffea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:PointVente:show.html.twig", 1);
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
        $__internal_4b7e30b88f2891150ff45bf3f3f78c63021123c1855b0c4c14bf4021c52688b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7e30b88f2891150ff45bf3f3f78c63021123c1855b0c4c14bf4021c52688b6->enter($__internal_4b7e30b88f2891150ff45bf3f3f78c63021123c1855b0c4c14bf4021c52688b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:PointVente:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b7e30b88f2891150ff45bf3f3f78c63021123c1855b0c4c14bf4021c52688b6->leave($__internal_4b7e30b88f2891150ff45bf3f3f78c63021123c1855b0c4c14bf4021c52688b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_668eea897b4c651b1ed9d1a238847d9b1d99440f0476c1a7b4dbea53e0f6f392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668eea897b4c651b1ed9d1a238847d9b1d99440f0476c1a7b4dbea53e0f6f392->enter($__internal_668eea897b4c651b1ed9d1a238847d9b1d99440f0476c1a7b4dbea53e0f6f392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_668eea897b4c651b1ed9d1a238847d9b1d99440f0476c1a7b4dbea53e0f6f392->leave($__internal_668eea897b4c651b1ed9d1a238847d9b1d99440f0476c1a7b4dbea53e0f6f392_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:PointVente:show.html.twig";
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
", "AppBundle:PointVente:show.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/PointVente/show.html.twig");
    }
}
