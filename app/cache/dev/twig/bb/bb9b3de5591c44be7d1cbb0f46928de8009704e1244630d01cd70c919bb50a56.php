<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_9db6d9b481490cac32f97b302f942da2ef76ff55e1a5b07778cc782c41dc7fb2 extends Twig_Template
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
        $__internal_51ac0a65874c5aeeff888ec2d2b5fe508052331bb8e846c67d8e3df8654e1a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ac0a65874c5aeeff888ec2d2b5fe508052331bb8e846c67d8e3df8654e1a19->enter($__internal_51ac0a65874c5aeeff888ec2d2b5fe508052331bb8e846c67d8e3df8654e1a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_51ac0a65874c5aeeff888ec2d2b5fe508052331bb8e846c67d8e3df8654e1a19->leave($__internal_51ac0a65874c5aeeff888ec2d2b5fe508052331bb8e846c67d8e3df8654e1a19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
