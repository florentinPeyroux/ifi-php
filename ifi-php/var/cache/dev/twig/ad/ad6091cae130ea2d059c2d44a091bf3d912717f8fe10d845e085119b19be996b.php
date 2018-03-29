<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_82c483dbd962461bebd3e2fa1daef83287e92492876c19cc04a7a09ff433c88d extends Twig_Template
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
        $__internal_5603f7ce45ab85abac1b2c190d15ba45aaa182820cf6d17bf7fcb1c44364342d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5603f7ce45ab85abac1b2c190d15ba45aaa182820cf6d17bf7fcb1c44364342d->enter($__internal_5603f7ce45ab85abac1b2c190d15ba45aaa182820cf6d17bf7fcb1c44364342d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5603f7ce45ab85abac1b2c190d15ba45aaa182820cf6d17bf7fcb1c44364342d->leave($__internal_5603f7ce45ab85abac1b2c190d15ba45aaa182820cf6d17bf7fcb1c44364342d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
