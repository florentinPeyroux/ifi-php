<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_99199c1ea65ec9de9eccb2cf5d8d833e1ece0e43d0edc3622ddc5bc873878743 extends Twig_Template
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
        $__internal_3bb224a364f9e6a281f669b1bcb371f0131089a3c805410b8fbc4d53b75df746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb224a364f9e6a281f669b1bcb371f0131089a3c805410b8fbc4d53b75df746->enter($__internal_3bb224a364f9e6a281f669b1bcb371f0131089a3c805410b8fbc4d53b75df746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3bb224a364f9e6a281f669b1bcb371f0131089a3c805410b8fbc4d53b75df746->leave($__internal_3bb224a364f9e6a281f669b1bcb371f0131089a3c805410b8fbc4d53b75df746_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
