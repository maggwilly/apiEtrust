<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5d205c8f938c4034ecd1e3ef3f3b93de14e2cc92c96a40b1addd02e1b9f5dfb3 extends Twig_Template
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
        $__internal_8d9572cdccd104e6a71a61c1ec52fe4b374cb2051d46eba128ee257114a0b13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9572cdccd104e6a71a61c1ec52fe4b374cb2051d46eba128ee257114a0b13c->enter($__internal_8d9572cdccd104e6a71a61c1ec52fe4b374cb2051d46eba128ee257114a0b13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8d9572cdccd104e6a71a61c1ec52fe4b374cb2051d46eba128ee257114a0b13c->leave($__internal_8d9572cdccd104e6a71a61c1ec52fe4b374cb2051d46eba128ee257114a0b13c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
