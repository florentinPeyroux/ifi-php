<?php

/* homepage.html.twig */
class __TwigTemplate_9d3b5988568d4e2ab11a6053b76a8ea6189ad226fec94584e37880ffe98b5ef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_325adaf16132d24c45fec85390bf92ec8bdf9d895b78811b4017281589e76d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325adaf16132d24c45fec85390bf92ec8bdf9d895b78811b4017281589e76d43->enter($__internal_325adaf16132d24c45fec85390bf92ec8bdf9d895b78811b4017281589e76d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_325adaf16132d24c45fec85390bf92ec8bdf9d895b78811b4017281589e76d43->leave($__internal_325adaf16132d24c45fec85390bf92ec8bdf9d895b78811b4017281589e76d43_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e767818b520591bc0a8980ef245a7178a6bb03976df60c2866f9e7d86d7a2c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e767818b520591bc0a8980ef245a7178a6bb03976df60c2866f9e7d86d7a2c16->enter($__internal_e767818b520591bc0a8980ef245a7178a6bb03976df60c2866f9e7d86d7a2c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Tournaments ";
        
        $__internal_e767818b520591bc0a8980ef245a7178a6bb03976df60c2866f9e7d86d7a2c16->leave($__internal_e767818b520591bc0a8980ef245a7178a6bb03976df60c2866f9e7d86d7a2c16_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_69135ec0f8ec8d1cc18c1fbd8d3f423a3252d8c948fe0fd6c7f535cbfec4c80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69135ec0f8ec8d1cc18c1fbd8d3f423a3252d8c948fe0fd6c7f535cbfec4c80a->enter($__internal_69135ec0f8ec8d1cc18c1fbd8d3f423a3252d8c948fe0fd6c7f535cbfec4c80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Tournaments Manager</h1>
    ";
        // line 6
        echo (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 6, $this->getSourceContext()); })());
        echo "
    <ul>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new Twig_Error_Runtime('Variable "tournaments" does not exist.', 8, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 9
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tournament"], "name", array()), "html", null, true);
            echo "</li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "        <li>No tournament</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournament'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>
";
        
        $__internal_69135ec0f8ec8d1cc18c1fbd8d3f423a3252d8c948fe0fd6c7f535cbfec4c80a->leave($__internal_69135ec0f8ec8d1cc18c1fbd8d3f423a3252d8c948fe0fd6c7f535cbfec4c80a_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 13,  74 => 11,  66 => 9,  61 => 8,  56 => 6,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends 'base.html.twig' %}
{%  block  title%} Tournaments {% endblock %}

{% block body %}
    <h1>Tournaments Manager</h1>
    {{message|raw}}
    <ul>
        {% for tournament in tournaments  %}
            <li>{{ tournament.name }}</li>
        {% else %}
        <li>No tournament</li>
        {% endfor %}
    </ul>
{% endblock %}", "homepage.html.twig", "/home/m2eserv/peyroux/project/ifi-php/templates/homepage.html.twig");
    }
}
