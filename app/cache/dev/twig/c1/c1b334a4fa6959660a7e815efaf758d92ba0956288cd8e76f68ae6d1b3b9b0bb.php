<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_fb26bf802d3b0a71b1a987ce7fb1e20a17fcd5490b16549e91df3782bfb76047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c2b90e866158e8d5bbdae7e4e77ff3b22595b8da6b26db6598447f7b5deb978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2b90e866158e8d5bbdae7e4e77ff3b22595b8da6b26db6598447f7b5deb978->enter($__internal_0c2b90e866158e8d5bbdae7e4e77ff3b22595b8da6b26db6598447f7b5deb978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0c2b90e866158e8d5bbdae7e4e77ff3b22595b8da6b26db6598447f7b5deb978->leave($__internal_0c2b90e866158e8d5bbdae7e4e77ff3b22595b8da6b26db6598447f7b5deb978_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ed3d6e81de926306ce91da58f2b2b37a4c68b1dd01671fcdd89a1bb57b4f26c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed3d6e81de926306ce91da58f2b2b37a4c68b1dd01671fcdd89a1bb57b4f26c->enter($__internal_8ed3d6e81de926306ce91da58f2b2b37a4c68b1dd01671fcdd89a1bb57b4f26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8ed3d6e81de926306ce91da58f2b2b37a4c68b1dd01671fcdd89a1bb57b4f26c->leave($__internal_8ed3d6e81de926306ce91da58f2b2b37a4c68b1dd01671fcdd89a1bb57b4f26c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
