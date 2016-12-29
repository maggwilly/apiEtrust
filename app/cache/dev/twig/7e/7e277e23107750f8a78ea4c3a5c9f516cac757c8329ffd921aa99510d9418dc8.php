<?php

/* :publicite:new.html.twig */
class __TwigTemplate_65e9f08a87ebd5a19a84edc39e6cc6977e0552bd1b6add2a85d51efbbad7efb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":publicite:new.html.twig", 1);
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
        $__internal_04d7279d2622e65eb14878e79a3967c3190939232ed76dfc0e9fa8e5d58fc3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d7279d2622e65eb14878e79a3967c3190939232ed76dfc0e9fa8e5d58fc3e8->enter($__internal_04d7279d2622e65eb14878e79a3967c3190939232ed76dfc0e9fa8e5d58fc3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicite:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04d7279d2622e65eb14878e79a3967c3190939232ed76dfc0e9fa8e5d58fc3e8->leave($__internal_04d7279d2622e65eb14878e79a3967c3190939232ed76dfc0e9fa8e5d58fc3e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_399af6e988f1baea6f15c8c4b7936281bab5076f11f1cfa7d0be8d5fe1024627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399af6e988f1baea6f15c8c4b7936281bab5076f11f1cfa7d0be8d5fe1024627->enter($__internal_399af6e988f1baea6f15c8c4b7936281bab5076f11f1cfa7d0be8d5fe1024627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Publicite creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_399af6e988f1baea6f15c8c4b7936281bab5076f11f1cfa7d0be8d5fe1024627->leave($__internal_399af6e988f1baea6f15c8c4b7936281bab5076f11f1cfa7d0be8d5fe1024627_prof);

    }

    public function getTemplateName()
    {
        return ":publicite:new.html.twig";
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
    <h1>Publicite creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('publicite_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":publicite:new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app/Resources\\views/publicite/new.html.twig");
    }
}
