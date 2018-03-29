<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ad405ce1aa1aa3e128dbe24af3bf3352490e1d13e99eb925001b1c1fb330e572 extends Twig_Template
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
        $__internal_d070a92f07d204a4858c3ecb6c6069f343f4734c00a4283ff20ce683fa1d29ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d070a92f07d204a4858c3ecb6c6069f343f4734c00a4283ff20ce683fa1d29ff->enter($__internal_d070a92f07d204a4858c3ecb6c6069f343f4734c00a4283ff20ce683fa1d29ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d070a92f07d204a4858c3ecb6c6069f343f4734c00a4283ff20ce683fa1d29ff->leave($__internal_d070a92f07d204a4858c3ecb6c6069f343f4734c00a4283ff20ce683fa1d29ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
