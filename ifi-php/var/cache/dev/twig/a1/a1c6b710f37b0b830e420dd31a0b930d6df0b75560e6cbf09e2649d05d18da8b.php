<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_011cafd7d7291201baa2d1c4f88fb6a1a537f75ea705f6831d40c4a7ee2677cd extends Twig_Template
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
        $__internal_79ea9b799eb58f785eddb4c81aa4c839cc1e2eb3a000907b11da56f66a8959a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ea9b799eb58f785eddb4c81aa4c839cc1e2eb3a000907b11da56f66a8959a1->enter($__internal_79ea9b799eb58f785eddb4c81aa4c839cc1e2eb3a000907b11da56f66a8959a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_79ea9b799eb58f785eddb4c81aa4c839cc1e2eb3a000907b11da56f66a8959a1->leave($__internal_79ea9b799eb58f785eddb4c81aa4c839cc1e2eb3a000907b11da56f66a8959a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
