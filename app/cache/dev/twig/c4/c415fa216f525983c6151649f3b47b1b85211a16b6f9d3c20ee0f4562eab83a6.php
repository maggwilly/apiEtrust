<?php

/* :livraison:show.html.twig */
class __TwigTemplate_13486014c6ab02e24897969ca3ce72909c6a3ea8678625bd981fe9cd4dffe10e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":livraison:show.html.twig", 1);
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
        $__internal_59857224415c709606e58b844f0adc308067d3a5793a4ac6d70ada93e60184cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59857224415c709606e58b844f0adc308067d3a5793a4ac6d70ada93e60184cc->enter($__internal_59857224415c709606e58b844f0adc308067d3a5793a4ac6d70ada93e60184cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":livraison:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59857224415c709606e58b844f0adc308067d3a5793a4ac6d70ada93e60184cc->leave($__internal_59857224415c709606e58b844f0adc308067d3a5793a4ac6d70ada93e60184cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed0d2d68888d69d71398ee19bbbef19c7bef8c1d4b0865a6dc576dce8202337d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0d2d68888d69d71398ee19bbbef19c7bef8c1d4b0865a6dc576dce8202337d->enter($__internal_ed0d2d68888d69d71398ee19bbbef19c7bef8c1d4b0865a6dc576dce8202337d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Livraison</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Internationnal</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "internationnal", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Delais</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "delais", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Support</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "support", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expedition</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "expedition", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Domicile</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "domicile", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Virified</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "virified", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Virifiedat</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "virifiedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "virifiedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison_edit", array("id" => $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ed0d2d68888d69d71398ee19bbbef19c7bef8c1d4b0865a6dc576dce8202337d->leave($__internal_ed0d2d68888d69d71398ee19bbbef19c7bef8c1d4b0865a6dc576dce8202337d_prof);

    }

    public function getTemplateName()
    {
        return ":livraison:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 53,  137 => 51,  131 => 48,  125 => 45,  113 => 38,  102 => 34,  91 => 30,  80 => 26,  73 => 22,  66 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Livraison</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ livraison.id }}</td>
            </tr>
            <tr>
                <th>Internationnal</th>
                <td>{% if livraison.internationnal %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Delais</th>
                <td>{{ livraison.delais }}</td>
            </tr>
            <tr>
                <th>Support</th>
                <td>{{ livraison.support }}</td>
            </tr>
            <tr>
                <th>Expedition</th>
                <td>{% if livraison.expedition %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Domicile</th>
                <td>{% if livraison.domicile %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Virified</th>
                <td>{% if livraison.virified %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Virifiedat</th>
                <td>{% if livraison.virifiedAt %}{{ livraison.virifiedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('livraison_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('livraison_edit', { 'id': livraison.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":livraison:show.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app/Resources\\views/livraison/show.html.twig");
    }
}
