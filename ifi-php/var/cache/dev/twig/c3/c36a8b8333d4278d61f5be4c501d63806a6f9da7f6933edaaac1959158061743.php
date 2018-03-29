<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_89e4f2073c2bf935b8620f92b6ef1eb4b048da781142e98bedeb76927bf9e75d extends Twig_Template
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
        $__internal_44d81118c1485888a039888b541326c799f17959db50dfa6ccae8b3f27aa1cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d81118c1485888a039888b541326c799f17959db50dfa6ccae8b3f27aa1cee->enter($__internal_44d81118c1485888a039888b541326c799f17959db50dfa6ccae8b3f27aa1cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_44d81118c1485888a039888b541326c799f17959db50dfa6ccae8b3f27aa1cee->leave($__internal_44d81118c1485888a039888b541326c799f17959db50dfa6ccae8b3f27aa1cee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
