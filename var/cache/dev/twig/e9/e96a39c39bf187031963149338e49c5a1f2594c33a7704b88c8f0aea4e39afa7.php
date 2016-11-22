<?php

/* AwesomeBundle:Default:page2.html.twig */
class __TwigTemplate_215f4065fb496c9af483c3a16606860235262afcdc426045b2a10f6fd19f7d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AwesomeBundle::layout.html.twig", "AwesomeBundle:Default:page2.html.twig", 1);
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
        $__internal_9935b30911d25510b5c3ebee1693c6dc4e5fb6c88e48e6526776e5eea226c31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9935b30911d25510b5c3ebee1693c6dc4e5fb6c88e48e6526776e5eea226c31b->enter($__internal_9935b30911d25510b5c3ebee1693c6dc4e5fb6c88e48e6526776e5eea226c31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AwesomeBundle:Default:page2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9935b30911d25510b5c3ebee1693c6dc4e5fb6c88e48e6526776e5eea226c31b->leave($__internal_9935b30911d25510b5c3ebee1693c6dc4e5fb6c88e48e6526776e5eea226c31b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b349e3935714501319e907ad301b1bea60222fee636cef21a6957e39c341a46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b349e3935714501319e907ad301b1bea60222fee636cef21a6957e39c341a46e->enter($__internal_b349e3935714501319e907ad301b1bea60222fee636cef21a6957e39c341a46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Page 2 - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b349e3935714501319e907ad301b1bea60222fee636cef21a6957e39c341a46e->leave($__internal_b349e3935714501319e907ad301b1bea60222fee636cef21a6957e39c341a46e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_a6621e2e1ca5150024df84d24bcaf4a998ac7a193be5f02fdf3423ebb6f962a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6621e2e1ca5150024df84d24bcaf4a998ac7a193be5f02fdf3423ebb6f962a1->enter($__internal_a6621e2e1ca5150024df84d24bcaf4a998ac7a193be5f02fdf3423ebb6f962a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<h3>Page 2</h3>

";
        
        $__internal_a6621e2e1ca5150024df84d24bcaf4a998ac7a193be5f02fdf3423ebb6f962a1->leave($__internal_a6621e2e1ca5150024df84d24bcaf4a998ac7a193be5f02fdf3423ebb6f962a1_prof);

    }

    public function getTemplateName()
    {
        return "AwesomeBundle:Default:page2.html.twig";
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
    Page 2 - {{ parent() }}
{% endblock title %}
{% block content %}
<h3>Page 2</h3>

{% endblock content %}

";
    }
}
