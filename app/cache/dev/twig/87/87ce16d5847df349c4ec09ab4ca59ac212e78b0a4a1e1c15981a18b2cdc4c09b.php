<?php

/* :contact:new.html.twig */
class __TwigTemplate_ebd5bf3185f7c647718e490acfc136ba8385b4f45d115f4dd0338d50de7c9e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contact:new.html.twig", 1);
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
        $__internal_d92725c02a84f8e27153a8c12f528df679b4a06ef534ebc80bdf587f3b9d1880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92725c02a84f8e27153a8c12f528df679b4a06ef534ebc80bdf587f3b9d1880->enter($__internal_d92725c02a84f8e27153a8c12f528df679b4a06ef534ebc80bdf587f3b9d1880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contact:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92725c02a84f8e27153a8c12f528df679b4a06ef534ebc80bdf587f3b9d1880->leave($__internal_d92725c02a84f8e27153a8c12f528df679b4a06ef534ebc80bdf587f3b9d1880_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39c9599e07d0047555b3af5a57ea095c0a614472fbf308ee2aa7129d1e9891d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c9599e07d0047555b3af5a57ea095c0a614472fbf308ee2aa7129d1e9891d0->enter($__internal_39c9599e07d0047555b3af5a57ea095c0a614472fbf308ee2aa7129d1e9891d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_39c9599e07d0047555b3af5a57ea095c0a614472fbf308ee2aa7129d1e9891d0->leave($__internal_39c9599e07d0047555b3af5a57ea095c0a614472fbf308ee2aa7129d1e9891d0_prof);

    }

    public function getTemplateName()
    {
        return ":contact:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Contact creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('contact_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":contact:new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app/Resources\\views/contact/new.html.twig");
    }
}
