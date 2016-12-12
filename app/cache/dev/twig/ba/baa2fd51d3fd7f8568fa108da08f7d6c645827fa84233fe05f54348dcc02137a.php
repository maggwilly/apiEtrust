<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9e3d97d1dbf29902e4b45f8473567353caa9b51488031dc460fb53842426cf7c extends Twig_Template
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
        $__internal_12d0cd5ed98abd96d2f7adefd2e1a03377cdf9e7874b8e238546c568a3e0b47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d0cd5ed98abd96d2f7adefd2e1a03377cdf9e7874b8e238546c568a3e0b47d->enter($__internal_12d0cd5ed98abd96d2f7adefd2e1a03377cdf9e7874b8e238546c568a3e0b47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_12d0cd5ed98abd96d2f7adefd2e1a03377cdf9e7874b8e238546c568a3e0b47d->leave($__internal_12d0cd5ed98abd96d2f7adefd2e1a03377cdf9e7874b8e238546c568a3e0b47d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
