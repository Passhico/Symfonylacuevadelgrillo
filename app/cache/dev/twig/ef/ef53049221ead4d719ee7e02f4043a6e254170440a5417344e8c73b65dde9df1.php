<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1e1ac2582742f38f5785cdec1e466f0e6e4e7115790dead180b2388b6060f1f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_199c58927137c94bd45c42d07e25a821d3d1ab75cddf7b55f13ecaaecfc29700 = $this->env->getExtension("native_profiler");
        $__internal_199c58927137c94bd45c42d07e25a821d3d1ab75cddf7b55f13ecaaecfc29700->enter($__internal_199c58927137c94bd45c42d07e25a821d3d1ab75cddf7b55f13ecaaecfc29700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_199c58927137c94bd45c42d07e25a821d3d1ab75cddf7b55f13ecaaecfc29700->leave($__internal_199c58927137c94bd45c42d07e25a821d3d1ab75cddf7b55f13ecaaecfc29700_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0290632b79ed892a80c89e33b07639a99dc157fd91d68c368a209757ce1c936b = $this->env->getExtension("native_profiler");
        $__internal_0290632b79ed892a80c89e33b07639a99dc157fd91d68c368a209757ce1c936b->enter($__internal_0290632b79ed892a80c89e33b07639a99dc157fd91d68c368a209757ce1c936b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0290632b79ed892a80c89e33b07639a99dc157fd91d68c368a209757ce1c936b->leave($__internal_0290632b79ed892a80c89e33b07639a99dc157fd91d68c368a209757ce1c936b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
