<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_fd3b3d74a9c3c51515e3beeb7ed88dac661cbd49c72239684d0e55e58b139979 extends Twig_Template
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
        $__internal_be08b5b47b05cbbd93d1f67416143b29bb606e491d4f2a4d4c429d98821f2e5a = $this->env->getExtension("native_profiler");
        $__internal_be08b5b47b05cbbd93d1f67416143b29bb606e491d4f2a4d4c429d98821f2e5a->enter($__internal_be08b5b47b05cbbd93d1f67416143b29bb606e491d4f2a4d4c429d98821f2e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be08b5b47b05cbbd93d1f67416143b29bb606e491d4f2a4d4c429d98821f2e5a->leave($__internal_be08b5b47b05cbbd93d1f67416143b29bb606e491d4f2a4d4c429d98821f2e5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
