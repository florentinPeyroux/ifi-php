<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_da81bd462328af9164cfd2321910998813be329d52d905ff149c97ef44ba3eb1 extends Twig_Template
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
        $__internal_d85226bbb46b190b47192982e0b649f57ebdf014d0e94d86d1d6110e534a2a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85226bbb46b190b47192982e0b649f57ebdf014d0e94d86d1d6110e534a2a95->enter($__internal_d85226bbb46b190b47192982e0b649f57ebdf014d0e94d86d1d6110e534a2a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d85226bbb46b190b47192982e0b649f57ebdf014d0e94d86d1d6110e534a2a95->leave($__internal_d85226bbb46b190b47192982e0b649f57ebdf014d0e94d86d1d6110e534a2a95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
