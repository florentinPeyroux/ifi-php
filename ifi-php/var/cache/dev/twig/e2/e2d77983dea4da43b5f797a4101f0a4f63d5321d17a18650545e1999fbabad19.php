<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_51589a80da90cfb9e63a71ae2a6767159ade9a31ecd7f649f1f8267b134b99e8 extends Twig_Template
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
        $__internal_7bf06fed02c8e50f7b9b6ab63dd1ccccdd068b96a60fc82c7a532c79ed8eb83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf06fed02c8e50f7b9b6ab63dd1ccccdd068b96a60fc82c7a532c79ed8eb83f->enter($__internal_7bf06fed02c8e50f7b9b6ab63dd1ccccdd068b96a60fc82c7a532c79ed8eb83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7bf06fed02c8e50f7b9b6ab63dd1ccccdd068b96a60fc82c7a532c79ed8eb83f->leave($__internal_7bf06fed02c8e50f7b9b6ab63dd1ccccdd068b96a60fc82c7a532c79ed8eb83f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
