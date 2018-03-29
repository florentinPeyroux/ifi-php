<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_552f9a0d37cf5330e773d45ee0aed3f838f63bde5fd3d7324b6833196d2d8df3 extends Twig_Template
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
        $__internal_825a932283a6c731f9b416350bcd62552081ed938b08e717ceea561bd2b63309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825a932283a6c731f9b416350bcd62552081ed938b08e717ceea561bd2b63309->enter($__internal_825a932283a6c731f9b416350bcd62552081ed938b08e717ceea561bd2b63309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_825a932283a6c731f9b416350bcd62552081ed938b08e717ceea561bd2b63309->leave($__internal_825a932283a6c731f9b416350bcd62552081ed938b08e717ceea561bd2b63309_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
