<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_8577676d34e344b66ebc3ee2ac9f75ef61792923ba9be68b0def59be10981093 extends Twig_Template
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
        $__internal_099cf28e5e1d22dc5003220bda9d400bc494a6bb4b512aa14b819b9c1360f1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099cf28e5e1d22dc5003220bda9d400bc494a6bb4b512aa14b819b9c1360f1e5->enter($__internal_099cf28e5e1d22dc5003220bda9d400bc494a6bb4b512aa14b819b9c1360f1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_099cf28e5e1d22dc5003220bda9d400bc494a6bb4b512aa14b819b9c1360f1e5->leave($__internal_099cf28e5e1d22dc5003220bda9d400bc494a6bb4b512aa14b819b9c1360f1e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
