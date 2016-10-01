<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d5cffcb53537367d52f64c667db0e2d99db3bbd15a7c97d2fecc1656d7039dda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_276d9a55b01fc0974a350fb0e8c01009c0fc1fc42b3a27259b0f390273ee38dd = $this->env->getExtension("native_profiler");
        $__internal_276d9a55b01fc0974a350fb0e8c01009c0fc1fc42b3a27259b0f390273ee38dd->enter($__internal_276d9a55b01fc0974a350fb0e8c01009c0fc1fc42b3a27259b0f390273ee38dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_276d9a55b01fc0974a350fb0e8c01009c0fc1fc42b3a27259b0f390273ee38dd->leave($__internal_276d9a55b01fc0974a350fb0e8c01009c0fc1fc42b3a27259b0f390273ee38dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d38d71034bbabc0d0daf4a85d1a7e5711033b9cda07f09ea22ff42e82bf75ff8 = $this->env->getExtension("native_profiler");
        $__internal_d38d71034bbabc0d0daf4a85d1a7e5711033b9cda07f09ea22ff42e82bf75ff8->enter($__internal_d38d71034bbabc0d0daf4a85d1a7e5711033b9cda07f09ea22ff42e82bf75ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d38d71034bbabc0d0daf4a85d1a7e5711033b9cda07f09ea22ff42e82bf75ff8->leave($__internal_d38d71034bbabc0d0daf4a85d1a7e5711033b9cda07f09ea22ff42e82bf75ff8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ceb83371cd890830372ccec01b2d496c277cdb7f930760c505e8154e320817fe = $this->env->getExtension("native_profiler");
        $__internal_ceb83371cd890830372ccec01b2d496c277cdb7f930760c505e8154e320817fe->enter($__internal_ceb83371cd890830372ccec01b2d496c277cdb7f930760c505e8154e320817fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ceb83371cd890830372ccec01b2d496c277cdb7f930760c505e8154e320817fe->leave($__internal_ceb83371cd890830372ccec01b2d496c277cdb7f930760c505e8154e320817fe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
