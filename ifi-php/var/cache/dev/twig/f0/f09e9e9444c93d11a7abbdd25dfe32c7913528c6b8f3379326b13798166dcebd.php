<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d0d56232a3db24e40360ca44a06b6fd397c04b213436543fe4b58d102eff01b8 extends Twig_Template
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
        $__internal_33ff82cfc10cdf4ac90fb8e1fb064c8acc96e97f7baa6e114bf6154a125bcaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ff82cfc10cdf4ac90fb8e1fb064c8acc96e97f7baa6e114bf6154a125bcaef->enter($__internal_33ff82cfc10cdf4ac90fb8e1fb064c8acc96e97f7baa6e114bf6154a125bcaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_33ff82cfc10cdf4ac90fb8e1fb064c8acc96e97f7baa6e114bf6154a125bcaef->leave($__internal_33ff82cfc10cdf4ac90fb8e1fb064c8acc96e97f7baa6e114bf6154a125bcaef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}
