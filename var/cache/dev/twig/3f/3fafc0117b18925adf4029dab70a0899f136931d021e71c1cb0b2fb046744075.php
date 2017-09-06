<?php

/* VaniusaBundle:Layouts:layout.html.twig */
class __TwigTemplate_b1d9f4f040e39cb15f372e61a74075b11f9db300db0cf33005f0add1073469d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d67b391090dbeb636978722285169b987035f61970e4bbc8ad6787151c038f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67b391090dbeb636978722285169b987035f61970e4bbc8ad6787151c038f8e->enter($__internal_d67b391090dbeb636978722285169b987035f61970e4bbc8ad6787151c038f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VaniusaBundle:Layouts:layout.html.twig"));

        $__internal_074053ddeb95054b51becda9e4d6ff48e782d058329a2b695de70caff589ef10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074053ddeb95054b51becda9e4d6ff48e782d058329a2b695de70caff589ef10->enter($__internal_074053ddeb95054b51becda9e4d6ff48e782d058329a2b695de70caff589ef10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VaniusaBundle:Layouts:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body onload=\"verProductos()\">
<form method=\"post\" id=\"formdata\" class=\"form_data\">
    <h3>Nuevo producto</h3>
    <div class=\"form-group\">
        <label for=\"nombre\">Nombre producto</label>
        <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\" placeholder=\"Nombre producto\">
    </div>
    <div class=\"form-group\">
        <label for=\"categoria\">Categoria</label>
        <input type=\"text\" class=\"form-control\" name=\"categoria\" id=\"categoria\" placeholder=\"Categoria\">
    </div>
    <div class=\"form-group\">
        <label for=\"descripcion\">Descripcion del producto</label>
        <textarea rows=\"4\" cols=\"50\" class=\"form-control\" name=\"descripcion\" id=\"descripcion\"
                  placeholder=\"Descripcion\"></textarea>
    </div>
    <div class=\"form-group\">
        <label for=\"precio\">Precio</label>
        <input type=\"text\" class=\"form-control\" name=\"precio\" id=\"precio\" placeholder=\"Precio\">
    </div>
    <button type=\"submit\" class=\"btn btn-info glyphicon glyphicon-floppy-disk\">&nbsp;Insertar</button>
    <button type='button' onclick='verProductos()' class='btn btn-success glyphicon glyphicon-list' id=\"bottonLista\">&nbsp;Lista</button>
</form>
<div id=\"caja\" class=\"caja\"></div>
</body>
</html>
";
        
        $__internal_d67b391090dbeb636978722285169b987035f61970e4bbc8ad6787151c038f8e->leave($__internal_d67b391090dbeb636978722285169b987035f61970e4bbc8ad6787151c038f8e_prof);

        
        $__internal_074053ddeb95054b51becda9e4d6ff48e782d058329a2b695de70caff589ef10->leave($__internal_074053ddeb95054b51becda9e4d6ff48e782d058329a2b695de70caff589ef10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4612747807ac786a6837c56fcd41300809123e177b2a657154b0c46c87ff4c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4612747807ac786a6837c56fcd41300809123e177b2a657154b0c46c87ff4c27->enter($__internal_4612747807ac786a6837c56fcd41300809123e177b2a657154b0c46c87ff4c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ebbcb7b59395118f787113d06ae3184d535c6bc500ae8376e820d6f1123eef65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbcb7b59395118f787113d06ae3184d535c6bc500ae8376e820d6f1123eef65->enter($__internal_ebbcb7b59395118f787113d06ae3184d535c6bc500ae8376e820d6f1123eef65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ebbcb7b59395118f787113d06ae3184d535c6bc500ae8376e820d6f1123eef65->leave($__internal_ebbcb7b59395118f787113d06ae3184d535c6bc500ae8376e820d6f1123eef65_prof);

        
        $__internal_4612747807ac786a6837c56fcd41300809123e177b2a657154b0c46c87ff4c27->leave($__internal_4612747807ac786a6837c56fcd41300809123e177b2a657154b0c46c87ff4c27_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_873432240a7a3d3126aef62ef41c0e2baf4d0f17e62abdd3111ebc0251d7dd4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_873432240a7a3d3126aef62ef41c0e2baf4d0f17e62abdd3111ebc0251d7dd4a->enter($__internal_873432240a7a3d3126aef62ef41c0e2baf4d0f17e62abdd3111ebc0251d7dd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d00ce791fa2f84fb0fb7aa96401f5084b477dd24d365bf32a2388ce4abff24db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00ce791fa2f84fb0fb7aa96401f5084b477dd24d365bf32a2388ce4abff24db->enter($__internal_d00ce791fa2f84fb0fb7aa96401f5084b477dd24d365bf32a2388ce4abff24db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link type=\"text/css\" rel=stylesheet href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=stylesheet href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/estilos.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_d00ce791fa2f84fb0fb7aa96401f5084b477dd24d365bf32a2388ce4abff24db->leave($__internal_d00ce791fa2f84fb0fb7aa96401f5084b477dd24d365bf32a2388ce4abff24db_prof);

        
        $__internal_873432240a7a3d3126aef62ef41c0e2baf4d0f17e62abdd3111ebc0251d7dd4a->leave($__internal_873432240a7a3d3126aef62ef41c0e2baf4d0f17e62abdd3111ebc0251d7dd4a_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26d02d116c96fe4fc14242b4d3a98d1fdec547eed6595b5f66be13bb4c9ea743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d02d116c96fe4fc14242b4d3a98d1fdec547eed6595b5f66be13bb4c9ea743->enter($__internal_26d02d116c96fe4fc14242b4d3a98d1fdec547eed6595b5f66be13bb4c9ea743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_30a104977f7e3968a23226ea7408bd77c03bc0a814a3e3d67094a3ae8d068107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a104977f7e3968a23226ea7408bd77c03bc0a814a3e3d67094a3ae8d068107->enter($__internal_30a104977f7e3968a23226ea7408bd77c03bc0a814a3e3d67094a3ae8d068107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/sripts.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/insertar-producto-validator.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_30a104977f7e3968a23226ea7408bd77c03bc0a814a3e3d67094a3ae8d068107->leave($__internal_30a104977f7e3968a23226ea7408bd77c03bc0a814a3e3d67094a3ae8d068107_prof);

        
        $__internal_26d02d116c96fe4fc14242b4d3a98d1fdec547eed6595b5f66be13bb4c9ea743->leave($__internal_26d02d116c96fe4fc14242b4d3a98d1fdec547eed6595b5f66be13bb4c9ea743_prof);

    }

    public function getTemplateName()
    {
        return "VaniusaBundle:Layouts:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 15,  149 => 14,  145 => 13,  141 => 12,  136 => 11,  127 => 10,  115 => 8,  110 => 7,  101 => 6,  83 => 5,  43 => 17,  40 => 10,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link type=\"text/css\" rel=stylesheet href=\"{{ asset('assets/css/bootstrap.css') }}\">
        <link type=\"text/css\" rel=stylesheet href=\"{{ asset('assets/css/estilos.css') }}\">
    {% endblock %}
    {% block javascripts %}
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/jquery-3.1.1.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/bootstrap.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/sripts.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/insertar-producto-validator.js') }}\"></script>
        <script src=\"{{ asset('assets/js/jquery.validate.js') }}\"></script>
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body onload=\"verProductos()\">
<form method=\"post\" id=\"formdata\" class=\"form_data\">
    <h3>Nuevo producto</h3>
    <div class=\"form-group\">
        <label for=\"nombre\">Nombre producto</label>
        <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\" placeholder=\"Nombre producto\">
    </div>
    <div class=\"form-group\">
        <label for=\"categoria\">Categoria</label>
        <input type=\"text\" class=\"form-control\" name=\"categoria\" id=\"categoria\" placeholder=\"Categoria\">
    </div>
    <div class=\"form-group\">
        <label for=\"descripcion\">Descripcion del producto</label>
        <textarea rows=\"4\" cols=\"50\" class=\"form-control\" name=\"descripcion\" id=\"descripcion\"
                  placeholder=\"Descripcion\"></textarea>
    </div>
    <div class=\"form-group\">
        <label for=\"precio\">Precio</label>
        <input type=\"text\" class=\"form-control\" name=\"precio\" id=\"precio\" placeholder=\"Precio\">
    </div>
    <button type=\"submit\" class=\"btn btn-info glyphicon glyphicon-floppy-disk\">&nbsp;Insertar</button>
    <button type='button' onclick='verProductos()' class='btn btn-success glyphicon glyphicon-list' id=\"bottonLista\">&nbsp;Lista</button>
</form>
<div id=\"caja\" class=\"caja\"></div>
</body>
</html>
", "VaniusaBundle:Layouts:layout.html.twig", "/var/www/html/crud_ajax_symfony/src/VaniusaBundle/Resources/views/Layouts/layout.html.twig");
    }
}
