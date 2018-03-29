<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_264fbfe0bb007be1fe61597007ced67c7512d1f50f62070c3d6218b23539a821 extends Twig_Template
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
        $__internal_12d84301b8fcf3e6d164849a81f4e5ee64554acd21daa460a239bf248211927a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d84301b8fcf3e6d164849a81f4e5ee64554acd21daa460a239bf248211927a->enter($__internal_12d84301b8fcf3e6d164849a81f4e5ee64554acd21daa460a239bf248211927a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_12d84301b8fcf3e6d164849a81f4e5ee64554acd21daa460a239bf248211927a->leave($__internal_12d84301b8fcf3e6d164849a81f4e5ee64554acd21daa460a239bf248211927a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
