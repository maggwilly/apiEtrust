<?php

/* contact/show.html.twig */
class __TwigTemplate_179e531c4e29591d969f362a05059902bc4ed7ce2814b69e6e54f537b6739ccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/show.html.twig", 1);
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
        $__internal_8cd0abfe44df4748314966f9df28a66b6eb21aca2bc1190e529605828b89d533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd0abfe44df4748314966f9df28a66b6eb21aca2bc1190e529605828b89d533->enter($__internal_8cd0abfe44df4748314966f9df28a66b6eb21aca2bc1190e529605828b89d533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cd0abfe44df4748314966f9df28a66b6eb21aca2bc1190e529605828b89d533->leave($__internal_8cd0abfe44df4748314966f9df28a66b6eb21aca2bc1190e529605828b89d533_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c386fb69aa4bd64631f28b1fe5c7e0a4d46e0c01fc9d3d26c3832c6b8c997741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c386fb69aa4bd64631f28b1fe5c7e0a4d46e0c01fc9d3d26c3832c6b8c997741->enter($__internal_c386fb69aa4bd64631f28b1fe5c7e0a4d46e0c01fc9d3d26c3832c6b8c997741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Whatsapp</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "whatsapp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecebook</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "fecebook", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Virified</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "virified", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Virifiedat</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "virifiedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "virifiedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_edit", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c386fb69aa4bd64631f28b1fe5c7e0a4d46e0c01fc9d3d26c3832c6b8c997741->leave($__internal_c386fb69aa4bd64631f28b1fe5c7e0a4d46e0c01fc9d3d26c3832c6b8c997741_prof);

    }

    public function getTemplateName()
    {
        return "contact/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  118 => 47,  112 => 44,  106 => 41,  94 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Contact</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ contact.id }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ contact.telephone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ contact.email }}</td>
            </tr>
            <tr>
                <th>Whatsapp</th>
                <td>{{ contact.whatsapp }}</td>
            </tr>
            <tr>
                <th>Fecebook</th>
                <td>{{ contact.fecebook }}</td>
            </tr>
            <tr>
                <th>Virified</th>
                <td>{% if contact.virified %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Virifiedat</th>
                <td>{% if contact.virifiedAt %}{{ contact.virifiedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('contact_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('contact_edit', { 'id': contact.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "contact/show.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app\\Resources\\views\\contact\\show.html.twig");
    }
}
