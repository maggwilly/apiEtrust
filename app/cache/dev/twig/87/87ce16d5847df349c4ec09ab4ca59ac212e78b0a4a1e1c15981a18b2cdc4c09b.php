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
        $__internal_5b7b0ef9d063888c3b7fb6fe2582331ac10974fe4dd6a34b01ae1d67b4ea0b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7b0ef9d063888c3b7fb6fe2582331ac10974fe4dd6a34b01ae1d67b4ea0b2b->enter($__internal_5b7b0ef9d063888c3b7fb6fe2582331ac10974fe4dd6a34b01ae1d67b4ea0b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contact:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b7b0ef9d063888c3b7fb6fe2582331ac10974fe4dd6a34b01ae1d67b4ea0b2b->leave($__internal_5b7b0ef9d063888c3b7fb6fe2582331ac10974fe4dd6a34b01ae1d67b4ea0b2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fe67e067dcdce5bcdd56469121c6ad4ea7a690ad2cc2380743e138b20c08b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe67e067dcdce5bcdd56469121c6ad4ea7a690ad2cc2380743e138b20c08b59->enter($__internal_5fe67e067dcdce5bcdd56469121c6ad4ea7a690ad2cc2380743e138b20c08b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5fe67e067dcdce5bcdd56469121c6ad4ea7a690ad2cc2380743e138b20c08b59->leave($__internal_5fe67e067dcdce5bcdd56469121c6ad4ea7a690ad2cc2380743e138b20c08b59_prof);

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
