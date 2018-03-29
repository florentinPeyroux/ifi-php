<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e215449d05f0a3756cf6f0b9d0bd9ba331c56009da2c0c3bc940865611598f9b extends Twig_Template
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
        $__internal_389ea3a8934c8935a8de8776aaa7daebb94393303e3027e62997f30a84973dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389ea3a8934c8935a8de8776aaa7daebb94393303e3027e62997f30a84973dba->enter($__internal_389ea3a8934c8935a8de8776aaa7daebb94393303e3027e62997f30a84973dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_389ea3a8934c8935a8de8776aaa7daebb94393303e3027e62997f30a84973dba->leave($__internal_389ea3a8934c8935a8de8776aaa7daebb94393303e3027e62997f30a84973dba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
