<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d2c5de23c9a9d45bdf752b4bd81c7c13d4c7abb5aa40764afc2e1d1de7f36da6 extends Twig_Template
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
        $__internal_6997d2087ff0b4b13890f7570728d4a70e79e87f4e1363c8f80d4a10ac5b2720 = $this->env->getExtension("native_profiler");
        $__internal_6997d2087ff0b4b13890f7570728d4a70e79e87f4e1363c8f80d4a10ac5b2720->enter($__internal_6997d2087ff0b4b13890f7570728d4a70e79e87f4e1363c8f80d4a10ac5b2720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6997d2087ff0b4b13890f7570728d4a70e79e87f4e1363c8f80d4a10ac5b2720->leave($__internal_6997d2087ff0b4b13890f7570728d4a70e79e87f4e1363c8f80d4a10ac5b2720_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
