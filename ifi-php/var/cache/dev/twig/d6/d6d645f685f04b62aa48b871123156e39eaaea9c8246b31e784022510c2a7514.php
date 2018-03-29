<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_08adb6af0d11bc17bf09eb05d53da1112e6069c28a5e63374d111d91f59f829a extends Twig_Template
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
        $__internal_02948809df5b7b3b62f6c4e75c5b3687ad29e8abfae98d25d72015a437aa95ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02948809df5b7b3b62f6c4e75c5b3687ad29e8abfae98d25d72015a437aa95ab->enter($__internal_02948809df5b7b3b62f6c4e75c5b3687ad29e8abfae98d25d72015a437aa95ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_02948809df5b7b3b62f6c4e75c5b3687ad29e8abfae98d25d72015a437aa95ab->leave($__internal_02948809df5b7b3b62f6c4e75c5b3687ad29e8abfae98d25d72015a437aa95ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
