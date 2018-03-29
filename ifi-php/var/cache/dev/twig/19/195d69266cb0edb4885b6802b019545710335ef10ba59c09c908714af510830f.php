<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_df84c8a9fb26f9112806cda162c685ffdb6e0152d98be3c0b02e529b82f5b2f8 extends Twig_Template
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
        $__internal_63cedd746924a830a5b788a354816aab3ee969e6024db5ea3fdba3aa6c6298b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cedd746924a830a5b788a354816aab3ee969e6024db5ea3fdba3aa6c6298b7->enter($__internal_63cedd746924a830a5b788a354816aab3ee969e6024db5ea3fdba3aa6c6298b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_63cedd746924a830a5b788a354816aab3ee969e6024db5ea3fdba3aa6c6298b7->leave($__internal_63cedd746924a830a5b788a354816aab3ee969e6024db5ea3fdba3aa6c6298b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
