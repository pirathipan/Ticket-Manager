<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d0a63e3111e94921e93f9a0fcc9978f2507dab3d92680f30142cdbba4b34ca70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf1b7a2ad34870077c4b3880be7869e9861ed4c3e87b39a0725a48ab02446154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1b7a2ad34870077c4b3880be7869e9861ed4c3e87b39a0725a48ab02446154->enter($__internal_cf1b7a2ad34870077c4b3880be7869e9861ed4c3e87b39a0725a48ab02446154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf1b7a2ad34870077c4b3880be7869e9861ed4c3e87b39a0725a48ab02446154->leave($__internal_cf1b7a2ad34870077c4b3880be7869e9861ed4c3e87b39a0725a48ab02446154_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b1af3607b56a6d21af5160109bd067f056f15bd5b2ee3c3f18cd39bfc0e755f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1af3607b56a6d21af5160109bd067f056f15bd5b2ee3c3f18cd39bfc0e755f->enter($__internal_3b1af3607b56a6d21af5160109bd067f056f15bd5b2ee3c3f18cd39bfc0e755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b1af3607b56a6d21af5160109bd067f056f15bd5b2ee3c3f18cd39bfc0e755f->leave($__internal_3b1af3607b56a6d21af5160109bd067f056f15bd5b2ee3c3f18cd39bfc0e755f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_855f1f79fb389b9e9a49746bb0e8831f030e948134ca33ceda193ce7e5a0e6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855f1f79fb389b9e9a49746bb0e8831f030e948134ca33ceda193ce7e5a0e6ef->enter($__internal_855f1f79fb389b9e9a49746bb0e8831f030e948134ca33ceda193ce7e5a0e6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_855f1f79fb389b9e9a49746bb0e8831f030e948134ca33ceda193ce7e5a0e6ef->leave($__internal_855f1f79fb389b9e9a49746bb0e8831f030e948134ca33ceda193ce7e5a0e6ef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d52c8a4ea497d5e452458ed5f0594044528867fd23c0f4efe527284fbfc7877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d52c8a4ea497d5e452458ed5f0594044528867fd23c0f4efe527284fbfc7877->enter($__internal_7d52c8a4ea497d5e452458ed5f0594044528867fd23c0f4efe527284fbfc7877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d52c8a4ea497d5e452458ed5f0594044528867fd23c0f4efe527284fbfc7877->leave($__internal_7d52c8a4ea497d5e452458ed5f0594044528867fd23c0f4efe527284fbfc7877_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
