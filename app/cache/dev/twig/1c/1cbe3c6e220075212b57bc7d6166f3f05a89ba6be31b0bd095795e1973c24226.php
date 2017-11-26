<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1dec2d008c0fab21f33f85bb11c002a68c1bd73dbda8895ea69129d1b77d3248 extends Twig_Template
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
        $__internal_6a44cb9667f6acafb2d7f270f3ee66cf2c3365aed1c915936a4148653d7f6999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a44cb9667f6acafb2d7f270f3ee66cf2c3365aed1c915936a4148653d7f6999->enter($__internal_6a44cb9667f6acafb2d7f270f3ee66cf2c3365aed1c915936a4148653d7f6999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a44cb9667f6acafb2d7f270f3ee66cf2c3365aed1c915936a4148653d7f6999->leave($__internal_6a44cb9667f6acafb2d7f270f3ee66cf2c3365aed1c915936a4148653d7f6999_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_868d010a9124fb04db38924f9ac62da143b8ba6266014a17e50099c099b6d7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868d010a9124fb04db38924f9ac62da143b8ba6266014a17e50099c099b6d7eb->enter($__internal_868d010a9124fb04db38924f9ac62da143b8ba6266014a17e50099c099b6d7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_868d010a9124fb04db38924f9ac62da143b8ba6266014a17e50099c099b6d7eb->leave($__internal_868d010a9124fb04db38924f9ac62da143b8ba6266014a17e50099c099b6d7eb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f92c28670701364aa1edd3febb1eabc6fad76a71118e5584ccaf1312037a3958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92c28670701364aa1edd3febb1eabc6fad76a71118e5584ccaf1312037a3958->enter($__internal_f92c28670701364aa1edd3febb1eabc6fad76a71118e5584ccaf1312037a3958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f92c28670701364aa1edd3febb1eabc6fad76a71118e5584ccaf1312037a3958->leave($__internal_f92c28670701364aa1edd3febb1eabc6fad76a71118e5584ccaf1312037a3958_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_240d9ca6a8a5c6218db9fc6d641cb6fab204a0dd19a3c30ec6ac57080951398b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240d9ca6a8a5c6218db9fc6d641cb6fab204a0dd19a3c30ec6ac57080951398b->enter($__internal_240d9ca6a8a5c6218db9fc6d641cb6fab204a0dd19a3c30ec6ac57080951398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_240d9ca6a8a5c6218db9fc6d641cb6fab204a0dd19a3c30ec6ac57080951398b->leave($__internal_240d9ca6a8a5c6218db9fc6d641cb6fab204a0dd19a3c30ec6ac57080951398b_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\s\\proje\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
