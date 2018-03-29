<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4327e4a9abd7d38d0efa326564597879b69aa4110842a93b853da22cb7fe9a61 extends Twig_Template
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
        $__internal_d73df47c017a2798e9a7952ed5509aaae69cabd71709160db6419aba0d0410df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73df47c017a2798e9a7952ed5509aaae69cabd71709160db6419aba0d0410df->enter($__internal_d73df47c017a2798e9a7952ed5509aaae69cabd71709160db6419aba0d0410df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d73df47c017a2798e9a7952ed5509aaae69cabd71709160db6419aba0d0410df->leave($__internal_d73df47c017a2798e9a7952ed5509aaae69cabd71709160db6419aba0d0410df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
