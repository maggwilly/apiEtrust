<?php

/* :contact:index.html.twig */
class __TwigTemplate_8d5765b13aa11666eb01847c8969dec2a68bed202a04282bf035aea13279d2ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contact:index.html.twig", 1);
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
        $__internal_22b51e695cf1124ffdaf1f26e711ecb1fa54dbc0e5b7b55b6e4cdae915949344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b51e695cf1124ffdaf1f26e711ecb1fa54dbc0e5b7b55b6e4cdae915949344->enter($__internal_22b51e695cf1124ffdaf1f26e711ecb1fa54dbc0e5b7b55b6e4cdae915949344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22b51e695cf1124ffdaf1f26e711ecb1fa54dbc0e5b7b55b6e4cdae915949344->leave($__internal_22b51e695cf1124ffdaf1f26e711ecb1fa54dbc0e5b7b55b6e4cdae915949344_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7532b0c2e731a82b243d5979c306d5b5d4dbeecdc47c1f4983e739bcdc944c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7532b0c2e731a82b243d5979c306d5b5d4dbeecdc47c1f4983e739bcdc944c02->enter($__internal_7532b0c2e731a82b243d5979c306d5b5d4dbeecdc47c1f4983e739bcdc944c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contacts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Whatsapp</th>
                <th>Fecebook</th>
                <th>Virified</th>
                <th>Virifiedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "whatsapp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "fecebook", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["contact"], "virified", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["contact"], "virifiedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "virifiedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_edit", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_new");
        echo "\">Create a new contact</a>
        </li>
    </ul>
";
        
        $__internal_7532b0c2e731a82b243d5979c306d5b5d4dbeecdc47c1f4983e739bcdc944c02->leave($__internal_7532b0c2e731a82b243d5979c306d5b5d4dbeecdc47c1f4983e739bcdc944c02_prof);

    }

    public function getTemplateName()
    {
        return ":contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  122 => 41,  110 => 35,  104 => 32,  95 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Contacts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Whatsapp</th>
                <th>Fecebook</th>
                <th>Virified</th>
                <th>Virifiedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for contact in contacts %}
            <tr>
                <td><a href=\"{{ path('contact_show', { 'id': contact.id }) }}\">{{ contact.id }}</a></td>
                <td>{{ contact.telephone }}</td>
                <td>{{ contact.email }}</td>
                <td>{{ contact.whatsapp }}</td>
                <td>{{ contact.fecebook }}</td>
                <td>{% if contact.virified %}Yes{% else %}No{% endif %}</td>
                <td>{% if contact.virifiedAt %}{{ contact.virifiedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('contact_show', { 'id': contact.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('contact_edit', { 'id': contact.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('contact_new') }}\">Create a new contact</a>
        </li>
    </ul>
{% endblock %}
", ":contact:index.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app/Resources\\views/contact/index.html.twig");
    }
}
