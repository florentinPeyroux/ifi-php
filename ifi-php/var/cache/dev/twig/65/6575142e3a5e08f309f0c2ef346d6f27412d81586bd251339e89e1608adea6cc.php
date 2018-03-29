<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f7a9c733d8e832f86892a672ac85bda878d58806e109c080f7a317e10e1bff8d extends Twig_Template
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
        $__internal_c2d9b5cdd3edbaaac00cfa00b9b462088f6273587b6a78bd2d6d96a18983b341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d9b5cdd3edbaaac00cfa00b9b462088f6273587b6a78bd2d6d96a18983b341->enter($__internal_c2d9b5cdd3edbaaac00cfa00b9b462088f6273587b6a78bd2d6d96a18983b341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c2d9b5cdd3edbaaac00cfa00b9b462088f6273587b6a78bd2d6d96a18983b341->leave($__internal_c2d9b5cdd3edbaaac00cfa00b9b462088f6273587b6a78bd2d6d96a18983b341_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
