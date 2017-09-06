<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dbf079c437dc9867a3e71c37fb9faf5e52971f7f8ed58c17570542010f9227d4 extends Twig_Template
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
        $__internal_583736a384bf28e5f194a48af7934b0448f81504f9d9b5003bdce5f601d6dae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583736a384bf28e5f194a48af7934b0448f81504f9d9b5003bdce5f601d6dae2->enter($__internal_583736a384bf28e5f194a48af7934b0448f81504f9d9b5003bdce5f601d6dae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_314fb63288cfc3612ba16a277e58f0b0cf9316dc0e6eec318f5aed2d0b21f670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314fb63288cfc3612ba16a277e58f0b0cf9316dc0e6eec318f5aed2d0b21f670->enter($__internal_314fb63288cfc3612ba16a277e58f0b0cf9316dc0e6eec318f5aed2d0b21f670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_583736a384bf28e5f194a48af7934b0448f81504f9d9b5003bdce5f601d6dae2->leave($__internal_583736a384bf28e5f194a48af7934b0448f81504f9d9b5003bdce5f601d6dae2_prof);

        
        $__internal_314fb63288cfc3612ba16a277e58f0b0cf9316dc0e6eec318f5aed2d0b21f670->leave($__internal_314fb63288cfc3612ba16a277e58f0b0cf9316dc0e6eec318f5aed2d0b21f670_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1807116361236db00afff77ff17bcdd3912ef83352cea0845acb4dacbfbc7d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1807116361236db00afff77ff17bcdd3912ef83352cea0845acb4dacbfbc7d5->enter($__internal_b1807116361236db00afff77ff17bcdd3912ef83352cea0845acb4dacbfbc7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cf821371a5e1ffa4853a03e4038760808722694cece692b8e999589bd8973c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf821371a5e1ffa4853a03e4038760808722694cece692b8e999589bd8973c54->enter($__internal_cf821371a5e1ffa4853a03e4038760808722694cece692b8e999589bd8973c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cf821371a5e1ffa4853a03e4038760808722694cece692b8e999589bd8973c54->leave($__internal_cf821371a5e1ffa4853a03e4038760808722694cece692b8e999589bd8973c54_prof);

        
        $__internal_b1807116361236db00afff77ff17bcdd3912ef83352cea0845acb4dacbfbc7d5->leave($__internal_b1807116361236db00afff77ff17bcdd3912ef83352cea0845acb4dacbfbc7d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a985e183c7ca6fc959086c741f9e1d38cd7058e559873951b266d307efd46634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a985e183c7ca6fc959086c741f9e1d38cd7058e559873951b266d307efd46634->enter($__internal_a985e183c7ca6fc959086c741f9e1d38cd7058e559873951b266d307efd46634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_165568fb0ca77b16a12297158580a945fd2ecda9e02b814c08f38df7d3dae691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165568fb0ca77b16a12297158580a945fd2ecda9e02b814c08f38df7d3dae691->enter($__internal_165568fb0ca77b16a12297158580a945fd2ecda9e02b814c08f38df7d3dae691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_165568fb0ca77b16a12297158580a945fd2ecda9e02b814c08f38df7d3dae691->leave($__internal_165568fb0ca77b16a12297158580a945fd2ecda9e02b814c08f38df7d3dae691_prof);

        
        $__internal_a985e183c7ca6fc959086c741f9e1d38cd7058e559873951b266d307efd46634->leave($__internal_a985e183c7ca6fc959086c741f9e1d38cd7058e559873951b266d307efd46634_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93d33d7e1ad1d7da51c706bb4c2101637a4e5ff058f583c9eef864d46cf7adc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d33d7e1ad1d7da51c706bb4c2101637a4e5ff058f583c9eef864d46cf7adc4->enter($__internal_93d33d7e1ad1d7da51c706bb4c2101637a4e5ff058f583c9eef864d46cf7adc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f580eb68cd7a5775b8161b76a0c4630e79089c06c6a53dcd69e5acf8739a735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f580eb68cd7a5775b8161b76a0c4630e79089c06c6a53dcd69e5acf8739a735->enter($__internal_2f580eb68cd7a5775b8161b76a0c4630e79089c06c6a53dcd69e5acf8739a735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f580eb68cd7a5775b8161b76a0c4630e79089c06c6a53dcd69e5acf8739a735->leave($__internal_2f580eb68cd7a5775b8161b76a0c4630e79089c06c6a53dcd69e5acf8739a735_prof);

        
        $__internal_93d33d7e1ad1d7da51c706bb4c2101637a4e5ff058f583c9eef864d46cf7adc4->leave($__internal_93d33d7e1ad1d7da51c706bb4c2101637a4e5ff058f583c9eef864d46cf7adc4_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/crud_ajax_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
