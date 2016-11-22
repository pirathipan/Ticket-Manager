<?php

/* AwesomeBundle:Default:index.html.twig */
class __TwigTemplate_24fd9d1135f3b4384ab8b3845d68f4f50a1bc2925c93f9a735d5540893f525a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AwesomeBundle::layout.html.twig", "AwesomeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AwesomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea5bd3669005288996c49fa88187c37984adeb7c994c70855252e5793103e709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5bd3669005288996c49fa88187c37984adeb7c994c70855252e5793103e709->enter($__internal_ea5bd3669005288996c49fa88187c37984adeb7c994c70855252e5793103e709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AwesomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea5bd3669005288996c49fa88187c37984adeb7c994c70855252e5793103e709->leave($__internal_ea5bd3669005288996c49fa88187c37984adeb7c994c70855252e5793103e709_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a4e37b8fd1443297f681d4323488c74cd5200ca09e9ebd196d3e8911105b6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4e37b8fd1443297f681d4323488c74cd5200ca09e9ebd196d3e8911105b6c6->enter($__internal_6a4e37b8fd1443297f681d4323488c74cd5200ca09e9ebd196d3e8911105b6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Home - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6a4e37b8fd1443297f681d4323488c74cd5200ca09e9ebd196d3e8911105b6c6->leave($__internal_6a4e37b8fd1443297f681d4323488c74cd5200ca09e9ebd196d3e8911105b6c6_prof);

    }

    public function getTemplateName()
    {
        return "AwesomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"AwesomeBundle::layout.html.twig\" %}

{% block title %}
    Home - {{ parent() }}
{% endblock title %}


";
    }
}
