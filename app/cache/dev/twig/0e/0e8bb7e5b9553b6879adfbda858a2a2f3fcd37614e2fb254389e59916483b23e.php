<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_494a7909941a2d559ee1d2fe3567821cdb02a8697cc554bad91c13e522cbc050 extends Twig_Template
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
        $__internal_91b1fddb4a76e0da5ca8774f006a1d5d3c458f9cfcbe8eeb5235ad1169fa5ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b1fddb4a76e0da5ca8774f006a1d5d3c458f9cfcbe8eeb5235ad1169fa5ab5->enter($__internal_91b1fddb4a76e0da5ca8774f006a1d5d3c458f9cfcbe8eeb5235ad1169fa5ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_91b1fddb4a76e0da5ca8774f006a1d5d3c458f9cfcbe8eeb5235ad1169fa5ab5->leave($__internal_91b1fddb4a76e0da5ca8774f006a1d5d3c458f9cfcbe8eeb5235ad1169fa5ab5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
