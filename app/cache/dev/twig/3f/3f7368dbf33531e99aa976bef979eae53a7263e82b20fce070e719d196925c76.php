<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_41ba043cf5cb001436cb1b1bff94b892c4ca876af5a5372d78100e6597f294e0 extends Twig_Template
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
        $__internal_d4e1e13533fce0005feb42f094aa5a4a931e3c8d6b22b42e90b2ce6e2a4fd324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e1e13533fce0005feb42f094aa5a4a931e3c8d6b22b42e90b2ce6e2a4fd324->enter($__internal_d4e1e13533fce0005feb42f094aa5a4a931e3c8d6b22b42e90b2ce6e2a4fd324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d4e1e13533fce0005feb42f094aa5a4a931e3c8d6b22b42e90b2ce6e2a4fd324->leave($__internal_d4e1e13533fce0005feb42f094aa5a4a931e3c8d6b22b42e90b2ce6e2a4fd324_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
