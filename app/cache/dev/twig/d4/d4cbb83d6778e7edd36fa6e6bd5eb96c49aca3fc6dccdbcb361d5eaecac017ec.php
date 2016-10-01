<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d6ed7ce5a15bb397f525563fccfc8baa2876a88caff6d1c5d03be12e5177b948 extends Twig_Template
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
        $__internal_77ee7c5141267a0190bf59c08e2e5a3611758d2cd124136d55094654279f460a = $this->env->getExtension("native_profiler");
        $__internal_77ee7c5141267a0190bf59c08e2e5a3611758d2cd124136d55094654279f460a->enter($__internal_77ee7c5141267a0190bf59c08e2e5a3611758d2cd124136d55094654279f460a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_77ee7c5141267a0190bf59c08e2e5a3611758d2cd124136d55094654279f460a->leave($__internal_77ee7c5141267a0190bf59c08e2e5a3611758d2cd124136d55094654279f460a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
