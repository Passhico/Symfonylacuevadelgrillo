<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7c5285e2c3c18ee0eecd8d90c06d9ebdc144f44c88791e8e2a1fc5aab75e3dd1 extends Twig_Template
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
        $__internal_540ef569f44eef351d5a9df3fb08fe2d74b64923b9bc1b0845cc3501ed527636 = $this->env->getExtension("native_profiler");
        $__internal_540ef569f44eef351d5a9df3fb08fe2d74b64923b9bc1b0845cc3501ed527636->enter($__internal_540ef569f44eef351d5a9df3fb08fe2d74b64923b9bc1b0845cc3501ed527636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_540ef569f44eef351d5a9df3fb08fe2d74b64923b9bc1b0845cc3501ed527636->leave($__internal_540ef569f44eef351d5a9df3fb08fe2d74b64923b9bc1b0845cc3501ed527636_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
