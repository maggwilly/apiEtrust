<?php

/* fiscalite/show.html.twig */
class __TwigTemplate_f79bc052478266b332a92f60548b614d51b89b3ca1b65ce0b209f419e2439a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiscalite/show.html.twig", 1);
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
        $__internal_f8549a82fc8aecbb5935866192b3098f877159ba61cdceaab29eacf1b4054ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8549a82fc8aecbb5935866192b3098f877159ba61cdceaab29eacf1b4054ae8->enter($__internal_f8549a82fc8aecbb5935866192b3098f877159ba61cdceaab29eacf1b4054ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiscalite/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8549a82fc8aecbb5935866192b3098f877159ba61cdceaab29eacf1b4054ae8->leave($__internal_f8549a82fc8aecbb5935866192b3098f877159ba61cdceaab29eacf1b4054ae8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67a4a02db87bcdf3720ec15f27a4be0a1ea1d00f2867f3826b0602fea83f28b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a4a02db87bcdf3720ec15f27a4be0a1ea1d00f2867f3826b0602fea83f28b4->enter($__internal_67a4a02db87bcdf3720ec15f27a4be0a1ea1d00f2867f3826b0602fea83f28b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiscalite</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiscalite"]) ? $context["fiscalite"] : $this->getContext($context, "fiscalite")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomjuridique</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiscalite"]) ? $context["fiscalite"] : $this->getContext($context, "fiscalite")), "nomJuridique", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Registre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiscalite"]) ? $context["fiscalite"] : $this->getContext($context, "fiscalite")), "registre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contribuable</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiscalite"]) ? $context["fiscalite"] : $this->getContext($context, "fiscalite")), "contribuable", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiscalite"]) ? $context["fiscalite"] : $this->getContext($context, "fiscalite")), "categorie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Regime</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiscalite"]) ? $context["fiscalite"] : $this->getContext($context, "fiscalite")), "regime", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Conforme</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["fiscalite"]) ? $context["fiscalite"] : $this->getContext($context, "fiscalite")), "conforme", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Virified</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["fiscalite"]) ? $context["fiscalite"] : $this->getContext($context, "fiscalite")), "virified", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Virifiedat</th>
                <td>";
        // line 42
        if ($this->getAttribute((isset($context["fiscalite"]) ? $context["fiscalite"] : $this->getContext($context, "fiscalite")), "virifiedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiscalite"]) ? $context["fiscalite"] : $this->getContext($context, "fiscalite")), "virifiedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiscalite_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiscalite_edit", array("id" => $this->getAttribute((isset($context["fiscalite"]) ? $context["fiscalite"] : $this->getContext($context, "fiscalite")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_67a4a02db87bcdf3720ec15f27a4be0a1ea1d00f2867f3826b0602fea83f28b4->leave($__internal_67a4a02db87bcdf3720ec15f27a4be0a1ea1d00f2867f3826b0602fea83f28b4_prof);

    }

    public function getTemplateName()
    {
        return "fiscalite/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 57,  136 => 55,  130 => 52,  124 => 49,  112 => 42,  101 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Fiscalite</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ fiscalite.id }}</td>
            </tr>
            <tr>
                <th>Nomjuridique</th>
                <td>{{ fiscalite.nomJuridique }}</td>
            </tr>
            <tr>
                <th>Registre</th>
                <td>{{ fiscalite.registre }}</td>
            </tr>
            <tr>
                <th>Contribuable</th>
                <td>{{ fiscalite.contribuable }}</td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td>{{ fiscalite.categorie }}</td>
            </tr>
            <tr>
                <th>Regime</th>
                <td>{{ fiscalite.regime }}</td>
            </tr>
            <tr>
                <th>Conforme</th>
                <td>{% if fiscalite.conforme %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Virified</th>
                <td>{% if fiscalite.virified %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Virifiedat</th>
                <td>{% if fiscalite.virifiedAt %}{{ fiscalite.virifiedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fiscalite_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('fiscalite_edit', { 'id': fiscalite.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "fiscalite/show.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app\\Resources\\views\\fiscalite\\show.html.twig");
    }
}
