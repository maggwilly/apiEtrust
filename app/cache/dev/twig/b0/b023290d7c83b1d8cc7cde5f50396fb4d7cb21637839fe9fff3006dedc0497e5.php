<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_19c4c962b83697d078e2b2eb44982bd958e985306d82b7a677a8c36e2a703ba1 extends Twig_Template
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
        $__internal_ab7f95ca9bfb6604bdac23e14483e437c3a05c85aab1d6a8c41158f49828c123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7f95ca9bfb6604bdac23e14483e437c3a05c85aab1d6a8c41158f49828c123->enter($__internal_ab7f95ca9bfb6604bdac23e14483e437c3a05c85aab1d6a8c41158f49828c123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ab7f95ca9bfb6604bdac23e14483e437c3a05c85aab1d6a8c41158f49828c123->leave($__internal_ab7f95ca9bfb6604bdac23e14483e437c3a05c85aab1d6a8c41158f49828c123_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
