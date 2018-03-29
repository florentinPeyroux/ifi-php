<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5229a785b76aafe3340bf712279d0acba1433b1c072bce5dc923c3ec267af3d7 extends Twig_Template
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
        $__internal_5c4048c143777c4f6de174290bf2091eaeaa5b7bfb0d6418dad7ec59850a907a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4048c143777c4f6de174290bf2091eaeaa5b7bfb0d6418dad7ec59850a907a->enter($__internal_5c4048c143777c4f6de174290bf2091eaeaa5b7bfb0d6418dad7ec59850a907a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5c4048c143777c4f6de174290bf2091eaeaa5b7bfb0d6418dad7ec59850a907a->leave($__internal_5c4048c143777c4f6de174290bf2091eaeaa5b7bfb0d6418dad7ec59850a907a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
