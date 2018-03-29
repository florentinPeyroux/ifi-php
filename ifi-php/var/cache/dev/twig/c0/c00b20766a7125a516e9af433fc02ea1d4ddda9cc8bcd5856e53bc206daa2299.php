<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6a8ad81a840bbb88f39073567d9d38b0f56a3a647a2314ab054a689dd72f86e2 extends Twig_Template
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
        $__internal_2f09ab70befea4e43932211792bfa4c6285f588eaebf0516acba46c224cdeff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f09ab70befea4e43932211792bfa4c6285f588eaebf0516acba46c224cdeff4->enter($__internal_2f09ab70befea4e43932211792bfa4c6285f588eaebf0516acba46c224cdeff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2f09ab70befea4e43932211792bfa4c6285f588eaebf0516acba46c224cdeff4->leave($__internal_2f09ab70befea4e43932211792bfa4c6285f588eaebf0516acba46c224cdeff4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
