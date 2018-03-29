<?php

/* base.html.twig */
class __TwigTemplate_c21f1fd49e12824caf1606ab87c672b7cc644679c4dc57646392d1fbb18719ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ba6dea6f032790c0040b9d09f012f575246748a1b0eb29a99ce81a7940e39cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba6dea6f032790c0040b9d09f012f575246748a1b0eb29a99ce81a7940e39cc->enter($__internal_5ba6dea6f032790c0040b9d09f012f575246748a1b0eb29a99ce81a7940e39cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_5ba6dea6f032790c0040b9d09f012f575246748a1b0eb29a99ce81a7940e39cc->leave($__internal_5ba6dea6f032790c0040b9d09f012f575246748a1b0eb29a99ce81a7940e39cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2367749a8cbb2f1c332b96994811da0e79823dece805cec658530619b5a64975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2367749a8cbb2f1c332b96994811da0e79823dece805cec658530619b5a64975->enter($__internal_2367749a8cbb2f1c332b96994811da0e79823dece805cec658530619b5a64975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2367749a8cbb2f1c332b96994811da0e79823dece805cec658530619b5a64975->leave($__internal_2367749a8cbb2f1c332b96994811da0e79823dece805cec658530619b5a64975_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37665a578709accd8053e0722b04eacf566a1df4142876e2afef826e8eee9690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37665a578709accd8053e0722b04eacf566a1df4142876e2afef826e8eee9690->enter($__internal_37665a578709accd8053e0722b04eacf566a1df4142876e2afef826e8eee9690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_37665a578709accd8053e0722b04eacf566a1df4142876e2afef826e8eee9690->leave($__internal_37665a578709accd8053e0722b04eacf566a1df4142876e2afef826e8eee9690_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_126989b04ca0f3d0033aa8b4e250c175752bb4e95beb29046350826ca64ce50d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126989b04ca0f3d0033aa8b4e250c175752bb4e95beb29046350826ca64ce50d->enter($__internal_126989b04ca0f3d0033aa8b4e250c175752bb4e95beb29046350826ca64ce50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_126989b04ca0f3d0033aa8b4e250c175752bb4e95beb29046350826ca64ce50d->leave($__internal_126989b04ca0f3d0033aa8b4e250c175752bb4e95beb29046350826ca64ce50d_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70b46e7c67363b539413f09fbd3a3a678ed443197a4639ebc88390f5e119e630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b46e7c67363b539413f09fbd3a3a678ed443197a4639ebc88390f5e119e630->enter($__internal_70b46e7c67363b539413f09fbd3a3a678ed443197a4639ebc88390f5e119e630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_70b46e7c67363b539413f09fbd3a3a678ed443197a4639ebc88390f5e119e630->leave($__internal_70b46e7c67363b539413f09fbd3a3a678ed443197a4639ebc88390f5e119e630_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 10,  79 => 9,  68 => 6,  56 => 5,  47 => 11,  44 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/m2eserv/peyroux/project/ifi-php/templates/base.html.twig");
    }
}
