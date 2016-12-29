<?php

/* AppBundle:CommandeClient:index.html.twig */
class __TwigTemplate_6e13e3ebd2aad64860b26f4e3d59720ce1a1672bf0f12780d61e2485345d200c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:CommandeClient:index.html.twig", 1);
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
        $__internal_a51b5d030d3c3cd2a5508200ff0a753b5d186290426c4bb4fa090178bd16ed6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51b5d030d3c3cd2a5508200ff0a753b5d186290426c4bb4fa090178bd16ed6e->enter($__internal_a51b5d030d3c3cd2a5508200ff0a753b5d186290426c4bb4fa090178bd16ed6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:CommandeClient:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a51b5d030d3c3cd2a5508200ff0a753b5d186290426c4bb4fa090178bd16ed6e->leave($__internal_a51b5d030d3c3cd2a5508200ff0a753b5d186290426c4bb4fa090178bd16ed6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5c16d60585da37f615878dd712cfe2cc4a2520fd963c700b8ed3de0707a3b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c16d60585da37f615878dd712cfe2cc4a2520fd963c700b8ed3de0707a3b06->enter($__internal_d5c16d60585da37f615878dd712cfe2cc4a2520fd963c700b8ed3de0707a3b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>CommandeClient list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_client_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "status", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_client_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_client_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 33
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_client_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_d5c16d60585da37f615878dd712cfe2cc4a2520fd963c700b8ed3de0707a3b06->leave($__internal_d5c16d60585da37f615878dd712cfe2cc4a2520fd963c700b8ed3de0707a3b06_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:CommandeClient:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  98 => 33,  86 => 27,  80 => 24,  73 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>CommandeClient list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('commande_client_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{% if entity.date %}{{ entity.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ entity.status }}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('commande_client_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('commande_client_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"{{ path('commande_client_new') }}\">
                Create a new entry
            </a>
        </li>
    </ul>
    {% endblock %}
", "AppBundle:CommandeClient:index.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/CommandeClient/index.html.twig");
    }
}
