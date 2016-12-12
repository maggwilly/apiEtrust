<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_60d2d41cbc9f7bfb15e87b876ecedc4b2a9d53aea231ad779f657ecba40988ce extends Twig_Template
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
        $__internal_a9cc753df3b30043e6e385c76ee0812ef6893b85fe975acfc52a809e3a0f9d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9cc753df3b30043e6e385c76ee0812ef6893b85fe975acfc52a809e3a0f9d2f->enter($__internal_a9cc753df3b30043e6e385c76ee0812ef6893b85fe975acfc52a809e3a0f9d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a9cc753df3b30043e6e385c76ee0812ef6893b85fe975acfc52a809e3a0f9d2f->leave($__internal_a9cc753df3b30043e6e385c76ee0812ef6893b85fe975acfc52a809e3a0f9d2f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
