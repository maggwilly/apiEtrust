<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_2d3a6f40b98711a91dc70fe482ca2286cb8e97bfb12a9be1765ce93b0a5d2abd extends Twig_Template
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
        $__internal_a1f0c325ba6864367807583db9c5eeee9244d699dbf02907b4b864e2d6c03074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f0c325ba6864367807583db9c5eeee9244d699dbf02907b4b864e2d6c03074->enter($__internal_a1f0c325ba6864367807583db9c5eeee9244d699dbf02907b4b864e2d6c03074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a1f0c325ba6864367807583db9c5eeee9244d699dbf02907b4b864e2d6c03074->leave($__internal_a1f0c325ba6864367807583db9c5eeee9244d699dbf02907b4b864e2d6c03074_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
