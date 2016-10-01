<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3901e8530a97898901f0df53e1416124fa88c7d7de630be1591c8ae54dfd6a62 extends Twig_Template
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
        $__internal_e4ddb9e9b4df52b19c418da335a6134e7ede5889f4af4b72d52aee81be802350 = $this->env->getExtension("native_profiler");
        $__internal_e4ddb9e9b4df52b19c418da335a6134e7ede5889f4af4b72d52aee81be802350->enter($__internal_e4ddb9e9b4df52b19c418da335a6134e7ede5889f4af4b72d52aee81be802350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e4ddb9e9b4df52b19c418da335a6134e7ede5889f4af4b72d52aee81be802350->leave($__internal_e4ddb9e9b4df52b19c418da335a6134e7ede5889f4af4b72d52aee81be802350_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
