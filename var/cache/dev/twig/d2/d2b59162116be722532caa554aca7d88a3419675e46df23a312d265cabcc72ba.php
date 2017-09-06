<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_463408817b201d05f7d37caf2479f53a6ccae66ad5bcf4a87a202f242bac93aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4e0ee838e5ad249ad094ee19aba801709c0239b611225d6aef06495dee24b1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0ee838e5ad249ad094ee19aba801709c0239b611225d6aef06495dee24b1fc->enter($__internal_4e0ee838e5ad249ad094ee19aba801709c0239b611225d6aef06495dee24b1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f03166f40ab30bd100144c3f593c5aab124d44cb6b7e8786877f957970cc9dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03166f40ab30bd100144c3f593c5aab124d44cb6b7e8786877f957970cc9dac->enter($__internal_f03166f40ab30bd100144c3f593c5aab124d44cb6b7e8786877f957970cc9dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e0ee838e5ad249ad094ee19aba801709c0239b611225d6aef06495dee24b1fc->leave($__internal_4e0ee838e5ad249ad094ee19aba801709c0239b611225d6aef06495dee24b1fc_prof);

        
        $__internal_f03166f40ab30bd100144c3f593c5aab124d44cb6b7e8786877f957970cc9dac->leave($__internal_f03166f40ab30bd100144c3f593c5aab124d44cb6b7e8786877f957970cc9dac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef334e20a61f7ef52df5bf35d477d5e7d1849a3002d14c602443238309243bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef334e20a61f7ef52df5bf35d477d5e7d1849a3002d14c602443238309243bf4->enter($__internal_ef334e20a61f7ef52df5bf35d477d5e7d1849a3002d14c602443238309243bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57994b3bb4ffeae48e899e19f010b2566207123436eea98d18532062f0e2ae06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57994b3bb4ffeae48e899e19f010b2566207123436eea98d18532062f0e2ae06->enter($__internal_57994b3bb4ffeae48e899e19f010b2566207123436eea98d18532062f0e2ae06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_57994b3bb4ffeae48e899e19f010b2566207123436eea98d18532062f0e2ae06->leave($__internal_57994b3bb4ffeae48e899e19f010b2566207123436eea98d18532062f0e2ae06_prof);

        
        $__internal_ef334e20a61f7ef52df5bf35d477d5e7d1849a3002d14c602443238309243bf4->leave($__internal_ef334e20a61f7ef52df5bf35d477d5e7d1849a3002d14c602443238309243bf4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_58ab7ca6759fa25b92692a0ba831b585ce516c556e645453003094652edf837a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ab7ca6759fa25b92692a0ba831b585ce516c556e645453003094652edf837a->enter($__internal_58ab7ca6759fa25b92692a0ba831b585ce516c556e645453003094652edf837a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_33fe2bc817335d3d3c7f0213915bfcc70eacb2d8c533fd51a5597573e8f6c3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fe2bc817335d3d3c7f0213915bfcc70eacb2d8c533fd51a5597573e8f6c3a9->enter($__internal_33fe2bc817335d3d3c7f0213915bfcc70eacb2d8c533fd51a5597573e8f6c3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_33fe2bc817335d3d3c7f0213915bfcc70eacb2d8c533fd51a5597573e8f6c3a9->leave($__internal_33fe2bc817335d3d3c7f0213915bfcc70eacb2d8c533fd51a5597573e8f6c3a9_prof);

        
        $__internal_58ab7ca6759fa25b92692a0ba831b585ce516c556e645453003094652edf837a->leave($__internal_58ab7ca6759fa25b92692a0ba831b585ce516c556e645453003094652edf837a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d058907c653b9bcdd52d5b6a0622ad825d4cbc3b603d92542f9bb12891f6569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d058907c653b9bcdd52d5b6a0622ad825d4cbc3b603d92542f9bb12891f6569->enter($__internal_4d058907c653b9bcdd52d5b6a0622ad825d4cbc3b603d92542f9bb12891f6569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e450f735dda1cf96ee8b7766d6b99fc748b40d25d93ebb310c6223e49707b67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e450f735dda1cf96ee8b7766d6b99fc748b40d25d93ebb310c6223e49707b67b->enter($__internal_e450f735dda1cf96ee8b7766d6b99fc748b40d25d93ebb310c6223e49707b67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e450f735dda1cf96ee8b7766d6b99fc748b40d25d93ebb310c6223e49707b67b->leave($__internal_e450f735dda1cf96ee8b7766d6b99fc748b40d25d93ebb310c6223e49707b67b_prof);

        
        $__internal_4d058907c653b9bcdd52d5b6a0622ad825d4cbc3b603d92542f9bb12891f6569->leave($__internal_4d058907c653b9bcdd52d5b6a0622ad825d4cbc3b603d92542f9bb12891f6569_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/crud_ajax_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
