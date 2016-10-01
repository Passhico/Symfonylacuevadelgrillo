<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_5d4e3f06a7138dc41d3de2b714cb14e2ee320095b52e2b347bd08ef23866dc26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf4248a696492c1de86ca5089905ae43ade62e3b0ff620fab8b38712df4d71d7 = $this->env->getExtension("native_profiler");
        $__internal_bf4248a696492c1de86ca5089905ae43ade62e3b0ff620fab8b38712df4d71d7->enter($__internal_bf4248a696492c1de86ca5089905ae43ade62e3b0ff620fab8b38712df4d71d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf4248a696492c1de86ca5089905ae43ade62e3b0ff620fab8b38712df4d71d7->leave($__internal_bf4248a696492c1de86ca5089905ae43ade62e3b0ff620fab8b38712df4d71d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f27cdbb590f71f8426a42e0646e85b7c7f916aa0d27098604102266c79b9c48d = $this->env->getExtension("native_profiler");
        $__internal_f27cdbb590f71f8426a42e0646e85b7c7f916aa0d27098604102266c79b9c48d->enter($__internal_f27cdbb590f71f8426a42e0646e85b7c7f916aa0d27098604102266c79b9c48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f27cdbb590f71f8426a42e0646e85b7c7f916aa0d27098604102266c79b9c48d->leave($__internal_f27cdbb590f71f8426a42e0646e85b7c7f916aa0d27098604102266c79b9c48d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb4c7b74ff5fccc0b1e9f7f18d480bd29f9cc1f22f40d5c54849494a2f37331c = $this->env->getExtension("native_profiler");
        $__internal_cb4c7b74ff5fccc0b1e9f7f18d480bd29f9cc1f22f40d5c54849494a2f37331c->enter($__internal_cb4c7b74ff5fccc0b1e9f7f18d480bd29f9cc1f22f40d5c54849494a2f37331c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_cb4c7b74ff5fccc0b1e9f7f18d480bd29f9cc1f22f40d5c54849494a2f37331c->leave($__internal_cb4c7b74ff5fccc0b1e9f7f18d480bd29f9cc1f22f40d5c54849494a2f37331c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ccb4106ef532259962e37ae50c289537b67cc282794c611cecf3f9ba803a699 = $this->env->getExtension("native_profiler");
        $__internal_1ccb4106ef532259962e37ae50c289537b67cc282794c611cecf3f9ba803a699->enter($__internal_1ccb4106ef532259962e37ae50c289537b67cc282794c611cecf3f9ba803a699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_1ccb4106ef532259962e37ae50c289537b67cc282794c611cecf3f9ba803a699->leave($__internal_1ccb4106ef532259962e37ae50c289537b67cc282794c611cecf3f9ba803a699_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_dbbc83f90533cc91ce27add961361ec2bdea295ff3a3068588c081fcdec38498 = $this->env->getExtension("native_profiler");
        $__internal_dbbc83f90533cc91ce27add961361ec2bdea295ff3a3068588c081fcdec38498->enter($__internal_dbbc83f90533cc91ce27add961361ec2bdea295ff3a3068588c081fcdec38498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_dbbc83f90533cc91ce27add961361ec2bdea295ff3a3068588c081fcdec38498->leave($__internal_dbbc83f90533cc91ce27add961361ec2bdea295ff3a3068588c081fcdec38498_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
