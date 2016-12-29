<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_839618967b696d758b21cf79cf57f2862f115ae248cf706d60498a537aa32f12 extends Twig_Template
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
        $__internal_02191d438d6354ffcd3fd022c8a3abe563715af0c1872657810dfe1b7718f3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02191d438d6354ffcd3fd022c8a3abe563715af0c1872657810dfe1b7718f3d1->enter($__internal_02191d438d6354ffcd3fd022c8a3abe563715af0c1872657810dfe1b7718f3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_02191d438d6354ffcd3fd022c8a3abe563715af0c1872657810dfe1b7718f3d1->leave($__internal_02191d438d6354ffcd3fd022c8a3abe563715af0c1872657810dfe1b7718f3d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
