<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_925e9cc353bd3f3161b96db9353a83fef38b5d5e10ac57a965ff413ca10704bf extends Twig_Template
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
        $__internal_051207c5ca800fda6a4bf62a56802fef53def476fd8e080499e21efaa4c61aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051207c5ca800fda6a4bf62a56802fef53def476fd8e080499e21efaa4c61aff->enter($__internal_051207c5ca800fda6a4bf62a56802fef53def476fd8e080499e21efaa4c61aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_051207c5ca800fda6a4bf62a56802fef53def476fd8e080499e21efaa4c61aff->leave($__internal_051207c5ca800fda6a4bf62a56802fef53def476fd8e080499e21efaa4c61aff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c276f1e1445cc0c8f47c8a205f31b8498ecef2b881c55b7f4cebb91de2198f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c276f1e1445cc0c8f47c8a205f31b8498ecef2b881c55b7f4cebb91de2198f5->enter($__internal_9c276f1e1445cc0c8f47c8a205f31b8498ecef2b881c55b7f4cebb91de2198f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c276f1e1445cc0c8f47c8a205f31b8498ecef2b881c55b7f4cebb91de2198f5->leave($__internal_9c276f1e1445cc0c8f47c8a205f31b8498ecef2b881c55b7f4cebb91de2198f5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74f1b3584d610b87889e524bb81c2d00bc59575341aa7cdbed48654a835b28ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f1b3584d610b87889e524bb81c2d00bc59575341aa7cdbed48654a835b28ee->enter($__internal_74f1b3584d610b87889e524bb81c2d00bc59575341aa7cdbed48654a835b28ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_74f1b3584d610b87889e524bb81c2d00bc59575341aa7cdbed48654a835b28ee->leave($__internal_74f1b3584d610b87889e524bb81c2d00bc59575341aa7cdbed48654a835b28ee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4839c3c7bc90c616088b77c6e003ad8a7f360ccd77e8587ee6fdef60e40490c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4839c3c7bc90c616088b77c6e003ad8a7f360ccd77e8587ee6fdef60e40490c2->enter($__internal_4839c3c7bc90c616088b77c6e003ad8a7f360ccd77e8587ee6fdef60e40490c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4839c3c7bc90c616088b77c6e003ad8a7f360ccd77e8587ee6fdef60e40490c2->leave($__internal_4839c3c7bc90c616088b77c6e003ad8a7f360ccd77e8587ee6fdef60e40490c2_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\s\\proje\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
