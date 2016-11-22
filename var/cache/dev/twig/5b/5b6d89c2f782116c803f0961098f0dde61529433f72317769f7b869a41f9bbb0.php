<?php

/* AwesomeBundle::layout.html.twig */
class __TwigTemplate_cf16619a9dc813641ccdca54bb50d9e42abb2f02842c3943f7853af03d1a45a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52a59d60105b4fd2ac84e4a72681787185428862275adf60a9063b3691ae5887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a59d60105b4fd2ac84e4a72681787185428862275adf60a9063b3691ae5887->enter($__internal_52a59d60105b4fd2ac84e4a72681787185428862275adf60a9063b3691ae5887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AwesomeBundle::layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>
        ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    </title>
    ";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 12
        echo "</head>
<body>

<header>
    Ticket Manager
    <ul>
        <li> <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page1");
        echo "\" >Page 1</a></li>
        <li> <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page2");
        echo "\" >Page 2</a></li>
        <li> <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page3");
        echo "\" >Page 3</a></li>
    </ul>
</header>

<div id=\"container\">

    <ul>
        <li> <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a> </li>

    </ul>

    ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "
</div>


";
        // line 40
        $this->displayBlock('js', $context, $blocks);
        // line 41
        echo "
</body>
</html>";
        
        $__internal_52a59d60105b4fd2ac84e4a72681787185428862275adf60a9063b3691ae5887->leave($__internal_52a59d60105b4fd2ac84e4a72681787185428862275adf60a9063b3691ae5887_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a115a7cc9ada0bc15559c7891c882b22ffe8901c161848ba2c7e9f2a27772bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a115a7cc9ada0bc15559c7891c882b22ffe8901c161848ba2c7e9f2a27772bc->enter($__internal_7a115a7cc9ada0bc15559c7891c882b22ffe8901c161848ba2c7e9f2a27772bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "            Ticket
        ";
        
        $__internal_7a115a7cc9ada0bc15559c7891c882b22ffe8901c161848ba2c7e9f2a27772bc->leave($__internal_7a115a7cc9ada0bc15559c7891c882b22ffe8901c161848ba2c7e9f2a27772bc_prof);

    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
        $__internal_1bcaa07f7acfb35090c13821625798a00f845d81a6070904436f1b7575e9fef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcaa07f7acfb35090c13821625798a00f845d81a6070904436f1b7575e9fef0->enter($__internal_1bcaa07f7acfb35090c13821625798a00f845d81a6070904436f1b7575e9fef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 11
        echo "    ";
        
        $__internal_1bcaa07f7acfb35090c13821625798a00f845d81a6070904436f1b7575e9fef0->leave($__internal_1bcaa07f7acfb35090c13821625798a00f845d81a6070904436f1b7575e9fef0_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_52a26582138378f34b2a4dfd4ef9fdf0d75a8114241ca9cc0bc85aef74fa3863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a26582138378f34b2a4dfd4ef9fdf0d75a8114241ca9cc0bc85aef74fa3863->enter($__internal_52a26582138378f34b2a4dfd4ef9fdf0d75a8114241ca9cc0bc85aef74fa3863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "    ";
        
        $__internal_52a26582138378f34b2a4dfd4ef9fdf0d75a8114241ca9cc0bc85aef74fa3863->leave($__internal_52a26582138378f34b2a4dfd4ef9fdf0d75a8114241ca9cc0bc85aef74fa3863_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_808a8dd1ccdde8fa6de48aa360d60a8b008831fec35cf6c67b651015efec7c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808a8dd1ccdde8fa6de48aa360d60a8b008831fec35cf6c67b651015efec7c15->enter($__internal_808a8dd1ccdde8fa6de48aa360d60a8b008831fec35cf6c67b651015efec7c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "    ";
        
        $__internal_808a8dd1ccdde8fa6de48aa360d60a8b008831fec35cf6c67b651015efec7c15->leave($__internal_808a8dd1ccdde8fa6de48aa360d60a8b008831fec35cf6c67b651015efec7c15_prof);

    }

    // line 40
    public function block_js($context, array $blocks = array())
    {
        $__internal_b4c8ed97ee21c31140b4a0bcee21e8db0146810896e0e6dc546abb1abf4b74bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c8ed97ee21c31140b4a0bcee21e8db0146810896e0e6dc546abb1abf4b74bb->enter($__internal_b4c8ed97ee21c31140b4a0bcee21e8db0146810896e0e6dc546abb1abf4b74bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        echo " ";
        
        $__internal_b4c8ed97ee21c31140b4a0bcee21e8db0146810896e0e6dc546abb1abf4b74bb->leave($__internal_b4c8ed97ee21c31140b4a0bcee21e8db0146810896e0e6dc546abb1abf4b74bb_prof);

    }

    public function getTemplateName()
    {
        return "AwesomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 40,  144 => 35,  138 => 34,  131 => 32,  125 => 31,  118 => 11,  112 => 10,  104 => 7,  98 => 6,  89 => 41,  87 => 40,  81 => 36,  79 => 34,  76 => 33,  74 => 31,  67 => 27,  57 => 20,  53 => 19,  49 => 18,  41 => 12,  39 => 10,  36 => 9,  34 => 6,  27 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>
        {% block title %}
            Ticket
        {% endblock title %}
    </title>
    {% block css %}
    {% endblock css %}
</head>
<body>

<header>
    Ticket Manager
    <ul>
        <li> <a href=\"{{ path('page1') }}\" >Page 1</a></li>
        <li> <a href=\"{{ path('page2') }}\" >Page 2</a></li>
        <li> <a href=\"{{ path('page3') }}\" >Page 3</a></li>
    </ul>
</header>

<div id=\"container\">

    <ul>
        <li> <a href=\"{{ path('home') }}\">Home</a> </li>

    </ul>

    {% block content %}
    {% endblock content %}

    {% block body %}
    {% endblock body %}

</div>


{% block js %} {% endblock js %}

</body>
</html>";
    }
}
