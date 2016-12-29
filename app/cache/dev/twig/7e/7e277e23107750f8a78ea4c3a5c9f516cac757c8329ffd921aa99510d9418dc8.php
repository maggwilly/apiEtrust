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
        $__internal_4b35d36a097289c8272e5cad8c08af40e3a2caede9efeffcc9d4487c73241c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b35d36a097289c8272e5cad8c08af40e3a2caede9efeffcc9d4487c73241c41->enter($__internal_4b35d36a097289c8272e5cad8c08af40e3a2caede9efeffcc9d4487c73241c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicite:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b35d36a097289c8272e5cad8c08af40e3a2caede9efeffcc9d4487c73241c41->leave($__internal_4b35d36a097289c8272e5cad8c08af40e3a2caede9efeffcc9d4487c73241c41_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3127fed450e7c79d05b3b76c0e6c5d2003ada8c09af369b99d2db24eb23ac0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3127fed450e7c79d05b3b76c0e6c5d2003ada8c09af369b99d2db24eb23ac0e9->enter($__internal_3127fed450e7c79d05b3b76c0e6c5d2003ada8c09af369b99d2db24eb23ac0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3127fed450e7c79d05b3b76c0e6c5d2003ada8c09af369b99d2db24eb23ac0e9->leave($__internal_3127fed450e7c79d05b3b76c0e6c5d2003ada8c09af369b99d2db24eb23ac0e9_prof);

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
