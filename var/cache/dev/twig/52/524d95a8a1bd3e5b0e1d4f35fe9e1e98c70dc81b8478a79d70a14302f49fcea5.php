<?php

/* AwesomeBundle:Default:page1.html.twig */
class __TwigTemplate_8e451b984c8c54aa26e0b3e8d20eb6e75ead4cf1f2af3638e54a1faeb31986f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AwesomeBundle::layout.html.twig", "AwesomeBundle:Default:page1.html.twig", 1);
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
        $__internal_217497ee08be43b8411f068f5f94604e5dd7b748e05806e77eb5fbf4caaba8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217497ee08be43b8411f068f5f94604e5dd7b748e05806e77eb5fbf4caaba8e5->enter($__internal_217497ee08be43b8411f068f5f94604e5dd7b748e05806e77eb5fbf4caaba8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AwesomeBundle:Default:page1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_217497ee08be43b8411f068f5f94604e5dd7b748e05806e77eb5fbf4caaba8e5->leave($__internal_217497ee08be43b8411f068f5f94604e5dd7b748e05806e77eb5fbf4caaba8e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ae57a16ad8db1594e46513e124ff958bdd5663985e6b23cdddeb2c77d53663c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae57a16ad8db1594e46513e124ff958bdd5663985e6b23cdddeb2c77d53663c->enter($__internal_0ae57a16ad8db1594e46513e124ff958bdd5663985e6b23cdddeb2c77d53663c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    page - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0ae57a16ad8db1594e46513e124ff958bdd5663985e6b23cdddeb2c77d53663c->leave($__internal_0ae57a16ad8db1594e46513e124ff958bdd5663985e6b23cdddeb2c77d53663c_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_cf229b71eeb0e6bbdff33960cd81a825fc9061c1459c768b23ca60c024832ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf229b71eeb0e6bbdff33960cd81a825fc9061c1459c768b23ca60c024832ba9->enter($__internal_cf229b71eeb0e6bbdff33960cd81a825fc9061c1459c768b23ca60c024832ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<h3>Page 1</h3>
 home -
";
        
        $__internal_cf229b71eeb0e6bbdff33960cd81a825fc9061c1459c768b23ca60c024832ba9->leave($__internal_cf229b71eeb0e6bbdff33960cd81a825fc9061c1459c768b23ca60c024832ba9_prof);

    }

    public function getTemplateName()
    {
        return "AwesomeBundle:Default:page1.html.twig";
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
    page - {{ parent() }}
{% endblock title %}
{% block content %}
<h3>Page 1</h3>
 home -
{% endblock content %}

";
    }
}
