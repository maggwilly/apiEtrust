<?php

/* :livraison:index.html.twig */
class __TwigTemplate_d75857b7613a6634def27eef421b0d2342d9d987e2fe72d05fd8b598590404f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":livraison:index.html.twig", 1);
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
        $__internal_8ae5c0db8471367e2ebcab764605a0bacf0076f952426e0ffaeeb85d39fea877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae5c0db8471367e2ebcab764605a0bacf0076f952426e0ffaeeb85d39fea877->enter($__internal_8ae5c0db8471367e2ebcab764605a0bacf0076f952426e0ffaeeb85d39fea877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":livraison:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae5c0db8471367e2ebcab764605a0bacf0076f952426e0ffaeeb85d39fea877->leave($__internal_8ae5c0db8471367e2ebcab764605a0bacf0076f952426e0ffaeeb85d39fea877_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41f076bd00127fbedafe986477ff6ee847a5d94208a9014260874707a85da096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f076bd00127fbedafe986477ff6ee847a5d94208a9014260874707a85da096->enter($__internal_41f076bd00127fbedafe986477ff6ee847a5d94208a9014260874707a85da096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Livraisons list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Internationnal</th>
                <th>Delais</th>
                <th>Support</th>
                <th>Expedition</th>
                <th>Domicile</th>
                <th>Virified</th>
                <th>Virifiedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraisons"]) ? $context["livraisons"] : $this->getContext($context, "livraisons")));
        foreach ($context['_seq'] as $context["_key"] => $context["livraison"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison_show", array("id" => $this->getAttribute($context["livraison"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["livraison"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            if ($this->getAttribute($context["livraison"], "internationnal", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["livraison"], "delais", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["livraison"], "support", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["livraison"], "expedition", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["livraison"], "domicile", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["livraison"], "virified", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["livraison"], "virifiedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["livraison"], "virifiedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison_show", array("id" => $this->getAttribute($context["livraison"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison_edit", array("id" => $this->getAttribute($context["livraison"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livraison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison_new");
        echo "\">Create a new livraison</a>
        </li>
    </ul>
";
        
        $__internal_41f076bd00127fbedafe986477ff6ee847a5d94208a9014260874707a85da096->leave($__internal_41f076bd00127fbedafe986477ff6ee847a5d94208a9014260874707a85da096_prof);

    }

    public function getTemplateName()
    {
        return ":livraison:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 48,  139 => 43,  127 => 37,  121 => 34,  112 => 30,  104 => 29,  96 => 28,  88 => 27,  84 => 26,  80 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Livraisons list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Internationnal</th>
                <th>Delais</th>
                <th>Support</th>
                <th>Expedition</th>
                <th>Domicile</th>
                <th>Virified</th>
                <th>Virifiedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for livraison in livraisons %}
            <tr>
                <td><a href=\"{{ path('livraison_show', { 'id': livraison.id }) }}\">{{ livraison.id }}</a></td>
                <td>{% if livraison.internationnal %}Yes{% else %}No{% endif %}</td>
                <td>{{ livraison.delais }}</td>
                <td>{{ livraison.support }}</td>
                <td>{% if livraison.expedition %}Yes{% else %}No{% endif %}</td>
                <td>{% if livraison.domicile %}Yes{% else %}No{% endif %}</td>
                <td>{% if livraison.virified %}Yes{% else %}No{% endif %}</td>
                <td>{% if livraison.virifiedAt %}{{ livraison.virifiedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('livraison_show', { 'id': livraison.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('livraison_edit', { 'id': livraison.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('livraison_new') }}\">Create a new livraison</a>
        </li>
    </ul>
{% endblock %}
", ":livraison:index.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app/Resources\\views/livraison/index.html.twig");
    }
}
