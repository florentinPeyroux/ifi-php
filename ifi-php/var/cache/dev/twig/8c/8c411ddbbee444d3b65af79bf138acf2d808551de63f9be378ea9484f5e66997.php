<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_77f0fbe506a5cca2da49b6fb5fb71f985a11ec64ec74a641271e2eb255dcf9d3 extends Twig_Template
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
        $__internal_4c7cda3d68a2e84902e3a1c37cf917483bfefa3f6412e75fb76acb82d95e9b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7cda3d68a2e84902e3a1c37cf917483bfefa3f6412e75fb76acb82d95e9b3b->enter($__internal_4c7cda3d68a2e84902e3a1c37cf917483bfefa3f6412e75fb76acb82d95e9b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4c7cda3d68a2e84902e3a1c37cf917483bfefa3f6412e75fb76acb82d95e9b3b->leave($__internal_4c7cda3d68a2e84902e3a1c37cf917483bfefa3f6412e75fb76acb82d95e9b3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
