<?php

/* @App/PointVente/index.html.twig */
class __TwigTemplate_5df76f47e67a22b5074d24594efcb3f05ecee2127dddb2506cb0e74daf975c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/PointVente/index.html.twig", 1);
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
        $__internal_322f405931795a8c345898fc4c67b98a7fcc5bc1f12ffc3a128f243de18fbad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322f405931795a8c345898fc4c67b98a7fcc5bc1f12ffc3a128f243de18fbad0->enter($__internal_322f405931795a8c345898fc4c67b98a7fcc5bc1f12ffc3a128f243de18fbad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/PointVente/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_322f405931795a8c345898fc4c67b98a7fcc5bc1f12ffc3a128f243de18fbad0->leave($__internal_322f405931795a8c345898fc4c67b98a7fcc5bc1f12ffc3a128f243de18fbad0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7462a4c3323a4ab851976b147b1e5c02999455542b2650263a8384bbb9bca36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7462a4c3323a4ab851976b147b1e5c02999455542b2650263a8384bbb9bca36c->enter($__internal_7462a4c3323a4ab851976b147b1e5c02999455542b2650263a8384bbb9bca36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>PointVente list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Telephone</th>
                <th>Type</th>
                <th>Quartier</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("point_vente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quartier", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("point_vente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("point_vente_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("point_vente_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_7462a4c3323a4ab851976b147b1e5c02999455542b2650263a8384bbb9bca36c->leave($__internal_7462a4c3323a4ab851976b147b1e5c02999455542b2650263a8384bbb9bca36c_prof);

    }

    public function getTemplateName()
    {
        return "@App/PointVente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  111 => 39,  99 => 33,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>PointVente list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Telephone</th>
                <th>Type</th>
                <th>Quartier</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('point_vente_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.nom }}</td>
                <td>{{ entity.telephone }}</td>
                <td>{{ entity.type }}</td>
                <td>{{ entity.quartier }}</td>
                <td>{{ entity.adresse }}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('point_vente_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('point_vente_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"{{ path('point_vente_new') }}\">
                Create a new entry
            </a>
        </li>
    </ul>
    {% endblock %}
", "@App/PointVente/index.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\PointVente\\index.html.twig");
    }
}
