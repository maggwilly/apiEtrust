<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bf26844c632f288a5765d2fec29ca2c3a7c30a8263f88efb0a90ddc63fbc2ce6 extends Twig_Template
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
        $__internal_65a2c7714e29a2ea271550b81580fbc3a49a9cb10939a8a72bec7749c0d81ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a2c7714e29a2ea271550b81580fbc3a49a9cb10939a8a72bec7749c0d81ad5->enter($__internal_65a2c7714e29a2ea271550b81580fbc3a49a9cb10939a8a72bec7749c0d81ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_65a2c7714e29a2ea271550b81580fbc3a49a9cb10939a8a72bec7749c0d81ad5->leave($__internal_65a2c7714e29a2ea271550b81580fbc3a49a9cb10939a8a72bec7749c0d81ad5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}