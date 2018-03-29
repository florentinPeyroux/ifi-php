<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_edfe824178175c65af96388bbd8f24da004fba1809ec9e2fbb8d6b1aa75348e6 extends Twig_Template
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
        $__internal_099c7f2f2800af6433238f4cef4c052ccbfa49c00851c31b39aa99ebb6b871a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099c7f2f2800af6433238f4cef4c052ccbfa49c00851c31b39aa99ebb6b871a9->enter($__internal_099c7f2f2800af6433238f4cef4c052ccbfa49c00851c31b39aa99ebb6b871a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_099c7f2f2800af6433238f4cef4c052ccbfa49c00851c31b39aa99ebb6b871a9->leave($__internal_099c7f2f2800af6433238f4cef4c052ccbfa49c00851c31b39aa99ebb6b871a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
