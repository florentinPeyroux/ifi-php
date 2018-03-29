<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ba4e73a3df59268564eed99b5d65f956ec8b89b2710c6935a735219143a342ef extends Twig_Template
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
        $__internal_5c56bebb671d06baeef9815ee24f1ba96481965d4a443d768ce653e71bb5d30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c56bebb671d06baeef9815ee24f1ba96481965d4a443d768ce653e71bb5d30b->enter($__internal_5c56bebb671d06baeef9815ee24f1ba96481965d4a443d768ce653e71bb5d30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5c56bebb671d06baeef9815ee24f1ba96481965d4a443d768ce653e71bb5d30b->leave($__internal_5c56bebb671d06baeef9815ee24f1ba96481965d4a443d768ce653e71bb5d30b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
