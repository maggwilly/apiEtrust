<?php

/* AppBundle:CommandeClient:new.html.twig */
class __TwigTemplate_be133343e365bd655e0d56cefc42d1155fd62c352bcf6d7ca72cd56fb90f3223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:CommandeClient:new.html.twig", 1);
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
        $__internal_f53b5123167e6c45c340c5971c8f24e2a67b337cb6c5a720332296fae4f2e7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53b5123167e6c45c340c5971c8f24e2a67b337cb6c5a720332296fae4f2e7ce->enter($__internal_f53b5123167e6c45c340c5971c8f24e2a67b337cb6c5a720332296fae4f2e7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:CommandeClient:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f53b5123167e6c45c340c5971c8f24e2a67b337cb6c5a720332296fae4f2e7ce->leave($__internal_f53b5123167e6c45c340c5971c8f24e2a67b337cb6c5a720332296fae4f2e7ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02c202c61f070a6fe7569f0ab2e3db3af21b1fad0419f5dc991a5269946bbadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c202c61f070a6fe7569f0ab2e3db3af21b1fad0419f5dc991a5269946bbadd->enter($__internal_02c202c61f070a6fe7569f0ab2e3db3af21b1fad0419f5dc991a5269946bbadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>CommandeClient creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_client");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_02c202c61f070a6fe7569f0ab2e3db3af21b1fad0419f5dc991a5269946bbadd->leave($__internal_02c202c61f070a6fe7569f0ab2e3db3af21b1fad0419f5dc991a5269946bbadd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:CommandeClient:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>CommandeClient creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('commande_client') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "AppBundle:CommandeClient:new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/CommandeClient/new.html.twig");
    }
}
