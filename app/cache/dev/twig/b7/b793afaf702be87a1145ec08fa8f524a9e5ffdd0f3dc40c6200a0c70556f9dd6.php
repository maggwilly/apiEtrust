<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4fd09cfe6baf549329f6eb8fd2ec74b8baaf96ccc48d0d7c7af7b8c6143926dc extends Twig_Template
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
        $__internal_730d6163478cb1dc19d1f0a503f4e9f903854cffbc05c8aa982ff3c8e401719c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730d6163478cb1dc19d1f0a503f4e9f903854cffbc05c8aa982ff3c8e401719c->enter($__internal_730d6163478cb1dc19d1f0a503f4e9f903854cffbc05c8aa982ff3c8e401719c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_730d6163478cb1dc19d1f0a503f4e9f903854cffbc05c8aa982ff3c8e401719c->leave($__internal_730d6163478cb1dc19d1f0a503f4e9f903854cffbc05c8aa982ff3c8e401719c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
