<?php

/* :fiscalite:index.html.twig */
class __TwigTemplate_ec6a98018529239983b7d1ef3d1f784cb2427e39e6ab670f010eb751463cc2fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fiscalite:index.html.twig", 1);
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
        $__internal_0d9f332b3c7d4c5058ad5633ba8d9e599f71c4809d78c667c3e66c2ecd7c5141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9f332b3c7d4c5058ad5633ba8d9e599f71c4809d78c667c3e66c2ecd7c5141->enter($__internal_0d9f332b3c7d4c5058ad5633ba8d9e599f71c4809d78c667c3e66c2ecd7c5141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fiscalite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d9f332b3c7d4c5058ad5633ba8d9e599f71c4809d78c667c3e66c2ecd7c5141->leave($__internal_0d9f332b3c7d4c5058ad5633ba8d9e599f71c4809d78c667c3e66c2ecd7c5141_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cfe9bf0efb1b469d1cd822a3361def1da48ec532515b7ab0571f20bb0864776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfe9bf0efb1b469d1cd822a3361def1da48ec532515b7ab0571f20bb0864776->enter($__internal_7cfe9bf0efb1b469d1cd822a3361def1da48ec532515b7ab0571f20bb0864776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiscalites list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomjuridique</th>
                <th>Registre</th>
                <th>Contribuable</th>
                <th>Categorie</th>
                <th>Regime</th>
                <th>Conforme</th>
                <th>Virified</th>
                <th>Virifiedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiscalites"]) ? $context["fiscalites"] : $this->getContext($context, "fiscalites")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiscalite"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiscalite_show", array("id" => $this->getAttribute($context["fiscalite"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiscalite"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiscalite"], "nomJuridique", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiscalite"], "registre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiscalite"], "contribuable", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiscalite"], "categorie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiscalite"], "regime", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["fiscalite"], "conforme", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["fiscalite"], "virified", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["fiscalite"], "virifiedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiscalite"], "virifiedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiscalite_show", array("id" => $this->getAttribute($context["fiscalite"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiscalite_edit", array("id" => $this->getAttribute($context["fiscalite"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiscalite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiscalite_new");
        echo "\">Create a new fiscalite</a>
        </li>
    </ul>
";
        
        $__internal_7cfe9bf0efb1b469d1cd822a3361def1da48ec532515b7ab0571f20bb0864776->leave($__internal_7cfe9bf0efb1b469d1cd822a3361def1da48ec532515b7ab0571f20bb0864776_prof);

    }

    public function getTemplateName()
    {
        return ":fiscalite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 50,  136 => 45,  124 => 39,  118 => 36,  109 => 32,  101 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Fiscalites list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomjuridique</th>
                <th>Registre</th>
                <th>Contribuable</th>
                <th>Categorie</th>
                <th>Regime</th>
                <th>Conforme</th>
                <th>Virified</th>
                <th>Virifiedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fiscalite in fiscalites %}
            <tr>
                <td><a href=\"{{ path('fiscalite_show', { 'id': fiscalite.id }) }}\">{{ fiscalite.id }}</a></td>
                <td>{{ fiscalite.nomJuridique }}</td>
                <td>{{ fiscalite.registre }}</td>
                <td>{{ fiscalite.contribuable }}</td>
                <td>{{ fiscalite.categorie }}</td>
                <td>{{ fiscalite.regime }}</td>
                <td>{% if fiscalite.conforme %}Yes{% else %}No{% endif %}</td>
                <td>{% if fiscalite.virified %}Yes{% else %}No{% endif %}</td>
                <td>{% if fiscalite.virifiedAt %}{{ fiscalite.virifiedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('fiscalite_show', { 'id': fiscalite.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fiscalite_edit', { 'id': fiscalite.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fiscalite_new') }}\">Create a new fiscalite</a>
        </li>
    </ul>
{% endblock %}
", ":fiscalite:index.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app/Resources\\views/fiscalite/index.html.twig");
    }
}
