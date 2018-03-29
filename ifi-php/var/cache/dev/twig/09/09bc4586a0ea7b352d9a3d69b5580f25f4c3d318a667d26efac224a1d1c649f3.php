<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a962d436d4e20ee55de0d40b59a5a304ac5f80819e7c349a6f4465efa8da947d extends Twig_Template
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
        $__internal_a1244e630a6d9d43f53cb163ea99e9937706ad06617870ab14b12eacd0370b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1244e630a6d9d43f53cb163ea99e9937706ad06617870ab14b12eacd0370b6d->enter($__internal_a1244e630a6d9d43f53cb163ea99e9937706ad06617870ab14b12eacd0370b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a1244e630a6d9d43f53cb163ea99e9937706ad06617870ab14b12eacd0370b6d->leave($__internal_a1244e630a6d9d43f53cb163ea99e9937706ad06617870ab14b12eacd0370b6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
