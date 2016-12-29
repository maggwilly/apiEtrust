<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c8fe1ca09b993007444ccc9356ea957f689e9abb9dc1ffe47c57be70607427b1 extends Twig_Template
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
        $__internal_3138f921b82686c3bc95700c592c396b8d8f1adbd2d45c46117f8a0ec639abe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3138f921b82686c3bc95700c592c396b8d8f1adbd2d45c46117f8a0ec639abe9->enter($__internal_3138f921b82686c3bc95700c592c396b8d8f1adbd2d45c46117f8a0ec639abe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3138f921b82686c3bc95700c592c396b8d8f1adbd2d45c46117f8a0ec639abe9->leave($__internal_3138f921b82686c3bc95700c592c396b8d8f1adbd2d45c46117f8a0ec639abe9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
