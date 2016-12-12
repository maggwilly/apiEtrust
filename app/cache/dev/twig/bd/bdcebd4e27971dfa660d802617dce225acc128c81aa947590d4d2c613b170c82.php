<?php

/* AppBundle:Produit:index.html.twig */
class __TwigTemplate_4944ce8cec748e5bb69e2607b19d8c8ae6eae5ae2e88065eea20f547ad26a583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Produit:index.html.twig", 1);
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
        $__internal_9aebb7c5846a5f7c779b506acc51619a277300296be3406ab034ff3fcb70749e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aebb7c5846a5f7c779b506acc51619a277300296be3406ab034ff3fcb70749e->enter($__internal_9aebb7c5846a5f7c779b506acc51619a277300296be3406ab034ff3fcb70749e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Produit:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aebb7c5846a5f7c779b506acc51619a277300296be3406ab034ff3fcb70749e->leave($__internal_9aebb7c5846a5f7c779b506acc51619a277300296be3406ab034ff3fcb70749e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4c54fa3e9ba67088bd1d508bd911eb494b7258430b50913239a99e855680ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c54fa3e9ba67088bd1d508bd911eb494b7258430b50913239a99e855680ee9->enter($__internal_f4c54fa3e9ba67088bd1d508bd911eb494b7258430b50913239a99e855680ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Produit list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Prix</th>
                <th>Nom</th>
                <th>Conditionement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "conditionement", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 35
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_f4c54fa3e9ba67088bd1d508bd911eb494b7258430b50913239a99e855680ee9->leave($__internal_f4c54fa3e9ba67088bd1d508bd911eb494b7258430b50913239a99e855680ee9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Produit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Produit list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Prix</th>
                <th>Nom</th>
                <th>Conditionement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('produit_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.prix }}</td>
                <td>{{ entity.nom }}</td>
                <td>{{ entity.conditionement }}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('produit_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('produit_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"{{ path('produit_new') }}\">
                Create a new entry
            </a>
        </li>
    </ul>
    {% endblock %}
", "AppBundle:Produit:index.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/Produit/index.html.twig");
    }
}
