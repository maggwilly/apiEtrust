<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_0f8cf1196e39cfe618c9ca4f6751ed365ee5a7e96d29351dcd1697245f5c47fc extends Twig_Template
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
        $__internal_00785aa586c7a4693e1bf5fac8836fb4ce8a3d92c109d2548167e9fca92e2e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00785aa586c7a4693e1bf5fac8836fb4ce8a3d92c109d2548167e9fca92e2e56->enter($__internal_00785aa586c7a4693e1bf5fac8836fb4ce8a3d92c109d2548167e9fca92e2e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_00785aa586c7a4693e1bf5fac8836fb4ce8a3d92c109d2548167e9fca92e2e56->leave($__internal_00785aa586c7a4693e1bf5fac8836fb4ce8a3d92c109d2548167e9fca92e2e56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
