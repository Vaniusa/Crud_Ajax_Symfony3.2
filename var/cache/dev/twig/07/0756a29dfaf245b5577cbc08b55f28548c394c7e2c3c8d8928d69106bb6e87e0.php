<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d86932557b204edd0a7d3f1e18db48e84c8d3e786a99c084c227e313232a4893 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cfbdc49d085251ba2dfbcb38705d06e6d572dcb15cac7c4e34c0f005001a364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfbdc49d085251ba2dfbcb38705d06e6d572dcb15cac7c4e34c0f005001a364->enter($__internal_5cfbdc49d085251ba2dfbcb38705d06e6d572dcb15cac7c4e34c0f005001a364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_14118f3b3dca406aee7d8dd3333d448116bac53bfc96c1e6480c63d7f55d6970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14118f3b3dca406aee7d8dd3333d448116bac53bfc96c1e6480c63d7f55d6970->enter($__internal_14118f3b3dca406aee7d8dd3333d448116bac53bfc96c1e6480c63d7f55d6970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cfbdc49d085251ba2dfbcb38705d06e6d572dcb15cac7c4e34c0f005001a364->leave($__internal_5cfbdc49d085251ba2dfbcb38705d06e6d572dcb15cac7c4e34c0f005001a364_prof);

        
        $__internal_14118f3b3dca406aee7d8dd3333d448116bac53bfc96c1e6480c63d7f55d6970->leave($__internal_14118f3b3dca406aee7d8dd3333d448116bac53bfc96c1e6480c63d7f55d6970_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4f030b8cbb159522d0b5ce0d6a1428b2c35243b66b9ed37f07e59506cce5dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f030b8cbb159522d0b5ce0d6a1428b2c35243b66b9ed37f07e59506cce5dd0->enter($__internal_e4f030b8cbb159522d0b5ce0d6a1428b2c35243b66b9ed37f07e59506cce5dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d96256896973a502e988771f7f5079c048942b3c1be576f6d9b9561670cca863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96256896973a502e988771f7f5079c048942b3c1be576f6d9b9561670cca863->enter($__internal_d96256896973a502e988771f7f5079c048942b3c1be576f6d9b9561670cca863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d96256896973a502e988771f7f5079c048942b3c1be576f6d9b9561670cca863->leave($__internal_d96256896973a502e988771f7f5079c048942b3c1be576f6d9b9561670cca863_prof);

        
        $__internal_e4f030b8cbb159522d0b5ce0d6a1428b2c35243b66b9ed37f07e59506cce5dd0->leave($__internal_e4f030b8cbb159522d0b5ce0d6a1428b2c35243b66b9ed37f07e59506cce5dd0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/crud_ajax_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
