<?php

/* :publicite:show.html.twig */
class __TwigTemplate_1aec2217e7b31117076c5c4f96c54eec58eced5b54dd7b47d0c46a5349678ff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":publicite:show.html.twig", 1);
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
        $__internal_4e371d3afe6b9c98620b6cdc6bd2b4bff660cd370865ae2cf2fedafc3df58ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e371d3afe6b9c98620b6cdc6bd2b4bff660cd370865ae2cf2fedafc3df58ef1->enter($__internal_4e371d3afe6b9c98620b6cdc6bd2b4bff660cd370865ae2cf2fedafc3df58ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicite:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e371d3afe6b9c98620b6cdc6bd2b4bff660cd370865ae2cf2fedafc3df58ef1->leave($__internal_4e371d3afe6b9c98620b6cdc6bd2b4bff660cd370865ae2cf2fedafc3df58ef1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c07e8f6aff43872ef7dc9da349cb35878c2a3e11c34586286867b2a0f3faa945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07e8f6aff43872ef7dc9da349cb35878c2a3e11c34586286867b2a0f3faa945->enter($__internal_c07e8f6aff43872ef7dc9da349cb35878c2a3e11c34586286867b2a0f3faa945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Publicite</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Startdate</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "startDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Starttime</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "startTime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "startTime", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "duree", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Plateforme</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "plateforme", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "pays", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "sexe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "age", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_edit", array("id" => $this->getAttribute((isset($context["publicite"]) ? $context["publicite"] : $this->getContext($context, "publicite")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 61
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c07e8f6aff43872ef7dc9da349cb35878c2a3e11c34586286867b2a0f3faa945->leave($__internal_c07e8f6aff43872ef7dc9da349cb35878c2a3e11c34586286867b2a0f3faa945_prof);

    }

    public function getTemplateName()
    {
        return ":publicite:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 61,  137 => 59,  131 => 56,  125 => 53,  115 => 46,  108 => 42,  101 => 38,  94 => 34,  87 => 30,  80 => 26,  73 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Publicite</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ publicite.id }}</td>
            </tr>
            <tr>
                <th>Startdate</th>
                <td>{% if publicite.startDate %}{{ publicite.startDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Starttime</th>
                <td>{% if publicite.startTime %}{{ publicite.startTime|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>{{ publicite.duree }}</td>
            </tr>
            <tr>
                <th>Plateforme</th>
                <td>{{ publicite.plateforme }}</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>{{ publicite.pays }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ publicite.ville }}</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>{{ publicite.sexe }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ publicite.age }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ publicite.status }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('publicite_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('publicite_edit', { 'id': publicite.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":publicite:show.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app/Resources\\views/publicite/show.html.twig");
    }
}
