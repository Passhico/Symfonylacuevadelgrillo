<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_675ee679cd1dce7307f4a8f62e4ac26dfe2216a541cf36e68e5d20edb5137a18 extends Twig_Template
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
        $__internal_802930dffc685439d6ac5bb8cfab7e2cde14ae71f1a1ddcb87aafcd0466667fc = $this->env->getExtension("native_profiler");
        $__internal_802930dffc685439d6ac5bb8cfab7e2cde14ae71f1a1ddcb87aafcd0466667fc->enter($__internal_802930dffc685439d6ac5bb8cfab7e2cde14ae71f1a1ddcb87aafcd0466667fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_802930dffc685439d6ac5bb8cfab7e2cde14ae71f1a1ddcb87aafcd0466667fc->leave($__internal_802930dffc685439d6ac5bb8cfab7e2cde14ae71f1a1ddcb87aafcd0466667fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
