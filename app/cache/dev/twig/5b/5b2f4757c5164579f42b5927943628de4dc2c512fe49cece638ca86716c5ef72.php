<?php

/* :fiscalite:new.html.twig */
class __TwigTemplate_5605f456b7e96e89bdaddeed2ae57f28fb6ba274f7bcc9f60fd8650668ef25a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fiscalite:new.html.twig", 1);
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
        $__internal_1369bdfe72259b2e3208f93abbb4ffe03ef276a9e1502c688a7627ceb4a25b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1369bdfe72259b2e3208f93abbb4ffe03ef276a9e1502c688a7627ceb4a25b40->enter($__internal_1369bdfe72259b2e3208f93abbb4ffe03ef276a9e1502c688a7627ceb4a25b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fiscalite:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1369bdfe72259b2e3208f93abbb4ffe03ef276a9e1502c688a7627ceb4a25b40->leave($__internal_1369bdfe72259b2e3208f93abbb4ffe03ef276a9e1502c688a7627ceb4a25b40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b7f0c28a6bcc284919e738260cc5cb78863384d26a7e4f9929b610c349e7241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7f0c28a6bcc284919e738260cc5cb78863384d26a7e4f9929b610c349e7241->enter($__internal_7b7f0c28a6bcc284919e738260cc5cb78863384d26a7e4f9929b610c349e7241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiscalite creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiscalite_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7b7f0c28a6bcc284919e738260cc5cb78863384d26a7e4f9929b610c349e7241->leave($__internal_7b7f0c28a6bcc284919e738260cc5cb78863384d26a7e4f9929b610c349e7241_prof);

    }

    public function getTemplateName()
    {
        return ":fiscalite:new.html.twig";
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
    <h1>Fiscalite creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fiscalite_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":fiscalite:new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app/Resources\\views/fiscalite/new.html.twig");
    }
}
