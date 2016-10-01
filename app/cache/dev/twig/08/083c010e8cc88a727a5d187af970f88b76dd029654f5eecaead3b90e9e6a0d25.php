<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_845e929e216924482f043438599f7fe23a5044bd9c4dec29c0e1b3f7fe0420db extends Twig_Template
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
        $__internal_70fe821fb4bf5e6a271bd9449391a50740cfdad542c5be56bbc6d8a5c29fcd7d = $this->env->getExtension("native_profiler");
        $__internal_70fe821fb4bf5e6a271bd9449391a50740cfdad542c5be56bbc6d8a5c29fcd7d->enter($__internal_70fe821fb4bf5e6a271bd9449391a50740cfdad542c5be56bbc6d8a5c29fcd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_70fe821fb4bf5e6a271bd9449391a50740cfdad542c5be56bbc6d8a5c29fcd7d->leave($__internal_70fe821fb4bf5e6a271bd9449391a50740cfdad542c5be56bbc6d8a5c29fcd7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
