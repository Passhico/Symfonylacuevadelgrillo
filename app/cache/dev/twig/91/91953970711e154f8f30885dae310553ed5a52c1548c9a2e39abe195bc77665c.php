<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_30c5a0f7e8eefcc9d21c119fc771e9005271a5849f6bcf1eae962098073fbba2 extends Twig_Template
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
        $__internal_24debdfb919a3f6c8c927394194377b013e31ce17dd23278de5ed2ac2c782232 = $this->env->getExtension("native_profiler");
        $__internal_24debdfb919a3f6c8c927394194377b013e31ce17dd23278de5ed2ac2c782232->enter($__internal_24debdfb919a3f6c8c927394194377b013e31ce17dd23278de5ed2ac2c782232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_24debdfb919a3f6c8c927394194377b013e31ce17dd23278de5ed2ac2c782232->leave($__internal_24debdfb919a3f6c8c927394194377b013e31ce17dd23278de5ed2ac2c782232_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
