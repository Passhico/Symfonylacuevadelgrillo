<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e970e20b7fb3a1d10d459d915f1c1015d38aa9cd66aa8223d9668b675a07881b extends Twig_Template
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
        $__internal_a8fe4cee80901ac976f00245de6116973ef27c66e8b33e6ba92779aca43bc1ae = $this->env->getExtension("native_profiler");
        $__internal_a8fe4cee80901ac976f00245de6116973ef27c66e8b33e6ba92779aca43bc1ae->enter($__internal_a8fe4cee80901ac976f00245de6116973ef27c66e8b33e6ba92779aca43bc1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a8fe4cee80901ac976f00245de6116973ef27c66e8b33e6ba92779aca43bc1ae->leave($__internal_a8fe4cee80901ac976f00245de6116973ef27c66e8b33e6ba92779aca43bc1ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
