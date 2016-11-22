<?php

/* AwesomeBundle:Default:page3.html.twig */
class __TwigTemplate_688d3377411682e67b2ba5fc2e65781498c45838de73e65ac5c209ecc96da5e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AwesomeBundle::layout.html.twig", "AwesomeBundle:Default:page3.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AwesomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b7aa12deebed171b4de97a689279636326164469e2842f9706fe2588781f8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7aa12deebed171b4de97a689279636326164469e2842f9706fe2588781f8a3->enter($__internal_7b7aa12deebed171b4de97a689279636326164469e2842f9706fe2588781f8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AwesomeBundle:Default:page3.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b7aa12deebed171b4de97a689279636326164469e2842f9706fe2588781f8a3->leave($__internal_7b7aa12deebed171b4de97a689279636326164469e2842f9706fe2588781f8a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21d55d9354ff59037c0eba63b90958abceb121e1bf785bbbe5f3531824fb177a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d55d9354ff59037c0eba63b90958abceb121e1bf785bbbe5f3531824fb177a->enter($__internal_21d55d9354ff59037c0eba63b90958abceb121e1bf785bbbe5f3531824fb177a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Page 3 - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_21d55d9354ff59037c0eba63b90958abceb121e1bf785bbbe5f3531824fb177a->leave($__internal_21d55d9354ff59037c0eba63b90958abceb121e1bf785bbbe5f3531824fb177a_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_b7f01475e414c2aef492f9a6e18ad3a3a3199303ed5e8b30619c5a99464a7e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f01475e414c2aef492f9a6e18ad3a3a3199303ed5e8b30619c5a99464a7e34->enter($__internal_b7f01475e414c2aef492f9a6e18ad3a3a3199303ed5e8b30619c5a99464a7e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<h3>Page 3</h3>
";
        
        $__internal_b7f01475e414c2aef492f9a6e18ad3a3a3199303ed5e8b30619c5a99464a7e34->leave($__internal_b7f01475e414c2aef492f9a6e18ad3a3a3199303ed5e8b30619c5a99464a7e34_prof);

    }

    public function getTemplateName()
    {
        return "AwesomeBundle:Default:page3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  51 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'AwesomeBundle::layout.html.twig' %}

{% block title %}
    Page 3 - {{ parent() }}
{% endblock title %}
{% block content %}
<h3>Page 3</h3>
{% endblock content %}

";
    }
}
