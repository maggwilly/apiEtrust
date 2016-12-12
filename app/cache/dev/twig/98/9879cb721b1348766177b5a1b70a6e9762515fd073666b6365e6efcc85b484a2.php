<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e5a25d6f9e57915cfc2e5138716928e80a7fae971aaf39225dd8747fbdc574e7 extends Twig_Template
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
        $__internal_bd1cf3199c8140cb8707795a3042c682adfc28fac2a14a7928e22c4ced69c91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1cf3199c8140cb8707795a3042c682adfc28fac2a14a7928e22c4ced69c91a->enter($__internal_bd1cf3199c8140cb8707795a3042c682adfc28fac2a14a7928e22c4ced69c91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_bd1cf3199c8140cb8707795a3042c682adfc28fac2a14a7928e22c4ced69c91a->leave($__internal_bd1cf3199c8140cb8707795a3042c682adfc28fac2a14a7928e22c4ced69c91a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
