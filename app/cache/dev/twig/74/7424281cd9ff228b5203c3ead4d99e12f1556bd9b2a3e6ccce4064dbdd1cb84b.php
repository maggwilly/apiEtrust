<?php

/* AppBundle:Organ:show.html.twig */
class __TwigTemplate_abc39b88d222dbe1357797dbeb599bf12bd71d0ede592312152b803687b55d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Organ:show.html.twig", 1);
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
        $__internal_97fd993f0001ea356220201a58c92a2898be3d51899a1de4e9500e72c5a6de7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fd993f0001ea356220201a58c92a2898be3d51899a1de4e9500e72c5a6de7c->enter($__internal_97fd993f0001ea356220201a58c92a2898be3d51899a1de4e9500e72c5a6de7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Organ:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97fd993f0001ea356220201a58c92a2898be3d51899a1de4e9500e72c5a6de7c->leave($__internal_97fd993f0001ea356220201a58c92a2898be3d51899a1de4e9500e72c5a6de7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6973ebb2b12aaa296613381ed6dc43ee6281a6ef4e7bd15fdc1cf05564ecf959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6973ebb2b12aaa296613381ed6dc43ee6281a6ef4e7bd15fdc1cf05564ecf959->enter($__internal_6973ebb2b12aaa296613381ed6dc43ee6281a6ef4e7bd15fdc1cf05564ecf959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Organ</h1>

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
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organ");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organ_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_6973ebb2b12aaa296613381ed6dc43ee6281a6ef4e7bd15fdc1cf05564ecf959->leave($__internal_6973ebb2b12aaa296613381ed6dc43ee6281a6ef4e7bd15fdc1cf05564ecf959_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Organ:show.html.twig";
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
    <h1>Organ</h1>

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
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('organ') }}\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"{{ path('organ_edit', { 'id': entity.id }) }}\">
            Edit
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "AppBundle:Organ:show.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/Organ/show.html.twig");
    }
}
