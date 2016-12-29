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
        $__internal_42fb44aac20cd2656d20342f0fcaf7a41213834ddf66c548f9d3d55fae670e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fb44aac20cd2656d20342f0fcaf7a41213834ddf66c548f9d3d55fae670e0e->enter($__internal_42fb44aac20cd2656d20342f0fcaf7a41213834ddf66c548f9d3d55fae670e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_42fb44aac20cd2656d20342f0fcaf7a41213834ddf66c548f9d3d55fae670e0e->leave($__internal_42fb44aac20cd2656d20342f0fcaf7a41213834ddf66c548f9d3d55fae670e0e_prof);

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
