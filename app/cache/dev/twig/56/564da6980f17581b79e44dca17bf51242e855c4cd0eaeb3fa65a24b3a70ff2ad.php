<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4c6ffdff3910b822135093e78422130b8f66e7d5db5f223e774c5367842ad2ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0198b4531610223ad66da34ffef45769ce147bc0145e215f9dae9894e41d80f9 = $this->env->getExtension("native_profiler");
        $__internal_0198b4531610223ad66da34ffef45769ce147bc0145e215f9dae9894e41d80f9->enter($__internal_0198b4531610223ad66da34ffef45769ce147bc0145e215f9dae9894e41d80f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0198b4531610223ad66da34ffef45769ce147bc0145e215f9dae9894e41d80f9->leave($__internal_0198b4531610223ad66da34ffef45769ce147bc0145e215f9dae9894e41d80f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c1f647d015cc7a275315e6fb6a05c4bac7d927e2e398059a4a54635c76bb6c3 = $this->env->getExtension("native_profiler");
        $__internal_6c1f647d015cc7a275315e6fb6a05c4bac7d927e2e398059a4a54635c76bb6c3->enter($__internal_6c1f647d015cc7a275315e6fb6a05c4bac7d927e2e398059a4a54635c76bb6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6c1f647d015cc7a275315e6fb6a05c4bac7d927e2e398059a4a54635c76bb6c3->leave($__internal_6c1f647d015cc7a275315e6fb6a05c4bac7d927e2e398059a4a54635c76bb6c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_929d33243b1bdf9554e12df2ce33c49da90a00e7e78aacebb27d5b7c3f20c139 = $this->env->getExtension("native_profiler");
        $__internal_929d33243b1bdf9554e12df2ce33c49da90a00e7e78aacebb27d5b7c3f20c139->enter($__internal_929d33243b1bdf9554e12df2ce33c49da90a00e7e78aacebb27d5b7c3f20c139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_929d33243b1bdf9554e12df2ce33c49da90a00e7e78aacebb27d5b7c3f20c139->leave($__internal_929d33243b1bdf9554e12df2ce33c49da90a00e7e78aacebb27d5b7c3f20c139_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd0ae888f6585773618dcf014d83724605cdcffa32abc4397e570d1dbc9ef106 = $this->env->getExtension("native_profiler");
        $__internal_bd0ae888f6585773618dcf014d83724605cdcffa32abc4397e570d1dbc9ef106->enter($__internal_bd0ae888f6585773618dcf014d83724605cdcffa32abc4397e570d1dbc9ef106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bd0ae888f6585773618dcf014d83724605cdcffa32abc4397e570d1dbc9ef106->leave($__internal_bd0ae888f6585773618dcf014d83724605cdcffa32abc4397e570d1dbc9ef106_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
