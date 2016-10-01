<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3182c99368b0c0fd3c223342aae8bbd86342e4b5fc957ccc34691666e7e561c0 extends Twig_Template
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
        $__internal_afcaa250f597f319f4ca16a57541157629714a7e88f7f56296288549c318913e = $this->env->getExtension("native_profiler");
        $__internal_afcaa250f597f319f4ca16a57541157629714a7e88f7f56296288549c318913e->enter($__internal_afcaa250f597f319f4ca16a57541157629714a7e88f7f56296288549c318913e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_afcaa250f597f319f4ca16a57541157629714a7e88f7f56296288549c318913e->leave($__internal_afcaa250f597f319f4ca16a57541157629714a7e88f7f56296288549c318913e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
