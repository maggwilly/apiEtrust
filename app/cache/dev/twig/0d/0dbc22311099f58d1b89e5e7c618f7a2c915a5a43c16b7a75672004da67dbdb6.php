<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_42cf398e6c96d9bcbe435ae25489b2cde7f6d66017cc12f72c23a041c49a50fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3e0f09a3863d158dbd2cdbaaafa761438ad311e5ee60c5a1b80cb1d1f9b694b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e0f09a3863d158dbd2cdbaaafa761438ad311e5ee60c5a1b80cb1d1f9b694b->enter($__internal_a3e0f09a3863d158dbd2cdbaaafa761438ad311e5ee60c5a1b80cb1d1f9b694b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a3e0f09a3863d158dbd2cdbaaafa761438ad311e5ee60c5a1b80cb1d1f9b694b->leave($__internal_a3e0f09a3863d158dbd2cdbaaafa761438ad311e5ee60c5a1b80cb1d1f9b694b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
