<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_081fc715318eee28a0255d7bd46f44c32d44e852b7aab5ff490f704ae270effa extends Twig_Template
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
        $__internal_4019c6eba82963c9cb7bd330ecd29a76fdcb57dc0ef3325d3d1cf4a4759c79d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4019c6eba82963c9cb7bd330ecd29a76fdcb57dc0ef3325d3d1cf4a4759c79d2->enter($__internal_4019c6eba82963c9cb7bd330ecd29a76fdcb57dc0ef3325d3d1cf4a4759c79d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4019c6eba82963c9cb7bd330ecd29a76fdcb57dc0ef3325d3d1cf4a4759c79d2->leave($__internal_4019c6eba82963c9cb7bd330ecd29a76fdcb57dc0ef3325d3d1cf4a4759c79d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
