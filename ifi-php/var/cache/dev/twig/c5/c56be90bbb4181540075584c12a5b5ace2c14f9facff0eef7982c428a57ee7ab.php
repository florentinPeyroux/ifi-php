<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_cc154d5cc15371061c31085bb208234ab8697d215691c4b1d65c19a07504f9c5 extends Twig_Template
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
        $__internal_962fb0382ac7b2c4f4db55b8742d15abd36fbbcfe44029f9261b65bc4215af62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962fb0382ac7b2c4f4db55b8742d15abd36fbbcfe44029f9261b65bc4215af62->enter($__internal_962fb0382ac7b2c4f4db55b8742d15abd36fbbcfe44029f9261b65bc4215af62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_962fb0382ac7b2c4f4db55b8742d15abd36fbbcfe44029f9261b65bc4215af62->leave($__internal_962fb0382ac7b2c4f4db55b8742d15abd36fbbcfe44029f9261b65bc4215af62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
