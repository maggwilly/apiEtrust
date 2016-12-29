<?php

/* publicite/index.html.twig */
class __TwigTemplate_75d1714e3a9907605be34009149d3bd67910338e0d141f6c4cf5ad3d42182a84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "publicite/index.html.twig", 1);
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
        $__internal_44064aae747185488e988f5f949e7c38682afc2d31d5277267628c797a244754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44064aae747185488e988f5f949e7c38682afc2d31d5277267628c797a244754->enter($__internal_44064aae747185488e988f5f949e7c38682afc2d31d5277267628c797a244754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publicite/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44064aae747185488e988f5f949e7c38682afc2d31d5277267628c797a244754->leave($__internal_44064aae747185488e988f5f949e7c38682afc2d31d5277267628c797a244754_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b76b54ff0ff166161f9aa1eb6079dbf56e85ae51ca5e1a31d992ea4937dc4254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76b54ff0ff166161f9aa1eb6079dbf56e85ae51ca5e1a31d992ea4937dc4254->enter($__internal_b76b54ff0ff166161f9aa1eb6079dbf56e85ae51ca5e1a31d992ea4937dc4254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Publicites list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Startdate</th>
                <th>Starttime</th>
                <th>Duree</th>
                <th>Plateforme</th>
                <th>Pays</th>
                <th>Ville</th>
                <th>Sexe</th>
                <th>Age</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicites"]) ? $context["publicites"] : $this->getContext($context, "publicites")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicite"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_show", array("id" => $this->getAttribute($context["publicite"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            if ($this->getAttribute($context["publicite"], "startDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["publicite"], "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["publicite"], "startTime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["publicite"], "startTime", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "duree", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "plateforme", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "pays", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "sexe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "age", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "status", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_show", array("id" => $this->getAttribute($context["publicite"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_edit", array("id" => $this->getAttribute($context["publicite"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_new");
        echo "\">Create a new publicite</a>
        </li>
    </ul>
";
        
        $__internal_b76b54ff0ff166161f9aa1eb6079dbf56e85ae51ca5e1a31d992ea4937dc4254->leave($__internal_b76b54ff0ff166161f9aa1eb6079dbf56e85ae51ca5e1a31d992ea4937dc4254_prof);

    }

    public function getTemplateName()
    {
        return "publicite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 52,  135 => 47,  123 => 41,  117 => 38,  110 => 34,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  80 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Publicites list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Startdate</th>
                <th>Starttime</th>
                <th>Duree</th>
                <th>Plateforme</th>
                <th>Pays</th>
                <th>Ville</th>
                <th>Sexe</th>
                <th>Age</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for publicite in publicites %}
            <tr>
                <td><a href=\"{{ path('publicite_show', { 'id': publicite.id }) }}\">{{ publicite.id }}</a></td>
                <td>{% if publicite.startDate %}{{ publicite.startDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if publicite.startTime %}{{ publicite.startTime|date('H:i:s') }}{% endif %}</td>
                <td>{{ publicite.duree }}</td>
                <td>{{ publicite.plateforme }}</td>
                <td>{{ publicite.pays }}</td>
                <td>{{ publicite.ville }}</td>
                <td>{{ publicite.sexe }}</td>
                <td>{{ publicite.age }}</td>
                <td>{{ publicite.status }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('publicite_show', { 'id': publicite.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('publicite_edit', { 'id': publicite.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('publicite_new') }}\">Create a new publicite</a>
        </li>
    </ul>
{% endblock %}
", "publicite/index.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app\\Resources\\views\\publicite\\index.html.twig");
    }
}
