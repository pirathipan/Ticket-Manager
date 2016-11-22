<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2cab3fd9608e6ad4dfa712fde2ef82a3d067000bd5151b8def630fcb6ae30285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80a3cb55d88e40a10ca5cd95b9361e9f165a6ac747e033a42aa9e950320187f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a3cb55d88e40a10ca5cd95b9361e9f165a6ac747e033a42aa9e950320187f4->enter($__internal_80a3cb55d88e40a10ca5cd95b9361e9f165a6ac747e033a42aa9e950320187f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a3cb55d88e40a10ca5cd95b9361e9f165a6ac747e033a42aa9e950320187f4->leave($__internal_80a3cb55d88e40a10ca5cd95b9361e9f165a6ac747e033a42aa9e950320187f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9207075f048a0eba20d589e6705fec6694750fde7750be613f08ce26cbd4242d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9207075f048a0eba20d589e6705fec6694750fde7750be613f08ce26cbd4242d->enter($__internal_9207075f048a0eba20d589e6705fec6694750fde7750be613f08ce26cbd4242d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9207075f048a0eba20d589e6705fec6694750fde7750be613f08ce26cbd4242d->leave($__internal_9207075f048a0eba20d589e6705fec6694750fde7750be613f08ce26cbd4242d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_affacc8f167e44420846abce89bb66e535f720285a0a5de04263d57a2d69341d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affacc8f167e44420846abce89bb66e535f720285a0a5de04263d57a2d69341d->enter($__internal_affacc8f167e44420846abce89bb66e535f720285a0a5de04263d57a2d69341d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_affacc8f167e44420846abce89bb66e535f720285a0a5de04263d57a2d69341d->leave($__internal_affacc8f167e44420846abce89bb66e535f720285a0a5de04263d57a2d69341d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_afde5f88c906a65dff02199835aff95f142cee16892b7ed9cfb3c610cd78de33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afde5f88c906a65dff02199835aff95f142cee16892b7ed9cfb3c610cd78de33->enter($__internal_afde5f88c906a65dff02199835aff95f142cee16892b7ed9cfb3c610cd78de33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_afde5f88c906a65dff02199835aff95f142cee16892b7ed9cfb3c610cd78de33->leave($__internal_afde5f88c906a65dff02199835aff95f142cee16892b7ed9cfb3c610cd78de33_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
