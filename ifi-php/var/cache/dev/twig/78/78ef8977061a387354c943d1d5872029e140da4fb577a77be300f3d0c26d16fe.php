<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_4812c9b3b99676db733e82795268284182f2281054ab95e325e7fc91590a3dae extends Twig_Template
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
        $__internal_b48f10e965621ee8cfd815dc3f4c730c0a0729840f1c9052f440f5e06edf4bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48f10e965621ee8cfd815dc3f4c730c0a0729840f1c9052f440f5e06edf4bf2->enter($__internal_b48f10e965621ee8cfd815dc3f4c730c0a0729840f1c9052f440f5e06edf4bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_b48f10e965621ee8cfd815dc3f4c730c0a0729840f1c9052f440f5e06edf4bf2->leave($__internal_b48f10e965621ee8cfd815dc3f4c730c0a0729840f1c9052f440f5e06edf4bf2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
