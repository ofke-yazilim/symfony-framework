<?php

/* currancy/currancyList.html.twig */
class __TwigTemplate_e9e8478398103737afea2605d7620dee017244f6462f5418b0d93abc964742e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99e8bdc025abb321837cfdfbe6648cd02f2a7bdc87c7acfaab37bb1ae4d12f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e8bdc025abb321837cfdfbe6648cd02f2a7bdc87c7acfaab37bb1ae4d12f82->enter($__internal_99e8bdc025abb321837cfdfbe6648cd02f2a7bdc87c7acfaab37bb1ae4d12f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currancy/currancyList.html.twig"));

        // line 1
        echo "
<h1>Kurlar Listeleniyor</h1>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["curranciesUSDSelling"] ?? $this->getContext($context, "curranciesUSDSelling")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 4
            echo "   <div>
       <table>
           <tr>
               <td>Dolar Satış Fiyatına Göre En Düşük : </td>
               <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["key"], "selling", array()), "html", null, true);
            echo " TL</td>
               <td>
                  ";
            // line 10
            if (($this->getAttribute($context["key"], "location", array()) == 1)) {
                echo "Türkiye Cumhuriyeti Merkez Bankası
                  ";
            } elseif (($this->getAttribute(            // line 11
$context["key"], "location", array()) == 2)) {
                echo "Doviz.com";
            } else {
                // line 12
                echo "                  Doviz.net";
            }
            // line 13
            echo "               </td>
           </tr>
       </table>
   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["curranciesUSDBuying"] ?? $this->getContext($context, "curranciesUSDBuying")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 20
            echo "   <div>
       <table>
           <tr>
               <td>Dolar Alış Fiyatına Göre En Düşük : </td>
               <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["key"], "selling", array()), "html", null, true);
            echo " TL</td>
               <td>
                  ";
            // line 26
            if (($this->getAttribute($context["key"], "location", array()) == 1)) {
                echo "Türkiye Cumhuriyeti Merkez Bankası
                  ";
            } elseif (($this->getAttribute(            // line 27
$context["key"], "location", array()) == 2)) {
                echo "Doviz.com";
            } else {
                // line 28
                echo "                  Doviz.net";
            }
            // line 29
            echo "               </td>
           </tr>
       </table>
   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["curranciesEURSelling"] ?? $this->getContext($context, "curranciesEURSelling")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 36
            echo "   <div>
       <table>
           <tr>
               <td>Euro Satış Fiyatına Göre En Düşük : </td>
               <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["key"], "selling", array()), "html", null, true);
            echo " TL</td>
               <td>
                  ";
            // line 42
            if (($this->getAttribute($context["key"], "location", array()) == 1)) {
                echo "Türkiye Cumhuriyeti Merkez Bankası
                  ";
            } elseif (($this->getAttribute(            // line 43
$context["key"], "location", array()) == 2)) {
                echo "Doviz.com";
            } else {
                // line 44
                echo "                  Doviz.net";
            }
            // line 45
            echo "               </td>
           </tr>
       </table>
   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["curranciesEURBuying"] ?? $this->getContext($context, "curranciesEURBuying")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 52
            echo "   <div>
       <table>
           <tr>
               <td>Euro Alış Fiyatına Göre En Düşük : </td>
               <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["key"], "selling", array()), "html", null, true);
            echo " TL</td>
               <td>
                  ";
            // line 58
            if (($this->getAttribute($context["key"], "location", array()) == 1)) {
                echo "Türkiye Cumhuriyeti Merkez Bankası
                  ";
            } elseif (($this->getAttribute(            // line 59
$context["key"], "location", array()) == 2)) {
                echo "Doviz.com";
            } else {
                // line 60
                echo "                  Doviz.net";
            }
            // line 61
            echo "               </td>
           </tr>
       </table>
   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_99e8bdc025abb321837cfdfbe6648cd02f2a7bdc87c7acfaab37bb1ae4d12f82->leave($__internal_99e8bdc025abb321837cfdfbe6648cd02f2a7bdc87c7acfaab37bb1ae4d12f82_prof);

    }

    public function getTemplateName()
    {
        return "currancy/currancyList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 61,  166 => 60,  162 => 59,  158 => 58,  153 => 56,  147 => 52,  143 => 51,  140 => 50,  130 => 45,  127 => 44,  123 => 43,  119 => 42,  114 => 40,  108 => 36,  104 => 35,  101 => 34,  91 => 29,  88 => 28,  84 => 27,  80 => 26,  75 => 24,  69 => 20,  65 => 19,  62 => 18,  52 => 13,  49 => 12,  45 => 11,  41 => 10,  36 => 8,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<h1>Kurlar Listeleniyor</h1>
{% for key in curranciesUSDSelling %}
   <div>
       <table>
           <tr>
               <td>Dolar Satış Fiyatına Göre En Düşük : </td>
               <td>{{ key.selling }} TL</td>
               <td>
                  {%if key.location ==1 %}Türkiye Cumhuriyeti Merkez Bankası
                  {%elseif key.location==2%}Doviz.com{%else%}
                  Doviz.net{%endif%}
               </td>
           </tr>
       </table>
   </div>
{% endfor %}
    
{% for key in curranciesUSDBuying %}
   <div>
       <table>
           <tr>
               <td>Dolar Alış Fiyatına Göre En Düşük : </td>
               <td>{{ key.selling }} TL</td>
               <td>
                  {%if key.location ==1 %}Türkiye Cumhuriyeti Merkez Bankası
                  {%elseif key.location==2%}Doviz.com{%else%}
                  Doviz.net{%endif%}
               </td>
           </tr>
       </table>
   </div>
{% endfor %}

{% for key in curranciesEURSelling %}
   <div>
       <table>
           <tr>
               <td>Euro Satış Fiyatına Göre En Düşük : </td>
               <td>{{ key.selling }} TL</td>
               <td>
                  {%if key.location ==1 %}Türkiye Cumhuriyeti Merkez Bankası
                  {%elseif key.location==2%}Doviz.com{%else%}
                  Doviz.net{%endif%}
               </td>
           </tr>
       </table>
   </div>
{% endfor %}
    
{% for key in curranciesEURBuying %}
   <div>
       <table>
           <tr>
               <td>Euro Alış Fiyatına Göre En Düşük : </td>
               <td>{{ key.selling }} TL</td>
               <td>
                  {%if key.location ==1 %}Türkiye Cumhuriyeti Merkez Bankası
                  {%elseif key.location==2%}Doviz.com{%else%}
                  Doviz.net{%endif%}
               </td>
           </tr>
       </table>
   </div>
{% endfor %}", "currancy/currancyList.html.twig", "C:\\wamp64\\www\\s\\proje\\app\\Resources\\views\\currancy\\currancyList.html.twig");
    }
}
