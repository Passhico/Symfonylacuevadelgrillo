<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3bc63e48683a199c13f3526e6a1287871de8587bab07e11dfd4e544cb840a981 extends Twig_Template
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
        $__internal_145d0fa9cdddc24e43ace78ea4316d420281347652035362645904ecf65d6383 = $this->env->getExtension("native_profiler");
        $__internal_145d0fa9cdddc24e43ace78ea4316d420281347652035362645904ecf65d6383->enter($__internal_145d0fa9cdddc24e43ace78ea4316d420281347652035362645904ecf65d6383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_145d0fa9cdddc24e43ace78ea4316d420281347652035362645904ecf65d6383->leave($__internal_145d0fa9cdddc24e43ace78ea4316d420281347652035362645904ecf65d6383_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
